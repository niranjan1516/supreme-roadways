<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Social Media</title>
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
                            <h5 class="m-b-10"><i class="fa-solid fa-hashtaga"></i> Social Media</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="col-sm-8">
                <div class="card">
                    <div class="card-body align-items-center">
                        <h5>Add Social Media</h5>
                        <hr>
                        <div class="row ">
                            <div class="col-md-12">
                                <form>
                                    <div class="form-group">
                                        <label>Social Media Name</label>
                                        <input type="text" class="form-control" placeholder="e.g Instagram">
                                    </div>   

                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Status</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>  

                                    <div class="form-group">
                                        <label>URL</label>
                                        <input type="text" class="form-control" placeholder="URL">
                                    </div> 

                                    <div class="input-group-separate  text-right">
                                        <button class="btn  btn-primary" type="submit">Submit</button>
                                        <button class="btn  btn-danger" type="cancel">Cancel</button>
                                    </div>      
                                </form>
                            </div>
                        </div>
                        
           
 
<?php include_once('includes/script.php') ?>

</body>

</html>
