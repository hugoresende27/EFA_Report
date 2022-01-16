-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jan-2022 às 01:01
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `efareports`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `queixas`
--

CREATE TABLE `queixas` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `criada` datetime NOT NULL,
  `data_queixa` datetime NOT NULL,
  `ofensa` int(11) DEFAULT NULL,
  `lagrimas` int(11) DEFAULT NULL,
  `esquecer` int(11) DEFAULT NULL,
  `razoes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `queixas`
--

INSERT INTO `queixas` (`id`, `nome`, `email`, `criada`, `data_queixa`, `ofensa`, `lagrimas`, `esquecer`, `razoes`) VALUES
(1, 'Hugo Emanuel Teixeira Resende', 'hugoresende27@gmail.com', '2022-01-15 17:33:18', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(2, 'Hugo Emanuel Teixeira Resende', 'hugoresende27@gmail.com', '2022-01-15 17:35:41', '2022-01-04 00:00:00', NULL, NULL, NULL, NULL),
(3, 'Hugo Emanuel Teixeira Resende', 'hugoresende27@gmail.com', '2022-01-15 17:37:34', '2022-01-04 00:00:00', NULL, NULL, NULL, NULL),
(4, 'hresende', 'hresende@gmail.com', '2022-01-15 17:41:24', '2022-02-01 00:00:00', NULL, NULL, NULL, NULL),
(5, 'admin', 'admin@gmail.com', '2022-01-15 17:42:09', '2022-01-18 00:00:00', NULL, NULL, NULL, NULL),
(6, 'Hugo Emanuel Teixeira Resende', 'hugoresende27@gmail.com', '2022-01-15 23:59:23', '2021-12-27 00:00:00', NULL, NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `queixas`
--
ALTER TABLE `queixas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `queixas`
--
ALTER TABLE `queixas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
