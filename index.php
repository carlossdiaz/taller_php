<?php
    require 'modelo/modelo.php';
    session_start();
    $vehiculo1  = new Vehiculo("1234ABC", "Seat", "Leon", "Blanco", "S");
    $vehiculo2 = new Vehiculo("2345CCV", "Ford", "Fiesta", "Rojo", "N");
    $vehiculo3 = new Vehiculo("6574FMB", "Renault", "Megane", "Negro", "N");
    $vehiculos = array($vehiculo1, $vehiculo2, $vehiculo3);
    $_SESSION['vehiculos'] = $vehiculos;    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller</title>
</head>
<body>
    <h1>Taller</h1>
    <p><a href="vehiculos/listavehiculos.php">Vehiculos</a></p>
</body>
</html>