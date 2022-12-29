<?php
if( isset($_SESSION["email"])){
  header("location: RentService_page.php");
   exit;
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

<form action="login.php" method="post" >
  <div class="container">
    <h1 align="center">Log in</h1>
   
    

    <label for="email"><b>Email</b></label>
    <input type="text" value="<?php if(isset($_COOKIE["email"])) {echo $_COOKIE["email"];}  ?>" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" value="<?php if(isset($_COOKIE["password"])) {echo $_COOKIE["password"];}  ?>" name="psw" id="psw" required>
      <?php
  if( empty($_COOKIE["email"]) && empty($_COOKIE["password"]))
  {
    ?>
       <p><input type="checkbox" name="remember" /> Remember me </p>
    <?php
  }

?>
    
    

    <button type="submit" class="registerbtn">Log In</button>
    <p>Don't have an account? <a href="signup_page.php">Sign up now</a>.
    
  </div>
  

</form>

</body>
</html>