<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php
    
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = $peso / ($altura * $altura);
    if($imc <18.5){
        ?>
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">INSUFICIENCIA PONDERAL</h5>
                            <hr>
                            <p class="card-text">
                                <div class="col-md-12 text-center mt-4">
                                    <a href="../index.php" class="btn btn-success">REGRESAR</a>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }elseif($imc > 18.5 && $imc < 24.9){
?>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">PESO NORMAL</h5>
                        <hr>
                        <p class="card-text">
                            <div class="col-md-12 text-center mt-4">
                                <a href="../index.php" class="btn btn-success">REGRESAR</a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }elseif($imc > 25 && $imc < 29.9){
?>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">SOBREPESO</h5>
                        <hr>
                        <p class="card-text">
                            <div class="col-md-12 text-center mt-4">
                                <a href="../index.php" class="btn btn-primary">REGRESAR</a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }elseif($imc > 29.9 && $imc < 34.9){
        ?>
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">OBESIDAD GRADO I</h5>
                            <hr>
                            <p class="card-text">
                                <div class="col-md-12 text-center mt-4">
                                    <a href="../index.php" class="btn btn-warning">REGRESAR</a>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }elseif($imc > 35 && $imc < 39.9){
        ?>
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">OBESIDAD GRADO II</h5>
                            <hr>
                            <p class="card-text">
                                <div class="col-md-12 text-center mt-4">
                                    <a href="../index.php" class="btn btn-danger">REGRESAR</a>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }elseif($imc >40){
        ?>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">OBESIDAD GRADO III</h5>
                        <hr>
                        <p class="card-text">
                            <div class="col-md-12 text-center mt-4">
                                <a href="../index.php" class="btn btn-dark text-white">REGRESAR</a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>