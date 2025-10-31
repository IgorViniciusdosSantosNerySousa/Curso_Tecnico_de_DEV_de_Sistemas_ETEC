CREATE DATABASE db_Clinica
GO
USE db_Clinica
GO

CREATE TABLE Paciente
(id_paciente INT not null PRIMARY KEY IDENTITY (1,1),
	Nome VARCHAR(80) not null,
	Sexo CHAR(1),
	Data_Nasc DATE
);

INSERT INTO Paciente
(Nome, data_nasc, Sexo)
VALUES
('Joaquim', '2000-02-02', 'M'),
('Joaquina', '2002-03-05', 'F'),
('Pedro Pereira,', '2002-09-03', 'M'),
('Tyler', '1995-05-09', 'M'),
('Krystal', '1996-06-09', 'F');

SELECT * FROM Paciente
 WHERE Sexo = 'M'
 ORDER BY Nome;

SELECT * FROM Paciente
 WHERE Sexo = 'M'
 ORDER BY Nome DESC;  --DESC busca do Z ao A--

SELECT *, YEAR(Data_Nasc) AS Ano
 FROM Paciente;