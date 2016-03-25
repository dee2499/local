<?php include('../../classes/Controler.php');?>
<?php 
	$cont=new Controler;


		
$res=$cont->selLastSaler();
$fet=mysql_fetch_array($res);

 $id=$fet['s_id'];
 $country=$fet['s_country'];
$state=$fet['s_state'];
$city=$fet['s_city'];

$time=date("Ymd");
	  

 $accno="S".$time.$id;
 $apikey=$country.$time.$state.$id.$city;


$cont->insertSalAcc($accno,$id,10000,$apikey);

		
header("location:../confirmation.php")

?>