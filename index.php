<?php
    require "config.php";
    $page = "index";

    if(isset($_GET["page"]))
        $page = $_GET["page"];
    switch($page){
        case 'index':
            require "controller/UserContoller.php";
            UserContoller::index();            
            break;
        case 'login': 
            require "controller/UserContoller.php";
            UserContoller::loginController();            
            break;    
        case 'logout':
            require "controller/UserContoller.php";
            UserContoller::logout();   
            break;
        case 'home': 
            require 'view/homePage.php';
            break;
        default:
            break;
    }
    
?>    