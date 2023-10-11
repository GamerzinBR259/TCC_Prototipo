-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/09/2023 às 17:07
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
-- Banco de dados: `livraria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentario`
--

CREATE TABLE `comentario` (
  `cod` int(11) NOT NULL,
  `mensagem` varchar(6000) NOT NULL,
  `usuario_id` int(6) NOT NULL,
  `livro_id` int(6) NOT NULL,
  `data_publicacao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `comentario`
--

INSERT INTO `comentario` (`cod`, `mensagem`, `usuario_id`, `livro_id`, `data_publicacao`) VALUES
(1, 'ghjg', 16, 5, '2023-09-26'),
(2, 'Livro muito bom, puta que pariu eu chorei de emoção', 16, 5, '2023-09-26'),
(3, 'que musa fdp em!!!\\r\\nmuito bom recomendo', 16, 6, '2023-09-26'),
(4, 'mutcho bon', 16, 6, '2023-09-26'),
(5, 'adqasda', 16, 6, '2023-09-26'),
(6, 'dasdas', 16, 6, '2023-09-26'),
(7, 'asdad', 16, 6, '2023-09-26'),
(8, 'adasda', 16, 6, '2023-09-26'),
(9, 'dasda', 16, 6, '2023-09-26'),
(10, 'vfdg     wer ', 16, 6, '2023-09-26'),
(11, 'dvdfgb\r\nfdsdf', 16, 6, '2023-09-26');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `livro_id` (`livro_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`livro_id`) REFERENCES `files` (`id`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `logi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
