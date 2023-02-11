-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 25 2015 г., 15:16
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `php_123`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `id_product` varchar(255) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `count_product` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `id_product`, `name_product`, `buyer`, `address`, `count_product`) VALUES
(1, '1', 'apple', 'Иванов', '', 5),
(2, '20', 'Cherry', 'Петров', '', 7),
(3, '12', 'Apricot', 'Сидоров', '', 5),
(4, '12', 'Apricot', 'Сидорович', '', 7),
(5, '37', 'name', 'Степанов', '', 3),
(6, '38', 'StarCraft II: Legacy of the Void / StarCraft 2: Legacy of th', 'Петров', '', 2),
(7, '70', 'Total War: Attila', 'Петренко', '', 5),
(8, '38', 'StarCraft II: Legacy of the Void / StarCraft 2: Legacy of th', 'Dan', '', 5),
(9, '12', 'Apricot', 'Петренко', '', 5),
(10, '81', 'cranberry', 'Иванов', '', 4),
(11, '28', 'Street Fighter V', 'Степанов', '', 2),
(12, '2', 'pear', 'Иванидзе', '', 3),
(13, '34', 'Star Wars: Battlefront / Star Wars: Battlefront 2015', 'Василий Иванович', '', 4),
(14, '12', 'Apricot', 'Василий Иванович', '', 10),
(15, '12', 'Apricot', '', '', 1),
(16, '1', 'apple', 'fdff', '', 1),
(17, '3', 'pineapple', 'Петя', 'ыаввммиаимаиаи', 1),
(18, '10', 'apricot', 'Петрекидзе', 'пр-т Независимости,45', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `collectmail`
--

CREATE TABLE IF NOT EXISTS `collectmail` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Дамп данных таблицы `collectmail`
--

INSERT INTO `collectmail` (`id`, `name`, `mail`) VALUES
(1, 'sdefdgfdgf', '1@mal.ru'),
(2, 'sdefdgfdgf', '1@mal.ru'),
(3, 'sdefdgfdgf', '1@mal.ru'),
(4, 'sdefdgfdgf', '1@mal.ru'),
(5, 'sdefdgfdgf', '1@mal.ru'),
(6, 'sdefdgfdgf', '1@mal.ru'),
(7, 'sdefdgfdgf', '1@mal.ru'),
(8, 'sdefdgfdgf', '1@mal.ru'),
(9, 'gffxcht', '1@mal.ru'),
(10, 'gffxcht', '1@mal.ru'),
(11, 'gffxcht', '1@mal.ru'),
(12, 'gffxcht', '1@mal.ru'),
(13, 'gffxcht', '1@mal.ru'),
(14, 'gffxcht', '1@mal.ru'),
(15, 'gffxcht', '1@mal.ru'),
(16, 'gffxcht', '1@mal.ru'),
(17, 'gffxcht', '1@mal.ru'),
(18, 'gffxcht', '1@mal.ru'),
(19, 'gffxcht', '1@mal.ru'),
(20, 'gffxcht', '1@mal.ru'),
(21, 'gffxcht', '1@mal.ru'),
(22, 'gffxcht', '1@mal.ru'),
(23, '', ''),
(24, 'ппрмолир', 'jknbjkiy@yjbjkbuby.ru'),
(25, 'efefefe', 'feffefeef'),
(26, 'ee', ''),
(27, 'ee', ''),
(28, '', 'w'),
(29, '', 'w'),
(30, '', 'f'),
(31, 'ewewewe', 'qqewqeqe'),
(32, '', 'b'),
(33, '', 'b'),
(34, '', 'n'),
(35, '', 'v'),
(36, 'rgrggrgr', 'vfrgggrrg'),
(37, 'efefefefe', 'dedfefef'),
(38, 'efefefefe', 'dedfefef'),
(39, 'efefefefe', 'dedfefef'),
(40, 'efefefefe', 'dedfefef'),
(41, 'efefefefe', 'dedfefef'),
(42, 'qsqsqsq', 'ssqasq'),
(43, 'llll', 'mlll'),
(44, 'вывыы', 'вавававв'),
(45, 'wdwdwdw', 'wdwddwdwdw'),
(46, 's', ''),
(47, 's', ''),
(48, 'ssdsds', 'sdsdss'),
(49, 'dwdf', 'ssssdx'),
(50, 'qdsd', 'sdsdd');

-- --------------------------------------------------------

--
-- Структура таблицы `comm`
--

CREATE TABLE IF NOT EXISTS `comm` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `idea` int(7) NOT NULL,
  `author` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `comm`
--

INSERT INTO `comm` (`id`, `idea`, `author`, `text`, `date`) VALUES
(1, 1, 'vdvdvvdvdvv', '', '2015-10-19'),
(2, 1, 'cvvcvc', '', '2015-10-19'),
(3, 1, 'Вася', 'cvcvcvcxcxcxcxcxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '2015-10-19'),
(4, 6, 'Василий Алибабаевич', 'АААбааааам!', '2015-10-19'),
(5, 1, 'ууку', '', '2015-11-24'),
(6, 1, 'Вася', '', '2015-11-24'),
(7, 6, 'ооооооооооооооооооооооооооооооо', 'щщщщщщщщщщщщщщщщщщщщщщщщщщщщщщщ', '2015-11-25'),
(8, 6, 'Вася Асясяевич', 'ААААААААААААААААААААААААААААААААА!', '2015-11-25'),
(9, 1, 'Василич Петрович', 'DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD', '2015-11-25'),
(10, 1, 'кекекекекекее', 'апапаппапапап', '2015-12-08'),
(11, 1, 'Василий Алибабаевич', 'Хачу пэсню пра ката', '2015-12-11'),
(12, 2, 'aaaaaaaaaaaaaaaa', 'dsdsdsdsds', '2015-12-19');

-- --------------------------------------------------------

--
-- Структура таблицы `fruits`
--

CREATE TABLE IF NOT EXISTS `fruits` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `pack` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `producer` varchar(255) NOT NULL,
  `name` varchar(60) NOT NULL,
  `goods` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `pack` (`pack`,`country`,`producer`,`name`,`goods`),
  FULLTEXT KEY `pack_2` (`pack`,`country`,`producer`,`name`,`goods`),
  FULLTEXT KEY `pack_3` (`pack`),
  FULLTEXT KEY `country` (`country`),
  FULLTEXT KEY `producer` (`producer`),
  FULLTEXT KEY `name` (`name`),
  FULLTEXT KEY `goods` (`goods`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=114 ;

--
-- Дамп данных таблицы `fruits`
--

INSERT INTO `fruits` (`id`, `pack`, `country`, `producer`, `name`, `goods`) VALUES
(1, 'box', 'Africa', 'ABS', 'apple', '<img <img src="fruits/00000001.jpg" />'),
(2, 'box', 'Africa', 'ABS', 'pear', '<img src="fruits/00000002.jpg" />'),
(3, 'box', 'Africa', 'ABS', 'pineapple', '<img src="fruits/00000003.jpg" />'),
(4, 'middle_box', 'Brazil', 'CRM', 'banana', '<img src="fruits/00000004.jpg" />'),
(5, 'middle_box', 'Brazil', 'CRM', 'melon', '<img src="fruits/00000005.jpg" />'),
(6, 'middle_box', 'Brazil', 'CRM', 'peach', '<img src="fruits/00000006.jpg" />'),
(7, 'big_box', 'New Zeland', 'BP', 'plum', '<img src="fruits/00000007.jpg" />'),
(8, 'big_box', 'New Zeland', 'BP', 'blood orange', '<img src="fruits/00000008.jpg" />'),
(9, 'big_box', 'New Zeland', 'BP', 'avocado', '<img src="fruits/00000009.jpg" />'),
(10, 'big_box', 'Africa', 'ABS', 'apricot', '<img src="fruits/00000010.jpg" />'),
(11, 'box', 'Africa', 'ABS', 'kiwi', '<img src="fruits/00000031.jpg" />'),
(12, 'box', 'Africa', 'ABS', 'Apricot', '<img src="fruits/00000012.jpg" />'),
(13, 'box', 'Africa', 'ABS', 'Avocado', '<img src="fruits/00000030.jpg" />'),
(14, 'box', 'Africa', 'ABS', 'Pawpaw', '<img src="fruits/00000014.jpg" />'),
(15, 'box', 'Africa', 'ABS', 'quince', '<img src="fruits/00000015.jpg" />'),
(16, 'box', 'Africa', 'ABS', 'pineapple', '<img src="fruits/00000016.jpg" />'),
(17, 'box', 'Africa', 'ABS', 'orange', '<img src="fruits/00000017.jpg" />'),
(18, 'box', 'Africa', 'ABS', 'Bergamot', '<img src="fruits/00000018.jpg" />'),
(19, 'box', 'Africa', 'ABS', 'Grapes', '<img src="fruits/00000019.jpg" />'),
(20, 'box', 'Africa', 'ABS', 'Cherry', '<img src="fruits/00000020.jpg" />'),
(21, 'box', 'Africa', 'ABS', 'Pomegranate', '<img src="fruits/00000021.jpg" />'),
(22, 'box', 'Africa', 'ABS', 'grapefruit', '<img src="fruits/00000022.jpg" />'),
(23, 'box', 'Africa', 'ABS', 'Guava', '<img src="fruits/00000023.jpg" />'),
(24, 'box', 'Africa', 'ABS', 'Jackfruit', '<img src="fruits/00000024.jpg" />'),
(25, 'box', 'Africa', 'ABS', 'Durian', '<img src="fruits/00000025.jpg" />'),
(26, 'box', 'Africa', 'ABS', 'Melon', '<img src="fruits/00000026.jpg" />'),
(27, 'box', 'Africa', 'ABS', 'Fig', '<img src="fruits/00000027.jpg" />'),
(28, 'box', 'Africa', 'ABS', 'Calamondin', '<img src="fruits/00000028.jpg" />'),
(29, 'box', 'Africa', 'ABS', 'Kaffir lime', '<img src="fruits/00000029.jpg" />'),
(30, 'box', 'Africa', 'ABS', 'Cashew', '<img src="fruits/00000090.jpg" />'),
(31, 'box', 'Africa', 'ABS', 'Kiwi', '<img src="fruits/00000031.jpg" />'),
(32, 'box', 'Africa', 'ABS', 'Cornel', '<img src="fruits/00000032.jpg" />'),
(33, 'box', 'Africa', 'ABS', 'Clementin', '<img src="fruits/00000033.jpg" />'),
(34, 'box', 'Africa', 'ABS', 'Coconut', '<img src="fruits/00000034.jpg" />'),
(35, 'box', 'Africa', 'ABS', 'Kumquat', '<img src="fruits/00000035.jpg" />'),
(36, 'box', 'Africa', 'ABS', 'Lime', '<img src="fruits/00000036.jpg" />'),
(37, 'box', 'Africa', 'ABS', 'Lemon', '<img src="fruits/00000037.jpg" />'),
(38, 'box', 'Africa', 'ABS', 'Litchi', '<img src="fruits/00000038.jpg" />'),
(39, 'box', 'Africa', 'ABS', 'Longan', '<img src="fruits/00000039.jpg" />'),
(40, 'box', 'Africa', 'ABS', 'Mango', '<img src="fruits/00000040.jpg" />'),
(41, 'box', 'Africa', 'ABS', 'Purpule mangosteen', '<img src="fruits/00000041.jpg" />'),
(42, 'box', 'Africa', 'ABS', 'mandarin', '<img src="fruits/00000042.jpg" />'),
(43, 'box', 'Africa', 'ABS', 'passion fruit', '<img src="fruits/00000043.jpg" />'),
(44, 'box', 'Africa', 'ABS', 'tangerine', '<img src="fruits/00000044.jpg" />'),
(45, 'big_box', 'New_Zeland', 'BP', 'nectarine', '<img src="fruits/00000045.jpg" />'),
(46, 'big_box', 'New_Zeland', 'BP', 'olive', '<img src="fruits/00000046.jpg" />'),
(47, 'big_box', 'New_Zeland', 'BP', 'papaya', '<img src="fruits/00000047.jpg" />'),
(48, 'big_box', 'New_Zeland', 'BP', 'peach', '<img src="fruits/00000048.jpg" />'),
(49, 'big_box', 'New_Zeland', 'BP', 'pomelo', '<img src="fruits/00000049.jpg" />'),
(50, 'big_box', 'New_Zeland', 'BP', 'wild orange', '<img src="fruits/00000050.jpg" />'),
(51, 'big_box', 'New_Zeland', 'BP', 'pomelo', '<img src="fruits/00000051.jpg" />'),
(52, 'big_box', 'New_Zeland', 'BP', 'rambutan', '<img src="fruits/00000017.jpg" />'),
(53, 'big_box', 'New_Zeland', 'BP', 'sapodilla', '<img src="fruits/00000053.jpg" />'),
(54, 'big_box', 'New_Zeland', 'BP', 'sweetie', '<img src="fruits/00000054.jpg" />'),
(55, 'big_box', 'New_Zeland', 'BP', 'plum', '<img src="fruits/00000055.jpg" />'),
(56, 'big_box', 'New_Zeland', 'BP', 'tamarillo', '<img src="fruits/00000056.jpg" />'),
(57, 'big_box', 'New_Zeland', 'BP', 'tangelo', '<img src="fruits/00000057.jpg" />'),
(58, 'big_box', 'New_Zeland', 'BP', 'tangerine', '<img src="fruits/00000058.jpg" />'),
(59, 'big_box', 'New_Zeland', 'BP', 'ugni molinae', '<img src="fruits/00000059.jpg" />'),
(60, 'big_box', 'New_Zeland', 'BP', 'feijoa', '<img src="fruits/00000060.jpg" />'),
(61, 'big_box', 'New_Zeland', 'BP', 'fig', '<img src="fruits/00000061.jpg" />'),
(62, 'big_box', 'New_Zeland', 'BP', 'date', '<img src="fruits/00000062.jpg" />'),
(63, 'big_box', 'New_Zeland', 'BP', 'persimmon', '<img src="fruits/00000063.jpg" />'),
(64, 'big_box', 'New_Zeland', 'BP', 'citron', '<img src="fruits/00000064.jpg" />'),
(65, 'big_box', 'New_Zeland', 'BP', 'manilcara zapota', '<img src="fruits/00000065.jpg" />'),
(66, 'big_box', 'New_Zeland', 'BP', 'mulberry', '<img src="fruits/00000066.jpg" />'),
(67, 'big_box', 'New_Zeland', 'BP', 'jujube', '<img src="fruits/00000067.jpg" />'),
(68, 'big_box', 'New_Zeland', 'BP', 'satsuma', '<img src="fruits/00000068.jpg" />'),
(69, 'big_box', 'New_Zeland', 'BP', 'kumkuat', '<img src="fruits/00000069.jpg" />'),
(70, 'big_box', 'New_Zeland', 'BP', 'avocado', '<img src="fruits/00000070.jpg" />'),
(71, 'big_box', 'New_Zeland', 'BP', 'guava', '<img src="fruits/00000071.jpg" />'),
(72, 'middle_box', 'Brazil', 'CRM', 'starfruit', '<img src="fruits/00000072.jpg" />'),
(73, 'middle_box', 'Brazil', 'CRM', 'cape guseberry', '<img src="fruits/00000073.jpg" />'),
(74, 'middle_box', 'Brazil', 'CRM', 'granny smith', '<img src="fruits/00000074.jpg" />'),
(75, 'middle_box', 'Brazil', 'CRM', 'raspberry', '<img src="fruits/00000075.jpg" />'),
(76, 'middle_box', 'Brazil', 'CRM', 'gooseberry', '<img src="fruits/00000076.jpg" />'),
(77, 'middle_box', 'Brazil', 'CRM', 'elderberry', '<img src="fruits/00000077.jpg" />'),
(78, 'middle_box', 'Brazil', 'CRM', 'blackberry', '<img src="fruits/00000078.jpg" />'),
(79, 'middle_box', 'Brazil', 'CRM', 'mulberry', '<img src="fruits/00000080.jpg" />'),
(80, 'middle_box', 'Brazil', 'CRM', 'huckleberry', '<img src="fruits/00000080.jpg" />'),
(81, 'middle_box', 'Brazil', 'CRM', 'cranberry', '<img src="fruits/00000081.jpg" />'),
(82, 'middle_box', 'Brazil', 'CRM', 'cornelian', '<img src="fruits/00000082.jpg" />'),
(83, 'middle_box', 'Brazil', 'CRM', 'coconut', '<img src="fruits/00000083.jpg" />'),
(84, 'middle_box', 'Brazil', 'CRM', 'cashewnut', '<img src="fruits/00000084.jpg" />'),
(85, 'middle_box', 'Brazil', 'CRM', 'peanut', '<img src="fruits/00000085.jpg" />'),
(86, 'middle_box', 'Brazil', 'CRM', 'almond', '<img src="fruits/00000086.jpg" />'),
(87, 'middle_box', 'Brazil', 'CRM', 'walnut', '<img src="fruits/00000087.jpg" />'),
(88, 'middle_box', 'Brazil', 'CRM', 'hazelnut', '<img src="fruits/00000088.jpg" />'),
(89, 'middle_box', 'Brazil', 'CRM', 'brazilnut', '<img src="fruits/00000089.jpg" />'),
(90, 'middle_box', 'Brazil', 'CRM', 'pistachio', '<img src="fruits/00000090.jpg" />'),
(91, 'middle_box', 'Brazil', 'CRM', 'pecan', '<img src="fruits/00000091.jpg" />'),
(93, 'middle_box', 'Brazil', 'CRM', 'pine nut', '<img src="fruits/00000001.jpg" />'),
(97, 'middle_box', 'Brazil', 'CRM', 'watermelon', '<img src="fruits/00000002.jpg" />'),
(98, 'middle_box', 'Brazil', 'CRM', 'almond', '<img src="fruits/00000003.jpg" />'),
(99, 'middle_box', 'Brazil', 'CRM', 'macademia', '<img src="fruits/00000004.jpg" />'),
(100, 'middle_box', 'Brazil', 'CRM', 'brazilnut', '<img src="fruits/00000005.jpg" />'),
(101, 'middle_box', 'Brazil', 'CRM', 'pine nut', '<img src="fruits/00000006.jpg" />'),
(102, 'middle_box', 'Brazil', 'CRM', 'chestnut', '<img src="fruits/00000007.jpg" />'),
(103, 'middle_box', 'Brazil', 'CRM', 'wheat', '<img src="fruits/00000008.jpg" />'),
(104, 'middle_box', 'Brazil', 'CRM', 'Corn\n', '<img src="fruits/00000009.jpg" />'),
(105, 'middle_box', 'Brazil', 'CRM', 'barley', '<img src="fruits/00000010.jpg" />'),
(106, 'middle_box', 'Brazil', 'CRM', 'sunflower seeds', '<img src="fruits/00000018.jpg" />'),
(107, 'box', 'Africa', 'ABS', 'haricot', '<img src="fruits/00000019.jpg" />'),
(108, 'box', 'Africa', 'ABS', 'eggplant', '<img src="fruits/00000012.jpg" />'),
(110, 'middle_box', 'Braziil', 'CRM', 'cucumber', '<img src="fruits/00000014.jpg" />'),
(111, 'middle_box', 'Braziil', 'CRM', 'garlic', '<img src="fruits/00000015.jpg" />'),
(112, 'middle_box', 'Braziil', 'CRM', 'mulberry', '<img src="fruits/00000016.jpg" />'),
(113, 'middle_box', 'Braziil', 'CRM', 'loaf', '<img src="fruits/00000017.jpg" />');

-- --------------------------------------------------------

--
-- Структура таблицы `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `pack` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `producer` varchar(255) NOT NULL,
  `name` varchar(250) NOT NULL,
  `goods` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `name` (`name`),
  FULLTEXT KEY `pack` (`pack`),
  FULLTEXT KEY `country` (`country`),
  FULLTEXT KEY `country_2` (`country`),
  FULLTEXT KEY `name_2` (`name`),
  FULLTEXT KEY `goods` (`goods`),
  FULLTEXT KEY `pack_2` (`pack`),
  FULLTEXT KEY `country_3` (`country`),
  FULLTEXT KEY `producer` (`producer`),
  FULLTEXT KEY `producer_2` (`producer`),
  FULLTEXT KEY `name_3` (`name`),
  FULLTEXT KEY `goods_2` (`goods`),
  FULLTEXT KEY `pack_3` (`pack`),
  FULLTEXT KEY `country_4` (`country`),
  FULLTEXT KEY `producer_3` (`producer`),
  FULLTEXT KEY `name_4` (`name`),
  FULLTEXT KEY `name_5` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

--
-- Дамп данных таблицы `games`
--

INSERT INTO `games` (`id`, `pack`, `country`, `producer`, `name`, `goods`, `foto`) VALUES
(1, 'box', 'Africa', 'ABS', 'Grand Theft Auto VI / GTA VI / GTA 6', '<img src="apple_icons_win/PNG/aimp 3.jpg" />', 'apple_icons_win/PNG/aimp 3.jpg'),
(2, 'box', 'Africa', 'ABS', 'S.T.A.L.K.E.R. 2 / Stalker 2', '<img src="apple_icons_win/PNG/android .jpg" />', 'apple_icons_win/PNG/android .jpg'),
(3, 'box', 'Africa', 'ABS', 'Horizon: Zero Dawn', '<img src="apple_icons_win/PNG/android store.jpg" />', 'apple_icons_win/PNG/android store.jpg'),
(4, 'box', 'USA', 'ABS', 'Sid Meier''s Civilization: Beyond Earth ', '<img src="apple_icons_win/PNG/autocad.jpg" />', 'apple_icons_win/PNG/autocad.jpg'),
(5, 'box', 'Africa', 'ABS', 'Tom Clancy''s Ghost Recon: Wildlands / Ghost Recon: Wildlands', '<img src="apple_icons_win/PNG/appstore  1 .jpg" />', 'apple_icons_win/PNG/appstore  1 .jpg'),
(6, 'box', 'Africa', 'ABS', 'For Honor', '<img src="apple_icons_win/PNG/appstore  3.jpg" />', 'apple_icons_win/PNG/appstore  3.jpg'),
(7, 'box', 'Africa', 'ABS', 'Gears of War 4', '<img src="apple_icons_win/PNG/appstore  4.jpg" />', 'apple_icons_win/PNG/boxee 2.jpg"\n      '),
(8, 'box', 'Africa', 'ABS', 'Crackdown 3', '<img src="apple_icons_win/PNG/boxee 2.jpg" />\n      ', 'apple_icons_win/PNG/boxee 2.jpg\n      '),
(9, 'box', 'Africa', 'ABS', 'Get Even', ' <img src="apple_icons_win/PNG/boxee 1.jpg" />', ' apple_icons_win/PNG/boxee 1.jpg'),
(10, 'box', 'Africa', 'ABS', 'Battlefield 5', '<img src="apple_icons_win/PNG/browser Apple.jpg" />', 'apple_icons_win/PNG/browser Apple.jpg'),
(11, 'box', 'Africa', 'ABS', 'Dead Island 2', '<img src="apple_icons_win/PNG/browser Chrome.jpg" />', 'apple_icons_win/PNG/browser Chrome.jpg'),
(12, 'box', 'Africa', 'ABS', 'Quantum Break', '<img src="apple_icons_win/PNG/browser Firefox.jpg" />', 'apple_icons_win/PNG/browser Firefox.jpg'),
(13, 'box', 'Africa', 'ABS', 'Dishonored 2', '<img src="apple_icons_win/PNG/browser Microsoft.jpg" />', 'apple_icons_win/PNG/browser Microsoft.jpg'),
(14, 'box', 'Africa', 'ABS', 'Cyberpunk 2077', '<img src="apple_icons_win/PNG/browser Opera.jpg" />', 'apple_icons_win/PNG/browser Opera.jpg'),
(15, 'box', 'Africa', 'ABS', 'Homefront: The Revolution / Homefront 2', '<img src="apple_icons_win/PNG/browser safari.jpg" />', 'apple_icons_win/PNG/browser safari.jpg'),
(16, 'box', 'Africa', 'ABS', 'Mafia III / Mafia 3', '<img src="apple_icons_win/PNG/calculator.jpg" />', 'apple_icons_win/PNG/calculator.jpg'),
(17, 'box', 'Africa', 'ABS', 'The Last Guardian', '<img src="apple_icons_win/PNG/calendar 1.jpg" />', 'apple_icons_win/PNG/calendar 1.jpg'),
(18, 'box', 'Africa', 'ABS', 'No Man''s Sky', '<img src="apple_icons_win/PNG/calendar 2.jpg" />', 'apple_icons_win/PNG/calendar 2.jpg'),
(19, 'box', 'Africa', 'ABS', 'Overwatch', '<img src="apple_icons_win/PNG/ccleaner.jpg" />', 'apple_icons_win/PNG/ccleaner.jpg'),
(20, 'box', 'Africa', 'ABS', 'Mirror''s Edge: Catalyst / Mirror''s Edge 2', '<img src="apple_icons_win/PNG/chat.jpg" />', 'apple_icons_win/PNG/chat.jpg'),
(21, 'box', 'Africa', 'ABS', 'Doom / Doom (2015)', '<img src="apple_icons_win/PNG/clock 1.jpg" />', 'apple_icons_win/PNG/clock 1.jpg'),
(22, 'box', 'Africa', 'ABS', 'Dark Souls 3 / Dark Souls III', '<img src="apple_icons_win/PNG/clock 2.jpg" />', 'apple_icons_win/PNG/clock 2.jpg'),
(23, 'box', 'Africa', 'ABS', 'Uncharted 4: A Thief''s End', '<img src="apple_icons_win/PNG/cloud.jpg" />', 'apple_icons_win/PNG/cloud.jpg'),
(24, 'box', 'Africa', 'ABS', 'Hitman', '<img src="apple_icons_win/PNG/computer 1.jpg" />', 'apple_icons_win/PNG/computer 1.jpg'),
(25, 'box', 'Africa', 'ABS', 'Tom Clancy''s The Division / The Division', '<img src="apple_icons_win/PNG/computer 2.jpg" />', '<img src="apple_icons_win/PNG/computer 2.jpg" />'),
(26, 'box', 'Africa', 'ABS', 'Far Cry: Primal', '<img src="apple_icons_win/PNG/control panel.jpg" />', 'apple_icons_win/PNG/control panel.jpg'),
(27, 'box', 'Africa', 'ABS', 'Deus Ex: Mankind Divided', '<img src="apple_icons_win/PNG/corel.jpg" />', 'apple_icons_win/PNG/corel.jpg'),
(28, 'box', 'Africa', 'ABS', 'Street Fighter V', '<img src="apple_icons_win/PNG/default icon.jpg" />', 'apple_icons_win/PNG/default icon.jpg'),
(29, 'box', 'Africa', 'ABS', 'Firewatch', '<img src="apple_icons_win/PNG/deviantart blister.jpg" />', 'apple_icons_win/PNG/deviantart blister.jpg'),
(30, 'box', 'Africa', 'ABS', 'Unravel', '<img src="apple_icons_win/PNG/documents.jpg" />', 'apple_icons_win/PNG/documents.jpg'),
(31, 'box', 'Africa', 'ABS', 'Just Cause 3 / Just Cause 3', '<img src="apple_icons_win/PNG/documents.jpg" />', '<img src="apple_icons_win/PNG/documents.jpg" />'),
(32, 'box', 'Africa', 'ABS', 'Tom Clancy''s Rainbow Six: Осада', '<img src="apple_icons_win/PNG/download wood.jpg" />', '<img src="apple_icons_win/PNG/download wood.jpg" />'),
(33, 'box', 'Africa', 'ABS', 'Star Wars: Battlefront / Star Wars: Battlefront 2015', '<img src="apple_icons_win/PNG/download.jpg" />', 'apple_icons_win/PNG/download.jpg'),
(34, 'box', 'Africa', 'ABS', 'Star Wars: Battlefront / Star Wars: Battlefront 2015', '<img src="apple_icons_win/PNG/facebook.jpg" />', 'apple_icons_win/PNG/facebook.jpg'),
(35, 'box', 'Africa', 'ABS', 'Rise of the Tomb Raider', '<img src="apple_icons_win/PNG/fontbook.jpg" />', 'apple_icons_win/PNG/fontbook.jpg'),
(36, 'box', 'Africa', 'ABS', 'Fallout 4', '<img src="apple_icons_win/PNG/foobar.jpg" />', 'apple_icons_win/PNG/foobar.jpg'),
(37, 'middle_box', 'Brazil', 'CRM', 'Call of Duty: Black Ops 3 / Call of Duty: Black Ops III', '<img src="apple_icons_win/PNG/games.jpg" />', 'apple_icons_win/PNG/games.jpg'),
(38, 'middle_box', 'Brazil', 'CRM', 'StarCraft II: Legacy of the Void / StarCraft 2: Legacy of th', '<img src="apple_icons_win/PNG/home lego.jpg" />', 'apple_icons_win/PNG/home lego.jpg'),
(39, 'middle_box', 'Brazil', 'CRM', 'Anno 2205', '<img src="apple_icons_win/PNG/image.jpg" />', 'apple_icons_win/PNG/image.jpg'),
(40, 'middle_box', 'Brazil', 'CRM', 'Need for Speed / Need for Speed 2015', '<img src="apple_icons_win/PNG/image.jpg" />', 'apple_icons_win/PNG/image.jpg'),
(41, 'middle_box', 'Brazil', 'CRM', 'Driveclub Bikes', '<img src="apple_icons_win/PNG/ipad.jpg" />', 'apple_icons_win/PNG/ipad.jpg'),
(42, 'middle_box', 'Brazil', 'CRM', 'Halo 5: Guardians', '<img src="apple_icons_win/PNG/iphone camera.jpg" />', 'apple_icons_win/PNG/iphone camera.jpg'),
(43, 'middle_box', 'Brazil', 'CRM', 'Assassin''s Creed: Syndicate / Assassin''s Creed: Синдикат', '<img src="apple_icons_win/PNG/iphone camera.jpg" />', 'apple_icons_win/PNG/iphone camera.jpg'),
(44, 'middle_box', 'Brazil', 'CRM', 'Uncharted: The Nathan Drake Collection', '<img src="apple_icons_win/PNG/iphone disk.jpg" />', 'apple_icons_win/PNG/iphone disk.jpg'),
(45, 'middle_box', 'Brazil', 'CRM', 'Might & Magic Heroes VII / Might and Magic Heroes VII', '<img src="apple_icons_win/PNG/iphone.jpg" />', 'apple_icons_win/PNG/iphone.jpg'),
(46, 'middle_box', 'Brazil', 'CRM', 'FIFA 16', '<img src="apple_icons_win/PNG/locks.jpg" />', 'apple_icons_win/PNG/locks.jpg'),
(47, 'middle_box', 'Brazil', 'CRM', 'SOMA', '<img src="apple_icons_win/PNG/mail gmail.jpg" />', 'apple_icons_win/PNG/mail gmail.jpg'),
(48, 'middle_box', 'Brazil', 'CRM', 'Forza Motorsport 6', '<img src="apple_icons_win/PNG/mail hotmail.jpg" />', 'apple_icons_win/PNG/mail hotmail.jpg'),
(49, 'middle_box', 'Brazil', 'CRM', 'Pro Evolution Soccer 2016 / PES 16', '<img src="apple_icons_win/PNG/maps.jpg" />', 'apple_icons_win/PNG/maps.jpg'),
(50, 'middle_box', 'Brazil', 'CRM', 'Metal Gear Solid V: The Phantom Pain', '<img src="apple_icons_win/PNG/microsoft access.jpg" />', 'apple_icons_win/PNG/microsoft access.jpg'),
(51, 'middle_box', 'Brazil', 'CRM', 'Mad Max / Безумный Макс', '<img src="apple_icons_win/PNG/microsoft excel.jpg" />', 'apple_icons_win/PNG/microsoft excel.jpg'),
(52, 'middle_box', 'Brazil', 'CRM', 'Until Dawn / Дожить до рассвета', '<img src="apple_icons_win/PNG/microsoft info.jpg" />', 'apple_icons_win/PNG/microsoft info.jpg'),
(53, 'middle_box', 'Brazil', 'CRM', 'Batman: Arkham Knight / Batman: Рыцарь Аркхема', '<img src="apple_icons_win/PNG/microsoft outlook.jpg" />', 'apple_icons_win/PNG/microsoft outlook.jpg'),
(54, 'middle_box', 'Brazil', 'CRM', 'Fallout: Shelter', '<img src="apple_icons_win/PNG/microsoft power point.jpg" />', 'apple_icons_win/PNG/microsoft power point.jpg'),
(55, 'middle_box', 'Brazil', 'CRM', 'LEGO Jurassic World / LEGO Мир Юрского периода', '<img src="apple_icons_win/PNG/microsoft word.jpg" />', 'apple_icons_win/PNG/microsoft word.jpg'),
(56, 'middle_box', 'Brazil', 'CRM', 'Heroes of the Storm', '<img src="apple_icons_win/PNG/music 1.jpg" />', 'apple_icons_win/PNG/music 1.jpg'),
(57, 'middle_box', 'Brazil', 'CRM', 'The Witcher 3: Wild Hunt / Ведьмак 3: Дикая охота', '<img src="apple_icons_win/PNG/music 2.jpg" />', 'apple_icons_win/PNG/music 2.jpg'),
(58, 'middle_box', 'Brazil', 'CRM', 'Project CARS', '<img src="apple_icons_win/PNG/notepad.jpg" />', 'apple_icons_win/PNG/notepad.jpg'),
(59, 'middle_box', 'Brazil', 'CRM', 'Wolfenstein: The Old Blood', '<img src="apple_icons_win/PNG/photoshop metal.jpg" />', 'apple_icons_win/PNG/photoshop metal.jpg'),
(60, 'middle_box', 'Brazil', 'CRM', 'Assassin''s Creed Chronicles: China', '<img src="apple_icons_win/PNG/photoshop.jpg" />', 'apple_icons_win/PNG/photoshop.jpg'),
(61, 'middle_box', 'Brazil', 'CRM', 'Mortal Kombat X', '<img src="apple_icons_win/PNG/quicktime 1.jpg" />', 'apple_icons_win/PNG/quicktime 1.jpg'),
(62, 'middle_box', 'Brazil', 'CRM', 'Grand Theft Auto V / GTA V / GTA 5', '<img src="apple_icons_win/PNG/quicktime 2.jpg" />', 'apple_icons_win/PNG/quicktime 2.jpg'),
(63, 'middle_box', 'Brazil', 'CRM', 'Bloodborne / Bloodborne: Порождение крови', '<img src="apple_icons_win/PNG/radio.jpg" />', 'apple_icons_win/PNG/radio.jpg'),
(64, 'middle_box', 'Brazil', 'CRM', 'Battlefield: Hardline', '<img src="apple_icons_win/PNG/rocketdock.jpg" />', 'apple_icons_win/PNG/rocketdock.jpg'),
(65, 'middle_box', 'Brazil', 'CRM', 'Ori And The Blind Forest', '<img src="apple_icons_win/PNG/shop  1.jpg" />', 'apple_icons_win/PNG/shop  1.jpg'),
(66, 'big_box', 'New_Zeland', 'BP', 'Hotline Miami 2: Wrong Number', '<img src="apple_icons_win/PNG/shop  2.jpg" />"', 'apple_icons_win/PNG/shop  2.jpg'),
(67, 'big_box', 'New_Zeland', 'BP', 'Resident Evil: Revelations 2 / Biohazard: Revelations 2', '<img src="apple_icons_win/PNG/shop  3.jpg" />', 'apple_icons_win/PNG/shop  3.jpg'),
(68, 'big_box', 'New_Zeland', 'BP', 'The Order: 1886', '<img src="apple_icons_win/PNG/shop  4.jpg" />', 'apple_icons_win/PNG/shop  4.jpg'),
(69, 'big_box', 'New_Zeland', 'BP', 'Dead or Alive 5: Last Round', '<img src="apple_icons_win/PNG/skype.jpg" />', 'apple_icons_win/PNG/skype.jpg'),
(70, 'big_box', 'New_Zeland', 'BP', 'Total War: Attila', '<img src="apple_icons_win/PNG/steam.jpg" />', 'apple_icons_win/PNG/steam.jpg'),
(71, 'big_box', 'New_Zeland', 'BP', 'Evolve', '<img src="apple_icons_win/PNG/style builder.jpg" />', 'apple_icons_win/PNG/style builder.jpg'),
(72, 'big_box', 'New_Zeland', 'BP', 'Life is Strange', '<img src="apple_icons_win/PNG/system dvd.jpg" />', 'apple_icons_win/PNG/system dvd.jpg'),
(73, 'big_box', 'New_Zeland', 'BP', 'Dying Light', '<img src="apple_icons_win/PNG/system usb.jpg" />', 'apple_icons_win/PNG/system usb.jpg'),
(74, 'big_box', 'New_Zeland', 'BP', 'Saints Row IV: Re-Elected', '<img src="apple_icons_win/PNG/themes archive.jpg" />', 'apple_icons_win/PNG/themes archive.jpg'),
(75, 'big_box', 'New_Zeland', 'BP', 'Saints Row: Gat Out of Hell', '<img src="apple_icons_win/PNG/thing.jpg" />', 'apple_icons_win/PNG/thing.jpg'),
(76, 'big_box', 'New_Zeland', 'BP', 'H1Z1', '<img src="apple_icons_win/PNG/tools.jpg" />', 'apple_icons_win/PNG/tools.jpg'),
(77, 'big_box', 'New_Zeland', 'BP', 'Call of Duty: Online', '<img src="apple_icons_win/PNG/torrent.jpg" />', 'apple_icons_win/PNG/torrent.jpg'),
(78, 'big_box', 'New_Zeland', 'BP', 'Elite: Dangerous', '<img src="apple_icons_win/PNG/traktor.jpg" />', 'apple_icons_win/PNG/traktor.jpg'),
(79, 'big_box', 'New_Zeland', 'BP', 'The Crew', '<img src="apple_icons_win/PNG/twitter.jpg" />', 'apple_icons_win/PNG/twitter.jpg'),
(80, 'big_box', 'New_Zeland', 'BP', 'LittleBigPlanet 3', '<img src="apple_icons_win/PNG/user jeans 1 .jpg" />', 'apple_icons_win/PNG/user jeans 1 .jpg'),
(81, 'big_box', 'New_Zeland', 'BP', 'Far Cry 4', '<img src="apple_icons_win/PNG/user jeans 2 .jpg" />', 'apple_icons_win/PNG/user jeans 2 .jpg'),
(82, 'big_box', 'New_Zeland', 'BP', 'Dragon Age: Inquisition / Dragon Age: Инквизиция', '<img src="apple_icons_win/PNG/vault.jpg" />', 'apple_icons_win/PNG/vault.jpg'),
(83, 'big_box', 'New_Zeland', 'BP', 'Never Alone / Kisima Inŋitchuŋa', '<img src="apple_icons_win/PNG/video vhs.jpg" />', 'apple_icons_win/PNG/video vhs.jpg'),
(84, 'big_box', 'New_Zeland', 'BP', 'LEGO Batman 3: Beyond Gotham / LEGO Batman 3: Покидая Готэм', '<img src="apple_icons_win/PNG/wacom.jpg" />', 'apple_icons_win/PNG/wacom.jpg'),
(85, 'big_box', 'New_Zeland', 'BP', 'Halo: The Master Chief Collection', '<img src="apple_icons_win/PNG/winrar 1.jpg" />', 'apple_icons_win/PNG/winrar 1.jpg'),
(86, 'big_box', 'New_Zeland', 'BP', 'Assassin''s Creed: Rogue / Assassin''s Creed: Изгой', '<img src="apple_icons_win/PNG/winrar 2.jpg" />', 'apple_icons_win/PNG/winrar 2.jpg'),
(87, 'big_box', 'New_Zeland', 'BP', 'Assassin''s Creed: Unity / Assassin''s Creed: Единство', '<img src="apple_icons_win/PNG/yahoo.jpg" />', 'apple_icons_win/PNG/yahoo.jpg'),
(88, 'big_box', 'New_Zeland', 'BP', 'Call of Duty: Advanced Warfare / Call of Duty: Advanced Warfare - Multiplayer', '<img src="apple_icons_win/PNG/youtube.jpg" />', 'apple_icons_win/PNG/youtube.jpg'),
(89, 'big_box', 'New_Zeland', 'BP', 'WWE 2K15', '<img src="apple_icons_win/PNG/zip 1.jpg" />', 'apple_icons_win/PNG/zip 1.jpg'),
(90, 'big_box', 'New_Zeland', 'BP', 'Sunset Overdrive', '<img src="apple_icons_win/PNG/zip 3.jpg" />', 'apple_icons_win/PNG/zip 3.jpg'),
(91, 'big_box', 'New_Zeland', 'BP', 'Lords of the Fallen', '<img src="apple_icons_win/PNG/zip 1.jpg" />', 'apple_icons_win/PNG/zip 1.jpg'),
(92, 'фыфыф', 'ывывывв', 'ывывыв', 'The Evil Within', '<img src="apple_icons_win/PNG/zip 4.jpg" />', 'apple_icons_win/PNG/zip 4.jpg'),
(93, 'арппрарпрарп', 'рпраррпрара', 'рпаррпарпарпа', 'Borderlands: The Pre-Sequel', '<img src="apple_icons_win/PNG/aimp 3.jpg" />', 'apple_icons_win/PNG/aimp 3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `heading`
--

CREATE TABLE IF NOT EXISTS `heading` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `heading`
--

INSERT INTO `heading` (`id`, `title`) VALUES
(1, 'Тексты1'),
(2, 'Текст2');

-- --------------------------------------------------------

--
-- Структура таблицы `nav`
--

CREATE TABLE IF NOT EXISTS `nav` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `p` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `nav`
--

INSERT INTO `nav` (`id`, `p`) VALUES
(1, '3');

-- --------------------------------------------------------

--
-- Структура таблицы `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `heading_r` int(7) DEFAULT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `viewings` int(7) DEFAULT NULL,
  `icon` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `resolution` int(7) DEFAULT NULL,
  `popularity` int(7) DEFAULT '0',
  `voice` int(7) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Дамп данных таблицы `note`
--

INSERT INTO `note` (`id`, `heading_r`, `meta_key`, `meta_desc`, `title`, `description`, `author`, `date`, `viewings`, `icon`, `text`, `resolution`, `popularity`, `voice`) VALUES
(1, 1, 'windows 10, обновить, скачать windows. обновление операционной системы', 'Описывается о том как грамотно обновить операционную систему до windows 10', 'О том как обновиться до windows 10', 'description', 'Петров Петр Петрович', '2015-10-18', 55, 'apple_icons_win/PNG/aimp 3.jpg', 'Особенности Windows 10\r\n24-08-2015\r\nКатегория: Статьи\r\nВопросы установки новой версии ОС в сети обсуждаются с повышенным интересом, но пока никто подробно не освещает об особенностях внедрённых новшеств и передовых разработках интегрированных в ядро операционной системы Виндовс 10. Об универсальности Виндовс 10 можно начинать слагать легенды. Разработчики трудились с большим упорством, исследуя и внедряя последние разработки и технологические новинки в операционную систему, которая сегодня обещает стать лучшей в мире. В нашем кратком обзоре мы расскажем о главных достоинствах этого релиза ОС, а также затронем явные недостатки, которые могут повлиять на Ваше решение об использовании системы в качестве основной.\r\nвиндовс 10 скриншот\r\n\r\nКак обновиться до windows 10 бесплатно читайте в этой статье.\r\nПосле всех приложенных усилий, команде программистов удалось сделать ОС, которая может быть эффективно использована на разных типах устройств, а именно - версия Виндовс 10 способна функционировать не только на классических ПК и ноутбуках, но и на планшетах и различных типах смартфонах, которые удовлетворяют минимальным системным требованиям и делает переход на windows 10 ещё более комфортным и предсказуемым.', 5, 31, 4),
(2, 1, 'ресурс Hola, интернет, доступ к огромному количеству ресурсов, снять блокировку', 'ресурс Hola, интернет, доступ к огромному количеству ресурсов, снять блокировку', 'ресурс Hola', 'о том как пользоваться ресурсом  Hola', 'Виктор Владимирович', '2015-10-18', 19, 'apple_icons_win/PNG/android .jpg', '\r\nHola\r\n12-06-2015\r\nКатегория: Статьи\r\nHola для chrome – являет собой интересный инструмент, уместный для использования с целью получения доступа к огромному количеству ресурсов в интернете, обладающим содержимым в виде аудио или видео файлов. Речь идет о сайтах, которые в обычной ситуации не являются доступными на территории вашего местонахождения.\r\n\r\nHola Unblocker \r\n\r\nПрограмма позволяет снять блокировку со страниц в интернете, которые оказались недоступными для просмотра на территории вашего проживания.\r\nОт вас не потребуются сверхчеловеческие способности для установки и конфигурирования этой программы. Установка простая, после которой появляется возможность просмотра сайтов, которые не отображаются в Вашем регионе или стране по какой-то причине. И речь здесь не только о сайтах, содержащих эротическое содержание, а например о всемирно известном проекте Hola.\r\nHola Unblocker \r\n\r\nКроме всего прочего, на официальной страничке сайта Hola в социальной сети Фэйсбук у вас будет  возможность оставить свой голос за снятие блокировки с определенных web-сайтов.\r\n\r\nСуществует версия hola для яндекс браузера в виду того, что яндекс браузер создан по типу Google Chrome.\r\nПримечание: не путать с hola лаунчер на андроид. Это разные программные приложения.', 5, 50, 6),
(4, 1, 'windows 10, флэшка, загрузочная флэшка, установка UltraISO', 'Рассказывается о том как создать загрузочную флэшку с windows 10', 'Как создатьзагрузочную флешку с windows 10', 'description', 'Петров Петр Петрович', '2015-10-05', 7, 'apple_icons_win/PNG/android store.jpg', 'Итак, для создания загрузочной флешки с windows 10 или 8 и 8.1 нам понадобится:\r\nобраз одной из перечисленых windows;\r\nпрограмма UltraISO;\r\nПосле того, как вы скачали образ windows и установили UltraISO. Нужно:\r\n\r\n/ustanovka_Windows_10_na_fleshk\r\n\r\nПКМ(правой кнопкой мыши) кликаем по ISO образу windows и открываем его с помощью UltraISO;\r\nВ верхнем меню кликаем по "САМОЗАГРУЗКА" и выбираем пункт "Записать образ жесткого диска";\r\nДалее, Вам откроется окно мастер записи образов на USB носитель(накопитель).\r\nДальше все просто. Следуете указаниям мастера. Он покажет как создать загрузочную флешку с windows 10 или 8, 8.1.\r\n\r\nДля того, чтоб Вам было проще понять это. Выкладываю видео для наглядного примера. \r\n', 5, 10, 2),
(5, 1, 'большинство термопаст, отличные проводники тепла, делать разгон вашего компьютера', 'Статья о том как грамотно поменять термопасту,большинство термопаст, отличные проводники тепла, делать разгон вашего компьютера', 'Как поменять термопасту', 'description', 'Петр Васлиьевич', '2014-07-17', 1, 'apple_icons_win/PNG/appstore  1 .jpg', '1. Как выбрать нужную термопасту? Большинство термопаст в основном содержат силикон и оксид цинка, в то время как более дорогие соединения содержат отличные проводники тепла, такие как серебро или керамика. Преимущество таких термопаст в том, что вы будете иметь более эффективную тепло проводимость. Тем не менее, обычных состав термопасты вполне подойдет для большинства людей.\r\n\r\nЕсли вы планируете делать разгон вашего компьютера или ноутбука, тогда лучше использовать термопасту в составе из серебра, золота и меди. Да, немного дороже, но намного эффективнее и безопаснее при таких нагрузках на процессор.\r\n2. Очистка поверхности процессора от старой термопасты. \r\n\r\nОчистка от старой термопасты\r\n\r\nПосле снятия радиатора ноутбука или процессора с материнской платы вы увидите на нем остатки термопасты. Для снятия термопасты нужно взять ватный тампон или кусок ваты и пропитать его спиртом. Спирт должен быть не менее 70%, чем больше градус тем лучше. И аккуратными движениями снимаем остатки термопасты с радиатора и процессора.\r\n\r\n3. Полировка поверхности радиатора и процессора. \r\n\r\nКак сменить термопасту\r\n\r\nВ идеале, поверхности радиатора и процессора должны быть ровными. Если поверхность вашего радиатора грубая, то можно слегка отполировать её. Но к слову, это не обязательно если вы не стремитесь к максимальной производительности охлаждения.\r\n\r\nТермопаста предназначена для заполнения пробелов, дефектов и недочетов на поверхности. \r\n4. Сколько и как налаживать термопасту?\r\n\r\nСколько термопасты нужно ложить\r\n\r\nДостаточно одной горошины точно по центру на процессоре. Не советую самостоятельно размазывать как масло по хлебу. Могут образоваться воздушные прослойки, это ухудшит тепло проводимость. Когда вы приложите радиатор назад к процессору он сам от давления, равномерно разнесет термопасту по поверхности процессора.\r\n\r\nСтарайтесь не переборщить с нанесением термопасты. Иначе при работе процессора, термопаста вытечет на материнскую плату. Что не очень приятно.', 5, NULL, 1),
(6, 2, 'ремонт кулера,  вентилятор,масло высохло,  резиновая или пластмассовая заглушка', 'Материал о том как правильно ремонтировать кулер, ремонт кулера,  вентилятор,масло высохло,  резиновая или пластмассовая заглушка', 'ремонт  Кулера (вентилятора) для компьютера', 'description', 'Петренко Иван Степанович', '2015-10-06', 40, 'apple_icons_win/PNG/clock 1.jpg', 'Я думаю, каждый обладатель компьютера, сталкивался (или столкнётся) с плохой работой кулера, который либо начинает издавать лишние звуки, постепенно ослабляя свою работу, либо просто останавливаются и перестают охлаждать систему. Чаще всего, этот вентилятор “сломался” не до конца, скорее всего его механическая часть просто забилась пылью, а масло высохло и впиталась всё той же пылью, из-за чего, его работа существенно затрудняется. Большинство современных кулеров для компьютера не подлежат вскрытию, при попытке его разобрать, он будет сломан. Разобрать его нельзя, но смазать можно, и это может существенно продлит его жизнь.\r\nДля начала, нам нужно его снять и очистить от наружной пыли (я думаю это понятно).\r\nС нижней стороны вентилятора (сторона выдува воздуха), по центру есть отверстие, которое предоставляет доступ к валу. Это отверстие как правило, закрыто резиновой или пластмассовой заглушкой, а сверху заклеено наклейкой. Иногда, заглушки нет, а отверстие заклеено только наклейкой, а ещё реже случается, что нет и самого отверстия, такое иногда встречается на кулерах для процессоров и видеокарт.\r\nНаклейку нужно снять, а заглушку удалить (если она есть), подковырнув острым предметом (нож, шило). Если вам попался кулер, у которого просто нет данного отверстия, то вам придётся его просверлить шуруповёртом. Диаметр отверстия должен быть не больше 6 мм. Колупать отверстие острым предметом (вместо сверла) крайне не рекомендуется, так как, внутренние кромки нового отверстия завернуться во внутрь и могут стопорить вал, и к тому же, это увеличит вероятность попадания “опилков” внутрь кулера.\r\nПосле получения доступа к валу кулера, необходимо нанести туда несколько капель машинного масла. Сделать это можно шприцом или любым тоненьким предметом (спичка, иголка, шило). Снова установить заглушку и наклеить наклейку.\r\nЕсли у вас кулер с РЕЗИНОВОЙ заглушкой, или вообще без заглушки (только наклейка), то вы можете их не снимать, а смазать вал кулера шприцом, проткнув наклейку и резиновую заглушку иголкой и впрыснув масло.\r\nремонт кулера\r\nПосле такого “ремонта”, кулер ещё проработает от одного месяца до пары лет – всё зависит от его качества, качества масла, и степени загрязнения.', 5, 17, 5),
(7, 2, 'ноутбук, эргономика, внешний вид, цифровой блок, диагональ ноутбука', 'ноутбук, эргономика, внешний вид, цифровой блок, диагональ ноутбука', 'Выбор ноутбука', 'О том как  выбрать ноутбук', 'Витя Касин', '2015-10-02', 6, 'apple_icons_win/PNG/computer 1.jpg', 'В современном мире ноутбук стал практически незаменимым атрибутом делового человека или человека находящегося всё время в дороге. Но данный сегмент “компьютерного мира” не обошёл стороной и “домашних” пользователей, много людей предпочитают компактное решение в виде ноутбука на замену настольному компьютеру. Но, посмотрев на разнообразие производителей и представленных ими моделей ноутбуков, как говорится – “разбегаются глаза”, все производители стараются завлечь покупателя различными возможностями и функциями ноутбуков, но при этом, максимально уменьшить цену. Выбрать хороший ноутбук с оптимальным соотношением производительности, качества и цены -  не такая простая задача как может показаться на первый взгляд.\r\n\r\nПрежде чем приступить к выбору ноутбука, вы сперва должны чётко понимать, для выполнения каких задач вам он нужен, чтобы в дальнейшем не обращать внимания на “напичканные” в ноутбуке устройства, которыми вы никогда пользоваться не будете, а следовательно, и нет нужды переплачивать за них.\r\n\r\n	\r\n"Диагональ ноутбука", или "размер имеет значение!"\r\n\r\nВыбирая размер ноутбука, в первую очередь, нужно отталкиваться от того, какую работу предполагается на нём выполнять, и насколько это “сидячая” работа. Если ваша работа хоть как то связана с дизайном, ВЕБ дизайном, проектированием, архитектурой, то это будет стремить вас к покупке ноутбука больших размеров, так как только это позволит вам комфортно работать на новом ноутбуке с большим размером и разрешением экрана.\r\n\r\nЕсли вы “домашний” пользователь, а ноутбук, перевозить будет нужно довольно редко, то ваш выбор должен останавливаться на ноутбуке с максимальным размером дисплея, на который будет достаточно средств. Короче говоря, размер бюджета определит размер ноутбука, так как в данном случае чем больше диагональ, тем комфортнее вы будете себя чувствовать работая за ним, но в данном случае нет жёстких ограничений по размеру, как для дизайнера.\r\n\r\nНу а если ваша жизнь или работа заставляет находиться всё время в движении и предполагает при этом наличие с собой ноутбука, то основным для вас критерием будет маленький размер и вес. Например, вы работаете в сфере интернет провайдера и вам постоянно нужно настраивать различное оборудование, или вы очень часто ходите в походы и путешествия, то маленький ноутбук, а возможно и нетбук станут вам незаменимым спутником. Мощности нетбуков и основной части маленьких ноутбуков, конечно не велики, но зачем вам мощный компьютер, который быстро посадит батарею, для вас это критично!\r\n\r\n	\r\nВремя автономной работы\r\n\r\nЕсли ноутбук предполагается часто использовать от батареи, то время его работы без подзарядки, станет для вас очень важным критерием! Вам нужно будет покупать ноутбук небольшой мощности, с интегрированной видеокартой, а следовательно с малым общим тепловыделением. Так же стоит обратить внимание на ёмкость батареи установленной в этом ноутбуке, тут всё просто, чем больше – тем лучше.\r\n\r\n	\r\nВнешний вид и эргономика\r\n\r\nМатовое покрытие ноутбука более практичное, так как менее маркое и более защищённое от царапин. С цветом и его внешним видом, я думаю, вы определитесь сами. Одним из важных параметров, является удобство работы с клавиатурой:\r\n\r\nКнопки клавиатуры предпочтительно, должны быть на расстоянии друг от друга – это уменьшит вероятность двойного нажатия;\r\nДля каждой кнопки, должно быть прорезано отдельное отверстие в корпусе, это уменьшит количество пыли и мусора между кнопками и под ними;\r\nНаличие цифрового блока будет удобно для частого ввода цифр и использования калькулятора;\r\nБуквы разных языков не должны вводить вас в заблуждение, дабы вы не путались между ними, но данный параметр скорее индивидуален и не может иметь определённости;\r\nКнопка питания, кнопка Wi-Fi (если есть) и другие не должны находиться с торца ноутбука и иметь вид “отъезжающий в сторону” – это неудобно.', 5, NULL, 1),
(8, 2, 'Жесткий диск, компьютер,терабайт, винчестеры, скорость, бесшумная работа', 'Жесткий диск, компьютер,терабайт, винчестеры, скорость, бесшумная работа', 'эксплуатация SSD накопителей', 'description', 'Владимир Викторович', '2015-10-12', 7, 'apple_icons_win/PNG/autocad.jpg', 'SSD накопитель – это достаточно быстрый носитель информации, но у его памяти есть в запасе определённое количество раз для перезаписи. А если память SSD диска часто подвергать перезаписи да ещё и в больших объёмах, то дни его сочтены. В данный момент, SSD накопители используют преимущественно для установки на него операционной системы, это позволит существенно ускорить работу самой системы и запуск приложений с него. В данной статье приведу несколько рекомендаций, по использованию SSD диска, которые помогут продлить его срок жизни.\r\n\r\nНе использовать дефрагментацию диска\r\n\r\nДефрагментация диска, нужна для жёстких дисков, это уменьшает время чтения файлов, так как головке жёсткого диска не придётся бегать по поверхности всего магнитного диска в поисках фрагментов файла. А вот для SSD накопителя это совсем не важно, так как он может с одинаковой скоростью (почти) получать доступ к следующему фрагменту файла, не зависимо от расположения предыдущего. Следовательно, дефрагментация SSD накопителя ничего вам не даст кроме дополнительного износа ячеек памяти.\r\n\r\nОтключать файл подкачки\r\n\r\nВ операционных системах Windows в качестве виртуальной памяти используется файл подкачки, который по умолчанию находится на системном диске. А в операционных системах Linux в этой роли выступает Swap раздел. В эту виртуальную память, операционная система записывает определённые промежуточные данные или часто используемые данные, короче говоря использует (пытается использовать) вместо оперативной памяти, а это приводит к постоянной перезаписи этого файла подкачки или Swap радела. Данный файл или раздел нужно либо полностью отключать (при наличии достаточного объёма ОЗУ), либо переносить на раздел жёсткого диска.\r\n\r\nНе стоит “забивать” SSD\r\n\r\nКонтроллер SSD накопителя следит за равномерностью использования ячеек памяти, но если у него не будет в запасе достаточного количества свободных ячеек, то ему придётся перезаписывать те что есть, а это приведёт к неравномерному износу, и более быстрому выходу со строя всего SSD. Необходимо оставлять не менее 15% свободного пространства.\r\n\r\nОбновить прошивку\r\n\r\nОбновите прошивку контроллера вашего SSD, возможно, что в более новой прошивке уже более совершенные алгоритмы оптимизации и поддержка дополнительных функций, которые позволят продлить срок службы SSD.', 5, NULL, 1),
(9, 2, 'Жесткий диск, компьютер,терабайт, винчестеры, скорость, бесшумная работа, выбор жесткого диска', 'Жесткий диск, компьютер,терабайт, винчестеры, скорость, бесшумная работа, выбор жесткого диска', 'Выбор SSD накопителя', 'Материал о том как правильно выбрать SSD накопитель', 'Петренко Иван Степанович', '2015-10-07', 4, 'apple_icons_win/PNG/boxee 1.jpg', ' давайте разберём, зачем нам нужен SSD, а нужен он в основном для установки на него операционной системы. Для частой перезаписи больших объёмов данных SSD диск не подходит по причине его быстрого износа (износа ячеек памяти). Для хранения статической (не меняющейся) или меняющейся незначительно информации он подходит, но объёмы SSD совсем не велики, или довольно дороги по сравнению с жёсткими дисками. А вот, для установки на него операционной системы, он годиться в самый раз – это позволит существенно увеличить скорость работы системы и запуска приложений.\r\n\r\nТип памяти SSD накопителя\r\n\r\nНа данный момент, различают два типа памяти, использующие для построения SSD накопителя: MLC и SLC. SLC память, состоит из ячеек памяти, которые содержат один бит информации, а следовательно, имеют лишь два уровня заряда (0 и 1). MLC память – многоуровневая память, состоит из ячеек содержащих несколько бит и могут находиться в состоянии разных уровней заряда, а это значит увеличение емкости, уменьшение цены, но увеличение времени доступа и уменьшение количества перезаписей (срока службы) до 10-и раз! Следовательно, SLC память является более долговечной, более быстрой, но более дорогой.\r\n\r\nКонтроллер SSD накопителя\r\n\r\nОт контроллера SSD накопителя в большой степени зависит равномерность износа ячеек памяти, с плохим контроллером, память может износится неравномерно, из-за чего весь SSD придёт в негодность, хотя большая часть памяти ещё имеет ресурс. Принято считать самыми лучшими контроллеры SandForce и Intel.\r\n\r\nМожно ли разбивать SSD накопитель на несколько разделов\r\n\r\nПрочитав верхний абзац, может возникнуть вопрос, о том не будет ли один раздел разбитого на разделы SSD накопителя изнашиваться быстрее другого из-за более интенсивной записи в нём. Контроллер SSD диска оптимизирует данный процесс на всех микросхемах памяти, не зависимо от разметки. Это значит, что SSD накопитель можно делить на разделы без последствий.\r\n\r\nСкорость чтения/записи\r\n\r\nЯ думаю, тут всё предельно ясно', 5, 10, 2),
(10, 1, 'scscsc', 'scscs', 'sscscs', 'ccscsc', 'scscsc', '2015-10-20', 3, 'apple_icons_win/PNG/boxee 2.jpg', 'scsscsscs', 5, 10, 1),
(14, 2, 'axaxa', 'axaaxa', 'axaxax', 'axaxaxaa', 'scdcvdsvdfvdfvf', '2015-10-20', 7, 'apple_icons_win/PNG/browser Apple.jpg', 'axaxsx c dfbvfdbbdfbfgdtbgftnbgftnbgf', 5, 11, 2),
(15, 2, 'xaxaxaa', 'xaxaxaxaxax', 'aaxaxa', 'xaxaxaxax', 'axaxaxaxaaa', '2015-10-20', 7, 'apple_icons_win/PNG/calculator.jpg', 'xdaxcascxacscscscscscss', 5, 11, 2),
(21, 1, 'qqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqq', '2015-11-17', 7, 'apple_icons_win/PNG/calendar 1.jpg', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 5, 0, 1),
(22, 1, 'qqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqq', 'ssssssssssssssssssssssssssss', 'ssssssssssssss', '2015-11-17', 2, 'apple_icons_win/PNG/calendar 2.jpg', 'sssssssssssssssssssssssssssssssssssssss', 5, 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `options_comments`
--

CREATE TABLE IF NOT EXISTS `options_comments` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `picture` varchar(50) NOT NULL,
  `sum` int(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `options_comments`
--

INSERT INTO `options_comments` (`id`, `picture`, `sum`) VALUES
(1, 'img src="img/plus.gif"', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `password`
--

CREATE TABLE IF NOT EXISTS `password` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `parol` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `password`
--

INSERT INTO `password` (`id`, `login`, `parol`) VALUES
(1, 'm', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`) VALUES
(1, '1', '1', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users2`
--

CREATE TABLE IF NOT EXISTS `users2` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(30) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_hash` varchar(32) NOT NULL,
  `user_ip` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login_datetime` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `users2`
--

INSERT INTO `users2` (`user_id`, `user_login`, `user_password`, `user_hash`, `user_ip`, `last_login_datetime`) VALUES
(1, 'gfhhfhgfht', 'f8d00488b5d8e3392e5a078559d71c49', '', 0, ''),
(2, 'ffggf', '4f31b27807ea36e5bb5f9037260bb862', '', 0, ''),
(3, 'admin', '14e1b600b1fd579f47433b88e8d85291', '', 0, ''),
(4, 'reerere', '43c33e28d5f9b4d765026e2ebf29a100', '', 0, ''),
(5, 'aasa', '326473765fce046b79ec3bbe6c463b79', '', 0, ''),
(6, 'Vasia', '1f32aa4c9a1d2ea010adcf2348166a04', '', 0, ''),
(7, 'Apolinary', '1f32aa4c9a1d2ea010adcf2348166a04', '', 0, ''),
(8, 'Valia', '1f32aa4c9a1d2ea010adcf2348166a04', '', 0, ''),
(9, 'gxcgchjf', 'f0fa920c5db5ff2c03568fa105e63810', '', 0, ''),
(10, 'asssd', '7246ba320d729a14df6eb2f0beea1b75', '', 0, ''),
(11, '65655656', '5300878b40eddf6675ffb4160dcba391', '', 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `vegetables`
--

CREATE TABLE IF NOT EXISTS `vegetables` (
  `id` int(5) NOT NULL,
  `vegetable` varchar(255) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vegetables`
--

INSERT INTO `vegetables` (`id`, `vegetable`) VALUES
(0, 'potatoes'),
(1, 'beet'),
(2, 'tomatoes'),
(3, 'onion'),
(4, 'horseradish'),
(5, 'radish'),
(6, 'cucumbers'),
(7, 'eggplant'),
(8, 'pumpkin'),
(9, 'garlic'),
(10, 'carrot');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
