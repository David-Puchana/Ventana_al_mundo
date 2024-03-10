<?php

$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
$cuenta = count($a); 
$table = "ensayo";


$lenQuery = count($a);
$sql = "SELECT ";
for ($i= 0;$i<$lenQuery;$i++){
    $sql .= $a[$i]." ";
}
$sql .= "FROM ".$table;
echo $sql;
   


include "../model/Login";

include "../../models/";
echo $cuenta;
?>