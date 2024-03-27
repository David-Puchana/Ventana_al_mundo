<?php require "view/layaud/header.php"?>
<div class="container mt-4 mb-5 p-2">
    <table class="table table-dark table-hover" style="width:100%">

        <?php
            if (isset($_SESSION['exito'])) {        
                echo '<script>
                        Swal.fire({                             
                            icon: "success",
                            title: "Registro exitoso",
                            showConfirmButton: false,
                            timer: 1500                            
                            position: "center",                  
                            title: "Oops...",                            
                            width: "25%",
                            background: "#31363F",
                            color: "#EEEEEE",
                            confirmButtonColor: "#222831"
                        });
                    </script>';               
            } 
            unset($_SESSION['exito']);
        ?>    


        <caption>Pacientes</caption>
        <thead>
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Estrato</th>    
                <th>Actualizar</th>    
                <th>Eliminar</th>    
            </tr>
        </thead>
        <tbody>
        <?php foreach($listPatient as $patient): ?>
            <tr>
                <td><?php echo $patient['document'];?></td>
                <td><?php echo $patient['names']." ".$patient['last_names']; ?></td>
                <td><?php echo $patient['address']; ?></td>
                <td><?php echo $patient['phone']; ?></td>
                <td><?php echo $patient['email']; ?></td>
                <td><?php echo $patient['stratum']; ?></td>            
                <td><a class="btn btn-secondary" href="<?php echo urlsite?>?page=patient&option=updateform&id=<?php echo $patient['idPatient'] ?>"> Actualizar </a></td>
                <td><a class="btn btn-danger" href="<?php echo urlsite?>?page=patient&option=deletepatient&id=<?php echo $patient['idPatient'] ?>"> Eliminar </a></td>
            </tr>
        <?php endforeach?>
        </tbody>    
    </table>


</div>
<?php require "view/layaud/footer.php"?>    