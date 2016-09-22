
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

    <div class="container">

      <div class="masthead">
        <h3 class="muted">Store Title</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="index1.php">Home</a></li>
                
                <li><a href="checkout.html">Checkout <span class="badge badge-important">3</span></a></li>
                <li><a href="new.html">Order Placement</a></li>
                <li><a href="status.html">Order Status</a></li>

                <li class="dropdown">
				  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				    Categories
				    <b class="caret"></b>
				  </a>
				  <ul class="dropdown-menu">
				    <li class="nav-header">Men</li>
				    <li><a href="list.html">Clothes</a></li>
				    <li><a href="list.html">Shoes</a></li>
				    <li><a href="list.html">Watches</a></li>
				    <li><a href="list.html">Jewlery</a></li>
				    <li class="divider"></li>
				    <li class="nav-header">Women</li>
				    <li><a href="list.html">Clothes</a></li>
				    <li><a href="list.html">Shoes</a></li>
				    <li><a href="list.html">Watches</a></li>
				    <li><a href="list.html">Jewlery</a></li>
				  </ul>
				</li>

                

              
            
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Latest News</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <a class="btn btn-large btn-success" href="list.html">Show Products</a>
      </div>

      <hr>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <ul class="thumbnails">
          <li class="span4">
            <div class="thumbnail">
              <img alt="300x200" src="http://placehold.it/300x200">
              <div class="caption">
                <h3>Product A</h3>
                <p></p>
                <p><a href="checkout.html" class="btn btn-primary">Add To Cart</a> <select name="fruit">
  <option value="1">1/2 kg : Rs 100</option>
  <option value="2">1 kg : Rs 200</option>
  <option value="3">1.5 kg : Rs 300</option>
  <option value="4">Packed : Rs 250</option>
</select>
              </div>
            </div>
          </li>
          <li class="span4">
            <div class="thumbnail">
              <img alt="300x200" src="http://placehold.it/300x200">
              <div class="caption">
                <h3>Product B</h3>
                <p></p>
                <p><a href="checkout.html" class="btn btn-primary">Add To Cart</a> <select name="fruit">
  <option value="1">1/2 kg : Rs 100</option>
  <option value="2">1 kg : Rs 200</option>
  <option value="3">1.5 kg : Rs 300</option>
  <option value="4">Packed : Rs 250</option>
</select>
              </div>
            </div>
          </li>
          <li class="span4">
            <div class="thumbnail">
              <img alt="300x200" src="http://placehold.it/300x200">
              <div class="caption">
                <h3>Product C</h3>
                <p></p>
                <p><a href="checkout.html" class="btn btn-primary">Add To Cart</a> <select name="fruit">
  <option value="1">1/2 kg : Rs 100</option>
  <option value="2">1 kg : Rs 200</option>
  <option value="3">1.5 kg : Rs 300</option>
  <option value="4">Packed : Rs 250</option>
</select>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <hr>

      <?php
echo "</div></div> <!-- /container -->";
include 'footer.php';
?>


  </body>
</html>