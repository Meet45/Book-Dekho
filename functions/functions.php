<?php 



	/*************Helper Functions***************/

	function clean($string) {
		return htmlentities($string);
	}

	function redirect($location) {
		return header("Location: {$location}");
	}

	function set_message($message) {
		if(!empty($message)) {
			$_SESSION['message'] = $message;
		} else {
			$message = "";
		}
	}


	function display_message() {
		if(isset($_SESSION['message'])) {
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		} 
	}

	function token_generator() {
		$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));
		return $token;
	}

	function email_exists($email) {
		$sql = "SELECT u_id FROM customer WHERE u_email = '$email'";
		$result = query($sql);
		if(row_count($result) == 1) {
			return true;
		} else {
			return false;
		}
	}

	function user_exists($username) {
		$sql = "SELECT u_id FROM customer WHERE u_name = '$username'";
		$result = query($sql);
		if(row_count($result) == 1) {
			return true;
		} else {
			return false;
		}
	}


function validation_errors($error_message) {
$error_message = <<<DELIMITER

<div class="alert alert-danger text-center alert-dismissible fade show">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Warning!</strong> $error_message
</div>

DELIMITER;

return $error_message;
}


	/*************Validation Functions***************/


	function validate_user_registration() {

		$errors = [];
		$min = 3;
		$max = 20;
		if($_SERVER['REQUEST_METHOD'] == "POST") {

			$u_name = clean($_POST['u_name']);
			$u_email = clean($_POST['u_email']);
			$u_dob = clean($_POST['u_dob']);
			$u_gender = clean($_POST['u_gender']);
			$u_number = clean($_POST['u_number']);
			$u_address = clean($_POST['u_address']);
			$u_pincode = clean($_POST['u_pincode']);
			$u_password = clean($_POST['u_password']);

			if(strlen($u_name) < $min) {
				$errors[] = "Your username cannot be less than {$min} characters.";
			} 

			if(strlen($u_name) > $max) {
				$errors[] = "Your username cannot be greater than {$max} characters.";
			}

			if(email_exists($u_email)) {
				$errors[] = "Sorry that email is already registered.";
			}

			if(user_exists($u_name)) {
				$errors[] = "Sorry that username is already taken.";
			}

			if(!empty($errors)) {
				foreach ($errors as $error) {
					echo validation_errors($error);
				}
			} else {
				if(register_user($u_name,$u_email,$u_dob,$u_gender,$u_number,$u_address,$u_pincode,$u_password)) {
					set_message("<p class='bg-success text-center'>User Registration is Successfull.</p>");
					 redirect("login.php");
					 echo "<script>
							window.location='registration.php';
						   </script>";
				}else{
					redirect("registration.php");
				}
			}
		}
	}

	// Registration Function

	function register_user($u_name,$u_email,$u_dob,$u_gender,$u_number,$u_address,$u_pincode,$u_password) {

		$u_name = escape($u_name);
		$u_email = escape($u_email);
		$u_dob = escape($u_dob);
		$u_gender = escape($u_gender);
		$u_number = escape($u_number);
		$u_address = escape($u_address);
		$u_pincode = escape($u_pincode);
		$u_password = escape($u_password);

		if (email_exists($u_email)) {
			return false;
		} elseif (user_exists($u_name)) {
			return false;
		} else {
			$u_password = md5($u_password);
			$validation_code = md5($u_name);

			$sql = "INSERT INTO customer(u_name,u_email,u_dob,u_gender,u_number,u_address,u_pincode,u_password,validation_code,active)";
			$sql .= " VALUES('$u_name','$u_email','$u_dob','$u_gender',$u_number,'$u_address',$u_pincode,'$u_password', '$validation_code', '0')";
			$result = query($sql);
			confirm($result);
			return true;

		}
	}

	// User Login Function

	function validate_user_login() {
		$errors = [];
		$max = 20;
		$min = 3;
		if($_SERVER['REQUEST_METHOD'] === "POST") {
			$u_email = clean($_POST['u_email']);
			$u_password = clean($_POST['u_password']);

			if(!empty($errors)) {
				foreach ($errors as $error) {
					echo validation_errors($error);
				}
			} else {
				if (user_login($u_email, $u_password)) {
					redirect("index.php");
				} else {
					echo "<script>
							alert('Please enter valid credentials');
						  </script>";
				}
			}
		}
	}

	// user_login

	function user_login($u_email, $u_password) {
		$sql = "SELECT u_password,u_name, u_id FROM customer WHERE u_email = '".escape($u_email)."'";
		$result = query($sql);

		if (row_count($result) == 1) {
			$row = fetch_array($result);

			$db_pasword = $row['u_password'];

			if(md5($u_password) === $db_pasword) {
				$_SESSION['u_email'] = $u_email;
				$_SESSION['u_id'] = $row['u_id'];
				$_SESSION['u_name'] = $row['u_name'];
				// echo $_SESSION['u_name'];
				// exit;
				return true;
			} else {
				return false;
			}

			return true;
		} else {
			return false; 
		}
	}

	// Logged in function

	function logged_in() {
		if(isset($_SESSION['u_email'])) {
			return true;
		} else {
			return false;
		}
	}
	function logged_in_user() {
		if(isset($_SESSION['u_name'])) {
			return true;
		} else {
			return false;
		}
		if (isset($_SESSION['u_id'])) {
			return true;
		}else{
			return false;
		}
	}
