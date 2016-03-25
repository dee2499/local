<?php 
include("../../classes/Controler.php"); 

$cont = new Controler;

?>
<?php 

if(isset($_REQUEST["a"]))
{
		$a=$_REQUEST["a"];
		
		 $a=base64_decode($a);
		 
		 print_r($data);
		 
		 
		 switch($a)
		 {
			 case "aka1":
			 
					$res=$cont->selLastCustomer();
				$fet=mysql_fetch_array($res);

				$id=$fet['c_id'];
				$country=$fet['c_country'];
				$state=$fet['c_state'];
				$city=$fet['c_city'];

				$time=date("Ymd");
					  
  				$accno="C".$time.$id;

  
				$cont->insertCustAcc($accno,$id,10000);
			 	header("location:../confirmation.php"); break;
			 default:
			 	header("location:../notconfrim.php"); break;
			 	
		 }
		
}

?>
