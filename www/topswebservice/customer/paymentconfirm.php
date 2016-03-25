
<?php include("header1.php"); ?>
<body>

	<?php include("bodyheader.php"); ?>
	
	

		<?php include("Sidebar2.php"); ?>	
		<section id="main" class="column">

		<h4 class="alert_info">Welcome to the transaction module of Tops Technologies.</h4>
		
		<div class="clear"></div>
		<form method="post">
			<article class="module width_full">
				<header><h3> Registratiion </h3></header>
				<div class="module_content">
					<fieldset>
					
						<fieldset>
							<label>Email</label>
							<input type="text" name="s_email" placeholder="Enter your Email" size="30">
						</fieldset>
						<fieldset>
							<label>PassWord</label>
							<input type="password" name="s_pass" placeholder="Enter your Password" size="30">
						</fieldset>
						
						<fieldset>
							<label> Account Number </label>
							<input type="text" name="c_acno" palacrholder="Enter account number" >
						</fieldset>	
						<fieldset>
							<label> Account Code </label>
							<input type="text" name="c_ac_code" palacrholder="Enter account " >
						</fieldset>	
						
						<div class="clear"></div>
						
			
				<fieldset>	
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Submit" class="alt_btn">
					<input type="reset" value="Reset">
				</div>
				
			</footer>
			
		</article><!-- end of post new article -->
		</form>
</body>

</html>