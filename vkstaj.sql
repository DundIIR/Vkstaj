-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 10 2023 г., 23:51
-- Версия сервера: 10.7.5-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vkstaj`
--

-- --------------------------------------------------------

--
-- Структура таблицы `one`
--

CREATE TABLE `one` (
  `id` int(11) NOT NULL COMMENT 'key',
  `user_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'user id',
  `event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'name event',
  `stat` int(11) NOT NULL COMMENT 'status user',
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'some information from the server',
  `time_server` int(11) NOT NULL COMMENT 'time from the server'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Первое задание';

--
-- Дамп данных таблицы `one`
--

INSERT INTO `one` (`id`, `user_ip`, `event`, `stat`, `action`, `time_server`) VALUES
(3, '', 'qwe', 1, '1', 1683745347),
(4, '', 'qwe', 1, '0', 1683745802),
(5, '127.0.0.1', 'qwe', 1, '1', 1683746697),
(6, '127.0.0.1', 'qwe', 0, '0', 1683746785),
(7, '127.0.0.1', 'azaazza', 0, '0', 1683746806),
(8, '127.0.0.1', 'фы', 0, '0', 1683746906),
(9, '127.0.0.1', 'фы', 0, '0', 1683746921),
(10, '127.0.0.1', 'фы', 0, '0', 1683746933),
(11, '127.0.0.1', 'фы', 0, '0', 1683746946),
(12, '127.0.0.1', 'фы', 0, '0', 1683746962),
(13, '127.0.0.1', 'wqe', 1, '1', 1683746991),
(14, '127.0.0.1', 'wqe', 1, '1', 1683747029),
(15, '127.0.0.1', 'qweassa', 0, '0', 1683747051),
(16, '127.0.0.1', 'qwe', 0, '0', 1683747097);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `one`
--
ALTER TABLE `one`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `one`
--
ALTER TABLE `one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'key', AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
