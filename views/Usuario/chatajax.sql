-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2013 a las 01:39:40
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `chatajax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(10) NOT NULL,
  `contenido` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `usuario`, `contenido`) VALUES
(1, 'firefox', 'hola chrome'),
(2, 'chrome', 'hola firefox'),
(3, 'chrome', 'y opera?'),
(4, 'firefox', 'ahorita viene'),
(5, 'chrome', 'ok'),
(6, 'firefox', 'que hay de safari'),
(7, 'chrome', 'esta comiendo manzana'),
(8, 'firefox', 'cuando no!'),
(9, 'chrome', 'ja ja'),
(10, 'firefox', ':p'),
(11, 'IE8', 'lleguÃ© yo'),
(12, 'firefox', 'welcome');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
