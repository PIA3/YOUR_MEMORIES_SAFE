<?php
    require_once 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="shortcut icon" type="image/x-icon" href="../img/Icono.jpeg" />
    <title>Registro</title>
</head>
<body>
    <div class="global">
        <div class="container">
            <h1>CREAR CUENTA</h1>
            <form method="post" action="insertodatos.php">
                <input type="text" placeholder="Nombre" name="nombre">
                <br>
                <input type="number" placeholder="Edad" name="numero">
                <br>
                <input type="email" placeholder="Email"  name="email" required>
                <br>
                <input type="password" minlength="5" placeholder="Contraseña" name="password" required>
                <br>
                <select class="document">
                    <option value="0">Tipo de documento</option>
                    <option value="1">Tarjeta de Identidad</option>
                    <option value="2">Cedula Ciudadana</option>
                    <option value="3">Tarjeta de Residencias</option>
                </select>
                <br>
                <input class="documento" name="documento" placeholder="Ingrese su documento">
               <input type="submit" value="Registrar">
                
            </form>
            <a href="../index.html">Ya tienes cuenta? Ingresa!</a>
        </div>
    </div>
</body>
</html>
