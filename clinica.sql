-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2020 a las 22:59:49
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medical_appointments`
--

CREATE TABLE `medical_appointments` (
  `Id_cita` int(11) NOT NULL,
  `date` date NOT NULL,
  `document_patient` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `medical_appointments`
--

INSERT INTO `medical_appointments` (`Id_cita`, `date`, `document_patient`) VALUES
(54, '2020-05-15', 10034052),
(55, '2020-05-30', 43896465),
(56, '2020-05-28', 43896465),
(57, '2020-05-09', 10034052),
(59, '2020-05-01', 10034052),
(60, '2020-05-21', 43896745),
(61, '2020-05-20', 43896465),
(63, '2020-06-29', 1004300516);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patients`
--

CREATE TABLE `patients` (
  `document` int(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `city_of_residence` varchar(50) NOT NULL,
  `neighborhood` varchar(50) NOT NULL,
  `cell_phone_number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `patients`
--

INSERT INTO `patients` (`document`, `name`, `lastname`, `birthdate`, `city_of_residence`, `neighborhood`, `cell_phone_number`) VALUES
(12364, 'Daniela', 'Quiroz', '1978-10-08', 'Neiva', 'Versalles', 3236354142),
(10034052, 'Jhon', 'Suarez', '1990-06-12', 'Medellin', 'Boston', 3164569686),
(43250541, 'Natalia', 'Tabor', '1978-01-19', 'Medellin', 'Buenos Aires', 3214568789),
(43896465, 'Camila', 'Medina', '1999-02-16', 'Medellin', 'Belen', 3236354142),
(43896745, 'Camila', 'Ochoa', '1993-06-14', 'Medellin', 'Bello', 3145236987),
(71452369, 'Oracio', 'Medina', '2000-06-14', 'Bogotá', 'Versalles', 3236354142),
(147483647, 'Jhon', 'Medina', '1988-06-17', 'Medellin', 'Bello', 3147894562),
(1004300516, 'John', 'Mendoza', '1993-03-21', 'Medellin', 'Bombona', 3224561452),
(1124156587, 'Oracio', 'Perez', '1978-05-10', 'Medellin', 'Buenos Aires', 3168527410);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medical_appointments`
--
ALTER TABLE `medical_appointments`
  ADD PRIMARY KEY (`Id_cita`),
  ADD KEY `document_patient` (`document_patient`);

--
-- Indices de la tabla `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`document`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medical_appointments`
--
ALTER TABLE `medical_appointments`
  MODIFY `Id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `medical_appointments`
--
ALTER TABLE `medical_appointments`
  ADD CONSTRAINT `medical_appointments_ibfk_1` FOREIGN KEY (`document_patient`) REFERENCES `patients` (`document`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
