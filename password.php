<!DOCTYPE html>
<html>
<head>
	<title> Re-enter password Page</title>
	<link rel="stylesheet" href="css/forgot.css">

</head>
<body>
	<form action="" method="POST">
		<div class="detail-box">
			
			<div class="ftitle">New Password</div>
			<div class="fdetail"></div>

			<div class="textbox">
				<i class="fa fa-envelope" aria-hidden="true"></i>
				<input class="e-box" type="email" name="u_email" placeholder="xyz@gmail.com" required>
			</div>

			<div class="textbox">
				<!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
				<input class="e-box" type="password" name="u_password" placeholder="Create new password" required>
			</div>

			<div class="textbox">
				<!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
				<input class="e-box" type="password" name="u_repassword" placeholder="Confirm your password" required>
			</div>

			<input class="cbtn" type="submit" name="update" value="update">
		</div>
	</form>

<?php

include("functions/init.php"); 

	if (isset($_POST['update'])) {

		// if(isset($_POST['validation_code'])){

			// $token = $_POST['validation_code'];
			// echo "$token";
			$email = mysqli_real_escape_string($conn, $_POST['u_email']);

			$newpassword = mysqli_real_escape_string($conn, $_POST['u_password']);
			$conpassword = mysqli_real_escape_string($conn, $_POST['u_repassword']);

			$pass = md5($newpassword);
			$cpass = md5($conpassword);



			if ($pass === $cpass) {
				
				$updatequery = " update customer set u_password='$pass' where u_email='$email'";

				$iquery =mysqli_query($conn,$updatequery);

				if ($iquery) {
					
					header('location:login.php');

				}
				else{

					// $_SESSION['passmsg'] = "Your password is not updated";
					echo "
							<script>
							alert('your password is not updated!'');

							</script>";
					header('location:Forgot.php');
				}
			}
			else{
				echo "
						<script>
							window.location='password.php';
							alert('password are not matching');
						</script>";
			}
		// }
		// else{
		// 	echo "NO token found";
		// }
}

?>

</body>
</html>