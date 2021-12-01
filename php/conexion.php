<?php
try {
    $conexion = new PDO('mysql:host=localhost;dbname=pia3',"root","Pascual2021*");
} catch (PDOException $e) {
     echo "Error".$e->getMessage();
}
?>
