<?php
    class Direccion extends Conector{
        public function listar_direcciones_personas(){
            $conexion = parent::conexion();
            $consulta = "SELECT * FROM direcciones.v_personas_direcciones";
            $resultado = mysqli_query($conexion, $consulta);
            $respuesta = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
            return $respuesta;
        }
    }
?>