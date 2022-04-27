<?php

    class Estudiantes{
        public function mostrar_registro($sql){
            $c = new Conector();
			$conexion = $c->conexion();
			$result = mysqli_query($conexion,$sql);
			return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
    }

?>