-- Adminer 4.8.1 MySQL 5.5.5-10.6.5-MariaDB-1:10.6.5+maria~focal dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `myTodo`;
CREATE TABLE `myTodo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `todo` varchar(255) DEFAULT NULL,
  `user` varchar(20) CHARACTER SET utf8mb3 DEFAULT NULL,
  `done` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- 2022-01-25 19:33:10
