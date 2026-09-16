<?php

class CRUD extends PDO {

    public function __construct(){
        parent::__construct('mysql:host=localhost; dbname=ecommerce; port=3306; charset=utf8', 'root', '');
    }

    public function select(string $table, $field = "id", $order = "ASC"){
        $sql = "SELECT * FROM $table ORDER BY $field $order";
        // return $sql;
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }

}