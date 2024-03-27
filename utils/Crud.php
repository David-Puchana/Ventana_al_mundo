<?php
require_once "Connection.php";              
class Crud {
    public function __construct() {    
    }

    private function queryCrud($query) {
        try {
            $acces= new Connection();
            $result= $acces->connection()->prepare($query);
            $result->execute();
            $acces->disconnect();            
            return $result;
        } catch (PDOException $e) {
            return null;
        }
    }
    public function select($table_1,$fields=[""],$conditions=[""],$table_2=[""]){
        $sql = 'SELECT ';
    
        if($table_2[0]!=""){
            for($i= 0; $i<count($table_1); $i++){
                $sql .= ''.$table_1[$i].'.*'.' ,'.$table_2[$i].'.*';
                $sql .= ' FROM '.$table_1[$i].' INNER JOIN '.$table_2[$i].' ON '.$conditions[$i].";";            
            }
        }
        elseif($fields[0]==="" && $conditions[0]===""){        
            $sql.='*'.' FROM '.$table_1[0].';';
        } 
        elseif($fields[0] != "" && $conditions[0] ===""){
            $sql .= implode(' ,', $fields).' FROM '.$table_1[0].';';
        }    
        else{                
            $sql .= implode(' ,', $fields);
            $sql .= ' FROM '.$table_1[0].' WHERE ';
            $sql .= join(' AND ', $conditions);
            $sql .= ''.';';            
        }  

        $result = $this->queryCrud($sql);

        return $result;

    }    

    public function insert($table,$fields=[""],$values=[""]){
        $sql = "INSERT INTO ".$table." (";
        $sql.= implode(' ,', $fields).")";
        $sql.= ' VALUES ('.implode(' ,', $values).");";          
        $result = $this->queryCrud($sql);
        try{
            if($result->rowCount() > 0)
                return true;
        } catch(Exception $e) {
            return false; 
        }
    }

    public function update($table,$fields,$conditions=[""]){
        $sql = "UPDATE ".$table." SET ";        
        $sql.= implode(",", $fields);
        if($conditions==[""]){            
            $sql.=";";    
        } else {            
            $sql.= " WHERE ".implode("", $conditions).";";            
        }
        $result = $this->queryCrud($sql);
        try{
            if($result->rowCount() > 0)
                return true;
        } catch(Exception $e) {
            return false; 
        }

    }

    public function delete($table,$id, $fiel){
        $sql = "DELETE FROM ".$table." WHERE ".$fiel."=".$id.";";
        $result = $this->queryCrud($sql);
        try{
            if($result->rowCount() > 0)
            return true;
        } catch(Exception $e) {
            return false; 
        }
    }
}

?>