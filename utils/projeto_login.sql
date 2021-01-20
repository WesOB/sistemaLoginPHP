CREATE DATABASE projeto_login;

USE projeto_login;

CREATE TABLE usuarios(
	id_usuario int AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30),
    telefone VARCHAR(30),
    email VARCHAR(40),
    senha VARCHAR(32)

);
