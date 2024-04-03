<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>SPCF Ticketing System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/assets/img/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/img/spcflogo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method = "post" action = "userlogin.php">
					<span class="login100-form-title">
						ADMIN LOGIN
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name = "UserId" placeholder="Admin ID" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name = "password" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name = "submit">
							Login
						</button>
					</div>
                    <br><br><br><br><br><br>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.css"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->

</body>
</html>

<?php
include("connect/connect.php");

if(isset($_POST["submit"])){
	$UserID = mysqli_real_escape_string($conn,$_POST["UserId"]);
	$Password = mysqli_real_escape_string($conn,$_POST["password"]);
	$Password = md5($Password);
	$sel_user = "SELECT * FROM admin WHERE User_ID='$UserID' AND BINARY User_Pass='$Password'";
	$run_user = mysqli_query($conn,$sel_user);
	$check_user = mysqli_num_rows($run_user);
	
	if($check_user >= 0){
		$_SESSION["UserId"] = $UserID;
		echo "<script>window.open('views/admin/index.php','_SELF')</script>";
	}
	else if($UserID == ""){
		echo"<script>alert('Admin ID can't be blank!')</script>";
	}
}
?>


