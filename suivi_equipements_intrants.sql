-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 27 mai 2018 à 20:38
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `suivi_equipements_intrants`
--

-- --------------------------------------------------------

--
-- Structure de la table `base_donnees_intrants_equipement`
--

CREATE TABLE `base_donnees_intrants_equipement` (
  `i` int(10) NOT NULL,
  `section` varchar(255) NOT NULL,
  `nature` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `caracteristique` varchar(255) NOT NULL,
  `quantite` varchar(20) NOT NULL,
  `date_livraison` text NOT NULL,
  `cout` varchar(20) NOT NULL,
  `beneficiaire` varchar(255) NOT NULL,
  `commune` varchar(255) NOT NULL,
  `zone_sanitaire` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `fonctionalite` varchar(255) NOT NULL,
  `amortissement` varchar(255) NOT NULL,
  `etat` int(2) NOT NULL DEFAULT '1' COMMENT '0 pour supp, 1 pour afficher'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `base_donnees_intrants_equipement`
--

INSERT INTO `base_donnees_intrants_equipement` (`i`, `section`, `nature`, `designation`, `caracteristique`, `quantite`, `date_livraison`, `cout`, `beneficiaire`, `commune`, `zone_sanitaire`, `departement`, `fonctionalite`, `amortissement`, `etat`) VALUES
(1, 'Suivie', 'Equipement roulant', 'Moto', 'Moto YamahaAG200', '3', '27/05/2018 19:36', '2', 'CS Adandokpodji', 'Abomey', 'Abomey-Djidja-Agbangnizoun', 'Alibori', 'Fonctionnel', 'Amorti', 1),
(2, 'REC', 'RÃ©actif', 'CongÃ©lateur', 'Motocycle Yamaha YBR 125 B', '120', '23/05/2018 14:50', '50', 'CS Hounto', 'Bohicon', 'Banikoara', 'Zou', 'RAS', 'Non Amorti', 1),
(3, 'Politique_Sociale', 'Intrants nutritionnels', 'Frigo', 'Toyota Hilux Pick up 4WD, DC, Diesel LHD', '18', '27/05/2018 19:43', '5', 'Bohicon 1', 'Zogbodomey', 'Banikoara', 'Zou', 'Non Fonctionnel', 'Amorti', 1),
(4, 'Education', 'RÃ©actif', 'Moto', 'En nombre de carton', '37', '23/05/2018 18:45', '15', 'CS Hounto', 'Bohicon', 'Portonovo-AguÃ©guÃ©-SÃ¨mÃ¨ Kpodji', 'Littorale', 'RAS', 'Amorti', 1),
(5, 'Suivie', 'Equipement mÃ©dico-technique', 'CongÃ©lateur', 'Toyota Hilux Pick up 4WD, DC, Diesel LHD', '94', '30/05/2018 14:45', '33', 'CS Zoukou', 'Porto Novo', 'Banikoara', 'Borgou', 'RAS', 'Non Amorti', 1),
(6, 'Protection', 'Chaine de froid', 'Frigo', 'Toyota Hilux Pick up 4WD, DC, Diesel LHD', '26', '27/05/2018 19:46', '16', 'CS Gnidjazoun', 'Banikoara', 'Kandi-Gog-SÃ©gbana', 'Plateau', 'Fonctionnel', 'Non Amorti', 1);

-- --------------------------------------------------------

--
-- Structure de la table `beneficiaire`
--

CREATE TABLE `beneficiaire` (
  `num` int(10) NOT NULL,
  `beneficiaire` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `beneficiaire`
--

INSERT INTO `beneficiaire` (`num`, `beneficiaire`) VALUES
(1, 'CS Adandokpodji'),
(2, 'CS Hounto'),
(3, 'CS Gnidjazoun'),
(4, 'CS Zoukou'),
(5, 'Bohicon 1');

-- --------------------------------------------------------

--
-- Structure de la table `caracteristique`
--

CREATE TABLE `caracteristique` (
  `num` int(10) NOT NULL,
  `caracteristique` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `caracteristique`
--

INSERT INTO `caracteristique` (`num`, `caracteristique`) VALUES
(1, 'Moto YamahaAG200'),
(2, 'Motocycle Yamaha YBR125 G'),
(3, 'Motocycle Yamaha YBR 125 B'),
(4, 'Toyota Hilux Pick up 4WD, DC, Diesel LHD'),
(5, 'En nombre de carton');

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

CREATE TABLE `commune` (
  `num` int(10) NOT NULL,
  `commune` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commune`
--

INSERT INTO `commune` (`num`, `commune`) VALUES
(1, 'Abomey'),
(2, 'Bohicon'),
(3, 'Zogbodomey'),
(4, 'Banikoara'),
(5, 'Porto Novo');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `num` int(10) NOT NULL,
  `departement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`num`, `departement`) VALUES
(1, 'Alibori'),
(2, 'Borgou'),
(3, 'Zou'),
(4, 'Plateau'),
(5, 'Littorale');

-- --------------------------------------------------------

--
-- Structure de la table `designation`
--

CREATE TABLE `designation` (
  `numdesign` int(10) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `designation`
--

INSERT INTO `designation` (`numdesign`, `designation`) VALUES
(1, 'Moto'),
(2, 'CongÃ©lateur'),
(3, 'Frigo'),
(4, 'VÃ©hicule'),
(5, 'Plumpy nut');

-- --------------------------------------------------------

--
-- Structure de la table `nature`
--

CREATE TABLE `nature` (
  `num` int(10) NOT NULL,
  `nature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `nature`
--

INSERT INTO `nature` (`num`, `nature`) VALUES
(1, 'Equipement roulant'),
(2, 'Chaine de froid'),
(3, 'Intrants nutritionnels'),
(4, 'RÃ©actif'),
(5, 'Equipement mÃ©dico-technique');

-- --------------------------------------------------------

--
-- Structure de la table `zone_sanitaire`
--

CREATE TABLE `zone_sanitaire` (
  `num` int(10) NOT NULL,
  `zone_sanitaire` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `zone_sanitaire`
--

INSERT INTO `zone_sanitaire` (`num`, `zone_sanitaire`) VALUES
(1, 'Abomey-Djidja-Agbangnizoun'),
(2, 'Bohicon-Zogbodomey-Zakpota'),
(3, 'Banikoara'),
(4, 'Kandi-Gog-SÃ©gbana'),
(5, 'Portonovo-AguÃ©guÃ©-SÃ¨mÃ¨ Kpodji');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `base_donnees_intrants_equipement`
--
ALTER TABLE `base_donnees_intrants_equipement`
  ADD PRIMARY KEY (`i`);

--
-- Index pour la table `beneficiaire`
--
ALTER TABLE `beneficiaire`
  ADD PRIMARY KEY (`num`);

--
-- Index pour la table `caracteristique`
--
ALTER TABLE `caracteristique`
  ADD PRIMARY KEY (`num`);

--
-- Index pour la table `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`num`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`num`);

--
-- Index pour la table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`numdesign`);

--
-- Index pour la table `nature`
--
ALTER TABLE `nature`
  ADD PRIMARY KEY (`num`);

--
-- Index pour la table `zone_sanitaire`
--
ALTER TABLE `zone_sanitaire`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `base_donnees_intrants_equipement`
--
ALTER TABLE `base_donnees_intrants_equipement`
  MODIFY `i` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `beneficiaire`
--
ALTER TABLE `beneficiaire`
  MODIFY `num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `caracteristique`
--
ALTER TABLE `caracteristique`
  MODIFY `num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `commune`
--
ALTER TABLE `commune`
  MODIFY `num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `designation`
--
ALTER TABLE `designation`
  MODIFY `numdesign` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `nature`
--
ALTER TABLE `nature`
  MODIFY `num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `zone_sanitaire`
--
ALTER TABLE `zone_sanitaire`
  MODIFY `num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
