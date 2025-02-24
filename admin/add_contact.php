<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Contact</title>
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
                            <h5 class="m-b-10"><i class="fa-regular fa-address-book"></i> Contact</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="col-sm-12">
                <div class="card">
                    <div class="card-body align-items-center">
                        <h5>Add Contact</h5>
                        <hr>
                        <div class="row ">
                            <div class="col-md-6">
                                <form>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" placeholder="address" name="" id="" rows="5"></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="tel" class="form-control" placeholder="Phone Number">
                                    </div>      
                                </form>
                            </div>
                            
                            <div class="col-md-6">
                                <form> 
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="e.g abc@123gmail.com">
                                    </div> 

                                    <div class="form-group">
                                        <label>Map</label>
                                        <input type="text" class="form-control" placeholder="URL">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Status</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
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
