<?php
require "vendor/autoload.php";
echo ("first <br>");
include 'LINE/LINEBot.php';
echo ("2 <br>");
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('zy9bDK/VoakRWSYKudJrh4CxL0Nlcyvz9tHJ6bLmUIPx0CiRiSmIAArfbqFpeGFd0/tVCzRgEAn1Nyp+Vb2QaUMkoLxxzxLYGWUzz+M1pS7bHHBL4+fufL0wCTLbwqY8wnrusEk4o3DjJJHNwvQBggdB04t89/1O/w1cDnyilFU=');
echo ("3 <br>");
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '63027787afefca74c046df98f144a3df']);
echo ("4 <br>");

$response = $bot->getProfile('goffee_');
if ($response->isSucceeded()) {
    $profile = $response->getJSONDecodedBody();
    echo $profile['displayName'];
    echo $profile['pictureUrl'];
    echo $profile['statusMessage'];
}
else {
   echo ("response fail <br>");
}


//$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Coba Text');
echo ("5 <br>");
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
