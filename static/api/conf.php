<?php

$mailjet_apikey = "eb0bf9d7349312c27c12f0cae2de7a50:80a9d757c62230757ad7dbc24a661764";

function sendemail($msg, $msg_html, $subject, $email, $sender, $title, $cc) {
  global $mailjet_apikey;
  $cc_list = array();
  if ($cc) {
    $cc_list[] = array( "Email" => $cc );
  }
  $data = array("Messages"=>array(array(
    "From" => array( "Email" => $sender, "Name" => $title),
    "To" => array(array( "Email" => $email )),
    "Cc" => $cc_list,
    "Subject" => $subject,
    "TextPart" => $msg,
    "HTMLPart" => $msg_html
  )));
  $url = "https://api.mailjet.com/v3.1/send";
  $headers = array('Content-Type: application/json');
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_USERPWD => $mailjet_apikey,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_POSTFIELDS => json_encode($data)
  ));
  $b = @curl_exec($curl);
  #var_dump($b);
}

