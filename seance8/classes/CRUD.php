<?php

class CRUD extends PDO {

    public function __construct(){
        parent::__construct('mysql:host=localhost; dbname=ecommerce; port=3306; charset=utf8', 'root', '');
    }

    public function select(string $table, $field = "id", $order = "ASC"):array{
        $sql = "SELECT * FROM $table ORDER BY $field $order";
        // return $sql;
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }

    public function selectId(string $table, int|string $value, $field = 'id'):bool|array{
        $sql = "SELECT * FROM $table WHERE $field = :$field";
        // SELECT * FROM client WHERE id = :id
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$field", $value);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count == 1){
            return $stmt->fetch();
        }else{
            return false;
        }
    }

    public function insert(string $table, array $data):bool|int{
        //   INSERT INTO client (name, address, zip_code, phone, email) VALUES (:name, :address, :zip_code, :phone, :email);
          $fieldName = implode(', ', array_keys($data));
          $fieldBindValue = ":".implode(', :', array_keys($data));
          $sql = "INSERT INTO $table ($fieldName) VALUES ($fieldBindValue);";
          $stmt = $this->prepare($sql);

        //   $stmt->bindValue(":name", $data['name']);
        //   $stmt->bindValue(":address", $data['address']);
        //   $stmt->bindValue(":zip_code", $data['zip_code']);
        //    ...
          
        foreach($data as $key=>$value){
            $stmt->bindValue(":$key", $value);
        }
        if($stmt->execute()){
            return $this->lastInsertId();
        }else{
            return false;
        }
 
    }

    public function update(){

    }
    
    public function delete(string $table, int|string $value, $field = 'id'):bool{
        //DELETE FROM table where id = :id;
        $sql = "DELETE FROM $table WHERE $field = :$field";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$field", $value);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
}