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

    <form action="signup.php" method="POST">
        <div class="container">
            <h1 align="center" >Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="user_name"><b>Name :</b></label>
            <input type="text" placeholder="Enter Your Name" name="username" id="user_name" required>

            <label for="email"><b>Email :</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw"><b>Password :</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="psw" required>
            
            <label for="re_psw"><b>Confirm Password :</b></label>
            <input type="password" placeholder="confirm Password" name="re_psw" id="re_psw" required>

           

            <button type="submit" class="registerbtn" name="signup_submit" >Register</button>
            <p align="center">Already have an account? <a href="login_page.php">Sign in here</a>.</p>
        </div>


    </form>

</body>

</html>