<?php include('../classes/Controler.php');?>
<?php 
	$cont=new Controler;


$res=$cont->selLastSaler();
$fet=mysql_fetch_array($res);

$id=$fet['s_id'];
$country=$fet['s_country'];
$state=$fet['s_state'];
$city=$fet['s_city'];

$time=date("Ymd");
	  

 $accno="S".$time.$id;
 $apikey=$country.$time.$state.$id.$city;
	



?>



<?php include("header1.php"); ?>
<body>

	<?php include("bodyheader.php"); ?>
	<?php include("Secondary_bar.php"); ?>
	

		<?php include("Sidebar.php"); ?>	
		<section id="main" class="column">

		<h4 class="alert_info">Welcome to the transaction module of Tops Technologies.</h4>
		
		<div class="clear"></div>
		
		<article class="module width_full">
			<header><h3> Confirmation </h3></header>
				<div class="module_content">
				
					<fieldset style="padding-left:20px;">
					<p>
						<h4> This is to confirm you that you have sucessfully sign up into our 	payment gate way</h4>
					</p>
					<p>
						This is your  api key = <?php  echo $apikey;?><br/>
						Thsi is your account number =<?php echo $accno;?>
					</p>
						
						<p>
							<h2>Please save them and use them at the time of transaction</h2>
						</p>
						
					</fieldset>
						
						<div class="clear"></div>
					
				</div>
			<footer>
				<div class="submit_link">
					Please click here to contiue <a href="confirmation.php?aka=1">Continue!!</a>
				</div>
			</footer>
		
		</article><!-- end of post new article -->
		
</body>

</html>