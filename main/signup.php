
<?php
//echo "entered signup";

    require_once 'dbconnect.php';
    $username=$_POST["username"];
    $email=$_POST["email"];
    $psw=$_POST["password"];
    $repsw=$_POST["re_psw"];
    //echo $username." ".$email." ".$psw." ".$repsw."<br>";
    if(empty($username) || empty($email) || empty($psw) || empty($repsw))
    {
        echo " empty error";
       
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
        echo " Email and username error";
      
      }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo " Email error";
       
      }
      else if(!preg_match('/^[a-zA-Z0-9_]+$/', $username)){
        echo " username error";
      
    }
    else if($psw!=$repsw)
    {
        echo " password doesn't match";
       
    }
    else{

     $sql="select username from users where username='$username';";
     
    
     if($result=mysqli_query($conn,$sql))
     {
        $resultcheck=mysqli_num_rows($result);
        if($resultcheck>0)
     {
        echo "this username is already used";
       
     }
     else{
        $sql="insert into users(username,email,password) values('$username','$email','$psw');";  
        mysqli_query($conn,$sql);
        echo "Sign Up Successful!";
        
     }

     }
     else{
        echo "Sign up failed!";
     }
     
     


    }
   mysqli_close($conn);

?>