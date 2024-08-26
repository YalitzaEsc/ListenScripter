-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-05-2024 a las 00:46:22
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ListenSripter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Audios`
--

CREATE TABLE `Audios` (
  `AudioID` int(11) NOT NULL,
  `PalabraID` int(11) DEFAULT NULL,
  `AudioPath` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Audios`
--

INSERT INTO `Audios` (`AudioID`, `PalabraID`, `AudioPath`) VALUES
(95, 383, './assets/aud/elementary/above.mp3'),
(96, 384, './assets/aud/elementary/airport.mp3'),
(97, 385, './assets/aud/elementary/boring.mp3'),
(98, 386, './assets/aud/elementary/carrot.mp3'),
(99, 387, './assets/aud/elementary/clothes.mp3'),
(100, 388, './assets/aud/elementary/close.mp3'),
(101, 389, './assets/aud/elementary/face.mp3'),
(102, 390, './assets/aud/elementary/phase.mp3'),
(103, 391, './assets/aud/elementary/interview.mp3'),
(104, 392, './assets/aud/elementary/island.mp3'),
(105, 393, './assets/aud/elementary/journey.mp3'),
(106, 394, './assets/aud/elementary/mountain.mp3'),
(107, 395, './assets/aud/elementary/photograph.mp3'),
(108, 396, './assets/aud/elementary/picture.mp3'),
(109, 397, './assets/aud/elementary/thirsty.mp3'),
(110, 398, './assets/aud/beginner/ability.mp3'),
(111, 399, './assets/aud/beginner/avoid.mp3'),
(112, 400, './assets/aud/beginner/awful.mp3'),
(113, 401, './assets/aud/beginner/aware.mp3'),
(114, 402, './assets/aud/beginner/headache.mp3'),
(115, 403, './assets/aud/beginner/organization.mp3'),
(116, 404, './assets/aud/beginner/race.mp3'),
(117, 405, './assets/aud/beginner/raise.mp3'),
(118, 406, './assets/aud/beginner/recipe.mp3'),
(119, 407, './assets/aud/beginner/schedule.mp3'),
(120, 408, './assets/aud/beginner/sign.mp3'),
(121, 409, './assets/aud/beginner/skiing.mp3'),
(122, 410, './assets/aud/beginner/straight.mp3'),
(123, 411, './assets/aud/beginner/successful.mp3'),
(124, 412, './assets/aud/beginner/suggestion.mp3'),
(126, 414, './assets/aud/intermediate/achievement.mp3'),
(127, 415, './assets/aud/intermediate/breath.mp3'),
(128, 416, './assets/aud/intermediate/bury.mp3'),
(129, 417, './assets/aud/intermediate/costume.mp3'),
(130, 418, './assets/aud/intermediate/departure.mp3'),
(131, 419, './assets/aud/intermediate/frightening.mp3'),
(132, 420, './assets/aud/intermediate/fuel.mp3'),
(133, 421, './assets/aud/intermediate/highlight.mp3'),
(134, 422, './assets/aud/intermediate/muscle.mp3'),
(135, 423, './assets/aud/intermediate/neighborhood.mp3'),
(136, 424, './assets/aud/intermediate/queue.mp3'),
(137, 425, './assets/aud/intermediate/rough.mp3'),
(138, 426, './assets/aud/intermediate/scientific.mp3'),
(139, 427, './assets/aud/intermediate/symptom.mp3'),
(140, 428, './assets/aud/intermediate/accommodation.mp3'),
(154, 441, './assets/aud/high intermediate/appeal.mp3'),
(155, 442, './assets/aud/high intermediate/approach.mp3'),
(156, 443, './assets/aud/high intermediate/budget.mp3'),
(157, 444, './assets/aud/high intermediate/characteristic.mp3'),
(158, 445, './assets/aud/high intermediate/chief.mp3'),
(159, 446, './assets/aud/high intermediate/efficient.mp3'),
(160, 447, './assets/aud/high intermediate/household.mp3'),
(161, 448, './assets/aud/high intermediate/inquiry.mp3'),
(162, 449, './assets/aud/high intermediate/insight.mp3'),
(163, 450, './assets/aud/high intermediate/issue.mp3'),
(164, 451, './assets/aud/high intermediate/launch.mp3'),
(165, 452, './assets/aud/high intermediate/outcome.mp3'),
(166, 453, './assets/aud/high intermediate/overall.mp3'),
(167, 454, './assets/aud/high intermediate/owe.mp3'),
(168, 455, './assets/aud/high intermediate/schedule.mp3'),
(169, 456, './assets/aud/advanced/absence.mp3'),
(170, 457, './assets/aud/advanced/accomplishment.mp3'),
(171, 458, './assets/aud/advanced/acquisition.mp3'),
(172, 459, './assets/aud/advanced/beloved.mp3'),
(173, 460, './assets/aud/advanced/encouragement.mp3'),
(174, 461, './assets/aud/advanced/endeavor.mp3'),
(175, 462, './assets/aud/advanced/forthcoming.mp3'),
(176, 463, './assets/aud/advanced/likelihood.mp3'),
(177, 464, './assets/aud/advanced/maintenance.mp3'),
(178, 465, './assets/aud/advanced/misleading.mp3'),
(179, 466, './assets/aud/advanced/overwhelm.mp3'),
(180, 467, './assets/aud/advanced/profitable.mp3'),
(181, 468, './assets/aud/advanced/striking.mp3'),
(182, 469, './assets/aud/advanced/surveillance.mp3'),
(183, 470, './assets/aud/advanced/thoughtful.mp3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Niveles`
--

CREATE TABLE `Niveles` (
  `NivelID` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Niveles`
--

INSERT INTO `Niveles` (`NivelID`, `Nombre`) VALUES
(1, 'Beginner'),
(2, 'Elementary'),
(3, 'Intermediate'),
(4, 'High Intermediate'),
(5, 'Advanced'),
(6, 'Proficient');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `NivelPalabras`
--

CREATE TABLE `NivelPalabras` (
  `NivelPalabraID` int(11) NOT NULL,
  `NivelID` int(11) DEFAULT NULL,
  `PalabraID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `NivelPalabras`
--

INSERT INTO `NivelPalabras` (`NivelPalabraID`, `NivelID`, `PalabraID`) VALUES
(365, 1, 383),
(366, 1, 384),
(367, 1, 385),
(368, 1, 386),
(369, 1, 387),
(370, 1, 388),
(371, 1, 389),
(372, 1, 390),
(373, 1, 391),
(374, 1, 392),
(375, 1, 393),
(376, 1, 394),
(377, 1, 395),
(378, 1, 396),
(379, 1, 397),
(380, 2, 398),
(381, 2, 399),
(382, 2, 400),
(383, 2, 401),
(384, 2, 402),
(385, 2, 403),
(386, 2, 404),
(387, 2, 405),
(388, 2, 406),
(389, 2, 407),
(390, 2, 408),
(391, 2, 409),
(392, 2, 410),
(393, 2, 411),
(394, 2, 412),
(396, 3, 414),
(397, 3, 415),
(398, 3, 416),
(399, 3, 417),
(400, 3, 418),
(401, 3, 419),
(402, 3, 420),
(403, 3, 421),
(404, 3, 422),
(405, 3, 423),
(406, 3, 424),
(407, 3, 425),
(408, 3, 426),
(409, 3, 427),
(410, 3, 428),
(423, 4, 441),
(424, 4, 442),
(425, 4, 443),
(426, 4, 444),
(427, 4, 445),
(428, 4, 446),
(429, 4, 447),
(430, 4, 448),
(431, 4, 449),
(432, 4, 450),
(433, 4, 451),
(434, 4, 452),
(435, 4, 453),
(436, 4, 454),
(437, 4, 455),
(438, 5, 456),
(439, 5, 457),
(440, 5, 458),
(441, 5, 459),
(442, 5, 460),
(443, 5, 461),
(444, 5, 462),
(445, 5, 463),
(446, 5, 464),
(447, 5, 465),
(448, 5, 466),
(449, 5, 467),
(450, 5, 468),
(451, 5, 469),
(452, 5, 470);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Palabras`
--

CREATE TABLE `Palabras` (
  `PalabraID` int(11) NOT NULL,
  `Palabra` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Palabras`
--

INSERT INTO `Palabras` (`PalabraID`, `Palabra`) VALUES
(383, 'above'),
(384, 'airport'),
(385, 'boring'),
(386, 'carrot'),
(387, 'clothes'),
(388, 'close'),
(389, 'face'),
(390, 'phase'),
(391, 'interview'),
(392, 'island'),
(393, 'journey'),
(394, 'mountain'),
(395, 'photograph'),
(396, 'picture'),
(397, 'thirsty'),
(398, 'ability'),
(399, 'avoid'),
(400, 'awful'),
(401, 'aware'),
(402, 'headache'),
(403, 'organization'),
(404, 'race'),
(405, 'raise'),
(406, 'recipe'),
(407, 'schedule'),
(408, 'sign'),
(409, 'skiing'),
(410, 'straight'),
(411, 'successful'),
(412, 'suggestion'),
(414, 'achievement'),
(415, 'breath'),
(416, 'bury'),
(417, 'costume'),
(418, 'departure'),
(419, 'frightening'),
(420, 'fuel'),
(421, 'highlight'),
(422, 'muscle'),
(423, 'neighborhood'),
(424, 'queue'),
(425, 'rough'),
(426, 'scientific'),
(427, 'symptom'),
(428, 'accommodation'),
(441, 'appeal'),
(442, 'approach'),
(443, 'budget'),
(444, 'characteristic'),
(445, 'chief'),
(446, 'efficient'),
(447, 'household'),
(448, 'inquiry'),
(449, 'insight'),
(450, 'issue'),
(451, 'launch'),
(452, 'outcome'),
(453, 'overall'),
(454, 'owe'),
(455, 'schedule'),
(456, 'absence'),
(457, 'accomplishment'),
(458, 'acquisition'),
(459, 'beloved'),
(460, 'encouragement'),
(461, 'endeavor'),
(462, 'forthcoming'),
(463, 'likelihood'),
(464, 'maintenance'),
(465, 'misleading'),
(466, 'overwhelm'),
(467, 'profitable'),
(468, 'striking'),
(469, 'surveillance'),
(470, 'thoughtful');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `UsuarioID` int(100) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Password` text NOT NULL,
  `Nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`UsuarioID`, `Usuario`, `Password`, `Nombre`) VALUES
(1, 'Marissa', '12345678', ''),
(2, 'Yali', '1234', 'Claudia Escárcega'),
(4, 'Yalitza', '1234', 'Claudia Yalitza'),
(5, 'Manu', '123', 'Manuel'),
(6, 'Rob', '123', 'Roberto'),
(7, 'Eli', '123', 'Elisa'),
(8, 'sa', 'sa', 'Claudia Yalitza'),
(9, 'Lie', '98490133', 'Luis Lie'),
(10, 'marina', '123', 'Elisa'),
(11, 'Hola', '123', 'Hola'),
(12, 'loco', '123', 'Luis Lie'),
(13, 'Clau', '1234', 'Claudia Escárcega'),
(14, 'Sarncc', '123', 'Sara'),
(15, 'dscsdcds', '123', 'dcdscsdc'),
(16, 'Lies', '123', 'Luis Lie'),
(17, 'Yali2', '123', 'Yali');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Audios`
--
ALTER TABLE `Audios`
  ADD PRIMARY KEY (`AudioID`),
  ADD KEY `PalabraID` (`PalabraID`);

--
-- Indices de la tabla `Niveles`
--
ALTER TABLE `Niveles`
  ADD PRIMARY KEY (`NivelID`);

--
-- Indices de la tabla `NivelPalabras`
--
ALTER TABLE `NivelPalabras`
  ADD PRIMARY KEY (`NivelPalabraID`),
  ADD KEY `NivelID` (`NivelID`),
  ADD KEY `PalabraID` (`PalabraID`);

--
-- Indices de la tabla `Palabras`
--
ALTER TABLE `Palabras`
  ADD PRIMARY KEY (`PalabraID`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`UsuarioID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Audios`
--
ALTER TABLE `Audios`
  MODIFY `AudioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT de la tabla `Niveles`
--
ALTER TABLE `Niveles`
  MODIFY `NivelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `NivelPalabras`
--
ALTER TABLE `NivelPalabras`
  MODIFY `NivelPalabraID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=453;

--
-- AUTO_INCREMENT de la tabla `Palabras`
--
ALTER TABLE `Palabras`
  MODIFY `PalabraID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=471;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `UsuarioID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Audios`
--
ALTER TABLE `Audios`
  ADD CONSTRAINT `audios_ibfk_1` FOREIGN KEY (`PalabraID`) REFERENCES `Palabras` (`PalabraID`);

--
-- Filtros para la tabla `NivelPalabras`
--
ALTER TABLE `NivelPalabras`
  ADD CONSTRAINT `nivelpalabras_ibfk_1` FOREIGN KEY (`NivelID`) REFERENCES `Niveles` (`NivelID`),
  ADD CONSTRAINT `nivelpalabras_ibfk_2` FOREIGN KEY (`PalabraID`) REFERENCES `Palabras` (`PalabraID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
