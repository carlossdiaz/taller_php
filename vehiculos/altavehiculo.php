<?php
require 'modelo/modelo.php';
session_start();
$vehiculos = $_SESSION['vehiculos'];
$vehiculo = new Vehiculo($_POST['matricula'], $_POST['marca'], $_POST['modelo'], $_POST['color'], "N");
array_push($vehiculos, $vehiculo);
$_SESSION['vehiculos'] = $vehiculos;

header("Location: listavehiculos.php");

?>