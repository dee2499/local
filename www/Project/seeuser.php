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
   
<?php
	$rl=$_GET["Role"];	
$con=mysql_pconnect("localhost","root","");
mysql_select_db("realestate",$con);
	$today=date("Y-m-d");							
$query = "SELECT * FROM registation_master,login_master WHERE registation_master.Date='$today' AND login_master.Role=$rl  AND 		registation_master.EMAIL_ID= login_master.Email_Id ";

$rs=mysql_query($query,$con) or die(mysql_error());

while($r=mysql_fetch_assoc($rs))
{
$em=$r["Email_Id"];
$fn=$r["FirstName"];
$ln=$r["LastName"];
$ad=$r["Address"];
$ct=$r["City"];
$pc=$r["Pincode"];
$st=$r["State"];
echo "$fn";
}
?>


</div>
		
    	<!-- End Content -->

    	
    <!-- End Container -->
</div>
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