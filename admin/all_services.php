<?php

include('includes/connection.php');
include('includes/allfunction.php');

if(isset($_GET['delid']))
{
    $delresult=deletedata('services',$_GET['delid']);
    header('location:all_services.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Features</title>
    <?php include_once('includes/header.php') ?>

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
                                <h5 class="m-b-10"><i class="fa-solid fa-star"></i> Services</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ stiped-table ] start -->
            <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header ">
                                    <h5>All Services</h5>
                                </div>
                                <div class="card-body table-border-style ">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Service</th>
                                                    <th>Image</th>
                                                    <th>Added Date</th>
                                                    <th>Status</th>
                                                    <th>Modified Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            <?php
                                                $servicedata = fetchalldata('services');
                                                
                                                $i=1;
                                                while($service = mysqli_fetch_array($servicedata))
                                                { ?>
                                            
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $service['service'];?></td>
                                                    <td><img src="uploads/<?php echo $service['image'];?>" style="height:80px;width:auto;border-radius:0"></td>
                                                    <td><?php echo $service['added_date'];?></td>
                                                    <td>
                                                        <?php
                                                        if($service['status']==1)
                                                        { ?>
                                                            <span class="badge badge-success">Active</span>
                                                        <?php } else { ?>
                                                            <span class="badge badge-danger">Inactive</span>
                                                        <?php } ?>
                                                    </td>
                                                    <td><?php echo $service['modified_date'];?></td>
                                                    <td>
                                                        <a href="edit_services.php?editid=<?php echo $service['id'];?>" 
                                                        style="padding-right:5px">Edit</a>
                                                        
                                                        <a href="all_services.php?delid=<?php echo $service['id'];?>"
                                                        onclick="return confirm('Do you want to delete this data')">Delete</a>
                                                    </td>
                                                </tr>

                                                <?php $i++; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ stiped-table ] end -->

                        <?php include_once('includes/script.php') ?>

</body>

</html>