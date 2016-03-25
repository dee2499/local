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
    <?php include "head2.php" ?>
    <!-- Container -->
    <div id="container">
    	<!-- Content -->
    	<div id="content" class="no-bg">
		
  
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
                <h1 class="post-title">46 Reade Street, New York NY 10008</h1>

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