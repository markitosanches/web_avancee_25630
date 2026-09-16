<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:client-index.php');
}

require_once('db/connex.php');

// print_r($_POST);
// Array ( [name] => Peter [address] => 90, 5 Avenue [zip_code] => 59800 [phone] => 555-888-77777 [email] => peter@test.ca )
extract($_POST);
$sql = "UPDATE client SET name = ?, address = ?, zip_code = ?, phone = ?, email = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
if($stmt->execute(array($name, $address, $zip_code, $phone, $email, $id))){
    header('location:client-show.php?id='.$id);
}else{
    print_r($stmt->errorInfo());
}

?>
