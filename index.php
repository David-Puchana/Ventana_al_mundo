<?php
    require "config.php";
    $page = "index";
    if(isset($_GET['page'])) 
        $page = $_GET['page'];
    switch($page){
        case 'login':break;
    }

?>