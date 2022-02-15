-- phpMyAdmin SQL Dump
-- version 4.9.9
-- https://www.phpmyadmin.net/
--
-- Hôte : db5004839317.hosting-data.io
-- Généré le : mar. 15 fév. 2022 à 10:04
-- Version du serveur : 5.7.36-log
-- Version de PHP : 7.0.33-0+deb9u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbs4058410`
--
CREATE DATABASE IF NOT EXISTS `dbs4058410` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbs4058410`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`, `role`) VALUES
(1, 'Emilien', '$2y$10$.yurTYqBWuHI6uelnH4F3Oi21rkA5S.47BJAIQZTqnepPrhlygKl2', 'my_zycs@yahoo.fr', 4),
(2, 'Jean jean', '$2y$10$gnm0tttMxBKHXJliEM5YmuytxNczQtpD/TEMoNCvxwB0Jz/dndi3O', 'jean@gmail.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE `messagerie` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `telephone` varchar(10) CHARACTER SET utf8 NOT NULL,
  `message` varchar(255) CHARACTER SET utf8 NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`id`, `name`, `telephone`, `message`, `send_date`) VALUES
(6, 'test', 'test', 'test', '2021-09-07 10:44:50'),
(7, 'test', 'test', 'test', '2021-09-07 10:45:22'),
(8, 'jean', 'az', 'Bonjour', '2022-02-07 14:51:08'),
(9, 'JeJean jean', '0102030405', 'Bonjour', '2022-02-07 15:40:53');

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`id`, `nom`, `prenom`, `adresse`, `telephone`, `contact`) VALUES
(1, 'Zidane', 'Zinedine', '5 rue leon lhermitte 75015 Paris', '0601020304', 'Sa fille Zidane Isabelle 0602030405'),
(5, 'Lama', 'Bernard', '15 rue des morillons 75015', '0602030405', 'Son frere 0706050403'),
(6, 'Blanc', 'Laurent', '2 rue cambronne', '0602030405', 'Lui meme'),
(7, 'Henry', 'Thierry', '25 Boulevard Garibaldi', '090807060504', 'Sa femme'),
(8, 'Karembeu', 'Chistian', '15 avenue de Segur', '0102030405', 'Son voisin 0103040506');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `messagerie`
--
ALTER TABLE `messagerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
