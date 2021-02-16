<?php
//https://api.telegram.org/bot1387467862:AAHm63q6W4xRwnO17ddPhV_uxIZAZncOcww/setwebhook?url=https://amarthurabot.000webhostapp.com/amarthurabot.php
$token="1387467862:AAHm63q6W4xRwnO17ddPhV_uxIZAZncOcww";
$path="https://api.telegram.org/bot1387467862:AAHm63q6W4xRwnO17ddPhV_uxIZAZncOcww";
$update = json_decode(file_get_contents("php://input"), TRUE);
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
if (strpos($message, "/info") === 0) {
    file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=Here's the weather in ");
}
else{
    file_get_contents("default text");
}
?>




