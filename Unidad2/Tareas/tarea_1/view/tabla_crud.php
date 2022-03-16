<?php
    $Personas = new Personas();
    $sql = "SELECT * FROM t_perfil";
    $datos = $Personas->mostrar_registro($sql);
    $fetcha_actual = date("y-m-d");
    $extencionesValidas = array('png','jpg','pdf');
?>
<div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Paterno</th>
                <th scope="col">Materno</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Matricula</th>
                <th scope="col">Especialidad</th>
                <th scope="col">Sexo</th>
                <th scope="col">Imagen de Perfil</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datos as $ver){
              $id = $ver['id']?>
            <tr>
                <td><?= $ver['paterno'];?></td>
                <td><?= $ver['materno'];?></td>
                <td><?= $ver['nombre'];?></td>
                <?php $edad = date_diff(date_create($ver['nacido']),date_create($fetcha_actual))?>
                <td><?= $edad->format('%y');?></td>
                <td><?= $ver['matricula'];?></td>
                <td><?= $ver['especialidad'];?></td>
                <td><?= $ver['sexo'];?></td>
                <td class="text-center">
                    <span class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#mostrar_img" onclick="obtener_id_img(<?= $id?>)">
                      <div id="img_obtenida"></div>
                    </span>
                </td>
                <td><a href="view/editar_registro.php?id=<?= $ver['id']?>"><i class="fa-solid fa-user-pen"></i></a></td>
                <td><a href="proceso/eliminar_registro.php?id=<?= $ver['id']?>"><i class="fa-solid fa-delete-left"></i></a></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="mostrar_img" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Imagen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="img_obtenida2"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>