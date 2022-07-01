<?php
    require_once '../app/dependencias.php';
    require_once '../Class/Conector.php';
    require_once '../Class/Lista_Buscador.php';
    $lista_select2 = $_GET['lista_select2'];
    $consulta = "SELECT nombre_paises, url_imagen, descripcion_paises FROM t_paises WHERE fk_continentes = '$lista_select2'";
    $Buscador = new Lista_Buscador();
    $datos = $Buscador->mostrar_datos($consulta);
?>
<?php require_once './nav_view.php';?>
<div class="container">
    <div class="row">
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