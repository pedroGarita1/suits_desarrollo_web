CREATE DATABASE tareas;

USE tareas;

CREATE TABLE t_usuarios (
    id_usuarios INT(11) AUTO_INCREMENT NOT NULL,
    usuario VARCHAR(245), NOT NULL,
    password VARCHAR(245), NOT NULL,
    nombre VARCHAR(245), NOT NULL,
    apellido_parerno VARCHAR(245) NOT NULL,
    apellido_materno VARCHAR(245) NOT NULL,
    PRIMARY KEY (id_usuarios)
);
INSERT INTO t_usuarios(usuario,password,nombre,apellido_parerno,apellido_materno) 
VALUES ("PiTherDG","7110eda4d09e062aa5e4a390b0a572ac0d2c0220","pedro","jimenez","garita");