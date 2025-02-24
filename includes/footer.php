<?php

include_once('includes/allfunction.php');
include_once('includes/connection.php');

if(isset($_POST['submit']))
{
   
    date_default_timezone_set("Asia/Calcutta");

   $data=array(
    "name"=>'"'.$_POST['name'].'"',
    "email"=>'"'.$_POST['email'].'"',
    "message"=>'"'.$_POST['message'].'"',
    "added_date"=>'"'.date('Y-m-d h:i:s').'"'
   );

   insert('quote',$data);
//    header('location:all_services.php');
}

?>

<?php include_once('includes/links.php') ?>

<!-- Estimate_area start  -->
<div class="Estimate_area overlay" id="target-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="Estimate_info">
                        <h3>Get Free Quote</h3>
                        <p>
                            Send Us Message,<br>
                            We Will Contact you Soon..
                        </p>
                        <a href="#" class="boxed-btn3">+91 7709 5615 16</a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-7" >
                    <div class="form" >
                        <form method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="email" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <textarea placeholder="Message" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input_field" >
                                        <button class="boxed-btn3-line" type="submit" name="submit" onclick="return alert('Thank You for conecting Us.');">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Estimate_area end  -->

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
                        
                        <?php
                            include_once('includes/allfunction.php');
                            include_once('includes/connection.php');

                            if(isset($_POST['send']))
                            {
   
                                date_default_timezone_set("Asia/Calcutta");

                               $data=array( 
                                "email"=>'"'.$_POST['email'].'"',  
                                "added_date"=>'"'.date('Y-m-d').'"'
                               );

                               insert('emails',$data);
                            //    header('location:all_services.php');
                            }
                        ?>
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form  method="post" enctype="multipart/form-data" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail" name="email">
                                <button type="submit" name="send" onclick="return alert('Thank You for Connecting Us')">Send</button>
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