<?php

    $cripto =$_POST['opciones'];
    $cantidad = $_POST['cantidad'];
    switch($cripto){
        case "1":
            $bitcoin = 1000000;
            echo "La cantidad de bitcoin que obtrendrias es : " . ($cantidad / $bitcoin);
            echo "<br>";
            echo "<a href='../index.php'>regresar</a>";
            break;
        case "2" :
            $xrp = 20;
            echo "La cantidad de XRP que obtendrias es : " .($cantidad / $xrp);
            echo "<br>";
            echo "<a href='../index.php'>regresar</a>";
            break;
        case "3" :
            $bat = 18;
            echo "La cantidad de BAT que obtendrias es : " .($cantidad / $bat);
            echo "<br>";
            echo "<a href='../index.php'>regresar</a>";
            break;
        default :
            echo "no seleccionaste una moneda";
            echo "<br>";
            echo "<a href='../index.php'>regresar</a>";
    }
?>
