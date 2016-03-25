


<?php include("header1.php"); ?>
<body>

	<?php include("bodyheader.php"); ?>
	<?php include("Secondary_bar.php"); ?>
	
<?php include('../classes/Controler.php');?>
<?php 
	$cont=new Controler;

	if($_REQUEST['submit'])
	{

	
	if($_REQUEST['s_fname']!=""&& $_REQUEST['s_lname']!="" && $_REQUEST['s_email']!="" && $_REQUEST['s_pass']!="" && $_REQUEST['s_bname']!="" && $_REQUEST['s_bphone']!="" && $_REQUEST['s_country']!="" && $_REQUEST['s_state']!="" && $_REQUEST['s_city']!="" && $_REQUEST['s_badd']!="" && $_REQUEST['s_bzipcode']!="")
		{
			
	$s_fname=$_REQUEST['s_fname'];
		  $s_lname=$_REQUEST['s_lname'];
			$s_email=$_REQUEST['s_email'];
	$s_pass=$_REQUEST['s_pass'];
	$s_bname=$_REQUEST['s_bname'];
	$s_bphone=$_REQUEST['s_bphone'];
	$s_country=$_REQUEST['s_country'];
	$s_state=$_REQUEST['s_state'];
	$s_city=$_REQUEST['s_city'];
	$s_badd=$_REQUEST['s_badd'];
	$s_bzipcode=$_REQUEST['s_bzipcode'];
			
			
			
	$cont->insertSaller($s_fname,$s_lname,$s_email,$s_pass,$s_bname,$s_bphone,$s_country,$s_state,$s_city,$s_badd,$s_bzipcode);
			
			header("location:logicfiles/confirmation.php");
		}
		else
		{
			die("Some value missing");
		}
	}
	else
	{
		echo "submit is not clicked";
	}



?>

		<?php include("Sidebar.php"); ?>	
		<section id="main" class="column">

		<h4 class="alert_info">Welcome to the transaction module of Tops Technologies.</h4>
		
		<div class="clear"></div>
		
		<article class="module width_full">
		<form method="post" >
			<header><h3> Registratiion </h3></header>
				<div class="module_content">
					
						<fieldset>
							<label>First Name</label>
							<input type="text" name="s_fname" placeholder="Enter your First Name" size="30">
						</fieldset>
						<fieldset>
							<label>Last Name</label>
							<input type="text" name="s_lname" placeholder="Enter your Last Name" size="30">
						</fieldset>
						<fieldset>
							<label>Email</label>
							<input type="text" name="s_email" placeholder="Enter your Email" size="30">
						</fieldset>
						<fieldset>
							<label>PassWord</label>
							<input type="password" name="s_pass" placeholder="Enter your Password" size="30">
						</fieldset>
						
						
						<fieldset>
							<label>Confirm Password</label>
							<input type="password" name="s_confirmpass" placeholder="Enter your Password again to confirm" size="30">
						</fieldset>
						
					
								<h4 class="alert_info">Please Enter your Business Details</h4>
			
				
				
						<fieldset>
							<label>Business Name</label>
							<input type="text" name="s_bname" placeholder="Enter Name of your business" size="30">
						</fieldset>
				
						<fieldset>
							<label>Business Phoneno</label>
							<input type="text" name="s_bphone" placeholder="Enter phone number of your business" size="30">
						</fieldset>
				
				
						
						<fieldset>
						<label>Country</label>
                                <select name="s_country" style="width:200px;">
                                <option value="">--------------- Select ----------------------</option>
                      			<?php
								$res=$cont->selCountry(); 
								while($fet = mysql_fetch_array($res))
								{
								?>
                                 <option value="<?php echo $fet["cid"]; ?>"><?php echo $fet["cname"]; ?></option>
                                <?php }?>          
                                </select>
						</fieldset>
						<fieldset>	
							<label>State</label>
                                <select name="s_state" style="width:200px;">
                                <option value="">--------------- Select ----------------------</option>
                      			<?php
								$res=$cont->selState(); 
								while($fet = mysql_fetch_array($res))
								{
								?>
                                 <option value="<?php echo $fet["sid"]; ?>"><?php echo $fet["sname"]; ?></option>
                            <?php }?>          
                                </select>
                        </fieldset>
						
						
                       	<fieldset>
                        	<label>City</label>
                                <select name="s_city" style="width:200px;">
                                <option value="">--------------- Select ----------------------</option>
                      			<?php
								 $res=$cont->selCity();
								while($fet = mysql_fetch_array($res))
								{
									
								?>
                                 <option value="<?php echo $fet["cityid"]; ?>"><?php echo $fet["cityname"]; ?></option>
                                <?php }?>          
                                </select>
                        </fieldset>

                        
						<fieldset>
							<label>Business Address</label>
							<textarea rows="12" name="s_badd" placeholder="Enter the address of your Business"></textarea>
						</fieldset>
						<fieldset>
							<label>Business ZipCode</label>
					<input type="text" name="s_bzipcode" placeholder="Enter your Zip Code" size="30">
						</fieldset>
						
						<div class="clear"></div>
					
				</div>
			<footer>
			
				<div class="submit_link">
					<input type="submit" name="submit" value="Submit" class="alt_btn">
					<input type="reset" name="reset" value="Reset">
				</div>
			
				
			</footer>
			</form>		
		</article><!-- end of post new article -->
		
</body>

</html>