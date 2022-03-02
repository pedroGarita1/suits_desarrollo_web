<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php
    $opcion = $_GET['opcion'];
    switch($opcion){
        case 1 :
?>
            <div class="container">
                <div class="row justify-content-around mt-4">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="../archivos/opcion1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Opcion 1 - Imagen</h5>
                                <div class="col-md-12 text-center mt-4">
                                    <a href="../index.php" class="btn btn-primary">Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
            break;
        case 2 :
?>
            <div class="container">
                <div class="row justify-content-around mt-4">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="../archivos/opcion2.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Opcion 2 - JPG</h5>
                                <div class="col-md-12 text-center mt-4">
                                    <a href="../index.php" class="btn btn-primary">Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
            break;
        case 3 :
?>
            <div class="container">
                <div class="row justify-content-around mt-4">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="../archivos/opcion3.gif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Opcion 3 - GIF</h5>
                                <div class="col-md-12 text-center mt-4">
                                    <a href="../index.php" class="btn btn-primary">Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
            break;
        case 4 :
?>
            <div class="container">
                <div class="row justify-content-around mt-4">
                    <div class="col-md-12">
                        <div class="card" style="width: 70rem;">
                        <iframe src="../archivos/opcion4.pdf" style="width:100%; height:350px;" frameborder="0" ></iframe>
                            <div class="card-body">
                                <h5 class="card-title">Opcion 4 - PDF</h5>
                                <div class="col-md-12 text-center mt-4">
                                    <a href="../index.php" class="btn btn-primary">Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
            break;
        case 5 :
?>
            <div class="container">
                <div class="row justify-content-around mt-4">
                    <div class="col-md-6">
                        <div class="card" style="width: 35rem;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/I3LFTGTIWoI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <h5 class="card-title">Opcion 1 - Imagen</h5>
                                <div class="col-md-12 text-center mt-4">
                                    <a href="../index.php" class="btn btn-primary">Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
            break; 
    }
?>
