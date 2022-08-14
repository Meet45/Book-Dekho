<?php
    include 'header.php';
    require("functions/display_my.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Books</title>
    <link rel="stylesheet" type="text/css" href="css/mybook.css">
</head>
<body>
   <!--  <div class="img">
        <img src="book3.jpg" alt="this is image">
    </div> -->
    <div class="heading">
        <h2 align="center">My Books</h2>
    </div>
    <div class="table">
        <?php
              get_my_products();
        ?>
    </div><br>
</body>
</html>

<?php
    include 'footer.php';
?>