<?php

include('includes/connection.php');
include('includes/allfunction.php');

if(isset($_GET['delid']))
{
    $delresult=deletedata('driver',$_GET['delid']);
    header('location:all_drivers.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Drivers</title>
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
                                <h5 class="m-b-10"><i class="fa-solid fa-people-group"></i>Drivers</h5>
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
                                    <h5>Drivers</h5>
                                </div>
                                <div class="card-body table-border-style ">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Name</th>
                                                    <th>License No</th>
                                                    <th>Photo</th>
                                                    <th>Address</th>
                                                    <th>Experience</th>
                                                    <th>mobile Number</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $teamdata = fetchalldata('driver');
                                                
                                                $i=1;
                                                while($team= mysqli_fetch_array($teamdata))
                                                { ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $team['name']; ?></td>
                                                    <td><?php echo $team['l_no']; ?></td>
                                                    <td><img src="uploads/<?php echo $team['photo'];?>" style="height:80px;width:auto;border-radius:0"></td>
                                                    <td><?php echo $team['address']; ?></td>
                                                    <td><?php echo $team['exp']; ?></td>
                                                    <td><?php echo $team['mobile']; ?></td>                  
                                                    <td>
                                                        <a href="edit_member.php?editid=<?php echo $team['d_id'];?>" 
                                                        style="padding-right:5px">Edit</a>
                                                        
                                                        <a href="all_drivers.php?delid=<?php echo $team['d_id'];?>"
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