<?php
    $i_vehiculo = $_POST['pos_vehiculo'];
    $vehiculos = $_SESSION['vehiculos'];
    if($vehiculos[$i_vehiculo]->get_revisado == "S"){
        $vehiculo = new Vehiculo($_POST['matricula'], $_POST['marca'], $_POST['modelo'], $_POST['color'], "N");
        array_push($vehiculos, $vehiculo);
        $_SESSION['vehiculos'] = $vehiculos;
    }
    else{
        $vehiculo = new Vehiculo($_POST['matricula'], $_POST['marca'], $_POST['modelo'], $_POST['color'], "S");
        array_push($vehiculos, $vehiculo);
        $_SESSION['vehiculos'] = $vehiculos;
    }

    header("Location: listavehiculos.php");

?>