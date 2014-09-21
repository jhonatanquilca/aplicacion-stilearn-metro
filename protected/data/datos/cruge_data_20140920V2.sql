-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-09-2014 a las 01:33:07
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.16

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

-- USE `deudas`;

--
-- Truncar tablas antes de insertar `cruge_authassignment`
--

TRUNCATE TABLE `cruge_authassignment`;
--
-- Volcado de datos para la tabla `cruge_authassignment`
--

INSERT INTO `cruge_authassignment` (`userid`, `bizrule`, `data`, `itemname`) VALUES
(3, NULL, 'N;', 'OPERADOR');

--
-- Truncar tablas antes de insertar `cruge_authitem`
--

TRUNCATE TABLE `cruge_authitem`;
--
-- Volcado de datos para la tabla `cruge_authitem`
--

INSERT INTO `cruge_authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('action_actividad_actividadesCliente', 0, '', NULL, 'N;'),
('action_actividad_admin', 0, '', NULL, 'N;'),
('action_actividad_adminDirarias', 0, '', NULL, 'N;'),
('action_actividad_adminMensual', 0, '', NULL, 'N;'),
('action_actividad_create', 0, '', NULL, 'N;'),
('action_cltCliente_admin', 0, '', NULL, 'N;'),
('action_cltCliente_create', 0, '', NULL, 'N;'),
('action_cltCliente_delete', 0, '', NULL, 'N;'),
('action_cltCliente_restore', 0, '', NULL, 'N;'),
('action_cltCliente_update', 0, '', NULL, 'N;'),
('action_cltCliente_view', 0, '', NULL, 'N;'),
('action_cltDeuda_admin', 0, '', NULL, 'N;'),
('action_cltDeuda_ajaxGetMonto', 0, '', NULL, 'N;'),
('action_cltDeuda_create', 0, '', NULL, 'N;'),
('action_dashboard_index', 0, '', NULL, 'N;'),
('action_dashboard_vacio', 0, '', NULL, 'N;'),
('action_mailPlantilla_admin', 0, '', NULL, 'N;'),
('action_mailPlantilla_create', 0, '', NULL, 'N;'),
('action_mailPlantilla_delete', 0, '', NULL, 'N;'),
('action_mailPlantilla_update', 0, '', NULL, 'N;'),
('action_mailPlantilla_view', 0, '', NULL, 'N;'),
('action_mail_admin', 0, '', NULL, 'N;'),
('action_mail_create', 0, '', NULL, 'N;'),
('action_mail_delete', 0, '', NULL, 'N;'),
('action_mail_update', 0, '', NULL, 'N;'),
('action_mail_view', 0, '', NULL, 'N;'),
('action_txDescripcionPalntilla_admin', 0, '', NULL, 'N;'),
('action_txDescripcionPalntilla_create', 0, '', NULL, 'N;'),
('action_txDescripcionPalntilla_delete', 0, '', NULL, 'N;'),
('action_txDescripcionPalntilla_index', 0, '', NULL, 'N;'),
('action_txDescripcionPalntilla_update', 0, '', NULL, 'N;'),
('action_txDescripcionPalntilla_view', 0, '', NULL, 'N;'),
('action_txTrasaccion_admin', 0, '', NULL, 'N;'),
('action_txTrasaccion_create', 0, '', NULL, 'N;'),
('action_txTrasaccion_update', 0, '', NULL, 'N;'),
('action_ui_editprofile', 0, '', NULL, 'N;'),
('action_ui_fieldsadmincreate', 0, '', NULL, 'N;'),
('action_ui_fieldsadminlist', 0, '', NULL, 'N;'),
('action_ui_rbacajaxassignment', 0, '', NULL, 'N;'),
('action_ui_rbacajaxsetchilditem', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemchilditems', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemcreate', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemdelete', 0, '', NULL, 'N;'),
('action_ui_rbaclistops', 0, '', NULL, 'N;'),
('action_ui_rbaclistroles', 0, '', NULL, 'N;'),
('action_ui_rbaclisttasks', 0, '', NULL, 'N;'),
('action_ui_rbacusersassignments', 0, '', NULL, 'N;'),
('action_ui_systemupdate', 0, '', NULL, 'N;'),
('action_ui_usermanagementadmin', 0, '', NULL, 'N;'),
('action_ui_usermanagementcreate', 0, '', NULL, 'N;'),
('action_ui_usermanagementupdate', 0, '', NULL, 'N;'),
('admin', 0, '', NULL, 'N;'),
('Cruge.ui.*', 0, '', NULL, 'N;'),
('edit-advanced-profile-features', 0, 'C:\\wamp\\www\\aplicacion-stilearn-metro\\protected\\modules\\cruge\\views\\ui\\usermanagementupdate.php linea 158', NULL, 'N;'),
('OPERADOR', 2, '', '', 'N;');

--
-- Truncar tablas antes de insertar `cruge_authitemchild`
--

TRUNCATE TABLE `cruge_authitemchild`;
--
-- Volcado de datos para la tabla `cruge_authitemchild`
--

INSERT INTO `cruge_authitemchild` (`parent`, `child`) VALUES
('OPERADOR', 'action_actividad_actividadesCliente'),
('OPERADOR', 'action_actividad_admin'),
('OPERADOR', 'action_actividad_adminDirarias'),
('OPERADOR', 'action_actividad_adminMensual'),
('OPERADOR', 'action_cltCliente_admin'),
('OPERADOR', 'action_cltCliente_create'),
('OPERADOR', 'action_cltCliente_delete'),
('OPERADOR', 'action_cltCliente_restore'),
('OPERADOR', 'action_cltCliente_update'),
('OPERADOR', 'action_cltCliente_view'),
('OPERADOR', 'action_cltDeuda_ajaxGetMonto'),
('OPERADOR', 'action_cltDeuda_create'),
('OPERADOR', 'action_dashboard_index'),
('OPERADOR', 'action_txTrasaccion_admin'),
('OPERADOR', 'action_txTrasaccion_create'),
('OPERADOR', 'action_txTrasaccion_update'),
('OPERADOR', 'action_ui_editprofile');

--
-- Truncar tablas antes de insertar `cruge_field`
--

TRUNCATE TABLE `cruge_field`;
--
-- Truncar tablas antes de insertar `cruge_fieldvalue`
--

TRUNCATE TABLE `cruge_fieldvalue`;
--
-- Truncar tablas antes de insertar `cruge_session`
--

TRUNCATE TABLE `cruge_session`;
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
(8, 1, 1408138361, 1408140161, 1, '::1', 1, 1408138361, NULL, NULL),
(9, 1, 1411253297, 1411255097, 0, '127.0.0.1', 1, 1411253297, NULL, NULL),
(10, 1, 1411255320, 1411588620, 0, '127.0.0.1', 2, 1411260775, 1411260780, '127.0.0.1'),
(11, 1, 1411260814, 1411594114, 1, '127.0.0.1', 1, 1411260814, NULL, NULL),
(12, 3, 1411260888, 1411594188, 1, '127.0.0.1', 1, 1411260888, NULL, NULL);

--
-- Truncar tablas antes de insertar `cruge_system`
--

TRUNCATE TABLE `cruge_system`;
--
-- Volcado de datos para la tabla `cruge_system`
--

INSERT INTO `cruge_system` (`idsystem`, `name`, `largename`, `sessionmaxdurationmins`, `sessionmaxsameipconnections`, `sessionreusesessions`, `sessionmaxsessionsperday`, `sessionmaxsessionsperuser`, `systemnonewsessions`, `systemdown`, `registerusingcaptcha`, `registerusingterms`, `terms`, `registerusingactivation`, `defaultroleforregistration`, `registerusingtermslabel`, `registrationonlogin`) VALUES
(1, 'default', NULL, 5555, 10, 1, -1, -1, 0, 0, 0, 0, '', 0, '', '', 1);

--
-- Truncar tablas antes de insertar `cruge_user`
--

TRUNCATE TABLE `cruge_user`;
--
-- Volcado de datos para la tabla `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
(1, NULL, NULL, 1411260814, 'admin', 'admin@tucorreo.com', 'admin', NULL, 1, 0, 0),
(2, NULL, NULL, NULL, 'invitado', 'invitado', 'nopassword', NULL, 1, 0, 0),
(3, 1411260836, NULL, 1411260888, 'Jhonatan', 'jhosy25000@hotmail.com', '1004476568', 'cd49a14864f0f0d310b228664f671980', 1, 0, 0);
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
