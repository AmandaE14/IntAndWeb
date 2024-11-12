INSERT INTO `library` (`name`) VALUES ('Central Library');
INSERT INTO `library` (`name`) VALUES ('Westside Library');

INSERT INTO `books` (`name`) VALUES ('Introduction to SQL');
INSERT INTO `books` (`name`) VALUES ('Advanced PHP Programming');

INSERT INTO `libraryBook` (`libraryID`, `bookID`) VALUES (1, 1);
INSERT INTO `libraryBook` (`libraryID`, `bookID`) VALUES (1, 2);
INSERT INTO `libraryBook` (`libraryID`, `bookID`) VALUES (2, 1);

SELECT * FROM `library` WHERE `id` = 1;

SELECT * FROM `books` WHERE `name` LIKE '%SQL%';

SELECT * FROM `books` ORDER BY `name` ASC;