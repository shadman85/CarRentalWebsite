
<?php
  require_once 'dbconnect.php';
if(isset($_POST["admin_submit"]))
{
    //echo $_POST["admin_name"]." ".$_POST["admin_password"];
if(!empty($_POST["admin_name"]) && !empty($_POST["admin_password"]) )
{


    if($_POST["admin_name"]=="admin" && $_POST["admin_password"]=="1234")
    {
       //echo "LOG IN successfully";
        header("Location: controller.php");

    }
    else{
        echo "LOG IN FAILED!!!";
    }

}
else{
    echo "Please enter admin name and password.";
}
    




}

?>










<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to bottom right, green, white);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

* {
  box-sizing: border-box;
}


.container {
  padding: 16px;
margin: 20px 400px 200px 400px;
  background-color: white;
}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}



.registerbtn {
  background-color: green;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}


a {
  color: dodgerblue;
}


.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="controller_login_page.php" method="post" >
  <div class="container">
    <h1 align="center">Admin Log in</h1>
   
    

    <label for="admin_name"><b>Username :</b></label>
    <input type="text" placeholder="Enter Admin Name"   name="admin_name"required>

    <label for="admin_password"><b>Password</b></label>
    <input type="password" placeholder="Enter Admin password" name="admin_password"  required>

    <button type="submit" class="registerbtn" name="admin_submit">Log In</button>
 
    
  </div>
  

</form>

</body>
</html>