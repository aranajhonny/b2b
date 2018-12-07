-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2018 at 12:30 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `b2b`
--

-- --------------------------------------------------------

--
-- Table structure for table `referido`
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
-- Table structure for table `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
	`id` int(11) NOT NULL,
	`Descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
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
	`referido_por` text NOT NULL,
	`tipo_user` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `dni`, `nombre`, `apellido`, `correo`, `usuario`, `clave`, `link_refer`, `valido_correo`, `status`, `referido_por`, `tipo_user`) VALUES
(1, '25065787', 'jhonny', 'arana', 'jhonnyjosearana@gmail.com', 'aranajhonny', 'verano.2014', NULL, 'si', 'activo', 'none', 1),
(7, '0000000000', 'admin', 'admin', 'admin@velautec.com', 'admin', 'password', NULL, 'si', 'activo', 'none', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `referido`
--
ALTER TABLE `referido`
	ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
	ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
	ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `referido`
--
ALTER TABLE `referido`
	MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
	MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
	MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
