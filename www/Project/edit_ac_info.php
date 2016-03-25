<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <title>Downloaded from link</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
   <?php include "head2.php" ?>
    <!-- Container -->
    <div id="container">
    	<!-- Content -->
    	<div id="content">
 
 <?php
$rl=$_SESSION["by"] ;
$con=mysql_pconnect("localhost","root","");
mysql_select_db("realestate",$con);

$query="Select * from view1 where Email_Id='$rl'" ;

$rs=mysql_query($query,$con) or die(mysql_error());

while($r=mysql_fetch_assoc($rs))
{
$fn1=$r["FirstName"];
$ln1=$r["LastName"];
$fn=$r["Email_Id"];
$ln=$r["Contact_No"];

}
?>

<?php
$con1=mysql_pconnect("localhost","root","");
mysql_select_db("realestate",$con1);

if(isset($_REQUEST["Submit"]))
{
$fnm1=$_REQUEST["textfnm"];
$lnm1=$_REQUEST["textlnm"];
$fnm=$_REQUEST["textfn"];
$lnm=$_REQUEST["textln"];


$query1="update registation_master set  FirstName='$fnm1',LastName='$lnm1', Email_Id='$fnm',Contact_No=$lnm where Email_Id='$rl'";

mysql_query($query1,$con1) or die(mysql_error());

}

?>
       
		    <form id="form1" name="form1" method="post" action="">
		      
		      <table width="572" border="0" >
		         <tr>
		          <td width="274">FirstName</td>
   		          <td width="288"> <input type="text" name="textfnm"  value="<?php echo $fn1 ?>"/> <br/> </td>
   		      </tr>
		        
		        <tr>
		          <td>LastName</td>
   		          <td> <input type="text" name="textlnm"  value="<?php echo $ln1 ?>" /><br/> </td>
		      </tr>
		        <tr>
		          <td width="274">Email_Id</td>
   		          <td width="288"> <input type="text" name="textfn"  value="<?php echo $fn ?>"/> <br/> </td>
   		      </tr>
		        
		        <tr>
		          <td>Contact_No</td>
   		          <td> <input type="text" name="textln"  value="<?php echo $ln ?>" /><br/> </td>
		      </tr>
		        <tr>
		          <td><input type="submit" name="Submit" value="Save"/></td>
		          <td><input type="submit" name="Submit2" value="Reset"/></td>
	            </tr>
	          </table>
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