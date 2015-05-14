-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Mai 14, 2015 as 02:39 AM
-- Versão do Servidor: 5.1.44
-- Versão do PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `jp7`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita`
--

CREATE TABLE IF NOT EXISTS `receita` (
  `id_receita` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `preco` double(8,2) NOT NULL,
  `quantidade` int(10) unsigned NOT NULL,
  `endereco_loja` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `nome_loja` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `arquivo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_receita`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `receita`
--

