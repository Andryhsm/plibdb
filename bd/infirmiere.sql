-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 05 Avril 2017 à 14:28
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ouinflib`
--

-- --------------------------------------------------------

--
-- Structure de la table `infirmiere`
--

CREATE TABLE `oulib_infirmiere` (
  `id` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `nomI` varchar(30) NOT NULL,
  `prenomI` varchar(40) NOT NULL,
  `emailI` varchar(40) NOT NULL,
  `mdpI` varchar(50) NOT NULL,
  `telI` int(11) NOT NULL,
  `rueI` varchar(100) NOT NULL,
  `code-postalI` int(11) NOT NULL,
  `villeI` varchar(50) NOT NULL,
  `type-soinI1` varchar(20) NOT NULL,
  `type-soinI2` varchar(20) NOT NULL,
  `type-soinI3` varchar(20) NOT NULL,
  `type-soinI4` varchar(20) NOT NULL,
  `lieu-intervention` varchar(40) NOT NULL,
  `latLng` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `infirmiere`
--

INSERT INTO `oulib_infirmiere` (`id`, `photo`, `nomI`, `prenomI`, `emailI`, `mdpI`, `telI`, `rueI`, `code-postalI`, `villeI`, `type-soinI1`, `type-soinI2`, `type-soinI3`, `type-soinI4`, `lieu-intervention`, `latLng`) VALUES
(11, 'Photo-de-moi-1.png', 'AHLY', 'Thierry', 'ahly@medsoft-sante.fr', 'f', 63298934, 'dd', 12, 'fg', 'Cicatrisation', '', '', '', 'Tsenakely', '(17.314269, 27.931581)'),
(9, 'user.png', 'sdf', 'st', 'andrinirina@gmail.com', 'd', 15, '15', 15, '15', 'Cicatrisation', 'StomarhÃ©rapie', 'Perfusion', 'Sondage', 'sdf', '(-17.488916, 47.014846)'),
(12, 'nurse-male-dark-256.png', 'liva', 'Ndrema', 'liva@gmail.com', '1', 32, '32', 32, '32', 'Cicatrisation', 'Stomarhérapie', 'Perfusion', 'Sondage', '', ''),
(13, 'avatar_inf.jpg', '', '', '', '', 0, 'jean Ralaimongo', 110, 'Antsirabe', '', '', '', '', '', ''),
(14, 'depositphotos-40027001-stock-photo-mobile-phone-3d', 'RAPANOELA', 'rija', 'rija@gmail.com', 'r', 349090292, '', 110, 'Antsirabe', 'Cicatrisation', '', '', '', 'Antsirabe', '(-19.8672089, 47.035806200000025)'),
(15, '52813654-personnage-de-dessin-anim-homme-d-affaire', 'REGE', 'ndrema', 'ndrema@gmail.com', 'n', 2147483647, 'ambohimena', 110, 'antsirabe', 'Cicatrisation', 'Stomarhérapie', 'Perfusion', '', 'tananarive', '(-19.88697, 47.040098899999975)');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `infirmiere`
--
ALTER TABLE `oulib_infirmiere`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailI` (`emailI`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `infirmiere`
--
ALTER TABLE `oulib_infirmiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
