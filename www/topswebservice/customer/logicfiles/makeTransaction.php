<?php 

$cont = new Controler;
session_start();

?>
<?php 

	
	//take user given data
	
	 $s_trans_id=$_SESSION["orderid"];
	$totalamount=$_SESSION["total"];
	$saleraccno=$_SESSION["saleraccno"];
	$cusaccno=$_REQUEST['cusaccno'];

	
	//take the account info from database
	
	$resSalerAcc = $cont->selSalerAccByAccNo($saleraccno); 	
	$resCustAcc = $cont->selCustAccByAccNo($cusaccno);
	$fetSalAcc=mysql_fetch_array($resSalerAcc);
	$fetCustAcc=mysql_fetch_array($resCustAcc);
	
	//take the balances 
	$SalOldBal=$fetSalAcc["s_bal"];
	 $CustOldBal=$fetCustAcc["c_balance"];
	
	//take the amount given by the user and delete the amount from customer balance and insert the amount to saler balance 
	 $custCurBal=$CustOldBal-$totalamount;
	$salCurBal=$SalOldBal+$totalamount;	
	
	
	//take insert the transaction detail in transaction table and update the Balance in saleracc table and customeracc table 

	$cont->inserttrans($saleraccno,$cusaccno,$totalamount,$s_trans_id);
	
	$cont->updateSalAccBal($salCurBal,$saleraccno);
	$cont->updateCustAccBal($custCurBal,$cusaccno);
	
	$data["transactiondata"] = array("transaction"=>"Suceesfully Completed");
	echo json_encode($data);
	


?>