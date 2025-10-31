-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Dez-2024 às 00:45
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
-- Banco de dados: `bd_pokemon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_adm`
--

DROP TABLE IF EXISTS `tb_adm`;
CREATE TABLE IF NOT EXISTS `tb_adm` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_adm`
--

INSERT INTO `tb_adm` (`codigo`, `nome`, `email`, `senha`) VALUES
(10, 'Brenno Miguel', 'zepimenta@hotmail.com', '$2y$10$wZ4TX.JfutFfpkwNyQhdNu83GEYA8vwzqDISG635us1rvq1KQq57i'),
(11, 'Igor Nery', 'jalambipau@gmail.com', '$2y$10$1zDgrzJhM5b70k/gc88HfuNIVokyO1V1Eud37aDxk2eizhTESrMpO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pokemon`
--

DROP TABLE IF EXISTS `tb_pokemon`;
CREATE TABLE IF NOT EXISTS `tb_pokemon` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int NOT NULL,
  `foto` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` int NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_pokemon`
--

INSERT INTO `tb_pokemon` (`codigo`, `nome`, `tipo`, `foto`, `sexo`) VALUES
(10, 'Ditto', 4, 'fotos/c444ee8a46f25c3a76842c89597c2175.jpg', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
