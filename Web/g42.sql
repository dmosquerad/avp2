-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1:3306
-- Généré le :  Mer 25 Novembre 2015 à 18:49
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
(10, 'pepin', NULL),
(11, 'spiderman', NULL),
(12, 'CaraPan', NULL),
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
('Soy Minero y temple mi corazon con pico y barrena', 'joselito'),
('hola soy mariano', 'mariano'),
('Pedro Cuesta Manda                                            ', 'RobLucci');

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
('CARAPAN', '10,12,13', 'www.google.es', '23:30 23:31', 'CaraPan'),
('SOOOOOY PEPIIIN', '12,3,2', 'www.yahoo.fr', '22:00 - 23:00', 'pepin'),
('Octopus', '2,5,3', 'www.esei.uvigo.es', '00:05-23:50', 'spiderman');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Contenu de la table `pincho`
--

INSERT INTO `pincho` (`idPincho`, `precioPIN`, `fotoPIN`, `descripcionPIN`, `nombrePIN`, `ingredientesPIN`, `Participante_TablaUsuarios_login`, `votoPOP`, `finalista`, `estadoPIN`) VALUES
(1, '35 euros', '/Web/images/pburger.jpg', 'Napolitana de chocolate', 'Napolitana de Chocolate', 'Chocolate', 'pepin', 0, 1, 1),
(2, '1 Leuro', '/Web/images/pcafe.jpg', 'que pasa locooo', 'pincho ,tio!', 'Mazapan', 'spiderman', 0, NULL, 1),
(3, '10 CENTS', '/Web/images/pinchos.jpg', 'UN leuro', 'pincho ,tio!', 'Mazapan', 'CaraPan', 0, NULL, 0);

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
('CaraPan', 'CaraPan', 'carapan@wanadoo.comn', '123', 3),
('joselito', 'Joselito', 'joselito@cinedebarrio.com', '123', 4),
('mariano', 'Mariano', 'mar@gmail.com', '123', 4),
('pepe', 'Pepe', 'diagrama@hotmail.com', '123', 2),
('pepin', 'Pepein', 'pepin@gmail.com', '123', 3),
('raulreal', 'Raul', 'mitsu.powa@gmail.com', '123', 1),
("Erich","Jescie","montes.nascetur@Nuncuterat.org","TRE16DMX7BP","4"),
("Montana","Amela","orci.Phasellus@cursus.co.uk","HQH76BFP7EQ","4"),
("Eagan","Kirsten","laoreet@aliquamiaculislacus.edu","QKE75BBQ6DB","3"),
("Kieran","Erin","erat@estarcuac.net","TKC47MLN1QY","1"),
("Dana","Lydia","vitae@acturpisegestas.ca","HIA84YRO0ES","2"),
("Heidi","Kyla","posuere.cubilia.Curae@egestasligula.org","ONJ58OAX2CV","1"),
("Cailin","Keiko","non@ornarefacilisiseget.net","EJT14FGY8CQ","4"),
("Michelle","Colleen","semper.tellus@aliquet.edu","UMO61HHI3BN","4"),
("Nathan","Brenna","Pellentesque.ut.ipsum@nisiaodio.co.uk","SKS79TWZ6ZF","4"),
("Clio","Dai","at.sem@convallis.com","LGU47BLC5QS","4"),
("Yvette","Wynne","ac@posuere.edu","YQA84DNF6YL","3"),
("Gillian","Rhoda","tristique@id.net","UCX36YRR7OE","3"),
("Amy","Iris","nunc@massa.ca","OQQ33IAX0PU","4"),
("Freya","Ciara","fermentum.arcu@quisdiam.com","FRY78VDO7VF","4"),
("Neve","Madeson","Integer@ante.org","ZUE88YCV7YT","2"),
("Leah","Madeline","Integer.id@feugiatnon.edu","NEY65AZR3KD","4"),
("Nerea","Hiroko","dictum.eleifend.nunc@Loremipsumdolor.ca","FUM78NWF7UK","2"),("Jameson","Jacqueline","quam.quis.diam@convallisdolor.com","BGV30FFZ4AO","3"),("Jenette","Holly","cursus.Nunc@non.org","ZWQ58XYA0MN","1"),("Summer","Yvette","ut.cursus@duinec.ca","WNL51OQI7ZW","3"),("Ferris","Joelle","nisl.elementum@idsapien.edu","CSW34ROT6OO","3"),
("Savannah","Adele","ornare.lectus@Etiamlaoreet.edu","NNO42YTE0UV","2"),("Shannon","Vivien","at@commodo.net","FZR12KVA0IT","2"),("Hayfa","Kylan","Duis.volutpat.nunc@risusat.net","KNJ96HLY2GJ","3"),("Eaton","Chava","enim@Vivamuseuismod.com","URD43NZE3JD","2"),("Gretchen","Amanda","ultrices.posuere.cubilia@ridiculus.ca","AER41NJK8BA","3"),
("Quinn","Ria","sit.amet@ipsumDonec.co.uk","YJO02LQT6NO","4"),("Tanya","Fleur","sed.est.Nunc@sodales.com","XTF10HCF8ZQ","1"),("Silas","Charde","nonummy.ut@elitpretium.co.uk","PPN82VNC8NF","4"),("Leo","Ruth","Morbi.non.sapien@sit.ca","RJB10WFM6NL","3"),("Justine","Tatyana","Nullam.suscipit.est@ut.net","VWD50GJW4UV","3"),
("Keiko","Bryar","Suspendisse.aliquet@Maurisutquam.org","VCV51PRA7EA","1"),("Kyle","Desirae","lectus.pede@montesnasceturridiculus.org","KJF97UUG1KR","4"),("Fatima","Joan","non.enim.commodo@sapiencursus.edu","IKO45RIP6TB","2"),("Hoyt","Lana","purus.sapien.gravida@a.ca","MMJ64MXE6KR","2"),("Trevor","Rose","a.odio@metuseuerat.ca","GUD22AKA3HT","2"),
("Camden","Montana","molestie@turpisvitae.org","ZFY48HMW6UZ","1"),("Acton","Danielle","Duis.risus@porttitorerosnec.co.uk","EYM90NLY0MM","4"),("Xerxes","Chastity","sed.turpis.nec@ac.ca","UKO85IIU1RE","1"),("Emily","Rinah","Morbi.neque@imperdiet.net","ZLX20GCT6GD","3"),("Latifah","Octavia","aliquam@afelisullamcorper.co.uk","DAC29DHH5UT","4"),
("Geraldine","Lesley","vel.sapien.imperdiet@Nulla.net","FWH53FRM2KI","1"),("Alexandra","Blair","nec@Integerurna.com","GIE88HVG7ZQ","4"),("Xena","Donna","ornare.libero@dolorDonec.edu","BBA58ETC9WH","3"),("Fitzgerald","Rama","tellus.faucibus@liberoest.ca","BES16VKQ2ZU","3"),("Lucas","Quail","cursus@est.net","VRM93XAV7OA","1"),
("Sean","Chiquita","ornare.Fusce.mollis@magnaUt.com","BRN36VZZ7PD","3"),("Savan","Rhoda","Cras@Nuncullamcorpervelit.edu","NUK38VIG2KF","1"),("Priscilla","Octavia","ut.sem.Nulla@quisaccumsanconvallis.net","XQG94IRK4MZ","1"),("Katell","Leah","Vivamus@sitamet.com","NFS65IIP0YV","3"),
('RobLucci', 'Rui Car', 'ruicarames.ticvdm@gmail.com', '123', 4),
('spiderman', 'Peter Parker', 'spidey@marvel.com', '123', 3);

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
