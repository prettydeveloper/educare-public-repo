# ************************************************************
# Sequel Pro SQL dump
# Version 3991
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.24)
# Database: educare
# Generation Time: 2013-01-29 14:29:30 +0000
# ************************************************************


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
  PRIMARY KEY (`id`),
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table course_codes
# ------------------------------------------------------------

CREATE TABLE `course_codes` (
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
  `grade_code` varchar(10) NOT NULL DEFAULT '',
  `course_code_id` int(2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `trashed` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `trashed_by` int(10) DEFAULT NULL,
  `note` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`),
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



# Dump of table students
# ------------------------------------------------------------

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
  PRIMARY KEY (`id`),
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table users
# ------------------------------------------------------------

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
