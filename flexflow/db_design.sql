CREATE DATABASE IF NOT EXISTS `flexflow`;
USE `flexflow`;
CREATE TABLE `person` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `fname` VARCHAR(40) NOT NULL,
    `lname` VARCHAR(40) NOT NULL,
    `age` INT NOT NULL,
    `gender` CHAR(1) NOT NULL
);
CREATE TABLE `body_composition` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `person_id` INT,
    `height` DECIMAL(4,2) NOT NULL,
    `weight` DECIMAL(5,2) NOT NULL,
    `waistline` DECIMAL(5,2) NOT NULL,
    FOREIGN KEY(`person_id`) REFERENCES person(`id`)
);
CREATE TABLE `aerobic_fitness` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `person_id` INT,
    `bpm_rest` INT NOT NULL,
    `jog_time` DECIMAL(5,2) NOT NULL,
    FOREIGN KEY(`person_id`) REFERENCES person(`id`)
);
CREATE TABLE `muscular_fitness` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `person_id` INT,
    `situp_reps` INT NOT NULL,
    `pushup_reps` INT NOT NULL,
    `sit_reach` DECIMAL(5,2) NOT NULL,
    FOREIGN KEY(`person_id`) REFERENCES person(`id`)
);