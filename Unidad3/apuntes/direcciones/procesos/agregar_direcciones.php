<?php
    require_once '../app/Conector.php';
    require_once '../Class/Direccion.php';
    $Direc = new Direccion();

    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $nombre = $_POST['nombre'];
    $calle = $_POST['calle'];
    $colonia = $_POST['delegacion'];
    $delegacion = $_POST['delegacion'];
    $estado = $_POST['estado'];
    $cp = $_POST['cp'];

    $datos_direccion = array($calle, $colonia, $delegacion, $estado, $cp);
    $datos_usuario = array($nombre, $paterno, $materno);

    $respuesta_direc = $Direc->ingresar_direccion($datos_direccion);
    $respuesta_datos = $Direc->ingresar_datos($datos_usuario);

    if($respuesta_direc == 1){
        if($respuesta_datos == 1){
            header("location:../index.php");
        }else{
            echo $respuesta_datos;
        }
    }else{
        echo $respuesta_direc;
    }
?>