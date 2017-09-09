<?php
print_r($_SERVER);
print_r($_POST);
print_r($_GET);
print_r($_FILES);
file_put_contents("php://stderr", "sending push !!!".PHP_EOL);
?>
