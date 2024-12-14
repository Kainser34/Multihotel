<?php 
include('C:\laragon\www\Javascrit\ProyectoSI\controlador_de_registro.php');
if(isset($_POST['validacion'])){
    $codigo=$_POST['codigo'];
    $sql=$conexion->query("INSERT INTO `usuario`(`ID`,`identificacion`,`nombre`, `apellido`,`nacionalidad`,`procedencia`,`celular`, `email`,`password`) SELECT ID,identificacion,nombre, apellido,nacionalidad,procedencia,celular, email,password FROM `usuariotemp` WHERE codigo=$codigo");
    if($sql==1){
        echo "Usuario registrado con exito";
        $sq=$conexion->query("DELETE FROM `usuariotemp` WHERE codigo=$codigo");
        header("Location:bienvenido.php");
    }else{
        echo "Error de validación";
    }
}
?>