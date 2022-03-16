<?php
    require_once "../app/conector.php";
    require_once "../class/Personas.php";
    $Personas = new Personas();
    $id = $_POST['id'];

    echo $Personas->obtener_ruta_archivo($id);
?>