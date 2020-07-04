<?php

    require 'conexion.php';
    /**Rquiere lo que tiene conexion para utilizar la variable conexion y conectarnos a la BD**/


    session_start(); 
    /**Comenzar sesion**/
    $username = $_POST['usuario']; 
    /**Recibir usuario que viene con el metodo post y el nombre usuario del archivo de login.php**/
    $clave = $_POST['clave']; 
    /**Recibir una clave que viene con el metodo post y el nombre clave**/

    $q = "SELECT COUNT(*) AS contar FROM Clientes WHERE username = '$username' AND contraseña = '$clave'";
    /**Nuestra variable almacenara la query, esta query verifica cuantos usuarios y claves iguales a las ingresadas ya existen en la BD**/
    $consulta = mysqli_query($conectar,$q);
    /**Realizamos la query a la conexion que se hizo a la BD**/
    $array = mysqli_fetch_array($consulta);
    /**Guardar datos de la consulta en un array**/

    if($array['contar']>0){
        $_SESSION['username'] = $username; 
        /**Guardamos el nombre del usuario en el username de la sesion**/
        header("location:../index.php");
        /**Nos rederijimos a la pagina index**/
    }else{
        echo "Datos incorrectos";
        header("location:../login.php");
        /**No existe tal usuario**/
    }
?>