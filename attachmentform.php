<?php
 
//print_r($_POST);
            if($_SERVER['REQUEST_METHOD']=='POST'){
                @extract($_POST);
            
            
            $message = "
             
            <table>
             
            <tr>
            <td>Name : </td>
            <td>".$name."</td>
            </tr>
            
            <tr>
            <td>Email : </td>
            <td>".$name."</td>
            </tr>
            
            <tr>
            <td>Mobile No : </td>
            <td>".$phone."</td>
            </tr>
            
            <tr>
            <td>Location : </td>
            <td>".$location."</td>
            </tr>
            
            <tr>
            <td>Disclaimer : </td>
            <td>".$desc."</td>
            </tr>
            
             
            
            
            </table>
             
            ";

                 $banner=$_FILES['resume']['name'];
                 $separator=time().$banner;
                 $bannerpath="./uploads/careerform/".$separator;
                 $chk = move_uploaded_file($_FILES["resume"]["tmp_name"],$bannerpath);
                 
                 
                 $content = file_get_contents($bannerpath);
                 $content = chunk_split(base64_encode($content));
                 
                 // carriage return type (RFC)
                 $eol = "\r\n";
                 
                 
                 // main header (multipart mandatory)
                 $to = 'theluxecarwash@gmail.com';
                 $subject = 'Become volunteer Sign Up Form';
                 $headers = "From: theluxecarwash <theluxecarwash@gmail.com>" . $eol;
                 $headers .= 'Cc:report@infutive.com' . $eol;
                 $headers .= "MIME-Version: 1.0" . $eol;
                 $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
                 $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
                 $headers .= "This is a MIME encoded message." . $eol;
                 
                 // message
                 $body = "--" . $separator . $eol;
                 $body .= "Content-Type: text/html; charset=UTF-8" . $eol;
                 $body .= "Content-Transfer-Encoding: 8bit" . $eol;
                 $body .= $message . $eol;
                 
             
                 
                 // attachment
                 $body .= "--" . $separator . $eol;
                 $body .= "Content-Type: application/octet-stream; name=\"" . $banner . "\"" . $eol;
                 $body .= "Content-Transfer-Encoding: base64" . $eol;
                 $body .= "Content-Disposition: attachment" . $eol;
                 $body .= $content . $eol;
                 $body .= "--" . $separator . "--";

                $chk = mail($to,$subject,$body,$headers);
                
                
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
    window.location="https://www.theluxecarwash.com/"; 
} 
</script>


<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>




