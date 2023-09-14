-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/09/2023 às 20:38
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

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
-- Estrutura para tabela `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `image_filename` varchar(255) DEFAULT NULL,
  `pdf_filename` varchar(255) DEFAULT NULL,
  `sinopse` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `files`
--

INSERT INTO `files` (`id`, `title`, `genre`, `image_filename`, `pdf_filename`, `sinopse`) VALUES
(5, 'mordida', 'Fantasia, Romance', 'mordida.jpg', 'Mordida - Sarah Andersen.pdf', NULL),
(6, 'A musa dos pesadelos', 'Fantasia, Romance, Ação e aventura', 'pesadelo.jpg', 'A-Musa-Dos-Pesadelos-Laini-Taylor.pdf', 'As respostas aos mistérios apresentados no primeiro volume estão nesta linda história de amor e ódio, vingança e redenção, destruição e salvação – a emocionante sequência do aclamado Um estranho sonhador.\r\nSarai vive e respira pesadelos desde os seis anos de idade. Ela acreditava que conhecia todo horror e que nada a surpreenderia – mas estava errada. Após o final surpreendente do primeiro volume da duologia, Sarai e Lazlo – o estranho sonhador – lutam para compreender os novos limites de si mes'),
(7, 'A musa dos pesadelos', 'Fantasia, Romance, Ação e aventura', 'pesadelo.jpg', 'A-Musa-Dos-Pesadelos-Laini-Taylor.pdf', 'As respostas aos mistérios apresentados no primeiro volume estão nesta linda história de amor e ódio, vingança e redenção, destruição e salvação – a emocionante sequência do aclamado Um estranho sonhador.\r\nSarai vive e respira pesadelos desde os seis anos de idade. Ela acreditava que conhecia todo horror e que nada a surpreenderia – mas estava errada. Após o final surpreendente do primeiro volume da duologia, Sarai e Lazlo – o estranho sonhador – lutam para compreender os novos limites de si mes'),
(8, 'O nome do vento', 'Fantasia, Ação e aventura', 'vento.jpg', 'O-Nome-do-Vento-a-Cronica-do-Matador-do-Rei-1-Patrick-Rothfuss.pdf', 'Ninguém sabe ao certo quem é o herói ou o vilão desse fascinante universo criado por Patrick Rothfuss. Na realidade, essas duas figuras se concentram em Kote, um homem enigmático que se esconde sob a identidade de proprietário da hospedaria Marco do Percurso.\r\n\r\nDa infância numa trupe de artistas itinerantes, passando pelos anos vividos numa cidade hostil e pelo esforço para ingressar na escola de magia, O nome do vento acompanha a trajetória de Kote e as duas forças que movem sua vida: o desejo'),
(9, 'O nome do vento', 'Fantasia, Ação e aventura', 'vento.jpg', 'O-Nome-do-Vento-a-Cronica-do-Matador-do-Rei-1-Patrick-Rothfuss.pdf', 'Ninguém sabe ao certo quem é o herói ou o vilão desse fascinante universo criado por Patrick Rothfuss. Na realidade, essas duas figuras se concentram em Kote, um homem enigmático que se esconde sob a identidade de proprietário da hospedaria Marco do Percurso.\r\n\r\nDa infância numa trupe de artistas itinerantes, passando pelos anos vividos numa cidade hostil e pelo esforço para ingressar na escola de magia, O nome do vento acompanha a trajetória de Kote e as duas forças que movem sua vida: o desejo'),
(10, 'O nome do vento', 'Fantasia, Ação e aventura', 'vento.jpg', 'O-Nome-do-Vento-a-Cronica-do-Matador-do-Rei-1-Patrick-Rothfuss.pdf', 'Ninguém sabe ao certo quem é o herói ou o vilão desse fascinante universo criado por Patrick Rothfuss. Na realidade, essas duas figuras se concentram em Kote, um homem enigmático que se esconde sob a identidade de proprietário da hospedaria Marco do Percurso.\r\n\r\nDa infância numa trupe de artistas itinerantes, passando pelos anos vividos numa cidade hostil e pelo esforço para ingressar na escola de magia, O nome do vento acompanha a trajetória de Kote e as duas forças que movem sua vida: o desejo'),
(11, 'ola', 'Terror', 'mordida.jpg', 'Mordida - Sarah Andersen.pdf', 'sczx vcx');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
