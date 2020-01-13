-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 12-Jan-2020 às 22:56
-- Versão do servidor: 10.3.18-MariaDB-0+deb10u1
-- versão do PHP: 7.3.11-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `noticias`
--
CREATE DATABASE IF NOT EXISTS `noticias` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `noticias`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `url` varchar(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`id`, `title`, `url`, `text`) VALUES
(1, 'Homem é preso por fazer nada', 'homem-preso', 'Texto da notícia do homem preso ...'),
(2, 'Novo iPhone 23', 'novo-iphone-23', 'Notícia sobre o iphone'),
(3, 'Novo curso de NodeJS de Bonieky', 'novo-curso-de-nodejs-de-bonieky', 'Notícia referente ao novo curso de NodeJS');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
