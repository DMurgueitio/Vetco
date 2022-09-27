-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2022 a las 22:39:26
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vetco`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizatblcalificacionservicio` (IN `p_fecha` DATE, IN `p_diregistrocalificado` VARCHAR(15), IN `p_diregistrocalificador` VARCHAR(15), IN `p_calificacion` INT(1), IN `observaciones` VARCHAR(2000))  BEGIN
  UPDATE tblcalificacionservicio SET fecha=p_fecha, diregistrocalificado=p_diregistrocalificado, diregistrocalificador=p_diregistrocalificador,calificacion=p_calificacion,observaciones=p_observaciones
  WHERE idcalificacion=p_idcalificacion;
  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizatblciudad` (IN `p_codigo` VARCHAR(5), IN `p_nombre` VARCHAR(30), IN `p_departamento` VARCHAR(2))  BEGIN
  UPDATE tblciudad SET nombre=p_nombre, departamento=p_departamento
  WHERE codigo=p_codigo;
  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizatbldepartamento` (IN `p_codigo` VARCHAR(2), IN `p_nombre` VARCHAR(30))  BEGIN
  UPDATE tbldepartamento SET nombre=p_nombre
  WHERE codigo=p_codigo;
  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizatbldiagnostico` (IN `p_iddiagnostico` INT(10), IN `p_diagnostico` VARCHAR(2000))  BEGIN
  UPDATE tbldiagnostico SET diagnostico=p_diagnostico
  WHERE iddiagnostico=p_iddiagnostico;
  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizatblespecie` (IN `p_idespecie` INT(8), IN `p_nombreespecie` VARCHAR(100))  BEGIN
  UPDATE tblespecie SET nombreespecie=p_nombreespecie
  WHERE idespecie=p_idespecie;
  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizatblformulacion` (IN `p_idhistoriaclinica` VARCHAR(8))  BEGIN
  UPDATE tblformulacion SET idhistoriaclinica=p_idhistoriaclinica
  WHERE idformula=p_idformula;
  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizatblformulacionmedicamentos` (IN `p_idformula` INT(4), `p_idmedicamento` INT(5), `p_cantidad` INT(3), `p_dosis` VARCHAR(80))  BEGIN
  UPDATE tblformulacionmedicamentos SET idformula=p_idformula, idmedicamento=p_idmedicamento, cantidad=p_cantidad, dosis=p_dosis
  WHERE id=p_id;
  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizatblforosocial` (IN `p_fechahora` DATE, `p_diregistro` VARCHAR(15), `p_descripcion` VARCHAR(2000))  BEGIN
  UPDATE tblforosocial SET fecha=p_fechahora, registro=p_diregistro, descripcion=p_descripcion
  WHERE idforo=p_idforo;
  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizatblgeneroanimal` (IN `p_descGeneroAni` VARCHAR(15))  BEGIN
  UPDATE tblgeneroanimal SET descGeneroAni=p_descGeneroAni
  WHERE codiGeneroAni=p_codiGeneroAni;
  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminartblcalificacionservicio` (IN `p_fecha` DATE, `p_diregistrocalificado` VARCHAR(15), `p_diregistrocalificador` VARCHAR(15), `p_calificacion` INT(1), `p_observaciones` VARCHAR(2000))  BEGIN
DELETE FROM tblcalificacionservicio
WHERE
idcalificacion=p_idcalificacion;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminartblciudad` (IN `p_codigo` VARCHAR(5))  BEGIN
DELETE FROM tblciudad
WHERE
codigo=p_codigo;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminartbldepartamento` (IN `p_codigo` VARCHAR(2))  BEGIN
DELETE FROM tbldepartamento
WHERE
codigo=p_codigo;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminartbldiagnostico` (IN `p_iddiagnostico` INT(10))  BEGIN
DELETE FROM tbldiagnostico
WHERE
iddiagnostico=p_iddiagnostico;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminartblespecie` (IN `p_idespecie` INT(8))  BEGIN
DELETE FROM tblespecie
WHERE
idespecie=p_idespecie;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminartblformulacion` (IN `p_idhistoriaclinica` INT(8))  BEGIN
DELETE FROM tblformulacion
WHERE
idformula=p_idformula;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminartblformulacionmedicamentos` (IN `p_idformula` INT(4), IN `p_idmedicamento` INT(5), IN `p_cantidad` INT(3), IN `p_dosis` VARCHAR(80))  BEGIN
DELETE FROM tblformulacionmedicamentos
WHERE
id=p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminartblforosocial` (IN `p_fechahora` DATETIME, IN `p_diregistro` VARCHAR(15), IN `p_descripcion` VARCHAR(2000))  BEGIN
DELETE FROM tblforosocial
WHERE
idforo=p_idforo;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminartblgeneroanimal` (IN `p_descGeneroAni` VARCHAR(15))  BEGIN
DELETE FROM tblgeneroanimal
WHERE
codiGeneroAni=p_codiGeneroAni;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertartblforosocial` (IN `p_fechahora` DATETIME, IN `p_diregistro` VARCHAR(15), IN `p_descripcion` VARCHAR(2000))  BEGIN 
 INSERT INTO tblforosocial VALUES (null, p_fechahora, p_diregistro, p_descripcion);
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertartblgeneroanimal` (IN `p_descGeneroAni` VARCHAR(60))  BEGIN 
 INSERT INTO tblgeneroanimal VALUES (null, p_descGeneroAni);
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertartblregistro` (IN `p_di` VARCHAR(15), IN `p_nombres` VARCHAR(80), IN `p_apellidos` VARCHAR(50), IN `p_tipodi` INT(2), IN `p_email` VARCHAR(60), IN `p_ciudad` VARCHAR(5), IN `p_direccion` VARCHAR(80), IN `p_rol` INT(8), IN `p_telefonocel` VARCHAR(10), IN `p_telefonofijo` VARCHAR(10), IN `p_contrasena` VARCHAR(80), IN `p_codigogenero` INT(3))  BEGIN
 INSERT INTO tblregistro VALUES (p_di, p_nombres, p_apellidos, p_tipodi, p_email, p_ciudad, p_direccion, p_rol, p_telefonocel, p_telefonofijo,p_contrasena,p_codigogenero );
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_inserttblcalificacionservicio` (IN `p_fecha` DATE, IN `p_diregistrocalificado` VARCHAR(15), IN `p_diregistrocalificador` VARCHAR(15), IN `p_calificacion` INT(1), IN `p_observaciones` VARCHAR(2000))  BEGIN
INSERT INTO tblcalificacionservicio VALUES(null,p_fecha,p_diregistrocalificado,p_diregistrocalificador,p_calificacion,p_observaciones);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_inserttblciudad` (IN `p_codigo` VARCHAR(5), IN `p_nombre` VARCHAR(30), IN `p_departamento` VARCHAR(2))  BEGIN
INSERT INTO tblciudad VALUES(p_codigo,p_nombre,p_departamento);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_inserttbldepartamento` (IN `p_codigo` VARCHAR(2), IN `p_nombre` VARCHAR(30))  BEGIN
INSERT INTO tbldepartamento VALUES(p_codigo,p_nombre);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_inserttbldiagnostico` (IN `p_diagnostico` VARCHAR(2000))  BEGIN
INSERT INTO tbldiagnostico VALUES(null,p_diagnostico);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_inserttblespecie` (IN `p_nombreespecie` VARCHAR(100))  BEGIN
INSERT INTO tblespecie VALUES(null,p_nombreespecie);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_inserttblformulacion` (IN `p_idhistoriaclinica` INT(8))  BEGIN
INSERT INTO tblformulacion VALUES(null,p_idhistoriaclinica);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_inserttblformulacionmedicamentos` (IN `p_idformula` INT(4), IN `p_idmedicamento` INT(5), IN `p_cantidad` INT(3), IN `p_dosis` VARCHAR(80))  BEGIN
INSERT INTO tblformulacionmedicamentos VALUES(null,p_idformula, p_idmedicamento, p_cantidad, p_dosis);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcalificacionservicio`
--

CREATE TABLE `tblcalificacionservicio` (
  `idcalificacion` int(8) NOT NULL,
  `fecha` date NOT NULL,
  `diregistrocalificado` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `diregistrocalificador` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `calificacion` int(1) NOT NULL,
  `observaciones` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tblcalificacionservicio`
--

INSERT INTO `tblcalificacionservicio` (`idcalificacion`, `fecha`, `diregistrocalificado`, `diregistrocalificador`, `calificacion`, `observaciones`) VALUES
(1, '2022-06-12', '1', '1', 1, 'obervacion 1'),
(2, '2022-06-13', '2', '2', 3, 'obervacion 3'),
(10, '2022-07-19', '1', '2', 3, 'observaciones4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblciudad`
--

CREATE TABLE `tblciudad` (
  `codigo` varchar(5) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `departamento` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblciudad`
--

INSERT INTO `tblciudad` (`codigo`, `nombre`, `departamento`) VALUES
('1', 'Marinilla', '1'),
('2', 'La ceja', '1'),
('3', 'Cali', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcontactenos`
--

CREATE TABLE `tblcontactenos` (
  `di` int(4) NOT NULL,
  `nombresApellidos` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `celular` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `mensaje` varchar(500) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tblcontactenos`
--

INSERT INTO `tblcontactenos` (`di`, `nombresApellidos`, `celular`, `correo`, `mensaje`) VALUES
(1, 'yudy Restrepo', '3206697339', 'yudyrh17@hotmail.com', 'prueba'),
(2, 'yudy Restrepo', '3206697339', 'yudyrh17@hotmail.com', 'prueba'),
(3, 'Dagoberto Murgueitio', '310 000 00 ', 'dmurgueitio@gmail.com', 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldepartamento`
--

CREATE TABLE `tbldepartamento` (
  `codigo` varchar(2) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbldepartamento`
--

INSERT INTO `tbldepartamento` (`codigo`, `nombre`) VALUES
('1', 'Antioquia'),
('2', 'Valle del Cauca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldiagnostico`
--

CREATE TABLE `tbldiagnostico` (
  `iddiagnostico` int(10) NOT NULL,
  `diagnostico` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbldiagnostico`
--

INSERT INTO `tbldiagnostico` (`iddiagnostico`, `diagnostico`) VALUES
(1, 'pecueca edificil de herradicar'),
(2, 'diarrea de tornillos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblespecie`
--

CREATE TABLE `tblespecie` (
  `idespecie` int(8) NOT NULL,
  `nombreespecie` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tblespecie`
--

INSERT INTO `tblespecie` (`idespecie`, `nombreespecie`) VALUES
(1, 'Perro'),
(2, 'Gato'),
(3, 'Caballo'),
(4, 'Marrano'),
(5, 'Chivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblformulacion`
--

CREATE TABLE `tblformulacion` (
  `idformula` int(4) NOT NULL,
  `idhistoriaclinica` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblformulacion`
--

INSERT INTO `tblformulacion` (`idformula`, `idhistoriaclinica`) VALUES
(1, 1),
(2, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblformulacionmedicamentos`
--

CREATE TABLE `tblformulacionmedicamentos` (
  `id` int(8) NOT NULL,
  `idformula` int(4) NOT NULL,
  `idmedicamento` int(5) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `dosis` varchar(80) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tblformulacionmedicamentos`
--

INSERT INTO `tblformulacionmedicamentos` (`id`, `idformula`, `idmedicamento`, `cantidad`, `dosis`) VALUES
(1, 1, 2, 20, 'ml'),
(2, 2, 1, 40, 'kilos'),
(3, 3, 2, 50, '8mg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblforosocial`
--

CREATE TABLE `tblforosocial` (
  `idforo` int(8) NOT NULL,
  `fechahora` datetime NOT NULL,
  `diregistro` varchar(15) NOT NULL,
  `descripcion` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblforosocial`
--

INSERT INTO `tblforosocial` (`idforo`, `fechahora`, `diregistro`, `descripcion`) VALUES
(1, '2022-06-14 23:50:33', '1', 'carreta 1'),
(2, '2022-06-14 23:50:33', '2', 'carreta 2'),
(3, '2022-07-19 00:00:00', '2', 'carreta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblgeneroanimal`
--

CREATE TABLE `tblgeneroanimal` (
  `codiGeneroAni` int(3) NOT NULL,
  `descGeneroAni` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblgeneroanimal`
--

INSERT INTO `tblgeneroanimal` (`codiGeneroAni`, `descGeneroAni`) VALUES
(1, 'Hembra'),
(2, 'Macho'),
(3, 'trans');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblgenerohumano`
--

CREATE TABLE `tblgenerohumano` (
  `codiGenero` int(3) NOT NULL,
  `descGenero` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblgenerohumano`
--

INSERT INTO `tblgenerohumano` (`codiGenero`, `descGenero`) VALUES
(1, 'Femenino'),
(2, 'Maculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblhistodiagnostico`
--

CREATE TABLE `tblhistodiagnostico` (
  `id` int(4) NOT NULL,
  `idhistoriaclinica` int(8) NOT NULL,
  `iddiagnostico` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tblhistodiagnostico`
--

INSERT INTO `tblhistodiagnostico` (`id`, `idhistoriaclinica`, `iddiagnostico`) VALUES
(1, 1, 2),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblhistoriaclinica`
--

CREATE TABLE `tblhistoriaclinica` (
  `idhistoriaclinica` int(8) NOT NULL,
  `veterinario` varchar(15) NOT NULL,
  `idmascota` int(8) NOT NULL,
  `fechaatencion` date NOT NULL,
  `sintomatologia` varchar(5000) NOT NULL,
  `recomendaciones` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblhistoriaclinica`
--

INSERT INTO `tblhistoriaclinica` (`idhistoriaclinica`, `veterinario`, `idmascota`, `fechaatencion`, `sintomatologia`, `recomendaciones`) VALUES
(1, '1', 333, '2022-06-02', 'como mas que gotera en bollo', 'tape la gotera'),
(2, '1', 333, '2022-06-03', 'no come', 'embutale');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblhistovacuna`
--

CREATE TABLE `tblhistovacuna` (
  `id` int(4) NOT NULL,
  `idhistoriaclinica` int(8) NOT NULL,
  `idvacuna` int(7) NOT NULL,
  `numlote` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `fechaLote` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tblhistovacuna`
--

INSERT INTO `tblhistovacuna` (`id`, `idhistoriaclinica`, `idvacuna`, `numlote`, `fechaLote`) VALUES
(1, 1, 3, '25', '2022-05-10'),
(2, 2, 1, '444', '2022-05-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmedicamentos`
--

CREATE TABLE `tblmedicamentos` (
  `idmedicamento` int(5) NOT NULL,
  `nombremedicamento` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tblmedicamentos`
--

INSERT INTO `tblmedicamentos` (`idmedicamento`, `nombremedicamento`) VALUES
(1, 'dolex'),
(2, 'penicilina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblperfilmascotas`
--

CREATE TABLE `tblperfilmascotas` (
  `idmascota` int(8) NOT NULL,
  `nombremascota` varchar(20) NOT NULL,
  `propietario` varchar(15) NOT NULL,
  `raza` int(8) NOT NULL,
  `peso` int(5) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `caracteristicas` varchar(1000) NOT NULL,
  `codiGeneroAni` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblperfilmascotas`
--

INSERT INTO `tblperfilmascotas` (`idmascota`, `nombremascota`, `propietario`, `raza`, `peso`, `fechanacimiento`, `caracteristicas`, `codiGeneroAni`) VALUES
(333, 'puchunga', '1', 2, 2, '2022-06-05', 'gato negro pelado', 1),
(334, 'louna', '1', 2, 8, '2022-08-30', 'f', 2),
(335, 'juana', '2', 1, 3, '2022-09-06', 'prueba', 1),
(336, 'juana', '2', 1, 3, '2022-09-06', 'prueba', 1),
(337, 'pepa', '1', 2, 6, '2022-09-14', 'ff', 1),
(338, 'luis', '1', 2, 6, '2022-09-14', 'ff', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblraza`
--

CREATE TABLE `tblraza` (
  `idraza` int(8) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `especie` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tblraza`
--

INSERT INTO `tblraza` (`idraza`, `nombre`, `especie`) VALUES
(1, 'poodle', 1),
(2, 'siames', 2),
(3, 'french poodle', 1),
(4, 'yegua', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblregistro`
--

CREATE TABLE `tblregistro` (
  `di` varchar(15) NOT NULL,
  `nombres` varchar(80) NOT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `tipodi` int(2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `ciudad` varchar(5) NOT NULL,
  `dirección` varchar(80) NOT NULL,
  `rol` int(8) NOT NULL,
  `telefonocel` varchar(10) NOT NULL,
  `telefonofijo` varchar(10) DEFAULT NULL,
  `contrasena` varchar(80) NOT NULL,
  `codiGenero` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblregistro`
--

INSERT INTO `tblregistro` (`di`, `nombres`, `apellidos`, `tipodi`, `email`, `ciudad`, `dirección`, `rol`, `telefonocel`, `telefonofijo`, `contrasena`, `codiGenero`) VALUES
('1', 'sevelinda ', 'parada', 1, 'aaaaa@hotmail.com', '1', 'calle busquela Carrera Encuentrala', 2, '123456789', '321456987', 'pepito123', 1),
('2', 'Alma Marcela', 'Silva', 1, 'pppppp@gmail.com', '2', 'calle encuentrela', 1, '99999', '777777', 'admin123', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblrespuestasforo`
--

CREATE TABLE `tblrespuestasforo` (
  `idrespuestaforo` int(8) NOT NULL,
  `fechahora` datetime NOT NULL,
  `diregistro` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `idforo` int(8) NOT NULL,
  `respuesta` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblrespuestasforo`
--

INSERT INTO `tblrespuestasforo` (`idrespuestaforo`, `fechahora`, `diregistro`, `idforo`, `respuesta`) VALUES
(1, '2022-06-14 23:51:41', '1', 2, 'busque oficio'),
(2, '2022-06-14 23:51:41', '2', 2, 'eso hago');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblrol`
--

CREATE TABLE `tblrol` (
  `id` int(8) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblrol`
--

INSERT INTO `tblrol` (`id`, `nombre`) VALUES
(1, 'Adminsitrador'),
(2, 'Dueño de Mastoca'),
(3, 'Dueño de Negocio'),
(4, 'prueba 2'),
(5, 'prueba 4'),
(6, 'otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblservicios`
--

CREATE TABLE `tblservicios` (
  `idservicio` int(8) NOT NULL,
  `telefonoUno` varchar(15) NOT NULL,
  `telefonoDos` varchar(15) NOT NULL,
  `diregistro` varchar(15) NOT NULL,
  `tiposervicio` int(8) NOT NULL,
  `descripcionservicio` varchar(1000) NOT NULL,
  `horarioatencion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltipodi`
--

CREATE TABLE `tbltipodi` (
  `id` int(2) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbltipodi`
--

INSERT INTO `tbltipodi` (`id`, `nombre`) VALUES
(1, 'Cedula'),
(2, 'TI'),
(3, 'Pasaporte'),
(4, 'Nit'),
(5, 'Cedula de Extranjeria'),
(6, 'Registro Civil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltiposervicio`
--

CREATE TABLE `tbltiposervicio` (
  `idtiposervicio` int(8) NOT NULL,
  `nombreservicio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbltiposervicio`
--

INSERT INTO `tbltiposervicio` (`idtiposervicio`, `nombreservicio`) VALUES
(1, 'Veterinario'),
(2, 'Peluqueria'),
(3, 'Tienda de Mascotas'),
(4, 'Funeraria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblvacunas`
--

CREATE TABLE `tblvacunas` (
  `idvacuna` int(7) NOT NULL,
  `nombrevacuna` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tblvacunas`
--

INSERT INTO `tblvacunas` (`idvacuna`, `nombrevacuna`) VALUES
(1, 'PecuecaMaxima'),
(2, 'ChuchaHerradicada'),
(3, 'Antichurria'),
(4, 'Rabia'),
(5, 'prueba');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblcalificacionservicio`
--
ALTER TABLE `tblcalificacionservicio`
  ADD PRIMARY KEY (`idcalificacion`),
  ADD KEY `fk_tblcalificacionservicio_tblregistro` (`diregistrocalificado`),
  ADD KEY `fk_tblcalificacionserviciocalificador_tblregistro` (`diregistrocalificador`);

--
-- Indices de la tabla `tblciudad`
--
ALTER TABLE `tblciudad`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_tblciudad_tbldepartamento` (`departamento`);

--
-- Indices de la tabla `tblcontactenos`
--
ALTER TABLE `tblcontactenos`
  ADD PRIMARY KEY (`di`);

--
-- Indices de la tabla `tbldepartamento`
--
ALTER TABLE `tbldepartamento`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `tbldiagnostico`
--
ALTER TABLE `tbldiagnostico`
  ADD PRIMARY KEY (`iddiagnostico`);

--
-- Indices de la tabla `tblespecie`
--
ALTER TABLE `tblespecie`
  ADD PRIMARY KEY (`idespecie`);

--
-- Indices de la tabla `tblformulacion`
--
ALTER TABLE `tblformulacion`
  ADD PRIMARY KEY (`idformula`),
  ADD KEY `fk_tblformulacion_tblhistoriaclinica` (`idhistoriaclinica`);

--
-- Indices de la tabla `tblformulacionmedicamentos`
--
ALTER TABLE `tblformulacionmedicamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tblformulacionmedicamentos_tblformulacion` (`idformula`),
  ADD KEY `fk_tblformulacionmedicamentos_tblmedicamentos` (`idmedicamento`);

--
-- Indices de la tabla `tblforosocial`
--
ALTER TABLE `tblforosocial`
  ADD PRIMARY KEY (`idforo`),
  ADD KEY `fk_tblforosocial_tblregistro` (`diregistro`);

--
-- Indices de la tabla `tblgeneroanimal`
--
ALTER TABLE `tblgeneroanimal`
  ADD PRIMARY KEY (`codiGeneroAni`);

--
-- Indices de la tabla `tblgenerohumano`
--
ALTER TABLE `tblgenerohumano`
  ADD PRIMARY KEY (`codiGenero`);

--
-- Indices de la tabla `tblhistodiagnostico`
--
ALTER TABLE `tblhistodiagnostico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tblhistodiagnostico_tbldiagnostico` (`iddiagnostico`),
  ADD KEY `fk_tblhistodiagnostico_tblhistoriaclinica` (`idhistoriaclinica`);

--
-- Indices de la tabla `tblhistoriaclinica`
--
ALTER TABLE `tblhistoriaclinica`
  ADD PRIMARY KEY (`idhistoriaclinica`),
  ADD KEY `fk_tblhistoriaclinica_tblperfilmascota` (`idmascota`),
  ADD KEY `fk_historiaclinica_tblregistro` (`veterinario`);

--
-- Indices de la tabla `tblhistovacuna`
--
ALTER TABLE `tblhistovacuna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tblhistoriaclinica_tblhistovacuna` (`idhistoriaclinica`),
  ADD KEY `fk_tblhistovacuna_tblvacunas` (`idvacuna`);

--
-- Indices de la tabla `tblmedicamentos`
--
ALTER TABLE `tblmedicamentos`
  ADD PRIMARY KEY (`idmedicamento`);

--
-- Indices de la tabla `tblperfilmascotas`
--
ALTER TABLE `tblperfilmascotas`
  ADD PRIMARY KEY (`idmascota`),
  ADD KEY `fk_tblperfilmascotas_tblregistro` (`propietario`),
  ADD KEY `fk_tblperfilmascotas_tblraza` (`raza`),
  ADD KEY `fk_tblperfilmascotas_tblgeneroanimal` (`codiGeneroAni`);

--
-- Indices de la tabla `tblraza`
--
ALTER TABLE `tblraza`
  ADD PRIMARY KEY (`idraza`),
  ADD KEY `fk_tblraza_tblespecie` (`especie`);

--
-- Indices de la tabla `tblregistro`
--
ALTER TABLE `tblregistro`
  ADD PRIMARY KEY (`di`),
  ADD KEY `fk_tblregistro_tblciudad` (`ciudad`),
  ADD KEY `fk_tblregistro_tblrol` (`rol`),
  ADD KEY `fk_tblregistro_tbltipodi` (`tipodi`),
  ADD KEY `fk_tblregistro_tblgenerohumano` (`codiGenero`);

--
-- Indices de la tabla `tblrespuestasforo`
--
ALTER TABLE `tblrespuestasforo`
  ADD PRIMARY KEY (`idrespuestaforo`),
  ADD KEY `fk_tblrespuestasforo_tblregistro` (`diregistro`),
  ADD KEY `fk_tblrespuestasforos_tblforosocial` (`idforo`);

--
-- Indices de la tabla `tblrol`
--
ALTER TABLE `tblrol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblservicios`
--
ALTER TABLE `tblservicios`
  ADD PRIMARY KEY (`idservicio`),
  ADD KEY `fk_tblservicios_tblregistro` (`diregistro`),
  ADD KEY `fk_tblservicios_tbltiposervicios` (`tiposervicio`);

--
-- Indices de la tabla `tbltipodi`
--
ALTER TABLE `tbltipodi`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbltiposervicio`
--
ALTER TABLE `tbltiposervicio`
  ADD PRIMARY KEY (`idtiposervicio`);

--
-- Indices de la tabla `tblvacunas`
--
ALTER TABLE `tblvacunas`
  ADD PRIMARY KEY (`idvacuna`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblcalificacionservicio`
--
ALTER TABLE `tblcalificacionservicio`
  MODIFY `idcalificacion` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tblcontactenos`
--
ALTER TABLE `tblcontactenos`
  MODIFY `di` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbldiagnostico`
--
ALTER TABLE `tbldiagnostico`
  MODIFY `iddiagnostico` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tblespecie`
--
ALTER TABLE `tblespecie`
  MODIFY `idespecie` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tblformulacion`
--
ALTER TABLE `tblformulacion`
  MODIFY `idformula` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tblformulacionmedicamentos`
--
ALTER TABLE `tblformulacionmedicamentos`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tblforosocial`
--
ALTER TABLE `tblforosocial`
  MODIFY `idforo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tblgeneroanimal`
--
ALTER TABLE `tblgeneroanimal`
  MODIFY `codiGeneroAni` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tblgenerohumano`
--
ALTER TABLE `tblgenerohumano`
  MODIFY `codiGenero` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblhistodiagnostico`
--
ALTER TABLE `tblhistodiagnostico`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblhistovacuna`
--
ALTER TABLE `tblhistovacuna`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblperfilmascotas`
--
ALTER TABLE `tblperfilmascotas`
  MODIFY `idmascota` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=339;

--
-- AUTO_INCREMENT de la tabla `tblraza`
--
ALTER TABLE `tblraza`
  MODIFY `idraza` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tblrespuestasforo`
--
ALTER TABLE `tblrespuestasforo`
  MODIFY `idrespuestaforo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblrol`
--
ALTER TABLE `tblrol`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tblservicios`
--
ALTER TABLE `tblservicios`
  MODIFY `idservicio` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbltipodi`
--
ALTER TABLE `tbltipodi`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbltiposervicio`
--
ALTER TABLE `tbltiposervicio`
  MODIFY `idtiposervicio` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblcalificacionservicio`
--
ALTER TABLE `tblcalificacionservicio`
  ADD CONSTRAINT `fk_tblcalificacionservicio_tblregistro` FOREIGN KEY (`diregistrocalificado`) REFERENCES `tblregistro` (`di`),
  ADD CONSTRAINT `fk_tblcalificacionserviciocalificador_tblregistro` FOREIGN KEY (`diregistrocalificador`) REFERENCES `tblregistro` (`di`);

--
-- Filtros para la tabla `tblciudad`
--
ALTER TABLE `tblciudad`
  ADD CONSTRAINT `fk_tblciudad_tbldepartamento` FOREIGN KEY (`departamento`) REFERENCES `tbldepartamento` (`codigo`);

--
-- Filtros para la tabla `tblformulacion`
--
ALTER TABLE `tblformulacion`
  ADD CONSTRAINT `fk_tblformulacion_tblhistoriaclinica` FOREIGN KEY (`idhistoriaclinica`) REFERENCES `tblhistoriaclinica` (`idhistoriaclinica`);

--
-- Filtros para la tabla `tblformulacionmedicamentos`
--
ALTER TABLE `tblformulacionmedicamentos`
  ADD CONSTRAINT `fk_tblformulacionmedicamentos_tblformulacion` FOREIGN KEY (`idformula`) REFERENCES `tblformulacion` (`idformula`),
  ADD CONSTRAINT `fk_tblformulacionmedicamentos_tblmedicamentos` FOREIGN KEY (`idmedicamento`) REFERENCES `tblmedicamentos` (`idmedicamento`);

--
-- Filtros para la tabla `tblforosocial`
--
ALTER TABLE `tblforosocial`
  ADD CONSTRAINT `fk_tblforosocial_tblregistro` FOREIGN KEY (`diregistro`) REFERENCES `tblregistro` (`di`);

--
-- Filtros para la tabla `tblhistodiagnostico`
--
ALTER TABLE `tblhistodiagnostico`
  ADD CONSTRAINT `fk_tblhistodiagnostico_tbldiagnostico` FOREIGN KEY (`iddiagnostico`) REFERENCES `tbldiagnostico` (`iddiagnostico`),
  ADD CONSTRAINT `fk_tblhistodiagnostico_tblhistoriaclinica` FOREIGN KEY (`idhistoriaclinica`) REFERENCES `tblhistoriaclinica` (`idhistoriaclinica`);

--
-- Filtros para la tabla `tblhistoriaclinica`
--
ALTER TABLE `tblhistoriaclinica`
  ADD CONSTRAINT `fk_historiaclinica_tblregistro` FOREIGN KEY (`veterinario`) REFERENCES `tblregistro` (`di`),
  ADD CONSTRAINT `fk_tblhistoriaclinica_tblperfilmascota` FOREIGN KEY (`idmascota`) REFERENCES `tblperfilmascotas` (`idmascota`);

--
-- Filtros para la tabla `tblhistovacuna`
--
ALTER TABLE `tblhistovacuna`
  ADD CONSTRAINT `fk_tblhistoriaclinica_tblhistovacuna` FOREIGN KEY (`idhistoriaclinica`) REFERENCES `tblhistoriaclinica` (`idhistoriaclinica`),
  ADD CONSTRAINT `fk_tblhistovacuna_tblvacunas` FOREIGN KEY (`idvacuna`) REFERENCES `tblvacunas` (`idvacuna`);

--
-- Filtros para la tabla `tblperfilmascotas`
--
ALTER TABLE `tblperfilmascotas`
  ADD CONSTRAINT `fk_tblperfilmascotas_tblgeneroanimal` FOREIGN KEY (`codiGeneroAni`) REFERENCES `tblgeneroanimal` (`codiGeneroAni`),
  ADD CONSTRAINT `fk_tblperfilmascotas_tblraza` FOREIGN KEY (`raza`) REFERENCES `tblraza` (`idraza`),
  ADD CONSTRAINT `fk_tblperfilmascotas_tblregistro` FOREIGN KEY (`propietario`) REFERENCES `tblregistro` (`di`);

--
-- Filtros para la tabla `tblraza`
--
ALTER TABLE `tblraza`
  ADD CONSTRAINT `fk_tblraza_tblespecie` FOREIGN KEY (`especie`) REFERENCES `tblespecie` (`idespecie`);

--
-- Filtros para la tabla `tblregistro`
--
ALTER TABLE `tblregistro`
  ADD CONSTRAINT `fk_tblregistro_tblciudad` FOREIGN KEY (`ciudad`) REFERENCES `tblciudad` (`codigo`),
  ADD CONSTRAINT `fk_tblregistro_tblgenerohumano` FOREIGN KEY (`codiGenero`) REFERENCES `tblgenerohumano` (`codiGenero`),
  ADD CONSTRAINT `fk_tblregistro_tblrol` FOREIGN KEY (`rol`) REFERENCES `tblrol` (`id`),
  ADD CONSTRAINT `fk_tblregistro_tbltipodi` FOREIGN KEY (`tipodi`) REFERENCES `tbltipodi` (`id`);

--
-- Filtros para la tabla `tblrespuestasforo`
--
ALTER TABLE `tblrespuestasforo`
  ADD CONSTRAINT `fk_tblrespuestasforo_tblregistro` FOREIGN KEY (`diregistro`) REFERENCES `tblregistro` (`di`),
  ADD CONSTRAINT `fk_tblrespuestasforos_tblforosocial` FOREIGN KEY (`idforo`) REFERENCES `tblforosocial` (`idforo`);

--
-- Filtros para la tabla `tblservicios`
--
ALTER TABLE `tblservicios`
  ADD CONSTRAINT `FK_tblservicio_tblregistro` FOREIGN KEY (`diregistro`) REFERENCES `tblregistro` (`di`),
  ADD CONSTRAINT `fk_tblservicios_tblregistro` FOREIGN KEY (`diregistro`) REFERENCES `tblregistro` (`di`),
  ADD CONSTRAINT `fk_tblservicios_tbltiposervicios` FOREIGN KEY (`tiposervicio`) REFERENCES `tbltiposervicio` (`idtiposervicio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
