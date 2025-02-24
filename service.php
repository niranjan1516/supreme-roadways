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
                        <h3>Our Services</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="img/service/express_del.jpg" alt="">
                        </div>
                        <div class="service_info">
                            <h3><a href="#">Express Delivery</a></h3>
                            <p>Fast, Reliable Shipping Across India.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="img/service/secure.jpg" alt="">
                        </div>
                        <div class="service_info">
                            <h3><a href="service.php">Secure Goods Transportation</a></h3>
                            <p>Safe Handling for Precious Cargo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="img/service/less_load.jpg" alt="">
                        </div>
                        <div class="service_info">
                            <h3><a href="service.php">Less-than-Truckload (LTL) Service</a></h3>
                            <p>Cost-Effective Transport for small Shipments</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="img/service/full_load.jpg" alt="">
                        </div>
                        <div class="service_info">
                            <h3><a href="service.php">Full Truckload (FTL) Service</a></h3>
                            <p>Providing exclusive truck space for large deliveries, allowing a direct route to your destination with no stops in between.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="img/service/nation.jpg" alt="">
                        </div>
                        <div class="service_info">
                            <h3><a href="service.php">Nationwide Door-to-Door Service</a></h3>
                            <p>Convenient Delivery from Pickup to Drop-off.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">

                    <div class="single_service">
                        <div class="thumb">
                            <img src="img/service/taxi-driver.png" alt="">
                        </div>
                        <div class="service_info">
                            <h3><a href="service_details.php">Experienced Drivers</a></h3>
                            <p>Our Drivers Have 5 to 8 years Experiance and They are 
                                Well known persons in Their field
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ service_area  -->

    <?php include_once('includes/safe.php') ?>

    <!-- chose_area  -->
    <div class="chose_area ">
        <div class="container">
            <div class="features_main_wrap">
                <div class="row  align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="about_image">
                            <img src="img/about/why_choose.png" alt="why_choose">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="features_info">
                            <h3>Why Choose Us?</h3>
                            <p> There are So many Reasons were you can Choose Us
                             
                            </p>
                            <ul>
                                <li> Reliable and Timely Deliveries. </li>
                                <li> Nationwide Coverage. </li>
                                <li> Safe and Secure Transport.</li>
                            </ul>

                            <div class="about_btn">
                                <a class="boxed-btn3-line" href="about.php">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ chose_area  -->

    <?php include_once('includes/counter.php') ?>


    <?php include_once('includes/footer.php') ?>

</body>

</html>