<?php
    class Lista_Buscador extends Conector{
        public function mostrar_datos($sql){
            $conexion = COnector :: conexion();
            $result = mysqli_query($conexion,$sql);
			return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        public function registrar_pais($datos){
            $conexion = Conector :: conexion();
            $registrar = "INSERT INTO t_paises(fk_continentes, nombre_paises, url_imagen, descripcion_paises) 
                            VALUES ('$datos[3]','$datos[0]','$datos[2]','$datos[1]')";
            $resultado = mysqli_query($conexion,$registrar);
            return $resultado;
        }
        public function delete_pais($id){
            $conexion = Conector :: conexion();
            $delete = "DELETE FROM t_paises WHERE id_paises = '$id'";
            $resultado = mysqli_query($conexion,$delete);
            return $resultado;
        }
        public function editar_pais(){
            $conexion = Conector :: conexion();
        }
    }
?>