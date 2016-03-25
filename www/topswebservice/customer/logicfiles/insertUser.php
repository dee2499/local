<?php include("../../classes/Controler.php"); ?>
<?php 

$cont = new Controler;

if(isset($_REQUEST['submit']))
{
	$sucsflag = 1;
	if($_REQUEST["c_fname"]!="" && $_REQUEST["c_lname"]!="" && $_REQUEST["c_email"]!="" && $_REQUEST["c_pass"]!="" && $_REQUEST["c_country"]!="" && $_REQUEST["c_state"]!="" && $_REQUEST["c_city"]!="" && $_REQUEST["c_add"]!="")
	{
			$c_fname = $cont->protect($_REQUEST['c_fname']);
			$c_lname = $cont->protect($_REQUEST['c_lname']);
			$c_country = $cont->protect($_REQUEST['c_country']);
			$c_state = $cont->protect($_REQUEST['c_state']);
			$c_city = $cont->protect($_REQUEST['c_city']);
			$c_address = $cont->protect($_REQUEST['c_add']);
			$c_email = $cont->protect($_REQUEST['c_email']);
			$c_pass = $cont->protect($_REQUEST['c_pass']);
		
			$cont->insertCustomer($c_fname,$c_lname,$c_country,$c_state,$c_city,$c_address,$c_email,$c_pass);
			
		$a="aka1";		
			
	}
	else
	{
		$a="abka10";
	}

	
	$a=base64_encode($a);
	header("location:confirmation.php?a=$a");
}


?>