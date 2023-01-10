-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jan-2023 às 01:24
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `rg`, `cpf`, `telefone`, `ativo`) VALUES
(4, 'Carlos Jonas pereira da fonseca', 'carlosjonasfon@gmail.com', '8888888888-8', '888.888.888-88', '(88) 88888-888', 1),
(5, 'ana claera', 'aasdasdasd@asdasd', '8888888888-8', '888.888.888-88', '(88) 88888-888', 1),
(6, 'jonas', 'jonas@gmail.com', '9999999999-9', '999.999.999-42', '(85) 99999-999', 1),
(7, 'jonas', 'jonas@gmail.com', '9999999999-9', '999.999.999-42', '(85) 99999-999', 1),
(8, 'jonas', 'jonas@gmail.com', '9999999999-9', '999.999.999-42', '(99)99999-9999', 1),
(9, 'jonas', 'jonas@gmail.com', '9999999999-9', '999.999.999-42', '(85) 99999-999', 1),
(10, 'jonas', 'jonas@gmail.com', '9999999999-9', '999.999.999-42', '(85) 99999-999', 1),
(11, 'jonas', 'jonas@gmail.com', '9999999999-9', '999.999.999-42', '(85) 99999-999', 1),
(12, 'jonas', 'jonas@gmail.com', '9999999999-9', '999.999.999-42', '(85) 99999-999', 1),
(13, 'jonas', 'jonas@gmail.com', '9999999999-9', '999.999.999-42', '(85) 99999-999', 1),
(14, 'jonas', 'jonas@gmail.com', '9999999999-9', '999.999.999-42', '(85) 99999-999', 1),
(15, 'jonas', 'jonas@gmail.com', '9999999999-9', '999.999.999-42', '(85) 99999-999', 1),
(16, 'Carlos Jonas pereira da fonseca', 'carlos@gmail.com', '8585858585-8', '858.585.858-58', '(85) 85858-585', 0),
(18, 'jonas pereira', 'alguem@gmail', '8582852828-1', '451.414.156-41', '(88)88888-8888', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
