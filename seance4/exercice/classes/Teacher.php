<?php

require_once('classes/Person.php');

class Teacher extends Person {
    private int $idTeacher;
    private float $salary;
    
    public function __construct(){
        $this->idTeacher = rand(1, 100);
    }

    public function calcSalary(float $hours):void{
        $this->salary = $hours *35;
    }

    public function getTeacher(): string{
        $return = "<div style='border:solid 1px; background: grey'> 
                    <p><strong>Teacher Id:</strong> $this->idTeacher </p> 
                    <p><strong>Name:</strong> $this->name</p>   
                    <p><strong>Phone:</strong> $this->phone</p>   
                    <p><strong>Salary:</strong> $this->salary </p>  
        </div>";
        return $return;
    }
}


?>