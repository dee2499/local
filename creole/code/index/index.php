<?php 
include("config.php");
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
    <td><input type="text" name="username" placeholder="User Name" required /></td>
    </tr>
    <tr>
    <td><input type="password" name="password" placeholder="Password" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="submit"><strong>Login</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>

<?php
$uname=$_REQUEST["username"];
$pass=$_REQUEST["password"];

if(isset($_REQUEST["submit"]))
{
$id=$_REQUEST["id"];    
echo $q="select * from users where id=$id";
exit;
$record=mysql_query($con,$q);
$r=mysql_fetch_array($record);

    $u_name=$r["first_name"];
    $pass1=$r["last_name"];
    if($pass==$pass1)
    {
        header("location:view.php?msg=successfully Login");
    }
    else
    {
        header("location:index.php?msg=Login Fail");
    }
}
?>