-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 12 2023 г., 13:44
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `AVA`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tb_rates`
--

CREATE TABLE `tb_rates` (
  `ID_RATES` int NOT NULL,
  `POWER_RATES` varchar(50) NOT NULL,
  `R_PRICE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tb_rates`
--

INSERT INTO `tb_rates` (`ID_RATES`, `POWER_RATES`, `R_PRICE`) VALUES
(1, 'Без тарифа питания', 0),
(2, 'Только ужин', 1200),
(3, 'Только завтраки', 850),
(4, 'Всё включено', 3000);

-- --------------------------------------------------------

--
-- Структура таблицы `tb_reservation`
--

CREATE TABLE `tb_reservation` (
  `ID_RESERVATION` int NOT NULL,
  `ID_ROOM` int NOT NULL,
  `STATUS` int NOT NULL,
  `PRICE` float NOT NULL,
  `DATE_IN` date NOT NULL,
  `DATE_OUT` date NOT NULL,
  `FIO` varchar(100) NOT NULL,
  `P_MAIL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tb_reviews`
--

CREATE TABLE `tb_reviews` (
  `ID_REVIEW` int NOT NULL,
  `NICKNAME` varchar(16) NOT NULL,
  `COMM` varchar(255) NOT NULL,
  `RATING` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tb_reviews`
--

INSERT INTO `tb_reviews` (`ID_REVIEW`, `NICKNAME`, `COMM`, `RATING`) VALUES
(1, 'ELENA', 'Расположение, атмосфера, убранство отеля и номеров, обстановка вокруг отеля и виды. Всё на очень высоком уровне! Молодцы! Персонал очень профессиональный. Теперь и в нашей стране появляются очень высокого уровня места для отдыха. Развивайтесь!!!', 5),
(2, 'MARIA', 'Наверное лучший отель на Высоте 960 Все хорошо, качественный сервис, отличные завтраки.', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `tb_room`
--

CREATE TABLE `tb_room` (
  `ID_ROOM` int NOT NULL,
  `HOTEL_ROOM` int NOT NULL,
  `PRICE` int NOT NULL,
  `TYPE_ROOM` varchar(15) NOT NULL,
  `NUM_ROOMS` int NOT NULL,
  `NUM_BEDS` int NOT NULL,
  `PHOTO` varchar(50) NOT NULL,
  `IN_DATE` date DEFAULT NULL,
  `OUT_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tb_room`
--

INSERT INTO `tb_room` (`ID_ROOM`, `HOTEL_ROOM`, `PRICE`, `TYPE_ROOM`, `NUM_ROOMS`, `NUM_BEDS`, `PHOTO`, `IN_DATE`, `OUT_DATE`) VALUES
(1, 394, 10000, 'STANDART ROOM', 1, 1, 'room-2.jpg', NULL, NULL),
(3, 401, 15000, 'FAMILY ROOM', 2, 3, 'room-3.jpg', NULL, NULL),
(4, 455, 30000, 'LUX ROOM', 2, 1, 'room-4.jpg', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tb_rates`
--
ALTER TABLE `tb_rates`
  ADD PRIMARY KEY (`ID_RATES`);

--
-- Индексы таблицы `tb_reservation`
--
ALTER TABLE `tb_reservation`
  ADD PRIMARY KEY (`ID_RESERVATION`),
  ADD KEY `ID_ROOM` (`ID_ROOM`),
  ADD KEY `DATE_IN` (`DATE_IN`,`DATE_OUT`);

--
-- Индексы таблицы `tb_reviews`
--
ALTER TABLE `tb_reviews`
  ADD PRIMARY KEY (`ID_REVIEW`);

--
-- Индексы таблицы `tb_room`
--
ALTER TABLE `tb_room`
  ADD PRIMARY KEY (`ID_ROOM`),
  ADD KEY `IN_DATE` (`IN_DATE`,`OUT_DATE`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tb_rates`
--
ALTER TABLE `tb_rates`
  MODIFY `ID_RATES` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `tb_reservation`
--
ALTER TABLE `tb_reservation`
  MODIFY `ID_RESERVATION` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tb_reviews`
--
ALTER TABLE `tb_reviews`
  MODIFY `ID_REVIEW` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `ID_ROOM` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `tb_reservation`
--
ALTER TABLE `tb_reservation`
  ADD CONSTRAINT `tb_reservation_ibfk_1` FOREIGN KEY (`ID_ROOM`) REFERENCES `tb_room` (`ID_ROOM`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `tb_room`
--
ALTER TABLE `tb_room`
  ADD CONSTRAINT `tb_room_ibfk_1` FOREIGN KEY (`IN_DATE`,`OUT_DATE`) REFERENCES `tb_reservation` (`DATE_IN`, `DATE_OUT`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
