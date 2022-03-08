<?php
    require_once "../conexion.php";
    $obj = new Conectar();
    $conexion = $obj->conexion();
    $id = $_GET['id'];
    $sql = "SELECT nombre,semestre,creditos,carrera from t_materias where id='$id'";
    $result = mysqli_query($conexion,$sql);
    $ver = mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action="actualizar.php" method="post">
                    <input type="text" name="id" hidden="" value="<?php echo $id ?>">
                    <label for="">Nombre</label>
                    <p></p>
                    <input type="text" name="txtnombre" value="<?php echo $ver[0] ?>">
                    <p></p>
                    <label for="">Creditos</label>
                    <p></p>
                    <input type="text" name="txtcreditos" value="<?php echo $ver[1] ?>">
                    <p></p>
                    <label for="">Semestre</label>
                    <select name="opcion" id="opcion" class="form-select">
                        <option selected value="<?php echo $ver[2]?>"><?php echo $ver[2]?></option>
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
                        <option selected value="<?php echo $ver[3]?>"><?php echo $ver[3]?></option>
                        <option value="1">Ingenieria en sistemas</option>
                        <option value="2">Gestion empresarial</option>
                        <option value="3">Ingenieria Industrial</option>
                    </select>
                    <p></p>
                    <button>editar</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>