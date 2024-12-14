<?php
/*include("C:\laragon\www\Javascrit\ProyectoSI\PHPMailer\PHPMailer\index.php");*/
  if(!empty($_POST['registro'])){
    if(empty($_POST['identificacion']) or empty($_POST['nombre']) or empty($_POST['apellido']) or empty($_POST['nacionalidad']) or empty($_POST['procedencia']) or empty($_POST['celular']) or empty($_POST['email']) or empty($_POST['email2']) or empty($_POST['password']) or empty($_POST['password2'])){
        echo "Faltan campos por registrar";
    }else{
        $identificacion=$_POST['identificacion'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $nacionalidad=$_POST['nacionalidad'];
        $procedencia=$_POST['procedencia'];
        $celular=$_POST['celular'];
        $email=$_POST['email'];
        $email2=$_POST['email2'];
        $password=$_POST['password'];
        $password2=$_POST['password2'];
        if($email==$email2 && $password==$password2){
            $verifyCorreo=$conexion->query("SELECT * FROM `usuario` WHERE email='$email2'");
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
            $sq=$conexion->query("INSERT INTO `usuariotemp`( `identificacion`, `nombre`, `apellido`, `nacionalidad`, `procedencia`, `celular`, `email`, `password`, `codigo`) VALUES ('$identificacion','$nombre','$apellido','$nacionalidad','$procedencia','$celular','$email','$passwordE','$codigo')");
            header("Location:Validacion.php");
        }else{
            echo "los correos o contraseñas no coinciden";
        }
    }
}
    
?> 