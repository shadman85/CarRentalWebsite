
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CarBazar</title>
    <style>
  
  body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: linear-gradient(to bottom right, grey, white );
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}
.div1{
  background-image: linear-gradient(to bottom right, black, blue );
   height: 150px;
   border-bottom: 5px;
   border-top: 5px;
    border-style: solid; 
  border-top-color: orangered;
}
.div2
{
  background-color: lightgray; 
  width: 25%;
  height: 250px;
  margin-top: 80px;
  margin-left: 10px;
}
.div3{
  background-image: linear-gradient(to bottom right, black, blue );
   height: 100px;
   border-bottom: 5px;
   border-top: 5px;
    border-style: solid; 
  border-top-color: orangered;
}
.linkbt {
  background-color: blue;
  color: white;
  padding: 10px 15px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.linkbt:hover {
  opacity: 1;
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
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    

  <!--style="background-color:black;height:200px; style="text-color:white; text-align:center; ""-->
       
   <div class="div1">
    
  <h1 style="color:white ; text-align:center;padding:30px">CarBazar</h1>
  
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">                
                <a href="RentService_page.php" class="navbar-brand">
                    <h2> CarBazar </h2>
                </a>  
              
               
                    <ul class="navbar-nav " >
                        <li class="nav-item active"><a class="nav-link" href="RentService_page.php">Home</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="registerAdmin_page.php">CompanyRegistration</a></li>
                        <li class="nav-item"><a class="nav-link" href="signup_page.php">UserSignUP</a></li>
                        <li class="nav-item"><a class="nav-link" href="controller_login_page.php">Admin</a></li>

                    </ul>
                  
                   
            </nav>

   </div>

    <div class="div2">
    
      <article>
      <p style="font-size:20px;"> <b style="color:red; font-size:30px; ">CarBazar</b> is an online platform where users can search and rent cars according to their choice</p>

      </article>
 

    </div>

    <div>
     <h1 style="text-align:center;"> You can Log in as </h2> <br>
    </div>
    <div class="clearfix" >
  <div class="column " style="background-color:#ccc; width:50%;">
  <button id="bt1" onclick="options(id)" type="submit" class="linkbt" style="margin-left:300px ;"> USER </button>
 
  </div>
  <div class="column" style="background-color:#ccc ; width:50%;">
   
  
<button id="bt2" onclick="options(id)"  type="submit" class="linkbt" >COMPANY AUTHORITY</button>
     
  </div>
 

</div>
  

<script>
   function options(opt_id)
   {
         /* alert(opt_id);*/
         if(opt_id=="bt1")
         {
         
          location.href = 'login_page.php';
         }
         else if(opt_id=="bt2"){
         
          location.href = 'loginAdmin_page.php';
         }
   }
  </script>
</div>
<footer>
  <div class="div3">
     <p style="color:white;text-align:center;"> Contact us: <a href="carbazar@gmail.com">carbazar@gmail.com<a></p>
     <p style="color:white;text-align:center;"> ©️copyright: CarBazar</p>

  </div>
</footer>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>