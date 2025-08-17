-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 29 mai 2023 à 19:45
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `formulaires`
--

DROP TABLE IF EXISTS `formulaires`;
CREATE TABLE IF NOT EXISTS `formulaires` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` int NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `naissance` date DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `num` char(10) NOT NULL,
  `reseaux` varchar(100) NOT NULL,
  `engagement` text NOT NULL,
  `duree` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `formulaires`
--

INSERT INTO `formulaires` (`id`, `user`, `nom`, `prenom`, `naissance`, `email`, `num`, `reseaux`, `engagement`, `duree`) VALUES
(1, 5, 'zac', 'zczc', '2221-02-22', 'nitescu.alex04@gmail.com', '0101010101', 'zadaa', 'azdad', '2 ans');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
