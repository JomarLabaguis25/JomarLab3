<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?= base_url()?>css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="<?= base_url()?>css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?= base_url()?>css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?= base_url()?>images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?= base_url()?>css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="<?= base_url()?>https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="<?= base_url()?>css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?= base_url()?>css/owl.theme.default.min.css">
      <link rel="stylesheet" href="<?= base_url()?>https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <div class="header_main">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <div class="number_text">No<br><span style="color: #fff;">01</span></div>
               <div class="search_icon"><a href="index.html"><img src="images/search-icon.png"></a></div>
            </div>
            <div class="menu_main">
               <div class="togle_main"><a class="class=" openbtn="" onclick="openNav()"><img src="images/toggle-icon.png" style="max-width: 100%;"></a></div>
               <div id="mySidebar" class="sidebar">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                  <a href="index">Home</a>
                  <a href="about">About</a>
                  <a href="gallery">Gallery</a>
                  <a href="news">News</a>
                  <a href="testimonial">Testimonial</a>
                  <a href="contact">Contact</a>
               </div>
            </div>
         </div>
         <div class="banner_section">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <h1 class="banner_taital">Genuine <br>Shoes online Shopping</h1>
                        <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Genuine <br>Shoes online Shopping</h1>
                        <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Genuine <br>Shoes online Shopping</h1>
                        <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--header section end -->
      <!--about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="about_taital">About Our Shop</h1>
                  <p class="about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                  <div class="read_bt"><a href="about1">Read More</a></div>
               </div>
               <div class="col-md-6">
                  <div class="image_1"><img src="images/img-1.png"></div>
               </div>
            </div>
         </div>
      </div>
      <!--about section end -->
      <!--footer section start -->
      <div class="footer_section layout_padding margin_top_90">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h4 class="link_text">Useful link</h4>
                  <p class="footer_text">It is a long established fact that a reader will be distracted by the readable  </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h4 class="link_text">Features Itams</h4>
                  <p class="footer_text">It is a long established fact that a reader will be distracted by the readable  </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h4 class="link_text">Instagram</h4>
                  <p class="footer_text_1"><img src="images/icon-1.png"><span class="padding_left_10">It is a long estab</span></p>
                  <p class="footer_text_1"><img src="images/icon-1.png"><span class="padding_left_10">It is a long estab</span></p>
                  <p class="footer_text_1"><img src="images/icon-1.png"><span class="padding_left_10">It is a long estab</span></p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h4 class="link_text">Contact Us</h4>
                  <p class="footer_text">It is a long established fact that a reader will be distracted by the readable  </p>
               </div>
            </div>
         </div>
      </div>
      <!--footer section end -->
      <!--copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright 2023 All Right Reserved By <a href="https://html.design">Free Html Templates</a></p>
         </div>
      </div>
      <!--copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         $('#myCarousel').carousel({
            interval: false
         });
      </script>
      <script>
         function openNav() {
           document.getElementById("mySidebar").style.width = "250px";
           document.getElementById("main").style.marginLeft = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidebar").style.width = "0";
           document.getElementById("main").style.marginLeft= "0";
         }
      </script>
   </body>
</html>