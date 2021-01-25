-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Articles`;
CREATE TABLE `Articles` (
                            `id` int(11) NOT NULL AUTO_INCREMENT,
                            `Title` varchar(50) NOT NULL,
                            `Text` varchar(150) NOT NULL,
                            `Date_Start` datetime NOT NULL,
                            `Date_End` datetime NOT NULL,
                            `Importance` smallint(5) NOT NULL DEFAULT 0,
                            `Authors_id` int(11) NOT NULL,
                            PRIMARY KEY (`id`),
                            KEY `fk_Article_Auteur1_idx` (`Authors_id`),
                            CONSTRAINT `fk_Article_Auteur1` FOREIGN KEY (`Authors_id`) REFERENCES `Authors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Articles` (`id`, `Title`, `Text`, `Date_Start`, `Date_End`, `Importance`, `Authors_id`) VALUES
(1,	'Sport tennis',	'Lorem ipsum dolor sit amet, Biathlon adipiscing elit. Nullam pretium commodo odio at ultrices. Nullam porttitor velit in rutrum eleifend. ',	'1970-01-01 00:00:00',	'1989-12-12 00:00:00',	5,	6),
(2,	'Sport foot',	'Lorem Biathlon  ipsum dolor sit amet, adipiscing elit. Nullam pretium commodo odio at ultrices. Nullam porttitor velit in rutrum eleifend. ',	'1989-01-01 00:00:00',	'2000-12-12 00:00:00',	4,	6),
(4,	'Sport rudby',	'Lorem Biathlon  ipsum dolor sit amet, adipiscing elit. Nullam pretium commodo odio at ultrices. Nullam porttitor velit in rutrum eleifend. ',	'2010-01-01 00:00:00',	'2020-12-12 00:00:00',	4,	7),
(5,	'Sport baseball',	'Lorem Biathlon  ipsum dolor sit amet, adipiscing elit. Nullam pretium commodo odio at ultrices. Nullam porttitor velit in rutrum eleifend. ',	'2021-01-21 00:00:00',	'2021-03-21 00:00:00',	2,	3);

DROP TABLE IF EXISTS `article_has_categorie`;
CREATE TABLE `article_has_categorie` (
                                         `Articles_id` int(11) NOT NULL,
                                         `Categorys_id` int(11) NOT NULL,
                                         PRIMARY KEY (`Articles_id`,`Categorys_id`),
                                         KEY `fk_Article_has_Categorie_Categorie1_idx` (`Categorys_id`),
                                         KEY `fk_Article_has_Categorie_Article1_idx` (`Articles_id`),
                                         CONSTRAINT `fk_Article_has_Categorie_Article1` FOREIGN KEY (`Articles_id`) REFERENCES `Articles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
                                         CONSTRAINT `fk_Article_has_Categorie_Categorie1` FOREIGN KEY (`Categorys_id`) REFERENCES `categorie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `Authors`;
CREATE TABLE `Authors` (
                           `id` int(11) NOT NULL AUTO_INCREMENT,
                           `Pseudo` varchar(45) NOT NULL,
                           `Nickname` varchar(45) DEFAULT NULL,
                           `Surname` varchar(45) NOT NULL,
                           PRIMARY KEY (`id`),
                           UNIQUE KEY `pseudo_UNIQUE` (`Pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Authors` (`id`, `Pseudo`, `Nickname`, `Surname`) VALUES
(3,	'Matéo',	'Toto',	'Dupond'),
(4,	'Valentine',	'Valon',	'Vale'),
(5,	'Sheig307',	'xhui',	'shashi'),
(6,	'dimitri',	'Vasili',	'Petrotchki'),
(7,	'JeanD',	'Jean',	'mendez');

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE `categorie` (
                             `id` int(11) NOT NULL AUTO_INCREMENT,
                             `Name_Category` varchar(45) NOT NULL,
                             PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `categorie` (`id`, `Name_Category`) VALUES
(1,	'loisir');

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE `commentaire` (
                               `id` int(11) NOT NULL AUTO_INCREMENT,
                               `Commentaire` varchar(150) NOT NULL,
                               `Date_Add` datetime NOT NULL DEFAULT current_timestamp(),
                               `Author_id` int(11) NOT NULL,
                               `Articles_id` int(11) NOT NULL,
                               PRIMARY KEY (`id`),
                               KEY `fk_Commentaire_Auteur_idx` (`Author_id`),
                               KEY `fk_Commentaire_Article1_idx` (`Articles_id`),
                               CONSTRAINT `fk_Commentaire_Article1` FOREIGN KEY (`Articles_id`) REFERENCES `Articles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
                               CONSTRAINT `fk_Commentaire_Auteur` FOREIGN KEY (`Author_id`) REFERENCES `Authors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `commentaire` (`id`, `Commentaire`, `Date_Add`, `Author_id`, `Articles_id`) VALUES
(1,	'BravoBravoBravoBravoBravoBravoBravoBravoBravoBravoBravoBravoBravoBravo',	'2021-01-21 14:19:27',	3,	5),
(2,	'Sans commentaire Sans commentaire Sans commentaire',	'2021-01-21 14:19:27',	5,	2);

-- 2021-01-25 11:07:00
