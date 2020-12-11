-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Nov-2020 às 02:36
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
-- Banco de dados: `db_smt`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_agente`
--

CREATE TABLE `tbl_agente` (
  `id` int(11) NOT NULL,
  `nomecompleto` varchar(50) NOT NULL,
  `matricula` int(8) NOT NULL,
  `nucleo` varchar(70) NOT NULL,
  `unidadeprisional` varchar(60) NOT NULL,
  `emailinstitucional` varchar(100) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `funcao` varchar(40) DEFAULT NULL,
  `funcionarioativo` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_agente`
--

INSERT INTO `tbl_agente` (`id`, `nomecompleto`, `matricula`, `nucleo`, `unidadeprisional`, `emailinstitucional`, `login`, `senha`, `funcao`, `funcionarioativo`) VALUES
(1, 'Rafael José da Silva', 1, 'Paulista', 'CP Paulista', 'teste@teste', 'admin', 'admin', 'admin', 1),
(3, 'Agente', 123456, 'aquele', 'essa', 'asas@asas', NULL, NULL, NULL, NULL),
(4, 'Agente', 123456, 'aquele', 'aquela', 'asas@asas', NULL, NULL, NULL, NULL),
(5, 'sas', 321, 'asd', 'asd', 'asdadsd@rrewrf', NULL, NULL, NULL, NULL),
(8, 'asdad', 0, 'asda', 'asda', 'sdasdsar@rter', NULL, NULL, NULL, NULL),
(9, 'asdasd', 123131, 'adas', 'asdad', 'asdasd@adasda', 'tt', 'tt', NULL, NULL),
(10, 'ewew', 123, 'qweq', 'qeqw', 'qweqwe@qweq', NULL, NULL, NULL, NULL),
(11, 'ertretrr', 1234567, 'trew', 'rtetw', 'rtsre@rtest', NULL, NULL, NULL, NULL),
(12, 'asdasd', 123131, 'asdasd', 'asdasd', 'dsda@sad', NULL, NULL, NULL, NULL),
(13, 'asads', 1232331, 'Paulista', 'CP Paulista', 'asas@asas', NULL, NULL, NULL, NULL),
(14, 't', 1, 't', 't', 't@tt', NULL, NULL, NULL, NULL),
(15, 'Teste', 56, 'teste', 'CP Teste', 'teste@teste', 'teste', 'teste', NULL, NULL),
(17, 'teste2', 7654321, 'Paulista', 'CP Paulista', 'teste2@teste', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_presos`
--

CREATE TABLE `tbl_presos` (
  `id` int(11) NOT NULL,
  `cadeiapublica` varchar(70) NOT NULL,
  `dataentrada` varchar(10) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `nomemae` varchar(60) NOT NULL,
  `nomepai` varchar(60) NOT NULL,
  `motivo` varchar(60) NOT NULL,
  `origem` varchar(70) NOT NULL,
  `dataprisao` text NOT NULL,
  `nsiap` int(40) NOT NULL,
  `sic` int(40) NOT NULL,
  `documentacao` varchar(60) NOT NULL,
  `crimerepercurssao` varchar(10) NOT NULL,
  `observacoesgerais` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_presos`
--

INSERT INTO `tbl_presos` (`id`, `cadeiapublica`, `dataentrada`, `nome`, `nomemae`, `nomepai`, `motivo`, `origem`, `dataprisao`, `nsiap`, `sic`, `documentacao`, `crimerepercurssao`, `observacoesgerais`) VALUES
(1, 'CP de Aliança', '25/09/2020', 'arewra', 'ad', 'asdfa', 'Expiração de Prazo', 'CP de Altinho', '30/08/2020', 0, 1515, 'Auto de Prisão em Flagrante', 'Sim', 'asdfas'),
(2, 'CP de Aliança', '03/10/2020', 'arewra', 'asdad', 'pai', 'Expiração de Prazo', 'CP de Lagoa do Carro', '25/10/2020', 0, 0, 'Auto de Prisão em Flagrante', 'Sim', 'werwr'),
(3, 'CP de Carpina', '26/10/2020', 'r', 'r', 'r', 'Expiração de Prazo', 'CP de Altinho', '25/10/2020', 0, 0, 'Auto de Prisão em Flagrante', 'Sim', 'r'),
(4, 'CP de Goiana', '25/09/2020', 'y', 'y', 'y', 'Trânsito', 'Outra UF', '30/08/2020', 0, 0, 'Mandado de Recolhimento', 'Sim', 'yy'),
(5, 'CP de Goiana', '25/09/2020', 'Teste', 'Teste', 'Teste', 'Outros', 'Outra Origem', '25/10/2020', 25, 26, 'Outro', 'Sim', 'outro'),
(6, 'CP de Macaparana', '03/10/2020', 'teste2', 'Teste2', 'Teste2', 'Expiração de Prazo', 'Outra UF', '30/08/2020', 0, 0, 'Auto de Prisão em Flagrante', 'Sim', 'Teste2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_saidaaudiencia`
--

CREATE TABLE `tbl_saidaaudiencia` (
  `id` int(11) NOT NULL,
  `cadeiapublica` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `numsiap` int(40) NOT NULL,
  `sic` int(40) NOT NULL,
  `data` varchar(12) NOT NULL,
  `cidade-forum` varchar(50) NOT NULL,
  `condutores` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_saidadetentos`
--

CREATE TABLE `tbl_saidadetentos` (
  `id` int(11) NOT NULL,
  `cadeiapublica` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `mae` varchar(50) NOT NULL,
  `pai` varchar(50) NOT NULL,
  `motivo` int(70) NOT NULL,
  `datasaida` varchar(12) NOT NULL,
  `numprocesso` int(30) NOT NULL,
  `numsiap` int(30) NOT NULL,
  `sic` int(30) NOT NULL,
  `documentacao` varchar(40) NOT NULL,
  `destino` varchar(40) NOT NULL,
  `condutores` varchar(40) NOT NULL,
  `obs` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_saidasaude`
--

CREATE TABLE `tbl_saidasaude` (
  `id` int(11) NOT NULL,
  `cadeiapublica` varchar(50) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `numsiap` int(30) NOT NULL,
  `sic` int(30) NOT NULL,
  `data` varchar(12) NOT NULL,
  `motivo` varchar(30) NOT NULL,
  `condutores` varchar(50) NOT NULL,
  `descricaosaida` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Índices para tabela `tbl_agente`
--
ALTER TABLE `tbl_agente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_presos`
--
ALTER TABLE `tbl_presos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_saidaaudiencia`
--
ALTER TABLE `tbl_saidaaudiencia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_saidadetentos`
--
ALTER TABLE `tbl_saidadetentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_saidasaude`
--
ALTER TABLE `tbl_saidasaude`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_agente`
--
ALTER TABLE `tbl_agente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tbl_presos`
--
ALTER TABLE `tbl_presos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_saidaaudiencia`
--
ALTER TABLE `tbl_saidaaudiencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_saidadetentos`
--
ALTER TABLE `tbl_saidadetentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_saidasaude`
--
ALTER TABLE `tbl_saidasaude`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
