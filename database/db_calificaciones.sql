-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2025 a las 07:45:43
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_calificaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id` int(11) NOT NULL,
  `apellidos` varchar(60) DEFAULT NULL,
  `nombres` varchar(60) DEFAULT NULL,
  `materia` varchar(20) NOT NULL,
  `nota` float NOT NULL,
  `comentario` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id`, `apellidos`, `nombres`, `materia`, `nota`, `comentario`) VALUES
(1, NULL, NULL, 'hols', 12, 'sdf'),
(2, NULL, NULL, 'php', 13, 'hola'),
(3, NULL, NULL, 'php', 15, 'estuvo bueno'),
(4, NULL, NULL, 'c++', 20, 'estuvo excelente'),
(6, NULL, NULL, 'da', 12, 'gt'),
(7, NULL, NULL, 'da', 12, 'sdf'),
(8, 'colquehuanca saldivar', 'moises fernando', 'php', 23, 'asd'),
(9, 'flores', 'moises fernando', 'php', 20, 'asd'),
(10, 'flores', 'moises fernando', 'php', 2, 'asd'),
(11, 'flores', 'moises fernando', 'php', 20, 'asd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
