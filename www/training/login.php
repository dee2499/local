<?php 
	//$con=mysql_connect("localhost","root","");
	//mysql_select_db("realestate",$con);
	if (isset($_POST['submit']))
	{
		session_start();
		//$_COOKIES[''];
		$conn=mysqli_connect('localhost', 'root', '', 'realestate');
		$sql="select * from login_master where Email_Id='".$_POST['user_name']."' and Password='".$_POST["pass"]."'";	
		$r=mysqli_query($conn,$sql);
		$r=mysqli_num_rows($r);
			if($r>0)
	//if($_POST['user_name']=='1' && $_POST['pass']=='2')
	{
			$_SESSION['user_name']=$_POST['user_name'];
			header("Location:main.php");
	}
	else
	{
			header('Location:index.php');
	}
	}
?>