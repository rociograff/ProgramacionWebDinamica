-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2018 at 12:17 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdautenticacion`
--

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `id_rol` bigint(20) NOT NULL,
  `rol_descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` bigint(20) NOT NULL,
  `usuario_nombre` varchar(50) NOT NULL,
  `usuario_pass` varchar(50) NOT NULL,
  `usuario_email` varchar(50) NOT NULL,
  `usuario_deshabilitado` BOOLEAN DEFAULT FALSE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuario` (`id_usuario`, `usuario_nombre`, `usuario_pass`, `usuario_email`, `usuario_deshabilitado`) VALUES 
(1, 'Juan.Carlos1', 'Espiritu123', 'hola.juancarlo@comoestas.com', 0),
(2, 'Pufu.fifufu1', 'Turing123', 'santiago.scantamburlo@est.fi.uncoma.edu.ar', 0),
(3, 'Jmarcos.g1', 'EthBtc123', 'juan.gonzalez@est.fi.uncoma.edu.ar', 0),
(4, 'Rocio.graff1', 'Chocotorta123', 'rocio.graff@est.fi.uncoma.edu.ar', 0),
(5, 'Cris.thian1', 'Autopartes123', 'cristhian.cantero@est.fi.uncoma.edu.ar', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usuario_rol`
--

CREATE TABLE `usuario_rol` (
  `id_usuario` bigint(20) NOT NULL,
  `id_rol` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`),
  ADD UNIQUE KEY `id_rol` (`id_rol`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `usuario_rol`
--
ALTER TABLE `usuario_rol`
  ADD PRIMARY KEY (`id_usuario`,`id_rol`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuariorol`
--
ALTER TABLE `usuario_rol`
  ADD CONSTRAINT `fkmovimiento_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuariorol_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
