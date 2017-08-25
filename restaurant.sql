-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 25 Août 2017 à 12:13
-- Version du serveur :  5.5.55-0+deb8u1
-- Version de PHP :  5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `jointure_plat_menu`
--

CREATE TABLE IF NOT EXISTS `jointure_plat_menu` (
`id` int(11) NOT NULL,
  `id_plat` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `jointure_plat_menu`
--

INSERT INTO `jointure_plat_menu` (`id`, `id_plat`, `id_menu`) VALUES
(119, 97, 199),
(120, 117, 199),
(123, 97, 205),
(124, 117, 205),
(126, 97, 206),
(127, 152, 206),
(128, 153, 206),
(129, 148, 207),
(130, 149, 207),
(131, 148, 208),
(132, 149, 208),
(133, 148, 209),
(134, 149, 209),
(135, 148, 210),
(136, 149, 210),
(137, 148, 211),
(138, 149, 211),
(139, 148, 212),
(140, 149, 212),
(141, 148, 213),
(142, 149, 213),
(143, 167, 216);

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `nom` varchar(225) NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=217 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `nom`, `prix`) VALUES
(189, 'menu enfants', 6),
(199, 'menu gastro', 150),
(201, 'Steack haché et frites', 150),
(202, 'Steack haché et frites', 5),
(203, 'Steack haché et frites', 5),
(204, 'Steack haché et frites', 5),
(205, 'menu gastro', 400),
(206, 'menu gastro', 10),
(207, 'menu enfants', 4),
(208, 'menu enfants', 4),
(209, 'menu enfants', 4),
(210, 'menu enfants', 4),
(211, 'menu enfants', 4),
(212, 'menu enfants', 4),
(213, 'menu enfants', 4),
(214, 'menu enfants', 10),
(215, 'glaces', 10),
(216, 'Chocolat du Pérou', 10);

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE IF NOT EXISTS `plat` (
`id` int(11) NOT NULL,
  `nom` varchar(225) NOT NULL,
  `prix` double NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `plat`
--

INSERT INTO `plat` (`id`, `nom`, `prix`, `image`) VALUES
(97, 'Caviar Oscietre', 150, 'caviar.jpg'),
(117, 'Chocolat du Pérou', 15, 'choco.jpg'),
(148, 'Steack haché et frites', 5, ''),
(149, 'Jambon blanc et pâtes', 5, ''),
(152, 'Canard Challandais', 5, ''),
(153, 'Bar de ligne', 5, ''),
(164, 'Steack haché et frites', 10, ''),
(165, 'Chocolat du Pérou', 5, ''),
(167, 'Chocolat du Pérou', 90, ''),
(172, 'Steack haché et frites', 7, '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `jointure_plat_menu`
--
ALTER TABLE `jointure_plat_menu`
 ADD PRIMARY KEY (`id`), ADD KEY `id_plat` (`id_plat`), ADD KEY `id_menu` (`id_menu`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `plat`
--
ALTER TABLE `plat`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `jointure_plat_menu`
--
ALTER TABLE `jointure_plat_menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=217;
--
-- AUTO_INCREMENT pour la table `plat`
--
ALTER TABLE `plat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=173;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `jointure_plat_menu`
--
ALTER TABLE `jointure_plat_menu`
ADD CONSTRAINT `jointure_plat_menu_ibfk_1` FOREIGN KEY (`id_plat`) REFERENCES `plat` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `jointure_plat_menu_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
