<?php
    require_once '../app/dependencias.php';
    require_once './nav_view.php';
    require_once '../app/dependencias.php';
    require_once '../Class/Conector.php';
    require_once '../Class/Lista_Buscador.php';
    $C = new Conector;
    $conexion = $C->conexion();
    $id = $_GET['id_pais'];
    $consulta = "SELECT id_continentes,nombre_continente FROM t_cat_continentes";
    $Buscador = new Lista_Buscador();
    $datos = $Buscador->mostrar_datos($consulta);
    $consulta2 = "SELECT fk_continentes, nombre_paises, url_imagen, descripcion_paises FROM t_paises WHERE id_paises = '$id'";
    $resultado = mysqli_query($conexion, $consulta2);
    $datos = mysqli_fetch_row($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pais</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card" style="border-radius: 25px;">
                <div class="card-body">
                    <h5 class="card-title">REGISTRAR PAIS</h5>
                    <p class="card-text">
                        <form action="../procesos/editar_pais.php" method="POST">
                            <input type="text" hidden="" value="<?php echo $id ?>" name="id">
                            <label for="floatingSelect">Continentes</label>
                            <label for=""></label>
                            <?php if($datos[0] == 1){?>
                                <select id="lista_select2" name="lista_select2" class="form-select mb-3">
                                    <option selected value="1">America</option>
                                    <option value="2">Europa</option>
                                    <option value="3">Africa</option>
                                    <option value="4">Asia</option>
                                    <option value="5">Oseania</option>
                                </select>
                            <?php }elseif($datos[0] == 2){?>
                                <select id="lista_select2" name="lista_select2" class="form-select mb-3">
                                    <option value="1">America</option>
                                    <option selected value="2">Europa</option>
                                    <option value="3">Africa</option>
                                    <option value="4">Asia</option>
                                    <option value="5">Oseania</option>
                                </select>
                            <?php }elseif($datos[0] == 3){?>
                                <select id="lista_select2" name="lista_select2" class="form-select mb-3">
                                    <option value="1">America</option>
                                    <option value="2">Europa</option>
                                    <option selected value="3">Africa</option>
                                    <option value="4">Asia</option>
                                    <option value="5">Oseania</option>
                                </select>
                            <?php } elseif($datos[0] == 4){?>
                                <select id="lista_select2" name="lista_select2" class="form-select mb-3">
                                    <option value="1">America</option>
                                    <option value="2">Europa</option>
                                    <option value="3">Africa</option>
                                    <option selected value="4">Asia</option>
                                    <option value="5">Oseania</option>
                                </select>
                            <?php } elseif($datos[0] == 5){?>
                                <select id="lista_select2" name="lista_select2" class="form-select mb-3">
                                    <option value="1">America</option>
                                    <option value="2">Europa</option>
                                    <option value="3">Africa</option>
                                    <option value="4">Asia</option>
                                    <option selected value="5">Oseania</option>
                                </select>
                            <?php }?>
                            <input type="text" value="<?= $datos[1]?>" class="form-control mb-3" name="descripcion" placeholder="Nombre Pais">
                            <input type="text" value="<?= $datos[2]?>" class="form-control mb-3" name="descripcion" placeholder="Descripcion del pais">
                            <input type="text" value="<?= $datos[3]?>" class="form-control mb-3" name="bandera" placeholder="Bandera del pais">
                            <div class="col-md-12">
                                <button class="btn btn-lg btn-primary mt-3">EDITAR</button>
                            </div>
                            
                            <select id="lista_select2" name="lista_select2" hidden class="form-select mb-3">
                            <?php foreach($datos AS $mostrar):?>
                                    <option value="<?= $mostrar['id_continentes']?>"><?= $mostrar['nombre_continente']?></option>
                            <?php endforeach;?>
                            </select>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../controller/controlador_select2.js"></script>
</body>
</html>