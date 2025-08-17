-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 27 mai 2023 à 19:08
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
-- Structure de la table `jeunes`
--

DROP TABLE IF EXISTS `jeunes`;
CREATE TABLE IF NOT EXISTS `jeunes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `prenom` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `naissance` date NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ip` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `token` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `jeunes`
--

INSERT INTO `jeunes` (`id`, `nom`, `prenom`, `naissance`, `email`, `password`, `ip`, `token`, `date_inscription`) VALUES
(1, 'Nit', 'Alex', '0000-00-00', 'test@test.fr', '$2y$12$RxWa9FBf/crG7s7X1RjXbOemVZFEraHwvxbJlig1LpDvI0hkl.T.6', '::1', 'a6203ec9a1d7adb68f2a2bde7fcbf6655cb3f53204f5b2a811aac13d6918d1350c53fa323bf34fe8dc0390fc59de3ae4a482feab4d49becb20ccb5733cfda624', '2023-05-27 20:47:46'),
(2, 'Nites', 'Alexx', '0000-00-00', 'nitescu.alex04@gmail.com', '$2y$12$zJ1kdLGPipZKnK9e3t4fYOpipsA7uMBNEx.7ahD5z5V4ntAFL4rSm', '::1', 'e1c411bce4c3d9670fda323b169f7acd2e69308e433d17d090f4eeca3c8336ed7b928ad84ce9939d8a69d8b6c652aee05143c10da90510b5765a8f39e71ade5b', '2023-05-27 21:06:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
