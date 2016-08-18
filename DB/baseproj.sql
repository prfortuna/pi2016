-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19-Ago-2016 às 00:04
-- Versão do servidor: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baseproj`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE IF NOT EXISTS `cidades` (
  `id` int(10) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cep` varchar(9) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`, `uf`, `cep`) VALUES
(1, 'Sananduva', 'RS', '99840-000'),
(3, 'Flores da Cunha', 'RS', '99887-000'),
(4, 'Caxias do Sul', 'RS', '99884-000'),
(5, 'Pouso Redondo', 'SC', '99886-000'),
(6, 'Passo Fundo', 'RS', '99776-000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(10) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `endereco` varchar(35) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `id_cidade` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `endereco`, `telefone`, `cpf`, `email`, `id_cidade`) VALUES
(1, 'Paulo R Fortuna', 'Rua Arciso Crestani, 90', '99397208', '0114.039.650-05', 'pr.fortunasan@hotmail.com', 1),
(2, 'Paulo Roberto Fortuna', 'Rua Arciso Crestani, 91', '5433432231', '014.039.650-05', 'pr.fortunasan@hotmail.com.br', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `maquinas`
--

CREATE TABLE IF NOT EXISTS `maquinas` (
  `id` int(11) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(25) NOT NULL,
  `ano` int(11) NOT NULL,
  `cor` varchar(15) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `nmotor` varchar(20) NOT NULL,
  `custo` decimal(10,0) NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `id_cliente` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `maquinas`
--

INSERT INTO `maquinas` (`id`, `marca`, `modelo`, `ano`, `cor`, `serie`, `nmotor`, `custo`, `valor`, `status`, `id_cliente`) VALUES
(1, 'Agrale', '4200', 1986, 'Vermelho', '0000', '0000', '10000', '11000', 1, 1),
(4, 'Valmet', '68', 1998, 'Amarelo', '1111', '1111', '15000', '16000', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pecas`
--

CREATE TABLE IF NOT EXISTS `pecas` (
  `id` int(10) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `marca` varchar(35) NOT NULL,
  `quantidade` varchar(10) NOT NULL,
  `custo` decimal(10,0) NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `localizacao` varchar(35) NOT NULL,
  `aplicacao` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pecas`
--

INSERT INTO `pecas` (`id`, `nome`, `marca`, `quantidade`, `custo`, `valor`, `localizacao`, `aplicacao`) VALUES
(1, 'Pastilha Freio', 'Fremax', '10', '80', '100', 'Freio F1', 'Agrale 4200, 4300 todos anos'),
(2, 'Filtro Ar', 'Propo', '5', '15', '30', 'Filtros F1', 'Agrale 4230 >2000'),
(3, 'PlatÃ´ 4300', 'Displatan', '2', '68', '90', 'p1b5', 'Agrale 4300 83/95 e 4200 81/87');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `empresa` varchar(35) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `email` varchar(35) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cidade` (`id_cidade`);

--
-- Indexes for table `maquinas`
--
ALTER TABLE `maquinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `pecas`
--
ALTER TABLE `pecas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `maquinas`
--
ALTER TABLE `maquinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pecas`
--
ALTER TABLE `pecas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_cidade`) REFERENCES `cidades` (`id`);

--
-- Limitadores para a tabela `maquinas`
--
ALTER TABLE `maquinas`
  ADD CONSTRAINT `maquinas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
