<?php
    require_once '../app/dependencias.php';
    require_once './nav_view.php';
    require_once '../app/dependencias.php';
    require_once '../Class/Conector.php';
    require_once '../Class/Lista_Buscador.php';
    $consulta = "SELECT id_continentes,nombre_continente FROM t_cat_continentes";
    $Buscador = new Lista_Buscador();
    $datos = $Buscador->mostrar_datos($consulta);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card" style="border-radius: 25px;">
                <div class="card-body">
                    <h5 class="card-title">REGISTRAR PAIS</h5>
                    <p class="card-text">
                        <form action="../procesos/registrar_pais.php" method="POST">
                            <input type="text" class="form-control mb-3" name="nombre_pais" placeholder="Nombre del pais">
                            <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion del pais">
                            <input type="text" class="form-control mb-3" name="bandera" placeholder="Bandera del pais">
                            <label for="floatingSelect">Continentes</label>
                            <select id="lista_select2" name="lista_select2" class="form-select mb-3">
                            <?php foreach($datos AS $mostrar):?>
                                    <option value="<?= $mostrar['id_continentes']?>"><?= $mostrar['nombre_continente']?></option>
                            <?php endforeach;?>
                            </select>
                            <div class="col-md-12">
                                <button class="btn btn-lg btn-primary mt-3">REGISTRAR</button>
                            </div>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../controller/controlador_select2.js"></script>