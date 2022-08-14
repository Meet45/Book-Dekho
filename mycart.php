<?php
    include 'header.php';
    require("functions/display_my.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Cart</title>
    <link rel="stylesheet" type="text/css" href="css/mybook.css">
</head>
<body>
   	<?php

   		if(isset($_POST['add_to_cart'])){
			$conn = mysqli_connect("localhost","root","","ecom");
			$bid = $_GET['id'];
			$uid=$_POST['user_id'];
			$book_title=$_POST['book_title'];
			$book_author=$_POST['book_author'];
			$book_edition=$_POST['book_edition'];
			$language=$_POST['language'];
			$book_standard=$_POST['book_standard'];
			$book_price=$_POST['book_price'];
			$area=$_POST['area'];
			$city=$_POST['city'];
			$type=$_POST['type'];
			$book_image=$_POST['book_image'];

			$sql1 ="select * from my_cart where u_id='$uid' and book_id='$bid'";

			$res1 =mysqli_query($conn,$sql1);

			if($row = mysqli_fetch_array($res1)){


			}else{
					$sql = "insert into my_cart values(null,'$uid','$book_title','$book_author','$book_edition','$language','$book_standard','$book_price','$area','$city','$type','$book_image','$bid')";
				 $res = mysqli_query($conn,$sql);
				 if(!$res){
				 		     echo "<script>
						alert('NOT Added!!');
						
					   </script>".mysqli_error($conn);

				 }else{
				 	     echo "<script>
						alert('Book Added Successfully!!');
						window.location='single.php';
					   </script>".mysqli_error($conn);

				 }

			} 


			 
		
		}
   	?>
    <div class="heading">
        <h2 align="center">My Cart</h2>
        
    </div>
    <div class="table">
        <?php
              get_my_cart();
        ?>
    </div><br>
</body>
</html>

<?php	

	 include 'footer.php';
?>