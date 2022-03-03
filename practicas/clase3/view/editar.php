<?php 
    require_once "../app/libreria2.php";
    require_once "../app/conector.php";
    $conectar = new Conector();
    $conexion = $conectar->conexion();
    $id = $_GET['id'];
    $sql = "SELECT * FROM vistas WHERE id = '$id'";
    $result=mysqli_query($conexion,$sql);
	$ver=mysqli_fetch_row($result);

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
    <?php //require_once "menu1.php";?>
    <div class="container">
        <div class="row  mt-5 justify-content-around">
            <div class="col-md-4 mt-5">
                <div class="card" style="width: 22rem;">
                    <div class="card-body">
                        <h5 class="card-title">EDITAR REGISTRO</h5>
                        <p class="card-text">
                            <form action="../proceso/actualizar.php" method="POST">
                                <label for="">VISTA</label>
                                <input type="text" name="id" value="<?= $id?>" class="form-control" disabled>
                                <label for="">IP USUARIO</label>
                                <input type="text" name="ip_client" value="<?= $ver[1]?>" class="form-control">
                                <label for="">IP USUARIO</label>
                                <input type="text" name="navegador" value="<?= $ver[2]?>" class="form-control">
                                <div class="col-md-12 text-center mt-4">
                                    <button class="btn btn-success">EDITAR</button>
                                </div>
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>