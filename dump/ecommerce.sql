-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 17/05/2018 às 15:07
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
  `prod_data_insercao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prod_data_atualizacao` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `produtos`
--

INSERT INTO `produtos` (`prod_id`, `prod_nome`, `prod_descricao`, `prod_preco`, `prod_altura`, `prod_comprimento`, `prod_peso`, `prod_largura`, `prod_promocao`, `prod_preco_promocao`, `prod_data_inicial_promocao`, `prod_data_final_promocao`, `prod_imagem`, `prod_data_insercao`, `prod_data_atualizacao`) VALUES
(1, 'Notebook Dell', 'Notebook Dell Core i10 de 15ª geração. Feito de vibranium e autografado por Linus Trovaldis.', 999.99, 6.00, 20.00, 1.500, 20.00, 'n', NULL, NULL, NULL, 'teste.jpg', '2018-05-15 20:06:16', '2018-05-17 15:03:21'),
(2, 'Guitarra Les Paul', 'Guitarra Les Paul do ano de 1865. Modelo único. Edição de colecionador banhada a outro 24k.', 100000.00, 6.00, 20.00, 10.000, 20.00, 'n', NULL, NULL, NULL, 'teste.jpg', '2018-05-15 20:13:51', '2018-05-17 15:03:21'),
(3, 'Rodo de ouro', 'Rodo de ouro para lavar a casa. Edição de colecionador, ótimo para presentes.', 1.50, 6.00, 20.00, 1.000, 20.00, 'n', NULL, NULL, NULL, 'teste.jpg', '2018-05-15 20:14:53', '2018-05-17 15:03:21'),
(4, 'Sofá de Couro', 'Sofá de couro de última geração. Couro vegetal, não polui o meio ambiente e ainda preserva a vida dos animais.', 2000.00, 6.00, 20.00, 20.300, 20.00, 'n', NULL, NULL, NULL, 'teste.jpg', '2018-05-15 20:16:00', '2018-05-17 15:03:21'),
(5, 'Ventilador Arno', 'Ventilador Arno muito bom ahsuauhsdiahsidfhaidhfiadhfia', 50.98, 6.00, 20.00, 2.330, 20.00, 'n', NULL, NULL, NULL, 'teste.jpg', '2018-05-15 21:09:53', '2018-05-17 15:03:21'),
(6, 'Cadeira Branca', 'Cadeira branca de plastico que é usada para ser alugada em aniversários. Muito bom e bem cara!!!', 200.00, 6.00, 20.00, 0.500, 20.00, 'n', NULL, NULL, NULL, 'teste.jpg', '2018-05-15 21:10:54', '2018-05-17 15:03:21'),
(7, 'Televisão LG', 'Televisão 4k da LG. Muito boa e a tela não quebra nunca. Resistente a água.', 14999.99, 6.00, 20.00, 2.500, 20.00, 's', '500.00', '2018-05-15', '2018-05-23', 'teste.jpg', '2018-05-15 21:11:57', '2018-05-17 15:03:21'),
(8, 'Porta de madeira suiça', 'Porta de madeira suiça importada. Resistente a cupim e outras pragas! Material refinado.', 300.00, 6.00, 20.00, 8.000, 20.00, 'n', NULL, NULL, NULL, 'teste.jpg', '2018-05-15 21:12:51', '2018-05-17 15:03:21'),
(9, 'Produto 9', 'adfkhdkfahkjdhfkahfkahdkhfakdhfjakhdfkahdkfhakdjhfkahdkfhasdkjfhakdfha', 400.00, 6.00, 20.00, 40.000, 20.00, 'n', NULL, NULL, NULL, 'teste.jpg', '2018-05-16 17:10:29', '2018-05-17 15:03:21'),
(10, 'Produto 10', 'adfkhdkfahkjdhfkahfkahdkhfakdhfjakhdfkahdkfhakdjhfkahdkfhasdkjfhakdfha', 400.00, 6.00, 20.00, 40.000, 20.00, 'n', NULL, NULL, NULL, 'teste.jpg', '2018-05-16 17:11:01', '2018-05-17 15:03:21'),
(11, 'produto 11', 'dfadfasdfasdfasdfkabdskfbsadkf akfad fajdkfkasd kfakdfakj dkjabdksj fjksdkjfakjdfka', 1000.00, 6.00, 20.00, 7.000, 20.00, 'n', '800.00', '2018-05-15', '2018-05-17', 'teste.jpg', '2018-05-16 17:12:23', '2018-05-17 15:05:52'),
(12, 'produto 12', 'fadsfasdfadsf adf adf ad fa dfadfadfadf adfadf adfa dfadfadfadsf adfasdf adf adf ad', 10000.00, 6.00, 20.00, 5.000, 20.00, 'n', NULL, NULL, NULL, 'teste.jpg', '2018-05-16 17:12:23', '2018-05-17 15:03:21'),
(13, 'produto 13', 'sfsadfasdfa adfadfadsfa adfadfasdf adfadfadf adfasd afsadfasd adsfadsfa fasdfa fasdfad fadfasdf', 400.00, 6.00, 20.00, 4.000, 20.00, 'n', NULL, NULL, NULL, 'teste.jpg', '2018-05-16 17:13:22', '2018-05-17 15:03:21'),
(14, 'produto 14', 'dfa d fa fa ds fa f adfadfad fadfadsfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 700.00, 6.00, 20.00, 56.000, 20.00, 'n', NULL, NULL, NULL, 'teste.jpg', '2018-05-16 17:13:52', '2018-05-17 15:03:21'),
(15, 'produto 15', 'dfa d fa fa ds fa f adfadfad fadfadsfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 700.00, 6.00, 20.00, 56.000, 20.00, 'n', NULL, NULL, NULL, 'teste.jpg', '2018-05-16 17:14:21', '2018-05-17 15:03:21'),
(16, 'produto 16', 'dfa d fa fa ds fa f adfadfad fadfadsfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 700.00, 6.00, 20.00, 56.000, 20.00, 'n', NULL, NULL, NULL, 'teste.jpg', '2018-05-16 17:14:36', '2018-05-17 15:03:21'),
(17, 'produto 17', 'dfa d fa fa ds fa f adfadfad fadfadsfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 700.00, 6.00, 20.00, 56.000, 20.00, 'n', NULL, NULL, NULL, 'teste.jpg', '2018-05-16 17:14:53', '2018-05-17 15:03:21'),
(18, 'produto 18', 'dfa d fa fa ds fa f adfadfad fadfadsfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 700.00, 6.00, 20.00, 56.000, 20.00, 'n', NULL, NULL, NULL, 'teste.jpg', '2018-05-16 17:15:11', '2018-05-17 15:03:21'),
(19, 'produto 19', 'dfa d fa fa ds fa f adfadfad fadfadsfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 700.00, 6.00, 20.00, 56.000, 20.00, 'n', NULL, NULL, NULL, 'teste.jpg', '2018-05-16 17:15:26', '2018-05-17 15:03:21');

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
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
