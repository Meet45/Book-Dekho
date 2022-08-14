<?php
require('top.inc.php');
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = safe_data($conn, $_GET['type']);
    if ($type == 'delete') {
        $id = safe_data($conn, $_GET['id']);
        $delete_sql = "DELETE FROM messages WHERE msg_id = $id";
        mysqli_query($conn, $delete_sql);

        echo "<script>
              alert('Removed Successfully.');
              window.location = 'chat.php';
        </script>";
    }
}

if (isset($_POST['search'])) {
   $s = $_POST['sea_cha'];
}

$sql = "SELECT msg_id,incoming_msg_id,customer.u_name,outgoing_msg_id,msg From messages,customer WHERE incoming_msg_id = customer.u_id and customer.u_name  LIKE '%$s%' order by msg_id asc";

// $sql = "SELECT * FROM messages where msg_id='$s'";
$res = mysqli_query($conn, $sql);
?>
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Chat Master</h4>
                        <form action="cha_search.php" method="post" style="float: right;">
                            <input type="search" name="sea_cha" style="padding-bottom: 4px; border-radius:5px;" />
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
                                        <th>Sender</th>
                                        <th>Receiver</th>
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
                                            <td><?php echo $row['msg_id'] ?></td>
                                            <td><?php echo $row['u_name'] ?></td>
                                            <td><?php echo $row['outgoing_msg_id'] ?></td>
                                            <td><?php echo $row['msg'] ?></td>
                                            
                                            <td>
                                                <?php
                                                echo "<span class='badge badge-delete'><a href='?type=delete&id=" . $row['msg_id'] . "'>Remove</a></span>";

                                                 
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