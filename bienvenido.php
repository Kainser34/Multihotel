<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
<?php
include('C:\laragon\www\Javascrit\ProyectoSI\conexion_bd.php');
include('C:\laragon\www\Javascrit\ProyectoSI\controllogin.php');
?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" name="Login" id="loginForm">
        <h1>login</h1>
        <input type="email" name="email" id="email" required><br>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" name="login" value="login">
        </form>
</body>
</html>