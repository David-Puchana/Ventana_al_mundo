<?php
                  
include "../../Connection.php";                          
$acces = new Connection();
$user='123456789';
$pass='ABCD';
$role=1;

$query="SELECT * FROM User WHERE document='$user' AND password='$pass' AND Role_idRole='$role';";       

$resul= $acces->connection()->query($query);
if($resul->num_rows>0){
    echo 'logrado';
}
else{
    echo 'algo salio mal';
}


?>