-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 29-Nov-2020 às 18:47
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetointegrador`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `dataInicio` date NOT NULL,
  `nomeContato` varchar(150) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `email` varchar(150) NOT NULL,
  `solicitacao` text NOT NULL,
  `usuario` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ticket`
--

INSERT INTO `ticket` (`dataInicio`, `nomeContato`, `telefone`, `email`, `solicitacao`, `usuario`, `status`, `id`, `titulo`) VALUES
('1590-02-02', 'marcos garcia', '1195856215215', 'yuri.olivera@hotmail.com', 'problema com o PC', 16, 0, 8, 'problema com o o PC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telefone` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `tipoConta` int(11) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` text NOT NULL,
  `nome` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `telefone`, `email`, `tipoConta`, `endereco`, `usuario`, `senha`, `nome`) VALUES
(18, '111111111111', '', 1, '', 'marcos', '202cb962ac59075b964b07152d234b70', 'Marcos garcia fernandes'),
(16, '1111', '11@ds.com', 2, '111111', 'adm', '202cb962ac59075b964b07152d234b70', 'usuario final');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
