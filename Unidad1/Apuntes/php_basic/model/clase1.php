<?php

    //Comentario 1
    /**
     * Comentarios largos
     */
    #Comentrios en una linea

    //tipo de datos
    $variable1  = "Hola";
    $variabe2 = 2;
    $variable3 = 1.5;
    $variable4 = true;
    $variable5 = 'h';
    echo "<h3>Imprecion en PHP<h4>";
    //imprecion de variable
    echo $variable1;
    //estructuras de control
    echo "<hr>";
    echo "<h3>ESTRUCTURAS DE CONTROL</h3>";
    echo "<h4>Sentencia IF</h4>";
    
    /**
     * Evalua una condicion la cual si es verdadera se ejecutara
     */
    $variable1 = 5;
    if($variable1 < 10){
        echo "Se ejecuto el if\n";
    }

    echo "<hr>";
    echo "<h4>Sentencia IF ELSE</h4>";
    /**
     * Si se cumple la condicion se ejecuta el if de otro modo se ejecuta el else
     */
    if($variable1 <5){
        echo "Se ejecuto el if";
    }else{
        echo "Se ejecuto el else";
    }

    echo "<hr>";
    echo "<h4>Sentencia IF ELSE IF </h4>";
    /** 
     * Cuando se quiere evaluar multiple ves un mismo valor
    */
    $color = "rojo";
    if($color == "amarillo"){
        echo "El color es amarillo";
    }elseif($color == "rojo"){
        echo "El color es rojo";
    }else{
        echo "El color es diferente";
    }

    echo "<hr>";
    echo "<h4>Sentencia SWITCH</h4>";
    /**
     * Se conoce como una estructura de control por casos
     */
    $color1 = "morado";
    switch($color1){
        case "rojo" :
            echo "El color es rojo";
            break;
        case "amarillo" :
            echo "El color es rojo";
            break;
        case "morado" :
            echo "El color es rojo";
            break;
        default :
            echo "No es un color";
    }

    echo "<hr>";
    echo "<h4>Ciclo WHILE </h4>";
    /**
     * Se ejecutara while, siempre y cuando se cumpla la sentencia
     */
    $contador =5;
    while($contador >=0){
        echo $contador;
        $contador --;
    }

    echo "<hr>";
    echo "<h4>Ciclo FOR<h4>";
    $contador1 = 5;
    for($i=0;$i<$contador1; $i++){
        echo $i;
    }

    echo "<hr>";
    echo "<h3>ARREGLOS</h3>";
    echo "<h4>Sentencia IF</h4>";
    $arreglo = array(
        "nombre" => "pedro",
        "apellido" => "garita",
        "fechaNacimiento" => "15-06-2001",
        "sexo" => "masculino"
    );
    print_r($arreglo);

    echo "<hr>";
    echo "<h4>Imprecion de un arreglo<h4>";
    $arreglo1 = array("hola","pedro","10/10");
    for($i=0; $i<count($arreglo1); $i++){
        echo $arreglo1[$i] . " | "."\n";
    }
?>