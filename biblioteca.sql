-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2021 a las 20:18:06
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `idAutor` int(11) NOT NULL,
  `apellidoA` varchar(50) DEFAULT NULL,
  `nombreA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`idAutor`, `apellidoA`, `nombreA`) VALUES
(1, 'Caese', 'Dam'),
(2, 'Barbacoa', 'Salmon'),
(3, 'Castro', 'Aquiles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `codigoD` int(11) DEFAULT NULL,
  `nombreC` varchar(50) DEFAULT NULL,
  `descripcion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `codigoD`, `nombreC`, `descripcion`) VALUES
(1, 77, 'Terror', 'Terror terror y mas terror'),
(2, 750, 'Suspenso', 'Una categoria chida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `idEditorial` int(11) NOT NULL,
  `nombreEd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`idEditorial`, `nombreEd`) VALUES
(2, 'La chida'),
(3, 'Gillen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplares`
--

CREATE TABLE `ejemplares` (
  `idEjemplar` int(11) NOT NULL,
  `ejemplar` int(11) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `idLibro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ejemplares`
--

INSERT INTO `ejemplares` (`idEjemplar`, `ejemplar`, `estado`, `idLibro`) VALUES
(4, 1, 'Disponible', 4),
(5, 1, 'Ocupado', 7),
(6, 2, 'Disponible', 4),
(8, 1, 'Disponible', 13),
(9, 1, 'Disponible', 2),
(12, 2, 'Disponible', 2),
(18, 3, 'Disponible', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `idLibro` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `lugarEd` varchar(50) DEFAULT NULL,
  `anioPub` varchar(50) DEFAULT NULL,
  `numPaginas` int(11) DEFAULT NULL,
  `numEdicion` int(11) DEFAULT NULL,
  `idAutor` int(11) DEFAULT NULL,
  `idEditorial` int(11) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`idLibro`, `titulo`, `lugarEd`, `anioPub`, `numPaginas`, `numEdicion`, `idAutor`, `idEditorial`, `idCategoria`, `imagen`) VALUES
(2, 'Anita', 'Mexico', '2021', 150, 1, 1, 2, 1, '1638777601_d5fe5edb5d6f82fc70bd.png'),
(4, 'Retrato', 'Colombia', '1956', 200, 1, 2, 3, 2, '1638779262_72befc5a7da6d9543d62.png'),
(6, 'El titere', 'Estados unidos', '2010', 150, 2, 3, 3, 2, '1638809138_18ca5092f41fb9a72916.png'),
(7, 'EL titere', 'Estados unidos', '2010', 150, 1, 1, 2, 1, '1638768165_cb628050bb5366d9c6cb.png'),
(8, 'Anita 2', 'Mexico', '2021', 150, 1, 1, 2, 1, '1638779011_caf1676902b6ea015cac.png'),
(9, 'Vida', 'Mexico', '2020', 200, 1, 1, 2, 1, '1638778836_4219189588123c549d94.png'),
(12, 'Ponyo', 'Mexico', '2020', 250, 2, 2, 2, 2, '1638780118_22cc449471c87a058fae.png'),
(13, 'Carlos', 'Mexico', '2020', 123, 1, 3, 2, 2, '1638780132_6537d07634aa17300dda.png'),
(14, 'vaca', 'Mexico', '2022', 123, 1, 1, 2, 1, '1638778705_1dc6db24110db1461ead.png'),
(15, 'Anita', 'Mexico', '2021', 150, 1, 1, 2, 1, '1638778806_607f1f9aa3dc99a71fac.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `matricula` varchar(10) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidoP` varchar(50) DEFAULT NULL,
  `apellidoM` varchar(50) DEFAULT NULL,
  `grupo` varchar(15) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `matricula`, `nombre`, `apellidoP`, `apellidoM`, `grupo`, `password`, `rol`, `created_at`) VALUES
(1, '18000758', 'Damian', 'Trujillo', 'Cruz', 'IEVN-1001', '$2y$10$G5CwBjGQjEnQoRa.3JAnjOQ9BAZZ2caYZp5kC0AWM7FZ/nV/5Ioka', 2, '2021-12-01 02:34:28'),
(3, '18000729', 'Mariana', 'Maldonado', 'Jimenez', 'IEVN-1001', '$2y$10$uJCnJ.7DgGWzE9zAdmvVaOJc05hDM83lJUgXdoXyXbHCgWma.jRye', 0, '2021-12-06 06:41:17'),
(5, '17000452', 'Federico', 'Medrano', 'Castillan', 'IEVN-1001', '$2y$10$6hwv3NxVfmk8.hdFw7IFe.8dqjHgJQ1qs.A/gUhdeNOLAx3NoF4Uu', 0, '2021-12-06 06:49:55'),
(6, '18000111', 'Super', 'Administrador', 'Chido', 'No tiene', '$2y$10$b/61PQRT2Vg8o452YP14Oe5ugHjdE0ryN8m6W6G2GeHgYUjlZSzHi', 2, '2021-12-06 18:36:21'),
(7, '18000452', 'Gustavo', 'Hernandez', 'Campos', 'IEVN-1001', '$2y$10$bOSBzx8tEHYkUg6C1LHRwO/y603P/i27tVf9k4Nr8K4pmgzTpsCiW', 1, '2021-12-06 19:03:21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`idAutor`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`idEditorial`);

--
-- Indices de la tabla `ejemplares`
--
ALTER TABLE `ejemplares`
  ADD PRIMARY KEY (`idEjemplar`),
  ADD KEY `idLibro` (`idLibro`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idLibro`),
  ADD KEY `idAutor` (`idAutor`),
  ADD KEY `idEditorial` (`idEditorial`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `idAutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  MODIFY `idEditorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ejemplares`
--
ALTER TABLE `ejemplares`
  MODIFY `idEjemplar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idLibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ejemplares`
--
ALTER TABLE `ejemplares`
  ADD CONSTRAINT `ejemplares_ibfk_1` FOREIGN KEY (`idLibro`) REFERENCES `libros` (`idLibro`) ON DELETE CASCADE;

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`idAutor`) REFERENCES `autores` (`idAutor`),
  ADD CONSTRAINT `libros_ibfk_2` FOREIGN KEY (`idEditorial`) REFERENCES `editoriales` (`idEditorial`),
  ADD CONSTRAINT `libros_ibfk_3` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
