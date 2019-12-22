--
-- Structure de la table `coc_apprenant`
--

CREATE TABLE IF NOT EXISTS `coc_apprenant` (
  `COC_APPRENANT_id` int(11) NOT NULL AUTO_INCREMENT,
  `COC_APPRENANT_nom` varchar(45) NOT NULL,
  `COC_APPRENANT_prenom` varchar(45) NOT NULL,
  `COC_APPRENANT_email` varchar(45) NOT NULL,
  `COC_APPRENANT_motdepasse` varchar(45) NOT NULL,
  `COC_CLIENT_id` int(11) NOT NULL,
  PRIMARY KEY (`COC_APPRENANT_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=73 ;

--
-- Contenu de la table `coc_apprenant`
--

INSERT INTO `coc_apprenant` (`COC_APPRENANT_id`, `COC_APPRENANT_nom`, `COC_APPRENANT_prenom`, `COC_APPRENANT_email`, `COC_APPRENANT_motdepasse`, `COC_CLIENT_id`) VALUES
(7, 'COLLEU', 'Aurore', 'louloutte@truc.fr', 'COL0218', 5);

-- --------------------------------------------------------

--
-- Structure de la table `coc_client`
--

CREATE TABLE IF NOT EXISTS `coc_client` (
  `COC_CLIENT_id` int(11) NOT NULL AUTO_INCREMENT,
  `COC_CLIENT_nom` varchar(45) NOT NULL,
  `COC_CLIENT_prenom` varchar(45) NOT NULL,
  `COC_CLIENT_email` varchar(45) NOT NULL,
  `COC_CLIENT_motdepasse` varchar(45) NOT NULL,
  `COC_CLIENT_statut` varchar(20) NOT NULL DEFAULT 'actif',
  `COC_CLIENT_nomcom` varchar(45) NOT NULL,
  `COC_CLIENT_tel` varchar(20) NOT NULL,
  `COC_CLIENT_adresse` varchar(45) NOT NULL,
  `COC_CLIENT_cp` varchar(10) NOT NULL,
  `COC_CLIENT_ville` varchar(45) NOT NULL,
  PRIMARY KEY (`COC_CLIENT_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=434 ;

--
-- Contenu de la table `coc_client`
--

INSERT INTO `coc_client` (`COC_CLIENT_id`, `COC_CLIENT_nom`, `COC_CLIENT_prenom`, `COC_CLIENT_email`, `COC_CLIENT_motdepasse`, `COC_CLIENT_statut`, `COC_CLIENT_nomcom`, `COC_CLIENT_tel`, `COC_CLIENT_adresse`, `COC_CLIENT_cp`, `COC_CLIENT_ville`) VALUES
(1, 'Dupond', 'Marcel', 'test@test.com', 'monpass', 'actif', 'UR1', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



--
-- Structure de la table `coc_apprenant`
--

CREATE TABLE IF NOT EXISTS `coc_admin` (
  `COC_ADMIN_id` int(11) NOT NULL AUTO_INCREMENT,
  `COC_ADMIN_nom` varchar(45) NOT NULL,
  `COC_ADMIN_prenom` varchar(45) NOT NULL,
  `COC_ADMIN_email` varchar(45) NOT NULL,
  `COC_ADMIN_motdepasse` varchar(45) NOT NULL,
  `COC_ADMIN_statut` int(11) NOT NULL,
  `COC_ADMIN_correspondant` varchar(45) NOT NULL,
  PRIMARY KEY (`COC_ADMIN_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=73 ;