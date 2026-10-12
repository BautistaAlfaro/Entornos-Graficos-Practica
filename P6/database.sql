-- ==========================================================
-- UTN FRRO - Cátedra de Entornos Gráficos
-- Práctica N° 6: Script de Creación y Población de Base de Datos
-- Base de Datos: Capitales
-- Tabla: ciudades
-- ==========================================================

CREATE DATABASE IF NOT EXISTS Capitales CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE Capitales;

DROP TABLE IF EXISTS ciudades;

CREATE TABLE ciudades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ciudad VARCHAR(100) NOT NULL,
    pais VARCHAR(100) NOT NULL,
    habitantes INT NOT NULL,
    superficie DECIMAL(10,2) NOT NULL,
    tieneMetro TINYINT(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Inserción de los 10 registros oficiales de la consigna
INSERT INTO ciudades (id, ciudad, pais, habitantes, superficie, tieneMetro) VALUES
(1, 'México D.F.', 'México', 555666, 23434.34, 1),
(2, 'Barcelona', 'España', 444333, 1111.11, 0),
(3, 'Buenos Aires', 'Argentina', 888111, 333.33, 1),
(4, 'Medellín', 'Colombia', 999222, 888.88, 0),
(5, 'Lima', 'Perú', 999111, 222.22, 0),
(6, 'Caracas', 'Venezuela', 111222, 111.11, 1),
(7, 'Santiago', 'Chile', 777666, 222.22, 1),
(8, 'Antigua', 'Guatemala', 444222, 877.33, 0),
(9, 'Quito', 'Ecuador', 333111, 999.11, 1),
(10, 'La Habana', 'Cuba', 111222, 333.11, 0);
