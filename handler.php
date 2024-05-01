<?php
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "7177984646:AAG_vb-n8wc4S2XOOQfTD0RkQhKSr1cbwLk";
$chat_id = "-4100737464";

$formData = array(
  "Телефон: " => $user_phone,
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A" ;
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=HTML","r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}
