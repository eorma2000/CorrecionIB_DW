-- Crear la base de datos
CREATE DATABASE sistema_autenticacion;

-- Seleccionar la base de datos
USE sistema_autenticacion;

-- Crear la tabla de usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,                -- ID único para cada usuario
    nombre_usuario VARCHAR(50) NOT NULL,               -- Nombre de usuario, no nulo
    contrasena VARCHAR(255) NOT NULL,                  -- Contraseña del usuario, se almacenará en formato hash
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Fecha de registro, por defecto es la fecha y hora actuales
);

-- Crear un índice para el nombre de usuario (para búsqueda más eficiente)
CREATE INDEX idx_nombre_usuario ON usuarios (nombre_usuario);

-- Insertar 5 usuarios en la tabla usuarios
INSERT INTO usuarios (nombre_usuario, contrasena)
VALUES
    ('juanperez', PASSWORD('12345')),
    ('mariagonzalez', PASSWORD('67890')),
    ('pedrolopez', PASSWORD('abcd1234')),
    ('anafernandez', PASSWORD('qwerty')),
    ('carlosmendez', PASSWORD('admin123'));

-- Verificar que los usuarios se insertaron correctamente
SELECT * FROM usuarios;
