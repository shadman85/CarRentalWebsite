<?php
require_once 'companyTimeout.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: linear-gradient(to bottom right, blue, violet );
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}


 header {
  background-color: black;
  padding: 20px;
  text-align: left;
  font-size: 20px;
  color: white;
} 


nav {
  float: left;
  width: 30%;
  height: 100%; 
  background: #ccc;
  padding: 20px;
}


nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  height:100%;
  background-color: #f1f1f1;
 
}

footer {
  background-color: black;
  padding: 10px;
  text-align: center;
  color: white;
}


.linkbtn {
  background-color: red;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.linkbtn:hover {
  opacity: 1;
}
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 6px 8px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}

a {
  color: white;
}
.div2 {
  padding:2px;
  margin-right: 10px;
  margin-left: 10px;
  background-color: grey;
  height:200px;
}
.column{
    float:left;
    padding: 5px;
    
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</style>
</head>
<body>

<header>
  <h1>CarBazar</h1>
  <div class="navbar">
  <a href="rentcarmain_page.php">Home</a>
 
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()" >Menu
  
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
   
    <a href="registerAdmin_page.php" >Register</a>
    <a href="adminlogout.php" >Log out</a>
    
  </div>
  </div> 
 
</div>
<script>

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
<p style="text-align:right; color:white "> 
            <?php
            if(isset($_SESSION["comp_email"]))
             {
              echo "welcome ".$_SESSION["comp_email"]; 
             }  
             ?>   
            </p>
</header>

<div class"clearfix" >
  <div class="column " style="background-color:grey; width:25% ;height:800px;">
  <h2 align="center"> Admin Options </h2>
   <button class="linkbtn "><a class="navlink" href="rentcarinsert_page.php" class="text-white text-decoration-none"><b>Insert New Car </b></a></button>
   <button class="linkbtn"><a class="navlink" href="rentcarupdate_page.php" class="text-white text-decoration-none"><b>Update Existing Car</b></a> </button>
  
  </div>
  <div class="column " style="background-color:#ccc ; width:75%;height:800px;">
    <h1 style="color:red"> <b>Rent Car Service</b></h1>
    <p>Using <b> CarBuzar</b> application car-rent service providers can conduct and manage their opeations. They can add new car information as well as update the existing cars.</p> 
     <p> Admin can update-</p>
     <ul>
     <li>Car Available time</li>
     <li>Cost per hour </li>
     <li>Car avalability</li>
     <li> Image</li>
     </ul>
     
  
     
  </div>
 

</div>
<footer>
<p> © carBazar
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>

