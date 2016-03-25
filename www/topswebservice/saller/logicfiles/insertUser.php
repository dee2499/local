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
