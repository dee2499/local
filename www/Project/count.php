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
				$con=mysql_pconnect("localhost","root","");

				mysql_select_db("realestate",$con);

				$today=date("Y-m-d");
				$query = "SELECT * FROM registation_master,login_master WHERE registation_master.Date='$today' AND login_master.Role='Owner'  AND 		registation_master.EMAIL_ID= login_master.Email_Id ";
				$result=mysql_query($query,$con);
				
				$cn=mysql_num_rows($result);
				
				//echo $cn;
	?>
	<?php
				$con=mysql_pconnect("localhost","root","");

				mysql_select_db("realestate",$con);

				$today=date("Y-m-d");
				$query1 = "SELECT * FROM registation_master,login_master WHERE registation_master.Date='$today' AND login_master.Role='Agent'  AND 		registation_master.EMAIL_ID= login_master.Email_Id ";
				$result1=mysql_query($query1,$con);
				
				$cn1=mysql_num_rows($result1);
				
				//echo $cn;
	?>			
				
	<?php
				$con=mysql_pconnect("localhost","root","");

				mysql_select_db("realestate",$con);

				$today=date("Y-m-d");

				$query2 = "SELECT * FROM registation_master,login_master WHERE registation_master.Date='$today' AND login_master.Role='Buyer'  AND 		registation_master.EMAIL_ID= login_master.Email_Id ";
				
				$result2=mysql_query($query2,$con);
				
				$cn2=mysql_num_rows($result2);
				
				//echo $cn;
	?>						
	<?php
				$con=mysql_pconnect("localhost","root","");

				mysql_select_db("realestate",$con);

				$today=date(Y-mm-dd);
				$query3 = "SELECT * FROM login_master WHERE Role='Owner' ";
				$result3=mysql_query($query3,$con);
				
				$cn3=mysql_num_rows($result3);
				
				//echo $cn;
	?>		
	<?php
				$con=mysql_pconnect("localhost","root","");

				mysql_select_db("realestate",$con);

				$today=date(Y-mm-dd);
				$query4 = "SELECT * FROM login_master WHERE Role='Agent' ";
				$result4=mysql_query($query4,$con);
				
				$cn4=mysql_num_rows($result4);
				
				//echo $cn;
	?>		
	<?php
				$con=mysql_pconnect("localhost","root","");

				mysql_select_db("realestate",$con);

				$today=date(Y-mm-dd);
				$query5 = "SELECT * FROM login_master WHERE Role='Buyer' ";
				$result5=mysql_query($query5,$con);
				
				$cn5=mysql_num_rows($result5);
				
				//echo $cn;
	?>		
	<?php
				$con=mysql_pconnect("localhost","root","");

				mysql_select_db("realestate",$con);

				$today=date(Y-mm-dd);
				$query6 = "SELECT * FROM Property ";
				$result6=mysql_query($query6,$con);
				
				$cn6=mysql_num_rows($result6);
				
				//echo $cn;
	?>				
	<?php
				$con=mysql_pconnect("localhost","root","");

				mysql_select_db("realestate",$con);

				$today=date(Y-mm-dd);
				$query7 = "SELECT * FROM Property where Status='0' ";
				$result7=mysql_query($query7,$con);
				
				$cn7=mysql_num_rows($result7);
				
				//echo $cn;
	?>	
	<?php
				$con=mysql_pconnect("localhost","root","");

				mysql_select_db("realestate",$con);

				$today=date(Y-mm-dd);
				$query8 = "SELECT * FROM Property where Status='1' ";
				$result8=mysql_query($query8,$con);
				
				$cn8=mysql_num_rows($result8);
				
				//echo $cn;
	?>							
			
<form id="form1" name="form1" method="post" action="" >
  
   <h1>My Dashboard</h1> <br/>
        	<h2> Welcome Admin</h2>
  
  <center>   
<table align="center" width="400" height="200">
<tr>
<td align="center" colspan="3"> Today </td>
</tr>
<tr>
<td align="center"> Agent Registred </td>
<td align="center"> Owner Registred </td>
<td align="center"> Buyer Registred </td>
</tr>
<tr>
<td align="center"> <a href="seeuser.php?Role='Agent'"><?php echo "$cn1"; ?></a> </td>
<td align="center"><a href="seeuser.php?Role='Owner'"><?php echo "$cn"; ?></a> </td>
<td align="center"><a href="seeuser.php?Role='Buyer'"><?php echo "$cn2"; ?> </a></td>
</tr>
<tr>
<td align="center" colspan="4"> Total: </td>
</tr>
<tr>
<td align="center"> Agent Registred </td>
<td align="center"> Owner Registred </td>
<td align="center"> Buyer Registred </td>
<td align="center"> Property Added </td>
</tr>
<tr>
<td align="center"><?php echo "$cn3"; ?> </td>
<td align="center"><?php echo "$cn4"; ?> </td>
<td align="center"><?php echo "$cn5"; ?> </td>
<td align="center"><?php echo "$cn6"; ?> </td>
</tr>
<tr>
<td align="center" colspan="4">  Approval / Not Approval</td>
</tr>
<tr>
<td align="center" colspan="2"><a href="status.php?st=1"><?php echo "$cn8"; ?></a> </td>
<td align="center" colspan="2"><a href="status.php?st=0"><?php echo "$cn7"; ?> </a></td>
</tr>
</table>
</center>
</form>
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