<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Registro hotel</title>
</head>
<body>
    <header>
        <h1>Multihotel</h1>
        <nav>
            <ul>
                <li>inicio</li>
                <li>Usuario
                    <ul>
                        <li><a href="C:\Users\usuario\Documents\Javascrit\Proyecto Sistemas de info\bienvenido.html">Login</a></li>
                        <li><a href="C:\Users\usuario\Documents\Javascrit\Proyecto Sistemas de info\registro.html">Registro</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <?php
include('C:\laragon\www\Javascrit\ProyectoSI\conexion_bd.php');
include('C:\laragon\www\Javascrit\ProyectoSI\controlregistro_hotel.php');
?>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" name="singuphotel" id="singuphotel" method="post">
        <h1>Registro de hotel</h1>
        <label for="">Rif</label><br>
        <input type="text" name="rif" id="rif">
        <label for=""id="input" >Nombre </label>
        <input type="text" name="nombre" required><br>
        <label for="">Cantidad de Habitaciones</label>
        <input type="text" name="cantidadh" id="cantidadh"><br>
        <label for="" id="input">Correo</label>
        <input type="email" name="email" required ><br>
        <label for="" id="input">repita su Correo</label>
        <input type="email" name="email2" required ><br>
        <label for="" id="input">Contraseña</label>
        <input type="password" name="password" required><br>
        <label for="" id="input">Repita su Contraseña</label>
        <input type="password" name="password2" required><br>
        <label for="">País</label>
        <input type="text" name="pais" id="pais"><br>
        <label for="">Ciudad</label>
        <input type="text" name="ciudad" id="ciudad"><br>
        <label for="">Postal</label>
        <input type="number" name="postal" id="postal"><br>
        <label for="">dirección</label>
        <input type="text" name="direccion" id="direccion"><br>
        <label for="">Descripción</label>
        <input type="text" name="descripcion" id="descripcion"><br>
        <input type="submit" name="registroH" value="registroH" id="button"><br>

    </form>
</body>
</html>