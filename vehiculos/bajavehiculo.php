<?php
    require 'modelo/modelo.php';
    session_start();
    $i_vehiculo = $_POST['pos_vehiculo'];
    $vehiculos = $_SESSION['vehiculos'];
    unset($vehiculos[$i_vehiculo]);
    array_values($vehiculos);
    $_POST['vehiculos'] = $vehiculos;

    header("Location: listavehiculos.php");
?>