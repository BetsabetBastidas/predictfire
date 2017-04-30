-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-04-2017 a las 20:31:19
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `space_app_challenger`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regaistro_login`
--

CREATE TABLE IF NOT EXISTS `regaistro_login` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nickuser` varchar(50) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `regaistro_login`
--

INSERT INTO `regaistro_login` (`id`, `nickuser`, `fecha_hora`) VALUES
(1, 'kevin.muniz', '2017-04-29 19:12:55'),
(2, 'kevin.muniz', '2017-04-29 19:19:07'),
(3, 'kevin.muniz', '2017-04-29 19:05:21'),
(4, 'kevin.muniz', '0000-00-00 00:00:00'),
(5, 'kevin.muniz', '2017-04-29 19:23:00'),
(6, 'kevin.muniz', '2017-04-29 20:01:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporal_login`
--

CREATE TABLE IF NOT EXISTS `temporal_login` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nick` varchar(50) DEFAULT NULL,
  `fullnombre` varchar(380) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `temporal_login`
--

INSERT INTO `temporal_login` (`id`, `nick`, `fullnombre`) VALUES
(1, 'kevin.muniz', 'Kevin Leandro Muñiz Ponce');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(380) NOT NULL,
  `addres` text,
  `email` varchar(350) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `full_name`, `addres`, `email`, `username`, `password`) VALUES
(1, 'Kevin Leandro Muñiz Ponce', 'Ciudadela Marbella - Manta', 'kevin.muniz.m03@gmail.com', 'kevin.muniz', 'kengy8leo12'),
(2, 'Keter Adonis Guerrero Gaibor', 'av asxaarui', 'keter@hotmail.com', 'keter', 'niqi11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
