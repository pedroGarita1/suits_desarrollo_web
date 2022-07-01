<?php

    $valores = array(
        20,30,50
    );
    $labels = array(
        "Parte 1",
        "Parte 2",
        "Parte 3"
    );
    $resultado = array($valores,$labels);
    
    @$datos = json_encode($resultado);
    print_r($datos);
?>