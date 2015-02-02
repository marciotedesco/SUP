-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2012 at 10:34 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sup`
--

-- --------------------------------------------------------

--
-- Table structure for table `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `CPF` varchar(45) DEFAULT NULL,
  `Endereco` varchar(45) DEFAULT NULL,
  `Telefone` varchar(45) DEFAULT NULL,
  `Celular` varchar(45) DEFAULT NULL,
  `CEP` varchar(45) DEFAULT NULL,
  `Cidade` varchar(45) DEFAULT NULL,
  `Instituicao_id` int(11) DEFAULT NULL,
  `ARS` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `anexos`
--

CREATE TABLE IF NOT EXISTS `anexos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `Diagnostico_id` int(11) DEFAULT NULL,
  `Exame_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `consultas`
--

CREATE TABLE IF NOT EXISTS `consultas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Medico_id` int(11) DEFAULT NULL,
  `Paciente_id` int(11) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Valor` float DEFAULT NULL,
  `Prontuario_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `consultas`
--

INSERT INTO `consultas` (`id`, `Medico_id`, `Paciente_id`, `Data`, `Valor`, `Prontuario_id`) VALUES
(18, 1, 1, '2012-08-06', 1234, 1),
(19, 1, 4, '2012-08-07', 300, 1),
(20, 2, 1, '2012-08-07', 350, 1),
(21, 1, 1, '2012-08-07', 678, 1);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosticos`
--

CREATE TABLE IF NOT EXISTS `diagnosticos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Sintomas` text,
  `Comentarios` text,
  `Receita` text,
  `Prontuario_id` int(11) DEFAULT NULL,
  `Paciente_id` int(11) NOT NULL,
  `Medico_id` int(11) NOT NULL,
  `Data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `diagnosticos`
--

INSERT INTO `diagnosticos` (`id`, `Sintomas`, `Comentarios`, `Receita`, `Prontuario_id`, `Paciente_id`, `Medico_id`, `Data`) VALUES
(1, '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque \r\nsit amet metus felis, non placerat dolor. Sed ultrices neque vitae \r\ntortor condimentum a dignissim mi ornare. Aenean rhoncus, urna vitae \r\nfacilisis egestas, quam nulla tempus risus, ut sollicitudin nisi metus \r\nat nisi. Etiam at nulla a diam faucibus dignissim. Cras cursus est ut \r\nipsum facilisis eget eleifend sapien rhoncus. Praesent vitae mauris vel \r\nfelis consequat porttitor. Quisque egestas dolor at diam ultrices ac \r\ngravida odio volutpat.\r\n</p>\r\n<p>\r\nQuisque condimentum risus a libero rutrum eleifend. Donec et metus \r\ndolor, a bibendum tellus. Fusce lobortis dapibus turpis porttitor \r\niaculis. Suspendisse potenti. Etiam orci neque, rhoncus ac sollicitudin \r\nut, gravida at neque. Aenean lectus enim, dignissim elementum tincidunt \r\nin, imperdiet pellentesque ligula. Aliquam porttitor consectetur quam ac\r\n rhoncus. Praesent est diam, lobortis sed placerat a, semper ut mi. \r\nVestibulum dapibus dictum dapibus. Phasellus ut eros lorem, et ultricies\r\n sapien. Vestibulum ante ipsum primis in faucibus orci luctus et \r\nultrices posuere cubilia Curae;\r\n</p>', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque \r\nsit amet metus felis, non placerat dolor. Sed ultrices neque vitae \r\ntortor condimentum a dignissim mi ornare. Aenean rhoncus, urna vitae \r\nfacilisis egestas, quam nulla tempus risus, ut sollicitudin nisi metus \r\nat nisi. Etiam at nulla a diam faucibus dignissim. Cras cursus est ut \r\nipsum facilisis eget eleifend sapien rhoncus. Praesent vitae mauris vel \r\nfelis consequat porttitor. Quisque egestas dolor at diam ultrices ac \r\ngravida odio volutpat.\r\n</p>\r\n<p>\r\nQuisque condimentum risus a libero rutrum eleifend. Donec et metus \r\ndolor, a bibendum tellus. Fusce lobortis dapibus turpis porttitor \r\niaculis. Suspendisse potenti. Etiam orci neque, rhoncus ac sollicitudin \r\nut, gravida at neque. Aenean lectus enim, dignissim elementum tincidunt \r\nin, imperdiet pellentesque ligula. Aliquam porttitor consectetur quam ac\r\n rhoncus. Praesent est diam, lobortis sed placerat a, semper ut mi. \r\nVestibulum dapibus dictum dapibus. Phasellus ut eros lorem, et ultricies\r\n sapien. Vestibulum ante ipsum primis in faucibus orci luctus et \r\nultrices posuere cubilia Curae;\r\n</p>', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque \r\nsit amet metus felis, non placerat dolor. Sed ultrices neque vitae \r\ntortor condimentum a dignissim mi ornare. Aenean rhoncus, urna vitae \r\nfacilisis egestas, quam nulla tempus risus, ut sollicitudin nisi metus \r\nat nisi. Etiam at nulla a diam faucibus dignissim. Cras cursus est ut \r\nipsum facilisis eget eleifend sapien rhoncus. Praesent vitae mauris vel \r\nfelis consequat porttitor. Quisque egestas dolor at diam ultrices ac \r\ngravida odio volutpat.\r\n</p>\r\n<p>\r\nQuisque condimentum risus a libero rutrum eleifend. Donec et metus \r\ndolor, a bibendum tellus. Fusce lobortis dapibus turpis porttitor \r\niaculis. Suspendisse potenti. Etiam orci neque, rhoncus ac sollicitudin \r\nut, gravida at neque. Aenean lectus enim, dignissim elementum tincidunt \r\nin, imperdiet pellentesque ligula. Aliquam porttitor consectetur quam ac\r\n rhoncus. Praesent est diam, lobortis sed placerat a, semper ut mi. \r\nVestibulum dapibus dictum dapibus. Phasellus ut eros lorem, et ultricies\r\n sapien. Vestibulum ante ipsum primis in faucibus orci luctus et \r\nultrices posuere cubilia Curae;\r\n</p>', NULL, 1, 1, '2012-08-07'),
(2, 'lsdjlasjdflaksjdf<span class="Apple-tab-span" style="white-space:pre">		</span>', 'momomomomomo', 'muuuuuuuuuuuuuu', NULL, 1, 1, '2012-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `diagnostico_molestia`
--

CREATE TABLE IF NOT EXISTS `diagnostico_molestia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Diagnostico_id` int(11) DEFAULT NULL,
  `Molestia_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `exames`
--

CREATE TABLE IF NOT EXISTS `exames` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Medico_id` int(11) DEFAULT NULL,
  `Prontuario_id` int(11) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Resultado` text,
  `Exame_Disponivel_id` int(11) DEFAULT NULL,
  `Paciente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `exames`
--

INSERT INTO `exames` (`id`, `Medico_id`, `Prontuario_id`, `Data`, `Resultado`, `Exame_Disponivel_id`, `Paciente_id`) VALUES
(2, 1, 1, '2012-08-07', 'blabla', 1, 1),
(5, 1, NULL, '2012-08-07', '<b>kkkk</b>', NULL, 3),
(7, 2, NULL, '2012-08-07', 'Vai, amigo!', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `exames_disponiveis`
--

CREATE TABLE IF NOT EXISTS `exames_disponiveis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `exames_disponiveis`
--

INSERT INTO `exames_disponiveis` (`id`, `Nome`, `Descricao`) VALUES
(1, 'Abdominoscopia', NULL),
(2, 'Abreugrafia', NULL),
(3, 'Análise molecular para a síndrome do X frágil', NULL),
(4, 'Antibiograma', NULL),
(5, 'Anuscopia', NULL),
(6, 'Aortografia', NULL),
(7, 'Biopsia', NULL),
(8, 'Cardiotocografia', NULL),
(9, 'Cartão de Guthrie', NULL),
(10, 'Cateterismo', NULL),
(11, 'Citometria de fluxo', NULL),
(12, 'Coagulograma', NULL),
(13, 'Colonoscopia', NULL),
(14, 'Coloração diferencial', NULL),
(15, 'CURB-65', NULL),
(16, 'Densitometria óssea', NULL),
(17, 'Doença residual mínima', NULL),
(18, 'Doppler de carótidas', NULL),
(19, 'Doppler transcraniano', NULL),
(20, 'Eletronistagmografia', NULL),
(21, 'ELISA', NULL),
(22, 'Escore de Bishop', NULL),
(23, 'Esofagograma', NULL),
(24, 'Espermograma', NULL),
(25, 'Espirometria', NULL),
(26, 'Espéculo', NULL),
(27, 'Estetoscópio', NULL),
(28, 'Exame complementar', NULL),
(29, 'Exame complementar de diagnóstico', NULL),
(30, 'Exame pré-nupcial', NULL),
(31, 'Flebotomia', NULL),
(32, 'Gasometria arterial', NULL),
(33, 'Glicosímetro', NULL),
(34, 'Glicosúria', NULL),
(35, 'Hemograma', NULL),
(36, 'Histerosalpingografia', NULL),
(37, 'Imagiologia médica', NULL),
(38, 'Imuno-histoquímica', NULL),
(39, 'Imunofenotipagem', NULL),
(40, 'Laringoscopia', NULL),
(41, 'Lesão intraepitelial de alto grau', NULL),
(42, 'Magnetoencefalografia', NULL),
(43, 'Manobra de Phalen', NULL),
(44, 'Mielografia', NULL),
(45, 'Mielograma', NULL),
(46, 'MRI de difusão', NULL),
(47, 'Nasofaringoscopia', NULL),
(48, 'Nasofibrolaringoscopia', NULL),
(49, 'Nasofibroscopia', NULL),
(50, 'Neuroimagem', NULL),
(51, 'Paracentese', NULL),
(52, 'Perfil lipídico', NULL),
(53, 'PET-CT', NULL),
(54, 'Pressão venosa central', NULL),
(55, 'Prova cruzada', NULL),
(56, 'Pulsação arterial', NULL),
(57, 'Punção aspirativa por agulha fina', NULL),
(58, 'Punção lombar', NULL),
(59, 'Reação de Paul-Bunnell-Davidsohn', NULL),
(60, 'Reação intradérmica', NULL),
(61, 'Ressonância magnética', NULL),
(62, 'Retossigmoidoscopia', NULL),
(63, 'Sigmoidoscopia', NULL),
(64, 'Teste de Allen', NULL),
(65, 'Teste de Coombs', NULL),
(66, 'Teste de Ham', NULL),
(67, 'Teste de Dix-Hallpike', NULL),
(68, 'Teste de gravidez', NULL),
(69, 'Teste de inclinação ortostática', NULL),
(70, 'Teste do nitroazul de tetrazólio', NULL),
(71, 'Teste de Papanicolau', NULL),
(72, 'Teste do pezinho', NULL),
(73, 'Teste VDRL', NULL),
(74, 'Tipagem sanguínea', NULL),
(75, 'Tonometria', NULL),
(76, 'Toracocentese', NULL),
(77, 'Translucência nucal', NULL),
(78, 'Ultrassonografia', NULL),
(79, 'Uranálise', NULL),
(80, 'Urocultura', NULL),
(81, 'Urografia', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `instituicao_medicos`
--

CREATE TABLE IF NOT EXISTS `instituicao_medicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Medico_id` int(11) DEFAULT NULL,
  `Instituicao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `instituicoes`
--

CREATE TABLE IF NOT EXISTS `instituicoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `Endereco` varchar(45) DEFAULT NULL,
  `Telefone` varchar(45) DEFAULT NULL,
  `Cidade` varchar(45) DEFAULT NULL,
  `DataFundacao` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `instituicoes`
--

INSERT INTO `instituicoes` (`id`, `Nome`, `Endereco`, `Telefone`, `Cidade`, `DataFundacao`) VALUES
(1, 'Hospital SP', 'Av. Paulista', '11 12345678', 'SÃ£o Paulo', '0000-00-00'),
(2, 'ARS Administradora', '', '', 'SÃ£o Paulo', '2012-08-06'),
(3, 'Hospital Israelita Albert Einstein', 'R das AcÃ¡cias, 99', '980020001', 'Sao Paulo', '1992-08-07'),
(8, '', '', '', '', '2012-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `medicos`
--

CREATE TABLE IF NOT EXISTS `medicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CodigoSUP` varchar(40) NOT NULL,
  `Nome` varchar(45) DEFAULT NULL,
  `CPF` varchar(45) DEFAULT NULL,
  `Endereco` varchar(45) DEFAULT NULL,
  `Telefone` varchar(45) DEFAULT NULL,
  `Celular` varchar(45) DEFAULT NULL,
  `CEP` varchar(45) DEFAULT NULL,
  `Cidade` varchar(45) DEFAULT NULL,
  `Especialidade` varchar(45) DEFAULT NULL,
  `CRM` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `medicos`
--

INSERT INTO `medicos` (`id`, `CodigoSUP`, `Nome`, `CPF`, `Endereco`, `Telefone`, `Celular`, `CEP`, `Cidade`, `Especialidade`, `CRM`) VALUES
(1, 'M01', 'Drauzio Varella', '', '', '', '', '', '', 'TV', '123456789'),
(2, '', 'Henrique Ribeiro', '98765432109', 'R Iquiririm', '998765433', '888765433', '05577009', 'Sao Paulo', 'Gerintologia', '15674');

-- --------------------------------------------------------

--
-- Table structure for table `molestias`
--

CREATE TABLE IF NOT EXISTS `molestias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `Descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pacientes`
--

CREATE TABLE IF NOT EXISTS `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CodigoSUP` varchar(40) NOT NULL,
  `Nome` varchar(45) DEFAULT NULL,
  `CPF` varchar(45) DEFAULT NULL,
  `Endereco` varchar(45) DEFAULT NULL,
  `Telefone` varchar(45) DEFAULT NULL,
  `Celular` varchar(45) DEFAULT NULL,
  `CEP` varchar(45) DEFAULT NULL,
  `Cidade` varchar(45) DEFAULT NULL,
  `RG` varchar(45) DEFAULT NULL,
  `DataNascimento` date DEFAULT NULL,
  `NomeResponsavel` varchar(45) DEFAULT NULL,
  `EstadoCivil` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pacientes`
--

INSERT INTO `pacientes` (`id`, `CodigoSUP`, `Nome`, `CPF`, `Endereco`, `Telefone`, `Celular`, `CEP`, `Cidade`, `RG`, `DataNascimento`, `NomeResponsavel`, `EstadoCivil`) VALUES
(1, 'P01', 'Camilo Rodegheri', '00887044913', 'Rua Valson Lopes 70', '11 86924400', '', '05360-020', 'SÃ£o Paulo', '4424243', '1992-06-22', '', ''),
(3, 'P00002', 'Joao da Silva Sauro', '1234567890', 'Rua X', '9876-5432', '98765-4231', '0123456', 'SÃ£o Paulo', '123456', '2012-08-05', 'MÃ£e da Silva Sauro', 'forever alone'),
(4, 'p000001', 'Carolina Pires de Almeida', '12345678', 'Avenida Professor Luciano Gualberto', '3344-5566', '92233-4455', '1234567', 'SÃ£o Paulo', '123456789', '1989-08-05', 'NathÃ¡lia Pires de Almeida', 'solteiro');

-- --------------------------------------------------------

--
-- Table structure for table `prontuarios`
--

CREATE TABLE IF NOT EXISTS `prontuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Paciente_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `prontuarios`
--

INSERT INTO `prontuarios` (`id`, `Paciente_id`) VALUES
(1, 1),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Senha` char(40) NOT NULL,
  `Nivel` varchar(1) NOT NULL DEFAULT '0',
  `Ativo` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
