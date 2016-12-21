
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2015 at 06:41 PM
-- Server version: 5.1.71
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u876097429_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id_module` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_module`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id_module`, `code`) VALUES
(1, 'ALSDS'),
(3, 'SYST1'),
(4, 'ANA1'),
(5, 'ALG1'),
(6, 'ELECT'),
(8, 'BW'),
(9, 'ALSDD'),
(10, 'SYST2'),
(11, 'ANA2'),
(12, 'ALG2'),
(13, 'MECA'),
(14, 'ELECF1'),
(15, 'TEO'),
(16, 'ANG1'),
(17, 'SFSD'),
(18, 'ARCH2'),
(19, 'ANA3'),
(20, 'ALG3'),
(21, 'ELECF2'),
(22, 'PRST1'),
(23, 'ECON'),
(24, 'ANG2'),
(25, 'POO'),
(26, 'SINF'),
(27, 'ANA4'),
(28, 'LOGM'),
(29, 'OOE'),
(30, 'PRJP'),
(31, 'PRST2'),
(32, 'ANG3'),
(33, 'SYE1'),
(34, 'RES1'),
(35, 'IGL'),
(36, 'THP'),
(37, 'ANUM'),
(38, 'RO'),
(39, 'ORG'),
(40, 'ANG'),
(41, 'SYE2'),
(44, 'ARCHI');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id_n` int(11) NOT NULL AUTO_INCREMENT,
  `id_u` int(11) NOT NULL,
  `id_s` int(11) NOT NULL,
  `state` enum('seen','noneseen','participate') NOT NULL DEFAULT 'noneseen',
  PRIMARY KEY (`id_n`),
  KEY `id_u` (`id_u`,`id_s`),
  KEY `id_s` (`id_s`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=226 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id_n`, `id_u`, `id_s`, `state`) VALUES
(1, 54, 119, 'noneseen'),
(2, 55, 119, 'noneseen'),
(3, 57, 119, 'noneseen'),
(4, 56, 119, 'noneseen'),
(5, 54, 120, 'noneseen'),
(6, 55, 120, 'noneseen'),
(7, 57, 120, 'noneseen'),
(8, 56, 120, 'noneseen'),
(9, 56, 121, 'noneseen'),
(10, 54, 125, 'participate'),
(11, 58, 125, 'noneseen'),
(12, 55, 125, 'noneseen'),
(13, 57, 125, 'noneseen'),
(14, 56, 125, 'noneseen'),
(15, 40, 123, 'noneseen'),
(16, 54, 123, 'noneseen'),
(17, 58, 123, 'noneseen'),
(18, 55, 123, 'noneseen'),
(19, 57, 123, 'noneseen'),
(20, 56, 123, 'noneseen'),
(21, 40, 126, 'noneseen'),
(22, 54, 126, 'noneseen'),
(23, 58, 126, 'noneseen'),
(24, 60, 126, 'participate'),
(25, 55, 126, 'noneseen'),
(26, 57, 126, 'noneseen'),
(27, 56, 126, 'noneseen'),
(28, 44, 126, 'noneseen'),
(29, 54, 127, 'noneseen'),
(30, 58, 127, 'noneseen'),
(31, 60, 127, 'noneseen'),
(32, 55, 127, 'noneseen'),
(33, 57, 127, 'noneseen'),
(34, 61, 127, 'noneseen'),
(35, 56, 127, 'noneseen'),
(36, 54, 127, 'noneseen'),
(37, 58, 127, 'noneseen'),
(38, 60, 127, 'noneseen'),
(39, 55, 127, 'noneseen'),
(40, 57, 127, 'noneseen'),
(41, 61, 127, 'noneseen'),
(42, 56, 127, 'noneseen'),
(43, 54, 127, 'noneseen'),
(44, 58, 127, 'noneseen'),
(45, 60, 127, 'noneseen'),
(46, 55, 127, 'noneseen'),
(47, 57, 127, 'noneseen'),
(48, 61, 127, 'noneseen'),
(49, 56, 127, 'noneseen'),
(50, 54, 127, 'noneseen'),
(51, 58, 127, 'noneseen'),
(52, 60, 127, 'noneseen'),
(53, 55, 127, 'noneseen'),
(54, 57, 127, 'noneseen'),
(55, 61, 127, 'noneseen'),
(56, 56, 127, 'noneseen'),
(57, 54, 127, 'noneseen'),
(58, 58, 127, 'noneseen'),
(59, 60, 127, 'noneseen'),
(60, 55, 127, 'noneseen'),
(61, 57, 127, 'noneseen'),
(62, 61, 127, 'noneseen'),
(63, 56, 127, 'noneseen'),
(64, 54, 127, 'noneseen'),
(65, 58, 127, 'noneseen'),
(66, 60, 127, 'noneseen'),
(67, 55, 127, 'noneseen'),
(68, 57, 127, 'noneseen'),
(69, 61, 127, 'noneseen'),
(70, 56, 127, 'noneseen'),
(71, 54, 127, 'noneseen'),
(72, 58, 127, 'noneseen'),
(73, 60, 127, 'noneseen'),
(74, 55, 127, 'noneseen'),
(75, 57, 127, 'noneseen'),
(76, 61, 127, 'noneseen'),
(77, 56, 127, 'noneseen'),
(78, 54, 127, 'noneseen'),
(79, 58, 127, 'noneseen'),
(80, 60, 127, 'noneseen'),
(81, 55, 127, 'noneseen'),
(82, 57, 127, 'noneseen'),
(83, 61, 127, 'noneseen'),
(84, 56, 127, 'noneseen'),
(85, 54, 127, 'noneseen'),
(86, 58, 127, 'noneseen'),
(87, 60, 127, 'noneseen'),
(88, 55, 127, 'noneseen'),
(89, 57, 127, 'noneseen'),
(90, 61, 127, 'noneseen'),
(91, 56, 127, 'noneseen'),
(92, 54, 127, 'noneseen'),
(93, 58, 127, 'noneseen'),
(94, 60, 127, 'noneseen'),
(95, 55, 127, 'noneseen'),
(96, 57, 127, 'noneseen'),
(97, 61, 127, 'noneseen'),
(98, 56, 127, 'noneseen'),
(99, 54, 127, 'noneseen'),
(100, 58, 127, 'noneseen'),
(101, 60, 127, 'noneseen'),
(102, 55, 127, 'noneseen'),
(103, 57, 127, 'noneseen'),
(104, 61, 127, 'noneseen'),
(105, 56, 127, 'noneseen'),
(106, 54, 127, 'noneseen'),
(107, 58, 127, 'noneseen'),
(108, 60, 127, 'noneseen'),
(109, 55, 127, 'noneseen'),
(110, 57, 127, 'noneseen'),
(111, 61, 127, 'noneseen'),
(112, 56, 127, 'noneseen'),
(113, 54, 127, 'noneseen'),
(114, 58, 127, 'noneseen'),
(115, 60, 127, 'noneseen'),
(116, 55, 127, 'noneseen'),
(117, 57, 127, 'noneseen'),
(118, 61, 127, 'noneseen'),
(119, 56, 127, 'noneseen'),
(120, 54, 127, 'noneseen'),
(121, 58, 127, 'noneseen'),
(122, 60, 127, 'noneseen'),
(123, 55, 127, 'noneseen'),
(124, 57, 127, 'noneseen'),
(125, 61, 127, 'noneseen'),
(126, 56, 127, 'noneseen'),
(127, 54, 127, 'noneseen'),
(128, 58, 127, 'noneseen'),
(129, 60, 127, 'noneseen'),
(130, 55, 127, 'noneseen'),
(131, 57, 127, 'noneseen'),
(132, 61, 127, 'noneseen'),
(133, 56, 127, 'noneseen'),
(134, 54, 127, 'noneseen'),
(135, 58, 127, 'noneseen'),
(136, 60, 127, 'noneseen'),
(137, 55, 127, 'noneseen'),
(138, 57, 127, 'noneseen'),
(139, 61, 127, 'noneseen'),
(140, 56, 127, 'noneseen'),
(141, 54, 127, 'noneseen'),
(142, 58, 127, 'noneseen'),
(143, 60, 127, 'noneseen'),
(144, 55, 127, 'noneseen'),
(145, 57, 127, 'noneseen'),
(146, 61, 127, 'noneseen'),
(147, 56, 127, 'noneseen'),
(148, 54, 127, 'noneseen'),
(149, 58, 127, 'noneseen'),
(150, 60, 127, 'noneseen'),
(151, 55, 127, 'noneseen'),
(152, 57, 127, 'noneseen'),
(153, 61, 127, 'noneseen'),
(154, 56, 127, 'noneseen'),
(155, 54, 127, 'noneseen'),
(156, 58, 127, 'noneseen'),
(157, 60, 127, 'noneseen'),
(158, 55, 127, 'noneseen'),
(159, 57, 127, 'noneseen'),
(160, 61, 127, 'noneseen'),
(161, 56, 127, 'noneseen'),
(162, 64, 129, 'noneseen'),
(163, 47, 129, 'noneseen'),
(164, 48, 129, 'noneseen'),
(165, 49, 129, 'noneseen'),
(166, 59, 129, 'noneseen'),
(167, 66, 129, 'noneseen'),
(168, 67, 129, 'noneseen'),
(169, 62, 129, 'noneseen'),
(170, 50, 129, 'noneseen'),
(171, 51, 129, 'noneseen'),
(172, 63, 129, 'noneseen'),
(173, 64, 130, 'noneseen'),
(174, 47, 130, 'noneseen'),
(175, 48, 130, 'noneseen'),
(176, 49, 130, 'noneseen'),
(177, 59, 130, 'noneseen'),
(178, 66, 130, 'noneseen'),
(179, 67, 130, 'noneseen'),
(180, 62, 130, 'noneseen'),
(181, 50, 130, 'noneseen'),
(182, 51, 130, 'noneseen'),
(183, 63, 130, 'noneseen'),
(184, 40, 131, 'noneseen'),
(185, 64, 131, 'noneseen'),
(186, 47, 131, 'noneseen'),
(187, 48, 131, 'noneseen'),
(188, 49, 131, 'noneseen'),
(189, 59, 131, 'noneseen'),
(190, 66, 131, 'noneseen'),
(191, 67, 131, 'noneseen'),
(192, 68, 131, 'participate'),
(193, 69, 131, 'noneseen'),
(194, 70, 131, 'noneseen'),
(195, 62, 131, 'noneseen'),
(196, 50, 131, 'noneseen'),
(197, 51, 131, 'noneseen'),
(198, 63, 131, 'noneseen'),
(199, 71, 131, 'noneseen'),
(200, 54, 132, 'noneseen'),
(201, 58, 132, 'noneseen'),
(202, 60, 132, 'noneseen'),
(203, 55, 132, 'noneseen'),
(204, 65, 132, 'noneseen'),
(205, 57, 132, 'noneseen'),
(206, 61, 132, 'noneseen'),
(207, 56, 132, 'participate'),
(208, 58, 134, 'noneseen'),
(209, 60, 134, 'noneseen'),
(210, 65, 134, 'noneseen'),
(211, 57, 134, 'noneseen'),
(212, 61, 134, 'noneseen'),
(213, 56, 134, 'participate'),
(214, 58, 135, 'noneseen'),
(215, 60, 135, 'noneseen'),
(216, 65, 135, 'noneseen'),
(217, 57, 135, 'noneseen'),
(218, 61, 135, 'noneseen'),
(219, 56, 135, 'participate'),
(220, 58, 132, 'noneseen'),
(221, 60, 132, 'noneseen'),
(222, 65, 132, 'noneseen'),
(223, 57, 132, 'noneseen'),
(224, 61, 132, 'noneseen');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id_q` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) DEFAULT NULL,
  `type` char(8) DEFAULT NULL,
  `original` char(1) NOT NULL DEFAULT 'y',
  PRIMARY KEY (`id_q`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=129 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id_q`, `question`, `type`, `original`) VALUES
(1, 'Vous avez été assidu(e) au cours à   ', 'level', 'y'),
(2, 'Vous avez été assidu(e) au TDs  à    \n', 'level', 'y'),
(3, 'Votre travail personnel en semaine est de  ', 'simple', 'y'),
(4, 'Vous avez eu des difficultés pour  assimiler la matière', 'dich', 'y'),
(5, 'Si vous avez eu des difficultés de compréhension, elles étaient dues', 'multiple', 'y'),
(6, 'Les compétences attendues à l’issue de ce cours  étaient bien définies', 'level', 'y'),
(7, 'Le plan du cours, la méthode et la charge de travail nécessaire étaient clairement présentés', 'level', 'y'),
(8, 'Les critères d''évaluation des contrôles ont été  clairs\n', 'level', 'y'),
(105, 'Commentaires et/ou suggestions qui peuvent aider à améliorer la présentation du cours ', 'free', 'y'),
(106, 'suggestions qui peuvent aider à améliorer déroulement des TDs', 'free', 'y'),
(107, 'suggestions qui peuvent aider à améliorer déroulement des TPs', 'free', 'y'),
(118, 'Les horaire de travail vous conviennent ils?', 'dich', 'n'),
(110, 'Vous avez eu des difficultÃ©s pour assimiler la matiÃ¨re', 'dich', 'n'),
(111, 'Les horaire de travail vous conviennent ils?', 'dich', 'y'),
(112, 'Commentaires pouvant améliorés le module  ', 'free', 'y'),
(113, 'Est-que vous comprenez bien le cours', 'dich', 'y'),
(121, 'est ce que  vous rencontrez des difficultés pour connecter', 'simple', 'y'),
(116, 'Est-que vous comprenez bien le cours d''analyse?', 'dich', 'n'),
(117, 'Vous avez eu des difficultés pour  assimiler la matiére', 'dich', 'n'),
(119, 'L''enseignant avance t''il trop vite ', 'simple', 'y'),
(120, 'L''enseignant avance t''il trop vite ', 'simple', 'n'),
(122, 'est ce que vous avez rencontré des difficultés avec votre comptes ', 'simple', 'n'),
(123, 'est ce que  vous rencontrez des difficultés pour se connecter', 'simple', 'n'),
(124, 'est ce que vous avez rencontré des problemes avec votre comptes ', 'simple', 'n'),
(125, 'est ce que  vous rencontrez des difficultes pour se connecter', 'simple', 'y'),
(126, 'est ce que vous avez rencontre des problemes avec votre comptes ', 'simple', 'y'),
(127, 'comment vous estimez les interventions de ce service', 'level', 'y'),
(128, 'Est-que vous comprenez bien le cours', 'dich', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `reponses`
--

CREATE TABLE IF NOT EXISTS `reponses` (
  `id_r` int(11) NOT NULL AUTO_INCREMENT,
  `id_q` int(11) NOT NULL,
  `reponse` varchar(100) NOT NULL,
  PRIMARY KEY (`id_r`),
  KEY `id_q` (`id_q`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `reponses`
--

INSERT INTO `reponses` (`id_r`, `id_q`, `reponse`) VALUES
(1, 1, '< 10%'),
(2, 1, '20%'),
(3, 1, '50%'),
(4, 1, '80%'),
(5, 1, '100%'),
(6, 2, '< 10%'),
(7, 2, '20%'),
(8, 2, '50%'),
(9, 2, '80%'),
(10, 2, '100%'),
(11, 4, 'non'),
(12, 4, 'oui'),
(13, 5, 'A la langue française'),
(14, 5, 'Aux lacunes de formation'),
(15, 5, 'Au Travail insuffisant'),
(16, 5, 'A d''autres causes'),
(17, 3, '0h'),
(18, 3, '1h'),
(19, 3, '> 2h'),
(20, 6, 'Tout à fait d’accord '),
(21, 6, 'Plutôt d’accord'),
(22, 6, 'Peu d’accord'),
(23, 6, 'Pas du tout d’accord'),
(24, 6, 'Sans avis'),
(25, 7, 'Tout à fait d’accord '),
(26, 7, 'Plutôt d’accord'),
(27, 7, 'Peu d’accord'),
(28, 7, 'Pas du tout d’accord'),
(29, 7, 'Sans avis'),
(30, 8, 'Tout à fait d’accord'),
(31, 8, 'Plutôt d’accord'),
(32, 8, 'Peu d’accord'),
(33, 8, 'Pas du tout d’accord'),
(34, 8, 'Sans avis'),
(35, 108, 'w'),
(36, 108, 'q'),
(37, 109, 'e'),
(38, 109, 'v'),
(39, 109, 'd'),
(40, 110, 'oui'),
(41, 110, 'non'),
(42, 111, 'Oui'),
(43, 111, 'Non'),
(44, 113, 'Oui '),
(45, 113, 'Non'),
(46, 114, 'Oui '),
(47, 114, 'Non'),
(48, 115, 'Oui '),
(49, 115, 'Non'),
(50, 116, 'Oui '),
(51, 116, 'Non'),
(52, 117, 'oui'),
(53, 117, 'non'),
(54, 118, 'Non'),
(55, 118, 'Oui'),
(56, 119, 'un peu'),
(57, 119, 'oui'),
(58, 119, 'Non'),
(59, 120, 'un peu'),
(60, 120, 'oui'),
(61, 120, 'Non'),
(62, 120, 'des fois '),
(63, 121, 'des fois '),
(64, 121, 'oui '),
(65, 121, 'non'),
(66, 122, 'Oui'),
(67, 122, 'non'),
(68, 122, 'des fois'),
(69, 122, 'jamais'),
(70, 123, 'des fois '),
(71, 123, 'oui '),
(72, 123, 'non'),
(73, 124, 'Oui'),
(74, 124, 'non'),
(75, 124, 'des fois'),
(76, 124, 'jamais'),
(77, 125, 'des fois '),
(78, 125, 'oui '),
(79, 125, 'non'),
(80, 126, 'Oui'),
(81, 126, 'non'),
(82, 126, 'des fois'),
(83, 126, 'jamais'),
(84, 127, 'tres mauvaise'),
(85, 127, 'mauvaise'),
(86, 127, 'moyenne'),
(87, 127, 'bien'),
(88, 127, 'tres bien'),
(89, 128, 'Oui'),
(90, 128, 'Non');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id_service` int(11) NOT NULL AUTO_INCREMENT,
  `service` varchar(200) NOT NULL,
  PRIMARY KEY (`id_service`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id_service`, `service`) VALUES
(1, 'Bibliotheque'),
(3, 'Service Reseau'),
(4, 'Service Web'),
(6, 'Service Activité Culturelle'),
(7, 'Service restauration');

-- --------------------------------------------------------

--
-- Table structure for table `sondage_questions`
--

CREATE TABLE IF NOT EXISTS `sondage_questions` (
  `id_sq` int(11) NOT NULL AUTO_INCREMENT,
  `id_s` int(11) NOT NULL,
  `id_q` int(11) NOT NULL,
  PRIMARY KEY (`id_sq`),
  KEY `id_s` (`id_s`),
  KEY `id_q` (`id_q`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `sondage_questions`
--

INSERT INTO `sondage_questions` (`id_sq`, `id_s`, `id_q`) VALUES
(1, 119, 4),
(2, 119, 3),
(3, 119, 5),
(4, 119, 6),
(5, 119, 6),
(6, 119, 105),
(7, 120, 4),
(8, 120, 3),
(9, 120, 5),
(10, 120, 6),
(11, 120, 6),
(12, 120, 105),
(13, 121, 4),
(14, 121, 3),
(17, 122, 4),
(18, 122, 5),
(19, 122, 7),
(20, 122, 4),
(26, 123, 3),
(25, 123, 4),
(27, 123, 5),
(28, 124, 4),
(29, 124, 3),
(30, 124, 5),
(31, 125, 4),
(32, 125, 3),
(33, 125, 5),
(34, 126, 4),
(35, 126, 3),
(36, 126, 5),
(37, 127, 3),
(38, 127, 5),
(39, 127, 6),
(40, 127, 7),
(41, 127, 8),
(42, 127, 105),
(43, 127, 106),
(44, 127, 107),
(45, 129, 3),
(46, 129, 5),
(47, 130, 5),
(48, 131, 111),
(49, 131, 112),
(69, 132, 128),
(53, 132, 116),
(52, 132, 115),
(55, 132, 117),
(57, 134, 118),
(59, 134, 120),
(60, 134, 5),
(65, 135, 125),
(66, 135, 126),
(67, 135, 127),
(68, 132, 119);

-- --------------------------------------------------------

--
-- Table structure for table `sondage_reponses`
--

CREATE TABLE IF NOT EXISTS `sondage_reponses` (
  `id_sr` int(11) NOT NULL AUTO_INCREMENT,
  `id_s` int(11) NOT NULL,
  `id_q` int(11) NOT NULL,
  `id_r` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `other` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_sr`),
  KEY `id_s` (`id_s`),
  KEY `id_q` (`id_q`),
  KEY `id_r` (`id_r`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `sondage_reponses`
--

INSERT INTO `sondage_reponses` (`id_sr`, `id_s`, `id_q`, `id_r`, `id_user`, `other`) VALUES
(1, 125, 4, 11, 54, NULL),
(2, 125, 3, 18, 54, NULL),
(3, 125, 5, 15, 54, NULL),
(4, 126, 4, 11, 60, NULL),
(5, 126, 3, NULL, 60, ''),
(6, 126, 5, NULL, 60, ''),
(7, 131, 112, NULL, 68, 'Il faut mieux communiquer avec l''administration'),
(8, 131, 111, 43, 68, NULL),
(9, 132, 128, 90, 56, NULL),
(10, 132, 116, 50, 56, NULL),
(11, 132, 117, 52, 56, NULL),
(12, 132, 119, 56, 56, NULL),
(13, 134, 118, 54, 56, NULL),
(14, 134, 120, NULL, 56, ''),
(15, 134, 5, 14, 56, NULL),
(16, 134, 5, NULL, 56, ''),
(17, 132, 128, 90, 56, NULL),
(18, 132, 119, 56, 56, NULL),
(19, 132, 117, 52, 56, NULL),
(20, 132, 116, 50, 56, NULL),
(21, 135, 125, 77, 56, NULL),
(22, 135, 127, 88, 56, NULL),
(23, 135, 126, 83, 56, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `specs`
--

CREATE TABLE IF NOT EXISTS `specs` (
  `id_spec` int(11) NOT NULL AUTO_INCREMENT,
  `spec` varchar(10) NOT NULL,
  `groupes` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id_spec`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `specs`
--

INSERT INTO `specs` (`id_spec`, `spec`, `groupes`) VALUES
(1, '1CPI', 10),
(2, '2CPI', 6),
(3, '1CS', 8),
(4, '2CS_SIQ', 3),
(5, '2CS_SIT', 2),
(6, '2CS_SIL', 1),
(7, '3CS_SIQ', NULL),
(8, '3CS_SIT', NULL),
(9, '3CS_SIL', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE IF NOT EXISTS `surveys` (
  `id_s` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `module` varchar(120) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `debut` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nom_sondage` char(40) NOT NULL,
  `list` varchar(200) DEFAULT NULL,
  `state` char(1) DEFAULT 'n',
  `modale` char(1) NOT NULL DEFAULT 'n',
  `nb_p` int(11) NOT NULL,
  PRIMARY KEY (`id_s`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=136 ;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id_s`, `id`, `module`, `description`, `debut`, `fin`, `nom_sondage`, `list`, `state`, `modale`, `nb_p`) VALUES
(119, 49, 'ANUM', 'Sondage pour evaluer les etudiants dans ce module ', '2015-05-11 15:05:10', '2016-09-11 23:00:00', 'Sondage Analyse', '2CPIG1,2CPIG2,2CPIG3,2CPIG4,2CPIG5,2CPIG6', 'y', 'y', 0),
(135, 71, 'Service Web', 'sondage sur l''etat du service web ', '2015-05-18 16:18:23', '2015-05-31 00:00:00', 'L''etat de service web', '1CPIG1,1CPIG2,1CPIG3,1CPIG4,1CPIG5,1CPIG6,1CPIG7,1CPIG8,1CPIG9,1CPIG10,2CPIG1,2CPIG2,2CPIG3,2CPIG4,2CPIG5,2CPIG6,1CSG1,1CSG2,1CSG3,1CSG4,1CSG5,1CSG6,1CSG7,1CSG8,2CS_SIQG1,2CS_SIQG2,2CS_SIQG3,2CS_SITG1', 'y', 'y', 1),
(134, 68, 'ANA2', 'Savoir est-que les étudiant sont satisfait du Td', '2015-05-18 16:08:25', '2015-05-28 00:00:00', 'Satisfaction Td', '2CPIG1,2CPIG2,2CPIG3,2CPIG4,2CPIG5,2CPIG6', 'y', 'n', 1),
(129, 67, 'ANA1', 'sondage pour les ens et le membre de l''administration', '2015-05-17 22:14:23', '2015-06-30 00:00:00', 'sondage ens', 'enseignant,administration', 'y', 'n', 0),
(130, 67, 'ALSDS', 'test de sondage', '2015-05-17 22:18:47', '2015-05-24 00:00:00', 'sondage test2', 'enseignant,administration', 'y', 'n', 0),
(131, 68, 'ANA1', 'Ce sondage est destiné aux professeures d''analyse', '2015-05-18 14:43:33', '2015-06-10 00:00:00', 'Satisfaction enseignant', '1CPIG1,1CPIG2,1CPIG3,1CPIG4,1CPIG5,1CPIG6,1CPIG7,1CPIG8,1CPIG9,1CPIG10,enseignant,administration', 'y', 'y', 1),
(132, 68, 'ANA2', 'Savoir est-que les étudiants en 2 éme sont satisfaits du cours d''analyse', '2015-05-18 15:30:04', '2015-05-20 00:00:00', 'Satisfaction sur le module d''analyse', '2CPIG1,2CPIG2,2CPIG3,2CPIG4,2CPIG5,2CPIG6', 'y', 'y', 2),
(133, 68, 'ANA1', 'Savoir si les étudiants arrive bien à suivre au TD', '2015-05-18 15:37:27', '2015-05-28 00:00:00', 'Satisfaction étudiants du TD', '1CPIG1,1CPIG2,1CPIG3,1CPIG4,1CPIG5,1CPIG6,1CPIG7,1CPIG8,1CPIG9,1CPIG10', 'n', 'n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `year` varchar(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `type`, `year`) VALUES
(52, 'admin', 'admin', 'admin@esi.dz', 'admin', '0'),
(56, 'aissa', '1234', 'da_belkaid@esi.dz', 'etudiant', '2CPIG6'),
(57, 'ISLAM', 'islam', 'ds_maiza@esi.dz', 'etudiant', '2CPIG5'),
(58, 'Youcef BRA', 'y20c3fESI', 'cy_baira@esi.dz', 'etudiant', '2CPIG2'),
(61, 'sofiane aitouaret', 'sofianeaitouaret', 'ds_ait_ouaret@esi.dz', 'etudiant', '2CPIG5'),
(65, 'kikim', '00000000', 'da_oukhenniche@esi.dz', 'etudiant', '2CPIG3'),
(67, 'achour', 'achour', 'd_achour@esi.dz', 'enseignant', '0'),
(68, 'Dib', '123', 'a_dib@esi.dz', 'enseignant', '0'),
(69, 'Zegulaoui', '123', 'a_zegulaoui@esi.dz', 'enseignant', '0'),
(70, 'Mahiou', '123', 'a_mahiou@esi.dz', 'enseignant', '0'),
(71, 'Ait Amrane', '123', 'a_aitamrane@esi.dz', 'administration', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
