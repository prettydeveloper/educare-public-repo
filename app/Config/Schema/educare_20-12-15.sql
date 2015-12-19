# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.19)
# Database: educare
# Generation Time: 2015-12-19 23:09:46 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table acos
# ------------------------------------------------------------

CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`)
VALUES
	(1,NULL,NULL,NULL,'controllers',1,122),
	(2,1,NULL,NULL,'Attendances',2,13),
	(3,2,NULL,NULL,'index',3,4),
	(4,2,NULL,NULL,'view',5,6),
	(5,2,NULL,NULL,'add',7,8),
	(6,2,NULL,NULL,'edit',9,10),
	(7,2,NULL,NULL,'delete',11,12),
	(8,1,NULL,NULL,'GradeCodes',14,25),
	(9,8,NULL,NULL,'index',15,16),
	(10,8,NULL,NULL,'view',17,18),
	(11,8,NULL,NULL,'add',19,20),
	(12,8,NULL,NULL,'edit',21,22),
	(13,8,NULL,NULL,'delete',23,24),
	(14,1,NULL,NULL,'Grades',26,37),
	(15,14,NULL,NULL,'index',27,28),
	(16,14,NULL,NULL,'view',29,30),
	(17,14,NULL,NULL,'add',31,32),
	(18,14,NULL,NULL,'edit',33,34),
	(19,14,NULL,NULL,'delete',35,36),
	(20,1,NULL,NULL,'Groups',38,49),
	(21,20,NULL,NULL,'index',39,40),
	(22,20,NULL,NULL,'view',41,42),
	(23,20,NULL,NULL,'add',43,44),
	(24,20,NULL,NULL,'edit',45,46),
	(25,20,NULL,NULL,'delete',47,48),
	(26,1,NULL,NULL,'Home',50,53),
	(27,26,NULL,NULL,'display',51,52),
	(28,1,NULL,NULL,'Pages',54,57),
	(29,28,NULL,NULL,'display',55,56),
	(30,1,NULL,NULL,'Schools',58,79),
	(31,30,NULL,NULL,'index',59,60),
	(32,30,NULL,NULL,'view',61,62),
	(33,30,NULL,NULL,'add',63,64),
	(34,30,NULL,NULL,'edit',65,66),
	(35,30,NULL,NULL,'delete',67,68),
	(36,30,NULL,NULL,'admin_index',69,70),
	(37,30,NULL,NULL,'admin_view',71,72),
	(38,30,NULL,NULL,'admin_add',73,74),
	(39,30,NULL,NULL,'admin_edit',75,76),
	(40,30,NULL,NULL,'admin_delete',77,78),
	(41,1,NULL,NULL,'Students',80,101),
	(42,41,NULL,NULL,'index',81,82),
	(43,41,NULL,NULL,'view',83,84),
	(44,41,NULL,NULL,'add',85,86),
	(45,41,NULL,NULL,'edit',87,88),
	(46,41,NULL,NULL,'delete',89,90),
	(47,41,NULL,NULL,'admin_index',91,92),
	(48,41,NULL,NULL,'admin_view',93,94),
	(49,41,NULL,NULL,'admin_add',95,96),
	(50,41,NULL,NULL,'admin_edit',97,98),
	(51,41,NULL,NULL,'admin_delete',99,100),
	(52,1,NULL,NULL,'Users',102,119),
	(53,52,NULL,NULL,'index',103,104),
	(54,52,NULL,NULL,'view',105,106),
	(55,52,NULL,NULL,'add',107,108),
	(56,52,NULL,NULL,'edit',109,110),
	(57,52,NULL,NULL,'delete',111,112),
	(58,52,NULL,NULL,'login',113,114),
	(59,52,NULL,NULL,'logout',115,116),
	(60,52,NULL,NULL,'initDB',117,118),
	(61,1,NULL,NULL,'AclExtras',120,121),
	(62,NULL,NULL,NULL,'controllers',123,460),
	(63,62,NULL,NULL,'Attendances',124,141),
	(64,63,NULL,NULL,'index',125,126),
	(65,63,NULL,NULL,'view',127,128),
	(66,63,NULL,NULL,'add',129,130),
	(67,63,NULL,NULL,'edit',131,132),
	(68,63,NULL,NULL,'delete',133,134),
	(75,62,NULL,NULL,'Grades',142,163),
	(76,75,NULL,NULL,'index',143,144),
	(77,75,NULL,NULL,'view',145,146),
	(78,75,NULL,NULL,'add',147,148),
	(79,75,NULL,NULL,'edit',149,150),
	(80,75,NULL,NULL,'delete',151,152),
	(81,62,NULL,NULL,'Groups',164,175),
	(82,81,NULL,NULL,'index',165,166),
	(83,81,NULL,NULL,'view',167,168),
	(84,81,NULL,NULL,'add',169,170),
	(85,81,NULL,NULL,'edit',171,172),
	(86,81,NULL,NULL,'delete',173,174),
	(87,62,NULL,NULL,'Home',176,179),
	(88,87,NULL,NULL,'display',177,178),
	(89,62,NULL,NULL,'Pages',180,183),
	(90,89,NULL,NULL,'display',181,182),
	(91,62,NULL,NULL,'Schools',184,205),
	(92,91,NULL,NULL,'index',185,186),
	(93,91,NULL,NULL,'view',187,188),
	(94,91,NULL,NULL,'add',189,190),
	(95,91,NULL,NULL,'edit',191,192),
	(96,91,NULL,NULL,'delete',193,194),
	(97,91,NULL,NULL,'admin_index',195,196),
	(98,91,NULL,NULL,'admin_view',197,198),
	(99,91,NULL,NULL,'admin_add',199,200),
	(100,91,NULL,NULL,'admin_edit',201,202),
	(101,91,NULL,NULL,'admin_delete',203,204),
	(102,62,NULL,NULL,'Students',206,229),
	(103,102,NULL,NULL,'index',207,208),
	(104,102,NULL,NULL,'view',209,210),
	(105,102,NULL,NULL,'add',211,212),
	(106,102,NULL,NULL,'edit',213,214),
	(107,102,NULL,NULL,'delete',215,216),
	(108,102,NULL,NULL,'admin_index',217,218),
	(109,102,NULL,NULL,'admin_view',219,220),
	(110,102,NULL,NULL,'admin_add',221,222),
	(111,102,NULL,NULL,'admin_edit',223,224),
	(112,102,NULL,NULL,'admin_delete',225,226),
	(113,62,NULL,NULL,'Users',230,247),
	(114,113,NULL,NULL,'index',231,232),
	(115,113,NULL,NULL,'view',233,234),
	(116,113,NULL,NULL,'add',235,236),
	(117,113,NULL,NULL,'edit',237,238),
	(118,113,NULL,NULL,'delete',239,240),
	(119,113,NULL,NULL,'login',241,242),
	(120,113,NULL,NULL,'logout',243,244),
	(121,113,NULL,NULL,'initDB',245,246),
	(122,62,NULL,NULL,'AclExtras',248,249),
	(123,63,NULL,NULL,'take',135,136),
	(124,63,NULL,NULL,'selectSchool',137,138),
	(125,63,NULL,NULL,'findGrades',139,140),
	(126,62,NULL,NULL,'Laboratories',250,271),
	(127,126,NULL,NULL,'index',251,252),
	(128,102,NULL,NULL,'update_grades',227,228),
	(129,62,NULL,NULL,'Meetings',272,283),
	(130,129,NULL,NULL,'index',273,274),
	(131,62,NULL,NULL,'Employees',284,295),
	(132,131,NULL,NULL,'index',285,286),
	(133,131,NULL,NULL,'add',287,288),
	(135,131,NULL,NULL,'edit',289,290),
	(136,131,NULL,NULL,'delete',291,292),
	(137,62,NULL,NULL,'Contacts',296,307),
	(138,137,NULL,NULL,'index',297,298),
	(139,137,NULL,NULL,'view',299,300),
	(140,137,NULL,NULL,'add',301,302),
	(141,137,NULL,NULL,'edit',303,304),
	(142,137,NULL,NULL,'delete',305,306),
	(143,62,NULL,NULL,'CourseCodes',308,319),
	(144,143,NULL,NULL,'index',309,310),
	(145,143,NULL,NULL,'view',311,312),
	(146,143,NULL,NULL,'add',313,314),
	(147,143,NULL,NULL,'edit',315,316),
	(148,143,NULL,NULL,'delete',317,318),
	(149,62,NULL,NULL,'Departments',320,331),
	(150,149,NULL,NULL,'index',321,322),
	(151,149,NULL,NULL,'view',323,324),
	(152,149,NULL,NULL,'add',325,326),
	(153,149,NULL,NULL,'edit',327,328),
	(154,149,NULL,NULL,'delete',329,330),
	(155,62,NULL,NULL,'EmployeeAttendances',332,343),
	(156,155,NULL,NULL,'index',333,334),
	(157,155,NULL,NULL,'view',335,336),
	(158,155,NULL,NULL,'add',337,338),
	(159,155,NULL,NULL,'edit',339,340),
	(160,155,NULL,NULL,'delete',341,342),
	(161,62,NULL,NULL,'EmployeeCategories',344,355),
	(162,161,NULL,NULL,'index',345,346),
	(163,161,NULL,NULL,'view',347,348),
	(164,161,NULL,NULL,'add',349,350),
	(165,161,NULL,NULL,'edit',351,352),
	(166,161,NULL,NULL,'delete',353,354),
	(167,131,NULL,NULL,'view',293,294),
	(168,62,NULL,NULL,'EmployeesMeetings',356,367),
	(169,168,NULL,NULL,'index',357,358),
	(170,168,NULL,NULL,'view',359,360),
	(171,168,NULL,NULL,'add',361,362),
	(172,168,NULL,NULL,'edit',363,364),
	(173,168,NULL,NULL,'delete',365,366),
	(174,62,NULL,NULL,'EmployeesSchools',368,379),
	(175,174,NULL,NULL,'index',369,370),
	(176,174,NULL,NULL,'view',371,372),
	(177,174,NULL,NULL,'add',373,374),
	(178,174,NULL,NULL,'edit',375,376),
	(179,174,NULL,NULL,'delete',377,378),
	(180,62,NULL,NULL,'Events',380,391),
	(181,180,NULL,NULL,'index',381,382),
	(182,180,NULL,NULL,'view',383,384),
	(183,180,NULL,NULL,'add',385,386),
	(184,180,NULL,NULL,'edit',387,388),
	(185,180,NULL,NULL,'delete',389,390),
	(186,75,NULL,NULL,'admin_index',153,154),
	(187,75,NULL,NULL,'admin_view',155,156),
	(188,75,NULL,NULL,'admin_add',157,158),
	(189,75,NULL,NULL,'admin_edit',159,160),
	(190,75,NULL,NULL,'admin_delete',161,162),
	(191,62,NULL,NULL,'GradesLaboratories',392,403),
	(192,191,NULL,NULL,'index',393,394),
	(193,191,NULL,NULL,'view',395,396),
	(194,191,NULL,NULL,'add',397,398),
	(195,191,NULL,NULL,'edit',399,400),
	(196,191,NULL,NULL,'delete',401,402),
	(197,126,NULL,NULL,'view',253,254),
	(198,126,NULL,NULL,'add',255,256),
	(199,126,NULL,NULL,'edit',257,258),
	(200,126,NULL,NULL,'delete',259,260),
	(201,126,NULL,NULL,'admin_index',261,262),
	(202,126,NULL,NULL,'admin_view',263,264),
	(203,126,NULL,NULL,'admin_add',265,266),
	(204,126,NULL,NULL,'admin_edit',267,268),
	(205,126,NULL,NULL,'admin_delete',269,270),
	(206,62,NULL,NULL,'LaboratoryAttendances',404,423),
	(207,206,NULL,NULL,'index',405,406),
	(208,206,NULL,NULL,'view',407,408),
	(209,206,NULL,NULL,'add',409,410),
	(210,206,NULL,NULL,'edit',411,412),
	(211,206,NULL,NULL,'delete',413,414),
	(212,206,NULL,NULL,'selectSchool',415,416),
	(213,206,NULL,NULL,'findGrades',417,418),
	(214,206,NULL,NULL,'findLab',419,420),
	(215,206,NULL,NULL,'take',421,422),
	(216,62,NULL,NULL,'MeetingTypes',424,435),
	(217,216,NULL,NULL,'index',425,426),
	(218,216,NULL,NULL,'view',427,428),
	(219,216,NULL,NULL,'add',429,430),
	(220,216,NULL,NULL,'edit',431,432),
	(221,216,NULL,NULL,'delete',433,434),
	(222,129,NULL,NULL,'view',275,276),
	(223,129,NULL,NULL,'add',277,278),
	(224,129,NULL,NULL,'edit',279,280),
	(225,129,NULL,NULL,'delete',281,282),
	(226,62,NULL,NULL,'Observators',436,447),
	(227,226,NULL,NULL,'index',437,438),
	(228,226,NULL,NULL,'view',439,440),
	(229,226,NULL,NULL,'add',441,442),
	(230,226,NULL,NULL,'edit',443,444),
	(231,226,NULL,NULL,'delete',445,446),
	(232,62,NULL,NULL,'StudentGrades',448,459),
	(233,232,NULL,NULL,'index',449,450),
	(234,232,NULL,NULL,'view',451,452),
	(235,232,NULL,NULL,'add',453,454),
	(236,232,NULL,NULL,'edit',455,456),
	(237,232,NULL,NULL,'delete',457,458);

/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table aros
# ------------------------------------------------------------

CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`)
VALUES
	(1,NULL,'Group',1,NULL,1,4),
	(2,NULL,'Group',2,NULL,5,8),
	(3,1,'User',1,NULL,2,3),
	(4,2,'User',2,NULL,6,7);

/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table aros_acos
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`)
VALUES
	(1,1,62,'1','1','1','1'),
	(2,2,62,'-1','-1','-1','-1'),
	(3,1,1,'1','1','1','1'),
	(4,3,1,'1','1','1','1'),
	(5,1,2,'1','1','1','1'),
	(6,2,63,'1','1','1','1');

/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table attendances
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `attendances` WRITE;
/*!40000 ALTER TABLE `attendances` DISABLE KEYS */;

INSERT INTO `attendances` (`id`, `student_id`, `attendance_date`, `grade_id`, `present`, `absent`, `late`, `reason`, `created`, `modified`, `trashed`, `created_by`, `modified_by`, `trashed_by`, `note`)
VALUES
	(1,1,'0000-00-00',3,NULL,1,0,'malattia','2013-01-18 00:13:53','2013-01-18 00:13:53',NULL,NULL,NULL,NULL,NULL),
	(2,2,'0000-00-00',2,NULL,0,1,'motivi familiari','2013-01-18 00:13:53','2013-01-18 00:13:53',NULL,NULL,NULL,NULL,NULL),
	(3,3,'0000-00-00',2,NULL,1,0,'sconosciuto','2013-01-18 00:13:53','2013-01-18 00:13:53',NULL,NULL,NULL,NULL,NULL),
	(4,2,'2015-12-19',1,1,0,0,'','2015-12-19 21:12:58','2015-12-19 23:43:57',NULL,1,1,NULL,NULL),
	(5,1,'2015-12-19',1,0,0,1,'Traffico','2015-12-19 21:12:58','2015-12-19 23:43:57',NULL,1,1,NULL,NULL),
	(6,4,'2015-12-19',1,1,0,0,'','2015-12-19 23:43:57','2015-12-19 23:43:57',NULL,1,1,NULL,NULL),
	(7,5,'2015-12-19',1,1,0,0,'','2015-12-19 23:43:57','2015-12-19 23:43:57',NULL,1,1,NULL,NULL),
	(8,3,'2015-12-19',1,0,1,0,'','2015-12-19 23:43:57','2015-12-19 23:43:57',NULL,1,1,NULL,NULL),
	(9,6,'2015-12-19',1,1,0,0,'','2015-12-19 23:43:57','2015-12-19 23:43:57',NULL,1,1,NULL,NULL);

/*!40000 ALTER TABLE `attendances` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contacts
# ------------------------------------------------------------

CREATE TABLE `contacts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(127) DEFAULT NULL,
  `city` varchar(63) DEFAULT NULL,
  `state` varchar(63) DEFAULT NULL,
  `zip` varchar(6) DEFAULT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `e_mail` varchar(63) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `trashed` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `trashed_by` int(10) DEFAULT NULL,
  `note` varchar(511) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table course_codes
# ------------------------------------------------------------

CREATE TABLE `course_codes` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `code` int(4) NOT NULL,
  `value` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `course_codes` WRITE;
/*!40000 ALTER TABLE `course_codes` DISABLE KEYS */;

INSERT INTO `course_codes` (`id`, `code`, `value`)
VALUES
	(1,1,'Scuola Elementare'),
	(2,2,'Scuola Media'),
	(3,3,'Scuola Superiore');

/*!40000 ALTER TABLE `course_codes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table departments
# ------------------------------------------------------------

CREATE TABLE `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(127) NOT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;

INSERT INTO `departments` (`id`, `name`, `notes`)
VALUES
	(1,'Maestri di Strada','');

/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table employee_attendances
# ------------------------------------------------------------

CREATE TABLE `employee_attendances` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `employee_id` int(10) NOT NULL,
  `attendance_date` date NOT NULL,
  `laboratory_id` int(10) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table employee_categories
# ------------------------------------------------------------

CREATE TABLE `employee_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(127) NOT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `employee_categories` WRITE;
/*!40000 ALTER TABLE `employee_categories` DISABLE KEYS */;

INSERT INTO `employee_categories` (`id`, `name`, `notes`)
VALUES
	(1,'Educatore',''),
	(2,'Insegnante','');

/*!40000 ALTER TABLE `employee_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table employees
# ------------------------------------------------------------

CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_category_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `first_name` varchar(127) NOT NULL,
  `last_name` varchar(127) NOT NULL,
  `tax_code` char(16) DEFAULT NULL,
  `vat_code` char(16) DEFAULT NULL,
  `job_title` varchar(127) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address_line1` varchar(127) DEFAULT NULL,
  `address_line2` varchar(127) DEFAULT NULL,
  `city` varchar(127) DEFAULT NULL,
  `state` varchar(63) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `zip_code` varchar(11) DEFAULT NULL,
  `mobile_phone` varchar(63) DEFAULT NULL,
  `home_phone` varchar(63) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_manager` tinyint(1) DEFAULT '0',
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;

INSERT INTO `employees` (`id`, `employee_category_id`, `department_id`, `manager_id`, `first_name`, `last_name`, `tax_code`, `vat_code`, `job_title`, `status`, `date_of_birth`, `address_line1`, `address_line2`, `city`, `state`, `country_id`, `zip_code`, `mobile_phone`, `home_phone`, `email`, `created`, `modified`, `created_by`, `modified_by`, `deleted`, `user_id`, `is_manager`, `notes`)
VALUES
	(6,2,1,NULL,'Gianfranco','Magalli','','','',0,'2015-12-19','','','','',NULL,'','','','','2015-12-19 23:10:03','2015-12-19 23:10:03',NULL,1,'2015-12-19 23:09:00',1,0,'');

/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table employees_meetings
# ------------------------------------------------------------

CREATE TABLE `employees_meetings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `employee_id` int(10) NOT NULL,
  `meeting_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table employees_schools
# ------------------------------------------------------------

CREATE TABLE `employees_schools` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `employee_id` int(10) NOT NULL,
  `school_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `employees_schools` WRITE;
/*!40000 ALTER TABLE `employees_schools` DISABLE KEYS */;

INSERT INTO `employees_schools` (`id`, `employee_id`, `school_id`)
VALUES
	(1,6,2);

/*!40000 ALTER TABLE `employees_schools` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table events
# ------------------------------------------------------------

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `is_common` tinyint(1) DEFAULT '1',
  `is_meeting` tinyint(1) DEFAULT '0',
  `is_laboratory` tinyint(1) DEFAULT '0',
  `is_exam` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `trashed` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `trashed_by` int(10) DEFAULT NULL,
  `note` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table grade_codes
# ------------------------------------------------------------

CREATE TABLE `grade_codes` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `code` tinyint(4) NOT NULL,
  `value` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table grades
# ------------------------------------------------------------

CREATE TABLE `grades` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `school_id` int(10) NOT NULL,
  `grade_number` int(2) NOT NULL,
  `grade_code` varchar(2) NOT NULL,
  `course_code_id` int(2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `trashed` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `trashed_by` int(10) DEFAULT NULL,
  `note` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `school_id` (`school_id`),
  CONSTRAINT `grade_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `grades` WRITE;
/*!40000 ALTER TABLE `grades` DISABLE KEYS */;

INSERT INTO `grades` (`id`, `school_id`, `grade_number`, `grade_code`, `course_code_id`, `created`, `modified`, `trashed`, `created_by`, `modified_by`, `trashed_by`, `note`)
VALUES
	(1,1,3,'d',1,'2015-12-19 19:50:59','2015-12-19 19:50:59',NULL,1,1,NULL,''),
	(2,1,4,'B',3,'2015-12-19 19:52:10','2015-12-19 19:52:10',NULL,1,1,NULL,''),
	(3,1,4,'B',1,'2015-12-19 20:56:46','2015-12-19 20:56:46',NULL,1,1,NULL,'Test'),
	(4,3,3,'A',3,'2015-12-19 20:57:00','2015-12-19 20:57:00',NULL,1,1,NULL,'');

/*!40000 ALTER TABLE `grades` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table grades_laboratories
# ------------------------------------------------------------

CREATE TABLE `grades_laboratories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grade_id` int(10) NOT NULL,
  `laboratory_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table groups
# ------------------------------------------------------------

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;

INSERT INTO `groups` (`id`, `name`, `created`, `modified`)
VALUES
	(1,'amministratori','2013-01-17 16:47:20','2013-01-17 16:47:20'),
	(2,'utenti','2013-01-17 16:48:27','2013-01-17 16:48:27');

/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table laboratories
# ------------------------------------------------------------

CREATE TABLE `laboratories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(127) NOT NULL,
  `description` varchar(254) NOT NULL,
  `employee_1_id` int(11) DEFAULT NULL,
  `employee_2_id` int(11) DEFAULT NULL,
  `observator` varchar(127) DEFAULT NULL,
  `starting_date` datetime DEFAULT NULL,
  `finishing_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `trashed` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `trashed_by` int(10) DEFAULT NULL,
  `note` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table laboratory_attendances
# ------------------------------------------------------------

CREATE TABLE `laboratory_attendances` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `student_id` int(10) NOT NULL,
  `attendance_date` date NOT NULL,
  `laboratory_id` int(10) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table meeting_attendances
# ------------------------------------------------------------

CREATE TABLE `meeting_attendances` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `employee_id` int(10) NOT NULL,
  `attendance_date` date NOT NULL,
  `meeting_id` int(10) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table meeting_types
# ------------------------------------------------------------

CREATE TABLE `meeting_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(127) NOT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table meetings
# ------------------------------------------------------------

CREATE TABLE `meetings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `meeting_date` datetime DEFAULT NULL,
  `meeting_type_id` int(10) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `trashed` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `trashed_by` int(10) DEFAULT NULL,
  `note` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table observators
# ------------------------------------------------------------

CREATE TABLE `observators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(127) NOT NULL,
  `observation_date` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table schools
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `schools` WRITE;
/*!40000 ALTER TABLE `schools` DISABLE KEYS */;

INSERT INTO `schools` (`id`, `name`, `school_code`, `address`, `zipcode`, `city`, `state`, `phone_number_1`, `phone_number_2`, `created`, `modified`, `trashed`, `created_by`, `modified_by`, `trashed_by`, `note`)
VALUES
	(1,'Istituto Comprensivo TEST 1',45,'Via Nuova 45','80146','Napoli','NA','081 34434334','081 39344334','2013-01-17 23:11:16','2013-01-17 23:11:16','2013-01-17 23:09:00',NULL,NULL,NULL,'note sulla scuola varie'),
	(2,'Scuola Media Statale PROVA 3',34,'Via Syd Barrett 68','80100','Napoli','NA','081 30083082','081 393893','2013-01-17 23:12:23','2013-01-17 23:12:23','2013-01-17 23:11:00',NULL,NULL,NULL,''),
	(3,'Petriccione',54,'C.so San Giovanni, 666','80146','Napoli','NA','','','2013-02-01 12:35:03','2013-02-01 12:35:03','2013-02-01 12:33:00',0,NULL,NULL,'');

/*!40000 ALTER TABLE `schools` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table student_grades
# ------------------------------------------------------------

CREATE TABLE `student_grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(127) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `trashed` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `trashed_by` int(10) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table students
# ------------------------------------------------------------

CREATE TABLE `students` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;

INSERT INTO `students` (`id`, `first_name`, `last_name`, `email`, `grade_id`, `date_of_birth`, `address`, `zipcode`, `city`, `state`, `phone_number_1`, `phone_number_2`, `phone_number_3`, `created`, `modified`, `trashed`, `created_by`, `modified_by`, `trashed_by`, `note`)
VALUES
	(1,'Gennaro','Esposito',NULL,1,'1993-12-19','Via Pippo','80190','Napoli','NA','','','','2015-12-19 21:11:58','2015-12-19 21:11:58',NULL,1,1,NULL,''),
	(2,'Gianluigi','Bombatomica',NULL,1,'1991-08-19','Via Pluto 78','80100','Napoli','NA','','','','2015-12-19 21:12:33','2015-12-19 21:12:33',NULL,1,1,NULL,''),
	(3,'Maria','Nazionale',NULL,1,'1987-07-22','','','','','','','','2015-12-19 23:40:41','2015-12-19 23:40:41',NULL,1,1,NULL,''),
	(4,'Marisa','Laurito',NULL,1,'1988-07-19','Via Pippo','80100','','','','','','2015-12-19 23:41:14','2015-12-19 23:41:14',NULL,1,1,NULL,'Do re Mi'),
	(5,'Filomena','Marturano',NULL,1,'2009-12-19','','','','','','','','2015-12-19 23:42:46','2015-12-19 23:42:46',NULL,1,1,NULL,''),
	(6,'Simona','Ventura',NULL,1,'2009-12-19','','','','','','','','2015-12-19 23:42:58','2015-12-19 23:42:58',NULL,1,1,NULL,'');

/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `trashed` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `trashed_by` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `email`, `password`, `group_id`, `created`, `modified`, `trashed`, `created_by`, `modified_by`, `trashed_by`)
VALUES
	(1,'amministratore',NULL,'6ba367b331a3cfe9b82848affcc270736a2b698b',1,'2013-01-17 16:48:53','2013-01-17 16:48:53',NULL,NULL,NULL,NULL),
	(2,'utente',NULL,'6ba367b331a3cfe9b82848affcc270736a2b698b',2,'2013-01-17 16:49:06','2013-01-17 16:49:19',NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
