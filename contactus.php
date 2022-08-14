<?php
require('top.inc.php');
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = safe_data($conn, $_GET['type']);
    if ($type == 'delete') {
        $id = safe_data($conn, $_GET['id']);
        $delete_sql = "DELETE FROM contact WHERE id = $id";
        mysqli_query($conn, $delete_sql);

        echo "<script>
              alert('Removed Successfully.');
        </script>";
    }
}

$sql = "SELECT id,name,email,sub,msg FROM contact order by id asc";
$res = mysqli_query($conn, $sql);
?>
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Contact Us </h4>
                        <form action="con_search.php" method="post" style="float: right;">
                            <input type="search" name="sea_con" style="padding-bottom: 4px; border-radius:5px;" />
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($res)) { ?>
                                        <tr>
                                            <td class="serial"><?php echo $i ?></td>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['sub'] ?></td>
                                            <td><?php echo $row['msg'] ?></td>
                                            <td>
                                                <?php
                                                echo "<span class='badge badge-delete'><a href='?type=delete&id=" . $row['id'] . "'>Remove</a></span>";

                                                 
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