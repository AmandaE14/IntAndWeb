CREATE DATABASE `homework_9`;

USE `homework_9`;

CREATE TABLE `library` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(80) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `books` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(80) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `libraryBook` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `libraryID` int(11) NOT NULL,
    `bookID` int(11) NOT NULL,
    PRIMARY KEY (`id`)
);