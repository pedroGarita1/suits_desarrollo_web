<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "./app/dependencias.php";?>
    <title>Document</title>
</head>
<body class="cuerpo">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center"><h1>MAPA MUNDO</h1></div>
            <div class="col-md-12 mt-5">
                <?php 
                    require_once './view/continentes_vectorizados.php';
                    require_once './view/modal.php';
                ?>
            </div>
        </div>
    </div>
</body>
</html>