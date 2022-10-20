<?php
    require 'modelo/modelo.php';
    session_start();
    $vehiculos = $_SESSION['vehiculos'];
    foreach($vehiculos as $vehiculo){
        unset($vehiculos[$vehiculo->get_matricula()]);
    }
?>