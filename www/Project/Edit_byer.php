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
$fn=$r["FirstName"];
$ln=$r["LastName"];
$ad=$r["Address"];
$ct=$r["City"];
$pc=$r["Pincode"];
$st=$r["State"];

}
?>

<?php
$con1=mysql_pconnect("localhost","root","");
mysql_select_db("realestate",$con1);

if(isset($_REQUEST["Submit"]))
{

$fnm=$_REQUEST["textfn"];
$lnm=$_REQUEST["textln"];
$addr=$_REQUEST["textad"];
$cty=$_REQUEST["textcity"];
$pcd=$_REQUEST["textpin"];
$stt=$_REQUEST["textst"];

$query1="update registation_master set FirstName='$fnm',LastName='$lnm',Address='$addr',City='$cty',Pincode=$pcd,State='$stt' where Email_Id='$rl'";

mysql_query($query1,$con1) or die(mysql_error());

}

?>
        
		
		<form id="form1" name="form1" method="post" action="">
		
   		<table width="683" border="0" >
		
		  <tr>
   		  <td width="262"> FirstName </td>
   		  <td width="411"> <input type="text" name="textfn"  value="<?php echo $fn ?>"/> <br/> </td>
   		  </tr>
   		  
   		  <tr>
		  <td> LastName    </td>
   		  <td> <input type="text" name="textln"  value="<?php echo $ln ?>" /><br/> </td>
		  </tr>
		  
   		  <tr>
		  <td> Address   </td>
   		  <td>  <input type="text" name="textad" value="<?php echo $ad ?>"/><br/>  </td>
   		  </tr>
		  
   		  <tr>
   		  <td> City     </td>
   		  <td>  <input type="text" name="textcity"   value="<?php echo $ct ?>"/>
   		  <br /> </td>
   		  </tr>
		  
		  
		  <tr>
   		  <td> Pincode      </td>
   		  <td>  <input type="text" name="textpin"   value="<?php echo $pc ?>"/>
   		  <br /> </td>
   		  </tr>
		  
		  <tr>
   		  <td> State      </td>
   		  <td>  <p>
   		    <input type="text" name="textst"   value="<?php echo $st ?>"/>
   		    </p>
   		    <p><br /> 
	        </p></td>
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