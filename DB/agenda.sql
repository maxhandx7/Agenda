-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-04-2023 a las 05:15:23
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `esatdo`
--

CREATE TABLE `esatdo` (
  `id` int(10) NOT NULL,
  `users_id` int(24) NOT NULL,
  `estado` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `esatdo`
--

INSERT INTO `esatdo` (`id`, `users_id`, `estado`) VALUES
(1, 76, 'Soy muy linda y me amo'),
(2, 77, 'El estado de esta  cosa '),
(3, 77, 'Sin Estado'),
(4, 77, 'Alan'),
(5, 78, 'Hola'),
(6, 79, 'HOLA SOY ISMAEL'),
(7, 78, 'Mi gente\r\n'),
(8, 78, 'Hola'),
(9, 78, 'Hola'),
(10, 78, 'Lol'),
(11, 78, 'Lol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `titulo` varchar(56) NOT NULL,
  `descripcion` varchar(256) DEFAULT NULL,
  `inicio` varchar(56) NOT NULL,
  `fin` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `id_user`, `titulo`, `descripcion`, `inicio`, `fin`) VALUES
(23, 76, 'dfsdf', 'sdfdsf', '2023-03-28', '2023-03-29'),
(26, 77, 'Hola', 'asjhdkasjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '2023-03-29', '2023-03-30'),
(27, 77, 'Hola', '45454545', '2023-03-30', '2023-03-31'),
(28, 77, 'Hola', 'adasd', '2023-04-04T07:30:00-05:00', '2023-04-04T08:00:00-05:00'),
(29, 77, 'hOLA', 'ASDASDA', '2023-04-04T08:00:00-05:00', '2023-04-04T08:30:00-05:00'),
(30, 78, 'Hola', 'Nueva\n', '2023-04-05', '2023-04-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id` int(24) NOT NULL,
  `users_id` int(24) DEFAULT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id`, `users_id`, `image`) VALUES
(1, 76, 'imagen_27033811.jpg'),
(2, 76, 'imagen_27033811.jpg'),
(3, 76, 'imagen_27033811.jpg'),
(4, 77, 'imagen_27035336.jpg'),
(5, 77, 'imagen_27035438.webp'),
(6, 77, 'imagen_27044521.jpg'),
(7, 78, 'imagen_20202029.jfif'),
(8, 79, 'imagen_20224907.jpeg'),
(9, 78, 'imagen_25051700.jpg'),
(10, 78, 'imagen_07043401.jfif'),
(11, 78, 'imagen_07043439.jfif'),
(12, 78, 'imagen_07043529.jfif'),
(13, 78, 'imagen_07043648.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_categorias`
--

CREATE TABLE `t_categorias` (
  `id_categoria` int(11) NOT NULL,
  `users_id` int(8) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `fechaInsert` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_categorias`
--

INSERT INTO `t_categorias` (`id_categoria`, `users_id`, `nombre`, `descripcion`, `fechaInsert`) VALUES
(32, 76, 'Love', '', '2022-04-26 20:39:19'),
(36, 77, 'Rubens', 'asdsadas', '2023-03-25 13:00:29'),
(38, 77, 'sadasd', 'asdsa', '2023-04-06 19:53:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_contactos`
--

CREATE TABLE `t_contactos` (
  `id_contactos` int(11) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `users_id` int(8) NOT NULL,
  `nombre` varchar(245) DEFAULT NULL,
  `paterno` varchar(245) DEFAULT NULL,
  `telefono` varchar(145) DEFAULT NULL,
  `email` varchar(245) DEFAULT NULL,
  `avatar` varchar(32) DEFAULT '../../Public/images/System/0.svg',
  `fechaInsert` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_contactos`
--

INSERT INTO `t_contactos` (`id_contactos`, `id_categoria`, `users_id`, `nombre`, `paterno`, `telefono`, `email`, `avatar`, `fechaInsert`) VALUES
(61, NULL, 79, 'JUAN', 'Gonzales', '3108327515', 'JUAN@gmail.com', NULL, '2023-03-20 16:50:45'),
(62, NULL, 79, 'Alan', NULL, '3145561727', 'Alancarabali@gmail.com', '../../Public/images/System/0.svg', '2023-03-20 16:51:37'),
(79, NULL, 76, 'Amor', '', '3145561727', 'AlanCarabali@gmail.com', '../../Public/images/System/1.svg', '2023-03-27 19:23:30'),
(80, NULL, 76, 'Juan', 'Zapata', '5454545454', 'AlanCarabali@gmail.com', '../../Public/images/System/0.svg', '2023-03-27 21:11:08'),
(81, 32, 76, 'bill', 'botas', '96565656', 'AlanCarabali@gmail.com', '../../Public/images/System/0.svg', '2023-03-27 21:41:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(56) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `email` varchar(56) NOT NULL,
  `num` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `nombre`, `pass`, `email`, `num`) VALUES
(76, 'Diana', 'salma12.', 'Dianaamaamiranda@gmail.com', NULL),
(77, 'Alan', '1796', 'Alancarabali@gmail.com', '3145561727'),
(78, 'Prueba', '123', 'lol@lol.com', '3454545'),
(79, 'Ismael', 'ismaelyate', 'ismaelyate@gmail.com', '3108129260'),
(80, 'Juan', '$2y$10$Z7Uwj.QP80RCR6Tt2Y', 'AlanCarabali@gmail.com', '21561545'),
(81, 'Rosa', '$2a$10$ce6d30d8927a8ca7b1', 'AlanCarabali@gmail.com', '0'),
(82, 'Diego', '$2a$10$6be0fa309ce9af5c2d', '', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `esatdo`
--
ALTER TABLE `esatdo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indices de la tabla `t_categorias`
--
ALTER TABLE `t_categorias`
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `user_id` (`users_id`);

--
-- Indices de la tabla `t_contactos`
--
ALTER TABLE `t_contactos`
  ADD PRIMARY KEY (`id_contactos`),
  ADD KEY `fkContactoCategoria_idx` (`id_categoria`),
  ADD KEY `user_id` (`users_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `esatdo`
--
ALTER TABLE `esatdo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `t_categorias`
--
ALTER TABLE `t_categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `t_contactos`
--
ALTER TABLE `t_contactos`
  MODIFY `id_contactos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `esatdo`
--
ALTER TABLE `esatdo`
  ADD CONSTRAINT `esatdo_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Filtros para la tabla `t_categorias`
--
ALTER TABLE `t_categorias`
  ADD CONSTRAINT `t_categorias_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `t_contactos`
--
ALTER TABLE `t_contactos`
  ADD CONSTRAINT `fkContactoCategoria` FOREIGN KEY (`id_categoria`) REFERENCES `t_categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE SET NULL,
  ADD CONSTRAINT `t_contactos_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
