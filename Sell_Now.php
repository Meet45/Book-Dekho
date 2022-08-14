<?php
	include "header.php";
?>
	<form action="Sell_Now.php" method="POST" enctype="multipart/form-data">
    <div class="container_sell">
    	<div class="title">
       		 <h1>Sell Books</h1><br>
        </div>

        <div class="sell_form">
		        <div class="form_group">
		            <label for="title">Book Title*</label>
		            <input type="text" class="sell_control" id="" name="title" required>
		        </div>

		        <div class="form_group">
		            <label for="author">Author Name*</label>
		            <input type="text" class="sell_control" id="" name="author_name" required>
		        </div>

		        <div class="form_group">
		            <label for="editon">Book Edition*</label>
		            <input type="month" class="sell_control" id="" name="edition"  required>
		        </div>

		        <div class="form_group">
		            <label for="language">Book language*</label>
		            <input type="text" class="sell_control" id="" name="lang"  required>
		        </div>

				<!-- <div class="form_group">
		            <label for="standard">Book standard*</label>
		            <input type="text" class="sell_control" id="" name="stan"  required>
		        </div> -->

		        <div class="form_group">
		            <label for="type">Book standard*</label>
		            	<div class="sell_select">
		            		<select name="stan" required>
		            			<option>Select Here</option>
		            			<option value="1_to_12">1 to 12</option>
		            			<option value="Engineering">Engineering</option>
		            			<option value="Medical">Medical</option>
		            			<option value="Commerce">Commerce</option>
		            			<option value="Arts">Arts</option>
		            			<option value="Other">Other</option>
		            		</select>
		            	</div>
		        </div><br>		        

		        <div class="form_group">
		            <label for="type">Selling type*</label>
		            	<div class="sell_select">
		            		<select name="type" required>
		            			<option>Select Type</option>
		            			<option value="SELL">SELL</option>
		            			<option value="RENTAL">RENTAL</option>
		            		</select>
		            	</div>
		        </div><br>
		            
		        <div class="form_group">
		            <label for="price">Original price*</label>
		            <input type="number" class="sell_control" id="" name="price"  required>
		        </div>

		        <div class="form_group">
		            <label for="Area">Local Area*</label>
		            <input type="text" class="sell_control" id="" name="area"  required>
		        </div>

		        <div class="form_group">
		            <label for="City">Current city*</label>
		            <input type="text" class="sell_control" id="" name="city"  required>
		        </div>

		        <div class="form_group">
		        	
		            <label for="image">Select Photo*</label>
		            <input type="file" class="sell_control" id="photo" name="image"  required><br><br>
		        </div>

		        <center><button class="sell_btn"  name="submit" type="submit">Submit</button><br></center>
		</div>
    </div>
</form>
<?php
		if (isset($_POST['submit'])) {
        $target = "admin/images/".basename($_FILES['image']['name']);
        $conn = mysqli_connect("localhost","root","","ecom");
        $extension = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
        $image = $_FILES['image']['name'];
        $u_id = $_SESSION['u_id'];
        $text = $_POST['title'];
        $author_name = $_POST['author_name'];
        $edition = $_POST['edition'];

        $lang = $_POST['lang'];
        $stan = $_POST['stan'];

        $price = $_POST['price'];

        $area = $_POST['area'];
        $city = $_POST['city'];

		$type = $_POST['type'];
        
        if (!$conn) {
            echo "connection fialed";
        }else{
            //echo "connection established..<br>";
        	if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png') {
        		$sql = "insert into book  values(null,'$u_id','$text','$author_name','$edition','$lang','$stan','$price','$area','$city','$type','$image')";

	            if(!mysqli_query($conn,$sql)){
	               echo "<script>
					alert('not saved!!');
					
				   </script>";
				  
	          	}
	           	else{
	               echo "<script>
					alert('Book details Saved!!');
					window.location='Sell_Now.php';
				   </script>";
	           	}
	             //move uploaded image in our location
	        	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
	            	//echo "file uploded successfully...";
	         	}else{
	            	die("not uploaded".mysqli_error($conn));
	         	}
        	}else{
        		echo "
        			<script> alert('Please upload image');</script>
        		";
        	}                         
        }
        mysqli_close($conn);
       
    }

	include "footer.php";
?>