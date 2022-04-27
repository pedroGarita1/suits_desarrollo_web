<?php 
    require_once "./Conexion.php";
    require_once "./Estudiantes.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <title>Data Table</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col">
                <h4 class="mb-4">Tabla Estudiantes</h4>
                <table id="T_estudiantes" class="table">
                    <thead>
                        <tr>
                            <th>nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php  
					$objeto = new Estudiantes();
					$sql="SELECT * FROM t_estudiantes";
					$datos=$objeto->mostrar_registro($sql);
					foreach ($datos as $key) {
				?>
                        <tr>
                            <td><?= $key['nombre']?></td>
                            <td><?= $key['apellidoP']?></td>
                            <td><?= $key['apellidoM']?></td>
                        </tr>
                <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="estudiantes.js"></script>
</body>
</html>