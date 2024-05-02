CREATE DATABASE sorvete_vitrine;

CREATE TABLE usuarios(
    id_usuarios INT PRIMARY KEY AUTO_INCREMENT,
    nome_usuario VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    foto_usuario LONGBLOB,
    nivel_usuario INT DEFAULT 1
);


CREATE TABLE categorias(
    id_categoria INT PRIMARY KEY AUTO_INCREMENT,
    nome_categoria VARCHAR(255) NOT NULL,
    foto_categoria LONGBLOB
);


CREATE TABLE produtos(
    id_produtos INT PRIMARY KEY AUTO_INCREMENT,
    nome_produto VARCHAR(255) NOT NULL,
    preco DECIMAL (8,2) NOT NULL,
    descricao TEXT,
    foto_produto LONGBLOB,
    id_categoria INT NOT NULL,
    FOREIGN KEY (id_categoria) REFERENCES categorias (id_categoria)
);