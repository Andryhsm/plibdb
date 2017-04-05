-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 05 Avril 2017 à 10:14
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
-- Structure de la table `liste_demande`
--

CREATE TABLE `oulib_liste_demande` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `emailI` varchar(255) NOT NULL,
  `nomP` varchar(255) NOT NULL,
  `prenomP` varchar(255) NOT NULL,
  `telP` varchar(255) NOT NULL,
  `typeSoinP` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `frequenceSoin` varchar(255) NOT NULL,
  `status` enum('attente','accepter','refuser','terminer') NOT NULL,
  `emailP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `liste_demande`
--

INSERT INTO `oulib_liste_demande` (`id`, `photo`, `emailI`, `nomP`, `prenomP`, `telP`, `typeSoinP`, `commentaire`, `date`, `frequenceSoin`, `status`, `emailP`) VALUES
(143, '', 'ahly@medsoft-sante.fr', 'Feno', 'Tolojanahary', '304003', 'Cicatrisation - Stomarhérapie - Sondage - ', 'gh dfhd hdfh dfh df hdf hd fh dfh df df d', '14h - 10h -  - ', '2 - 2 -  -  - ', 'accepter', 'feno@gmail.com'),
(144, '', 'ahly@medsoft-sante.fr', 'stian', 'andry', '346448609', 'Perfusion - Cicatrisation -  - ', '', '12h', '', 'accepter', 'rt@gmail.com'),
(145, '', 'ahly@medsoft-sante.fr', 'stian', 'andry', '346448609', 'Perfusion - Cicatrisation -  - ', '', '12h - 42h -  - ', '1 - 1 -  -  - ', 'accepter', 'rt@gmail.com'),
(146, '', 'rt@gmail.com', 'stian', 'andry', '346448609', 'Perfusion - Cicatrisation -  - ', '', '12h - 42h -  - ', '1 - 1 -  -  - ', 'attente', 'rt@gmail.com'),
(147, '', 'ahly@medsoft-sante.fr', 'Feno', 'Tolojanahary', '304003', 'Cicatrisation - Stomarhérapie - Sondage - ', '', '14h - 10h -  - ', '2 - 2 -  -  - ', 'accepter', 'feno@gmail.com'),
(148, '', 'ahly@medsoft-sante.fr', 'Feno', 'Tolojanahary', '304003', 'Cicatrisation - Stomarhérapie - Sondage - ', '', '14h - 10h -  - ', '2 - 2 -  -  - ', 'accepter', 'feno@gmail.com'),
(149, '', 'ahly@medsoft-sante.fr', 'stian', 'andry', '346448609', 'Perfusion - Cicatrisation -  - ', '', '12h - 42h -  - ', '1 - 1 -  -  - ', 'accepter', 'rt@gmail.com'),
(150, '', 'ahly@medsoft-sante.fr', 'Feno', 'Tolojanahary', '304003', 'Cicatrisation - Stomarhérapie - Sondage - ', '', '14h - 10h -  - ', '2 - 2 -  -  - ', 'accepter', 'feno@gmail.com'),
(176, 'fond.jpg', 'ahly@medsoft-sante.fr', 'Feno', 'Tolojanahary', '304003', 'Cicatrisation - StomarhÃ©rapie - Sondage', 'dffdfd', '14h - 10h', '2 - 2', 'attente', 'feno@gmail.com'),
(177, 'fond.jpg', 'ahly@medsoft-sante.fr', 'Feno', 'Tolojanahary', '304003', 'Cicatrisation - StomarhÃ©rapie - Sondage', 'dffdfd', '14h - 10h', '2 - 2', 'attente', 'feno@gmail.com'),
(178, 'fond.jpg', 'ahly@medsoft-sante.fr', 'Feno', 'Tolojanahary', '304003', 'Cicatrisation - StomarhÃ©rapie - Sondage', 'dffdfd', '14h - 10h', '2 - 2', 'attente', 'feno@gmail.com'),
(179, 'fond.jpg', '\"email\"', 'Feno', 'Tolojanahary', '304003', 'Cicatrisation - StomarhÃ©rapie - Sondage', '\"I a commentaire\"', '14h - 10h', '2 - 2', 'attente', 'feno@gmail.com'),
(180, 'fond.jpg', 'ahly@medsoft-sante.fr', 'Feno', 'Tolojanahary', '304003', 'Cicatrisation - StomarhÃ©rapie - Sondage', 'fdfdfd', '14h - 10h', '2 - 2', 'attente', 'feno@gmail.com'),
(181, 'fond.jpg', 'ahly@medsoft-sante.fr', 'Feno', 'Tolojanahary', '304003', 'Cicatrisation - StomarhÃ©rapie - Sondage', 'fdfdfdfdfdfd', '14h - 10h', '2 - 2', 'attente', 'feno@gmail.com');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `liste_demande`
--
ALTER TABLE `oulib_liste_demande`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `liste_demande`
--
ALTER TABLE `oulib_liste_demande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
