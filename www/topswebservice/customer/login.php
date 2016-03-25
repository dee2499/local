<?php include("../classes/allincludeheader.php"); ?> 

<?php
$error ="";
	if(isset($_REQUEST["login"]))
	{
		if($_REQUEST["c_email"]!="" && $_REQUEST["c_pass"]!="")
		{
			echo $pass=$_REQUEST["c_pass"];
			echo $email=$_REQUEST["c_email"];
			
			$resCust=$cont->authCustomer($pass,$email);
			
			$num=mysql_num_rows($resCust);
			$fet=mysql_fetch_array($resCust);
			
			
			
			if($num>0)
			{
				if($fet["c_email"]==$email)
				{
				$_SESSION["c_email"]=$email;
				header("location:.");
				}
				else
				{
					$error ="user name and password does not match";
				}
			}
			else
			{
				$error ="Wrong user name and password";
			}
			
			
		}
	}
?>



		<section id="main" class="column">

		<div class="clear"></div>
		
		<article class="module width_full">
		<form method="post">
			<header><h3> Registratiion </h3></header>
				<div class="module_content">
					<fieldset>
					
						<fieldset>
							<label>Email</label>
							<input type="text" name="c_email" placeholder="Enter your Email" size="30">
						</fieldset>
						<fieldset>
							<label>PassWord</label>
							<input type="password" name="c_pass" placeholder="Enter your Password" size="30">
						</fieldset>
						
							<?php if(isset($error) && $error ){ ?>
						<fieldset>
						
								<label style="width:100%;text-align:center;" ><?php echo $error; ?></label>
				
						</fieldset>
							<?php }?>
						
						<div class="clear"></div>
						
						
						
					</fieldset>	
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" name="login" value="Submit" class="alt_btn">
					<input type="reset" name="reset" value="Reset">
				</div>
				
			</footer>
		</form>		
		</article><!-- end of post new article -->
<?php include("../classes/allincludefooter.php"); ?> 