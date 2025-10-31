CREATE DATABASE BDCADASTRO;
go

USE BDCADASTRO;
go

CREATE TABLE  Clientes (
	IDCLIENTE INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	NOME NVARCHAR(50),
	IDADE INT NOT NULL,
	TELEFONE NVARCHAR(15),
	ENDERECO NVARCHAR(100),
	EMAIL NVARCHAR(50)
);

 insert into Clientes
 (nome, idade, telefone, endereco, email)
 values
 ('Geraldo', 20, '(11)940028922', 'Rua Sua Mae é da Galera, 140', 'geraldaodabiquera@gmail.com');  


 select * from Clientes;

 alter table Clientes
 alter column NOME NVARCHAR(50);

 alter table Clientes
 alter column TELEFONE NVARCHAR(15);

 alter table Clientes
 alter column ENDERECO NVARCHAR(100);

 alter table Clientes
 alter column EMAIL NVARCHAR(50);

 update Clientes set ENDERECO = 'Rua Sua Mãe é da Galera, 69'
 where IDCLIENTE = 1

