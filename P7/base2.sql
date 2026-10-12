-- ==========================================================
-- UTN FRRO - Cátedra de Entornos Gráficos
-- Práctica N° 7 - Ejercicio 6: Base de Datos de Alumnos
-- Base de Datos: base2
-- Tabla: alumnos
-- ==========================================================

CREATE DATABASE IF NOT EXISTS base2 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE base2;

DROP TABLE IF EXISTS alumnos;

CREATE TABLE alumnos (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    codigocurso INT NOT NULL,
    mail VARCHAR(100) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Registros de prueba
INSERT INTO alumnos (codigo, nombre, codigocurso, mail) VALUES
(1, 'Bautista Alfaro', 201, 'bautista@utn.edu.ar'),
(2, 'Juan Pérez', 201, 'juan.perez@gmail.com'),
(3, 'María Gómez', 202, 'maria.gomez@hotmail.com'),
(4, 'Carlos Rodríguez', 203, 'carlos.rodriguez@yahoo.com');
