-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 24 2020 г., 00:47
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php1level5`
--

-- --------------------------------------------------------

--
-- Структура таблицы `otziv`
--

CREATE TABLE `otziv` (
  `id` int(4) NOT NULL,
  `Aftor` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `otziv`
--

INSERT INTO `otziv` (`id`, `Aftor`, `text`, `date`) VALUES
(90, 'Ð—Ð°Ð¼ÐµÑ‚ÐºÐ°1', 'Ð—Ð°Ð¼ÐµÑ‚ÐºÐ°1', '2020-11-22'),
(99, 'Ð—Ð°Ð¼ÐµÑ‚ÐºÐ°2', 'Ð—Ð°Ð¼ÐµÑ‚ÐºÐ°2', '2020-11-23'),
(100, 'Ð—Ð°Ð¼ÐµÑ‚ÐºÐ°3', 'Ð—Ð°Ð¼ÐµÑ‚ÐºÐ° 3', '2020-11-24');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `otziv`
--
ALTER TABLE `otziv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `otziv`
--
ALTER TABLE `otziv`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
