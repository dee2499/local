<?php
//require("lib/nusoap.php");

# create and initialize a new server object
$server = new soap_server();

$server->configureWSDL("Camelleathers", "urn:Camelleathers");
$sEmail = "patelleena57@gmail.com";
$sUserId = "1";
$server->register('sendVerificationEmail', array('sEmail' => 'patelleena57@gmail.com', 'sUserId' => '1', 'sUsername' => 'leenapatel57'), array('return' => 'patelleena57@gmail.com'), 'Nowarchive', 'urn:Nowarchive', 'rpc', 'encoded', 'this method send verification email to user for verify email...');

function sendVerificationEmail($sEmail, $sUserId, $sUsername) {

	require("mail/class.phpmailer.php"); 
	$mail = new PHPMailer();
	
   // if ($sEmail != '' && $sUserId != '') {
		/*$sAdmin = "krishna20688@gmail.com";*/
       // $sVerficationCode = encode5t($sUserId);
       // $sActivationLink = ROOT_PATH . 'activate.php?vcode=' . $sVerficationCode . '&userId=' . $sUserId;
        $sSubject = 'Order Summery Camelleathers';
	
        $sContent = '<html><head></head><body style="font-family:arial; font-size:14px;">';
        //$sContent	.=	'<p><img src="'.ROOT_PATH.'images/logo_2x.png" border="0"/></p>';
        $sContent .= '<h4>Hello Camelleather Admin - </h4>';
        $sContent .= 'Below Order Recieved';
        $sContent .= '<p>Username :'.$cUsername.'<br>Email:'.$cEmailid.'<br>Address:'.$cAddress.'<br>City:'.$city.'<br>State:'.$state.'<br>Country:'.$cCountry.'<br>Pincode:'.$cPincode.'<br>Ordertype:'.$cOrdertype.'<br>Pricepaid:'.$cPrice.'<br>Productname:'.$cProductname.'<br>Original Price:'.$cOriginalprice.'<br>Discount Price:'.$cDiscountPrice.'</p>';
       
        $sContent .= '<p><span style="font-size:10px;">F1/207 Kashivishveshwar Township above swagat restaurant, Jetalpur road vadodara-390020. Gujarat. INDIA</span><br/><br/>
	<a href="' . ROOT_PATH . 'terms.php">Terms of Service</a> | <a href="' . ROOT_PATH . 'privacy-policy.php">Privacy Policy</a> |
	<a href="' . ROOT_PATH . 'contact-us.php">Contact Us</a><br/><br/>
	<span style="margin-right: 14px;float: left;line-height: 30px;">Follow Us </span><a href="https://www.facebook.com/camelleatherbags" target="_blank"><img src="' . ROOT_PATH . 'images/social-fb-icon.png" border="0" /></a>&nbsp;&nbsp;<a href="https://twitter.com/camelleather/" target="_blank"><img src="' . ROOT_PATH . 'images/social-twitter-icon.png" border="0" /></a>&nbsp;&nbsp;<a href="#"><img src="' . ROOT_PATH . 'images/social-google-plus-icon.png" border="0" /></a>&nbsp;&nbsp; </p><p style="font-size:12px;">&copy; 2015 NowArchive, Inc. All Rights Reserved.<br/></p>';

		
        //SMTP SETTING
        $mail->IsSMTP();
	$mail->CharSet = 'UTF-8';
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "ssl";
        $mail->SMTPDebug = 1;
        $mail->IsHTML(true);
        $mail->Host       = "smtp.gmail.com";
        $mail->Port       = 465;
     	/*$mail->Username   = "no-reply@camelleathers.com";
        $mail->Password   = "12345";
        $mail->SentFrom('no-reply@camelleathers.com', 'Camelleathers');*/
        $mail->Username   = "camelleathers@gmail.com";
        $mail->Password   = "camel@#371";
        $mail->SetFrom('camelleathers@gmail.com', 'Camelleathers');
        
        $mail->AddAddress($sEmail, "Leena Patel");
        //ENDS
		mail($sEmail,$sSubject,$sContent,"Content-type: text/HTML");
        mail($sAdmin,$sSubject,$sContent,"Content-type: text/HTML");
        $mail->Subject    = $sSubject;
        $mail->Body       = $sContent;
        $mail->msgHTML($sContent);
	
        if(!$mail->Send())
        {
			echo $mail->ErrorInfo;
        	return '0';
        }
        else 
        {
			echo "success";
        	return "1";
        }
    }
//}

sendVerificationEmail($sEmail,$sUserId,$sUsername);
sendVerificationEmail("krishna20688@gmail.com",'1','camelleathers');



# create HTTP listener:
$request = isSet($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($request);

?>
