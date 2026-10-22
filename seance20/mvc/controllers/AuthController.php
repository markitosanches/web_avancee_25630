<?php
namespace App\Controllers;

use App\Models\User;
use App\Providers\View;
use App\Providers\Validator;

class AuthController{

    public function create(){
        return View::render('auth/create');
    }

    public function store(array $data){
        
        $val = new Validator;

        $val->field('username', $data['username'])->max(50)->required()->email();
        $val->field('password', $data['password'])->max(20)->min(6);

        if($val->isSuccess()){
            //auth
            echo "login";
        }else{
            $errors = $val->getErrors();
            return View::render('auth/create', ['errors' => $errors, 'user' =>$data]);
        }
    }
}