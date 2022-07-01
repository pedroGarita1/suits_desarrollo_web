<?php
    class Direccion extends Conector{
        public function listar_direcciones_personas(){
            $conexion = parent::conexion();
            $consulta = "SELECT * FROM direcciones.v_personas_direcciones";
            $resultado = mysqli_query($conexion, $consulta);
            $respuesta = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
            return $respuesta;
        }
        public function ingresar_direccion($datos){
            $conexion = parent::conexion();
            $insersion = "INSERT INTO t_direcciones(calle, colonia, delegacion, estado, codigo_postal) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";
            $respuesta = mysqli_query($conexion, $insersion);
            return $respuesta;
        }
        public function ingresar_datos($datos){
            $conexion = parent::conexion();
            $consulta = "SELECT id_direcciones FROM t_direcciones WHERE id_direcciones = (SELECT max(id_direcciones) FROM t_direcciones)";
            $resul_consulta = mysqli_query($conexion,$consulta);
            $id_direccion = mysqli_fetch_row($resul_consulta);

            $insersion = "INSERT INTO t_personas(fk_direccion, nombre, paterno, materno) VALUES ('$id_direccion[0]','$datos[0]','$datos[1]','$datos[2]')";
            $respuesta = mysqli_query($conexion, $insersion);
            return $respuesta;
        }
    }
?>