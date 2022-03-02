<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Criptomonedas - MX</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-around mt-4">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">CRIPTOMONEDAS</h5>
                        <p class="card-text">
                        <form action="model/servidor.php" method="post">
                            <select name="opciones" id="" class="form-select">
                                <option value="">SELECCIONA UNA CRIPTO</option>
                                <option value="1">bitcoin</option>
                                <option value="2">XRP</option>
                                <option value="3">BAT</option>
                            </select>
                            <label for="">Cantidad a gastar en MXN</label>
                            <input type="text" class="form-control" name="cantidad">
                            <button class="btn btn-primary mt-4">Calcular</button>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>