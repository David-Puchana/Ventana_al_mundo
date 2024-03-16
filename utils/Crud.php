<?php
class Crud extends Connection {
 
    public function select($tables=[],$fields=[], $where=[], $varWhere=[]){
        $sql = 'SELECT ';
        if(count($tables) === 1){
            for($i= 0;$i<count($tables);$i++){
                $sql .= $i == (count($tables)-1)?''.$fields[$i].' ,':''.$fields[$i];            
            }
            echo $sql;

        } else{

        }

        
        

        if($where==="" and $fields==="*"){
            $sql = 'SELECT * FROM "$table";';
        } elseif($where=== ''){

        }

        $sql = 'SELECT * FROM "$table" '.$fields.' WHERE ';
        foreach($where as $key=>$val){
            $sql .= $key.'='.$val.' AND ';
        }
    }
}

?>