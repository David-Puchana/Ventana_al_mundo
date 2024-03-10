<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Optics</title>
</head>
<body>
    <div class="wrapper">
        <form action="validarLogin.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="user" placeholder="Ingrese su usuario" required>            
                <i class='bx bxs-user' ></i>
            </div>
            <div class="input-box">
                <input type="password"  name="password"  placeholder="*******" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Recordar credenciales</label> 
                <a href="#">Olvidó su contraseña?</a>
            </div>

            <select class="form-select form-select-lg mb-3" name="role" aria-label=".form-select-lg example">
                <?php 
                    include "Connection.php";  
                    $acces = new Connection();
                    $option =  $acces->query();

                ?>

                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <button type="submit" name="submit" class="btn"> Login </button>

            <div class="register-link">
                <p>No tienes una cuenta? <a href="#">Registrate</a> </p>
            </div>
            <div class="dropdown">

        </form>
    </div>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>