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
        // SELECT * FROM client WHERE id = :id
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

    public function insert(array $data):bool|int{
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
}

?>