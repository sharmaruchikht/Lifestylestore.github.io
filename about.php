<?php

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Life Style Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <br><br>
<div class="container column_style">
            <div class="row">
                 <div class="col-lg-4 col-sm-6 column_style">
        <h3>WHO WE ARE</h3>
        <br>
        <img src="img\about-img.jpg" alt>
        <p>Online shopping is a form of electronic commerce which allows consumers 
           to directly buy goods or services from a seller over the internet using 
           a web browser. Consumers find a product of interest by visiting the website
           of the retailer directly or by searching among alternative vendors using 
           a shopping search engine, which displays the same product's availability 
           and pricing at different e-retaliers. As of 2016, customers can stop online
           using a range of different computers and devices, including desktop computers,laptops,
           tablet computers and smartphones.</p>
           </div>
        
        <div class="col-lg-4 col-sm-6 column_style">
        <h3>OUR HISTORY</h3>
        <br>
        <h4 style="color:blue;"> 1960 </h4>
        <p>One of the earliest forms of trade conducted online was IBM's 
            online transaction processing (OLTP) developed in the 1960s</p><br>
        <h4 style="color:blue;">1985</h4>
        <p>The processing of financial transactions in real-time.The computerized
        ticket reservation system developed for American Airlines called Semi-Automatic
        Business Research Environment (SABRE) was one of its application.</p><br>
        <h4 style="color:blue;">1990</h4>
        <p>Here, computer terminals located in different travel agencies were linked 
            to<br>a large IBM mainframe computer, which processed transactions simultaneously
        and coordinate them so that all travel agents had access to the same information
        at the same information at the same time.<br>The emergence of online shopping
        as we know today developed with the emergence of the Internet.</p><br>
       </div>
        
         <div class="col-lg-4 col-sm-6 column_style">
        <h3>GROWTH</h3>
        <br>
        <p> Growth in online shoppers <br> As the revenues from online sales continued
            to grow significantly researches identified different types of online shoppers,
            Rohm & Swaninathan[7] identified four categories and named them "convenience 
            shoppers, variety seekers, balanced buyers, and store-oriented shoppers". They
            focused on shopping motivations and found that the variety of products 
            available and the perceived convenience of the buying online experience were
            significant motivating factors.</p>
         </div>
       </div>  
</div><br>        
         <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>