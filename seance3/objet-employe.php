<?php

require_once('classes/Employe.php');

$obj_employe = new Employe('Silvain', 40);

// $obj_employe->calcSalary(40);

$obj_employe->setPhone("777-8888");

echo $obj_employe->getMessage();

echo "<pre>";
var_dump($obj_employe);
echo "</pre>";