<?php
//print_r($_SERVER);
//print_r($_POST);
//print_r($_GET);
//print_r($_FILES);
file_put_contents("php://stderr", "sending push !!!".PHP_EOL);
$string = "";
$string .="Name :".$_POST['name']."                                         \n";
$string .="Email :".$_POST['email']."                                         \n";
$string .="Message :".$_POST['text']."                                         \n";
$ch = curl_init("https://slack.com/api/chat.postMessage");
$data = http_build_query([
    "token" => "xoxp-182706105361-184074073622-185786601942-441527597eb23679a645c26abc5467d7",
    "channel" => "inquiry", //"#mychannel",
    "text" => $string, //"Hello, Foo-Bar channel message.",
    "username" => "MySlackBot",
]);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);
$json = [];
$json['response'] = '<div class=\"contact_answer\"><h2>Thank you for contacting us. Your request will be reviewed shortly.</h2></div>';
header('Content-Type: application/json');
$jsonstring = json_encode($json);
        echo $jsonstring;
?>
