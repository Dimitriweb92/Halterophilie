-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 13 sep. 2018 à 08:58
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbhalterophilie`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `thelogin` varchar(60) NOT NULL,
  `thename` varchar(60) NOT NULL,
  `thepwd` varchar(64) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `idarticle` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `thetitle` varchar(200) DEFAULT NULL,
  `thetext` text,
  `thedate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(60) DEFAULT NULL,
  `admin_idadmin` int(10) UNSIGNED NOT NULL,
  `rubrique_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idarticle`),
  KEY `fk_article_admin1_idx` (`admin_idadmin`),
  KEY `fk_article_rubrique1_idx` (`rubrique_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rubrique`
--

DROP TABLE IF EXISTS `rubrique`;
CREATE TABLE IF NOT EXISTS `rubrique` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(80) NOT NULL,
  `niveaux` int(11) DEFAULT NULL,
  `ordre` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rubrique`
--

INSERT INTO `rubrique` (`id`, `titre`, `niveaux`, `ordre`) VALUES
(1, 'Haltérophilie', 0, NULL),
(2, 'Effets', 0, NULL),
(3, 'Transversalité', 0, NULL),
(4, 'Contacts', 0, NULL),
(5, 'Services', 0, NULL),
(6, 'Partenariats', 0, NULL),
(7, 'Entrainement', 1, NULL),
(8, 'Définition', 1, NULL),
(9, 'Cours', 1, NULL),
(10, 'Compétition', 1, NULL),
(11, 'Explosivité', 2, NULL),
(12, 'Souplesse', 2, NULL),
(13, 'Posture', 2, NULL),
(14, 'Muscle', 2, NULL),
(15, 'Croissance', 2, NULL),
(16, 'Os', 2, NULL),
(17, 'Coeur', 2, NULL),
(28, 'Sport collectifs', 3, NULL),
(29, 'Sport individuels', 3, NULL),
(30, 'Sport pour tous', 3, NULL),
(31, 'Comment venir', 4, NULL),
(32, 'Nos salles', 4, NULL),
(33, 'Formations', 5, NULL),
(34, 'Nos partenaires', 6, NULL),
(35, 'Coaching de groupe', 33, NULL),
(36, 'Coaching individuel', 33, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_admin1` FOREIGN KEY (`admin_idadmin`) REFERENCES `admin` (`idadmin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_article_rubrique1` FOREIGN KEY (`rubrique_id`) REFERENCES `rubrique` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
