-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 29/11/2016 às 18:36
-- Versão do servidor: 10.1.13-MariaDB
-- Versão do PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `database`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `information` varchar(1000) NOT NULL,
  `categoria` varchar(60) NOT NULL,
  `img` varchar(50) NOT NULL,
  `local` varchar(200) NOT NULL,
  `horario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `eventos`
--

INSERT INTO `eventos` (`id`, `name`, `information`, `categoria`, `img`, `local`, `horario`) VALUES
(19, 'felino', 'agressivo', 'rock', 'Tigre.jpg', '', ''),
(42, 'Ironmaiden', 'Na hora R$100,00 masculino e mulheres free ate a meia noite. Local : Opera arena 1', 'heavymetal', 'iron_maiden.jpg', 'Estadio Nacional Mane Garrincha', 'Abertura dos portoes as 20h'),
(43, 'GunsNRoses', 'Na hora R$100,00 masculino e mulheres free ate a meia noite. Local : Opera arena 1', 'hardrock', 'guns.jpg', 'Estadio Nacional Mane Garrincha', 'Abertura dos portoes as 20h');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` int(11) NOT NULL,
  `email` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `gender` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `age` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `user`
--

INSERT INTO `user` (`id`, `fullname`, `password`, `email`, `gender`, `age`) VALUES
(1, 'Matt', 12345, 'matt@lopes', 'masculino', 22);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
