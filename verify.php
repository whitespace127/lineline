<?php
require "vendor/autoload.php";
include 'LINE/LINEBot.php';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('uFbH4IE1NOr3gGSvQaRRT4Cd16wjPHBBTTVx9n3ew7Tiv0cGAKUzzMm1GPzwxUPJ0/tVCzRgEAn1Nyp+Vb2QaUMkoLxxzxLYGWUzz+M1pS6a7z11YyFBkiIr8f2iYTGlmbFXhGXT6QDpKCMt34wo2AdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '63027787afefca74c046df98f144a3df']);

for ($x = 1; $x <= 5; $x++) {
    $Message = "The number is: $x"; 
   $UId = 'U3188dcd776da96f3810a238670b29c2b';
 
  $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($Message);
  $response = $bot->pushMessage($UId, $textMessageBuilder);
 
 echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
} 



?>
