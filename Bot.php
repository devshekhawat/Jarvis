<?php

// parameters

$hubVerifyToken = 'code';

$accessToken = "EAAEQMKMTqxYBAAWSOmbqEA644JxlyJb1ClJ7iLc4eKhi7V9H0XkIAv6PzbPlKAZAPL6uPDewloEGrPJ8ERpIOm9yI21JtGd2vVDZC2x4uhiYtg1Pl5tWO4iXQQsK63C2PjXRtIBMdUgBe0TOYZCs1PdolfmkJLPaRHff887vQZDZD";

// check token at setup

if ($_REQUEST['hub_verify_token'] === $hubVerifyToken) {

echo $_REQUEST['hub_challenge'];

exit;

}



// handle bot's anwser

$input = json_decode(file_get_contents('php://input'), true);

$senderId = $input['entry'][0]['messaging'][0]['sender']['id'];

$messageText = $input['entry'][0]['messaging'][0]['message']['text'];

$response = null;


//$ch1 = curl_init();
//curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch1, CURLOPT_URL, 'https://graph.facebook.com/v2.6/'.$senderId.'?fields=first_name,last_name&access_token='.$accessToken);
//$result1 = curl_exec($ch1);
//curl_close($ch1);
//$obj = json_decode($result1);

//set Message
switch ($messageText) {
    case "hi":
        $answer = "Hello";
        break;
    case "Hi":
        $answer = "Hello";
        break;
    case "name":
        $answer="JARVIS";
        break;
    case "Name":
        $answer="JARVIS";
        break;
    case "weather":
        $answer="Sunny";
        break;
    case "Weather":
        $answer="Sunny";
        break;
    case "time":
        $answer=time();
        break;
    case "Time":
        $answer=time();
        break;
    case "creator":
        $answer="Adeelabs";
        break;
    case "Creator":
        $answer="Adeelabs";
        break;
    case "Switch On":
        $answer="turning ON";
        break;
    case "Switch Off":
        $answer="turning Off";
        break;
    case "switch on":
        $answer="turning ON";
        break;
    case "switch off":
        $answer="turning Off";
        break;
    ...
    default:
         $answer = "Here are my commands: 
             weather
             hi
             time
             creator
             switch on/off";
}


//send message to facebook bot

$response = [

'recipient' => [ 'id' => $senderId ],

'message' => [ 'text' => $answer ]

];

$ch = curl_init('https://graph.facebook.com/v2.6/me/messages?access_token='.$accessToken);

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($response));

curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

if(!empty($input)){

$result = curl_exec($ch);

}

curl_close($ch);

