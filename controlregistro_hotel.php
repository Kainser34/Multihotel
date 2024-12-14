<?php
/*include("C:\laragon\www\Javascrit\ProyectoSI\PHPMailer\PHPMailer\index.php");*/
  if(!empty($_POST['registroH'])){
    if(empty($_POST['rif']) or empty($_POST['nombre']) or empty($_POST['cantidadh']) or empty($_POST['email']) or empty($_POST['email2']) or empty($_POST['password']) or empty($_POST['password2'])or empty($_POST['pais']) or empty($_POST['ciudad']) or empty($_POST['postal']) or empty($_POST['direccion'])or empty($_POST['descripcion'])){
        echo "Faltan campos por registrar";
    }else{
        $rif=$_POST['rif'];
        $nombre=$_POST['nombre'];
        $cantidadh=$_POST['cantidadh'];
        $email=$_POST['email'];
        $email2=$_POST['email2'];
        $password=$_POST['password'];
        $password2=$_POST['password2'];
        $pais=$_POST['pais'];
        $ciudad=$_POST['ciudad'];
        $postal=$_POST['postal'];
        $direccion=$_POST['direccion'];
        $descripcion=$_POST['descripcion'];
        if($email==$email2 && $password==$password2){
            $verifyCorreo=$conexion->query("SELECT * FROM `hotel` WHERE email='$email2'");
            if(mysqli_num_rows($verifyCorreo)>0){
                echo "Este correo ya existe";
                exit();
            }
            $passwordE=password_hash($password, PASSWORD_BCRYPT);
            $asunto="Codigo de confirmación: ";
            $codigo=rand(100000,999999);
            $codig=$codigo;
            $contenido="Señor $nombre Su codigo de confirmación es: $codigo ";
            $header="From: salazarzapatasaul@gmail.com";
            $mail=mail($email,$asunto,$contenido,$header);
            $sq=$conexion->query("INSERT INTO `hoteltemp`(`Rif`, `nombre`, `habitaciones`,`pais`,`ciudad`,`postal`,`direccion`,`descripcion`, `email`,`password`,`codigo`) VALUES ('$rif','$nombre','$cantidadh','$pais','$ciudad','$postal','$direccion','$descripcion','$email','$passwordE','$codigo')");
            header("Location:ValidacionH.php");
        }else{
            echo "los correos o contraseñas no coinciden";
        }
    }
}
    
?>