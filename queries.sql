-- Create database
CREATE DATABASE IF NOT EXISTS `institute_management_system`;
USE `institute_management_system`;

-- Create Apple table
CREATE TABLE `institute_management_system`.`Apple` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `age` VARCHAR(2) NOT NULL , PRIMARY KEY (`id`)) ;