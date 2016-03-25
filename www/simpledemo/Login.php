
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
<link href="css/style.css" rel="stylesheet" />
<script>



function emailchk() {
    var x = document.getElementById('t_email');
    var atpos = x.value.indexOf("@");
    var dotpos = x.value.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        return false;
    }
}


function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('t_pass');
    var pass2 = document.getElementById('t_cpass');
    //Store the Confimation Message Object ...
      var goodcolor="#fff";
	  var badcolor="#f00";
	  if(pass1.value != pass2.value || pass1.value=="")
	{	
			pass2.style.background=badcolor;
			return false;
	}
	else
	{
		
		pass2.style.background=goodcolor;
		
	}
}  
</script>
</head>

<body>
<div id="maincontaint">
  <form action="test.php" method="post" id="frm" name="f1" onsubmit="return checkPass(); ">
    <label>First Name</label>
    <input type="text" id="t_fname" name="fname" class="input" required="required"/>
    <div class="clear"></div>
    <label>Last Name</label>
    <input type="text" id="t_lname" name="lname" class="input" required="required"/>
    <div class="clear"></div>
    <label>Email</label>
    <input type="email" id="t_email" name="email" class="input" onchange="return emailchk()" required="required"/>
    <div class="clear"></div>
    <label>Password</label>
    <input type="text" id="t_pass" name="pass" class="input"/>
    <div class="clear"></div>
    <label>Confirm Password</label>
    <input type="text" id="t_cpass" name="cpass" onkeyup="checkPass(); return false;" class="input" required="required"/>
    <div class="clear">
      <input type="submit" id="submit" name="submit" value="submit" class="submit1" />
    </div>
  </form>
</div>
</body>
</html>