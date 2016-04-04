-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 04 Avril 2016 à 21:49
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `bookId` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`bookId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `book`
--

INSERT INTO `book` (`bookId`, `title`, `author`, `year`) VALUES
(1, 'The science of Happyniess', 'Will', 2004),
(2, 'Psychology', 'Sigmund', 1950),
(3, 'Theory of Everything', 'Stephen', 1965);

-- --------------------------------------------------------

--
-- Structure de la table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `personId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`personId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `person`
--

INSERT INTO `person` (`personId`, `name`, `email`) VALUES
(1, 'Boukhlouf', 'khalid@gmail.com'),
(2, 'Elmahsouni', 'elmahsouni@gmail.com'),
(3, 'Moujab', 'moujab@gmail.com'),
(4, 'Montassir', 'mountassir@gmail.com'),
(5, 'Khalid', 'ka@nna.c'),
(6, 'Kaabi', 'mohamed@amine.com'),
(7, 'kk', 'kakaka@koko.com'),
(8, 'kaka', 'kaaka@kakikiki.kom'),
(9, 'jdhh', 'jdkh@kjd.com'),
(10, 'kikhou', 'khaha@khhh.hh'),
(11, 'Nanana', 'nanh@hou.com'),
(12, 'llilolo', 'lil@ana.nkhaf'),
(13, 'Aie', 'Mina@khaled.com'),
(14, 'KAKAKA', 'KIIKIKIK@kigkki.com'),
(43, 'khaklid', 'khakkds@jjfk.fls'),
(323, 'Messi', 'Messi@barcelona.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
