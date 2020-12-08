-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Dez-2020 às 01:26
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
(18110, 456, 'Abel Luis Santos', '1º Ano', 'ETIM INFOWEB', '(19) 98965-3210', 'abel.santos@etec.sp.gov.br', 'Luis Santos', '(19) 95631-2593', 'luis.santos@hotmail.com  '),
(18111, 456, 'Eduardo Castro', '2º Ano', 'ETIM INFOWEB', '(19) 98953-2014', 'eduardo.castro@etec.sp.gov.br', 'Cátia Castro', '(19) 95362-0156', 'catia.castro@gmail.com\r\n  '),
(18112, 456, 'Eduarda Melo', '3º Ano', 'ETIM INFOWEB', '(19) 95364-5220', 'eduarda.melo@etec.sp.gov.br', 'Sandro Melo', '(19) 98996-5395', 'sandro.melo@gmail.com'),
(18113, 456, 'Amanda Pereira', '1º Ano', 'ETIM ADMNISTRAÇÃO', '(19) 99953-5489', 'amanda.pereira@etec.sp.gov.br', 'Leila Pereira', '(19) 98996-5395', 'leila.pereira@gmail.com\r\n  '),
(18114, 456, 'Letícia Alves', '2º Ano', 'ETIM ADMNISTRAÇÃO', '(19) 98952-6566', 'leticia.alves@etec.sp.gov.br', 'Júlia Alves', '(19) 96456-4512', 'julia.alves@outlook.com.br  '),
(18115, 456, 'Júlia Arantes', '3º Ano', 'ETIM ADMNISTRAÇÃO', '(19) 95695-5237', 'julia.arantes@etec.sp.gov.br', 'Márcia Arantes', '(19) 99797-2160', 'marcia.arantes@outlook.com.br\r\n  '),
(18116, 456, 'Laura Moreira', '2º Ano', 'ETIM ADMNISTRAÇÃO', '(19) 99454-2315', 'laura.moreira@etec.sp.gov.br', 'Marcelo Moreira', '(19) 99225-3610', 'marcelo.moreira@outlook.com  '),
(18137, 456, 'Diego Lopes Bortolucci', '3º Ano', 'ETIM INFOWEB', '(19) 99442-5961', 'diego.bortolucci@etec.sp.gov.br', 'Airton Fernando Bortolucci', '(19) 99442-5961', 'abortolucci67@gmail.com  '),
(18138, 456, 'Pedro Oliveira', '3º Ano', 'ETIM INFOWEB', '(19) 99995-4545', 'pedro.oliveira@etec.sp.gov.br', 'Carlos Oliveira', '(19) 98598-5945', 'carlos.eduardo@outlook.com  '),
(18140, 456, 'Vitória Ferreira', '1º Ano', 'ETIM ADMNISTRAÇÃO', '(19) 99442-5962', 'vitoria.ferreira@etec.sp.gov.br', 'Laura Ferreira', '(19) 99226-1234', 'laura.ferreira@outlook.com\r\n  '),
(18142, 456, 'Tiago Souza', '3º Ano', 'ETIM ADMNISTRAÇÃO', '(19) 98539-4321', 'tiago.souza@etec.sp.gov.br', 'Andréia Souza', '(19) 98534-9630', 'andreia.souza@outlook.com\r\n  '),
(18147, 456, 'Augusto Oliveira', '1º Ano', 'ETIM INFOWEB', '(19) 99665-3482', 'augusto.oliveira@etec.sp.gov.br', 'Jair Oliveira', '(19) 99886-6321', 'jair.oliveira@outlook.com\r\n  '),
(18167, 456, 'Marcus Andreoli', '3º Ano', 'ETIM INFOWEB', '19994500618', 'marcusandreoli@gmail.com', 'walquíria', '19998765432', 'walandreoli@gmail.com'),
(18168, 456, 'Marcus Andreoli', '3º Ano', 'ETIM INFOWEB', '19994500618', 'marcusandreoli@gmail.com', 'walquíria', '19998765432', 'walandreoli@gmail.com'),
(18169, 456, 'Vitor Ádrian', '2º Ano', 'ETIM INFOWEB', '(19) 98946-3120', 'vitor.adrian@etec.sp.gov.br', 'Marcio Alves', '(19) 99365-2085', 'marcio.alves@hotmail.com  ');

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
(1, 'yaMJQg==', 'Função', 'messias', 'jair@outlook.com.br'),
(2, '&~6?:PrC^???6', 'Vigia', 'cleito', 'cleito@gmail.com'),
(3, 'UGFsbWVpcmFzMTA=', 'Vigia', 'Lemão', 'lemao@gmail.com'),
(4, '1234', 'Vigia', 'diego', 'bortolucci.diego@gmail.com'),
(6, 'UGFsbWVpcmFzMDE=', 'Secretaria', 'Marcus', 'marcus');

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
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`rm`, `id`, `saida`, `entrada`) VALUES
(18138, 1, '2020-09-09 15:20:21', '2020-09-09 08:20:21');

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
  MODIFY `id` mediumint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
