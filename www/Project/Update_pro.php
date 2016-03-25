<?php ob_start();?>
<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <title>Downloaded from link</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



</head>
<body>
   <?php include "head1.php" ?>
    <!-- Container -->
    <div id="container">
    	<!-- Content -->
    	<div id="content">
 
<?php
$em=$_SESSION["ag"] ;
$con=mysql_pconnect("localhost","root","");
mysql_select_db("realestate",$con);

$query="select * from property where Email_Id='$em'" ;

$rs=mysql_query($query,$con) or die(mysql_error());

while($r=mysql_fetch_assoc($rs))
{
$fn=$r["Pro_type"];
$ln=$r["Pro_Area"];
$be=$r["Bedroom"];
$ba=$r["Baths"];
$pr=$r["Price"];
$ad=$r["Address"];
$de=$r["Description"];
$cit=$r["City"];
$st=$r["State"];
$dat=$r["Date"];
}
?>

<?php
$con1=mysql_pconnect("localhost","root","");
mysql_select_db("realestate",$con1);

if(isset($_REQUEST["Submit"]))
{

$pty=$_REQUEST["text1"];
$par=$_REQUEST["textare"];
$bedd=$_REQUEST["textbad"];
$bat=$_REQUEST["textbath"];
$pri=$_REQUEST["textprice"];
$pad=$_REQUEST["textadd"];
$citt=$_REQUEST["textcity"];
$st1=$_REQUEST["textcity2"];
$dec=$_REQUEST["textdec"];
$dat1=$_REQUEST["textdat"];


$query1="update property set Pro_type='$pty',Pro_Area=$par,Bedroom=$bedd,
Baths=$bat,Price=$pri,Address='$pad',City='$citt',State='$st1',Description='$dec',Date='$dat1' where Email_Id='$em'";

mysql_query($query1,$con1) or die(mysql_error());

}

?>


<form action="update_property.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="477" border="1">
    
    <tr>
      <td><b>Property_type</b></td>
      <td><label>
        <input name="text1" type="text" value="<?php echo $fn ?>" />
 		</label>	  </td>
    </tr>
    <tr>
      <td><b>Property_Area</b></td>
      <td><input type="text" name="textare" value="<?php echo $ln ?>"/></td>
    </tr>
    <tr>
      <td><b>Bedroom</b></td>
      <td><input type="text" name="textbad" value="<?php echo $be ?>" /></td>
    </tr>
	<tr>
      <td><b>Bathroom</b></td>
      <td><input type="text" name="textbath" value="<?php echo $ba ?>" /></td>
    </tr>
    <tr>
      <td><b>Price</b></td>
      <td><input type="text" name="textprice" value="<?php echo $pr ?>" /></td>
    </tr>
	<tr>
      <td><b>Address</b></td>
      <td><label>
       <input type="text" name="textadd" value="<?php echo $ad ?>" />
      </label></td>
	</tr>
    <tr>
      <td><b>City</b></td>
      <td><label>
      <input type="text" name="textcity" value="<?php echo $cit ?>" />
      </label></td>
    </tr>
    <tr>
      <td><b>State</b></td>
      <td><label>
      <input type="text" name="textcity2" value="<?php echo $st ?>" />
      </label></td>
    </tr>
    <tr>
      <td><b>Description</b></td>
      <td>
       <input type="text" name="textdec" value="<?php echo $de ?>" /></td>
    </tr>
    <tr>
      <td><b>Date</b></td>
      <td><input type="text" name="textdat" value="<?php echo $dat ?>"/></td>
    </tr>
    <tr>
      <td><label>
        <input type="submit" name="Submit" value="Save"/>	
      </label></td>
      <td><input type="submit" name="Submit2" value="Reset"/></td>
    </tr>
  </table>
</form>
    	</div>
		
    	<!-- End Content -->

    	<?php include "sidebar.php"  ?>
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