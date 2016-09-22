
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>E-wala</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <![endif]-->
      <?php
include "inc/init.php";



$page->title = "Welcome to ". $set->site_name;

$presets->setActive("home"); // we highlight the home link


include 'header.php';
  ?>
  </head>


  <body>

    

      
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
           

    <div class="container">

      
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="index.php">Home</a></li>
                
                
                
                <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Categories
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
        
            <li><a href=" Engineering.php">Engineering</a></li>
            <li><a href="Medical.php">Medical</a></li>
            <li><a href="Commerce.php">Commerce</a></li>
            <li><a href="Law.php">Law</a></li>
            <li><a href="Exams.php">Exams</a></li>
            <li><a href="Schools.php">Schools</a></li>
            <li><a href="Arts.php">Arts</a></li>
            <li><a href="Others.php">Others</a></li>
          
          </ul>
        </li>
<li><a href="checkout.php">Checkout</a></li>
                

              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Example row of columns -->
      
         <ul>
          
                  <a href = "Share.php"><img src="img\Schools\1.jpg" width="150px" height=200px" alt="image 1"></a>&nbsp
                   <a href = "Share.php"><img src="img\Schools\3.jpg" width="150px" height=200px" alt="image 1"></a>&nbsp
                   <a href = "Share.php"><img src="img\Schools\4.jpg" width="150px" height=200px" alt="image 1">&nbsp
              
          
          
           <a href = "Share.php"><img src="img\Schools\5.jpg" width="150px" height=200px" alt="image 1"></a>&nbsp
           <a href = "Share.php"><img src="img\Schools\6.jpg" width="150px" height=200px" alt="image 1"></a>&nbsp
           <a href = "Share.php"><img src="img\Schools\7.jpg" width="150px" height=200px" alt="image 1"></a>&nbsp
        
          
         <a href = "Share.php"><img src="img\Schools\8.jpg" width="150px" height=200px" alt="image 1"></a>&nbsp
        <a href = "Share.php"><img src="img\Schools\9.jpg" width="150px" height=200px" alt="image 1"></a>&nbsp
         <a href = "Share.php"><img src="img\Schools\10.jpg" width="150px" height=200px" alt="image 1"></a>&nbsp
           </li>   
                
            
           
      <hr>

           

      
    </div> <!-- /container -->
<?php
echo "</div></div> <!-- /container -->";
include 'footer.php';
?>
  </body>
</html>
