
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BookShare</title>
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


  <body style="padding:0px; margin:0px;  background-color:black;font-family:Arial,font-color:white;  sans-serif">

    

      
        
      
<hr>
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1><center>Donote Share and buy books</center></center> </h1>
       
      </div>

      <hr>
      <div class="wow bounceInUp">
                    <main>
        <!--<a name="WhoWeAre"></a>-->
          <a id="WhoWeAre"></a>
        <section id="cd-team" class="cd-section whoweare">
            <div class="cd-container" >
               
         

        <div class="cd-overlay"></div>
    </main>
                </div>

                <div class="wow bounceInUp">
                    <main>
        <!--<a name="WhoWeAre"></a>-->
        
        <section id="cd-team" class="cd-section whoweare">
            <div class="cd-container" >
               
                <ul>
                    <li>
                         
                        <a href="Share.php" data-type="member-1">
                             <h3>Engineering</h3>
                   <img src="Flip_turn\images\Engineering.jpg" width ="250px" height="250px" alt="image 1">
                    <p><a href="Share.php" class="btn btn-primary">Share Books</a>&nbsp
                <a href="Engineering.php" class="btn btn-primary">View Books</a></p>
             

                            
                        </a>
                    </li>
                    <li>
                        <a href="Share.php" data-type="member-2">
                               <h3>Medical</h3>
               <img src="Flip_turn\images\Medical.jpg" width ="250px" height="60px"  alt="image 1">
     <p><a href="Share.php" class="btn btn-primary">Share Books</a>&nbsp<a href="Medical.php" class="btn btn-primary">View Books</a></p>
             

                            
                        </a>
                   
</li>
                    

                    <li>
                          
                        <a href="Share.php" data-type="member-3">
                            <h3>Commerce</h3>
                    <img src="Flip_turn\images\Commerce.jpg" width ="250px" height="250px"  alt="image 1">          
                <p><a href="Share.php" class="btn btn-primary">Share Books</a>&nbsp<a href="Commerce.php" class="btn btn-primary">View Books</a></p>
             
                           
                        </a>
                    </li>
                </ul>
                    <li>
                         
                        <a href="Share.php" data-type="member-1">
                              <h3>Law</h3>
                
      <img src="Flip_turn\images\Law.jpg" width ="250px" height="250px"  alt="image 1">
<p><a href="Share.php" class="btn btn-primary">Share Books</a>&nbsp<a href="Law.php" class="btn btn-primary">View</a></p>
              

                            
                        </a>
                    </li>
                    <li>
                        <a href="Share.php" data-type="member-2">
                            
                            <h3>Schools</h3>
                
        <img src="Flip_turn\images\Schools.jpg" width ="250px" height="250px" alt="image 1">

        <p><a href="Share.php" class="btn btn-primary">Share Books</a>&nbsp<a href="Schools.php" class="btn btn-primary">View Books</a></p>
             
                        </a>
                   
</li>
                    

                    <li>
                          
                        <a href="Share.php" data-type="member-3">
                   
                            <h3>Arts</h3>
      <img src="Flip_turn\images\Arts.jpg" width ="250px" height="250px" alt="image 1">
                     <p><a href="Share.php" class="btn btn-primary">Share Books</a>&nbsp<a href="Arts.php" class="btn btn-primary">View Books</a></p>
             
                           
                        </a>
                    </li>
                     <li>
                          
                        <a href="Share.php" data-type="member-3">
                            
                            <h3>Others</h3>
      <img src="Flip_turn\images\Others.jpg" width ="60px" height="60px" alt="image 1">
                
                <p><a href="Share.php" class="btn btn-primary">Share Books</a>&nbsp<a href="Others.php" class="btn btn-primary">View Books</a></p>
      

                           
                        </a>
                    </li>
                </ul>
            </div> <!-- cd-container -->
        </section> <!-- cd-team -->

        <div class="cd-overlay"></div>
    </main>
                </div>

      <!-- Example row of columns -->
      
              
               

           
              
              
        
      
              
            
             
               
               
          
         
                
            
                     
         
                
          

      <hr>

      <?php
echo "</div></div> <!-- /container -->";
include 'footer.php';
?>
    

  </body>
</html>
