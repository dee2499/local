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
if(isset($_REQUEST["Submit"]))
{
	
	$fn=$_REQUEST["textfn"];
	$ln=$_REQUEST["textln"];
	$add1=$_REQUEST["textadd"];
	$city=$_REQUEST["textcity"];
	$state=$_REQUEST["select"];
	$pc=$_REQUEST["textpin"];
	$dt=$_REQUEST["textdat"];
	$cn=$_REQUEST["textcn"];
	$em=$_REQUEST["textid"];
	$pas=$_REQUEST["textpass"];
	$cp=$_REQUEST["textcp"];
	$rl=$_REQUEST["radiobutton"];
	$sec=$_REQUEST["textsec"];
	$ans=$_REQUEST["textans"];
	
	
if($pas==$cp)
{
	
	$qr="insert into registation_master(Email_Id,FirstName,LastName,Address,City,State,Pincode,Contact_No,Date) values ('$em','$fn','$ln','$add1','$city','$state',$pc,$cn,'$dt')";

	$con=mysql_pconnect("localhost","root","");
	mysql_select_db("realestate",$con);
	mysql_query($qr,$con) or die(mysql_error());
	echo "<h1> Data Inserted </h1>";
}
	
else
{
echo "password is not currect";
}

$qr1="insert into login_master (Email_Id,Password,sec_que,Answer,Role) values ('$em','$pas','$sec','$ans','$rl')";

mysql_query($qr1,$con) or die(mysql_error());

}
?>

<form id="form1" name="form1" method="post" action="" >
  <table width="400" border="1">
    <tr>
      <td colspan="2"> 	<center> <h3> <b> <u> Registration Form</u></b> </h3> </center> </td>
    </tr>
    
    <tr>
      <td colspan="2"><b>Role :- </b> 
        <label>
        <input name="radiobutton" type="radio" value="Agent" />
      </label>
      <b>  Agent  </b>
        <label>
        <input name="radiobutton" type="radio" value="Owner" />
        </label>
      <b>  Owner </b>
        <label>
        <input name="radiobutton" type="radio" value="Buyer" />
        </label>
    <b>    Buyer  </b>
	</td>
    </tr>
    <tr>
      <td><b>FirstName</b></td>
      <td>
        <input type="text" name="textfn" />
      </td>
    </tr>
    <tr>
      <td><b>LastName</b></td>
      <td><input type="text" name="textln" /></td>
    </tr>
    <tr>
      <td><b>Contact_No </b></td>
      <td><input type="text" name="textcn" /></td>
    </tr>
	<tr>
      <td><b>Date </b></td>
      <td><input type="text" name="textdat" /></td>
    </tr>
    <tr>
      <td><b>Address</b></td>
      <td><textarea name="textadd"></textarea></td>
    </tr>
    <tr>
      <td><b>City</b></td>
      <td><input type="text" name="textcity" /></td>
    </tr>
    <tr>
      <td><b>Pincode</b></td>
      <td><input type="text" name="textpin" /></td>
    </tr>
    <tr>
      <td><b>State</b></td>
      <td><label>
        <select name="select">
          <option>Gujarat</option>
          <option>Maharastra</option>
          <option>Punjab</option>
          <option>MP</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td><b>Email_Id</b></td>
      <td><input type="text" name="textid" /></td>
    </tr>
    <tr>
      <td><b>Password</b></td>
      <td><input type="text" name="textpass" /></td>
    </tr>
    <tr>
      <td><b>Confirm_Password</b></td>
      <td><input type="text" name="textcp" /></td>
    </tr>
    <tr>
      <td><b>Sec_Que</b></td>
      <td><input type="text" name="textsec" /></td>
    </tr>
    <tr>
      <td><b>Answer</b></td>
      <td><input type="text" name="textans" /></td>
    </tr>
    <tr>
      <td><label>
        <input type="submit" name="Submit" value="Save" />
      </label></td>
      <td><input type="submit" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
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