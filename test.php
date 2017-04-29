<?php
$accessToken = "EAAEQMKMTqxYBAAWSOmbqEA644JxlyJb1ClJ7iLc4eKhi7V9H0XkIAv6PzbPlKAZAPL6uPDewloEGrPJ8ERpIOm9yI21JtGd2vVDZC2x4uhiYtg1Pl5tWO4iXQQsK63C2PjXRtIBMdUgBe0TOYZCs1PdolfmkJLPaRHff887vQZDZD";
$senderId=100001263455270;

$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch1, CURLOPT_URL, 'https://graph.facebook.com/v2.6/'.$senderId.'?fields=first_name,last_name&access_token='.$accessToken);
$result1 = curl_exec($ch1);
curl_close($ch1);
$obj = json_decode($result1);

echo $obj['name'];
