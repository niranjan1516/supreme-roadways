<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Supreme RoadWays</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        scroll-behavior: smooth;
    </style>
   <?php include_once('includes/links.php')?>
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
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="hire.php">Hire Vehicle</a></li>
                                            <li><a href="vehicle.php">Vehicles</a></li>
                                            <li><a href="service.php">Services</a></li>
                                            <li><a href="About.php">About</a></li>
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

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8">
                        <div class="slider_text text-center justify-content-center"> 
                            <h3>Delivering Excellence on Every Road</h3>  
                        </div>
                        
                        
                        <div class="footer_widget">     
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder=" Enter Order Id">
                                <button type="submit">Track Order</button>
                            </form>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <div class="transportaion_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                        <div class="icon">
                            <img src="img/svg_icon/truck_img.png" alt="" height="60px">
                        </div>
                        <h3>Transportation</h3>
                        <p>From origin to destination, we make the journey seamless. Your trusted partner in transportation</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                        <div class="icon">
                            <img src="img/svg_icon/shield.png" alt="safe" height="60px">
                        </div>
                        <h3>Safe and Secure</h3>
                        <p>Committed to safe and secure transportation, every mile of the way. Trust us for deliveries with complete peace of mind.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                        <div class="icon">
                            <img src="img/svg_icon/india.png" alt="india map" height="60px">
                        </div>
                        <h3>Nationwide Service</h3>
                        <p>Reliable transport across India’s vast landscape. Supreme RoadWays – linking every city, every state, every day</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50 text-center">
                        <h3>
                            Services We Offer
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="service_active owl-carousel">
                        <div class="single_service">
                            <div class="thumb">
                                <img src="img/service/express_del.jpg" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service.php">Express Delivery</a></h3>
                                <p>Fast, Reliable Shipping Across India</p>
                            </div>
                        </div>
                        <div class="single_service">
                            <div class="thumb">
                                <img src="img/service/secure.jpg" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service.php">Secure Goods Transportation</a></h3>
                                <p>Safe Handling for Precious Cargo.</p>
                            </div>
                        </div>
                        <div class="single_service">
                            <div class="thumb">
                                <img src="img/service/full_load.jpg" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service.php">Full Truckload (FTL) Service</a></h3>
                                <p>Providing exclusive truck space for large deliveries, allowing a direct route to your destination with no stops in between.</p>
                            </div>
                        </div>
                        <div class="single_service">
                            <div class="thumb">
                                <img src="img/service/less_load.jpg" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service.php">Less-than-Truckload (LTL) Service</a></h3>
                                <p>Cost-Effective Transport for small Shipments</p>
                            </div>
                        </div>
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
                </div>
            </div>
        </div>
    </div>

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

    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>Supreme RoadWays has been a game-changer for my business. Their punctuality and professionalism have made a big 
                                difference in my logistics operations. The website is easy to navigate, and booking services is hassle-free.
                                 Highly recommend their service to anyone looking for a reliable transport partner!</p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/case/man.png" alt="user" height="50px">
                                    </div>
                                    <h3>Aditya Patil</h3>
                                    <span>CEO - AP tech</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>Supreme RoadWays has proven to be efficient and trustworthy. Their website makes scheduling
                                 and managing deliveries very easy. I've experienced fewer delays and better communication than 
                                 with other providers. A fantastic service that I’d gladly recommend to others in my industry.</p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/case/man.png" alt="" height="50px">
                                    </div>
                                    <h3>Sandesh Patil</h3>
                                    <span>User</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>I am very impressed with Supreme RoadWays! The booking process was straightforward,
                                 and I could track my journey updates seamlessly. Their customer service is top-notch, 
                                 always ready to answer any queries. I will definitely use their services again.</p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/case/man.png" alt="" height="50px">
                                    </div>
                                    <h3>Prathamesh Kamble</h3>
                                    <span>Marvlous Metals, CEO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

    <?php include_once('includes/footer.php') ?>

</body>

</html>