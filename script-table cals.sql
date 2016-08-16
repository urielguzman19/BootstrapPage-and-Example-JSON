CREATE TABLE `calificaciones`(
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nick` varchar(30) DEFAULT NULL,
  `consola` varchar(30) DEFAULT NULL,
  `calificacion` int(2) DEFAULT NULL,
   PRIMARY KEY (`id`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;