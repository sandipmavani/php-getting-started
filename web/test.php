<?php
print_r($_SERVER);
print_r($_POST);
print_r($_GET);
print_r($_FILES);
file_put_contents("php://stderr", "sending push !!!".PHP_EOL);
$json = [];
$json['response'] = '<div class=\"contact_answer\"><h2>Thank you for contacting us. Your request will be reviewed shortly.</h2></div>';
$jsonstring = json_encode($json);
        echo $jsonstring;
?>
