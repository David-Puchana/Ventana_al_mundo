<?php 

include "utils/Connection.php";

$action = new Connection();
$action->connection();

function select($tables,$fields, $conditions){
    $sql = 'SELECT ';
    $sql .= implode(',', $fields);

    if(count($tables) === 1){        
        $sql .= ' FROM '.$tables[0].' '.' WHERE ';
        $sql .= join(' AND ', $conditions);
        $sql .= ''.';';

    } else{        
        $sql .= ' FROM '.implode(' LEFT JOIN ', $conditions);
    }
    echo $sql;
}

$tables = ['User'];
$fields = ['*'];
$conditions = ['document="123456789"', 'pass="ABCD"', 'Role_idRole="1"'];

select($tables,$fields,$conditions);

?>