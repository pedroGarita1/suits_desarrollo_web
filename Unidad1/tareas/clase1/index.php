<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "config/librerias.php"?>
    <title>Document</title>
</head>
<body class="background">
    <div class="container">
        <div class="row mt-4 justify-content-around">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Indice de masa Corporal</h5>
                        <hr>
                        <p class="card-text">
                            <form action="model/model_formulario.php" method="POST">
                                <label for="">Peso</label>
                                <input type="text" name="peso" id="peso" class="form-control">
                                <br>
                                <label for="">Altura en mts</label>
                                <input type="text" name="altura" id="altura" class="form-control">
                                <div class="col-md-12 text-center mt-4">
                                    <button class="btn btn-primary" >Calcular</button>
                                </div>
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>