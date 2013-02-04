-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-02-2013 a las 12:03:19
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=237 ;

--
-- Volcado de datos para la tabla `bezeroa`
--

INSERT INTO `bezeroa` (`id`, `izena`, `eguna`) VALUES
(191, 'bezero1', 30),
(192, 'bezero2', 31),
(193, 'bezero3', 31),
(194, 'bezero4', 31),
(200, 'bezero00', 31),
(201, 'bezero01', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eguna`
--

CREATE TABLE IF NOT EXISTS `eguna` (
  `eguna` int(11) NOT NULL,
  PRIMARY KEY (`eguna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `eguna`
--

INSERT INTO `eguna` (`eguna`) VALUES
(1),
(30),
(31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zentrua`
--

CREATE TABLE IF NOT EXISTS `zentrua` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `describapena` varchar(150) COLLATE utf8_bin NOT NULL,
  `prezioa` double DEFAULT '0',
  `id_bezero` int(11) NOT NULL,
  `ordainduta` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=508 ;

--
-- Volcado de datos para la tabla `zentrua`
--

INSERT INTO `zentrua` (`id`, `describapena`, `prezioa`, `id_bezero`, `ordainduta`) VALUES
(500, 'centro variado', 0, 191, NULL),
(501, '1/2 clavel rojo', 0, 191, NULL),
(502, '1doz larrosa gorri', 0, 192, NULL),
(503, 'ramito clavel', 0, 193, NULL),
(504, 'centro clavel blanco', 0, 194, NULL),
(505, 'centro variado', 0, 200, NULL),
(506, '1 rosa', 0, 200, NULL),
(507, 'centro margaritas', 0, 201, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
