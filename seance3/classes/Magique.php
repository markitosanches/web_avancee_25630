<?php
class Magique{

    public function getClassName():string{
        return "Le nom de la classe est: ".__CLASS__."<br/>";
    }

    public function getClassLine():string{
        return "La ligne de la classe est: ".__LINE__."<br/>";
    } 

    public function getClassFile():string{
        return "Le fichier de la classe est: ".__FILE__."<br/>";
    }
    
    public function getClassMethod():string{
        return "La method de la classe est: ".__METHOD__."<br/>";
    }  

}
?>