-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 15 Octobre 2022 à 16:13
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `epiceriebiologique`
--

-- --------------------------------------------------------

--
-- Structure de la table `articlesepicerie`
--

CREATE TABLE `articlesepicerie` (
  `id` int(3) NOT NULL,
  `article` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `idArticle` int(1) NOT NULL,
  `image_location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articlesepicerie`
--

INSERT INTO `articlesepicerie` (`id`, `article`, `prix`, `idArticle`, `image_location`) VALUES
(1, 'pomme', 0.99, 1, 'images/pommes.png'),
(2, 'fraise', 4.79, 1, 'images/fraises.png'),
(3, 'raisin', 5.49, 1, 'images/raisins.png'),
(4, 'poire', 1.69, 1, 'images/poires.png'),
(5, 'framboise', 4.99, 1, 'images/framboises.png'),
(6, 'carotte', 2.79, 2, 'images/carottes.png'),
(7, 'concombre', 1.39, 2, 'images/concombres.png'),
(8, 'pomme de terre', 5.59, 2, 'images/pommesdeterre.png'),
(9, 'radis', 1.99, 2, 'images/radis.png'),
(10, 'poivron', 3.69, 2, 'images/poivrons.png'),
(11, 'boeuf haché', 4.19, 3, 'images/boeufhache.png'),
(12, 'saucisse', 12.29, 3, 'images/saucisse.png'),
(13, 'poulet entier', 8.79, 3, 'images/poulet.png'),
(14, 'filet de porc', 7.99, 3, 'images/filetporc.png'),
(15, 'bacon', 6.59, 3, 'images/bacon.png'),
(16, 'pate italienne', 3.89, 4, 'images/pates.png'),
(17, 'confiture de fraises', 5.19, 4, 'images/confitures.png'),
(18, 'yogourt', 7.29, 4, 'images/yogourt.png'),
(19, 'brownies', 4.89, 4, 'images/brownie.png'),
(20, 'Risotto', 8.09, 4, 'images/risotto.png');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(4) NOT NULL,
  `courriel` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `commande` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `idarticle`
--

CREATE TABLE `idarticle` (
  `id` int(11) NOT NULL,
  `famille` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `idarticle`
--

INSERT INTO `idarticle` (`id`, `famille`) VALUES
(1, 'fruit'),
(2, 'legume'),
(3, 'viande'),
(4, 'pate');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUtilisateur` int(4) NOT NULL,
  `nom` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pseudo` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `courriel` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `nom`, `prenom`, `pseudo`, `courriel`, `password`, `admin`) VALUES
(1, NULL, NULL, NULL, 'root@root.com', '$2y$10$99BFexvCkPTyFv5EC00sFusyzl8nQG.WSjOryKMVtEjt59uz8XXLK', 1),
(2, NULL, NULL, NULL, '1234@1234.com', '$2y$10$lBHFXn35h4yURc.XUsdIPeSGpK64W74Mc6jfwLTz3DszUiYuTYtJa', 0),
(3, NULL, NULL, NULL, 'martin@martin.com', '$2y$10$7YEHDgQtQok5cX3TfiXBhOfYmGViv66PlSeXAW6p/t3POmT6440Gy', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articlesepicerie`
--
ALTER TABLE `articlesepicerie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `idarticle`
--
ALTER TABLE `idarticle`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articlesepicerie`
--
ALTER TABLE `articlesepicerie`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
