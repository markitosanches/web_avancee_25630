<?php
namespace App\Controllers;

use App\Models\Client;
use App\Providers\View;

class ClientController{
    
    public function index(){
        $crud = new Client;
        $clients = $crud->select();
        // echo "<pre>";
        // var_dump($clients);
        // echo "</pre>";
        if($clients){
            return View::render('client/index', ['clients' => $clients]);
        }else{
            echo "error";
        }
    }
}