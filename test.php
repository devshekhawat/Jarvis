<?php

$url ="http://api.program-o.com/v2/chatbot/?bot_id=6&say=what%20is%20your%20name&convo_id=exampleusage_1231232&format=json";

$result = file_get_contents($url);
$j =json_decode($result);
echo $j->{'botsay'};
?>
