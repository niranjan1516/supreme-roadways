<?php

include_once('includes/allfunction.php');
include_once('includes/connection.php');

if(isset($_POST['submit']))
{
   
    date_default_timezone_set("Asia/Calcutta");

   $data=array(
    "name"=>'"'.$_POST['name'].'"',
    "email"=>'"'.$_POST['email'].'"',  
    "depart"=>'"'.$_POST['depart'].'"',
    "delivery"=>'"'.$_POST['delivery'].'"',
    "goods"=>'"'.$_POST['goods'].'"',
    "weight"=>'"'.$_POST['weight'].'"',
    "vehicle"=>'"'.$_POST['vehicle'].'"',
    "mobile"=>'"'.$_POST['mobile'].'"',
    "message"=>'"'.$_POST['message'].'"',
    "added_date"=>'"'.date('Y-m-d').'"'
   );

   insert('book_detail',$data);
//    header('location:all_services.php');
}

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Supreme RoadWays</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   

    <?php include_once('includes/links.php') ?>
</head>

<body>
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <?php include_once('includes/header_nav.php') ?>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-12 d-block d-lg-none">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php">home</a></li>
                                            <li><a href="hire.php">Hire Vehicle</a></li>
                                            <li><a href="vehicle.php">Vehicles</a></li>
                                            <li><a href="service.php">Services</a></li>
                                            <li><a href="About.php">about</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="admin/auth-signin.php">Admin</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                            <h3>Hire Vehicle</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ bradcam_area  -->

    <?php include_once('includes/form.php') ?>

    <!-- contact_location  -->
    <div class="contact_location">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="location_left">
                        <div class="logo">
                            <a href="index.php">
                                <h3>Supreme RoadWays</h3>
                            </a>
                        </div>
                        <ul>
                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-youtube"></i> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_location">
                        <h3> <img src="img/icon/address.svg" alt=""> Location</h3>
                        <p>108/A , 10th Lane,
                            Rajarampuri, Kolhapur 416 008</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_location">
                        <h3> <img src="img/icon/support.svg" alt=""> Contact</h3>
                        <p>+91 7709561516 <br>
                           +91 7709501704 <br>
                            info@supreme.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ contact_location  -->


    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul>
                                <li><a href="#">Road Transport</a></li>
                                <li><a href="#">All India Transport</a></li>
                                <li><a href="#">Courier Service</a></li>
                                <li><a href="#">Logistics</a></li>
                                <li><a href="#">Express Services</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#"> Testimonials</a></li>
                                <li><a href="#"> Why Us?</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Send</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                        Copyright &#169 2024 All Right Reserved 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->
<!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="search" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div>

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/slick.min.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>

</body>

</html>