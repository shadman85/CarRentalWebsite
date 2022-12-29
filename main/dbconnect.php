<?php
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="demo1";
$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if(!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

