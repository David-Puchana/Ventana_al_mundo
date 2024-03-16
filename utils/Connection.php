<?php

class Connection{
    
    private $server;
    private $user;
    private $password;
    private $bd;    

    public function __construct(){
        include "Setting.php";
        $this->server = $server;
        $this->user = $user;
        $this->password= $password;
        $this->bd = $bd;
    }


    public function connection(){
        $conn = mysqli_connect($this->server,$this->user, $this->password, $this->bd);
        
        if($conn)
        {
           //echo "Conexion exitosa";
        }
        else{
           echo "No se pudo conectar";
        }        
        return $conn;
    }

    public function disconnect($conn){
        mysqli_close($conn);
    }
}
?>