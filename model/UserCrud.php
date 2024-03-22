<?php 
include ("../Crud.php");
Class UserCrud {
    public function __construct(){}

    public function login($user, $pass,$role){
        $table = ["User"];
        $fields = ["*"];
        $conditions = ["document="."'$user'" ,"pass="."'$pass'","Role_idRole = ".$role];
        $query = new Crud();
        $result = $query->select($table, $fields, $conditions);

        if($result->num_rows > 0){
            return true;
        } else{
            return false;
        }
    }
}
?>