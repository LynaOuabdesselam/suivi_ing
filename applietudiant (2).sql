-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 17 fév. 2022 à 13:59
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `applietudiant`
--

-- --------------------------------------------------------

--
-- Structure de la table `drh`
--

CREATE TABLE `drh` (
  `idDrh` int(11) NOT NULL,
  `RadmCivil` text NOT NULL,
  `RadmQualite` text NOT NULL,
  `RadmNom` text NOT NULL,
  `RadmPrenom` text NOT NULL,
  `RadmTel` int(11) NOT NULL,
  `RadmFax` int(11) NOT NULL,
  `RadmMail` text NOT NULL,
  `idEntreprise` int(11) NOT NULL,
  `EtudiantNumero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `drh`
--

INSERT INTO `drh` (`idDrh`, `RadmCivil`, `RadmQualite`, `RadmNom`, `RadmPrenom`, `RadmTel`, `RadmFax`, `RadmMail`, `idEntreprise`, `EtudiantNumero`) VALUES
(1, 'Madame', 'DRH', 'Allouis', 'Marie-liesse', 182889709, 0, 'marie-liesse.allouis@avanade.com', 1, 11925709),
(2, 'Madame', 'DRH', 'Allouis', 'Marie-liesse', 182889709, 0, 'marie-liesse.allouis@avanade.com', 1, 11927317);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `idEntreprise` int(11) NOT NULL,
  `Ent` text NOT NULL,
  `EntNom` text NOT NULL,
  `EntUnite` text NOT NULL,
  `EntBatiment` text NOT NULL,
  `EntAdresse` text NOT NULL,
  `EntCP` int(11) NOT NULL,
  `EntVille` text NOT NULL,
  `EntPays` text NOT NULL,
  `EntActivite` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`idEntreprise`, `Ent`, `EntNom`, `EntUnite`, `EntBatiment`, `EntAdresse`, `EntCP`, `EntVille`, `EntPays`, `EntActivite`) VALUES
(1, 'Privée', 'Avanade', 'Pas d\''unité', 'Immeuble bords de seine', '3 Esp de foncet', 92130, 'Issy les moulineaux', 'France', 'Developpement et integrations des solutions technologiques et services');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `libelle` text NOT NULL DEFAULT 'TELECOM',
  `etat` text NOT NULL DEFAULT 'stage effectué',
  `StageAnnee` text NOT NULL DEFAULT '3ème',
  `TypeStage` text NOT NULL DEFAULT 'ingenieur',
  `EtudiantCivil` text NOT NULL,
  `EtudiantNumero` int(11) NOT NULL,
  `EtudiantNom` text NOT NULL,
  `EtudiantPrenom` text NOT NULL,
  `EtudiantDateNais` date NOT NULL,
  `EtudiantVilleNais` text NOT NULL,
  `EtudiantNation` text NOT NULL,
  `EtudiantMail` text NOT NULL,
  `EtudiantTel` int(11) NOT NULL,
  `EtudiantFax` int(11) NOT NULL,
  `EtudiantBatiment` int(11) NOT NULL,
  `EtudiantAdresse` text NOT NULL,
  `EtudiantCP` int(11) NOT NULL,
  `EtudiantVille` text NOT NULL,
  `EtudiantPays` text NOT NULL,
  `ContactUrgenceNom` text NOT NULL,
  `ContactUrgenceTel` int(11) NOT NULL,
  `AssuranceNom` text NOT NULL,
  `AssuranceNumero` int(11) NOT NULL,
  `AssuranceCaisse` text NOT NULL,
  `idStage` int(11) NOT NULL,
  `idTuteur` int(11) NOT NULL,
  `IdentifiantLabo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`libelle`, `etat`, `StageAnnee`, `TypeStage`, `EtudiantCivil`, `EtudiantNumero`, `EtudiantNom`, `EtudiantPrenom`, `EtudiantDateNais`, `EtudiantVilleNais`, `EtudiantNation`, `EtudiantMail`, `EtudiantTel`, `EtudiantFax`, `EtudiantBatiment`, `EtudiantAdresse`, `EtudiantCP`, `EtudiantVille`, `EtudiantPays`, `ContactUrgenceNom`, `ContactUrgenceTel`, `AssuranceNom`, `AssuranceNumero`, `AssuranceCaisse`, `idStage`, `idTuteur`, `IdentifiantLabo`) VALUES
('TELECOM', 'stage effectué', '3ème', 'ingenieur', 'Madame', 11925709, 'Ben cheikh', 'Makerem', '1996-06-21', 'Tunisie', 'Tunisienne', 'makerem.bencheikh@gmail.com', 666747857, 0, 0, '104 rue eugenie le guillernic', 94290, 'vlr', 'france', 'jalled', 635324741, 'Heyme', 58974631, 'CPAM', 0, 0, 0),
('TELECOM', 'stage effectué', '3ème', 'ingenieur', 'Madame', 11927317, 'Yahyaoui', 'Wejden', '1997-11-04', 'Tunisie', 'Tunisienne', 'yhywejden@gmail.com', 609865880, 0, 0, 'Cité universitaire', 75014, 'Paris', 'France', 'Ben Cheikh', 666747857, 'Heyme', 8888888, 'CPAM', 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE `stage` (
  `idStage` int(11) NOT NULL,
  `TrouveStage` text NOT NULL,
  `Duree` int(11) NOT NULL,
  `DureeUnite` text NOT NULL,
  `NombreDesHeures` int(11) NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `StagiaireTel` int(11) NOT NULL,
  `StagiaireFax` int(11) NOT NULL,
  `StagiaireMail` text NOT NULL,
  `StageTitre` text NOT NULL,
  `StageSujet` text NOT NULL,
  `StageHoraire` text NOT NULL,
  `ConfidRap` text NOT NULL,
  `ConfidSout` text NOT NULL,
  `StageGrat` int(11) NOT NULL,
  `NumeroEtudiant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stage`
--

INSERT INTO `stage` (`idStage`, `TrouveStage`, `Duree`, `DureeUnite`, `NombreDesHeures`, `DateDebut`, `DateFin`, `StagiaireTel`, `StagiaireFax`, `StagiaireMail`, `StageTitre`, `StageSujet`, `StageHoraire`, `ConfidRap`, `ConfidSout`, `StageGrat`, `NumeroEtudiant`) VALUES
(1, 'Linkedin', 26, 'semaines', 35, '2022-03-22', '2022-09-16', 666747857, 0, 'makerem.bencheikh@gmail.com', 'Stagiaire consultant Software Engineering', 'Dans le cadre de projets nationaux et/ou internationaux, vous serez amené(e)s à intervenir sur les missions suivantes :\r\n- Participation aux différentes phases d’un projet sur des applications métiers, mettant en œuvre les technologies C#, ASP.NET MVC, WPF, WCF, Xamarin, Microsoft Azure\r\n- Intervention en mode projet pour des clients grands comptes, de la phase d’analyse du cahier des charges et des spécifications techniques jusqu’aux phases de développement et de tests.\r\n- Participer au développement d’assets qui pourront être réutilisables par d’autres collaborateurs Avanade\r\n- Participer à la mise en œuvre de pipelines d’intégration et de déploiement continu.\r\n-Monter en compétences sur :\r\n  - Les technologies Microsoft.\r\n  - Le métier de développeurs : relation client, développement, tests et approfondir ses compétences techniques. \r\n  - Apprendre les qualités de consultant : communication, conseil, sens du service.\r\n  - Découvrir les fonctionnements d’une grande entreprise.', 'du lundi au vendredi de 9h30 à 17h30', 'oui', 'oui', 1400, 11925709);

-- --------------------------------------------------------

--
-- Structure de la table `tuteuracademique`
--

CREATE TABLE `tuteuracademique` (
  `IdentifiantLabo` int(11) NOT NULL,
  `IngCivil` text NOT NULL,
  `IngQualite` text NOT NULL,
  `IngNom` text NOT NULL,
  `IngPrenom` text NOT NULL,
  `IngTel` int(11) NOT NULL,
  `IngFax` int(11) NOT NULL,
  `IngMail` text NOT NULL,
  `EtudiantNumero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tuteuracademique`
--

INSERT INTO `tuteuracademique` (`IdentifiantLabo`, `IngCivil`, `IngQualite`, `IngNom`, `IngPrenom`, `IngTel`, `IngFax`, `IngMail`, `EtudiantNumero`) VALUES
(125, 'Monsieur', 'Responsable', 'Boussetta', 'Khaled', 20548796, 0, 'khaledboussetta@gmail.com', 0);

-- --------------------------------------------------------

--
-- Structure de la table `tuteurentreprise`
--

CREATE TABLE `tuteurentreprise` (
  `idTuteur` int(11) NOT NULL,
  `IngCivil` text NOT NULL,
  `IngQualite` text NOT NULL,
  `IngNom` text NOT NULL,
  `IngPrenom` text NOT NULL,
  `IngTel` int(11) NOT NULL,
  `IngFax` int(11) NOT NULL,
  `IngMail` text NOT NULL,
  `idEntreprise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tuteurentreprise`
--

INSERT INTO `tuteurentreprise` (`idTuteur`, `IngCivil`, `IngQualite`, `IngNom`, `IngPrenom`, `IngTel`, `IngFax`, `IngMail`, `idEntreprise`) VALUES
(1, 'Monsieur', 'Responsable', 'Kakpeyen', 'Arthur', 12569874, 0, 'xxx@gmail.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `code` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`iduser`, `name`, `email`, `password`, `code`, `status`) VALUES
(1, 'admin admin', 'admin@gmail.com', '$2y$10$olFTv7HUn6/IQ3q60igdQOA93nWIfA/kjeNjL/xRXvHOHFFOYT5Ny', 0, 'verified'),
(2, 'Makerem Ben Cheikh', 'mikeybch12@gmail.com', '$2y$10$yJOv5k5e8Fk7PhO3B9AHZeXW.gGbt/3yx2HsbZiaKOg6osn5VjQlC', 0, 'verified'),
(3, 'Makerem BEN CHEIKH', 'makerem.bencheikh@gmail.com', '$2y$10$KNGZEgfWmMbKzneOHUpRiOSbE2.W3U0ZSZqMYgHGnbkcmIzfpeGJO', 0, 'verified'),
(4, 'lyna', 'lyna@gmail.com', 'lyna', 0, 'verified');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `drh`
--
ALTER TABLE `drh`
  ADD PRIMARY KEY (`idDrh`),
  ADD KEY `idEntreprise` (`idEntreprise`),
  ADD KEY `EtudiantNumero` (`EtudiantNumero`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`idEntreprise`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`EtudiantNumero`),
  ADD KEY `idStage` (`idStage`);

--
-- Index pour la table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`idStage`),
  ADD KEY `NumeroEtudiant` (`NumeroEtudiant`);

--
-- Index pour la table `tuteuracademique`
--
ALTER TABLE `tuteuracademique`
  ADD PRIMARY KEY (`IdentifiantLabo`),
  ADD KEY `EtudiantNumero` (`EtudiantNumero`);

--
-- Index pour la table `tuteurentreprise`
--
ALTER TABLE `tuteurentreprise`
  ADD PRIMARY KEY (`idTuteur`),
  ADD KEY `idEntreprise` (`idEntreprise`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `drh`
--
ALTER TABLE `drh`
  MODIFY `idDrh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `stage`
--
ALTER TABLE `stage`
  MODIFY `idStage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tuteurentreprise`
--
ALTER TABLE `tuteurentreprise`
  MODIFY `idTuteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `drh`
--
ALTER TABLE `drh`
  ADD CONSTRAINT `drh_ibfk_1` FOREIGN KEY (`idEntreprise`) REFERENCES `entreprise` (`idEntreprise`),
  ADD CONSTRAINT `drh_ibfk_2` FOREIGN KEY (`EtudiantNumero`) REFERENCES `etudiant` (`EtudiantNumero`);

--
-- Contraintes pour la table `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `fk_numetudiant` FOREIGN KEY (`NumeroEtudiant`) REFERENCES `etudiant` (`EtudiantNumero`);

--
-- Contraintes pour la table `tuteurentreprise`
--
ALTER TABLE `tuteurentreprise`
  ADD CONSTRAINT `tuteurentreprise_ibfk_1` FOREIGN KEY (`idEntreprise`) REFERENCES `tuteurentreprise` (`idTuteur`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
