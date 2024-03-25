<?php 
require "config.php";
require_once "model/PatientModel.php";


$cr = new PatientModel();

$table = "Patient";
$fields = ['document','names','last_names','address','phone','email','Stratum_idStratum'];
$values = ["'63'","'Oracio'","'Ricardo'","'A123'","'65564'","'7'","'2'"];

$cr->insertModel($values);

if($cr) echo "logrado";
?>