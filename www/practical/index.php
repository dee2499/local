<script>
    function myFunction() {
        var pass1 = document.getElementById("pass").value;
        var pass2 = document.getElementById("confirm_pass").value;
        if (pass1 != pass2) {
            //alert("Passwords Do not match");
            document.getElementById("pass").style.borderColor = "#E34234";
            document.getElementById("confirm_pass").style.borderColor = "#E34234";
        }
        else {
            alert("Passwords Match!!!");
        }
    }
</script>

<html>
<head></head>
<body >
<form  name"frm1" id="1" method="post">
<table border='1' align="centre" >
<tr><td><label>Name</label> </td><td><input type="text"  name="txt1" required="required">
<tr><td><label>DOB</label> </td><td><input type="date"  name="dt" required="required">
<tr><td><label>Email</label> </td><td><input type="email"  name="email" required="required">
<tr><td><label>Website</label> </td><td><input type="text"  name="web" required="required">
<tr><td><label>Gender</label> </td><td><input type="text"  name="gen" required="required">
<tr><td><label>Phone</label> </td><td><input type="text"  name="phone" required="required">
<tr><td><label>Address</label> </td><td><input type="text"  name="add" required="required">
<tr><td><label>Username</label> </td><td><input type="text"  name="user" required="required">
<tr><td><label>Password</label> </td><td><input type="password"  name="pass" required="required" id="pass">
<tr><td><label>Conform Password</label> </td><td><input type="password"  name="pas1" required="required" id="confirm_pass">


</table>

<input type="submit" name="insert" value="insert">
<input type="submit" name="update" value="update">
<input type="submit" name="delete" value="delete">	
<input type="submit" name="view" value="view">
</form>
</body>
<?php

mysql_connect("localhost","root","");
mysql_select_db("Deepak");

if(isset($_POST["insert"]))
{
	$query=mysql_query("insert into table(name,dob,email,website,gender,phone,add,user_name,pass,con_pass ) values('$_POST[txt1]' , '$_POST[dt]' , '$_POST[email]' , '$_POST[web]' , '$_POST[gen]' , '$_POST[phone]' , '$_POST[add]' , '$_POST[user]' , '$_POST[pass]' , '$_POST[pas1]')");
	
	
	
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
	
	$query=mysql_query("delete from demo where fname='$_POST[txt1]'");
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
	
	$query=mysql_query("update demo set name='$_POST[txt1]' where user_name='$_POST[user]'");
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
	
	$query=mysql_query("select * from Deepak");
	
		echo "<table>";
		echo "<tr>";
		echo "<th>Name</th>";
		echo "<th>DoB</th>";
		echo "<th>Email</th>";
		echo "<th>website</th>";
		echo "<th>gender</th>";
		echo "<th>Phone</th>";
		echo "<th>Address</th>";
		echo "<th>User Name</th>";

		echo "<tr>";
		echo "<br>";
		while($row=mysql_fetch_array($query))
		{
			echo "<tr>";
			echo "<th>".$row['name']."</th>";
			echo "<th>".$row['dob']."</th>";
			echo "<th>".$row['email']."</th>";
			echo "<th>".$row['website']."</th>";
			echo "<th>".$row['gender']."</th>";
			echo "<th>".$row['phone']."</th>";
			echo "<th>".$row['add']."</th>";
			echo "<th>".$row['user_name']."</th>";
			echo "<tr>";
		}
		echo "</table>";
		
		
	
}
?>


	

</html>