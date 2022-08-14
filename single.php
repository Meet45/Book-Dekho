<?php
include 'header.php';
?>
<?php  

function get_single_products(){

//my cart process
$conn = mysqli_connect("localhost", "root", "", "ecom");
if(isset($_POST['add_to_cart'])){
    
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

      $sql2 ="select * from my_cart where u_id='$uid' and book_id='$bid'";

      $res2 =mysqli_query($conn,$sql2);

      if($row = mysqli_fetch_array($res2)){
                       echo " <script>
            
            window.location='mycart.php';

             </script>";

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
        
             </script>".mysqli_error($conn);

         }

      } 


       
    
    }
$u_id = $_SESSION['u_id'];

$book_id =  $_GET['id'];

$sql = "SELECT * FROM book where book_id='$book_id';";

$res = mysqli_query($conn, $sql);


while ($row = fetch_array($res)) {

$_SESSION['userid'] = $row['u_id'];
//echo $_SESSION['userid'];

?>

<!DOCTYPE html>
<html>
   <head>
   
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/shop.css" type="text/css" />

   </head>
   <body>
      
      <section class="banner-bottom py-lg-5 py-3">
         <div class="container">
            <div class="inner-sec-shop pt-lg-4 pt-3">
               <div class="row">
                        <div class="col-lg-4 single-right-left ">
                              <div class="flexslider1">
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
                                                  <div class="thumb-image"> <img src="<?php echo $img; ?>" height="400" width="300" alt=" "> </div>
                                                <?php
                                          }
                                        }   
                                      }
                                  }?>
                              </div>
                        </div>
                  <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                     <h3><?php echo $row['book_title']?></h3>
                     <p><span class="item_price"><?php echo $row['book_price']*0.60 .'.00 <i class="fas fa-rupee-sign"></i>'?> </span>
                        <del><?php echo $row['book_price']?> <i class="fas fa-rupee-sign"></i></del>
                     </p>
                        <div class="description">

                              <table>
                                <tr>
                                  <th>Author Name</th>
                                  <td><?php echo $row['book_author']?></td>
                                </tr>
                                <tr>
                                  <th>Book Edition</th>
                                  <td><?php echo $row['book_edition']?></td>
                                </tr>
                                <tr>
                                  <th>Book language</th>
                                  <td><?php echo $row['language']?></td>
                                </tr>
                                <tr>
                                  <th>Book Standard</th>
                                  <td><?php echo $row['book_standard']?></td>
                                </tr>
                                <tr>
                                  <th>Selling Type</th>
                                  <td><?php echo $row['type']?></td>
                                </tr>
                                <tr>
                                  <th>Location</th>
                                  <td><?php echo $row['area'] ?>, <?php echo $row['city']?></td>
                                </tr>          
                              </table>
                              <form method="post" action="?id=<?=$row['book_id']?>">
                    <input type="hidden" name="book_title" value="<?php echo $row['book_title'] ?>">

                    <input type="hidden" name="user_id" value="<?php echo $u_id ?>">

                    <input type="hidden" name="book_author" value="<?php echo $row['book_author'] ?>">
                    
                    <input type="hidden" name="book_edition" value="<?php echo $row['book_edition'] ?>">
                    
                    <input type="hidden" name="language" value="<?php echo $row['language'] ?>">
                    
                    <input type="hidden" name="book_standard" value="<?php echo $row['book_standard'] ?>">
                    
                    <input type="hidden" name="book_price" value="<?php echo $row['book_price'] ?>">
                    
                    <input type="hidden" name="area" value="<?php echo $row['area'] ?>">  
                    <input type="hidden" name="city" value="<?php echo $row['city'] ?>">

                    <input type="hidden" name="type" value="<?php echo $row['type'] ?>">
                    
                    <input type="hidden" name="book_image" value="<?php echo $row['book_image'] ?>">

                    <input class="btn btn-primary btn-sm" type="submit" name="add_to_cart" value="Add To Cart" style="margin-left: 10px;margin-top: 20px">
                    <!-- <form action="./ChatAppbuyer/users.php">
                              <input type="submit" value="Chat with Seller" style="border-radius:4px;">
                    </form> -->
                    </form>
                          <div class="chat-button">
                            <!-- <a href="./ChatApp/users.php">Chat with Seller</a> -->
                            <form action="./ChatAppbuyer/users.php">
                              <input type="submit" value="Chat with Seller" style="border-radius:4px;">
                            </form>
                          </div>
                        </div>
                </div>
            </div>
         </div>
      </section> 
   </body>
</html>

<?php
}
}
?>
<?php
  get_single_products();
?>

<?php
include 'footer.php';
?>