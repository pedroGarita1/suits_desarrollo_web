<?php
    require_once "../conexion.php";
    require_once "../metodosCrud.php";

    $nombre = $_POST['txtnombre'];
    $creditos = $_POST['txtcreditos'];
    $opcionSemestre = $_POST['opcion'];
    $opcionCarrera = $_POST['opcionCarrera'];
    $id=$_POST['id'];

    if($opcionCarrera ==1){
        $carrera = "Ingenieria en sistemas";
        $datos = array(
            $nombre,
            $opcionSemestre,
            $creditos,
            $carrera,
            $id
            
        );
    }else if($opcionCarrera == 2){
        $carrera = "Gestion empresarial";
        $datos = array(
            $nombre,
            $opcionSemestre,
            $creditos,
            $carrera,
            $id
            
        );
    }else{
        $carrera = "Ingenieria industrial";
        $datos = array(
            $nombre,
            $opcionSemestre,
            $creditos,
            $carrera,
            $id
            
        );
    }

    $obj = new metodos();
    $respuesta = $obj->actualizaDatosNombre($datos);
    if ($respuesta==1) {
       header("location:../index.php");
    } else {
        echo "fallo al actualizar";
    }
    
?>