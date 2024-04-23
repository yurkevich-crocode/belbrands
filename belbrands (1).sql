-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 23 2024 г., 05:25
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
-- База данных: `belbrands`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brands`
--

CREATE TABLE `brands` (
  `id` int NOT NULL,
  `name_brand` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foundation` date NOT NULL,
  `history` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `brands`
--

INSERT INTO `brands` (`id`, `name_brand`, `foundation`, `history`, `img_path`) VALUES
(3, '\"Камако\"', '2001-04-22', 'Компания КАМАКО начала свою деятельность с запуска производственного предприятия в Борисове в 1996 году. На старте ассортимент был небольшим – три вида наиболее популярных на рынке майонезов. За более чем 20-и летнюю историю компания стала лидером и экспертом на белорусском рынке соусов.\n\n1996 – запуск производственного предприятия КАМАКО в Борисове.\n\n \n\n1998 – создание собственной испытательной лаборатории, которая оснащена самым современным испытательным и измерительным оборудованием и аккредитована в национальной системе аккредитации Республики Беларусь.\n\n \n\n2005 – сертификация системы менеджмента качества на соответствие требованиям СТБ ISO 9001.\n\n \n\n2008 – сертификация на соответствие требованиям СТБ 1470. Стандарт устанавливает основные требования к системе управления качеством и безопасностью пищевых продуктов на основе анализа рисков и критических контрольных точек (НАССР).\n\n \n\n2018 – товарный знак КАМАКО признан общеизвестным в Республике Беларусь и зарегистрирован в национальном Реестре общеизвестных товарных знаков под № 25.\n\n \n\n2018, 2019, 2020 – продукты компании КАМАКО три года подряд уверенно одерживают победу в международном дегустационном конкурсе Superior Taste Award в Брюсселе: майонез КАМАКО «Провансаль Столичный», майонез «Деликатье» «Провансаль Классический», кетчуп «Помидюр» «Томатный», кетчуп КАМАКО «Классический», соус КАМАКО «Китайский сладкий».\n \n\n2021 – 25 лет компании КАМАКО!!!', 'uploads/brands/396eb43a7a_camaco.jpg'),
(4, '\"Марко\"', '2002-09-29', 'Марко сегодня\nСегодня бренд «Marko» - это синоним качества и удобства, надежности и долговечности. Использование современных технологий и материалов, внедрение креативных дизайнерских и конструкторских решений лежат в основе непрерывного развития и совершенствования ассортиментного портфеля обувного холдинга «Марко». Включение в состав трех крупных обувных предприятий, имеющих свою производственную специализацию, а также предприятия по производству меха - позволяет выпускать широчайший модельный ряд обуви: строгая классическая и повседневная обувь, эффектная статусная и обувь повышенного комфорта, обувь для активной жизни и специально разработанная для непогоды. Ежегодно «Марко» предлагает своему покупателю более 2000 новых моделей, сохраняя при этом и некоторые востребованные на протяжении нескольких сезонов обувные «хиты». Модельный ряд мужской, женской и детской обуви радует своим разнообразием, эксклюзивным дизайном, элегантностью, что отвечает вкусам самых строгих ценителей. Обувь «Marko» обладает не только непревзойденным внешним видом, но и соответствует таким важным требованиям нашего времени, как комфортность и неизменно высокое качество.', 'uploads/brands/3b6defe09b_24915da4e4_c7ab37c9c7_c80637c8c0_marko.jpg'),
(7, 'Demo 5 бренд', '2023-11-17', 'ЕЕЕЕЕН', 'uploads/brands/aa7114cf2b_ace9677038_редакт мастер2.jpg'),
(8, 'solnify', '2024-01-18', 'sdsdsfdsdf', 'uploads/brands/5d82864ea3_lalala.jpg'),
(10, 'Бренд', '2024-03-07', 'история', 'uploads/brands/0439620533_photo_2024-02-16_12-50-15.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `brand_category`
--

CREATE TABLE `brand_category` (
  `id_category` int NOT NULL,
  `id_brand` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `brand_category`
--

INSERT INTO `brand_category` (`id_category`, `id_brand`) VALUES
(5, 3),
(6, 4),
(2, 8),
(2, 10);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `brand_with_category`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `brand_with_category` (
`brand_id` int
,`brand_name` text
,`brand_foundation` date
,`brand_history` text
,`brand_img_path` text
,`category_name` text
,`category_img_path` text
);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name_category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name_category`, `img_path`) VALUES
(1, 'Машиностроение', './uploads/category/auto.jpg'),
(2, 'Одежда', './uploads/category/clothes.jpg'),
(3, 'Пищевая промышленность', './uploads/category/a0a781d122_af3bee9c56_food.jpg'),
(5, 'Косметика', './uploads/category/beaty.jpg'),
(6, 'Обувь', './uploads/category/99255fcf35_a04752e8b1_5a745d2db8_shoes.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `currency` varchar(20) NOT NULL,
  `images_path` text NOT NULL,
  `quantity` int NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `currency`, `images_path`, `quantity`, `rating`) VALUES
(1, 'Тестовый товар 1', 'Обувь', 'Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. ', 1234, 'BYN ', 'static/images/brands.jpg', 10, 1),
(2, 'Тестовый товар 2', 'Пищевая промышленность', 'Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. ', 2222, 'BYN ', 'static/images/hero.jpg', 10, 2),
(3, 'Тестовый товар 3', 'Одежда', 'Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. ', 1220, '$ ', 'static/images/hero.jpg', 10, 3),
(4, 'Тестовый товар 3', 'Автомобили', 'Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. ', 148, '€ ', 'static/images/brands.jpg', 1, 4),
(5, 'Тестовый товар 3', 'Искусство', 'Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. Тестовое описание данной карточки. ', 50, ' zl ', 'static/images/minsk.jpg', 22, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Администратор'),
(2, 'Модератор'),
(3, 'Пользователь');

-- --------------------------------------------------------

--
-- Структура таблицы `role_users`
--

CREATE TABLE `role_users` (
  `id_user` int NOT NULL,
  `id_role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role_users`
--

INSERT INTO `role_users` (`id_user`, `id_role`) VALUES
(2, 1),
(5, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `img_path`, `email`, `password`) VALUES
(2, 'Арсений', 'Лабецкий', './uploads/users/admin.jpg', 'gywynlrf@gmail.com', 'admin'),
(5, 'A', 'ТАТАТА', './uploads/users/admin.jpg', 'sadasd@mail.ru', '123123');

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `user_roles_view`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `user_roles_view` (
`user_id` int
,`user_name` text
,`user_last_name` text
,`user_email` text
,`user_img_path` text
,`user_password` text
,`role_name` text
);

-- --------------------------------------------------------

--
-- Структура для представления `brand_with_category`
--
DROP TABLE IF EXISTS `brand_with_category`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `brand_with_category`  AS SELECT `b`.`id` AS `brand_id`, `b`.`name_brand` AS `brand_name`, `b`.`foundation` AS `brand_foundation`, `b`.`history` AS `brand_history`, `b`.`img_path` AS `brand_img_path`, `c`.`name_category` AS `category_name`, `c`.`img_path` AS `category_img_path` FROM ((`brands` `b` join `brand_category` `bc` on((`b`.`id` = `bc`.`id_brand`))) join `category` `c` on((`bc`.`id_category` = `c`.`id`)))  ;

-- --------------------------------------------------------

--
-- Структура для представления `user_roles_view`
--
DROP TABLE IF EXISTS `user_roles_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `user_roles_view`  AS SELECT `u`.`id` AS `user_id`, `u`.`name` AS `user_name`, `u`.`last_name` AS `user_last_name`, `u`.`email` AS `user_email`, `u`.`img_path` AS `user_img_path`, `u`.`password` AS `user_password`, `r`.`name` AS `role_name` FROM ((`users` `u` join `role_users` `ru` on((`u`.`id` = `ru`.`id_user`))) join `roles` `r` on((`ru`.`id_role` = `r`.`id`)))  ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brand_category`
--
ALTER TABLE `brand_category`
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `role_users`
--
ALTER TABLE `role_users`
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `brand_category`
--
ALTER TABLE `brand_category`
  ADD CONSTRAINT `brand_category_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `brand_category_ibfk_2` FOREIGN KEY (`id_brand`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
