<?php
    require_once '../Class/Conector.php';
    require_once '../Class/Lista_Buscador.php';

    $nombre = $_POST['nombre_pais'];
    $descripcion = $_POST['descripcion'];
    $url_bandera = $_POST['bandera'];
    $continente = $_POST['lista_select2'];
    
    $datos = array($nombre,$descripcion,$url_bandera,$continente);

    $Pais = new Lista_Buscador();

    $resultado = $Pais->registrar_pais($datos);
    if($resultado == 1){
        header("location:../index.php");
    }else{
        echo $resultado;
    }

?>