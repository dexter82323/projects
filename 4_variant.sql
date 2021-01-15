Create database `4_variant`;
use `4_variant`;

--
-- База данных: `4_variant`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auto`
--

CREATE TABLE `auto` (
  `Id_auto` int(10) NOT NULL,
  `Brand` varchar(50) DEFAULT NULL,
  `Type` int(10) DEFAULT NULL,
  `License` varchar(20) DEFAULT NULL,
  `Date_of_receiving` date DEFAULT NULL,
  `Date_of_write-off` date DEFAULT NULL,
  `Mileage` int(10) DEFAULT NULL,
  `Capacity_Cars` int(10) DEFAULT NULL,
  `Carrying_Truck` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auto`
--

INSERT INTO `auto` (`Id_auto`, `Brand`, `Type`, `License`, `Date_of_receiving`, `Date_of_write-off`, `Mileage`, `Capacity_Cars`, `Carrying_Truck`) VALUES
(1, 'МАЗ-544', 1, 'А838ЛМ161RUS', '2020-01-01', NULL, 40000, NULL, 10000),
(2, 'МАЗ-544', 2, 'E777CC161RUS', '2020-01-01', NULL, 40000, NULL, 10000),
(3, 'МАЗ-544', 2, 'O939EE161RUS', '2020-01-10', '2020-01-20', 70000, NULL, 10000),
(4, 'КамАЗ-652', 2, 'В999ВВ161RUS', '2020-02-01', NULL, 30000, NULL, 15000),
(5, 'КамАЗ-652', 2, 'Т123ТТ161RUS', '2020-03-01', NULL, 20000, NULL, 15000),
(6, 'МАЗ-232', 1, 'С606ХН161RUS', '2020-01-01', NULL, 3000, 50, NULL),
(7, 'МАЗ-232', 1, 'E326EC161RUS', '2020-01-01', NULL, 3000, 50, NULL),
(8, 'Mercedes-Benz Sprinter ll', 1, 'K665OX161RUS', '2020-01-05', NULL, 4000, 25, NULL),
(9, 'Hundai H350', 1, 'Y579XP161RUS', '2020-01-20', NULL, 6000, 40, NULL),
(10, 'НефАЗ-5299', 1, 'X555ME161RUS', '2020-02-01', '2020-03-01', 30000, 50, NULL),
(11, 'Volvo 7900', 1, 'T282OO161RUS', '2020-02-02', NULL, 3000, 35, NULL),
(12, 'Volvo 7900', 1, 'E813XK161RUS', '2020-03-01', NULL, 7000, 50, NULL),
(13, 'Citroen Jumper lll', 1, 'C304KB161RUS', '2020-03-05', NULL, 10000, 30, NULL),
(14, 'ВАЗ-2107', 4, 'А547МР161RUS', '2020-01-01', NULL, 10000, 3, NULL),
(15, 'ГАЗ-3102', 4, 'А666АА161RUS', '2020-01-05', NULL, 12000, 4, NULL),
(16, 'ВАЗ-2107', 4, 'Е455KЛ61RUS', '2020-01-05', '2020-04-17', 30000, 3, NULL),
(17, 'ПМЗ-17А', 4, 'О939МИ59RUS', '2020-02-01', NULL, 11000, 2, NULL),
(18, 'УАЗ-452', 4, 'Х322АВ161RUS', '2020-03-01', NULL, 20000, 6, NULL),
(19, 'Hundai Solaris', 3, 'A777TR161RUS', '2020-01-01', NULL, 10000, 4, NULL),
(20, 'Hundai Solaris', 3, 'А075АА161RUS', '2020-01-05', NULL, 14000, 4, NULL),
(21, 'Hundai Solaris', 3, 'A347TM161RUS', '2020-01-05', NULL, 20000, 4, NULL),
(22, 'Lada Vesta', 3, 'A357KM161RUS', '2020-01-13', '2020-01-20', 10000, 3, NULL),
(23, 'Lada Granta', 3, 'E738TT161RUS', '2020-01-13', NULL, 5000, 4, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `brigadiers`
--

CREATE TABLE `brigadiers` (
  `Id_brigadier` int(10) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Id_Master` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brigadiers`
--

INSERT INTO `brigadiers` (`Id_brigadier`, `Name`, `Id_Master`) VALUES
(1, 'Мухин Ефим Станиславович', 1),
(2, 'Калашников Адам Серапионович', 2),
(3, 'Ильин Азарий Яковович', 1),
(4, 'Русаков Герасим Проклович', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `carrying`
--

CREATE TABLE `carrying` (
  `Id_carrying` int(10) NOT NULL,
  `Id_truck` int(10) DEFAULT NULL,
  `Date_of_Start` date DEFAULT NULL,
  `Date_of_Ending` date DEFAULT NULL,
  `Departure` varchar(45) DEFAULT NULL,
  `Destination` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `carrying`
--

INSERT INTO `carrying` (`Id_carrying`, `Id_truck`, `Date_of_Start`, `Date_of_Ending`, `Departure`, `Destination`) VALUES
(1, 2, '2020-03-01', '2020-03-10', 'Ростов-на-Дону', 'Москва'),
(2, 4, '2020-03-10', '2020-03-20', 'Ростов-на-Дону', 'Краснодар');

-- --------------------------------------------------------

--
-- Структура таблицы `director`
--

CREATE TABLE `director` (
  `Id_director` int(10) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Id_workshop` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `director`
--

INSERT INTO `director` (`Id_director`, `Name`, `Id_workshop`) VALUES
(1, 'Лихачёв Овидий Лукьевич', 1),
(2, 'Павлов Карл Донатович', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `drivers`
--

CREATE TABLE `drivers` (
  `Id_driver` int(10) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Category` varchar(10) DEFAULT NULL,
  `Id_auto` int(10) DEFAULT NULL,
  `id_route` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `drivers`
--

INSERT INTO `drivers` (`Id_driver`, `Name`, `Category`, `Id_auto`, `id_route`) VALUES
(1, 'Лобанов Донат Альвианович', 'B', 6, 1),
(2, 'Горшков Людвиг Иосифович', 'B', 7, 1),
(3, 'Котов Аввакум Оскарович', 'B', 8, 2),
(4, 'Смирнов Герасим Максович', 'B', 8, 2),
(5, 'Гурьев Бенедикт Платонович', 'B', 9, 3),
(6, 'Баранов Адольф Тихонович', 'A', 1, NULL),
(7, 'Беляев Виталий Данилович', 'C', 1, NULL),
(8, 'Егоров Мирон Артемович', 'B', 14, NULL),
(9, 'Кононов Лукьян Павлович', 'B', 15, NULL),
(10, 'Шилов Вячеслав Валерьевич', 'B', 16, NULL),
(11, 'Козлов Сергей Лаврентьевич', 'B', 19, NULL),
(12, 'Богданов Станислав Николаевич', 'B', 20, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `masters`
--

CREATE TABLE `masters` (
  `Id_master` int(10) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Id_Director` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `masters`
--

INSERT INTO `masters` (`Id_master`, `Name`, `Id_Director`) VALUES
(1, 'Меркушев Альфред Вячеславович', 1),
(2, 'Зуев Рубен Ильяович', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `profession`
--

CREATE TABLE `profession` (
  `Id_profession` int(10) NOT NULL,
  `Title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `profession`
--

INSERT INTO `profession` (`Id_profession`, `Title`) VALUES
(1, 'Сварщик'),
(2, 'Электрик'),
(3, 'Ремонтник');

-- --------------------------------------------------------

--
-- Структура таблицы `repairs`
--

CREATE TABLE `repairs` (
  `Id_repair` int(10) NOT NULL,
  `Id_auto` int(10) DEFAULT NULL,
  `Id_staff` int(10) DEFAULT NULL,
  `Discription` varchar(100) DEFAULT NULL,
  `Cost` int(10) DEFAULT NULL,
  `Number_of_used_unit` int(10) DEFAULT NULL,
  `Date_of_receiving` date DEFAULT NULL,
  `Date_of_end` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `repairs`
--

INSERT INTO `repairs` (`Id_repair`, `Id_auto`, `Id_staff`, `Discription`, `Cost`, `Number_of_used_unit`, `Date_of_receiving`, `Date_of_end`) VALUES
(1, 3, 1, 'Сломался двигатель', 50000, 3, '2020-01-20', '2020-01-25'),
(2, 10, 1, 'Сломался руль', 30000, 5, '2020-03-01', '2020-03-10'),
(3, 16, 2, 'Поменять масло', 3000, 4, '2020-04-17', '2020-04-27'),
(4, 22, 3, 'Проколата шина', 2000, 2, '2020-01-20', '2020-02-01');

-- --------------------------------------------------------

--
-- Структура таблицы `routes`
--

CREATE TABLE `routes` (
  `Id_route` int(10) NOT NULL,
  `Start` varchar(100) DEFAULT NULL,
  `End` varchar(100) DEFAULT NULL,
  `Length` int(10) DEFAULT NULL,
  `Repeats` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `routes`
--

INSERT INTO `routes` (`Id_route`, `Start`, `End`, `Length`, `Repeats`) VALUES
(1, 'Жд вокзал', 'Пр.Шолохова 12', 10, 5),
(2, 'Ул.Туполева 32', 'Гпз-10', 12, 3),
(3, 'Ул.Шаповалова 1 ', 'Ул.Большая садовая 10', 11, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `service_staff`
--

CREATE TABLE `service_staff` (
  `Id_staff` int(10) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Id_profession` int(10) DEFAULT NULL,
  `Id_brigadier` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `service_staff`
--

INSERT INTO `service_staff` (`Id_staff`, `Name`, `Id_profession`, `Id_brigadier`) VALUES
(1, 'Савельев Филипп Натанович', 3, NULL),
(2, 'Соболев Марк Глебович', 3, NULL),
(3, 'Кошелев Варлаам Богданович', 3, NULL),
(4, 'Хохлов Август Романович', 3, NULL),
(5, 'Лыткин Ермак Лаврентьевич', 2, 1),
(6, 'Русаков Тимофей Денисович', 1, 2),
(7, 'Лихачёв Андрей Валерьянович', 2, 3),
(8, 'Константинов Натан Адольфович', 1, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE `type` (
  `Id_Type` int(10) NOT NULL,
  `Type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`Id_Type`, `Type`) VALUES
(1, 'Автобус'),
(2, 'Грузовик'),
(3, 'Такси'),
(4, 'Служебная машина');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(250) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `password` varchar(250) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `auth_key` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `auth_key`) VALUES
(1, 'admin', '$2y$13$0yPZK7naGZQroBmcfHjM5OwXZhvbtx5P1IFMdTWseAuTdHhBZHpY.', '25346');

-- --------------------------------------------------------

--
-- Структура таблицы `workshops`
--

CREATE TABLE `workshops` (
  `Id_workshop` int(10) NOT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `workshops`
--

INSERT INTO `workshops` (`Id_workshop`, `Name`) VALUES
(1, 'Механический'),
(2, 'Фрезерный');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`Id_auto`),
  ADD KEY `Type` (`Type`);

--
-- Индексы таблицы `brigadiers`
--
ALTER TABLE `brigadiers`
  ADD PRIMARY KEY (`Id_brigadier`),
  ADD KEY `Id_Master` (`Id_Master`);

--
-- Индексы таблицы `carrying`
--
ALTER TABLE `carrying`
  ADD PRIMARY KEY (`Id_carrying`),
  ADD KEY `Id_truck` (`Id_truck`);

--
-- Индексы таблицы `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`Id_director`),
  ADD KEY `Id_workshop` (`Id_workshop`);

--
-- Индексы таблицы `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`Id_driver`),
  ADD KEY `id_route` (`id_route`),
  ADD KEY `Id_auto` (`Id_auto`);

--
-- Индексы таблицы `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`Id_master`),
  ADD KEY `Id_Director` (`Id_Director`);

--
-- Индексы таблицы `profession`
--
ALTER TABLE `profession`
  ADD PRIMARY KEY (`Id_profession`);

--
-- Индексы таблицы `repairs`
--
ALTER TABLE `repairs`
  ADD PRIMARY KEY (`Id_repair`),
  ADD KEY `Id_auto` (`Id_auto`),
  ADD KEY `Id_staff` (`Id_staff`);

--
-- Индексы таблицы `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`Id_route`);

--
-- Индексы таблицы `service_staff`
--
ALTER TABLE `service_staff`
  ADD PRIMARY KEY (`Id_staff`),
  ADD KEY `Id_profession` (`Id_profession`),
  ADD KEY `Id_brigadier` (`Id_brigadier`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`Id_Type`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`Id_workshop`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auto`
--
ALTER TABLE `auto`
  MODIFY `Id_auto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `brigadiers`
--
ALTER TABLE `brigadiers`
  MODIFY `Id_brigadier` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `carrying`
--
ALTER TABLE `carrying`
  MODIFY `Id_carrying` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `director`
--
ALTER TABLE `director`
  MODIFY `Id_director` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `drivers`
--
ALTER TABLE `drivers`
  MODIFY `Id_driver` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `masters`
--
ALTER TABLE `masters`
  MODIFY `Id_master` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `profession`
--
ALTER TABLE `profession`
  MODIFY `Id_profession` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `repairs`
--
ALTER TABLE `repairs`
  MODIFY `Id_repair` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `routes`
--
ALTER TABLE `routes`
  MODIFY `Id_route` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `service_staff`
--
ALTER TABLE `service_staff`
  MODIFY `Id_staff` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `Id_Type` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `workshops`
--
ALTER TABLE `workshops`
  MODIFY `Id_workshop` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `auto_ibfk_1` FOREIGN KEY (`Type`) REFERENCES `type` (`Id_Type`);

--
-- Ограничения внешнего ключа таблицы `brigadiers`
--
ALTER TABLE `brigadiers`
  ADD CONSTRAINT `brigadiers_ibfk_1` FOREIGN KEY (`Id_Master`) REFERENCES `masters` (`Id_master`);

--
-- Ограничения внешнего ключа таблицы `carrying`
--
ALTER TABLE `carrying`
  ADD CONSTRAINT `carrying_ibfk_1` FOREIGN KEY (`Id_truck`) REFERENCES `auto` (`Id_auto`);

--
-- Ограничения внешнего ключа таблицы `director`
--
ALTER TABLE `director`
  ADD CONSTRAINT `director_ibfk_1` FOREIGN KEY (`Id_workshop`) REFERENCES `workshops` (`Id_workshop`);

--
-- Ограничения внешнего ключа таблицы `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `drivers_ibfk_1` FOREIGN KEY (`id_route`) REFERENCES `routes` (`Id_route`),
  ADD CONSTRAINT `drivers_ibfk_2` FOREIGN KEY (`Id_auto`) REFERENCES `auto` (`Id_auto`);

--
-- Ограничения внешнего ключа таблицы `masters`
--
ALTER TABLE `masters`
  ADD CONSTRAINT `masters_ibfk_1` FOREIGN KEY (`Id_Director`) REFERENCES `director` (`Id_director`);

--
-- Ограничения внешнего ключа таблицы `repairs`
--
ALTER TABLE `repairs`
  ADD CONSTRAINT `repairs_ibfk_1` FOREIGN KEY (`Id_auto`) REFERENCES `auto` (`Id_auto`),
  ADD CONSTRAINT `repairs_ibfk_2` FOREIGN KEY (`Id_staff`) REFERENCES `service_staff` (`Id_staff`);

--
-- Ограничения внешнего ключа таблицы `service_staff`
--
ALTER TABLE `service_staff`
  ADD CONSTRAINT `service_staff_ibfk_1` FOREIGN KEY (`Id_profession`) REFERENCES `profession` (`Id_profession`),
  ADD CONSTRAINT `service_staff_ibfk_2` FOREIGN KEY (`Id_brigadier`) REFERENCES `brigadiers` (`Id_brigadier`);
COMMIT;
