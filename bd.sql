-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-12-2018 a las 18:25:33
-- Versión del servidor: 5.5.42
-- Versión de PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `b2b`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referido`
--

CREATE TABLE `referido` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `DNI` int(11) NOT NULL,
  `Fecha_nacimiento` date DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `Estado_civil` varchar(50) DEFAULT NULL,
  `Formacion` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Distrito` varchar(50) DEFAULT NULL,
  `Provincia` varchar(50) DEFAULT NULL,
  `Region` varchar(50) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Tel-fijo` int(11) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Codigo` int(11) DEFAULT NULL,
  `URL` varchar(50) DEFAULT NULL,
  `Nivel_usuario` int(11) DEFAULT NULL,
  `borrado_re` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `Descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `link_refer` varchar(100) DEFAULT NULL,
  `valido_correo` enum('si','no') NOT NULL DEFAULT 'no',
  `status` enum('inactivo','activo') NOT NULL DEFAULT 'inactivo',
  `referido_por` varchar(50) NOT NULL,
  `tipo_user` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `dni`, `nombre`, `apellido`, `correo`, `usuario`, `clave`, `link_refer`, `valido_correo`, `status`, `referido_por`, `tipo_user`) VALUES
(1, '0000000000', 'admin', 'admin', 'admin@velautec.com', 'admin', 'admin', NULL, 'si', 'activo', '', 0),
(2, '25065787', 'jhonny', 'arana', 'jhonnyjosearana@gmail.com', 'aranajhonny', 'aranajhonny', NULL, 'si', 'activo', 'admin', 1),
(3, '25065788', 'jose', 'nieves', 'rauch@gmail.com', 'jose', 'jose', NULL, 'no', 'activo', 'aranajhonny', 1),
(4, '25065788', 'jose', 'nieves', 'rauch@gmail.com', 'edith', 'jose', NULL, 'no', 'activo', 'aranajhonny', 1),
(5, '25065788', 'jose', 'nieves', 'rauch@gmail.com', 'carlos', 'jose', NULL, 'no', 'activo', 'edith', 1),
(6, '25065788', 'jose', 'nieves', 'rauch@gmail.com', 'abel', 'jose', NULL, 'no', 'activo', 'edith', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `referido`
--
ALTER TABLE `referido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `referido`
--
ALTER TABLE `referido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;