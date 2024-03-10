<?php 

include "Connection.php";

$acces = new Connection();
$user="123456789";
$pas="ABCD";

 
$query="SELECT * FROM user WHERE document=$user AND pass='$pas';";        
$result = $acces->connection()->query($query);
echo $result;

?>