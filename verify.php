<?php
$access_token = 'eJEFPranDK5xXC6QBOiB1CJI5G01sjBXtlR0A/7p0KOw/3ddbOkSW2PfRzQ99iSB7zStytet0rnfqOTJMSDLXZVsm/CdduTrkGnHSIWOttCDRAlXwHml5s8Z6AOvZUnxyyf0jCUbHw5o0YCkbq/eLQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
