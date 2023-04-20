-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `site_tema_livre`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `objetos`
--

CREATE TABLE IF NOT EXISTS `objetos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=37 ;

--
-- Extraindo dados da tabela `objetos`
--

INSERT INTO `objetos` (`id`, `nome`, `texto`, `link`) VALUES
(28, 'Blockchain Cartorio', 'Implementação de um blockchain para um cartório.', 'https://github.com/JulianoSchaurich/Blockchain_cartorio'),
(29, 'Bubble Sort Tempo', 'Implementação de gráfico para o tempo de ordenação por bubble sort.', 'https://github.com/JulianoSchaurich/Bubble_sort_tempo'),
(30, 'Java Calculadora ', 'Implementação de uma calculadora com interface gráfica em Java.', 'https://github.com/JulianoSchaurich/Java_calculadora_simples'),
(31, 'Java Crud', 'Implementação de um CRUD de pessoas em Java com conexão a banco de dados.', 'https://github.com/JulianoSchaurich/Java_crud_simples'),
(32, 'Java RMI Calculadora', 'Implementação de uma calculadora em Java RMI.', 'https://github.com/JulianoSchaurich/Java_RMI_calculadora'),
(33, 'Arduino Controle LCD', 'Implementação de uma biblioteca para Arduino.', 'https://github.com/JulianoSchaurich/Arduino_controle_lcd'),
(34, 'Arduino Controle Garra', 'Implementação de um código para controlar uma garra robótica com joystick.', 'https://github.com/JulianoSchaurich/Arduino_controle_garra'),
(35, 'Arduino Relogio', 'Implementação de um relógio com Arduino.', 'https://github.com/JulianoSchaurich/Arduino_relogio_lcd'),
(36, 'Blog Site Responsivo', 'Implementação front-end de um site.', 'https://github.com/JulianoSchaurich/Blog_site_responsivo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `nome_arquivo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `nome_arquivo`) VALUES
(1, 'WEB', 'https://cdn-icons-png.flaticon.com/512/493/493805.png'),
(2, 'MOBILE', 'https://cdn-icons-png.flaticon.com/512/0/191.png'),
(4, 'DESKTOP', 'https://assets.stickpng.com/thumbs/588a6ad0d06f6719692a2d29.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `senha`) VALUES
(1, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
