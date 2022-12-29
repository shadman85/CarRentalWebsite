<?php
require_once 'companyTimeout.php';
?>
<?php
require_once 'dbconnect.php';
$psw=$id=$model=$brand=$startdate=$enddate=$cost=$status=$filename="";
$imgerror="";
$psw=$_POST['insadminpassword'];
$id=$_POST["rentcarID"];
$model=$_POST["rentcarModel"];
$brand=$_POST["rentcarBrand"];
$startdate=$_POST["startDate"];
$enddate=$_POST["endDate"];
$cost=$_POST["cost_per_hour"];
$status=$_POST["status"];

$sql="select comp_password from company where comp_password='$psw';";
if($result=mysqli_query($conn,$sql))
{
    $row_num=mysqli_num_rows($result);
    if($row_num>0)
    {
      if(isset($_POST["submit_img"]))
{
    $filename=$_FILES['image']['name'];
    $tmp_loc=$_FILES['image']['tmp_name'];
    $filetype=$_FILES['image']['type'];
    $uploc="rentcarimages/".$filename;

    if($filetype=='image/jpeg' || $filetype=='image/jpg' || $filetype=='image/png')
   {

      if(move_uploaded_file($tmp_loc,$uploc))
      {
         echo "image uploaded";
      }
      else{
         $imgerror="not uploaded";
      }


   }
   else{
      $imgerror="please upload image type file";
      
   }
   if(empty($id) || empty($model) || empty($brand) || empty($startdate) || empty($enddate) || empty($cost) || empty($status) || empty($filename))
   {

    echo "Please fill up all the fields";
   }
   else if(!empty($imgerror))
   {
      echo $imgerror;
   }
   else{

   $sql="insert into rentcar(rentcarID,rentcarModel,rentcarBrand,startDate,endDate,cost_per_hour,rentcarStatus,rentcarimage) values($id,'$model','$brand','$startdate','$enddate',$cost,'$status','$filename');";

   if(mysqli_query($conn,$sql))
   {
      $sql2="insert into rating(car_id,totalRate,userRated,avg_rating) values($id,0,0,0);";
      mysqli_query($conn,$sql2);
      echo "inserted succesfully!";
   }
   else{
      echo "insertion failed!!";
   }
   }



    }
}
else{
   echo "paswword doesnt match!!";
}

}
