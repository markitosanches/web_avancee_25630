<?php

class Calculator{
    static public string $message = "The result is: ";

    static public function add(float $a, float $b): string{
        return  self::$message.$a+$b;
    }
}

?>