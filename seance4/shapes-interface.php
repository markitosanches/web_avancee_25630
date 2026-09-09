<?php
echo "<h2>Circle</h2>";
require_once('classes/Circle.php');

$circle = new Circle(10);

echo "<pre>";
var_dump($circle);
echo "</pre>";

echo $circle->calcArea();

require_once('classes/Rectangle.php');
echo "<h2>Rectangle</h2>";
$rectangle = new Rectangle(10, 5);

echo "<pre>";
var_dump($rectangle);
echo "</pre>";

echo $rectangle->calcArea();