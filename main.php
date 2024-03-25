<?php 
require "config.php";
require "model/UserModel.php";


$login = new UserModel();
$user = "987654321";
$pass = "ABCD";
$role = 2;

$result = $login->dataUser($user);
if ($result) {
    // Procesar el resultado
    echo "Nombre: ".$result['names']."<br>";
    echo "Apellido: ".$result['roleType']."<br>";
  }
?>