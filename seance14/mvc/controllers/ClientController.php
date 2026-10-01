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

    public function show($data = []){
         //  print_r($data);
        if(isset($data['id'])){
            $id = $data['id'];
            $crud = new Client;
            $client = $crud->selectId($id); 
            if($client){
                return View::render("client/show", ['client'=>$client]);
            }else{
                echo "error";
            }
        }else{
             echo "error";
        }
       
    }
    public function create(){
        return View::render('client/create');
    }

    public function store(array $data){
        // print_r($data);
        $client = new Client;
        $insert = $client->insert($data);
        if($insert){
            return View::redirect('client/show?id='.$insert);
        }else{
            echo "error";
        }

    }

}