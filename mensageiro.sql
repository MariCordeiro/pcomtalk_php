-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Set-2014 �s 19:52
-- Vers�o do servidor: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mensageiro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE IF NOT EXISTS `dados` (
  `id_msg` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` date NOT NULL,
  `mensagem` text NOT NULL,
  PRIMARY KEY (`id_msg`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id_msg`, `id_usuario`, `nome`, `email`, `data`, `mensagem`) VALUES
(55, 2, 'Mariana', 'mariana@gmail.com.br', '2014-09-30', 'Olá Olá!!'),
(56, 2, 'Mariana Cordeiro dos Santos', 'nana.santos.15@hotmail.com', '2014-09-30', 'Hey Hey'),
(57, 2, 'Mariana Santos', 'mariana.cordeiro.15@gmail.com', '2014-09-30', 'Eeeeei!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_login`, `nome`, `email`, `usuario`, `senha`) VALUES
(2, 'Mariana Cordeiro dos Santos', 'mariana@gmail.com', 'mari', '1234'),
(27, 'João Cesar', 'joaocesar@gmail.com', 'joão', 'joao'),
(28, 'Luci Cordeiro', 'luci@hotmail.com', 'luci', '1234');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `dados`
--
ALTER TABLE `dados`
  ADD CONSTRAINT `dados_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_login`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
