<?php
    require 'modelo/modelo.php';
    session_start();
    $i_vehiculo = $_POST['pos_vehiculo'];
    $vehiculos = $_SESSION['vehiculos'];
    $vehiculo = new Vehiculo($_POST['matricula'], $_POST[marca], $_POST['modelo'], $_POST['color'], $_POST['revisado']);

    $vehiculos[$i_vehiculo] = $vehiculo;
    $_SESSION['vehoculos'] = $vehiculos;

    header("Location: listavehiculos.php")
?>