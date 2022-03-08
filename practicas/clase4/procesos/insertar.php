<?php

    require_once "../conexion.php";
    require_once "../metodosCrud.php";
    $nombre = $_POST['txtnombre'];
    $creditos = $_POST['txtcreditos'];
    $opcionSemestre = $_POST['opcion'];
    $opcionCarrera = $_POST['opcionCarrera'];
    if($opcionCarrera ==1){
        $carrera = "Ingenieria en sistemas";
        $datos = array(
            $nombre,
            $opcionSemestre,
            $creditos,
            $carrera
            
        );
    }else if($opcionCarrera == 2){
        $carrera = "Gestion empresarial";
        $datos = array(
            $nombre,
            $opcionSemestre,
            $creditos,
            $carrera
            
        );
    }else{
        $carrera = "Ingenieria industrial";
        $datos = array(
            $nombre,
            $opcionSemestre,
            $creditos,
            $carrera
            
        );
    }

    $obj = new metodos();

    if ($obj->insertarDatosNombre($datos)==1) {
        header("location:../index.php");
    }else {
        echo "fallo agregar";
    }

?>