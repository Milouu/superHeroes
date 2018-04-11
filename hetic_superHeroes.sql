-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mer 11 Avril 2018 à 14:49
-- Version du serveur :  5.6.35
-- Version de PHP :  7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hetic_superheroes`
--

-- --------------------------------------------------------

--
-- Structure de la table `hands`
--

CREATE TABLE `hands` (
  `hand_id` int(11) NOT NULL,
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
  `hero5_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `leagues`
--

CREATE TABLE `leagues` (
  `league_id` int(11) NOT NULL,
  `league_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `leagues`
--

INSERT INTO `leagues` (`league_id`, `league_name`) VALUES
(1, 'New league'),
(2, 'Test again'),
(3, 'Ligue 1 Conforama'),
(4, 'dominos L2'),
(5, 'lelele'),
(6, 'test');

-- --------------------------------------------------------

--
-- Structure de la table `league_users`
--

CREATE TABLE `league_users` (
  `id` int(11) NOT NULL,
  `league_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `league_users`
--

INSERT INTO `league_users` (`id`, `league_id`, `user_id`) VALUES
(1, 1, 7),
(2, 2, 7),
(3, 3, 8),
(4, 4, 8),
(5, 5, 8),
(6, 6, 8);

-- --------------------------------------------------------

--
-- Structure de la table `matches`
--

CREATE TABLE `matches` (
  `match_id` int(11) NOT NULL,
  `league_id` int(11) NOT NULL,
  `user1_id` int(11) NOT NULL,
  `user2_id` int(11) NOT NULL,
  `winner_id` int(11) NOT NULL,
  `looser_id` int(11) NOT NULL,
  `score` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_mail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_mail`) VALUES
(7, 'Yolo', '$2y$10$J6I46ryD7Po8vtICtQiim.Yb9TVhPZRurgJnq2NFyaKKw3C2tHuC2', 'yolo@yolo.fr'),
(6, 'Yolo', '$2y$10$a72ctjXdNZWXJ.FL6N/xP.TjwDSpVAwznWRM5TdemzlSjQF3oF.Sy', 'yolo@y.fr'),
(8, 'test', '$2y$10$Orai/C2VY/BQxqnZ.5ErRuO7R7c3uyZqUINwWpv8lx4bN5eSGlDny', 'test@gmail.com');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `hands`
--
ALTER TABLE `hands`
  ADD PRIMARY KEY (`hand_id`);

--
-- Index pour la table `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`league_id`);

--
-- Index pour la table `league_users`
--
ALTER TABLE `league_users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`match_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `hands`
--
ALTER TABLE `hands`
  MODIFY `hand_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `leagues`
--
ALTER TABLE `leagues`
  MODIFY `league_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `league_users`
--
ALTER TABLE `league_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `matches`
--
ALTER TABLE `matches`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
