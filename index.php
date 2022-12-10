<!-- //http://localhost/Online-Voting-System/index.php -->

<!DOCTYPE html>
<html>

	<head>
		<title>Online Voting System</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<link rel="stylesheet" href="./assets/css/login.css">
		<link rel="stylesheet" href="./assets/css/style.css">



	</head>
	<!--Coded with love by Mutiullah Samim-->

	<body>
		<div class="container h-100">
			<div class="d-flex justify-content-center h-100">
				<div class="user_card">
					<div class="d-flex justify-content-center">
						<div class="brand_logo_container">
							<img src="./assets/images/logo.gif" class="brand_logo" alt="Logo">
						</div>
					</div>

					<?php
                   if(isset($_GET['sign-up']))
				   {
                       ?>
					<div class="d-flex justify-content-center form_container">
						<form method="POST">
							<div class="input-group mb-3">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" name="su_username" class="form-control input_user" placeholder="Username" required />
							</div>
							<div class="input-group mb-2">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="text" name="su_contact_no" class="form-control input_pass" placeholder="Contact no" required />
							</div>
							<div class="input-group mb-2">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" name="su_password" class="form-control input_pass" placeholder="Password" required />
							</div>
							<div class="input-group mb-2">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" name="su_confirm_password" class="form-control input_pass" placeholder="Confirm password" required />
							</div>

							<div class="d-flex justify-content-center mt-3 login_container">
								<button type="submit" name="sign_up_btn" class="btn login_btn">Sign up</button>
							</div>
						</form>
					</div>

					<div class="mt-4">
						<div class="d-flex justify-content-center links">
							Already created account? <a href="index.php" class="ml-2">Sign in</a>
						</div>

					</div>
					<?php
				   }else{
					?>
					<div class="d-flex justify-content-center form_container">
						<form>
							<div class="input-group mb-3">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" name="" class="form-control input_user" value="" placeholder="username">
							</div>
							<div class="input-group mb-2">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" name="" class="form-control input_pass" value="" placeholder="password">
							</div>
							<div class="form-group">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customControlInline">
									<label class="custom-control-label" for="customControlInline">Remember me</label>
								</div>
							</div>
							<div class="d-flex justify-content-center mt-3 login_container">
								<button type="button" name="button" class="btn login_btn">Login</button>
							</div>
						</form>
					</div>

					<div class="mt-4">
						<div class="d-flex justify-content-center links">
							Don't have an account? <a href="?sign-up=1" class="ml-2">Sign Up</a>
						</div>
						<div class="d-flex justify-content-center links">
							<a href="#">Forgot your password?</a>
						</div>
					</div>
					<?php
				   }
				?>


				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
		<script src="assets/js/jquery.min.js"></script>
	</body>

</html>





<?php

require_once("admin/config.php");
if(isset($_POST['sign_up_btn']))
{
$su_username=mysqli_real_escape_string($db,$_POST['su_username']);
$su_contact_no=mysqli_real_escape_string($db,$_POST['su_contact_no']);
$su_password=mysqli_real_escape_string($db,$_POST['su_password']);
$su_confirm_password=mysqli_real_escape_string($db,$_POST['su_confirm_password']);
$user_role="Voter";


if($su_password==$su_confirm_password){

//query
mysqli_query($db, "INSERT INTO users(username,Contact_no,password,user_role) 
Values('".$su_username."','".$su_contact_no."','".$su_password."','".$user_role."' )") 
or die(mysqli_error($db));
?>
<script> location.assign("index.php?sign-up=1&registered=1"); </script>

<?php

}else{
?>
<script> location.assign("index.php?sign-up=1&invalid=1"); </script>

<?php
}
}
?>