CREATE DATABASE IF NOT EXISTS infotec;
USE infotec;

CREATE TABLE tipos_utilizadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(50) NOT NULL
);

INSERT INTO tipos_utilizadores (tipo) VALUES ('user'), ('visitante');

CREATE TABLE utilizadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    nome VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    tipo_utilizador_id INT DEFAULT 2,
    FOREIGN KEY (tipo_utilizador_id) REFERENCES tipos_utilizadores(id)
);
