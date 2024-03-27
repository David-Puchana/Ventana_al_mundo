<?php

class Connection{
    
    private $conn;
    public function connection(){
        try{
            $dns = "mysql:host=localhost;dbname=".DB_NAME;
            $optios = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            $this->conn=new PDO($dns,DB_USER,DB_PASSWORED);         
            return $this->conn;
        }catch(PDOException $e){
            echo $e->getMessage();
        }    
    }    
    public function disconnect(){
        $this->conn=null;
    }
}
?>