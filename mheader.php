<?php 
if(isset($_REQUEST['mid']))
    {
    $mid=$_REQUEST['mid'];
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Shwe Denti Dental Laboratory</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:shwedenti@gmail.com">shwedenti@gmail.com</a>
        <i class="fa fa-phone"></i> +9 51 541 457
      </div>
      <div class="social-links float-right">
        <a href="https://www.twitter.com" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="https://www.facebook.com" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="https://tinyurl.com/y3cgl3nm" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="https://www.linkedin.com" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><img src="img/favicon.png" width="60px" height="60px">Shwe<span>Denti</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><?php echo "<a href='Member_Home.php?mid=$mid'>Home</a>" ?></li>
          <?php
          echo "<li class='menu-has-children'><a href=''>Menu</a>";
            echo "<ul>";
              echo "<li><a href='#'>Doctor Data</a>";
                echo "<ul>";
                echo "<li><a href='Doctor_Register.php?mid=1'>Register Doctor</a></li>";
                echo "<li><a href='Doctor_View.php?mid=$mid'>View Doctor Data</a></li>";
              echo "</ul>";
             echo "</li>";
              echo "<li><a href='#'>Member Data</a>";
                echo "<ul>";
                echo "<li><a href='Member_Register.php?mid=$mid'>Register Member</a></li>";
                echo "<li><a href='Member_View.php?mid=$mid'>View Member Data</a></li>";
              echo "</ul>";
             echo "</li>";
              echo "<li><a href='#''>Product Data</a>";
                echo "<ul>";
                echo "<li><a href='Product_Register.php?mid=$mid'>Register Product</a></li>";
                echo "<li><a href='Product_View.php?mid=$mid'>View Product Data</a></li>";
                echo "<li><a href='ProductType_Register.php?mid=$mid'>Register Product Type</a></li>";
                echo "<li><a href='ProductType_View.php?mid=$mid'>View Product Type Data</a></li>";
              echo "</ul>";
             echo "</li>";
             echo "<li><a href=''>Brand Data</a>";
                echo "<ul>";
                echo "<li><a href='Brand_Register.php?mid=$mid'>Register Brand</a></li>";
                echo "<li><a href='Brand_View.php?mid=$mid'>View Brand Data</a></li>";
              echo "</ul>";
             echo "</li>";
             echo "<li><a href='#''>Company Data</a>";
                echo "<ul>";
                echo "<li><a href='Company_Register.php?mid=$mid'>Register Company</a></li>";
                echo "<li><a href='Company_View.php?mid=$mid'>View Company Data</a></li>";
              echo "</ul>";
             echo "</li>";
             echo "<li><a href=''>Laboratory Data</a>";
                echo "<ul>";
                echo "<li><a href='Laboratory_Register.php?mid=$mid'>Register Laboratory</a></li>";
                echo "<li><a href='Laboratory_View.php?mid=$mid'>View Laboratory Data</a></li>";
              echo "</ul>";
             echo "</li>";
              echo "<li><a href=''>Send a Report</a></li>";
            echo "</ul>";
          echo "</li>";
          echo "<li> <a href='Member_Profile.php?mid=$mid'>View My Profile</a></li>";
          ?>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>