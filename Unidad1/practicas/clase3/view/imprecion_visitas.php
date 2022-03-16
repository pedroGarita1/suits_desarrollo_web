<?php 
    require_once "../class/Visitas.php";
    require_once "menu1.php";
    require_once "../app/libreria2.php";
    require_once "../app/conector.php";
    require_once "../proceso/enlace.php";
    echo $visitas_pagina;
    $Conector = new Conector();
    $conexion = $Conector->conexion();
    $sql = "SELECT * FROM vistas";
?>
<div class="container">
    <div class="row justify-content-around mt-5">
        <div class="col-md-8">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="row">Vistas</th>
                        <th scope="row">IP Usuario</th>
                        <th scope="row">Navegador</th>
                        <th scope="row">Editar</th>
                        <th scope="row">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $mostrar = new Visitas();
                $datos = $mostrar->mostrar_datos($sql);
                    foreach($datos as $key){
                ?>
                    <tr>
                        <td><?= $key['id'];?></td>
                        <td><?= $key['ip_client'];?></td>
                        <td><?= $key['navegador'];?></td>
                        <td><a href="editar.php?id=<?= $key['id'];?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href="../proceso/eliminar.php?id=<?= $key['id'];?>" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></a></td>
                    </tr>
                <?php
                    }  
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
