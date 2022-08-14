<?php 
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<!--<link rel="stylesheet"  href="https://pro.fontowesom.com/releases/v5.10.0/css/all.css">-->
	<link rel="stylesheet" type="text/css" href="css/about.css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="css/head.css">
	<title>About Us</title>
</head>
<body>

	<!-- <section class="about"> -->
		<div class="acontainer">
			<h1 class="atitle">About Us</h1>
			<div class="awrapper">
				<div class="acontent">
					<h3>Bookdekho
						<p> 
							has a huge inventory of secound hand books or pre-used books.
							it provides secound hand books to parchase.In fact "Bookdekho"
							specializes in providing best deals on competitive books for various exams.
							user can also rent thair books. 
						</p>
					</h3>
				</div>
				<div class="image-section">
					<img src="images/book3.jpg">
				</div>
			</div>
		</div>
		<div class="full">
            <h2>Purpose</h2>
                <p class="large">BookDekho is designed to deal with the customer queries regarding information about diffrent types of books.
					This is an Online System that matches the cutomer queries regarding the uthor, publishers, title, price,latest upadates etc.
					User can buy secound-hand books at more appropriate/resonable price.
					From this portal user can esily buy books without any intermediate option over internet.
					
				</p>
            <h2>Steps for how  to work with BookDekho</h2>
                <p class="large">
				1--> User can first Registerd then login.<br>
				2--> After login, User can see the Home page. in this home page all books are shown.<br>
				3--> For Buying, User clicked One of the book then clicke On chat with seller.<br>
				4--> After clicking of chat button, user can able to chat with seller and buy his/her book at physically<br>
				5--> For selling, The form provided into the header.<br>
				6--> After the feel all information about book user must Except Tems & condition then Book will uploded. 
				</p>
            <h2>Our Life Cycle</h2>
				<center><image src="images/life.jpg" width="50%" height="50%" ></center><br>
				<h4> How To Save Environment</h4>
                <p class="large">While buying secound hand books is good for many reasons,
				it saves papers and hence helps Save Tree and Environment.
				</p>
				<h4>How To Save Time</h4>
                <p class="large">Time Manegment is the most important thing now days.for buying new books you can go through long root or distance which is wastage of time. You can get book nearly you ! because bookdkho Shows books Nearly by you.
				using this type of functionality  we can saves time </p>
        		<h4>How To Save Money</h4>
                <p class="large">Students save up to 60 to 75% of the original cost of books 
					via renting or buying used secound hand books.it is also save money from producing new books or Traveling costs.
				</p>
				<h4>How To Save Energy</h4>
                <p class="large">The production of every new item has an impact on the environment and wastage of Energy and resources some way.
					Energy means it can be enythigs like human resources, Light, Electricity etc..
					Wasting of Energy can happen in each step of the whole new production process.We Used
					Secound Hand Books rather then trying to create new.so achieving this type of contribution we can save Energy.  
				</p>
        
        </div>
		<h2 align="center">"BookDekho" All About</h2> 
<!-- 	</section> -->
		<div class="slideshow-container">

			<div class="mySlides fade">
			  <!--<div class="numbertext">1 / 3</div>-->
			  <img src="images/tree.png" style="width:100% ">
			  <div class="atext">Saves Tree</div>
			</div>

			<div class="mySlides fade">
			  
			  <img src="images/money2.jpg" style="width:100%">
			  <div class="atext">Saves Money</div>
			</div>

			<div class="mySlides fade">
			  
			  <img src="images/travel.jpg" style="width:100%">
			  <div class="atext">Reducing Travelling</div>
			</div>
			
			<div class="mySlides fade">
			  
			  <img src="images/save1.jpg" style="width:100%" >
			  <div class="atext">Saves The World</div>
			</div>

		</div>
			<br>

		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span>
		</div>
		

	<script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("dot");
			  for (i = 0; i < slides.length; i++) {
			    slides[i].style.display = "none";  
			  }
			  slideIndex++;
			  if (slideIndex > slides.length) {slideIndex = 1}    
			  for (i = 0; i < dots.length; i++) {
			    dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " active";
			  setTimeout(showSlides, 4000); // Change image every 4 seconds
			}
	</script>

		

</body>
</html>

<?php 
	include 'footer.php';
?>