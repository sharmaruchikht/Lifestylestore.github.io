<?php
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    <title>Contact | LifeStyle Store</title>
    </head>
     <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <br><br>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <img src="img\contact.png" alt="" style="float:right;">
                <h1>Live Support</h1>
                <p>The Contact Us page is one of the most visited pages on any website. That seems like a compelling 
                enough reason to redesign your Contacts section to better meet yours users' needs and grab their attention.
                While working on this post, I came across hundreds of beautifully made websites, yet their
                Contact Us pages were, for the most part, disappointing. Most Contact pages are made for show, with just an 
                email address, phone, location, and some short boring text on a plain background.reason to redesign your Contacts
                section to better meet your users' needs and grab their attention. While working on this post, I came across
                hundreds.</p>
            </div>
        </div>
       </div>
        
        <div class="container-fluid decor-bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-6">
                        <h1>CONTACT US</h1>
                        <form action="contact_script.html" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name" required>
                            </div>   
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="e-mail" required>  
                            </div>
                            <textarea placeholder="Address" name="address" required></textarea><br><br>
                            <button type="sumbit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                
                <div class="col-lg-6">
                    <h2> COMPANY INFORMATION :</h2>
                    <h5>Gurgaon,India-122018</h5><br>
                    <h5>phone: +918448444853</h5><br>
                    <h5>email:training@internshala.com</h5>
                </div>
            </div>
        </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
 </body> 
</html>