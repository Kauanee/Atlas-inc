-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Out-2022 às 17:29
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cinema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `assento`
--

CREATE TABLE `assento` (
  `cod_assento` int(11) NOT NULL,
  `puff_assento` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `combo`
--

CREATE TABLE `combo` (
  `cod_combo` int(11) NOT NULL,
  `tamanho_combo` varchar(45) NOT NULL,
  `preco_combo` varchar(45) NOT NULL,
  `fk_tamanho_combo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `cod_filme` int(11) NOT NULL,
  `nome_filme` varchar(45) NOT NULL,
  `descricao_filme` varchar(45) NOT NULL,
  `faixa_etaria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingresso`
--

CREATE TABLE `ingresso` (
  `cod_ingresso` int(11) NOT NULL,
  `fk_sessao` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  `fk_combo` int(11) NOT NULL,
  `fk_pagamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

CREATE TABLE `sala` (
  `cod_sala` int(11) NOT NULL,
  `sala` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala_assento`
--

CREATE TABLE `sala_assento` (
  `cod_sala_assento` int(11) NOT NULL,
  `fk_sala_cod_sala` int(11) NOT NULL,
  `fk_cod_assento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessao`
--

CREATE TABLE `sessao` (
  `cod_sessao` int(11) NOT NULL,
  `data_sessao` date NOT NULL,
  `horario_sessao` time NOT NULL,
  `fk_cod_filme` int(11) NOT NULL,
  `fk_cod_sala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tamanho_combo`
--

CREATE TABLE `tamanho_combo` (
  `cod_tamanho_combo` int(11) NOT NULL,
  `pipoca` varchar(8) NOT NULL,
  `refrigerante` varchar(1) NOT NULL,
  `chocolate` varchar(1) NOT NULL,
  `fk_quant_pc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tamanho_pipoca`
--

CREATE TABLE `tamanho_pipoca` (
  `cod_tam_pc` int(11) NOT NULL,
  `tamanho` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_pagamento`
--

CREATE TABLE `tipo_pagamento` (
  `cod_tipo_pagamento` int(11) NOT NULL,
  `pix` varchar(1) NOT NULL,
  `boleto` varchar(1) NOT NULL,
  `cartao_credito` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(11) NOT NULL,
  `email_usuario` varchar(30) NOT NULL,
  `senha_usuario` varchar(10) NOT NULL,
  `nome_usuario` varchar(100) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `perm_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `email_usuario`, `senha_usuario`, `nome_usuario`, `cpf`, `data_nascimento`, `perm_admin`) VALUES
(5, 'gugacosta@estudante.sc.senai.b', '7beb04f055', NULL, NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `assento`
--
ALTER TABLE `assento`
  ADD PRIMARY KEY (`cod_assento`);

--
-- Índices para tabela `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`cod_combo`),
  ADD UNIQUE KEY `fk_tamanho_combo` (`fk_tamanho_combo`);

--
-- Índices para tabela `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`cod_filme`);

--
-- Índices para tabela `ingresso`
--
ALTER TABLE `ingresso`
  ADD PRIMARY KEY (`cod_ingresso`),
  ADD UNIQUE KEY `fk_sessao` (`fk_sessao`),
  ADD UNIQUE KEY `fk_usuario` (`fk_usuario`),
  ADD UNIQUE KEY `fk_combo` (`fk_combo`),
  ADD UNIQUE KEY `fk_pagamento` (`fk_pagamento`);

--
-- Índices para tabela `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`cod_sala`);

--
-- Índices para tabela `sala_assento`
--
ALTER TABLE `sala_assento`
  ADD PRIMARY KEY (`cod_sala_assento`),
  ADD UNIQUE KEY `fk_sala_cod_sala` (`fk_sala_cod_sala`),
  ADD UNIQUE KEY `fk_cod_assento` (`fk_cod_assento`);

--
-- Índices para tabela `sessao`
--
ALTER TABLE `sessao`
  ADD PRIMARY KEY (`cod_sessao`),
  ADD UNIQUE KEY `fk_cod_filme` (`fk_cod_filme`),
  ADD UNIQUE KEY `fk_cod_sala` (`fk_cod_sala`);

--
-- Índices para tabela `tamanho_combo`
--
ALTER TABLE `tamanho_combo`
  ADD PRIMARY KEY (`cod_tamanho_combo`),
  ADD UNIQUE KEY `fk_quant_pc` (`fk_quant_pc`);

--
-- Índices para tabela `tamanho_pipoca`
--
ALTER TABLE `tamanho_pipoca`
  ADD PRIMARY KEY (`cod_tam_pc`);

--
-- Índices para tabela `tipo_pagamento`
--
ALTER TABLE `tipo_pagamento`
  ADD PRIMARY KEY (`cod_tipo_pagamento`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `assento`
--
ALTER TABLE `assento`
  MODIFY `cod_assento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `combo`
--
ALTER TABLE `combo`
  MODIFY `cod_combo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `filme`
--
ALTER TABLE `filme`
  MODIFY `cod_filme` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ingresso`
--
ALTER TABLE `ingresso`
  MODIFY `cod_ingresso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sala`
--
ALTER TABLE `sala`
  MODIFY `cod_sala` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sala_assento`
--
ALTER TABLE `sala_assento`
  MODIFY `cod_sala_assento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sessao`
--
ALTER TABLE `sessao`
  MODIFY `cod_sessao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tamanho_combo`
--
ALTER TABLE `tamanho_combo`
  MODIFY `cod_tamanho_combo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tamanho_pipoca`
--
ALTER TABLE `tamanho_pipoca`
  MODIFY `cod_tam_pc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_pagamento`
--
ALTER TABLE `tipo_pagamento`
  MODIFY `cod_tipo_pagamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `combo`
--
ALTER TABLE `combo`
  ADD CONSTRAINT `combo_ibfk_1` FOREIGN KEY (`fk_tamanho_combo`) REFERENCES `tamanho_combo` (`cod_tamanho_combo`);

--
-- Limitadores para a tabela `ingresso`
--
ALTER TABLE `ingresso`
  ADD CONSTRAINT `fk_combo` FOREIGN KEY (`fk_combo`) REFERENCES `combo` (`cod_combo`),
  ADD CONSTRAINT `fk_pagamento` FOREIGN KEY (`fk_pagamento`) REFERENCES `tipo_pagamento` (`cod_tipo_pagamento`),
  ADD CONSTRAINT `fk_sessao` FOREIGN KEY (`fk_sessao`) REFERENCES `sessao` (`cod_sessao`),
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`cod_usuario`);

--
-- Limitadores para a tabela `sala_assento`
--
ALTER TABLE `sala_assento`
  ADD CONSTRAINT `fk_cod_assento` FOREIGN KEY (`fk_cod_assento`) REFERENCES `assento` (`cod_assento`),
  ADD CONSTRAINT `fk_sala_cod_sala` FOREIGN KEY (`fk_sala_cod_sala`) REFERENCES `sala` (`cod_sala`);

--
-- Limitadores para a tabela `sessao`
--
ALTER TABLE `sessao`
  ADD CONSTRAINT `fk_cod_filme` FOREIGN KEY (`fk_cod_filme`) REFERENCES `filme` (`cod_filme`),
  ADD CONSTRAINT `fk_cod_sala` FOREIGN KEY (`fk_cod_sala`) REFERENCES `sala` (`cod_sala`);

--
-- Limitadores para a tabela `tamanho_combo`
--
ALTER TABLE `tamanho_combo`
  ADD CONSTRAINT `fk_quant_pc` FOREIGN KEY (`fk_quant_pc`) REFERENCES `tamanho_pipoca` (`cod_tam_pc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
