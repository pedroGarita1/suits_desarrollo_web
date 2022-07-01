<?php
    class Conector {
        private $servidor = "localhost";
        private $usuario  = "root";
        private $password = "";
        private $database = "filtro_search";
        public function conexion(){
            try{
                $conexion = mysqli_connect($this->servidor, $this->usuario, $this->password, $this->database);
                return $conexion;
            }catch(\Throwable $th){
                return $th->getMessage();
            }
        }
    }
?>