-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 22 jan. 2019 à 21:09
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `domus`
--

-- --------------------------------------------------------

--
-- Structure de la table `assistance`
--

DROP TABLE IF EXISTS `assistance`;
CREATE TABLE IF NOT EXISTS `assistance` (
  `idMessage` int(11) NOT NULL AUTO_INCREMENT,
  `emailUsers` tinytext NOT NULL,
  `message` longtext NOT NULL,
  `isRead` tinytext NOT NULL,
  PRIMARY KEY (`idMessage`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `assistance`
--

INSERT INTO `assistance` (`idMessage`, `emailUsers`, `message`, `isRead`) VALUES
(1, 'hdh@f.f', 'huihfuzehfuzeif', 'true'),
(2, 'fihid@bhgf.yg', 'kvjkjgiidfsgisdgisdjioghpdrsghpur', '0'),
(3, 'matth@gn.com', 'okorkgokroegkerpogoer', '0'),
(4, 'gnjierjgijreg@ndjf', 'iefizfiehfiehfihef', 'true'),
(5, 'fihid@bhgf.yg', 'grlkgoerjgojerojgoer', 'true'),
(6, 'fihid@bhgf.yg', 'glkjoejrkgojerogjoer', 'true'),
(7, 'fihid@bhgf.yg', 'g,oergoernignuierbguurihguerg', 'true'),
(8, 'fihid@bhgf.yg', 'egierhgihigzihgihreughurhguherug', 'true'),
(9, 'fihid@bhgf.yg', 'egnuhergihsioghiorehgioerhgiherihgir', 'true'),
(10, 'fihid@bhgf.yg', 'r;gpkrjgojiejiohjegiehirghierg', 'true'),
(11, 'fihid@bhgf.yg', 'ergjihergihrghirhgihrighrohgire', 'true'),
(12, 'fihid@bhgf.yg', 'ihegioherighireg', 'true'),
(13, 'fihid@bhgf.yg', 'glkjtopgjoserjg', 'true'),
(14, 'fihid@bhgf.yg', 'trgkjierhjgpoe', 'true'),
(15, 'fihid@bhgf.yg', ';glperkp^ger', 'true'),
(16, 'jnebjfze@bfjeb', 'g,krjngkjerig', 'true'),
(17, 'fihid@bhgf.yg', 'g,kfrngkinreignier', 'true');

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `idQuestion` int(11) NOT NULL AUTO_INCREMENT,
  `question` text COLLATE latin1_general_ci NOT NULL,
  `reponse` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`idQuestion`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`idQuestion`, `question`, `reponse`) VALUES
(9, 'Question 3', 'Reponse 3'),
(8, 'Question 2', 'Reponse 2\r\n'),
(7, 'Question 1', 'Reponse 1'),
(10, 'Pourquoi Clément est là ajd ?', 'Je ne sais pas, peut-être pour faire semblant d\'être un minimum présent'),
(11, 'Comment je m\'appelle?', ''),
(12, '?', 'Louios'),
(13, 'Question jean benoit', 'jfhfjgjg');

-- --------------------------------------------------------

--
-- Structure de la table `forum_categories`
--

DROP TABLE IF EXISTS `forum_categories`;
CREATE TABLE IF NOT EXISTS `forum_categories` (
  `idCategories` int(11) NOT NULL AUTO_INCREMENT,
  `nameCategories` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `descCategories` text COLLATE utf32_spanish_ci NOT NULL,
  `orderCategories` int(11) NOT NULL,
  PRIMARY KEY (`idCategories`),
  UNIQUE KEY `cat_ordre` (`orderCategories`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Déchargement des données de la table `forum_categories`
--

INSERT INTO `forum_categories` (`idCategories`, `nameCategories`, `descCategories`, `orderCategories`) VALUES
(2, 'Assistance', 'Besoin d\'aide posez vos questions ici', 10),
(1, 'Général', 'Sujet global sur Domus', 5),
(8, 'Autre', 'Posez vos questions sur d\'autres sujets ici.', 15);

-- --------------------------------------------------------

--
-- Structure de la table `forum_posts`
--

DROP TABLE IF EXISTS `forum_posts`;
CREATE TABLE IF NOT EXISTS `forum_posts` (
  `idPosts` int(11) NOT NULL AUTO_INCREMENT,
  `idTopicPosts` int(11) NOT NULL,
  `idCreatorPosts` int(11) NOT NULL,
  `textPosts` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `datePosts` datetime NOT NULL,
  PRIMARY KEY (`idPosts`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `forum_posts`
--

INSERT INTO `forum_posts` (`idPosts`, `idTopicPosts`, `idCreatorPosts`, `textPosts`, `datePosts`) VALUES
(4, 1, 1, 'salut', '2019-01-18 08:02:04'),
(5, 1, 1, 'yo', '2019-01-18 08:03:04'),
(6, 1, 1, 'dadadadada', '2019-01-18 08:03:53'),
(7, 1, 1, 'ce forum est tellement BO', '2019-01-18 08:04:30'),
(22, 1, 1, 'pourquoi', '2019-01-22 16:45:10'),
(21, 1, 1, 'z', '2019-01-22 11:34:25'),
(20, 1, 1, 'test', '2019-01-22 11:34:06'),
(19, 1, 1, 'autre', '2019-01-22 11:33:48'),
(18, 1, 1, 'test d\'heure de modif', '2019-01-22 11:31:45'),
(27, 41, 1, 'yyyy', '2019-01-22 20:33:09'),
(28, 4, 1, 'ah', '2019-01-22 20:33:37'),
(29, 42, 1, 'Oui j\'aimerais savoir bidule\r\n', '2019-01-22 20:34:47');

-- --------------------------------------------------------

--
-- Structure de la table `forum_topics`
--

DROP TABLE IF EXISTS `forum_topics`;
CREATE TABLE IF NOT EXISTS `forum_topics` (
  `idTopics` int(11) NOT NULL AUTO_INCREMENT,
  `idCategoryTopics` int(11) NOT NULL,
  `titleTopics` tinytext CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `idCreatorTopics` int(11) NOT NULL,
  `lastDateTopics` datetime NOT NULL,
  PRIMARY KEY (`idTopics`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `forum_topics`
--

INSERT INTO `forum_topics` (`idTopics`, `idCategoryTopics`, `titleTopics`, `idCreatorTopics`, `lastDateTopics`) VALUES
(1, 1, 'Test de topics', 1, '2019-01-22 20:23:57'),
(43, 1, 'test', 1, '2019-01-22 20:48:51'),
(42, 1, 'Salut', 1, '2019-01-22 20:34:47');

-- --------------------------------------------------------

--
-- Structure de la table `houses`
--

DROP TABLE IF EXISTS `houses`;
CREATE TABLE IF NOT EXISTS `houses` (
  `idHouses` int(11) NOT NULL AUTO_INCREMENT,
  `idUsers` int(11) NOT NULL,
  `nameHouses` tinytext COLLATE latin1_general_ci NOT NULL,
  `adressHouses` text COLLATE latin1_general_ci NOT NULL,
  `areaHouses` int(11) NOT NULL,
  `roomTotalNbHouses` int(11) NOT NULL,
  `personNbHouses` int(11) NOT NULL,
  PRIMARY KEY (`idHouses`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `houses`
--

INSERT INTO `houses` (`idHouses`, `idUsers`, `nameHouses`, `adressHouses`, `areaHouses`, `roomTotalNbHouses`, `personNbHouses`) VALUES
(16, 1, 'Maison 1', 'voila', 50, 4, 1),
(21, 1, 'LE MATISSE A', '40 bb', 666, 12, 10),
(20, 1, 'Jean', '50 avenue bidule', 100, 12, 3),
(23, 6, 'mega', 'lovania', 999, 111, 1),
(22, 6, 'JJhouse', 'jezkezkj', 15, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `offer`
--

DROP TABLE IF EXISTS `offer`;
CREATE TABLE IF NOT EXISTS `offer` (
  `idOffer` int(11) NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `texte` longtext NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`idOffer`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `offer`
--

INSERT INTO `offer` (`idOffer`, `title`, `texte`, `image`) VALUES
(8, 'gfrihguiehog', 'grehighisohi', ''),
(13, 'alexandre', 'ifjirgjirzhegiherighierhgierhigherig', ''),
(12, 'benjamin', 'nfheiufhouzehfize', ''),
(15, 'matthieu', 'ufhzhfuzhfulqhlizheuhfize', '../images/assistance'),
(18, 'bonjour', 'fhjsfijfijezifjziojoirefjei', '../images/test2'),
(20, 'tezts', 'ss', '');

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `idRoom` int(11) NOT NULL AUTO_INCREMENT,
  `idHouse` int(11) NOT NULL,
  `type` tinytext NOT NULL,
  `name` tinytext NOT NULL,
  `sensorNb` int(11) NOT NULL,
  PRIMARY KEY (`idRoom`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rooms`
--

INSERT INTO `rooms` (`idRoom`, `idHouse`, `type`, `name`, `sensorNb`) VALUES
(13, 19, 'chambre', 'chambre 12', 1),
(12, 20, 'salle de bain', 'Salle de bain 1', 8),
(8, 16, 'toilettes', 'Chiotte', 50),
(11, 19, 'cuisine', 'Salle 45', 12),
(10, 19, 'salle à manger', 'Salle des porcs', 10),
(14, 22, 'cuisine', 'JJ poutin', 50),
(15, 23, 'salle à manger', 'Under', 2);

-- --------------------------------------------------------

--
-- Structure de la table `sensor`
--

DROP TABLE IF EXISTS `sensor`;
CREATE TABLE IF NOT EXISTS `sensor` (
  `idSensor` int(11) NOT NULL AUTO_INCREMENT,
  `idRoom` int(11) NOT NULL,
  `type` tinytext NOT NULL,
  `donnee` int(11) NOT NULL,
  PRIMARY KEY (`idSensor`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sensor`
--

INSERT INTO `sensor` (`idSensor`, `idRoom`, `type`, `donnee`) VALUES
(4, 6, 'luminosite', 25),
(5, 7, 'temperature', 25),
(6, 9, 'temperature', 25),
(7, 14, 'Camera', 1011),
(8, 15, 'Cam', 10110101);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `idService` int(11) NOT NULL AUTO_INCREMENT,
  `title1` tinytext NOT NULL,
  `title2` tinytext NOT NULL,
  `texte` longtext NOT NULL,
  PRIMARY KEY (`idService`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`idService`, `title1`, `title2`, `texte`) VALUES
(1, 'environnement', 'fbygfyugzyfgyuz', 'vjbsjkbusqbdqgsdhqshjdhjkqshjd'),
(2, 'environnement', 'fuygzeuifguezgfuiq', 'zefuhuiozehfihesifhehifhiozehf'),
(3, 'securite', 'dljgiorshgioprsgz', 'gijesigfjeizojfopazef'),
(6, 'confort', 'coucou', 'r\'oitojerotgjoerjgor');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `uidUsers` tinytext COLLATE latin1_general_ci NOT NULL,
  `emailUsers` tinytext COLLATE latin1_general_ci NOT NULL,
  `pwdUsers` longtext COLLATE latin1_general_ci NOT NULL,
  `phoneNbUsers` tinytext COLLATE latin1_general_ci NOT NULL,
  `adressUsers` text COLLATE latin1_general_ci NOT NULL,
  `firstNameUsers` tinytext COLLATE latin1_general_ci NOT NULL,
  `lastNameUsers` tinytext COLLATE latin1_general_ci NOT NULL,
  `offersUsers` int(11) NOT NULL,
  PRIMARY KEY (`idUsers`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`, `phoneNbUsers`, `adressUsers`, `firstNameUsers`, `lastNameUsers`, `offersUsers`) VALUES
(1, 'admin', 'florent.favole@wanadoo.fr', '$2y$10$c0s0j4r7dL9q2DBzzeuPJevL/O1L1jZqgWYriX4yMnh4f.71S1p0C', '', '', 'jean jacque', 'bb', 0),
(2, 'utilisateur', 'azerty@mail.com', '$2y$10$Zw5Wunw19WwCToW7tVj4zu4ayfUCfHOf4NU1wzVCjGblBiYU16qW.', '', '', '', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
