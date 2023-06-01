-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 27 2023 г., 21:13
-- Версия сервера: 10.3.38-MariaDB-log-cll-lve
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mttpsixo_psixolog_portal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `viloyat`
--

CREATE TABLE `viloyat` (
  `viloyat_id` int(11) NOT NULL,
  `viloyat_nomi` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `viloyat`
--

INSERT INTO `viloyat` (`viloyat_id`, `viloyat_nomi`, `status`) VALUES
(1, 'Qoraqalpog\'iston Respublikasi', 1),
(2, 'Andijon viloyati', 1),
(3, 'Buxoro viloyati', 1),
(4, 'Jizzax viloyati', 1),
(5, 'Qashqadaryo viloyati', 1),
(6, 'Navoiy viloyati', 1),
(7, 'Namangan viloyati', 1),
(8, 'Samarqand viloyati', 1),
(9, 'Surxondaryo viloyati', 1),
(10, 'Sirdaryo viloyati', 1),
(11, 'Toshkent viloyati', 1),
(12, 'Farg\'ona viloyati', 1),
(13, 'Xorazm viloyati', 1),
(14, 'Toshkent shahri', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `viloyat`
--
ALTER TABLE `viloyat`
  ADD PRIMARY KEY (`viloyat_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `viloyat`
--
ALTER TABLE `viloyat`
  MODIFY `viloyat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
