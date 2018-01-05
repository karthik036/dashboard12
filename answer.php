<?php

// The incoming request could be a GET or a POST, depending on how your
// account is configured
$request = array_merge($_GET, $_POST);

// This is the phone number being called
$to = $request['to'];

// This is the caller's phone number
$from = $request['from'];

// Nexmo provide a unique ID for all calls
$uuid = $request['conversation_uuid'];

// For more advanced Conversations you use the above parameters to
// dynamically create the NCCO and provide a personalised experience

$ncco = [
    [
        "action" => "talk",
        "voiceName" => "Emma",
        "text" => "Hello, here is your message. I hope you have a nice day."
    ]
];

// Nexmo expect you to return JSON with the correct headers
header('Content-Type: application/json');
echo json_encode($ncco);
?>