-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2023 a las 04:44:32
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
(54, 33, 77, 'Primer contactos ', '', '3155661242', '', '../../Public/images/System/0.svg', '2022-04-26 20:55:38'),
(56, NULL, 78, 'Raul', 'Gonzales', '', '', NULL, '2023-03-20 14:27:01'),
(57, NULL, 78, 'Alan', NULL, '', 'Alancarabali@gmail.com', NULL, '2023-03-20 14:29:39'),
(61, NULL, 79, 'JUAN', 'Gonzales', '3108327515', 'JUAN@gmail.com', NULL, '2023-03-20 16:50:45'),
(62, NULL, 79, 'Alan', NULL, '3145561727', 'Alancarabali@gmail.com', '../../Public/images/System/0.svg', '2023-03-20 16:51:37'),
(64, NULL, 77, 'Manolo', 'Gonzales', '', 'AlanCarabali@gmail.com', '../../Public/images/System/0.svg', '2023-03-25 12:56:54'),
(69, NULL, 77, 'bill', 'Gonzales', '', '', '../../Public/images/System/1.svg', '2023-03-27 17:57:03'),
(79, NULL, 76, 'Amor', '', '3145561727', 'AlanCarabali@gmail.com', '../../Public/images/System/1.svg', '2023-03-27 19:23:30'),
(80, NULL, 76, 'Juan', 'Zapata', '5454545454', 'AlanCarabali@gmail.com', '../../Public/images/System/0.svg', '2023-03-27 21:11:08'),
(81, 32, 76, 'bill', 'botas', '96565656', 'AlanCarabali@gmail.com', '../../Public/images/System/0.svg', '2023-03-27 21:41:01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_contactos`
--
ALTER TABLE `t_contactos`
  ADD PRIMARY KEY (`id_contactos`),
  ADD KEY `fkContactoCategoria_idx` (`id_categoria`),
  ADD KEY `user_id` (`users_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_contactos`
--
ALTER TABLE `t_contactos`
  MODIFY `id_contactos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Restricciones para tablas volcadas
--

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
