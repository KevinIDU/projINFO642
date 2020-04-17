-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 17, 2020 at 09:33 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestioncommande`
--

-- --------------------------------------------------------

--
-- Table structure for table `demande_equipement`
--

DROP TABLE IF EXISTS `demande_equipement`;
CREATE TABLE IF NOT EXISTS `demande_equipement` (
  `id_demande_equipement` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `devis` blob NOT NULL,
  `état` varchar(255) NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  `id_sevice_technique` int(11) NOT NULL,
  `id_service_technique` int(11) NOT NULL,
  PRIMARY KEY (`id_demande_equipement`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `demande_travaux`
--

DROP TABLE IF EXISTS `demande_travaux`;
CREATE TABLE IF NOT EXISTS `demande_travaux` (
  `id_demande_travaux` int(11) NOT NULL AUTO_INCREMENT,
  `état` varchar(255) NOT NULL,
  PRIMARY KEY (`id_demande_travaux`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `id_enseigant` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `departemnt` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_enseigant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id_etudiant` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `classe` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_demande_equipement` int(11) NOT NULL,
  PRIMARY KEY (`id_etudiant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ligne_demande_equipement`
--

DROP TABLE IF EXISTS `ligne_demande_equipement`;
CREATE TABLE IF NOT EXISTS `ligne_demande_equipement` (
  `id_demande_equipement` int(11) NOT NULL,
  `id_materiel` int(11) NOT NULL,
  `date` date NOT NULL,
  `quatité` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ligne_demande_travaux`
--

DROP TABLE IF EXISTS `ligne_demande_travaux`;
CREATE TABLE IF NOT EXISTS `ligne_demande_travaux` (
  `id_enseigant` int(11) NOT NULL,
  `id_service_technique` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`id_enseigant`,`id_service_technique`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materiel`
--

DROP TABLE IF EXISTS `materiel`;
CREATE TABLE IF NOT EXISTS `materiel` (
  `id_materiel` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_materiel`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_technique`
--

DROP TABLE IF EXISTS `service_technique`;
CREATE TABLE IF NOT EXISTS `service_technique` (
  `id_service_technique` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_service_technique`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
