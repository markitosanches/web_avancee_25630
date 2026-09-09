<?php
require_once('classes/Calculator.php');

$calculator = new Calculator;

echo $calculator->add(2, 3);

echo "<br>";

// echo $calculator->message;
echo Calculator::$message;
echo "<br>";

echo Calculator::add(2, 2);

?>