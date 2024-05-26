-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2024 a las 06:06:49
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_final_web2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `Nombre` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `Nombre`) VALUES
(1, 'Quimio'),
(2, 'fisioterapi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `NumeroIdentificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`Fecha`, `Hora`, `NumeroIdentificacion`) VALUES
('2022-11-10', '23:27:00', 123123),
('2022-11-09', '23:01:00', 897353),
('1994-01-05', '16:01:00', 646436);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citaspro`
--

CREATE TABLE `citaspro` (
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `NumeroSeciones` int(11) NOT NULL,
  `paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `citaspro`
--

INSERT INTO `citaspro` (`fecha`, `hora`, `NumeroSeciones`, `paciente`) VALUES
('2022-11-09', '00:01:00', 5, 646436);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elementos`
--

CREATE TABLE `elementos` (
  `Codelemento` int(11) NOT NULL,
  `Nombre` varchar(11) NOT NULL,
  `costo` int(11) NOT NULL,
  `idServicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `elementos`
--

INSERT INTO `elementos` (`Codelemento`, `Nombre`, `costo`, `idServicio`) VALUES
(1, 'wdwdq', 4232, 1),
(2, 'dwdwd', 232423, 1),
(3, 'ewfefw', 324234, 2),
(4, 'eafef', 34234, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `Estudios` varchar(50) NOT NULL,
  `Especialidades` varchar(50) NOT NULL,
  `Identificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`Estudios`, `Especialidades`, `Identificacion`) VALUES
('dgwdgw', 'sdbds', 4563124),
('bsdbsb', 'dbsbs', 4563124),
('bsdbsdb', 'dssbsb', 4563124),
('bsbsb', 'dbsdb', 4563124),
('wqdqwd', 'gbbny', 353456332),
('kukuk', 'xcxcxc', 353456332);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infoservicios`
--

CREATE TABLE `infoservicios` (
  `idServicio` int(11) NOT NULL,
  `costo` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `infoservicios`
--

INSERT INTO `infoservicios` (`idServicio`, `costo`, `precio`) VALUES
(1, 236655, 0),
(2, 358468, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `TipoIdentificacion` varchar(30) NOT NULL,
  `NumeroIdentificacion` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `CorreoElectronico` varchar(50) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `CIudadResidencia` varchar(30) NOT NULL,
  `DireccionResidencia` varchar(30) NOT NULL,
  `Sexo` varchar(30) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `NombreAcudiente` varchar(30) NOT NULL,
  `ApellidosAcudiente` varchar(30) NOT NULL,
  `CorreoAcudiente` varchar(30) NOT NULL,
  `TelefonoAcudiente` int(11) NOT NULL,
  `EdadAcudiente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`TipoIdentificacion`, `NumeroIdentificacion`, `Nombre`, `Apellidos`, `CorreoElectronico`, `Telefono`, `CIudadResidencia`, `DireccionResidencia`, `Sexo`, `FechaNacimiento`, `NombreAcudiente`, `ApellidosAcudiente`, `CorreoAcudiente`, `TelefonoAcudiente`, `EdadAcudiente`) VALUES
('CC', 123123, 'Jorge ivan', 'Fernandez Peñates', 'jorge@gmail.com', 2147483647, 'Sampues', 'cr 24 b45', 'M', '0000-00-00', 'Sofia', 'peñates', 'jorge@gmail.com', 32353555, 45),
('CC', 646436, 'Ronaldo andres', 'Oñate Daza', 'Ronaldo@gmail.com', 5435635, 'Sincelejo', 'cr 24 b25', 'M', '2022-11-10', 'Andres pieter', 'Oñate urzola', 'Ronaldo@gmail.com', 5325325, 54),
('CC', 897353, 'ivan david', 'Fernandez peñates', 'ivan@gmail.com', 2147483647, 'sampues-sucre', 'cr 24 b45', 'M', '2022-10-03', 'sofia', 'fernandez', 'ivan@gmail.com', 342342, 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pinfosesiones`
--

CREATE TABLE `pinfosesiones` (
  `Paciente` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `presionArterial` int(11) NOT NULL,
  `Estatura` int(11) NOT NULL,
  `Diagnostico` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `pinfosesiones`
--

INSERT INTO `pinfosesiones` (`Paciente`, `peso`, `presionArterial`, `Estatura`, `Diagnostico`) VALUES
(897353, 534, 3434, 644, 'efvaecgrdrvr'),
(646436, 34, 3434, 4343, 'fewubfuebybey eufhuhedudhewu uf he u');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesionales`
--

CREATE TABLE `profesionales` (
  `NumeroIdentificacion` int(11) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Sexo` varchar(30) NOT NULL,
  `CorreoElectronico` varchar(30) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `TipoIdentificaion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `profesionales`
--

INSERT INTO `profesionales` (`NumeroIdentificacion`, `Nombres`, `Apellidos`, `FechaNacimiento`, `Sexo`, `CorreoElectronico`, `Telefono`, `TipoIdentificaion`) VALUES
(4563124, 'ivan david', 'fernandez peñates', '2022-11-28', 'M', 'icuau@gamil.com', 532423523, 0),
(353456332, 'gsegwes', 'wefwefwef efwefw', '2022-11-18', 'M', 'wdqwdqdwq', 41234234, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`codigo`, `nombre`) VALUES
(1, 'administrador'),
(2, 'gerente'),
(3, 'secretaria'),
(4, 'profesional'),
(5, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `idServicio` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `IdCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`idServicio`, `nombre`, `IdCategoria`) VALUES
(1, 'wdwdw', 2),
(2, 'adefef', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serviciosofertados`
--

CREATE TABLE `serviciosofertados` (
  `idServicio` int(11) NOT NULL,
  `NombreServicio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `serviciosofertados`
--

INSERT INTO `serviciosofertados` (`idServicio`, `NombreServicio`) VALUES
(1, 'wdwdw');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

CREATE TABLE `tratamientos` (
  `paciente` int(11) NOT NULL,
  `idServicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tratamientos`
--

INSERT INTO `tratamientos` (`paciente`, `idServicio`) VALUES
(897353, 1),
(646436, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `NombreUsuario` varchar(50) NOT NULL,
  `Contraseña` varchar(50) NOT NULL,
  `CodigoRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`NombreUsuario`, `Contraseña`, `CodigoRol`) VALUES
('admin', '123456', 1),
('gerente', 'gerente', 2),
('profe', 'profe', 3),
('santy', 'qw12', 5),
('secre', 'secre', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD KEY `NumeroIdentificacion` (`NumeroIdentificacion`);

--
-- Indices de la tabla `citaspro`
--
ALTER TABLE `citaspro`
  ADD KEY `IdentificacionPaciente` (`paciente`);

--
-- Indices de la tabla `elementos`
--
ALTER TABLE `elementos`
  ADD PRIMARY KEY (`Codelemento`),
  ADD KEY `idServicio` (`idServicio`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD KEY `IdProfesional` (`Identificacion`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`NumeroIdentificacion`);

--
-- Indices de la tabla `pinfosesiones`
--
ALTER TABLE `pinfosesiones`
  ADD KEY `Paciente` (`Paciente`);

--
-- Indices de la tabla `profesionales`
--
ALTER TABLE `profesionales`
  ADD PRIMARY KEY (`NumeroIdentificacion`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idServicio`),
  ADD KEY `IdCategoria` (`IdCategoria`);

--
-- Indices de la tabla `serviciosofertados`
--
ALTER TABLE `serviciosofertados`
  ADD KEY `idServicio` (`idServicio`);

--
-- Indices de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD KEY `idServicio` (`idServicio`),
  ADD KEY `paciente` (`paciente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`NombreUsuario`),
  ADD KEY `Rol` (`CodigoRol`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `identificacionCliente` FOREIGN KEY (`NumeroIdentificacion`) REFERENCES `pacientes` (`NumeroIdentificacion`);

--
-- Filtros para la tabla `citaspro`
--
ALTER TABLE `citaspro`
  ADD CONSTRAINT `paciente` FOREIGN KEY (`paciente`) REFERENCES `pacientes` (`NumeroIdentificacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `elementos`
--
ALTER TABLE `elementos`
  ADD CONSTRAINT `servicio` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`idServicio`);

--
-- Filtros para la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD CONSTRAINT `especialidades_ibfk_1` FOREIGN KEY (`Identificacion`) REFERENCES `profesionales` (`NumeroIdentificacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pinfosesiones`
--
ALTER TABLE `pinfosesiones`
  ADD CONSTRAINT `NumeroIdentificacion` FOREIGN KEY (`Paciente`) REFERENCES `pacientes` (`NumeroIdentificacion`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `categoria` FOREIGN KEY (`IdCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `serviciosofertados`
--
ALTER TABLE `serviciosofertados`
  ADD CONSTRAINT `idServicio` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`idServicio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD CONSTRAINT `NumeroIdentiicacion` FOREIGN KEY (`paciente`) REFERENCES `pacientes` (`NumeroIdentificacion`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `rol` FOREIGN KEY (`CodigoRol`) REFERENCES `roles` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
