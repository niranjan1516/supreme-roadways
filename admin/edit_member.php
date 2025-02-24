<?php
 
include('includes/connection.php');
include('includes/allfunction.php');

$editid = $_GET['editid'];
$editdata = selectdatabyid('team',$_GET['editid']);

if(isset($_POST['submit']))
{
    if(!empty($_FILES['photo']['name']))
    {
        $filename = $_FILES['photo']['name']; 
        $tempname = $_FILES['photo']['tmp_name']; 
        move_uploaded_file($tempname,'uploads/'.$filename);
   
        // date_default_timezone_set("Asia/Calcutta");
    }
    else
    {
        $filename = $_POST['oldphoto'];
    }


    $data=array(
        "name"=>'"'.$_POST['name'].'"',
        "desig"=>'"'.$_POST['desig'].'"',
        "photo"=>'"'.$filename.'"',
        "message"=>'"'.$_POST['message'].'"',
        "x"=>'"'.$_POST['x'].'"',
        "facebook"=>'"'.$_POST['facebook'].'"',
        "instagram"=>'"'.$_POST['instagram'].'"',
        "linkedin"=>'"'.$_POST['linkedin'].'"',
        "exp"=>'"'.$_POST['exp'].'"'

        // "added_date"=>'"'.date('Y-m-d h:i:s').'"'
    );

    update('team',$data,$editid);
    header('location:all_members.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Member</title>
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
                            <h5 class="m-b-10"><i class="fa-solid fa-people-group"></i> Team</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="col-sm-8">
                <div class="card">
                    <div class="card-body align-items-center">
                        <h5>Edit Member</h5>
                        <hr>
                        <div class="row ">
                            <div class="col-md-12">
                                <form method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name"
                                        value="<?php echo $editdata['name'];?>">
                                    </div>  

                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input type="text" class="form-control" name="desig" placeholder="e.g web desinger"
                                        value="<?php echo $editdata['desig'];?>">
                                    </div> 
                                    
                                    <img src=" uploads/<?php echo $editdata['photo']; ?>" style="height:100px">
                                    
                                    <input type="hidden" name="oldphoto" value="<?php echo $editdata['photo'];?> ">


                                    <p><label>Photo</label><p>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="photo" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea class="form-control" name="message" placeholder="Message"><?php echo $editdata['message']; ?></textarea>
                                    </div> 

                                    <div class="form-group">
                                        <label>Experience</label>
                                        <input type="text" class="form-control" name="exp" placeholder="e.g 2 years"
                                        value="<?php echo $editdata['exp'];?>">
                                    </div> 
                            
                                    <label for="">Add Social Media Profile</label>
                                    <div class="form-group">
                                        <label>x</label>
                                        <input type="text" class="form-control"  name="x" placeholder="URL"
                                        value="<?php echo $editdata['x'];?>">
                                    </div> 

                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control" name="facebook" placeholder="URL"
                                        value="<?php echo $editdata['facebook'];?>">
                                    </div> 

                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" class="form-control" name="instagram" placeholder="URL"
                                        value="<?php echo $editdata['instagram'];?>">
                                    </div> 

                                    <div class="form-group">
                                        <label>LinkedIn</label>
                                        <input type="text" class="form-control" name="linkedin" placeholder="URL"
                                        value="<?php echo $editdata['linkedin'];?>">
                                    </div> 

                                    <div class="input-group-separate  text-right">
                                        <button class="btn  btn-primary" name="submit" type="submit" onclick="return confirm('Do you want to update this data')">Submit</button>
                                        <button class="btn  btn-danger" name="reset" type="cancel">Cancel</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    
<?php include_once('includes/script.php') ?>

</body>

</html>
