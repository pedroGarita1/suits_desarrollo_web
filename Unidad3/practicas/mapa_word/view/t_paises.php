<?php
    require_once '../app/dependencias1.php';
    require_once '../Class/Conector.php';
    require_once '../Class/Lista_Buscador.php';
    $id_continentes = $_GET['id'];
    $consulta = "SELECT nombre_paises, url_imagen, descripcion_paises FROM t_paises WHERE fk_continentes = '$id_continentes'";
    $Buscador = new Lista_Buscador();
    $datos = $Buscador->mostrar_datos($consulta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises</title>
</head>
<body class="cuerpo2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 text-center">
                <a class="btn btn-outline-danger"  href="../index.php">Mapa Mundo</a>
            </div>
            <div class="col-md-12 mt-5">
                <h1>PAISES REGISTRADOS</h1>
                <table id="t_paises" class="table table-dark">
                    <thead>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Bandera</th>
                    </thead>
                    <tbody>
                        <?php foreach($datos AS $mostrar):?>
                        <tr>
                            <td><?= $mostrar['nombre_paises']?></td>
                            <td><?= $mostrar['descripcion_paises']?></td>
                            <td class="text-center">
                                <img class="img-thumbnail" src="<?= $mostrar['url_imagen']?>" alt="" style="width: 150px; height: 100px; object-fit:cover;">
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<script src="../controller/controlador_dataTable.js"></script>