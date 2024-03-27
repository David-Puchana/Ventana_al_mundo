<?php
    require "config.php";
    $page = "login";

    if(isset($_GET["page"]))
        $page = $_GET["page"];

    switch($page){
        case 'login':
            require "controller/UserContoller.php";
            UserContoller::index();  
            break;
        case 'process':
            require "controller/UserContoller.php";
            UserContoller::loginController();  
            break;            
        case 'logout':
            require "controller/UserContoller.php";
            UserContoller::logout();   
            break;            
        case 'admin':
            require "controller/AdminController.php";
            AdminController::indexAdmin();
            break;    
        case 'patient':    
            require "controller/PatientController.php";
            if(isset($_GET["option"])):
                $method = $_GET["option"];
                if(method_exists("PatientContoller",$method)):                    
                    PatientContoller::{$method}();
                endif;
            else:
                PatientContoller::listPatients();
            endif;                    
            break;  
        default:            
            break;
    }
?>    