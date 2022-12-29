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
    

  <!--style="background-color:black;height:200px; style="text-color:white; text-align:center; ""-->
       
   <div class="div1">
    
  <h1 style="color:white ; text-align:center;padding:30px">CarBazar</h1>
  
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">                
                <a href="RentService_page.php" class="navbar-brand">
                    <h2> CarBazar </h2>
                </a>  
              
               
                    <ul class="navbar-nav " >
                        <li class="nav-item active"><a class="nav-link" href="home.php">Home</a></li>
                      
                        

                    </ul>
                  
                   
            </nav>

   </div>

  <div class="container">
    <div class="row ">
    
       <div class="col-sm-2">
      
       </div>
         <div class="col-sm-8 pt-4 mt-4 border border=success">
            <h2 class="text-center m-2 p-2 ">All User's Information </h2>
         <?php     
         $sql="select * from users ;";
              if( $result=mysqli_query($conn,$sql))
              {
                $cnt=mysqli_num_rows($result);
                if($cnt>0)
                { ?>

                    <table class="table table=success">
                    <tr style="color:blue; background-color:lightblue">
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                    </tr>
                    
                    <?php
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $username=$row['username'];
                        $email=$row['email'];
                        ?>
                        <tr>
                             <td> <?php echo $id; ?></td>
                             <td> <?php echo $username ?></td>
                             <td> <?php echo $email ?></td>
                            <td> 
                                
                                <span class="btn btn-danger"><a href="delete_user.php?delid=<?php echo $id;?>" class="text-white text-decoration-none">Delete </a> </span>
                            </td>
     
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
         <div class="col-sm-2">
      
      </div>
  </div>
</div>
                    
                        
                        
        
   



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>