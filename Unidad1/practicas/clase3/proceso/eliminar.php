<?php

    require_once "../app/conector.php";
    require_once "../class/Visitas.php";

    $id = $_GET['id'];

    $Vistas = new Visitas();

    if($Vistas->eliminar_registro($id)==1){
		header("location:../view/imprecion_visitas.php");
	}else{
		echo "Fallo al eliminar";
	}

?>