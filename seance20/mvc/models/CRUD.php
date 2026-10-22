<?php
namespace App\Models;

 abstract class CRUD extends \PDO {

    final public function __construct(){
        parent::__construct('mysql:host=localhost; dbname=ecommerce; port=3306; charset=utf8', 'root', '');
    }

    final public function select($field = null, $order = "ASC"):array{
        if($field == null){
            $field = $this->primaryKey;
        }
        $sql = "SELECT * FROM $this->table ORDER BY $field $order";
        // return $sql;
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }

    final public function selectId(int|string $value):bool|array{
        $sql = "SELECT * FROM $this->table WHERE $this->primaryKey = :$this->primaryKey";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$this->primaryKey", $value);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count == 1){
            return $stmt->fetch();
        }else{
            return false;
        }
    }

    final public function insert(array $data){
          $data_keys = array_fill_keys($this->fillable, '');
          $data = array_intersect_key($data, $data_keys);
          $fieldName = implode(', ', array_keys($data));
          $fieldBindValue = ":".implode(', :', array_keys($data));
          $sql = "INSERT INTO $this->table ($fieldName) VALUES ($fieldBindValue);";
          $stmt = $this->prepare($sql);  
        foreach($data as $key=>$value){
            $stmt->bindValue(":$key", $value);
        }
        if($stmt->execute()){
            return $this->lastInsertId();
        }else{
            return false;
        }
 
    }

    
    final public function update(array $data, $id){
        // "UPDATE client SET name = :name, address = :address, zip_code = :zip_code, phone = :zip_code, email = :email WHERE id = :id";
        // print_r($data);
        // echo "<br>";
        $data_keys = array_fill_keys($this->fillable, '');
        $data = array_intersect_key($data, $data_keys);
        // print_r($data);
        // echo "<br>";
        
        // print_r($data);
        // die();
        $fieldName = null;
        foreach($data as $key=>$value){
            $fieldName .= "$key = :$key, ";
        }
        $fieldName = rtrim($fieldName, ', ');
        $sql = "UPDATE $this->table SET $fieldName WHERE $this->primaryKey = :$this->primaryKey;";

        //  echo $sql;
        //  die();
        $data[$this->primaryKey] = $id;

        $stmt = $this->prepare($sql);
        foreach($data as $key=>$value){
            $stmt->bindValue(":$key", $value);
        }
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    final public function delete(int|string $value):bool{
        //DELETE FROM table where id = :id;
        $sql = "DELETE FROM $this->table WHERE $this->primaryKey = :$this->primaryKey";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$this->primaryKey", $value);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    final public function unique(string $field, string $value):array|bool{
        $sql = "SELECT * FROM $this->table WHERE $field = :$field";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$field", $value);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count === 1){
            return $stmt->fetch();
        }else{
            return false;
        }
    }
 }

?>