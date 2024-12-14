<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Asegúrate de que la conexión a la base de datos esté establecida
include('C:\laragon\www\Javascrit\ProyectoSI\conexion_bd.php');

if (!empty($_POST['login'])) {
    // Verificar que las variables de entrada no estén vacías
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Usar consultas preparadas para prevenir inyecciones SQL
        $stmt = $conexion->prepare("SELECT ID, identificacion, nombre, apellido, password FROM usuario WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $datos = $result->fetch_object();
            if (password_verify($password, $datos->password)) {
                // Guardar información del usuario en la sesión
                $_SESSION['usuario_id'] = $datos->ID;
                $_SESSION['identificacion'] = $datos->identificacion;
                $_SESSION['nombre'] = $datos->nombre;
                $_SESSION['apellido'] = $datos->apellido; // Asegúrate de almacenar el apellido en la sesión

                header("Location: inicio.php");
                exit();
            } else {
                echo "Contraseña incorrecta";
            }
        } else {
            echo "No se encontró un usuario con ese email";
        }

        // Cerrar la declaración y la conexión
        $stmt->close();
        $conexion->close();
    } else {
        echo "Por favor, complete todos los campos.";
    }
}
?>