<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo urlsite?>/view/css/styleNav.css">    
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
        <title>Optics</title>
    </head>
    <body>   
<header>         
    <div id="colorNav">            
        <nav class="navbar navbar-expand-lg" id="navBar">                   
            <img src="<?php echo urlsite?>/img/logo.png" id="imgLogo">   
            <a class="navbar-brand text-white" href="<?php echo urlsite?>?page=admin">home</a>                                           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="btnPacientes">                                                
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pacientes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo urlsite?>?page=patient&option=formAddPatient">Registar</a></li>
                            <li><a class="dropdown-item" href="<?php echo urlsite?>?page=patient&option=listPatients">Listar Pacientes</a></li>                            
                        </ul>
                    </li>                    
                </ul>  
                <ul class="navbar-nav mb-2 mb-lg-0" id="btnUser">                            
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo urlsite?>/img/usuario.png" id="imgUsuario">
                            <?php echo $_SESSION['name'] ?? "(Nombre)"; ?> 
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><?php echo $_SESSION['role'] ?? "(Rol)"; ?></a></li>
                            <li><a class="dropdown-item" href="<?php echo urlsite?>?page=logout">Cerrar sesión</a></li>                                                             
                        </ul>
                    </li>
                </ul>  
            </div>                
        </nav>
    </div>  
</header> 
<?php
    if (isset($_SESSION['exito'])) {        
        echo '<script>
                Swal.fire({                             
                    position: "center",                  
                    icon: "success",
                    title: "Registro exitoso", 
                    timer: 1500,                   
                    width: "25%",
                    background: "#31363F",
                    color: "#EEEEEE",
                    showConfirmButton: false
                });
            </script>';    
            
            
    } 
    unset($_SESSION['exito']);
?>
<?php
    if (isset($_SESSION['actualizado'])) {        
        echo '<script>
                Swal.fire({                             
                    position: "center",                  
                    icon: "success",
                    title: "Registro actualizado exitoso", 
                    timer: 1500,                   
                    width: "25%",
                    background: "#31363F",
                    color: "#EEEEEE",
                    showConfirmButton: false
                });
            </script>';                            
    } 
    unset($_SESSION['actualizado']);
?>