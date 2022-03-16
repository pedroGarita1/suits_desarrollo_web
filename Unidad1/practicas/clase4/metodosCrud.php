<?php
    class metodos{
        public function mostrarDatos($sql){
            $c = new  Conectar();
            $conexion =$c->conexion();

            $result = mysqli_query($conexion,$sql);

            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }

        public function insertarDatosNombre($datos){
            $c = new Conectar();
            $conexion =$c->conexion();

            echo $sql = "INSERT into t_materias(nombre,semestre,creditos,carrera)values('$datos[0]','$datos[1]','$datos[2]','$datos[3]')";
            return $result = mysqli_query($conexion,$sql);

        }


        public function eliminarDatosNombre($id){
            $c = new Conectar();
            $conexion =$c->conexion();
            $sql = "DELETE from t_materias where id='$id'";
            return $result = mysqli_query($conexion,$sql);

        }

    }
?>