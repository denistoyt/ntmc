-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 02 2023 г., 19:13
-- Версия сервера: 5.7.39
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `NTMC_DB`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Doctors`
--

CREATE TABLE `Doctors` (
  `id_doctor` int(11) NOT NULL,
  `id_spec` int(11) NOT NULL,
  `doctor_sfl` varchar(100) NOT NULL,
  `doctor_qualific` varchar(50) NOT NULL,
  `doctor_cab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Doctors`
--

INSERT INTO `Doctors` (`id_doctor`, `id_spec`, `doctor_sfl`, `doctor_qualific`, `doctor_cab`) VALUES
(1, 1, 'Петров Вадим Семенович', 'Высшая', 403),
(2, 2, 'Семенова Галина Семеновна', 'Высшая', 212),
(3, 4, 'Иващук Степан Геннадьевич', 'Высшая', 323),
(5, 4, 'Петров Иван Иванович', 'Высшая', 410),
(6, 3, 'Евпатьев Семен Иванович', 'Высшая', 205);

-- --------------------------------------------------------

--
-- Структура таблицы `Doctor_Speciality`
--

CREATE TABLE `Doctor_Speciality` (
  `spec_id` int(11) NOT NULL,
  `spec_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Doctor_Speciality`
--

INSERT INTO `Doctor_Speciality` (`spec_id`, `spec_name`) VALUES
(1, 'Кардиолог'),
(2, 'Хирург'),
(3, 'Травматолог'),
(4, 'Офтальмолог');

-- --------------------------------------------------------

--
-- Структура таблицы `Orders`
--

CREATE TABLE `Orders` (
  `id` int(11) NOT NULL,
  `order_type` varchar(50) DEFAULT NULL,
  `order_way` varchar(50) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `patient_name` varchar(50) DEFAULT NULL,
  `patient_secname` varchar(50) DEFAULT NULL,
  `patient_lastname` varchar(50) DEFAULT NULL,
  `patient_born` date DEFAULT NULL,
  `patient_tel` varchar(18) DEFAULT NULL,
  `recept_date` date DEFAULT NULL,
  `recept_time` time DEFAULT NULL,
  `doctor_spec` varchar(50) DEFAULT NULL,
  `doctor_sfl` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `second_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `born_date` date DEFAULT NULL,
  `polis` varchar(19) DEFAULT NULL,
  `snils` varchar(14) DEFAULT NULL,
  `tel` varchar(18) NOT NULL,
  `ticket_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`id`, `order_id`, `login`, `password`, `first_name`, `second_name`, `last_name`, `born_date`, `polis`, `snils`, `tel`, `ticket_link`) VALUES
(2, NULL, 'denisto2', 'a01610228fe998f515a72dd730294d87', 'Денис', 'Ефимов', 'Эдуардович', NULL, NULL, NULL, '+7 (950) 198-86-82', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Doctors`
--
ALTER TABLE `Doctors`
  ADD PRIMARY KEY (`id_doctor`),
  ADD KEY `id_spec` (`id_spec`);

--
-- Индексы таблицы `Doctor_Speciality`
--
ALTER TABLE `Doctor_Speciality`
  ADD PRIMARY KEY (`spec_id`);

--
-- Индексы таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_name`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Doctors`
--
ALTER TABLE `Doctors`
  MODIFY `id_doctor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `Doctor_Speciality`
--
ALTER TABLE `Doctor_Speciality`
  MODIFY `spec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `Orders`
--
ALTER TABLE `Orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Doctors`
--
ALTER TABLE `Doctors`
  ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`id_spec`) REFERENCES `Doctor_Speciality` (`spec_id`);

--
-- Ограничения внешнего ключа таблицы `Users`
--
ALTER TABLE `Users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `Orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
