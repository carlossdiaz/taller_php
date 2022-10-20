<?php
    require 'modelo/modelo.php';
    session_start();
    $vehiculos = $_SESSION['vehiculos'];
    unset($vehiculos);
    $vehiculos = array();
    $_SESSION['vehiculos'] = $vehiculos;
?>