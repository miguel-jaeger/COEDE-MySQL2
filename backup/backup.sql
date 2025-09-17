-- Crear la base de datos
CREATE DATABASE db_calificaciones;

-- Usar la base de datos
USE db_calificaciones;

-- Crear la tabla calificaciones
CREATE TABLE calificaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    materia VARCHAR(20) NOT NULL,
    nota FLOAT NOT NULL,
    comentario VARCHAR(500) NOT NULL
);
