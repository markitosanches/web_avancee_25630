<?php

namespace App\Controllers;

use App\Models\Privilege;
use App\Models\User;
use App\Providers\View;
use App\Providers\Validator;

class UserController {
    public function create(){
        $privilege = new Privilege;
        $privileges = $privilege->select('privilege');
        // print_r($privileges);
        // die();
        return View::render('user/create', ['privileges' => $privileges]);
    }

    public function store(array $data){

        $val = new Validator;
        $val->field('name', $data['name'])->min(2)->max(50);
        $val->field('username', $data['username'])->max(50)->required()->email()->unique('User');
        $val->field('password', $data['password'])->max(20)->min(6);
        $val->field('privilege_id', $data['privilege_id'], 'Privilege')->required()->int();

        if($val->isSuccess()){
            // print_r($data);
            // echo "<br>";
            $data['email'] = $data['username'];
            //  print_r($data);
            // echo "<br>";
            // $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT, ['cost' => 10]);
            // echo $data['password'];
            // die();
            // print_r($data);
            // die();
            $user = new User;
            $data['password'] = $user->hashPassword($data['password']);
            // print_r($data);
            // die();
            // $unique = $user->unique('username', $data['username']);
            // if($unique){
            //     print_r($unique);
            // }else{
            //     echo 'error';
            // }
            $user = $user->insert($data);
            if($user){
                return View::redirect('login');
            }else{
                return View::render('error');
            }
        }else{
            $errors = $val->getErrors();
            // print_r($errors);
            $privilege = new Privilege;
            $privileges = $privilege->select('privilege');
            return View::render('user/create', ['errors' => $errors, 'privileges' => $privileges, 'user' =>$data]);
        }


        
    }
}