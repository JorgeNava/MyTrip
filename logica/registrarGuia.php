<?php

    require 'conexion.php';
    
    $nombre  = $_POST['nombre'];
    $apellido_p  = $_POST['apellido_p'];
    $apellido_m  = $_POST['apellido_m'];
    $username = $_POST['username'];
    $clave = $_POST['clave'];
    $nacionalidad = $_POST['nacionalidad'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $sexo = $_POST['sexo'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $emailPayPal = $_POST['emailPayPal'];
    $numTarjeta = $_POST['numTarjeta'];
    $vencimientoTarjeta = $_POST['vencimientoTarjeta'];

    $insertar = "INSERT INTO GuiaInfoGen (Nombre,ApellidoP,ApellidoM,Username,Contraseña,Nacionalidad,FechaNac,Sexo,NumTelefono,Correo,CorreoPaypal,NumTarjeta,FechaVencimiento,Descripcion,Especialidades,Idiomas) 
    VALUES ('$nombre','$apellido_p','$apellido_m','$username','$clave', '$nacionalidad','$fechaNacimiento','$sexo','$telefono','$email','$emailPayPal','$numTarjeta','$vencimientoTarjeta','-','-','-');";
    $query = mysqli_query($conectar, $insertar);

    if($query){
        echo "<script>
        location.href = '../registerGuideDetails.php';
        </script>";
    }else{
        echo "<script> alert('Ha fallado el registro, porfavor vuelva a intentarlo');
        location.href = '../registerGuide.php';
        </script>";
    }

?>