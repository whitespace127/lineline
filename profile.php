<?php
use LINE\LINEBot\Constant\Meta;
use LINE\LINEBot\Exception\CurlExecutionException;
use LINE\LINEBot\HTTPClient;
use LINE\LINEBot\Response;

echo ("test 3");

try {
$httpClient = new \LINEBot\HTTPClient\CurlHTTPClient('zy9bDK/VoakRWSYKudJrh4CxL0Nlcyvz9tHJ6bLmUIPx0CiRiSmIAArfbqFpeGFd0/tVCzRgEAn1Nyp+Vb2QaUMkoLxxzxLYGWUzz+M1pS7bHHBL4+fufL0wCTLbwqY8wnrusEk4o3DjJJHNwvQBggdB04t89/1O/w1cDnyilFU=');
echo ("test a");    
$bot = new \LINEBot($httpClient, ['channelSecret' => '63027787afefca74c046df98f144a3df']);
echo ("test b");
/*$response = $bot->getProfile('fennxfoci');
if ($response->isSucceeded()) {
    $profile = $response->getJSONDecodedBody();
    echo $profile['displayName'];
    echo $profile['pictureUrl'];
    echo $profile['statusMessage'];
}
*/
}
//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}

?>
