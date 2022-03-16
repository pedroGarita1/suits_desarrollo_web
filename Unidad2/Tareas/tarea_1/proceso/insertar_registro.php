<?php
    require_once "../app/conector.php";
    require_once "../class/Personas.php";

    $Personas = new Personas();

    $origen = $_FILES['imagen']['tmp_name'];
    $destino = "../archivos/" . $_FILES['imagen']['name'];
    $respuesta = move_uploaded_file($origen,$destino);

    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $matricula = $_POST['matricula'];
    $nacido = $_POST['nacido'];
    $especialidad = $_POST['especialidad'];
    $sexo = $_POST['sexo'];
    $nombre_img = $_FILES['imagen']['name'];
    $ruta_img = $destino;
    $tipo_img = $_FILES['imagen']['type'];

    $datos = array($nombre,$paterno,$materno,$matricula,$nacido,$especialidad,$sexo,$nombre_img,$ruta_img,$tipo_img);

    if($Personas->insetar_registro($datos) ==1){
        header("location:../index.php");
    }else{
        echo "fallo al insertar el registro";
    }
?>