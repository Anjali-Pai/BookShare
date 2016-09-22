
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
$query = $pdo->prepare("select * from mls_books where type = 'engineering'");
    $query->execute();
  $data =   $query->fetchAll();
  ?>
  </head>


  <body>

    

      
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
           

    
      <!-- Example row of columns -->
      <div class="row-fluid">
        <ul class="thumbnails">
          <?php foreach ($data as $key => $value) {
              if ($value['photo']==$_GET['url']) {
                # code...
              
           ?>
          <li class="span3">
            <div class="thumbnail">
                  <img style="width:400px;height:200px;" src=<?php echo $value['photo'] ;?> alt="image 1"><?php  ?>
              
            </div>
          </li>
          <span>
            <td><th><h4> Contact details:</h4></th><br>
          <li class="">
            <div style="">
               
                  <tr><h7> Author :  <?php echo $value['author']; ?> </h7> <br></tr>
                  <tr><h7> Year :  <?php echo $value['year']; ?> </h7> <br></tr>
                  <tr><h7> Subject :  <?php echo $value['subject']; ?> </h7> <br></tr>
                  <tr><h7> MRP on book :  <?php echo $value['mrp']; ?> </h7> <br></tr>
                  <tr><h7> Quoted Price :  <?php echo $value['price']; ?> </h7> <br></tr>
                  <tr><h7> Date :  <?php echo $value['date']; ?> </h7> <br></tr>

              </td>    
                  <td>
                  <th><h4 >Contact details:</font></h4></th> <br>
                  <?php

                      $query1 = $pdo->prepare('select * from ewalausers where userid = ?');
                      $query1->bindValue(1, $value['userid']);
                      $query1->execute();
                      $data1 = $query1->fetch();
                   ?>

                  <tr><h7>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspName :  <?php echo $data1['display_name']; ?> </h7></tr><br>
                  <tr><h7>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Email :  <?php echo $data1['email']; ?> </h7></tr> <br>
                </td>
            </div>
          </li>
          <?php }} ?>
        </ul>
      </div>

        </ul>
      </div>
    </span>

      <hr>

           

      
    </div> <!-- /container -->
<?php
echo "</div></div> <!-- /container -->";
include 'footer.php';
?>
  </body>
</html>
