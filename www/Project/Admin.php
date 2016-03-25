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
 <?php
$nm=$_SESSION["ad"] ;
$con=mysql_pconnect("localhost","root","");
mysql_select_db("realestate",$con);

$query="Select * from registation_master where Email_Id='$nm'" ;

$rs=mysql_query($query,$con) or die(mysql_error());

while($r=mysql_fetch_assoc($rs))
{
$fnm=$r["FirstName"];
$lnm=$r["LastName"];
$cno=$r["Contact_No"];
$cem=$r["Email_Id"];
$cadd=$r["Address"];
$city=$r["City"];
$pcod=$r["Pincode"];
$sta=$r["State"];
$rl=$r["Role"];

}



?>
        <h1>My Dashboard</h1>
        	<h2>hello, <?php echo "$fnm" ;?> <?php echo "$lnm" ;?></h2>

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