<?php

require_once('classes/ChildClass.php');

$child = new ChildClass;

$child->setName('Peter', '15');
echo "<pre>";
var_dump($child);
echo "</pre>";