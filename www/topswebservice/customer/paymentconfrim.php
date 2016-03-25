<?php include("../classes/allincludeheader.php"); ?> 

<?php
	if(!isset($_SESSION["saleraccno"]))
	{
		header("location:.");
	}
	$email=$_SESSION['c_email'];
	$selCust=$cont->selCustbyemail($email);
	$fet=mysql_fetch_array($selCust);

	$s_accno=$_SESSION["saleraccno"];
	$selSaler=$cont->selCoNameByAccno($s_accno);
	$fetSaler=mysql_fetch_array($selSaler);
	
	if(isset($_REQUEST['confrim']))
	{
	
		$accno=$cont->protect($_REQUEST["accno"]);
		$pass=$cont->protect($_REQUEST["pass"]);
		$pass=md5($pass);
		$res=$cont->selCustByAccNoAndPass($accno,$pass);
		$num=mysql_num_rows($res);
		if($num>0)
		{
				header("location:logicfiles/makeTransaction.php?cusaccno=$accno");
		}
		else
		{
		$data["transactiondata"] = array("transaction"=>"Suceesfully Not Completed");
		echo json_encode($data);
		}
	}
	
	
?>

<body>


	
	

	
		<section id="main" class="column">

		<h4 class="alert_info">Welcome to the transaction module of Tops Technologies.</h4>
		
		<div class="clear"></div>
		<form method="post">
			<article class="module width_full">
				<header><h3> Payment Confirmation </h3></header>
				<div class="module_content">
					<fieldset>
					
						<fieldset>
							<label style="width:300px;">UserFname</label>
							<label><?php echo $fet["c_fname"];?></label>
						</fieldset>
						<fieldset>
							<label style="width:300px;">ComanyName of getting payment</label>
							<label><?php echo $fetSaler["comp_name"];?></label>
						</fieldset>
						
						<fieldset>
							<label style="width:300px;"> Total Payment </label>
							<label><?php echo $total=$_SESSION["total"];?></label>
						</fieldset>	
						<fieldset>
							<label style="width:300px;"> Enter your account Number </label>
							<input type="text" name="accno" style="width:200px;">
						</fieldset>	
						<fieldset>
							<label style="width:300px;"> Enter your Passeord </label>
							<input type="password" name="pass" style="width:200px;">
						</fieldset>
						<div class="clear"></div>
						
			
				</fieldset>	
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" name="confrim" value="Submit" class="alt_btn">
					<input type="reset" name="reset" value="Reset">
				</div>
				
			</footer>
			
		</article><!-- end of post new article -->
		</form>
</body>

</html>