<?php
$UId = "";
$Message = "";

$UId = $_GET['UId'];
$Message = $_GET['Message'];

if($Message == ""){
    $Message = "helloxxx";
}

//GET https://api.line.me/v2/bot/profile/{goffee_}
require "vendor/autoload.php";
include 'LINE/LINEBot.php';
/*$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('uFbH4IE1NOr3gGSvQaRRT4Cd16wjPHBBTTVx9n3ew7Tiv0cGAKUzzMm1GPzwxUPJ0/tVCzRgEAn1Nyp+Vb2QaUMkoLxxzxLYGWUzz+M1pS6a7z11YyFBkiIr8f2iYTGlmbFXhGXT6QDpKCMt34wo2AdB04t89/1O/w1cDnyilFU=');
echo ("3 <br>");
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '63027787afefca74c046df98f144a3df']);
echo ("4 <br>");

$response = $bot->getProfile('U3188dcd776da96f3810a238670b29c2b');
if ($response->isSucceeded()) {
    $profile = $response->getJSONDecodedBody();
    echo "Display : " . $profile['displayName'];
    echo "<br>Picture : " . $profile['pictureUrl'];
    echo "<br>Message : " . $profile['statusMessage'];
}
else {
   echo ("response fail <br>");
}
*/
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('uFbH4IE1NOr3gGSvQaRRT4Cd16wjPHBBTTVx9n3ew7Tiv0cGAKUzzMm1GPzwxUPJ0/tVCzRgEAn1Nyp+Vb2QaUMkoLxxzxLYGWUzz+M1pS6a7z11YyFBkiIr8f2iYTGlmbFXhGXT6QDpKCMt34wo2AdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '63027787afefca74c046df98f144a3df']);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($Message);
$response = $bot->pushMessage($UId, $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

//$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Coba Text');
/* $response = $bot->pushMessage('goffee_', $textMessageBuilder);
echo ("6 <br>");
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
*/

/*namespace LINE\LINEBot\HTTPClient;

use LINE\LINEBot\Constant\Meta;
use LINE\LINEBot\Exception\CurlExecutionException;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot\Response;

echo ("test 6 <br>");

try {
    
    echo ("first <br>");
    
    echo ("test 1 <br>");
    
    
    echo ("test 2 <br>");
/*$response = $bot->getProfile('goffee_');
if ($response->isSucceeded()) {
    $profile = $response->getJSONDecodedBody();
    echo $profile['displayName'];
    echo $profile['pictureUrl'];
    echo $profile['statusMessage'];
}
    
*/  /*
    echo ("test a"); 
   $channelToken = 'zy9bDK/VoakRWSYKudJrh4CxL0Nlcyvz9tHJ6bLmUIPx0CiRiSmIAArfbqFpeGFd0/tVCzRgEAn1Nyp+Vb2QaUMkoLxxzxLYGWUzz+M1pS7bHHBL4+fufL0wCTLbwqY8wnrusEk4o3DjJJHNwvQBggdB04t89/1O/w1cDnyilFU=';
    $channelSecret = '63027787afefca74c046df98f144a3df';
    $apiEndpointBase = 'LINEBOT_API_ENDPOINT_BASE';
    echo ("test b"); 
    $bot = new LINEBot(new CurlHTTPClient($channelToken), [
        'channelSecret' => $channelSecret,
        'endpointBase' => $apiEndpointBase, // <= Normally, you can omit this
    ]);  
    echo ("test c"); 
/*    $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('zy9bDK/VoakRWSYKudJrh4CxL0Nlcyvz9tHJ6bLmUIPx0CiRiSmIAArfbqFpeGFd0/tVCzRgEAn1Nyp+Vb2QaUMkoLxxzxLYGWUzz+M1pS7bHHBL4+fufL0wCTLbwqY8wnrusEk4o3DjJJHNwvQBggdB04t89/1O/w1cDnyilFU=');
echo ("test a");    
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '63027787afefca74c046df98f144a3df']);
echo ("test b");
    
    
    
$response = $bot->getProfile('fennxfoci');
if ($response->isSucceeded()) {
    $profile = $response->getJSONDecodedBody();
    echo $profile['displayName'];
    echo $profile['pictureUrl'];
    echo $profile['statusMessage'];
}
*/ 
/*
}
//catch exception
catch(Exception $e) {
  echo ('Message: ' .$e->getMessage());
}
*/
?>
