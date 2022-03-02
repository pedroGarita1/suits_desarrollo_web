<?php
    $select = $_POST['opcion'];
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    switch ($select){
        case "1" :
            echo "Tu suma es : " . $valor1 + $valor2;
            break;
        case "2" :
            echo "Tu resta es : " . $valor1 - $valor2;
            break;
        case "3" :
            echo "Tu multiplicacion es : " . $valor1 * $valor2;
            break;
        case "4" :
            echo "Tu division es : " . $valor1 / $valor2;
            break;
    }
?>