<?php require "view/layaud/header.php"?>
<div class="mt-4 mb-3 ms-3 me-3">
    <table class="table table-dark table-hover">
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