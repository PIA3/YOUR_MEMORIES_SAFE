<?php

include('conexion.php');
session_start();

$email = $_POST['email'];
    $password = $_POST['password'];

if (isset($_POST['email']) and isset($_POST['password'])) {

    
    $query = $conexion->prepare("SELECT * FROM registro WHERE email= :correo AND password= :pwd");

    $query->execute(array(
        ':correo' => $email, 
        ':pwd' => $password
    ));

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo '<p class="error">Verifica el usuario y la contraseña!</p>';
    } else {
            $_SESSION['usuario'] = $result['email'];
            header('location:../home.php');
        } 
    }
    else {
            echo '<p class="error">El usuario o la contraseña son incorrectos o estan en blanco!</p>';
            header('location:../index.html');
        }
    

?>