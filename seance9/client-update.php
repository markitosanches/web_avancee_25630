<?php

// print_r($_POST);

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header("location:client-index.php");
}

require_once("classes/CRUD.php");

$crud = new CRUD;
$update = $crud->update('client', $_POST);

if($update){
    return header('location:client-show.php?id='.$_POST['id']);
}else{
    echo "Paga 404!";
}