<?php
                  
include "../../Connection.php";                          
$acces = new Connection();
$option =  $acces->connection()->query('SELECT * FROM Role');

while ($row = mysqli_fetch_array($option)) {
    $id = $row["idRole"];
    $role = $row["roleType"];
    echo $id." ".$role;
}
?>