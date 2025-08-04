-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2025 at 09:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magnus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contato`
--

CREATE TABLE `tbl_contato` (
  `id_contato` int(11) NOT NULL,
  `e-mail` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `id_funcionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_empresa`
--

CREATE TABLE `tbl_empresa` (
  `razao_social` int(11) NOT NULL,
  `cnpj` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_funcao`
--

CREATE TABLE `tbl_funcao` (
  `funcao` int(11) NOT NULL,
  `salario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_funcionario`
--

CREATE TABLE `tbl_funcionario` (
  `id_funcionario` int(11) NOT NULL,
  `ficha` int(11) NOT NULL,
  `matriculo` int(11) NOT NULL,
  `nome` int(11) NOT NULL,
  `grau_instrucao` int(11) NOT NULL,
  `estado_civil` int(11) NOT NULL,
  `data_nascimento` int(11) NOT NULL,
  `local_nascimento` int(11) NOT NULL,
  `uf` int(11) NOT NULL,
  `pai` int(11) NOT NULL,
  `mae` int(11) NOT NULL,
  `imposto_renda` int(11) NOT NULL,
  `individual` int(11) NOT NULL,
  `dependente` int(11) NOT NULL,
  `primeiro_emprego` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_periodo`
--

CREATE TABLE `tbl_periodo` (
  `nome_perido` int(11) NOT NULL,
  `horario_entrada` int(11) NOT NULL,
  `horario_saida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL,
  `funcao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nome`, `email`, `senha`, `funcao`) VALUES
(1, 'Kauany', 'okau.oliveira@gmaill.com', 'Magnus_RG', 'RH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contato`
--
ALTER TABLE `tbl_contato`
  ADD PRIMARY KEY (`id_contato`);

--
-- Indexes for table `tbl_funcionario`
--
ALTER TABLE `tbl_funcionario`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contato`
--
ALTER TABLE `tbl_contato`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_funcionario`
--
ALTER TABLE `tbl_funcionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
