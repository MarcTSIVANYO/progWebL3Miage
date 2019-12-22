-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 17 déc. 2019 à 12:05
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `messagerie_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `coc_admin`
--

DROP TABLE IF EXISTS `coc_admin`;
CREATE TABLE IF NOT EXISTS `coc_admin` (
  `COC_ADMIN_id` int(11) NOT NULL AUTO_INCREMENT,
  `COC_ADMIN_nom` varchar(45) NOT NULL,
  `COC_ADMIN_prenom` varchar(45) NOT NULL,
  `COC_ADMIN_tel` varchar(45) NOT NULL,
  `COC_ADMIN_statut` int(11) NOT NULL,
  `COC_ADMIN_correspondant` varchar(45) NOT NULL,
  `COC_USER_email` varchar(45) DEFAULT NULL,
  `COC_USER_id` int(11) DEFAULT NULL,
  `COC_ADMIN_file` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`COC_ADMIN_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `coc_admin`
--

INSERT INTO `coc_admin` (`COC_ADMIN_id`, `COC_ADMIN_nom`, `COC_ADMIN_prenom`, `COC_ADMIN_tel`, `COC_ADMIN_statut`, `COC_ADMIN_correspondant`, `COC_USER_email`, `COC_USER_id`, `COC_ADMIN_file`) VALUES
(1, 'TSIVANYO', 'Marc', '02.32.45.23.87', 1, 'Facturation', 'marctsivanyo@gmail.com', 1, 'admin-marc.jpg'),
(2, 'Isabelle', 'Clairout', '02.32.45.23.87', 1, 'Planification', NULL, 3, '3'),
(3, 'CAM', 'Michele', '02.32.45.23.87', 1, 'Support', NULL, 4, '4');

-- --------------------------------------------------------

--
-- Structure de la table `coc_apprenant`
--

DROP TABLE IF EXISTS `coc_apprenant`;
CREATE TABLE IF NOT EXISTS `coc_apprenant` (
  `COC_APPRENANT_id` int(11) NOT NULL AUTO_INCREMENT,
  `COC_APPRENANT_nom` varchar(45) NOT NULL,
  `COC_APPRENANT_prenom` varchar(45) NOT NULL,
  `COC_APPRENANT_email` varchar(45) NOT NULL,
  `COC_APPRENANT_motdepasse` varchar(45) NOT NULL,
  `COC_CLIENT_id` int(11) NOT NULL,
  PRIMARY KEY (`COC_APPRENANT_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `coc_apprenant`
--

INSERT INTO `coc_apprenant` (`COC_APPRENANT_id`, `COC_APPRENANT_nom`, `COC_APPRENANT_prenom`, `COC_APPRENANT_email`, `COC_APPRENANT_motdepasse`, `COC_CLIENT_id`) VALUES
(7, 'COLLEU', 'Aurore', 'louloutte@truc.fr', 'COL0218', 5);

-- --------------------------------------------------------

--
-- Structure de la table `coc_client`
--

DROP TABLE IF EXISTS `coc_client`;
CREATE TABLE IF NOT EXISTS `coc_client` (
  `COC_CLIENT_id` int(11) NOT NULL AUTO_INCREMENT,
  `COC_CLIENT_nom` varchar(45) NOT NULL,
  `COC_CLIENT_prenom` varchar(45) NOT NULL,
  `COC_CLIENT_nomcom` varchar(45) NOT NULL,
  `COC_CLIENT_tel` varchar(20) NOT NULL,
  `COC_CLIENT_adresse` varchar(45) NOT NULL,
  `COC_CLIENT_cp` varchar(10) NOT NULL,
  `COC_CLIENT_ville` varchar(45) CHARACTER SET utf16 NOT NULL,
  `COC_CLIENT_file` varchar(45) DEFAULT NULL,
  `COC_USER_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`COC_CLIENT_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `coc_client`
--

INSERT INTO `coc_client` (`COC_CLIENT_id`, `COC_CLIENT_nom`, `COC_CLIENT_prenom`, `COC_CLIENT_nomcom`, `COC_CLIENT_tel`, `COC_CLIENT_adresse`, `COC_CLIENT_cp`, `COC_CLIENT_ville`, `COC_CLIENT_file`, `COC_USER_id`) VALUES
(1, 'KASSAL', 'Rabeaa', 'UR1', '', '', '', '', '10.jpg', 2);

-- --------------------------------------------------------

--
-- Structure de la table `coc_support`
--

DROP TABLE IF EXISTS `coc_support`;
CREATE TABLE IF NOT EXISTS `coc_support` (
  `coc_support_id` int(11) NOT NULL AUTO_INCREMENT,
  `typeexp` varchar(20) NOT NULL,
  `typedesti` varchar(20) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statutexp` tinyint(1) NOT NULL DEFAULT '1',
  `statutdest` tinyint(1) NOT NULL DEFAULT '0',
  `file` varchar(50) DEFAULT NULL,
  `idexp` int(11) DEFAULT NULL,
  `iddest` int(11) DEFAULT NULL,
  PRIMARY KEY (`coc_support_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `coc_support`
--

INSERT INTO `coc_support` (`coc_support_id`, `typeexp`, `typedesti`, `messages`, `date`, `statutexp`, `statutdest`, `file`, `idexp`, `iddest`) VALUES
(27, 'CLIENT', 'Facturation', 'Bonjour service de facturation', '2019-11-04 19:44:40', 1, 0, NULL, 1, 1),
(28, 'Facturation', '1', 'Bonjour Marcel Dupond', '2019-11-04 19:45:03', 1, 0, NULL, 1, 1),
(29, 'CLIENT', 'Facturation', 'J\'ai remarquÃ© une erreur sur la facture dont j\'aimerais bien corriger!', '2019-11-04 19:45:47', 1, 0, NULL, 1, 1),
(30, 'Facturation', '1', 'Ok! A quel niveau?', '2019-11-04 19:46:03', 1, 0, NULL, 1, 1),
(31, 'Facturation', '1', 'Je suis Ã  votre Ã©coute!', '2019-11-04 19:46:38', 1, 0, NULL, 1, 1),
(32, 'CLIENT', 'Facturation', 'Merci, c\'est au niveau du montant total!', '2019-11-04 19:47:11', 1, 0, NULL, 1, 1),
(33, 'Facturation', '1', 'Ah vraimant! il ya une erreur. Nous sommes vraiment dÃ©solÃ©!', '2019-11-04 19:48:17', 1, 0, NULL, 1, 1),
(34, 'CLIENT', 'Facturation', 'Tkt! Fais moi le retour dÃ¨s que possible!', '2019-11-04 19:48:39', 1, 0, NULL, 1, 1),
(35, 'Facturation', '1', 'Ok. Merci ! A bientot!', '2019-11-04 19:49:05', 1, 0, NULL, 1, 1),
(36, 'CLIENT', 'Planification', 'Bonjour!', '2019-11-04 19:59:33', 1, 0, NULL, 1, 2),
(37, 'CLIENT', 'Support', 'Bonjour service technique', '2019-11-04 20:01:58', 1, 0, NULL, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `coc_support_copy1`
--

DROP TABLE IF EXISTS `coc_support_copy1`;
CREATE TABLE IF NOT EXISTS `coc_support_copy1` (
  `coc_support_id` int(11) NOT NULL AUTO_INCREMENT,
  `typeexp` varchar(20) NOT NULL,
  `typedesti` varchar(20) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statutexp` tinyint(1) NOT NULL DEFAULT '1',
  `statutdest` tinyint(1) NOT NULL DEFAULT '0',
  `file` varchar(50) DEFAULT NULL,
  `idexp` int(11) DEFAULT NULL,
  `iddest` int(11) DEFAULT NULL,
  PRIMARY KEY (`coc_support_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `coc_support_copy1`
--

INSERT INTO `coc_support_copy1` (`coc_support_id`, `typeexp`, `typedesti`, `messages`, `date`, `statutexp`, `statutdest`, `file`, `idexp`, `iddest`) VALUES
(1, 'Facturation', 'CLIENT', 'Tets for test', '2019-11-02 15:03:57', 1, 1, NULL, 1, 2),
(15, 'CLIENT', 'Facturation', 'Ceci est un message de test! efdf', '2019-11-04 08:35:31', 1, 0, NULL, 1, 1),
(16, 'CLIENT', 'Facturation', 'Ceci est un message de test! efdf', '2019-11-04 08:36:33', 1, 0, NULL, 1, 1),
(2, 'CLIENT', 'facturation', 'Denouncing pleasure and praising pain was born and I will give you a complete account.', '2019-11-03 14:52:56', 1, 1, NULL, 1, 1),
(6, 'ADMIN', 'Facturation', 'Ceci est un message de test!', '2019-11-03 14:51:17', 1, 0, NULL, 1, 1),
(5, 'CLIENT', 'Facturation', 'Denouncing pleasure and praising pain was born and I will give you a complete account.', '2019-11-03 14:27:20', 1, 0, NULL, 1, 1),
(7, 'Facturation', 'CLIENT', 'Denouncing pleasure and praising pain was born and I will give you a complete account.', '2019-11-03 14:35:00', 1, 0, NULL, 1, 1),
(8, 'Facturation', 'CLIENT', 'second test des test!', '2019-11-03 14:51:20', 1, 0, NULL, 1, 1),
(9, 'CLIENT', 'Facturation', 'J\'ai un soucis avec mon site web', '2019-11-03 14:38:40', 1, 0, NULL, 2, 1),
(10, 'CLIENT', 'Facturation', 'Oh, Denouncing pleasure and praising pain was born and I will give you a complete account.c\'est la reprise!', '2019-11-03 17:04:14', 1, 0, NULL, 1, 1),
(11, 'CLIENT', 'Facturation', 'Denouncing pleasure and praising pain was born and I will give you a complete account.', '2019-11-03 17:06:15', 1, 0, NULL, 1, 1),
(12, 'CLIENT', 'Facturation', 'Bonjour ! Merci', '2019-11-03 17:07:16', 1, 0, NULL, 1, 1),
(13, 'Facturation', 'CLIENT', 'Bonjour ! Merci Ã  tous!', '2019-11-03 17:18:55', 1, 0, NULL, 1, 1),
(14, 'Facturation', 'CLIENT', 'Paris, la capitale', '2019-11-03 23:55:33', 1, 0, NULL, 1, 1),
(17, 'CLIENT', 'Facturation', 'sddsdsd', '2019-11-04 08:39:53', 1, 0, NULL, 1, 1),
(18, 'CLIENT', 'Facturation', 'Recharge la page, Ã©quivalent au clic sur le bouton Actualiser la page du navigateur', '2019-11-04 09:09:28', 1, 0, NULL, 1, 1),
(19, 'CLIENT', 'Facturation', 'Recharge la page, Ã©quivalent au clic sur le bouton Actualiser la page du navigateur', '2019-11-04 09:09:35', 1, 0, NULL, 1, 1),
(20, 'CLIENT', 'Facturation', 'ssjsjds', '2019-11-04 16:52:54', 1, 0, NULL, 1, 1),
(21, 'CLIENT', 'Facturation', 'bonjksd', '2019-11-04 16:53:04', 1, 0, NULL, 1, 1),
(22, 'Facturation', 'CLIENT', 'JSKJSD', '2019-11-04 16:53:19', 1, 0, NULL, 1, 1),
(23, 'Facturation', '0', 'sfsdfsdf sfsdfs', '2019-11-04 19:22:04', 1, 0, NULL, 1, 1),
(24, 'Facturation', '0', 'Ceci est un test admin', '2019-11-04 19:22:24', 1, 0, NULL, 1, 1),
(25, 'Facturation', '0', 'Test admin js', '2019-11-04 19:23:19', 1, 0, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `coc_user`
--

DROP TABLE IF EXISTS `coc_user`;
CREATE TABLE IF NOT EXISTS `coc_user` (
  `COC_USER_id` int(11) NOT NULL AUTO_INCREMENT,
  `COC_USER_email` varchar(45) DEFAULT NULL,
  `COC_USER_motdepasse` varchar(45) DEFAULT NULL,
  `COC_USER_type` varchar(45) DEFAULT NULL,
  `COC_USER_status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`COC_USER_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `coc_user`
--

INSERT INTO `coc_user` (`COC_USER_id`, `COC_USER_email`, `COC_USER_motdepasse`, `COC_USER_type`, `COC_USER_status`) VALUES
(1, 'marctsivanyo@gmail.com', 'marc', 'ADMIN', '1'),
(2, 'rabeaakessal@gmail.com', 'rabeaa', 'CLIENT', '0'),
(3, 'isabelle@gmail.com', 'Isabelle', 'ADMIN', '0'),
(4, 'cam@gmail.com', 'CAM', 'ADMIN', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
