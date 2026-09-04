<?php

require_once("classes/Person.php");

class Employe extends Person{
    private float $hourRate = 25;
    private float $salary;

    public function __construct(string $name, float $hours){
        $this->name = $name;
        $this->calcSalary($hours);
    }

    private function calcSalary(float $hours):void{
        $this->salary =  $hours * $this->hourRate;
        
    }
    public function setPhoneEmploye(string $phone):void{
        $this->phone = "+1 ".$phone;
    }

    public function getMessage():string{
        return "<p>Employe: $this->name</p><p>Salary: $this->salary</p>";
    }
}

?>