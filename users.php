<?php
require('top.inc.php');
if (isset($_GET['type']) && $_GET['type'] != '') {
   $type = safe_data($conn, $_GET['type']);
   if ($type == 'delete') {
      $u_id = safe_data($conn, $_GET['u_id']);

      $delete1 = "DELETE FROM book WHERE u_id = $u_id";
      mysqli_query($conn, $delete1);

      $delete2 = "DELETE FROM contact WHERE u_id = $u_id";
      mysqli_query($conn, $delete2);

      $delete_sql = "DELETE FROM customer WHERE u_id = $u_id";
      mysqli_query($conn, $delete_sql);
      echo "<script>
                  alert('Removed Successfully.');
              </script>";
   }
}

$sql = "SELECT u_id,u_name,u_email,u_number,u_address FROM customer order by u_id asc";
$res = mysqli_query($conn, $sql);
?>
<div class="content pb-0">
   <div class="orders">
      <div class="row">
         <div class="col-xl-12">
            <div class="card">
               <div class="card-body">
                  <h4 class="box-title">Users </h4>
                  <form action="users_search.php" method="post" class="form"style="float: right;">
                     <input type="search"  name="sea_user" style="padding-bottom: 4px; border-radius:5px; "  />
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
                              <th>Number</th>
                              <th>Address</th>
                              <th></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $i = 1;
                           while ($row = mysqli_fetch_assoc($res)) { ?>
                              <tr>
                                 <td class="serial"><?php echo $i ?></td>
                                 <td><?php echo $row['u_id'] ?></td>
                                 <td><?php echo $row['u_name'] ?></td>
                                 <td><?php echo $row['u_email'] ?></td>
                                 <td><?php echo $row['u_number'] ?></td>
                                 <td><?php echo $row['u_address'] ?></td>
                                 <td>
                                    <?php
                                    echo "<span class='badge badge-delete'><a href='?type=delete&u_id=" . $row['u_id'] . "'>Remove</a></span>"
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