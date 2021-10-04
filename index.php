<!-- <?php
echo "Hello LINE BOT";
 -->
   
<?php
require "vendor/autoload.php";
$access_token = 'SP4D+KpIpSNT3iXZYVXX625s5OXfHFbdxMR7mnjW14jNzFuM3g0DbHvIKiLPjJC33HK5WUwmy23sD5uyiltD0aq/Gdv41xNAAZUNVhP9QGhLh6bXdgqzrW+8ZuMkJCaKY2N9gRcC8KPFnG545M3cyQdB04t89/1O/w1cDnyilFU=
';
$channelSecret = '08054122a28ae30ba3e5f2f241ba3bec';
$idPush = 'U05e0bf7a501cf9ff9d8dac309a4b7478'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world ทดสอบ');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
