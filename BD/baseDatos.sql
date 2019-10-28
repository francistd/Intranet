CREATE DATABASE IF NOT EXISTS `Intranet` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;

use `Intranet`;

/*Creamos la tabla usuarios*/
CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
	`id_usu` int(10) NOT NULL AUTO_INCREMENT,
	`id_emp` int(10),
	`id_per` int(10),
	`user_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
	`pass` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
	`fecha_crea` date DEFAULT NULL,
	`fecha_mod` date DEFAULT NULL,
	`usu_cre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
	`usu_mod` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
	`estado_usu` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
	`activo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id_usu`),
	UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


/*Creamos la tabla empleados*/
CREATE TABLE IF NOT EXISTS `tbl_empleados` (
	`id_emp` int(10) NOT NULL AUTO_INCREMENT,
	`nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
	`apellido` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
	`email` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
	`direccion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
	`genero` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
	`cargo` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
	`telefono` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`fecha_nac` date DEFAULT NULL,
	`fecha_cre_emp` date DEFAULT NULL,
	`usu_cre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
	`usu_mod` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
	`fecha_mod` date DEFAULT NULL,
	`estado_emp` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
	`id_dep` int(10),
	`activo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id_emp`),
	UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


/*Creamos la tabla departamento*/
CREATE TABLE IF NOT EXISTS `tbl_departamento` (
	`id_dep` int(10) NOT NULL AUTO_INCREMENT,
	`id_emp` int(10),
	`nombre_dep` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`fecha_crea_dep` date DEFAULT NULL,
	`fecha_mod_dep` date DEFAULT NULL,
	`usu_crea` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`usu_mod` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`estado_dep` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
	`activo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id_dep`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*Creamos la tabla documentos*/
CREATE TABLE IF NOT EXISTS `tbl_documentos` (
	`id_docu` int(10) NOT NULL AUTO_INCREMENT,
	`nombre_docu` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
	`ruta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`fecha_Subida` date DEFAULT NULL,
	`fecha_mod` date DEFAULT NULL,
	`usu_crea` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`usu_mod` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`id_dep` int(10),
	`id_usu` int(10),
	`activo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id_docu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*Creamos la tabla vacaciones*/
CREATE TABLE IF NOT EXISTS `tbl_vacaciones` (
	`id_vac` int(10) NOT NULL AUTO_INCREMENT,
	`id_emp` int(10),
	`id_dep` int(10),
	`comentario` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
	`fecha_ini` date DEFAULT NULL,
	`fecha_fin` date DEFAULT NULL,
	`fecha_cre` date DEFAULT NULL,
	`fecha_mod` date DEFAULT NULL,
	`fecha_aprob` date DEFAULT NULL,
	`usu_cre` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`usu_mod` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`estado_vac` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
	`activo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id_vac`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*Creamos la tabla cartas*/
CREATE TABLE IF NOT EXISTS `tbl_cartas` (
	`id_carta` int(10) NOT NULL AUTO_INCREMENT,
	`id_emp` int(10),
	`nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
	`descripcion` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
	`tipo_carta` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
	`fecha_cre` date DEFAULT NULL,
	`fecha_mod` date DEFAULT NULL,
	`usu_cre` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`usu_mod` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`estado_carta` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
	`activo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id_carta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*Creamos la tabla imagenes*/
CREATE TABLE IF NOT EXISTS `tbl_imagenes` (
	`id_imagen` int(10) NOT NULL AUTO_INCREMENT,
	`id_usu` int(10),
	`nombre_img` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
	`ruta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`fecha_Subida` date DEFAULT NULL,
	`fecha_mod_img` date DEFAULT NULL,
	`usu_crea` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`usu_mod` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`activo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id_imagen`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*Creamos la tabla permisos*/
CREATE TABLE IF NOT EXISTS `tbl_permisos` (
	`id_per` int(10) NOT NULL AUTO_INCREMENT,
	`id_usu` int(10),
	`inicio` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
	`usuarios` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
	`empleados` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
	`departamento` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
	`documentos` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
	`vacaciones` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
	`cartas` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
	`imagenes` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
	`permisos` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
	`fecha_crea` date DEFAULT NULL,
	`fecha_mod` date DEFAULT NULL,
	`usu_crea` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`usu_mod` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`estado_per` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
	`activo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id_per`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*Creamos la tabla publicaciones*/
CREATE TABLE IF NOT EXISTS `tbl_publicaciones` (
	`id_pub` int(10) NOT NULL AUTO_INCREMENT,
	`id_usu` int(10),
	`id_imagen` int(10),
	`publicacion` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
	`fecha_cre` date DEFAULT NULL,
	`fecha_mod_pub` date DEFAULT NULL,
	`usu_crea` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`usu_mod` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`activo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id_pub`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*Creamos la tabla directorio*/
CREATE TABLE IF NOT EXISTS `tbl_directorio` (
	`id_direc` int(10) NOT NULL AUTO_INCREMENT,
	`id_usu` int(10),
	`flota` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
	`ext` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
	`fecha_cre` date DEFAULT NULL,
	`fecha_mod_direc` date DEFAULT NULL,
	`usu_crea` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`usu_mod` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`activo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id_direc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*Creamos la tabla imagenes publicacion*/
CREATE TABLE IF NOT EXISTS `tbl_imagenes_pub` (
	`id_imag_pub` int(10) NOT NULL AUTO_INCREMENT,
	`id_usu` int(10),
	`id_pub` int(10),
	`ruta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`fecha_Subida` date DEFAULT NULL,
	`fecha_mod_img` date DEFAULT NULL,
	`usu_crea` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`usu_mod` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`activo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id_imag_pub`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*Creamos la tabla eventos*/
CREATE TABLE IF NOT EXISTS `tbl_eventos` (
	`id_evento` int(10) NOT NULL AUTO_INCREMENT,
	`id_usu` int(10),
	`nombre_evento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`inicia` time DEFAULT NULL,
	`termina` time DEFAULT NULL,
	`fecha_crea_evento` date DEFAULT NULL,
	`fecha_mod_evento` date DEFAULT NULL,
	`usu_crea` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`usu_mod` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`estado_evento` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
	`activo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id_evento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*Creamos la tabla Noticias*/
CREATE TABLE IF NOT EXISTS `tbl_noticias` (
	`id_noticia` int(10) NOT NULL AUTO_INCREMENT,
	`id_usu` int(10),
	`info` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
	`fecha_crea_noti` date DEFAULT NULL,
	`fecha_mod_noti` date DEFAULT NULL,
	`usu_crea` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`usu_mod` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`estado_noti` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
	`activo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*Creamos la tabla imagenes noticias*/
CREATE TABLE IF NOT EXISTS `tbl_imagenes_noti` (
	`id_imag_noti` int(10) NOT NULL AUTO_INCREMENT,
	`id_usu` int(10),
	`id_noticia` int(10),
	`ruta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`fecha_Subida` date DEFAULT NULL,
	`fecha_mod_img` date DEFAULT NULL,
	`usu_crea` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`usu_mod` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`activo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id_imag_noti`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*Creamos la tabla comentarios*/
CREATE TABLE IF NOT EXISTS `tbl_comentarios` (
	`id_comen` int(10) NOT NULL AUTO_INCREMENT,
	`id_usu` int(10),
	`id_pub` int(10),
	`comentario` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
	`fecha_cre` date DEFAULT NULL,
	`usu_crea` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`activo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id_comen`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*Creamos la tabla Lema*/
CREATE TABLE IF NOT EXISTS `tbl_lema` (
	`id_lema` int(10) NOT NULL AUTO_INCREMENT,
	`id_usu` int(10),
	`lema` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
	`fecha_cre` date DEFAULT NULL,
	`fecha_mod` date DEFAULT NULL,
	`usu_crea` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`usu_mod` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
	`activo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id_lema`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;



