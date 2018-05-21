-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 21/05/2018 às 02:18
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
  `prod_preco` double NOT NULL,
  `prod_altura` float(2,1) NOT NULL,
  `prod_comprimento` float(2,1) NOT NULL,
  `prod_peso` float(2,1) NOT NULL,
  `prod_largura` float(2,1) NOT NULL,
  `prod_promocao` varchar(1) NOT NULL DEFAULT 'n',
  `prod_preco_promocao` decimal(10,0) DEFAULT '0',
  `prod_data_inicial_promocao` date DEFAULT '0000-00-00',
  `prod_data_final_promocao` date DEFAULT '0000-00-00',
  `prod_imagem` varchar(255) NOT NULL,
  `prod_data_insercao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prod_data_atualizacao` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `produtos`
--

INSERT INTO `produtos` (`prod_id`, `prod_nome`, `prod_descricao`, `prod_preco`, `prod_altura`, `prod_comprimento`, `prod_peso`, `prod_largura`, `prod_promocao`, `prod_preco_promocao`, `prod_data_inicial_promocao`, `prod_data_final_promocao`, `prod_imagem`, `prod_data_insercao`, `prod_data_atualizacao`) VALUES
(33, 'Guitarra Amarela', 'Guitarra amarela do Jimi Hendrix. Banhada a ouro.', 800, 20.0, 80.0, 10.0, 50.0, 'n', '0', '0000-00-00', '0000-00-00', '63890803f2bec560c1e8f50feb1823db.jpg', '2018-05-20 18:47:21', '2018-05-20 18:47:21'),
(34, 'PlayStation 4', 'Playstation 4 de ultima geração, acompanha 49 jogos.', 2500, 10.0, 40.0, 3.0, 40.0, 's', '750', '2018-05-19', '2018-05-30', 'c1e1641680b63a03ef1c9408d65d14c4.jpg', '2018-05-20 18:59:26', '2018-05-20 18:59:26'),
(35, 'Celular WP', 'Windows Phone fora de moda. Também doamos se vier pegar no local.', 400, 4.0, 20.0, 5.0, 8.0, 'n', '0', '0000-00-00', '0000-00-00', '9dc99877f2b7bcea09e1a5e50fc7a30b.jpg', '2018-05-20 19:01:52', '2018-05-20 19:01:52'),
(36, 'Controle de Xbox', 'Controle personalizado de Xbox One', 300, 10.0, 8.0, 2.0, 15.0, 's', '280', '2018-05-19', '2018-05-19', '710a86d3fb64ed72ae9f9be7f859882f.jpg', '2018-05-20 19:04:54', '2018-05-20 19:04:54'),
(37, 'Notebook Lothuws', 'Notebook da marca Lothuws. Core i10 de 60ª geração. Possui 38 núcleos + 20 núcleos de GPU.', 9500, 20.0, 20.0, 2.5, 20.0, 'n', '0', '0000-00-00', '0000-00-00', 'a67a60852905db62144f4bb7ac79439c.jpg', '2018-05-20 19:07:12', '2018-05-20 19:07:12'),
(38, 'PlayStation 4 Branco', 'Playstation 4 da cor branca ultra descolado. Ótimo para presentar sua família.', 900, 20.0, 20.0, 10.0, 20.0, 'n', '0', '0000-00-00', '0000-00-00', '3157ce0cb9dee386edb550b46c5ac4d8.png', '2018-05-20 19:08:17', '2018-05-20 19:08:17'),
(39, 'Molho', 'Molho vermelho ótimo para macarronada.', 5, 3.0, 8.0, 4.0, 9.0, 's', '3', '2018-05-18', '2018-05-25', 'c2c277f393e9a76d48dcdad660f4aa71.jpg', '2018-05-20 19:10:26', '2018-05-20 19:10:26'),
(40, 'Carro de desmanche', 'Carro de desmanche. Melhor comprar logo antes que os homi pegue.', 4000, 10.0, 20.0, 80.0, 20.0, 'n', '0', '0000-00-00', '0000-00-00', '925aba6fe35bf16bcf95944b7857593e.jpg', '2018-05-20 19:12:18', '2018-05-20 19:12:18'),
(41, 'Tablet Samsung', 'Tablet Sansumg galaxy pocket. Semi novo.', 600, 20.0, 10.0, 2.5, 10.0, 'n', '0', '0000-00-00', '0000-00-00', 'e5e97d05d9e41ea35bf6afe05b653efe.jpg', '2018-05-21 01:57:51', '2018-05-21 01:57:51');

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
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
