-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 13 mars 2020 à 10:55
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
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `img`
--

INSERT INTO `img` (`id`, `nom`, `lien`, `createur`) VALUES
(1, '1.png', ' images/1.png', ' Coronavirus'),
(2, '2.png', ' images/2.png', ' Dylan'),
(3, '3.png', ' images/3.png', ' NaÃ¯k'),
(4, '4.png', ' images/4.png', ' Olympe'),
(5, '5.png', ' images/5.png', ' ismail'),
(6, '6.png', ' images/6.png', ' fresque de liantsoa'),
(7, '7.png', ' images/7.png', ' Sophie'),
(8, '8.png', ' images/8.png', ' Ã‰bola'),
(9, '9.png', ' images/9.png', ' Alimatou'),
(10, '10.png', ' images/10.png', ' Sarah'),
(11, '11.png', ' images/11.png', ' GaÃ«lle'),
(12, '12.png', ' images/12.png', ' Vincent'),
(13, '13.png', ' images/13.png', ' Mathieu'),
(14, '14.png', ' images/14.png', ' Emilie'),
(15, '15.png', ' images/15.png', ' ChloÃ©'),
(16, '16.png', ' images/16.png', ' liv');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `variables`
--

INSERT INTO `variables` (`id`, `color1`, `color2`, `motif`, `size`, `direction`, `life`, `survive`) VALUES
(1, 'food', 'sea', 'mariniere', 'wood', 'farming', 'live', 'no'),
(2, 'bottle', 'forest', 'mariniere', 'clay', 'farming', 'live', 'yes'),
(3, 'bag', 'hills', 'diffus', 'clay', 'hunting', 'kill', 'yes'),
(4, 'plush', 'cave', 'diffus', 'stone', 'foraging', 'live', 'no'),
(5, 'bag', 'cave', 'diffus', 'clay', 'foraging', 'live', 'yes'),
(6, 'bottle', 'sea', 'mariniere', 'stone', 'taming', 'live', 'yes'),
(7, 'plush', 'hills', 'mariniere', 'stone', 'taming', 'live', 'yes'),
(8, 'axe', 'forest', 'diffus', 'clay', 'hunting', 'kill', 'no'),
(9, 'axe', 'hills', 'mariniere', 'clay', 'hunting', 'live', 'yes'),
(10, 'map', 'hills', 'diffus', 'wood', 'taming', 'live', 'yes'),
(11, 'bag', 'sea', 'diffus', 'wood', 'farming', 'kill', 'yes'),
(12, 'bottle', 'hills', 'mariniere', 'clay', 'farming', 'live', 'no'),
(13, 'axe', 'forest', 'diffus', 'wood', 'hunting', 'kill', 'yes'),
(14, 'map', 'hills', 'mariniere', 'clay', 'foraging', 'live', 'no'),
(15, 'bow', 'hills', 'diffus', 'wood', 'foraging', 'live', 'no'),
(16, 'axe', 'hills', 'diffus', 'wood', 'hunting', 'live', 'yes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
