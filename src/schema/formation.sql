-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 04 Mars 2018 à 01:49
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `formation`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `niveau` varchar(50) NOT NULL,
  `domaine` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `dateNaiss` varchar(50) NOT NULL,
  `lieuNaiss` varchar(50) NOT NULL,
  `paysNaiss` varchar(50) NOT NULL,
  `paysResid` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `statut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `niveau`, `domaine`, `nom`, `prenom`, `sexe`, `dateNaiss`, `lieuNaiss`, `paysNaiss`, `paysResid`, `adresse`, `phone`, `mail`, `statut`) VALUES
(7, 'Licence 1', 'Administration', 'KossorÃ©', 'Doudou', 'feminin', '2018-03-03', 'Dakar', 'Senegal', 'Senegal', 'Grand Yoff', '782485580', 'doukoss@gmail.com', 'celibataire'),
(8, 'Licence 1', 'WebMaster', 'FALL', 'MarÃ¨me', 'feminin', '2000-01-26', 'Dakar', 'Senegal', 'Senegal', 'Grand Yoff', '771877187', 'remafall@gmail.com', 'celibataire'),
(9, 'Licence 1', 'WebMaster', 'FALL', 'MarÃ¨me', 'feminin', '2000-01-26', 'Dakar', 'Senegal', 'Senegal', 'Grand Yoff', '771877187', 'remafall@gmail.com', 'celibataire'),
(10, 'Licence 1', 'WebMaster', 'FALL', 'MarÃ¨me', 'feminin', '2000-01-26', 'Dakar', 'Senegal', 'Senegal', 'Grand Yoff', '771877187', 'remafall@gmail.com', 'celibataire'),
(11, 'Licence 1', 'WebMaster', 'FALL', 'MarÃ¨me', 'feminin', '2000-01-26', 'Dakar', 'Senegal', 'Senegal', 'Grand Yoff', '771877187', 'remafall@gmail.com', 'celibataire'),
(12, 'Licence 2', 'BDD', 'fgfdgf', 'fgfgf', 'feminin', '2018-02-07', 'dhdfghdf', 'Cameroun', 'Cameroun', 'dfgfdg', '56686345345', 'fdgdgd@dfgdfg.com', 'celibataire'),
(13, 'Master 2', 'Infographie', 'fgdfgdf', 'fgdfgdf', 'feminin', '2005-05-20', 'fghdfg', 'Cote d''Ivoire', 'Maroc', 'jfjgf', '1225555555', 'jyf@jftft.cpm', 'celibataire');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
