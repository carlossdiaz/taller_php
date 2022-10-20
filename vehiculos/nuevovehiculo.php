<!DOCTYPE html>
<html lanmarca="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edmarcae">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculo</title>
</head>
<body>
    <form action="altavehiculo.php" method="post">
        <label for="matricula">matricula</label>
        <input type="text" name="matricula">
        <label for="marca">marca</label>
        <input type="text" name="marca">
        <label for="modelo">modelo</label>
        <input type="text" name="modelo">
        <label for="color">color</label>
        <input type="text" name="color">
        <label for="revisado">revisado</label>
        <input type="hidden" name="revisado" value="N">
        <button type="submit" value="Enviar">Añadir</button>

    </form>
</body>
</html>