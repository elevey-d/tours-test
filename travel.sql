-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 19 2021 г., 14:33
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
-- База данных: `travel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `samochody`
--

CREATE TABLE `samochody` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `samochody`
--

INSERT INTO `samochody` (`id`, `name`, `image`, `price`) VALUES
(1, 'Volkswagen', 'car-1.jpg', 129),
(2, 'Renault', 'car-2.jpg', 99),
(3, 'Kia', 'car-3.jpg', 119),
(4, 'Ford', 'car-4.jpg', 159),
(5, 'Volkswagen', 'car-5.jpg', 199),
(6, 'Toyota', 'car-6.jpg', 129);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '4297f44b13955235245b2497399d7a93');

-- --------------------------------------------------------

--
-- Структура таблицы `wczasy`
--

CREATE TABLE `wczasy` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wczasy`
--

INSERT INTO `wczasy` (`id`, `name`, `image`, `description`, `price`) VALUES
(1, 'Los Angeles', 'place-1.jpg', '7 nights + Flight + 5* hotel', 7499),
(2, 'Hongkong', 'place-2.jpg', '3 nights + Flight + 5* hotel', 3499),
(3, 'Italy', 'place-3.jpg', '7 nights + Flight + 4* hotel', 1499),
(4, 'Philippines', 'place-4.jpg', '3 nights + Flight + 5* hotel', 3999),
(5, 'Japan', 'place-5.jpg', '3 nights + Flight + 4* hotel', 7499),
(6, 'Paris', 'place-6.jpg', '2 nights + Flight + 5* hotel', 1099),
(7, 'Singapore', 'place-7.jpg', '10 nights + Flight + 5* hotel', 5999),
(8, 'Madagascar', 'place-8.jpg', '3 nights + Flight + 4* hotel', 4499),
(9, 'Egypt', 'place-9.jpg', '7 nights + Flight + 5* hotel', 7499),
(10, 'Indonesia', 'place-10.jpg', '7 nights + Flight + 4* hotel', 6699);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wczasy`
--
ALTER TABLE `wczasy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `samochody`
--
ALTER TABLE `samochody`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `wczasy`
--
ALTER TABLE `wczasy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
