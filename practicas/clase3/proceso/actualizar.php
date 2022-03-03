<?php

    require_once "../app/conector.php";
    require_once "../class/Visitas.php";

    $id = $_POST['id'];
    $ip_client = $_POST['ip_client'];
    $navegador = $_POST['navegador'];
    $datos = array($id, $ip_client, $navegador);


    $Vistas = new Visitas();
    if($Vistas->editar_registro($datos)==1){
		header("location:../view/imprecion_visitas.php");
	}else{
		echo "Fallo al eliminar";
	}

?>