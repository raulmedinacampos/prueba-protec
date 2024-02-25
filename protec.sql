-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2024 a las 21:33:30
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `protec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `contenido` text NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `autor`, `fecha`, `contenido`, `updated_at`, `created_at`, `activo`) VALUES
(1, 'Café de especialidad de Oaxaca', 'Fernando García', '2024-02-24', 'El municipio de Pluma Hidalgo, según la historia fue fundado por personas provenientes del distrito de Miahuatlán, que sólo buscaban un lugar apropiado para la siembra del exótico café, primero llegaron a San Isidro del Camino a establecer ahí su campamento, pero los indígenas del lugar manifestaron su disgusto por la invasión de sus tierras y se dirigieron a Pochutla en demanda de protección, por lo que su intento de cultivo fracasó.\r\n\r\nPero no se dieron por vencidos y decidieron establecerse en un lugar cercano a San Isidro y tomaron rumbo a Huatulco estableciéndose en el cerro de la Pluma y dieron al sitio elegido el nombre de la Providencia.\r\n\r\nLas personas encargadas de la siembra del café en este lugar fueron Juan María y Juan Francisco Mijangos, pues se habían librado de los indios hasta ese entonces, pero las autoridades de Pochutla se mostraron celosas de la invasión de los Miahuatecos a sus dominios y quisieron frustrar nuevamente su intento, pero el señor Ramón Ruiz intervino y ayudó a calmar el conflicto.\r\n\r\nSe apresuraron los trabajos ya que la época de lluvia se acercaba y fue en el mes de abril que el programa quedaba ya realizado quedando los almácigos que sirvieron para sembrar en el año siguiente las primeras cuarenta mil matas de café que se sembraran en el estado de Oaxaca, siendo esta la primera plantación que hubo en esta magnitud; así siguieron los problemas después con los ricos del distrito de Miahuatlán que quisieron tomar posesión para acrecentar sus riqueza, entre tanto los pobres anhelaban un lugar donde sus esperanzas dejaran de ser sueños, por lo que los pioneros de la providencia se vieron en la necesidad de establecer una fundación legal, un pueblo con ayuntamiento para que este fuera quien gobernara los colonos y tuviera autoridad legal, se iniciaron las gestiones ante el gobierno y pese a los problemas que surgieron pocos año después los deseos de los cafetaleros quedaron satisfechos con el decreto expedido por el gobierno del Estado, el primero de diciembre de 1880, creando el pueblo de Pluma Hidalgo.\r\n\r\nAsí ante el interés de querer salir adelante, Pluma Hidalgo fue progresando; fue uno de los primeros municipios de la región que destacó por tener en ese entonces una cultura más civilizado pues tuvieron antes que los demás los servicios de correos, telégrafo y luz eléctrica, caminos que comunicaron a Pochutla, San Miguel Suchixtepec y Miahuatlán, sus calles en un principio eran empedradas al igual que la plazuela donde estaba una pila para almacenar agua de donde todos se abastecían. Era una zona en donde las personas comercializaban sus productos.', '2024-02-24 18:16:26', '2024-02-24 18:16:26', 1),
(2, 'aaa', 'aaa', '2024-02-24', '<p>aaa</p><p>bbbb</p>', '2024-02-25 00:16:32', '2024-02-25 00:16:32', 1),
(3, 'aaa', 'aaa', '2024-02-24', '<p>aaa</p><p>bbbb</p>', '2024-02-25 00:19:01', '2024-02-25 00:19:01', 1),
(4, 'aaa', 'aaa', '2024-02-24', '<p>aaa</p><p>bbbb</p>', '2024-02-25 00:19:34', '2024-02-25 00:19:34', 1),
(5, 'bbb', 'bbb', '2024-02-23', '<p>bbbb</p>', '2024-02-25 00:33:46', '2024-02-25 00:33:46', 1),
(6, 'bbb', 'bbb', '2024-02-23', '<p>bbbb</p>', '2024-02-25 00:34:20', '2024-02-25 00:34:20', 1),
(7, 'bbb', 'bbb', '2024-02-23', '<p>bbbb</p>', '2024-02-25 00:34:42', '2024-02-25 00:34:42', 1),
(8, 'bbb', 'bbb', '2024-02-23', '<p>bbbb</p>', '2024-02-25 00:35:56', '2024-02-25 00:35:56', 1),
(9, 'bbb', 'bbb', '2024-02-23', '<p>bbbb</p>', '2024-02-25 00:36:18', '2024-02-25 00:36:18', 1),
(10, 'bbb', 'bbb', '2024-02-23', '<p>bbbb</p>', '2024-02-25 00:36:26', '2024-02-25 00:36:26', 1),
(11, 'bbb', 'bbb', '2024-02-23', '<p>bbbb</p>', '2024-02-25 00:37:05', '2024-02-25 00:37:05', 1),
(12, 'bbb', 'bbb', '2024-02-23', '<p>bbbb</p>', '2024-02-25 00:37:17', '2024-02-25 00:37:17', 1),
(13, 'bbb', 'bbb', '2024-02-23', '<p>bbbb</p>', '2024-02-25 00:40:48', '2024-02-25 00:40:48', 1),
(14, 'bbb', 'bbb', '2024-02-23', '<p>bbbb</p>', '2024-02-25 00:41:54', '2024-02-25 00:41:54', 1),
(15, 'cccc', 'cccc', '2024-02-22', '<p>cccc</p><p>cccc</p>', '2024-02-25 00:46:07', '2024-02-25 00:46:07', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
