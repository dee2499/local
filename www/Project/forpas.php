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
    		
			<form name="frm4" id="frm4" action="">
		<table align="center">
		<tr>
		<th>Enter Email</th>
		<td><input type="txt" name="txt5" id="txt5" size="30"/><br/></td>
		</tr>
		
		<tr>
		<th></th>
		<td><input type="Submit" name="Submit"  value="Submit" /><br/></td>
		</tr>
			
		</table>
		</form>
		<?php
		if(isset($_GET["Submit"]))
		{
		$em=$_GET["txt5"];
		
		$con=mysql_pconnect("localhost","root","");
		mysql_select_db("realestate",$con);
		$query="Select * from login_master where Email_Id='".$em."'";
		$qr=mysql_query($query,$con) or die(mysql_error());
		if($temp=mysql_fetch_assoc($qr))
		{
			$_SESSION["Email_Id"]=$em;
			$_SESSION["Password"]=$temp["Password"];
			$_SESSION["sec_que"]=$temp["sec_que"];
			$_SESSION["Answer"]=$temp["Answer"];
			
			header('location:sec_que.php');
		}
		else
		{
		echo "<h2>Invalid </h2>";
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