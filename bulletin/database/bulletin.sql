-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 26 mars 2021 à 14:57
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bulletin`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenants`
--

DROP TABLE IF EXISTS `apprenants`;
CREATE TABLE IF NOT EXISTS `apprenants` (
  `matricule_Apprenants` varchar(12) COLLATE utf8_bin NOT NULL,
  `Nom_Apprenants` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Prenom_Apprenants` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Email_Apprenants` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Date_Naissance_Apprenants` date DEFAULT NULL,
  `Adresse_Apprenants` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Num_tel_Apprenants` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `promotion_Apprenants` int(11) DEFAULT NULL,
  `code_Filieres` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`matricule_Apprenants`),
  KEY `FK_Apprenants_code_Filieres` (`code_Filieres`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `apprenants`
--

INSERT INTO `apprenants` (`matricule_Apprenants`, `Nom_Apprenants`, `Prenom_Apprenants`, `Email_Apprenants`, `Date_Naissance_Apprenants`, `Adresse_Apprenants`, `Num_tel_Apprenants`, `promotion_Apprenants`, `code_Filieres`) VALUES
('20281202019', 'Dieng', 'Mouhamadou Bachir', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DBE'),
('20282202019', 'SENE', 'Babacar', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DBE'),
('2236202019', 'SOW', 'Coumba', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DBE'),
('2237202019', 'LO', 'Abdou salam', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DBE'),
('2238202019', 'BALDE', 'Thierno_Hamidou', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DBE'),
('2239202019', 'MBAYE', 'Serigne Abdou Ahat Mbacke', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DBE'),
('2280202019', 'SALL', 'Massamba', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DBE'),
('2283202018', 'NDIAYE', 'El Hadj Yaya', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DFE'),
('2286202018', 'MBENGUE', 'Fatou', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DFE'),
('2287202018', 'NDIAYE', 'Mame Amy', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DFE'),
('2289202018', 'NIOME', 'Alioune', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DFE'),
('2290202018', 'WANE', 'Fatimata', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DFE'),
('2931202018', 'NGOM', 'Mouhamadou Lamine', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DFE'),
('913202018', 'DIEME', 'Lamine', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DFE'),
('914202018', 'BA', 'Mariama', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DFE'),
('924202018', 'DIA', 'Saer', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DFE'),
('925202018', 'DIALLO', 'Fatou', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DFE'),
('932202019', 'DIOP', 'Mamour', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DBE'),
('936202019', 'MBENGUE', 'Cheikh Akhmad Tidiane', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DBE'),
('937202019', 'Yade', 'Madike', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DBE'),
('938202019', 'Badji', 'Mouhamed', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DBE'),
('956202019', 'KANFANY', 'Emma Geo', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DBE'),
('957202019', 'FAM', 'Papa Magueye', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DBE'),
('959202019', 'SAMB', 'Ibrahima Khalilou lahi', 'e@isepdiamniadio.edu.sn', '2000-01-01', 'DAKAR', '778745378', 2020, 'TS-DBE');

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

DROP TABLE IF EXISTS `competences`;
CREATE TABLE IF NOT EXISTS `competences` (
  `code_Competences` varchar(12) COLLATE utf8_bin NOT NULL,
  `libelle_Competences` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`code_Competences`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`code_Competences`, `libelle_Competences`) VALUES
('C1', 'Creer les maquettes de l\'applicaton a realiser'),
('C10', 'Utiliser l \'outil informatique'),
('C13', 'Appliquer les techniques de prevention des atteintes a la sante , la securite et l\'environnement'),
('C14', 'Elaborer des rapports'),
('C2', 'Planifier les actions pour la realisation du besoin client');

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

DROP TABLE IF EXISTS `departements`;
CREATE TABLE IF NOT EXISTS `departements` (
  `code_Departements` varchar(12) COLLATE utf8_bin NOT NULL,
  `nom_Departements` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`code_Departements`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `departements`
--

INSERT INTO `departements` (`code_Departements`, `nom_Departements`) VALUES
('B1', 'TIC'),
('B2', 'AUTOMOBILE');

-- --------------------------------------------------------

--
-- Structure de la table `evaluer`
--

DROP TABLE IF EXISTS `evaluer`;
CREATE TABLE IF NOT EXISTS `evaluer` (
  `Matricule_Formateurs` varchar(12) COLLATE utf8_bin NOT NULL,
  `matricule_Apprenants` varchar(12) COLLATE utf8_bin NOT NULL,
  `code_uea` varchar(12) COLLATE utf8_bin NOT NULL,
  `code_Competences` varchar(12) COLLATE utf8_bin NOT NULL,
  `date_Evaluer` date NOT NULL,
  `note_Evaluer` int(2) NOT NULL,
  `note_Integration` int(11) NOT NULL,
  `semestre_Evaluer` varchar(12) COLLATE utf8_bin NOT NULL,
  `commentaire_Evaluer` varchar(50) COLLATE utf8_bin NOT NULL,
  KEY `fk_Matricule_Formateurs` (`Matricule_Formateurs`),
  KEY `fk_matricule_Apprenants` (`matricule_Apprenants`),
  KEY `fk_code_uea` (`code_uea`),
  KEY `fk_code_Competences` (`code_Competences`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `evaluer`
--

INSERT INTO `evaluer` (`Matricule_Formateurs`, `matricule_Apprenants`, `code_uea`, `code_Competences`, `date_Evaluer`, `note_Evaluer`, `note_Integration`, `semestre_Evaluer`, `commentaire_Evaluer`) VALUES
('rifforif', '20281202019', 'TSDFE-1', 'C10', '2021-11-26', 12, 12, '1', 'opjk'),
('toutca', '20281202019', 'TSDFE-74', 'C13', '2021-05-26', 14, 16, '1', 'ee'),
('toutca', '20281202019', 'TSDFE-7', 'C14', '2021-12-26', 14, 16, '1', 'd'),
('rifforif', '20282202019', 'TSDFE-2', 'C1', '2021-01-24', 12, 15, '1', 'good');

-- --------------------------------------------------------

--
-- Structure de la table `filieres`
--

DROP TABLE IF EXISTS `filieres`;
CREATE TABLE IF NOT EXISTS `filieres` (
  `code_Filieres` varchar(12) COLLATE utf8_bin NOT NULL,
  `libelle_Filieres` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `code_Departements` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`code_Filieres`),
  KEY `FK_Filieres_code_Departements` (`code_Departements`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `filieres`
--

INSERT INTO `filieres` (`code_Filieres`, `libelle_Filieres`, `code_Departements`) VALUES
('TS-ABD', 'Administration en Bases de Données', 'B1'),
('TS-APD', 'Analyse de Performance Digital', 'B1'),
('TS-CPA', 'Carrosserie et Peinture Automobile', 'B2'),
('TS-DBE', 'Développement Back-End', 'B1'),
('TS-DFE', 'Développement Front-End', 'B1'),
('TS-EEA', 'Electricité Automobile', 'B2'),
('TS-FCA', 'Froid et Climatisation Automobile', 'B2'),
('TS-GDE', 'Gestion des Données de l\'Entreprise', 'B1'),
('TS-MA', 'Mécanique Automobile', 'B2'),
('TS-RIOT', 'Réseaux Internet et Télécommunication', 'B1');

-- --------------------------------------------------------

--
-- Structure de la table `formateurs`
--

DROP TABLE IF EXISTS `formateurs`;
CREATE TABLE IF NOT EXISTS `formateurs` (
  `Matricule_Formateurs` varchar(12) COLLATE utf8_bin NOT NULL,
  `Nom_Formateurs` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Prenom_Formateurs` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Email_Formateurs` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Num_tel_Formateurs` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `Adresse_Formateurs` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `code_Departements` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`Matricule_Formateurs`),
  KEY `FK_Formateurs_code_Departements` (`code_Departements`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `formateurs`
--

INSERT INTO `formateurs` (`Matricule_Formateurs`, `Nom_Formateurs`, `Prenom_Formateurs`, `Email_Formateurs`, `Num_tel_Formateurs`, `Adresse_Formateurs`, `code_Departements`) VALUES
('rifforif', 'Ndiaye', 'Cheikh Ahmed Tidiane Cherif', 'chtc.ndiaye@isepdiamniadio.edu.sn', '776547898', 'Cité elisabeth', 'B1'),
('toutca', 'Mbaye', 'Abdoulaye', 'abdoulaye10mbaye@ucad.edu.sn', '778890909', 'DAKAR', 'B1');

-- --------------------------------------------------------

--
-- Structure de la table `uea`
--

DROP TABLE IF EXISTS `uea`;
CREATE TABLE IF NOT EXISTS `uea` (
  `code_uea` varchar(12) COLLATE utf8_bin NOT NULL,
  `libelle_uea` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `code_Competences` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `coeff_uea` int(11) NOT NULL,
  PRIMARY KEY (`code_uea`),
  KEY `FK_uea_code_Competences` (`code_Competences`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `uea`
--

INSERT INTO `uea` (`code_uea`, `libelle_uea`, `code_Competences`, `coeff_uea`) VALUES
('TSDFE-1', 'Maths', 'C10', 2),
('TSDFE-18', 'UML', 'C2', 2),
('TSDFE-2', 'Developpement 1', 'C1', 3),
('TSDFE-7', 'PPP', 'C14', 6),
('TSDFE-74', 'ANGULAR', 'C13', 9);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Matricule_Formateurs` varchar(12) COLLATE utf8_bin NOT NULL,
  `passwrd` varchar(12) COLLATE utf8_bin NOT NULL,
  KEY `FK_users_Matricule_Formateurs` (`Matricule_Formateurs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Matricule_Formateurs`, `passwrd`) VALUES
('rifforif', 'admin'),
('toutca', 'admin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `apprenants`
--
ALTER TABLE `apprenants`
  ADD CONSTRAINT `FK_Apprenants_code_Filieres` FOREIGN KEY (`code_Filieres`) REFERENCES `filieres` (`code_Filieres`);

--
-- Contraintes pour la table `evaluer`
--
ALTER TABLE `evaluer`
  ADD CONSTRAINT `fk_Matricule_Formateurs` FOREIGN KEY (`Matricule_Formateurs`) REFERENCES `formateurs` (`Matricule_Formateurs`),
  ADD CONSTRAINT `fk_code_Competences` FOREIGN KEY (`code_Competences`) REFERENCES `competences` (`code_Competences`),
  ADD CONSTRAINT `fk_code_uea` FOREIGN KEY (`code_uea`) REFERENCES `uea` (`code_uea`),
  ADD CONSTRAINT `fk_matricule_Apprenants` FOREIGN KEY (`matricule_Apprenants`) REFERENCES `apprenants` (`matricule_Apprenants`);

--
-- Contraintes pour la table `filieres`
--
ALTER TABLE `filieres`
  ADD CONSTRAINT `FK_Filieres_code_Departements` FOREIGN KEY (`code_Departements`) REFERENCES `departements` (`code_Departements`);

--
-- Contraintes pour la table `formateurs`
--
ALTER TABLE `formateurs`
  ADD CONSTRAINT `FK_Formateurs_code_Departements` FOREIGN KEY (`code_Departements`) REFERENCES `departements` (`code_Departements`);

--
-- Contraintes pour la table `uea`
--
ALTER TABLE `uea`
  ADD CONSTRAINT `FK_uea_code_Competences` FOREIGN KEY (`code_Competences`) REFERENCES `competences` (`code_Competences`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_Matricule_Formateurs` FOREIGN KEY (`Matricule_Formateurs`) REFERENCES `formateurs` (`Matricule_Formateurs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
