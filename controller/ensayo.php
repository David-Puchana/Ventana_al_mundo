<?php
require "model/UserCrud.php";
session_start();
class ensayo{
    public function index(){
        if(isset($_SESSION["login"])) header("location:".urlsite);
        require "view/login.php";        
    }

    public function login_1(){
        $userLogin = new UserCrud();

        $user=$_POST['user'];
        $pass=md5($_POST['password']);
        $role=$_POST['seletRole'];

        if($userLogin->login($user,$pass,$role)){
            $_SESSION['login'] = $user;
            header("location:".urlsite);
        }else{
            header("location:".urlsite."?msg=Usuario o contraseña incorrectos");
        }
    }
}

?>