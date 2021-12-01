<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/Icono.jpeg" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/memorama.css">
    <link rel="stylesheet" href="css/menu.css">
    <title>Memorama</title>
</head>
<body>

    <?php include "menu.php" ?>

<div style="margin: 60px auto;  width: 300px; font-size: 35px;">
     <section class="section1">
            <h1>Memorama</h1>
            
        </section>
        </div>
    <main>

        <table>
            <tr>
                <td><button id="0" onclick="Dest(0)"></button></td>
                <td><button id="1" onclick="Dest(1)"></button></td>
                <td><button id="2" onclick="Dest(2)"></button></td>
                <td><button id="3" onclick="Dest(3)"></button></td>
            </tr>
            
            <tr>
                <td><button id="4" onclick="Dest(4)"></button></td>
                <td><button id="5" onclick="Dest(5)"></button></td>
                <td><button id="6" onclick="Dest(6)"></button></td>
                <td><button id="7" onclick="Dest(7)"></button></td>
            </tr>
            
            <tr>
                <td><button id="8" onclick="Dest(8)"></button></td>
                <td><button id="9" onclick="Dest(9)"></button></td>
                <td><button id="10" onclick="Dest(10)"></button></td>
                <td><button id="11" onclick="Dest(11)"></button></td>
            </tr>
            
            <tr>
                <td><button id="12" onclick="Dest(12)"></button></td>
                <td><button id="13" onclick="Dest(13)"></button></td>
                <td><button id="14" onclick="Dest(14)"></button></td>
                <td><button id="15" onclick="Dest(15)"></button></td>
            </tr>
        </table>
    
        <section class="section2">
            <h2 id="Aciertos" class="estadisticas">Aciertos: 0</h2>
            <h2 id="tiempo" class="estadisticas">Tiempo: 60 segundos</h2>
            <h2 id="Movimientos" class="estadisticas">Movimientos</h2>
        </section>
        
    </main>

    <script src="js/main.js"></script>
</body>
</html>