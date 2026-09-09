<?php


abstract class ParentClass{
    public string $name;

    abstract public function setName(string $a, string $b):void;
    abstract public function getMessage():string;
}

?>