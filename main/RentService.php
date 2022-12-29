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

.div2 {
  padding:2px;
  margin-right: 10px;
  margin-left: 10px;
  background-color: grey;
}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body >
<div >
        <header >
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">                
                <a href="#" class="navbar-brand">
                    <h2> CarBazar </h2>
                </a>  
              
               
                    <ul class="navbar-nav ">
                        <li class="nav-item active"><a class="nav-link" href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="userlogout.php">Log Out</a></li>
                    </ul>
             
            </nav>
           
        </header>    
    </div>
  <div>
  <h1 align="center" >  Available Cars for You</h1>
  
</div>
<div class="div2">
<?php

require_once 'dbconnect.php';
if(isset($_POST['submit']))
{
  $pk=$_POST['pick_date'];
  $dp=$_POST['drop_date'];
   
    $pick=date("Y-m-d",strtotime($pk));
   
    $drop=date("Y-m-d",strtotime($dp));
  
  $sql="select * from rentcar;";
  if($result=mysqli_query($conn,$sql))
  {
     $rowcount=mysqli_num_rows($result);
     if($rowcount>0)
     {
      ?>
        <div class="row">
          <?php
      while($row=mysqli_fetch_assoc($result))
      {
           $st=$row['startDate'];
           $en=$row['endDate'];
       
          $start=date("Y-m-d",strtotime($st));
          
           $end=date("Y-m-d",strtotime($en));
        
     
       
       if($start<=$pick && $end>=$drop && $pick<$drop )
       {
           
         
           $filename=$row['rentcarimage'];?>
         
     
     
         <div class="col-lg-3 mb-5" >
                        <div class="card text-center">
                            <img class="card-img-top" src="rentcarimages/<?php echo $filename ;?>" widht='200' height='200' alt="card image">
                            <div class="card-body">
                              
                                <h4 class="card-text" align= left><?php echo $row['cost_per_hour']; ?> BDT/hour</h4>
                               
                                <p class="card-title" align=left><b>Brand :</b> <?php echo $row['rentcarBrand']; ?></h4>
                                  <p class="card-text" align= left><b>Model : </b><?php echo $row['rentcarModel']; ?></p>
                                  
                                  <p class="card-text" align= left> <b>Available :</b> from <b style="color:blue"> <?php echo $row['startDate']; ?></b> to <b style="color:blue"><?php echo $row['endDate']; ?></b></p>
                                  
                                  <p class="card-text" align= left><b>Status : </b> <b style="color:green"><?php echo $row['rentcarStatus']; ?> </b></p>
                             
                            </div>  
                        </div>
                    </div>
                   
                    
      
      
          
     <?php
  
       }
  
  
      }
    ?>
    </div>
    <?php
  
  
     }
  

}
}


?>
  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>
</html> 