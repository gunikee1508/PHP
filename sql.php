<?php

class Sql extends PDO { 
    private $conn;

    public function __construct() { 
        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", ""); 
    }


    private function setParams($statement, $parameters = array()) {

        foreach ($parameters as $key => $value) { 

            $this->setParam($statement, $key, $value); 
        
        }
    }

    // Agora vamos externar, e fazer um bind de um parametro só:
    private function setParam($statement, $key, $value) {
        $statement->bindParam($key, $value);
    }

    public function runQuery($rawQuery, $params = array()) { 

        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt; 
    }
    
    public function select($rawQuery, $params = array()):array
    {
        $stmt = $this->runQuery($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // pra ver somente os dados associativos, sem indices, apenas o de nome. aqui seria meu $result, no retorno.
    }
}

?>