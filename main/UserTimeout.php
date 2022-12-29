<?php
session_start();
if(time()-$_SESSION["time"]>3600) 
{
   
    session_destroy();
    header("location: home.php");

}
 ?>