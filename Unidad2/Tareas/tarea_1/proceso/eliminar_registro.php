<?php
    require_once "../app/conector.php";
    require_once "../class/Personas.php";
    $Personas = new Personas();
    $id = $_POST['id'];
    $nombre_img = $Personas->obtener_ruta_archivo_eliminar($id);

    $ruta_eliminar = $nombre_img;
    if(unlink($ruta_eliminar)){
        echo $Personas->eliminar_registro($id);
        header("location:../index.php");
    }else{
        echo "fallo al insertar el registro";
    }
?>