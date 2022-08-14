<?php
include 'header.php';
require("functions/categories.php");
?>    
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/product.css" rel="stylesheet">

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">

						<!-- h2 class="title text-center">Features Items</h2> -->

					

						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							
							<div class="panel panel-default">
									
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<!-- <h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div> -->
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
						</div><!--/price-range-->
						
					
						</div><!--/shipping--> 
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center"></h2>
							<?php get_other_products(); ?>
				</div>
			</div>
		</div>
	</section>
<?php
include 'footer.php';
?>