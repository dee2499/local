<?php 
include('Model.php');

date_default_timezone_set("Asia/Calcutta");
setlocale(LC_MONETARY, 'en_IN');
class Controler
{
	



/*registration module for all*/	

	function selStateByCid($cid)
	{
		$objModel=new Model;
		$res=$objModel->selStateByCid($cid);
		return $res;
	}

	function selCityBySid($sid)
	{
		$objModel=new Model;
		$res=$objModel->selCityBySid($sid);
		return $res;
	}
	
	function delOrder($id)
	{
			$objModel = new Model;
			$res = $objModel->delOrder($id);
			
	}	
/* insert update delete and select of state process */


	function selCountryName()
	{
		$modObj=new Model;
		$resCountryName = $modObj->selCountryName();
		
		return $resCountryName;
	}
	
	function insState($stateName,$countryId)
	{
		$modObj=new Model;
		$modObj->insState($stateName,$countryId);
	}


	function selState()
	{
		$modObj=new Model;
		$resStateName = $modObj->selState();
		return $resStateName;
	}
	
	function selStateByLimit($start,$limit)
	{
		$modObj=new Model;
		$resStateName = $modObj->selStateByLimit($start,$limit);
		return $resStateName;
	
	}
	function delState($id)
	{
	
		$modObj= new Model;
		$modObj->delState($id);

	}
	function selStateId($id)
	{
		$objState = new Model;
		$resState = $objState->selStateId($id);
		return $resState;
	}
	function updState($sid,$sname,$cid)
	{
		$mobObj = new Model;
		$mobObj->updState($sid,$sname,$cid);
	}

/* insert update delete and select of country process */

	function insCountry($countryName)
	{
		$modObj=new Model;
		$modObj->insCountry($countryName);
	}
	function delCountry($id)
	{
	
		$modObj= new Model;
		$modObj->delCountry($id);

	}
	function selCountry()
	{
	
		$modObj=new Model;
		$resCountryName = $modObj->selCountry();
		return $resCountryName;
		
	}
	function selCountryId($id)
	{

		$modObj = new Model;
		$resCountryName=$modObj->selCountryId($id);
		return $resCountryName;

	}
	
	function selCountryByLimit($start,$limit)
	{

		$modObj = new Model;
		$resCountryName=$modObj->selCountryByLimit($start,$limit);
		return $resCountryName;
	}
	function updCountry($cid,$cname)
	{
		$modObj = new Model;
		$modObj->updCountry($cid,$cname);
	}



/* insert update delete and select of city process */


	function selStateName()
	{
		$modObj=new Model;
		$resStateName = $modObj->selStateName();
		
		return $resStateName;
	}
	
	function insCity($cityName,$stateId)
	{
		$modObj=new Model;
		$modObj->insCity($cityName,$stateId);
	}
	function selCity()
	{
	
		$modObj=new Model;
		$resCityName = $modObj->selCity();
		
		return $resCityName;
		
	}
	function selCityByLimit($start,$limit)
	{
		$modObj=new Model;
		$resCityName = $modObj->selCityByLimit($start,$limit);
		return $resCityName;
	}

	function delCity($id)
	{
	
		$modObj= new Model;
		$modObj->delCity($id);

	}
	function selCityId($id)
	{

		$objCity = new Model;
		$resCity=$objCity->selCityId($id);
		return $resCity;
		
	
	}
	function updCity($cityid,$cityname,$sid)
	{
		$objCity = new Model;
		$objCity->updCity($cityid,$cityname,$sid);
	
	}
	
	//customer insert update delete
	
	function insertCustomer($c_fname,$c_lname,$c_country,$c_state,$c_city,$c_address,$c_email,$c_pass)
	{
		$modObj=new Model;
		$modObj->insertCustomer($c_fname,$c_lname,$c_country,$c_state,$c_city,$c_address,$c_email,$c_pass);
	}
	function authCustomer($pass,$email)
	{
		$objModel = new Model;
		$resCust=$objModel->authCustomer($pass,$email);
		return $resCust;
	}
	function selCustbyemail($email)
	{
		$objModel=new Model;
		$resCust=$objModel->selCustbyemail($email);
		return $resCust;
	}






	//saler insert update delete
		
	function insertSaller($s_fname,$s_lname,$s_email,$s_pass,$s_bname,$_bphone,$s_country,$s_state,$s_city,$s_badd,$s_bzipcode)
	{
		$modObj=new Model;
		$modObj->insertSaller($s_fname,$s_lname,$s_email,$s_pass,$s_bname,$_bphone,$s_country,$s_state,$s_city,$s_badd,$s_bzipcode);
	}
	function selLastSaler()
	{
		$modObj=new Model;
		$resCustomer=$modObj->selLastSaler();
		return $resCustomer;
	}
	function selLastCustomer()
	{
		$modObj=new Model;
		$resCustomer=$modObj->selLastCustomer();
		return $resCustomer;
	}
	
	function authSaler($userid,$apikey,$pass)
	{
		$modObj=new Model;
		$resSaler=$modObj->authSaler($userid,$apikey,$pass);
		return $resSaler;
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	function insertCustAcc($c_accno,$c_id,$c_balance)
	{
		$modObj=new Model;
		$modObj->insertCustAcc($c_accno,$c_id,$c_balance);
	}
	
	function selCustAccByAccNo($custaccno)
	{
		$modObj= new Model;
		$res=$modObj->selCustAccByAccNo($custaccno);
		return $res;
	}
	
	
	function selCustByAccNoAndPass($accno,$pass)
	{
		$modObj= new Model;
		$res=$modObj->selCustByAccNoAndPass($accno,$pass);
		return $res;	
	}
	
	
	function selLastCusAcc()
	{
		$modObj=new Model;
		$res=$modObj->selLastCusAcc();
		return $res;
	}
	
	function updateCustAccBal($custCurBal,$cusaccno)
	{
		$modObj=new Model;
		$res=$modObj->updateCustAccBal($custCurBal,$cusaccno);
		
	}
	function selCoNameByAccno($s_accno)
	{
			$modObj=new Model;
		$res=$modObj-> selCoNameByAccno($s_accno);
		return $res;
	}
	
	
	
	
	
	
	//insert update select from  saller account
	
	
	function insertSalAcc($s_accno,$s_id,$s_bal,$s_api)
	{
		$modObj = new Model;
		$modObj->insertSalAcc($s_accno,$s_id,$s_bal,$s_api);
	}

	function selSalerAccByAccNo($saleraccno)
	{
		$modObj= new Model;
		$res=$modObj->selSalerAccByAccNo($saleraccno);
		return $res;
	}
	function updateSalAccBal($salCurBal,$saleraccno)
	{
		$modObj=new Model;
		$modObj->updateSalAccBal($salCurBal,$saleraccno);
		
	}
















	//insert transaction function 

function inserttrans($s_acc,$c_acc,$amt,$s_trans_id)
	{
			$modObj= new Model;
			$modObj->inserttrans($s_acc,$c_acc,$amt,$s_trans_id);
			
	}

function selTransactionWithCompanyName($accno)
{
		$modObj= new Model;
		$res=$modObj->selTransactionWithCompanyName($accno);
		return $res;	
}


	//common function
	
	function sel_where($table,$col,$id)
	{
		$modObj=new Model;
		$res=$modObj->sel_where($table,$col,$id);
		return $res;
	}

	

















	//protection functions to protect from sql injection
	function protect($str)
	{
	
	$str = mysql_escape_string(trim(strip_tags(addslashes($str))));
	return $str;
	}
	
	
	
	function getUserIp()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
		{
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}	
	
 
 
 

}

?>