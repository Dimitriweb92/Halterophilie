-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 24 août 2018 à 08:58
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
-- Base de données :  `bddhalterophilie`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `thelogin` varchar(45) NOT NULL,
  `thename` varchar(45) NOT NULL,
  `thepwd` varchar(64) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `idarticle` int(11) NOT NULL,
  `thetitle` varchar(200) DEFAULT NULL,
  `thetext` text,
  `thedate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(200) DEFAULT NULL,
  `admin_idadmin` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idarticle`),
  KEY `fk_article_admin_idx` (`admin_idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rubrique`
--

DROP TABLE IF EXISTS `rubrique`;
CREATE TABLE IF NOT EXISTS `rubrique` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(200) NOT NULL,
  `niveaux` int(10) UNSIGNED NOT NULL,
  `ordre` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rubrique`
--

INSERT INTO `rubrique` (`id`, `titre`, `niveaux`, `ordre`) VALUES
(1, 'Haltérophilie', 0, NULL),
(2, 'effets', 0, NULL),
(3, 'transfersalité', 0, NULL),
(4, 'conctacts', 0, NULL),
(5, 'service', 0, NULL),
(6, 'partenariats', 0, NULL),
(7, 'entrainement', 1, NULL),
(8, 'Definition', 1, NULL),
(9, 'Cours', 1, NULL),
(10, 'Compétition', 1, NULL),
(11, 'Explosivité', 2, NULL),
(12, 'Souplesse', 2, NULL),
(13, 'Posture', 2, NULL),
(14, 'Muscle', 2, NULL),
(15, 'Croissance', 2, NULL),
(16, 'Os', 2, NULL),
(17, 'Coeur', 2, NULL),
(18, 'Sport collectifs', 3, NULL),
(19, 'Sport individuels', 3, NULL),
(20, 'Sport collectifs', 3, NULL),
(21, 'Sport individuels', 3, NULL),
(22, 'sport pour tous', 3, NULL),
(23, 'Comment venir', 4, NULL),
(24, 'Nos salles', 4, NULL),
(25, 'formations', 5, NULL),
(26, 'Coaching', 5, NULL),
(27, 'Coaching de groupe', 25, NULL),
(28, 'coaching personnalisé', 25, NULL),
(31, 'Nos partenaire', 6, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `rubrique_has_article`
--

DROP TABLE IF EXISTS `rubrique_has_article`;
CREATE TABLE IF NOT EXISTS `rubrique_has_article` (
  `rubrique_rubriqueid` int(10) UNSIGNED NOT NULL,
  `article_idarticle` int(11) NOT NULL,
  PRIMARY KEY (`rubrique_rubriqueid`,`article_idarticle`),
  KEY `fk_rubrique_has_article_article1_idx` (`article_idarticle`),
  KEY `fk_rubrique_has_article_rubrique1_idx` (`rubrique_rubriqueid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_admin` FOREIGN KEY (`admin_idadmin`) REFERENCES `admin` (`idadmin`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
