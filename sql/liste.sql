-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Author: Ahamada Mze Andjib
-- Client :  127.0.0.1
-- Généré le :  Lun 21 Décembre 2015 à 05:54
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `etatcivil`
--

-- --------------------------------------------------------

--
-- Structure de la table `liste`
--

CREATE TABLE IF NOT EXISTS `liste` (
  `ID` int(7) NOT NULL AUTO_INCREMENT,
  `prefecture` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `centretatcivil` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `registre` int(5) DEFAULT NULL,
  `acte` int(5) NOT NULL,
  `date_acte` date NOT NULL,
  `nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `delivre_a` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `delivre_le` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `delivre_an` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `num_serie` int(10) NOT NULL,
  `naissance_jour_moi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `naissance_an` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `naissance_heure` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `naissance_minuite` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `naissance_nom_prenom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `naissance_lieu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `naissance_sexe` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pere_nom_prenom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pere_datenaisance` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pere_lieunaissance` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pere_profession` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pere_villederesidence` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mere_nom_prenom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mere_datenaisance` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mere_lieunaissance` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mere_profession` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mere_villederesidenc` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `declaration_faite_par` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `datejugement` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `emetteurjugement` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `declaration_recue_pa` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `recepteurjugement` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Edit` int(7) NOT NULL,
  `Imprimer` int(11) NOT NULL,
  `Delete_` int(7) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `liste`
--

INSERT INTO `liste` (`ID`, `prefecture`, `centretatcivil`, `registre`, `acte`, `date_acte`, `nom`, `prenom`, `delivre_a`, `delivre_le`, `delivre_an`, `num_serie`, `naissance_jour_moi`, `naissance_an`, `naissance_heure`, `naissance_minuite`, `naissance_nom_prenom`, `naissance_lieu`, `naissance_sexe`, `pere_nom_prenom`, `pere_datenaisance`, `pere_lieunaissance`, `pere_profession`, `pere_villederesidence`, `mere_nom_prenom`, `mere_datenaisance`, `mere_lieunaissance`, `mere_profession`, `mere_villederesidenc`, `declaration_faite_par`, `datejugement`, `emetteurjugement`, `declaration_recue_pa`, `recepteurjugement`, `Edit`, `Imprimer`, `Delete_`) VALUES
(1, 'HAMBOU', 'CHOUANI', 17, 5, '2015-12-13', 'AHAMADA MZE', 'ANDJIB', 'chouani2', 'treize decembre', 'deux mil quinze', 250613, 'vingt sept decembre', 'mil neuf cent quatre vingt et ', '', 'TROIS', 'AHAMADA MZE ANDJIB', 'Chouani hambou', 'Masculin', 'AHAMADA MZE', '', '', '', '', 'Moinamkaya Bedja', 'vers 1945', 'Dembeni', 'menagere', 'Marseille France', 'jugement suppletif Num 23', '', '', 'Remane Abdou, officier de l''etat civil', '', 0, 0, 0),
(2, 'iiiiiiii', 'iiiiiiii', 0, 0, '0000-00-00', 'jjjjjjjjjj', 'kkkkkkkk', 'hhhhhhh', 'nnnnnn', 'kkkkkk', 0, 'lllllll', 'kkkkk', 'mmmmmm', 'llllllllll', 'llllll', 'mmmmm', 'llllll', 'llllll', 'lllllll', 'llllllll', 'lllllll', 'lllllll', 'llllllll', 'lllllllll', 'llllllll', 'llllllll', 'lllllllll', 'lllllll', '', '', 'llllllllll', '', 0, 0, 0),
(3, 'iiiiiiii', 'iiiiiiii', 0, 0, '0000-00-00', 'jjjjjjjjjj', 'kkkkkkkk', 'hhhhhhh', 'nnnnnn', 'kkkkkk', 0, 'lllllll', 'kkkkk', 'mmmmmm', 'llllllllll', 'llllll', 'mmmmm', 'llllll', 'llllll', 'lllllll', 'llllllll', 'lllllll', 'lllllll', 'llllllll', 'lllllllll', 'llllllll', 'llllllll', 'lllllllll', 'lllllll', '', '', 'llllllllll', '', 0, 0, 0),
(4, '////////////////////', '////////////////////', 0, 0, '0000-00-00', '////////////////', '//////////////', '//////////////////', '//////////////////', '//////////////', 56, '//////', '//////', '////////', '///////', '///////', '//////', '//////', '///////', '///////', '///////', '////////', '////////', '///////', '/////////', '////////', '///////', '///////', '///////', '', '', '//////', '', 0, 0, 0),
(5, 'IIIIIIIIII', 'IIIIIIII', 0, 0, '0000-00-00', 'IIIIIIII', 'IIIIIIII', 'IIIIIII', 'IIIIIII', 'IIIIII', 5, 'IIIIIII', 'IIIIII', 'IIIIII', 'IIIII', 'IIIIII', 'IIIIIII', 'IIIIIII', 'IIIIIIII', 'IIIIIII', 'IIIIIII', 'IIIIIIII', 'IIIIIII', 'IIIIIII', 'IIIIIII', 'IIIIII', 'IIIIII', 'IIIIIII', 'IIIIIII', '', '', 'IIIIII', '', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
