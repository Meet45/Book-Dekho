<?php 
	include("functions/init.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Bookdekho Login</title>
	<link rel="stylesheet" href="css/Login.css">
</head>
<body>
	<?php validate_user_login(); ?>
	<form action="Login.php" method="POST">
		<div class="login-box">
		<h1>Login</h1><br>

	<div class="textbox">
		<i class="fa fa-envelope" aria-hidden="true"></i>
		<input type="text" name="u_email" placeholder="xyz@gmail.com" required>
	</div>

	<div class="textbox">
		<i class="fa fa-lock" aria-hidden="true"></i>
		<input type="password" name="u_password" placeholder="Password">
	</div>

	<input class="lo_btn" type="submit" name="login" value="Login">

	<div class="form-group text-center">
		<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
		<label for="remember"> Remember Me</label>
	</div>

	<p class="message">Not registered? <a href="Registration.php">Create an account</a></p>

	<p class="msg"><a href="forgot.php">Forgot password</a></p>
</div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
