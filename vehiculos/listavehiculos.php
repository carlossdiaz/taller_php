<?php
    session_start();
    $vehiculos = $_SESSION['vehiculos'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos</title>
</head>
<body>
    <table>
        <tr>
            <th>Matricula</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Color</th>
            <th>Revisado</th>
        </tr>
        <?php
            foreach($vehiculos as $i => $vehiculo){
                echo "<tr>";
                echo "<td>" . $vehiculo->get_matricula() . "</td>";
                echo "<td>" . $vehiculo->get_marca() . "</td>";
                echo "<td>" . $vehiculo->get_modelo() . "</td>";
                echo "<td>" . $vehiculo->get_color() . "</td>";
                echo "<td>" . $vehiculo->get_revisado() . "</td>";
                echo "<td>";
                echo "<form action='revisarvehiculo.php' method='post'>";
                echo "<input type='submit' value='Revisar'></button>";
                echo "<input type='hidden' name='pos_vehiculo' value=" . $i . ">";
                echo "</form>";
                echo "</td>";
                echo "<td>";
                echo "<form action='vehiculo.php' method='post'>";
                echo "<input type='submit' value='Modificar'></button>";
                echo "<input type='hidden' name='pos_vehiculo' value=" . $i . ">";
                echo "</form>";
                echo "</td>";
                echo "<td>";
                echo "<form action='bajavehiculo.php' method='post'>";
                echo "<input type='submit' value='Borrar'></button>";
                echo "<input type='hidden' name='pos_vehiculo' value=" . $i . ">";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
    </table>
    <p><a href="nuevovehiculo.php">Nuevo</a></p>
    <form action="eliminartodos.php" method="post"><input type="submit" value="Eliminar todos">;</form>
    

</body>
</html>