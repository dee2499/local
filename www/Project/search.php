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

alert(document.form2.);

	if(document.form2.checkbox[0].checked)
	{
	form2.bed.disabled="";
			document.form2.bed.value="2";
	form2.bath.disabled="";
			document.form2.bath.value="2";
	}
	else
	{
	document.form2.bed.disabled="disabled";
	document.form2.bed.value="N/A";
	document.form2.bath.disabled="disabled";
	document.form2.bath.value="N/A";
	}
}
</script>

</head>
<body>
    <?php include "head2.php" ?>
    <!-- Container -->
    <div id="container">
    	<!-- Content -->
    	<div id="content" class="no-bg">
		<?php
	$con=mysql_pconnect("localhost","root","");

mysql_select_db("realestate",$con);

$qr="select * from property";

$rs=mysql_query($qr,$con);

	$op="";
	$st="";
	$ft="";
while($res=mysql_fetch_assoc($rs))
{
$op.="<option value='".$res["City"]."'>".$res["City"]."</option>";
$st.="<option value='".$res["State"]."'>".$res["State"]."</option>";
$ft.="<option value='".$res["Pro_Area"]."'>".$res["Pro_Area"]."</option>";
$pr.="<option value='".$res["Price"]."'>".$res["Price"]."</option>";

}
?>

    <!-- Quick Search -->
            <div id="quick-search">
                <form name="form2" >
                    <h4 class="head">Quick Search</h4>

                    <a href="#" class="show-hide">Show/Hide</a>

                    <div class="slideToggle" style="display:none;">
                        <div class="switcher">
        <input  name="cr" type="checkbox"    class="custom-style"  data-off="Commercial" data-on="Residance" checked="checked"/>
                        </div>

                        <div class="select-container clearfix">
                            <div class="column">
                                <select class="select normal" name="cit" value="cit"  onFocus="showtext();">
                                    <option value="" />City
                    				 <?php echo $op; ?>				
                                </select>

                                <select class="select small first" name="bed" value="bed">
                                    <option />Beds
									<option  />0
                                      <option />1
							  <option  />2
							    <option  />3
								  <option />4
								    <option />5
                                </select>

                                <select class="select small" name="bath" value="bath">
                                    <option  />Baths
									<option  />0
                                     <option  />1
							  <option  />2
							    <option />3
                                </select>
                            </div>

                            <div class="column">
                                <select class="select normal" name="state" value="state">
                                <option value="" />State
                                 	 <?php echo $st; ?>				
                                </select>

                                <select class="select small first" name="minprice" value="minprice">
                                    <option value=""  />Min price
                                            <?php echo $pr; ?>
                                </select>

                                <select class="select small" name="maxprice" value="maxprice">
                                    <option value="" />Max price
                                            <?php echo $pr; ?>
                                </select>
                            </div>

                            <div class="column">
                                <select class="select normal" name="parea" value="parea">
                                    <option />Square Feet
                               		<?php echo $ft; ?>				
                                </select>

                                <input class="button-blue" type="submit" name="Submit" value="Search" />

                               
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Quick Search -->
<?php
if(isset($_REQUEST["Submit"]))
{
$tye=$_REQUEST["cr"];
if($tye=="on")
$tye="Residance";
else
$tye="Commercial";
$be=$_REQUEST["bed"];
$bath=$_REQUEST["bath"];
$pare=$_REQUEST["parea"];
$citt=$_REQUEST["cit"];
$satt=$_REQUEST["state"];
$mpric=$_REQUEST["minprice"];
$mipric=$_REQUEST["maxprice"];



$query="Select * from property where Pro_type='$tye' and Bedroom=$be and Baths=$bath and Pro_Area=$pare and City='$citt' and State='$satt' and Price between $mpric and $mipric";

$con=mysql_pconnect("localhost","root","");
mysql_select_db("realestate",$con);

$rs=mysql_query($query,$con)or die(mysql_error());

while($r=mysql_fetch_assoc($rs))
{
$rl=$r["Pro_Id"];
$stt=$r["City"];
$price=$r["Price"];
$bedr=$r["Bedroom"];
$area=$r["Pro_Area"];
$bat=$r["Baths"];
$typ=$r["Pro_type"];
$img=$r["Images"];
$dec=$r["Description"];
$addr=$r["Address"];
$fea=$r["Features"];
}

}
?>
            <!-- Post -->
            <div class="post clearfix">
                <h1 class="post-title"><?php echo "$addr"; ?> <?php echo "$stt"; ?></h1>

                <div class="post-image"><img src="img/<?php echo $img ;?>"/></div>

                <div class="post-details">
                    <div class="details">
                        <table>
						<tr>
                                <td>Price:</td>
                                <td><?php echo "$price"; ?></td>
                            </tr>
                    
                            <tr>
                                <td>City:</td>
                                <td><?php echo "$stt"; ?> </td>
                            </tr>
                            <tr>
                                <td>Type:</td>
                                <td><?php echo "$typ"; ?></td>
                            </tr>
                            <tr>
                                <td>Bedrooms:</td>
                                <td><?php echo "$bedr"; ?></td>
                            </tr>
                            <tr>
                                <td>Bathrooms:</td>
                                <td><?php echo "$bat"; ?> </td>
                            </tr>
                            <tr>
                                <td>Area:</td>
                                <td><?php echo "$area"; ?></td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td><?php echo "$addr"; ?></td>
                            </tr>
							<tr>
                                <td>Features:</td>
                                <td><?php echo "$fea"; ?></td>
                            </tr>
                        </table>
                    </div>

                    <div class="description clearfix">
                        <h3 class="property-description">Property Description</h3>

                        <p> <?php echo "$dec"; ?> </p>

                       
                    </div>
                </div>

                <div class="seperator clearfix"></div>

            </div>
            <!-- End Post -->

            
            <!-- End New Listings -->
    	</div>
    	<!-- End Content -->

    	<?php include "sidebar.php" ?>
    </div>
    <!-- End Container -->

   <?php include "footer.php" ?>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.slides.min.js"></script>
	<script type="text/javascript" src="js/jquery.selectbox.js"></script>
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