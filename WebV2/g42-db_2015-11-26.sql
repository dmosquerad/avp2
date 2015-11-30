-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1:3306
-- Généré le :  Jeu 26 Novembre 2015 à 10:55
-- Version du serveur :  5.5.46
-- Version de PHP :  5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `g42`
--

CREATE DATABASE IF NOT EXISTS `g42` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `g42`;


CREATE USER 'g42'@'localhost' IDENTIFIED BY 'g42';

GRANT ALL PRIVILEGES ON g42 . * TO 'g42'@'localhost';

--
-- Structure de la table `codigo`
--

CREATE TABLE `codigo` (
  `idCodigo` int(11) NOT NULL,
  `Participante_TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `uso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Contenu de la table `codigo`
--

INSERT INTO `codigo` (`idCodigo`, `Participante_TablaUsuarios_login`, `uso`) VALUES
(9, 'Signe', NULL),
(10, 'pepin', NULL),
(11, 'spiderman', NULL),
(12, 'CaraPan', NULL),
(12, 'Kerry', 12),
(32, 'Laura', NULL),
(34, 'pepin', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `juradopopular`
--

CREATE TABLE `juradopopular` (
  `descripcionPOP` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Contenu de la table `juradopopular`
--

INSERT INTO `juradopopular` (`descripcionPOP`, `TablaUsuarios_login`) VALUES
('Soy Beth', 'Bethany'),
('Soy Gemma', 'Gemma'),
('Soy joselito', 'joselito'),
('Soy Leslie', 'Leslie'),
('hola soy mariano', 'mariano'),
('Soy robbi                                         ', 'RobLucci'),
('Soy susan', 'Susan');

-- --------------------------------------------------------

--
-- Structure de la table `juradopopular_has_codigo`
--

CREATE TABLE `juradopopular_has_codigo` (
  `JuradoPopular_TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo_idCodigo` int(11) NOT NULL,
  `Codigo_Participante_TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `uso` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Contenu de la table `juradopopular_has_codigo`
--

INSERT INTO `juradopopular_has_codigo` (`JuradoPopular_TablaUsuarios_login`, `Codigo_idCodigo`, `Codigo_Participante_TablaUsuarios_login`, `uso`) VALUES
('joselito', 12, 'CaraPan', 0),
('joselito', 11, 'spiderman', 0),
('RobLucci', 10, 'pepin', 0);

-- --------------------------------------------------------

--
-- Structure de la table `juradoprofesional`
--

CREATE TABLE `juradoprofesional` (
  `profesionPRO` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `votoFinal` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Contenu de la table `juradoprofesional`
--

INSERT INTO `juradoprofesional` (`profesionPRO`, `TablaUsuarios_login`, `votoFinal`) VALUES
('critico', 'Bethany', 1),
('critico', 'Desiree', 1),
('Critica', 'Gemma', NULL),
('Cocinera', 'Isabelle', 2),
('Cocinero', 'joselito', 1),
('cocinera', 'Katell', 1),
('drogadiccion', 'pepe', 1);

-- --------------------------------------------------------

--
-- Structure de la table `organizador`
--

CREATE TABLE `organizador` (
  `TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Contenu de la table `organizador`
--

INSERT INTO `organizador` (`TablaUsuarios_login`) VALUES
('raulreal');

-- --------------------------------------------------------

--
-- Structure de la table `participante`
--

CREATE TABLE `participante` (
  `descripcionPAR` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `coordenadasPAR` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fotoPAR` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `horarioPAR` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Contenu de la table `participante`
--

INSERT INTO `participante` (`descripcionPAR`, `coordenadasPAR`, `fotoPAR`, `horarioPAR`, `TablaUsuarios_login`) VALUES
('CARAPAN', '10,12,13', '/Web/images/estab/eorellas.jpg', '12:00 - 23:31', 'CaraPan'),
('ornare, libero at auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare lectus justo eu', '-53.20668, 76.84617', '/Web/images/estab/eatarazana.jpg', '22:00 - 23:00', 'Imogene'),
('et tristique pellentesque, tellus sem mollis dui, in sodales elit erat vitae risus. Duis a', '49.6132, -82.48841', '/Web/images/estab/etapanegra.jpg', '22:00 - 23:00', 'Isabelle'),
('in, dolor. Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam auctor, velit', '-84.0338, -121.35277', '/Web/images/estab/eatarazana.jpg', '22:00 - 23:00', 'Keely'),
('elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui.', '-59.46119, -152.81167', '/Web/images/estab/etapanegra.jpg', '22:00 - 23:00', 'Kerry'),
('diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non,', '-31.99376, 117.68988', '/Web/images/estab/etapanegra.jpg', '22:00 - 23:00', 'Kirby'),
('libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc', '72.405, -97.48625', '/Web/images/estab/eportovello.jpg', '22:00 - 23:00', 'Laura'),
('ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus ornare. Fusce mollis.', '16.12172, -104.81601', '/Web/images/estab/etapanegra.jpg', '22:00 - 23:00', 'Mara'),
('SOOOOOY PEPIIIN', '12,3,2', '/Web/images/estab/efuentefria.jpg', '22:00 - 23:00', 'pepin'),
('velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id', '-35.59991, -155.1532', '/Web/images/estab/eportovello.jpg', '22:00 - 23:00', 'Quail'),
('augue, eu tempor erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et', '-46.9993, -99.50792', '/Web/images/estab/eatarazana.jpg', '22:00 - 23:00', 'Rowan'),
('pretium aliquet, metus urna convallis erat, eget tincidunt dui augue eu tellus. Phasellus elit pede,', '24.14478, -158.23679', '/Web/images/estab/etapanegra.jpg', '22:00 - 23:00', 'Signe'),
('Octopus', '2,5,3', '/Web/images/estab/eatarazana.jpg', '00:05-23:50', 'spiderman'),
('et netus et malesuada fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque', '46.30458, -30.88142', '/Web/images/estab/eportovello.jpg', '22:00 - 23:00', 'Stephanie'),
('dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi', '68.74495, -64.51103', '/Web/images/estab/etapanegra.jpg', '22:00 - 23:00', 'Tallulah');

-- --------------------------------------------------------

--
-- Structure de la table `pincho`
--

CREATE TABLE `pincho` (
  `idPincho` int(11) NOT NULL,
  `precioPIN` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fotoPIN` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcionPIN` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombrePIN` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ingredientesPIN` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Participante_TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `votoPOP` int(11) DEFAULT NULL,
  `finalista` int(1) DEFAULT NULL,
  `estadoPIN` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Contenu de la table `pincho`
--

INSERT INTO `pincho` (`idPincho`, `precioPIN`, `fotoPIN`, `descripcionPIN`, `nombrePIN`, `ingredientesPIN`, `Participante_TablaUsuarios_login`, `votoPOP`, `finalista`, `estadoPIN`) VALUES
(1, '3.5 euro', '/Web/images/pburger.jpg', 'burger', 'Napolitana de Chocolate', 'Chocolate', 'pepin', 0, 1, 1),
(2, '1 euro', '/Web/images/pcafe.jpg', 'Ese cafe', 'pincho ,tio!', 'Mazapan', 'spiderman', 0, NULL, 1),
(3, '0.9 cents', '/Web/images/pinchos.jpg', 'un pincho', 'pincho ,tio!', 'Mazapan', 'CaraPan', 0, NULL, 0),
(4, '2.55', '/Web/images/ptomate.jpg', 'tomates con tomate tomates con tomate', 'TOMATOES', 'tomate', 'Isabelle', 1, 1, 1),
(5, '2.10', '/Web/images/ppostre.jpg', 'Vaso frio con pincho caliente', 'Vaso ', NULL, 'Keely', 1, 0, 1),
(6, '2.10 euros', '/Web/images/ppostre.jpg', 'Postre', 'PPPPPPPPPPPPP', 'Frio', 'Quail', 2, 1, 1),
(7, '2.00 euros', '/Web/images/ppostre.jpg', 'Pincho ese de postre muy bueno', 'Pincho postre', 'plato pan ingredientes', 'Signe', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `pincho_has_juradoprofesional`
--

CREATE TABLE `pincho_has_juradoprofesional` (
  `Pincho_idPincho` int(11) NOT NULL,
  `Pincho_Participante_TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `JuradoProfesional_TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Contenu de la table `pincho_has_juradoprofesional`
--

INSERT INTO `pincho_has_juradoprofesional` (`Pincho_idPincho`, `Pincho_Participante_TablaUsuarios_login`, `JuradoProfesional_TablaUsuarios_login`) VALUES
(1, 'pepin', 'pepe'),
(2, 'spiderman', 'pepe'),
(3, 'CaraPan', 'pepe');

-- --------------------------------------------------------

--
-- Structure de la table `tablausuarios`
--

CREATE TABLE `tablausuarios` (
  `login` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombreU` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `emailU` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Contenu de la table `tablausuarios`
--

INSERT INTO `tablausuarios` (`login`, `nombreU`, `emailU`, `password`, `tipo`) VALUES
('Ayanna', 'Kay', 'lectus.ante.dictum@Aeneaneuismodmauris.org', 'LBJ13UCO2WR', 3),
('Bethany', 'Quynn', 'adipiscing.lobortis.risus@nisi.org', 'QFI27WCJ1JM', 3),
('CaraPan', 'CaraPan', 'carapan@wanadoo.comn', '123', 3),
('Desiree', 'Noelle', 'amet.nulla@dictumultriciesligula.ca', 'PZX60JVZ6VU', 3),
('Galena', 'Maya', 'ut.erat.Sed@leo.co.uk', 'WTM68YGN3KX', 2),
('Gemma', 'Yvette', 'netus@diamDuismi.co.uk', 'UUW72JCJ1JP', 4),
('Ifeoma', 'Willow', 'malesuada.vel.convallis@idrisusquis.ca', 'FEP24YWS0FM', 2),
('Imogene', 'Hedwig', 'enim.Etiam.gravida@lectuspede.net', 'YGA16HFX3VY', 3),
('Isabelle', 'Mollie', 'nec@nonummyipsum.co.uk', 'DLT62CID2UR', 3),
('joselito', 'Joselito', 'joselito@cinedebarrio.com', '123', 4),
('Joy', 'Nichole', 'a@acturpisegestas.co.uk', 'ZWY86IKZ0QP', 2),
('Katell', 'Sigourney', 'ante.iaculis.nec@sociisnatoquepenatibus.edu', 'PWA25XVM9WE', 2),
('Keely', 'Rana', 'ridiculus@justoPraesent.co.uk', 'SFW82NHG5LC', 3),
('Kerry', 'Jillian', 'dolor.Fusce.feugiat@amet.ca', 'YNU23WVM7JT', 3),
('Kirby', 'Caryn', 'amet.diam@ipsum.edu', 'XWT63XWW8JO', 3),
('Kirsten', 'Inez', 'Morbi.metus.Vivamus@semper.net', 'PRW66WFP1DQ', 4),
('Laura', 'Renee', 'ante.Vivamus@pharetrased.org', 'TCV98EDX0YB', 3),
('Leslie', 'Cheryl', 'dictum.augue.malesuada@sitametante.co.uk', 'CTB83GZH6DA', 4),
('Mara', 'Abigail', 'Fusce@pedeCumsociis.ca', 'OLH51FPU5KM', 3),
('mariano', 'Mariano', 'mar@gmail.com', '123', 4),
('Melissa', 'Mary', 'luctus.ipsum.leo@Craseu.net', 'RWW95POP6ZN', 2),
('Mira', 'Ursa', 'scelerisque.dui@Duis.net', 'BVR44RMK4QH', 4),
('Natalie', 'Clare', 'Duis@sedleoCras.co.uk', 'LAM04VNR2DL', 2),
('pepe', 'Pepe', 'diagrama@hotmail.com', '123', 2),
('pepin', 'Pepein', 'pepin@gmail.com', '123', 3),
('Quail', 'Rachel', 'nec@acfeugiat.ca', 'ZXK15JBC0NI', 3),
('Rana', 'Nelle', 'ante.ipsum@condimentum.net', 'LGC05ZHX5AN', 2),
('raulreal', 'Raul', 'mitsu.powa@gmail.com', '123', 1),
('Rebecca', 'Lacy', 'consectetuer.euismod.est@ornaresagittis.co.uk', 'HAW09QKX2FY', 3),
('RobLucci', 'Rui Car', 'ruicarames.ticvdm@gmail.com', '123', 4),
('Rowan', 'Xerxes', 'justo.faucibus.lectus@ipsum.org', 'FUR32WVP0IE', 3),
('Signe', 'Hyacinth', 'augue.malesuada@magnaSuspendissetristique.ca', 'VET10RKV8OM', 3),
('spiderman', 'Peter Parker', 'spidey@marvel.com', '123', 3),
('Stephanie', 'Iola', 'magnis.dis@et.edu', 'XDJ12VLG9GL', 3),
('Susan', 'Chiquita', 'urna.Nunc.quis@eratin.co.uk', 'LAX03PMA4RS', 4),
('Tallulah', 'Rama', 'Suspendisse@tempus.edu', 'SKT47FUS1HM', 3),
('Venus', 'Gloria', 'Etiam.bibendum.fermentum@duilectus.org', 'OGD95YGK9EJ', 2);

-- --------------------------------------------------------

--
-- Structure de la table `votoeliminatorio`
--

CREATE TABLE `votoeliminatorio` (
  `Pincho_idPincho` int(11) NOT NULL,
  `JuradoProfesional_TablaUsuarios_login` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `votoJPROelim` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Contenu de la table `votoeliminatorio`
--

INSERT INTO `votoeliminatorio` (`Pincho_idPincho`, `JuradoProfesional_TablaUsuarios_login`, `votoJPROelim`) VALUES
(1, 'pepe', 9);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `codigo`
--
ALTER TABLE `codigo`
  ADD PRIMARY KEY (`idCodigo`,`Participante_TablaUsuarios_login`),
  ADD KEY `fk_Codigo_Participante1_idx` (`Participante_TablaUsuarios_login`);

--
-- Index pour la table `juradopopular`
--
ALTER TABLE `juradopopular`
  ADD PRIMARY KEY (`TablaUsuarios_login`);

--
-- Index pour la table `juradopopular_has_codigo`
--
ALTER TABLE `juradopopular_has_codigo`
  ADD PRIMARY KEY (`JuradoPopular_TablaUsuarios_login`,`Codigo_Participante_TablaUsuarios_login`),
  ADD KEY `fk_JuradoPopular_has_Codigo_Codigo1_idx` (`Codigo_idCodigo`,`Codigo_Participante_TablaUsuarios_login`),
  ADD KEY `fk_JuradoPopular_has_Codigo_JuradoPopular1_idx` (`JuradoPopular_TablaUsuarios_login`);

--
-- Index pour la table `juradoprofesional`
--
ALTER TABLE `juradoprofesional`
  ADD PRIMARY KEY (`TablaUsuarios_login`);

--
-- Index pour la table `organizador`
--
ALTER TABLE `organizador`
  ADD PRIMARY KEY (`TablaUsuarios_login`);

--
-- Index pour la table `participante`
--
ALTER TABLE `participante`
  ADD PRIMARY KEY (`TablaUsuarios_login`);

--
-- Index pour la table `pincho`
--
ALTER TABLE `pincho`
  ADD PRIMARY KEY (`idPincho`,`Participante_TablaUsuarios_login`),
  ADD KEY `fk_Pincho_Participante1_idx` (`Participante_TablaUsuarios_login`);

--
-- Index pour la table `pincho_has_juradoprofesional`
--
ALTER TABLE `pincho_has_juradoprofesional`
  ADD PRIMARY KEY (`Pincho_idPincho`,`Pincho_Participante_TablaUsuarios_login`,`JuradoProfesional_TablaUsuarios_login`),
  ADD KEY `fk_Pincho_has_JuradoProfesional_JuradoProfesional1_idx` (`JuradoProfesional_TablaUsuarios_login`),
  ADD KEY `fk_Pincho_has_JuradoProfesional_Pincho1_idx` (`Pincho_idPincho`,`Pincho_Participante_TablaUsuarios_login`);

--
-- Index pour la table `tablausuarios`
--
ALTER TABLE `tablausuarios`
  ADD PRIMARY KEY (`login`);

--
-- Index pour la table `votoeliminatorio`
--
ALTER TABLE `votoeliminatorio`
  ADD PRIMARY KEY (`Pincho_idPincho`,`JuradoProfesional_TablaUsuarios_login`),
  ADD KEY `fk_Pincho_has_JuradoProfesional1_JuradoProfesional1_idx` (`JuradoProfesional_TablaUsuarios_login`),
  ADD KEY `fk_Pincho_has_JuradoProfesional1_Pincho1_idx` (`Pincho_idPincho`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pincho`
--
ALTER TABLE `pincho`
  MODIFY `idPincho` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `codigo`
--
ALTER TABLE `codigo`
  ADD CONSTRAINT `fk_Codigo_Participante1` FOREIGN KEY (`Participante_TablaUsuarios_login`) REFERENCES `participante` (`TablaUsuarios_login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `juradopopular`
--
ALTER TABLE `juradopopular`
  ADD CONSTRAINT `fk_JuradoPopular_TablaUsuarios1` FOREIGN KEY (`TablaUsuarios_login`) REFERENCES `tablausuarios` (`login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `juradopopular_has_codigo`
--
ALTER TABLE `juradopopular_has_codigo`
  ADD CONSTRAINT `fk_JuradoPopular_has_Codigo_Codigo1` FOREIGN KEY (`Codigo_idCodigo`, `Codigo_Participante_TablaUsuarios_login`) REFERENCES `codigo` (`idCodigo`, `Participante_TablaUsuarios_login`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_JuradoPopular_has_Codigo_JuradoPopular1` FOREIGN KEY (`JuradoPopular_TablaUsuarios_login`) REFERENCES `juradopopular` (`TablaUsuarios_login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `juradoprofesional`
--
ALTER TABLE `juradoprofesional`
  ADD CONSTRAINT `fk_JuradoProfesional_TablaUsuarios1` FOREIGN KEY (`TablaUsuarios_login`) REFERENCES `tablausuarios` (`login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `organizador`
--
ALTER TABLE `organizador`
  ADD CONSTRAINT `fk_Organizador_TablaUsuarios1` FOREIGN KEY (`TablaUsuarios_login`) REFERENCES `tablausuarios` (`login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `participante`
--
ALTER TABLE `participante`
  ADD CONSTRAINT `fk_Participante_TablaUsuarios` FOREIGN KEY (`TablaUsuarios_login`) REFERENCES `tablausuarios` (`login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `pincho`
--
ALTER TABLE `pincho`
  ADD CONSTRAINT `fk_Pincho_Participante1` FOREIGN KEY (`Participante_TablaUsuarios_login`) REFERENCES `participante` (`TablaUsuarios_login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `pincho_has_juradoprofesional`
--
ALTER TABLE `pincho_has_juradoprofesional`
  ADD CONSTRAINT `fk_Pincho_has_JuradoProfesional_JuradoProfesional1` FOREIGN KEY (`JuradoProfesional_TablaUsuarios_login`) REFERENCES `juradoprofesional` (`TablaUsuarios_login`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pincho_has_JuradoProfesional_Pincho1` FOREIGN KEY (`Pincho_idPincho`, `Pincho_Participante_TablaUsuarios_login`) REFERENCES `pincho` (`idPincho`, `Participante_TablaUsuarios_login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `votoeliminatorio`
--
ALTER TABLE `votoeliminatorio`
  ADD CONSTRAINT `fk_Pincho_has_JuradoProfesional1_JuradoProfesional1` FOREIGN KEY (`JuradoProfesional_TablaUsuarios_login`) REFERENCES `juradoprofesional` (`TablaUsuarios_login`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pincho_has_JuradoProfesional1_Pincho1` FOREIGN KEY (`Pincho_idPincho`) REFERENCES `pincho` (`idPincho`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
