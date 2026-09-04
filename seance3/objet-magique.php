<?php
require_once("classes/Magique.php");

$magique = new Magique;
echo $magique->getClassName();
echo $magique->getClassLine();
echo $magique->getClassFile();
echo $magique->getClassMethod();

?>