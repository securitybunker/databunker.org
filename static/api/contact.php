<?php

#@require_once('databunker-api.php');
@require_once('/var/www/privacybunker.io/html/api/databunker-api.php');

$id = @$_GET['id'];

$p = "";
if (!empty($_POST)) {
  $p = json_encode(@$_POST);
  if ($p) {
    @error_log("meeting post $p");
  }
  $email = get_string('email', 'post');
  $email = strtolower($email);
  $name = get_string('name', 'post');
  $phone = get_string('phone', 'post');
  $company = get_string('company', 'post');
  $country = get_string('country', 'post');
  $hostname = get_string('hostname', 'post');
  $topics = get_string('topics', 'post');
  if ($email) {
    send_book_demo($topics, $name, $phone, $email, $hostname);
  }
  #if (!empty($email)) {
  #  update_user_by_post($email);
  #}
}
print("ok");
