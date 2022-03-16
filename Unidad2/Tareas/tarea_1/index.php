<?php
  require_once "app/conector.php";
  require_once "class/Personas.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once "app/librerias.php";?>
  <title>Registro Alumnos</title>
</head>
<body>
  <div class="container">
    <div class="row justify-content-around mt-5">
      <img src="" alt="">
      <?php 
        require_once "view/form_estudiantes.php";
      ?>
      <div class="mt-5">
        <?php
          require_once "view/tabla_crud.php";
        ?>
      </div>
    </div>
  </div>
</body>
<script src="controller/img.js"></script>
</html>