<?php 
require "config.php";
require "model/PatientModel.php";
$ob = new PatientModel();
$id = 1;
$data = $ob->listByID($id);



echo $data['document'];




?>