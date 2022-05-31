
CREATE DATABASE `Articles`;
USE `Articles`;

CREATE TABLE `Articles` (
	`id` INT(100) NOT NULL AUTO_INCREMENT,
	`Title` VARCHAR(100),	
	`Autor` VARCHAR(100),
	`Text` TEXT,
	`Cover_image` TEXT,
	`Create_time` TIMESTAMP,	
	PRIMARY KEY (`id`)
);