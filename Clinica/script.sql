CREATE DATABASE clinica_dentaria;

USE clinica_dentaria;

CREATE TABLE pacientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    data_consulta DATE NOT NULL
);