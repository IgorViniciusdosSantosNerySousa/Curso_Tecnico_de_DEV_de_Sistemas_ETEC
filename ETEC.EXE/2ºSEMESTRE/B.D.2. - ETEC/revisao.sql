-- Criar Banco de Dados -->> DB_EMPRESA
CREATE DATABASE db_empresa;
go
-- Usar/Tonar Banco de Dados em uso --
USE db_empresa;
go

--Criar Tabela de Cliente

CREATE TABLE cliente
(
	Cod_Cliente int Not Null Primary Key, 
	Nome_Cliente Varchar (100) Not Null, 
	data_Cadastro Date,
	Valor_Max_Compra Numeric(12,2),
	Nome_Contato Varchar (50) 
);

-- CREATE, ALTER, DROP --> DDL (Data Definition Language)--

-- DML - Data Manipulation Language --
-- INSERT, UPDATE, SELECT, DELETE --

INSERT INTO cliente
(Cod_Cliente, Nome_Cliente, Valor_Max_Compra, Nome_Contato, data_Cadastro)
VALUES
(123, 'Cleber bambam', 1000.00, 'MADE IN BRAZIL', '2024-07-30'),
(175, 'Clebinho', 110.00, 'MADE IN CONGO REPUBLIC', '2024-07-30'),
(166, 'Sujiro Kimimami', 200.00, 'MADE IN JAPAN', '2024-07-30'),
(119, 'Torres Gêmeas', 11092001.00, 'MADE IN USA', '2001-09-11');

SELECT * FROM cliente;

DROP TABLE cliente;

SELECT Cod_cliente, Nome_Cliente, data_Cadastro
	FROM cliente
	WHERE Cod_Cliente in (123, 124)
	ORDER BY Nome_Cliente;

-- Operadores Lógicos ou Comparação --
-- =; >; >=; <; <=; <>; in(); Between x and y;
-- not 

UPDATE cliente
	SET Nome_Cliente = 'TEKÔMO NAKAMÁ'
	WHERE Cod_Cliente = 123;

DELETE FROM cliente
-- SEMPRE QUE ATUALIZAR OS DADOS OU DELETAR DE UMA TABELA, USE O WHERE. --



