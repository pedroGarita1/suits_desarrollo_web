<?php

    require_once "../app/conector.php";
    class Visitas extends  Conector {
        public function datos_visitas($ip,$navegador){
            $conectar = new Conector();
            $conexion = $conectar->conexion();
            $tipo_navegador = $this->navegador($navegador);
            $SQL = "INSERT INTO vistas (ip_client,navegador) VALUES ('$ip','$tipo_navegador')";
            $resultado = mysqli_query($conexion, $SQL);
            return $resultado;
        }
        public function mostrar_datos($sql){
            $conectar = new Conector();
            $conexion = $conectar->conexion();
			$result = mysqli_query($conexion,$sql);
			return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        public function navegador($navegador){
            if(strpos($navegador, 'MSIE') !== FALSE)
                return 'Internet explorer';
            elseif(strpos($navegador, 'Edge') !== FALSE) //Microsoft Edge
                return 'Microsoft Edge';
            elseif(strpos($navegador, 'Trident') !== FALSE) //IE 11
                return 'Internet explorer';
            elseif(strpos($navegador, 'Opera Mini') !== FALSE)
                return "Opera Mini";
            elseif(strpos($navegador, 'Opera') || strpos($navegador, 'OPR') !== FALSE)
                return "Opera";
            elseif(strpos($navegador, 'Firefox') !== FALSE)
                return 'Mozilla Firefox';
            elseif(strpos($navegador, 'Chrome') !== FALSE)
                return 'Google Chrome';
            elseif(strpos($navegador, 'Safari') !== FALSE)
                return "Safari";
        }
        public function eliminar_registro($id){
            $conectar = new Conector();
            $conexion = $conectar->conexion();
            $sql = "DELETE FROM vistas WHERE id='$id'";
            $resultado = mysqli_query($conexion, $sql);
            return $resultado; 
        }
        public function editar_registro($datos){
            $conectar = new Conector();
            $conexion = $conectar->conexion();
            $sql = "UPDATE vistas SET ip_client = '$datos[1]', navegador = '$datos[2]' WHERE id = '$datos[0]'";
            $resultado = mysqli_query($conexion, $sql);
            return $resultado; 
        }
    }

?>