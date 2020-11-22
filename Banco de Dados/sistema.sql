-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Nov-2020 às 01:46
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema`
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
(18169, 456, 'Marcus', '3º Ano', 'ETIM INFOWEB', '(19) 99450-0618', 'marcus.vinicius2002@hotmail.com', 'Walquiria Aparecida', '(15) 89746-6315', 'cleito@gmail.com\r\n  ');

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

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `senha`, `funcao`, `nome`, `email`) VALUES
(3, '77+977+9', 'Vigia', 'Marcus', 'marcus.vinicius2002@hotmail.com'),
(4, 'Y2F2YWxvMTIzNA==', 'Vigia', 'Viniciús', 'cleito@gmail.com'),
(5, 'MTIzNDU2Nzg5MQ==', 'vigia', 'augusto', 'augusto@hotmail.com'),
(6, 'MTk4NzY1NDMyMQ==', 'secretaria:varlei', 'varlei@gmail.com', ''),
(7, 'MTIzNDU2Nzg5MA==', 'Secretaria', 'cleito', 'gerggregergrgergreg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `rm` mediumint(6) NOT NULL,
  `id` mediumint(6) NOT NULL,
  `entrada` datetime NOT NULL,
  `saida` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`rm`, `id`, `entrada`, `saida`) VALUES
(18169, 256, '2020-11-20 06:44:18', '2020-11-20 12:44:18');

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `view_infoaluno`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `view_infoaluno` (
`rm` mediumint(6)
,`nome` varchar(70)
,`serie` varchar(25)
,`curso` varchar(40)
,`entrada` datetime
,`saida` datetime
);

-- --------------------------------------------------------

--
-- Estrutura para vista `view_infoaluno`
--
DROP TABLE IF EXISTS `view_infoaluno`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_infoaluno`  AS SELECT `alunos`.`rm` AS `rm`, `alunos`.`nome` AS `nome`, `alunos`.`serie` AS `serie`, `alunos`.`curso` AS `curso`, `horario`.`entrada` AS `entrada`, `horario`.`saida` AS `saida` FROM (`alunos` join `horario`) WHERE `alunos`.`rm` = `horario`.`rm` ORDER BY `alunos`.`nome` ASC ;

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
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` mediumint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
