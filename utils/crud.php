<?php
function read($conn,$table, $queryFields, $where=false, $whereJoin=false, $queryFieldsJoin = false, $tableJoin = false){
    if($tableJoin===false){
        if($where === false){
            $lenQuery = count($queryFields);
            $sql = "SELECT ";
            for ($i= 0;$i<$lenQuery;$i++){
                $sql .= $queryFields[$i]." ";
                $sql .= "FROM ".$table;
            }
        } else {            
        }               
    } 
    return $conn->query($sql);
}
?>