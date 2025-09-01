-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS bd_donaciones;
USE bd_donaciones;

-- Tabla roles
CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(45) NOT NULL
);

-- Tabla usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    telefono VARCHAR(20),
    direccion VARCHAR(80),
    contrasena VARCHAR(100) NOT NULL,
    roles_id INT NOT NULL,
    FOREIGN KEY (roles_id) REFERENCES roles(id)
);

-- Tabla categorias
CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(50) NOT NULL
);

-- Tabla rangos de edad
CREATE TABLE rangosedad (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(50) NOT NULL
);

-- Tabla estados
CREATE TABLE estados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(20) NOT NULL
);

-- Tabla juguetes
CREATE TABLE juguetes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(100) NOT NULL,
    estados_id INT NOT NULL,
    categoria_id INT NOT NULL,
    rangosedad_id INT NOT NULL,
    FOREIGN KEY (estados_id) REFERENCES estados(id),
    FOREIGN KEY (categoria_id) REFERENCES categorias(id),
    FOREIGN KEY (rangosedad_id) REFERENCES rangosedad(id)
);

-- Tabla donaciones
CREATE TABLE donaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    juguetes_id INT NOT NULL,
    usuarios_id INT NOT NULL,
    FOREIGN KEY (juguetes_id) REFERENCES juguetes(id),
    FOREIGN KEY (usuarios_id) REFERENCES usuarios(id)
);
