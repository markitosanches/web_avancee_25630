<?php

require_once('classes/ParentClass.php');

class ChildClass extends ParentClass{
    public string $id;

    public function setName(string $name, string $id):void{
        $this->name = $name;
        $this->id = $id;
    }

    public function getMessage():string{
        return "Child class";
    }
}