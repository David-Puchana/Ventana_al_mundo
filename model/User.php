<?php 
Class User {
    private $idUser;
    private $names;
    private $document;
    private $pass;
    private $role_idRole;


  
    
    public function __construct($idUser,$names,$document,$pass, $role_idRole) {
        $this->user = $idUser;
        $this->names = $names;
        $this->document = $document;
        $this->pass = $pass;
        $this->role_idRole = $role_idRole;        
    }

}
?>