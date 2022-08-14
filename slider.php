<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/slider.css" rel="stylesheet">


</head><!--/head-->

<body>  
  <section id="slider"><!--slider-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="slider-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#slider-carousel" data-slide-to="1"></li>
              <li data-target="#slider-carousel" data-slide-to="2"></li>
            </ol>
            
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-sm-6">
                  <h1><span>B</span>ookdekho</h1>
                  <h2>User Can buy books</h2>
                  <p>"A room without books is like a body without a soul."</p>
                  <p style="margin-left: 340px;"><b>-Cicero</b></p>
                  <button type="button" class="btn btn-default"><a href="about.php" style="text-decoration: none; color: black; font-weight: bold; ">About</a></button>
                </div>
                <div class="col-sm-6">
                  <img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
                 <!--  <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
                </div>
              </div>
              <div class="item">
                <div class="col-sm-6">
                  <h1><span>B</span>ookdekho</h1>
                  <h2>User Can Sell books</h2>
                  <p>"There is more treasure in books than in all the prirate's loot on Treasure Island"</p>
                  <p style="margin-left: 340px;"><b>-Walt Disney</b></p>
                  <button type="button" class="btn btn-default"><a href="about.php" style="text-decoration: none; color: black; font-weight: bold; ">About</a></button>
                </div>
                <div class="col-sm-6">
                  <img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
               <!--    <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
                </div>
              </div>
              
              <div class="item">
                <div class="col-sm-6">
                  <h1><span>B</span>ookdekho</h1>
                  <h2>User Can Rental book</h2>
                  <p>"Books are a uniquely portable magic."</p>
                  <p style="margin-left: 340px;"><b>-Stephen King</b></p>
                  <button type="button" class="btn btn-default"><a href="about.php" style="text-decoration: none; color: black; font-weight: bold; ">About</a></button>
                </div>
                <div class="col-sm-6">
                  <img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
                <!--   <img src="images/home/pricing.png" class="pricing" alt="" /> -->
                </div>
              </div>
              
            </div>
            
            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
              <i class="fas fa-angle-left"></i>
            </a>
            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
              <i class="fas fa-angle-right"></i>
            </a>
          </div>
          
        </div>
      </div>
    </div>
  </section><!--/slider-->  


  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>