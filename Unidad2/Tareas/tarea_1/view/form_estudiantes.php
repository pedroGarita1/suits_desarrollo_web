<div class="col-md-10">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Información personal de estudiante de sistemas</h5>
            <hr>
            <p class="card-text">
                <form action="proceso/insertar_registro.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
                            <input type="text" class="form-control mt-4" placeholder="Matricula" name="matricula" required>
                            <select name="sexo" id="" class="form-select mt-4" required>
                                <option value="0">Sexo</option>
                                <option value="hombre">Hombre</option>
                                <option value="mujer">Mujer</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Apellido Paterno" name="paterno" required>
                            <input type="date" class="form-control mt-4" name="nacido" required>
                            <input type="file" class="form-control mt-4" name="imagen" accept=".jpg, .jpeg, .png" required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Apellido Materno" name="materno" required>
                            <input type="text" class="form-control mt-4" placeholder="Especialidad" name="especialidad" required>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-4">AGREGAR</button>
                </form>
            </p>
        </div>
    </div>
</div>