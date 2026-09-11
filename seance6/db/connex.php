<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

try{
    $dbhost = 'localhost';
    $dbname = 'ecommerce';
    $dbuser = 'root';
    $dbpass = '';
    $dbport = 3306;
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname;port=$dbport;chartset=utf8", $dbuser, $dbpass);
    // echo "Connected";
}catch(PDOException $e){
    echo $e->getMessage();
    die();
}


?>