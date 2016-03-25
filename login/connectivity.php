<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "login";
$con = mysql_connect($host,$user,$password,$database) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db($database,$con) or die("Failed to connect to MySQL: " . mysql_error());
	$ID = $_POST['user']; 
	$Password = $_POST['pass']; 
  
  function SignIn() 
  	{	 
  	session_start();
  	//starting the session for user profile page 
  	if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
  	{
  		$query = mysql_query("SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error()); 
  		$row = mysql_fetch_array($query) or die(mysql_error()); 

  	if(!empty($row['userName']) AND !empty($row['pass'])) 
  		{
  	 		$_SESSION['userName'] = $row['pass']; 
  	 		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
  	 	}
  		else
	  	{
	  	 	echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
	  	}
  	}
	}
 if(isset($_POST['submit'])) 
 	{
 	 SignIn(); 
 	} 
 ?>

