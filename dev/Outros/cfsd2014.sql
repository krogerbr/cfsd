-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 30-Jan-2014 às 18:46
-- Versão do servidor: 5.1.73-0ubuntu0.10.04.1
-- PHP Version: 5.3.2-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cfsd2014`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ct_alunos`
--

CREATE TABLE IF NOT EXISTS `ct_alunos` (
  `al_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `num_pm` int(5) DEFAULT NULL,
  `num_curso` int(10) unsigned DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome_funcional` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `turma` int(11) NOT NULL,
  PRIMARY KEY (`al_id`),
  UNIQUE KEY `num_pm` (`num_pm`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `ct_alunos`
--

INSERT INTO `ct_alunos` (`al_id`, `num_pm`, `num_curso`, `nome`, `nome_funcional`, `turma`) VALUES
(1, 1616663, 420, 'DENER VERSIANI KROGER FILHO', 'KROGER', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ct_listas`
--

CREATE TABLE IF NOT EXISTS `ct_listas` (
  `list_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `head_list` text COLLATE utf8_unicode_ci,
  `data_criacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`list_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `ct_listas`
--

INSERT INTO `ct_listas` (`list_id`, `head_list`, `data_criacao`) VALUES
(1, '{"nome_lista":"Lista de presen\\u00e7a","num_pm":"on","nome":"on","turma":"on"}', '0000-00-00 00:00:00'),
(2, '{"nome_lista":"lista ACAC","num_pm":"on","nome":"on","nome_funcional":"on","turma":"on","num_curso":"on"}', '0000-00-00 00:00:00'),
(3, '{"nome_lista":"lista ACAC","num_pm":"on","nome":"on","nome_funcional":"on","turma":"on","num_curso":"on"}', '0000-00-00 00:00:00'),
(4, '{"nome_lista":"lista estado maior","nome":"on","turma":"on"}', '0000-00-00 00:00:00'),
(5, '{"nome_lista":"lista estado maior","nome":"on","turma":"on"}', '0000-00-00 00:00:00'),
(6, '{"nome_lista":"lista estado maior","nome":"on","turma":"on"}', '0000-00-00 00:00:00'),
(7, '{"nome_lista":"lista estado maior","nome":"on","turma":"on"}', '0000-00-00 00:00:00'),
(8, '{"nome_lista":"lista estado maior","nome":"on","turma":"on"}', '0000-00-00 00:00:00'),
(9, '{"nome_lista":"lista estado maior","nome":"on","turma":"on"}', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ct_superiores`
--

CREATE TABLE IF NOT EXISTS `ct_superiores` (
  `superior_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`superior_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dt_listas`
--

CREATE TABLE IF NOT EXISTS `dt_listas` (
  `data_list_id` int(11) NOT NULL AUTO_INCREMENT,
  `list_id` int(11) NOT NULL,
  `al_id` int(11) NOT NULL,
  `superior_id` int(11) NOT NULL,
  PRIMARY KEY (`data_list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
