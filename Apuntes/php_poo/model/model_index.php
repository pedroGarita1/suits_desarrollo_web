<?php
    class MiClase{
        public $nombre = "Pedro";

        public function metodo1(){
            return "hola " . $this->nombre . " Tu edad es: " . self::metodo2(20);
        }

        public static function metodo2($edad){
            return $edad;
        }
    }
    $obj = new MiClase();
    echo $obj->metodo1();
?>