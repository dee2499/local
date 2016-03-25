<?php
//echo json_encode('Hello world!');

echo json_encode(array('apple','banana','lolipop'));

echo json_decode($data);
echo "<br/><pre>";

//print_r(json_encode($arr));


function sendData($data)
{
	echo json_encode($data);
}

function getData()
{
	$arr=array("std1" => "Abc", "std2"=>"opq");
		$data=json_encode($arr);
		//return json_decode($data);
	$arr=array("std1" => "Abc", "std2"=>"opq");
	//echo sendData($arr);
}
	//print_r(getData());
?>