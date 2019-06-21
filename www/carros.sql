-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 21-Jun-2019 às 18:20
-- Versão do servidor: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `marcas` varchar(20) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `quantidade` varchar(11) DEFAULT NULL,
  `valor_venda` varchar(11) DEFAULT NULL,
  `valor_compra` varchar(11) DEFAULT NULL,
  `Data_de_compra` varchar(15) DEFAULT NULL,
  `vendido` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `caracteristicas`
--

INSERT INTO `caracteristicas` (`id`, `descricao`, `marcas`, `tipo`, `quantidade`, `valor_venda`, `valor_compra`, `Data_de_compra`, `vendido`) VALUES
(12, 'advcdv', 'awefawef', 'sfdvv', '10', 'zvdfsdvzsdv', 'zsdfvzsdvf', 'sdfvsfdv', 'zdsvd'),
(13, 'advcdv', 'awefawef', 'sfdvv', '50', 'zvdfsdvzsdv', 'zsdfvzsdvf', 'sdfvsfdv', 'zdsvd'),
(14, 'advcdv', 'awefawef', 'sfdvv', '60', 'zvdfsdvzsdv', 'zsdfvzsdvf', 'sdfvsfdv', 'zdsvd'),
(15, 'advcdv', 'awefawef', 'sfdvv', '60', 'zvdfsdvzsdv', 'zsdfvzsdvf', 'sdfvsfdv', 'zdsvd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
