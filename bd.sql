CREATE DATABASE horarios_db;
USE horarios_db;

CREATE TABLE horarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    hora_inicio TIME,
    hora_fin TIME,
    dia_semana ENUM('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes')
);
