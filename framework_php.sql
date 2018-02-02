/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.29-MariaDB : Database - framework_php
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `ciudades` */

DROP TABLE IF EXISTS `ciudades`;

CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_pais` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pais` (`id_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `ciudades` */

insert  into `ciudades`(`id`,`ciudad`,`id_pais`) values (1,'Santo Domingoo',1),(2,'Bogotá',2),(3,'Sao Pablo',7),(4,'Buenos Aires',8),(5,'Neiva',2),(6,'Medellín',2),(7,'Rio de Janeiro',7),(8,'Santiago de Chile',3),(9,'Lima',4),(10,'Machu Pichi',4),(11,'Barcelona',5),(12,'Sevilla',5),(13,'Madrid',5),(14,'Barranquilla',2),(15,'Cartagena',2),(16,'Yopal',2),(17,'Tolima',2),(18,'Leticia',2);

/*Table structure for table `paises` */

DROP TABLE IF EXISTS `paises`;

CREATE TABLE `paises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `paises` */

insert  into `paises`(`id`,`pais`) values (1,'República Dominicana'),(2,'Colombia'),(3,'Chile'),(4,'Perú'),(5,'España'),(6,'Panamá'),(7,'Brasil'),(8,'Argentina');

/*Table structure for table `permiso` */

DROP TABLE IF EXISTS `permiso`;

CREATE TABLE `permiso` (
  `id_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `permiso` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `key` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_permiso`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `permiso` */

insert  into `permiso`(`id_permiso`,`permiso`,`key`) values (1,'Tareas de Administración','admin_access'),(2,'Agregar Posts','nuevo_post'),(3,'Editar Posts','editar_post'),(4,'Eliminar Post','eliminar_post');

/*Table structure for table `permiso_rol` */

DROP TABLE IF EXISTS `permiso_rol`;

CREATE TABLE `permiso_rol` (
  `rol` int(11) NOT NULL,
  `permiso` int(11) NOT NULL,
  `valor` tinyint(4) NOT NULL,
  UNIQUE KEY `rol` (`rol`,`permiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `permiso_rol` */

insert  into `permiso_rol`(`rol`,`permiso`,`valor`) values (1,1,1),(1,2,1),(1,3,1),(1,4,1),(2,2,1),(2,3,1),(2,4,1),(3,2,1),(3,3,1);

/*Table structure for table `permiso_usuario` */

DROP TABLE IF EXISTS `permiso_usuario`;

CREATE TABLE `permiso_usuario` (
  `usuario` int(11) NOT NULL,
  `permiso` int(11) NOT NULL,
  `valor` tinyint(4) NOT NULL,
  UNIQUE KEY `usuario` (`usuario`,`permiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `permiso_usuario` */

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cuerpo` text COLLATE utf8_spanish_ci,
  `imagen` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `post` */

insert  into `post`(`id`,`titulo`,`cuerpo`,`imagen`) values (3,'Nuevo','Vamos a ver esta prueba','upl_5a6f2642bb375.png'),(4,'Nuevo','Texto desde el framework usando Bootstrap como maquetador visual.\r\n','upl_5a6f277aac5cb.png');

/*Table structure for table `prueba` */

DROP TABLE IF EXISTS `prueba`;

CREATE TABLE `prueba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `prueba` */

insert  into `prueba`(`id`,`nombre`) values (1,'Nombre 1'),(2,'Nombre 2'),(3,'Nombre 3'),(4,'Nombre 4'),(5,'Nombre 5'),(6,'Nombre 6'),(7,'Nombre 7'),(8,'Nombre 8'),(9,'Nombre 9'),(10,'Nombre 10'),(11,'Nombre 11'),(12,'Nombre 12'),(13,'Nombre 13'),(14,'Nombre 14'),(15,'Nombre 15'),(16,'Nombre 16'),(17,'Nombre 17'),(18,'Nombre 18'),(19,'Nombre 19'),(20,'Nombre 20'),(21,'Nombre 21'),(22,'Nombre 22'),(23,'Nombre 23'),(24,'Nombre 24'),(25,'Nombre 25'),(26,'Nombre 26'),(27,'Nombre 27'),(28,'Nombre 28'),(29,'Nombre 29'),(30,'Nombre 30'),(31,'Nombre 31'),(32,'Nombre 32'),(33,'Nombre 33'),(34,'Nombre 34'),(35,'Nombre 35'),(36,'Nombre 36'),(37,'Nombre 37'),(38,'Nombre 38'),(39,'Nombre 39'),(40,'Nombre 40'),(41,'Nombre 41'),(42,'Nombre 42'),(43,'Nombre 43'),(44,'Nombre 44'),(45,'Nombre 45'),(46,'Nombre 46'),(47,'Nombre 47'),(48,'Nombre 48'),(49,'Nombre 49'),(50,'Nombre 50');

/*Table structure for table `rol` */

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `rol` */

insert  into `rol`(`id_role`,`role`) values (1,'Administrador'),(2,'Gestor'),(3,'Editor');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `codigo` int(10) unsigned NOT NULL,
  `role` int(11) NOT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`nombre`,`usuario`,`pass`,`email`,`fecha`,`codigo`,`role`,`estado`) values (1,'Nombre 1','admin','2b6470f25132b7445e9b632c8e956046d9f790c4','admin@admin.com','0000-00-00 00:00:00',0,1,1),(2,'usuario1','usuario1','2b6470f25132b7445e9b632c8e956046d9f790c4','usuario1@users.com','2018-01-24 21:03:13',0,2,1),(3,'','usuario2','2b6470f25132b7445e9b632c8e956046d9f790c4','usuario2@users.com','2018-01-31 10:30:51',0,3,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
