-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2017 a las 03:54:12
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `umm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_models`
--

CREATE TABLE IF NOT EXISTS `detalle_models` (
  `nombre` varchar(40) NOT NULL,
  `precio` float NOT NULL,
  `descripcion` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_models`
--

INSERT INTO `detalle_models` (`nombre`, `precio`, `descripcion`, `id`) VALUES
('Arreglo', 25, 'Conjunto de globos, chocolates y mas. organizados muy lindo.', 1),
('caja sorpresa', 50, 'Caja de carton con fotos, mensajes, imagenes, globos, y mas. Un regalo unico. ', 2),
('cartel', 15, 'Declaracion de amor, y si no, un gran texto de cariño.', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_models`
--

CREATE TABLE IF NOT EXISTS `user_models` (
  `nombre` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_models`
--

INSERT INTO `user_models` (`nombre`, `email`, `password`) VALUES
('Omar Guerrero', 'guerrero9725@gmail.com', 'og235711');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_models`
--
ALTER TABLE `detalle_models`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_models`
--
ALTER TABLE `user_models`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_models`
--
ALTER TABLE `detalle_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
