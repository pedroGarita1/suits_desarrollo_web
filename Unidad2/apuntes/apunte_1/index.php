<?php
    session_start();
    echo $_SESSION['username'] = "pedro";
    echo "<br>";
    $_SESSION["rol_usuario"]["rol1"] = "admin";
    $_SESSION["rol_usuario"]["rol2"] = "ciente";
?>
<hr>
<a href="servidor.php">Servidor</a>