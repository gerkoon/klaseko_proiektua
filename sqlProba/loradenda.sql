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



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eguna`
--

CREATE TABLE IF NOT EXISTS `eguna` (
  `eguna` int(11) NOT NULL,
  PRIMARY KEY (`eguna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `eguna` beste batzuk badira hemen jarri behar dira
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


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
