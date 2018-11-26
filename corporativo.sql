-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2018 a las 08:56:24
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `corporativo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `rfc` varchar(100) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `email`, `password`, `direccion`, `tel`, `rfc`, `empresa`, `imagen`) VALUES
(3, 'inigo Navarrete', 'Navarrete', 'navarretigo@yahoo.com.mx', '123456789', 'Jorge Bravo', '3334750604', '222222', 'CETI ', 'MI CURRICULUM.PNG'),
(4, 'inigo Navarrete', '', 'navarressstigo@yahoo.com.mx', '9f6e6800cfae7749eb6c486619254b9c', 'Jorge Bravo', '3334750604', 'sss', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `apellido`, `email`, `tel`, `mensaje`) VALUES
(1, 'inigo Navarrete', 'Navarrete', 'navarretigo@yahoo.com.mx', '3334750604', 'excelente\r\n'),
(2, 'inigo Navarrete', 'Navarrete', 'navarretigo@yahoo.com.mx', '3334750604', 'excelente\r\n'),
(3, 'inigo Navarrete', 'Navarrete', 'navarretigo@yahoo.com.mx', '3334750604', 'excelente\r\n'),
(4, '', '', '', '', ''),
(5, 'inigo Navarrete', 'Navarrete', 'navarretigo@yahoo.com.mx', '3334750604', 'sffd'),
(6, 'inigo Navarrete', 'Navarrete', 'navarretigo@yahoo.com.mx', '3334750604', 'excelente'),
(7, 'sdfsd', 'sfgsd', 'navarretigo@yahoo.com.mx', 'sdf', 'sdf'),
(8, 'inigo Navarrete', 'Navarrete', 'navarretigo@yahoo.com.mx', '3334750604', 'exce'),
(9, 'inigo Navarrete', 'Navarrete', 'navarretigo@yahoo.com.mx', '3334750604', 'excelente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `nomina` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `puesto` varchar(100) NOT NULL,
  `rfc` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`nomina`, `nombre`, `apellido`, `email`, `password`, `puesto`, `rfc`, `imagen`) VALUES
(1, 'inigo Navarrete', 'Navarrete', 'navarretigo@yahoo.com.mx', '12345', 'dgf', 'dhgdg', ''),
(2, 'Andrea', 'Abundis', 'lizbethabundis@hotmail.com', '12345', 'jefa', '5645645645', ''),
(3, 'inigo Navarrete', 'Navarrete', 'navarretigo@yahoo.com.mx', 'sdsfsd', 'svsvsv', 'gfsfvv', 'MI CURRICULUM.PNG'),
(4, 'inigo Navarrete', 'Navarrete', 'navarretigo@yahdoo.com.mx', 'd713e38281718ed2d493fdcfa44dac7e', 'sdsd', 'ssd', ''),
(5, 'inigo Navarrete', 'Navarrete', 'navarretigo@yashdoo.com.mx', '9f6e6800cfae7749eb6c486619254b9c', 'sdsd', 'ssd', ''),
(6, 'Andrea', 'Abundis', 'lizbethabundis@hotmail.coms', '123', 'a', 'a', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `pedido` varchar(100) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_cliente`, `pedido`, `descripcion`, `cantidad`, `estatus`) VALUES
(1, 0, 'fgbdg', 'Descripciondbdfdfb', 444, 'terminados'),
(2, 0, 'nada', 'un pan', 8, 'acabado'),
(3, 1, 'eeee', 'Descripcioneeeee', 4444444, 'fhffffffff'),
(4, 3, 'rhb', 'Descripcionfgnfgnf', 7777, ''),
(5, 3, 'rhb', 'Descripcionfgnfgnf', 7777, ''),
(6, 3, 'fffffffff', 'fffffffff', 555555, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`nomina`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `nomina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
