<?php
//https://api.telegram.org/bot1387467862:AAHm63q6W4xRwnO17ddPhV_uxIZAZncOcww/setwebhook?url=https://amarthurabot.000webhostapp.com/amarthurabot.php
$token="1387467862:AAHm63q6W4xRwnO17ddPhV_uxIZAZncOcww";
$path="https://api.telegram.org/bot1387467862:AAHm63q6W4xRwnO17ddPhV_uxIZAZncOcww";
//$token="1387467862:AAHm63q6W4xRwnO17ddPhV_uxIZAZncOcww";
//$path="https://api.telegram.org/bot1387467862:AAHm63q6W4xRwnO17ddPhV_uxIZAZncOcww";
$update = json_decode(file_get_contents("php://input"), TRUE);
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];


$api = 'https://api.telegram.org/bot' . $token;


$callback_query = $update['callback_query'];
$data = $callback_query['data'];
$message_id = ['callback_query']['message']['message_id'];
$chat_id_in = $callback_query['message']['chat']['id'];

if (strpos($message, "/info") === 0) {
   
    
    file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=Here's the weather pu ");
}


if (strpos($message, "/text") === 0){
  
        $inline_button1 = array("text"=>"Google url","url"=>"http://google.com");
        $inline_button2 = array("text"=>"work plz","callback_data"=>'/plz');
        $inline_keyboard = [[$inline_button1,$inline_button2]];
        $keyboard=array("inline_keyboard"=>$inline_keyboard);
        $replyMarkup = json_encode($keyboard); 
         sendMessage($chat_id, "ok", $replyMarkup);  
}
function sendMessage($chat_id, $message, $replyMarkup) {
    file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message) . '&reply_markup=' . $replyMarkup);
   file_get_contents("default text");
}
?>




