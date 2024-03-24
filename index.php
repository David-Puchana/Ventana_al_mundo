<?php
    require "config.php";
    $page = "index";

    if(isset($_GET["page"]))
        $page = $_GET["page"];
    switch($page){
        case 'login':
            require "controller/UserContoller.php";
            UserContoller::index();            
            break;
        case 'loginout': 
            require "controller/UserContoller.php";
            UserContoller::loginController();            
            break;    
        case 'logout':
            require "controller/UserContoller.php";
            UserContoller::logout();   
            break;
        case 'admin': 
            require 'view/welcome.php';
            break;
        default: echo "<a href='".urlsite."?page=login'>LOGIN</a>"; break;
    }
    
?>    