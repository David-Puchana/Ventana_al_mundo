<?php 
require_once "utils/Crud.php";
Class UserModel{
    
    private $idUser;
    private $names;
    private $document;
    private $pass;
    private $role_idRole;

    function __construct($idUser=null,$names=null,$document=null,$pass=null, $role_idRole=null) {   
        if ($idUser!=null) 
            $this->idUser=$idUser;
        
        if ($names!=null) 
            $this->names=$names;
        
        if ($document!=null)
            $this->document=$document;

        if ($pass!=null)
            $this->pass=$pass;
        if ($role_idRole!=null)
            $this->role_idRole=$role_idRole;
    }

    public function getIdUser() {
        return $this->idUser;
    }   
    
    public function setIdUser($idUser) {
        $this->idUser = $idUser;
    }    

    public function getNames() {
        return $this->names;
    }
    
    public function setNames($names) {
        $this->names = $names;
    }
    
    public function getDocument() {
        return $this->document;
    }    

    public function setDocument($document) {
        $this->document = $document;
    }   

    public function getPass() {
        return $this->pass;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }

    public function getRoleIdRole() {
        return $this->role_idRole;
    }

    public function setRoleIdRole($role_idRole) {
        $this->role_idRole = $role_idRole;
    }    

    public function login($user, $pass,$role){        
        $table = ["User"];
        $fields = ["*"];
        $conditions = ["document="."'$user'" ,"pass="."'$pass'","Role_idRole = ".$role];
        $query = new Crud();
        $result = $query->select($table, $fields, $conditions);

        if($result->fetch(PDO::FETCH_ASSOC))
            return true;            
        else         
            return false;                
    }
    public function dataUser($user){
        try {
            $table = ["User"];
            $fields = [""];
            $conditions = ["User.Role_idRole=Role.idRole AND document="."'$user'"];    
            $table_2=["Role"];
            $query = new Crud();
            $result = $query->select($table, $fields, $conditions, $table_2);
            if ($result) {
                $array = $result->fetch(PDO::FETCH_ASSOC);
                return $array;
            } else {
                return null;
            }                        
        }catch (Exception $e) {
            // Acciones a realizar en caso de error
            echo "Error al obtener datos del usuario: " . $e->getMessage();
            return null;
        }

    }

}
?>