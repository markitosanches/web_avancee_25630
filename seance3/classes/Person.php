<?php

abstract class Person{
    public string $name;
    public string $address;
    protected string $phone;
    public string $country;
    private string $language;

    public function __construct(string $name){
        $this->name = $name;
    }
   

    final public function setPhone(string $phone){
        $this->phone = $phone;
    }

public function setLanguage(string $language){
    $this->language = $language;
}

}