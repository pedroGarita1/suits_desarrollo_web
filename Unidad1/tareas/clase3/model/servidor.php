<?php

    require_once "Monedas.php";

    $opciones = $_POST['opciones'];
    $cantidad = $_POST['cantidad'];

    $obj = new Monedas();
    echo $obj->tipo_monedas($cantidad, $opciones);

?>