<?php

    $host = "localhost";
    $user = "jrnavaco_dbuser";
    $password = "Navajita-9";
    $bd = "jrnavaco_mainDB";

    /**Realizamos conexcòna a nuestra BD con nuestro usuario default**/
    $conectar = mysqli_connect($host,$user,$password,$bd);

     /*Para saber si se realizo la conexcion conrrectamente */
    /*if($conectar){ 
        echo("conectado correctamente");
    }else{
        echo ("no se pudo conectar");
    }*/
    
?>