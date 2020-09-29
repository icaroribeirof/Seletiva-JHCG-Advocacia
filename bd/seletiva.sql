-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Set-2020 às 15:25
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `seletiva`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(155) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `endereco`) VALUES
(8, 'Gabriel Rocconi', '723.288.540-79', 'Rua Cura D\\\'Ars, 866 - Prado, Belo Horizonte - MG'),
(16, 'Diana Costa', '130.198.530-95', 'Rua Cardeal Stepinac 844 - Cidade Nova, Belo Horizonte - MG'),
(20, 'Isabella Almeida', '414.143.030-76', 'Rua Santa Rita Do Itueto 226 - Jardim Leblon, Belo Horizonte - MG'),
(25, 'Ademar Brito', '282.612.960-08', 'Rua Joaquim José Diniz 161 - Tres Barras, Contagem - MG'),
(26, 'Icaro Ribeiro', '147.481.846-39', 'Rua Winston Chuchill 288 - Cabeceiras, Nova Lima - MG'),
(27, 'Icaro Ribeiro', '185.692.336-45', 'Rua Winston Chuchill 288 - Cabeceiras, Nova Lima - MG'),
(29, 'Josias Fernandes', '563.687.566-95', 'Rua Winston Chuchill 288 - Cabeceiras, Nova Lima - MG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrega`
--

DROP TABLE IF EXISTS `entrega`;
CREATE TABLE IF NOT EXISTS `entrega` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(155) NOT NULL,
  `data_solicitacao` datetime NOT NULL DEFAULT current_timestamp(),
  `data_entrega` datetime NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_entregador` int(11) DEFAULT NULL,
  `endereco_busca` varchar(255) DEFAULT NULL,
  `endereco_entrega` varchar(255) NOT NULL,
  `valor_entrega` double(9,2) NOT NULL,
  `status_entrega` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `entrega`
--

INSERT INTO `entrega` (`id`, `nome`, `data_solicitacao`, `data_entrega`, `id_cliente`, `id_entregador`, `endereco_busca`, `endereco_entrega`, `valor_entrega`, `status_entrega`) VALUES
(18, 'Envelope', '2020-08-20 12:54:08', '0000-00-00 00:00:00', 20, 12, 'Rua Vicentina De Souza 350 - Sagrada Família, Belo Horizonte - MG', 'Rua Vicentina De Souza 350 - Sagrada Família, Belo Horizonte - MG', 120.00, 1),
(14, 'Notebook', '2020-08-10 21:00:47', '2020-08-19 21:18:16', 8, 13, 'Rua Itaí, 772 - Santa Efigênia, Belo Horizonte - MG', 'Rua Vicentina De Souza, 350 - Sagrada Família, Belo Horizonte - MG', 35.00, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregador`
--

DROP TABLE IF EXISTS `entregador`;
CREATE TABLE IF NOT EXISTS `entregador` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(155) NOT NULL,
  `foto` longtext DEFAULT NULL,
  `cpf` varchar(14) NOT NULL,
  `data_nascimento` varchar(11) NOT NULL,
  `id_veiculo` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `entregador`
--

INSERT INTO `entregador` (`id`, `nome`, `foto`, `cpf`, `data_nascimento`, `id_veiculo`) VALUES
(4, 'Evaldo Sebastião', 'data:image/jpeg;base64', '054.064.680-65', '21/05/1986', 1),
(12, 'Weverton Silva', 'data:image/jpeg;base64', '998.835.180-13', '05/03/1979', 1),
(13, 'Laura Alves', 'data:image/jpeg;base64', '430.415.800-71', '08/11/1992', 1),
(19, 'Kevin Magzoi', 'data:image/jpeg;base64', '766.845.480-25', '25/01/1996', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `cpf` varchar(14) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `senha` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `cargo` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
