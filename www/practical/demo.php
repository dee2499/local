
<script>

function check(){
var fn;
fn=f1.txtfname.value;
if(fn.length==0){
	alert("must enter firstname");
	f1.txtfname.focus();
	f1.txtfname.style.background="green";
	return false;
}
}
</script>

<html>

<title>Untitled Document</title>

</head>
<body>
<form method="post" id="f1">
<center>
<table border="1">
<tr>
<th>FirstName:</th>
<th><input type="text" name="txtfname" /></th>
</tr>
<tr>
<th>LastName:</th>
<th><input type="text" name="txtlname" /></th>
</tr>
<tr>
<th colspan="2"><input type="submit" name="insert" value="Insert"  onClick="return check();" /></th>
</tr>
<tr>
<th colspan="2"><input type="submit" name="Delete" value="Delete" /></th>
</tr>
<tr>
<th colspan="2"><input type="submit" name="Update" value="Update" /></th>
</tr>
<tr>
<th colspan="2"><input type="submit" name="Select" value="Select" /></th>
</tr>

</table>
</center>
</form>
</body>
<?php
mysql_connect("localhost","root","");
	mysql_select_db("bhoomi");
if(isset($_POST["insert"]))
{
	
	$query=mysql_query("insert into demo(fname,lname) values('$_POST[txtfname]', '$_POST[txtlname]')");
	if($query==true)
	{
		echo "data inserted";
	}
	else
	{
				echo "data not inserted";
	}
}
if(isset($_POST["Delete"]))
{
	
	$query=mysql_query("delete from demo where fname='$_POST[txtfname]'");
	if($query==true)
	{
		echo "data deletedd";
	}
	else
	{
				echo "data not delete";
	}
}
if(isset($_POST["Update"]))
{
	
	$query=mysql_query("update demo set fname='$_POST[txtfname]' where lname='$_POST[txtlname]'");
	if($query==true)
	{
		echo "data update";
	}
	else
	{
				echo "data not update";
	}
}
if(isset($_POST["Select"]))
{
	
	$query=mysql_query("select * from demo");
	
		echo "<table>";
		echo "<tr>";
		echo "<th>Fname</th>";
		echo "<th>Lname</th>";
		echo "<tr>";
		echo "<br>";
		while($row=mysql_fetch_array($query))
		{
			echo "<tr>";
			echo "<th>".$row['fname']."</th>";
			echo "<th>".$row['lname']."</th>";
			echo "<tr>";
		}
		echo "</table>";
		
		
	
}
?>
</html>
