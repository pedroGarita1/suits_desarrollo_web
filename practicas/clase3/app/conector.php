<?php
    class Conector {
        private $servidor = "localhost";
        private $usuario  = "root";
        private $password = "";
        private $database = "contar_vistas";
        public function conexion(){
            $conexion = mysqli_connect($this->servidor, $this->usuario, $this->password, $this->database);
            return $conexion;
        }
    }


?>