<?php
require_once "utils/Crud.php";
Class PatientModel {
    private $idPatient;
    private $document;
    private $names;
    private $last_names;
    private $address;
    private $phone;
    private $email;
    private $stratum_idStratum;

    public function __construct($idPatient=null, $document=null, $names=null, $last_names=null, $address=null, $phone=null,
    $email=null, $stratum_idStratum=null) {    
        if ($idPatient!=null) 
            $this->idPatient=$idPatient;
        if ($document!=null)
            $this->document= $document;
        if ($names!=null)
            $this->names=$names;
        if ($last_names!=null)
            $this->last_names= $last_names;
        if ($address!=null)
            $this->address= $address;
        if ($phone!=null)
            $this->phone=$phone;
        if ($email!=null)
            $this->email=$email;
        if ($stratum_idStratum!=null)
            $this->stratum_idStratum=$stratum_idStratum;
    }

    public function insertModel($values) {
        $table = "Patient";
        $fields = ['document','names','last_names','address','phone','email','Stratum_idStratum'];
        $query = new Crud();
        try {
            $result = $query->insert($table, $fields, $values);
            return $result;
        }catch (Exception $e) {         
            echo "Error al obtener datos del usuario: " . $e->getMessage();
            return null;
        }
    }
}    
?>