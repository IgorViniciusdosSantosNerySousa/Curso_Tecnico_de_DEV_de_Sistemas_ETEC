CREATE DATABASE DB_INSCRICAO;
GO

USE DB_INSCRICAO;
GO

CREATE TABLE curso (
    cod_curso INTEGER PRIMARY KEY,
    nome_curso VARCHAR (50)
);

CREATE TABLE turno (
    cod_turno INTEGER PRIMARY KEY,
    nome_turno VARCHAR (50)
);

CREATE TABLE inscricao (
    cod_inscricao INTEGER PRIMARY KEY,
    nome VARCHAR (100),
    idade NUMERIC,
    celular VARCHAR(50),
    telefone VARCHAR(50),
    data_inscricao VARCHAR(60),
    email VARCHAR (300),
    responsavel VARCHAR(100),
    endereco VARCHAR(200),
    bairro VARCHAR(200),
    cidade VARCHAR(200),
    cep NUMERIC,
	fk_turno_cod_turno INTEGER,
    fk_curso_cod_curso INTEGER
);

select * from curso;

insert into curso
(cod_curso, nome_curso)
values
(109, 'Desenvolvimento de Games'),
(110, 'Design Gráfico'),
(111, 'Gastronomia'),
(112, 'Nutrição'),
(113, 'Desenvolvimento de Sitemas');

select * from turno;

insert into turno
(cod_turno, nome_turno)
values
(1, 'Manhã'),
(2, 'Tarde'),
(3, 'Noite'),
(4, 'Integral'),
(5, 'Sábado Manhã'),
(6, 'Sábado Tarde');

select * from inscricao;

insert into inscricao 
(cod_inscricao, nome, idade, celular, telefone, data_inscricao, email, responsavel, endereco, bairro, cidade, cep, fk_turno_cod_turno, fk_curso_cod_curso)
values
(1, 'Cleuzia Souza', 90, '(11)94002-8922', '(11)4002-8922', '21/06/2024', 'cleuziasouza1900@gmail.com', 'José Souza (Filho)', 'Rua Salmão da Pesada, 190.', 'Itaquera', 'São Paulo', 08123-406, 2, 110),
(2, 'Jeferson Bezerra', 52, '(11)91109-2001','(11)2298-2004', '28/06/2025', 'jefersonbezarra28@gmail.com', 'Emily Bezerra (Filha)', 'Rua Juiz de Fora, 122', 'Guaianases', 'São Paulo', 0840-832, 1, 113),
(3, 'Aluisio Almaeida', 76, '(15)98601-1536', '(15)25234485', '16/03/2017', 'almeidaaluisio@hotmail.com', 'Antonio Almeida (Irmão)', 'Rua Abece Deeefe, 123', 'Vila Mariana', 'Sorocaba', 08652-198, 5, 111),
(4, 'Elizabete Mozzato', 28, '(12)96534-1439', '(12)4461-9843', '06/08/2023', 'elizabetemozzato@gmail.com', 'Pablo Mozzato (Mãe)', 'Rua Maresias, 28', 'Alto Céu', 'Rio de Janeiro', 08729-539, 4, 112),
(5, 'Isis Correia', 21, '(11)96801-1356', '(11)2523-7643', '28/02/2020', 'isiscorreia@yahoo.com', 'Isabel Correia (Irmã)', 'Rua Alumino Tiz, 233', 'Perracine', 'Poá', 08762-579, 6, 109),
(6, 'Pedro Lola', 25, '(11)98152-5243', '(15)5463-7243', '18/01/2023', 'pedroloiola@hotmail.com', 'Alfredo Lola (Pai)', 'Rua Pedrada Boemia, 14', 'Moema', 'São Paulo', 08749-555,3, 112),
(7, 'Ariana Grande', 32, '(13)97465-8282', '(13)2882-9888', '05/12/2023', 'arianagrande555@yahoo.com.br', 'Erick Junior (Irmão)', 'Rua Alamedas Sul, 55', 'Itaquera', 'Bahia', 08735-727, 1, 111),
(8, 'Isabelly Sousa', 17, '(11)98735-1111', '(11)7326-5896', '22/09/2022', 'isabellysousa@hotmail.com', 'Nicolas Sousa (Irmão)', 'Avenida Atroz Lerre, 33', 'Guaianases', 'Bahia', 08976-888, 4, 109),
(9, 'Igor Nery', 16, '(11)91818-6266', '(11)6161-3655', '05/09/2027', 'igornery@gmail.com', 'Brenno Nery (Irmão)', 'Rua Probiotica Made, 222', 'Mogi', 'São Paulo', 08776-888, 2, 110),
(10, 'Weslley Souza', 16, '(11)98532-1765', '(11)2552-6397', '21/09/2024', 'weslleysouza16@gmail.com', 'Lorrany Silva (amiga)', 'Rua Francisco Orellana, 8A', 'Guaianases', 'São Paulo', 08002-650, 4, 113); 

select * from inscricao
where fk_turno_cod_turno = 1

select * from inscricao
where fk_turno_cod_turno = 5

select * from inscricao
where fk_turno_cod_turno = 6

update inscricao set responsavel = 'Frank Grande (Irmão)'
where responsavel = 'Erick Junior (Irmão)'

delete curso
where cod_curso = 113