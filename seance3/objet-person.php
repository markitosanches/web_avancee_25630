<?php
require_once('classes/Person.php');

$obj_person = new Person('Lisa');

// $obj_person->name = "Lisa";
$obj_person->address = "Sherbrooke";
$obj_person->setPhone("514-777-8888");
$obj_person->country = "Canada";
$obj_person->setLanguage("Fr");

echo "<pre>";
var_dump($obj_person);
echo "</pre>";

?>