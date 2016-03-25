<?php 

include("../classes/allincludeheader.php");  

$cont = new Controler;

	if($_REQUEST['submit'])
				{
				$accno = $_REQUEST['accno'];
				$res=$cont->selTransactionWithCompanyName($accno);
				 $num = mysql_num_rows($res);
				
				
				
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
					
					<?php if(isset($res)) {?>
						
						<?php if($num>0) {  ?>
						
					
						
							
							
							
							<fieldset>
								<table cellspacing="20px">
									<tr>
										<td>
											Date
										</td>
										<td>
											Time
										</td>
										<td>
											With
										</td>
										<td>
											Of Ammount
										</td>
									</tr>
									<?php $total=0; 
									while($row = mysql_fetch_array($res)){ ?>
									
									<tr>
										<td>
											<?php echo date("d-m-Y",strtotime($row['date'])); ?>
										</td>
										<td>
											<?php echo date("H:i:s",strtotime($row['date'])); ?>
										</td>
										<td>
											<?php echo $row["comp_name"];?>
										</td>
										<td>
											<?php echo money_format('%!i',$row['amount']); $total+=intval($row['amount']);?>
										</td>
									</tr>
									
									<?php }?>
									<tr>
										<td>
											Total
										</td>
										<td colspan="3" align="right" style="padding-right:30px;">
											
											<?php echo money_format('%!i',$total); ?>
										
										</td>
									</tr>
								</table>	
							</fieldset>
							
						
							
								<?php }else{ ?>
							
								<fieldset>
									<h3 align="center"> You Have Not Done Any Transaction </h3>							
								</fieldset>
								
								<?php }?>
					<?php }?>	
						</fieldset>
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