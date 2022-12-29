<?php
require_once 'companyTimeout.php';
?>
<?php

require_once 'dbconnect.php';

$carid=$_POST['rentcarID'];
$cmp=$_POST['compname'];
 $p=$_POST['adminpassword'];

$sql="select comp_password from company where comp_password='$p';";
if($result=mysqli_query($conn,$sql))
{
    $row_num=mysqli_num_rows($result);
    if($row_num>0)
    {
        echo "password checked";
        $sql2="select * from rentcar join company on  rentcar.rentcarBrand=company.comp_username;";
      if($qry=mysqli_query($conn,$sql2))
       {
            $cnt=mysqli_num_rows($qry);
            if($cnt>0)
            {
                echo "id and name checked";

                 if(isset($_POST['submit_up_startDate']))
        {
           
            $startdate=$_POST['up_startDate'];
            $sql="update rentcar SET startDate='$startdate' where rentcarID=$carid AND rentcarBrand='$cmp';";
            if(mysqli_query($conn,$sql))
            {
                echo "startdate updated succesfully!!";
            }
            else{
                echo "startdate  failed to update! ";
            }
        }
        if(isset($_POST['submit_up_endDate']))
        {
       
            $startdate=$_POST['up_endDate'];
            $sql="update rentcar SET startDate='$enddate' where rentcarID=$carid AND rentcarBrand='$cmp';";
            if(mysqli_query($conn,$sql))
            {
                echo "enddate updated succesfully!!";
            }
            else{
                echo "enddate  failed to update! ";
            }
        }
        if(isset($_POST['submit_up_cost']))
        {
            
            $cost=$_POST['up_cost_per_hour'];
            $sql="update rentcar SET cost_per_hour=$cost where rentcarID=$carid AND rentcarBrand='$cmp';";
            if(mysqli_query($conn,$sql))
            {
                echo "cost updated succesfully!!";
            }
            else{
                echo "cost  failed to update! ";
            }
        }
        if(isset($_POST['submit_up_status']))
        {
           
            $status=$_POST['up_status'];
            $sql="update rentcar SET rentcarStatus='$status' where rentcarID=$carid AND rentcarBrand='$cmp';";
            if(mysqli_query($conn,$sql))
            {
                echo "status updated succesfully!!";
            }
            else{
                echo "status  failed to update! ";
            }
        }
        if(isset($_POST['submit_up_img']))
        {
           
            $filename=$_FILES['image']['name'];
            $tmp_loc=$_FILES['image']['tmp_name'];
            $filetype=$_FILES['image']['type'];
            $uploc="rentcarimages/".$filename;
          $imagerror="";
            if($filetype=='image/jpeg' || $filetype=='image/jpg' || $filetype=='image/png')
           {
        
              if(!move_uploaded_file($tmp_loc,$uploc))
              {
              
                 $imgerror="not uploaded";
              }
        
        
           }
           else{
              $imgerror="please upload image type file";
              
           }
           if(empty($imagerror))
           {
        
            $sql="update rentcar SET rentcarimage='$filename' where rentcarID=$carid AND rentcarBrand='$cmp';";
            if(mysqli_query($conn,$sql))
            {
                echo "image updated succesfully!!";
            }
            else{
                echo "image  failed to update! ";
            }
        
        
           }
           
        }









            }
            else{
                echo "update failed inside!";
            }

       }        
      

    }
    else{
        echo "Update failed!";
    }
}

