<?php

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header("location:client-index.php");
}
require_once('classes/CRUD.php');

$crud = new CRUD;
$insert = $crud->insert('client', $_POST);

if($insert){
    header("location:client-show.php?id=$insert");
}else{
    header("location:client-index.php");
}