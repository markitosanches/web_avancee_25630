<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


require_once('classes/Person.php');

$obj1= new Person("Lisa", 15);
$obj1->setCoord('Sherbrooke');


echo "<br>";

$obj2 = new Person("Paul", 10);
$obj2->setCoord('Maisonneuve');


// echo "fin";

// echo"<pre>";
// var_dump($obj1);
// echo"</pre>";
// print_r($obj1);

die();

$obj1 = new Person;

// $obj1->name = "Peter";
// $obj1->zipCode = "X2X 2X2";
$obj1->id = 15;

echo "<br>";
// echo $obj1->name;

echo "<br>";
// echo $obj1->zipCode;

$obj1->setName('Paul');

echo "<br>";
echo $obj1->getName();


$obj1->setCoord('Sherbrooke', 'h2h2h2', '514-7758888', 'paul@gmail.com');

echo $obj1->getCard();

echo"<pre>";
var_dump($obj1);
echo"</pre>";
print_r($obj1);
?>