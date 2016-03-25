<?php session_start(); ?>

<div id="sidebar">
            <ul>
                <li>
                    <h3 class="widget-title">User Login</h3>
                    <div class="widget-container login-form">
                       					   
					    <form />
                            <label>Username</label>
                            <input name="username1" type="text" value="" />

                            <label>Password</label>
                            <input name="password1" type="password" value="" />

                            <p class="remember-me">Remember Me<input name="remember-me" type="checkbox" value="" /></p>

                            <p><input type="submit" name="Submit" value="Login" /></p>

                            <a href="fpass.php">I forgot my Password</a>
                            <a href="changpass.php">Change Password</a>
                        </form>
                    </div>
                </li>
				
			 <?php
if(isset($_REQUEST["Submit"]))
{
$nm=$_REQUEST["username1"];

$query="Select * from login_master where Email_Id='$nm'";
//mysql_query($query);
$con=mysql_pconnect("localhost","root","");

mysql_select_db("realestate",$con);

$rs=mysql_query($query,$con);

if($r=mysql_fetch_assoc($rs))
{
$rl=$r["Email_Id"];
$ps=$r["Password"];
$pas=$_REQUEST["password1"];
$us=$_REQUEST["username1"];
$ro=$r["Role"];
	

	
if($ps=$pas)
{
	if($ro=="Admin" )
	{

	header ("location:admin.php");
	
	}
	elseif($ro=="Agent" )
	{
	
	header ("location:Agent.php");
	}
	elseif($ro=="Owner" )
	{
	
	header ("location:Owner.php");
	}
	elseif($ro=="Buyer" )
	{
	
	header ("location:Buyer.php");
	}
	
	
}
else 
{
	echo "<br>In Valid UserName";
}
}
}
?>