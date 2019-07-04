-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2019 a las 22:39:31
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
-- Base de datos: `katherin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nombre_admin` varchar(50) NOT NULL,
  `usuario_admin` varchar(50) NOT NULL,
  `pass_admin` varchar(60) NOT NULL,
  `editado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `nombre_admin`, `usuario_admin`, `pass_admin`, `editado`) VALUES
(1, '0', '0', '$2y$12$XTMobQJ/IfbJK0uN0C.l3OlGbVzurQ0InADV6NG7yHH5jWht3EOni', '2019-03-07'),
(2, 'Gabriel', 'tester', '$2y$12$jTeqqNwz8YP1gcCDbrUIcuNcQCOGmXYNQ0W4VgmeY2myiPHNv.hau', '2019-03-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE `blogs` (
  `id_blog` int(11) NOT NULL,
  `titulo_blog` varchar(60) NOT NULL,
  `contenido` longtext NOT NULL,
  `url_imagen_principal` longtext NOT NULL,
  `url_imagen_muestra` longtext NOT NULL,
  `editado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blogs`
--

INSERT INTO `blogs` (`id_blog`, `titulo_blog`, `contenido`, `url_imagen_principal`, `url_imagen_muestra`, `editado`) VALUES
(2, 'CUIDADO DE LA PIEL MIENTRAS DUERMES', '<p>\r\n\r\n</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et eleifend elit. Quisque blandit viverra placerat. Maecenas ac tristique quam, a aliquet nisl. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In elementum scelerisque pellentesque. Quisque in eleifend libero.</p><p>Nulla molestie non nunc nec interdum. Vestibulum et purus leo. Nunc malesuada tempus fringilla. Integer lacus turpis, tempus ac rhoncus vestibulum, feugiat nec lacus. Nulla tristique erat quis neque vestibulum cursus. Curabitur ullamcorper velit magna, at maximus metus consectetur ac. Maecenas id diam lorem. Curabitur ut pulvinar libero. Praesent congue lobortis leo, ac dignissim lorem mollis et. Suspendisse potenti. Duis vulputate est sapien, eget interdum risus vestibulum quis. Fusce tristique lacus in lacus iaculis, eget maximus mauris dapibus. Nunc metus mauris, dapibus id eros et, elementum pharetra magna. Curabitur egestas lacus id luctus dictum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p><p>Cras ac mauris in quam porttitor feugiat sit amet iaculis ligula. Nunc augue sapien, feugiat at ornare vitae, dapibus vitae magna. Donec et mauris nec orci pulvinar facilisis id sed turpis. Etiam a mollis ex, et vulputate metus. Fusce non urna leo. In hac habitasse platea dictumst. Mauris consequat dapibus leo et placerat. Etiam consequat id felis at blandit. Proin id sem quis lectus faucibus posuere. Donec a mauris et nunc imperdiet fermentum. Proin ac condimentum felis. Quisque quis efficitur leo. Cras enim nisi, maximus eu maximus sit amet, tincidunt id felis. Mauris at ipsum id ante eleifend congue vel ac arcu.</p>\r\n\r\n<br><p></p>', 'blog6-1.jpg', 'blog6.jpg', '2019-03-14'),
(3, 'La importancia del cuidado de la piel en verano', '<p>\r\n\r\n<p>Phasellus vulputate nulla ut neque efficitur mattis. Aenean iaculis ligula nisl, vel luctus massa condimentum vel. Vivamus eget vulputate justo, vel accumsan purus. Ut rhoncus ullamcorper imperdiet. Nunc facilisis magna vitae hendrerit vehicula. Praesent et sodales orci, commodo consectetur purus. Sed sagittis consectetur vulputate.</p><p>Pellentesque eleifend nunc orci, vitae porta sem ultrices ac. Nam volutpat ultrices lacus, a sollicitudin lorem aliquet vel. Sed ornare tempus felis, eget elementum ex molestie sed. Etiam vel tristique purus, eget sollicitudin nunc. Nunc tristique orci urna, ut dignissim nunc lobortis a. Duis efficitur et turpis a interdum. Nunc consectetur ut neque vitae varius. Sed consectetur augue et dolor sagittis, id mollis ipsum scelerisque. Ut rhoncus quam ac enim porta, nec tincidunt nibh iaculis. Nulla vehicula tellus egestas erat pharetra, vel laoreet ante pulvinar. Maecenas sodales lorem nec dapibus mollis. Nulla accumsan ut odio vel tincidunt. In pretium metus sed gravida auctor.</p><p>Aliquam nec est nec ante cursus suscipit. Pellentesque luctus congue massa. Nulla vestibulum dui eu purus dapibus cursus. Proin nulla dui, molestie pulvinar cursus vel, convallis in neque. Curabitur elementum auctor ipsum, sit amet varius eros dictum sed. Donec erat ipsum, gravida eleifend ornare porttitor, dapibus ut felis. Phasellus commodo elementum tincidunt. Maecenas nec est hendrerit, tincidunt ex vitae, pellentesque orci. Sed in tellus purus. Phasellus tincidunt mi vel libero convallis, at finibus nisl vestibulum. Fusce eget tincidunt ipsum. Proin ut ligula magna. Aenean ac augue finibus, faucibus augue nec, sollicitudin quam. Phasellus aliquam pulvinar ullamcorper.</p><p>Mauris nec luctus nulla, porta tristique arcu. Nunc ornare malesuada sodales. Mauris non auctor nisi, sed tincidunt odio. Quisque non justo non enim porta fermentum non sit amet arcu. Mauris vehicula a est in porttitor. Etiam sodales ornare nisi. In hac habitasse platea dictumst. Aliquam molestie commodo sem feugiat auctor. Aenean maximus mollis consectetur. Fusce lobortis elit nulla, sed tincidunt sapien accumsan at.</p><p>Sed lacus justo, consequat ac enim sit amet, pellentesque euismod sapien. Proin eu convallis libero, at venenatis diam. Aliquam quis libero sed urna malesuada ornare a eget eros. Morbi tincidunt tellus sapien, id blandit erat vestibulum eu. Vestibulum et faucibus augue. Sed enim enim, volutpat eu neque at, elementum blandit lacus. Cras nec fringilla felis. Phasellus at fermentum lorem. Sed et lacinia eros, in ultrices ante. Nullam gravida lectus massa, sit amet commodo justo eleifend ac. Ut et interdum justo, in dignissim leo. Vivamus viverra mauris suscipit, accumsan magna id, convallis libero. Etiam sapien quam, rutrum eget viverra et, posuere sed enim. Ut gravida, eros a viverra fermentum, ipsum mauris aliquam sem, eget semper odio orci non libero. Nulla interdum, tortor sed scelerisque ornare, sapien quam consectetur mauris, eu commodo justo neque non nisi. Vivamus vulputate risus rutrum pellentesque sodales.</p>\r\n\r\n<br></p>', 'blog3.jpg', 'blog3-1.jpg', '2019-03-14'),
(4, 'Los mejores lÃ¡sers para tu piel', '<p>\r\n\r\n<p>Phasellus vulputate nulla ut neque efficitur mattis. Aenean iaculis ligula nisl, vel luctus massa condimentum vel. Vivamus eget vulputate justo, vel accumsan purus. Ut rhoncus ullamcorper imperdiet. Nunc facilisis magna vitae hendrerit vehicula. Praesent et sodales orci, commodo consectetur purus. Sed sagittis consectetur vulputate.</p><p>Pellentesque eleifend nunc orci, vitae porta sem ultrices ac. Nam volutpat ultrices lacus, a sollicitudin lorem aliquet vel. Sed ornare tempus felis, eget elementum ex molestie sed. Etiam vel tristique purus, eget sollicitudin nunc. Nunc tristique orci urna, ut dignissim nunc lobortis a. Duis efficitur et turpis a interdum. Nunc consectetur ut neque vitae varius. Sed consectetur augue et dolor sagittis, id mollis ipsum scelerisque. Ut rhoncus quam ac enim porta, nec tincidunt nibh iaculis. Nulla vehicula tellus egestas erat pharetra, vel laoreet ante pulvinar. Maecenas sodales lorem nec dapibus mollis. Nulla accumsan ut odio vel tincidunt. In pretium metus sed gravida auctor.</p><p>Aliquam nec est nec ante cursus suscipit. Pellentesque luctus congue massa. Nulla vestibulum dui eu purus dapibus cursus. Proin nulla dui, molestie pulvinar cursus vel, convallis in neque. Curabitur elementum auctor ipsum, sit amet varius eros dictum sed. Donec erat ipsum, gravida eleifend ornare porttitor, dapibus ut felis. Phasellus commodo elementum tincidunt. Maecenas nec est hendrerit, tincidunt ex vitae, pellentesque orci. Sed in tellus purus. Phasellus tincidunt mi vel libero convallis, at finibus nisl vestibulum. Fusce eget tincidunt ipsum. Proin ut ligula magna. Aenean ac augue finibus, faucibus augue nec, sollicitudin quam. Phasellus aliquam pulvinar ullamcorper.</p><p>Mauris nec luctus nulla, porta tristique arcu. Nunc ornare malesuada sodales. Mauris non auctor nisi, sed tincidunt odio. Quisque non justo non enim porta fermentum non sit amet arcu. Mauris vehicula a est in porttitor. Etiam sodales ornare nisi. In hac habitasse platea dictumst. Aliquam molestie commodo sem feugiat auctor. Aenean maximus mollis consectetur. Fusce lobortis elit nulla, sed tincidunt sapien accumsan at.</p><p>Sed lacus justo, consequat ac enim sit amet, pellentesque euismod sapien. Proin eu convallis libero, at venenatis diam. Aliquam quis libero sed urna malesuada ornare a eget eros. Morbi tincidunt tellus sapien, id blandit erat vestibulum eu. Vestibulum et faucibus augue. Sed enim enim, volutpat eu neque at, elementum blandit lacus. Cras nec fringilla felis. Phasellus at fermentum lorem. Sed et lacinia eros, in ultrices ante. Nullam gravida lectus massa, sit amet commodo justo eleifend ac. Ut et interdum justo, in dignissim leo. Vivamus viverra mauris suscipit, accumsan magna id, convallis libero. Etiam sapien quam, rutrum eget viverra et, posuere sed enim. Ut gravida, eros a viverra fermentum, ipsum mauris aliquam sem, eget semper odio orci non libero. Nulla interdum, tortor sed scelerisque ornare, sapien quam consectetur mauris, eu commodo justo neque non nisi. Vivamus vulputate risus rutrum pellentesque sodales.</p>\r\n\r\n<br></p>', 'blog4.jpg', 'blog4-1.jpg', '2019-03-14'),
(5, 'Algo nuevo', '<p>\r\n\r\n<p>Phasellus vulputate nulla ut neque efficitur mattis. Aenean iaculis ligula nisl, vel luctus massa condimentum vel. Vivamus eget vulputate justo, vel accumsan purus. Ut rhoncus ullamcorper imperdiet. Nunc facilisis magna vitae hendrerit vehicula. Praesent et sodales orci, commodo consectetur purus. Sed sagittis consectetur vulputate.</p><p>Pellentesque eleifend nunc orci, vitae porta sem ultrices ac. Nam volutpat ultrices lacus, a sollicitudin lorem aliquet vel. Sed ornare tempus felis, eget elementum ex molestie sed. Etiam vel tristique purus, eget sollicitudin nunc. Nunc tristique orci urna, ut dignissim nunc lobortis a. Duis efficitur et turpis a interdum. Nunc consectetur ut neque vitae varius. Sed consectetur augue et dolor sagittis, id mollis ipsum scelerisque. Ut rhoncus quam ac enim porta, nec tincidunt nibh iaculis. Nulla vehicula tellus egestas erat pharetra, vel laoreet ante pulvinar. Maecenas sodales lorem nec dapibus mollis. Nulla accumsan ut odio vel tincidunt. In pretium metus sed gravida auctor.</p><p>Aliquam nec est nec ante cursus suscipit. Pellentesque luctus congue massa. Nulla vestibulum dui eu purus dapibus cursus. Proin nulla dui, molestie pulvinar cursus vel, convallis in neque. Curabitur elementum auctor ipsum, sit amet varius eros dictum sed. Donec erat ipsum, gravida eleifend ornare porttitor, dapibus ut felis. Phasellus commodo elementum tincidunt. Maecenas nec est hendrerit, tincidunt ex vitae, pellentesque orci. Sed in tellus purus. Phasellus tincidunt mi vel libero convallis, at finibus nisl vestibulum. Fusce eget tincidunt ipsum. Proin ut ligula magna. Aenean ac augue finibus, faucibus augue nec, sollicitudin quam. Phasellus aliquam pulvinar ullamcorper.</p><p>Mauris nec luctus nulla, porta tristique arcu. Nunc ornare malesuada sodales. Mauris non auctor nisi, sed tincidunt odio. Quisque non justo non enim porta fermentum non sit amet arcu. Mauris vehicula a est in porttitor. Etiam sodales ornare nisi. In hac habitasse platea dictumst. Aliquam molestie commodo sem feugiat auctor. Aenean maximus mollis consectetur. Fusce lobortis elit nulla, sed tincidunt sapien accumsan at.</p><p>Sed lacus justo, consequat ac enim sit amet, pellentesque euismod sapien. Proin eu convallis libero, at venenatis diam. Aliquam quis libero sed urna malesuada ornare a eget eros. Morbi tincidunt tellus sapien, id blandit erat vestibulum eu. Vestibulum et faucibus augue. Sed enim enim, volutpat eu neque at, elementum blandit lacus. Cras nec fringilla felis. Phasellus at fermentum lorem. Sed et lacinia eros, in ultrices ante. Nullam gravida lectus massa, sit amet commodo justo eleifend ac. Ut et interdum justo, in dignissim leo. Vivamus viverra mauris suscipit, accumsan magna id, convallis libero. Etiam sapien quam, rutrum eget viverra et, posuere sed enim. Ut gravida, eros a viverra fermentum, ipsum mauris aliquam sem, eget semper odio orci non libero. Nulla interdum, tortor sed scelerisque ornare, sapien quam consectetur mauris, eu commodo justo neque non nisi. Vivamus vulputate risus rutrum pellentesque sodales.</p>\r\n\r\n<br></p>', 'blog1.jpg', 'blog2.jpg', '2019-03-14'),
(6, 'Reconstruye tu lÃ³bulo', '<p>\r\n\r\n<p>Phasellus vulputate nulla ut neque efficitur mattis. Aenean iaculis ligula nisl, vel luctus massa condimentum vel. Vivamus eget vulputate justo, vel accumsan purus. Ut rhoncus ullamcorper imperdiet. Nunc facilisis magna vitae hendrerit vehicula. Praesent et sodales orci, commodo consectetur purus. Sed sagittis consectetur vulputate.</p><p>Pellentesque eleifend nunc orci, vitae porta sem ultrices ac. Nam volutpat ultrices lacus, a sollicitudin lorem aliquet vel. Sed ornare tempus felis, eget elementum ex molestie sed. Etiam vel tristique purus, eget sollicitudin nunc. Nunc tristique orci urna, ut dignissim nunc lobortis a. Duis efficitur et turpis a interdum. Nunc consectetur ut neque vitae varius. Sed consectetur augue et dolor sagittis, id mollis ipsum scelerisque. Ut rhoncus quam ac enim porta, nec tincidunt nibh iaculis. Nulla vehicula tellus egestas erat pharetra, vel laoreet ante pulvinar. Maecenas sodales lorem nec dapibus mollis. Nulla accumsan ut odio vel tincidunt. In pretium metus sed gravida auctor.</p><p>Aliquam nec est nec ante cursus suscipit. Pellentesque luctus congue massa. Nulla vestibulum dui eu purus dapibus cursus. Proin nulla dui, molestie pulvinar cursus vel, convallis in neque. Curabitur elementum auctor ipsum, sit amet varius eros dictum sed. Donec erat ipsum, gravida eleifend ornare porttitor, dapibus ut felis. Phasellus commodo elementum tincidunt. Maecenas nec est hendrerit, tincidunt ex vitae, pellentesque orci. Sed in tellus purus. Phasellus tincidunt mi vel libero convallis, at finibus nisl vestibulum. Fusce eget tincidunt ipsum. Proin ut ligula magna. Aenean ac augue finibus, faucibus augue nec, sollicitudin quam. Phasellus aliquam pulvinar ullamcorper.</p><p>Mauris nec luctus nulla, porta tristique arcu. Nunc ornare malesuada sodales. Mauris non auctor nisi, sed tincidunt odio. Quisque non justo non enim porta fermentum non sit amet arcu. Mauris vehicula a est in porttitor. Etiam sodales ornare nisi. In hac habitasse platea dictumst. Aliquam molestie commodo sem feugiat auctor. Aenean maximus mollis consectetur. Fusce lobortis elit nulla, sed tincidunt sapien accumsan at.</p><p>Sed lacus justo, consequat ac enim sit amet, pellentesque euismod sapien. Proin eu convallis libero, at venenatis diam. Aliquam quis libero sed urna malesuada ornare a eget eros. Morbi tincidunt tellus sapien, id blandit erat vestibulum eu. Vestibulum et faucibus augue. Sed enim enim, volutpat eu neque at, elementum blandit lacus. Cras nec fringilla felis. Phasellus at fermentum lorem. Sed et lacinia eros, in ultrices ante. Nullam gravida lectus massa, sit amet commodo justo eleifend ac. Ut et interdum justo, in dignissim leo. Vivamus viverra mauris suscipit, accumsan magna id, convallis libero. Etiam sapien quam, rutrum eget viverra et, posuere sed enim. Ut gravida, eros a viverra fermentum, ipsum mauris aliquam sem, eget semper odio orci non libero. Nulla interdum, tortor sed scelerisque ornare, sapien quam consectetur mauris, eu commodo justo neque non nisi. Vivamus vulputate risus rutrum pellentesque sodales.</p>\r\n\r\n<br></p>', 'blog5.jpg', 'blog-5-1.jpg', '2019-03-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(80) NOT NULL,
  `editado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`, `editado`) VALUES
(1, 'Faciales', '2019-03-07'),
(2, 'Dermatología Estética', '2019-03-08'),
(3, 'Dermatología Láser', '2019-03-11'),
(4, 'Dermatología Clínica', '2019-04-24'),
(5, 'Otros', '2019-03-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `telefono_cliente` varchar(50) NOT NULL,
  `correo_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscritos`
--

CREATE TABLE `suscritos` (
  `id_suscrito` int(11) NOT NULL,
  `email_suscrito` varchar(100) NOT NULL,
  `estado` int(1) NOT NULL,
  `editado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `suscritos`
--

INSERT INTO `suscritos` (`id_suscrito`, `email_suscrito`, `estado`, `editado`) VALUES
(1, 'gabrielalejandro_21_12@hotmail.com', 1, '2019-04-25'),
(2, 'gabrielalejandro_21_12@hotmail.com', 1, '2019-04-25'),
(3, 'gabrielalejandro_21_12@hotmail.com', 1, '2019-04-25'),
(4, 'gabrielalejandro_21_12@hotmail.com', 1, '2019-04-25'),
(5, 'gabriel12martinez21@gmail.com', 1, '2019-04-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

CREATE TABLE `tratamientos` (
  `id_tratamiento` int(11) NOT NULL,
  `nombre_tratamiento` varchar(80) NOT NULL,
  `contenido` longtext NOT NULL,
  `url_imagen_principal` longtext NOT NULL,
  `url_imagen_secundario` longtext NOT NULL,
  `url_caso` longtext NOT NULL,
  `editado` date NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tratamientos`
--

INSERT INTO `tratamientos` (`id_tratamiento`, `nombre_tratamiento`, `contenido`, `url_imagen_principal`, `url_imagen_secundario`, `url_caso`, `editado`, `categoria`) VALUES
(7, 'Vitamina C', '<p>La Vitamina C es un potente\r\nantioxidante, ayuda a fortalecer tu sistema inmunolÃ³gico, es Ã³ptima para la\r\nprevenciÃ³n de lesiÃ³n oxidativa del ADN. Ayuda a la formaciÃ³n de ColÃ¡geno para\r\nla piel , nos ayuda a tener los \r\nligamentos de las  articulaciones\r\nmÃ¡s fuertes en deportistas, EstrÃ©s, Ansiedad, Artritis Reumatoide, Artrosis,\r\nPacientes con enfermedades cardiovasculares, pancreatitis, Acelerar el proceso\r\nde curaciÃ³n de heridas, lesiones y quemaduras, facilitar la absorciÃ³n de otras\r\nvitaminas y minerales, disminuir la incidencia de coÃ¡gulos en las venas,\r\ncirugÃ­as y fracturas. Pacientes con enfermedades como Psoriasis , Vitiligo ,\r\nAcne entre otras son personas que se pueden beneficiar con esta megadosis de\r\nvitamina . Tambien es  usado para mejorar\r\nsÃ­ntomas posterior a quimioterapia o radioterapia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>La dosis idÃ³nea serÃ¡ planteada\r\npor su medico especialista  asi como la\r\nde mantenimiento .</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>En nuestro centro usted solo\r\nvenga y relajese mientras su vitamina ce es\r\naplicada en la vena . </p>', 'vitamina c.jpg', 'vitaminac-show.jpg', 'caso-vitamina.jpg', '2019-04-24', 5),
(8, 'LASER CO2 FRACCIONADO PARA REJUVENECIMIENTO DE MANOS ', '<p>\r\n\r\n</p><p>Las manos hoy en\r\ndia tambiÃ©n son un estigma de envejecimiento por lo que tambiÃ©n tenemos\r\nopciones de tratamiento para ellas. </p>\r\n\r\n<p>El laser co2\r\nfraccionado nos ayudara a mejorar la piel y las manchas de las manos ,\r\nusualmente se requiere una sesiÃ³n y el cambio es espectacular . </p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<br><p></p>', 'laser manos.jpg', 'laser manos muestra.jpg', 'antesydespues manos.jpg', '2019-04-25', 3),
(10, 'LASER CO2 FRACCIONADO PARA CICATRICES EN GENERAL ', '<p></p><p>La resencia de\r\ncicatrices pueden molestarnos dia a dia , es por ello que contamos con laser\r\nco2  fraccionado para mejorar , atenuar o\r\ndisminuir la apariencia de las cicatrices.</p>\r\n\r\n<p>Se realiza 1\r\nsesion al mes y el numero de sesiones dependerÃ¡ de la complejidad de la\r\ncicatriz </p>\r\n\r\n<p>En otros casos\r\ntambiÃ©n se puede agregar tratamientos tipo inflitraciones  u otros tipo de laser segÃºn sea el caso\r\n. &nbsp; </p>\r\n\r\n\r\n\r\n\r\n\r\n<br><p></p>', 'cicatriz.jpg', 'cicatriz muestra.jpg', 'antesydespues laser co2.jpeg', '2019-04-25', 3),
(11, 'LASER SPECTRA PARA MANCHAS O MELASMA O CLOASMA ', '<p></p><p>El Melasma o\r\nCloasma o manchas en la cara es una enfermedad en la cual la piel presenta\r\nmanchas de color oscuo tipo parche que puede estar en mejillas , mejillas y\r\nfrente o en todo el rostro .<br></p>\r\n\r\n<p>Esta enfermedad\r\nempeora en los meses de verano y puede tomar una apariencia menos oscura en\r\ninvierno , sin embargo es un problema de piel que se puede CONTROLAR .</p>\r\n\r\n<p>El laser SPECTRA\r\nes un laser que NO quema , solo ataca directamente al melanocito que es la\r\ncelula encargada de la coloraciÃ³n oscura , y entonces lograremos una\r\ndisminuciÃ³n de la mancha o en el mejor de los casos una desapariciÃ³n de la\r\nmisma .</p>\r\n\r\n<p>Junto con el\r\nlaser el paciente deberÃ¡ usar cremas despigmentantes y ademÃ¡s bloqueador solar\r\nde manera constante para poder mantener el efecto de blanqueamiento logrado con\r\nel laser .</p>\r\n\r\n<p>Las sesiones se\r\nrealizan 1 vez a la semana , pueden ser de 5 a 10 sesiones dependiendo de la\r\ncomplejidad de cada caso y lo mejor de todo es que este laser NO necesita\r\nNINGUN tipo de descanso , usted puede volver a su actividad normal el mismo dia\r\n. </p>\r\n\r\n\r\n\r\n\r\n\r\n<br><p></p>', 'manchas.jpg', 'manchas2.jpg', 'antesydespues laser manchas.jpeg', '2019-03-08', 3),
(12, 'LASER EXCIMER PARA VITILIGO ', '<p></p><p></p><p>El Vitiligo es\r\nuna enfermedad que se caracteriza por la presencia de manchas blancas color\r\nleche en la piel que son muy antiestÃ©ticas para lo que sufren de esta\r\nenfermedad  es por eso que contamos con\r\nla luz excimer .</p>\r\n\r\n<p>La luz excimer ha\r\nsido creada para ayudar a que la piel blanca con vitÃ­ligo retome su color\r\nregular de manera mucho mas rÃ¡pida y eficaz que los tratamientos con cremas\r\nconvencionales .</p>\r\n\r\n<p>Se realiza 1 a 2\r\nsesiones semanales, segÃºn sea el caso . </p>\r\n\r\n<p>Es totalmente\r\nindoloro </p>\r\n\r\n<p>No requiere\r\nreposo.</p>\r\n\r\n\r\n\r\n\r\n\r\n<p> </p>\r\n\r\n\r\n\r\n\r\n\r\n<br><p></p>', 'vitiligo.jpg', 'vitiligo-muestra.jpg', 'antesydespues vitiligo.jpg', '2019-04-25', 3),
(13, 'LASER PARA ROSACEA', '<p></p><p></p><p></p><p>La Rosacea es una\r\nenfermedad caracterizada por el enrojecimiento de la piel y la apariciÃ³n de venitas\r\nque resultan muy incomodas &nbsp;en el rostro .</p>\r\n\r\n<p>La Rosacea aunque\r\nes una enfermedad de piel que No tiene cura , si es posible su control y\r\nmejorÃ­a a travÃ©s de tratamientos Laser como Nd. Yag y Luz Pulsada .</p>\r\n\r\n<p>Las sesiones son\r\nsemanales a quincenales segÃºn sea el caso </p>\r\n\r\n<p>No produce mayor\r\nmolestia </p>\r\n\r\n<p>Muy buenos\r\nresultados </p>\r\n\r\n\r\n\r\n\r\n\r\n<p></p>\r\n\r\n\r\n\r\n\r\n\r\n<p> </p>\r\n\r\n\r\n\r\n\r\n\r\n<br><p></p>', 'rosacea.jpg', 'rosacea-muestra.jpg', 'antesydespues rosaceas.jpg', '2019-04-25', 3),
(14, 'LASER PARA HONGOS EN LAS UÃ‘AS', '<p></p><p></p><p></p><p></p><p>La apariciÃ³n de\r\nhongos en las uÃ±as es una enfermedad muy comÃºn en las personas , resulta ser\r\nuna enfermedad muy incomoda ya que las uÃ±as enfermas tiene un aspectos poco\r\nestÃ©tico y desagradable .</p>\r\n\r\n<p>Sin embargo\r\ncontamos con tratamientos Laser para tratar esta enfermedad y lograr una buena\r\nefectividad en resultados . </p>\r\n\r\n<p>Las sesiones son\r\nsemanales o dos veces a la semana segÃºn sea el caso </p>\r\n\r\n<p>No requiere\r\nreposo </p>\r\n\r\n<p>No debe venir con\r\nlas uÃ±as pintadas</p>\r\n\r\n<p>Puede requerir de\r\ntratamiento medico complementario .</p>\r\n\r\n\r\n\r\n\r\n\r\n<p> </p>\r\n\r\n\r\n\r\n\r\n\r\n<p></p>\r\n\r\n\r\n\r\n\r\n\r\n<p> </p>\r\n\r\n\r\n\r\n\r\n\r\n<br><p></p>', 'hongos.jpg', 'hongos muestra.jpg', 'antesydespues uÃ±as.jpeg', '2019-04-25', 3),
(15, 'HILOS DE DERMOSUSTENTACION ', '<p>\r\n\r\n</p><p></p><p>Los hilos de\r\ndermosustentacion son aquellos que colocamos en la parte alta del rostro para\r\nsustentar o elevar la zona caÃ­da de los JAWLS o reborde del rostro . </p>\r\n\r\n<p>Los hilos de\r\ndermosustentacion NO reemplazan una cirugÃ­a plÃ¡stica pero si son usados para\r\nperfilar y proyectar el rostro de una manera muy fina </p>\r\n\r\n\r\n\r\n\r\n\r\n<p></p>\r\n\r\n\r\n\r\n\r\n\r\n<p></p>\r\n\r\n\r\n\r\n\r\n\r\n<p> </p>\r\n\r\n\r\n\r\n\r\n\r\n<p></p>\r\n\r\n\r\n\r\n\r\n\r\n<p> </p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<br><p></p>', 'hilos tensores.jpeg', 'hilos tensores muestra.jpg', 'antesydespues hilos pdo.jpg', '2019-04-25', 2),
(16, 'LASER PARA ACNE ACTIVO ', '<p>\r\n\r\n</p><p></p><p></p><p>La apalabra acnÃ©\r\nresulta muy temida para muchos adolescentes pero recordemos que el acnÃ© tambine\r\npuede aparecer en personas adultas .</p>\r\n\r\n<p>El tratamiento de\r\nacnÃ© activo tiene como pilar principal el uso de medicamentos indicados por el\r\nmedico especialista , sin embargo , el uso de laser complementario nos puede\r\nayudar a disminuir la apariciÃ³n de esos brotes de acnÃ© tan incomodos en el\r\nrostro . </p>\r\n\r\n<p>Es indoloro </p>\r\n\r\n<p>Puede realizar su\r\nvida normal luego del laser </p>\r\n\r\n<p>Requiere pocas\r\nsesiones.</p>\r\n\r\n\r\n\r\n\r\n\r\n<br><p></p>', 'acne.jpg', 'acne muestra.jpg', 'antesydespues acne.jpg', '2019-04-25', 4),
(17, 'LASER DEPILACION  ', '<p>\r\n\r\n<p></p><p></p><p></p><p>Hoy en dia con la\r\ntecnologÃ­a laser ya no es necesario asistir a sesiones incomodas y\r\nmartirizantes de cera , ahora contamos con la tecnologÃ­a laser .</p>\r\n\r\n<p>El laser actua\r\ndebilitando progresivamente el vello de tal forma que su crecimiento se vera\r\nmuy disminuido , si bien es cierto no podemos hablar de depilaciÃ³n permanente ,\r\npodemos referirnos a depilaciÃ³n a largo plazo sin esos vellos incomodos .</p>\r\n\r\n<p>Las sesiones son\r\nmensuales</p>\r\n\r\n<p>Son indoloras </p>\r\n\r\n<p>Y como efecto\r\nsecundario en algunas pacientes incluso tienen efecto despigmentante .</p>\r\n\r\nLos paquetes de laser son de 5 sesiones , sin embargo\r\nnotaremos los cambios desde la primera sesiÃ³n .\r\n\r\n\r\n\r\n<br></p>', 'depilacion.jpg', 'depilacion muestra.jpg', '', '2019-03-08', 3),
(18, 'MEGADOSIS DE VITAMINA C ENDOVENOSA ', '<p>\r\n\r\n<p></p><p></p><p></p><p></p><p>La Vitamina C es un potente\r\nantioxidante, ayuda a fortalecer tu sistema inmunolÃ³gico, es Ã³ptima para la\r\nprevenciÃ³n de lesiÃ³n oxidativa del ADN. Ayuda a la formaciÃ³n de ColÃ¡geno para\r\nla piel , nos ayuda a tener los \r\nligamentos de las  articulaciones\r\nmÃ¡s fuertes en deportistas, EstrÃ©s, Ansiedad, Artritis Reumatoide, Artrosis,\r\nPacientes con enfermedades cardiovasculares, pancreatitis, Acelerar el proceso\r\nde curaciÃ³n de heridas, lesiones y quemaduras, facilitar la absorciÃ³n de otras\r\nvitaminas y minerales, disminuir la incidencia de coÃ¡gulos en las venas,\r\ncirugÃ­as y fracturas. Pacientes con enfermedades como Psoriasis , Vitiligo ,\r\nAcne entre otras son personas que se pueden beneficiar con esta megadosis de\r\nvitamina . Tambien es  usado para mejorar\r\nsÃ­ntomas posterior a quimioterapia o radioterapia.</p>\r\n\r\n<p>La dosis idÃ³nea serÃ¡ planteada\r\npor su medico especialista  asi como la\r\nde mantenimiento .</p>\r\n\r\n<p>En nuestro centro usted solo\r\nvenga y relajese mientras su vitamina ce es\r\naplicada en la vena . </p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 'megavitamina.jpg', 'megavitamina-muestra.jpg', '', '2019-03-08', 5),
(19, 'LIMPIEZA FACIAL OXYCRYO ', '<p></p><p>Nuestra limpieza\r\nfacial OXYCRYO es un facial Ãºnico aprobado por la FDA como facial con oxigeno\r\npuro para TODO tipo de piel .</p>\r\n\r\n<p>Pieles con\r\nRosacea, acnÃ© Activo , pieles ultrasensibles pueden ser tratadas con nuestro\r\nOxycryo y se verÃ¡n totalmente beneficiadas con las ventajas del oxigeno . </p>\r\n\r\n<p>El oxycryo usa\r\nTODOS los productos basados en moleculas de Oxigeno . </p>\r\n\r\n\r\n\r\n\r\n\r\n<br><p></p>', 'limpieza.jpg', 'limpieza muestra.jpg', 'antesydespues oxycryo.jpeg', '2019-04-25', 1),
(20, 'LASER SPECTRA HOLLYWOOD PEEL PARA POROS ABIERTOS', '<p>\r\n\r\n</p><p><strong>Hollywood Peel</strong>&nbsp;o <strong>Hollywood Laser Peel</strong>&nbsp;es un tratamiento lÃ¡ser que ayuda a rejuvenecer la apariencia de la piel daÃ±ada o envejecida. Este suave tratamiento es seguro en todos los tipos de piel y en cualquier momento del aÃ±o, <strong>incluso en verano</strong>. Es perfecto para mejorar tu piel facial tanto de imperfecciones cutÃ¡neas como de manchas sin el tiempo de recuperaciÃ³n que requieren otros tratamientos laser.</p><p>Al mismo tiempo disminuye el diÃ¡metro de los poros dilatados que denota el paso del tiempo o envejecimiento y el daÃ±o de la exposiciÃ³n solar incluso en personas jÃ³venes.</p><p>Otra problema que soluciona y mejora el <strong>Hollywood Peel</strong>&nbsp;o <strong>Spectra Peel</strong>&nbsp;son las ojeras pigmentarias. Esas manchas de la ojera en el parpado inferior tambiÃ©n pueden verse mejoradas a travÃ©s de este tratamiento.</p><p>El tratamiento puede ser utilizado una sola vez (por ejemplo justo antes de un evento importante como boda, graduaciÃ³n, casting, etc) con ya una inicial mejorÃ­a pero lo indicado es cumplir las 4 a 6 sesiones del tratamiento.</p>\r\n\r\n<br><p></p>', 'hollywood peel 1072x640.jpg', 'hollywood peel 275X324.jpg', 'antesydespues spectra.jpg', '2019-04-25', 1),
(21, 'LIMPIEZA FACIAL PARA ACNE ACTIVO ', '<p>\r\n\r\n</p><p><strong></strong></p>Este procedimiento garantiza una adecuada higiene facial, mediante una serie de pasos que permiten liberar la piel de impurezas y cÃ©lulas muertas.<p></p><p>\r\n\r\n</p><p>Para combatirlo, la Doctora Kateryn Perez Willis propone dos tipos de programas, los cuales, una vez que acudas a la primera consulta informativa se ajustarÃ¡n y personalizarÃ¡n en base a tus necesidades.</p><p>Esta afecciÃ³n no se debe a una causa exacta, pero influye el aumento hormonal provocado en la adolescencia, asÃ­ como los cambios hormonales que producen en el embarazo. TambiÃ©n afecta el uso de anticonceptivos, ciertos medicamentos que contengan esteroides, estrÃ³genos, testosterona, y el uso de cremas y maquillajes con alto contenido en grasas. AsÃ­ como una humedad excesiva y un alto grado de sudor.</p>\r\n\r\n<br>&nbsp;\r\n\r\n<p></p>\r\n\r\n<br><p></p>', 'facial acnÃ© 1072x640.jpg', 'facial acnÃ© 275X324.jpg', '', '2019-04-15', 1),
(23, 'LASER SPECTRA PARA LENTIGOS SOLARES', '<p>\r\n\r\n</p><p><strong></strong></p><p></p><p></p>\r\n\r\nLos <b>lentigos solares </b>consisten en una hiperproducciÃ³n de las cÃ©lulas denominadas melanocitos, las encargadas de producir melanina. Generalmente aparecen en cara, cuello, manos y escote, ya que se generan por un cÃºmulo de radiaciones ultravioletas del sol. Aunque son mÃ¡s propensos a aparecer en pieles maduras, a partir de los 40 aÃ±os, los lentigos solares pueden darse prÃ¡cticamente a cualquier edad, dependiendo del &nbsp;grado de daÃ±o solar de la piel. Si bien es cierto que, en la mayor parte de los casos, no son peligrosos para la salud, pero pueden resultar antiestÃ©ticos, por lo que resulta recomendable tratarlos con el lÃ¡ser Spectra llegado el momento.<div><br></div><div>\r\n\r\nLos lÃ©ntigos que no se asocian al sol o la edad y que se presentan desde el nacimiento o la infancia pueden estar asociados a sÃ­ndromes genÃ©ticos.\r\n\r\n<br>&nbsp;\r\n\r\n<p></p>\r\n\r\n\r\n\r\n\r\n\r\n<p><br>&nbsp;\r\n\r\n</p><p></p>\r\n\r\n<br><p></p></div>', 'Lentigos solares 1072x640.jpg', 'Lentigos solares 275X324.jpg', 'antesydespues laser manchas.jpeg', '2019-04-25', 3),
(24, 'TENSADO DE ROSTRO 4D INFINI MAS HIFU', '<p>\r\n\r\n</p><p><strong></strong></p><p></p><p></p>\r\n\r\n<p>El tensado 4D es\r\nlo ultimo en protocolos de tensado .  lo\r\nllamamos asi porque se realiza una hiperestimulacion de colÃ¡geno  y tensado en todas las capas de la piel y\r\nademÃ¡s en el musculo, contamos con dos maquinas trabajando al mismo tiempo ,\r\npor un lado el HIFU que trabajara a nivel muscular y por otro lado el INFINI\r\nque trabajara en los diferentes niveles de la piel .</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ahora ya no dudes\r\nmas â€¦â€¦atrÃ©vete a lucir una piel firme y tensa con el Tensado 4D</p>\r\n\r\n\r\n\r\n\r\n\r\n<div>\r\n<br>&nbsp;\r\n\r\n<p></p>\r\n\r\n\r\n\r\n\r\n\r\n<p><br>&nbsp;\r\n\r\n</p><p></p>\r\n\r\n<br><p></p></div>', 'lifting face 4d 1072x640.jpg', 'lifting face 4d 275X324.jpg', 'antesydespues tensado.jpg', '2019-04-25', 2),
(25, 'APLICACIÃ“N DE BOTOX ', '<p><p>Las\r\nmujeres siempre queremos vernos bellas, guapas y jÃ³venes, afortunadamente hoy\r\nen dÃ­a la ciencia mÃ©dica nos favorece y tenemos a nuestra disposiciÃ³n\r\ndiferentes procedimientos estÃ©ticos que nos ayudarÃ¡n a mantener la juventud por\r\nmÃ¡s tiempo. Tal es el caso de la toxina botulÃ­nica tipo A ( BOTOX o DYSSPORT ) &nbsp;que se puede aplicar en diferentes zonas del\r\nrostro.</p>\r\n\r\n<p>La\r\ntoxina botulÃ­nica ( BOTOX O DYSSPORT ) &nbsp;se ha convertido en uno de los tratamientos\r\nmÃ¡s populares y preferido por las mujeres (y por hombres tambiÃ©n) que corrige\r\nlas visibles lÃ­neas de expresiÃ³n que aparecen en el rostro al paso de los aÃ±os.</p>\r\n\r\n<p>La\r\naplicaciÃ³n es sumamente sencilla pero siempre deberÃ¡ ser realizada por un\r\nmedico especilista y conocedor de la musculatura facial para tener los efectos\r\ndeseados .</p>\r\n\r\n<p>Es\r\nel medico especialista quien calculara la dosis que es individual para cada\r\npaciente , mientras mas zonas a tratar usaremos mas unidades y mientras menos zonas\r\na tratar usaremos menos unidades , la aplicaciÃ³n se realizara a travÃ©s de\r\npequeÃ±as micropunciones en el musculo con una agujita minÃºscula y usualmente no\r\nqueda huella de la aplicaciÃ³n</p>\r\n\r\nLos efectos se podrÃ¡n apreciar luego de 7 a 10\r\ndias de haber aplicado el producto y el resultado sumamente natural .\r\nSimplemente mas fresca.<br></p>', 'botox.jpeg', 'botox-muestra.jpeg', 'antesydespues botox.jpg', '2019-04-24', 2),
(26, 'Ãcido HialurÃ³nico', '<p>Con el paso de los aÃ±os perdemos algunos volÃºmenes y proyecciones en el rostro y entonces se nos forman algunas sombras ,es por esto que existe el acido hialuronico como\r\nsustancia esencial para la restituciÃ³n de estos volÃºmenes.<br></p><p></p><p>&nbsp;</p>\r\n\r\n<p>En nuestro centro\r\nrealizamos la aplicaciÃ³n del acido hialuronico con microcanulas para evitar la\r\npuncion de otros vasitos importantes y evitar el riesgo de moretones e\r\ninflamaciÃ³n.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hemos sido\r\naltamente capacitados para las tÃ©cnicas en perfeccionamiento y aplicaciÃ³n de\r\nacido hialuronico .</p>\r\n\r\n<p>Podemos corregir\r\nzonas como ojeras , surco nasogeniano, contorno de labios, lÃ­neas de marioneta,\r\npomulos, arcos cigomÃ¡tico , mentÃ³n , entre otros .</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Luego de la\r\naplicaciÃ³n el paciente podrÃ¡ volver a su rutina diaria sin problema ni\r\nmolestias . </p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ademas en nuestro\r\ncentro tambiÃ©n contamos con Hialuronidasa , enzima capaz de diluir el acido\r\nhialuronico en minutos en caso el paciente no se sienta satisfecho con la\r\naplicaciÃ³n .</p>\r\n\r\n<p>Consideramos que\r\nel acido hialuronico es uno de los rellenos mas seguros en el mundo de la\r\ncosmÃ©tica por su bello efecto de volumen y a la vez revitalizador de piel .</p>\r\n\r\n<p><br></p><p></p>', 'acido principal.jpg', 'acido muestra.jpg', 'antesydespues acido.jpg', '2019-04-24', 2),
(27, 'LASER PARA ROSACEA', '<p></p><p></p><p></p><p>La Rosacea es una\r\nenfermedad caracterizada por el enrojecimiento de la piel y la apariciÃ³n de venitas\r\nque resultan muy incomodas &nbsp;en el rostro .</p>\r\n\r\n<p>La Rosacea aunque\r\nes una enfermedad de piel que No tiene cura , si es posible su control y\r\nmejorÃ­a a travÃ©s de tratamientos Laser como Nd. Yag y Luz Pulsada .</p>\r\n\r\n<p>Las sesiones son\r\nsemanales a quincenales segÃºn sea el caso </p>\r\n\r\n<p>No produce mayor\r\nmolestia </p>\r\n\r\n<p>Muy buenos\r\nresultados </p>\r\n\r\n\r\n\r\n\r\n\r\n<p></p>\r\n\r\n\r\n\r\n\r\n\r\n<p> </p>\r\n\r\n\r\n\r\n\r\n\r\n<br><p></p>', 'rosacea.jpg', 'rosacea-muestra.jpg', 'antesydespues rosaceas.jpg', '2019-04-25', 4),
(28, 'LASER PARA HONGOS EN LAS UÃ‘AS', '<p></p><p></p><p></p><p></p><p>La apariciÃ³n de\r\nhongos en las uÃ±as es una enfermedad muy comÃºn en las personas , resulta ser\r\nuna enfermedad muy incomoda ya que las uÃ±as enfermas tiene un aspectos poco\r\nestÃ©tico y desagradable .</p>\r\n\r\n<p>Sin embargo\r\ncontamos con tratamientos Laser para tratar esta enfermedad y lograr una buena\r\nefectividad en resultados . </p>\r\n\r\n<p>Las sesiones son\r\nsemanales o dos veces a la semana segÃºn sea el caso </p>\r\n\r\n<p>No requiere\r\nreposo </p>\r\n\r\n<p>No debe venir con\r\nlas uÃ±as pintadas</p>\r\n\r\n<p>Puede requerir de\r\ntratamiento medico complementario .</p>\r\n\r\n\r\n\r\n\r\n\r\n<p> </p>\r\n\r\n\r\n\r\n\r\n\r\n<p></p>\r\n\r\n\r\n\r\n\r\n\r\n<p> </p>\r\n\r\n\r\n\r\n\r\n\r\n<br><p></p>', 'hongos.jpg', 'hongos muestra.jpg', 'antesydespues uÃ±as.jpeg', '2019-04-25', 4),
(29, 'Peeling QuÃ­mico', '<p></p><p>A travÃ©s de una\r\nformula especial lograremos sacar algunas capas de piel y asÃ­ deshacernos de\r\nalgunas manchas o arrugas que nos incomoden . </p>\r\n\r\nEl tipo de peeling a utilizar dependerÃ¡ de cada tipo\r\nde piel y problema a tratar ,  segÃºn el\r\ntipo de peeling que usemos podrÃ­amos requerir un tiempo de pelado o no . \r\n\r\n\r\n\r\n<br><p></p>', 'peeling principal.jpeg', 'peeling muestra.jpeg', 'antesydespues peeling.jpg', '2019-04-24', 2),
(30, 'Plasma Rico En Plaquetas', '<p><p>La\r\nbioestimulaciÃ³n con plasma rico en plaquetas (PRP) es un procedimiento autÃ³logo,\r\nes decir, que se realiza con sangre extraÃ­da en forma indolora del mismo\r\npaciente. Su objetivo es retroceder las seÃ±ales comunes del envejecimiento de\r\nla piel en el Ã¡rea facial, cuello y manos. </p>\r\n\r\n<p>La\r\nbioestimulaciÃ³n con plasma rico en plaquetas permite retrasar el proceso de\r\nenvejecimiento de la piel. Activa la regeneraciÃ³n celular, lo que permite\r\nobtener una mejor calidad de piel, mÃ¡s luminosa y lozana, con mejor textura. </p>\r\n\r\n<p><b>&nbsp;</b>Al ser un\r\ntratamiento autÃ³logo (se obtiene sangre del propio paciente) no conlleva riesgos\r\nde alergias ni reacciones de incompatibilidad, lo que hace que sea un\r\nprocedimiento seguro para el paciente. Este procedimiento, si bien es sencillo,\r\nse realiza en un consultorio de forma ambulatoria, con un equipo de\r\nprofesionales mÃ©dicos .</p>\r\n\r\n<p>Es recomendable\r\ncuando se empieza a observar que la piel pierde colÃ¡geno y su capacidad de\r\nregenaciÃ³n celular. Se puede aplicar a modo de tratamiento preventivo, en el\r\ncaso de las pieles mÃ¡s jÃ³venes, o como restitutivo, en aquellas pieles mÃ¡s\r\nenvejecidas. SerÃ¡ el mÃ©dico quien, en Ãºltima instancia, decida cuÃ¡ndo es el\r\nmomento indicado para su aplicaciÃ³n.</p>\r\n\r\n<p>El protocolo de\r\naplicaciÃ³n y la frecuencia depende de cada paciente y del grado de\r\nenvejecimiento cutÃ¡neo que presente. En rasgos generales, se aconseja aplicarlo\r\n1 vez al mes , para potenciar la regeneraciÃ³n tisular. </p>\r\n\r\n<p>Tras la\r\naplicaciÃ³n, las personas pueden retomar de forma inmediata su vida profesional\r\ny social. No se generan marcas ni cicatrices, ni se debe guardar reposo.</p>\r\n\r\n<p><b>&nbsp;</b>Puede realizarse\r\ntanto en Ã©poca invernal, como en primavera o en verano, teniendo en cuenta la\r\nexposiciÃ³n solar directa.</p>\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 'prp principal.jpg', 'prp muestra.jpeg', '', '2019-04-24', 1),
(31, 'Plasma Rico en Fibrina', '<p><p></p><p>El plasma rico en\r\nfibrina es la EVOLUCION del plasma rico en plaquetas , consiste en una\r\nseparaciÃ³n mas fina de los componentes de la sangre obteniÃ©ndose asi luego de\r\nsu proceso en una centrifuga especial un concentrado de factores de crecimiento\r\ny fibrina , este concentrado causa una hiper estimulaciÃ³n de colÃ¡geno, elastina\r\ny acido hialuronico en la piel dÃ¡ndole a la piel un aspecto de luminosidad y\r\nlozanÃ­a y ademÃ¡s ayuda a retardar el envejecimiento de la piel . </p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>La aplicaciÃ³n es\r\na travÃ©s de una pistola de mesoterapia especial para evitar moretones y\r\ndisminuir el dolor y se realiza en todo el rostro . </p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Usted puede\r\nretornar a sus actividades normales luego de la aplicaciÃ³n . </p>\r\n\r\n\r\n\r\n\r\n\r\n<p></p>\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 'prf principal.jpeg', 'prf muestra.jpeg', '', '2019-04-24', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `suscritos`
--
ALTER TABLE `suscritos`
  ADD PRIMARY KEY (`id_suscrito`);

--
-- Indices de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD PRIMARY KEY (`id_tratamiento`),
  ADD KEY `categoria` (`categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `suscritos`
--
ALTER TABLE `suscritos`
  MODIFY `id_suscrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  MODIFY `id_tratamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD CONSTRAINT `tratamientos_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
