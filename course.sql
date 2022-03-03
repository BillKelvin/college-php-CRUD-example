CREATE DATABASE IF NOT EXISTS `college`;
USE `college`;
CREATE TABLE `course`(
	`code` VARCHAR(10) PRIMARY KEY,
	`name`VARCHAR(50),
	`subject`VARCHAR(50),
	`instructor`VARCHAR(50),
	`weeks` INTEGER(2),
	`description` TEXT
);