<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'app/dependencias.php';?>
    <title>Document</title>
</head>
<body>
    <?php require_once 'view/nav.php';?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 text-ceter">
                <?php require_once 'view/select2.php'?>
            </div>
            <div class="col-md-12-mt3">
                <div class="card" style="border-radius: 25px;">
                    <div class="card-body">
                        <h5 class="card-title text-center">MAPA DEL MUNDO</h5>
                        <p class="card-text">
                            <div class="col-md-12 text-center">
                            <?php require_once 'view/mapa_word.php'?>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>