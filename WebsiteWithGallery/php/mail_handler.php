<?php
if($_POST)
{
require('constant.php');

  $name = $_POST['fullname'];
  $visitor_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $g_recaptcha_response = $_POST['g-recaptcha-response'];


  //reCAPTCHA validation
  if (!isset($_POST['g-recaptcha-response'])){
    header('Location: captcha-req.php');
      die();
  }
  elseif (isset($_POST['g-recaptcha-response'])) 
  {
		
    require('component/recaptcha/src/autoload.php');		
  
    $recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY);

    $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

    if (!$resp->isSuccess()) 
    {
      header('Location: captcha-req.php');
      die();
    }
  }

  $email_from = "";//<== update the email address
  $email_subject = "New form submission: " . $subject;
  $email_body = "You have received a new message from $name.\r\n". "$message\r\n\r\n".
    
  $to = ""; //<== update the email address
  $headers = "From: $email_from \r\n";
  $headers = "Reply-To: $visitor_email \r\n";
  //Send the email!
  mail($to,$email_subject,$email_body,$headers);
  //done. redirect to thank-you page.
  header('Location: thank-you.php');

 } 
?> 
