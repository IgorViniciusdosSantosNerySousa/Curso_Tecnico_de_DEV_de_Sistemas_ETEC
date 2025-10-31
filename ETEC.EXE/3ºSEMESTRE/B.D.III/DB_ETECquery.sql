USE DB_ETEC

sp_HELPTEXT pr_cons_Cliente;

Create Procedure Pr_Cons_Cliente
as
Begin
	set nocount on;

	Select CODCLI as Cod_Cliente,
			NOME as Nome_Cliente,
			CONTATO as Contato_Cliente,
			DTNASC as DtNasc_Cliente,
			DTCAD as DtCadastro_Cliente
		from CLIENTE
	Order by NOME;
End


Alter Procedure Pr_Cons_Cliente
(
@Cod_Cliente int = null, -- Variáveis que vão receber os valores quando a procedure for executada // Inicia como NULL para listar todos caso nenhum seja inserido
@Nome_Cliente varchar(45) = null 
) 
as
Begin
	set nocount on;

	Select CODCLI as Cod_Cliente,
			NOME as Nome_Cliente,
			CONTATO as Contato_Cliente,
			DTNASC as DtNasc_Cliente,
			DTCAD as DtCadastro_Cliente
		from CLIENTE
		where CODCLI = ISNULL(@Cod_Cliente, CODCLI) -- Se o valor da variável for nulo, compare os parâmetros dentro dos parêntesis (mostra tudo)
			and NOME like '%'+ ISNULL(@Nome_Cliente, NOME) +'%' -- Pesquisar por nome
	Order by NOME;
End

Execute Pr_Cons_Cliente @Nome_Cliente = 'nilson';
						@Cod_Cliente=11


sp_help Cliente; -- Retorna as informações da tabela

 /*
incluir registro na tabela cliente
Autor: 
Data:

 */


SELECT * FROM CLIENTE

CREATE PROCEDURE Pr_Inc_clientes
(@CodCli INT,
 @Nome VARCHAR(45),
 @DtNasc DATE,
 @Contato VARCHAR(45),
 @Empresa VARCHAR(2) = NULL -- SE FOR OPICIONAL, COLOCAR EM NULL --
)

AS
BEGIN
	SET NOCOUNT ON;
	INSERT INTO CLIENTE
	(CODCLI, NOME, DTNASC, CONTATO, EMPRESA, DTCAD)
	VALUES
	(@CODCLI, @NOME, @DTNASC, @CONTATO, @EMPRESA, GETDATE())
END

EXECUTE Pr_Inc_clientes
@Codcli=258,
@Nome='Bill Gates Divonico',
@Contato='Melinda Gates',
@dtNasc='1990-02-02',
@Empresa='MS';

Execute pr_cons_cliente; 

CREATE PROCEDURE Pr_Update_Cliente @codcli INT, @nome VARCHAR(100), @DTNASC DATE, @CONTATO VARCHAR(100), @EMPRESA VARCHAR(2), @DTCAD VARCHAR(100)
AS 
BEGIN 
	SET NOCOUNT ON;
	UPDATE CLIENTE
	SET
		CodCli = @codcli,
		NOME = @Nome,
		DtNasc = @Dtnasc,
		Contato = @contato,
		Empresa = @empresa,
		DtCad = GETDATE()
	where CODCLI = @CodCli;
END

SELECT * FROM cliente

EXECUTE Pr_Update_Cliente
@Codcli=258,
@Nome='Elizabeth McFly',
@Contato='Bom Dia & Cia',
@dtNasc='1950-10-12',
@Empresa='Mt',
@DTCAD = '1990-03-12'


/* trigger = gatilho -> TRIGGER DML// table: INSERT, UPDATE E DELETE. 
(O TRIGGER PODE SER USADO EM DDL CASO SEJA USADO ALGUM COMANDO DDL). 

Quando o foi inserido dados através do INSERT dentro de uma trigger, o trigger disponibilizará a tabela 
(INSERTED <- mostra os dados inseridos na tabela).

Quando se é aplicado o DELETE em uma tabela, o trigger disponibilizará a tabela 
(DELETED <- mostra os dados ainda não deletados da tabela).

Quando o UPDATE for aplicado na trigger, ele mostrará as tabelas (INSERTED e DELETED <- mostra os dados atualizados da tabela 
e mostra os antigos dados que foram substituídos). 
*/

SELECT * FROM PRODUTO;

-- CRIANDO UM CENÁRIO --
CREATE TABLE HIST_PRODUTO_PRECO
(
	CodProd INT NOT NULL,
	VlrUnit SMALLMONEY,
	Dt_Inicio_Vigencia DATE
);

GO
SP_RENAME 
	'HIST_PRODUTO_PRECO.Dt_Inicio_Vigencia',
	Dt_Atualizacao;

SELECT * FROM HIST_PRODUTO_PRECO;

/*
	TRIGGER
	COMANDOS SQL QUE SERÃO EXECUTADOS AO EXECUTAR
	COMANDOS INSERT, UPDATE E/OU DELETE EM UMA TABELA
	DE BANCO DE DADOS.
	-- TABELAS DISPONÍVEIS -- 
	INSERT ->> INSERTED (NOVOS REGISTROS QUE SERÃO INSERIDOS)
	DELETE ->> DELETED (REGISTROS QUE SERÃO DELETADOS)
	UPDATE ->> INSERTED E DELETED  
*/

-- CRIANDO UMA TRIGGER --

-- ================================================
-- Template generated from Template Explorer using:
-- Create Trigger (New Menu).SQL
--
-- Use the Specify Values for Template Parameters 
-- command (Ctrl-Shift-M) to fill in the parameter 
-- values below.
--
-- See additional Create Trigger templates for more
-- examples of different Trigger statements.
--
-- This block of comments will not be included in
-- the definition of the function.
-- ================================================
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		Você
-- Create date: 23/03/2025
-- Description:	Guardar Histórico de Atualização de Preços de Produtos na tabela HIST_PRODUTO_PRECO
-- =============================================
CREATE TRIGGER dbo.Tr_Produto_Preco
   ON  Produto 
   AFTER UPDATE 
AS 
BEGIN
	SET NOCOUNT ON;

	INSERT INTO HIST_PRODUTO_PRECO

	(CodProd, VlrUnit, Dt_Atualizacao)

	SELECT CodProd, VlrUnit, GETDATE() AS Dt_Atualizacao
	  FROM DELETED
END
GO

SELECT * FROM PRODUTO;

UPDATE PRODUTO SET VLRUNIT = 5.20 WHERE CODPROD = 600;

SELECT * FROM HIST_PRODUTO_PRECO;

SELECT * FROM SYS.OBJECTS WHERE NAME LIKE 'TR%';
				-- OU --
SELECT * FROM SYS.OBJECTS WHERE TYPE = 'TR';

SP_HELPTEXT TR_DEL_CLIENTE;

-- TRIGGER TR_DEL_CLIENTE --
-- =============================================  
-- Author:  <Author,,Name>  
-- Create date: <Create Date,,>  
-- Description: <Description,,>  
-- =============================================  
CREATE TRIGGER [dbo].[TR_DEL_CLIENTE]  
   ON [dbo].[CLIENTE]  
   AFTER DELETE, UPDATE  

AS   
BEGIN  
  
 SET NOCOUNT ON;  
  
 INSERT INTO CLIENTE_COPIA   
 (CODCLI, NOME, DTNASC, CONTATO, DtCad, EMPRESA, DT_TRANSACAO, TIPO_TRANSACAO)  
   
 SELECT CODCLI,NOME,DTNASC,CONTATO,DtCad,EMPRESA, GETDATE(), 'D' -- D DE DELETADO --
   FROM DELETED;  
  
END  

SELECT * FROM CLIENTE_COPIA


SP_HELPTEXT TR_UPD_CLIENTE;

-- TRIGGER TR_UPD_CLIENTE -- 
-- =============================================    
-- Author: VOCE   
-- Create date: 21/10/2019   
-- Description: Guardar Dados de clientes Atualizados   
-- =============================================    
CREATE TRIGGER [dbo].[TR_UPD_CLIENTE]    
   ON  [dbo].[CLIENTE]    
   AFTER UPDATE    
AS     
BEGIN      
 SET NOCOUNT ON;       
 INSERT INTO CLIENTE_COPIA     
 (CODCLI, NOME, DTNASC, CONTATO, DtCad, EMPRESA, DT_TRANSACAO, TIPO_TRANSACAO)         
 SELECT CODCLI,NOME,DTNASC,CONTATO,DtCad,EMPRESA, GETDATE() AS DT_TRANS, 'A' AS TP_TRANS -- A DE ATUALIZADO --    
   FROM DELETED;    
END;



-- ============================ ATIVIDADE ============================ --

-- TRIGGER TR_DEL_ITEM_PEDIDO -- 
-- =============================================    
-- Author: VOCE   
-- Create date: 28/03/2025   
-- Description: ATUALIZAR A TABELA PEDIDO, SUBTRAINDO DA COLUNA (VLTOTAL),
--				O VALOR DO ITEM_PEDIDO SERÁ EXCLUÍDO.
-- =============================================  
CREATE TRIGGER TR_DEL_ITEM_PEDIDO
     ON ITEMPEDIDO
  AFTER DELETE
AS
BEGIN
 SET NOCOUNT ON;
	
	UPDATE P
	   SET VLTOTAL = VLTOTAL - QTDE * VLRUNIT
	  FROM PEDIDO P 
		   INNER JOIN
		   DELETED I ON I.NUMPEDIDO = P.NUMPEDIDO
END;

UPDATE P
   SET VLTOTAL = VLTOTAL - VLTOTITEM
  FROM PEDIDO P 
	   INNER JOIN
	   (SELECT NUMPEDIDO, SUM(I.QTDE * I.VLRUNIT) AS VLTOTITEM
		  FROM ITEMPEDIDO I 
	     GROUP BY NUMPEDIDO) I ON I.NUMPEDIDO = P.NUMPEDIDO

UPDATE P 
    set VLTOTAL = VlTotItem
  From Pedido P
       Inner Join
	   (Select NumPedido, Sum(i.QTDE * i.VLRUNIT) as VlTotItem
	      From ITEMPEDIDO i
		 Group by NumPedido) I on I.NUMPEDIDO = p.NUMPEDIDO

SELECT * FROM ITEMPEDIDO;
SELECT * FROM PEDIDO;

DELETE FROM ITEMPEDIDO 
  WHERE CODPROD = 200;


-- =============================================    
-- Author: VOCE   
-- Create date: 28/03/2025   
-- Description: ATUALIZAR A TABELA PEDIDO, SOMANDO DA COLUNA (VLTOTAL),
--	            O VALOR DO ITEM_PEDIDO SERÁ INCUÍDO.	
-- =============================================  

CREATE TRIGGER TR_INS_ITEM_PEDIDO
     ON ITEMPEDIDO
  AFTER INSERT
AS
BEGIN
 SET NOCOUNT ON;	
	UPDATE P
	   SET VLTOTAL = VLTOTAL + (QTDE * VLRUNIT)
	  FROM PEDIDO P 
		   INNER JOIN
		   INSERTED I ON I.NUMPEDIDO = P.NUMPEDIDO
END;

--11/04---------------------------------------- CRIANDO VIEWS --------------------------------------------------

SELECT * FROM SYS.VIEWS;

SP_HELPTEXT cliente_vw;

SELECT * FROM CLIENTE_VW;

GO
CREATE VIEW Cliente_Pedido_Vw
AS
SELECT Cli.COD_CLI, Cli.NOME_CLI, Cli.DT_CAD_CLI, Cli.EMPRESA_CLI, Ped.Valor_Total
	FROM CLIENTE_VW cli
		LEFT JOIN(
		SELECT CODCLI AS Cod_Cli, SUM(VLTOTAL) AS Valor_Total
			FROM PEDIDO
			GROUP BY CODCLI
		)Ped ON Ped.Cod_Cli = cli.COD_CLI;



GO
SELECT * FROM Cliente_Pedido_Vw
 WHERE NOT Valor_Total IS NULL;

sp_helptext Pedido_VW

GO
CREATE VIEW Pedido_Item_Vw
AS
SELECT Ped.NUMPEDIDO, Ped.DTPEDIDO, Ped.CODCLI, It.Quantidade_Item, It.Valor_Total_Item
  FROM Pedido ped
	   LEFT JOIN(
		    SELECT NUMPEDIDO AS Num_Pedido, SUM(QTDE) AS Quantidade_Item, SUM(VLRUNIT*QTDE) AS Valor_Total_Item
			  FROM ITEMPEDIDO
		  GROUP BY NUMPEDIDO
		)It ON It.Num_Pedido = Ped.NUMPEDIDO;

-- 25/04 --
SELECT * FROM Pedido_VW
SELECT * FROM Pedido_Item_Vw

CREATE VIEW dbo.Pedido_VW  
AS  
SELECT dbo.PEDIDO.NUMPEDIDO, dbo.PEDIDO.DTPEDIDO, dbo.PEDIDO.CODCLI, dbo.PEDIDO.VLTOTAL, dbo.CLIENTE.NOME, dbo.CLIENTE.DTNASC,   
       dbo.CLIENTE.CONTATO, dbo.CLIENTE.DtCad, dbo.ITEMPEDIDO.CODPROD, dbo.ITEMPEDIDO.VLRUNIT AS VLRUNIT_PED, dbo.ITEMPEDIDO.QTDE,   
       dbo.PRODUTO.DESCRICAO, dbo.PRODUTO.VLRUNIT  
FROM   dbo.PEDIDO INNER JOIN  
       dbo.CLIENTE ON dbo.PEDIDO.CODCLI = dbo.CLIENTE.CODCLI INNER JOIN  
       dbo.ITEMPEDIDO ON dbo.PEDIDO.NUMPEDIDO = dbo.ITEMPEDIDO.NUMPEDIDO INNER JOIN  
       dbo.PRODUTO ON dbo.ITEMPEDIDO.CODPROD = dbo.PRODUTO.CODPROD  


--------------------------------------------------- 09/05 ---------------------------------------------------
SELECT * FROM PEDIDO

-- FORMA DIDÁTICA --

-- CRIAR TABELA TEMPORÁRIA --
CREATE TABLE #TMP_RESUMO
(CODCLI INT,
 MEDIAPEDIDO MONEY
);

SELECT CODCLI, AVG(VlTotal) AS Media
  FROM PEDIDO
GROUP BY CODCLI;

SELECT * FROM #TMP_RESUMO

-- NÃO DIDÁTICA -- 
SELECT CODCLI, AVG(VlTotal) AS Media
  INTO #TMP_RESUMO -- AQUI ELE JÁ MANDA DIRETAMENTE PARA A TABELA TEMPORÁRIA --
  FROM PEDIDO
GROUP BY CODCLI;

SELECT * FROM #TMP_RESUMO

SELECT AVG(MEDIA) AS MEDIA_PED_CLI
  FROM #TMP_RESUMO

-- CRIANDO TABELA NA MEMÓRIA --
GO
WITH
 RESUMO AS(
	SELECT CODCLI, AVG(VLTOTAL) AS MEDIA
	  FROM PEDIDO
  GROUP BY CODCLI
),
RES_FINAL AS
(SELECT *
   FROM RESUMO
  WHERE MEDIA >= (SELECT AVG(MEDIA) AS MEDIA_PED_CLI FROM #TMP_RESUMO)
)

SELECT * FROM RES_FINAL;


----------------------------------------- 23/05 ---------------------------------------------------
-- FUNÇÕES EM BANCO DE DADOS --
GO
CREATE FUNCTION FN_DELTA(
	@COEF_A NUMERIC (10,3),
	@COEF_B NUMERIC (10,3),
	@COEF_C NUMERIC (10,3)
)
RETURNS NUMERIC (10,3)
AS
BEGIN 
	DECLARE @DELTA NUMERIC (10,3)
	SELECT @DELTA = POWER(@COEF_B,2) - (4 * @COEF_A * @COEF_C) -- POWER É USADO PARA POTENCIAÇÃO, SQUARE PARA RAIZ QUADRADA. --
	RETURN @DELTA
END

DECLARE @RAIZ int;
 SET @RAIZ = DB_ETEC.DBO.FN_DELTA (2,4,6);
PRINT @RAIZ;

IF(SELECT DB_ETEC.DBO.FN_DELTA (2,4,6)) = 0
	PRINT 'DUAS RAIZES DIFERENTES'
ELSE
	IF(SELECT DB_ETEC.DBO.FN_DELTA (2,4,6)) > 0
		PRINT 'DUAS RAIZES DIFERENTES'
	ELSE
		PRINT 'NÃO HÁ RAIZ'

SELECT * 
  FROM CLIENTE
 WHERE CODCLI = DB_ETEC.DBO.FN_DELTA (2,4,CODCLI);

 GO
CREATE FUNCTION FN_IS_PED_CLI(
	@CODCLI INT
)
RETURNS BIT
AS
BEGIN 
	DECLARE @TEM_PEDIDO BIT;
	SET @TEM_PEDIDO = 1;
	IF(SELECT ISNULL(COUNT(*),0) FROM PEDIDO WHERE CODCLI = @CODCLI) = 0
		SET @TEM_PEDIDO = 0
	RETURN @TEM_PEDIDO;
END

-- SABER QUAIS CLIENTES NÃO TEM PEDIDOS --
SELECT * FROM CLIENTE
 WHERE DB_ETEC.DBO.FN_IS_PED_CLI(CODCLI) = 0;

 SELECT *, DB_ETEC.DBO.FN_IS_PED_CLI(CODCLI) AS TEMPEDIDO -- VAI INSERIR NA COLUNA TEMPEDIDO SE ALGUM CLIENTE TIVER PEDIDO -- 
   FROM CLIENTE;



------------------------------------------------- 30/05 -------------------------------------------------
SP_WHO;

------------------------------------------------- 06/06 -------------------------------------------------
-- REVISAMOS COMO CRIAR USUÁRIOS, DAR PERMISSÕES, ETC --


/* PERMISSÕES EM BANCO DE DADOS 
GRANT 
REVOKE 
DENY
*/
