-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-01-2013 a las 14:35:38
-- Versión del servidor: 5.5.25a
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `loradenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bezeroa`
--

CREATE TABLE IF NOT EXISTS `bezeroa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `izena` varchar(50) COLLATE utf8_bin NOT NULL,
  `eguna` int(11) NOT NULL,
  `ordainduta` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=202 ;

--
-- Volcado de datos para la tabla `bezeroa`
--

INSERT INTO `bezeroa` (`id`, `izena`, `eguna`, `ordainduta`) VALUES
(191, 'bezero1', 1, NULL),
(192, 'bezero2', 1, NULL),
(193, 'bezero3', 2, NULL),
(194, 'bezero4', 2, NULL),
(200, 'bezero00', 3, NULL),
(201, 'bezero01', 3, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eguna`
--

CREATE TABLE IF NOT EXISTS `eguna` (
  `id` int(11) NOT NULL,
  `eguna` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `eguna`
--

INSERT INTO `eguna` (`id`, `eguna`) VALUES
(1, 30),
(2, 31),
(3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zentrua`
--

CREATE TABLE IF NOT EXISTS `zentrua` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `describapena` varchar(150) COLLATE utf8_bin NOT NULL,
  `prezioa` double DEFAULT NULL,
  `id_bezero` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=508 ;

--
-- Volcado de datos para la tabla `zentrua`
--

INSERT INTO `zentrua` (`id`, `describapena`, `prezioa`, `id_bezero`) VALUES
(500, 'centro variado', NULL, 191),
(501, '1/2 clavel rojo', NULL, 191),
(502, '1doz larrosa gorri', NULL, 192),
(503, 'ramito clavel', NULL, 193),
(504, 'centro clavel blanco', NULL, 194),
(505, 'centro variado', NULL, 200),
(506, '1 rosa', NULL, 200),
(507, 'centro margaritas', NULL, 201);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
