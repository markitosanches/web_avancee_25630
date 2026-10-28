<?php
namespace App\Models;
use App\Models\CRUD;

class User extends CRUD{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'username', 'password', 'email', 'privilege_id'];

    public function hashPassword(string $password, $cost = 10):string {
        $options = [
            'cost' => $cost
        ];
        return password_hash($password, PASSWORD_BCRYPT, $options);
    }

    public function checkUser(string $username, string $password):bool{
        // 1) verifier si le user exist 
        // 2) compter === 1
        // 3) verifier le mot de passe hash(saisi) === bd
        // 4) creer la session
        $user = $this->unique('username', $username);
        if($user){
            if(password_verify($password, $user['password'])){
                session_regenerate_id();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['user_privilege'] = $user['privilege_id'];
                $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}