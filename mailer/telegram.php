<?php

/* https://api.telegram.org/bot1610209978:AAEsg0za7Fo0bWTH1P-5swj7ZcJI9ZCqWI8/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$message = $_POST['message'];
$email = $_POST['email'];
$token = "1610209978:AAEsg0za7Fo0bWTH1P-5swj7ZcJI9ZCqWI8";
$chat_id = "-520142658";
$arr = array(
  'Имя пользователя: ' => $name,
  'Собщение: ' => $message,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>