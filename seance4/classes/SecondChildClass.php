<?php

require_once('classes/ParentClass.php');

class SecondChildClass extends ParentClass{
    public string $address;

     public function setName(string $name, string $address):void{
        $this->name = $name;
        $this->address = $address;
    }

     public function getMessage():string{
        return 'avbc';
     }




}