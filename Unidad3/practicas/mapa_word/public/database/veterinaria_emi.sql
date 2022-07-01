CREATE DATABASE veterinaria_emi;

USE veterinaria_emi;
CREATE TABLE veterinaria_emi.t_usuarios (
  id_usuario INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(245) NOT NULL,
  apellidoP VARCHAR(245) NOT NULL,
  apellidoM VARCHAR(245) NOT NULL,
  fecha_nacimiento DATE NOT NULL,
  correo VARCHAR(245) NOT NULL,
  password VARCHAR(245) NOT NULL,
  rol_usuario INT(2) NOT NULL,
  insersion_usuario DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (id_usuario));
  
CREATE TABLE veterinaria_emi.t_info_general (
  id_historial_animal INT NOT NULL AUTO_INCREMENT,
  nombre_animal VARCHAR(245) NOT NULL,
  tipo_animal VARCHAR(245) NOT NULL,
  raza_animal VARCHAR(245) NOT NULL,
  edad_animal VARCHAR(245) NOT NULL,
  propietario VARCHAR(245) NOT NULL,
  telefono_propietario VARCHAR(245) NOT NULL,
  tipo_servicio VARCHAR(245) NOT NULL,
  sexo_animal VARCHAR(245) NOT NULL,
  requerimiento VARCHAR(245) NOT NULL,
  insersion_info DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (id_historial_animal));

CREATE TABLE veterinaria_emi.t_info_animal (
  id_info_animal INT NOT NULL AUTO_INCREMENT,
  id_fk_info_general INT NOT NULL,
  id_fk_vacunas INT NOT NULL,
  id_fk_operaciones INT NOT NULL,
  historial_consulta VARCHAR(245) NOT NULL,
  ultima_consulta DATE NOT NULL,
  razon_consulta VARCHAR(245) NOT NULL,
  informacion_adicional VARCHAR(245) NOT NULL,
  insersion_info DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (id_info_animal));

ALTER TABLE veterinaria_emi.t_info_animal
ADD INDEX id_info_general_idx (id_fk_info_general ASC);
;
ALTER TABLE veterinaria_emi.t_info_animal
ADD CONSTRAINT id_info_general
  FOREIGN KEY (id_fk_info_general)
  REFERENCES veterinaria_emi.t_info_general (id_historial_animal)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

CREATE TABLE veterinaria_emi.t_vacunas (
  id_vacunas INT NOT NULL,
  parvovirus_moquillos INT NOT NULL,
  polivalente INT NOT NULL,
  refuerzo_polivalente INT NOT NULL,
  rabia INT NOT NULL,
  refuerzo_rabia INT NOT NULL,
  lyme INT NOT NULL,
  leptospirosis INT NOT NULL,
  leishmaniosis INT NOT NULL,
  tos_bordetella INT NOT NULL,
  coronavirus INT NOT NULL,
  panleucopenia INT NOT NULL,
  herpesvirus INT NOT NULL,
  calicivirus INT NOT NULL,
  leucemia INT NOT NULL,
  peritonitis_infecciosa INT NOT NULL,
  insersion_vacuna DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (id_vacunas));

ALTER TABLE veterinaria_emi.t_info_animal
ADD INDEX id_vacunas_idx (id_fk_vacunas ASC);
;
ALTER TABLE veterinaria_emi.t_info_animal 
ADD CONSTRAINT id_vacunas
  FOREIGN KEY (id_fk_vacunas)
  REFERENCES veterinaria_emi.t_vacunas (id_vacunas)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

CREATE TABLE veterinaria_emi.t_operaciones (
  id_operaciones INT NOT NULL AUTO_INCREMENT,
  esterilizacion INT NOT NULL,
  otras_operaciones VARCHAR(245) NOT NULL,
  descripcion_operacion VARCHAR(245) NOT NULL,
  insersion_operacion DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (id_operaciones));

ALTER TABLE veterinaria_emi.t_info_animal
ADD INDEX id_operaciones_idx (id_fk_operaciones ASC);
;
ALTER TABLE veterinaria_emi.t_info_animal
ADD CONSTRAINT id_operaciones
  FOREIGN KEY (id_fk_operaciones)
  REFERENCES veterinaria_emi.t_operaciones (id_operaciones)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
