-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2024 a las 00:07:09
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quiz_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `created_at`) VALUES
(1, 'Wismeily Palma', 'King Jesus', '$2y$10$/z4qmSC00yj1tRGclwJ8lueOg5eGrD.eVOvRFYWwfk4MZ3RQbTQIG', '2024-07-07 16:34:37'),
(4, 'Wismeily Palma', 's', '$2y$10$bijnJQ3IGxBJFCYsO35ePePvJeHQ2NV0GaF98DAN1/OziQDczavIO', '2024-07-07 16:40:14'),
(5, 'josep@kiwop.com', 'Tu inmobiliaria', '$2y$10$w3bMqYA/r64UmP2AlhNqEOnjntwqJ86w09paitZ3FxSrAVajzaO5S', '2024-07-07 16:40:33'),
(6, 'NEW NAME', 'King ', '$2y$10$GYgURSUOlloqYpZbtc8HmO1qc/pH.sdQIRw8Qt6W/jbEncQwtgsEe', '2024-07-07 16:41:38'),
(7, 'Wismeily Palma', 'Ki', '$2y$10$5oDEiolZaOuyhq1SXDUcvu/oGeHoeIIhlwAO8B47eq.ApmY.f1aj2', '2024-07-08 01:14:51'),
(8, 'Elias', 'Elias', '$2y$10$nsQFcOkwjKlW4vMsodVZ4eZOx8Axh.L/1beM/hveQSe4NxWZhmJL2', '2024-07-17 15:39:25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
