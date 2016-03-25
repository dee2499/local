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
    		
			<form name="frm3" method="get" id="frm3">
		<table>
		<tr>
		<th>Old password</th>
		<td><input type="password" size="30" name="textold" id="txt3" /> <br/>
		</td>
		</tr>
		<tr>
		<th>New password</th>
		<td><input type="password" size="30" name="textnew" id="txt4" /> <br/>
		</td>
		</tr>
		<tr>
		<th>Confirm Password</th>
		<td><input type="password" size="30" name="textcp" id="txt4" /> <br/>
		</td>
		</tr>
		<tr>
		<th>
		</th>
		<td>
		<input type="Submit" name="Submit" value="Submit" /> <br/>
		</td>
		</tr>
		</table>
		</form>

<?php
$con=mysql_pconnect("localhost","root","");

mysql_select_db("realestate",$con);

if(isset($_REQUEST["Submit"]))
{
$old=$_REQUEST["textold"];
$new=$_REQUEST["textnew"];
$cnew=$_REQUEST["textcp"];

if($new==$cnew)
{

$query="update login_master set Password='$new' where Password='$old'";

mysql_query($query,$con);
echo "<br>password is change";
}
else
{ 
echo "Please Enter Correct Password";
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