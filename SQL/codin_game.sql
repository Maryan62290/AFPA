-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 15 mars 2021 à 14:25
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
-- Base de données :  `codin_game`
--

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `resgister_date` date NOT NULL,
  `birth_date` date DEFAULT NULL,
  `adress` varchar(50) NOT NULL,
  `zipcode` char(5) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`customer_id`, `firstname`, `lastname`, `resgister_date`, `birth_date`, `adress`, `zipcode`, `city`, `phone_number`) VALUES
(1, 'aaaaaaa', 'aaaaaaaaa', '2020-05-26', '2020-05-12', 'fhegfgy dehfhe efhh', '75002', 'tunis', '432454844'),
(2, 'zzzzz', 'Wzzzzz', '2020-05-20', '2020-05-20', 'fhegfgy dehfhe efhh', '75000', 'khjkh', '245645645'),
(3, 'eeee', 'Weeeeee', '2020-05-20', '2020-05-05', 'fhegfgy dehfhe efhh', '75002', 'ghvhj', '424456489'),
(4, 'rrrrrrr', 'Wrrrrrr', '2020-05-27', '2020-05-13', 'fhegfgy dehfhe efhh', '34000', ' rgnjk', '65465487'),
(5, 'njlkjnlkj', 'kjkljlkj', '2020-05-19', NULL, 'fhegfgy dehfhe efhh', '75000', 'ghvhj', '464556454'),
(6, 'hjghjghj', 'hjkhjkh', '2020-05-20', NULL, 'fhegfgy dehfhe efhh', '34000', 'ghvhj', '565495'),
(7, 'jknjknNNJNL', 'JJKHJKL', '2020-05-06', '2020-05-19', 'fhegfgy dehfhe efhh', '78000', 'rgnjk', '54546654');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_category_id` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `available_stock` int(11) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `product_category_id` (`product_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`product_id`, `product_category_id`, `name`, `description`, `price`, `available_stock`) VALUES
(1, 4, 'zbzhdhzhd', 'ghhiujoip', '246.00', 45),
(2, 4, 'hhuihoi', 'guiyhuioi', '447.00', 2359),
(3, 4, 'hhjkh', 'jhjkhl', '148.00', 467487),
(4, 2, 'fgfyugu', 'gyuguiy', '987.00', 56479),
(5, 2, 'hghjhjoi', 'hgghuihoi', '578.00', 48787),
(6, 3, 'khjkjlkjl', 'jlkjkjkk', '12.00', 17879),
(7, 3, 'njknlkj', 'bjknhlkj', '48.00', 2315867),
(8, 3, 'vvjhbjhbjk', 'hbhgjkhjlkj', '445.00', 154846),
(9, 3, 'hjghjkhlkj', 'jkhjjlkjm', '12.00', 1485748),
(10, 1, 'hjghk', 'jkjljkmo', '36.00', 4867),
(11, 2, 'fgfyugu', 'gyuguiy', '987.00', 56479),
(12, 2, 'khkjh', 'klmklùk', '12.00', 457487),
(13, 2, 'hghkjh', 'hjjl', '25.00', 148748),
(14, NULL, 'jkhjhl', 'jlkjlkjlk', '116.00', 45464);

-- --------------------------------------------------------

--
-- Structure de la table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `product_category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`product_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product_category`
--

INSERT INTO `product_category` (`product_category_id`, `name`, `description`) VALUES
(1, 'techno', 'techno hhoiujijop'),
(2, 'electro', 'electro  zzzzzzzz'),
(3, 'medecine', 'medecine zzzzzzzz'),
(4, 'alim', 'alim eeeeeeee');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`product_category_id`) REFERENCES `product_category` (`product_category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
