-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 20 jan. 2022 à 16:07
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `autocode`
--

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

DROP TABLE IF EXISTS `eleves`;
CREATE TABLE IF NOT EXISTS `eleves` (
  `idE` int(3) NOT NULL,
  `nomE` varchar(25) NOT NULL,
  `prenomE` varchar(25) NOT NULL,
  `dateN` date DEFAULT NULL,
  PRIMARY KEY (`idE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




-- --------------------------------------------------------

--
-- Structure de la table `examp`
--

DROP TABLE IF EXISTS `examp`;
CREATE TABLE IF NOT EXISTS `examp` (
  `IdP` int(3) NOT NULL,
  `dateP` date DEFAULT NULL,
  `HeureDP` date DEFAULT NULL,
  `HeureFP` date DEFAULT NULL,
  `ResultatP` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`IdP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `ide` int(10) NOT NULL AUTO_INCREMENT,
  `DateDebut` datetime NOT NULL,
  `DateFin` datetime DEFAULT NULL,
  `Login` varchar(25) NOT NULL,
  PRIMARY KEY (`ide`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `moniteurs`
--

DROP TABLE IF EXISTS `moniteurs`;
CREATE TABLE IF NOT EXISTS `moniteurs` (
  `idM` int(3) NOT NULL,
  `nomM` varchar(25) NOT NULL,
  `prenomM` varchar(25) NOT NULL,
  `numM` char(10) NOT NULL,
  `dateE` date DEFAULT NULL,
  `mailM` varchar(25) NOT NULL,
  `diplome` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idM`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `plannig`
--

DROP TABLE IF EXISTS `plannig`;
CREATE TABLE IF NOT EXISTS `plannig` (
  `IdCond` int(3) NOT NULL,
  `IdM` int(3) NOT NULL,
  `IdCode` int(3) NOT NULL,
  `IdE` int(3) NOT NULL,
  `Etatp` varchar(25) DEFAULT NULL,
  `DateHF` date DEFAULT NULL,
  PRIMARY KEY (`IdCond`,`IdM`,`IdCode`,`IdE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

DROP TABLE IF EXISTS `resultat`;
CREATE TABLE IF NOT EXISTS `resultat` (
  `IdE` int(3) NOT NULL,
  `IdSC` int(3) NOT NULL,
  PRIMARY KEY (`IdE`,`IdSC`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `resultat2`
--

DROP TABLE IF EXISTS `resultat2`;
CREATE TABLE IF NOT EXISTS `resultat2` (
  `IdE` int(3) NOT NULL,
  `IdP` int(3) NOT NULL,
  PRIMARY KEY (`IdE`,`IdP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

DROP TABLE IF EXISTS `salles`;
CREATE TABLE IF NOT EXISTS `salles` (
  `idS` int(3) NOT NULL,
  `nomS` varchar(25) DEFAULT NULL,
  `nbP` int(3) DEFAULT NULL,
  PRIMARY KEY (`idS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sessioncode`
--

DROP TABLE IF EXISTS `sessioncode`;
CREATE TABLE IF NOT EXISTS `sessioncode` (
  `IdSC` int(3) NOT NULL,
  `dateSC` date DEFAULT NULL,
  `HeureDSC` date DEFAULT NULL,
  `HeureFSC` date DEFAULT NULL,
  PRIMARY KEY (`IdSC`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `suit`
--

DROP TABLE IF EXISTS `suit`;
CREATE TABLE IF NOT EXISTS `suit` (
  `IdE` int(3) NOT NULL,
  `IdCond` int(3) NOT NULL,
  PRIMARY KEY (`IdE`,`IdCond`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `suit2`
--

DROP TABLE IF EXISTS `suit2`;
CREATE TABLE IF NOT EXISTS `suit2` (
  `IdE` int(3) NOT NULL,
  `IdCode` int(3) NOT NULL,
  PRIMARY KEY (`IdE`,`IdCode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idu` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `login` varchar(25) NOT NULL,
  `mdp` varchar(25) NOT NULL,
  `niveau` int(11) DEFAULT '0',
  PRIMARY KEY (`idu`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idu`, `nom`, `prenom`, `mail`, `login`, `mdp`, `niveau`) VALUES
(1, 'Panini', 'Henri', '', 'admin', 'admin', 0),
(2, 'admin', 'admin', 'admin@mail.com', 'admin', 'admin', 1),
(3, 'Ponpon', 'Fleure', 'fleure@mail.com', 'Ponce', 'azertyuiop', 0);

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `idV` int(3) NOT NULL,
  `nomV` varchar(25) DEFAULT NULL,
  `carburant` varchar(25) DEFAULT NULL,
  `immatriculation` varchar(9) DEFAULT NULL,
  `dateMiseEnCirculation` date DEFAULT NULL,
  PRIMARY KEY (`idV`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
