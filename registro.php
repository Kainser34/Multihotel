
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Registrarse</title>
</head>
<body>
<?php
include('C:\laragon\www\Javascrit\ProyectoSI\conexion_bd.php');
include('C:\laragon\www\Javascrit\ProyectoSI\controlador_de_registro.php');
?>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="registro" id="registro">
<h2>Registro</h2>
    <label for="">Identificación</label>
    <select name="identidad" id="identidad">
        <option name="C.I"  value="">Cedula de identidad</option>
        <option name="pastport" value="">Pasaporte</option>
    </select>
    <input type="text" name="identificacion" id="identificacion" required><br>
    <label for=""id="input" >Nombre </label>
    <input type="text" name="nombre" required><br>
    <label for="" id="input">Apellido</label>
    <input type="text" name="apellido" required><br>
    <label for="">Nacionalidad</label>
    <input type="text" name="nacionalidad" id="nacionalidad" required><br>
    <label for="">Procedentica</label>
    <input type="text" name="procedencia" id="procedencia" required><br>
    <label for="">Número de celular</label>
    <input type="number" name="celular" id="celular">
    <label for="" id="input">Correo</label>
    <input type="email" name="email" required ><br>
    <label for="" id="input">repita su Correo</label>
    <input type="email" name="email2" required ><br>
    <label for="" id="input">Contraseña</label>
    <input type="password" name="password" required><br>
    <label for="" id="input">Repita su Contraseña</label>
    <input type="password" name="password2" required><br>
    <input type="submit" name="registro" value="Registro" id="button"><br>

</form>

    <?php
    ?>

</body>
</html>