<?php

include("head.php");

$response = $_POST["g-recaptcha-response"];
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = array(
    'secret' => '6LcdKnAUAAAAAIIP2HRX4X5abcNluzMahhDMKpXU',
    'response' => $_POST["g-recaptcha-response"]
  );
  $options = array(
    'http' => array (
      'method' => 'POST',
      'content' => http_build_query($data)
    )
  );
  $context  = stream_context_create($options);
  $verify = file_get_contents($url, false, $context);
  $captcha_success=json_decode($verify);
  if ($captcha_success->success==false) {
    header('Location: /index.php/failed-recaptcha');
  } else if ($captcha_success->success==true) {
    if(isset($_POST['submit'])){
       $to = "chen@neshamatherapy.com";
       $from = $_POST['email'];
       $name = $_POST['name'];
       $subject = "Website - Form submission";
       $message = $name . " sent a message:" . "\n\n" . $_POST['message'] . "\n\n" . "Email: " . $from . "\nPhone:" . $_POST["phone"] . "\n" . "Best Time To Call: " . $_POST["time-to-call"];

       $headers = "From:" . $from;
       $mail = mail($to,$subject,$message,$headers);
       if ($mail) {
         header('Location: ../pages/thank_you.php');
       }
     }
  };


?>
