-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 17 oct. 2019 à 19:32
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ges_rdv`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `pseudo` varchar(10) NOT NULL,
  `mdp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id_admin`, `pseudo`, `mdp`) VALUES
(1, 'cheikh', '0009');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `mat_medecin` int(11) NOT NULL,
  `prenom_med` varchar(50) NOT NULL,
  `nom_med` varchar(50) NOT NULL,
  `dn_med` date NOT NULL,
  `pseudo_med` varchar(100) NOT NULL,
  `mdp_med` text NOT NULL,
  `id_specialite` int(11) NOT NULL,
  `id_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `mat_patient` int(11) NOT NULL,
  `prenom_pat` varchar(50) NOT NULL,
  `nom_pat` varchar(50) NOT NULL,
  `adresse_pat` varchar(50) NOT NULL,
  `date_n` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `planning`
--

CREATE TABLE `planning` (
  `numero_p` int(11) NOT NULL,
  `jour` date NOT NULL,
  `heure` time NOT NULL,
  `mat_medecin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `numero_rv` int(11) NOT NULL,
  `date_rv` date NOT NULL,
  `heure_rv` time NOT NULL,
  `mat_patient` int(11) NOT NULL,
  `mat_medecin` int(11) NOT NULL,
  `mat_secretaire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `secretaire`
--

CREATE TABLE `secretaire` (
  `mat_secretaire` int(11) NOT NULL,
  `prenom_sec` varchar(50) NOT NULL,
  `nom_sec` varchar(50) NOT NULL,
  `dn_sec` date NOT NULL,
  `pseudo_sec` varchar(100) NOT NULL,
  `mdp_sec` text NOT NULL,
  `id_secretariat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `secretariat`
--

CREATE TABLE `secretariat` (
  `id_secretariat` int(11) NOT NULL,
  `nom_secretariat` varchar(50) NOT NULL,
  `id_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id_service` int(11) NOT NULL,
  `nom_serv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `id_specialite` int(11) NOT NULL,
  `nom_sp` varchar(50) NOT NULL,
  `id_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins` ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`mat_medecin`),
  ADD KEY `id_specialite` (`id_specialite`,`id_service`),
  ADD KEY `id_service` (`id_service`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient` ADD PRIMARY KEY (`mat_patient`);

--
-- Index pour la table `planning`
--
ALTER TABLE `planning`
  ADD PRIMARY KEY (`numero_p`),
  ADD KEY `mat_medecin` (`mat_medecin`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`numero_rv`),
  ADD KEY `mat_patient` (`mat_patient`,`mat_medecin`,`mat_secretaire`),
  ADD KEY `mat_secretaire` (`mat_secretaire`),
  ADD KEY `mat_medecin` (`mat_medecin`);

--
-- Index pour la table `secretaire`
--
ALTER TABLE `secretaire`
  ADD PRIMARY KEY (`mat_secretaire`),
  ADD KEY `id_secretariat` (`id_secretariat`);

--
-- Index pour la table `secretariat`
--
ALTER TABLE `secretariat`
  ADD PRIMARY KEY (`id_secretariat`),
  ADD KEY `id_service` (`id_service`);

--
-- Index pour la table `services`
--
ALTER TABLE `services` ADD PRIMARY KEY (`id_service`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`id_specialite`),
  ADD KEY `id_service` (`id_service`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `mat_medecin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `mat_patient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `planning`
--
ALTER TABLE `planning`
  MODIFY `numero_p` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `numero_rv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `secretaire`
--
ALTER TABLE `secretaire`
  MODIFY `mat_secretaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `secretariat`
--
ALTER TABLE `secretariat`
  MODIFY `id_secretariat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `id_specialite` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD CONSTRAINT `medecin_ibfk_1` FOREIGN KEY (`id_specialite`) REFERENCES `specialite` (`id_specialite`),
  ADD CONSTRAINT `medecin_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `services` (`id_service`);

--
-- Contraintes pour la table `planning`
--
ALTER TABLE `planning`
  ADD CONSTRAINT `planning_ibfk_1` FOREIGN KEY (`mat_medecin`) REFERENCES `medecin` (`mat_medecin`);

--
-- Contraintes pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `rdv_ibfk_1` FOREIGN KEY (`mat_secretaire`) REFERENCES `secretaire` (`mat_secretaire`),
  ADD CONSTRAINT `rdv_ibfk_2` FOREIGN KEY (`mat_medecin`) REFERENCES `medecin` (`mat_medecin`),
  ADD CONSTRAINT `rdv_ibfk_3` FOREIGN KEY (`mat_patient`) REFERENCES `patient` (`mat_patient`);

--
-- Contraintes pour la table `secretaire`
--
ALTER TABLE `secretaire`
  ADD CONSTRAINT `secretaire_ibfk_1` FOREIGN KEY (`id_secretariat`) REFERENCES `secretariat` (`id_secretariat`);

--
-- Contraintes pour la table `secretariat`
--
ALTER TABLE `secretariat`
  ADD CONSTRAINT `secretariat_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `services` (`id_service`);

--
-- Contraintes pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD CONSTRAINT `specialite_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `services` (`id_service`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
