<?php 
include("../Crud.php");
Class User extends Crud{
    private $idUser;
    private $names;
    private $document;
    private $pass;
    private $role_idRole;
    
    public function __construct() {}
    public function __construct($idUser,$names,$document,$pass, $role_idRole) {
        $this->user = $idUser;
        $this->names = $names;
        $this->document = $document;
        $this->pass = $pass;
        $this->role_idRole = $role_idRole;        
    }

    public function login($user, $pass,$role){
        
        $table_1=["User"];
        $fiels=["*"];
        $conditions=["document="."'".$user."'", "pass="."'".$pass."'", "Role_idRole=".$role];
        $sql = new Crud();        
        $q = $sql->select($table_1,$fiels,$conditions);
        echo $q;
        $result= $acces->connection()->query($q);
        return $result;
    }
}
?>