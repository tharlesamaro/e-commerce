-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 15/05/2018 às 17:26
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
  `prod_preco` decimal(5,2) NOT NULL,
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
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
