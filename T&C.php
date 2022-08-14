<?php 
	include 'header.php';
?>

<div class="div">
	<h2>Terms And Conditions</h2>
	<ol type="I">
	
		<li>Bookdekho guarantees the condition of all books rented and sold. Because of our high standards, we require that highlighting, writing, or note taking in your books be very limited.</li><br>

		<li>Items received with heavy markings/writing or in otherwise damaged condition will incur additional charges. Other damages include but are not limited to water/liquid damage, loose/falling out/missing/torn/taped pages, torn or taped cover, or spine damage. If an item is not postmarked by the due date and received in usable condition, you will be charged a predetermined rental buyout price (+ tax, less the fee paid for each item not returned). This price is presented and agreed to during checkout in the rental terms & conditions.</li><br>
		
		<li>Rentals are intended for multiple uses. Therefore, textbooks are not guaranteed to come with usable supplements such as CDs or access codes. Many supplements are one time use items, and supplements may not be included with your rental.</li><br>
		
		<li>If you receive a supplement with your rental, you are welcome to use it. However, supplementary materials that you may receive with your item must be returned with the book.</li><br>
		
		<li>If you decide you would like to keep a portion or all of entire rental and not return it, you are welcome to buy products at any time during your rental period. Log in to your account and view your rental order. Click on the item you would like to keep and then click “Buy”. Follow the prompts to purchase your book. Make sure to buy each item you wish to keep, as purchasing one item does not change the rental status of all other books on that order</li><br>

		<li>After you purchase an item, it is your property and the rental agreement is now void. Do not return rental products that were purchased as they will not be refunded nor sent back to you.</li><br>

	</ol>
	<form action="" method="POST">
		<input type="checkbox" name="t&c" class="check">  I have read and accepted the terms and conditions stated above.</input><br><br>
		<center><input type="submit" name="submit" value="process" class="tbutton"></center>
	</form>
</div>
<?php
	if(isset($_POST['submit']))
	{
		if(!isset($_POST['t&c']))
		{
			echo "<script>
					alert('please accept terms and conditions!');
			   	  </script>";
		}
		else{
			 
			 echo "<script>
					window.location.replace('Sell_now.php');
			   	  </script>;";

		}
	}
?>
<?php 
	include 'footer.php';
?>
