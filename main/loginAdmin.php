<?php

require_once "dbconnect.php";
 

$email = $password = "";
$email_err = $password_err = $login_err = "";
 
$email=trim($_POST["comp_email"]);
$password=$_POST["comp_psw"];
if(!empty($_POST["remember"])) {
	setcookie ("comp_email",$_POST["comp_email"],time()+ 86400);
	setcookie ("comp_password",$_POST["comp_psw"],time()+ 86400);
	echo "Cookies Set Successfuly";
} else {
	setcookie("comp_email","");
	setcookie("comp_password","");
	echo "Cookies Not Set";
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  
    if(empty($email)){
        $email_err="Please enter email.";
      echo  "Please enter email.";
    } 
    
    
    if(empty($_POST["comp_psw"])){
        $password_err="Please enter your password.";
        echo "Please enter your password.";
    } 
    
 
    if(empty($email_err) && empty($password_err)){


        $sql="select comp_email,comp_password from company where comp_email='$email' AND comp_password='$password';";
        echo $email." ".$password."<br>";
        if($result = mysqli_query($conn,$sql))
        {
            $resultCheck=mysqli_num_rows($result);
           // printf("num of rows= %d\n",$resultCheck);
            if ($resultCheck> 0) 
            {
                
                
                session_start();
                    
                    $_SESSION["comp_email"] = $email;
                    $_SESSION["comp_time"]= time();
                    //echo "log in SUCCESSFUL!!";

                    header("location: rentcarmain_page.php");
    
            }
            else{
                echo "invalid email or password <br>";
            }
            mysqli_free_result($result);

        }  
          
        }
        else{
            echo "log in failed <br>";
        }
    }
    
  
    mysqli_close($conn);

?>