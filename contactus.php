<?php
  include "header.php"
?>	

  <div class="margin">
		<center>
			<h2>Contact Us</h2>
      <?php
        if (isset($_POST['submit'])){
          $host = 'localhost';
          $user = 'root';
          $pass = '';
          $db = 'ecom';
          $conn = mysqli_connect($host,$user,$pass,$db);
          if (!$conn) {
            echo "check your database connection";
          }
          else{    
            $u_id = $_SESSION['u_id'];
            $name = strval($_POST['name']);
            $email = strval($_POST['email']);
            $sub = strval($_POST['subject']);   
            $message = strval($_POST['message']);

            if ($email == $_SESSION['u_email']) {
              $con = "INSERT INTO contact(u_id,name,email,sub,msg) VALUES('$u_id','$name','$email','$sub','$message')";   
           
                $r1 = mysqli_query($conn,$con);
                if(!$r1){
                       echo "<script>
                              alert('not send!!');
                               </script>";
                 die("not send".mysqli_error());
                
                }
               else{
                   echo "<script> 
                          alert('Feedback send successfully!!');
                          window.location='contactus.php';
                         </script>";
               }
            }
            else{
                  echo   "<script> 
                          alert('Please enter your email id...');
                          window.location='contactus.php';
                         </script>";
            }
            
          }
        }
       
      ?>
      <div>
			<!-- <form  method="POST"> -->
				<form  method="POST">
        <div class="textbox">
          <input class="form1_control" type="text" name="name" placeholder="Name" required>
        </div><br>

        <div class="textbox">
          <input class="form1_control" type="email" name="email" placeholder="Email" required>
        </div><br>

        <div class="textbox">
          <input class="form1_control" type="text" name="subject" placeholder="Subject" required>
        </div><br>

        <div class="textbox">
          <textarea name="message" class="textbox" placeholder="Message" required></textarea>
        </div><br>
        <button class="send_btn" type="submit" name="submit" value="Submit">Send</button>
	
		</center>
	</div>	
<?php 
  include 'footer.php';
?>
