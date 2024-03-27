<?php require "view/layaud/header.php"?>
<div class="container mt-4 mb-5 p-2" style="width: 80%;">
    <form class="row g-3 needs-validation" action="<?php echo urlsite?>?page=patient&option=updatepatient" method="post">
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Documento</label>
            <input type="text" name="document" class="form-control" id="validationCustom01" value="<?php echo $dtEdit['document']?>" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>

        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nombre</label>
            <input type="text" name="names" class="form-control" id="validationCustom01" value="<?php echo $dtEdit['names']?>" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Apellidos</label>
            <input type="text" name="lastnames" class="form-control" id="validationCustom02" value="<?php echo $dtEdit['last_names']?>" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>


        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Dirección</label>
            <input type="text" name="address" class="form-control" id="validationCustom02" value="<?php echo $dtEdit['address']?>" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Teléfono</label>
            <input type="text" name="phone" class="form-control" id="validationCustom02" value="<?php echo $dtEdit['phone']?>" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>

        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Correo</label>
            <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" name="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo $dtEdit['email']?>" required>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
            </div>
        </div>
            
        <div class="col-md-3 mt-4 mb-4">
            <select name="seletStatum" class="form-select" aria-label="Default select example" required>  
                <option value="<?php echo $dtEdit['idStratum']?>"><?php echo $dtEdit['stratum']?></option>                                
                <?php 
                    require_once "utils/Connection.php";
                    $acces = new Connection();
                    $option =  $acces->connection()->query('SELECT * FROM Stratum');
                    foreach ($option as $row) {
                        echo "<option value='".$row["idStratum"]."'>".$row["stratum"].'</option>';                        
                    }                                             
                ?> 
            </select>
            <input type="hidden" name="idPatient" value="<?php echo $dtEdit['idPatient']?>">
            <div class="invalid-feedback">
                Por favor elija un estrato válido
            </div>
        </div>
        
        <div class="col-12">
            <button type="submit" name="submit" class="btnOption"> Actualizar </button>             
        </div>
    </form>
</div>

<?php require "view/layaud/footer.php"?>