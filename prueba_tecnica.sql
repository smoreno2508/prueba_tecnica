-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 29-04-2021 a las 22:51:34
-- Versión del servidor: 8.0.24
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_tecnica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fecha_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `fecha_registro`) VALUES
(1, 'Sergio Moreno', 'smoreno2508@gmail.com', '2021-04-29 00:00:00'),
(2, 'edison Moreno', 'emc.5616@gmail.com', '2021-04-29 14:57:13'),
(3, 'Nicole moreno', 'nicolcita.moreno@gmail.com', '2021-04-29 00:00:00'),
(4, 'Matias Josue Covarrubia Molina', 'matias.josue1996@gmail.com', '2021-04-29 00:00:00'),
(5, 'Sergio Moreno', 'camilagangasmunoz@gmail.com', '2021-04-29 00:00:00'),
(6, 'juanito', 'juanito@gmail.com', '2021-04-29 00:00:00'),
(7, 'pedrito', 'pedrito@gmail.com', '2021-04-29 00:00:00'),
(8, 'gonzalo', 'gonzalo@gmail.com', '2021-04-29 00:00:00'),
(9, 'diego', 'diego@gmail.com', '2021-04-29 00:00:00'),
(10, 'cristina', 'cristina@gmail.com', '2021-04-29 00:00:00'),
(11, 'veronica', 'veronica@gmail.com', '2021-04-29 00:00:00'),
(12, 'pepito', 'pepito@gmail.com', '2021-04-29 00:00:00'),
(13, 'salvador', 'salvador@gmail.com', '2021-04-29 00:00:00'),
(14, 'alan', 'alan@gmail.com', '2021-04-29 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
