<?php include('functions/init.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	

	<link rel="stylesheet" href="css/footer.css">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/contactus.css">
	<link rel="stylesheet" type="text/css" href="css/sell_now.css">
	<link rel="stylesheet" type="text/css" href="css/head.css">
	<link rel="stylesheet" type="text/css" href="css/t&c.css">
</head>
<body>
	<header>
			<div class="container1">			
					<div class="shop_menu">
						<ul class="">
							<?php
								if (logged_in()) {
									echo '<li><a href="logout.php"><i class="fas fa-lock"></i> Logout</a></li>';
								} else {
									echo '<li><a href="login.php"><i class="fas fa-lock"></i> Login</a></li>';
								}
							?>
								<ul class="">
									<?php
										if (logged_in()) {
											echo '<li><a href="mycart.php"><i class="fas fa-shopping-cart"></i> Cart</a></li>';
										}else{
											echo '';
										}
									?>
								
									<?php
										if(logged_in()){
											echo '<li class="dropbtn"><a href=""><i class="fas fa-user"></i> Account</a>
													<div class="dropdown-con">
														<ul>
	                                    				<li><a href="update_profile.php">Edit Profile</a></li>
														<li><a href="mybook.php">My Books</a></li>
	                            						</ul>
	                           						</div>	
												</li>';
										}else{
											echo '';
										}

									?>
								</ul>
						</ul>
							
					</div>

					<div class="brand">
						<a href="index.php"><img src="logo1.png" alt="" height="90px" width="150px" /></a>
					</div>

					
						<form action="search.php" method="Post">
							<div class="search_b">
								<input type="submit" name="submit" class="sbtn">
							</div>
							<div class="search_box">
								<input type="text"  name="search" placeholder="Search">
							</div>
							
						</form>
						

					<div class="shop-main-menu">
						<ul>
									<li><a href="index.php" class="active">Home</a></li>


									<?php
										if (logged_in()) {
											echo '<li><a href="buy.php">Buy</a></li>';
										}else{
											echo '<li><a href="#">Buy</a></li>';
											// echo '';
										}

									?>
									
									<?php
										if (logged_in()) {
											echo '<li><a href="T&C.php">Sell Now</a></li>';
										}else{
											echo '<li><a href="#">Sell Now</a></li>';
											// echo '';
										}

									?>

									<?php
										if (logged_in()) {
											echo '<li><a href="rental.php">Rental</a></li>';
										}else{
											echo '<li><a href="#">Rental</a></li>';
											// echo '';
										}
										// echo $_SESSION['u_name'];

									?>
												                                
									<li><a href="about.php">About Us</a></li>
									
									<?php
										if (logged_in()) {
											echo '<li><a href="contactus.php">Contact Us</a></li>';
										}
										else{
											echo '<li><a href="#">Contact Us</a></li>';
										}
									?>

						
						</ul>
					</div>

			</div>
	</header>

</body>
</html>