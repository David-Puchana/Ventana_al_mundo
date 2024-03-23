<?php
session_start();
require "model/UserModel.php";

class UserContoller{
    public static function index(){
        if(isset($_SESSION["login"]))
            header('location:'.urlsite);
        require "view/user/login.php";                
    }

    public static function loginController(){
        $user=$_POST['user'];
        $pass=$_POST['password'];
        $role=$_POST['seletRole'];
        $login = new UserModel();
        $result = $login->login( $user, $pass, $role );
        if($result){
            $_SESSION['login'] = $user;
            header('location:'.urlsite.'?page=admin');
        }else{
            header('location:'.urlsite."msg=Usuario o Contraseña incorrectos");
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