<?php 
include('C:\laragon\www\Javascrit\ProyectoSI\controlador_de_registro.php');
if(isset($_POST['validacion'])){
    $codigo=$_POST['codigo'];
    $sql=$conexion->query("INSERT INTO `hotel`(`Rif`,`nombre`,`habitaciones`, `pais`,`ciudad`, `postal`, `direccion`, `descripcion`, `email`, `password`) SELECT Rif,nombre, habitaciones, pais, ciudad, postal, direccion, descripcion, email, password FROM `hoteltemp` WHERE codigo=$codigo");
    if($sql==1){
        echo "Usuario registrado con exito";
        $sq=$conexion->query("DELETE FROM `hoteltemp` WHERE codigo=$codigo");
        header("Location:bienvenido.php");
    }else{
        echo "Error de validación";
    }
}
?>