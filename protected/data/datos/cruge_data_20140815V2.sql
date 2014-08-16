-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2014 a las 23:41:15
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `deudas`
--

--
-- Volcado de datos para la tabla `cruge_authitem`
--

INSERT INTO `cruge_authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('action_actividad_admin', 0, '', NULL, 'N;'),
('action_actividad_create', 0, '', NULL, 'N;'),
('action_cltCliente_admin', 0, '', NULL, 'N;'),
('action_cltDeuda_admin', 0, '', NULL, 'N;'),
('action_dashboard_index', 0, '', NULL, 'N;'),
('action_dashboard_vacio', 0, '', NULL, 'N;'),
('action_mail_admin', 0, '', NULL, 'N;'),
('action_mail_create', 0, '', NULL, 'N;'),
('action_txDescripcionPalntilla_admin', 0, '', NULL, 'N;'),
('action_txDescripcionPalntilla_create', 0, '', NULL, 'N;'),
('action_txDescripcionPalntilla_index', 0, '', NULL, 'N;'),
('action_txTrasaccion_admin', 0, '', NULL, 'N;'),
('action_txTrasaccion_create', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemcreate', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemdelete', 0, '', NULL, 'N;'),
('action_ui_rbaclistops', 0, '', NULL, 'N;'),
('action_ui_rbaclistroles', 0, '', NULL, 'N;'),
('action_ui_usermanagementadmin', 0, '', NULL, 'N;'),
('admin', 0, '', NULL, 'N;'),
('Cruge.ui.*', 0, '', NULL, 'N;');

--
-- Volcado de datos para la tabla `cruge_session`
--

INSERT INTO `cruge_session` (`idsession`, `iduser`, `created`, `expire`, `status`, `ipaddress`, `usagecount`, `lastusage`, `logoutdate`, `ipaddressout`) VALUES
(1, 1, 1408050657, 1408052457, 0, '::1', 1, 1408050657, NULL, NULL),
(2, 1, 1408071854, 1408073654, 0, '::1', 1, 1408071854, NULL, NULL),
(3, 1, 1408073768, 1408075568, 0, '::1', 1, 1408073768, NULL, NULL),
(4, 1, 1408075697, 1408077497, 1, '::1', 1, 1408075697, NULL, NULL),
(5, 1, 1408129391, 1408131191, 0, '::1', 1, 1408129391, NULL, NULL),
(6, 1, 1408134457, 1408136257, 0, '::1', 1, 1408134457, NULL, NULL),
(7, 1, 1408136505, 1408138305, 0, '::1', 1, 1408136505, NULL, NULL),
(8, 1, 1408138361, 1408140161, 1, '::1', 1, 1408138361, NULL, NULL);

--
-- Volcado de datos para la tabla `cruge_system`
--

INSERT INTO `cruge_system` (`idsystem`, `name`, `largename`, `sessionmaxdurationmins`, `sessionmaxsameipconnections`, `sessionreusesessions`, `sessionmaxsessionsperday`, `sessionmaxsessionsperuser`, `systemnonewsessions`, `systemdown`, `registerusingcaptcha`, `registerusingterms`, `terms`, `registerusingactivation`, `defaultroleforregistration`, `registerusingtermslabel`, `registrationonlogin`) VALUES
(1, 'default', NULL, 30, 10, 1, -1, -1, 0, 0, 0, 0, '', 0, '', '', 1);

--
-- Volcado de datos para la tabla `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
(1, NULL, NULL, 1408138361, 'admin', 'admin@tucorreo.com', 'admin', NULL, 1, 0, 0),
(2, NULL, NULL, NULL, 'invitado', 'invitado', 'nopassword', NULL, 1, 0, 0);
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
