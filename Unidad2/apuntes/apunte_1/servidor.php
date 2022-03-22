<?php
    session_start();
    echo $_SESSION['username'];
    echo "<br>";
    echo $_SESSION['rolUsuario'];
    session_destroy();
    // unset($_SESSION['username']);
?>
<hr>
<a href="index.php">Inicio</a>