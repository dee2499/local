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
$s=$_GET["st"];
$con=mysql_pconnect("localhost","root","");
mysql_select_db("realestate",$con);
$query8 = "SELECT * FROM Property where Status='$s' ";
$rs=mysql_query($query8,$con) or die(mysql_error());

while($r=mysql_fetch_assoc($rs))
{
$fn1=$r["Pro_type"];
$ln1=$r["Pro_Area"];
$be=$r["Bedroom"];
$ba=$r["Baths"];
$pr=$r["Price"];
$ad=$r["Address"];
$de=$r["Description"];
$cit=$r["City"];
$st=$r["State"];
$dat=$r["Date"];
echo "$fn1";
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