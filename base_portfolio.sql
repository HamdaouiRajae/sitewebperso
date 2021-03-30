-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Ven 25 Septembre 2020 à 17:58
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `aboutme`
--

CREATE TABLE IF NOT EXISTS `aboutme` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `filiere` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `residance` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `skype` varchar(20) NOT NULL,
  `discord` varchar(20) NOT NULL,
  `photo` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `aboutme`
--

INSERT INTO `aboutme` (`nom`, `prenom`, `filiere`, `age`, `residance`, `date_naissance`, `adresse`, `email`, `telephone`, `skype`, `discord`, `photo`) VALUES
('Hamdaoui ', 'Rajae', 'Software Engineering student', 21, 'oujda', '1999-09-23', ' Hay Bensaid Saddik ', 'hamdaouirajae99@gmail.com', ' 06-51-80-16-05', 'hamdaoui rajae', 'hamdaoui rajae', '');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `nom` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `commentaire` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`nom`, `email`, `commentaire`) VALUES
('jdaini', 'd.jdaini@gmail.com', 'commantaire'),
('hamdaoui', 'hamdaouirajae99@gmail.com', 'travail parfait');

-- --------------------------------------------------------

--
-- Structure de la table `design`
--

CREATE TABLE IF NOT EXISTS `design` (
  `intitule` varchar(25) NOT NULL,
  `details_design` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `design`
--

INSERT INTO `design` (`intitule`, `details_design`) VALUES
('Desing', 'I''m still learning design and develop services for customers of all sizes,specializing in creating stylish,modern websites .');

-- --------------------------------------------------------

--
-- Structure de la table `drawing`
--

CREATE TABLE IF NOT EXISTS `drawing` (
  `intitule` varchar(25) NOT NULL,
  `details_drawing` varchar(600) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `drawing`
--

INSERT INTO `drawing` (`intitule`, `details_drawing`) VALUES
('Drawing', 'Through drawing you can express various emotions, train of thoughts, and collective feelings. Drawing expands the option of an assorted communication field. Through drawing you can express what you feel, what you want, your perception.');

-- --------------------------------------------------------

--
-- Structure de la table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `intitule` varchar(25) NOT NULL,
  `details_music` varchar(600) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `music`
--

INSERT INTO `music` (`intitule`, `details_music`) VALUES
('Music', 'Whatever the emotion is that we need to feel, music can help to allow a person to sit back and just feel whatever is happening.');

-- --------------------------------------------------------

--
-- Structure de la table `photography`
--

CREATE TABLE IF NOT EXISTS `photography` (
  `intitule` varchar(25) NOT NULL,
  `details_photography` varchar(600) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `photography`
--

INSERT INTO `photography` (`intitule`, `details_photography`) VALUES
('Photography', 'Photography allows you to capture the beauty inside of a person that not everyone can find, capture, or cause its revelation.');

-- --------------------------------------------------------

--
-- Structure de la table `reading`
--

CREATE TABLE IF NOT EXISTS `reading` (
  `intitule` varchar(25) NOT NULL,
  `details_reading` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `reading`
--

INSERT INTO `reading` (`intitule`, `details_reading`) VALUES
('reading', 'William Styron wrote, “A great book should leave you with many experiences, and slightly exhausted at the end. You live several lives while reading".');

-- --------------------------------------------------------

--
-- Structure de la table `scolarite`
--

CREATE TABLE IF NOT EXISTS `scolarite` (
  `formation` varchar(300) NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `annee` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `scolarite`
--

INSERT INTO `scolarite` (`formation`, `lieu`, `annee`) VALUES
('baccalureat sciences physique', 'Lycee Laymoune', '2017'),
('Dut Genie civil', 'Ecole superieure de technolgie d oujda', '2019'),
('premiere annee du cycle ing Génie informatique', 'ECOLE NATIONAL DES SCIENCES APPLIQUEES OUJDA', '2019 A AUJOURD ''HUI');

-- --------------------------------------------------------

--
-- Structure de la table `skilss`
--

CREATE TABLE IF NOT EXISTS `skilss` (
  `web` varchar(500) NOT NULL,
  `poo` varchar(500) NOT NULL,
  `bd` varchar(500) NOT NULL,
  `autres` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `skilss`
--

INSERT INTO `skilss` (`web`, `poo`, `bd`, `autres`) VALUES
('Html5/css/php ', 'Java/Java Script ', 'SQL ', 'AutoCad/ArchiCad/Covadis/Robot');

-- --------------------------------------------------------

--
-- Structure de la table `traveling`
--

CREATE TABLE IF NOT EXISTS `traveling` (
  `intitule` varchar(25) NOT NULL,
  `details_traveling` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `traveling`
--

INSERT INTO `traveling` (`intitule`, `details_traveling`) VALUES
('Travelign', 'it helps open your mind. You realize that there’s no one way to live life. ');
