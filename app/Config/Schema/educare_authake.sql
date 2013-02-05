# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.24)
# Database: educare
# Generation Time: 2013-02-05 10:46:08 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table authake_groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `authake_groups`;

CREATE TABLE `authake_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `authake_groups` WRITE;
/*!40000 ALTER TABLE `authake_groups` DISABLE KEYS */;

INSERT INTO `authake_groups` (`id`, `name`)
VALUES
	(1,'Administrators'),
	(2,'Registered users');

/*!40000 ALTER TABLE `authake_groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table authake_groups_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `authake_groups_users`;

CREATE TABLE `authake_groups_users` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `group_id` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `authake_groups_users` WRITE;
/*!40000 ALTER TABLE `authake_groups_users` DISABLE KEYS */;

INSERT INTO `authake_groups_users` (`user_id`, `group_id`)
VALUES
	(1,1);

/*!40000 ALTER TABLE `authake_groups_users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table authake_rules
# ------------------------------------------------------------

DROP TABLE IF EXISTS `authake_rules`;

CREATE TABLE `authake_rules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Rule description',
  `group_id` int(10) unsigned DEFAULT NULL,
  `order` int(10) unsigned DEFAULT NULL,
  `action` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permission` bit(1) NOT NULL DEFAULT b'0',
  `forward` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `authake_rules` WRITE;
/*!40000 ALTER TABLE `authake_rules` DISABLE KEYS */;

INSERT INTO `authake_rules` (`id`, `name`, `group_id`, `order`, `action`, `permission`, `forward`, `message`)
VALUES
	(1,'Allow everything for Administrators',1,999999,'*',1,'',''),
	(2,'Allow anybody to see the home page, the error page, to register, to log in, see profile and log out',NULL,200,'/ or /authake/user/* or /register or /login or /logout or /lost-password or /verify(/)?* or /pass(/)?* or /profile or /denied or /pages(/)?* or //pages/*',1,'',''),
	(4,'Deny everything for everybody by default (allow to have allow by default then deny)',NULL,0,'*',0,'','Access denied!'),
	(6,'Display a message for denied admin page',NULL,100,'/authake(/index)? or /authake/users* or /authake/groups* or /authake/rules*',0,'','You are not allowed to access the administration page!');

/*!40000 ALTER TABLE `authake_rules` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table authake_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `authake_users`;

CREATE TABLE `authake_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `emailcheckcode` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `passwordchangecode` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `disable` tinyint(1) NOT NULL COMMENT 'Disable/enable account',
  `expire_account` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `authake_users` WRITE;
/*!40000 ALTER TABLE `authake_users` DISABLE KEYS */;

INSERT INTO `authake_users` (`id`, `login`, `password`, `email`, `emailcheckcode`, `passwordchangecode`, `disable`, `expire_account`, `created`, `updated`)
VALUES
	(1,'admin','21232f297a57a5a743894a0e4a801fc3','root','','',0,NULL,'0000-00-00 00:00:00','2008-02-12 12:19:31');

/*!40000 ALTER TABLE `authake_users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
