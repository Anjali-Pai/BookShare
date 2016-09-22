<?php





    if(!isset($_SESSION['token']))
        $_SESSION['token'] = sha1(rand()); // random token



?>





			
			
					<div class="span8">
						<a href="#">Terms of Service</a>  &nbsp    &nbsp  &nbsp  
						<a href="#">Privacy</a>     &nbsp  &nbsp  &nbsp    &nbsp 
						<a href="#">Security</a>
					</div>
					<div class="span4">
						<p class="muted pull-right">© 2016 BookShare. All rights reserved</p>
					</div>
				

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo $set->url;?>/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

<script src="<?php echo $set->url;?>/js/vendor/bootstrap.min.js"></script>

<!-- Validate Plugin -->
<script src="<?php echo $set->url;?>/js/vendor/jquery.validate.min.js"></script>

<script src="<?php echo $set->url;?>/js/main.js"></script>

<script>
  
</script>
</body>
</html>