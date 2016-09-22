
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
        
            <li><a href="vegetable.php">Vegetables</a></li>
            <li><a href="fruit.php">Fruits</a></li>
            <li><a href="flower.php">Flowers</a></li>
            <li><a href="dairy.php">Dairy Products</a></li>
            <li><a href="health.php">Health Care</a></li>
            <li><a href="newspaper.php">Newspaper and magazines</a></li>
            <li><a href="laundry.php">Laundry</a></li>
          
          </ul>
        </li>
<li><a href="checkout.php">Checkout</a></li>
                

              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <div class="row-fluid">
      	<div class="span12">
      		<h1>Checkout</h1>
      	</div>
      </div>

      <div class="row-fluid">
      	<div class="span12">
      		<div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">My Cart</div>
             
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                    	<div class="alert alert-warning">
                    		<h4>Warning!</h4>
                    		<p>Say no to convinience charges by shopping for more than Rs.1000.</p>
                    	</div>
                        <table class="table table-striped table-hover">
                        	<tr>
                        		<th>Image</th>
                        		<th>Title</th>
                        		<th>Price</th>
                        		<th>Quantity</th>
                        		<th>Total</th>
                        	</tr>
                        	<tr>
                        		<td class="span1"><a href='javascript:;'><img src='http://placehold.it/50x50&text=Image+A' /></a></td>
                        		<td class="span5">
                        			<a href='javascript:;'>Product A</a>

                        		</td>
                        		<td class="span2">$12.99</td>
                        		<td class="span2">
                        			<div class="row-fluid">
                        				<div class="span7">
                        					<input type="text" id="name" value="1" placeholder="Qnt." class="input-mini">
                        				</div>
                        				<div class="span5">
                        					<button type="submit" class="btn btn-danger btn-mini"><i class="icon-remove icon-white"></i></button>
                        				</div>
                        			</div>
                        		</td>
                        		<td class="span1">$12.99</td>
                        	</tr>
                        	<tr>
                        		<td class="span1"><a href='javascript:;'><img src='http://placehold.it/50x50&text=Image+B' /></a></td>
                        		<td class="span5">
                        			<a href='javascript:;'>Product B</a>

                        		</td>
                        		<td class="span2">$22.17</td>
                        		<td class="span2">
                        			<div class="row-fluid">
                        				<div class="span7">
                        					<input type="text" id="name" value="1" placeholder="Qnt." class="input-mini">
                        				</div>
                        				<div class="span5">
                        					<button type="submit" class="btn btn-danger btn-mini"><i class="icon-remove icon-white"></i></button>
                        				</div>
                        			</div>
                        		</td>
                        		<td class="span1">$22.17</td>
                        	</tr>
                        	<tr>
                        		<td class="span1"><a href='javascript:;'><img src='http://placehold.it/50x50&text=Image+C' /></a></td>
                        		<td class="span5">
                        			<a href='javascript:;'>Product C</a>

                        		</td>
                        		<td class="span2">$59.18</td>
                        		<td class="span2">
                        			<div class="row-fluid">
                        				<div class="span7">
                        					<input type="text" id="name" value="1" placeholder="Qnt." class="input-mini">
                        				</div>
                        				<div class="span5">
                        					<button type="submit" class="btn btn-danger btn-mini"><i class="icon-remove icon-white"></i></button>
                        				</div>
                        			</div>
                        		</td>
                        		<td class="span1">$59.18</td>
                        	</tr>
                        	<tr>
                        		<th colspan="4"></th>
                        		<th>$658.00</th>
                        	</tr>
                        </table>
                        <hr />
                        <div class="row-fluid">
                        	<div class="span6">
                        		<div class="row-fluid">
                        			<div class="span3">
                        				<label for="coupon">Coupon Code</label>
                        			</div>
                        			<div class="span6">
                        				<input type="text" id="coupon" value="" placeholder="Coupon Code" class="input-small">
                        			</div>
                        		</div>
                        	</div>
                        	<div class="span6">
                        		<div class="pull-right">
                        			<button class="btn btn-primary">Update Cart</button>
                        		</div>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
      	</div>
      </div>

      
      	</div>
      </div>

      <hr>

       <?php
echo "</div></div> <!-- /container -->";
include 'footer.php';
?>
    

    </div> <!-- /container -->

  </body>
</html>
