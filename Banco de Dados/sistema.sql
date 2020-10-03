-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Out-2020 às 20:17
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema.sql`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `rm` mediumint(6) NOT NULL,
  `digital` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `serie` varchar(25) NOT NULL,
  `curso` varchar(40) NOT NULL,
  `telefone` char(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nome_responsavel` varchar(70) NOT NULL,
  `telefone_responsavel` char(15) NOT NULL,
  `email_Responsavel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`rm`, `digital`, `nome`, `serie`, `curso`, `telefone`, `email`, `nome_responsavel`, `telefone_responsavel`, `email_Responsavel`) VALUES
(18137, 456, 'Diego Lopes Bortolucci', '3º Ano', 'ETIM INFOWEB', '19994425961', 'bortolucci.diego@gmail.com', 'Diego Lopes Bortolucci', '19994425961', 'bortolucci.diego@yahoo.com.br\r\n    ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` mediumint(6) NOT NULL,
  `senha` varchar(70) NOT NULL,
  `funcao` varchar(25) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `rm` mediumint(6) NOT NULL,
  `id` mediumint(6) NOT NULL,
  `saida` datetime NOT NULL,
  `entrada` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`rm`,`digital`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `horario`
--
ALTER TABLE `horario`
  ADD KEY `RM` (`rm`),
  ADD KEY `ID` (`id`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `ID` FOREIGN KEY (`id`) REFERENCES `funcionarios` (`id`),
  ADD CONSTRAINT `RM` FOREIGN KEY (`rm`) REFERENCES `alunos` (`rm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
