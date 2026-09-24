<?php
namespace App\Controllers;

use App\Models\Client;

class ClientController{
    
    public function index(){
        $crud = new Client;
        $clients = $crud->select();
        echo "<pre>";
        var_dump($clients);
        echo "</pre>";
    }
}