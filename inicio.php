<?php
session_start();
if (!isset($_SESSION['nombre']) || !isset($_SESSION['apellido'])) {
    header("Location: bienvenido.php"); // Redirige al login si no hay sesión activa
    exit();
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
<header>
        <h1>Multihotel</h1>
        <nav>
            <ul>
                <li>inicio</li>
                <li>Hoteles
                <ul>
                <li><a href="Rhotel.php">Afiliación</a></li>
                <li><a href="Lhotel.php">Login</a></li>
                </ul>
                </li>
                <li>Usuario
                    <ul>
                        <li><a href="bienvenido.php">Login</a></li>
                        <li><a href="registro.php">Registro</a></li>
                        <li> <a href="controlcerrarsesion.php">cerrar</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <h1>Bienvenido</h1>
<?php
include('C:\laragon\www\Javascrit\ProyectoSI\conexion_bd.php');
include('C:\laragon\www\Javascrit\ProyectoSI\controllogin.php');
?> 

<?php
echo $_SESSION['nombre'] . " " .$_SESSION['apellido'];
?> 


</body>
</html>