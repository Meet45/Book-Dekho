<!DOCTYPE html>
<html>
<head>
	<title>Bookdekho</title>
	<link rel="stylesheet" href="css/forgot.css">

</head>
<body>
	<form action="" method="POST">
		<div class="detail-box">
			
			<div class="ftitle">Forgot Password</div>
			<div class="fdetail">Enter your email address</div>
			<!-- <p><?php  $_SESSION ?></p> -->
			<div class="textbox">
				<i class="fa fa-envelope" aria-hidden="true"></i>
				<input class="e-box" type="email" name="u_email" placeholder="xyz@gmail.com" required>
			</div>

			<input class="cbtn" type="submit" name="Continue" value="Continue" style="">

		</div>
	</form>

<?php 

include("functions/init.php"); 

	if (isset($_POST['Continue'])) {
		$email = mysqli_real_escape_string($conn, $_POST['u_email']);

		$emailquery = "select * from customer where u_email='$email'";
		$query = mysqli_query($conn, $emailquery);

		$emailcount = mysqli_num_rows($query);

		if($emailcount){

			$userdata = mysqli_fetch_array($query);

			$username = $userdata['u_name'];
			$token = $userdata['validation_code'];

			// echo "$token";

				$subject = "password reset";
				$body = "Hi, $username. Click here too reset your password
				http://localhost/Final/password.php?token=$token";

				$sender_email = "From: bookdekho.officials@gmail.com";

				if (mail($email, $subject, $body, $sender_email)) {
					// $_SESSION['msg'] = "check you mail to reset your account $email";

					echo "<script>
								alert('Check mail!');
								window.location='Forgot.php';
							</script>
							";
					// header('location:login.php');
				}
				else{
					echo "
						<script>
							alert('Email sending failed');
						</script>";
				}
		}
		else{

			echo "<script>
					alert('NO email found');
				  </script>";
		}
	}

?>

</body>
</html>