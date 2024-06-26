<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo urlsite?>/view/css/style.css">    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
    
    <?php 
        if(isset($_SESSION['nameLogin'])){
            echo '<meta http-equiv="refresh" content="1;url='.urlsite."?page=admin\">";
        } 
    ?>

    <title>Optics</title>
</head>
<div class="wrapper">
    <form action="<?php echo urlsite?>?page=process" method="post">
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" name="user" placeholder="Documento" required>            
            <i class='bx bxs-user' ></i>
        </div>
        <div class="input-box">
            <input type="password"  name="password"  placeholder="*******" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>
        
        <select placeholder="Seleccione su rol" name="seletRole">      
            <option selected id="selected" value="-1">Seleccione su rol</option>                         
            <?php 
                require_once "utils/Connection.php";
                $acces = new Connection();
                $option =  $acces->connection()->query('SELECT * FROM Role');
                foreach ($option as $row) {
                    echo "<option value='".$row["idRole"]."'>".$row["roleType"].'</option>';                        
                }                                             
            ?>                 
        </select>
        <button type="submit" name="submit" class="btn"> Login </button>        
    </form>
    <?php
        if (isset($_SESSION['errorMessage'])) {        
            echo '<script>
                    Swal.fire({     
                        position: "center",                  
                        title: "Oops...",
                        text: "Verifica tus credenciales y vuelve a intentarlo",
                        width: "25%",
                        background: "#31363F",
                        color: "#EEEEEE",
                        confirmButtonColor: "#222831"
                    });
                </script>';     
                unset($_SESSION['errorMessage']);          
        } 
        if(isset($_SESSION['nameLogin'])) {   
            $name = $_SESSION['nameLogin'];
            unset($_SESSION['nameLogin']);                                    
            echo '<script>
                    Swal.fire({     
                        position: "center",                  
                        icon: "success",
                        title: "Bienvenido", 
                        text: "'.$name.'",
                        timer: 1500,                   
                        width: "30%",                      
                        background: "#31363F",
                        color: "#EEEEEE",
                        fontSize: "0.5em",
                        showConfirmButton: false
                    });                   
            </script>';                    
        }         
    ?>                    
</div>    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>