<?php 
include("../Crud.php");
Class User{
    private $idUser;
    private $names;
    private $document;
    private $pass;
    private $role_idRole;

    function __construct($idUser,$names,$document,$pass, $role_idRole) {
        $this->user = $idUser;
        $this->names = $names;
        $this->document = $document;
        $this->pass = $pass;
        $this->role_idRole = $role_idRole;        
    }

    public static function createLogin($document, $pass, $Role_idRole) {
        return new self(null,null ,$document, $pass, $Role_idRole);
    }
    public function getIdUser() {
        return $this->idUser;
    }   
    
    public function setIdUser($idUser) {
        $this->idUser = $idUser;
    }    

    public function getNames() {
        return $this->names;
    }
    
    public function setNames($names) {
        $this->names = $names;
    }
    
    public function getDocument() {
        return $this->document;
    }    

    public function setDocument($document) {
        $this->document = $document;
    }   

    public function getPass() {
        return $this->pass;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }

    public function getRoleIdRole() {
        return $this->role_idRole;
    }

    public function setRoleIdRole($role_idRole) {
        $this->role_idRole = $role_idRole;
    }    
}
?>