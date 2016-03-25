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
</head>
<body>
<form method="post" id="f1">
<center>
<table border="1">
<tr>
<th>First name:</th>
<th><input type="text" name="txtfname" id="txtfname" /></th>
</tr>
<tr>
<th>Last name:</th>
<th><input type="text" name="txtlname" /></th>
<tr>
<tr>
<th colspan="2"><input type="submit" name="insert" value="insert" onClick="return check();"></th>
</tr>
<tr>
<th colspan="2"><input type="submit" name="delete" value="delete"></th>
</tr>
<tr>
<th colspan="2"><input type="submit" name="update" value="update"></th>
</tr>
<tr>
<th colspan="2"><input type="submit" name="select" value="select"></th>
</tr>
</table>
</center>
</form>
</body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("bajaj");
if(isset($_POST["insert"]))
{
$query=mysql_query("insert into demo(fname , lname)values('$_POST[txtfname]' , '$_POST[txtlname]')");
if($query==true)
{
	echo "data is inserted";
}
else
{
	echo "data is not inserted";
}
}
if(isset($_POST["delete"]))
{
$query=mysql_query("delete from demo where fname='$_POST[txtfname]' ");
if($query==true)
{
	echo "data is delete";
	
} 
else
{
	echo "data is not delete";
}
}
if(isset($_POST["update"]))
{
$query=mysql_query("update demo set fname='$_POST[txtfname]' where lname='$_POST[txtlname]'");
if($query==true)
{
echo "data is update";
}
else
{
echo "data is not update";
}
}
if(isset($_POST["select"]))
{
$query=mysql_query("select * from demo");
	
	echo"<table>";
	echo"<tr>";
	echo"<th>fname</th>";
	echo"<th>lname</th>";
	echo"<tr>";
	echo"<br>";
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
