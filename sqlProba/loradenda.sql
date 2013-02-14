-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-02-2013 a las 12:32:14
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
  `ordainduta` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=217 ;

--
-- Volcado de datos para la tabla `bezeroa`
--

INSERT INTO `bezeroa` (`id`, `izena`, `eguna`, `ordainduta`) VALUES
(191, 'bezero1', 30, 0),
(192, 'bezero2', 31, 0),
(193, 'bezero3', 31, 0),
(194, 'bezero4', 31, 0),
(200, 'bezero00', 31, 0),
(201, 'bezero01', 1, 0),
(206, 'bbezero', 1, 0),
(207, 'bat', 1, 0),
(208, 'asd', 1, 0),
(209, 'a ver', 1, 1),
(210, 'vavavava', 1, 0),
(211, 'mikel', 1, 1),
(212, 'azken proba', 1, 1),
(213, 'fddsdfds', 1, 0),
(214, 'a', 1, 1),
(215, 'dssds', 1, 0),
(216, 'mikel esteban2', 1, 1);

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
  `deskribapena` varchar(150) COLLATE utf8_bin NOT NULL,
  `prezioa` double DEFAULT '0',
  `id_bezero` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=516 ;

--
-- Volcado de datos para la tabla `zentrua`
--

INSERT INTO `zentrua` (`id`, `deskribapena`, `prezioa`, `id_bezero`) VALUES
(500, 'centro variado', 10, 191),
(501, '1/2 clavel rojo', 11, 191),
(502, '1doz larrosa gorri', 13, 192),
(503, 'ramito clavel', 5.09, 193),
(504, 'centro clavel blanco', 0, 194),
(505, 'centro variado', 0, 200),
(506, '1 rosa', 0, 200),
(507, 'centro margaritas', 0, 201),
(508, 'fdafafsafa', 0, 210),
(509, 'zentru1', 0, 211),
(510, 'zentru2', 0, 211),
(511, 'zentru3', 0, 211),
(512, 'fdsfdsfds', 0, 212),
(513, 'fdsfdsds', 0, 213),
(514, 'dsadsadsa', 0, 214),
(515, 'zentru espezifikatu gabea', 0, 216);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
