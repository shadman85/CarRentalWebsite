<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to bottom right, blue, violet);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        
        * {
            box-sizing: border-box;
        }
       
        
        .container {
            padding: 16px;
            background-color: white;
            margin: 0px 400px 0px 400px;
        }
        
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        
        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }
        
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }
        
        .registerbtn {
            background-color: #4a0b4f;
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

    <form action="registerAdmin.php" method="POST">
        <div class="container">
            <h1 align="center" >Company Registration</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="comp_name"><b>Name :</b></label>
            <input type="text" placeholder="Enter Company Name" name="comp_username" id="comp_name" required>

            <label for="comp_email"><b>Email :</b></label>
            <input type="text" placeholder="Enter Company Email" name="comp_email" id="comp_email" required>

            <label for="comp_psw"><b>Password :</b></label>
            <input type="password" placeholder="Enter Password" name="comp_password" id="comp_psw" required>
            
            <label for="comp_re_psw"><b>Confirm Password :</b></label>
            <input type="password" placeholder="confirm Password" name="comp_re_psw" id="comp_re_psw" required>

           

            <button type="submit" class="registerbtn" name="comp_signup_submit" >Register</button>
            <p align="center">Already have an account? <a href="loginAdmin_page.php">Sign in here</a>.</p>
        </div>


    </form>

</body>

</html>