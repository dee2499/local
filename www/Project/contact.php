<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <title>Downloaded from link</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
   <?php include "head.php" ?>

    <!-- Container -->
    <div id="container">
    	<!-- Content -->
    	<div id="content">
    		<h4>Get in touch!</h4>
    		<p>Consectetur adipiscing elit. commodo, risus quam posuere nulla, in egestas dolor mi eu dolor. Duis erat felis, sollicitudin vulputate interdum nec, venenatis vel felis.</p>

    		<div id="map"></div>

    		<h4>Send us a message</h4>

    		<form />
    			<div class="row first">
    				<label>Name</label>
    				<input type="text" name="name" value="" />
    			</div>
    						
    			<div class="row">
    				<label>Email</label>
    				<input type="text" name="mail" value="" />
    			</div>
    						
    			<div class="row">
    				<label>Message</label>
    				<textarea name="message"></textarea>
    			</div>

    			<input class="button" type="submit" value="Send" />
    		</form>
    	</div>
    	<!-- End Content -->

    	<?php include "sidebar.php" ?>
    </div>
    <!-- End Container -->

   <?php include "footer.php" ?>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.slides.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/gmap3.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

		<script type="text/javascript" src="js/superfish.js"></script>
		<script type="text/javascript">

		// initialise plugins
		jQuery(function(){
			jQuery('ul.sf-menu').superfish();
		});

		</script>
</body>
</html>