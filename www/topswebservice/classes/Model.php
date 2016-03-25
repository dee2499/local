<?php 


class Model
{

	function __construct()
	{
		mysql_connect("localhost","root","");
		mysql_select_db("topsgateway");
	}

/* Customer Module */
	function insertCustomer($c_fname,$c_lname,$c_country,$c_state,$c_city,$c_address,$c_email,$c_pass)
	{
		$ins = "INSERT INTO `topsgateway`.`customer` (`c_id`, `c_fname`, `c_lname`, `c_country`, `c_state`, `c_city`, `c_add`, `c_email`, `c_password`) VALUES (NULL, '$c_fname', '$c_lname', '$c_country', '$c_state', '$c_city', '$c_address', '$c_email','$c_pass');";
		
		mysql_query($ins)or die(mysql_error());
		
		
	}
	
	function selCustomer()
	{
			$selCustomer= "select * from customer";
		$resCustomerName = mysql_query($selCustomer);
		return $resCustomerName;
	
	}
	function selCustbyemail($email)
	{
	  $selCustbyemail="select * from customer join custacc on customer.c_id=custacc.c_id where c_email='$email'";
		$resCust=mysql_query($selCustbyemail);
		return $resCust;
	}
	
	function selCustByAccNoAndPass($accno,$pass)
	{
		 $selCust="Select * from customer join custacc on customer.c_id=custacc.c_id where c_accno='$accno' and c_password=DES_ENCRYPT('$pass')";
		$resCust=mysql_query($selCust);
		return $resCust;
	}
	
	function selCustomerByLimit($start,$limit)
	{
		$selCustomer= "select * form customer limit $start,$limit";
		$resCustomerName = mysql_query($selCustomer);
		return $resCustomerName;

	}
	function selLastSaler()
	{
		 $selCustomer="select s_id,s_country,s_state,s_city from saler where s_id = (select max(s_id) from saler)";
		$resCustomerName = mysql_query($selCustomer);
		return $resCustomerName;
	}
	function selLastCustomer()
	{
		 $selCustomer="select c_password,c_id,c_country,c_state,c_city from customer where c_id = (select max(c_id) from customer)";
		$resCustomerName = mysql_query($selCustomer);
		return $resCustomerName;
	}
	
	function delCustomer($id)
	{
		$delCustomer = "delete from customer where c_id='$id'";
		mysql_query($delCustomer);
	}
	function selCustomerId($id)
	{
		$selCustomer = "select * from customer where c_id='$id'";
		$resCustomer = mysql_query($selCustomer);
		return $resCustomer;
	}
	function updCustomer($cid,$c_fname,$c_lname,$c_country,$c_state,$c_city,$c_address,$c_email,$c_pass)
	{
		$updCustomer = "update customer set c_fname='$c_fname', c_lname='$c_lname', c_country='$c_country', c_state='$c_state', c_city='$c_city', c_add='$c_city', c_email='$c_email', c_password='$_pass'  where c_id='$cid'";
		mysql_query($updCustomer); 
	
	}
	function authCustomer($pass,$email)
	{
		  $selCustomer="Select * from customer where c_email='$email' and  c_password='$pass'";
		$resCustomer = mysql_query($selCustomer)or die(mysql_error());
		return $resCustomer;
	}


	
	

	
/* saler Module */	
	
	function insertSaller($s_fname,$s_lname,$s_email,$s_pass,$s_bname,$s_bphone,$s_country,$s_state,$s_city,$s_badd,$s_bzipcode)
	{
		
		  $sql = "INSERT INTO `topsgateway`.`saler` (`s_fname`, `s_lname`, `comp_name`, `s_country`, `s_state`, `s_city`, `comp_add`, `ph_no`, `email_id`, `password`, `s_zipcode`) VALUES ('$s_fname', '$s_lname', '$s_bname', '$s_country', '$s_state', '$s_city', '$s_badd', '$s_bphone', '$s_email', '$s_pass', '$s_bzipcode');";
		
		mysql_query($sql)or die(mysql_error());
		
		
	}


	function authSaler($userid,$apikey,$pass)
	{
		  $selSaler="select * from saler join salersacc on saler.s_id=salersacc.s_id where s_accno='$userid' and apikey='$apikey' and password = '$pass'";
		 $resSaler = mysql_query($selSaler);
		return $resSaler;
	
	}
	












/* customer account info */

	function insertCustAcc($c_accno,$c_id,$c_balance)
	{
			 $ins="INSERT INTO custacc(`c_accno`, `c_id`, `c_balance`) VALUES ('$c_accno', '$c_id', '$c_balance')";
			mysql_query($ins)or die(mysql_error());
	}
	
	function selCustAccByAccNo($custaccno)
	{
		$sel="Select * from custacc where c_accno = '$custaccno' ";
		$res=mysql_query($sel)or die(mysql_error());
		return $res;		
	}
	function updateCustAccBal($custCurBal,$cusaccno)
	{
		 $upd="Update custacc set c_balance=$custCurBal where c_accno='$cusaccno'";
		mysql_query($upd)or die(mysql_error());
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
/* insert saller account */	
	
	
	function insertSalAcc($s_accno,$s_id,$s_bal,$s_api)
	{
		 $ins="INSERT INTO salersacc (`s_accno`, `s_id`, `s_bal`, `apikey`) VALUES ('$s_accno', '$s_id', '$s_bal', '$s_api');";
		mysql_query($ins)or die(mysql_error());
	}
	
	
	function selSalerAccByAccNo($saleraccno)
	{
		$sel="Select * from salersacc where s_accno = '$saleraccno' ";
		$res=mysql_query($sel)or die(mysql_error());
		return $res;		
	}
	
	function updateSalAccBal($salCurBal,$saleraccno)
	{
		 $upd="update salersacc set s_bal=$salCurBal where s_accno='$saleraccno'";
		mysql_query($upd)or die(mysql_error());
			
	}
	
	function  selCoNameByAccno($s_accno)
	{
		$sel="select comp_name from salersacc join saler on salersacc.s_id=saler.s_id where s_accno='$s_accno'";
		$resSaler=mysql_query($sel)or die(mysql_error());
		return $resSaler;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
/* insert update detlete of function for tansaction*/	
	

	function inserttrans($s_acc,$c_acc,$amt,$s_trans_id)
	{
			
 $ins="INSERT INTO `topsgateway`.`transaction` (`transid`, `custacc`, `salersacc`, `amount`, `salertransid`, `date`) VALUES (NULL, '$c_acc', '$s_acc', '$amt', '$s_trans_id', NOW());";
		mysql_query($ins)or die(mysql_error());
	}
	
	
	function selTransactionWithCompanyName($accno)
	{
		
		
		$sel  = "Select * from transaction join custacc on transaction.custacc=custacc.c_accno join salersacc on transaction.salersacc = salersacc.s_accno join saler on salersacc.s_id = saler.s_id where transaction.custacc='$accno'";
		
		$res=mysql_query($sel)or die(mysql_error());
		return $res;
	}
	
	
	/* funtion for current balances */
	
	
 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*supplier registration Module function */

	function selCustomerByCid($cid)
	{
		$selCustomer = "select * from Customer where cid='$cid'";
		$res = mysql_query($selCustomer);
		return $res;
	}

	function selCityBySid($sid)
	{
		$selCity = "select * from city where sid='$sid'";
		$res = mysql_query($selCity);
		return $res;
	}



/* insert update delete and select of Customer process */

	function selCountryName()
	{
		$selCountryName = "select * from country";
		$resCountryName = mysql_query($selCountryName);
		return $resCountryName;
	}






/* insert update and delete of country  */


	function insCountry($countryName)
	{
		$insCountry = "insert into country (cname) values('$countryName')";
		mysql_query($insCountry);
	}
	
	function selCountry()
	{
		$selCountry= "select * from country";
		$resCountryName = mysql_query($selCountry);
		return $resCountryName;
	}
	
	function selCountryByLimit($start,$limit)
	{
		$selCountry= "select * from country limit $start,$limit";
		$resCountryName = mysql_query($selCountry);
		return $resCountryName;
		
	}


	function delCountry($id)
	{
	$delCountry = "delete from country where cid='$id'";
	mysql_query($delCountry);
	}
	
	function selCountryId($id)
	{

	$selCountry = "select * from country where cid = '$id'";
	$resCountry=mysql_query($selCountry);
	return $resCountry;
		
	
	}
	function updCountry($cid,$cname)
	{
			$updCountry ="update country set cname='$cname' where cid='$cid'";
			mysql_query($updCountry);
	}
	
	/* insert update and delete of State  */


	function insState($StateName)
	{
		$insState = "insert into State (cname) values('$StateName')";
		mysql_query($insState);
	}
	
	function selState()
	{
		$selState= "select * from state";
		$resStateName = mysql_query($selState);
		return $resStateName;
	}
	
	function selStateByLimit($start,$limit)
	{
		$selState= "select * from State limit $start,$limit";
		$resStateName = mysql_query($selState);
		return $resStateName;
		
	}


	function delState($id)
	{
	$delState = "delete from State where cid='$id'";
	mysql_query($delState);
	}
	
	function selStateId($id)
	{

	$selState = "select * from State where cid = '$id'";
	$resState=mysql_query($selState);
	return $resState;
		
	
	}
	function updState($cid,$cname)
	{
			$updState ="update State set cname='$cname' where cid='$cid'";
			mysql_query($updState);
	}
	

	
	
	
	/* insert update delete and select of city process */


	function selCustomerName()
	{
		$selCustomerName = "select * from Customer";
		$resCustomerName = mysql_query($selCustomerName);
		
		
		return $resCustomerName;
	}

	function insCity($cityName,$CustomerId)
	{
		$insCity =" INSERT INTO city (cityname , sid ) VALUES ( '$cityName', '$CustomerId')";
		mysql_query($insCity);

	}
	function delCity($id)
	{
		$delCity = "delete from city where cityid='$id'";
		mysql_query($delCity);
	}

	function selCity()
	{
		$selCity= "select * from city";
		$resCityName = mysql_query($selCity) or die(mysql_error());
		return $resCityName;

	
	}
	function selCityByLimit($start,$limit)
	{
		$selCity= "select city.*,sname from city join Customer on city.sid = Customer.sid limit $start,$limit";
		$resCityName = mysql_query($selCity);
		return $resCityName;
	}
	function selCityId($id)
	{

	$selCity = "select * from city where cityid = '$id'";
	$resCity=mysql_query($selCity);
	return $resCity;
		
	
	}
	function updCity($cityid,$cityname,$sid)
	{
			$updCity ="update city set cityname='$cityname',sid = '$sid'  where cityid='$cityid'";
			mysql_query($updCity);
	}

	
	
	/* Common function for all */
	
	
	
	function sel_where($table,$col,$id)
	{
	 $sel = "select * from $table where $col='$id'";
			$res = mysql_query($sel) or die(mysql_error());
			return $res;
		
	}
	
	
}




?>