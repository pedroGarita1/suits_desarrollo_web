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
                    <h5 class="card-title">Calculadora Basica</h5>
                    <p class="card-text">
                        <form action="model/model_formulario.php" method="POST">
                            <label for="">Opcion</label>
                            <select name="opcion" id="opcion" class="form-select">
                                <option value="1">Suma</option>
                                <option value="2">Resta</option>
                                <option value="3">Multiplicacion</option>
                                <option value="4">Division</option>
                            </select>
                            <label for="">Valor 1</label>
                            <input type="text" name="valor1" id="valor1" class="form-control">
                            <label for="">Valor 2</label>
                            <input type="text" name="valor2" id="valor2" class="form-control">
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
</body>
</html>