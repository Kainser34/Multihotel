<?php
session_start();
session_destroy();
header("Location: bienvenido.php");
/*error_reporting(E_ALL);
ini_set('display_errors', 1);

// Asegúrate de que la conexión a la base de datos esté establecida
include('C:\laragon\www\Javascrit\ProyectoSI\conexion_bd.php');

if (!empty($_POST['login'])) {
    // Verificar que las variables de entrada no estén vacías
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Usar consultas preparadas para prevenir inyecciones SQL
        $sql=$conexion->query("SELECT ID, identificacion, nombre, apellido, password FROM usuario WHERE email ='$email' ");
        if($datos=$sql->fetch_object()){
            if(password_verify($password, $datos->password)){
                // Guardar información del usuario en la sesión
                $_SESSION['usuario_id'] = $datos->ID;
                $_SESSION['identificacion']=$datos->identificacion;
                $_SESSION['nombre'] = $datos->nombre;
                $_SESSION['apellido'] = $datos->apellido; // Asegúrate de almacenar el apellido en la sesión

                header("Location:inicio.php");
                exit();
            }else {
                echo "Contraseña incorrecta";
            }
        }else {
            echo "No se encontró un usuario con ese email";
        }
    } else {
        echo "Por favor, complete todos los campos.";
    }
}*/
?>