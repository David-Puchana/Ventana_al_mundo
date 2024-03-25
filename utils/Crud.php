<?php
class Crud {

    public function __construct() {    

    }

    public function select($table_1,$fields=[""],$conditions=[""],$table_2=[""]){
        $sql = 'SELECT ';
    
        if($table_2[0]!=""){
            for($i= 0; $i<count($table_1); $i++){
                $sql .= ''.$table_1[$i].'.*'.' ,'.$table_2[$i].'.*';
                $sql .= ' FROM '.$table_1[$i].' INNER JOIN '.$table_2[$i].' ON '.$conditions[$i];            
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
        require "Connection.php";
        $acces = new Connection();
        $result= $acces->connection()->prepare($sql);
        $result->execute();
        $acces->disconnect();
        return $result;
    }    
}

?>