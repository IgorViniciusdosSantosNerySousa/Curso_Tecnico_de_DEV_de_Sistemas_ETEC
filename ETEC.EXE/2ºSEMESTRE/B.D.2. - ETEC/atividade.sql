CREATE DATABASE bd_aluno;
go

USE bd_aluno;
go

CREATE TABLE Cad_Aluno (
	Cod_Aluno INTEGER IDENTITY (1,1) PRIMARY KEY,
	Cod_Matricula INTEGER,
	Nome_Aluno VARCHAR (100),
	Idade NUMERIC,
	Sexo VARCHAR (50),
	Contato VARCHAR (30),
	Endereco VARCHAR (200)
);

drop table Cad_Aluno;
select *from Cad_Aluno;

INSERT INTO Cad_Aluno 
(Cod_Matricula, Nome_Aluno, Idade, Sexo, Contato, Endereco)
values
(100, 'Bill Cypher', 15, 'Masculino', '(11)92874-8796', 'Rua Dos Sem Lei, 157.'),
(101, 'Armando Pinto', 16, 'Masculino', '(11)91845-3764', 'Rua dos quintos dos infernos, 666.'),
(102, 'Kety Cume', 15, 'Preferiu não identificar', '(11)90954-1945', 'Rua Auschwitz, 173.'),
(103, 'Sujiroki Mimame', 19, 'Masculino', '(69) 5194-1541', 'sarapintose street, 69.'),
(104, 'Senkuna Mata', 23, 'Não Binário, Trans, Bi-sexual, gay', '(13)95204-5634', 'Rua da das raparigas, 100.'), 
(105, 'Abner', 14, 'Macho Alpha Sigma', '(11) 99778-5421', 'Rua dos homi macho, 10.'),
(106, 'Ednaldo Pereira', 51, 'ADMIN SUPREMO', '(11)99906-4946', 'Rua raça absoluta além da conciência esse é o poder 
que beira a onipotencia capaz de superaar uma forma suprema, ∞.'),
(107, 'Doutor Enéas Carneiro', 68, 'DIVINDADE', '(11)99999-9999', 'Rua Senado do Partido Correto, 1988.'), 
(108, 'Gil Brother Away', 66, 'Pai de familia', '(11)91456-5321', 'Rua Para Com Essa Porra Ai, 420.'),
(109, 'LUANGAMEPLAY', 21, 'MINECRAFT', '(11)91743-6362', 'Rua da mãe do Renan, 99.'),
(110, 'Enzo', 6, 'Criança Encapetada', '(11)94002-8922', 'Rua vai pro inferno, 66.'),
(111, 'Sophia Carson', 26, 'Feminino', '(51) 2039-2983', 'New Jersey street, 120.'),
(112, 'Tyler McFly', 27, 'Masculino', '(51) 2803-1082', 'Ayrton Senna Street, 10.'),
(113, 'Krystal', 24, 'Feminino', '(11) 93287-0493', 'Rua Espaço Cideral, 019.'),
(114, 'Tikomôna Kamá', 45, 'Suspeito', '(11) 99216-8237', 'Rua lapada seca, 27.');

CREATE TABLE tb_produtos (
	cod_produto INTEGER IDENTITY (1,1) PRIMARY KEY,
	nome_produto VARCHAR (60),
	tipo_produto VARCHAR (80),
	qtd_produto NUMERIC,
	valor_produto NUMERIC (12,2)
);


INSERT INTO tb_produtos
(nome_produto, tipo_produto, qtd_produto, valor_produto)
values
('VIDEOGAME', 'ELETRÔNICOS', 100, 400.00),
('IMPRESSORA', 'INFORMÁTICA', 150, 350.00),
('TELEVISOR', 'ELETRÔNICOS', 400, 600.00),
('MOUSE', 'INFORMÁTICA', 50, 20.00),
('CELULAR', 'TELEFONE', 300, 250.00),
('CÂMERA DIGITAL', 'DIGITAIS', 200, 400.00),
('PROCESSADOR', 'INFORMÁTICA', 100, 300.00),
('FILMADORA DIGITAL', 'DIGITAIS', 200, 700.00),
('TECLADO', 'INFORMÁTICA', 50, 30.00),
('MONITOR', 'INFORMÁTICA', 100, 200.00);

SELECT nome_produto, tipo_produto FROM tb_produtos;

SELECT nome_produto, qtd_produto, valor_produto FROM tb_produtos;

SELECT nome_produto, valor_produto, tipo_produto, qtd_produto
  FROM tb_produtos
  ORDER BY nome_produto;

SELECT nome_produto, valor_produto, qtd_produto 
  FROM tb_produtos
  ORDER BY nome_produto desc;

SELECT * FROM tb_produtos
  WHERE cod_produto = 9;

SELECT * FROM tb_produtos
  WHERE tipo_produto = 'INFORMÁTICA';

SELECT * FROM tb_produtos
  WHERE tipo_produto = 'INFORMÁTICA'
  ORDER BY nome_produto; 

SELECT * FROM tb_produtos
	WHERE valor_produto BETWEEN 200 and 300;

SELECT * FROM tb_produtos
	WHERE valor_produto BETWEEN 500 and 650;

SELECT * FROM tb_produtos
  WHERE tipo_produto = 'DIGITAIS'
  ORDER BY nome_produto desc;