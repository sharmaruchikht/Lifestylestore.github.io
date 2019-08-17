<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
<div class="navbar navbar-inverse navbar-fixed-top">  
        <div class="container">     
        <div class="navbar-header">     
            <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar"> 
                <span class="icon-bar"></span>       
                <span class="icon-bar"></span>     
                <span class="icon-bar"></span>    
            </button>           
            <a class="navbar-brand" href="index.php">Lifestyle Store</a>      
        </div>       
        <div class="collapse navbar-collapse" id="myNavbar">     
            <ul class="nav navbar-nav navbar-right">           
      <?php                
      if (isset($_SESSION['email'])) { 
          ?>                 
                <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>          
                <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>         
                <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li>  
                <li><a href="orderhistory.php"><span class="dlyphicon glyphicon-file" ></span>Order History</a></li>
                          
    <?php 
      }  else {                
          ?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>               
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>  
                <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span>About us</a></li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
                       <?php       
                       }         
                       ?>          
            </ul>      
        </div>   
    </div> 
</div> 
    </body>
</html>