-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 12 mars 2020 à 10:05
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `patterns`
--

-- --------------------------------------------------------

--
-- Structure de la table `img`
--

DROP TABLE IF EXISTS `img`;
CREATE TABLE IF NOT EXISTS `img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `lien` varchar(50) NOT NULL,
  `createur` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `img`
--

INSERT INTO `img` (`id`, `nom`, `lien`, `createur`) VALUES
(1, '1.png', ' images/1.png', ' Dylan'),
(2, '2.png', ' images/2.png', ' Potichat'),
(3, '3.png', ' images/3.png', ' Sophie'),
(4, '4.png', ' images/4.png', ' Imzy'),
(5, '5.png', ' images/5.png', ' Naik'),
(6, '6.png', ' images/6.png', ' Law'),
(7, '7.png', ' images/7.png', ' Dylan'),
(8, '8.png', ' images/8.png', ' Toto'),
(9, '9.png', ' images/9.png', ' Ok'),
(10, '10.png', ' images/10.png', ' Lol');

-- --------------------------------------------------------

--
-- Structure de la table `variables`
--

DROP TABLE IF EXISTS `variables`;
CREATE TABLE IF NOT EXISTS `variables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color1` varchar(15) NOT NULL,
  `color2` varchar(15) NOT NULL,
  `motif` varchar(15) NOT NULL,
  `size` varchar(15) NOT NULL,
  `direction` varchar(15) NOT NULL,
  `life` varchar(15) NOT NULL,
  `survive` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
