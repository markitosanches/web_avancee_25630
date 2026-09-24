<?php

namespace App\Controllers;

// require_once('models/ExampleModel.php');
use App\Models\ExampleModel;

class HomeController {

    public function index(){
        // $data = "Salut example de données!!!!";
        $model = new ExampleModel;
        $data = $model->getData();
        include('views/home.php');
    }

    public function abc(){
        echo " home abc";
    }
}