

DROP TABLE IF EXISTS `educare`.`acos`;
DROP TABLE IF EXISTS `educare`.`aros`;
DROP TABLE IF EXISTS `educare`.`aros_acos`;
DROP TABLE IF EXISTS `educare`.`attendances`;
DROP TABLE IF EXISTS `educare`.`contacts`;
DROP TABLE IF EXISTS `educare`.`course_codes`;
DROP TABLE IF EXISTS `educare`.`departments`;
DROP TABLE IF EXISTS `educare`.`employee_attendances`;
DROP TABLE IF EXISTS `educare`.`employee_categories`;
DROP TABLE IF EXISTS `educare`.`employees`;
DROP TABLE IF EXISTS `educare`.`employees_meetings`;
DROP TABLE IF EXISTS `educare`.`employees_schools`;
DROP TABLE IF EXISTS `educare`.`events`;
DROP TABLE IF EXISTS `educare`.`grade_codes`;
DROP TABLE IF EXISTS `educare`.`grades`;
DROP TABLE IF EXISTS `educare`.`grades_laboratories`;
DROP TABLE IF EXISTS `educare`.`groups`;
DROP TABLE IF EXISTS `educare`.`laboratories`;
DROP TABLE IF EXISTS `educare`.`laboratory_attendances`;
DROP TABLE IF EXISTS `educare`.`meeting_attendances`;
DROP TABLE IF EXISTS `educare`.`meeting_types`;
DROP TABLE IF EXISTS `educare`.`meetings`;
DROP TABLE IF EXISTS `educare`.`observators`;
DROP TABLE IF EXISTS `educare`.`schools`;
DROP TABLE IF EXISTS `educare`.`student_grades`;
DROP TABLE IF EXISTS `educare`.`students`;
DROP TABLE IF EXISTS `educare`.`users`;


CREATE TABLE `educare`.`acos` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`parent_id` int(10) DEFAULT NULL,
	`model` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`foreign_key` int(10) DEFAULT NULL,
	`alias` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`lft` int(10) DEFAULT NULL,
	`rght` int(10) DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`aros` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`parent_id` int(10) DEFAULT NULL,
	`model` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`foreign_key` int(10) DEFAULT NULL,
	`alias` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`lft` int(10) DEFAULT NULL,
	`rght` int(10) DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`aros_acos` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`aro_id` int(10) NOT NULL,
	`aco_id` int(10) NOT NULL,
	`_create` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT '0' NOT NULL,
	`_read` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT '0' NOT NULL,
	`_update` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT '0' NOT NULL,
	`_delete` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT '0' NOT NULL,	PRIMARY KEY  (`id`),
	UNIQUE KEY `ARO_ACO_KEY` (`aro_id`, `aco_id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`attendances` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`student_id` int(10) NOT NULL,
	`attendance_date` date NOT NULL,
	`grade_id` int(10) NOT NULL,
	`present` tinyint(1) DEFAULT NULL,
	`absent` tinyint(1) DEFAULT NULL,
	`late` tinyint(1) DEFAULT NULL,
	`reason` varchar(512) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`trashed` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`modified_by` int(10) DEFAULT NULL,
	`trashed_by` int(10) DEFAULT NULL,
	`note` varchar(512) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`contacts` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`address` varchar(127) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`city` varchar(63) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`state` varchar(63) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`zip` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`phone` varchar(14) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`e_mail` varchar(63) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`trashed` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`modified_by` int(10) DEFAULT NULL,
	`trashed_by` int(10) DEFAULT NULL,
	`note` varchar(511) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`course_codes` (
	`id` int(4) NOT NULL AUTO_INCREMENT,
	`code` int(4) NOT NULL,
	`value` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`departments` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(127) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`notes` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`employee_attendances` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`employee_id` int(10) NOT NULL,
	`attendance_date` date NOT NULL,
	`laboratory_id` int(10) NOT NULL,
	`grade_id` int(10) NOT NULL,
	`present` tinyint(1) DEFAULT NULL,
	`absent` tinyint(1) DEFAULT NULL,
	`late` tinyint(1) DEFAULT NULL,
	`reason` varchar(512) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`trashed` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`modified_by` int(10) DEFAULT NULL,
	`trashed_by` int(10) DEFAULT NULL,
	`note` varchar(512) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`employee_categories` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(127) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`notes` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`employees` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`employee_category_id` int(11) DEFAULT NULL,
	`department_id` int(11) DEFAULT NULL,
	`manager_id` int(11) DEFAULT NULL,
	`first_name` varchar(127) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`last_name` varchar(127) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`tax_code` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`vat_code` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`job_title` varchar(127) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`status` tinyint(1) DEFAULT NULL,
	`date_of_birth` date DEFAULT NULL,
	`address_line1` varchar(127) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`address_line2` varchar(127) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`city` varchar(127) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`state` varchar(63) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`country_id` int(11) DEFAULT NULL,
	`zip_code` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`mobile_phone` varchar(63) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`home_phone` varchar(63) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`created_by` int(11) DEFAULT NULL,
	`modified_by` int(11) DEFAULT NULL,
	`deleted` datetime DEFAULT NULL,
	`user_id` int(11) DEFAULT NULL,
	`is_manager` tinyint(1) DEFAULT '0',
	`notes` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`employees_meetings` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`employee_id` int(10) NOT NULL,
	`meeting_id` int(10) NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`employees_schools` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`employee_id` int(10) NOT NULL,
	`school_id` int(10) NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`events` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
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
	`note` varchar(512) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`grade_codes` (
	`id` int(4) NOT NULL AUTO_INCREMENT,
	`code` int(4) NOT NULL,
	`value` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`grades` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`school_id` int(10) NOT NULL,
	`grade_number` int(2) NOT NULL,
	`grade_code` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`course_code_id` int(2) NOT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`trashed` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`modified_by` int(10) DEFAULT NULL,
	`trashed_by` int(10) DEFAULT NULL,
	`note` varchar(512) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,	PRIMARY KEY  (`id`),
	KEY `school_id` (`school_id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`grades_laboratories` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`grade_id` int(10) NOT NULL,
	`laboratory_id` int(10) NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`groups` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`laboratories` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`name` varchar(127) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`description` varchar(254) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`employee_1_id` int(11) DEFAULT NULL,
	`employee_2_id` int(11) DEFAULT NULL,
	`observator` varchar(127) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`starting_date` datetime DEFAULT NULL,
	`finishing_date` datetime DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`trashed` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`modified_by` int(10) DEFAULT NULL,
	`trashed_by` int(10) DEFAULT NULL,
	`note` varchar(512) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`laboratory_attendances` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`student_id` int(10) NOT NULL,
	`attendance_date` date NOT NULL,
	`laboratory_id` int(10) NOT NULL,
	`present` tinyint(1) DEFAULT NULL,
	`absent` tinyint(1) DEFAULT NULL,
	`late` tinyint(1) DEFAULT NULL,
	`reason` varchar(512) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`trashed` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`modified_by` int(10) DEFAULT NULL,
	`trashed_by` int(10) DEFAULT NULL,
	`note` varchar(512) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`meeting_attendances` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`employee_id` int(10) NOT NULL,
	`attendance_date` date NOT NULL,
	`meeting_id` int(10) NOT NULL,
	`present` tinyint(1) DEFAULT NULL,
	`absent` tinyint(1) DEFAULT NULL,
	`late` tinyint(1) DEFAULT NULL,
	`reason` varchar(512) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`trashed` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`modified_by` int(10) DEFAULT NULL,
	`trashed_by` int(10) DEFAULT NULL,
	`note` varchar(512) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`meeting_types` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(127) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`notes` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`meetings` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`meeting_date` datetime DEFAULT NULL,
	`meeting_type_id` int(10) NOT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`trashed` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`modified_by` int(10) DEFAULT NULL,
	`trashed_by` int(10) DEFAULT NULL,
	`note` varchar(512) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`observators` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(127) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`observation_date` date DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`created_by` int(11) DEFAULT NULL,
	`modified_by` int(11) DEFAULT NULL,
	`deleted` datetime DEFAULT NULL,
	`notes` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`schools` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`school_code` int(4) DEFAULT NULL,
	`address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`zipcode` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`city` varchar(127) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`state` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`phone_number_1` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`phone_number_2` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`trashed` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`modified_by` int(10) DEFAULT NULL,
	`trashed_by` int(10) DEFAULT NULL,
	`note` varchar(511) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`student_grades` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`value` varchar(127) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`student_id` int(11) NOT NULL,
	`date` date DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`trashed` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`modified_by` int(10) DEFAULT NULL,
	`trashed_by` int(10) DEFAULT NULL,
	`note` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`students` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`first_name` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`last_name` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`grade_id` int(10) NOT NULL,
	`date_of_birth` date NOT NULL,
	`address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`zipcode` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`city` varchar(127) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`state` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`phone_number_1` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`phone_number_2` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`phone_number_3` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`trashed` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`modified_by` int(10) DEFAULT NULL,
	`trashed_by` int(10) DEFAULT NULL,
	`note` varchar(512) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `educare`.`users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`password` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`group_id` int(11) NOT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`trashed` datetime DEFAULT NULL,
	`created_by` int(10) DEFAULT NULL,
	`modified_by` int(10) DEFAULT NULL,
	`trashed_by` int(10) DEFAULT NULL,	PRIMARY KEY  (`id`),
	UNIQUE KEY `username` (`username`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

