<?php 

ob_start();
$API_KEY = "1443449681:AAE8t9NVsYCElv1LYI_MoGlND0adabIN-x8";
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=https://".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
    $SssQs = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$SssQs";
        $SssBs = file_get_contents($url);
        return json_decode($SssBs);
}
$update   = json_decode(file_get_contents('php://input'));
$message  = $update->message;
$text     = $message->text;
$chat_id  = $message->chat->id;
$name     = $message->from->first_name;
$user     = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$id = $message->from->id;
$admin = 463018335;

if($text =='/start'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"Hi Bot instauP
Send iDinsta-iDTarget

Ex:
iDinsta ( iD instagram Send Followers )
iDTarget ( iD Target Coins )",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'مطور البوت','url'=>'t.me/pytdz']]
]
])
]);
}

if(preg_match('(-)',$text)){
$md = explode('-', $text);
$url = file_get_contents("https://psksks.tk/ABooD/instauP.php?userid=$md[0]&target=$md[1]");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$url",
]);
}