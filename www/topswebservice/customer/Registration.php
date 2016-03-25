<?php include("../classes/allincludeheader.php"); ?> 

		
		<section id="main" class="column">

		<h4 class="alert_info">Welcome to the transaction module of Tops Technologies.</h4>
		
		<div class="clear"></div>
			<form method="get" action="logicfiles/insertUser.php">		
		<article class="module width_full">
			<header><h3> Registratiion </h3></header>
				<div class="module_content">
		
						<fieldset>
							<label>First Name</label>
							<input type="text" name="c_fname" placeholder="Enter your First Name" size="30">
						</fieldset>
						<fieldset>
							<label>Last Name</label>
							<input type="text" name="c_lname" placeholder="Enter your Last Name" size="30">
						</fieldset>
						<fieldset>
							<label>Email Id</label>
							<input type="text" name="c_email" placeholder="Enter your Email" size="30">
						</fieldset>
						<fieldset>
							<label>PassWord</label>
							<input type="password" name="c_pass" placeholder="Enter your Password" size="30">
						</fieldset>
						
						
						<fieldset>
							<label>Confirm Password</label>
							<input type="password" name="c_confirmpass" placeholder="Enter your Password again to confirm" size="30">
					  </fieldset>
					  
						
							<fieldset>
							<label>Country</label>
                                <select name="c_country" style="width:200px;">
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
                                <select name="c_state" style="width:200px;">
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
                                <select name="c_city" style="width:200px;">
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
							<label>Address</label>
							<textarea rows="12" name="c_add" placeholder="Enter the address of your Business"></textarea>
						</fieldset>
						
					<div class="clear"></div>
					
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" name="submit" value="Submit" class="alt_btn">
					<input type="reset" value="Reset">
				</div>
				
			</footer>
			
		</article><!-- end of post new article -->
		
	</form>
<?php include("../classes/allincludefooter.php"); ?> 
