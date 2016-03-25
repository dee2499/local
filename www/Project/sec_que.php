<?php session_start(); ?>

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
    		
		<form name="sec" action="" method="get">
		<table>
		<tr>
		<th><?php echo "<br>Security Question :".$_SESSION["sec_que"]; ?></th>
		</tr>
		<tr>
		<td><input type="text" id="txt6" name="txtans" size="15" /><br/></td>
		</tr>
		<td><input type="submit" value="OK" name="Submit"/><br/></td>
		</tr>
		</table>
		</form>
		<?php
		if(isset($_GET["Submit"]))
		{
		$a=$_SESSION["Answer"];
			if($a==$_GET["txtans"])
			{
			echo "Your Password is ".$_SESSION["Password"];
			}	
		}
		?>
		
			

			
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