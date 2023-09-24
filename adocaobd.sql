-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/09/2023 às 05:56
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `adocaobd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `animais`
--

CREATE TABLE `animais` (
  `id` int(100) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `nome_pet` varchar(20) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `porte` varchar(30) NOT NULL,
  `ano` int(4) NOT NULL,
  `endereco` varchar(120) NOT NULL,
  `ong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ong`
--

CREATE TABLE `ong` (
  `id` int(100) NOT NULL,
  `nome` varchar(160) NOT NULL,
  `email` varchar(160) NOT NULL,
  `endereco` varchar(160) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `senha` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ong`
--

INSERT INTO `ong` (`id`, `nome`, `email`, `endereco`, `telefone`, `senha`) VALUES
(3, 'Jorge', 'jorge@gmail.com', 'Av. Salgado Filho, 3501 - Centro, Guarulhos - SP, 07115-000', '1199999999', '$2y$10$nJlIujOPT/TPtISMpZ.uROCnuiLmRVpc7pC8XN95sUwuF1fWXmWIe'),
(6, 'A Ordem dos Animais', 'ordemdosanimais@ong.com', 'rua das ordem, 345 - Bonsucesso', '0000000000', '$2y$10$xPM6owBpJQ4ospPnUMuj4u.V8rFoVCj/L4fsKHm2qzBQx94BbvDIG');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(160) NOT NULL,
  `email` varchar(160) NOT NULL,
  `senha` varchar(500) NOT NULL,
  `id` int(100) NOT NULL,
  `telefone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email`, `senha`, `id`, `telefone`) VALUES
('Jorge', 'jorge@gmail.com', '$2y$10$b5pJXhUvjARhu0bDQWFH3uRLiw/W6Vj8NpflEHsNSAfCB633Z57.W', 83, '11988776655'),
('Leticia', 'leticia@email.com', '$2y$10$KtiS0x74Y3wt.ckrPaS/3edn8jjT1RPBMoN1bGNDPFf8zyCze93zy', 84, '123456789');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `animais`
--
ALTER TABLE `animais`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `ong`
--
ALTER TABLE `ong`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animais`
--
ALTER TABLE `animais`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ong`
--
ALTER TABLE `ong`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
