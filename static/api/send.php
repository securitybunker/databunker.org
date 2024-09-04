<?php

include_once('conf.php');

$ip = $_SERVER['REMOTE_ADDR'];
$captcha = @htmlspecialchars(trim($_REQUEST['captcha']));
$email = @htmlspecialchars(trim($_REQUEST['email']));
$phone = @htmlspecialchars(trim($_REQUEST['phone']));
$name = @htmlspecialchars(trim($_REQUEST['name']));
$company = @htmlspecialchars(trim($_REQUEST['company']));
$message = @htmlspecialchars(trim($_REQUEST['message']));

if (strlen($email) == 0) {
  print("input error");
  exit();
}
if ($captcha != 18) {
  print("input error");
  exit();
}
if (strlen($name) > 20) {
  print("input error");
  exit();
}

$title = "databunker: ".$name." ".$phone;
$msg = "New guy\r\n";
$msg .= "Name: ".$name."\r\n";
$msg .= "Phone: ".$phone."\r\n";
$msg .= "Email: ".$email."\r\n";
$msg .= "Captcha: ".$captcha."\r\n";
$msg .= "Company: ".$company."\r\n";
$msg .= "Message: ".$message."\r\n";
$msg .= "IP: $ip\r\n";

#if ($email) {
#  $headers = 'From: Yulisec <bot@paranoidguy.com>'."\r\n";
#  @mail("yuli@privacybunker.io", $title, $msg, $headers);
#}
#
$msg_html = str_replace("\n", "<br/>", $msg);
$subject = "contact message 🚀";
$sender = "hello@privacybunker.io";
$cc = "yuli@privacybunker.io";
$title = "Databunker";
sendemail($msg, $msg_html, $subject, $cc, $sender, $title, "");

?><html>
<body>
<br/>
<br/>
<center>
<h1>Thank you!</h1>
<p>We will contact you shortly.</p>
<br/>
<a href="/">Back</a>
</center>

</body>
</html>
