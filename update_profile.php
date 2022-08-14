<?php
include "header.php";
if(isset($_POST['update'])) {
    $currentUser =  $_SESSION['u_email'];
    $name = $_POST['u_name'];
    $email = $_POST['u_email'];
    $phone = $_POST['u_number'];
    $dob = $_POST['u_dob'];
    $addr = $_POST['u_address'];
    $pincode = $_POST['u_pincode'];

    $sql = "UPDATE customer SET u_name = '$name', u_email = '$email', u_number = '$phone', u_dob = '$dob', u_address = '$addr', u_pincode = '$pincode' WHERE u_email = '$currentUser'";
    $result = mysqli_query($conn,$sql);

    if($result) {
        echo "<script>alert('updated successfully')</script>";
    } else {
         echo "<script>alert('updation failed')</script>";
         echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="css/update_profile.css">
<link rel="stylesheet" href="css/latest_bootstrap.min.css" />
<link rel="stylesheet" href="js/bootstrap.bundle.min.js">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 -->

</head>
<body>

        <form action="update_profile.php" method="POST">
    <?php
    $currentUser =  $_SESSION['u_email'];
    $sql = "SELECT *FROM customer WHERE u_email = '$currentUser'";

    $result = mysqli_query($conn,$sql);

    if($result) {
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
                //print_r($row['u_name']);

                ?>
                <div class="container">
    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-90 size">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                            </div>
                            <h5 class="user-name"><?php echo $row['u_name']; ?></h5>
                            <h6 class="user-email"><?php echo $row['u_email']; ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-90">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary">Personal Details</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName">Username</label>
                                <input type="text" class="form-control" id="" name="u_name" value="<?php echo $row['u_name']; ?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="eMail">Email</label>
                                <input type="email" class="form-control" id="" name="u_email" value="
                                <?php echo $row['u_email']; ?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" class="form-control" id="" name="u_number" value="<?php echo $row['u_number']; ?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="website">Date Of Birth</label>
                                <input type="text" class="form-control" id="" name="u_dob" value="
                                <?php echo $row['u_dob']; ?>">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="website">Address</label>
                                <input type="textarea" class="form-control" id="" name="u_address" value="<?php echo $row['u_address']; ?>">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="website">Pincode</label>
                                 <input type="number" class="form-control" id="" name="u_pincode" value="<?php echo $row['u_pincode']; ?>">
                            </div>
                        </div>

                    </div>
                   
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-right">
                                <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                <?php 
            }
        }
    }
?>
</form>


</body>
</html>

<?php
include 'footer.php';
?>