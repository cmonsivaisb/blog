-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Usar la base de datos
USE `blog`;

-- Crear la tabla para las entradas del blog
CREATE TABLE IF NOT EXISTS `entries` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(255) NOT NULL,
    `author` VARCHAR(255) NOT NULL,
    `date_published` DATETIME NOT NULL,
    `content` TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Puedes agregar índices adicionales si es necesario
-- CREATE INDEX idx_title ON `entries` (`title`);
-- CREATE INDEX idx_author ON `entries` (`author`);
