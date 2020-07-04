<?php

    require 'conexion.php';
    
    $descripcion  = $_POST['descripcion'];
    $especialidades  = $_POST['especialidades'];
    $idiomas  = $_POST['idiomas'];

    $qstatment1  = "SELECT COUNT(*) FROM GuiaInfoGen;";
    $rslt = mysqli_query($conectar, $qstatment1);

    $rsltArray =mysqli_fetch_array($rslt);
    $guidesNumber = $rsltArray["COUNT(*)"];

    $qstatment = "UPDATE GuiaInfoGen SET Descripcion = '$descripcion',Especialidades = '$especialidades',Idiomas = '$idiomas' WHERE ID_Guia =  '$guidesNumber';";
    $query = mysqli_query($conectar, $qstatment);

    if($query){
        echo "<script>
        location.href = '../login.php';
        </script>";
    }else{
        echo "<script> alert('Porfavor vuelva a intentarlo');
        location.href = '../registerGuideDetails.php';
        </script>";
    }

?>