
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
        
          <li><a href="Engineering.php">Engineering</a></li>
            <li><a href="Medical.php">Medical</a></li>
            <li><a href="Commerce.php">Commerce</a></li>
            <li><a href="Law.php">Law</a></li>
            <li><a href="Exams.php">Exams</a></li>
            <li><a href="Schools.php">Schools</a></li>
            <li><a href="Arts.php">Arts</a></li>
            <li><a href="Others.php">Others</a></li>
          
          </ul>
        </li>

                

              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>


  <form class='form-horizontal well' action='#' method='post'>
            <fieldset>
                <legend> Book Details </legend>
<?php
              echo"  <div class='control-group'>
                  <div class='control-label'>
                    <label>Your Email</label>
                  </div>
                  <div class='controls'>
                    <input type='text' name='email' class='input-large' value='".($user->islg() ? $user->filter->email : "")."'>
                  </div>
                </div>";
?>
                <div class='control-group'>
                  <div class='control-label'>
                    <label>Book Name</label>
                  </div>
                  <div class='controls'>
                    <textarea name='message' rows='2' class='input-large'></textarea>
                  </div>
                </div>
                 <div class='control-group'>
                  <div class='control-label'>
                    <label>Author Name</label>
                  </div>

                  <div class='controls'>
                    <textarea name='message' rows='2' class='input-large'></textarea>
                  </div>
                </div>
                <div class='control-group'>
                  <div class='control-label'>
                    <label>Category</label>
                  </div>
                  <div class='controls'>
                    <select name="Category">
  <option value="1">Engineering</option>
  <option value="2">Commerce</option>
  <option value="3">Medical</option>
  <option value="4">Law</option>
    <option value="5">Arts</option>
      <option value="6">Schools</option>
        <option value="7">Others</option>
          <option value="8">Exams</option>
</select>
                  </div>
                </div>

<div class='control-group'>
                  <div class='control-label'>
                    <label>Mrp of Book</label>
                  </div>
                  <div class='controls'>
                   <input type="number" name="mrp">
                  </div>
                </div>

<div class='control-group'>
                  <div class='control-label'>
                    <label>Quoted Price</label>
                  </div>
                  <div class='controls'>
                        <input type="number" name="price">
                  </div>
                </div>

<div class='control-group'>
                  <div class='control-label'>
                    <label>Phone</label>
                  </div>
                  <div class='controls'>
                       <input type="tel" name="tel">
                  </div>
                </div>
                <div class='control-group'>
                  <div class='control-label'>
                    <label>Location</label>
                  </div>
                  <div class='controls'>
                    <textarea name='Address' rows='5' class='input-large'></textarea>
                  </div>
                </div>

                <input type='hidden' name='token' value='".$_SESSION['token']."'>

                <div class='control-group'>
                  <div class='controls'>
                  <button type='submit' id='submit' class='btn btn-primary'>Send</button>
                  </div>
                </div>
              </fieldset>
        </form>
        
        </div>
  </div><!-- /container -->
<?
include 'footer.php'; ?>