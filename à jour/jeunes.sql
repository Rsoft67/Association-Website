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
-- Structure de la table `jeunes`
--

DROP TABLE IF EXISTS `jeunes`;
CREATE TABLE IF NOT EXISTS `jeunes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `prenom` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `naissance` date DEFAULT NULL,
  `password` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ip` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `token` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `jeunes`
--

INSERT INTO `jeunes` (`id`, `nom`, `prenom`, `email`, `naissance`, `password`, `ip`, `token`, `date_inscription`) VALUES
(1, 'Nit', 'Alex', 'test@test.fr', '0000-00-00', '$2y$12$RxWa9FBf/crG7s7X1RjXbOemVZFEraHwvxbJlig1LpDvI0hkl.T.6', '::1', 'a6203ec9a1d7adb68f2a2bde7fcbf6655cb3f53204f5b2a811aac13d6918d1350c53fa323bf34fe8dc0390fc59de3ae4a482feab4d49becb20ccb5733cfda624', '2023-05-27 20:47:46'),
(2, 'Nites', 'Alexx', 'nitescu.alex04@gmail.com', '0000-00-00', '$2y$12$zJ1kdLGPipZKnK9e3t4fYOpipsA7uMBNEx.7ahD5z5V4ntAFL4rSm', '::1', 'e1c411bce4c3d9670fda323b169f7acd2e69308e433d17d090f4eeca3c8336ed7b928ad84ce9939d8a69d8b6c652aee05143c10da90510b5765a8f39e71ade5b', '2023-05-27 21:06:05'),
(3, 'czzc', 'czcz', 'czcz@czcz.com', '2004-11-22', '$2y$12$d2i7Z0fC4Pshvb6oMnKxx.IzDXQOCJgUrNo8c8HXlNqkKYER5KhoW', '::1', '0b0d7ac5e04f31ac93853179dca440e609d04b8a45aa5579211b3eaf25c37eb6aaeb8389c3ce4e172dd3ec592ac334aa5fd87978ce4ac9c55e77ce7df4811409', '2023-05-27 22:49:27'),
(4, 'Blod', 'idie', 'blod@idie.com', '1995-10-29', '$2y$12$uO687Ynz6FrTkQI/pufLi.pBBLPRFCrVL9jBkMCPuyK5aAg1GOS6m', '::1', '040400442e14a0c9cca96721eb5ef38ea934ebefca4dc9ce9632b3dc7fd230366469646fb262777cb538e64383c8100bc316d7954160001f72e6fd9bc1fa0ec0', '2023-05-28 15:05:35'),
(5, 'NIT', 'Crist', 'nit@crist.com', '2011-11-11', '$2y$12$SNAsP.p.TyqUqNb.86VZneeAHWboUmV6pbq4I/pId2Z9gIOLLZbR2', '::1', '202da26a871e7aa204e90d2fdd8d0d35ca6a3c9e7f2aa1dbd1381153eda33f1ece78a47439a068a178ea6123f7e88b25c9bb0154fab8bdeee6270454828ed47a', '2023-05-28 18:37:55'),
(6, 'azxax', 'axax', 'azxax@gma.com', '2212-02-22', '471a70b58522d21c018d036149845a63c9c71b34d1aedf06204a19b74966e2a5', '::1', '17240489c561b117ee6f45878480f1c79c561550bedc348cc53a73e2fe3f72dbf9f3cb6a1e5b29b5237fb99da2a8b3669c8bb0ce836a077bf18f97a5b1080299', '2023-05-28 19:16:39'),
(7, 'zczc', 'zczc', 'cz@gml.com', '0000-00-00', 'bb07053c4f963637fd4911bb1107fd75b84908c797c6416d18ed218e96424139', '::1', '8bf17c5bce5fa7c359dc3a95e832a06bbb36f6f61cee6b69f96d1760b853dbf71b09f2a8bee80063a0f073d0480d637a453bef5bed468523f75551fe7f72c076', '2023-05-28 19:17:33');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
