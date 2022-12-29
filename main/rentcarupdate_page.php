<?php
require_once 'companyTimeout.php';
?>
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
        
        .btn {
            background-color: #4a0b4f;
            color: white;
            padding: 4px 5px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 25%;
            opacity: 0.9;
        }
        
        .btn:hover {
            opacity: 1;
        }
       
        
        a {
            color: dodgergreen;
        }
       
        
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>

<body>


    <form action="rentcarupdate.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <h1 align="center" >Update Rent-car Information</h1>
           
            <label for="adminpassword" ><b style="color:red">Admin Password :</b></label>
            <input type="password" placeholder="You must enter adminpassword :" name="adminpassword" id="adminpassword" required>

            <label for="compname" ><b style="color:red">Company Name :</b></label>
            <input type="text" placeholder="You must enter Company Name :" name="compname" id="compname" required>


            <label for="rentcarID" ><b style="color:red">Car ID :</b></label>
            <input type="text" placeholder="You must enter Car ID :" name="rentcarID" id="rentcarID" required>
           

           

            <label for="up_startDate"><b>Start of available date:</b></label>
            <input type="text" placeholder="Enter start of available date :" name="up_startDate" id="up_startDate">
            <input type="submit" class="btn" name="submit_up_startDate" value="Update" style="background-color:green"><br><br>

            <label for="up_endtDate"><b>End of available date:</b></label>
            <input type="text" placeholder="Enter end of available date :" name="up_endDate" id="up_endDate">
            <input type="submit" class="btn"  name="submit_up_endDate" value="Update"style="background-color:green"><br><br>

        

            <label for="up_cost_per_hour"><b>Cost-per-hour :</b></label>
            <input type="text" placeholder="Enter cost-per-hour" name="up_cost_per_hour" id="up_cost_per_hour" >
            <input type="submit" class="btn" name="submit_up_cost" value="Update" style="background-color:green"><br><br>

            <label for="up_status"><b>Rent Car Status :</b></label>
            <input type="text" placeholder="write Available or booked" name="up_status" id="up_status" >
            <input type="submit" class="btn" name="submit_up_status" value="Update" style="background-color:green"><br><br>
  
            
            <label>Select Image File:</label>
            <input type="file" name="image">
            <input type="submit" class="btn" name="submit_up_img" value="Update" style="background-color:green">

          
        </div>


    </form>

</body>

</html>