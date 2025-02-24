<?php

require('includes/connection.php');
// include_once('includes/allfunction.php');

if(isset($_POST['sign-in']))
{
	$user = $_POST['user'];
	$pass = $_POST['password'];

	$select ="SELECT * FROM admin WHERE user='$user' AND password='$pass'";

	$query = mysqli_query($conn,$select);
	$row = mysqli_num_rows($query);
	
	if($row==1)
	{
		// echo "correct";
		header("location: index.php");
		// session_start();
		// $_SESSION['adminloginid']=$_POST['user_name'];
		// header("location : index.php");
	}
	else
	{
		echo "<script>alert('Incorrect Password');</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Admin Sign-in</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
				<form method="POST">
					  <div class="card-body">
						<h4 class="img-fluid mb-4">Supreme Admin</h4>
						<h4 class="mb-3 f-w-400">Sign in</h4>
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">User-name</label>
							<input type="text" class="form-control" id="Email" name="user">
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<input type="password" class="form-control" id="Password" name="password">
						</div>
						<!-- <div class="custom-control custom-checkbox text-left mb-4 mt-2">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Save credentials.</label>
						</div> -->
						<button class="btn btn-block btn-primary mb-4" name="sign-in">Sign in</button>
						<p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
						<!-- <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.php" class="f-w-400">Sign up</a></p> -->
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
