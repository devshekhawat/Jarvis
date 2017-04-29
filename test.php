<?php
error_reporting(E_ALL);

$url ="http://api.program-o.com/v2/chatbot/?bot_id=6&say=what%20is%20your%20name&convo_id=exampleusage_1231232&format=json";

$cURL = curl_init();

curl_setopt($cURL, CURLOPT_URL, $url);
curl_setopt($cURL, CURLOPT_HTTPGET, true);

curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Accept: application/json'
));

$result = curl_exec($cURL);
//echo $result;
$json = json_decode($result, true);
//echo $json['usersay'];
?>
