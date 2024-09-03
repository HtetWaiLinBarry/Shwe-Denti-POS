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
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">What We Do</a></li>
          <li><a href="#team">Team</a></li>
          <?php
          echo "<li class='menu-has-children'><a href=''>Menu</a>";
            echo "<ul>";
              echo "<li><a href='#'>Doctor Data</a>";
                echo "<ul>";
                echo "<li><a href='Doctor_Register.php?mid=$mid'>Register Doctor</a></li>";
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
                echo "<li><a href='Product_View.php?mid=$mid'>Register Product Type</a></li>";
                echo "<li><a href='Product_View.php?mid=$mid'>View Product Type Data</a></li>";
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
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>New <span>Looks</span><br>Get <span>Attractive</span></h2>
      <div>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/dental.jpg');"></div>
      <div class="item" style="background-image: url('img/dental.jpg');"></div>
      <div class="item" style="background-image: url('img/dental.jpg');"></div>
      <div class="item" style="background-image: url('img/dental.jpg');"></div>
      <div class="item" style="background-image: url('img/dental.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="img/scanner.png" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Our laboratory has all the best laboratory appratus.</h2>
            <h3>We have the best technicians and the highest tech appratus for making zirconia, porcelains and many more dental lab products.</h3>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i>Scanning, Digital Designing, 3-D printing</li>
              <li><i class="ion-android-checkmark-circle"></i>Investing and casting of RPDs with a completely digital RPD process.</li>
              <li><i class="ion-android-checkmark-circle"></i>The best zirconia crowns and porcelain bridges</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Services</h2>
          <p>We give you the best zirconia crowns, porcelain discs and a lot more using high technology appratuses in collaboration with 3Shape, BruxZir, Katana Zirconia and USA Branded Porcelain Discs and Invests.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Trust worthy</a></h4>
              <p class="description">We have received a lot of good comments on our work and we take pride in it. We try our best to give the customers the upmost satisfaction.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a href="">Portfolio</a></h4>
              <p class="description">Our website has a lot of information on each and every product we offer along with live taken photos.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Easy Order</a></h4>
              <p class="description">You can easily order your crowns with just a simple click on a button.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="">Talented Staff</a></h4>
              <p class="description">Our staffs are very talented and hard-working.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Clients</h2>
          <p>We of the Shwe Denti Dental Lab have collaborated with many clients and we can offer various types of products you want.</p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/1.png" alt="">
          <img src="img/clients/2.png" alt="">
          <img src="img/clients/3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Our Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>What we Do</h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/S1.png" class="portfolio-popup">
                <img src="img/portfolio/S1.png" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">BruxZir Full Strength Zirconia</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/S2.jpg" class="portfolio-popup">
                <img src="img/portfolio/S2.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Katana Zirconia</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/S3.jpg" class="portfolio-popup">
                <img src="img/portfolio/S3.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Tooth Implant</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/S4.png" class="portfolio-popup">
                <img src="img/portfolio/S4.png" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Ceramic Veneers</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/S5.jpg" class="portfolio-popup">
                <img src="img/portfolio/S5.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Clear Aligner</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/S6.jpg" class="portfolio-popup">
                <img src="img/portfolio/S6.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Porcelain Ceramic Bridge</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/S7.jpg" class="portfolio-popup">
                <img src="img/portfolio/S7.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Camlog Tooth Implant</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/S8.jpg" class="portfolio-popup">
                <img src="img/portfolio/S8.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Full Bridge</h2></div>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Testimonials Section
    ============================-->
    <section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Dental Technicians</h2>
          <p>Take a look at our talented technicians and staffs!</p>
        </div>
        <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Founder and CEO of the Shwe Denti Dental Laboratory, U Sai Maung Shwe.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/sai_maung_shwe.jpg" class="testimonial-img" alt="">
              <h3>U Sai Maung Shwe</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                With her talent at getting the job done quickly and efficiently, Ma May Myo Thwal is a very talented dental technician : 5 years of experience in the dental lab industry.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/may_myo.jpg" class="testimonial-img" alt="">
              <h3>Ma May Myo Thwal</h3>
              <h4>Technician</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                High level management skills and communication skills, our manager, U Aung Zaw Latt is very hardworking and very talented.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/aung_zaw.jpg" class="testimonial-img" alt="">
              <h3>U Aung Zaw Latt</h3>
              <h4>Manager</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Very talented and hardworking staff, Ma Lwin Thandar. She has been working in the dental lab industry for almost 9 years.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/thandar.jpg" class="testimonial-img" alt="">
              <h3>Ma Lwin Thandar</h3>
              <h4>Technician</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Our technician, U Htet Lin, has very good artistic and precision skills to make the zirconia crowns and bridges detailed. He has been working in Shwe Denti for 3 years.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/htet_lin.jpg" class="testimonial-img" alt="">
              <h3>U Htet Lin</h3>
              <h4>Technician</h4>
            </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Call To Action Section
    ============================-->

    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Team</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/may_myo.jpg" alt=""></div>
              <div class="details">
                <h4>Ma May Myo Thwel</h4>
                <span>Technician</span>
                <div class="social">
                  <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.google.com"><i class="fa fa-google-plus"></i></a>
                  <a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/thandar.jpg" alt=""></div>
              <div class="details">
                <h4>Ma Lwin Thandar</h4>
                <span>Technician</span>
                <div class="social">
                  <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.google.com"><i class="fa fa-google-plus"></i></a>
                  <a href="https://www.instagram.com"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/aung_zaw.jpg" alt=""></div>
              <div class="details">
                <h4>U Aung Zaw Latt</h4>
                <span>Manager</span>
                <div class="social">
                  <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.google.com"><i class="fa fa-google-plus"></i></a>
                  <a href="https://www.instagram.com"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/htet_lin.jpg" alt=""></div>
              <div class="details">
                <h4>U Htet Lin</h4>
                <span>Technician</span>
                <div class="social">
                  <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.google.com"><i class="fa fa-google-plus"></i></a>
                  <a href="https://www.instagram.com"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>No.(26)A, No. (7) Shwegondaing Road, Bahan Township</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+9 51 541 457</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:shwedenti@gmail.com">shwedenti@gmail.com</a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d422.26773361957567!2d96.16518749940396!3d16.81080386024375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ecb1ab49c397%3A0x686b298aeaec9b5!2sShwe%20Denti%20Dental%20Clinic!5e0!3m2!1sen!2smm!4v1609994687325!5m2!1sen!2smm" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Shwe Denti <strong>Lab</strong>.
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        New Look <a href="https://bootstrapmade.com/">New Attraction</a>
      </div>
    </div>
  </footer><!-- #footer -->

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
