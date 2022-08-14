<?php
require('top.inc.php');
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = safe_data($conn, $_GET['type']);
    if ($type == 'delete') {
        $id = safe_data($conn, $_GET['book_id']);
        $delete_sql = "DELETE FROM book WHERE book_id = $id";
        mysqli_query($conn, $delete_sql);
        echo "<script>
                  alert('Removed Successfully.');
              </script>";
    }
}

if (isset($_POST['search'])) {
   $s = $_POST['sea_sell'];
}

$sql = "SELECT book_id,book.u_id,customer.u_name,book_title,book_author,book_edition,book_price,type,book_image FROM book,customer where book.u_id = customer.u_id and book_title LIKE '%$s%' or book_author LIKE '%$s%' or customer.u_name LIKE '%$s%' ORDER by book_id ASC";


$res = mysqli_query($conn, $sql);
?>
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Books </h4>
                        <form action="sell_search.php" method="post" style="float: right;">
                            <input type="search" name="sea_sell" style="padding-bottom: 4px; border-radius:5px;" />
                            <button class="btn btn-primary" type="submit" name="search" style="padding-top: 1px;">Search</button>
                        </form>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th>ID</th>
                                        <th>User Name</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Edition</th>
                                        <th>Price</th>
                                        <th>type</th>
                                        <th>Image</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($res)) { ?>

                                        <tr>
                                            <td class="serial"><?php echo $i ?></td>
                                            <td><?php echo $row['book_id'] ?></td>
                                            <td><?php echo $row['u_name']?></td>
                                            <td><?php echo $row['book_title'] ?></td>
                                            <td><?php echo $row['book_author'] ?></td>
                                            <td><?php echo $row['book_edition'] ?></td>
                                            <td><?php echo $row['book_price'] ?></td>
                                            <td><?php echo $row['type'] ?></td>
                                            <td><?php echo "<img src='images/" . $row['book_image'] . "' height='60px' width='60px'>" ?></td>
                                            <td>
                                                <?php
                                                echo "<span class='badge badge-delete'><a href='?type=delete&book_id=" . $row['book_id'] . "'>Remove</a></span>"
                                                
                                                ?>
                                            </td>
                                        </tr>
                                    <?php $i++;} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require('footer.inc.php') ?>