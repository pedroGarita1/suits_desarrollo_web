<?php
    require_once "../app/conector.php";
    require_once "../class/Visitas.php";
    $ip = $_SERVER['REMOTE_ADDR'];
    $navegador = $_SERVER['HTTP_USER_AGENT'];
    $visitas = new Visitas();

    return $visitas_pagina = $visitas->datos_visitas($ip,$navegador);

?>