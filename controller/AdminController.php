<?php
require "model/UserModel.php";
session_start();
if(!isset($_SESSION["login"])) 
    header('location:'.urlsite); 

class AdminController{
    public static function indexAdmin(){
        $login = new UserModel();
        $user = $_SESSION["login"];
        $data = $login->dataUser($user);        
        if($data){
            $_SESSION['name'] = $data['names'];
            $_SESSION['role'] = $data['roleType'];
            require "view/admin/home.php";
        }            
    }
}    
?>    