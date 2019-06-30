-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Jun-2019 às 22:24
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `concessionaria_ps`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `cod` int(11) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`cod`, `login`, `senha`) VALUES
(3, 'Dalker@gmail.com', 'dalker');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `Cod` int(11) NOT NULL,
  `SegundoNome` varchar(50) DEFAULT NULL,
  `UltimoNome` varchar(50) DEFAULT NULL,
  `PrimeiroNome` varchar(50) DEFAULT NULL,
  `CPF` varchar(20) DEFAULT NULL,
  `CNH` varchar(50) DEFAULT NULL,
  `Cidade` varchar(50) DEFAULT NULL,
  `Estado` varchar(50) DEFAULT NULL,
  `Login` varchar(50) DEFAULT NULL,
  `RG` varchar(20) DEFAULT NULL,
  `Senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`Cod`, `SegundoNome`, `UltimoNome`, `PrimeiroNome`, `CPF`, `CNH`, `Cidade`, `Estado`, `Login`, `RG`, `Senha`) VALUES
(123, 'Santos', 'andrade', 'ggggggg', '5555555', '1234', 'morada nova', 'morada nova', 'lucas@gmail.com', '8888889', 'admin'),
(125, 'Kercia', 'Andrade', 'Mirna', '321.258.789-85', '4157896', 'Morada Nova', 'Ceará', 'mirna@gmail.com', '123547896-8', 'kercia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra_veiculos_cliente_funcionarios`
--

CREATE TABLE `compra_veiculos_cliente_funcionarios` (
  `FK_Veiculos_Cod` int(11) DEFAULT NULL,
  `FK_Cliente_Cod` int(11) DEFAULT NULL,
  `FK_Funcionarios_Cod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `Cod` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Slogan` varchar(200) DEFAULT NULL,
  `Foto` varchar(200) DEFAULT NULL,
  `LinkInstagram` varchar(100) DEFAULT NULL,
  `Linkfacebook` varchar(100) DEFAULT NULL,
  `LinkTwitter` varchar(100) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `Celular` varchar(20) DEFAULT NULL,
  `Fixo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`Cod`, `Nome`, `Slogan`, `Foto`, `LinkInstagram`, `Linkfacebook`, `LinkTwitter`, `Email`, `Celular`, `Fixo`) VALUES
(15, 'PK_Veículos', 'O melhor é aqui', 'p.png', 'https/pkveiculos__.com', 'https/pkveiculos.com', 'https/pkveiculos**.com', 'pkveiculos@hotmail.com', '(11) 986754896', '031-8834221302');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `Cod` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `NumeroPIS` varchar(20) DEFAULT NULL,
  `RG` varchar(20) DEFAULT NULL,
  `CPF` varchar(20) DEFAULT NULL,
  `Login` varchar(50) DEFAULT NULL,
  `Senha` varchar(20) DEFAULT NULL,
  `Gerente` varchar(50) DEFAULT NULL,
  `Administrador` varchar(50) DEFAULT NULL,
  `Vendedor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`Cod`, `Nome`, `NumeroPIS`, `RG`, `CPF`, `Login`, `Senha`, `Gerente`, `Administrador`, `Vendedor`) VALUES
(6, 'testeeeeee', 'e', '44444444444444444', '456', NULL, '12345', 'dcfvgh', 'qwerty', 'zxcvbn'),
(7, 'testeeeeee', 'e', '44444444444444444', '456', NULL, '123', 'dcfvgh', 'qwerty', 'zxcvbn');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `Chassi` varchar(30) DEFAULT NULL,
  `Cod` int(11) NOT NULL,
  `Modelo` varchar(30) DEFAULT NULL,
  `Ano` int(11) DEFAULT NULL,
  `Fabricante` varchar(30) DEFAULT NULL,
  `Marca` varchar(30) DEFAULT NULL,
  `Preco` double DEFAULT NULL,
  `Cor` varchar(20) DEFAULT NULL,
  `Promocao` varchar(100) DEFAULT NULL,
  `DataPromocao` varchar(20) DEFAULT NULL,
  `Status` varchar(30) DEFAULT NULL,
  `Foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`Chassi`, `Cod`, `Modelo`, `Ano`, `Fabricante`, `Marca`, `Preco`, `Cor`, `Promocao`, `DataPromocao`, `Status`, `Foto`) VALUES
('894567', 43, ' T-Cross', 2019, 'PK_Veículos', 'Volkswagen', 80000, 'Dourada', '50%', '15/06/2019', 'SemiNovo', '02a4c0f7518c688db91abb7668e34e3c432fc6ca.jpg'),
('957841', 46, 'T40', 2019, 'PK_Veículos', 'JAC', 75000, 'Preto', '30%', '05/06/2019', 'SemiNovo', 'ad1144c81ab12b021e4c87ca3ac0702938a76395.jpg'),
('452174', 48, 'Pioneer 500 ', 2018, 'PK_Veículos', 'HONDA', 30000, 'Laranja', '20%', '05/05/2018', 'Novo', '4627dc2d81311215e36652a195f701c8d7514349.jpg'),
('365411', 69, 'G Serise', 2019, 'PK_Veículos', 'Scania', 75000, 'Branco', '20%', '05/06/2019', 'Novo', 'a57af9c239c2dca89503b4d07fa35821c0133765.jpg'),
('325416', 72, 'Fan 150', 2018, 'PK_Veículos', 'HONDA', 8100, 'Vermelho', '30%', '05/06/2019', 'Novo', '929258d003ee89ece2333965fd4d9cd564f0f2a0.png'),
('457126', 75, '110i', 2018, 'PK_Veículos', 'HONDA', 4000, 'Vermelho', '30%', '05/06/2019', 'Novo', 'c658ce827ac3b94740c89c4d3fdf4c188eb29694.jpg'),
('365214', 78, 'Hilux', 2019, 'PK_Veículos', 'Toyota', 124000, 'Prata', '30%', '05/06/2019', 'Novo', '5353c9e0012c8d64f80deec9025ee6f432da5118.png'),
('654123', 79, 'YZF', 2018, 'PK_Veículos', 'YAMAHA', 12000, 'Azul', '50%', '05/06/2019', 'SemiNovo', '3e1b71512436a6142141e529bb8b4a7e8d9a2306.jpg'),
('901457', 81, 'GOL GIV', 2018, 'PK_Veículos', 'VOLKSWAGEN ', 14000, 'Prata', '10%', '20/20/2019', 'SemiNovo', '8e05b7401ffa537b94262927fee33c8c3791c53e.jpg'),
('258743', 83, 'Biz 125', 2018, 'PK_Veículos', 'HONDA', 4000, 'Branco', '20%', '05/06/2019', 'SemiNovo', '4b5a4dd2a0a46ae09bce15c58bc6f56a4d0c727b.png'),
('254631', 97, 'Sportage', 2019, 'PK_Veículos', 'KIA', 118000, 'Vermelho', '30%', '05/06/2019', 'Importado', 'f0700f574646611adf2cfef9623e5c41dabec48d.png'),
('852143', 100, 'CBR 650 F', 2019, 'PK_Veículos', 'HONDA', 33900, 'Vermelho', '50%', '05/06/2019', 'Importado', 'e0b2693db749ca6e55ab99e2ebb4ac4ad4f1024b.jpg'),
('957849', 105, 'Ferrari 488 GTB', 2019, 'PK_Veículos', 'Ferrari', 2800000, 'Vermelho', '50%', '05/06/2019', 'Importado', 'c37edc2cc849e8bd0d5de470ccc7707ae5ffe288.jpg'),
('258744', 107, 'Land Rover Range Rover Sport', 2019, 'PK_Veículos', 'Land Rover', 2800000, 'Branco', '50%', '05/06/2019', 'Importado', '401458908e1eb9de89af1e5bff4de59a0517855c.jpg'),
('957898', 114, 'Camaro Amarelo', 2019, 'PK_Veículos', 'Chevrolet', 124000, 'Amarelo', '50%', '05/06/2019', 'Importado', '6f0e226f18071719bb969056fd6e2b2137659e08.jpg'),
('124538', 117, 'Mercedes Benz GLC 300', 2018, 'PK_Veículos', 'Mercedes Benz', 129340, 'Branco', '50%', '05/06/2019', 'Importado', 'f791baa4a888763ff9e0fa2ee273fad007ffc7f8.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Cod`);

--
-- Indexes for table `compra_veiculos_cliente_funcionarios`
--
ALTER TABLE `compra_veiculos_cliente_funcionarios`
  ADD KEY `FK_compra_Veiculos_Cliente_Funcionarios_0` (`FK_Veiculos_Cod`),
  ADD KEY `FK_compra_Veiculos_Cliente_Funcionarios_1` (`FK_Cliente_Cod`),
  ADD KEY `FK_compra_Veiculos_Cliente_Funcionarios_2` (`FK_Funcionarios_Cod`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`Cod`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`Cod`);

--
-- Indexes for table `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`Cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `Cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `Cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `Cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `compra_veiculos_cliente_funcionarios`
--
ALTER TABLE `compra_veiculos_cliente_funcionarios`
  ADD CONSTRAINT `FK_compra_Veiculos_Cliente_Funcionarios_0` FOREIGN KEY (`FK_Veiculos_Cod`) REFERENCES `veiculos` (`Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_compra_Veiculos_Cliente_Funcionarios_1` FOREIGN KEY (`FK_Cliente_Cod`) REFERENCES `cliente` (`Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_compra_Veiculos_Cliente_Funcionarios_2` FOREIGN KEY (`FK_Funcionarios_Cod`) REFERENCES `funcionarios` (`Cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
