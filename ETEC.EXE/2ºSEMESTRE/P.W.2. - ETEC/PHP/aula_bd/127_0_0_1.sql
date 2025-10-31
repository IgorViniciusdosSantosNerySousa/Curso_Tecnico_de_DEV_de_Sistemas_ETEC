-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Set-2024 às 20:38
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_clientes`
--
CREATE DATABASE IF NOT EXISTS `bd_clientes` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bd_clientes`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

DROP TABLE IF EXISTS `tb_clientes`;
CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` int NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`codigo`, `nome`, `email`, `foto`, `sexo`, `senha`) VALUES
(1, 'elder', 'eldermoraes@gmail.com', 'fotos/121ed9061559ed2b0f04e730569ab02b.jpg', 3, 'jdakdhcgf1736'),
(2, 'croissant', 'croissant@gmail.com', 'fotos/ae1505e93d963b4d62c6f39f96435271.jpg', 4, 'eummmorpgsandbox');
--
-- Banco de dados: `db_eventos`
--
CREATE DATABASE IF NOT EXISTS `db_eventos` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_eventos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_eventos`
--

DROP TABLE IF EXISTS `tb_eventos`;
CREATE TABLE IF NOT EXISTS `tb_eventos` (
  `id_evento` int NOT NULL AUTO_INCREMENT,
  `nome_apresentacao` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `nome_produtor` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contato` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sexo` int NOT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_eventos`
--

INSERT INTO `tb_eventos` (`id_evento`, `nome_apresentacao`, `data`, `nome_produtor`, `email`, `contato`, `sexo`, `senha`, `foto`) VALUES
(1, 'Soniquete', '2024-08-07', 'Roberto Queiroz', 'rqprodutora@gmail.com', '11933851021', 0, '', ''),
(9, 'festa do folclore', '2002-03-01', '', '', '', 0, '', ''),
(3, 'gato', '0000-00-00', '', '', '', 0, '', ''),
(4, 'indie', '0000-00-00', '', '', '', 0, '', ''),
(5, 'show da wandinha', '0000-00-00', '', '', '', 0, '', ''),
(6, 'sarsicha', '0000-00-00', '', '', '', 0, '', ''),
(7, 'show da vanuza', '0000-00-00', '', '', '', 0, '', ''),
(8, 'Cachorro', '2024-07-31', 'Pavao', 'dog@churras.com', '11945251031', 0, '', ''),
(10, 'Virada Cultural', '2024-08-20', 'Pavao', 'junim@play.com.br', '11945251031', 0, '', ''),
(11, '', '0000-00-00', '', '', '', 0, '', ''),
(12, 'disco roller', '2024-08-07', 'thiago cardoso', 'thiagocardoso@gmail.com', '11933334444', 0, '', ''),
(13, 'Apresentação', '2024-08-28', 'Produtor', 'apresentacao_produtor', '11989156475', 3, '123', 'fotos/7b77e72bc2721bc1fb48fc60f2f7fb71.jpg');
--
-- Banco de dados: `teste`
--
CREATE DATABASE IF NOT EXISTS `teste` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `teste`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `cod_dep` int NOT NULL AUTO_INCREMENT,
  `descr` varchar(40) NOT NULL,
  `localiz` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_dep`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
