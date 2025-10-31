/* Lógico_livraria: */
CREATE DATABASE db_livraria;
go

-- Definir Banco de Dados atual em uso --
use db_livraria;
go


CREATE TABLE livro (
    cod_livro INTEGER PRIMARY KEY,
    titulo_livro VARCHAR,
    editora_livro VARCHAR,
    fk_tipo_cod_tipo INTEGER,
    fk_Autor_cod_autor INTEGER
);

CREATE TABLE Valor (
    cod_tipo INTEGER PRIMARY KEY,
    desc_tipo VARCHAR,
    preco_tipo MONEY
);

CREATE TABLE Autor (
    cod_autor INTEGER PRIMARY KEY,
    nome_autor VARCHAR,
    pais_origem_autor VARCHAR
);
 
ALTER TABLE livro ADD CONSTRAINT FK_livro_2
    FOREIGN KEY (fk_tipo_cod_tipo)
    REFERENCES Valor (cod_tipo);
 
ALTER TABLE livro ADD CONSTRAINT FK_livro_3
    FOREIGN KEY (fk_Autor_cod_autor)
    REFERENCES Autor (cod_autor);



