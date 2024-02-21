-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 19 2024 г., 13:52
-- Версия сервера: 5.6.41
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phd_2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `username` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `last_login_at` int(11) DEFAULT NULL,
  `role` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `viloyat_id` int(11) NOT NULL,
  `telefon` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `tuman_id` int(11) DEFAULT NULL,
  `komissiya_id` int(11) DEFAULT NULL,
  `kasb_id` int(11) DEFAULT NULL,
  `activate` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activation_token` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mutaxassislik_id` int(11) DEFAULT NULL,
  `gender_id` int(11) DEFAULT NULL,
  `avatar` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(8) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `last_name`, `first_name`, `middle_name`, `email`, `password_hash`, `auth_key`, `created_at`, `updated_at`, `last_login_at`, `role`, `viloyat_id`, `telefon`, `status`, `tuman_id`, `komissiya_id`, `kasb_id`, `activate`, `activation_token`, `date_of_birth`, `mutaxassislik_id`, `gender_id`, `avatar`, `password`) VALUES
(1, 'abdulhamid', 'Xoliqov', 'Abdulhamid', 'Maxmud o\'g\'li', 'xolioqovhamid@gmail.com', '$2y$13$6fa/DWHBa.jnSvxFxlBiB.Mk4PQY2QtR.jI.OlADO2xAjDI3JV9Ti', 'kUXj25TH2N1wz-mTaWZEZfoHdpdZslAS', 1633774062, 1637508303, NULL, 'user', 8, '+998(94) 656-25-21', 10, 16, NULL, 3, '', NULL, '1993-04-21', NULL, 1, NULL, ''),
(2, 'sarvar', 'Maxmudjanov', 'Sarvar', 'Ulug\'bekovich', 's.makhmudjanov@gmail.com', '$2y$13$4rMevrKM/zkD5riW3uqfO.ImrBCxa/dmXDEVMRXeCh3dt8YUHn98O', 'lYd-pqpHO_945NTrzE5jxZzVDdQxy8sw', 1633775087, 1638350964, NULL, 'admin', 3, '+998(99) 950-29-58', 10, NULL, NULL, 3, '', NULL, '1991-12-22', NULL, NULL, 'uploads/user/avatar/2021/Dec/01/xJ7HvT7wT13q.jpg', ''),
(4, 'akmal', 'Aliqulov', 'Akmal', 'Xushmuratovich', 'greatdracon@mail.ru', '$2y$13$YQBA7BShTKdabC/ZUTXFs.9dfF3KSwW665uHw6C/44DaNUYBxcuk6', 'gXdmKnxdxvGZjagciEXZ-zay8xfNuZPG', 1633775087, 1638367957, NULL, 'admin', 5, '+998(99) 884-21-31', 10, 70, NULL, 3, '', NULL, '1989-12-11', NULL, NULL, 'uploads/user/avatar/2021/Dec/01/Y78_RO2PgwnM.png', ''),
(5, 'sanjar', 'Maxmudjanov', 'Sanjarbek', 'Ulugbekovich', 'sanjar21021993@gmail.com', '$2y$13$7sWzoGKqqPVmjYy4twWP9O6kvFwa/UNtA4ZfRfC/u4gW10S/P1b5S', 'CbTFeQw4Rq4e8itUsUPugins-PvVoDDk', 1636899918, 1636899936, NULL, 'user', 1, '+998(97) 455-95-30', 10, 2, NULL, 3, '', NULL, '1993-02-21', NULL, NULL, NULL, ''),
(6, 'javohir', 'Qayumov', 'Javohir', 'G\'ayrat o\'g\'li', 'javohir@gmail.com', '12345', '', 1633775087, 0, NULL, 'user', 2, '+998959470147', 10, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(7, 'suhrob', 'Qayumov', 'Suhrob', 'G\'ayrat o\'g\'li', 'javohir@gmail.com', '1234', '', 1633775087, 0, NULL, 'moderator', 2, '+998959470147', 10, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
