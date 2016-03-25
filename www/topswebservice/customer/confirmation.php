<?php 
 include("../classes/allincludeheader.php"); 

$cont = new Controler;
				$res=$cont->selLastCustomer();
				$fet=mysql_fetch_array($res);

				$id=$fet['c_id'];
				$country=$fet['c_country'];
				$state=$fet['c_state'];
				$city=$fet['c_city'];

				$time=date("Ymd");
					  
  				$accno="C".$time.$id;


?>



	

		<h4 class="alert_info">
		Thank You for registration please check your email id for account information
		</h4>
		<article class="module width_full">
			<header><h3> Confirmation </h3></header>
				<div class="module_content">
				
					<fieldset style="padding-left:20px;">
					<p>
						<h4> This is to confirm you that you have sucessfully sign up into our 	payment gate way</h4>
					</p>
					<p>
						This is your  account number = <?php  echo $accno;?><br/>
						
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
		<div class="clear"></div>
		
</body>

</html>