-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Jeu 12 Avril 2018 à 18:51
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
  `hero1_order` int(11) NOT NULL DEFAULT '0',
  `hero2_order` int(11) NOT NULL DEFAULT '0',
  `hero3_order` int(11) NOT NULL DEFAULT '0',
  `hero4_order` int(11) NOT NULL DEFAULT '0',
  `hero5_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `hands`
--

INSERT INTO `hands` (`hand_id`, `league_id`, `user_id`, `hero1_id`, `hero2_id`, `hero3_id`, `hero4_id`, `hero5_id`, `hero1_order`, `hero2_order`, `hero3_order`, `hero4_order`, `hero5_order`) VALUES
(1, 11, 10, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5),
(2, 11, 8, 201, 202, 203, 204, 421, 8, 201, 202, 203, 204),
(3, 11, 11, 421, 422, 423, 424, 425, 421, 422, 423, 424, 425),
(4, 11, 12, 452, 459, 454, 455, 456, 452, 459, 454, 455, 456),
(5, 11, 13, 11, 12, 13, 14, 15, 11, 12, 13, 14, 15),
(6, 11, 14, 172, 174, 176, 178, 180, 172, 174, 176, 178, 180),
(7, 11, 15, 350, 351, 352, 353, 355, 350, 351, 352, 353, 355),
(8, 11, 9, 495, 496, 497, 498, 499, 495, 496, 497, 498, 499);

-- --------------------------------------------------------

--
-- Structure de la table `heroes`
--

CREATE TABLE `heroes` (
  `hero_id` smallint(6) NOT NULL,
  `hero_name` varchar(64) NOT NULL,
  `average` tinyint(4) NOT NULL,
  `intelligence` tinyint(4) NOT NULL,
  `strength` tinyint(4) NOT NULL,
  `speed` tinyint(4) NOT NULL,
  `durability` tinyint(4) NOT NULL,
  `power` tinyint(4) NOT NULL,
  `combat` tinyint(4) NOT NULL,
  `image` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `heroes`
--

INSERT INTO `heroes` (`hero_id`, `hero_name`, `average`, `intelligence`, `strength`, `speed`, `durability`, `power`, `combat`, `image`) VALUES
(1, 'A-Bomb', 54, 38, 100, 17, 80, 24, 64, 'http://www.superherodb.com/pictures/portraits/a-bomb.jpg'),
(2, 'Abe Sapien', 67, 88, 28, 35, 65, 100, 85, 'http://www.superherodb.com/pictures/portraits/abe-sapien.jpg'),
(3, 'Abin Sur', 70, 50, 90, 53, 64, 99, 65, 'http://www.superherodb.com/pictures/portraits/abin-sur.jpg'),
(4, 'Abomination', 74, 63, 80, 53, 90, 62, 95, 'http://www.superherodb.com/pictures/portraits/abomination.jpg'),
(5, 'Abraxas', 82, 88, 63, 83, 100, 100, 55, 'http://www.superherodb.com/pictures/portraits/abraxas.jpg'),
(6, 'Absorbing Man', 68, 38, 80, 25, 100, 98, 64, 'http://www.superherodb.com/pictures/portraits/absorbing-man.jpg'),
(7, 'Adam Monroe', 58, 63, 10, 12, 100, 100, 64, 'http://www.superherodb.com/pictures/portraits/adam-monroe.jpg'),
(8, 'Adam Strange', 40, 69, 10, 33, 40, 37, 50, 'http://www.superherodb.com/pictures/portraits/adam-strange.jpg'),
(11, 'Agent Zero', 65, 75, 28, 38, 80, 72, 95, 'http://www.superherodb.com/pictures/portraits/agent-zero.jpg'),
(12, 'Air-Walker', 77, 50, 85, 100, 85, 100, 40, 'http://www.superherodb.com/pictures/portraits/air-walker.jpg'),
(13, 'Ajax', 51, 56, 48, 35, 80, 34, 55, 'http://www.superherodb.com/pictures/portraits/ajax.jpg'),
(14, 'Alan Scott', 65, 63, 80, 23, 90, 100, 32, 'http://www.superherodb.com/pictures/portraits/alan-scott.jpg'),
(15, 'Alex Mercer', 69, 50, 80, 42, 90, 100, 50, 'http://www.superherodb.com/pictures/portraits/alex-mercer.jpg'),
(18, 'Alien', 55, 50, 28, 42, 90, 57, 60, 'http://www.superherodb.com/pictures/portraits/alien.jpg'),
(20, 'Amazo', 91, 63, 100, 83, 100, 100, 100, 'http://www.superherodb.com/pictures/portraits/amazo.jpg'),
(23, 'Angel', 71, 75, 30, 58, 90, 100, 75, 'http://www.superherodb.com/pictures/portraits/angel-liam.jpg'),
(24, 'Angel', 43, 63, 13, 46, 64, 28, 42, 'http://www.superherodb.com/pictures/portraits/angel.jpg'),
(26, 'Angel Salvadore', 37, 38, 10, 28, 28, 56, 60, 'http://www.superherodb.com/pictures/portraits/angel-salvadore.jpg'),
(28, 'Animal Man', 65, 56, 48, 47, 85, 73, 80, 'http://www.superherodb.com/pictures/portraits/animal-man.jpg'),
(29, 'Annihilus', 64, 75, 80, 47, 56, 59, 64, 'http://www.superherodb.com/pictures/portraits/annihilus.jpg'),
(30, 'Ant-Man', 39, 100, 18, 23, 28, 32, 32, 'http://www.superherodb.com/pictures/portraits/ant-man.jpg'),
(31, 'Ant-Man II', 39, 75, 18, 17, 40, 53, 30, 'http://www.superherodb.com/pictures/portraits/ant-man-2.jpg'),
(32, 'Anti-Monitor', 88, 88, 100, 50, 100, 100, 90, 'http://www.superherodb.com/pictures/portraits/anti-monitor.jpg'),
(34, 'Anti-Venom', 78, 75, 60, 65, 90, 96, 84, 'http://www.superherodb.com/pictures/portraits/anti-venom.jpg'),
(35, 'Apocalypse', 82, 100, 100, 33, 100, 100, 60, 'http://www.superherodb.com/pictures/portraits/apocalypse.jpg'),
(37, 'Aqualad', 62, 63, 44, 42, 75, 89, 60, 'http://www.superherodb.com/pictures/portraits/aqualad.jpg'),
(38, 'Aquaman', 84, 81, 85, 79, 80, 100, 80, 'http://www.superherodb.com/pictures/portraits/aquaman.jpg'),
(39, 'Arachne', 60, 50, 48, 50, 70, 71, 70, 'http://www.superherodb.com/pictures/portraits/arachne.jpg'),
(40, 'Archangel', 46, 63, 13, 58, 64, 35, 42, 'http://www.superherodb.com/pictures/portraits/archangel.jpg'),
(41, 'Arclight', 48, 38, 63, 23, 42, 52, 70, 'http://www.superherodb.com/pictures/portraits/arclight.jpg'),
(42, 'Ardina', 78, 63, 100, 100, 80, 100, 25, 'http://www.superherodb.com/pictures/portraits/ardina.jpg'),
(43, 'Ares', 76, 75, 82, 35, 80, 84, 101, 'http://www.superherodb.com/pictures/portraits/ares.jpg'),
(44, 'Ariel', 35, 50, 10, 12, 14, 94, 28, 'http://www.superherodb.com/pictures/portraits/ariel.jpg'),
(45, 'Armor', 52, 50, 63, 12, 80, 55, 54, 'http://www.superherodb.com/pictures/portraits/armor.jpg'),
(48, 'Atlas', 69, 63, 80, 25, 100, 98, 50, 'http://www.superherodb.com/pictures/portraits/atlas-josten.jpg'),
(49, 'Atlas', 69, 63, 100, 42, 100, 27, 80, 'http://www.superherodb.com/pictures/portraits/atlas.jpg'),
(53, 'Atom II', 46, 88, 10, 33, 45, 40, 60, 'http://www.superherodb.com/pictures/portraits/atom-2.jpg'),
(56, 'Aurora', 60, 63, 10, 96, 60, 74, 56, 'http://www.superherodb.com/pictures/portraits/aurora.jpg'),
(57, 'Azazel', 64, 50, 11, 47, 95, 100, 80, 'http://www.superherodb.com/pictures/portraits/azazel.jpg'),
(58, 'Azrael', 39, 63, 18, 17, 20, 35, 80, 'http://www.superherodb.com/pictures/portraits/azrael.jpg'),
(60, 'Bane', 59, 88, 38, 23, 56, 51, 95, 'http://www.superherodb.com/pictures/portraits/bane.jpg'),
(61, 'Banshee', 49, 50, 10, 58, 40, 63, 70, 'http://www.superherodb.com/pictures/portraits/banshee.jpg'),
(62, 'Bantam', 39, 25, 53, 23, 54, 21, 56, 'http://www.superherodb.com/pictures/portraits/bentam.jpg'),
(63, 'Batgirl', 49, 88, 11, 33, 40, 34, 90, 'http://www.superherodb.com/pictures/portraits/batgirl-2.jpg'),
(66, 'Batgirl IV', 52, 69, 12, 27, 56, 46, 100, 'http://www.superherodb.com/pictures/portraits/batgirl-4.jpg'),
(68, 'Batgirl VI', 40, 75, 10, 23, 28, 22, 80, 'http://www.superherodb.com/pictures/portraits/batgirl-6.jpg'),
(69, 'Batman', 60, 81, 40, 29, 55, 63, 90, 'http://www.superherodb.com/pictures/portraits/batman-2.jpg'),
(70, 'Batman', 58, 100, 26, 27, 50, 47, 100, 'http://www.superherodb.com/pictures/portraits/batman.jpg'),
(71, 'Batman II', 49, 88, 11, 33, 28, 36, 100, 'http://www.superherodb.com/pictures/portraits/batman-grayson.jpg'),
(72, 'Battlestar', 56, 50, 53, 35, 74, 48, 74, 'http://www.superherodb.com/pictures/portraits/battlestar.jpg'),
(73, 'Batwoman V', 42, 81, 8, 29, 25, 27, 80, 'http://www.superherodb.com/pictures/portraits/batwoman.jpg'),
(75, 'Beast', 61, 94, 48, 38, 60, 43, 85, 'http://www.superherodb.com/pictures/portraits/beast.jpg'),
(76, 'Beast Boy', 53, 50, 28, 50, 70, 79, 40, 'http://www.superherodb.com/pictures/portraits/beast-boy.jpg'),
(79, 'Beta Ray Bill', 76, 63, 80, 35, 95, 100, 84, 'http://www.superherodb.com/pictures/portraits/beta-ray-bill.jpg'),
(80, 'Beyonder', 97, 100, 100, 100, 100, 100, 84, 'http://www.superherodb.com/pictures/portraits/beyonder.jpg'),
(81, 'Big Barda', 95, 88, 100, 79, 100, 100, 100, 'http://www.superherodb.com/pictures/portraits/big-barda.jpg'),
(83, 'Big Man', 38, 75, 12, 23, 28, 19, 70, 'http://www.superherodb.com/pictures/portraits/big-man.jpg'),
(84, 'Bill Harken', 43, 63, 36, 33, 60, 27, 40, 'http://www.superherodb.com/pictures/portraits/bill-harken.jpg'),
(87, 'Bionic Woman', 38, 56, 37, 33, 40, 20, 40, 'http://www.superherodb.com/pictures/portraits/bionic-woman.jpg'),
(92, 'Bishop', 57, 63, 14, 23, 75, 100, 65, 'http://www.superherodb.com/pictures/portraits/bishop.jpg'),
(93, 'Bizarro', 86, 38, 95, 100, 100, 100, 85, 'http://www.superherodb.com/pictures/portraits/bizarro.jpg'),
(95, 'Black Adam', 89, 88, 100, 92, 100, 100, 56, 'http://www.superherodb.com/pictures/portraits/black-adam.jpg'),
(96, 'Black Bolt', 80, 75, 67, 100, 84, 100, 56, 'http://www.superherodb.com/pictures/portraits/black-bolt.jpg'),
(97, 'Black Canary', 43, 63, 8, 33, 20, 52, 80, 'http://www.superherodb.com/pictures/portraits/black-canary-2.jpg'),
(98, 'Black Canary', 41, 63, 8, 33, 15, 45, 80, 'http://www.superherodb.com/pictures/portraits/black-canary-1.jpg'),
(99, 'Black Cat', 38, 75, 16, 33, 10, 23, 70, 'http://www.superherodb.com/pictures/portraits/black-cat.jpg'),
(100, 'Black Flash', 61, 44, 10, 100, 80, 100, 30, 'http://www.superherodb.com/pictures/portraits/black-flash.jpg'),
(102, 'Black Knight III', 44, 63, 10, 8, 70, 43, 70, 'http://www.superherodb.com/pictures/portraits/black-knight-3.jpg'),
(103, 'Black Lightning', 48, 50, 11, 53, 28, 70, 75, 'http://www.superherodb.com/pictures/portraits/black-lightning.jpg'),
(104, 'Black Mamba', 53, 75, 10, 35, 42, 88, 65, 'http://www.superherodb.com/pictures/portraits/black-mamba.jpg'),
(105, 'Black Manta', 62, 75, 28, 50, 60, 76, 85, 'http://www.superherodb.com/pictures/portraits/black-manta.jpg'),
(106, 'Black Panther', 56, 88, 16, 30, 60, 41, 100, 'http://www.superherodb.com/pictures/portraits/black-panther.jpg'),
(107, 'Black Widow', 48, 75, 13, 33, 30, 36, 100, 'http://www.superherodb.com/pictures/portraits/black-widow-1.jpg'),
(109, 'Blackout', 55, 63, 32, 45, 80, 45, 65, 'http://www.superherodb.com/pictures/portraits/blackout.jpg'),
(111, 'Blackwulf', 35, 50, 28, 8, 30, 69, 25, 'http://www.superherodb.com/pictures/portraits/blackwulf.jpg'),
(112, 'Blade', 52, 63, 28, 38, 50, 40, 90, 'http://www.superherodb.com/pictures/portraits/blade.jpg'),
(114, 'Bling!', 44, 69, 14, 12, 90, 52, 28, 'http://www.superherodb.com/pictures/portraits/bling!.jpg'),
(115, 'Blink', 41, 50, 8, 20, 28, 77, 64, 'http://www.superherodb.com/pictures/portraits/blink.jpg'),
(118, 'Blizzard II', 37, 38, 10, 27, 42, 47, 56, 'http://www.superherodb.com/pictures/portraits/blizzard-2.jpg'),
(119, 'Blob', 52, 10, 83, 23, 95, 28, 72, 'http://www.superherodb.com/pictures/portraits/blob.jpg'),
(120, 'Bloodaxe', 73, 63, 80, 33, 80, 100, 84, 'http://www.superherodb.com/pictures/portraits/bloodaxe.jpg'),
(121, 'Bloodhawk', 56, 50, 10, 50, 80, 80, 64, 'http://www.superherodb.com/pictures/portraits/bloodhawk.jpg'),
(126, 'Blue Beetle III', 59, 50, 34, 58, 80, 100, 30, 'http://www.superherodb.com/pictures/portraits/blue-beetle-3.jpg'),
(127, 'Boba Fett', 48, 63, 10, 38, 36, 68, 70, 'http://www.superherodb.com/pictures/portraits/boba-fett.jpg'),
(130, 'Boom-Boom', 37, 38, 10, 12, 42, 57, 64, 'http://www.superherodb.com/pictures/portraits/boom-boom.jpg'),
(135, 'Box IV', 41, 50, 75, 23, 28, 11, 56, 'http://www.superherodb.com/pictures/portraits/box-4.jpg'),
(136, 'Brainiac', 81, 100, 95, 63, 90, 60, 75, 'http://www.superherodb.com/pictures/portraits/brainiac.jpg'),
(137, 'Brainiac 5', 42, 100, 10, 23, 28, 60, 32, 'http://www.superherodb.com/pictures/portraits/brainiac-5.jpg'),
(139, 'Brundlefly', 35, 69, 32, 25, 40, 27, 15, 'http://www.superherodb.com/pictures/portraits/brundlefly.jpg'),
(140, 'Buffy', 52, 63, 28, 42, 70, 48, 60, 'http://www.superherodb.com/pictures/portraits/buffy.jpg'),
(141, 'Bullseye', 41, 50, 11, 25, 70, 20, 70, 'http://www.superherodb.com/pictures/portraits/bullseye.jpg'),
(142, 'Bumblebee', 35, 63, 28, 25, 10, 47, 35, 'http://www.superherodb.com/pictures/portraits/bumblebee-dc.jpg'),
(145, 'Cable', 66, 88, 48, 23, 56, 100, 80, 'http://www.superherodb.com/pictures/portraits/cable.jpg'),
(146, 'Callisto', 53, 63, 53, 23, 42, 52, 85, 'http://www.superherodb.com/pictures/portraits/callisto.jpg'),
(147, 'Cameron Hicks', 39, 50, 10, 23, 28, 51, 70, 'http://www.superherodb.com/pictures/portraits/cameron-hicks.jpg'),
(148, 'Cannonball', 66, 50, 28, 67, 99, 94, 56, 'http://www.superherodb.com/pictures/portraits/cannonball.jpg'),
(149, 'Captain America', 57, 69, 19, 38, 55, 60, 100, 'http://www.superherodb.com/pictures/portraits/captain-america.jpg'),
(150, 'Captain Atom', 88, 81, 93, 83, 90, 100, 80, 'http://www.superherodb.com/pictures/portraits/captain-atom.jpg'),
(151, 'Captain Britain', 62, 75, 77, 50, 60, 31, 80, 'http://www.superherodb.com/pictures/portraits/captain-britain.jpg'),
(156, 'Captain Marvel', 91, 88, 100, 88, 95, 100, 75, 'http://www.superherodb.com/pictures/portraits/captain-marvel.jpg'),
(157, 'Captain Marvel', 88, 84, 88, 71, 95, 100, 90, 'http://www.superherodb.com/pictures/portraits/captain-marvel-danvers.jpg'),
(158, 'Captain Marvel II', 61, 75, 81, 27, 90, 34, 56, 'http://www.superherodb.com/pictures/portraits/captain-marvel-2.jpg'),
(160, 'Captain Planet', 76, 50, 88, 75, 80, 100, 60, 'http://www.superherodb.com/pictures/portraits/captain-planet.jpg'),
(162, 'Carnage', 76, 63, 63, 70, 84, 88, 90, 'http://www.superherodb.com/pictures/portraits/carnage.jpg'),
(165, 'Catwoman', 42, 69, 11, 33, 28, 27, 85, 'http://www.superherodb.com/pictures/portraits/catwoman.jpg'),
(167, 'Century', 81, 88, 80, 53, 64, 100, 100, 'http://www.superherodb.com/pictures/portraits/century.jpg'),
(169, 'Chamber', 47, 50, 10, 20, 80, 57, 64, 'http://www.superherodb.com/pictures/portraits/chamber.jpg'),
(171, 'Changeling', 44, 63, 10, 23, 42, 64, 64, 'http://www.superherodb.com/pictures/portraits/chageling.jpg'),
(172, 'Cheetah', 35, 38, 8, 42, 20, 32, 70, 'http://www.superherodb.com/pictures/portraits/cheetah-1.jpg'),
(174, 'Cheetah III', 88, 88, 100, 88, 80, 78, 95, 'http://www.superherodb.com/pictures/portraits/cheetah-3.jpg'),
(176, 'Chuck Norris', 62, 50, 80, 47, 56, 42, 99, 'http://www.superherodb.com/pictures/portraits/chuck-norris.jpg'),
(177, 'Citizen Steel', 60, 50, 95, 33, 100, 23, 60, 'http://www.superherodb.com/pictures/portraits/citizen-steel.jpg'),
(178, 'Claire Bennet', 46, 38, 9, 12, 100, 90, 28, 'http://www.superherodb.com/pictures/portraits/clair-bennet.jpg'),
(180, 'Cloak', 57, 63, 10, 47, 64, 100, 56, 'http://www.superherodb.com/pictures/portraits/cloak.jpg'),
(185, 'Colossus', 67, 63, 83, 33, 100, 45, 80, 'http://www.superherodb.com/pictures/portraits/colossus.jpg'),
(186, 'Copycat', 38, 56, 10, 21, 25, 54, 60, 'http://www.superherodb.com/pictures/portraits/copycat.jpg'),
(191, 'Crystal', 37, 63, 16, 12, 14, 61, 56, 'http://www.superherodb.com/pictures/portraits/crystal.jpg'),
(194, 'Cyborg', 65, 75, 53, 42, 85, 71, 64, 'http://www.superherodb.com/pictures/portraits/cyborg.jpg'),
(195, 'Cyborg Superman', 90, 75, 93, 92, 100, 100, 80, 'http://www.superherodb.com/pictures/portraits/cyborg-superman.jpg'),
(196, 'Cyclops', 51, 75, 10, 23, 42, 76, 80, 'http://www.superherodb.com/pictures/portraits/cyclops.jpg'),
(198, 'Dagger', 45, 63, 10, 35, 42, 52, 70, 'http://www.superherodb.com/pictures/portraits/dagger.jpg'),
(201, 'Daredevil', 52, 75, 13, 25, 35, 61, 100, 'http://www.superherodb.com/pictures/portraits/daredevil.jpg'),
(202, 'Darkhawk', 54, 50, 32, 33, 70, 74, 64, 'http://www.superherodb.com/pictures/portraits/darkhawk.jpg'),
(203, 'Darkman', 40, 75, 14, 23, 85, 12, 28, 'http://www.superherodb.com/pictures/portraits/darkman.jpg'),
(204, 'Darkseid', 94, 88, 100, 83, 100, 100, 95, 'http://www.superherodb.com/pictures/portraits/darkseid.jpg'),
(206, 'Darkstar', 44, 38, 8, 35, 42, 79, 64, 'http://www.superherodb.com/pictures/portraits/darkstar.jpg'),
(207, 'Darth Maul', 64, 56, 48, 50, 30, 100, 100, 'http://www.superherodb.com/pictures/portraits/darth-maul.jpg'),
(208, 'Darth Vader', 64, 69, 48, 33, 35, 100, 100, 'http://www.superherodb.com/pictures/portraits/darth-vader.jpg'),
(209, 'Dash', 40, 25, 12, 92, 60, 20, 30, 'http://www.superherodb.com/pictures/portraits/dash.jpg'),
(210, 'Data', 50, 100, 32, 21, 40, 56, 50, 'http://www.superherodb.com/pictures/portraits/data.jpg'),
(211, 'Dazzler', 54, 63, 10, 33, 60, 100, 55, 'http://www.superherodb.com/pictures/portraits/dazzler.jpg'),
(212, 'Deadman', 56, 50, 10, 33, 100, 100, 42, 'http://www.superherodb.com/pictures/portraits/deadman.jpg'),
(213, 'Deadpool', 75, 69, 32, 50, 100, 100, 100, 'http://www.superherodb.com/pictures/portraits/deadpool.jpg'),
(214, 'Deadshot', 41, 50, 10, 23, 28, 55, 80, 'http://www.superherodb.com/pictures/portraits/deadshot.jpg'),
(215, 'Deathlok', 50, 69, 32, 30, 70, 40, 60, 'http://www.superherodb.com/pictures/portraits/deathlok.jpg'),
(216, 'Deathstroke', 63, 75, 30, 35, 100, 47, 90, 'http://www.superherodb.com/pictures/portraits/deathstroke.jpg'),
(217, 'Demogoblin', 50, 50, 48, 42, 35, 67, 60, 'http://www.superherodb.com/pictures/portraits/demogoblin.jpg'),
(218, 'Destroyer', 76, 50, 95, 58, 98, 85, 70, 'http://www.superherodb.com/pictures/portraits/destroyer.jpg'),
(219, 'Diamondback', 36, 44, 16, 23, 28, 45, 60, 'http://www.superherodb.com/pictures/portraits/willis-stryker.jpg'),
(220, 'DL Hawkins', 39, 50, 12, 12, 56, 48, 56, 'http://www.superherodb.com/pictures/portraits/dl-hawkins.jpg'),
(221, 'Doc Samson', 62, 75, 80, 33, 80, 36, 70, 'http://www.superherodb.com/pictures/portraits/docsamson.jpg'),
(222, 'Doctor Doom', 73, 100, 32, 20, 100, 100, 84, 'http://www.superherodb.com/pictures/portraits/doctor-doom.jpg'),
(224, 'Doctor Fate', 59, 81, 16, 25, 80, 100, 50, 'http://www.superherodb.com/pictures/portraits/doctor-fate.jpg'),
(225, 'Doctor Octopus', 56, 94, 48, 33, 40, 53, 65, 'http://www.superherodb.com/pictures/portraits/doctor-octopus.jpg'),
(226, 'Doctor Strange', 61, 100, 10, 12, 84, 100, 60, 'http://www.superherodb.com/pictures/portraits/doctor-strange.jpg'),
(227, 'Domino', 42, 63, 10, 27, 28, 49, 74, 'http://www.superherodb.com/pictures/portraits/domino.jpg'),
(228, 'Donatello', 57, 88, 14, 46, 60, 58, 75, 'http://www.superherodb.com/pictures/portraits/donatello.jpg'),
(230, 'Doomsday', 89, 75, 100, 67, 100, 100, 90, 'http://www.superherodb.com/pictures/portraits/doomsday.jpg'),
(231, 'Doppelganger', 63, 8, 63, 60, 95, 69, 84, 'http://www.superherodb.com/pictures/portraits/doppelganger.jpg'),
(232, 'Dormammu', 91, 88, 95, 83, 100, 100, 80, 'http://www.superherodb.com/pictures/portraits/dormammu.jpg'),
(233, 'Dr Manhattan', 79, 88, 100, 42, 100, 100, 42, 'http://www.superherodb.com/pictures/portraits/dr-manhattan.jpg'),
(234, 'Drax the Destroyer', 60, 56, 80, 25, 85, 46, 65, 'http://www.superherodb.com/pictures/portraits/darx-the-destroyer.jpg'),
(235, 'Ego', 75, 88, 80, 83, 99, 71, 28, 'http://www.superherodb.com/pictures/portraits/ego.jpg'),
(236, 'Elastigirl', 58, 63, 32, 33, 95, 52, 70, 'http://www.superherodb.com/pictures/portraits/elastigirl.jpg'),
(237, 'Electro', 53, 69, 10, 50, 56, 67, 64, 'http://www.superherodb.com/pictures/portraits/electro.jpg'),
(238, 'Elektra', 49, 63, 11, 30, 28, 59, 100, 'http://www.superherodb.com/pictures/portraits/elektra.jpg'),
(239, 'Elle Bishop', 36, 50, 8, 12, 42, 63, 42, 'http://www.superherodb.com/pictures/portraits/elle-bishop.jpg'),
(240, 'Elongated Man', 49, 75, 10, 33, 90, 44, 40, 'http://www.superherodb.com/pictures/portraits/elongated-man.jpg'),
(241, 'Emma Frost', 68, 75, 63, 35, 90, 100, 42, 'http://www.superherodb.com/pictures/portraits/emma-frost.jpg'),
(242, 'Enchantress', 50, 63, 14, 25, 60, 100, 40, 'http://www.superherodb.com/pictures/portraits/enchantress.jpg'),
(245, 'Ethan Hunt', 44, 75, 11, 29, 30, 26, 95, 'http://www.superherodb.com/pictures/portraits/ethan-hunt.jpg'),
(246, 'Etrigan', 67, 50, 85, 17, 100, 100, 50, 'http://www.superherodb.com/pictures/portraits/etrigan.jpg'),
(247, 'Evil Deadpool', 75, 69, 32, 50, 100, 100, 100, 'http://www.superherodb.com/pictures/portraits/evil-deadpool.jpg'),
(248, 'Evilhawk', 56, 50, 32, 33, 70, 85, 64, 'http://www.superherodb.com/pictures/portraits/evilhawk.jpg'),
(249, 'Exodus', 62, 63, 81, 28, 28, 100, 70, 'http://www.superherodb.com/pictures/portraits/exodus.jpg'),
(251, 'Falcon', 36, 38, 13, 50, 28, 22, 64, 'http://www.superherodb.com/pictures/portraits/falcon.jpg'),
(252, 'Fallen One II', 85, 88, 85, 83, 100, 100, 56, 'http://www.superherodb.com/pictures/portraits/fallen-one-2.jpg'),
(253, 'Faora', 91, 88, 95, 75, 100, 98, 90, 'http://www.superherodb.com/pictures/portraits/faora.jpg'),
(254, 'Feral', 39, 38, 28, 45, 28, 27, 70, 'http://www.superherodb.com/pictures/portraits/feral.jpg'),
(256, 'Fin Fang Foom', 67, 50, 81, 23, 100, 75, 70, 'http://www.superherodb.com/pictures/portraits/fin-fang-foom.jpg'),
(257, 'Firebird', 40, 38, 8, 40, 14, 100, 42, 'http://www.superherodb.com/pictures/portraits/firebird.jpg'),
(258, 'Firelord', 58, 38, 63, 75, 90, 52, 28, 'http://www.superherodb.com/pictures/portraits/firelord.jpg'),
(259, 'Firestar', 45, 50, 8, 54, 55, 71, 32, 'http://www.superherodb.com/pictures/portraits/firestar.jpg'),
(260, 'Firestorm', 60, 50, 53, 58, 56, 100, 42, 'http://www.superherodb.com/pictures/portraits/firestorm.jpg'),
(261, 'Firestorm', 66, 38, 80, 58, 80, 100, 40, 'http://www.superherodb.com/pictures/portraits/firestorm-2.jpg'),
(263, 'Flash', 54, 63, 10, 100, 50, 68, 32, 'http://www.superherodb.com/pictures/portraits/flash-1.jpg'),
(265, 'Flash II', 76, 88, 48, 100, 60, 100, 60, 'http://www.superherodb.com/pictures/portraits/flash-2.jpg'),
(266, 'Flash III', 61, 63, 10, 100, 60, 100, 32, 'http://www.superherodb.com/pictures/portraits/flash-3.jpg'),
(267, 'Flash IV', 59, 63, 10, 100, 32, 100, 48, 'http://www.superherodb.com/pictures/portraits/flash-4.jpg'),
(269, 'Franklin Richards', 67, 63, 80, 50, 60, 100, 50, 'http://www.superherodb.com/pictures/portraits/franklin-richards.jpg'),
(271, 'Frenzy', 57, 63, 53, 35, 100, 38, 52, 'http://www.superherodb.com/pictures/portraits/frenzy.jpg'),
(273, 'Galactus', 89, 100, 100, 83, 100, 100, 50, 'http://www.superherodb.com/pictures/portraits/galactus.jpg'),
(274, 'Gambit', 44, 63, 10, 23, 28, 55, 84, 'http://www.superherodb.com/pictures/portraits/gambit.jpg'),
(275, 'Gamora', 73, 75, 85, 42, 85, 53, 100, 'http://www.superherodb.com/pictures/portraits/gamora.jpg'),
(278, 'General Zod', 98, 94, 100, 96, 100, 100, 95, 'http://www.superherodb.com/pictures/portraits/general-zod.jpg'),
(280, 'Ghost Rider', 65, 50, 55, 25, 100, 100, 60, 'http://www.superherodb.com/pictures/portraits/ghost-rider.jpg'),
(284, 'Giganta', 59, 81, 89, 23, 85, 32, 42, 'http://www.superherodb.com/pictures/portraits/giganta.jpg'),
(285, 'Gladiator', 83, 50, 100, 100, 100, 77, 70, 'http://www.superherodb.com/pictures/portraits/gladiator.jpg'),
(286, 'Goblin Queen', 43, 75, 10, 23, 28, 65, 56, 'http://www.superherodb.com/pictures/portraits/goblin-queen.jpg'),
(287, 'Godzilla', 70, 44, 100, 54, 100, 100, 20, 'http://www.superherodb.com/pictures/portraits/godzilla.jpg'),
(289, 'Goku', 87, 56, 100, 75, 90, 100, 100, 'http://www.superherodb.com/pictures/portraits/goku.jpg'),
(294, 'Gorilla Grodd', 67, 81, 53, 33, 70, 100, 65, 'http://www.superherodb.com/pictures/portraits/gorilla-grodd.jpg'),
(296, 'Gravity', 42, 50, 32, 33, 40, 69, 30, 'http://www.superherodb.com/pictures/portraits/gravity.jpg'),
(298, 'Green Arrow', 48, 81, 12, 35, 28, 39, 90, 'http://www.superherodb.com/pictures/portraits/green-arrow.jpg'),
(299, 'Green Goblin', 57, 100, 48, 38, 60, 48, 50, 'http://www.superherodb.com/pictures/portraits/green-goblin.jpg'),
(300, 'Green Goblin II', 48, 75, 55, 37, 50, 44, 26, 'http://www.superherodb.com/pictures/portraits/green-goblin-2.jpg'),
(303, 'Groot', 71, 75, 85, 33, 70, 100, 64, 'http://www.superherodb.com/pictures/portraits/groot.jpg'),
(305, 'Guy Gardner', 68, 38, 90, 53, 64, 100, 64, 'http://www.superherodb.com/pictures/portraits/guy-gardner.jpg'),
(306, 'Hal Jordan', 81, 69, 90, 75, 80, 100, 70, 'http://www.superherodb.com/pictures/portraits/hal-jordan.jpg'),
(308, 'Hancock', 78, 63, 90, 67, 100, 100, 50, 'http://www.superherodb.com/pictures/portraits/hancock.jpg'),
(309, 'Harley Quinn', 56, 88, 12, 33, 65, 55, 80, 'http://www.superherodb.com/pictures/portraits/harley-quinn.jpg'),
(310, 'Harry Potter', 44, 75, 7, 21, 10, 100, 50, 'http://www.superherodb.com/pictures/portraits/harry-potter.jpg'),
(311, 'Havok', 46, 63, 10, 25, 60, 71, 45, 'http://www.superherodb.com/pictures/portraits/havok.jpg'),
(312, 'Hawk', 49, 38, 38, 35, 95, 43, 42, 'http://www.superherodb.com/pictures/portraits/hawk.jpg'),
(313, 'Hawkeye', 35, 56, 12, 21, 10, 29, 80, 'http://www.superherodb.com/pictures/portraits/hawkeye.jpg'),
(315, 'Hawkgirl', 66, 50, 28, 53, 99, 96, 72, 'http://www.superherodb.com/pictures/portraits/hawkgirl.jpg'),
(321, 'Hela', 76, 63, 100, 46, 100, 100, 45, 'http://www.superherodb.com/pictures/portraits/hela.jpg'),
(322, 'Hellboy', 63, 63, 53, 21, 95, 73, 75, 'http://www.superherodb.com/pictures/portraits/hellboy.jpg'),
(323, 'Hellcat', 45, 63, 11, 33, 45, 46, 70, 'http://www.superherodb.com/pictures/portraits/hellcat.jpg'),
(325, 'Hercules', 81, 63, 100, 46, 85, 89, 100, 'http://www.superherodb.com/pictures/portraits/hercules.jpg'),
(330, 'Hope Summers', 48, 63, 10, 12, 32, 93, 75, 'http://www.superherodb.com/pictures/portraits/hope-summers.jpg'),
(332, 'Hulk', 89, 88, 100, 63, 100, 98, 85, 'http://www.superherodb.com/pictures/portraits/hulk.jpg'),
(333, 'Human Torch', 56, 63, 11, 63, 70, 87, 42, 'http://www.superherodb.com/pictures/portraits/human-torch.jpg'),
(334, 'Huntress', 43, 69, 10, 23, 28, 34, 95, 'http://www.superherodb.com/pictures/portraits/huntress.jpg'),
(335, 'Husk', 59, 63, 63, 35, 78, 48, 64, 'http://www.superherodb.com/pictures/portraits/husk.jpg'),
(336, 'Hybrid', 73, 63, 63, 58, 75, 100, 80, 'http://www.superherodb.com/pictures/portraits/hybrid.jpg'),
(337, 'Hydro-Man', 45, 38, 13, 25, 80, 66, 50, 'http://www.superherodb.com/pictures/portraits/hydro-man.jpg'),
(338, 'Hyperion', 92, 88, 100, 100, 95, 87, 80, 'http://www.superherodb.com/pictures/portraits/hyperion.jpg'),
(339, 'Iceman', 69, 63, 32, 53, 100, 100, 64, 'http://www.superherodb.com/pictures/portraits/iceman.jpg'),
(340, 'Impulse', 59, 50, 10, 100, 60, 74, 60, 'http://www.superherodb.com/pictures/portraits/impulse.jpg'),
(342, 'Indigo', 65, 75, 63, 50, 50, 100, 50, 'http://www.superherodb.com/pictures/portraits/indigo.jpg'),
(343, 'Ink', 41, 38, 28, 17, 40, 73, 50, 'http://www.superherodb.com/pictures/portraits/ink.jpg'),
(344, 'Invisible Woman', 60, 88, 10, 27, 85, 93, 56, 'http://www.superherodb.com/pictures/portraits/invisible-woman.jpg'),
(345, 'Iron Fist', 68, 75, 55, 33, 50, 95, 100, 'http://www.superherodb.com/pictures/portraits/iron-fist.jpg'),
(346, 'Iron Man', 82, 100, 85, 58, 85, 100, 64, 'http://www.superherodb.com/pictures/portraits/iron-man.jpg'),
(347, 'Iron Monger', 63, 88, 63, 25, 90, 57, 56, 'http://www.superherodb.com/pictures/portraits/iron-monger.jpg'),
(348, 'Isis', 58, 75, 48, 75, 46, 50, 56, 'http://www.superherodb.com/pictures/portraits/isis.jpg'),
(350, 'Jack of Hearts', 59, 63, 55, 100, 30, 77, 30, 'http://www.superherodb.com/pictures/portraits/jack-of-hearts.jpg'),
(351, 'Jack-Jack', 49, 6, 34, 67, 80, 100, 6, 'http://www.superherodb.com/pictures/portraits/jack-jack.jpg'),
(352, 'James Bond', 45, 88, 13, 17, 35, 25, 90, 'http://www.superherodb.com/pictures/portraits/james-bond.jpg'),
(353, 'James T. Kirk', 39, 69, 11, 17, 30, 30, 75, 'http://www.superherodb.com/pictures/portraits/james-t-kirk.jpg'),
(355, 'Jason Bourne', 48, 88, 12, 29, 30, 26, 100, 'http://www.superherodb.com/pictures/portraits/jason-bourne.jpg'),
(356, 'Jean Grey', 63, 94, 80, 21, 20, 92, 70, 'http://www.superherodb.com/pictures/portraits/jean-grey-pre-phoenix.jpg'),
(357, 'Jean-Luc Picard', 37, 75, 10, 17, 30, 26, 65, 'http://www.superherodb.com/pictures/portraits/jean-luc-picard.jpg'),
(358, 'Jennifer Kale', 51, 75, 10, 35, 42, 74, 72, 'http://www.superherodb.com/pictures/portraits/jennifer-kale.jpg'),
(360, 'Jessica Cruz', 66, 56, 90, 46, 50, 100, 55, 'http://www.superherodb.com/pictures/portraits/jessica-cruz.jpg'),
(361, 'Jessica Jones', 49, 56, 44, 50, 70, 18, 55, 'http://www.superherodb.com/pictures/portraits/jessica-jones.jpg'),
(364, 'Jim Powell', 37, 38, 38, 23, 80, 23, 20, 'http://www.superherodb.com/pictures/portraits/jim-powell.jpg'),
(367, 'John Constantine', 40, 63, 10, 8, 40, 54, 65, 'http://www.superherodb.com/pictures/portraits/john-constantine.jpg'),
(370, 'Joker', 49, 100, 10, 12, 60, 43, 70, 'http://www.superherodb.com/pictures/portraits/joker.jpg'),
(371, 'Jolt', 35, 63, 12, 27, 32, 31, 42, 'http://www.superherodb.com/pictures/portraits/jolt.jpg'),
(372, 'Jubilee', 44, 56, 8, 22, 20, 66, 90, 'http://www.superherodb.com/pictures/portraits/jubilee.jpg'),
(373, 'Judge Dredd', 55, 75, 18, 38, 50, 52, 95, 'http://www.superherodb.com/pictures/portraits/judge-dredd.jpg'),
(374, 'Juggernaut', 74, 44, 100, 42, 100, 85, 70, 'http://www.superherodb.com/pictures/portraits/juggernaut.jpg'),
(375, 'Junkpile', 51, 50, 38, 17, 90, 81, 30, 'http://www.superherodb.com/pictures/portraits/junkpile.jpg'),
(376, 'Justice', 41, 50, 10, 33, 70, 55, 30, 'http://www.superherodb.com/pictures/portraits/justice.jpg'),
(379, 'Kang', 74, 100, 48, 58, 70, 100, 70, 'http://www.superherodb.com/pictures/portraits/kang.jpg'),
(384, 'Kid Flash', 36, 25, 4, 92, 42, 20, 30, 'http://www.superherodb.com/pictures/portraits/kid-flash.jpg'),
(386, 'Killer Croc', 52, 19, 53, 35, 90, 53, 60, 'http://www.superherodb.com/pictures/portraits/killer-croc.jpg'),
(387, 'Killer Frost', 39, 88, 10, 13, 35, 59, 30, 'http://www.superherodb.com/pictures/portraits/killer-frost-snow.jpg'),
(388, 'Kilowog', 74, 81, 90, 53, 42, 100, 80, 'http://www.superherodb.com/pictures/portraits/kilowog.jpg'),
(389, 'King Kong', 71, 56, 100, 71, 75, 47, 75, 'http://www.superherodb.com/pictures/portraits/king-kong.jpg'),
(390, 'King Shark', 67, 50, 88, 50, 90, 86, 40, 'http://www.superherodb.com/pictures/portraits/king-shark.jpg'),
(391, 'Kingpin', 40, 75, 18, 25, 40, 13, 70, 'http://www.superherodb.com/pictures/portraits/kingpin.jpg'),
(392, 'Klaw', 59, 63, 38, 33, 100, 62, 60, 'http://www.superherodb.com/pictures/portraits/klaw.jpg'),
(394, 'Kraven II', 44, 50, 34, 23, 28, 43, 85, 'http://www.superherodb.com/pictures/portraits/kraven-2.jpg'),
(395, 'Kraven the Hunter', 47, 63, 32, 35, 42, 25, 85, 'http://www.superherodb.com/pictures/portraits/kraven-1.jpg'),
(396, 'Krypto', 67, 9, 80, 100, 90, 82, 40, 'http://www.superherodb.com/pictures/portraits/krypto.jpg'),
(397, 'Kyle Rayner', 72, 69, 90, 50, 60, 100, 60, 'http://www.superherodb.com/pictures/portraits/kyle-rayner.jpg'),
(398, 'Kylo Ren', 56, 56, 44, 33, 30, 100, 70, 'http://www.superherodb.com/pictures/portraits/kylo-ren.jpg'),
(400, 'Lady Deathstrike', 59, 63, 28, 42, 85, 48, 90, 'http://www.superherodb.com/pictures/portraits/lady-deathstrike.jpg'),
(401, 'Leader', 40, 100, 10, 12, 14, 59, 42, 'http://www.superherodb.com/pictures/portraits/leader.jpg'),
(404, 'Leonardo', 58, 75, 16, 50, 65, 59, 80, 'http://www.superherodb.com/pictures/portraits/leonardo.jpg'),
(405, 'Lex Luthor', 64, 100, 53, 25, 65, 68, 70, 'http://www.superherodb.com/pictures/portraits/lex-luthor.jpg'),
(406, 'Light Lass', 37, 38, 10, 35, 28, 67, 42, 'http://www.superherodb.com/pictures/portraits/light-lass.jpg'),
(408, 'Lightning Lord', 38, 44, 10, 23, 42, 66, 42, 'http://www.superherodb.com/pictures/portraits/lightning-lord.jpg'),
(409, 'Living Brain', 46, 75, 53, 35, 56, 31, 28, 'http://www.superherodb.com/pictures/portraits/living-brain.jpg'),
(410, 'Living Tribunal', 88, 100, 100, 100, 100, 100, 30, 'http://www.superherodb.com/pictures/portraits/living-tribunal.jpg'),
(412, 'Lizard', 53, 50, 51, 27, 70, 63, 56, 'http://www.superherodb.com/pictures/portraits/lizard.jpg'),
(413, 'Lobo', 89, 94, 100, 54, 100, 100, 85, 'http://www.superherodb.com/pictures/portraits/lobo.jpg'),
(414, 'Loki', 74, 88, 63, 46, 85, 100, 60, 'http://www.superherodb.com/pictures/portraits/loki.jpg'),
(415, 'Longshot', 40, 50, 10, 27, 10, 71, 70, 'http://www.superherodb.com/pictures/portraits/longshot.jpg'),
(416, 'Luke Cage', 59, 50, 63, 29, 95, 44, 70, 'http://www.superherodb.com/pictures/portraits/luke-cage.jpg'),
(418, 'Luke Skywalker', 62, 69, 38, 42, 25, 100, 100, 'http://www.superherodb.com/pictures/portraits/luke-skywalker.jpg'),
(419, 'Luna', 35, 38, 6, 83, 14, 53, 14, 'http://www.superherodb.com/pictures/portraits/luna.jpg'),
(421, 'Mach-IV', 62, 75, 36, 60, 84, 60, 56, 'http://www.superherodb.com/pictures/portraits/mach-4.jpg'),
(422, 'Machine Man', 55, 63, 32, 35, 84, 51, 64, 'http://www.superherodb.com/pictures/portraits/machine-man.jpg'),
(423, 'Magneto', 75, 88, 80, 27, 84, 91, 80, 'http://www.superherodb.com/pictures/portraits/magneto.jpg'),
(424, 'Magog', 54, 50, 48, 23, 64, 66, 72, 'http://www.superherodb.com/pictures/portraits/magog.jpg'),
(425, 'Magus', 89, 88, 100, 70, 99, 100, 74, 'http://www.superherodb.com/pictures/portraits/magus.jpg'),
(426, 'Man of Miracles', 100, 100, 100, 100, 100, 100, 100, 'http://www.superherodb.com/pictures/portraits/man-of-miracles.jpg'),
(427, 'Man-Bat', 40, 38, 18, 50, 70, 33, 30, 'http://www.superherodb.com/pictures/portraits/man-bat.jpg'),
(428, 'Man-Thing', 55, 50, 32, 8, 100, 100, 40, 'http://www.superherodb.com/pictures/portraits/man-thing.jpg'),
(429, 'Man-Wolf', 50, 63, 44, 35, 42, 45, 70, 'http://www.superherodb.com/pictures/portraits/man-wolf.jpg'),
(430, 'Mandarin', 62, 100, 28, 23, 28, 100, 95, 'http://www.superherodb.com/pictures/portraits/mandarin.jpg'),
(431, 'Mantis', 61, 63, 8, 33, 80, 100, 80, 'http://www.superherodb.com/pictures/portraits/mantis.jpg'),
(432, 'Martian Manhunter', 95, 100, 95, 92, 100, 100, 85, 'http://www.superherodb.com/pictures/portraits/martian-manhunter.jpg'),
(433, 'Marvel Girl', 70, 63, 85, 47, 42, 100, 80, 'http://www.superherodb.com/pictures/portraits/marvel-girl.jpg'),
(435, 'Master Chief', 72, 75, 73, 35, 80, 69, 100, 'http://www.superherodb.com/pictures/portraits/master-chief.jpg'),
(436, 'Match', 85, 75, 95, 83, 85, 100, 70, 'http://www.superherodb.com/pictures/portraits/match.jpg'),
(437, 'Matt Parkman', 36, 63, 10, 12, 14, 59, 56, 'http://www.superherodb.com/pictures/portraits/matt-parkman.jpg'),
(438, 'Maverick', 45, 63, 10, 12, 42, 60, 85, 'http://www.superherodb.com/pictures/portraits/maverick.jpg'),
(439, 'Maxima', 69, 75, 90, 35, 56, 81, 75, 'http://www.superherodb.com/pictures/portraits/maxima.jpg'),
(441, 'Medusa', 51, 75, 34, 35, 70, 37, 56, 'http://www.superherodb.com/pictures/portraits/medusa.jpg'),
(442, 'Meltdown', 38, 38, 10, 12, 42, 62, 64, 'http://www.superherodb.com/pictures/portraits/boom-boom.jpg'),
(443, 'Mephisto', 74, 88, 85, 35, 95, 100, 42, 'http://www.superherodb.com/pictures/portraits/mephisto.jpg'),
(444, 'Mera', 72, 56, 62, 79, 60, 92, 80, 'http://www.superherodb.com/pictures/portraits/mera.jpg'),
(445, 'Metallo', 66, 75, 53, 23, 95, 86, 64, 'http://www.superherodb.com/pictures/portraits/metallo.jpg'),
(448, 'Metron', 55, 88, 10, 47, 56, 100, 28, 'http://www.superherodb.com/pictures/portraits/metron.jpg'),
(450, 'Michelangelo', 54, 63, 14, 50, 65, 59, 75, 'http://www.superherodb.com/pictures/portraits/michelangelo.jpg'),
(452, 'Mimic', 59, 63, 67, 47, 56, 79, 42, 'http://www.superherodb.com/pictures/portraits/mimic.jpg'),
(454, 'Misfit', 55, 63, 32, 23, 80, 91, 42, 'http://www.superherodb.com/pictures/portraits/misfit.jpg'),
(455, 'Miss Martian', 75, 63, 85, 58, 100, 100, 45, 'http://www.superherodb.com/pictures/portraits/miss-martian.jpg'),
(456, 'Mister Fantastic', 49, 100, 10, 18, 70, 33, 64, 'http://www.superherodb.com/pictures/portraits/mr-fantastic.jpg'),
(457, 'Mister Freeze', 42, 75, 32, 12, 70, 37, 28, 'http://www.superherodb.com/pictures/portraits/mister-freeze.jpg'),
(458, 'Mister Knife', 35, 75, 10, 17, 30, 13, 65, 'http://www.superherodb.com/pictures/portraits/mister-knife.jpg'),
(459, 'Mister Mxyzptlk', 89, 100, 85, 100, 100, 100, 50, 'http://www.superherodb.com/pictures/portraits/mister-mxyzptlk.jpg'),
(460, 'Mister Sinister', 72, 100, 48, 46, 90, 100, 50, 'http://www.superherodb.com/pictures/portraits/mister-sinister.jpg'),
(462, 'Mockingbird', 51, 75, 31, 38, 20, 48, 95, 'http://www.superherodb.com/pictures/portraits/mockingbird.jpg'),
(463, 'MODOK', 44, 100, 18, 25, 25, 79, 15, 'http://www.superherodb.com/pictures/portraits/modok.jpg'),
(467, 'Molten Man', 57, 50, 73, 23, 84, 53, 56, 'http://www.superherodb.com/pictures/portraits/molten-man.jpg'),
(469, 'Monica Dawson', 41, 50, 10, 35, 14, 48, 90, 'http://www.superherodb.com/pictures/portraits/monica-dawson.jpg'),
(470, 'Moon Knight', 42, 50, 36, 23, 42, 28, 75, 'http://www.superherodb.com/pictures/portraits/moon-knight.jpg'),
(471, 'Moonstone', 63, 56, 67, 47, 52, 74, 80, 'http://www.superherodb.com/pictures/portraits/moonstone.jpg'),
(472, 'Morlun', 55, 63, 60, 35, 42, 74, 56, 'http://www.superherodb.com/pictures/portraits/morlun.jpg'),
(474, 'Moses Magnum', 45, 75, 28, 12, 42, 55, 56, 'http://www.superherodb.com/pictures/portraits/moses-magnum.jpg'),
(476, 'Mr Incredible', 55, 50, 83, 33, 95, 29, 40, 'http://www.superherodb.com/pictures/portraits/mr-incredible.jpg'),
(477, 'Ms Marvel II', 46, 38, 63, 23, 84, 11, 56, 'http://www.superherodb.com/pictures/portraits/ms-marvel-2.jpg'),
(478, 'Multiple Man', 43, 63, 11, 23, 70, 28, 62, 'http://www.superherodb.com/pictures/portraits/multiple-man.jpg'),
(479, 'Mysterio', 50, 81, 10, 17, 40, 82, 70, 'http://www.superherodb.com/pictures/portraits/mysterio.jpg'),
(480, 'Mystique', 52, 75, 12, 23, 64, 64, 74, 'http://www.superherodb.com/pictures/portraits/mystique.jpg'),
(481, 'Namor', 75, 69, 95, 58, 70, 73, 85, 'http://www.superherodb.com/pictures/portraits/namor.jpg'),
(483, 'Namora', 55, 50, 85, 42, 42, 48, 64, 'http://www.superherodb.com/pictures/portraits/namora.jpg'),
(484, 'Namorita', 58, 50, 72, 47, 70, 37, 70, 'http://www.superherodb.com/pictures/portraits/namorita.jpg'),
(485, 'Naruto Uzumaki', 74, 50, 80, 32, 80, 100, 100, 'http://www.superherodb.com/pictures/portraits/naruto.jpg'),
(487, 'Nebula', 47, 63, 52, 13, 50, 42, 60, 'http://www.superherodb.com/pictures/portraits/nebula.jpg'),
(489, 'Nick Fury', 46, 75, 11, 23, 42, 25, 100, 'http://www.superherodb.com/pictures/portraits/nick-fury.jpg'),
(490, 'Nightcrawler', 46, 50, 10, 47, 14, 76, 80, 'http://www.superherodb.com/pictures/portraits/nightcrawler.jpg'),
(491, 'Nightwing', 49, 88, 11, 33, 28, 36, 100, 'http://www.superherodb.com/pictures/portraits/nightwing.jpg'),
(492, 'Niki Sanders', 45, 63, 52, 35, 28, 37, 56, 'http://www.superherodb.com/pictures/portraits/niki-sanders.jpg'),
(495, 'Northstar', 57, 50, 18, 83, 56, 65, 70, 'http://www.superherodb.com/pictures/portraits/northstar.jpg'),
(496, 'Nova', 90, 100, 85, 75, 100, 100, 80, 'http://www.superherodb.com/pictures/portraits/nova.jpg'),
(497, 'Nova', 76, 63, 60, 100, 100, 100, 35, 'http://www.superherodb.com/pictures/portraits/nova2.jpg'),
(498, 'Odin', 89, 100, 83, 67, 95, 100, 90, 'http://www.superherodb.com/pictures/portraits/odin.jpg'),
(499, 'Offspring', 58, 50, 10, 35, 99, 100, 56, 'http://www.superherodb.com/pictures/portraits/offspring.jpg'),
(502, 'One Punch Man', 70, 38, 100, 83, 95, 55, 50, 'http://www.superherodb.com/pictures/portraits/one-punch-man.jpg'),
(503, 'One-Above-All', 100, 100, 100, 100, 100, 100, 100, 'http://www.superherodb.com/pictures/portraits/one-above-all-omni.jpg'),
(504, 'Onslaught', 79, 88, 100, 33, 100, 100, 55, 'http://www.superherodb.com/pictures/portraits/onslaught.jpg'),
(505, 'Oracle', 39, 75, 11, 23, 28, 19, 76, 'http://www.superherodb.com/pictures/portraits/oracle_dc.jpg'),
(506, 'Osiris', 70, 75, 85, 60, 95, 65, 42, 'http://www.superherodb.com/pictures/portraits/osiris.jpg'),
(508, 'Ozymandias', 53, 100, 18, 33, 20, 49, 95, 'http://www.superherodb.com/pictures/portraits/ozymandias-watchmen.jpg'),
(517, 'Phoenix', 94, 100, 100, 83, 100, 100, 80, 'http://www.superherodb.com/pictures/portraits/jean-grey-phoenix.jpg'),
(518, 'Plantman', 48, 63, 60, 25, 55, 61, 25, 'http://www.superherodb.com/pictures/portraits/plantman.jpg'),
(520, 'Plastic Man', 65, 50, 63, 23, 100, 100, 56, 'http://www.superherodb.com/pictures/portraits/plastic-man.jpg'),
(521, 'Plastique', 36, 50, 10, 23, 28, 60, 42, 'http://www.superherodb.com/pictures/portraits/plastique.jpg'),
(522, 'Poison Ivy', 49, 81, 14, 21, 40, 100, 40, 'http://www.superherodb.com/pictures/portraits/poison-ivy.jpg'),
(523, 'Polaris', 62, 63, 73, 42, 50, 100, 45, 'http://www.superherodb.com/pictures/portraits/polaris.jpg'),
(524, 'Power Girl', 95, 94, 100, 100, 100, 100, 75, 'http://www.superherodb.com/pictures/portraits/power-girl.jpg'),
(526, 'Predator', 66, 63, 30, 25, 85, 100, 90, 'http://www.superherodb.com/pictures/portraits/predator.jpg'),
(527, 'Professor X', 44, 100, 8, 12, 14, 100, 32, 'http://www.superherodb.com/pictures/portraits/professor-x.jpg'),
(528, 'Professor Zoom', 55, 94, 10, 100, 20, 83, 20, 'http://www.superherodb.com/pictures/portraits/professor-zoom.jpg'),
(529, 'Psylocke', 59, 63, 33, 25, 40, 100, 90, 'http://www.superherodb.com/pictures/portraits/psylocke.jpg'),
(530, 'Punisher', 49, 69, 16, 21, 45, 42, 100, 'http://www.superherodb.com/pictures/portraits/punisher.jpg'),
(533, 'Q', 62, 100, 12, 17, 100, 100, 40, 'http://www.superherodb.com/pictures/portraits/q.jpg'),
(535, 'Question', 43, 81, 14, 27, 35, 20, 80, 'http://www.superherodb.com/pictures/portraits/question.jpg'),
(536, 'Quicksilver', 65, 63, 28, 100, 60, 81, 56, 'http://www.superherodb.com/pictures/portraits/quicksilver.jpg'),
(540, 'Rambo', 44, 63, 14, 25, 30, 30, 100, 'http://www.superherodb.com/pictures/portraits/rambo.jpg'),
(541, 'Raphael', 56, 63, 17, 50, 65, 59, 80, 'http://www.superherodb.com/pictures/portraits/raphael.jpg'),
(542, 'Raven', 47, 50, 10, 29, 70, 84, 40, 'http://www.superherodb.com/pictures/portraits/raven.jpg'),
(543, 'Ray', 62, 50, 10, 92, 100, 100, 20, 'http://www.superherodb.com/pictures/portraits/ray.jpg'),
(545, 'Red Arrow', 38, 63, 16, 25, 20, 23, 80, 'http://www.superherodb.com/pictures/portraits/red-arrow.jpg'),
(546, 'Red Hood', 45, 75, 12, 23, 28, 35, 95, 'http://www.superherodb.com/pictures/portraits/red-hood.jpg'),
(547, 'Red Hulk', 73, 50, 100, 47, 85, 82, 75, 'http://www.superherodb.com/pictures/portraits/red-hulk.jpg'),
(549, 'Red Robin', 43, 81, 11, 27, 32, 29, 80, 'http://www.superherodb.com/pictures/portraits/red-robin.jpg'),
(550, 'Red Skull', 35, 75, 10, 12, 14, 19, 80, 'http://www.superherodb.com/pictures/portraits/red-skull.jpg'),
(551, 'Red Tornado', 63, 75, 38, 67, 60, 100, 40, 'http://www.superherodb.com/pictures/portraits/red-tornado.jpg'),
(555, 'Rey', 37, 63, 8, 21, 10, 87, 35, 'http://www.superherodb.com/pictures/portraits/rey.jpg'),
(556, 'Rhino', 60, 25, 80, 43, 90, 36, 85, 'http://www.superherodb.com/pictures/portraits/rhino.jpg'),
(557, 'Rick Flag', 44, 88, 11, 23, 28, 19, 95, 'http://www.superherodb.com/pictures/portraits/rick-flag.jpg'),
(559, 'Rip Hunter', 42, 100, 8, 8, 10, 100, 25, 'http://www.superherodb.com/pictures/portraits/rip-hunter.jpg'),
(561, 'Robin', 45, 88, 11, 27, 28, 32, 85, 'http://www.superherodb.com/pictures/portraits/robin-i.jpg'),
(562, 'Robin II', 42, 75, 11, 27, 28, 28, 85, 'http://www.superherodb.com/pictures/portraits/robin-1.jpg'),
(563, 'Robin III', 44, 81, 11, 27, 28, 29, 85, 'http://www.superherodb.com/pictures/portraits/robin-iii.jpg'),
(564, 'Robin V', 37, 69, 8, 33, 16, 29, 65, 'http://www.superherodb.com/pictures/portraits/robin-v.jpg'),
(567, 'Rogue', 48, 75, 10, 12, 28, 80, 80, 'http://www.superherodb.com/pictures/portraits/rogue.jpg'),
(569, 'Rorschach', 40, 75, 10, 29, 20, 23, 80, 'http://www.superherodb.com/pictures/portraits/rorschach.jpg'),
(570, 'Sabretooth', 64, 56, 48, 38, 90, 50, 100, 'http://www.superherodb.com/pictures/portraits/sabretooth.jpg'),
(572, 'Sandman', 69, 44, 75, 46, 90, 100, 60, 'http://www.superherodb.com/pictures/portraits/sandman.jpg'),
(573, 'Sasquatch', 49, 75, 80, 23, 56, 15, 42, 'http://www.superherodb.com/pictures/portraits/sasquatch.jpg'),
(574, 'Sauron', 79, 88, 85, 33, 100, 100, 70, 'http://www.superherodb.com/pictures/portraits/sauron-lotr.jpg'),
(575, 'Savage Dragon', 68, 63, 70, 54, 85, 66, 72, 'http://www.superherodb.com/pictures/portraits/savage-dragon.jpg'),
(576, 'Scarecrow', 36, 81, 10, 12, 14, 48, 50, 'http://www.superherodb.com/pictures/portraits/scarecrow.jpg'),
(577, 'Scarlet Spider', 61, 75, 53, 60, 74, 46, 56, 'http://www.superherodb.com/pictures/portraits/scarlet-spider.jpg'),
(578, 'Scarlet Spider II', 56, 88, 55, 60, 40, 37, 56, 'http://www.superherodb.com/pictures/portraits/scarlet-spider-2.jpg'),
(579, 'Scarlet Witch', 65, 100, 10, 29, 70, 100, 80, 'http://www.superherodb.com/pictures/portraits/scarlet-witch.jpg'),
(581, 'Scorpion', 63, 50, 52, 60, 85, 49, 80, 'http://www.superherodb.com/pictures/portraits/scorpion.jpg'),
(583, 'Sentry', 83, 75, 100, 100, 84, 100, 40, 'http://www.superherodb.com/pictures/portraits/sentry.jpg'),
(584, 'Shadow King', 65, 75, 12, 27, 100, 100, 75, 'http://www.superherodb.com/pictures/portraits/shadow-king.jpg'),
(585, 'Shadow Lass', 53, 63, 10, 67, 20, 79, 80, 'http://www.superherodb.com/pictures/portraits/shadow-lass.jpg'),
(586, 'Shadowcat', 47, 88, 8, 21, 25, 69, 70, 'http://www.superherodb.com/pictures/portraits/shadowcat.jpg'),
(587, 'Shang-Chi', 47, 63, 12, 30, 50, 29, 100, 'http://www.superherodb.com/pictures/portraits/shang-chi.jpg'),
(588, 'Shatterstar', 59, 63, 48, 45, 64, 49, 84, 'http://www.superherodb.com/pictures/portraits/shatterstar.jpg'),
(589, 'She-Hulk', 72, 81, 100, 42, 100, 40, 70, 'http://www.superherodb.com/pictures/portraits/she-hulk.jpg'),
(590, 'She-Thing', 55, 69, 72, 21, 80, 23, 65, 'http://www.superherodb.com/pictures/portraits/she-thing.jpg'),
(591, 'Shocker', 50, 63, 10, 23, 70, 79, 56, 'http://www.superherodb.com/pictures/portraits/shocker.jpg'),
(594, 'Sif', 78, 63, 90, 67, 80, 100, 70, 'http://www.superherodb.com/pictures/portraits/sif.jpg'),
(595, 'Silk', 67, 75, 48, 71, 70, 71, 65, 'http://www.superherodb.com/pictures/portraits/silk.jpg'),
(598, 'Silver Surfer', 80, 56, 100, 100, 90, 100, 32, 'http://www.superherodb.com/pictures/portraits/silver-surfer.jpg'),
(599, 'Silverclaw', 39, 50, 28, 35, 42, 34, 42, 'http://www.superherodb.com/pictures/portraits/silverclaw.jpg'),
(600, 'Simon Baz', 67, 56, 90, 42, 55, 100, 60, 'http://www.superherodb.com/pictures/portraits/simon-baz.jpg'),
(601, 'Sinestro', 72, 75, 85, 53, 64, 100, 55, 'http://www.superherodb.com/pictures/portraits/sinestro.jpg'),
(602, 'Siren', 68, 56, 62, 79, 60, 92, 60, 'http://www.superherodb.com/pictures/portraits/siren.jpg'),
(604, 'Siryn', 36, 38, 8, 47, 28, 50, 42, 'http://www.superherodb.com/pictures/portraits/siryn.jpg'),
(605, 'Skaar', 68, 50, 85, 27, 90, 69, 85, 'http://www.superherodb.com/pictures/portraits/skaar.jpg'),
(607, 'Snowbird', 46, 50, 32, 27, 42, 70, 52, 'http://www.superherodb.com/pictures/portraits/snowbird.jpg'),
(608, 'Sobek', 38, 50, 34, 23, 46, 20, 56, 'http://www.superherodb.com/pictures/portraits/sobek.jpg'),
(609, 'Solomon Grundy', 56, 9, 93, 13, 100, 92, 30, 'http://www.superherodb.com/pictures/portraits/solomon-grundy.jpg'),
(610, 'Songbird', 49, 75, 36, 27, 42, 55, 56, 'http://www.superherodb.com/pictures/portraits/songbird.jpg'),
(611, 'Space Ghost', 51, 38, 18, 33, 40, 95, 80, 'http://www.superherodb.com/pictures/portraits/space-ghost.jpg'),
(612, 'Spawn', 78, 75, 60, 50, 90, 100, 95, 'http://www.superherodb.com/pictures/portraits/spawn.jpg'),
(613, 'Spectre', 93, 88, 100, 100, 100, 100, 70, 'http://www.superherodb.com/pictures/portraits/spectre.jpg'),
(618, 'Spider-Girl', 59, 63, 38, 60, 65, 53, 75, 'http://www.superherodb.com/pictures/portraits/spider-girl.jpg'),
(619, 'Spider-Gwen', 67, 75, 55, 63, 70, 66, 70, 'http://www.superherodb.com/pictures/portraits/spider-gwen.jpg'),
(620, 'Spider-Man', 74, 90, 55, 67, 75, 74, 85, 'http://www.superherodb.com/pictures/portraits/spider-man.jpg'),
(623, 'Spider-Woman', 56, 56, 42, 42, 60, 68, 70, 'http://www.superherodb.com/pictures/portraits/spider-woman.jpg'),
(625, 'Spider-Woman III', 43, 50, 48, 27, 42, 60, 28, 'http://www.superherodb.com/pictures/portraits/spider-woman-3.jpg'),
(627, 'Spock', 42, 81, 18, 17, 40, 56, 40, 'http://www.superherodb.com/pictures/portraits/spock.jpg'),
(628, 'Spyke', 36, 50, 12, 17, 60, 48, 30, 'http://www.superherodb.com/pictures/portraits/spyke.jpg'),
(630, 'Star-Lord', 45, 69, 20, 33, 50, 25, 70, 'http://www.superherodb.com/pictures/portraits/star-lord.jpg'),
(631, 'Stardust', 95, 88, 85, 100, 110, 100, 85, 'http://www.superherodb.com/pictures/portraits/stardust.jpg'),
(632, 'Starfire', 63, 50, 80, 33, 85, 59, 70, 'http://www.superherodb.com/pictures/portraits/starfire.jpg'),
(633, 'Stargirl', 67, 63, 80, 25, 90, 87, 55, 'http://www.superherodb.com/pictures/portraits/stargirl.jpg'),
(634, 'Static', 50, 69, 8, 42, 50, 90, 40, 'http://www.superherodb.com/pictures/portraits/static.jpg'),
(635, 'Steel', 72, 81, 82, 53, 90, 64, 64, 'http://www.superherodb.com/pictures/portraits/steel.jpg'),
(637, 'Steppenwolf', 96, 94, 100, 83, 100, 100, 100, 'http://www.superherodb.com/pictures/portraits/steppenwolf.jpg'),
(638, 'Storm', 54, 75, 10, 47, 30, 88, 75, 'http://www.superherodb.com/pictures/portraits/storm.jpg'),
(640, 'Sunspot', 58, 63, 63, 35, 25, 90, 70, 'http://www.superherodb.com/pictures/portraits/sunspot.jpg'),
(641, 'Superboy', 83, 75, 95, 83, 90, 95, 60, 'http://www.superherodb.com/pictures/portraits/superboy.jpg'),
(642, 'Superboy-Prime', 97, 94, 100, 100, 100, 100, 85, 'http://www.superherodb.com/pictures/portraits/superboy-prime.jpg'),
(643, 'Supergirl', 95, 94, 100, 100, 100, 100, 75, 'http://www.superherodb.com/pictures/portraits/supergirl.jpg'),
(644, 'Superman', 97, 94, 100, 100, 100, 100, 85, 'http://www.superherodb.com/pictures/portraits/superman.jpg'),
(645, 'Swamp Thing', 77, 88, 95, 25, 100, 100, 55, 'http://www.superherodb.com/pictures/portraits/swamp-thing.jpg'),
(646, 'Swarm', 51, 75, 18, 50, 90, 38, 35, 'http://www.superherodb.com/pictures/portraits/swarm.jpg'),
(647, 'Sylar', 45, 75, 10, 12, 28, 91, 56, 'http://www.superherodb.com/pictures/portraits/sylar.jpg'),
(648, 'Synch', 54, 75, 67, 23, 28, 74, 56, 'http://www.superherodb.com/pictures/portraits/synch.jpg'),
(649, 'T-1000', 70, 75, 34, 33, 100, 100, 75, 'http://www.superherodb.com/pictures/portraits/t-1000.jpg'),
(650, 'T-800', 54, 75, 34, 17, 60, 73, 65, 'http://www.superherodb.com/pictures/portraits/terminator.jpg'),
(651, 'T-850', 71, 75, 80, 25, 90, 83, 75, 'http://www.superherodb.com/pictures/portraits/t-850.jpg'),
(652, 'T-X', 72, 75, 63, 29, 85, 100, 80, 'http://www.superherodb.com/pictures/portraits/t-x.jpg'),
(653, 'Taskmaster', 53, 75, 12, 50, 20, 63, 100, 'http://www.superherodb.com/pictures/portraits/taskmaster.jpg'),
(654, 'Tempest', 41, 38, 10, 45, 28, 66, 60, 'http://www.superherodb.com/pictures/portraits/tempest.jpg'),
(655, 'Thanos', 86, 100, 100, 33, 100, 100, 80, 'http://www.superherodb.com/pictures/portraits/thanos.jpg'),
(658, 'Thing', 66, 75, 84, 21, 100, 38, 80, 'http://www.superherodb.com/pictures/portraits/thing.jpg'),
(659, 'Thor', 92, 69, 100, 83, 100, 100, 100, 'http://www.superherodb.com/pictures/portraits/thor.jpg'),
(660, 'Thor Girl', 80, 75, 83, 70, 84, 100, 70, 'http://www.superherodb.com/pictures/portraits/thor-girl.jpg'),
(661, 'Thunderbird', 37, 50, 32, 27, 32, 13, 70, 'http://www.superherodb.com/pictures/portraits/thunderbird.jpg'),
(664, 'Thunderstrike', 69, 63, 80, 70, 84, 42, 72, 'http://www.superherodb.com/pictures/portraits/thunderstrike.jpg'),
(665, 'Thundra', 49, 38, 81, 32, 64, 26, 54, 'http://www.superherodb.com/pictures/portraits/thundra.jpg'),
(666, 'Tiger Shark', 51, 38, 72, 46, 70, 51, 28, 'http://www.superherodb.com/pictures/portraits/tiger-shark.jpg'),
(667, 'Tigra', 52, 63, 32, 53, 38, 33, 90, 'http://www.superherodb.com/pictures/portraits/tigra.jpg'),
(670, 'Toad', 49, 50, 34, 58, 56, 70, 28, 'http://www.superherodb.com/pictures/portraits/toad.jpg'),
(671, 'Toxin', 73, 56, 73, 70, 84, 82, 70, 'http://www.superherodb.com/pictures/portraits/toxin.jpg'),
(672, 'Toxin', 75, 75, 80, 42, 85, 97, 70, 'http://www.superherodb.com/pictures/portraits/toxin-2.jpg'),
(676, 'Triplicate Girl', 37, 63, 10, 23, 42, 44, 42, 'http://www.superherodb.com/pictures/portraits/triplicate-girl.jpg'),
(677, 'Triton', 54, 56, 63, 50, 65, 35, 55, 'http://www.superherodb.com/pictures/portraits/triton.jpg'),
(679, 'Ultragirl', 58, 50, 80, 35, 70, 35, 80, 'http://www.superherodb.com/pictures/portraits/ultragirl.jpg');
INSERT INTO `heroes` (`hero_id`, `hero_name`, `average`, `intelligence`, `strength`, `speed`, `durability`, `power`, `combat`, `image`) VALUES
(680, 'Ultron', 80, 88, 83, 42, 100, 100, 64, 'http://www.superherodb.com/pictures/portraits/ultron.jpg'),
(681, 'Utgard-Loki', 64, 50, 80, 23, 84, 85, 64, 'http://www.superherodb.com/pictures/portraits/utgard-loki.jpg'),
(685, 'Vanisher', 51, 63, 10, 75, 56, 61, 42, 'http://www.superherodb.com/pictures/portraits/vanisher.jpg'),
(686, 'Vegeta', 95, 81, 100, 92, 95, 100, 100, 'http://www.superherodb.com/pictures/portraits/vegeta.jpg'),
(687, 'Venom', 75, 75, 57, 65, 84, 86, 84, 'http://www.superherodb.com/pictures/portraits/venom.jpg'),
(688, 'Venom II', 56, 50, 57, 47, 70, 54, 56, 'http://www.superherodb.com/pictures/portraits/venom-2.jpg'),
(689, 'Venom III', 65, 63, 73, 35, 90, 73, 56, 'http://www.superherodb.com/pictures/portraits/venom-3.jpg'),
(690, 'Venompool', 82, 69, 57, 63, 100, 100, 100, 'http://www.superherodb.com/pictures/portraits/venompool.jpg'),
(692, 'Vibe', 39, 50, 10, 17, 30, 99, 30, 'http://www.superherodb.com/pictures/portraits/vibe.jpg'),
(693, 'Vindicator', 62, 63, 63, 53, 64, 58, 70, 'http://www.superherodb.com/pictures/portraits/vindicator.jpg'),
(696, 'Violet Parr', 37, 56, 9, 13, 50, 79, 15, 'http://www.superherodb.com/pictures/portraits/violet.jpg'),
(697, 'Vision', 82, 100, 72, 54, 95, 100, 70, 'http://www.superherodb.com/pictures/portraits/vision.jpg'),
(699, 'Vixen', 46, 50, 38, 50, 50, 62, 25, 'http://www.superherodb.com/pictures/portraits/vixen.jpg'),
(701, 'Vulture', 37, 75, 22, 42, 25, 26, 30, 'http://www.superherodb.com/pictures/portraits/vulture.jpg'),
(703, 'War Machine', 82, 63, 80, 63, 100, 100, 85, 'http://www.superherodb.com/pictures/portraits/war-machine.jpg'),
(705, 'Warlock', 77, 88, 36, 79, 95, 71, 95, 'http://www.superherodb.com/pictures/portraits/warlock.jpg'),
(706, 'Warp', 39, 38, 10, 23, 28, 85, 50, 'http://www.superherodb.com/pictures/portraits/warp.jpg'),
(707, 'Warpath', 56, 38, 72, 47, 70, 26, 84, 'http://www.superherodb.com/pictures/portraits/warpath.jpg'),
(708, 'Wasp', 44, 63, 17, 58, 52, 29, 42, 'http://www.superherodb.com/pictures/portraits/wasp.jpg'),
(709, 'Watcher', 82, 100, 80, 67, 89, 100, 56, 'http://www.superherodb.com/pictures/portraits/uatu-watcher.jpg'),
(711, 'White Canary', 43, 63, 7, 33, 15, 49, 90, 'http://www.superherodb.com/pictures/portraits/white-canary.jpg'),
(713, 'Wildfire', 54, 50, 32, 23, 100, 77, 42, 'http://www.superherodb.com/pictures/portraits/wildfire.jpg'),
(714, 'Winter Soldier', 55, 56, 32, 35, 65, 60, 84, 'http://www.superherodb.com/pictures/portraits/winter-soldier.jpg'),
(717, 'Wolverine', 72, 63, 32, 50, 100, 89, 100, 'http://www.superherodb.com/pictures/portraits/wolverine.jpg'),
(718, 'Wonder Girl', 62, 75, 90, 25, 80, 39, 60, 'http://www.superherodb.com/pictures/portraits/wonder-girl-iii.jpg'),
(719, 'Wonder Man', 74, 75, 100, 53, 90, 64, 64, 'http://www.superherodb.com/pictures/portraits/wonder-man.jpg'),
(720, 'Wonder Woman', 95, 88, 100, 79, 100, 100, 100, 'http://www.superherodb.com/pictures/portraits/wonder-woman-v2.jpg'),
(723, 'X-23', 65, 75, 24, 42, 100, 55, 95, 'http://www.superherodb.com/pictures/portraits/x-23.jpg'),
(724, 'X-Man', 79, 88, 53, 53, 95, 100, 84, 'http://www.superherodb.com/pictures/portraits/x-man.jpg'),
(728, 'Ymir', 67, 50, 100, 27, 100, 98, 28, 'http://www.superherodb.com/pictures/portraits/ymir.jpg'),
(729, 'Yoda', 65, 88, 52, 33, 25, 100, 90, 'http://www.superherodb.com/pictures/portraits/yoda.jpg'),
(730, 'Zatanna', 50, 81, 10, 23, 28, 100, 56, 'http://www.superherodb.com/pictures/portraits/zatanna.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `leagues`
--

CREATE TABLE `leagues` (
  `league_id` int(11) NOT NULL,
  `league_name` varchar(50) NOT NULL,
  `current_league_day` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `leagues`
--

INSERT INTO `leagues` (`league_id`, `league_name`, `current_league_day`) VALUES
(11, 'My eeoeoeo', 1),
(20, 'My Super League', 0),
(25, 'fornite', 0);

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
(26, 11, 15),
(7, 11, 8),
(8, 11, 9),
(22, 11, 11),
(10, 11, 10),
(23, 11, 13),
(24, 11, 12),
(14, 20, 10),
(25, 11, 14),
(31, 25, 16);

-- --------------------------------------------------------

--
-- Structure de la table `matches`
--

CREATE TABLE `matches` (
  `match_id` int(11) NOT NULL,
  `league_id` int(11) NOT NULL,
  `league_day` int(11) NOT NULL,
  `user1_id` int(11) NOT NULL,
  `user2_id` int(11) NOT NULL,
  `winner_id` int(11) NOT NULL DEFAULT '0',
  `looser_id` int(11) NOT NULL DEFAULT '0',
  `score` varchar(10) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `matches`
--

INSERT INTO `matches` (`match_id`, `league_id`, `league_day`, `user1_id`, `user2_id`, `winner_id`, `looser_id`, `score`) VALUES
(282, 11, 1, 15, 8, 0, 0, ''),
(283, 11, 1, 9, 11, 0, 0, ''),
(284, 11, 1, 10, 13, 0, 0, ''),
(285, 11, 1, 12, 14, 0, 0, ''),
(286, 11, 2, 15, 9, 0, 0, ''),
(287, 11, 2, 8, 11, 0, 0, ''),
(288, 11, 2, 10, 12, 0, 0, ''),
(289, 11, 2, 13, 14, 0, 0, ''),
(290, 11, 3, 15, 11, 0, 0, ''),
(291, 11, 3, 8, 9, 0, 0, ''),
(292, 11, 3, 10, 14, 0, 0, ''),
(293, 11, 3, 13, 12, 0, 0, ''),
(294, 11, 4, 15, 10, 0, 0, ''),
(295, 11, 4, 8, 13, 0, 0, ''),
(296, 11, 4, 9, 12, 0, 0, ''),
(297, 11, 4, 11, 14, 0, 0, ''),
(298, 11, 5, 15, 13, 0, 0, ''),
(299, 11, 5, 8, 12, 0, 0, ''),
(300, 11, 5, 9, 14, 0, 0, ''),
(301, 11, 5, 11, 10, 0, 0, ''),
(302, 11, 6, 15, 12, 0, 0, ''),
(303, 11, 6, 8, 14, 0, 0, ''),
(304, 11, 6, 9, 10, 0, 0, ''),
(305, 11, 6, 11, 13, 0, 0, ''),
(306, 11, 7, 15, 14, 0, 0, ''),
(307, 11, 7, 8, 10, 0, 0, ''),
(308, 11, 7, 9, 13, 0, 0, ''),
(309, 11, 7, 11, 12, 0, 0, '');

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
(11, 'test3', '$2y$10$gujF6W6znSsza9RsxRZ..OrT3CKQ84ieIweDR/0UpSW7Wb9AYzTSO', 'a@a.fr'),
(8, 'test', '$2y$10$Orai/C2VY/BQxqnZ.5ErRuO7R7c3uyZqUINwWpv8lx4bN5eSGlDny', 'test@gmail.com'),
(9, 'test2', '$2y$10$x0BTjx88r2KHDvhgxqxaVOOGNA.qvMJdycf6B4RvbXcbj/vcZxBce', 'test2@gmail.com'),
(10, 'yolo', '$2y$10$quqlsXWzASWshCHVQYXY1eFOBe.37mFm3qzJ.A0PFFN2m8t5DBxR.', 'yolo@yolo.fr'),
(12, 'test4', '$2y$10$RjbaQybp05XR353bH7O5S.zcj9E0ruxJkvHUV7uA7NTXDubGtJWoS', 't@t.fr'),
(13, 'test5', '$2y$10$KrG7vgJO41R8kheiht4pbeV0EQL/Mdq5dR4dc8i.3U7/nUxBNSKJ6', 'a@a.Fr'),
(14, 'test6', '$2y$10$0gAK8uzv7m9VjAlWC9tLwOPWT5EF7BQ58obDpFV9EYAqJh.Nxs2.2', 't@t.fr'),
(15, 'test7', '$2y$10$o.lmz/CdzZovxl1eJ1TdSOsP5kshpKSG.YpTon/Y.DfBDtUduCfEW', 'ada@d.fr');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `hands`
--
ALTER TABLE `hands`
  ADD PRIMARY KEY (`hand_id`);

--
-- Index pour la table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`hero_id`);

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
  MODIFY `hand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `leagues`
--
ALTER TABLE `leagues`
  MODIFY `league_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `league_users`
--
ALTER TABLE `league_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `matches`
--
ALTER TABLE `matches`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
