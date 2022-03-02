<?php

    require_once "Imc.php";

    $peso = $_POST['peso'];
    $altura = $_POST ['altura'];

    $obj = new Imc();
    echo $obj->calcularImc($peso, $altura);

?>