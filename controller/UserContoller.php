<?php
session_start();
require "model/UserModel.php";
class UserContoller{
    public static function index(){
        if(isset($_SESSION["nameLogin"])){
            require "view/admin/login.php";                
        }
        elseif(isset($_SESSION["nameLogin"])){ 
            unset($_SESSION['login']);
            session_destroy();     
            header('location:'.urlsite);                   
        }else{
            require "view/admin/login.php";                
        }        
    }

    public static function loginController(){
        $user=$_POST['user'];
        $pass=$_POST['password'];
        $role=$_POST['seletRole'];
        $login = new UserModel();
        $result = $login->login( $user, $pass, $role );
        if($result){            
            $_SESSION['login'] = $user;
            $data = $login->dataUser($user);   
            $_SESSION['nameLogin'] = $data['names'];
            header('location:'.urlsite."?page=login");                              
        } else{                
            $_SESSION['errorMessage'] = "Usuario o contraseña";
            header('location:'.urlsite.'?page=login');                              
        }             
    }

    public static function logout(){
        if(!isset($_SESSION["login"]))          
            header('location:'.urlsite);
        unset($_SESSION['']);
        session_destroy();     
        header('location:'.urlsite);   
    }
}

?>