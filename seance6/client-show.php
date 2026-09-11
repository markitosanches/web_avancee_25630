<?php

if(!isset($_GET['id']) or $_GET['id']==null){
    echo "error";
    die();
}

require_once('db/connex.php');

$id = $_GET['id'];
$sql = "SELECT * FROM client WHERE  id = ?";
$stmt=$pdo->prepare($sql);
$stmt->execute(array($id));
$client = $stmt->fetch();

print_r($client);





?>