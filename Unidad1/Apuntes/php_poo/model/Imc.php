<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<?php

    class Imc {
        public function calcularImc ($peso, $altura){
            $imc = $peso / ($altura * $altura);
            return self::rangoImc($imc) ;
        }
        public static function rangoImc ($imc){
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
                                            <h5><?= "Tu masa corporal es : " . $imc?></h5>
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
                                        <h5><?= "Tu masa corporal es : " . $imc?></h5>
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
                                        <h5><?= "Tu masa corporal es : " . $imc?></h5>
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
                                            <h5><?= "Tu masa corporal es : " . $imc?></h5>
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
                                            <h5><?= "Tu masa corporal es : " . $imc?></h5>
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
                                        <h5><?= "Tu masa corporal es : " . $imc?></h5>
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
        }
    }
?>