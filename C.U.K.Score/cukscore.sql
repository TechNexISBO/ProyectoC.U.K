-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 13:55:15
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cukscorea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `CI` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`CI`) VALUES
(54445913),
(54763804),
(54856065),
(56215677);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `GeneroC` enum('Masculino','Femenino') COLLATE utf8_spanish_ci DEFAULT NULL,
  `Equipo` enum('Individual','Grupal') COLLATE utf8_spanish_ci DEFAULT NULL,
  `Edad` enum('12-13','14-15','16-17','Mayores') COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `GeneroC`, `Equipo`, `Edad`) VALUES
(1, 'Masculino', 'Individual', '12-13'),
(2, 'Masculino', 'Individual', '14-15'),
(3, 'Masculino', 'Individual', '16-17'),
(4, 'Masculino', 'Individual', 'Mayores'),
(5, 'Masculino', 'Grupal', '12-13'),
(6, 'Masculino', 'Grupal', '14-15'),
(7, 'Masculino', 'Grupal', '16-17'),
(8, 'Masculino', 'Grupal', 'Mayores'),
(9, 'Femenino', 'Individual', '12-13'),
(10, 'Femenino', 'Individual', '14-15'),
(11, 'Femenino', 'Individual', '16-17'),
(12, 'Femenino', 'Individual', 'Mayores'),
(13, 'Femenino', 'Grupal', '12-13'),
(14, 'Femenino', 'Grupal', '14-15'),
(15, 'Femenino', 'Grupal', '16-17'),
(16, 'Femenino', 'Grupal', 'Mayores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coach`
--

CREATE TABLE `coach` (
  `CI` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `coach`
--

INSERT INTO `coach` (`CI`) VALUES
(12345678);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juez`
--

CREATE TABLE `juez` (
  `idJuez` int(1) NOT NULL
) ;

--
-- Volcado de datos para la tabla `juez`
--

INSERT INTO `juez` (`idJuez`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kata`
--

CREATE TABLE `kata` (
  `idKata` int(11) NOT NULL,
  `nombreKata` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `kata`
--

INSERT INTO `kata` (`idKata`, `nombreKata`) VALUES
(1, 'Anan'),
(2, 'Anan Dai'),
(3, 'Ananko'),
(4, 'Aoyagi'),
(5, 'Bassai'),
(6, 'Bassai Dai'),
(7, 'Bassai Sho'),
(8, 'Chatanyara Kusanku'),
(9, 'Chibana No Kushanku'),
(10, 'Chinte'),
(11, 'Chinto'),
(12, 'Enpi'),
(13, 'Fukyugata Ichi'),
(14, 'Fukyugata Ni'),
(15, 'Gankaku'),
(16, 'Garyu'),
(17, 'Gekisai (Geksai) 1'),
(18, 'Gekisai (Geksai) 2'),
(19, 'Gojushiho'),
(20, 'Gojushiho Dai'),
(21, 'Gojushiho Sho'),
(22, 'Hakusho'),
(23, 'Hangetsu'),
(24, 'Haufa (Haffa)'),
(25, 'Heian Shodan'),
(26, 'Heian Nidan'),
(27, 'Heian Sandan'),
(28, 'Heian Yondan'),
(29, 'Heian Godan'),
(30, 'Heiku'),
(31, 'Ishimine Bassai'),
(32, 'Itosu Rohai Shodan'),
(33, 'Itosu Rohai Nidan'),
(34, 'Itosu Rohai Sandan'),
(35, 'Jiin'),
(36, 'Jion'),
(37, 'Jitte'),
(38, 'Juroku'),
(39, 'Kanchin'),
(40, 'Kanku Dai'),
(41, 'Kanku Sho'),
(42, 'Kanshu'),
(43, 'Kishimono No Kushanku'),
(44, 'Kousoukun'),
(45, 'Kousoukun Dai'),
(46, 'Kousoukun Sho'),
(47, 'Kururunfa'),
(48, 'Kusanku'),
(49, 'Kyan No Chinto'),
(50, 'Kyan No Wanshu'),
(51, 'Matsukaze'),
(52, 'Matsumura Bassai'),
(53, 'Matsumura Rohai'),
(54, 'Meikyo'),
(55, 'Myojo'),
(56, 'Naifanchin Shodan'),
(57, 'Naifanchin Nidan'),
(58, 'Naifanchin Sandan'),
(59, 'Naihanchi'),
(60, 'Nijushiho'),
(61, 'Nipaipo'),
(62, 'Niseishi'),
(63, 'Ohan'),
(64, 'Ohan Dai'),
(65, 'Oyadomari No Passai'),
(66, 'Pachu'),
(67, 'Paiku'),
(68, 'Papuren'),
(69, 'Passai'),
(70, 'Pinan Shodan'),
(71, 'Pinan Nidan'),
(72, 'Pinan Sandan'),
(73, 'Pinan Yondan'),
(74, 'Pinan Godan'),
(75, 'Rohai'),
(76, 'Saifa'),
(77, 'Sanchin'),
(78, 'Sansai'),
(79, 'Sanseiru'),
(80, 'Sanseru'),
(81, 'Seichin'),
(82, 'Seienchin (Seiyunchin)'),
(83, 'Seipai'),
(84, 'Seiryu'),
(85, 'Seishan'),
(86, 'Seisan (Sesan)'),
(87, 'Shiho Kousoukun'),
(88, 'Shinpa'),
(89, 'Shinsei'),
(90, 'Shisochin'),
(91, 'Sochin'),
(92, 'Suparinpei'),
(93, 'Tekki Shodan'),
(94, 'Tekki Nidan'),
(95, 'Tekki Sandan'),
(96, 'Tensho'),
(97, 'Tomari Bassai'),
(98, 'Unshu'),
(99, 'Unsu'),
(100, 'Useishi'),
(101, 'Wankan'),
(102, 'Wanshu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participante`
--

CREATE TABLE `participante` (
  `CI` int(8) NOT NULL,
  `Escuela` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `GeneroP` enum('Masculino','Femenino') COLLATE utf8_spanish_ci DEFAULT NULL,
  `CI_C` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `participante`
--

INSERT INTO `participante` (`CI`, `Escuela`, `GeneroP`, `CI_C`) VALUES
(11111111, 'Hola', 'Masculino', 12345678),
(22222222, 'Chau', 'Masculino', 12345678);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participar`
--

CREATE TABLE `participar` (
  `idCompite` int(11) NOT NULL,
  `Ronda` int(11) DEFAULT NULL,
  `Cinturon` enum('Azul','Rojo') COLLATE utf8_spanish_ci DEFAULT NULL,
  `CI_P` int(8) DEFAULT NULL,
  `idTorneo` int(11) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `Compite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `participar`
--

INSERT INTO `participar` (`idCompite`, `Ronda`, `Cinturon`, `CI_P`, `idTorneo`, `idCategoria`, `Compite`) VALUES
(1, NULL, 'Rojo', 11111111, 1, 3, 1),
(2, NULL, 'Azul', 22222222, 1, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasa`
--

CREATE TABLE `pasa` (
  `idTorneo` int(11) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `CI` int(8) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Apellido` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Correo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fnac` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`CI`, `Nombre`, `Apellido`, `Correo`, `Fnac`) VALUES
(11111111, 'test1', 'test1', NULL, '2023-11-01'),
(12345678, 'Pepe', 'Gomez', 'pepe.gomer@gmail.com', '2023-10-30'),
(22222222, 'test2', 'test2', NULL, '2023-10-30'),
(54445913, 'Ezequiel', 'Soriano', 'ezequielsoriano2004@gmail.com', '2004-08-30'),
(54763804, 'Diego', 'Romero', 'diego.romer70@gmail.com', '2005-01-01'),
(54856065, 'Thomas', 'Islas', 'islas.thomas115@gmail.com', '2005-01-08'),
(56215677, 'Martin', 'Leites', 'martinwleites@gmail.com', '2005-07-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntuar`
--

CREATE TABLE `puntuar` (
  `idPuntaje` int(11) NOT NULL,
  `Valor` decimal(11,0) DEFAULT NULL,
  `valorTotal` decimal(11,0) DEFAULT NULL,
  `idJuez` int(11) DEFAULT NULL,
  `CI_P` int(8) DEFAULT NULL,
  `idKata` int(11) DEFAULT NULL,
  `idRing` int(11) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `idTorneo` int(11) DEFAULT NULL
) ;

--
-- Volcado de datos para la tabla `puntuar`
--

INSERT INTO `puntuar` (`idPuntaje`, `Valor`, `valorTotal`, `idJuez`, `CI_P`, `idKata`, `idRing`, `idCategoria`, `idTorneo`) VALUES
(1, '6', '43', 1, 11111111, 14, NULL, 3, 1),
(2, '6', '43', 2, 11111111, 14, NULL, 3, 1),
(3, '7', '43', 3, 11111111, 14, NULL, 3, 1),
(4, '6', '43', 4, 11111111, 14, NULL, 3, 1),
(5, '6', '43', 5, 11111111, 14, NULL, 3, 1),
(6, '6', '43', 6, 11111111, 14, NULL, 3, 1),
(7, '6', '43', 7, 11111111, 14, NULL, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ring`
--

CREATE TABLE `ring` (
  `idRing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiene`
--

CREATE TABLE `tiene` (
  `CI_P` int(8) DEFAULT NULL,
  `idKata` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tiene`
--

INSERT INTO `tiene` (`CI_P`, `idKata`) VALUES
(11111111, 14),
(22222222, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneo`
--

CREATE TABLE `torneo` (
  `idTorneo` int(11) NOT NULL,
  `nombreTorneo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Estado` enum('Proximo','En Curso','Finalizado') COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `torneo`
--

INSERT INTO `torneo` (`idTorneo`, `nombreTorneo`, `Fecha`, `Estado`) VALUES
(1, 'Hola', '2023-10-31', 'Proximo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usa`
--

CREATE TABLE `usa` (
  `idRing` int(11) DEFAULT NULL,
  `CI_P` int(8) DEFAULT NULL,
  `idKata` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUser` int(11) NOT NULL,
  `tipoUser` enum('Administrador','Coach','Juez') COLLATE utf8_spanish_ci DEFAULT NULL,
  `contraseñaUser` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CI` int(8) DEFAULT NULL,
  `idJuez` int(11) DEFAULT NULL
) ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUser`, `tipoUser`, `contraseñaUser`, `CI`, `idJuez`) VALUES
(1, 'Juez', '1234', NULL, 1),
(2, 'Juez', '1234', NULL, 2),
(3, 'Juez', '1234', NULL, 3),
(4, 'Juez', '1234', NULL, 4),
(5, 'Juez', '1234', NULL, 5),
(6, 'Juez', '1234', NULL, 6),
(7, 'Juez', '1234', NULL, 7),
(8, 'Administrador', '1234', 54856065, NULL),
(9, 'Administrador', '1234', 56215677, NULL),
(10, 'Administrador', '1234', 54763804, NULL),
(11, 'Administrador', '1234', 54445913, NULL),
(12, 'Coach', '1234', 12345678, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utiliza`
--

CREATE TABLE `utiliza` (
  `idRing` int(11) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `idTorneo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`CI`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`CI`);

--
-- Indices de la tabla `juez`
--
ALTER TABLE `juez`
  ADD PRIMARY KEY (`idJuez`);

--
-- Indices de la tabla `kata`
--
ALTER TABLE `kata`
  ADD PRIMARY KEY (`idKata`);

--
-- Indices de la tabla `participante`
--
ALTER TABLE `participante`
  ADD PRIMARY KEY (`CI`),
  ADD KEY `CI_C` (`CI_C`);

--
-- Indices de la tabla `participar`
--
ALTER TABLE `participar`
  ADD PRIMARY KEY (`idCompite`),
  ADD KEY `CI_P` (`CI_P`),
  ADD KEY `idTorneo` (`idTorneo`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `pasa`
--
ALTER TABLE `pasa`
  ADD KEY `idTorneo` (`idTorneo`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`CI`);

--
-- Indices de la tabla `puntuar`
--
ALTER TABLE `puntuar`
  ADD PRIMARY KEY (`idPuntaje`),
  ADD KEY `CI_P` (`CI_P`),
  ADD KEY `idKata` (`idKata`),
  ADD KEY `idRing` (`idRing`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idTorneo` (`idTorneo`);

--
-- Indices de la tabla `ring`
--
ALTER TABLE `ring`
  ADD PRIMARY KEY (`idRing`);

--
-- Indices de la tabla `tiene`
--
ALTER TABLE `tiene`
  ADD KEY `CI_P` (`CI_P`),
  ADD KEY `idKata` (`idKata`);

--
-- Indices de la tabla `torneo`
--
ALTER TABLE `torneo`
  ADD PRIMARY KEY (`idTorneo`);

--
-- Indices de la tabla `usa`
--
ALTER TABLE `usa`
  ADD KEY `idRing` (`idRing`),
  ADD KEY `CI_P` (`CI_P`),
  ADD KEY `idKata` (`idKata`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `CI` (`CI`),
  ADD KEY `idJuez` (`idJuez`);

--
-- Indices de la tabla `utiliza`
--
ALTER TABLE `utiliza`
  ADD KEY `idRing` (`idRing`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idTorneo` (`idTorneo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `kata`
--
ALTER TABLE `kata`
  MODIFY `idKata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT de la tabla `participar`
--
ALTER TABLE `participar`
  MODIFY `idCompite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `puntuar`
--
ALTER TABLE `puntuar`
  MODIFY `idPuntaje` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ring`
--
ALTER TABLE `ring`
  MODIFY `idRing` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `torneo`
--
ALTER TABLE `torneo`
  MODIFY `idTorneo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`CI`) REFERENCES `persona` (`CI`);

--
-- Filtros para la tabla `coach`
--
ALTER TABLE `coach`
  ADD CONSTRAINT `coach_ibfk_1` FOREIGN KEY (`CI`) REFERENCES `persona` (`CI`);

--
-- Filtros para la tabla `participante`
--
ALTER TABLE `participante`
  ADD CONSTRAINT `participante_ibfk_1` FOREIGN KEY (`CI`) REFERENCES `persona` (`CI`),
  ADD CONSTRAINT `participante_ibfk_2` FOREIGN KEY (`CI_C`) REFERENCES `coach` (`CI`);

--
-- Filtros para la tabla `participar`
--
ALTER TABLE `participar`
  ADD CONSTRAINT `participar_ibfk_1` FOREIGN KEY (`CI_P`) REFERENCES `participante` (`CI`),
  ADD CONSTRAINT `participar_ibfk_2` FOREIGN KEY (`idTorneo`) REFERENCES `torneo` (`idTorneo`),
  ADD CONSTRAINT `participar_ibfk_3` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`);

--
-- Filtros para la tabla `pasa`
--
ALTER TABLE `pasa`
  ADD CONSTRAINT `pasa_ibfk_1` FOREIGN KEY (`idTorneo`) REFERENCES `torneo` (`idTorneo`),
  ADD CONSTRAINT `pasa_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`);

--
-- Filtros para la tabla `puntuar`
--
ALTER TABLE `puntuar`
  ADD CONSTRAINT `puntuar_ibfk_1` FOREIGN KEY (`CI_P`) REFERENCES `participante` (`CI`),
  ADD CONSTRAINT `puntuar_ibfk_2` FOREIGN KEY (`idKata`) REFERENCES `kata` (`idKata`),
  ADD CONSTRAINT `puntuar_ibfk_3` FOREIGN KEY (`idRing`) REFERENCES `ring` (`idRing`),
  ADD CONSTRAINT `puntuar_ibfk_4` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`),
  ADD CONSTRAINT `puntuar_ibfk_5` FOREIGN KEY (`idTorneo`) REFERENCES `torneo` (`idTorneo`);

--
-- Filtros para la tabla `tiene`
--
ALTER TABLE `tiene`
  ADD CONSTRAINT `tiene_ibfk_1` FOREIGN KEY (`CI_P`) REFERENCES `participante` (`CI`),
  ADD CONSTRAINT `tiene_ibfk_2` FOREIGN KEY (`idKata`) REFERENCES `kata` (`idKata`);

--
-- Filtros para la tabla `usa`
--
ALTER TABLE `usa`
  ADD CONSTRAINT `usa_ibfk_1` FOREIGN KEY (`idRing`) REFERENCES `ring` (`idRing`),
  ADD CONSTRAINT `usa_ibfk_2` FOREIGN KEY (`CI_P`) REFERENCES `participante` (`CI`),
  ADD CONSTRAINT `usa_ibfk_3` FOREIGN KEY (`idKata`) REFERENCES `kata` (`idKata`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`CI`) REFERENCES `persona` (`CI`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idJuez`) REFERENCES `juez` (`idJuez`);

--
-- Filtros para la tabla `utiliza`
--
ALTER TABLE `utiliza`
  ADD CONSTRAINT `utiliza_ibfk_1` FOREIGN KEY (`idRing`) REFERENCES `ring` (`idRing`),
  ADD CONSTRAINT `utiliza_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`),
  ADD CONSTRAINT `utiliza_ibfk_3` FOREIGN KEY (`idTorneo`) REFERENCES `torneo` (`idTorneo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
