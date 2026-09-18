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
    <title>Client Show</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Client Show</h1>
        <p><strong>Name: </strong><?= $name; ?></p>
        <p><strong>Address: </strong><?= $address; ?></p>
        <p><strong>Phone: </strong><?= $phone; ?></p>
        <p><strong>Email: </strong><?= $email; ?></p>
        <p><strong>Zip Code: </strong><?= $zip_code; ?></p>
        <a href="client-edit.php?id=<?= $id; ?>" class="btn">Edit</a>
        <form action="client-delete.php" method="post">
            <input type="hidden" name="id" value="<?=  $id;?>">
            <input type="submit" value="delete" class="btn red">
        </form>
    </div>
</body>
</html>
