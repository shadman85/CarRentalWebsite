<?php
require_once 'dbconnect.php';
if(isset($_GET['delid']))
{
  $id=$_GET['delid'];
  $sql = "DELETE FROM users WHERE id=$id;";
   if(mysqli_query($conn,$sql)==true)
   {
    header("Location: controller.php");
   }
   else 
   {
    echo "user not deleted";
   }


}