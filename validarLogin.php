<?php
if(isset($_POST['submit'])){
    
    if(!empty($_POST['user']) &&  !empty($_POST['password'])){
        
        include "Connection.php";  
        $acces = new Connection(); 
        
        $user=$_POST['user'];
        $pass=$_POST['password'];
        
        $query="SELECT * FROM user WHERE document='$user' AND pass='$pass';";       
        
        $resul= $acces->connection()->query($query);

        if($resul->num_rows>0){
            header("Location:homePage.php");
        }
        else{
            header("Location:login.php");
        }
        
    }    
}
?>