<?php
Class Patient {
    private $idPatient;
    private $document;
    private $names;
    private $last_names;
    private $address;
    private $phone;
    private $email;
    private $Stratum_idStratum;

    public function __construct($idPatient, $document, $names, $last_names, $address, $phone,
    $email, $stratum_idStratum) {    
        $this->idPatien=$idPatient;
        $this->document= $document;
        $this->names=$names;
        $this->las_names= $last_names;
        $this->address= $address;
        $this->phone=$phone;
        $this->email=$email;
        $this->stratum_idStratum=$stratum_idStratum;
    }

}    
?>