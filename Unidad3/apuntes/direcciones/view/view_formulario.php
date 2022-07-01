<div class="col-md-12">
    <h3 class="text-center"></h3>
    <div class="card" style="background-color: #e9ecef; border-radius: 30px;">
        <div class="card-body">
            <h3 class="card-title text-center">Direcciones Personales</h3>
            <p class="card-text">
            <form action="procesos/agregar_direcciones.php" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control mb-3" name="paterno" placeholder="Paterno" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control mb-3" name="materno" placeholder="materno" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control mb-3" name="calle" placeholder="Calle" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control mb-3" name="colonia" placeholder="Colonia" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control mb-3" name="delegacion" placeholder="Delegacion" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control mb-3" name="estado" placeholder="Estado" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control mb-3" name="cp" placeholder="CP" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn btn-primary text-end">Guardar</button>
                </div>
            </form>
            </p>
        </div>
    </div>
</div>