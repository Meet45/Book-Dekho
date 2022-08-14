
<footer>
     <div id="container">
         <div id="part1">
             <div id="companyinfo"> <div id="sitelink">Bookdekho</div>
                 <p id="title">Second-hand book buying and selling portal</p>
                 <!-- <p id="detail">We create awesome code snippets that will help you in creating your own beautiful site. </p> -->
             </div>
             <div id="explore"> 
                <p id="txt1">Explore</p> 
                <a class="link" href="index.php">Home</a>
                <a class="link" href="About.php">About</a>
                <?php
                    if (logged_in()) {
                        echo '<a class="link" href="contactus.php">Contact Us</a>';
                    }else{
                        echo '<a class="link" href="login.php">Contact Us</a>';
                    }
                ?> 
                
             </div>
              <div id="visit">
                 <p id="txt3">Vision</p>
                 <p class="textf">To protect the environment</p> 
                 <p class="textf">by reusing the</p>
                 <p class="textf">second-hand books. </p>
                <!--  <p class="text"></p>
                 <p class="text"></p> -->
             </div> 
             <div id="legal">
                 <p id="txt3">Legal</p> <a class="link1" href="T&C_footer.php">Terms and Conditions</a>
             </div>

             <div id="subscribe">
                 <p id="txt3">Social Media</p> 

                 <a class="ic" href="https://instagram.com/bookdekho.officials?igshid=3jg6eirltnbx"><i class="fab fa-instagram fa-lg"></i></a> 
                 <a class="ic" href="https://mobile.twitter.com/book_dekho">   <i class="fab fa-twitter fa-lg"></i></a>
                 <a class="ic" href="https://www.facebook.com/book.dekho.9">      <i class="fab fa-facebook-square fa-lg"></i></a> 

             </div>
         </div>
         <div id="part2">
             <p id="txt6"><i class="far fa-copyright"></i> Copyright 2021 Bookdekho - All right reserved</p>
         </div>
     </div>
 </footer>