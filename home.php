<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Responsive</title>
    <link rel="stylesheet" href="css/menu.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/Icono.jpeg" />
</head>
<body oncopy="false" onpaste="false">
    <header id="main-header">
		
		

	</header><!-- / #main-header -->

	<?php include "menu.php" ?>

	<section id="main-content">
        <br><br>
	<center>
	<div style="font-size: 22px; color: white;"><?php echo "Bienvenido: ". $_SESSION['usuario']; ?></div><br>
    <img src="img/Icono.jpeg" alt="" >

	</center>
	
	</section> <!-- / #main-content -->

	
	
	<footer id="main-footer">
		
	</footer> <!-- / #main-footer -->

</body>