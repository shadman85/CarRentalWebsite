

<?php
require_once "dbconnect.php";
 

$email = $password = "";
$email_err = $password_err = $login_err = "";
 
$email=trim($_POST["email"]);
$password=$_POST["psw"];
if(!empty($_POST["remember"])) {
	setcookie ("email",$_POST["email"],time()+ 86400);
	setcookie ("password",$_POST["psw"],time()+ 86400);
	echo "Cookies Set Successfuly";
} else {
	setcookie("email","");
	setcookie("password","");
	echo "Cookies Not Set";
}
if( isset($_SESSION["email"])){
    header("location: RentService_page.php");
     exit;
 }
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  
    if(empty($email)){
        $email_err="Please enter email.";
      echo  "Please enter email.";
    } 
    
    
    if(empty($_POST["psw"])){
        $password_err="Please enter your password.";
        echo "Please enter your password.";
    } 
    
 
    if(empty($email_err) && empty($password_err)){


        $sql="select email,password from users where email='$email' AND password='$password';";
        $result = mysqli_query($conn,$sql);
      // echo $email." ".$password;
       $resultCheck=mysqli_num_rows($result);
        if ($resultCheck> 0) 
        {
            
            session_start();
               
                $_SESSION["email"] = $email;
                $_SESSION["time"]=time();

                header("location: RentService_page.php");

        }
        else{
            echo "invalid email or password <br>";
        }
       
       
        //mysqli_num_rows($result);
           
        
              
          
        }
        else{
            echo "log in failed <br>";
        }
    }
    
  
    mysqli_close($conn);

?>
