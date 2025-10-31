
-- Criar anco de Dados - DB_EMPRSA --

 CREATE DATABASE db_empresa;
 GO

 USE db_empresa;
 GO
 -- select name from sys.tables;

 -- Criar tabela de Cliente

CREATE TABLE Cliente (
	CodCliente int Not Null PRIMARY KEY NonClustered,
	Nome VARCHAR (100) Not Null, 
	Data_Nascimento DATE,
	eMail VARCHAR (100),
	Data_Cadastro DATETIME,
	UF CHAR(2)	
);

INSERT INTO Cliente (CodCliente, Nome, Data_Nascimento, eMail, Data_Cadastro, UF)
VALUES
(1, 'Ana Silva', '1985-01-15', 'ana.silva@gmail.com', '2024-09-10 10:00:00', 'SP'),
(2, 'Bruno Costa', '1990-02-20', 'bruno.costa@gmail.com', '2024-09-10 10:05:00', 'RJ'),
(3, 'Carla Souza', '1988-03-25', 'carla.souza@gmail.com', '2024-09-10 10:10:00', 'MG'),
(4, 'Daniel Oliveira', '1992-04-30', 'daniel.oliveira@gmail.com', '2024-09-10 10:15:00', 'RS'),
(5, 'Eduardo Pereira', '1987-05-05', 'eduardo.pereira@gmail.com', '2024-09-10 10:20:00', 'BA'),
(6, 'Fernanda Lima', '1995-06-10', 'fernanda.lima@gmail.com', '2024-09-10 10:25:00', 'PR'),
(7, 'Gabriel Santos', '1993-07-15', 'gabriel.santos@gmail.com', '2024-09-10 10:30:00', 'SC'),
(8, 'Helena Almeida', '1989-08-20', 'helena.almeida@gmail.com', '2024-09-10 10:35:00', 'PE'),
(9, 'Igor Rodrigues', '1991-09-25', 'igor.rodrigues@gmail.com', '2024-09-10 10:40:00', 'CE'),
(10, 'Juliana Martins', '1994-10-30', 'juliana.martins@gmail.com', '2024-09-10 10:45:00', 'GO'),
(11, 'Lucas Ferreira', '1986-11-05', 'lucas.ferreira@gmail.com', '2024-09-10 10:50:00', 'AM'),
(12, 'Mariana Rocha', '1990-12-10', 'mariana.rocha@gmail.com', '2024-09-10 10:55:00', 'PA'),
(13, 'Nicolas Mendes', '1988-01-15', 'nicolas.mendes@gmail.com', '2024-09-10 11:00:00', 'MT'),
(14, 'Olivia Azevedo', '1992-02-20', 'olivia.azevedo@gmail.com', '2024-09-10 11:05:00', 'MS'),
(15, 'Pedro Lima', '1987-03-25', 'pedro.lima@gmail.com', '2024-09-10 11:10:00', 'AL'),
(16, 'Quintino Barbosa', '1995-04-30', 'quintino.barbosa@gmail.com', '2024-09-10 11:15:00', 'SE'),
(17, 'Rafaela Duarte', '1993-05-05', 'rafaela.duarte@gmail.com', '2024-09-10 11:20:00', 'TO'),
(18, 'Samuel Gomes', '1989-06-10', 'samuel.gomes@gmail.com', '2024-09-10 11:25:00', 'RO'),
(19, 'Tatiana Ribeiro', '1991-07-15', 'tatiana.ribeiro@gmail.com', '2024-09-10 11:30:00', 'RR'),
(20, 'Ursula Nunes', '1994-08-20', 'ursula.nunes@gmail.com', '2024-09-10 11:35:00', 'AP'),
(21, 'Victor Carvalho', '1986-09-25', 'victor.carvalho@gmail.com', '2024-09-10 11:40:00', 'AC'),
(22, 'Wagner Teixeira', '1990-10-30', 'wagner.teixeira@gmail.com', '2024-09-10 11:45:00', 'DF'),
(23, 'Xavier Lopes', '1988-11-05', 'xavier.lopes@gmail.com', '2024-09-10 11:50:00', 'ES'),
(24, 'Yara Farias', '1992-12-10', 'yara.farias@gmail.com', '2024-09-10 11:55:00', 'MA'),
(25, 'Zeca Moreira', '1987-01-15', 'zeca.moreira@gmail.com', '2024-09-10 12:00:00', 'PI'),
(26, 'Alice Cardoso', '1995-02-20', 'alice.cardoso@gmail.com', '2024-09-10 12:05:00', 'PB'),
(27, 'Bruno Almeida', '1993-03-25', 'bruno.almeida@gmail.com', '2024-09-10 12:10:00', 'RN'),
(28, 'Camila Santos', '1989-04-30', 'camila.santos@gmail.com', '2024-09-10 12:15:00', 'AM'),
(29, 'Diego Costa', '1991-05-05', 'diego.costa@gmail.com', '2024-09-10 12:20:00', 'PA'),
(30, 'Elisa Ferreira', '1994-06-10', 'elisa.ferreira@gmail.com', '2024-09-10 12:25:00', 'MT'),
(31, 'Felipe Rocha', '1986-07-15', 'felipe.rocha@gmail.com', '2024-09-10 12:30:00', 'MS'),
(32, 'Giovana Mendes', '1990-08-20', 'giovana.mendes@gmail.com', '2024-09-10 12:35:00', 'AL'),
(33, 'Henrique Azevedo', '1988-09-25', 'henrique.azevedo@gmail.com', '2024-09-10 12:40:00', 'SE'),
(34, 'Isabela Lima', '1992-10-30', 'isabela.lima@gmail.com', '2024-09-10 12:45:00', 'TO'),
(35, 'João Barbosa', '1987-11-05', 'joao.barbosa@gmail.com', '2024-09-10 12:50:00', 'RO'),
(36, 'Karen Duarte', '1995-12-10', 'karen.duarte@gmail.com', '2024-09-10 12:55:00', 'RR'),
(37, 'Leonardo Gomes', '1993-01-15', 'leonardo.gomes@gmail.com', '2024-09-10 13:00:00', 'AP'),
(38, 'Mariana Ribeiro', '1989-02-20', 'mariana.ribeiro@gmail.com', '2024-09-10 13:05:00', 'AC'),
(39, 'Nathalia Nunes', '1991-03-25', 'nathalia.nunes@gmail.com', '2024-09-10 13:10:00', 'DF'),
(40, 'Otávio Carvalho', '1994-04-30', 'otavio.carvalho@gmail.com', '2024-09-10 13:15:00', 'ES'),
(41, 'Paula Teixeira', '1986-05-05', 'paula.teixeira@gmail.com', '2024-09-10 13:20:00', 'MA'),
(42, 'Quirino Lopes', '1990-06-10', 'quirino.lopes@gmail.com', '2024-09-10 13:25:00', 'PI'),
(43, 'Rita Farias', '1988-07-15', 'rita.farias@gmail.com', '2024-09-10 13:30:00', 'PB'),
(44, 'Sérgio Moreira', '1992-08-20', 'sergio.moreira@gmail.com', '2024-09-10 13:35:00', 'RN'),
(45, 'Tânia Cardoso', '1987-09-25', 'tania.cardoso@gmail.com', '2024-09-10 13:40:00', 'AM'),
(46, 'Ubirajara Almeida', '1995-10-30', 'ubirajara.almeida@gmail.com', '2024-09-10 13:45:00', 'PA'),
(47, 'Valéria Santos', '1993-11-05', 'valeria.santos@gmail.com', '2024-09-10 13:50:00', 'MT'),
(48, 'Wesley Costa', '1989-12-10', 'wesley.costa@gmail.com', '2024-09-10 13:55:00', 'MS'),
(49, 'Ximena Ferreira', '1991-01-15', 'ximena.ferreira@gmail.com', '2024-09-10 14:00:00', 'AL');

drop table Cliente;

SELECT * FROM Cliente;
/*GO
ALTER TABLE dbo.Cliente ADD CONSTRAINT
	IX_Cliente UNIQUE NONCLUSTERED 
	(
	eMail
	) WITH( STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]

GO*/
go
INSERT INTO Cliente 
(CodCliente, Nome, Data_Nascimento,	eMail, Data_Cadastro)
VALUES
(50, 'Descer Nakombi', '2000-01-01', 'cliente@gmail.com', GETDATE());

-- Adicionar nova coluna em Cliente --

ALTER TABLE Cliente
  add Valor_Max_Compra NUMERIC(10,2);

INSERT INTO Cliente
(CodCliente, Nome, Data_Nascimento,	eMail, Data_Cadastro, Valor_Max_Compra)
VALUES
(51, 'Não subiro Nakombi', '2000-01-01', 'cliente2@gmail.com', GETDATE(), -10000000.00);

Select * From Cliente;

sp_help cliente;
go

CREATE TABLE Pedido (
	Num_Pedido INT NOT NULL PRIMARY KEY NONCLUSTERED IDENTITY (1,1),
	CodCliente INT NOT NULL,
	Data_Pedido DATE,
	Valor_Total MONEY,
	CONSTRAINT Fk_Pedido_Cliente FOREIGN KEY (CodCliente)
		REFERENCES Cliente (CodCliente)
);

Select * From Pedido;

drop table Pedido;

-- Inserir Pedido -- 
INSERT INTO Pedido
(CodCliente, Data_Pedido, Valor_Total)
VALUES
(12, GETDATE(), 2398.27),
(43, GETDATE(), 1491.87),
(27, GETDATE(), 5312.23),
(32, GETDATE(), 3008.73),
(10, GETDATE(), 2048.69),
(13, GETDATE(), 2000.27),
(41, GETDATE(), 1234.87),
(28, GETDATE(), 5638.23),
(36, GETDATE(), 1927.73),
(9, GETDATE(), 2238.69);

SELECT NAME FROM. sys.tables;

-- Criar tabela para itens do pedido --

CREATE TABLE Item_Pedido (
	Num_Pedido INT,
	Preco_Unit MONEY,
	Quantidade INT,
	Cod_Produto INT,
	CONSTRAINT FK_Item_Pedido -- Relacionamento com Tab_Pedido --
	FOREIGN KEY (Num_Pedido) REFERENCES Pedido (Num_Pedido)
);

INSERT INTO Item_Pedido
(Cod_Produto, Preco_Unit, Quantidade)
VALUES
(25, 10.00, 14),
(24, 200.00, 34),
(23, 400.00, 15),
(22, 700.00, 33),
(21, 200.00, 25),
(20, 100.00, 13),
(19, 110.00, 93),
(18, 60.00, 87),
(17, 80.00, 84),
(16, 840.00, 04);

DROP TABLE Item_Pedido;

SELECT * FROM Item_Pedido;
SELECT * FROM Produto

-- Tabela para Produto --
GO
CREATE TABLE Produto (
	Cod_Produto INT NOT NULL IDENTITY (1,1) PRIMARY KEY,
	Descricao VARCHAR(100) NOT NULL,
	Preco_Venda MONEY,
	Custo_Unitario MONEY,
	Status_Produtos CHAR(1)
);

sp_help produto

-- Inserindo 25 produtos na tabela com status variados --
-- C = Comprado, E = Em Análise, S = Sem Compra --
INSERT INTO Produto 
(Descricao, Preco_Venda, Custo_Unitario, Status_Produtos)
VALUES
('Produto A', 500, 3000, 'C'),
('Produto B', 750, 5000, 'E'),
('Produto C', 1200, 8000, 'S'),
('Produto D', 600, 4000, 'C'),
('Produto E', 900, 6000, 'S'),
('Produto F', 1000, 700, 'E'),
('Produto G', 100, 6500, 'C'),
('Produto H', 1300, 8500, 'E'),
('Produto I', 140, 9000, 'S'),
('Produto J', 550, 3500, 'C'),
('Produto K', 6500, 4500, 'E'),
('Produto L', 8500, 5500, 'S'),
('Produto M', 9500, 6000, 'C'),
('Produto N', 10500, 7000, 'E'),
('Produto O', 11500, 8000, 'S'),
('Produto P', 12500, 9000, 'C'),
('Produto Q', 13500, 1000, 'E'),
('Produto R', 14500, 11000, 'S'),
('Produto S', 15500, 12000, 'C'),
('Produto T', 16500, 13000, 'E'),
('Produto U', 17500, 14000, 'S'),
('Produto V', 18500, 15000, 'C'),
('Produto W', 19500, 16000, 'E'),
('Produto X', 20500, 17000, 'S'),
('Produto Y', 21500, 18000, 'C');


drop table Produto;

ALTER TABLE Item_Pedido
 ADD CONSTRAINT FK_Produto_Item
 FOREIGN KEY (Cod_Produto) REFERENCES Produto (Cod_Produto);
GO


/*CREATE TABLE Cargo (
	Id_Cargo INT NOT NULL PRIMARY KEY,
	Nome VARCHAR(50),
	Descricao TEXT
);

INSERT INTO Cargo 
(Id_Cargo, Nome, Descricao)
VALUES
(1,'Neymar', 'Jogador'),
(2,'Mia Khalifa', 'Atriz'),
(3,'Emsrai', 'Pro-Player'),
(4,'Isabelly', 'Incrível'),
(5,'Fernandinho Beira-Mar', 'Comando-Vermelho');

CREATE TABLE Funcionario (
	Id_Funcionario INT NOT NULL PRIMARY KEY,
	Nome VARCHAR(50),
	Email VARCHAR(100),
	CONSTRAINT fk_Cargo_FUncionario FOREIGN KEY (Id_Funcionario)
		REFERENCES Cargo (Id_Cargo)
);

INSERT INTO Funcionario
(Id_Funcionario, Nome, Email)
VALUES
(1,'Neymar', 'meninoney200@gamil.com'),
(2,'Mia Khalifa', 'trabalhadora123@gmail.com'),
(3,'Emsrai', 'emsraiprogamer82@gmail.com'),
(4,'Isabelly', 'isahcorreia17@gmail.com'),
(5,'Fernandinho Beira-Mar', 'fernadaodazl157@gmail.com');*/

SELECT P.Num_Pedido, P.Data_Pedido, P.CodCliente, P.Valor_Total,
       C.Nome, C.eMail
  FROM Pedido P RIGHT JOIN Cliente C 
	ON C.CodCLiente = P.CodCliente
;

SELECT * FROM Cliente;
SELECT * FROM Pedido;
SELECT * FROM Item_Pedido;
SELECT * FROM Produto;
SELECT COUNT(*) AS Qtde FROM Produto;
-- OBTER PRODUTOS QUE ESTEJAM EM ALGUM PEDIDO --


SELECT P.Cod_Produto, P.Descricao, P.Status_Produtos, P.Preco_Venda
  FROM Produto P LEFT JOIN Item_Pedido I 
    ON I.Cod_Produto = P.Cod_produto
 WHERE NOT I.Cod_Produto IS NULL

 -- mesmo resultado do inner join -- 
;

SELECT Cli.*, 
	   Ped. Num_Pedido,
	   Ped.Data_Pedido,
	   Ped.Valor_Total
  FROM Cliente Cli
       INNER JOIN
	   Pedido Ped ON Ped.CodCliente = Cli.CodCliente
;

-- SUBQUERYS --

-- CLIENTES DENTRO DO PEDIDO --
SELECT Cli.CodCliente,
       Cli.Nome,
	   Cli.Email,
	   Cli.UF,
	   Ped.Valor_Total_Pedido,
	   Ped.Qtde_Pedido,
	   Ped.Prim_Data_Pedido,
	   Ped.Ultima_Data_Pedido
  FROM Cliente Cli
	   INNER JOIN
	   (
       SELECT CodCliente,
			  SUM(Valor_Total) AS Valor_Total_Pedido,
			  COUNT(*) AS Qtde_Pedido,
			  MIN(Data_Pedido) AS Prim_Data_Pedido,
			  MAX(Data_Pedido) AS Ultima_Data_Pedido
		 FROM Pedido
        GROUP BY CodCliente
	  ) AS Ped ON Ped.CodCliente = Cli.CodCliente;


-- CLIENTES FORA DO PEDIDO --
-- O COMANDO DISTINCT TRÁS APENAS UMA OCORRÊNCIA SEM DUPLICAR OS MESMOS CLIENTES -- 
SELECT *
  FROM Cliente
 WHERE CodCliente NOT IN
   (SELECT DISTINCT CodCliente FROM Pedido)
;

/*
	CRIAR UMA CONSULTA QUE INFORME OS DADOS DE PRODUTOS JUNTAMENTE COM SUAS QUANTIDADES VENDIDAS E QUANTIDADES DE PEDIDOS REALIZADOS POR PRODUTO.
	ACRESCENTE O VALOR TOTAL DOS PRODUTOS (Qtde * Preco_Unitario)
*/


-- OBTER OS NOMES DA TABELAS DO BANCO --
SELECT NAME
  FROM Sys.tables
 ORDER BY NAME;

SELECT * 
  FROM Produto
 WHERE Cod_Produto NOT IN
 (
 SELECT DISTINCT 
	   Cod_Produto 
	   FROM Item_Pedido
);

-- RETORNAR SOMENTE CLIENTES QUE FIZERAM PEDIDO --
SELECT * 
  FROM Cliente
 WHERE CodCliente IN
 (
	SELECT DISTINCT CodCliente FROM Pedido
 );

--
-- OBJETOS TEMPORÁRIOS
--

SELECT * 
  INTO #Tmp_Cliente -- TABELA TEMPORÁRIA --
  FROM Cliente
 WHERE CodCliente IN
 (
	SELECT DISTINCT CodCliente FROM Pedido
 );

SELECT * FROM #Tmp_Cliente;
DROP TABLE #Tmp_Cliente;

-- QUANDO O SERVER FOR DESCONECTADO, TODOS OS DADOS DA TABELA TEMPORÁRIA SERÃO DELETADOS --



-- TRANSAÇÕES --

SELECT * FROM Cliente;

-- INSERT/UPDATE/DELETE --

BEGIN TRANSACTION; -- ABRIR TRANSAÇÃO --
	UPDATE Cliente SET Nome = 'akbidkh';

ROLLBACK TRANSACTION; -- CANCELAR A TRANSAÇÃO --

COMMIT TRANSACTION; -- CONFIRMAR A TRANSAÇÃO --

BEGIN TRANSACTION
SELECT *
  INTO #Tmp_Cliente
  FROM Cliente
WHERE UF = 'CE';

SELECT * FROM #Tmp_Cliente;

ROLLBACK TRANSACTION;

COMMIT TRANSACTION;


-- IMPORTAÇÃO DE DADOS --
BULK INSERT Cliente
FROM 'E:\Raiz\Cliente_db_Empresa.txt'
WITH(
		FIELDTERMINATOR = ';',
		FirstRow = 1,
		CodePage = 'OEM'
	);

select * from cliente;