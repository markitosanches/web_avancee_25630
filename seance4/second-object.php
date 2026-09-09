<?php

require_once('classes/SecondChildClass.php');

$child = new SecondChildClass;

$child->setName('Lisa', 'Sherbrooke');

echo "<pre>";
var_dump($child);
echo "</pre>";