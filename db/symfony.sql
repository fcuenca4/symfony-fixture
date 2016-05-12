-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2016 at 04:41 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `symfony`
--

-- --------------------------------------------------------

--
-- Table structure for table `arbitros`
--

CREATE TABLE `arbitros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arbitros`
--

INSERT INTO `arbitros` (`id`, `nombre`, `edad`) VALUES
(1, 'Pepe', 34);

-- --------------------------------------------------------

--
-- Table structure for table `equipos`
--

CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `ptos` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipos`
--

INSERT INTO `equipos` (`id`, `nombre`, `ptos`) VALUES
(1, 'River', 0),
(2, 'Boca', 0),
(3, 'sacachispas', 3);

-- --------------------------------------------------------

--
-- Table structure for table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(2, 'fcuenca', 'fcuenca', 'fr@cuenca.com', 'fr@cuenca.com', 1, 'kzbs8ahutts0wkkww4gkw4kwocws84g', '$2y$13$kzbs8ahutts0wkkww4gkwu8ZRW6HbY0c8Ow4F9IVUMornkQ0UbRAO', '2016-05-12 04:38:57', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(3, 'test', 'test', 'asdc', 'asdc', 1, '4b6p9wdq0ccgsk0kwcwc4ws8g88g8kw', '$2y$13$4b6p9wdq0ccgsk0kwcwc4uE3Oi9WB/IwUtQUxi9vZSX7h/xzN/P4a', '2016-05-12 04:36:57', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:4:"USER";}', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `goles`
--

CREATE TABLE `goles` (
  `id` int(11) NOT NULL,
  `id_jugador` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_partido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jugadores`
--

CREATE TABLE `jugadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `edad` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jugadores`
--

INSERT INTO `jugadores` (`id`, `nombre`, `edad`, `id_equipo`) VALUES
(1, 'Pedro', 25, 1),
(2, 'diego armando maradona', 666, 3);

-- --------------------------------------------------------

--
-- Table structure for table `partidos`
--

CREATE TABLE `partidos` (
  `id` int(11) NOT NULL,
  `fecha_partido` date NOT NULL,
  `id_equipo1` int(11) NOT NULL,
  `id_equipo2` int(11) NOT NULL,
  `id_arbitro` int(11) NOT NULL,
  `result_eq1` int(11) NOT NULL,
  `result_eq2` int(11) NOT NULL,
  `observacion` text,
  `termino` tinyint(1) NOT NULL,
  `id_editor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partidos`
--

INSERT INTO `partidos` (`id`, `fecha_partido`, `id_equipo1`, `id_equipo2`, `id_arbitro`, `result_eq1`, `result_eq2`, `observacion`, `termino`, `id_editor`) VALUES
(1, '2011-01-01', 1, 1, 1, 1, 1, 'prueba', 0, 3),
(2, '2011-01-01', 1, 1, 1, 1, 1, NULL, 0, 2),
(3, '2011-01-01', 3, 1, 1, 4, 0, NULL, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arbitros`
--
ALTER TABLE `arbitros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`);

--
-- Indexes for table `goles`
--
ALTER TABLE `goles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_jugador` (`id_jugador`),
  ADD UNIQUE KEY `id_equipo` (`id_equipo`),
  ADD UNIQUE KEY `id_partido` (`id_partido`);

--
-- Indexes for table `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_equipo` (`id_equipo`);

--
-- Indexes for table `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_arbitro` (`id_arbitro`),
  ADD KEY `FK_editor` (`id_editor`),
  ADD KEY `FK_equipo1` (`id_equipo1`),
  ADD KEY `FK_equipo2` (`id_equipo2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arbitros`
--
ALTER TABLE `arbitros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `goles`
--
ALTER TABLE `goles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `partidos`
--
ALTER TABLE `partidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `goles`
--
ALTER TABLE `goles`
  ADD CONSTRAINT `FK_equipo` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_jugador` FOREIGN KEY (`id_jugador`) REFERENCES `jugadores` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_partido` FOREIGN KEY (`id_partido`) REFERENCES `partidos` (`id`);

--
-- Constraints for table `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `FK_equipo_jugador` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `partidos`
--
ALTER TABLE `partidos`
  ADD CONSTRAINT `FK_arbitro` FOREIGN KEY (`id_arbitro`) REFERENCES `arbitros` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_editor` FOREIGN KEY (`id_editor`) REFERENCES `fos_user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_equipo1` FOREIGN KEY (`id_equipo1`) REFERENCES `equipos` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_equipo2` FOREIGN KEY (`id_equipo2`) REFERENCES `equipos` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
