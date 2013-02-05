-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Feb 04, 2013 alle 12:18
-- Versione del server: 5.5.25
-- Versione PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `educare`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `acos`
--

CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dump dei dati per la tabella `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 122),
(2, 1, NULL, NULL, 'Attendances', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'GradeCodes', 14, 25),
(9, 8, NULL, NULL, 'index', 15, 16),
(10, 8, NULL, NULL, 'view', 17, 18),
(11, 8, NULL, NULL, 'add', 19, 20),
(12, 8, NULL, NULL, 'edit', 21, 22),
(13, 8, NULL, NULL, 'delete', 23, 24),
(14, 1, NULL, NULL, 'Grades', 26, 37),
(15, 14, NULL, NULL, 'index', 27, 28),
(16, 14, NULL, NULL, 'view', 29, 30),
(17, 14, NULL, NULL, 'add', 31, 32),
(18, 14, NULL, NULL, 'edit', 33, 34),
(19, 14, NULL, NULL, 'delete', 35, 36),
(20, 1, NULL, NULL, 'Groups', 38, 49),
(21, 20, NULL, NULL, 'index', 39, 40),
(22, 20, NULL, NULL, 'view', 41, 42),
(23, 20, NULL, NULL, 'add', 43, 44),
(24, 20, NULL, NULL, 'edit', 45, 46),
(25, 20, NULL, NULL, 'delete', 47, 48),
(26, 1, NULL, NULL, 'Home', 50, 53),
(27, 26, NULL, NULL, 'display', 51, 52),
(28, 1, NULL, NULL, 'Pages', 54, 57),
(29, 28, NULL, NULL, 'display', 55, 56),
(30, 1, NULL, NULL, 'Schools', 58, 79),
(31, 30, NULL, NULL, 'index', 59, 60),
(32, 30, NULL, NULL, 'view', 61, 62),
(33, 30, NULL, NULL, 'add', 63, 64),
(34, 30, NULL, NULL, 'edit', 65, 66),
(35, 30, NULL, NULL, 'delete', 67, 68),
(36, 30, NULL, NULL, 'admin_index', 69, 70),
(37, 30, NULL, NULL, 'admin_view', 71, 72),
(38, 30, NULL, NULL, 'admin_add', 73, 74),
(39, 30, NULL, NULL, 'admin_edit', 75, 76),
(40, 30, NULL, NULL, 'admin_delete', 77, 78),
(41, 1, NULL, NULL, 'Students', 80, 101),
(42, 41, NULL, NULL, 'index', 81, 82),
(43, 41, NULL, NULL, 'view', 83, 84),
(44, 41, NULL, NULL, 'add', 85, 86),
(45, 41, NULL, NULL, 'edit', 87, 88),
(46, 41, NULL, NULL, 'delete', 89, 90),
(47, 41, NULL, NULL, 'admin_index', 91, 92),
(48, 41, NULL, NULL, 'admin_view', 93, 94),
(49, 41, NULL, NULL, 'admin_add', 95, 96),
(50, 41, NULL, NULL, 'admin_edit', 97, 98),
(51, 41, NULL, NULL, 'admin_delete', 99, 100),
(52, 1, NULL, NULL, 'Users', 102, 119),
(53, 52, NULL, NULL, 'index', 103, 104),
(54, 52, NULL, NULL, 'view', 105, 106),
(55, 52, NULL, NULL, 'add', 107, 108),
(56, 52, NULL, NULL, 'edit', 109, 110),
(57, 52, NULL, NULL, 'delete', 111, 112),
(58, 52, NULL, NULL, 'login', 113, 114),
(59, 52, NULL, NULL, 'logout', 115, 116),
(60, 52, NULL, NULL, 'initDB', 117, 118),
(61, 1, NULL, NULL, 'AclExtras', 120, 121),
(62, NULL, NULL, NULL, 'controllers', 123, 246),
(63, 62, NULL, NULL, 'Attendances', 124, 137),
(64, 63, NULL, NULL, 'index', 125, 126),
(65, 63, NULL, NULL, 'view', 127, 128),
(66, 63, NULL, NULL, 'add', 129, 130),
(67, 63, NULL, NULL, 'edit', 131, 132),
(68, 63, NULL, NULL, 'delete', 133, 134),
(69, 62, NULL, NULL, 'GradeCodes', 138, 149),
(70, 69, NULL, NULL, 'index', 139, 140),
(71, 69, NULL, NULL, 'view', 141, 142),
(72, 69, NULL, NULL, 'add', 143, 144),
(73, 69, NULL, NULL, 'edit', 145, 146),
(74, 69, NULL, NULL, 'delete', 147, 148),
(75, 62, NULL, NULL, 'Grades', 150, 161),
(76, 75, NULL, NULL, 'index', 151, 152),
(77, 75, NULL, NULL, 'view', 153, 154),
(78, 75, NULL, NULL, 'add', 155, 156),
(79, 75, NULL, NULL, 'edit', 157, 158),
(80, 75, NULL, NULL, 'delete', 159, 160),
(81, 62, NULL, NULL, 'Groups', 162, 173),
(82, 81, NULL, NULL, 'index', 163, 164),
(83, 81, NULL, NULL, 'view', 165, 166),
(84, 81, NULL, NULL, 'add', 167, 168),
(85, 81, NULL, NULL, 'edit', 169, 170),
(86, 81, NULL, NULL, 'delete', 171, 172),
(87, 62, NULL, NULL, 'Home', 174, 177),
(88, 87, NULL, NULL, 'display', 175, 176),
(89, 62, NULL, NULL, 'Pages', 178, 181),
(90, 89, NULL, NULL, 'display', 179, 180),
(91, 62, NULL, NULL, 'Schools', 182, 203),
(92, 91, NULL, NULL, 'index', 183, 184),
(93, 91, NULL, NULL, 'view', 185, 186),
(94, 91, NULL, NULL, 'add', 187, 188),
(95, 91, NULL, NULL, 'edit', 189, 190),
(96, 91, NULL, NULL, 'delete', 191, 192),
(97, 91, NULL, NULL, 'admin_index', 193, 194),
(98, 91, NULL, NULL, 'admin_view', 195, 196),
(99, 91, NULL, NULL, 'admin_add', 197, 198),
(100, 91, NULL, NULL, 'admin_edit', 199, 200),
(101, 91, NULL, NULL, 'admin_delete', 201, 202),
(102, 62, NULL, NULL, 'Students', 204, 225),
(103, 102, NULL, NULL, 'index', 205, 206),
(104, 102, NULL, NULL, 'view', 207, 208),
(105, 102, NULL, NULL, 'add', 209, 210),
(106, 102, NULL, NULL, 'edit', 211, 212),
(107, 102, NULL, NULL, 'delete', 213, 214),
(108, 102, NULL, NULL, 'admin_index', 215, 216),
(109, 102, NULL, NULL, 'admin_view', 217, 218),
(110, 102, NULL, NULL, 'admin_add', 219, 220),
(111, 102, NULL, NULL, 'admin_edit', 221, 222),
(112, 102, NULL, NULL, 'admin_delete', 223, 224),
(113, 62, NULL, NULL, 'Users', 226, 243),
(114, 113, NULL, NULL, 'index', 227, 228),
(115, 113, NULL, NULL, 'view', 229, 230),
(116, 113, NULL, NULL, 'add', 231, 232),
(117, 113, NULL, NULL, 'edit', 233, 234),
(118, 113, NULL, NULL, 'delete', 235, 236),
(119, 113, NULL, NULL, 'login', 237, 238),
(120, 113, NULL, NULL, 'logout', 239, 240),
(121, 113, NULL, NULL, 'initDB', 241, 242),
(122, 62, NULL, NULL, 'AclExtras', 244, 245),
(123, 63, NULL, NULL, 'take', 135, 136);

-- --------------------------------------------------------

--
-- Struttura della tabella `aros`
--

CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dump dei dati per la tabella `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 4),
(2, NULL, 'Group', 2, NULL, 5, 8),
(3, 1, 'User', 1, NULL, 2, 3),
(4, 2, 'User', 2, NULL, 6, 7);

-- --------------------------------------------------------

--
-- Struttura della tabella `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 62, '1', '1', '1', '1'),
(2, 2, 62, '-1', '-1', '-1', '-1');

-- --------------------------------------------------------

--
-- Struttura della tabella `attendances`
--

CREATE TABLE `attendances` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `student_id` int(10) NOT NULL,
  `attendance_date` date NOT NULL,
  `grade_id` int(10) NOT NULL,
  `present` tinyint(1) DEFAULT NULL,
  `absent` tinyint(1) DEFAULT NULL,
  `late` tinyint(1) DEFAULT NULL,
  `reason` varchar(512) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `trashed` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `trashed_by` int(10) DEFAULT NULL,
  `note` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dump dei dati per la tabella `attendances`
--

INSERT INTO `attendances` (`id`, `student_id`, `attendance_date`, `grade_id`, `present`, `absent`, `late`, `reason`, `created`, `modified`, `trashed`, `created_by`, `modified_by`, `trashed_by`, `note`) VALUES
(1, 1, '0000-00-00', 3, NULL, 1, 0, 'malattia', '2013-01-18 00:13:53', '2013-01-18 00:13:53', NULL, NULL, NULL, NULL, NULL),
(2, 2, '0000-00-00', 2, NULL, 0, 1, 'motivi familiari', '2013-01-18 00:13:53', '2013-01-18 00:13:53', NULL, NULL, NULL, NULL, NULL),
(3, 3, '0000-00-00', 2, NULL, 1, 0, 'sconosciuto', '2013-01-18 00:13:53', '2013-01-18 00:13:53', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `course_codes`
--

CREATE TABLE `course_codes` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `code` tinyint(4) NOT NULL,
  `value` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dump dei dati per la tabella `course_codes`
--

INSERT INTO `course_codes` (`id`, `code`, `value`) VALUES
(1, 1, 'Scuola Elementare'),
(2, 2, 'Scuola Media'),
(3, 3, 'Scuola Superiore');

-- --------------------------------------------------------

--
-- Struttura della tabella `grades`
--

CREATE TABLE `grades` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `school_id` int(10) NOT NULL,
  `grade_number` int(2) NOT NULL,
  `grade_code` varchar(10) NOT NULL DEFAULT '',
  `course_code_id` int(2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `trashed` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `trashed_by` int(10) DEFAULT NULL,
  `note` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dump dei dati per la tabella `grades`
--

INSERT INTO `grades` (`id`, `school_id`, `grade_number`, `grade_code`, `course_code_id`, `created`, `modified`, `trashed`, `created_by`, `modified_by`, `trashed_by`, `note`) VALUES
(1, 1, 4, 'F', 1, '2013-01-17 23:42:03', '2013-01-17 23:42:03', '2013-01-17 23:41:00', NULL, NULL, NULL, 'note classe'),
(2, 1, 5, 'G', 2, '2013-01-17 23:42:15', '2013-01-17 23:42:15', '2013-01-17 23:42:00', NULL, NULL, NULL, ''),
(3, 2, 3, 'G', 2, '2013-01-17 23:42:36', '2013-01-17 23:42:36', '2013-01-17 23:42:00', NULL, NULL, NULL, ''),
(4, 3, 1, 'A', 3, '2013-02-01 12:37:33', '2013-02-01 12:40:08', '2013-02-01 12:37:00', NULL, NULL, NULL, ''),
(5, 3, 2, 'A', 3, '2013-02-01 12:38:52', '2013-02-01 12:40:20', '2013-02-01 12:38:00', NULL, NULL, NULL, ''),
(6, 3, 3, 'A', 3, '2013-02-01 12:40:37', '2013-02-01 12:40:37', '2013-02-01 12:40:00', NULL, NULL, NULL, ''),
(7, 3, 4, 'A', 3, '2013-02-01 12:40:50', '2013-02-01 12:40:50', '2013-02-01 12:40:00', NULL, NULL, NULL, ''),
(8, 3, 5, 'A', 3, '2013-02-01 12:41:08', '2013-02-01 12:41:08', '2013-02-01 12:40:00', NULL, NULL, NULL, ''),
(9, 3, 1, 'B', 3, '2013-02-01 12:41:25', '2013-02-01 12:41:25', '2013-02-01 12:41:00', NULL, NULL, NULL, ''),
(10, 3, 2, 'B', 3, '2013-02-01 12:41:35', '2013-02-01 12:41:35', '2013-02-01 12:41:00', NULL, NULL, NULL, ''),
(11, 3, 3, 'B', 3, '2013-02-01 12:43:46', '2013-02-01 12:43:46', '2013-02-01 12:43:00', NULL, NULL, NULL, ''),
(12, 3, 4, 'B', 3, '2013-02-01 12:43:55', '2013-02-01 12:43:55', '2013-02-01 12:43:00', NULL, NULL, NULL, ''),
(13, 3, 5, 'B', 3, '2013-02-01 12:44:07', '2013-02-01 12:44:07', '2013-02-01 12:43:00', NULL, NULL, NULL, ''),
(14, 3, 1, 'C', 3, '2013-02-01 12:44:24', '2013-02-01 12:44:24', '2013-02-01 12:44:00', NULL, NULL, NULL, ''),
(15, 3, 2, 'C', 3, '2013-02-01 12:44:32', '2013-02-01 12:44:32', '2013-02-01 12:44:00', NULL, NULL, NULL, ''),
(16, 3, 3, 'C', 3, '2013-02-01 12:44:40', '2013-02-01 12:44:40', '2013-02-01 12:44:00', NULL, NULL, NULL, ''),
(17, 3, 4, 'C', 3, '2013-02-01 12:44:47', '2013-02-01 12:44:47', '2013-02-01 12:44:00', NULL, NULL, NULL, ''),
(18, 3, 5, 'C', 3, '2013-02-01 12:44:56', '2013-02-01 12:44:56', '2013-02-01 12:44:00', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Struttura della tabella `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'amministratori', '2013-01-17 16:47:20', '2013-01-17 16:47:20'),
(2, 'utenti', '2013-01-17 16:48:27', '2013-01-17 16:48:27');

-- --------------------------------------------------------

--
-- Struttura della tabella `schools`
--

CREATE TABLE `schools` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `school_code` int(4) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `city` varchar(127) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `phone_number_1` varchar(15) DEFAULT NULL,
  `phone_number_2` varchar(15) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `trashed` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `trashed_by` int(10) DEFAULT NULL,
  `note` varchar(511) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dump dei dati per la tabella `schools`
--

INSERT INTO `schools` (`id`, `name`, `school_code`, `address`, `zipcode`, `city`, `state`, `phone_number_1`, `phone_number_2`, `created`, `modified`, `trashed`, `created_by`, `modified_by`, `trashed_by`, `note`) VALUES
(1, 'Istituto Comprensivo TEST 1', 45, 'Via Nuova 45', '80146', 'Napoli', 'NA', '081 34434334', '081 39344334', '2013-01-17 23:11:16', '2013-01-17 23:11:16', '2013-01-17 23:09:00', NULL, NULL, NULL, 'note sulla scuola varie'),
(2, 'Scuola Media Statale PROVA 3', 34, 'Via Syd Barrett 68', '80100', 'Napoli', 'NA', '081 30083082', '081 393893', '2013-01-17 23:12:23', '2013-01-17 23:12:23', '2013-01-17 23:11:00', NULL, NULL, NULL, ''),
(3, 'Petriccione', 54, 'C.so San Giovanni, 666', '80146', 'Napoli', 'NA', '', '', '2013-02-01 12:35:03', '2013-02-01 12:35:03', '2013-02-01 12:33:00', 0, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Struttura della tabella `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(32) NOT NULL,
  `middle_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `grade_id` int(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `city` varchar(127) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `phone_number_1` varchar(15) DEFAULT NULL,
  `phone_number_2` varchar(15) DEFAULT NULL,
  `phone_number_3` varchar(15) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `trashed` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `trashed_by` int(10) DEFAULT NULL,
  `note` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dump dei dati per la tabella `students`
--

INSERT INTO `students` (`id`, `first_name`, `middle_name`, `last_name`, `grade_id`, `date_of_birth`, `address`, `zipcode`, `city`, `state`, `phone_number_1`, `phone_number_2`, `phone_number_3`, `created`, `modified`, `trashed`, `created_by`, `modified_by`, `trashed_by`, `note`) VALUES
(1, 'Davide', '', 'Rossi', 3, '2003-01-17', 'Via Demetrio Stratos 43', '43343', 'Napoli', 'NA', '', '', '', '2013-01-17 23:43:44', '2013-01-17 23:43:44', '2013-01-17 23:42:00', NULL, NULL, NULL, ''),
(2, 'Giuseppe', '', 'Verdi', 2, '2013-01-17', 'Piazza Ennio Annio 67', '97979', 'Napoli', 'NA', '081 677878', '', '', '2013-01-17 23:44:58', '2013-01-17 23:44:58', '2013-01-17 23:43:00', NULL, NULL, NULL, 'pipppippo pioipoiop'),
(3, 'Anna', '', 'Bianchi', 2, '2013-01-17', '', '', 'Napoli', '', '', '', '', '2013-01-17 23:45:45', '2013-01-17 23:45:45', '2013-01-17 23:45:00', NULL, NULL, NULL, ''),
(4, 'Gennarino', '', 'Esposito', 11, '1995-02-04', 'via delle vie, 13', '80143', 'Napoli', 'NA', '333 333 33 33', '081 744 57 64', '', '2013-02-04 11:37:32', '2013-02-04 11:37:32', '2013-02-04 11:36:00', NULL, NULL, NULL, ''),
(5, 'Anita ', '', 'Eckberg', 4, '1996-04-05', 'via delle vie, 13', '80100', 'napoli', 'na', '331 45 67 845', '081 560 34 21', '', '2013-02-04 12:10:05', '2013-02-04 12:10:05', '2013-02-04 12:09:00', NULL, NULL, NULL, ''),
(6, 'Parde ', '', 'Maronno', 3, '1995-06-06', 'via ponte vecchio, 12', '80122', 'napoli ', 'na ', '333 32 34 555', '', '', '2013-02-04 12:10:50', '2013-02-04 12:10:50', '2013-02-04 12:10:00', NULL, NULL, NULL, ''),
(7, 'Camillo', '', 'Benso', 5, '1995-09-07', 'Piazza Cavour, 333', '80100', 'Napoli', 'NA', '331 55 89 666', '081 045 66 77', '', '2013-02-04 12:12:03', '2013-02-04 12:12:03', '2013-02-04 12:11:00', NULL, NULL, NULL, ''),
(8, 'Giuseppe ', '', 'Garibaldi', 13, '2013-02-04', 'Piazza Italia, 5', '80131', 'Napoli', 'NA', '333 32 34 553', '', '', '2013-02-04 12:13:17', '2013-02-04 12:13:17', '2013-02-04 12:12:00', NULL, NULL, NULL, ''),
(9, 'Giuseppe', '', 'Mazzini', 4, '1997-02-08', 'Piazza Italia, 56', '80100', 'Napoli', 'NA', '331 55 89 636', '081 045 66 37', '', '2013-02-04 12:14:18', '2013-02-04 12:14:18', '2013-02-04 12:13:00', NULL, NULL, NULL, ''),
(10, 'Fiona', '', 'Apple', 3, '1996-03-30', 'via delle vie, 12', '80100', 'Napoli', 'NA', '334 32 34 553', '', '', '2013-02-04 12:15:00', '2013-02-04 12:15:00', '2013-02-04 12:14:00', NULL, NULL, NULL, ''),
(11, 'Marek ', '', 'Hamsik', 1, '1995-12-10', 'Via Napoli, 17', '80100', 'Napoli', 'NA', '333 32 34 445', '081 560 34 81', '', '2013-02-04 12:15:56', '2013-02-04 12:15:56', '2013-02-04 12:15:00', NULL, NULL, NULL, ''),
(12, 'Edinson', '', 'Cavani', 1, '0000-00-00', 'Via Napoli, 7', '80100', 'Napoli', 'NA', '333 333 33 31', '081 744 57 24', '', '2013-02-04 12:16:59', '2013-02-04 12:16:59', '2013-02-04 12:16:00', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
(1, 'amministratore', '6ba367b331a3cfe9b82848affcc270736a2b698b', 1, '2013-01-17 16:48:53', '2013-01-17 16:48:53'),
(2, 'utente', '6ba367b331a3cfe9b82848affcc270736a2b698b', 2, '2013-01-17 16:49:06', '2013-01-17 16:49:19');
