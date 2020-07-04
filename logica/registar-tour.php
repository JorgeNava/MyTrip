<?php

    require 'conexion.php';
    
    $fechaTour  = $_POST['fechaTour'];
    $duracionTour  = $_POST['duracionTour'];
    $lugarDeEncuentro = $_POST['lugarDeEncuentro'];
    $horaDeEncuentro = $_POST['horaDeEncuentro'];
    $costoTour = $_POST['costoTour'];


    /*
    $statment  = "SELECT COUNT(*) FROM tours";
    $rslt = mysqli_query($conectar, $statment);
    $rsltArray =mysqli_fetch_array($rslt);
    $var = $rsltArray["COUNT(*)"]; 
    */
    session_start();
    $usuario = $_SESSION['username'];
    $id_query  = "SELECT ID_Cliente FROM Clientes WHERE Username = '$usuario'";
    $rslt = mysqli_query($conectar, $id_query);

    $idClientearray =mysqli_fetch_array($rslt);
    $idCliente = $idClientearray["ID_Cliente"];

    $insertar = "INSERT INTO Tours (ID_Cliente,ID_Guia,FechaTour,CalidadTour,DuracionTour,CostoTour,LugarEncuentro,HoraEncuentro,ReviewCliente,ReviewGuia) 
    VALUES ('$idCliente','6','$fechaTour','5','$duracionTour','$costoTour','$lugarDeEncuentro',' $horaDeEncuentro','---','---');";
    $query = mysqli_query($conectar, $insertar);

    if($query){
        echo "<script>
        location.href = '../payment.php';
        </script>";
    }else{
        echo "<script>
        location.href = '../reservation.php';
        </script>";
    }
  
?>