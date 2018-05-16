-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 15/05/2018 às 21:15
-- Versão do servidor: 10.0.34-MariaDB-0ubuntu0.16.04.1
-- Versão do PHP: 7.2.5-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `prod_id` int(11) NOT NULL,
  `prod_nome` varchar(255) NOT NULL,
  `prod_descricao` varchar(255) NOT NULL,
  `prod_preco` double(9,2) NOT NULL,
  `prod_altura` float(5,2) NOT NULL DEFAULT '6.00',
  `prod_comprimento` float(5,2) NOT NULL DEFAULT '20.00',
  `prod_peso` float(5,3) NOT NULL,
  `prod_largura` float(5,2) NOT NULL DEFAULT '20.00',
  `prod_promocao` varchar(1) NOT NULL DEFAULT 'n',
  `prod_preco_promocao` decimal(5,2) DEFAULT NULL,
  `prod_data_inicial_promocao` date DEFAULT NULL,
  `prod_data_final_promocao` date DEFAULT NULL,
  `prod_imagem` varchar(255) NOT NULL,
  `prod_data_atualizacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `produtos`
--

INSERT INTO `produtos` (`prod_id`, `prod_nome`, `prod_descricao`, `prod_preco`, `prod_altura`, `prod_comprimento`, `prod_peso`, `prod_largura`, `prod_promocao`, `prod_preco_promocao`, `prod_data_inicial_promocao`, `prod_data_final_promocao`, `prod_imagem`, `prod_data_atualizacao`) VALUES
(1, 'Notebook Dell', 'Notebook Dell Core i10 de 15ª geração. Feito de vibranium e autografado por Linus Trovaldis.', 999.99, 6.00, 20.00, 1.500, 20.00, 'n', NULL, NULL, NULL, 'teste', '2018-05-15 20:06:16'),
(2, 'Guitarra Les Paul', 'Guitarra Les Paul do ano de 1865. Modelo único. Edição de colecionador banhada a outro 24k.', 100000.00, 6.00, 20.00, 10.000, 20.00, 'n', NULL, NULL, NULL, 'teste', '2018-05-15 20:13:51'),
(3, 'Rodo de ouro', 'Rodo de ouro para lavar a casa. Edição de colecionador, ótimo para presentes.', 1.50, 6.00, 20.00, 1.000, 20.00, 'n', NULL, NULL, NULL, 'teste', '2018-05-15 20:14:53'),
(4, 'Sofá de Couro', 'Sofá de couro de última geração. Couro vegetal, não polui o meio ambiente e ainda preserva a vida dos animais.', 2000.00, 6.00, 20.00, 20.300, 20.00, 'n', NULL, NULL, NULL, 'teste', '2018-05-15 20:16:00'),
(5, 'Ventilador Arno', 'Ventilador Arno muito bom ahsuauhsdiahsidfhaidhfiadhfia', 50.98, 6.00, 20.00, 2.330, 20.00, 'n', NULL, NULL, NULL, 'teste', '2018-05-15 21:09:53'),
(6, 'Cadeira Branca', 'Cadeira branca de plastico que é usada para ser alugada em aniversários. Muito bom e bem cara!!!', 200.00, 6.00, 20.00, 0.500, 20.00, 'n', NULL, NULL, NULL, 'teste', '2018-05-15 21:10:54'),
(7, 'Televisão LG', 'Televisão 4k da LG. Muito boa e a tela não quebra nunca. Resistente a água.', 14999.99, 6.00, 20.00, 2.500, 20.00, 'n', NULL, NULL, NULL, 'teste', '2018-05-15 21:11:57'),
(8, 'Porta de madeira suiça', 'Porta de madeira suiça importada. Resistente a cupim e outras pragas! Material refinado.', 300.00, 6.00, 20.00, 8.000, 20.00, 'n', NULL, NULL, NULL, 'teste', '2018-05-15 21:12:51');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
