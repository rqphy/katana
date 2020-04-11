-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 11 avr. 2020 à 07:20
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `katana`
--

-- --------------------------------------------------------

--
-- Structure de la table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `member`
--

INSERT INTO `member` (`id`, `email`, `pass`) VALUES
(0, 'maevaboss@yes.com', 'test'),
(0, 'djskqlds@djskql.fr', '098f6bcd4621d373cade4e832627b4f6'),
(0, 'nathaan@nath.nath', '098f6bcd4621d373cade4e832627b4f6'),
(0, 'jdsdjsqp@jdsqkd.fr', '098f6bcd4621d373cade4e832627b4f6'),
(0, 'jdsdjsqp@jdsqkd.fr', '098f6bcd4621d373cade4e832627b4f6'),
(0, 'jdsdjsqp@jdsqkd.fr', '098f6bcd4621d373cade4e832627b4f6'),
(0, 'hdqksd@dhskjqd.fsndjk', '098f6bcd4621d373cade4e832627b4f6'),
(0, 'jdsdjsqp@jdsqkd.fr', '098f6bcd4621d373cade4e832627b4f6'),
(0, 'dsqnkdsq@dnsd.fr', '098f6bcd4621d373cade4e832627b4f6'),
(0, 'dsqnkdsq@dnsd.frd', '098f6bcd4621d373cade4e832627b4f6'),
(0, 'dsqnkdsq@dnsd.frd', 'd41d8cd98f00b204e9800998ecf8427e'),
(0, 'djqkqdl@dshqkds.fr', 'd41d8cd98f00b204e9800998ecf8427e'),
(0, 'test@test.test', 'd41d8cd98f00b204e9800998ecf8427e'),
(0, 'hdkhqd@hdkjsq.fr', '098f6bcd4621d373cade4e832627b4f6'),
(0, '', '098f6bcd4621d373cade4e832627b4f6'),
(0, 'djkqjqs@jdks.fr', 'd41d8cd98f00b204e9800998ecf8427e'),
(0, '', '098f6bcd4621d373cade4e832627b4f6'),
(0, '', '098f6bcd4621d373cade4e832627b4f6'),
(0, '', '098f6bcd4621d373cade4e832627b4f6'),
(0, '', '098f6bcd4621d373cade4e832627b4f6'),
(0, 'nath@nath.nath', '098f6bcd4621d373cade4e832627b4f6'),
(0, 'jmeconnect@tqt.fr', '098f6bcd4621d373cade4e832627b4f6'),
(0, 'testdsj@test.fr', '098f6bcd4621d373cade4e832627b4f6'),
(0, 'test@test.fjldk', '098f6bcd4621d373cade4e832627b4f6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
