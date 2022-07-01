<?php
    require_once '../Class/Conector.php';
    require_once '../Class/Lista_Buscador.php';
    $id = $_GET['id_pais'];

    $Pais = new Lista_Buscador();

    $resultado = $Pais->delete_pais($id);
    if($resultado == 1){
        header("location:../view/paises.php");
    }else{
        echo $resultado;
    }
?>