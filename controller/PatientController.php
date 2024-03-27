<?php
require_once "model/PatientModel.php";
session_start();
if(!isset($_SESSION["login"])) 
    header('location:'.urlsite);       
class PatientContoller{
   
    public static function listPatients(){
        $patien = new PatientModel();
        $listPatient = $patien->list();
        require "view/admin/patient/viewList.php";
    }

    public static function formAddPatient(){
        require "view/admin/patient/viewRegister.php";
    }

    public static function addPatient(){
        $patient = new PatientModel();
        $document = $_REQUEST['document'];
        $name = $_REQUEST['names'];
        $lastname = $_REQUEST['lastnames'];
        $address = $_REQUEST['address'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $stratum = $_REQUEST['seletStatum'];    
        $values = ["'$document'","'$name'","'$lastname'","'$address'","'$phone'","'$email'",$stratum];
        $result = $patient->insertModel($values);
        if($result){
            $_SESSION['exito'] = "cargado";
            
            header('location:'.urlsite."?page=patient");        
        }    
    }

    public static function updateform(){
        $patient = new PatientModel();
        $id = $_REQUEST["id"];
        $dtEdit = $patient->listByID($id);
        require 'view/admin/patient/viewUpdate.php';
    }

    public static function updatepatient(){   
        
        $patient = new PatientModel();
        $id = $_REQUEST['idPatient'];
        $document = $_REQUEST['document'];
        $name = $_REQUEST['names'];
        $lastname = $_REQUEST['lastnames'];
        $address = $_REQUEST['address'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $stratum = $_REQUEST['seletStatum'];    
        $values = [$document,$name,$lastname,$address,$phone,$email,$stratum];  
        $result = $patient->updateModel($values,$id);
        if($result) 
               header('location:'.urlsite."?page=patient");    
               
        else
            header('location:'.urlsite."?page=patient&msg=No se pudo actualizar");   
    }


    public static function deletepatient(){
        $patient = new PatientModel();
        $id = $_REQUEST["id"];
        $result = $patient->deleteModel($id);
        if($result) 
            header('location:'.urlsite."?page=patient");    
        else
            header('location:'.urlsite."?page=patient&msg=No se pudo eliminar");      

    }

}

?>