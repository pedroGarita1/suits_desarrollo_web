<div class="col-md-12 mt-5 text-white">
    <table class="table table-dark table" id="t_direcciones">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Calle</th>
                <th>Colonia</th>
                <th>Delegacion</th>
                <th>Estado</th>
                <th>CP</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($datos AS $item):
        ?>
            <tr>
                <td><?= $item['nombrePersona']?></td>
                <td><?= $item['paterno']?></td>
                <td><?= $item['materno']?></td>
                <td><?= $item['calle']?></td>
                <td><?= $item['colonia']?></td>
                <td><?= $item['delegacion']?></td>
                <td><?= $item['estado']?></td>
                <td><?= $item['cp']?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>