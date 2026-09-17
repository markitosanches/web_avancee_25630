<?php
if(!isset($_GET['id']) or $_GET['id']==null){
    header('location:client-index.php');
    die();
}
$id = $_GET['id'];

require_once('classes/CRUD.php');

$crud = new CRUD;
$client = $crud->selectId('client', $id);

if($client){
    extract($client);
}else{
    header('location:client-index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Edit</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="client-update.php" method="post">
            <h2>Client Edit</h2>
            <!-- <input type="text" name="id" value="<?= $id; ?>" readonly> -->
            <!-- <input type="text" name="id" value="<?= $id; ?>" disabled> -->
            <input type="hidden" name="id" value="<?= $id; ?>">
            <label>Name
                <input type="text" name="name" value="<?= $name; ?>">
            </label>
            <label>Address
                <input type="text" name="address" value="<?= $address; ?>">
            </label>
            <label>Zip Code
                <input type="text" name="zip_code" value="<?= $zip_code; ?>">
            </label>
            <label>Phone
                <input type="text" name="phone" value="<?= $phone; ?>">
            </label>
            <label>Email
                <input type="text" name="email" value="<?= $email; ?>">
            </label>
            <input type="submit" class="btn" value="Save"> 
        </form>
    </div>
    
</body>
</html>