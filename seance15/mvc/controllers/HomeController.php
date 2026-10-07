<?php

namespace App\Controllers;

// require_once('models/ExampleModel.php');
use App\Models\ExampleModel;
use App\Providers\View;

class HomeController {

    public function index(){
        // $data = "Salut example de données!!!!";
        $model = new ExampleModel;
        $data = $model->getData();
        // include('views/home.php');
        View::render('home', ['data' => $data]);
    }

    public function abc(){
        echo " home abc";
    }
}