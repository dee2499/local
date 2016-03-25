<?php ob_start();?>
<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <title>Downloaded from link</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script language="javascript">
function showtext()
{

	if(document.form1.radiobutton[1].checked)
	{
	form1.textbad.disabled="";
			document.form1.textbad.value="2";
	form1.textbath.disabled="";
			document.form1.textbath.value="2";
	}
	else
	{
	document.form1.textbad.disabled="disabled";
	document.form1.textbad.value="N/A";
	document.form1.textbath.disabled="disabled";
	document.form1.textbath.value="N/A";
	}
}
</script>

</head>
<body>
   <?php include "head1.php" ?>
    <!-- Container -->
    <div id="container">
    	<!-- Content -->
    	<div id="content">
 <?php
if(isset($_REQUEST["Submit"]))
{
$d=$_REQUEST["dg"];

$dg="";
foreach($d as $x)
{
$dg.=$x.",";
}

	$em=$_REQUEST["textem"];
	$ty=$_REQUEST["radiobutton"];
	$Ara=$_REQUEST["textare"];
	$bad=$_REQUEST["textbad"];
	$bath=$_REQUEST["textbath"];
	$price=$_REQUEST["textprice"];
	$addr=$_REQUEST["textarea2"];
	$city=$_REQUEST["textcity"];
	$st=$_REQUEST["select"];
	$des=$_REQUEST["textarea"];
	$dat=$_REQUEST["textdat"];
	$adby=$_REQUEST["select2"];
	//$fea=$_REQUEST["dg[]"];
	$fn=$_FILES["file"]["name"];

	copy($_FILES["file"]["tmp_name"],"img/$fn");
		

if(($bad=='') && ($bath==''))
$bad=0;
$bath=0;
	$statu="false";
	$qr="insert into property(Email_Id,Pro_type,Pro_Area,Bedroom,Baths,Status,Price,Address,City,State,Images,Description,Date,AddBy,Features) values ('$em','$ty','$Ara',$bad,$bath,$statu,$price,'$addr','$city','$st','$fn','$des','$dat','$adby','$dg')";


	$con=mysql_pconnect("localhost","root","");
	mysql_select_db("realestate",$con);
	mysql_query($qr,$con) or die(mysql_error());
	echo "<h3> Data Inserted.. </h3>";
	
}
?>

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="477" border="1">
     <tr>
      <td colspan="2"> 	<center> <h3> <b> <u> Insert Property </u></b> </h3> </center> </td>
    </tr>
    <tr>
      <td width="272"><b>Email_Id </b></td>
      <td width="189">
        <input type="text" name="textem"   />  </td>
    </tr>
    <tr>
      <td><b>Property_type</b></td>
      <td><label>
        <input name="radiobutton" type="radio" value="Commercial"  onChange="showtext();"/>
      </label>
    <b>  Commercial </b>
      <label>
      <input name="radiobutton" type="radio" value="Residance" onChange="showtext();" checked="checked" />
      </label>
   <b>   Residance </b>	  </td>
    </tr>
    <tr>
      <td><b>Property_Area</b></td>
      <td><input type="text" name="textare" /></td>
    </tr>
    <tr>
      <td><b>Bedroom</b></td>
      <td><input type="text" name="textbad"  /></td>
    </tr>
	<tr>
      <td><b>Bathroom</b></td>
      <td><input type="text" name="textbath"  /></td>
    </tr>
    <tr>
      <td><b>Price</b></td>
      <td><input type="text" name="textprice" /></td>
    </tr>
	<tr>
      <td><b>Address</b></td>
      <td><label>
        <textarea name="textarea2"></textarea>
      </label></td>
	</tr>
    <tr>
      <td><b>City</b></td>
      <td><label>
      <input type="text" name="textcity" />
      </label></td>
    </tr>
    <tr>
      <td><b>State</b></td>
      <td><label>
        <select name="select">
          <option>Gujarat</option>
          <option>Maharastra</option>
          <option>Punjab</option>
          <option>MP</option>
          <option>Rajsthan</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td><b>Images</b></td>
      <td><label>
        <input type="file" name="file">
      </label></td>
    </tr>
    <tr>
      <td><b>Description</b></td>
      <td>
        <textarea name="textarea"></textarea></td>
    </tr>
    <tr>
      <td><b>Date</b></td>
      <td><input type="text" name="textdat" /></td>
    </tr>
    <tr>
      <td height="27"><b>AddBy</b></td>
      <td><label>
        <select name="select2">
          <option>Agent</option>
          <option>Owner</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td><label><b>Features:-</b></label></td>
      <td>
          <label>
          <input type="checkbox" name="dg[]" value="Garden">
          </label>
          Garden
          <br/>
          <label>
          <input type="checkbox" name="dg[]" value="Parking">
          </label>
          Parking
          <br/>
          <label>
          <input type="checkbox" name="dg[]" value="Lift">
          </label>
          Lift
          <br/>
          <label>
          <input type="checkbox" name="dg[]" value="Gym">
          </label>
          Gym
          <br/>
          <label>
          <input type="checkbox" name="dg[]" value="Swimming Pool">
          </label> 
  		  Swimming Pool <br/>
          <label>
          <input type="checkbox" name="dg[]" value="Security">
          </label>
          Security 
         <br/>
		  </td>
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