<?php
require_once 'UserTimeout.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: linear-gradient(to bottom right, blue, violet );
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

.div1 {
  padding: 16px;
  margin-right: 400px;
  margin-left: 400px;
  background-color: lightblue;
}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body >

<div >
        <header >
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">                
                <a href="RentService_page.php" class="navbar-brand">
                    <h2> CarBazar </h2>
                </a>  
              
               
                    <ul class="navbar-nav " >
                        <li class="nav-item active"><a class="nav-link" href="RentService_page.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                      
                        <li class="nav-item"><a class="nav-link" href="rating_page.php"  style="margin-right:10px;">Car-Rating</a></li>
                        <li class="nav-item"><a class="nav-link" href="userlogout.php">Log Out</a></li>

                    </ul>
                  
                   
            </nav>

            <p style="text-align:right; color:white"> 
            <?php
            if(isset($_SESSION["email"]))
             {
              echo "welcome ".$_SESSION["email"]; 
             }  
             ?>   
            </p>
        </header>    
    </div>
<h1 align="center" style="margin-top:5px;"> Search Available Cars for Rent</h1>
<br>
<br>
 <form action="RentService.php" method="post">
  
  <div class="div1">
  
    <label for="pick_date"><b>Pick-up-date</b></label>
    <input type="text" placeholder="dd//mm//yy" name="pick_date" id="pick_date" style="margin-left:6px;" required> 
  </div>
  <br>
  <div class="div1">
  
    <label for="drop_date"><b>Drop-off-date</b></label>
    <input type="text" placeholder="dd//mm//yy" name="drop_date" id="drop_date" required>
  
  </div>
  <br>
  <button type="submit"  name="submit" style="width:100px ;height:50px;margin-left: 400px; margin-right: 400px; " >Search</button>

</form>
     


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>

