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
$nm=$_SESSION["by"] ;
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
?>		 <h3><b>My Dashboard</b></h3>
		<h4>hello, <?php echo "$fnm" ;?> <?php echo "$lnm" ;?></h4> <br/> <br/>

       <h1> From your my account Dashbord you have to ability to view a snapshot of you recent account activity and update your account information select a link below to view of edit information<br /><br />  <br/>  </h1>
		
		
		<form >
		<table  align="	center" width="355" border="1">
		 <tr>
	   <th><h3><u>Account Information</u></h3></th>
	
	   <td> <a href="edit_ac_info.php">Edit </a><br/></td>
	   </tr>
	   <tr>
		<td> FirstName </td> 
		<td width="17"> <?php echo "$fnm" ;?> <br/></td> 
		</tr>
		<tr></tr><tr></tr><br/>
		<tr>
		<td> LastName </td><td>  <?php echo "$lnm" ;?> <br/> </td> 
		</tr>
		<tr>
		<td> Contact_No  </td><td> <?php echo "$cno" ;?> <br/> </td>  
		</tr>
		<tr>
		<td> Email_Id  </td><td> <?php echo "$cem" ;?>  <br/></td>  
		</tr>
	   <tr><th></th></tr>
	   <tr><th></th></tr>
	   <tr>
	   <th><h3><u>Address Book</u></h3></th>
	<td><a href="Edit_byer.php">Edit </a><br/></td>
	   </tr><br/><br/>
	   <tr>
		<td> FirstName </td> <td> <?php echo "$fnm" ;?> <br/></td> 
		</tr>
		<tr>
		<td>LastName </td><td>  <?php echo "$lnm" ;?> <br/> </td>
		</tr>
		<tr>
		<td> Contact_No  </td><td> <?php echo "$cno" ;?> <br/> </td>
		</tr>
		<tr>
		<td> Email_Id  </td><td> <?php echo "$cem" ;?>  <br/></td>    
		</tr>
		<tr>
		<td> Address  </td><td> <?php echo "$cadd" ;?> <br/> </td>
		</tr>
		<tr>
		<td> City  </td><td> <?php echo "$city" ;?>  <br/></td>
		</tr>
		<tr>
		<td> Pincode </td><td> <?php echo "$pcod" ;?> <br/></td>
		</tr>
		<tr>	
		<td> State </td><td> <?php echo "$sta" ;?> <br/> </td>
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