-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 17 2020 г., 21:45
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sanay`
--

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`post_id`, `email`, `topic`, `text`, `img`) VALUES
(1, '1@mail.ru', 'HELLO WORLD', 'jkdfhgjdhfkjghdfkgjdfkjghdkjfhgkdjfgkjhdfkghdkfjghdkfjhgdkfjghdkfjhgkdjfhgkdjfhgkjdhfkgjdhfkjdfkjghkdjfhgkdjfhgkdjfhgkdfjghkdjfghkdjfghkdjfghkdjfhgf', NULL),
(2, '111', '1111', '22222222222222222222222', NULL),
(3, '111', '1111', '22222222222222222222222', ''),
(4, '111', '1111', '22222222222222222222222', ''),
(5, '111', '', '', ''),
(6, '111', 'ner', 'gfjhdgjhdf', '');

-- --------------------------------------------------------

--
-- Структура таблицы `user_acounts`
--

CREATE TABLE `user_acounts` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user_acounts`
--

INSERT INTO `user_acounts` (`user_id`, `email`, `password`, `name`) VALUES
(1, 'jopa', 'dab9befb2d87902e5254797660cd5539', 'v@mail.ru'),
(4, '1111@mail.ru67', 'dab9befb2d87902e5254797660cd5539', '1111111'),
(5, '1@mail.ru', 'dab9befb2d87902e5254797660cd5539', '1111'),
(6, 'vvvv@gmail.com', 'edaacbd873b575325374e0a440d63433', '112263');

-- --------------------------------------------------------

--
-- Структура таблицы `user_rights`
--

CREATE TABLE `user_rights` (
  `rights_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `user` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user_rights`
--

INSERT INTO `user_rights` (`rights_id`, `email`, `admin`, `user`) VALUES
(2, '1111@mail.ru67', NULL, 1),
(3, '1@mail.ru', 1, 0),
(4, 'vvvv@gmail.com', NULL, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Индексы таблицы `user_acounts`
--
ALTER TABLE `user_acounts`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `user_rights`
--
ALTER TABLE `user_rights`
  ADD PRIMARY KEY (`rights_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `user_acounts`
--
ALTER TABLE `user_acounts`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `user_rights`
--
ALTER TABLE `user_rights`
  MODIFY `rights_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
