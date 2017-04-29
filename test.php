<?php
$accessToken = "EAAEQMKMTqxYBAAWSOmbqEA644JxlyJb1ClJ7iLc4eKhi7V9H0XkIAv6PzbPlKAZAPL6uPDewloEGrPJ8ERpIOm9yI21JtGd2vVDZC2x4uhiYtg1Pl5tWO4iXQQsK63C2PjXRtIBMdUgBe0TOYZCs1PdolfmkJLPaRHff887vQZDZD";
$senderId=100001263455270;

$ch1 = curl_init();

curl_setopt($ch1, CURLOPT_URL, 'http://api.program-o.com/v2/chatbot/?bot_id=6&say=what%20is%20your%20name&convo_id=exampleusage_1231232&format=json');
$result1 = curl_exec($ch1);
curl_close($ch1);
//$obj = json_decode($result1);

//echo $obj['first_name'];
echo result1;
?>
