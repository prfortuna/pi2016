-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Set-2016 às 02:33
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
-- Estrutura da tabela `aluguel`
--

CREATE TABLE IF NOT EXISTS `aluguel` (
  `id` int(11) NOT NULL,
  `cliente` varchar(35) NOT NULL,
  `maquina` varchar(35) NOT NULL,
  `safra` varchar(35) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE IF NOT EXISTS `cidades` (
  `id` int(10) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `uf` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`, `uf`) VALUES
(1, 'Sananduva', 'RS'),
(3, 'Flores da Cunha', 'RS'),
(4, 'Caxias do Sul', 'RS'),
(5, 'Pouso Redondo', 'SC'),
(6, 'Passo Fundo', 'RS'),
(8, 'Rio Branco', 'AC'),
(10, 'Jardinopolis', 'SC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(10) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `endereco` varchar(35) NOT NULL,
  `id_cidade` int(10) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `redesocial` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `endereco`, `id_cidade`, `cep`, `telefone`, `celular`, `redesocial`, `email`) VALUES
(1, 'Paulo R Fortuna', '0114.039.650-05', 'Rua Arciso Crestani, 90', 1, '', '99397208', '', '', 'pr.fortunasan@hotmail.com'),
(2, 'Paulo Roberto Fortuna', '014.039.650-05', 'Rua Arciso Crestani, 91', 4, '', '5433432231', '', '', 'pr.fortunasan@hotmail.com.br'),
(3, 'Eder Martini', '014.039.650-05', 'Rua Julio de Castilhos, 400', 3, '', '33432222', '', '', 'contintas@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `manutencao`
--

CREATE TABLE IF NOT EXISTS `manutencao` (
  `id` int(11) NOT NULL,
  `data` varchar(8) NOT NULL,
  `maquinas` int(11) NOT NULL,
  `pecas` int(11) NOT NULL,
  `valor` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id_cliente` int(10) NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `maquinas`
--

INSERT INTO `maquinas` (`id`, `marca`, `modelo`, `ano`, `cor`, `serie`, `nmotor`, `custo`, `valor`, `status`, `id_cliente`, `id_marca`) VALUES
(1, 'Agrale', '4200', 1986, 'Vermelho', '0000', '0000', '10000', '11000', 1, 1, 0),
(4, 'Valmet', '68', 1998, 'Amarelo', '1111', '1111', '15000', '16000', 1, 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcas`
--

CREATE TABLE IF NOT EXISTS `marcas` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pecas`
--

CREATE TABLE IF NOT EXISTS `pecas` (
  `id` int(10) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `quantidade` varchar(10) NOT NULL,
  `custo` decimal(10,0) NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `localizacao` varchar(35) NOT NULL,
  `aplicacao` text NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pecas`
--

INSERT INTO `pecas` (`id`, `nome`, `quantidade`, `custo`, `valor`, `localizacao`, `aplicacao`, `id_marca`) VALUES
(1, 'Pastilha Freio', '10', '80', '100', 'Freio F1', 'Agrale 4200, 4300 todos anos', 0),
(2, 'Filtro Ar', '5', '15', '30', 'Filtros F1', 'Agrale 4230 >2000', 0),
(3, 'PlatÃ´ 4300', '2', '68', '90', 'p1b5', 'Agrale 4300 83/95 e 4200 81/87', 0),
(4, 'Terceiro Ponto', '10', '120', '150', 'p2', 'Agrale 4100', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `cliente` varchar(35) NOT NULL,
  `maquina` varchar(35) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` decimal(6,2) NOT NULL,
  `total` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `safras`
--

CREATE TABLE IF NOT EXISTS `safras` (
  `id` int(11) NOT NULL,
  `ano` varchar(5) NOT NULL,
  `duracao` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `aluguel`
--
ALTER TABLE `aluguel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_cliente` (`cliente`),
  ADD KEY `idx_maq` (`maquina`),
  ADD KEY `idx_safra` (`safra`);

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
-- Indexes for table `manutencao`
--
ALTER TABLE `manutencao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_maq` (`maquinas`),
  ADD KEY `idx_peca` (`pecas`);

--
-- Indexes for table `maquinas`
--
ALTER TABLE `maquinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_marca` (`id_marca`) USING BTREE;

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pecas`
--
ALTER TABLE `pecas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_ped_cli` (`cliente`);

--
-- Indexes for table `safras`
--
ALTER TABLE `safras`
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
-- AUTO_INCREMENT for table `aluguel`
--
ALTER TABLE `aluguel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `manutencao`
--
ALTER TABLE `manutencao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `maquinas`
--
ALTER TABLE `maquinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pecas`
--
ALTER TABLE `pecas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `safras`
--
ALTER TABLE `safras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
-- Limitadores para a tabela `manutencao`
--
ALTER TABLE `manutencao`
  ADD CONSTRAINT `manutencao_ibfk_1` FOREIGN KEY (`maquinas`) REFERENCES `maquinas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manutencao_ibfk_2` FOREIGN KEY (`pecas`) REFERENCES `pecas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `maquinas`
--
ALTER TABLE `maquinas`
  ADD CONSTRAINT `maquinas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
