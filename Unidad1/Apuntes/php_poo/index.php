<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php // require_once "model/model_index.php"?>
    <h2><center>CALCULO IMC</center></h2>
    ,<container>
        <div class="row justify-content-around">
            <div class="col-md-6 text-center">
                <form action="model/servidor.php" method="POST">
                    <label for="">Peso en Kg</label>
                    <input type="text" name="peso" class="form-control" placeholder="Escribe tu peso">
                    <br>
                    <label for="">Altura en Mts</label>
                    <input type="text"name="altura" class="form-control" placeholder="Escribe tu altura">
                    <br>
                    <button class="btn btn-primary">CALCULAR</button>
                </form>
            </div>
        </div>
    </container>
</body>
</html>