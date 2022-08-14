<?php 
    include("functions/init.php"); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>BookDekho Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Registration.css">
   <!--  <link rel="stylesheet" href="css/Login.css"> -->
</head>
<body>
    <?php validate_user_registration(); ?>
    <?php display_message(); ?>
        <form action="registration.php" method="POST">
            <div class="container">
            <h1>Register Here</h1><br>
                <div class="form-group">
                    <input type="text" class="form-control" id="" name="u_name" placeholder="Username" required>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" id="" name="u_email" placeholder="xyz@gmail.com" required>
                </div>

                <div class="form-group">
                    <input type="date" class="form-control" id="" name="u_dob" placeholder="date" required>
                </div>

                <div class="form-group">
                    <input type="radio" name="u_gender" value="male" required> Male
                    <input type="radio" name="u_gender" value="female" required> Female
                    <input type="radio" name="u_gender" value="other" required> Other
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" id="" name="u_number" placeholder="Mobile NO" required>
                </div>

                <div class="form-group">
                    <input type="textarea" class="form-control" id="" name="u_address" placeholder="Address" required>
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" id="" name="u_pincode" placeholder="Pin-code">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="" name="u_password" placeholder="password" required>
                </div>

                <button class="btn btn-success" id="btn" name="submit" type="submit">Submit</button><br><br>

                <p class="msg"><!-- Already have account? --><!-- <a href="Login.php">Click here For Login</a> --></p>


            </div>
        </form>
