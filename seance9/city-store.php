<?php
require_once('classes/CRUD.php');

$crud = new CRUD;
$insert = $crud->insert('city', $_POST);

echo $insert;