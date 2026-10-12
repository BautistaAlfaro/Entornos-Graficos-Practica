-- ==========================================================
-- UTN FRRO - Cátedra de Entornos Gráficos
-- Práctica N° 7 - Ejercicio 7: Base de Datos de Carrito de Compras
-- Base de Datos: Compras
-- Tabla: catalogo
-- ==========================================================

CREATE DATABASE IF NOT EXISTS Compras CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE Compras;

DROP TABLE IF EXISTS catalogo;

CREATE TABLE catalogo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto VARCHAR(100) NOT NULL,
    precio DECIMAL(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Población de productos de muestra
INSERT INTO catalogo (id, producto, precio) VALUES
(1, 'Notebook Lenovo ThinkPad Core i7 16GB', 1250000.50),
(2, 'Monitor LG 27 Pulgadas IPS 144Hz', 345000.00),
(3, 'Teclado Mecánico RGB Redragon', 68500.99),
(4, 'Mouse Inalámbrico Logitech MX Master 3S', 115000.00),
(5, 'Auriculares HyperX Cloud II 7.1', 98000.00),
(6, 'Disco Sólido SSD NVMe Kingston 1TB', 85400.50);
