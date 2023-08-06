-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 25 juil. 2023 à 13:05
-- Version du serveur :  10.5.19-MariaDB-0+deb11u2
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `formulaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `campagne`
--

CREATE TABLE `campagne` (
  `id` int(11) NOT NULL,
  `dest` enum('all','confirmed','nconfirmed') NOT NULL,
  `sujet` varchar(24) NOT NULL,
  `message` text NOT NULL,
  `dteTime` datetime DEFAULT current_timestamp(),
  `fichier` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `campagne`
--

INSERT INTO `campagne` (`id`, `dest`, `sujet`, `message`, `dteTime`, `fichier`) VALUES
(1, 'all', 'jnkjn', 'kjnkjnkjnknj', '2023-07-24 10:20:59', 0x2f7661722f7777772f68746d6c2f43494e45465745422f6173736574732f646f63732f),
(2, 'all', 'jnkjn', 'kjnkjnkjnknj', '2023-07-24 10:20:59', 0x2f7661722f7777772f68746d6c2f43494e45465745422f6173736574732f646f63732f),
(3, 'all', 'jnkjn', 'kjnkjnkjnknj', '2023-07-24 10:20:59', 0x2f7661722f7777772f68746d6c2f43494e45465745422f6173736574732f646f63732f),
(4, 'all', 'jnkjn', 'kjnkjnkjnknj', '2023-07-24 10:22:22', ''),
(5, 'all', 'jnkjn', 'kjnkjnkjnknj', '2023-07-24 10:22:22', ''),
(6, 'all', 'jnkjn', 'kjnkjnkjnknj', '2023-07-24 10:22:22', ''),
(7, 'nconfirmed', 'couco', 'coucoucoucoucoucoucoucou', '2023-07-24 10:22:57', ''),
(8, 'nconfirmed', 'couco', 'coucoucoucoucoucoucoucou', '2023-07-24 10:24:37', 0x2f7661722f7777772f68746d6c2f43494e45465745422f6173736574732f646f63732f77616c6c7061706572666c6172652e636f6d5f77616c6c7061706572202834292e6a7067),
(9, 'nconfirmed', 'couco', 'coucoucoucoucoucoucoucou', '2023-07-24 10:24:46', 0x2f7661722f7777772f68746d6c2f43494e45465745422f6173736574732f646f63732f77616c6c7061706572666c6172652e636f6d5f77616c6c7061706572202834292e6a7067),
(10, 'nconfirmed', 'csdscds', 'kjnkjnkjn', '2023-07-24 10:54:07', 0x2f7661722f7777772f68746d6c2f43494e45465745422f6173736574732f646f63732f77616c6c7061706572666c6172652e636f6d5f77616c6c70617065722e6a7067);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) NOT NULL,
  `libelle` varchar(1024) NOT NULL,
  `code` varchar(24) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `nom` varchar(128) NOT NULL,
  `prenom` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `newsletters`
--

INSERT INTO `newsletters` (`id`, `nom`, `prenom`, `email`, `phone`, `confirmed`) VALUES
(15, 'KOUAKANOU', 'Casanova', 'casanovakouakanou@gmail.com', '62989895', 1),
(18, 'KOUAKANOU', 'Casanova', 'novakouak004@gmail.com', '62989895', 1),
(19, 'KOUAKANOU', 'Casanova', 'kouakanou.casanova@pigierbenin.com', '62989895', 0);

-- --------------------------------------------------------

--
-- Structure de la table `nom_table`
--

CREATE TABLE `nom_table` (
  `id` int(11) NOT NULL,
  `formation` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `entite` varchar(255) NOT NULL,
  `missions` text NOT NULL,
  `formation_precedente` enum('oui','non') NOT NULL,
  `formation_details` varchar(255) DEFAULT NULL,
  `demande_personnelle` enum('oui','non') NOT NULL,
  `difficultes` text DEFAULT NULL,
  `conseil` varchar(255) DEFAULT NULL,
  `objectifs` enum('oui','non') NOT NULL,
  `attentes` varchar(255) DEFAULT NULL,
  `autres_priorites` text DEFAULT NULL,
  `objectif1` varchar(255) NOT NULL,
  `objectif2` varchar(255) NOT NULL,
  `objectif3` varchar(255) NOT NULL,
  `cas_concrets` enum('oui','non') NOT NULL,
  `remarques` text DEFAULT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `canChange` tinyint(1) NOT NULL DEFAULT 0,
  `isChanged` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `nom_table`
--

INSERT INTO `nom_table` (`id`, `formation`, `nom`, `entite`, `missions`, `formation_precedente`, `formation_details`, `demande_personnelle`, `difficultes`, `conseil`, `objectifs`, `attentes`, `autres_priorites`, `objectif1`, `objectif2`, `objectif3`, `cas_concrets`, `remarques`, `telephone`, `email`, `canChange`, `isChanged`) VALUES
(1, 'nom', 'nklmlml', 'cedart', ',,,,,,ccccccc', 'oui', 'vvvvvvv', 'oui', 'Bonjour', 'vvvvvv', 'oui', '', 'vvvvvvvv', 'vvvvvvvv', 'vvvvvvvvvv', 'vvvvvvvvvvv', 'oui', 'vvvvvvvv', 'vvvvvvv', 'evaketcotonou@gmail.com', 1, 1),
(2, 'nom', ' ABADAGAN', 'cedart', 'n,,', 'oui', ',,;,;;;', 'oui', 'bbbb', 'bbnn,', 'oui', '', 'nkk;', 'bnn,n,', 'nn,', 'jkmll', 'oui', 'njkjkk', '+22996428718', 'cadjahoungbo@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nomP` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'admin',
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nomP`, `email`, `role`, `password`) VALUES
(1, 'Administrateur 1', 'admin@gmail.com', 'admin', 'password');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `campagne`
--
ALTER TABLE `campagne`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Index pour la table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `nom_table`
--
ALTER TABLE `nom_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `campagne`
--
ALTER TABLE `campagne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `nom_table`
--
ALTER TABLE `nom_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
