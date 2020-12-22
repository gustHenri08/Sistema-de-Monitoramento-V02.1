-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Dez-2020 às 02:08
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `funcao` varchar(40) DEFAULT 'agente',
  `funcionarioativo` varchar(7) DEFAULT 'inativo',
  `admincadastro` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_agente`
--

INSERT INTO `tbl_agente` (`id`, `nomecompleto`, `matricula`, `nucleo`, `unidadeprisional`, `emailinstitucional`, `login`, `senha`, `funcao`, `funcionarioativo`, `admincadastro`) VALUES
(1, 'Rafael José da Silva', 1, 'Lagoa', 'CP Paulista', 'teste@teste', 'admin', 'admin', 'Administrador', 'Ativo', ''),
(3, 'Gustavo', 2, 'Paulista', 'CP Paulista', 'gustavo@gustavo', 'gustavo', 'gustavo', 'Administrador', 'Ativo', 'Rafael José da Silva'),
(4, 'Francisco', 123456, 'aquele', 'aquela', 'asas@asas', '', '', 'Agente', 'Inativo', ''),
(5, 'sas', 321, 'asd', 'asd', 'asdadsd@rrewrf', '', '', 'Agente', 'Inativo', ''),
(8, 'asdad', 0, 'asda', 'asda', 'sdasdsar@rter', '', '', 'Agente', 'Inativo', ''),
(9, 'asdasd', 123131, 'adas', 'asdad', 'asdasd@adasda', 'tt', 'tt', 'Agente', 'Inativo', ''),
(10, 'ewew', 123, 'qweq', 'qeqw', 'qweqwe@qweq', '', '', 'agente', 'Inativo', ''),
(11, 'ertretrr', 1234567, 'trew', 'rtetw', 'rtsre@rtest', '', '', 'agente', 'Inativo', ''),
(12, 'asdasd', 123131, 'asdasd', 'asdasd', 'dsda@sad', '', '', 'agente', 'Inativo', ''),
(13, 'Zeno', 1232331, 'Paulista', 'CP Paulista', 'asas@asas', '', '', 'agente', 'Inativo', ''),
(14, 't', 1, 't', 't', 't@tt', '', '', 'agente', 'Inativo', ''),
(15, 'Teste', 56, 'teste', 'CP Teste', 'teste@teste', 'teste', 'teste', 'Agente', 'Ativo', ''),
(17, 'teste2', 7654321, 'Paulista', 'CP Paulista', 'teste2@teste', '', '', 'agente', 'Inativo', ''),
(18, 'Novo', 1234564, 'novo', 'nova', 'nnn@nnn', '123123', '123123', 'Agente', 'Inativo', 'Gustavo'),
(19, 'gergtet', 121414, '1243341', '12441324', 'fad@fdg', '123', '123', 'Agente', 'Ativo', 'Rafael José da Silva'),
(20, 'Teste3', 12121, 'Paulista', 'CP Paulista', 'teste3@teste', '', '', 'agente', 'Inativo', ''),
(21, 'teste4', 7654321, 'Paulista', 'CP Paulista', 'teste4@teste', '6789', '6789', 'Agente', 'Inativo', ''),
(22, 'teste5', 456123, 'Paulista', 'CP Paulista', 'teste5@teste', '', '', 'agente', 'Inativo', ''),
(23, 'teste6', 6666666, 'Arco-Verde', 'CP', 'teste6@teste6', 'teste6', 'teste6', 'Agente', 'Inativo', ''),
(24, 'teste7', 9876541, 'Lagoa', 'CP Paulista', 'teste7@teste', 'teste7', 'teste7', 'Agente', 'Inativo', ''),
(25, 'teste8', 8888888, 'Garanhuns', 'CP', 'teste8@teste8', 'teste8', 'teste8', 'Agente', 'Inativo', ''),
(26, 'teste9', 9999999, 'Lagoa', 'CP', 'teste9@teste9', '', '', 'Agente', 'Inativo', ''),
(27, 'José', 1213, 'Arco-Verde', 'CP', 'jose@jose', '', '', 'Agente', 'Inativo', 'Rafael José da Silva'),
(28, 'Silva', 1231231, 'Arco-Verde', 'CP', 'silva@silva', '', '', 'Agente', 'Inativo', 'Rafael José da Silva'),
(29, 'mateus gomes', 125518, 'Garanhuns', 'CP', 'mhghuigifui@gmail.com', 'agente', 'agente', 'Agente', 'Ativo', 'Rafael José da Silva'),
(30, 'mateus silva', 126557, 'amapa', 'port', 'muntykho@gmail.com', NULL, NULL, 'agente', 'inativo', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_enterno`
--

CREATE TABLE `tbl_enterno` (
  `id` int(11) NOT NULL,
  `cadeiapublica` varchar(50) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `numsiap` int(30) NOT NULL,
  `sic` int(30) NOT NULL,
  `data` varchar(12) NOT NULL,
  `motivo` varchar(30) NOT NULL,
  `documentacao` varchar(50) NOT NULL,
  `obs` varchar(30) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `cadastrante` varchar(40) NOT NULL,
  `funcaocadastrante` varchar(20) NOT NULL,
  `matriculacadastrante` char(8) NOT NULL,
  `destino` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_enterno`
--

INSERT INTO `tbl_enterno` (`id`, `cadeiapublica`, `nome`, `numsiap`, `sic`, `data`, `motivo`, `documentacao`, `obs`, `sexo`, `cadastrante`, `funcaocadastrante`, `matriculacadastrante`, `destino`) VALUES
(29, 'cp', 'uiqeuiw', 1234, 1234, '', 'obt', 'eqweqwewqe', 'trwtwqtrwtqtwqwetqwetq', 'masculino', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_interno`
--

CREATE TABLE `tbl_interno` (
  `id` int(11) NOT NULL,
  `cadeiapublica` varchar(50) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `numsiap` int(30) NOT NULL,
  `sic` int(30) NOT NULL,
  `data` varchar(12) NOT NULL,
  `motivo` varchar(30) NOT NULL,
  `documentacao` varchar(50) NOT NULL,
  `obs` varchar(30) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `cadastrante` varchar(40) NOT NULL,
  `funcaocadastrante` varchar(20) NOT NULL,
  `matriculacadastrante` char(8) NOT NULL,
  `destino` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_interno`
--

INSERT INTO `tbl_interno` (`id`, `cadeiapublica`, `nome`, `numsiap`, `sic`, `data`, `motivo`, `documentacao`, `obs`, `sexo`, `cadastrante`, `funcaocadastrante`, `matriculacadastrante`, `destino`) VALUES
(29, 'cp', 'uiqeuiw', 1234, 12345543, '11/11/11', '1', '1', 'trwtwqtrwtqtwqwetqwetq', 'masculino', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_ocorrencia`
--

CREATE TABLE `tbl_ocorrencia` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `numsiap` int(11) NOT NULL,
  `cadeiapublica` text NOT NULL,
  `resumo_Ocorrencia` text NOT NULL,
  `tipo` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `regime` varchar(20) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `documentacao` varchar(60) NOT NULL,
  `crimerepercurssao` varchar(10) NOT NULL,
  `observacoesgerais` varchar(400) NOT NULL,
  `cadastrante` varchar(40) NOT NULL,
  `funcaocadastrante` varchar(20) NOT NULL,
  `matriculacadastrante` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_presos`
--

INSERT INTO `tbl_presos` (`id`, `cadeiapublica`, `dataentrada`, `nome`, `nomemae`, `nomepai`, `motivo`, `origem`, `dataprisao`, `nsiap`, `sic`, `regime`, `sexo`, `documentacao`, `crimerepercurssao`, `observacoesgerais`, `cadastrante`, `funcaocadastrante`, `matriculacadastrante`) VALUES
(1, 'CP de Aliança', '25/09/2020', 'Alerta', 'ad', 'asdfa', 'Mandado de Prisão Preventiva', 'CP de Glória do Goitá', '30/08/2020', 0, 1515, 'Fechado', 'Masculino', 'Auto de Prisão em Flagrante', 'Sim', '   asdfas   ', 'Gustavo', 'Administrador', '2'),
(2, 'CP de Aliança', '03/10/2020', 'AAAA', 'asdad', 'pai', 'Expiração de Prazo', 'CP de Lagoa do Carro', '25/10/2020', 0, 0, 'Fechado', 'Feminino', 'Auto de Prisão em Flagrante', 'Sim', '  werwr  ', 'Rafael José da Silva', 'Administrador', '1'),
(3, 'CP de Carpina', '26/10/2020', 'r', 'r', 'r', 'Expiração de Prazo', 'CP de Altinho', '25/10/2020', 0, 0, '', '', 'Auto de Prisão em Flagrante', 'Sim', 'r', '', '', ''),
(4, 'CP de Goiana', '25/09/2020', 'y', 'y', 'y', 'Trânsito', 'Outra UF', '30/08/2020', 0, 0, '', '', 'Mandado de Recolhimento', 'Sim', 'yy', '', '', ''),
(5, 'CP de Goiana', '25/09/2020', 'Teste', 'Teste', 'Teste', 'Outros', 'Outra Origem', '25/10/2020', 25, 26, '', '', 'Outro', 'Sim', 'outro', '', '', ''),
(6, 'CP de Macaparana', '03/10/2020', 'teste2', 'Teste2', 'Teste2', 'Expiração de Prazo', 'Outra UF', '30/08/2020', 0, 0, '', '', 'Auto de Prisão em Flagrante', 'Sim', ' Teste2 teste2', '', '', ''),
(7, 'CP de Aliança', '12/08/1933', 'veio', 'veia', 'idoso', 'Expiração de Prazo', 'CP de Altinho', '25/07/2010', 0, 0, '', '', 'Auto de Prisão em Flagrante', 'Sim', '', '', '', ''),
(8, 'CP de Aliança', '25/09/2020', 'z', 'z', 'z', 'Mandado de Prisão Civil', 'CP de Altinho', '25/10/2020', 0, 0, '', '', 'Mandado de Prisão', 'Não', ' Teste da Nova versão do aplicativo   ', '', '', ''),
(9, 'CP de Aliança', '26/07/2020', 'yy', 'yy', 'yy', 'Expiração de Prazo', 'CP de Altinho', '24/10/2020', 0, 0, '', '', 'Auto de Prisão em Flagrante', 'Sim', '', '', '', ''),
(10, 'CP de Aliança', '25/09/2020', 'jj', 'jj', 'jj', 'Mandado de Prisão Temporária', 'CP de Carpina', '25/10/2020', 0, 0, '', '', 'Mandado de Recolhimento', 'Não', 'Fazendo a mudança para conferir se está tudo certo de acordo com os conformes', '', '', ''),
(11, 'CP de Aliança', '03/10/2020', 'teste3', 'teste3', 'teste3', 'Transferência', 'CP de Altinho', '25/10/2020', 0, 0, '', '', 'Ofício de Transferência', 'Sim', 'teste 3', '', '', ''),
(12, 'CP de Aliança', '25/09/2020', 'a', 'a', 'a', 'Mandado de Recolhimento', 'CP de Glória do Goitá', '25/10/2020', 0, 0, '', '', 'Ofício de Transferência', 'Sim', '  a', '', '', ''),
(13, 'CP de Aliança', '11/02/1999', 'marciaello', 'montylho alves', 'jugito luto', 'Mandado de Recolhimento', 'Delegacia - PC', '11/09/20', 123, 4322, 'Semi-Aberto', 'Masculino', 'Auto de Prisão em Flagrante', 'Sim', '  ', 'Rafael José da Silva', 'Administrador', '1'),
(14, 'CP de Nazaré da Mata', '2020-12-02', 'marciaello', 'montylho alves', 'marilla', 'Mandado de Recolhimento', 'CP de Altinho', '2020-12-26', 123222112, 123456861, 'Fechado', 'Feminino', 'Auto de Prisão em Flagrante', 'Sim', '  OBS', 'Rafael José da Silva', 'Administrador', '1');

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
  `condutores` varchar(50) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `cadastrante` varchar(40) NOT NULL,
  `funcaocadastrante` varchar(20) NOT NULL,
  `matriculacadastrante` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_saidaaudiencia`
--

INSERT INTO `tbl_saidaaudiencia` (`id`, `cadeiapublica`, `nome`, `numsiap`, `sic`, `data`, `cidade-forum`, `condutores`, `sexo`, `cadastrante`, `funcaocadastrante`, `matriculacadastrante`) VALUES
(1, 'CP de Aliança', '     Alerta', 12322, 1515, '', '   abreu e lima', '    PCPE', 'Masculino', 'Rafael José da Silva', 'Administrador', '1'),
(2, 'CP de Aliança', '   rer', 12322222, 12345, '11/03/18', 'abreu e lima', ' PCPE', '', '', '', ''),
(3, 'CP de Aliança', '  ricardo', 354444, 1515, '11/12/21', 'paulista', ' PCPE', '', '', '', '');

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
  `motivo` varchar(70) NOT NULL,
  `datasaida` varchar(12) NOT NULL,
  `numprocesso` int(30) NOT NULL,
  `numsiap` int(30) NOT NULL,
  `sic` int(30) NOT NULL,
  `documentacao` varchar(40) NOT NULL,
  `destino` varchar(40) NOT NULL,
  `condutores` varchar(40) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `cadastrante` varchar(40) NOT NULL,
  `funcaocadastrante` varchar(20) NOT NULL,
  `matriculacadastrante` char(8) NOT NULL,
  `obs` varchar(300) NOT NULL,
  `origem` text NOT NULL,
  `crimerepercurssao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_saidadetentos`
--

INSERT INTO `tbl_saidadetentos` (`id`, `cadeiapublica`, `nome`, `mae`, `pai`, `motivo`, `datasaida`, `numprocesso`, `numsiap`, `sic`, `documentacao`, `destino`, `condutores`, `sexo`, `cadastrante`, `funcaocadastrante`, `matriculacadastrante`, `obs`, `origem`, `crimerepercurssao`) VALUES
(1, 'CP de Aliança', '  Alerta', '  ad', '  asdfa', '0', ' 12/01/20', 1515, 354444, 1515, 'ALVARÁ DE SOLTURA', 'PCPE', 'PCPE', '', 'Rafael José da Silva', 'Administrador', '1', '', 'CP de Altinho', 'Sim'),
(2, 'CP de Aliança', ' AAAA', ' asdad', ' pai', '0', '22/22/22', 2147483647, 0, 0, 'ALVARÁ DE SOLTURA', 'PM', 'PCPE', '', '', '', '', 'obt', 'CP de Altinho', 'Sim'),
(3, 'CP de Aliança', '  r', '  r', '  r', '0', '  11/01/20', 23222, 12322222, 12345, 'ALVARÁ DE SOLTURA', 'PCPE', 'PCPE', 'Masculino', 'Rafael José da Silva', 'Administrador', '1', '', 'CP de Altinho', 'Sim'),
(4, 'CP de Aliança', ' Alerta', ' ad', ' asdfa', '0', '12/01/20', 23222, 0, 1515, 'ALVARÁ DE SOLTURA', 'PC', 'PCPE', '', '', '', '', 'ok', 'CP de Altinho', 'Não');

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
  `sexo` varchar(10) NOT NULL,
  `cadastrante` varchar(40) NOT NULL,
  `funcaocadastrante` varchar(20) NOT NULL,
  `matriculacadastrante` char(8) NOT NULL,
  `descricaosaida` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_saidasaude`
--

INSERT INTO `tbl_saidasaude` (`id`, `cadeiapublica`, `nome`, `numsiap`, `sic`, `data`, `motivo`, `condutores`, `sexo`, `cadastrante`, `funcaocadastrante`, `matriculacadastrante`, `descricaosaida`) VALUES
(1, 'CP de Aliança', '   Alerta', 354444, 1515, '11/03/18', 'brin', 'kilolopi', '', '', '', '', 'morto'),
(2, 'CP de Aliança', '   r', 12322222, 12345, '11/03/18', 'brin', ' kilolop', '', '', '', '', 'morto'),
(3, 'CP de Macaparana', '  Alerta', 0, 1515, '11/03/18', '', '', '', '', '', '', 'morto');

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
-- Índices para tabela `tbl_enterno`
--
ALTER TABLE `tbl_enterno`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_interno`
--
ALTER TABLE `tbl_interno`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `tbl_enterno`
--
ALTER TABLE `tbl_enterno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `tbl_interno`
--
ALTER TABLE `tbl_interno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `tbl_presos`
--
ALTER TABLE `tbl_presos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tbl_saidaaudiencia`
--
ALTER TABLE `tbl_saidaaudiencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbl_saidadetentos`
--
ALTER TABLE `tbl_saidadetentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbl_saidasaude`
--
ALTER TABLE `tbl_saidasaude`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
