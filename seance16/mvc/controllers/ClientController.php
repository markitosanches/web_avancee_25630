<?php
namespace App\Controllers;

use App\Models\Client;
use App\Models\City;
use App\Providers\View;
use App\Providers\Validator;

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
        $cities = new City;
        $cities = $cities->select('city');
        // print_r($cities);
        return View::render('client/create', ['cities' => $cities]);
    }

    public function store(array $data){
        // print_r($data);
        //  Array ( [name] => [address] => [zip_code] => [phone] => [email] => [city_id] => )
        $val = new Validator;
        $val->field('name', $data['name'])->min(3)->max(45);
        $val->field('address', $data['address'])->max(45);
        $val->field('zip_code', $data['zip_code'], 'zip Code')->max(10);
        $val->field('phone', $data['phone'])->max(20);
        $val->field('email', $data['email'])->max(45)->email();
        $val->field('city_id', $data['city_id'], 'City')->required()->int();
        // echo "<pre>";
        // var_dump($val);
        // echo "</pre>";

        if($val->isSuccess()){
            // echo "Success";
            $client = new Client;
            $insert = $client->insert($data);
            if($insert){
                return View::redirect('client/show?id='.$insert);
            }else{
                echo "error";
            }

        }else{
            $errors = $val->getErrors();
            //  print_r($errors);
            $cities = new City;
            $cities = $cities->select('city');
            return View::render('client/create', ['errors'=>$errors, 'client' => $data, 'cities' => $cities]);
        }
    }

    public function edit($data = []){
         if(isset($data['id'])){
            $id = $data['id'];
            $crud = new Client;
            $client = $crud->selectId($id);       
            if($client){
                $cities = new City;
                $cities = $cities->select('city');
                
                return View::render('client/edit', ['client' => $client, 'cities' => $cities]);
            }else{
                echo "error";
            }
         }else{
            echo "error";
         }
    }

    public function update(array $data, $get = []){
        if($get['id']){
        // print_r($data);
        // echo "<br/>";
        // print_r($get);
        // die();

            $val = new Validator;
            $val->field('name', $data['name'])->min(3)->max(45);
            $val->field('address', $data['address'])->max(45);
            $val->field('zip_code', $data['zip_code'], 'zip Code')->max(10);
            $val->field('phone', $data['phone'])->max(20);
            $val->field('email', $data['email'])->max(45)->email();
            $val->field('city_id', $data['city_id'], 'City')->required()->int();

            if($val->isSuccess()){
                $client = new Client;
                $client = $client->update($data, $get['id']);
                // print_r($data);
                // echo "<br>";
                return View::redirect('client/show?id='.$get['id']);
            }else{
                $errors = $val->getErrors();
                //  print_r($errors);
                $cities = new City;
                $cities = $cities->select('city');
                return View::render('client/edit', ['errors'=>$errors, 'client' => $data, 'cities' => $cities]);
            }
        }else{
            echo "error";
        }


    }

}