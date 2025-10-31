CREATE DATABASE FUNCAO;

USE FUNCAO
go

CREATE TABLE TBL(
ID INT NOT NULL IDENTITY (1,1),
NOMEDOPRODUTO VARCHAR (50) NOT NULL,
PRECODOPRODUTO MONEY NOT NULL
)


-- Descrever o resultado dos comando a seguir --

SELECT * FROM TBL -- mostra todos os dados da tabela TBL --
INSERT INTO TBL VALUES ('ABAJUR', 20) -- insere o dado "Abajur" com o valor "20" na tabela TBL --
INSERT INTO TBL VALUES ('LAMPADA', 5) -- insere o dado "Lampada" com o valor "5" na tabela TBL --
INSERT INTO TBL VALUES ('FOSFORO', 50) -- insere o dado "Fosforo" com o valor "50" na tabela TBL --
INSERT INTO TBL VALUES ('VENTILADOR', 5) -- insere o dado "Ventilador" com o valor "5" na tabela TBL --
INSERT INTO TBL VALUES ('TRAVESSEIRO', 10) -- insere o dado "Travesseiro" com o valor "10" na tabela TBL --

/** MAX **/
SELECT MAX(PRECODOPRODUTO) AS PRECOMAX FROM TBL -- ele mostrará os valores máximos da tabela TBL --

/** MIN **/
SELECT MIN(PRECODOPRODUTO) AS PRECOMIN FROM TBL -- ele mostrará os valores mínimos da tabela TBL --

/** AVG/MEDIA **/
SELECT AVG (PRECODOPRODUTO) AS MEDIA FROM TBL -- ele mostrará a média entre os valores da tabela TBL --

/** SOMA **/
SELECT SUM (PRECODOPRODUTO) AS SOMA FROM TBL -- ele somará todos os valores da tabela TBL --

/** CONTAR **/

SELECT COUNT (*) AS QUANTIDADEDEPRODUTOS FROM TBL -- Ele conta quantos produtos a na coluna 'QUANTIDADEDEPRODUTOS' --

/** CONTAR DISTINTO **/
SELECT COUNT (DISTINCT NOMEDOPRODUTO) FROM TBL -- Aqui ele mostrá as colunas da tabela TBL de forma distinta, e o valor que há na coluna --
SELECT COUNT (NOMEDOPRODUTO) FROM TBL -- Aqui ele mostrá as colunas da tabela TBL, mas não de forma distinta, e o valor que há na coluna --
SELECT COUNT (DISTINCT NOMEDOPRODUTO) FROM TBL 
DELETE FROM TBL WHERE ID=2 -- O comando delete vai deletar da tabela TBL a segunda coluna 'ID=2' --


/** SOMA DO ABAJUR **/
SELECT NOMEDOPRODUTO, SUM(PRECODOPRODUTO) 
FROM TBL -- mostra os dados da coluna "NOMEDOPRODUTO" e soma os valores da coluna "PRECODOPRODUTO" da tabela TBL --
	WHERE NOMEDOPRODUTO LIKE '%ABAJUR' -- apenas o produto 'abajur' foi selecionado para ser somado --
	GROUP BY NOMEDOPRODUTO -- vai agrupar a partir da coluna 'NOMEDOPRODUTO' --

/** SOMA DOS PRODUTOS COM A LETRA V **/
SELECT NOMEDOPRODUTO , SUM (PRECODOPRODUTO)
FROM TBL -- mostra os dados da coluna "NOMEDOPRODUTO" e soma os valores da coluna "PRECODOPRODUTO" da tabela TBL --
	WHERE NOMEDOPRODUTO LIKE 'V%' -- apenas o produto 'Ventilador' foi selecionado para ser somado --
	GROUP BY NOMEDOPRODUTO -- vai agrupar a partir da coluna 'NOMEDOPRODUTO' --


--COMANDO HAVING
SELECT NOMEDOPRODUTO, SUM(PRECODOPRODUTO)
FROM TBL -- mostra os dados da coluna "NOMEDOPRODUTO" e soma os valores da coluna "PRECODOPRODUTO" da tabela TBL --
	GROUP BY NOMEDOPRODUTO -- vai agrupar a partir da coluna 'NOMEDOPRODUTO' --
	HAVING SUM (PRECODOPRODUTO) <10 -- mostra apenas as somas abaixo de 10 --

--COMANDO HAVING COM MAIOR QUE DEZ
SELECT NOMEDOPRODUTO ,SUM(PRECODOPRODUTO)
FROM TBL -- mostra os dados da coluna "NOMEDOPRODUTO" e soma os valores da coluna "PRECODOPRODUTO" da tabela TBL --
	GROUP BY NOMEDOPRODUTO -- vai agrupar a partir da coluna 'NOMEDOPRODUTO' --
	HAVING SUM (PRECODOPRODUTO) >10 -- mostra apenas as somas acima de 10 --


--CONCATENAR
SELECT CONCAT (NOMEDOPRODUTO,PRECODOPRODUTO) FROM TBL -- ele ira juntar 'NOMEDOPRODUTO' com o 'PRECODOPRODUTO' na tabela 'TBL' --
WHERE NOMEDOPRODUTO LIKE 'V%' -- apenas a coluna 'NOMEDOPRODUTO' no valor 'V%' <- VENTILADOR '--

-- COMANDO CONCATENAR
SELECT CONCAT (NOMEDOPRODUTO,PRECODOPRODUTO) AS CONCATENAR -- -- ele ira juntar 'NOMEDOPRODUTO' com o 'PRECODOPRODUTO' com o nome 'CONCATENAR' -- 
FROM TBL -- na tabela 'TBL' -- 
WHERE NOMEDOPRODUTO LIKE 'V%' -- apenas a coluna 'NOMEDOPRODUTO' no valor 'V%' <- VENTILADOR '--

--SUBSTRING
SELECT SUBSTRING (NOMEDOPRODUTO,1,5) -- ele cria uma sub string para o nome do produto de 1 a 5 caracteres --
FROM TBL -- da tabela 'TBL' --
WHERE NOMEDOPRODUTO = 'VENTILADOR' -- apenas no valor 'VENTILADOR' --

-- COMPRIMENTO DE UMA STRING.
SELECT LEN (NOMEDOPRODUTO) -- aqui ele mostrará quantos caractéres tem a string --
FROM TBL -- na tabela 'TBL'
WHERE ID = 1 -- apenas o código 1 será mostrado --

-- COMPRIMENTO DE UMA STRIN EX2.
SELECT LEN (NOMEDOPRODUTO) -- aqui ele mostrará quantos caractéres tem a string --
FROM TBL -- na tabela 'TBL'
WHERE ID = 5 -- apenas o código 5 será mostrado --

-- COMANDO REPLACE 
SELECT REPLACE (NOMEDOPRODUTO,'VENTILADOR', 'PEDRO')
FROM TBL
WHERE ID=4

-- COMANDO REPLACE 
SELECT REPLACE (NOMEDOPRODUTO,'FOSFORO', 'EU') -- ele substituirá o 'NOMEDOPRODUTO' no valor 'FOSFORO' para 'EU' -- 
FROM TBL -- na tabela 'TBL' --
WHERE ID=3 -- apenas o código 3 será mostrado --

-- COMANDO REPLACE EX2 
SELECT REPLACE (NOMEDOPRODUTO,'FOSFORO', 'PATRICK') -- ele substituirá o 'NOMEDOPRODUTO' no valor 'FOSFORO' para 'PATRICK' -- 
FROM TBL -- na tabela 'TBL' --
WHERE ID=3 -- apenas o código 3 será mostrado --

