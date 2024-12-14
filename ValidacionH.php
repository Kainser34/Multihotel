<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validación de usuario</title>
</head>
<body>
<?php
include('C:\laragon\www\Javascrit\ProyectoSI\conexion_bd.php');
include('C:\laragon\www\Javascrit\ProyectoSI\Validh.php');
?>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" id="validacion">
        <input type="number" name="codigo" id="codigo"><br>
        <input type="submit" name="validacion" value="validacion">
    </form>
</body>
</html>