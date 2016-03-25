<?php
//print_r($_GET);
$method=$_GET['method'];
$name=$_GET['name'];
$id=$_GET['id'];

//Function Call
call_user_func($method,$name,$id);

//Function Declare/Defination
function adduser($name,$id)
{
	$insert="insert into users(name,id) values('$name','$id')";
	
	/* 
		$result=array("result"=>"success");
		if(mysql_query($insert))
		{
			$result=array("result"=>"success");
		}
		else
		{
			$result=array("result"=>"failed");
		}	
	*/
	if(1==1)
		{
			$result=array("result"=>"success");
		}
		else
		{
			$result=array("result"=>"failed");
		}
	echo json_encode($result);

}

function updateuser($name,$id)
{
	$update="Update users set name='$name' where id='$id'";
	echo $update;
}

?>