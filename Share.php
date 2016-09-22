
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
global $pdo ;
  $pdo= new PDO('mysql:host=localhost;dbname=ewala','root','');




  ?>
  </head>


  <body>

    

      
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
           

    


  <form class='form-horizontal well' form action="" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Book Details You want to share :)</legend>
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
                    <label>Select</label>
                  </div>
                  <div class='controls'>
                    <select name="type" required>
                      <option value="engineering">Engineering</option>
                      <option value="medical">Medical</option>
                      <option value="law">Law</option>
                      <option value="commerce">Commerce</option>
                      <option value="schools">Schools</option>
                      <option value="exams">Exams</option>
                      <option value="arts">Arts</option>
                      <option value="others">Others</option>
                    </select>
                  </div>
                </div>
                <div class='control-group'>
                  <div class='control-label'>
                    <label>Author</label>
                  </div>
                  <div class='controls'>
                    <input type='text' name='author' class='input-large'required/>
                  </div>
                </div>
                <div class='control-group'>
                  <div class='control-label'>
                    <label>Year</label>
                  </div>
                  <div class='controls'>
                    <input type='text' name='year' class='input-large'required/>
                  </div>
                </div><div class='control-group'>
                  <div class='control-label'>
                    <label>Subject</label>
                  </div>
                  <div class='controls'>
                    <input type='text' name='subject' class='input-large'required/>
                  </div>
                </div><div class='control-group'>
                  <div class='control-label'>
                    <label>MRP on Book</label>
                  </div>
                  <div class='controls'>
                    <input type='text' name='mrp' class='input-large'required/>
                  </div>
                </div><div class='control-group'>
                  <div class='control-label'>
                    <label>Quoted Price</label>
                  </div>
                  <div class='controls'>
                    <input type='text' name='price' class='input-large'required/>
                  </div>
                

                   
                </div><div class='control-group'>
                  <div class='control-label'>
                    <label>Provide a photo of the cover</label>
                  </div>
                  <div class='controls'>
                    <input type="file" name="image">
                    <div class='control-group'>
                  <div class='control-label'>
                    <label>Telephone</label>
                  </div>
                  <div class='controls'>
                    <input type='tel' name='tel' class='input-large'required/>
                  </div>
                   
                </div>
                  </div>
                </div>
                <input type='hidden' name='token' value='".$_SESSION['token']."'>

                <div class='control-group'>
                  <div class='controls'>
                  <button type='submit' id='submit' name="submit" class='btn btn-primary'>Send</button>
                  </div>
                </div>
              </fieldset>
        </form>
        <?php
if (isset($_POST['submit'],$_FILES['image'])) {
  $author = $_POST['author'];
  $year = $_POST['year'];
  $subject = $_POST['subject'];
  $mrp = $_POST['mrp'];
  $price = $_POST['price'];
  
  $date = date("Y/m/d H:i:s");
  $type = $_POST['type'];

  
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    $url = "photo/".$file_name; 

    move_uploaded_file($file_tmp,$url);  

    $query = $pdo->prepare('insert into mls_books(userid,type,author,year,subject,mrp,price,photo,date) values(?,?,?,?,?,?,?,?,?)');
    $query->bindValue(1,$_SESSION['user']);
    $query->bindValue(2,$type);
    $query->bindValue(3,$author);
    $query->bindValue(4,$year);
    $query->bindValue(5,$subject);
    $query->bindValue(6,$mrp);
    $query->bindValue(7,$price);
    $query->bindValue(8,$url);
    $query->bindValue(9,$date);
    $query->execute();
  }
        ?>
        </div>
  </div><!-- /container -->
<?
include 'footer.php'; ?>