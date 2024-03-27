<?php
require_once "utils/Crud.php";
Class PatientModel {

    public function __construct() {}

    public function list() {
        $table_1 = ["Patient"];
        $table_2 = ["Stratum"];
        $fields = [""];
        $conditions = ["Patient.Stratum_idStratum=Stratum.idStratum"];
        $query = new Crud();
        try {
            $result = $query->select($table_1, $fields, $conditions, $table_2);
            if ($result) {
                $array = $result->fetchAll(PDO::FETCH_ASSOC);
                return $array;
            } else {
                return null;
            } 
        }catch (Exception $e) {
            return null;
        }
    }

    public function listByID($id) {
        $table_1 = ["Patient"];
        $table_2 = ["Stratum"];
        $fields = [""];
        $conditions = ["Patient.Stratum_idStratum=Stratum.idStratum WHERE Patient.idPatient=".$id];
        $query = new Crud();
        try {
            $result = $query->select($table_1, $fields, $conditions, $table_2);
            if ($result) {
                $array = $result->fetch(PDO::FETCH_ASSOC);
                return $array;
            } else {
                return null;
            } 
        }catch (Exception $e) {
            return null;
        }
    }
    public function insertModel($values) {
        $table = "Patient";
        $fields = ['document','names','last_names','address','phone','email','Stratum_idStratum'];
        $query = new Crud();
        try {
            $result = $query->insert($table, $fields, $values);
            return $result;
        }catch (Exception $e) {                     
            return null;
        }
    }
    public function updateModel($values,$id) {
        $table = "Patient";        
        $fields = ["document="."'$values[0]'","names="."'$values[1]'","last_names="."'$values[2]'", "address="."'$values[3]'","phone="."'$values[4]'","email="."'$values[5]'","Stratum_idStratum="."'$values[6]'" ];
        $conditions = ["idPatient=".$id ];
        $query = new Crud();
        try {
            $result = $query->update($table, $fields, $conditions);
            return $result;
        }catch (Exception $e) {                     
            return null;
        }
    }
    public function deleteModel($id){
        $table = "Patient";  
        $conditions = "idPatient";            
        $query = new Crud();
        try {
            $result = $query->delete($table,$id, $conditions);
            return $result;
        }catch (Exception $e) {                     
            return null;
        }
    } 
}    
?>