
<?php
//echo "entered signup";

    require_once 'dbconnect.php';
    $comp_username=$_POST["comp_username"];
    $comp_email=$_POST["comp_email"];
    $comp_psw=$_POST["comp_password"];
    $comp_repsw=$_POST["comp_re_psw"];
    //echo $comp_username." ".$comp_email." ".$psw." ".$comp_repsw."<br>";
    if(empty($comp_username) || empty($comp_email) || empty($comp_psw) || empty($comp_repsw))
    {
        echo " empty error";
       
    }
    else if (!filter_var($comp_email, FILTER_VALIDATE_EMAIL) && !preg_match('/^[a-zA-Z0-9_]+$/', $comp_username)) {
        echo " comp_email and comp_username error";
     
      }
    else if (!filter_var($comp_email, FILTER_VALIDATE_EMAIL)) {
        echo " comp_email error";
      
      }
      else if(!preg_match('/^[a-zA-Z0-9_]+$/', $comp_username)){
        echo " comp_username error";
       
    }
    else if($comp_psw!=$comp_repsw)
    {
        echo " comp_password doesn't match";
       
    }
    else{

     $sql="select comp_username from company where comp_username='$comp_username';";
     //$result=mysqli_query($conn,$sql);
    
     if($result=mysqli_query($conn,$sql))
     {
        $resultcheck=mysqli_num_rows($result);
        //printf("num of rows= %d\n",$resultcheck);
        if($resultcheck>0)
     {
        echo "this comp_username is already used";
       
        
     }
     else{
        $sql="insert into company(comp_username,comp_email,comp_password) values('$comp_username','$comp_email','$comp_psw');";  
        mysqli_query($conn,$sql);
        echo "Registraion  Successful!";
        //header("Location: ../includes/signup_page.php");
     }
     mysqli_free_result($result);

     }
     else{
        echo "Registration failed!";
     }
     


    }
   mysqli_close($conn);

?>