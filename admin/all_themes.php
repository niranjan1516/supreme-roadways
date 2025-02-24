<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Themes</title>
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
                                <h5 class="m-b-10"><i class="feather icon-layout"></i> Hero Section</h5>
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
                                    <h5>All Themes</h5>
                                </div>
                                <div class="card-body table-border-style ">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Quote Title</th>
                                                    <th>Image</th>
                                                    <th>Added Date</th>
                                                    <th>Modified Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr >
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                    <td>Mark</td> 
                                                    <td>
                                                        <span class="badge badge-danger">Pending</span>
                                                        <span class="badge badge-success">Completed</span>
                                                    </td>
                                                </tr>
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