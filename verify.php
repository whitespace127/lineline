<?php
 
$strAccessToken = "uFbH4IE1NOr3gGSvQaRRT4Cd16wjPHBBTTVx9n3ew7Tiv0cGAKUzzMm1GPzwxUPJ0/tVCzRgEAn1Nyp+Vb2QaUMkoLxxzxLYGWUzz+M1pS6a7z11YyFBkiIr8f2iYTGlmbFXhGXT6QDpKCMt34wo2AdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($strAccessToken);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '63027787afefca74c046df98f144a3df']);

my $multipleMessageBuilder = new \LINE\LINEBot\MessageBuilder\MultiMessageBuilder();
$multipleMessageBuilder->add(new TextMessageBuilder('text1', 'text22'));
                       
$res = $bot->replyMessage($arrJson['events'][0]['replyToken'], $multipleMessageBuilder);


?>
