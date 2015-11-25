-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3310
-- Generation Time: Nov 17, 2015 at 04:42 PM
-- Server version: 5.5.46
-- PHP Version: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g42`
--

-- --------------------------------------------------------

--
-- Table structure for table `codigo`
--

CREATE TABLE `codigo` (
  `idCodigo` int(11) NOT NULL,
  `Participante_TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `codigo`
--

INSERT INTO `codigo` (`idCodigo`, `Participante_TablaUsuarios_login`) VALUES
(10, 'pepin');

-- --------------------------------------------------------

--
-- Table structure for table `juradopopular`
--

CREATE TABLE `juradopopular` (
  `descripcionPOP` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `juradopopular`
--

INSERT INTO `juradopopular` (`descripcionPOP`, `TablaUsuarios_login`) VALUES
('Soy Minero y temple mi corazon con pico y barrena', 'joselito');

-- --------------------------------------------------------

--
-- Table structure for table `juradopopular_has_codigo`
--

CREATE TABLE `juradopopular_has_codigo` (
  `JuradoPopular_TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo_idCodigo` int(11) NOT NULL,
  `Codigo_Participante_TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `votoPOP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `juradopopular_has_codigo`
--

INSERT INTO `juradopopular_has_codigo` (`JuradoPopular_TablaUsuarios_login`, `Codigo_idCodigo`, `Codigo_Participante_TablaUsuarios_login`, `votoPOP`) VALUES
('joselito', 10, 'pepin', 3);

-- --------------------------------------------------------

--
-- Table structure for table `juradoprofesional`
--

CREATE TABLE `juradoprofesional` (
  `profesionPRO` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `juradoprofesional`
--

INSERT INTO `juradoprofesional` (`profesionPRO`, `TablaUsuarios_login`) VALUES
('TopChef', 'pepe');

-- --------------------------------------------------------

--
-- Table structure for table `organizador`
--

CREATE TABLE `organizador` (
  `TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `organizador`
--

INSERT INTO `organizador` (`TablaUsuarios_login`) VALUES
('raulreal');

-- --------------------------------------------------------

--
-- Table structure for table `participante`
--

CREATE TABLE `participante` (
  `descripcionPAR` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `coordenadasPAR` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fotoPAR` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `horarioPAR` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `participante`
--

INSERT INTO `participante` (`descripcionPAR`, `coordenadasPAR`, `fotoPAR`, `horarioPAR`, `TablaUsuarios_login`) VALUES
('SOOOOOY PEPIIIN', '12,3,2', 'www.pene.com', '22:00 - 23:00', 'pepin');

-- --------------------------------------------------------

--
-- Table structure for table `pincho`
--

CREATE TABLE `pincho` (
  `idPincho` int(11) NOT NULL,
  `precioPIN` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fotoPIN` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcionPIN` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombrePIN` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ingredientesPIN` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Participante_TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo_idCodigo` int(11) NOT NULL,
  `votoFinal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `pincho`
--

INSERT INTO `pincho` (`idPincho`, `precioPIN`, `fotoPIN`, `descripcionPIN`, `nombrePIN`, `ingredientesPIN`, `Participante_TablaUsuarios_login`, `Codigo_idCodigo`, `votoFinal`) VALUES
(1, '35 euros', 'www.yvanelcomenapolitanas.com', 'Napolitana de chocolate', 'Napolitana de Chocolate', 'Chocolate', 'pepin', 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pincho_has_juradoprofesional`
--

CREATE TABLE `pincho_has_juradoprofesional` (
  `Pincho_idPincho` int(11) NOT NULL,
  `Pincho_Participante_TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Pincho_Codigo_idCodigo` int(11) NOT NULL,
  `JuradoProfesional_TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `pincho_has_juradoprofesional`
--

INSERT INTO `pincho_has_juradoprofesional` (`Pincho_idPincho`, `Pincho_Participante_TablaUsuarios_login`, `Pincho_Codigo_idCodigo`, `JuradoProfesional_TablaUsuarios_login`) VALUES
(1, 'pepin', 10, 'pepe');

-- --------------------------------------------------------

--
-- Table structure for table `tablausuarios`
--

CREATE TABLE `tablausuarios` (
  `login` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombreU` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `emailU` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contraseña` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tablausuarios`
--

INSERT INTO `tablausuarios` (`login`, `nombreU`, `emailU`, `contraseña`, `tipo`) VALUES
('joselito', 'Joselito', 'joselito@cinedebarrio.com', '123', 4),
('pepe', 'Pepe', 'Pepe@gmail.com', '123', 2),
('pepin', 'Pepein', 'pepin@gmail.com', '123', 3),
('raulreal', 'Raul', 'mitsu.powa@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `votoeliminatorio`
--

CREATE TABLE `votoeliminatorio` (
  `Pincho_idPincho` int(11) NOT NULL,
  `JuradoProfesional_TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `votoJPROelim` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `votoeliminatorio`
--

INSERT INTO `votoeliminatorio` (`Pincho_idPincho`, `JuradoProfesional_TablaUsuarios_login`, `votoJPROelim`) VALUES
(1, 'pepe', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codigo`
--
ALTER TABLE `codigo`
  ADD PRIMARY KEY (`idCodigo`,`Participante_TablaUsuarios_login`),
  ADD KEY `fk_Codigo_Participante1_idx` (`Participante_TablaUsuarios_login`);

--
-- Indexes for table `juradopopular`
--
ALTER TABLE `juradopopular`
  ADD PRIMARY KEY (`TablaUsuarios_login`);

--
-- Indexes for table `juradopopular_has_codigo`
--
ALTER TABLE `juradopopular_has_codigo`
  ADD PRIMARY KEY (`JuradoPopular_TablaUsuarios_login`,`Codigo_idCodigo`,`Codigo_Participante_TablaUsuarios_login`),
  ADD KEY `fk_JuradoPopular_has_Codigo_Codigo1_idx` (`Codigo_idCodigo`,`Codigo_Participante_TablaUsuarios_login`),
  ADD KEY `fk_JuradoPopular_has_Codigo_JuradoPopular1_idx` (`JuradoPopular_TablaUsuarios_login`);

--
-- Indexes for table `juradoprofesional`
--
ALTER TABLE `juradoprofesional`
  ADD PRIMARY KEY (`TablaUsuarios_login`);

--
-- Indexes for table `organizador`
--
ALTER TABLE `organizador`
  ADD PRIMARY KEY (`TablaUsuarios_login`);

--
-- Indexes for table `participante`
--
ALTER TABLE `participante`
  ADD PRIMARY KEY (`TablaUsuarios_login`);

--
-- Indexes for table `pincho`
--
ALTER TABLE `pincho`
  ADD PRIMARY KEY (`idPincho`,`Participante_TablaUsuarios_login`,`Codigo_idCodigo`),
  ADD KEY `fk_Pincho_Participante1_idx` (`Participante_TablaUsuarios_login`),
  ADD KEY `fk_Pincho_Codigo1_idx` (`Codigo_idCodigo`);

--
-- Indexes for table `pincho_has_juradoprofesional`
--
ALTER TABLE `pincho_has_juradoprofesional`
  ADD PRIMARY KEY (`Pincho_idPincho`,`Pincho_Participante_TablaUsuarios_login`,`Pincho_Codigo_idCodigo`,`JuradoProfesional_TablaUsuarios_login`),
  ADD KEY `fk_Pincho_has_JuradoProfesional_JuradoProfesional1_idx` (`JuradoProfesional_TablaUsuarios_login`),
  ADD KEY `fk_Pincho_has_JuradoProfesional_Pincho1_idx` (`Pincho_idPincho`,`Pincho_Participante_TablaUsuarios_login`,`Pincho_Codigo_idCodigo`);

--
-- Indexes for table `tablausuarios`
--
ALTER TABLE `tablausuarios`
  ADD PRIMARY KEY (`login`);

--
-- Indexes for table `votoeliminatorio`
--
ALTER TABLE `votoeliminatorio`
  ADD PRIMARY KEY (`Pincho_idPincho`,`JuradoProfesional_TablaUsuarios_login`),
  ADD KEY `fk_Pincho_has_JuradoProfesional1_JuradoProfesional1_idx` (`JuradoProfesional_TablaUsuarios_login`),
  ADD KEY `fk_Pincho_has_JuradoProfesional1_Pincho1_idx` (`Pincho_idPincho`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `codigo`
--
ALTER TABLE `codigo`
  ADD CONSTRAINT `fk_Codigo_Participante1` FOREIGN KEY (`Participante_TablaUsuarios_login`) REFERENCES `participante` (`TablaUsuarios_login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `juradopopular`
--
ALTER TABLE `juradopopular`
  ADD CONSTRAINT `fk_JuradoPopular_TablaUsuarios1` FOREIGN KEY (`TablaUsuarios_login`) REFERENCES `tablausuarios` (`login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `juradopopular_has_codigo`
--
ALTER TABLE `juradopopular_has_codigo`
  ADD CONSTRAINT `fk_JuradoPopular_has_Codigo_JuradoPopular1` FOREIGN KEY (`JuradoPopular_TablaUsuarios_login`) REFERENCES `juradopopular` (`TablaUsuarios_login`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_JuradoPopular_has_Codigo_Codigo1` FOREIGN KEY (`Codigo_idCodigo`, `Codigo_Participante_TablaUsuarios_login`) REFERENCES `codigo` (`idCodigo`, `Participante_TablaUsuarios_login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `juradoprofesional`
--
ALTER TABLE `juradoprofesional`
  ADD CONSTRAINT `fk_JuradoProfesional_TablaUsuarios1` FOREIGN KEY (`TablaUsuarios_login`) REFERENCES `tablausuarios` (`login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `organizador`
--
ALTER TABLE `organizador`
  ADD CONSTRAINT `fk_Organizador_TablaUsuarios1` FOREIGN KEY (`TablaUsuarios_login`) REFERENCES `tablausuarios` (`login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `participante`
--
ALTER TABLE `participante`
  ADD CONSTRAINT `fk_Participante_TablaUsuarios` FOREIGN KEY (`TablaUsuarios_login`) REFERENCES `tablausuarios` (`login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pincho`
--
ALTER TABLE `pincho`
  ADD CONSTRAINT `fk_Pincho_Participante1` FOREIGN KEY (`Participante_TablaUsuarios_login`) REFERENCES `participante` (`TablaUsuarios_login`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pincho_Codigo1` FOREIGN KEY (`Codigo_idCodigo`) REFERENCES `codigo` (`idCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pincho_has_juradoprofesional`
--
ALTER TABLE `pincho_has_juradoprofesional`
  ADD CONSTRAINT `fk_Pincho_has_JuradoProfesional_Pincho1` FOREIGN KEY (`Pincho_idPincho`, `Pincho_Participante_TablaUsuarios_login`, `Pincho_Codigo_idCodigo`) REFERENCES `pincho` (`idPincho`, `Participante_TablaUsuarios_login`, `Codigo_idCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pincho_has_JuradoProfesional_JuradoProfesional1` FOREIGN KEY (`JuradoProfesional_TablaUsuarios_login`) REFERENCES `juradoprofesional` (`TablaUsuarios_login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `votoeliminatorio`
--
ALTER TABLE `votoeliminatorio`
  ADD CONSTRAINT `fk_Pincho_has_JuradoProfesional1_Pincho1` FOREIGN KEY (`Pincho_idPincho`) REFERENCES `pincho` (`idPincho`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pincho_has_JuradoProfesional1_JuradoProfesional1` FOREIGN KEY (`JuradoProfesional_TablaUsuarios_login`) REFERENCES `juradoprofesional` (`TablaUsuarios_login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
