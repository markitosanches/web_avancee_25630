<?php

class HomeController {

    public function index(){
        $data = "Salut example de données!!!!";
        include('views/home.php');
    }

    public function abc(){
        echo " home abc";
    }
}