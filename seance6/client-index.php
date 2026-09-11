<?php
require_once('db/connex.php');

$sql = "SELECT * FROM client ORDER BY name";
$stmt = $pdo->query($sql);
// var_dump($stmt);

// $clients = $stmt->fetchAll();
// echo "<pre>";
// var_dump($clients);
// echo "</pre>";
// print_r($clients);
// echo $clients[0]['name'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Client List</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>ZipCode</th>
                <th>email</th>
                <th>Phone</th>
                <th>Show</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($stmt as $client){
            ?>
            <tr>
                <td><a href="client-show.php?id=<?= $client['id']; ?>"><?= $client['name']; ?></a></td>
                <td><?= $client['address']; ?></td>
                <td><?= $client['zip_code']; ?></td>
                <td><?= $client['email']; ?></td>
                <td><?= $client['phone']; ?></td>
                <td><a href="client-show.php?id=<?= $client['id']; ?>" class="btn">View</a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
   
    <a href="client-create.php" class="btn">New Client</a>
</body>
</html>