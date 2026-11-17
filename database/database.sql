-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2026 a las 05:41:01
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ozark_parcial2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `actor` varchar(100) NOT NULL,
  `imagen` varchar(300) NOT NULL,
  `alt` varchar(300) NOT NULL,
  `grupo` varchar(30) NOT NULL,
  `destacado` tinyint(4) NOT NULL DEFAULT 0,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`id`, `nombre`, `actor`, `imagen`, `alt`, `grupo`, `destacado`, `descripcion`) VALUES
(1, 'Marty Byrde', 'Jason Bateman', '../img/elenco/jasonbateman.jpg', 'Jason Bateman como Marty Byrde', 'byrde', 1, 'Martin \"Marty\" Byrde es el protagonista de la serie de Netflix, Ozark . Es el esposo de Wendy Byrde, padre de Charlotte y Jonah Byrde, y un asesor financiero convertido en blanqueador de dinero.\r\n\r\nMarty suele ser una persona tranquila, inteligente y serena. Su aparente calma puede parecer fría para algunos, pero en realidad posee una habilidad innata para compartimentar sus emociones, lo que le permite mantener la calma bajo presión.'),
(2, 'Wendy Byrde', 'Laura Linney', '../img/elenco/wendy.jpg', 'Laura Linney como Wendy Byrde en Ozark', 'byrde', 1, 'Es una de las protagonistas y principal mente criminal de la serie de Netflix, Ozark. Pasando de ser una ama de casa frustrada a una estratega política y manipuladora sin escrúpulos, supera a su esposo Marty en ambición y poder, poniendo a su familia en situaciones de extremo peligro para asegurar el control del cártel'),
(3, 'Jonah Byrde', 'Skylar Gaertner', '../img/elenco/guachin.jpg', 'Skylar Gaertner como Jonah Byrde en Ozark', 'byrde', 0, 'Jonah Byrde es uno de los personajes principales de la serie de Netflix, Ozark . Es hijo de Marty Byrde y Wendy Byrde, y hermano de Charlotte Byrde.\r\n\r\nA medida que la familia se involucra en el lavado de dinero para el cártel en los Ozarks, Jonah se vuelve observador.'),
(4, 'Charlotte Byrde', 'Sofia Hublitz', '../img/elenco/rubia.jpg', 'Sofia Hublitz como Charlotte Byrde', 'byrde', 0, 'Con el paso del tiempo, Charlotte descubre más sobre el negocio de sus padres. Aunque le resulta difícil, los apoya guardando su secreto y protegiéndolos siempre que puede.\r\n\r\nNo hace muchos amigos, pero ella y Wyatt Langmore , a pesar de un comienzo difícil, terminan forjando una amistad.'),
(5, 'Ruth Langmore', 'Julia Garner', '../img/elenco/ruth.jpg', 'Julia Garner como Ruth Langmore en Ozark', 'otros', 0, 'Proveniente de una familia criminal empobrecida de los montes Ozark, la joven de 19 años es inicialmente presentada como una astuta ladrona. Sin embargo, su inteligencia para los negocios y su lealtad la llevan a convertirse en la mano derecha de Marty Byrde en sus operaciones de lavado de dinero.'),
(6, 'F.B.I Roy Petty', 'Jason Butler Harner', '../img/elenco/royPetty.jpg', 'Jason Butler Harner como Roy Petty en Ozark', 'otros', 0, 'Es un agente obsesivo, inestable y sociópata, dispuesto a manipular, chantajear o usar drogas para lograr sus objetivos. Su intensa cruzada personal contra Marty Byrde lo lleva a cruzar varios límites éticos y legales.'),
(7, 'Helen Pierce', 'Janet McTeer', '../img/elenco/helenPierce.jpg', 'Janet McTeer como Helen Pierce en Ozark', 'otros', 0, 'Está allí para asegurarse de que Marty y los Snell cumplan su parte del trato. Helen piensa que Wendy y Marty son un estorbo y planea echarlos.\r\n\r\nEs una mujer fría y calculadora, dispuesta a todo para ascender y complacer a su jefe, Omar Navarro . Al igual que Marty, tiende a reprimir sus emociones en situaciones de alta presión y a tomar decisiones difíciles.'),
(8, 'Wyatt Langmore', 'Charlie Tahan', '../img/elenco/wyattLangmore.jpg', 'Charlie Tahan como Wyatt Langmore en Ozark', 'otros', 0, 'Wyatt vive con su prima Ruth. Mantiene una relación con Charlotte Byrde. Es un personaje trágico que siempre toma decisiones impulsivas y peligrosas. Establece una buena relación con Charlotte,hija de los Byrde.'),
(9, 'Omar Navarro', 'Félix Solís', '../img/elenco/omarNavarro.jpg', 'Félix Solís como Omar Navarro en Ozark', 'otros', 0, 'Omar Navarro es el líder del cártel Navarro. También es, técnicamente, el jefe de Marty.\r\n\r\nMuy calculador y despiadado. Parece no importarle mucho la gente que lo rodea, siempre y cuando hagan lo que él quiere. Wendy y Marty intentan constantemente ganarse su aprobación.'),
(10, 'Camino Del Río', 'Esaí Morales', '../img/elenco/delRio.jpg', 'Esaí Morales como Del Rio en Ozark', 'otros', 0, 'Asesinó a Bruce Liddell(compañero de trabajo de Marty) y amenazaba frecuentemente a Marty. Según el FBI, era uno de los pocos lugartenientes de alto rango sin antecedentes penales, por lo que el cártel de Navarro lo utilizaba para viajar a Estados Unidos y regresar..'),
(11, 'Darlene Snell', 'Lisa Emery', '../img/elenco/dSnell.jpg', 'Lisa Emery como Darlene Snell en Ozark', 'otros', 0, 'Darlene está casada con Jacob Snell. Cuando ambos eran jóvenes, ella se aseguró de que Jacob se enamorara de ella por encima de cualquier otra mujer. Con el tiempo, se valió de su astucia para superar a Jacob y acabar con su vida.'),
(12, 'Jacob Snell', 'Peter Mullan', '../img/elenco/jSnell.jpg', 'Peter Mullan como Jacob Snell en Ozark', 'otros', 0, 'En comparación con su esposa Darlene, Jacob es más accesible, tiene un carácter más sereno y es de temperamento pausado. Sin embargo, es igual de frío y casi tan inflexible como ella; a menudo toleró su conducta homicida y estuvo de acuerdo con ella.\r\n\r\nJacob habla con calma y lentitud, y con frecuencia expresa sus ideas de manera críptica mediante parábolas y proverbios.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
