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
}