<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <!-- Crear una tabla con al menos 5 registros de archivos, por ejemplo PDF, JPG, GIF, MP4, PNG, solo los archivos
    que se puedan ver en un navegador web.
    Crear un link que cuando le de click me mande a una misma pagina , pero me muestre el archivo que acabo de seleccionar -->
    <div class="container">
        <div class="row justify-content-around mt-4">
            <div class="col-md-4">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Tipo de archivo</th>
                        <th scope="col">Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">IMAGEN PNG</td>
                        <td scope="row">
                            <a href="model/archivos.php?opcion=1" class="btn btn-warning">Mostrar</a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">IMAGEN JPG</td>
                        <td scope="row">
                            <a href="model/archivos.php?opcion=2" class="btn btn-warning">Mostrar</a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">IMAGEN GIF</td>
                        <td scope="row">
                            <a href="model/archivos.php?opcion=3" class="btn btn-warning">Mostrar</a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">ARCHIVO PDF</td>
                        <td scope="row">
                            <a href="model/archivos.php?opcion=4" class="btn btn-warning">Mostrar</a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">ARCHIVO MP4</td>
                        <td scope="row">
                            <a href="model/archivos.php?opcion=5" class="btn btn-warning">Mostrar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>