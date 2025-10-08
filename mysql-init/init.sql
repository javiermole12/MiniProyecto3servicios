-- Crear tabla empresas
CREATE TABLE empresas (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Crear tabla empleados
CREATE TABLE empleados (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    empresa_id BIGINT UNSIGNED NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    contrasenya VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (empresa_id) REFERENCES empresas(id) ON DELETE CASCADE
);

-- Crear tabla clientes
CREATE TABLE clientes (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    empresa_id BIGINT UNSIGNED NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    contrasenya VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (empresa_id) REFERENCES empresas(id) ON DELETE CASCADE
);

-- Insertar empresas
INSERT INTO empresas (nombre, created_at, updated_at) VALUES
('Inditex', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Viscofan', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

-- Insertar empleados (contraseña "123456" hasheada con bcrypt)
INSERT INTO empleados (empresa_id, nombre, email, contrasenya, created_at, updated_at) VALUES
(1, 'Amancio Ortega', 'titoamancio@inditex.com', '$2y$10$anYmVLFIW2TSyic8zSfWOe8z2hQ0NnFPTncLqTP4kYHFqsYz1mqXO', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(2, 'Francisco Riberas', 'titofrancis@viscofan.com', '$2y$10$anYmVLFIW2TSyic8zSfWOe8z2hQ0NnFPTncLqTP4kYHFqsYz1mqXO', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

-- Insertar clientes (contraseña "123456" hasheada con bcrypt)
INSERT INTO clientes (empresa_id, nombre, email, contrasenya, created_at, updated_at) VALUES
(1, 'Zara', 'zara@zara.com', '$2y$10$anYmVLFIW2TSyic8zSfWOe8z2hQ0NnFPTncLqTP4kYHFqsYz1mqXO', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(2, 'Eroski', 'eroski@eroski.com', '$2y$10$anYmVLFIW2TSyic8zSfWOe8z2hQ0NnFPTncLqTP4kYHFqsYz1mqXO', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
