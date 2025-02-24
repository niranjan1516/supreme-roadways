<?php

include('includes/connection.php');
include('includes/allfunction.php');

$editid = $_GET['editid'];
$editdata = selectdatabyid('services',$_GET['editid']);

if(isset($_POST['submit']))
{
    if(!empty($_FILES['image']['name']))
    {
        $filename = $_FILES['image']['name']; 
        $tempname = $_FILES['image']['tmp_name']; 
        move_uploaded_file($tempname,'uploads/'.$filename);
    }
    else
    {
        $filename = $_POST['oldimage'];
    }

    date_default_timezone_set("Asia/Calcutta");

   $data=array(
    "service"=>'"'.$_POST['service'].'"',
    "dis"=>'"'.$_POST['dis'].'"',
    "image"=>'"'.$filename.'"',
    "status"=>'"'.$_POST['status'].'"',
    "modified_date"=>'"'.date('Y-m-d h:i:s').'"'
   );

   update('services', $data, $editid);
   header('location:all_services.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Service</title>
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
        <div class="col-sm-8">
                <div class="card">
                    <div class="card-body align-items-center">
                        <h5>Edit Service</h5>
                        <hr>
                        <div class="row ">
                            <div class="col-md-12">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Service Name</label>
                                        <input type="text" class="form-control" name="service" placeholder="Service Name" 
                                        value="<?php echo $editdata['service'];?>">
                                    </div>  
                                    <div class="form-group">
                                        <label>Discription</label>
                                        <textarea class="form-control" name="dis"><?php echo $editdata['dis'];?></textarea>       
                                    </div>

                                    <img src="uploads/<?php echo $editdata['image']; ?>" style="height:100px">
                                    
                                    <input type="hidden" name="oldimage" value="<?php echo $editdata['image'];?> ">

                                    <p><label>Image</label></p>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Status</label>
                                        <select class="form-control" name="status" id="exampleFormControlSelect1" >
                                            <option value=1 
                                            <?php if($editdata['status'] == '1') 
                                                 { echo 'selected';} ;?>>Active</option>
                                            <option value=2 
                                            <?php if($editdata['status'] == '0')
                                                 { echo 'selected';} ;?> >Inactive</option>
                                        </select>
                                    </div> 
                                    <div class="input-group-separate  text-right">
                                        <button class="btn  btn-primary" type="submit" name="submit" onclick="return confirm('Do you want to update this data')">Submit</button>
                                        <button class="btn  btn-danger" type="cancel" name="cancel">Cancel</button>
                                    </div> 
                                    
                                </form>
                            </div>
                            
            
                        </div>
                        
           
 
<?php include_once('includes/script.php') ?>

</body>

</html>
