-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2023 a las 00:54:47
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gsf-curso-yt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_cat` int(11) NOT NULL,
  `nombre_cat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_cat`, `nombre_cat`) VALUES
(1, 'categoria 1'),
(2, 'Categoria 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobranza`
--

CREATE TABLE `cobranza` (
  `id` int(11) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `pedido` varchar(50) NOT NULL,
  `elaboracion` varchar(100) NOT NULL,
  `entrega` varchar(100) NOT NULL,
  `partida` varchar(100) NOT NULL,
  `descripcion` varchar(90) NOT NULL,
  `cantidad` varchar(50) NOT NULL,
  `unidad` varchar(30) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `subtotal` varchar(70) NOT NULL,
  `impuesto` varchar(50) NOT NULL,
  `total` varchar(100) NOT NULL,
  `fianza` varchar(20) NOT NULL,
  `FeFianza` varchar(50) NOT NULL,
  `importe` varchar(50) NOT NULL,
  `motivo` varchar(50) NOT NULL,
  `remision` varchar(50) NOT NULL,
  `FeEntrega` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cobranza`
--

INSERT INTO `cobranza` (`id`, `cliente`, `pedido`, `elaboracion`, `entrega`, `partida`, `descripcion`, `cantidad`, `unidad`, `precio`, `subtotal`, `impuesto`, `total`, `fianza`, `FeFianza`, `importe`, `motivo`, `remision`, `FeEntrega`) VALUES
(1, 'test', 'testP', '2023-06-28', '2023-06-30', '1', 'curita', '2', 'pza', '12.00', '15.00', '35.00', '16.00', '12/03/2023', '0000-00-00', '0.00', 'asdf', 'asd', '0000-00-00'),
(2, 'QUINTANA ROO', 'D3P035', '09/06/2023', '19/06/2023', '1', 'AMLODIPINO', '776', 'ENVASE', '2620', '2033120', '0', '2033120', 'NO APLICA', 'NO APLICA', 'NO APLICA', 'NO APLICA', 'R-9046', '19/06/2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE `control` (
  `id_control` int(11) NOT NULL,
  `id_cobranza` int(11) NOT NULL,
  `no_factura` varchar(150) NOT NULL,
  `fe_factura` varchar(150) NOT NULL,
  `no_alta` varchar(150) NOT NULL,
  `fe_alta` varchar(150) NOT NULL,
  `fe_revision` varchar(150) NOT NULL,
  `quien_lo_ingreso` varchar(150) NOT NULL,
  `contrarecibo` varchar(150) NOT NULL,
  `monto_contra` varchar(150) NOT NULL,
  `fe_prob_pago` varchar(150) NOT NULL,
  `se_entrego_a_revi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `control`
--

INSERT INTO `control` (`id_control`, `id_cobranza`, `no_factura`, `fe_factura`, `no_alta`, `fe_alta`, `fe_revision`, `quien_lo_ingreso`, `contrarecibo`, `monto_contra`, `fe_prob_pago`, `se_entrego_a_revi`) VALUES
(2, 2, 'GB-9835', '22/06/2023', '248001-105276', '19/06/2023', '13/07/2023', 'ALFONSO ALPUCHE', '00000000', '20033120', '10/08/2023', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fianza`
--

CREATE TABLE `fianza` (
  `id_fianza` int(11) NOT NULL,
  `idcobranza` int(11) NOT NULL,
  `idcontrol` int(11) NOT NULL,
  `recibo_digi` varchar(150) NOT NULL,
  `estatus` varchar(150) NOT NULL,
  `banco` varchar(150) NOT NULL,
  `fe_cobro` varchar(150) NOT NULL,
  `factoraje` varchar(100) NOT NULL,
  `cobro` varchar(50) NOT NULL,
  `valor_factura` varchar(100) NOT NULL,
  `sancion` varchar(50) NOT NULL,
  `nota_credito` varchar(150) NOT NULL,
  `importe` varchar(150) NOT NULL,
  `motivo` varchar(150) NOT NULL,
  `saldo_fi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `fianza`
--

INSERT INTO `fianza` (`id_fianza`, `idcobranza`, `idcontrol`, `recibo_digi`, `estatus`, `banco`, `fe_cobro`, `factoraje`, `cobro`, `valor_factura`, `sancion`, `nota_credito`, `importe`, `motivo`, `saldo_fi`) VALUES
(1, 2, 2, '00000000', 'sin contra recibo', 'banorte', '10/07/2023', '0', '0', 'esperando valor', 'esperando valor', 'no aplica', '0', 'no aplica', 'esperando valor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas`
--

CREATE TABLE `paginas` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `titulo` varchar(100) NOT NULL,
  `page` varchar(45) DEFAULT '#',
  `descripcion` varchar(255) NOT NULL,
  `icono` varchar(70) NOT NULL,
  `activo` int(11) NOT NULL DEFAULT 1,
  `creado` datetime NOT NULL,
  `actualizado` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `paginas`
--

INSERT INTO `paginas` (`id`, `menu_id`, `titulo`, `page`, `descripcion`, `icono`, `activo`, `creado`, `actualizado`) VALUES
(1, NULL, 'Perfil', 'perfil', 'Informacion general del usuario', 'fa fa-cogs', 1, '2022-03-13 23:10:43', '2022-03-13 16:12:57'),
(2, NULL, 'Dashboard', 'dashboard', 'Informacion general del sistema', 'fa fa-laptop', 1, '2022-03-13 23:10:43', '2022-03-13 16:12:57'),
(3, NULL, 'Usuarios', 'usuarios', 'Administración de usuarios', 'fa fa-users', 1, '2022-03-13 23:10:43', '2022-03-13 16:12:57'),
(4, NULL, 'Roles', 'roles', 'Informacion general de los roles de usuarios', 'fa fa-key', 1, '2022-03-13 23:10:43', '2022-03-13 16:12:57'),
(5, NULL, 'Productos', '#', 'Informacion de todos los productos', 'fa fa-product-hunt', 1, '2022-03-13 23:10:43', '2022-03-13 16:12:57'),
(6, NULL, 'Categorias', 'categorias', 'Informacion general de categorias', '', 1, '2022-03-13 23:10:43', '2022-03-13 16:12:57'),
(7, 5, 'Lista', 'productos', 'Crear nuevo producto', 'fa fa-list', 1, '2022-04-12 02:38:42', '2022-04-11 18:39:13'),
(10, NULL, 'Cobranza', 'Cobranza', 'cobranza', 'fa fa-dollar', 1, '2023-07-20 23:15:30', '2023-07-20 15:16:58'),
(11, NULL, 'Control', 'Control', 'Control Documental', 'fa fa-file', 1, '2023-07-20 23:17:22', '2023-07-20 15:20:26'),
(12, NULL, 'Fianza', 'Fianza', 'Fianza', 'fa fa-money', 1, '2023-07-20 23:17:22', '2023-07-20 15:20:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_pagina` int(11) NOT NULL,
  `c` int(11) NOT NULL DEFAULT 0,
  `r` int(11) NOT NULL DEFAULT 0,
  `u` int(11) NOT NULL DEFAULT 0,
  `d` int(11) NOT NULL DEFAULT 0,
  `creado` datetime NOT NULL,
  `actualizado` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `id_rol`, `id_pagina`, `c`, `r`, `u`, `d`, `creado`, `actualizado`) VALUES
(39, 1, 1, 1, 0, 1, 1, '2023-07-20 23:36:53', '2023-07-20 15:36:53'),
(40, 1, 2, 1, 0, 1, 1, '2023-07-20 23:36:53', '2023-07-20 15:36:53'),
(41, 1, 3, 1, 1, 1, 1, '2023-07-20 23:36:53', '2023-07-20 15:36:53'),
(42, 1, 4, 1, 1, 1, 1, '2023-07-20 23:36:53', '2023-07-20 15:36:53'),
(43, 1, 5, 1, 0, 1, 1, '2023-07-20 23:36:53', '2023-07-20 15:36:53'),
(44, 1, 6, 1, 0, 1, 1, '2023-07-20 23:36:53', '2023-07-20 15:36:53'),
(45, 1, 7, 1, 0, 1, 1, '2023-07-20 23:36:53', '2023-07-20 15:36:53'),
(46, 1, 10, 1, 1, 1, 1, '2023-07-20 23:36:53', '2023-07-20 15:36:53'),
(47, 1, 11, 1, 1, 1, 1, '2023-07-20 23:36:53', '2023-07-20 15:36:53'),
(48, 1, 12, 1, 1, 1, 1, '2023-07-20 23:36:53', '2023-07-20 15:36:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_pro` int(11) NOT NULL,
  `id_categoria_pro` int(11) NOT NULL,
  `nombre_pro` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_pro`, `id_categoria_pro`, `nombre_pro`) VALUES
(1, 1, 'Producto 1'),
(2, 1, 'Producto 2'),
(3, 2, 'Producto 3'),
(4, 2, 'Producto 4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `activo` int(11) NOT NULL DEFAULT 1,
  `creado` datetime NOT NULL,
  `actualizado` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `activo`, `creado`, `actualizado`) VALUES
(1, 'root', 1, '2022-03-13 23:04:23', '2022-03-13 16:05:17'),
(2, 'admin', 1, '2022-03-13 23:04:23', '2022-03-13 16:05:17'),
(3, 'editor', 1, '2022-03-13 23:04:23', '2022-03-13 16:05:17'),
(4, 'default', 1, '2022-03-13 23:04:23', '2022-03-13 16:05:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_activo` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_rol`, `nombre`, `email`, `password`, `is_activo`) VALUES
(1, 1, 'Luis Gonzalez', 'admin@admin.com', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9', 1),
(3, 3, 'Fernando', 'editor@editor.com', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9', 1),
(4, 4, 'Allan', 'luis@luis.com', 'ec7908dc8241f0e4340266990dfe6001b1757084d891c6758bfaac826750009a', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_cat`) USING BTREE;

--
-- Indices de la tabla `cobranza`
--
ALTER TABLE `cobranza`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`id_control`),
  ADD KEY `relacion_cobranza_control` (`id_cobranza`);

--
-- Indices de la tabla `fianza`
--
ALTER TABLE `fianza`
  ADD PRIMARY KEY (`id_fianza`),
  ADD KEY `relacion_cbranza_fianza` (`idcobranza`),
  ADD KEY `relacion_control_fianza` (`idcontrol`);

--
-- Indices de la tabla `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `pagina_subpagina` (`menu_id`) USING BTREE;

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `permisos_rol` (`id_rol`) USING BTREE,
  ADD KEY `permisos_pagina` (`id_pagina`) USING BTREE,
  ADD KEY `id_pagina` (`id_pagina`) USING BTREE;

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_pro`) USING BTREE,
  ADD KEY `rel_categoria_producto` (`id_categoria_pro`) USING BTREE;

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`) USING BTREE,
  ADD KEY `usuarios_roles` (`id_rol`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cobranza`
--
ALTER TABLE `cobranza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `control`
--
ALTER TABLE `control`
  MODIFY `id_control` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fianza`
--
ALTER TABLE `fianza`
  MODIFY `id_fianza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `control`
--
ALTER TABLE `control`
  ADD CONSTRAINT `control_ibfk_1` FOREIGN KEY (`id_cobranza`) REFERENCES `cobranza` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fianza`
--
ALTER TABLE `fianza`
  ADD CONSTRAINT `fianza_ibfk_1` FOREIGN KEY (`idcobranza`) REFERENCES `cobranza` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fianza_ibfk_2` FOREIGN KEY (`idcontrol`) REFERENCES `control` (`id_control`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `paginas`
--
ALTER TABLE `paginas`
  ADD CONSTRAINT `paginas_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `paginas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`id_pagina`) REFERENCES `paginas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria_pro`) REFERENCES `categorias` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
