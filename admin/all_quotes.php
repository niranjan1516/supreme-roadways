<?php

include('includes/connection.php');
include('includes/allfunction.php');

if(isset($_GET['delid']))
{
    $delresult=deletedata('quote',$_GET['delid']);
    header('location:all_quotes.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Quotes</title>
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
                                <h5 class="m-b-10"><i class="fa-regular fa-envelope"></i>  Quote</h5>
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
                                    <h5>All Quotes</h5>
                                </div>
                                <div class="card-body table-border-style ">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Name</th>
                                                    <th>E-mail</th>
                                                    <th>Message</th>
                                                    <th>Added Date</th>
                                                    <!-- <th>Action</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                  $quotedata = fetchalldata('quote');
                                                
                                                  $i=1;
                                                  while($quote= mysqli_fetch_array($quotedata))
                                                 { ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $quote['name']; ?></td>
                                                    <td><?php echo $quote['email']; ?></td>
                                                    <td><?php echo $quote['message']; ?></td>
                                                    <td><?php echo $quote['added_date']; ?></td>           
                                                    <!-- <td>
                                                        <a href="edit_member.php?editid=<?php echo $quote['q_id'];?>" 
                                                        style="padding-right:5px">Edit</a>
                                                        
                                                        <a href="all_quotes.php?delid=<?php echo $quote['q_id'];?>"
                                                        onclick="return confirm('Do you want to delete this data')">Delete</a>
                                                    </td> -->
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