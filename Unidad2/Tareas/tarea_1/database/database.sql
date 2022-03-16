CREATE DATABASE registro_alumnos;
USE registro_alumnos;
CREATE TABLE t_perfil (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    paterno VARCHAR(100) NOT NULL,
    materno VARCHAR(100) NOT NULL,
    matricula VARCHAR(100) NOT NULL,
    nacido VARCHAR(100) NOT NULL,
    especialidad VARCHAR(100) NOT NULL,
    sexo VARCHAR(11) NOT NULL,
    nombre_img VARCHAR(100) NOT NULL,
    ruta_img varchar(100) NOT NULL,
    tipo_img varchar(100) NOT NULL,
    insercion DATETIME NOT NULL DEFAULT now(),
    PRIMARY KEY (id)
);
DROP DATABASE registro_alumnos;