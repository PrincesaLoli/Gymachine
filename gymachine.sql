-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2023 a las 06:34:55
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gymachine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `idUsuario` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `idUsuario`) VALUES
(1, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportista`
--

CREATE TABLE `deportista` (
  `id` int(11) NOT NULL,
  `idUsuario` int(50) NOT NULL,
  `peso` varchar(50) DEFAULT NULL,
  `genero` varchar(30) NOT NULL,
  `telEmergencia` varchar(150) DEFAULT NULL,
  `objAlcanzar` varchar(500) NOT NULL,
  `rh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `deportista`
--

INSERT INTO `deportista` (`id`, `idUsuario`, `peso`, `genero`, `telEmergencia`, `objAlcanzar`, `rh`) VALUES
(1, 6, '69 Kg', 'Femenino', '301375643', 'Quiero verme tonificada y bajar grasa corporal', 'O +');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `id` int(11) NOT NULL,
  `idUsuario` int(50) NOT NULL,
  `telEmergencia` varchar(150) DEFAULT NULL,
  `rh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`id`, `idUsuario`, `telEmergencia`, `rh`) VALUES
(1, 8, '12345432', 'A -');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Instructor'),
(4, 'Deportista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `idUsuario` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `superadmin`
--

INSERT INTO `superadmin` (`id`, `idUsuario`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `idRol` int(100) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `tipoDocumento` varchar(50) NOT NULL,
  `numDocumento` varchar(150) DEFAULT NULL,
  `telefono` varchar(150) DEFAULT NULL,
  `correo` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `idRol`, `nombres`, `apellidos`, `tipoDocumento`, `numDocumento`, `telefono`, `correo`, `estado`, `clave`) VALUES
(5, 1, 'Santiago', 'Parra Guerrero', 'CC', '1018502193', '301338777', 'santiagoparraguerrero@gmail.com', 'Activo', '1'),
(6, 4, 'Kelly Johana', 'Gutierrez Rendon', 'CC', '1016112286', '3013213468', 'johanitakellytos47@gmail.com', 'Activo', '11'),
(7, 2, 'Chogath', 'Parra Gutierrez', 'TI', '123456789', '1111111111', 'chogathparra@gmail.com', 'Activo', '1'),
(8, 3, 'Kirara', 'Rendon Reina', 'TI', '29292929', '22222222', 'kirara9876@gmail.com', 'Activo', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `deportista`
--
ALTER TABLE `deportista`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idRol` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `deportista`
--
ALTER TABLE `deportista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `deportista`
--
ALTER TABLE `deportista`
  ADD CONSTRAINT `deportista_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `superadmin`
--
ALTER TABLE `superadmin`
  ADD CONSTRAINT `superadmin_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
