-- phpMyAdmin SQL Dump
-- version 2.8.1
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 17-08-2012 a las 00:43:05
-- Versión del servidor: 5.0.21
-- Versión de PHP: 5.1.4
-- 
-- Base de datos: `infoautos`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `auto`
-- 

CREATE TABLE `auto` (
  `patente` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `marca` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `modelo` int(11) NOT NULL,
  `dni_duenio` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`patente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `auto`
-- 

INSERT INTO `auto` (`patente`, `marca`, `modelo`, `dni_duenio`) VALUES 
('ADC 152', 'Fiat Uno', 98, '28326986'),
('POL 968', 'Renault 12', 77, '28326986'),
('KJU 952', 'Ford Fiesta', 2006, '25963874'),
('UYH 985', 'Fiat Palio', 95, '30875962'),
('LKI 865', 'Fiat Siena', 90, '28326986'),
('SDC 965', 'Peugeot 205', 88, '30875962');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `persona`
-- 

CREATE TABLE `persona` (
  `nro_dni` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `telefono` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  `domicilio` varchar(200) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`nro_dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `persona`
-- 

INSERT INTO `persona` (`nro_dni`, `apellido`, `nombre`, `fecha_nac`, `telefono`, `domicilio`) VALUES 
('28326986', 'Moya', 'Manuel', '1981-12-03', '299-9632587', 'Linares 44 piso 2 dpto 5'),
('25963874', 'Farias', 'Marta', '1975-06-21', '299-1559354', 'Roca 568'),
('30875962', 'Lopez', 'Eduardo', '1983-10-03', '299-6587741', 'Santa Fe 98'),
('22985265', 'Ramirez', 'Claudia', '1971-05-16', '299-9854155', 'Sarmiento 55');


ALTER TABLE `auto` ADD KEY `id_tipo_vehiculo` (`dni_duenio`);

ALTER TABLE `auto`
ADD CONSTRAINT `auto_ibfk_1` FOREIGN KEY (`dni_duenio`) REFERENCES `persona` (`nro_dni`);

