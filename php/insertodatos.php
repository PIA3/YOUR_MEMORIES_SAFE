<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	<title></title>
</head>
<body>

<?php
    

$nombre=$_POST['nombre'];
$numero=$_POST['numero'];
$email=$_POST['email'];
$password=$_POST['password'];
$documento=$_POST['documento'];


try{
    include "conexion.php";

	$sql="INSERT INTO registro(id_registro, nombre,numero,email,documento,password) VALUES(NULL, :nombre, :numero, :email, :documento, :password)";

	$consulta = $conexion -> prepare($sql);
	$consulta -> execute(array(
	    ':nombre' => $nombre, 
	    ':numero' => $numero, 
	    ':email' => $email,
        ':documento' => $documento,
	    ':password' => $password
	));

echo "<script>
 swal({
 	title: 'Registro Exitoso!!', 
 	text: 'Usuario registrado correctamente, ya puede iniciar sesión', 
 	type: 'success',
 	timer: 2000,
 	showConfirmation: false
 	}, function(){
  		window.location.href = '../index.html';
  });
</script>";

//header('Location: ../index.html');
}	

catch(Exception $e){
    echo 'Error conectando a la base de datos: '.$e->getMessage();
}
?>


</body>
</html>




