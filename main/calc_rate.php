<?php
require_once 'dbconnect.php';

if(isset($_POST["ok"]))
{
    
    
  $id=$_GET["rateid"];
  $givenrate=$_POST["inputRate"];
  //echo $id." ".$givenrate;
  $sql="update rating set totalRate=totalRate+$givenrate, userRated=userRated+1,avg_rating=(totalRate/userRated) where car_id=$id;";
  if(mysqli_query($conn,$sql))
  {
    echo "rating updated successfully!!";
    header("Location: rating_page.php");
  }
  else{
    echo "not rate update";
  }
  /*$total=0;
  $user=0;
  $avg=0;
  $sql="select totalRate,userRated,avg_rating from rating where car_id=$id;";


   if($result=mysqli_query($conn,$sql)==true)
   {
      $cnt=mysqli_num_rows($result);
      if($cnt>0)
      {
        while($row=mysqli_fetch_assoc($result))
        {

            $total=$row['totalRate'];
            $user=$row['userRated'];
            $avg=$row['avg_rating'];

        }
        

          
      }
   }
   else 
   {
    echo " ";
   }*/


}
?>