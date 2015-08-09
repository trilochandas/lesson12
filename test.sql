-- Adminer 4.2.0 MySQL dump
DROP TABLE IF EXISTS `adverts`;
CREATE TABLE `adverts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(7) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `allow_mails` tinyint(1) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `city` varchar(30) NOT NULL,
  `metro` varchar(30) NOT NULL,
  `category_id` varchar(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` mediumint(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `adverts` (`id`, `type`, `name`, `email`, `allow_mails`, `phone`, `city`, `metro`, `category_id`, `title`, `description`, `price`) VALUES
(1,	'company',	'asdf',	'asdf@asdf.asdf',	0,	'123',	'',	'0',	'',	'321',	'321',	321),
(2,	'private',	'52354',	'',	0,	'52354',	'',	'0',	'',	'444',	'444',	444),
(3,	'private',	'Tree humble',	'gdsg@aeg.asdf',	1,	'325',	'',	'',	'',	'shikshashtaka 3',	'trinad api sunuchena',	3);

DROP TABLE IF EXISTS `select_meta`;
CREATE TABLE `select_meta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `label` varchar(20) NOT NULL,
  `options` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `select_meta` (`id`, `name`, `label`, `options`) VALUES
(1,	'city',	'Город',	'{\"\":\"Выберите город\",\"64\":\"Маяпур\", \"16108\":\"Пури\", \"108\":\"Вриндаван\"}'),
(2,	'metro',	'Метро',	'[\"Выберите станцию\",\"Deli-Aeropor\", \"Jabo\", \"Haribo\"]'),
(3,	'Categorys',	'Категории',	'{\"\":\"Выберите категорию\",\"Спорт\":{\"6\":\"Гольф\",\"9\":\"Крикет\",\"7\":\"Плавание\"},\"Отдых\":{\"3\":\"Сауна\",\"1\":\"Массаж\"}}');

-- 2015-08-07 12:00:07
