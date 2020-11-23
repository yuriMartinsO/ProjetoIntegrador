-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 23-Nov-2020 às 02:28
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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ticket`
--

INSERT INTO `ticket` (`dataInicio`, `nomeContato`, `telefone`, `email`, `solicitacao`, `usuario`, `status`, `id`, `titulo`) VALUES
('2020-11-22', 'lucas hamanzaque', '1195856215215', 'yuri.olivera@hotmail.com', 'acabou o chamado 3 fim', 1, 1, 1, 'problema'),
('2020-11-22', 'roberto farias de souza', '152102', 'yuri.olivera@hotmail.com', 'fim 2', 1, 0, 2, 'problema'),
('2020-11-22', 'yuri martins', '1195856215215', 'yuri.olivera@hotmail.com', 'problema teste 22', 1, 1, 3, 'problema'),
('2020-11-22', 'yuri martins', '1195856215215', 'yuri.olivera@hotmail.com', 'problema teste 22', 1, 1, 4, 'problema'),
('2020-11-22', 'yuri martins', '1195856215215', 'yuri.olivera@hotmail.com', 'problema teste 22', 1, 1, 5, 'problema'),
('1970-01-01', '', '', 'ss@tempao', 'a muito tempo atras', 1, 1, 9, ''),
('2000-01-01', 'ademilson garcia', '', '', 'corrigir data para 01 01 20000', 1, 1, 10, ''),
('2020-11-22', '', '', '', '', 1, 1, 11, 'teste de data'),
('6000-01-01', 'san', 'an', 'san@san.com', 'sant', 1, 1, 12, 'sant'),
('5001-02-01', 'san2', 'san2', 'san2@san2.com', 'san2', 1, 1, 13, 'san2'),
('2020-11-22', 'yuri martins', '1195856215215', 'yuri.olivera@hotmail.com', 'problema teste 22', 1, 1, 6, 'problema'),
('2020-11-22', 'lucas de almeida', '1195856215215', 'yuri.olivera@hotmail.com', 'problema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema com aTVproblema teste 22', 1, 1, 7, 'problema com aTV'),
('1590-02-02', 'marcos garcia', '1195856215215', 'yuri.olivera@hotmail.com', 'problema com o PC', 1, 0, 8, 'problema com o o PC');

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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `telefone`, `email`, `tipoConta`, `endereco`, `usuario`, `senha`, `nome`) VALUES
(1, '115252052', 'yuri.olivera@hotmail.com', 1, 'olgadesouza@hotmail.com', 'olivera3', '123', ''),
(2, '115252052', 'yuri.olivera@hotmail.com', 1, 'olgadesouza@hotmail.com', 'olivera1', '123', ''),
(3, '1195856215215', 'does.not.matter.malaquias@gmail.com', 1, 'd152112', 'yuri.olivera@hotmail.com2', '698d51a19d8a121ce581499d7b701668', 'blabla'),
(4, '1195856215215', 'does.not.matter.malaquias@gmail.com', 1, 'd152112', 'yuri.olivera@hotmail.com', '698d51a19d8a121ce581499d7b701668', 'blabla'),
(5, '11982859258', 'yurimartins3705@', 2, 'rua das aguas', 'oliver', '9e412e06ead981b4b920139db00348cb', 'Yuri Martins'),
(6, '1195856215215', 'yurimartins3705@gmail.com', 1, 'rua das bainhas 12205', '111as', '698d51a19d8a121ce581499d7b701668', 'fulano ciclano de beltrano'),
(7, '1195856215215', 'yurimartins3705@gmail.com', 1, 'rua das bainhas 12205', '111asdsadasdasdqw', '698d51a19d8a121ce581499d7b701668', 'fulano ciclano de beltrano'),
(8, '1195856215215', 'yurimartins3705@gmail.com', 1, 'rua das bainhas 12205', '111asdasdQDSCAX', '698d51a19d8a121ce581499d7b701668', 'fulano ciclano de beltrano'),
(9, '1195856215215', 'yurimartins3705@gmail.com', 1, 'rua das bainhas 12205', '111asd', '698d51a19d8a121ce581499d7b701668', 'fulano ciclano de beltrano'),
(10, '1195856215215', 'does.not.matter.malaquias@gmail.com', 2, 'rua das bainhas 12205', 'yuri.olivera@hotmail.com4', '698d51a19d8a121ce581499d7b701668', 'fulano ciclano de beltrano'),
(11, '1195856215215', 'does.not.matter.malaquias@gmail.com', 2, 'd152112', 'yuri.olivera@hotmail.com5', 'c81e728d9d4c2f636f067f89cc14862c', 'fulano ciclano de beltrano 2222'),
(12, '1195856215215', 'yuri.olivera@hotmail.com', 1, 'd152112', 'yuri.olivera@hotmail.com6', '698d51a19d8a121ce581499d7b701668', 'Teste teste '),
(13, '', '', 1, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(14, '11954652589', 'y@hotmail.com', 1, 'dasdas d', 'dasd', 'd41d8cd98f00b204e9800998ecf8427e', 'carambola'),
(15, '1112200', '222', 1, '2222', '222', 'bcbe3365e6ac95ea2c0343a2395834dd', 'usuario teste'),
(16, '1111', '11@ds.com', 2, '111111', 'oliverayuri', '202cb962ac59075b964b07152d234b70', 'usuario final');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
