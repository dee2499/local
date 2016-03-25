<?php include("config.php");
error_reporting(E_ERROR | E_PARSE);
?>
<html>
<head>
<title>Test Demo</title>
</head>
<body>
<center>
<div id="header">
 <div id="content">
    <label>Test Demo</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="City" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="number" placeholder="Number" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="submit"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>
<?php
$fname=$_REQUEST["first_name"];
$lname=$_REQUEST["last_name"];
$address=$_REQUEST["city_name"];
$mno=$_REQUEST["number"];

if(isset($_REQUEST["submit"]))
{
$query="insert into users(first_name,last_name,user_city,number)values('$fname','$lname','$address','$mno')";
mysqli_query($con,$query);
header("location:view.php?msg=successfully register");
}
?>
</center>
</body>
</html>