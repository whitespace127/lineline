
<?php
GET https://api.line.me/v2/bot/profile/{userId}

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('uFbH4IE1NOr3gGSvQaRRT4Cd16wjPHBBTTVx9n3ew7Tiv0cGAKUzzMm1GPzwxUPJ0/tVCzRgEAn1Nyp+Vb2QaUMkoLxxzxLYGWUzz+M1pS6a7z11YyFBkiIr8f2iYTGlmbFXhGXT6QDpKCMt34wo2AdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '63027787afefca74c046df98f144a3df
']);
$response = $bot->getProfile('<userId>');
if ($response->isSucceeded()) {
    $profile = $response->getJSONDecodedBody();
    echo $profile['displayName'];
    echo $profile['pictureUrl'];
    echo $profile['statusMessage'];
}
