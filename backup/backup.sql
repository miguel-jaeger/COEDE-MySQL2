CREATE DATABASE IF NOT EXISTS db_calificaciones
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE db_calificaciones;

CREATE TABLE calificaciones (
  id INT NOT NULL AUTO_INCREMENT,
  materia VARCHAR(50) NOT NULL,
  nota FLOAT NOT NULL,
  comentario VARCHAR(500) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;