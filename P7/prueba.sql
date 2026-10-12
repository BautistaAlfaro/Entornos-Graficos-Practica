-- ==========================================================
-- UTN FRRO - Cátedra de Entornos Gráficos
-- Práctica N° 7 - Ejercicio 8: Base de Datos de Buscador de Canciones
-- Base de Datos: prueba
-- Tabla: buscador
-- ==========================================================

CREATE DATABASE IF NOT EXISTS prueba CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE prueba;

DROP TABLE IF EXISTS buscador;

CREATE TABLE buscador (
    id INT AUTO_INCREMENT PRIMARY KEY,
    canciones VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Inserción de canciones de muestra
INSERT INTO buscador (canciones) VALUES
('De Música Ligera - Soda Stereo'),
('Muchacha Ojos de Papel - Almendra'),
('Seminare - Serú Girán'),
('Jijiji - Patricio Rey y sus Redonditos de Ricota'),
('Crimen - Gustavo Cerati'),
('Tratame Suavemente - Los Encargados / Soda Stereo'),
('Rezo por Vos - Charly García & Luis Alberto Spinetta'),
('Mil Horas - Los Abuelos de la Nada'),
('Flaca - Andrés Calamaro'),
('La Bifurcada - Memphis La Blusera'),
('El Amor Después del Amor - Fito Páez');
