<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:client-index.php');
}

require_once('db/connex.php');
// print_r($_POST);
// Array ( [name] => Peter [adddress] => Maisonneuve [zip_code] => h1h1h1 [phone] => 514777777 [email] => peter@gmail.com )

// $name = $_POST['name'];
// $address = $_POST['address'];
// $zip_code = $_POST['zip_code'];
// $phone = $_POST['phone'];
// $email = $_POST['email'];

// foreach($_POST as $key=>$value){
//     $$key = $value;
// }

extract($_POST);

$sql = "INSERT INTO client (name, address, zip_code, phone, email) VALUES (?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);
if($stmt->execute(array($name, $address, $zip_code, $phone, $email))){
    $id = $pdo->lastInsertId();
    header('location:client-show.php?id='.$id);
}else{
    print_r($stmt->errorInfo());
}

?>