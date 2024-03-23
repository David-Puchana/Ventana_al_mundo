<?php 
require "config.php";
require "model/UserModel.php";


$login = new User();
$user = "123456789";
$pass = "ABCD";
$role = 2;

$login->login($user, $pass, $role);

?>