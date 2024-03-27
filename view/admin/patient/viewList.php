<?php require "view/layaud/header.php"?>
<div class="container">
    <table class="table">
        <tr>
            <td>Documento</td>
            <td>Nombre</td>
            <td>Direccion</td>
            <td>Telefono</td>
            <td>Email</td>
            <td>Estrato</td>    
        </tr>
        
        <?php foreach($listPatient as $patient): ?>
            <tr>
                <td><?php echo $patient['document'];?></td>
                <td><?php echo $patient['names']." ".$patient['last_names']; ?></td>
                <td><?php echo $patient['address']; ?></td>
                <td><?php echo $patient['phone']; ?></td>
                <td><?php echo $patient['email']; ?></td>
                <td><?php echo $patient['stratum']; ?></td>            
                <td><a href="<?php echo urlsite?>?page=patient&option=updateform&id=<?php echo $patient['idPatient'] ?>"> Actualizar </a></td>
                <td><a href="<?php echo urlsite?>?page=patient&option=deletepatient&id=<?php echo $patient['idPatient'] ?>"> Eliminar </a></td>
            </tr>
        <?php endforeach?>

    </table>


</div>
<?php require "view/layaud/footer.php"?>    