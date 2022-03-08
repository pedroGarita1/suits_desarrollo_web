<?php
    require_once "conexion.php";
    require_once "metodosCrud.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action="procesos/insertar.php" method="post">
                    <label for="">Nombre</label>
                    <p></p>
                    <input type="text" name="txtnombre">
                    <p></p>
                    <label for="">Creditos</label>
                    <p></p>
                    <input type="text" name="txtcreditos">
                    <p></p>
                    <label for="">Semestre</label>
                    <select name="opcion" id="opcion" class="form-select">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                    <p></p>
                    <label for="">Carrera</label>
                    <select name="opcionCarrera" id="opcion" class="form-select">
                        <option value="1">Ingenieria en sistemas</option>
                        <option value="2">Gestion empresarial</option>
                        <option value="3">Ingenieria Industrial</option>
                    </select>
                    <p></p>
                    <button>agregar</button>
                </form>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table style="border-collapse: collapse;" border="1">
                    <tr>
                        <td>Nombre</td>
                        <td>Creditos</td>
                        <td>Semestre</td>
                        <td>Carrera</td>
                        <td>Actualizar</td>
                        <td>Eliminar</td>
                    </tr>

                    <?php
            $obj = new metodos();
            $sql = "SELECT id,nombre,semestre,creditos,carrera from t_materias";
            $datos = $obj->mostrarDatos($sql);

            foreach ($datos as $key){
        ?>

                    <tr>
                        <td><?php echo $key['nombre']; ?></td>
                        <td><?php echo $key['semestre']; ?></td>
                        <td><?php echo $key['creditos']; ?></td>
                        <td><?php echo $key['carrera']; ?></td>
                        <td>
                            <a href="procesos/editar.php?id=<?php echo $key['id'] ?>">Editar</a>
                        </td>
                        <td>
                            <a href="procesos/eliminar.php?id=<?php echo $key['id'] ?>">Eliminar</a>
                        </td>
                    </tr>

                    <?php
            }
        ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>