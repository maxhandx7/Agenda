-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2023 a las 21:34:40
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
(5, 78, 'Hola');

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
(7, 78, 'imagen_20202029.jfif');

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
(33, 77, 'Lol', '', '2022-04-26 20:55:15'),
(35, 78, 'Hola', 'Nueva categoria', '2023-03-20 14:21:42');

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
  `fechaInsert` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_contactos`
--

INSERT INTO `t_contactos` (`id_contactos`, `id_categoria`, `users_id`, `nombre`, `paterno`, `telefono`, `email`, `fechaInsert`) VALUES
(53, 32, 76, 'Amor', '', '3145561727', '', '2022-04-26 20:39:38'),
(54, 33, 77, 'Primer contactos ', '', '3155661242', '', '2022-04-26 20:55:38'),
(56, NULL, 78, 'Raul', 'Gonzales', '', '', '2023-03-20 14:27:01'),
(57, NULL, 78, 'Alan', NULL, '', 'Alancarabali@gmail.com', '2023-03-20 14:29:39'),
(59, 35, 78, 'Alan', 'Paz', '3145561727', 'AlanCarabali@gmail.com', '2023-03-20 14:35:35'),
(60, NULL, 77, 'bill', 'Cardona', '', 'mom@mom.com', '2023-03-20 15:07:40');

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
(78, 'Prueba', '123', 'lol@lol.com', '0');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `t_categorias`
--
ALTER TABLE `t_categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `t_contactos`
--
ALTER TABLE `t_contactos`
  MODIFY `id_contactos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `esatdo`
--
ALTER TABLE `esatdo`
  ADD CONSTRAINT `esatdo_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `t_categorias`
--
ALTER TABLE `t_categorias`
  ADD CONSTRAINT `t_categorias_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `t_contactos`
--
ALTER TABLE `t_contactos`
  ADD CONSTRAINT `fkContactoCategoria` FOREIGN KEY (`id_categoria`) REFERENCES `t_categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_contactos_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
