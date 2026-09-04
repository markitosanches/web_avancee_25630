<?php

require_once('classes/Client.php');

$obj_client = new Client ('Paul');

//$obj_client->name = 'Paul';
$obj_client->address = 'Maisonneuve';
$obj_client->setPhone('514-888-9999');
$obj_client->country = 'Canada';
$obj_client->setLanguage('EN');
$obj_client->language = 'FR';
$obj_client->account = 10;
// $obj_client->grade = 10;


echo "<pre>";
var_dump($obj_client);
echo "</pre>";
?>