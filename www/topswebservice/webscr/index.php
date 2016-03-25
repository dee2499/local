<?php 
		include("../classes/Controler.php"); 
		$cont=new Controler;
		session_start();
?>

<?php


if($_REQUEST['orderid']!=""||$_REQUEST['total']!=""||$_REQUEST['userid']!=""||$_REQUEST['apikey']!=""||$_REQUEST["pass"]!=""||$_REQUEST['c_email']!=""||$_REQUEST['c_pass']!=""||$_REQUEST['c_accno']!="")
{

	 $orderid=$_REQUEST['orderid'];
	 $total=$_REQUEST['total'];
	
	 $userid=$_REQUEST['userid'];
	 $apikey=$_REQUEST['apikey'];
	 $s_pass=$_REQUEST['pass'];
	 $accno = $_REQUEST['c_accno'];
	$email=$_REQUEST['c_email'];
	$pass=$_REQUEST['c_pass'];	
			
			$resCust=$cont->authCustomer($pass,$email);
			
			$num_cust=mysql_num_rows($resCust);
	
	
	
	$resSaleracc=$cont->authSaler($userid,$apikey,$s_pass);
	
	 $num_saller = mysql_num_rows($resSaleracc);
	
	if($num_saller>0 && $num_cust>0)
	{
		$_SESSION["saleraccno"]=$userid;
		$_SESSION["orderid"]=$orderid;
		$_SESSION["total"]=$total;
		$_SESSION["sucess"]=$sucess;
		$_SESSION["cancel"]=$cancel;
		
		
		include("../customer/logicfiles/makeTransaction.php");
		
	}
	
	else
	{
		
		$data["transactiondata"] = array("transaction"=>"Suceesfully Not Completed");
		echo json_encode($data);
		
	}
	
}

?>