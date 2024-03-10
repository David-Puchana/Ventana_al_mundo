<?php 
Class LoginUser {
    private $user;
    private $password;
    private $dataBase;

    public function __construct($user, $password, $dataBase) {
        $this->user = $user;
        $this->password = $password;
        $this->dataBase = $dataBase;        
    }
}   
?>