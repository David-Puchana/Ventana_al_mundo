<?php
include("../login.php");
if(isset($_POST['submit'])){
    
    if(!empty($_POST['user']) &&  !empty($_POST['password'])){
        
        include "Connection.php";  
        $acces = new Connection(); 
        
        $user=$_POST['user'];
        $pass=$_POST['password'];
        $role=$_POST['seletRole'];

        $query="SELECT * FROM User WHERE document='$user' AND pass='$pass' AND Role_idRole=$role;";       
        
        $result= $acces->connection()->query($query);

        if($result->num_rows>0){
            foreach ($result as $row) {
                $name = $row["names"];       
            }    
            echo "<script>window.location.href = 'login.php';</script>";              
            echo '<script>alert("Hola mundo");</script>';                 
            sleep(2);                  
            header("Location:../view/homePage.php");           
        }
        else{
            header("Location:login.php");
        }
        
    }    
}
?>