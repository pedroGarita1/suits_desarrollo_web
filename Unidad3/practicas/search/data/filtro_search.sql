CREATE DATABASE filtro_search;
USE filtro_search;
CREATE TABLE filtro_search.t_cat_continentes (
  id_continentes INT NOT NULL AUTO_INCREMENT,
  nombre_continente VARCHAR(245) NOT NULL,
  descripcion_continente VARCHAR(45) NOT NULL,
  insertar_valores DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (id_continentes));
CREATE TABLE filtro_search.t_paises (
  id_paises INT NOT NULL AUTO_INCREMENT,
  fk_continentes INT NOT NULL,
  nombre_paises VARCHAR(245) NOT NULL,
  url_imagen TEXT(245) NOT NULL,
  descripcion_paises VARCHAR(245) NOT NULL,
  insersion_paises DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (id_paises));
ALTER TABLE filtro_search.t_paises 
ADD INDEX id_continente_idx (fk_continentes ASC) ;
;
ALTER TABLE filtro_search.t_paises 
ADD CONSTRAINT id_continente
  FOREIGN KEY (fk_continentes)
  REFERENCES filtro_search.t_cat_continentes (id_continentes)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;