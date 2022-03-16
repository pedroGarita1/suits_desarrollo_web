<?php
    class Personas {
        public function mostrar_registro($sql){
            $conector = new Conector();
            $conexion = $conector->conexion();
            $resultado = mysqli_query($conexion,$sql);
            $fetch = mysqli_fetch_all($resultado,MYSQLI_ASSOC);
            return $fetch;
        }
        public function obtener_ruta_archivo($id){
            $conector = new Conector();
            $conexion = $conector->conexion();
            $sql = "SELECT nombre_img, tipo_img FROM t_perfil WHERE id = '$id'";
            $resultado = mysqli_query($conexion,$sql);
            $datos = mysqli_fetch_array($resultado);
            $nombre_img = $datos['nombre_img'];
            $extension = $datos['tipo_img'];
            return $ruta = "archivos/".$nombre_img;
        }
        public function insetar_registro($datos){
            $conector = new Conector();
            $conexion = $conector->conexion();
            $sql = "INSERT INTO t_perfil (nombre,paterno,materno,matricula,nacido,especialidad,sexo,nombre_img,ruta_img,tipo_img) 
                    VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]','$datos[8]','$datos[09]')";
            $resultado = mysqli_query($conexion,$sql);
            return $resultado;
        }
    }
?>