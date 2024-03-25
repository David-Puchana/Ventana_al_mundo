<?php
session_start();
require "model/UserModel.php";

class UserContoller{

    public static function index(){
        if(isset($_SESSION["login"])){
            unset($_SESSION['login']);
            session_destroy(); 
            header('location:'.urlsite);}
        require "view/user/login.php";                
    }

    public static function loginController(){
        $user=$_POST['user'];
        $pass=$_POST['password'];
        $role=$_POST['seletRole'];
        $login = new UserModel();
        $result = $login->login( $user, $pass, $role );
        $data = $login->dataUser($user);
        if($result){
            $_SESSION['name'] = $data['names'];
            $_SESSION['role'] = $data['roleType'];
            $_SESSION['login'] = $user;
            require 'view/homePage.php';
        }else{                
            $_SESSION['errorMessage'] = "Usuario o contraseña";
            header('location:'.urlsite.'?page=index');                              
        }            
    }

    public static function logout(){
        if(!isset($_SESSION["login"]))
            header('location:'.urlsite);
        unset($_SESSION['login']);
        session_destroy();     
        header('location:'.urlsite);   
    }
}

?>