<?php 

include("../classes/allincludeheader.php");  

$cont = new Controler;

	if($_REQUEST['submit'])
				{
				$accno = $_REQUEST['accno'];
				$res=$cont->sel_where("custacc","c_accno",$accno);
				
				$row=mysql_fetch_array($res);
				
				
				
				}


?>



	

	
		<article class="module width_full">
			<header><h3> Confirmation </h3></header>
				<div class="module_content">
				
					<fieldset style="padding-left:20px;">
					<p>
						<h4> Please Provide Your Account Number to get your balance</h4>
					</p>
				<form method="post">	
					<p>
						
							<fieldset>
							<label>First Name</label>
							<input type="text" name="accno" placeholder="Enter your Account Number" size="30">
							</fieldset>
						
					</p>
						
							<fieldset>
						<input type="submit" name="submit" value="Submit" class="alt_btn">
						<input type="reset" value="Reset">
							</fieldset>
				</form>			
					</fieldset>
						
						
						<?php if(isset($row)){ ?>
						
							<fieldset>
							
							<h3 align="center"> Your Account Balanace is <?php echo money_format('%!i',$row['c_balance']);?>
							</fieldset>
						
						<?php }?>
						
						<div class="clear"></div>
					
				</div>
			<footer>
				<div class="submit_link">
				
				
				</div>
			</footer>
		
		</article><!-- end of post new article -->
		<div class="clear"></div>
		
</body>

</html>