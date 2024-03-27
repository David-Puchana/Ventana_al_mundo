<?php 
require_once "utils/Crud.php";
Class UserModel{
    public function __construct(){}
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
            $table = ["User"];
            $fields = [""];
            $conditions = ["User.Role_idRole=Role.idRole AND document="."'$user'"];    
            $table_2=["Role"];            
            try {
                $query = new Crud();
                $result = $query->select($table, $fields, $conditions, $table_2);
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

}
?>