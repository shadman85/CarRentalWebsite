<?php

require_once 'dbconnect.php';


?>
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
    

       
   <div class="div1">
    
  <h1 style="color:white ; text-align:center;padding:30px">CarBazar</h1>
  
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">                
                <a href="RentService_page.php" class="navbar-brand">
                    <h2> CarBazar </h2>
                </a>  
              
               
                    <ul class="navbar-nav " >
                        <li class="nav-item active"><a class="nav-link" href="RentService_page.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="userlogout.php">Log Out</a></li>
                        

                    </ul>
                  
                   
            </nav>

   </div>

  <div class="container">
    <div class="row ">
    
       <div class="col-sm-1">
      
       </div>
         <div class="col-sm-10 pt-4 mt-4 border border=success">
            <h2 class="text-center m-2 p-2 ">All Car's Information </h2>
         <?php     
         $sql="select * from rentcar,rating where rentcar.rentcarID=rating.car_id order by avg_rating;";
              if( $result=mysqli_query($conn,$sql))
              {
                $cnt=mysqli_num_rows($result);
                if($cnt>0)
                { ?>

                    <table class="table table=success">
                    <tr>
                        <th>Company</th>
                        <th>Model</th>
                        <th>Cost-per-hour</th>
                        <th>Availability Start</th>
                        <th>Availability End</th>
                        <th>Status</th>
                        <th>Image</th>
                    </tr>
                    
                    <?php
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['rentcarID'];
                        $company=$row['rentcarBrand'];
                        $model=$row['rentcarModel'];
                        $cost=$row['cost_per_hour'];
                        $start=$row['startDate'];
                        $end=$row['endDate'];
                        $status=$row['rentcarStatus'];
                        $start=$row['startDate'];
                        $filename=$row['rentcarimage'];
                       
                        ?>
                        <tr>
                             <td> <?php echo $company; ?></td>
                             <td> <?php echo $model?></td>
                             <td> <?php echo $cost ?></td>
                             <td> <?php echo $start; ?></td>
                             <td> <?php echo $end ?></td>
                             <td> <?php echo $status ?></td>
                             <td> <img src="rentcarimages/<?php echo $filename ;?>" widht='50' height='50'></td>
                             
                           
     
                        </tr>

                        <?php
                    }
                    ?>
                    </table>
                    <?php
                }
               
            }
           
            ?>
         </div>
         <div class="col-sm-1">
      
      </div>
  </div>
</div>
                   
                        
        
   



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>