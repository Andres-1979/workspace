-- Creamos la base de datos
CREATE DATABASE matematicasdivertidas;
USE matematicasdivertidas;

-- Tabla usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,    -- Identificador único
    nombre VARCHAR(100) NOT NULL,         -- Nombre completo del usuario
    usuario VARCHAR(50) NOT NULL UNIQUE,  -- Nombre de usuario (para login)
    password VARCHAR(255) NOT NULL,       -- Contraseña (encriptada)
    rol ENUM('admin','estudiante') NOT NULL -- Tipo de usuario
);
