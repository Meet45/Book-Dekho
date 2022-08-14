
<?php


function get_my_products(){

$conn = mysqli_connect("localhost", "root", "", "ecom");
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type =  $_GET['type'];
    if ($type == 'remove') {
        $id =  $_GET['id'];
        $delete_sql = "DELETE FROM book WHERE book_id = $id";
        $re=mysqli_query($conn, $delete_sql);
        if($re){
                echo "<script>
                  alert('Removed Successfully.');
              </script>";

        }
    }
}
$u_id = $_SESSION['u_id'];


$sql = "SELECT * FROM book where u_id='$u_id';";

$res = mysqli_query($conn, $sql);


while ($row = fetch_array($res)) {

?>
			<table>
            <th>Item</th>
            <th>Details</th>
            <th>Price</th>
            <th>Action</th>
            <tr>
                <td rowspan="6">
                	<?php
						$folder='admin/images/';
								if(is_dir($folder))
								{
									if($open =opendir($folder))
									{
										while(($file=readdir($open)) != false)
										{
											if($file == $row['book_image'])
											{
												$img = "admin/images/".$row['book_image'];
													// echo $img;
													// echo $file;
																	?>
													<img src="<?php echo $img; ?>" style="height: 250px; width: 250px;">
													<?php
													}
												}		
											}
										}?></td>
                <td><b>Author Name</b>&nbsp&nbsp&nbsp<?php echo $row['book_author']?></td>
                <td><?php echo $row['book_price']?></td>
                <td rowspan="3"><?php
                                     echo "<button class='btn-remove'><a href='?type=remove&id=" . $row['book_id'] . "'>Remove</a></button>"
                                                
                                 ?></td>
            </tr>
            <tr>
            
                <td><b>Book Title</b>&nbsp&nbsp&nbsp<?php echo $row['book_title']?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            
                <td><b>Book Edition</b>&nbsp&nbsp&nbsp<?php echo $row['book_edition']?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                
                <td><b>Book language</b>&nbsp&nbsp&nbsp<?php echo $row['language']?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                
                <td><b>Book Catagory</b>&nbsp&nbsp&nbsp<?php echo $row['book_standard']?></td>
                <td></td>
                <td rowspan="2"><button type="submit" class="btn-primary "><a href="./ChatApp/users.php">Chat with Buyer</a></button></td>
            </tr>
            <tr>
                
                <td><b>Selling Type</b>&nbsp&nbsp&nbsp<?php echo $row['type']?></td>
                <td></td>
                <td></td>
            </tr>

            <tr>   
                
                <td></td>
                <td><b>Seller Location</b>&nbsp&nbsp&nbsp<?php echo $row['area'] ?>, <?php echo $row['city']?></td>
                <td></td>
            </tr>
        </table>

<?php
}
}
?>
<?php


function get_my_cart(){

$conn = mysqli_connect("localhost", "root", "", "ecom");

if (isset($_GET['type']) && $_GET['type'] != '') {
    $type =  $_GET['type'];
    if ($type == 'delete') {
        $id =  $_GET['book_id'];
        $delete_sql = "DELETE FROM my_cart WHERE id = $id";
        $re=mysqli_query($conn, $delete_sql);
        if($re){
                echo "<script>
                  alert('Removed Successfully.');
              </script>";

        }
    }
}

$u_id = $_SESSION['u_id'];

$sql = "SELECT * FROM my_cart where u_id='$u_id';";

$res = mysqli_query($conn, $sql);


while ($row = fetch_array($res)) {

// $product = <<<DELIMETER
?>
            <table>
            <th>Item</th>
            <th>Details</th>
            <th>Price</th>
            <th>Action</th>
            <tr>
                <td rowspan="7">
                    <?php
                        $folder='admin/images';
                                if(is_dir($folder))
                                {
                                    if($open =opendir($folder))
                                    {
                                        while(($file=readdir($open)) != false)
                                        {
                                            if($file == $row['book_image'])
                                            {
                                                $img = "admin/images/".$row['book_image'];
                                                    // echo $img;
                                                    // echo $file;
                                                                    ?>
                                                    <img src="<?php echo $img; ?>" style="height: 250px; width: 250px;">
                                                    <?php
                                                    }
                                                }       
                                            }
                                        }?></td>
                <td><b>Authhor Name</b>&nbsp&nbsp&nbsp<?php echo $row['book_author']?></td>
                <td><?php echo $row['book_price']?></td>
                <td rowspan="3"><?php
                                     echo "<button class='btn-remove'><a href='?type=delete&book_id=" . $row['id'] . "'>Remove</a></button>"
                                                
                                 ?></td>
            </tr>
             <tr>
            
                <td><b>Book Title </b><?php echo $row['book_title']?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            
                <td><b>Book Edition </b><?php echo $row['book_edition']?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                
                <td><b>Book language </b><?php echo $row['language']?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                
                <td><b>Book Catagory </b><?php echo $row['book_standard']?></td>
                <td></td>
                <td rowspan="2"><!-- <input type="button" name="chat" value="chat" style="color: green; border-radius: 10px"> --></td>
            </tr>
            <tr>
                
                <td><b>Selling Type </b><?php echo $row['type']?></td>
                <td></td>
                <td></td>
            </tr>

            <tr>   
                
                <td><b>Seller Location </b><?php echo $row['area'] ?> , <?php echo $row['city']?></td>
                <td></td>
                <td></td>
            </tr>
        </table>

<?php
}



}
?>




