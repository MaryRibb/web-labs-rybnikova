-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 25 2020 г., 15:45
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php`
--

-- --------------------------------------------------------

--
-- Структура таблицы `otvet`
--

CREATE TABLE `otvet` (
  `id` int NOT NULL,
  `one` int DEFAULT NULL,
  `two` int DEFAULT NULL,
  `three` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `dno` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `fourth` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `try` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `onc` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `twc` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `thrc` text CHARACTER SET utf8 COLLATE utf8_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `otvet`
--

INSERT INTO `otvet` (`id`, `one`, `two`, `three`, `dno`, `fourth`, `try`, `onc`, `twc`, `thrc`) VALUES
(5, 2, 2, 'ds', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 2, 3, 'fdfs', '', NULL, NULL, NULL, NULL, NULL),
(9, 3, 4, 'reew', 'одна', '', NULL, NULL, NULL, NULL),
(10, 3, 4, 'reew', 'одна', '', '', NULL, NULL, NULL),
(11, 3, 4, 'reew', 'одна', '', 'Яблоко', '', '', ''),
(12, 3, 4, 'Губка', 'одна', '', '', 'Банан', '', ''),
(13, 4, 3, 'ввыа', '', 'две', '', '', 'Лимон', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `otvet`
--
ALTER TABLE `otvet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `otvet`
--
ALTER TABLE `otvet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
