CREATE DATABASE contar_vistas;
USE contar_vistas;

CREATE TABLE IF NOT EXISTS vistas (
    id INT NOT NULL AUTO_INCREMENT,
    ip_client varchar(255) NOT NULL,
    navegador VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);
DROP DATABASE contar_vistas;