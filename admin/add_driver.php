<?php
 
include('includes/connection.php');
include('includes/allfunction.php');

if(isset($_POST['submit']))
{
  
    $filename = $_FILES['photo']['name']; 
    $tempname = $_FILES['photo']['tmp_name']; 
    move_uploaded_file($tempname,'uploads/'.$filename);
   
    date_default_timezone_set("Asia/Calcutta");

   $data=array(
    "name"=>'"'.$_POST['name'].'"',
    "l_no"=>'"'.$_POST['l_no'].'"',
    "photo"=>'"'.$filename.'"',
    "address"=>'"'.$_POST['address'].'"',
    "exp"=>'"'.$_POST['exp'].'"',
    "mobile"=>'"'.$_POST['mobile'].'"',
    "added_date"=>'"'.date('Y-m-d h:i:s').'"'
   );

   insert('driver',$data);
   header('location:all_drivers.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Driver</title>
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
                            <h5 class="m-b-10"><i class="fa-solid fa-people-group"></i> Driver</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="col-sm-8">
                <div class="card">
                    <div class="card-body align-items-center">
                        <h5>Add Driver</h5>
                        <hr>
                        <div class="row ">
                            <div class="col-md-12">
                                <form method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                    </div>  

                                    <div class="form-group">
                                        <label>License No</label>
                                        <input type="text" class="form-control" name="l_no" placeholder="e.g MH092223123">
                                    </div>    

                               
                                    <label>Photo</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="photo" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" name="address" placeholder="Address"></textarea>
                                    </div> 

                                    <div class="form-group">
                                        <label>Experience</label>
                                        <input type="text" class="form-control" name="exp" placeholder="e.g 2 years">
                                    </div>  

                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input type="tel" class="form-control" name="mobile" placeholder="+91 000 000 0000">
                                    </div>
                                    

                                    <div class="input-group-separate  text-right">
                                        <button class="btn  btn-primary" name="submit" type="submit" onclick="return confirm('Do you want to submit this data')">Submit</button>
                                        <button class="btn  btn-danger" name="reset" type="cancel">Cancel</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    
<?php include_once('includes/script.php') ?>

</body>

</html>
