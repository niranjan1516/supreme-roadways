<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Theme</title>
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
                            <h5 class="m-b-10"><i class="feather icon-layout""></i> Hero Section</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="col-sm-12">
                <div class="card">
                    <div class="card-body align-items-center">
                        <h5>Add Theme</h5>
                        <hr>
                        <div class="row ">
                            <div class="col-md-6">
                                <form>
                                    <div class="form-group">
                                        <label>Quote Title</label>
                                        <input type="text" class="form-control" placeholder="e.g Q-one, Quote-1">
                                    </div> 

                                    <div class="form-group">
                                        <label>Quote</label>
                                        <input type="text" class="form-control" placeholder="e.g precision in every turn">
                                    </div> 

                                    <label>Image</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>                                                                    
                                </form>
                            </div>
                            
                            <div class="col-md-6">
                                <form> 
                                    <div class="form-group">
                                        <label>Discription</label>
                                        <textarea class="form-control" placeholder="Write Here.." name="" id=""></textarea>
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
                                        <button class="btn  btn-danger" type="reset">Cancel</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        
           
 
<?php include_once('includes/script.php') ?>

</body>

</html>
