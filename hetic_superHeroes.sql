-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 10 avr. 2018 à 16:33
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hetic_superHeroes_test`
--

-- --------------------------------------------------------

--
-- Structure de la table `hands`
--

DROP TABLE IF EXISTS `hands`;
CREATE TABLE IF NOT EXISTS `hands` (
  `hand_id` int(11) NOT NULL AUTO_INCREMENT,
  `league_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hero1_id` int(11) NOT NULL,
  `hero2_id` int(11) NOT NULL,
  `hero3_id` int(11) NOT NULL,
  `hero4_id` int(11) NOT NULL,
  `hero5_id` int(11) NOT NULL,
  `hero1_order` int(11) NOT NULL,
  `hero2_order` int(11) NOT NULL,
  `hero3_order` int(11) NOT NULL,
  `hero4_order` int(11) NOT NULL,
  `hero5_order` int(11) NOT NULL,
  PRIMARY KEY (`hand_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `leagues`
--

DROP TABLE IF EXISTS `leagues`;
CREATE TABLE IF NOT EXISTS `leagues` (
  `league_id` int(11) NOT NULL AUTO_INCREMENT,
  `league_name` varchar(50) NOT NULL,
  `league_link` varchar(255) NOT NULL,
  PRIMARY KEY (`league_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `league_users`
--

DROP TABLE IF EXISTS `league_users`;
CREATE TABLE IF NOT EXISTS `league_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `league_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `matches`
--

DROP TABLE IF EXISTS `matches`;
CREATE TABLE IF NOT EXISTS `matches` (
  `match_id` int(11) NOT NULL AUTO_INCREMENT,
  `league_id` int(11) NOT NULL,
  `user1_id` int(11) NOT NULL,
  `user2_id` int(11) NOT NULL,
  `winner_id` int(11) NOT NULL,
  `looser_id` int(11) NOT NULL,
  `score` varchar(10) NOT NULL,
  PRIMARY KEY (`match_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_mail` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_mail`) VALUES
(6, 'Yolo', '$2y$10$a72ctjXdNZWXJ.FL6N/xP.TjwDSpVAwznWRM5TdemzlSjQF3oF.Sy', 'yolo@y.fr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
