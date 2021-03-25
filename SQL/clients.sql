-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 16 mars 2021 à 13:19
-- Version du serveur :  5.7.28
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
-- Base de données :  `afpa`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `age` int(3) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `mail`, `pass`, `adresse`, `age`) VALUES
(1, 'MOHAMED', 'TAISSIR', 'tayicheri@hotmail.com', 'tayiball', '2rue  edmond 75018 paris', 20),
(2, 'tony', 'sellier', 'tony@gmail.com', 'yoplait', '12 rue marion 55200 tourcoing', 15),
(3, 'rahma', 'tellier', 'rah@hotmail.com', 'pourquoipas', '15 rue malrebe 95000 grigny', 35),
(4, 'ramael', 'maxence', 'mail@test.com', '123456789', '123 rue liberté', 25),
(5, 'millier', 'tony', 'mail@test.com', '123456789', '147 av charles de gaulle', 33),
(6, 'bailek', 'brahim', 'mail@test.com', '26479878', '357 av champs de mars', 56),
(7, 'bonjour', 'salut', 'tuvabien@gmail.com', 'daccord', 'oui', 1),
(8, 'fdsqsdf', 'dsfqsd', 'dsfqsdfqsdf', 'dfqsdfsdf', 'dsfqsdfqsdf', 3),
(9, 'oui', 'non', 'dac', 'ok', 'kebab', 2),
(10, 'salade', 'tomate', 'nutella', 'fracadelle', 'bicky', 1),
(11, 'Bayo', 'sylvain', 'aaa@gmail.com', '123456789', '55 rue labas', 37),
(12, 'aaa', 'zzz', 'aze@mail.com', 'azeazeaze', 'aaz aze aze ', 254),
(13, 'bbb', 'yyy', 'qsd@mail.com', 'azeqsdwxc', 'azd azd azd ad ', 22),
(14, 'Kurosaki', 'Ichigo', 'bankai@live.fr', 'rukiainsta', 'clinique Kurosaki \r\nKarakura', 15),
(15, 'Livai', 'Ackerman', 'lm@live.fr', 'proprete', 'mur maria', 19),
(16, 'Hatake', 'Kakashi', 'masque@live.fr', 'jemecache', 'village caché de Konoha', 30),
(17, 'Raziyev', 'Arsen', 'test@test.com', 'testtesttest', '1 rue du test', 22),
(18, 'Test', 'Testov', 'lolo', 'lololo', 'lol 31 rrdd', 26),
(19, 'Bagrov', 'Bjorn', 'bjornov@gkkgj.cij', 'jdjfkdj', '45 tujikov', 24),
(20, 'farouk', 'hamza', 'hamza-farouk@oui.oui', 'ouioauioui', 'adress', 23),
(21, 'hamza', 'farouk', 'farouk-hamza@feoej', '12335466', 'adress adress', 20),
(22, 'al mokdad', 'zak', 'almokdad.mhd@gmail.com', 'kkkkkkkkk', '5 rue rameau villeneuve d ascq', 14),
(23, 'al mokdad', 'zak', 'almokdad.mhd@gmail.com', 'bfghduekl', '5 rue rameau villeneuve d ascq', 14),
(24, 'al mokdad', 'zak', 'almokdad.mhd@gmail.com', 'azefty1546', '5 rue rameau villeneuv d ascq', 14),
(25, 'tony', 'sellier', 'tony@gmail.com', 'yoplait', '12 rue marion 55200 tourcoing', 30);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
