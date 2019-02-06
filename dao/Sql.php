<?php
class SQL extends PDO{
    private $conn;

    public function __construct(){
        $this->conn = new PDO("mysql:host=localhost;dbname=db_teste", "root", "");

    }

    private function setParams($statment, $parameters = array()){
        foreach ($parameters as $key => $value) {
            $statment->setParam($key, $value);
        }
    }

    private function setParam($statment, $key, $value){
        $statment->bindParam($key, $value);
    }

    public function query($rawQuery, $params =  array()){
        $stmt = $this->conn->prepare($rawQuery);

        
    }
}

?>