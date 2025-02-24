<?php
    include('includes/connection.php');
    include('includes/allfunction.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Supreme Admin</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->

	<?php include_once('includes/sidebar.php') ?>
	
    <?php include_once('includes/navbar.php') ?>
	
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
         <!-- prject ,team member start -->
            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Booking Details</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Order Id</th>
                                        <th>Name</th>
                                        <th>Departure</th>
                                        <th>Delivery</th>
                                        <th>Vehicle</th>
                                        <th>Goods</th>
                                        <th>Weight</th>
                                        <th>Date</th>
                                        <!-- <th class="text-right">Status</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                      $orderdata = fetchalldata('book_detail');
                                                
                                     $i=1;
                                     while($order = mysqli_fetch_array($orderdata))
                                     { ?>
                                    <tr>
                                        <td><?php echo $order['order_id'];?></td>
                                        <td><h6><?php echo $order['name'];?></h6></td>
                                        <td><?php echo $order['depart'];?></td>
                                        <td><?php echo $order['delivery'];?></td>
                                        <td><?php echo $order['vehicle'];?></td>
                                        <td><?php echo $order['goods'];?></td>
                                        <td><?php echo $order['weight'];?></td>
                                        <td><?php echo $order['added_date'];?></td>
                                        <!-- <td class="text-right">Jun, 26</td> -->
                                        
                                    </tr>

                                    <?php $i++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        
        
            <div class="col-lg-6 col-md-6" style="display:flex">
                <!-- page statustic card start -->
                <!-- <div class="row"> -->
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-text-center">
                                    <div class="col-8">
                                        <h4 class="text-c-yellow">1000+</h4>
                                        <h6 class="text-muted m-b-0">Clients</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-bar-chart-2 f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-yellow">
                                <div class="row align-text-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-text-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green">10,000+</h4>
                                        <h6 class="text-muted m-b-0">Deliveries</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-file-text f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-green">
                                <div class="row align-text-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-red">150+</h4>
                                        <h6 class="text-muted m-b-0">Vehicles</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-calendar f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-red">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-down text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-blue">100+</h4>
                                        <h6 class="text-muted m-b-0">Drivers</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-thumbs-down f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-blue">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-down text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page statustic card end -->
        </div>
        <!-- <div class="row "> -->
          <div class="row">
              <div class="col-xl-6 col-md-10">
                <div class="card latest-update-card">
                    <div class="card-header">
                        <h5>Enquiries</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Added Date</th>
                                        
                                        <!-- <th class="text-right">Status</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                      $enquirydata = fetchalldata('get_in_touch');
                                                
                                     $i=1;
                                     while($enquiry = mysqli_fetch_array($enquirydata))
                                     { ?>
                                    <tr>
                                        <td><?php echo  $i;?></td>
                                        <td><?php echo $enquiry['name'];?></td>
                                        <td><?php echo $enquiry['email'];?></td>
                                        <td><?php echo $enquiry['subject'];?></td>
                                        <td><?php echo $enquiry['added_date'];?></td>
                                        
                                        <!-- <td class="text-right">Jun, 26</td> -->
                                        
                                    </tr>

                                    <?php $i++; } ?>
                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                </div> 
        
            <!-- Latest Customers start -->
            <div class="col-lg-6 col-md-12">
                <div class="card table-card review-card">
                    <div class="card-header borderless ">
                        <h5>Testimonials</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="review-block">
                            <div class="row">
                                <div class="col-sm-auto p-r-0">
                                    <img src="assets/images/user/user.jpg" alt="user image" class="img-radius profile-img cust-img m-b-15">
                                </div>
                                <div class="col">
                                    <h6 class="m-b-15">Ketan Patil<span class="float-right f-13 text-muted"> a week ago</span></h6>
                                    <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                    <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                    <p class="m-t-15 m-b-15 text-muted">Supreme RoadWays has been a game-changer for my business. Their punctuality and professionalism have made a big 
                                    difference in my logistics operations. The website is easy to navigate, and booking services is hassle-free.
                                    Highly recommend their service to anyone looking for a reliable transport partner!</p>
                                    <a href="#!" class="m-r-30 text-muted"><i class="feather icon-thumbs-up m-r-15"></i>Helpful?</a>
                                    <a href="#!"><i class="feather icon-heart-on text-c-red m-r-15"></i></a>
                                    <a href="#!"><i class="feather icon-edit text-muted"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-auto p-r-0">
                                    <img src="assets/images/user/user.jpg" alt="user image" class="img-radius profile-img cust-img m-b-15">
                                </div>
                                <div class="col">
                                    <h6 class="m-b-15">Prathamesh Kamble <span class="float-right f-13 text-muted"> a week ago</span></h6>
                                    <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                    <p class="m-t-15 m-b-15 text-muted">Supreme RoadWays has proven to be efficient and trustworthy. Their website makes scheduling
                                    and managing deliveries very easy. I've experienced fewer delays and better communication than 
                                    with other providers. A fantastic service that I’d gladly recommend to others in my industry.</p>
                                    <a href="#!" class="m-r-30 text-muted"><i class="feather icon-thumbs-up m-r-15"></i>Helpful?</a>
                                    <a href="#!"><i class="feather icon-heart-on text-c-red m-r-15"></i></a>
                                    <a href="#!"><i class="feather icon-edit text-muted"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- <div class="text-right  m-r-20">
                            <a href="#!" class="b-b-primary text-primary">View all Customer Reviews</a>
                        </div> -->
                    </div>
                </div>    
            </div>
            <!-- Latest Customers end -->
            <!-- Subscribers -->
              <div class="col-xl-6 col-md-10">
                <div class="card latest-update-card">
                    <div class="card-header">
                        <h5>Subscribers</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>                        
                                        <th>Email</th>
                                        <th>Added Date</th>
                                        
                                        <!-- <th class="text-right">Status</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                      $subdata = fetchalldata('emails');
                                                
                                     $i=1;
                                     while($subs = mysqli_fetch_array($subdata))
                                     { ?>
                                    <tr>
                                        <td><?php echo  $i;?></td>   
                                        <td><?php echo $subs['email'];?></td>
                                        <td><?php echo $subs['added_date'];?></td>
                                        
                                        <!-- <td class="text-right">Jun, 26</td> -->
                                        
                                    </tr>

                                    <?php $i++; } ?>
                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                </div>
        </div>
  
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
 
<?php include_once('includes/script.php') ?>

</body>

</html>
