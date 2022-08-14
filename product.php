<?php

require("functions/display.php");
?>    
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/product.css" rel="stylesheet">

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
									<?php
										if (logged_in()) {
										echo'<a  href="1_to_12.php">
											<span class="badge pull-right"><!-- <i class="fas fa-plus"></i> --></span>
											1 to 12
										</a>';
										}else{
											echo'<a  href="#">
											<span class="badge pull-right"><!-- <i class="fas fa-plus"></i> --></span>
											1 to 12
											</a>';
										}
										?>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
									<?php
										if (logged_in()) {
											echo '<a  href="engineering.php">
												Engineering
											</a>';
										}else{
											echo '<a  href="#">
											Engineering
											</a>';
										}
										?>
									</h4>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
									<?php
										if (logged_in()) {
											echo '<a  href="Medical.php">
												<span class="badge pull-right"><!-- <i class="fas fa-plus"></i> --></span>
												Medical
											</a>';
										}else{
											echo '<a  href="#">
											<span class="badge pull-right"><!-- <i class="fas fa-plus"></i> --></span>
											Medical
											</a>';
										}
									?>
									</h4>
								</div>
								<!-- <div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
										</ul>
									</div>
								</div> -->
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
									<?php
										if (logged_in()) {
											echo '<a href="Commerce.php">Commerce</a>';
										}else{
											echo '<a href="#">Commerce</a>';
										}
									?>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
									<?php
										if (logged_in()) {
											echo'<a href="Arts.php">Arts</a>';
										}
										else{
											echo'<a href="#">Arts</a>';
										}
									?>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
									<?php
										if (logged_in()) {
											echo '<a href="others.php">Other</a>';
										}else{
											echo '<a href="#">Other</a>';
										}
									?>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<!-- <h4 class="panel-title"><a href="#">Interiors</a></h4> -->
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<!-- <h4 class="panel-title"><a href="#">Clothing</a></h4> -->
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<!-- <h4 class="panel-title"><a href="#">Bags</a></h4> -->
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<!-- <h4 class="panel-title"><a href="#">Shoes</a></h4> -->
								</div>
							</div>
						</div><!--/category-products-->
						
						
						
						
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>

						<?php 
							if (logged_in()) {
									get_log_products(); 
							}else{
								get_products(); 
							}
						?>		
				</div>
			</div>
		</div>
	</section>
