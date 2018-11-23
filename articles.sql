-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 20 2018 г., 18:57
-- Версия сервера: 5.6.39-83.1
-- Версия PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `co12606_1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `regdata` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `regdata`) VALUES
(1, 'Part of the academic community\r\n', 'Our commitment to the academic community and to global dissemination are the touchstones of our journals publishing program.\r\n\r\n', 1542709480),
(2, 'A trusted society partner\r\n', 'Oxford Academic publishes more than 200 journals on behalf of learned societies around the world.\r\n\r\n', 1542709508),
(3, 'OUP is celebrating Peer Review Week\r\n', 'We are happy to be part of Peer Review Week 2018. Learn more about how Oxford is celebrating diversity in peer review.\r\n\r\n', 1542709530),
(4, 'Open access\r\n', 'We are mission-driven to facilitate the widest possible dissemination of high-quality research.\r\n\r\n', 1542709548),
(5, 'How do male hummingbird dance moves alter their appearance?', 'Do their feathers or the sun play a part in their colourful display?', 1542728420),
(6, 'Social media use and disturbed sleep problems are real?', 'Chasing those likes can keep you awake at night.', 1542728786),
(7, 'Towards a postcolonial nineteenth century', 'On the exciting areas of crossover between the fields of postcolonialism and French studies.', 1542728818),
(8, 'Do government officials discriminate?', 'It appears that some tend to be less responsive to certain demographics than others.', 1542728838);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
