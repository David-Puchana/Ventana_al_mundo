<?php 

include "utils/Crud.php";
include "model/UserCrud.php";

$user = '123456789';
$pass = 'ABCD';
$role = 2;

$table = ["User"];
$fields = ["*"];
$conditions = ["document="."'$user'" ,"pass="."'$pass'","Role_idRole = ".$role];
$query = new UserCrud();
$u = new UserCrud();

$result = $u->login($user, $pass, $role);

if($result==1){
    echo "funciona";
}else{
    echo "revisar";
}

?>