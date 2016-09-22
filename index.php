<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BookShare</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css">
    <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Gem style -->
    <link rel="stylesheet" href="css/product.css">
    <!-- Gem style -->
    <script src="js/modernizr.js"></script>
    <!-- Modernizr -->
    <link rel="stylesheet" href="css/animate.min.css">

    <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
    <script src="js/index.js"></script>
    <script src="js/carousel.js"></script>

    <!--scrolling animation-->
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();

    </script>




<?php



include "inc/init.php";



$page->title = "Welcome to ". $set->site_name;

$presets->setActive("home"); // we highlight the home link


include 'header.php';

?>
</head><body>
<body style="padding:0px; margin:0px;  background-color:#ff5050;font-family:Arial, sans-serif">


       
                <h3><center> BookShare</center></h3><br>
            </div>
                </div><div class="wow slideInRight">
            <div class="row gallary">
                <iframe src="Flip_turn/indexcat.php" width="100%" height="950" frameborder="0" style="border: 0"></iframe>
            </div>

            <a id="What_We_Offer"></a>
            <div class="row" id="WhatWeOffer">
                <div class="container">
                    <div class="wow slideInLeft">
                        <div class="row">
                            <div class="wow pulse animated" data-wow-delay="300ms" data-wow-duration="2s" style="visibility: visible; -webkit-animation-duration: 2s; -webkit-animation-delay: 300ms; -webkit-animation-iteration-count: infinite;">
                                <div class="product_head">What We Offer</div>
                            </div>
                            <div class="col-md-4 col-sm-6 products ">
                                <h4><font color = "red"> Share books with Strangers</font> </h4>
                                <p>Let us know what book you would like to share and we will update here on our website so anyone around can take the benefit of the book you have by contacting you.
                                </p>
                            </div>
                            <br>

                            <div class="col-md-4 col-sm-6 products ">
                                <h4><font color = "red">Donate Books to strangers</font></h4>
                                <p> Do you have books , and you no more use it ? Donate it , help others !
                                </p>
                                
                            </div><br>

                            <div class="col-md-4 col-sm-6 products  ">
                                <h4><font color = "red">Are you looking for donated books</font></h4>
                                <p>Come stop by here , select from the range of donated book , by your far away friend.
                                </p>
                            </div><br>

                            <div class="col-md-4 col-sm-6 products ">
                                <h4><font color = "red">Do you wish to request a stranger friend to donate a book , that is of no use to him ?</font></h4>
                                <p> Come along here , request a book you wish to own and we will notify your far away friends.</p>
                                
                            </div><br>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="wow bounceInUp">
                    <main>
        <!--<a name="WhoWeAre"></a>-->
          <a id="WhoWeAre"></a>
        <section id="cd-team" class="cd-section whoweare">
            <div class="cd-container" >
               
                <ul>
                    <li>
                         
                        <a href="#0" data-type="member-1">
                             <h1>Who are we ?</h1>
                            <figure>
                                <img src="img\about\1.jpg" alt="Team member 1">
                                <div class="cd-img-overlay"><span>View Bio</span></div>
                            </figure>

                            
                        </a>
                    </li>
                    <li>
                        <a href="#0" data-type="member-2">
                            <h1>What we do ?</h1>
                            <figure>
                                <img src="img\about\2.jpg" alt="Team member 1">
                                <div class="cd-img-overlay"><span>View Bio</span></div>
                            </figure>

                            
                        </a>
                   
</li>
                    

                    <li>
                          
                        <a href="#0" data-type="member-3">
                            <h1>Our Mission</h1>
                            <figure>
                                <img src="img\about\3.jpg" alt="Team member 1">
                                <div class="cd-img-overlay"><span>View Bio</span></div>
                            </figure>

                           
                        </a>
                    </li>
                </ul>
            </div> <!-- cd-container -->
        </section> <!-- cd-team -->

        <div class="cd-overlay"></div>
    </main>
                </div>


                <div class="cd-member-bio member-1">
                    <div class="cd-member-bio-pict">
                        <img src="Images/member-bio-img-1.jpg" alt="Member Bio image">
                    </div>
                    <!-- cd-member-bio-pict -->

                    <div class="cd-bio-content">
                        <h1>Who are we ?</h1>
                        <p>I am a third year engineering student , working on this website to help students and book reader all around the world to connect through internet.
                           to share,donate,resell,buy and sell books.This is a consumer to consumer portal for every reader to sell or donate the books and others can buy it at much cheaper price or at no cost. We connect the readers who want to sell or donate their used books and readers who want to take the books which matters to them.
                           We save your time from the task of arranging for books at any time , you dont have to go in search of books anymore by paying hefty amount of cost.                    </div>
                    <!-- cd-bio-content -->
                </div>
                <!-- cd-member-bio -->

                <div class="cd-member-bio member-2">
                    <div class="cd-member-bio-pict">
                        <img src="Images/member-bio-img-2.jpg" alt="Member Bio image">
                    </div>
                    <!-- cd-member-bio-pict -->

                    <div class="cd-bio-content">
                        <h1>What we do ?</h1>
                        <p>This website is a platform for the readers to request for books of their interest , and medium for sharing and donating books </p>
                        
                    </div>
                    <!-- cd-bio-content -->
                </div>
                <!-- cd-member-bio -->

                <div class="cd-member-bio member-3">
                    <div class="cd-member-bio-pict">
                        <img src="Images/member-bio-img-3.jpg" alt="Member Bio image">
                    </div>
                    <!-- cd-member-bio-pict -->

                    <div class="cd-bio-content">
                        <h1>Our Mission</h1>
                        <p> To spread all over the world and give out the best services to all the readers</p>
                    <!-- cd-bio-content -->
                </div>
                <!-- cd-member-bio -->
                <a href="#0" class="cd-member-bio-close">Close</a>
                <!-- close the author bio section -->

                <script src="js/main.js"></script>
                <!-- Gem jQuery -->

            </div>

        <a id="Contact_us"></a>
        <div class="contact_us">
            
                <!--<h3>Get In Touch</h3>
                <address>
                    14-15, Infosquare complex<br>
                    Near chandani chowk<br>
                    Pune- 411038<br>
                </address>
                <br>
        <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.4722552288813!2d73.78548139607848!3d18.507549224724873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2be45a9bc2ecf%3A0x9a674987afed2d85!2sChandani+Chowk%2C+Bavdhan%2C+Pune%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1428339985339" width="100%" height="400" frameborder="0" style="border:0"></iframe>
</div>--!>
<center></center>
        


       
 
    

<!-- jQuery -->
</body>
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
<?php
echo "</div></div> <!-- /container -->";
include 'footer.php';
?>

</html>