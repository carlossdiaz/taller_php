<?php
    require 'modelo/modelo.php';
    session_start();
    $vehiculos = $_SESSION['vehiculos'];
    $i_vehiculo = $_POST['pos_vehiculo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Vehiculo</title>
</head>
<body>
    <form action="editarvehiculo.php" method="post">
    <label for="matricula">matricula</label>
        <input type="text" name="matricula" value ="<?php echo $vehiculos[$i_vehiculo]->get_matricula(); ?>">
        <input type="hidden" name="pos_vehiculo" value ="<?php echo $i_vehiculo ?>">
        <label for="marca">marca</label>
        <input type="text" name="marca" value ="<?php echo $vehiculos[$i_vehiculo]->get_marca(); ?>">
        <label for="modelo">modelo</label>
        <input type="text" name="modelo" value ="<?php echo $vehiculos[$i_vehiculo]->get_modelo(); ?>">
        <label for="color">color</label>
        <input type="text" name="color" value ="<?php echo $vehiculos[$i_vehiculo]->get_color(); ?>">
        <label for="revisado">revisado</label>
        <input type="hidden" name="revisado" value ="<?php echo $vehiculos[$i_vehiculo]->get_revisado(); ?>">
        <button type="submit" value="Enviar">Enviar</button>
    </form>
</body>
</html>