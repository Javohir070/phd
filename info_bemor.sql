-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 18 2023 г., 21:13
-- Версия сервера: 5.6.41
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gastroenterology`
--

-- --------------------------------------------------------

--
-- Структура таблицы `info_bemor`
--

CREATE TABLE `info_bemor` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birth_day` int(11) NOT NULL,
  `telefon` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jinsi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `olingan_signal` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `signal_1` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `signal_2` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `signal_3` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `signal_4` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `tashxis` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `tashxis_file` varchar(2048) COLLATE utf8_unicode_ci NOT NULL,
  `manzili` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `info_bemor`
--

INSERT INTO `info_bemor` (`id`, `last_name`, `first_name`, `middle_name`, `birth_day`, `telefon`, `email`, `jinsi`, `created_at`, `updated_at`, `olingan_signal`, `signal_1`, `signal_2`, `signal_3`, `signal_4`, `tashxis`, `tashxis_file`, `manzili`, `avatar`) VALUES
(13, 'Maxmudjanov', 'Sarvar', 'Ulug\'bekovich', 0, '+998(99) 950-29-58', 's.makhmudjanov@gmail.com', 'erkak', 1633775087, 1638350964, '', '', '', '', '', '', '', 'Toshkent', 'uploads/user/avatar/2021/Dec/01/xJ7HvT7wT13q.jpg'),
(32, 'Aliqulov', 'Akmal', 'Xushmuratovich', 0, '+998(93) 600-01-11', 'akmalaliqulov@gmail.com', 'erkak', 1641384743, 1641385416, '', '', '', '', '', '', '', 'Toshkent', 'uploads/user/avatar/2022/Jan/05/Gds9BXtPCZFK.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `info_bemor`
--
ALTER TABLE `info_bemor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_unique_email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `info_bemor`
--
ALTER TABLE `info_bemor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
