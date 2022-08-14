<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom";

$output = '';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['search'])) {
    $serachq = $_POST['search'];
    $serachq = preg_replace("#[^0-9a-z]#i","",$serachq);
    $sql = mysqli_query($conn,"SELECT * FROM customer WHERE u_name LIKE '%$serachq%'");
    $count = mysqli_num_rows($sql);

    
    while($row = mysqli_fetch_array($sql)) {
            $id = $row['u_id'];
            $name = $row['u_name'];
            $email = $row['u_email'];
            $number = $row['u_number'];
            $address = $row['u_address'];
            
    }

$output = <<<DELIMITER
<div class="content pb-0">
    <div class="orders">
      <div class="row">
         <div class="col-xl-12">
            <div class="card">
               <div class="card-body">
                  <h4 class="box-title">Users </h4>
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
                           while ($row = mysqli_fetch_assoc($sql)) { ?>
                              <tr>
                                 <td class="serial"><?php echo $i ?></td>
                                 <td><?php echo $row['u_id'] ?></td>
                                 <td><?php echo $row['u_name'] ?></td>
                                 <td><?php echo $row['u_email'] ?></td>
                                 <td><?php echo $row['u_number'] ?></td>
                                 <td><?php echo $row['u_address'] ?></td>
                                //  <td>
                                //     <?php
                                //     echo "<span class='badge badge-delete'><a href='?type=delete&u_id=" . $row['u_id'] . "'>Remove</a></span>"
                                //     ?>
                                //  </td>
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
    
DELIMITER;




            
            // $output.= '<div> '.$email. '.</div>';
            // $output.= '<div> '.$name. '.</div>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <form action="search.php" method="POST">
        <input type="text" name="search" placeholder="">
        <input type="submit" value="Search">
    </form>

    <?php
        print("$output");
    ?>
</body>
</html>