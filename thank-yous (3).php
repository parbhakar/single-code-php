<?php
//if(isset($_POST['submit']))
if($_SERVER['REQUEST_METHOD']=='POST')
{
    
     //print_r($_POST);die;
	 $name=$_POST['fname'] . $_POST['lname'];
	 $email=$_POST['email'];
	 $phone=$_POST['phone'];
	 //$select_project=$_POST['select_project'];
	 $select_ctype=$_POST['select_ctype'];
	 $contact_message=$_POST['message'];
	 $subject = $_POST['subject'];
     $mailBody = '<html><head>
				<meta http-equiv="content-type" content="text/html; charset=windows-1252"></head><body>
				<table style="border:10px solid #C00F65;" align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="650">
				<tbody><tr>
				<td align="left" valign="top"><table style="border-bottom:1px solid #cccccc; border="0" cellpadding="0" cellspacing="0" width="650">
				<tbody><tr>
				<td style="padding: 10px;background-color: #c00f65;" align="left" valign="middle" width="275">
				<img class="CToWUd" alt="www.d-care.com" src="http://bhavnanagar.com/assets/img/logo.png" width="100px"></td>
				</tr>
				</tbody></table></td>
				</tr>
				<tr>
				<td align="left" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="650">
				<tbody><tr><td colspan="3" height="30" width="100%"><span height="1" width="1"></td></tr>
				<tr>
				<td width="30"><span height="1" width="1"></td>
				<td style="font-size:13px;color:#333333" width="590">
				<p style="font-family:Arial;font-size:18px;color:#434A54;margin-bottom:0.5em;margin-top:0"></p>
				<p>&nbsp;</p>
				<p style="font-size:13px; font-weight:bold;">Thanks for Submitting your Enquiry with Bhavna Nagar. We will get back to you soon.</p>
				<P>Name :-  '.$name.'</p>
				<P>Email :-  '.$email.'</p>
				<P>Mobile Number :-   '.$phone.'</p>
				<P>subject:-   '.$subject.'</p>
				<P>Choose Type:-   '.$select_ctype.'</p>
				
				<P>Message :-  '.$contact_message.'</p>
				<p>For any enquiry mail us on <a href="mailto:http://bhavnanagar.com/" style="color:#DD861F;text-decoration:none">info@bhavnanagar.com</a></p>
				<p></p>
				<div><b> Thank you,</b> </div>
				<div><b> <span class="il">www.bhavnanagar.com</span></b>  </div>
				</td>
				<td width="30"><span height="1" width="1"></td>
				</tr>            
				<tr><td colspan="3" height="30" width="100%"><span height="1" width="1"></td></tr>
				</tbody></table></td>
				</tr>
				</tbody></table>
				</body></html>';
		
		sendEmail($email,"bhavnanagar.com : Thanks for your Query.",$mailBody);

		$infoemail="info@bhavnanagar.com";
		sendEmail($infoemail,"bhavnanagar.com Quick Contact",$mailBody);
		
       $reports="infutivedeveloper@gmail.com";
 	   sendEmail($reports,"bhanvanagar.com Quick Contact",$mailBody);

		//header("location:../thank-you.html");
}
   
   function sendEmail($to,$subject,$message){
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	// More headers
	$headers .= 'From: <info@bhavnanagar.com>' . "\r\n";

	if(@mail($to,$subject,$message,$headers))
	{
		return array("valid" => 1,"message" => 'Message has been successfully sent.');
	}
	else
	{
		return array("valid" => 0,"message" => 'There is some techincal issue. Please try later.');
	}
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- set the page title -->
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- Event snippet for M3M Leads conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-812988781/6Un1CIqyiLUBEO3y1IMD',
      'event_callback': callback
  });
  return false;
}
</script>
<style type="text/css">
*{
  box-sizing:border-box;
 /* outline:1px solid ;*/
}
body{
background: #ffffff;
background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed',GradientType=0 );
    height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
  
}

.wrapper-1{
  width:100%;
  height:100vh;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding :30px;
  text-align:center;
}
h1{
    font-family: 'Kaushan Script', cursive;
  font-size:4em;
  letter-spacing:3px;
  color:#008ff7 ;
  margin:0;
  margin-bottom:20px;
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#0591f7;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.go-home{
  color:#fff;
  background:#0591f7;
  border:none;
  padding:10px 50px;
  margin:30px 0;
  border-radius:30px;
  text-transform:capitalize;
  box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
}
.footer-like{
  margin-top: auto; 
  background:#D7E6FE;
  padding:6px;
  text-align:center;
}
.footer-like p{
  margin:0;
  padding:4px;
  color:#5892FF;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.footer-like p a{
  text-decoration:none;
  color:#5892FF;
  font-weight:600;
}

@media (min-width:360px){
  h1{
    font-size:4.5em;
  }
  .go-home{
    margin-bottom:20px;
  }
}

@media (min-width:600px){
  .content{
  max-width:1000px;
  margin:0 auto;
}
  .wrapper-1{
  height: initial;
  max-width:620px;
  margin:0 auto;
  margin-top:50px;
  box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
}
  
}
</style>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '461344831746592');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=461344831746592&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>
<body>
    <script>
  fbq('track', 'ViewContent');
</script>

<div class=content>
  <div class="wrapper-1">
    <div class="wrapper-2">
      <h1>Thank you !</h1>
      <p>Thank you for your Query.  </p>
      <p>We will get back to you soon</p>
      <button class="go-home" onclick="window.location.href='index.php'">
      go home
      </button>
    </div>
</div>
</div>
<script>
setTimeout('Redirect()', 1000);
function Redirect() 
{  
 window.location="index.php"; 
} 
</script>


<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
















































