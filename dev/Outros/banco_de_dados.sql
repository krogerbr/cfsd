-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 28/01/2014 às 23:57
-- Versão do servidor: 5.5.34-MariaDB
-- Versão do PHP: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `cfsd2014`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ct_alunos`
--

CREATE TABLE IF NOT EXISTS `ct_alunos` (
  `al_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `num_pm` int(5) DEFAULT NULL,
  `num_curso` int(10) unsigned DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome_funcional` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`al_id`),
  UNIQUE KEY `num_pm` (`num_pm`),
  KEY `nome_funcional` (`nome_funcional`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
