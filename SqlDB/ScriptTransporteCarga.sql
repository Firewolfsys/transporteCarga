-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: transportecarga
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.34-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `acciones`
--

DROP TABLE IF EXISTS `acciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acciones` (
  `accionID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `controladorID` int(11) NOT NULL,
  PRIMARY KEY (`accionID`),
  KEY `acciones_controlador` (`controladorID`),
  CONSTRAINT `acciones_controlador` FOREIGN KEY (`controladorID`) REFERENCES `controladores` (`controladorID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='acciones de los controladores';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acciones`
--

LOCK TABLES `acciones` WRITE;
/*!40000 ALTER TABLE `acciones` DISABLE KEYS */;
INSERT INTO `acciones` VALUES (2,'nuevo',8),(3,'guardar',8),(4,'eliminar',8);
/*!40000 ALTER TABLE `acciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `id` varchar(40) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `ip_address` varchar(45) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('167bv1j8jt2nt3044ibqg26o4a9i178i','::1',1538342817,'__ci_last_regenerate|i:1538342817;user_id|i:4;username|s:9:\"mariajose\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('1r7g8h1263l71k40s61d13j84m7e73vr','::1',1538344281,'__ci_last_regenerate|i:1538344281;user_id|i:4;username|s:9:\"mariajose\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2eqasjf1ts1r78dc37t5bcn2mp6rgnev','::1',1538280588,'__ci_last_regenerate|i:1538280588;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2n0h02cj9gd6v4sivddo89gu1sem5k1g','::1',1538339895,'__ci_last_regenerate|i:1538339895;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2s0pgiasmbq0ho9l4msdmg9q8bslulmh','::1',1538283720,'__ci_last_regenerate|i:1538283720;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3at2j07ikqm8p2uah5uctfg1tq4b6rq2','::1',1538284835,'__ci_last_regenerate|i:1538284835;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3e4tb02a8k8l5dpdljlpjug3n2l0lurr','::1',1538333764,'__ci_last_regenerate|i:1538333764;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('43cdh9ct2lj9peo6oshe3lurhjph59qj','::1',1538339041,'__ci_last_regenerate|i:1538339041;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('6356ohgvldgfhl2spithhomcsii0cptt','::1',1538281249,'__ci_last_regenerate|i:1538281249;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('6tcjclvl97t8tgkru835r220jo2j0f11','::1',1538282642,'__ci_last_regenerate|i:1538282642;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8s84csn2n46s05sqji9dv30dr7j8lolk','::1',1538334777,'__ci_last_regenerate|i:1538334777;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('93ldv4c7ihhtjbb6es9c5289i9ns8adk','::1',1538345759,'__ci_last_regenerate|i:1538345651;user_id|i:4;username|s:9:\"mariajose\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('acum14643vc0ik9qal8k59qqo58f6vun','::1',1538341451,'__ci_last_regenerate|i:1538341451;user_id|i:4;username|s:9:\"mariajose\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('bbbk1hivlkl7frs54bsik6ad10u4n4im','::1',1538282951,'__ci_last_regenerate|i:1538282951;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('c69kgaocc4tlgoqca2t734jgldrm67kg','::1',1538341069,'__ci_last_regenerate|i:1538341069;user_id|i:4;username|s:9:\"mariajose\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('cdck28lousf0f34rf4cjvko435br5auk','::1',1538280920,'__ci_last_regenerate|i:1538280920;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('cl0gr7sn96ipif3bsss02uofp12s0qa9','::1',1538340643,'__ci_last_regenerate|i:1538340643;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('d85cl0qnjdks7sie2c86lnluptastim3','::1',1538343497,'__ci_last_regenerate|i:1538343497;user_id|i:4;username|s:9:\"mariajose\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('fjl4u449g4q5ptbr1epas8244qn356sc','::1',1538283384,'__ci_last_regenerate|i:1538283384;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('h4gjqpvplk1foil1s278su0939gs1mb1','::1',1538336141,'__ci_last_regenerate|i:1538336141;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('i2ni0n4630nbi1kp858uu41j1in3em7r','::1',1538279923,'__ci_last_regenerate|i:1538279923;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('iq83ge5jtva813nkglareprudoc7de4m','::1',1538281939,'__ci_last_regenerate|i:1538281939;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('iu696tt0l0pt2vd2mqnlgu8j2spr18sa','::1',1538345228,'__ci_last_regenerate|i:1538345228;user_id|i:4;username|s:9:\"mariajose\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('kc6j6tkd7m1s9nom6jv30u8a652vh1kj','::1',1538343131,'__ci_last_regenerate|i:1538343131;user_id|i:4;username|s:9:\"mariajose\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('kdh98nr1o81rgtc3r0sd2ipjk30sc92q','::1',1538335740,'__ci_last_regenerate|i:1538335740;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('kuptjtb4ve90m0gau5rq8r1n1p089gq8','::1',1538333275,'__ci_last_regenerate|i:1538333274;'),('llr3qdf16ojdcanab8ejpqlardl9um6r','::1',1538334072,'__ci_last_regenerate|i:1538334072;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('lv3eo4ae6t0dcgcj175dn9g43d94jukd','::1',1538344733,'__ci_last_regenerate|i:1538344733;user_id|i:4;username|s:9:\"mariajose\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('m5vp2k7dfb8spr9rv5kki2dqap3gh15k','::1',1538284470,'__ci_last_regenerate|i:1538284470;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('osu8jl8lkl8l3lh0q75papoh6cgub91p','::1',1538334463,'__ci_last_regenerate|i:1538334463;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('pa010qhurka27bfctt6u2rei3bknk3hc','::1',1538339540,'__ci_last_regenerate|i:1538339540;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('phadmtgkk2g13grbvfqn89idk44ogscs','::1',1538279612,'__ci_last_regenerate|i:1538279612;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('pnslsfardebp1fspoodf2vqrkmhuh37q','::1',1538345651,'__ci_last_regenerate|i:1538345651;user_id|i:4;username|s:9:\"mariajose\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('qdi89pid970oane89emtuoptbrbets3u','::1',1538342412,'__ci_last_regenerate|i:1538342412;user_id|i:4;username|s:9:\"mariajose\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('qtbhnk0edsdhb1ak9flf43evcv9h4d3c','::1',1538284103,'__ci_last_regenerate|i:1538284103;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('r3pkp9bdgl3es73e7en5j629kb0t203r','::1',1538280238,'__ci_last_regenerate|i:1538280238;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('r4tlpomhaiespqhhvrv9b4jlf351ccng','::1',1538284835,'__ci_last_regenerate|i:1538284835;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('rc5v26v80li57gmo80f1sctav2ih6kse','::1',1538281551,'__ci_last_regenerate|i:1538281551;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('rq3n7hu9io7dfa879v7vvcgj5agl9vfk','::1',1538340283,'__ci_last_regenerate|i:1538340283;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('s1caburd07972h4d40l4iep7sh8ffg7o','::1',1538279290,'__ci_last_regenerate|i:1538279290;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('sbj04h5foevsc3vui4n1099an7u42drs','::1',1538343843,'__ci_last_regenerate|i:1538343843;user_id|i:4;username|s:9:\"mariajose\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('tsc9usdv107h7as56ue84fn1d01s9sls','::1',1538338729,'__ci_last_regenerate|i:1538338729;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ugsc3ls78me23rdg2i7tma28gg3bkgqp','::1',1538282258,'__ci_last_regenerate|i:1538282258;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('umsfubsbo80stod2l9ag2c8m8d3kc64g','::1',1538336488,'__ci_last_regenerate|i:1538336488;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('voulq2ua3uuosbmobi8v4g0g7u6c38hs','::1',1538338337,'__ci_last_regenerate|i:1538338337;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_comercial` varchar(500) NOT NULL,
  `razon_social` varchar(500) NOT NULL,
  `nit` varchar(500) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `activo` bit(1) NOT NULL,
  `aplica_pago_mensual` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='tabla de clientes de la empresa';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Juan','la prueba','su nit','su direccion 2','50558899','sucorreo@dominio.com','2012-05-04','',''),(2,'Pedro','la prueba','su nit','su direccion 2','50558899','sucorreo@dominio.com','2012-05-04','','');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `controladores`
--

DROP TABLE IF EXISTS `controladores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `controladores` (
  `controladorID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `MenuID` int(11) NOT NULL,
  `controlador` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL,
  PRIMARY KEY (`controladorID`),
  KEY `controlador_menus` (`MenuID`),
  CONSTRAINT `controlador_menus` FOREIGN KEY (`MenuID`) REFERENCES `menus` (`MenuID`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1 COMMENT='controladores del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controladores`
--

LOCK TABLES `controladores` WRITE;
/*!40000 ALTER TABLE `controladores` DISABLE KEYS */;
INSERT INTO `controladores` VALUES (1,'Usuarios Admin',1,'admin/usuario_admin',4),(3,'Clientes',2,'clientes/clientes',0),(4,'Origenes y Destinos',3,'transporte/lugares',0),(7,'Tipos de Documentos',6,'facturacion/tipo_doctos',1),(8,'Menus',1,'admin/menus',1),(9,'Roles',1,'admin/roles',3),(12,'Tipos Pago',6,'facturacion/tipos_pago',2),(21,'Creación de manifiestos',3,'transporte/manifiestos',3),(22,'Traslado de manifiestos',3,'transporte/manifiestos_traslado',4),(23,'Manifiestos por piloto',8,'transporte/manifiestos_reporte',1),(24,'Pilotos',9,'transporte/pilotos',2),(25,'Estado Piloto',9,'transporte/estados_piloto',1),(26,'Tipos de Servicios',10,'transporte/tipo_servicio',1),(27,'Unidades de Medida',10,'transporte/unidad_medida',2),(28,'Estado Guias',11,'transporte/guias_estado',1),(29,'Guias',11,'transporte/guias',2),(30,'Servicios',10,'transporte/servicios',3),(31,'Guias pendientes de entrega',11,'transporte/manifiestos_entrega_guias',3);
/*!40000 ALTER TABLE `controladores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `correlativo_doctos`
--

DROP TABLE IF EXISTS `correlativo_doctos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `correlativo_doctos` (
  `correlativo_doctoid` int(11) NOT NULL AUTO_INCREMENT,
  `serie` varchar(2) DEFAULT NULL,
  `correlativo_Inicial` int(11) DEFAULT NULL,
  `correlativo_final` int(11) DEFAULT NULL,
  `correlativo_toca` int(11) DEFAULT NULL,
  `tipo_doctoid` int(11) DEFAULT NULL,
  `correlativo_usa` bit(1) DEFAULT b'0',
  PRIMARY KEY (`correlativo_doctoid`),
  KEY `corellativo_tipodocto_idx` (`tipo_doctoid`),
  CONSTRAINT `corellativo_tipodocto` FOREIGN KEY (`tipo_doctoid`) REFERENCES `tipo_doctos` (`tipo_doctoid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `correlativo_doctos_tipo_doctos` FOREIGN KEY (`tipo_doctoid`) REFERENCES `tipo_doctos` (`tipo_doctoid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `correlativo_doctos`
--

LOCK TABLES `correlativo_doctos` WRITE;
/*!40000 ALTER TABLE `correlativo_doctos` DISABLE KEYS */;
INSERT INTO `correlativo_doctos` VALUES (1,'A',1,1000,1,1,'\0'),(2,'C',1,5000,100,1,'\0');
/*!40000 ALTER TABLE `correlativo_doctos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documentos`
--

DROP TABLE IF EXISTS `documentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documentos` (
  `id_documento` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_doctoid` int(11) NOT NULL,
  `correlativo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `user_login_id` int(11) NOT NULL,
  PRIMARY KEY (`id_documento`),
  KEY `documentos_clientes` (`id_cliente`),
  KEY `documentos_tipo_doctos` (`tipo_doctoid`),
  KEY `documentos_user_login` (`user_login_id`),
  CONSTRAINT `documentos_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  CONSTRAINT `documentos_tipo_doctos` FOREIGN KEY (`tipo_doctoid`) REFERENCES `tipo_doctos` (`tipo_doctoid`),
  CONSTRAINT `documentos_user_login` FOREIGN KEY (`user_login_id`) REFERENCES `user_login` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='todo tipo de documento ingresado';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documentos`
--

LOCK TABLES `documentos` WRITE;
/*!40000 ALTER TABLE `documentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `documentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documentos_detalle`
--

DROP TABLE IF EXISTS `documentos_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documentos_detalle` (
  `id_detalle_documento` int(11) NOT NULL AUTO_INCREMENT,
  `id_documento` int(11) NOT NULL,
  `id_guia` int(11) NOT NULL,
  `total` decimal(18,2) NOT NULL,
  PRIMARY KEY (`id_detalle_documento`),
  KEY `documentos_detalle_documentos` (`id_documento`),
  KEY `documentos_detalle_guias` (`id_guia`),
  CONSTRAINT `documentos_detalle_documentos` FOREIGN KEY (`id_documento`) REFERENCES `documentos` (`id_documento`),
  CONSTRAINT `documentos_detalle_guias` FOREIGN KEY (`id_guia`) REFERENCES `guias` (`id_guia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='detalle de documentos';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documentos_detalle`
--

LOCK TABLES `documentos_detalle` WRITE;
/*!40000 ALTER TABLE `documentos_detalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `documentos_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guias`
--

DROP TABLE IF EXISTS `guias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guias` (
  `id_guia` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_guia` varchar(100) NOT NULL,
  `direccion_envia` varchar(500) NOT NULL,
  `direccion_recibe` varchar(500) NOT NULL,
  `responsable_envia` varchar(250) NOT NULL,
  `responsable_envia_telefono` varchar(50) NOT NULL,
  `responsable_recibe` varchar(250) NOT NULL,
  `responsable_recibe_telefono` varchar(50) NOT NULL,
  `id_tipo_pago` int(11) NOT NULL,
  `id_guia_estado` int(11) NOT NULL,
  `porcentaje_pago_envia` decimal(18,2) NOT NULL,
  `porcentaje_pago_recibe` decimal(18,2) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `peso` decimal(18,2) NOT NULL,
  `total_pago_envia` decimal(18,2) NOT NULL,
  `total_pago_recibe` decimal(18,2) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `id_cliente_envia` int(11) NOT NULL,
  `id_cliente_recibe` int(11) NOT NULL,
  `id_lugar_origen` int(11) NOT NULL,
  `id_lugar_destino` int(11) NOT NULL,
  `tipo_usuario_crea` int(11) NOT NULL,
  `id_usuario_crea` int(11) NOT NULL,
  `peso_maximo` decimal(18,2) DEFAULT NULL,
  `precio` decimal(18,2) DEFAULT '0.00',
  `precio_peso_adicional` decimal(18,2) DEFAULT '0.00',
  `precio_especial` int(11) DEFAULT '0',
  PRIMARY KEY (`id_guia`),
  KEY `guias_guias_estado` (`id_guia_estado`),
  KEY `guias_servicio` (`id_servicio`),
  KEY `guias_tipos_pago` (`id_tipo_pago`),
  CONSTRAINT `guias_guias_estado` FOREIGN KEY (`id_guia_estado`) REFERENCES `guias_estado` (`id_guia_estado`),
  CONSTRAINT `guias_servicio` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`),
  CONSTRAINT `guias_tipos_pago` FOREIGN KEY (`id_tipo_pago`) REFERENCES `tipos_pago` (`id_tipo_pago`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COMMENT='guias del ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guias`
--

LOCK TABLES `guias` WRITE;
/*!40000 ALTER TABLE `guias` DISABLE KEYS */;
INSERT INTO `guias` VALUES (10,'3000001','Palin,Escuintla','Zona 2, el Xapote','Santiago','56306910','Juan Adolfo','55887788',2,4,0.00,100.00,2,20.00,0.00,0.00,'2018-09-27',1,2,4,3,2,1,0.00,0.00,0.00,0),(11,'3000002','Zona 15 ','Puerto Barrios','Oscar','88779955','Martin','99665544',3,4,80.00,20.00,1,10.00,16.00,4.00,'2018-09-27',2,1,3,2,2,1,20.00,20.00,20.00,0),(12,'3000003','345','345','345','345','345','345',3,3,345.00,345.00,1,345.00,0.00,0.00,'2018-09-27',1,1,4,4,2,1,0.00,0.00,0.00,0),(13,'3000004','Guatemala','Guatemala','Juan Lopez','56306910','Juan Adolfo','56306910',3,1,75.00,25.00,1,15.00,15.00,5.00,'2018-09-30',2,1,4,4,2,1,20.00,20.00,20.00,0);
/*!40000 ALTER TABLE `guias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guias_estado`
--

DROP TABLE IF EXISTS `guias_estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guias_estado` (
  `id_guia_estado` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(250) NOT NULL,
  PRIMARY KEY (`id_guia_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='estados de las guias';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guias_estado`
--

LOCK TABLES `guias_estado` WRITE;
/*!40000 ALTER TABLE `guias_estado` DISABLE KEYS */;
INSERT INTO `guias_estado` VALUES (1,'Creada'),(2,'En bodega'),(3,'En transito'),(4,'Entregada'),(5,'Cancelada');
/*!40000 ALTER TABLE `guias_estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guias_hijas`
--

DROP TABLE IF EXISTS `guias_hijas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guias_hijas` (
  `id_guia_hija` int(11) NOT NULL AUTO_INCREMENT,
  `id_guia` int(11) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `codigo_guia_hija` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_guia_hija`),
  UNIQUE KEY `id_guia_hija_UNIQUE` (`id_guia_hija`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guias_hijas`
--

LOCK TABLES `guias_hijas` WRITE;
/*!40000 ALTER TABLE `guias_hijas` DISABLE KEYS */;
INSERT INTO `guias_hijas` VALUES (1,10,'2018-09-27 02:14:59','1'),(2,10,'2018-09-27 02:15:04','2'),(3,10,'2018-09-27 02:15:06','3'),(4,10,'2018-09-27 02:15:09','4'),(8,10,'2018-09-27 02:32:47','6'),(9,11,'2018-09-30 07:15:16','06805'),(10,11,'2018-09-30 07:15:18','06806'),(11,11,'2018-09-30 07:15:21','06807'),(12,11,'2018-09-30 07:15:23','06808');
/*!40000 ALTER TABLE `guias_hijas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lugares`
--

DROP TABLE IF EXISTS `lugares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lugares` (
  `id_lugar` int(11) NOT NULL AUTO_INCREMENT,
  `lugar` varchar(250) NOT NULL,
  PRIMARY KEY (`id_lugar`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='paises origenes y destinos de los viajes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugares`
--

LOCK TABLES `lugares` WRITE;
/*!40000 ALTER TABLE `lugares` DISABLE KEYS */;
INSERT INTO `lugares` VALUES (1,'Peten'),(2,'Izabal'),(3,'Guatemala'),(4,'Escuintla');
/*!40000 ALTER TABLE `lugares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manifiestos`
--

DROP TABLE IF EXISTS `manifiestos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manifiestos` (
  `id_manifiesto` int(11) NOT NULL AUTO_INCREMENT,
  `id_piloto` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `finalizado` bit(1) NOT NULL,
  `id_lugar_origen` int(11) NOT NULL,
  `id_lugar_destino` int(11) NOT NULL,
  PRIMARY KEY (`id_manifiesto`),
  KEY `manifiestos_pilotos` (`id_piloto`),
  CONSTRAINT `manifiestos_pilotos` FOREIGN KEY (`id_piloto`) REFERENCES `pilotos` (`id_piloto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='manifiestos de carga';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manifiestos`
--

LOCK TABLES `manifiestos` WRITE;
/*!40000 ALTER TABLE `manifiestos` DISABLE KEYS */;
INSERT INTO `manifiestos` VALUES (3,3,'2018-09-30','\0',4,4),(4,1,'2018-09-30','\0',4,4);
/*!40000 ALTER TABLE `manifiestos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manifiestos_detalle`
--

DROP TABLE IF EXISTS `manifiestos_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manifiestos_detalle` (
  `id_detalle_manifiesto` int(11) NOT NULL AUTO_INCREMENT,
  `id_manifiesto` int(11) NOT NULL,
  `id_guia` int(11) NOT NULL,
  PRIMARY KEY (`id_detalle_manifiesto`),
  KEY `manifiestos_detalle_guias` (`id_guia`),
  KEY `manifiestos_detalle_manifiestos` (`id_manifiesto`),
  CONSTRAINT `manifiestos_detalle_guias` FOREIGN KEY (`id_guia`) REFERENCES `guias` (`id_guia`),
  CONSTRAINT `manifiestos_detalle_manifiestos` FOREIGN KEY (`id_manifiesto`) REFERENCES `manifiestos` (`id_manifiesto`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manifiestos_detalle`
--

LOCK TABLES `manifiestos_detalle` WRITE;
/*!40000 ALTER TABLE `manifiestos_detalle` DISABLE KEYS */;
INSERT INTO `manifiestos_detalle` VALUES (7,3,10),(8,3,11),(9,4,12);
/*!40000 ALTER TABLE `manifiestos_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `MenuID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `icono` varchar(20) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  PRIMARY KEY (`MenuID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='Menus del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Administracion','fa-cogs',1),(2,'Control Clientes','fa-users',2),(3,'Control Manifiestos','fa-truck',6),(6,'Facturacion','fa-calculator',7),(8,'Reportes','fa-file-text',8),(9,'Control Pilotos','fa-vcard',3),(10,'Productos y/o Servicios','fa-handshake-o',4),(11,'Control Guias','fa-book ',5);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pilotos`
--

DROP TABLE IF EXISTS `pilotos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pilotos` (
  `id_piloto` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(250) NOT NULL,
  `apellidos` varchar(250) NOT NULL,
  `identificacion` varchar(50) NOT NULL,
  `licencia_tipo` varchar(5) NOT NULL,
  `licencia` varchar(50) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `pago_mensual` decimal(18,2) NOT NULL,
  `bonificacion_ley` decimal(18,2) NOT NULL,
  `bonificacion_incentivo` decimal(18,2) NOT NULL,
  `id_piloto_estado` int(11) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  PRIMARY KEY (`id_piloto`),
  KEY `pilotos_pilotos_estado` (`id_piloto_estado`),
  CONSTRAINT `pilotos_pilotos_estado` FOREIGN KEY (`id_piloto_estado`) REFERENCES `pilotos_estado` (`id_piloto_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Tabla para los pilotos del establecimiento';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pilotos`
--

LOCK TABLES `pilotos` WRITE;
/*!40000 ALTER TABLE `pilotos` DISABLE KEYS */;
INSERT INTO `pilotos` VALUES (1,'Juan','Perez','2355784510101','A','124548777744','2018-08-12',1200.00,100.00,100.00,1,'50558899','sucorreo@dominio.com','su casa 1'),(2,'hector','Juarez','54564646','45456','456464','2018-09-25',2000.00,100.00,100.00,3,'50558899','sucorreo@dominio.com','casa'),(3,'javier','ramirez','456789321','45678','45646','2018-08-12',1500.00,100.00,100.00,1,'50558899','sucorreo@dominio.com','Guatemala');
/*!40000 ALTER TABLE `pilotos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pilotos_estado`
--

DROP TABLE IF EXISTS `pilotos_estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pilotos_estado` (
  `id_piloto_estado` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(50) NOT NULL,
  PRIMARY KEY (`id_piloto_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Estados de pilotos(Activo, Suspendido, Retirado)';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pilotos_estado`
--

LOCK TABLES `pilotos_estado` WRITE;
/*!40000 ALTER TABLE `pilotos_estado` DISABLE KEYS */;
INSERT INTO `pilotos_estado` VALUES (1,'Activo'),(2,'Suspendido'),(3,'De Baja');
/*!40000 ALTER TABLE `pilotos_estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `RolID` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(60) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`RolID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='Roles del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'System Administrador'),(2,'Administrador'),(4,'Operador');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicio`
--

DROP TABLE IF EXISTS `servicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicio` (
  `id_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(500) NOT NULL,
  `precio_publico` decimal(18,2) NOT NULL,
  `id_unidad_medida` int(11) NOT NULL,
  `peso_maximo` decimal(18,2) NOT NULL,
  `precio_peso_adicional` decimal(18,2) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `id_tipo_servicio` int(11) NOT NULL,
  `activo` bit(1) NOT NULL,
  PRIMARY KEY (`id_servicio`),
  KEY `servicio_tipo_servicio` (`id_tipo_servicio`),
  KEY `servicio_unidad_medida` (`id_unidad_medida`),
  CONSTRAINT `servicio_tipo_servicio` FOREIGN KEY (`id_tipo_servicio`) REFERENCES `tipo_servicio` (`id_tipo_servicio`),
  CONSTRAINT `servicio_unidad_medida` FOREIGN KEY (`id_unidad_medida`) REFERENCES `unidad_medida` (`id_unidad_medida`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='tabla para el almacenamiento de productos';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicio`
--

LOCK TABLES `servicio` WRITE;
/*!40000 ALTER TABLE `servicio` DISABLE KEYS */;
INSERT INTO `servicio` VALUES (1,'Basico',20.00,2,20.00,20.00,'2018-09-30',1,''),(2,'Caja',15.00,2,15.00,15.00,'2018-09-30',1,'');
/*!40000 ALTER TABLE `servicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicio_cliente`
--

DROP TABLE IF EXISTS `servicio_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicio_cliente` (
  `id_serviciocliente` int(11) NOT NULL AUTO_INCREMENT,
  `peso_maximo` decimal(18,2) NOT NULL,
  `precio` decimal(18,2) NOT NULL,
  `precio_peso_adicional` decimal(18,2) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  PRIMARY KEY (`id_serviciocliente`),
  KEY `servicio_cliente_clientes` (`id_cliente`),
  KEY `servicio_cliente_servicio` (`id_servicio`),
  CONSTRAINT `servicio_cliente_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  CONSTRAINT `servicio_cliente_servicio` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='tabla de servicios por cliente';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicio_cliente`
--

LOCK TABLES `servicio_cliente` WRITE;
/*!40000 ALTER TABLE `servicio_cliente` DISABLE KEYS */;
INSERT INTO `servicio_cliente` VALUES (3,10.00,10.00,10.00,1,1);
/*!40000 ALTER TABLE `servicio_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_doctos`
--

DROP TABLE IF EXISTS `tipo_doctos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_doctos` (
  `tipo_doctoid` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`tipo_doctoid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_doctos`
--

LOCK TABLES `tipo_doctos` WRITE;
/*!40000 ALTER TABLE `tipo_doctos` DISABLE KEYS */;
INSERT INTO `tipo_doctos` VALUES (1,'Factura');
/*!40000 ALTER TABLE `tipo_doctos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_servicio`
--

DROP TABLE IF EXISTS `tipo_servicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_servicio` (
  `id_tipo_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_servicio` varchar(250) NOT NULL,
  PRIMARY KEY (`id_tipo_servicio`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='tipos de servicio(producto o servicio)';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_servicio`
--

LOCK TABLES `tipo_servicio` WRITE;
/*!40000 ALTER TABLE `tipo_servicio` DISABLE KEYS */;
INSERT INTO `tipo_servicio` VALUES (1,'Productos'),(2,'Servicios'),(3,'otros');
/*!40000 ALTER TABLE `tipo_servicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_pago`
--

DROP TABLE IF EXISTS `tipos_pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_pago` (
  `id_tipo_pago` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_pago` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipo_pago`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='tabla para los diferentes tipos de pago que hay';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_pago`
--

LOCK TABLES `tipos_pago` WRITE;
/*!40000 ALTER TABLE `tipos_pago` DISABLE KEYS */;
INSERT INTO `tipos_pago` VALUES (1,'Paga Envia'),(2,'Paga Recibe'),(3,'Mixto');
/*!40000 ALTER TABLE `tipos_pago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tracking`
--

DROP TABLE IF EXISTS `tracking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tracking` (
  `id_tracking` int(11) NOT NULL AUTO_INCREMENT,
  `id_guia` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_guia_estado` int(11) NOT NULL,
  `observacion` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_tracking`),
  KEY `tracking_guias` (`id_guia`),
  KEY `tracking_guias_estado` (`id_guia_estado`),
  CONSTRAINT `tracking_guias` FOREIGN KEY (`id_guia`) REFERENCES `guias` (`id_guia`),
  CONSTRAINT `tracking_guias_estado` FOREIGN KEY (`id_guia_estado`) REFERENCES `guias_estado` (`id_guia_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tracking`
--

LOCK TABLES `tracking` WRITE;
/*!40000 ALTER TABLE `tracking` DISABLE KEYS */;
INSERT INTO `tracking` VALUES (7,10,'En bodega','2018-09-30 22:12:37',2,NULL),(9,11,'En bodega','2018-09-30 22:36:28',2,NULL),(11,12,'En bodega','2018-09-30 22:55:46',2,NULL),(16,10,'En transito','2018-09-30 23:05:04',3,NULL),(17,12,'En transito','2018-09-30 23:51:34',3,NULL),(18,11,'En transito','2018-09-30 23:51:39',3,NULL),(19,10,'Entregada','2018-10-01 00:08:27',4,'Entregada a Juan Adolfo'),(20,11,'Entregada','2018-10-01 00:15:59',4,'Entrtegada a Martin');
/*!40000 ALTER TABLE `tracking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unidad_medida`
--

DROP TABLE IF EXISTS `unidad_medida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unidad_medida` (
  `id_unidad_medida` int(11) NOT NULL AUTO_INCREMENT,
  `unidad_medida` varchar(250) NOT NULL,
  PRIMARY KEY (`id_unidad_medida`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='tabla para las unidades de medida de los servicios';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidad_medida`
--

LOCK TABLES `unidad_medida` WRITE;
/*!40000 ALTER TABLE `unidad_medida` DISABLE KEYS */;
INSERT INTO `unidad_medida` VALUES (1,'Libras'),(2,'Kilos');
/*!40000 ALTER TABLE `unidad_medida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_login`
--

DROP TABLE IF EXISTS `user_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `user_email` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `user_password` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_login`
--

LOCK TABLES `user_login` WRITE;
/*!40000 ALTER TABLE `user_login` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `avatar` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT 'default.jpg',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_confirmed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `RolID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `users_roles` (`RolID`),
  CONSTRAINT `users_roles` FOREIGN KEY (`RolID`) REFERENCES `roles` (`RolID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'santiago','123456@gmail.com','$2y$10$7QoBQjf8YmDC1/iW9q3/p.zVkhkyB4ZyXMhRryO991UNPjT/RjOHu','default.jpg','2018-06-16 01:01:39',NULL,0,0,0,1),(2,'julian','jponciano@gmail.com','$2y$10$J4gTMa6eWrZenErstkCr3eOf2SMjqHjMG8tTDjCgQOef.ByJ31dti','admin.jpg','0000-00-00 00:00:00',NULL,0,0,0,1),(3,'prueba','prueba@prueba.com','$2y$10$XWln8mOGR0UPedXyj/wHeeISe74wXLsyA4XUM2/sss8P1MbsYlF2q','default.jpg','0000-00-00 00:00:00',NULL,0,0,0,2),(4,'mariajose','mariajose@transportesdecarga.com.gt','$2y$10$WBvm8maUg6cLqSFsRMiPb.qp8UB.G0pccQSSent2MYLFKVKjagU6q','Women','0000-00-00 00:00:00',NULL,0,0,0,4);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `v_clientes`
--

DROP TABLE IF EXISTS `v_clientes`;
/*!50001 DROP VIEW IF EXISTS `v_clientes`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_clientes` AS SELECT 
 1 AS `id_cliente`,
 1 AS `nombre_comercial`,
 1 AS `razon_social`,
 1 AS `nit`,
 1 AS `direccion`,
 1 AS `telefono`,
 1 AS `email`,
 1 AS `fecha_ingreso`,
 1 AS `activo`,
 1 AS `aplica_pago_mensual`,
 1 AS `estado`,
 1 AS `peso_maximo`,
 1 AS `precio`,
 1 AS `precio_peso_adicional`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `v_guias`
--

DROP TABLE IF EXISTS `v_guias`;
/*!50001 DROP VIEW IF EXISTS `v_guias`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_guias` AS SELECT 
 1 AS `id_guia`,
 1 AS `codigo_guia`,
 1 AS `direccion_envia`,
 1 AS `direccion_recibe`,
 1 AS `responsable_envia`,
 1 AS `responsable_envia_telefono`,
 1 AS `responsable_recibe`,
 1 AS `responsable_recibe_telefono`,
 1 AS `tipo_pago`,
 1 AS `estado`,
 1 AS `porcentaje_pago_envia`,
 1 AS `porcentaje_pago_recibe`,
 1 AS `servicio`,
 1 AS `peso`,
 1 AS `total_pago_envia`,
 1 AS `total_pago_recibe`,
 1 AS `fecha_creacion`,
 1 AS `cliente_envia`,
 1 AS `cliente_recibe`,
 1 AS `lugar_origen`,
 1 AS `lugar_destino`,
 1 AS `tipo_usuario_crea`,
 1 AS `id_usuario_crea`,
 1 AS `id_guia_estado`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `v_guias_para_entregar`
--

DROP TABLE IF EXISTS `v_guias_para_entregar`;
/*!50001 DROP VIEW IF EXISTS `v_guias_para_entregar`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_guias_para_entregar` AS SELECT 
 1 AS `id_guia`,
 1 AS `codigo_guia`,
 1 AS `direccion_envia`,
 1 AS `direccion_recibe`,
 1 AS `responsable_envia`,
 1 AS `responsable_envia_telefono`,
 1 AS `responsable_recibe`,
 1 AS `responsable_recibe_telefono`,
 1 AS `tipo_pago`,
 1 AS `estado`,
 1 AS `porcentaje_pago_envia`,
 1 AS `porcentaje_pago_recibe`,
 1 AS `servicio`,
 1 AS `peso`,
 1 AS `total_pago_envia`,
 1 AS `total_pago_recibe`,
 1 AS `fecha_creacion`,
 1 AS `cliente_envia`,
 1 AS `cliente_recibe`,
 1 AS `lugar_origen`,
 1 AS `lugar_destino`,
 1 AS `tipo_usuario_crea`,
 1 AS `id_usuario_crea`,
 1 AS `id_guia_estado`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `v_manifiestos`
--

DROP TABLE IF EXISTS `v_manifiestos`;
/*!50001 DROP VIEW IF EXISTS `v_manifiestos`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_manifiestos` AS SELECT 
 1 AS `id_manifiesto`,
 1 AS `piloto`,
 1 AS `fecha_creacion`,
 1 AS `origen`,
 1 AS `destino`,
 1 AS `finalizado`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `v_manifiestos_detalle`
--

DROP TABLE IF EXISTS `v_manifiestos_detalle`;
/*!50001 DROP VIEW IF EXISTS `v_manifiestos_detalle`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_manifiestos_detalle` AS SELECT 
 1 AS `id_detalle_manifiesto`,
 1 AS `id_manifiesto`,
 1 AS `id_guia`,
 1 AS `codigo_guia`,
 1 AS `lugar_origen`,
 1 AS `lugar_destino`,
 1 AS `fecha_creacion`,
 1 AS `estado`,
 1 AS `id_guia_estado`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `v_manifiestos_pendientes_cerrar`
--

DROP TABLE IF EXISTS `v_manifiestos_pendientes_cerrar`;
/*!50001 DROP VIEW IF EXISTS `v_manifiestos_pendientes_cerrar`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_manifiestos_pendientes_cerrar` AS SELECT 
 1 AS `id_manifiesto`,
 1 AS `piloto`,
 1 AS `fecha_creacion`,
 1 AS `origen`,
 1 AS `destino`,
 1 AS `finalizado`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `v_manifiestos_traslados`
--

DROP TABLE IF EXISTS `v_manifiestos_traslados`;
/*!50001 DROP VIEW IF EXISTS `v_manifiestos_traslados`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_manifiestos_traslados` AS SELECT 
 1 AS `id_manifiesto`,
 1 AS `piloto`,
 1 AS `fecha_creacion`,
 1 AS `origen`,
 1 AS `destino`,
 1 AS `finalizado`,
 1 AS `id_piloto`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `v_pilotos`
--

DROP TABLE IF EXISTS `v_pilotos`;
/*!50001 DROP VIEW IF EXISTS `v_pilotos`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_pilotos` AS SELECT 
 1 AS `nombres`,
 1 AS `apellidos`,
 1 AS `identificacion`,
 1 AS `licencia_tipo`,
 1 AS `licencia`,
 1 AS `fecha_ingreso`,
 1 AS `pago_mensual`,
 1 AS `bonificacion_ley`,
 1 AS `bonificacion_incentivo`,
 1 AS `id_piloto_estado`,
 1 AS `telefono`,
 1 AS `email`,
 1 AS `direccion`,
 1 AS `estado`,
 1 AS `id_piloto`,
 1 AS `total_pago`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `v_tracking`
--

DROP TABLE IF EXISTS `v_tracking`;
/*!50001 DROP VIEW IF EXISTS `v_tracking`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_tracking` AS SELECT 
 1 AS `id_guia`,
 1 AS `descripcion`,
 1 AS `estado`,
 1 AS `fecha`,
 1 AS `hora`,
 1 AS `codigo_guia`,
 1 AS `id_tracking`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `v_clientes`
--

/*!50001 DROP VIEW IF EXISTS `v_clientes`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_clientes` AS select `a`.`id_cliente` AS `id_cliente`,`a`.`nombre_comercial` AS `nombre_comercial`,`a`.`razon_social` AS `razon_social`,`a`.`nit` AS `nit`,`a`.`direccion` AS `direccion`,`a`.`telefono` AS `telefono`,`a`.`email` AS `email`,`a`.`fecha_ingreso` AS `fecha_ingreso`,`a`.`activo` AS `activo`,`a`.`aplica_pago_mensual` AS `aplica_pago_mensual`,(case when (`a`.`activo` = 1) then 'Activo' else 'Inactivo' end) AS `estado`,ifnull(`b`.`peso_maximo`,0.00) AS `peso_maximo`,ifnull(`b`.`precio`,0.00) AS `precio`,ifnull(`b`.`precio_peso_adicional`,0.00) AS `precio_peso_adicional` from (`clientes` `a` left join `servicio_cliente` `b` on((`a`.`id_cliente` = `b`.`id_cliente`))) order by `a`.`activo` desc,`a`.`nombre_comercial` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_guias`
--

/*!50001 DROP VIEW IF EXISTS `v_guias`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_guias` AS select `a`.`id_guia` AS `id_guia`,`a`.`codigo_guia` AS `codigo_guia`,`a`.`direccion_envia` AS `direccion_envia`,`a`.`direccion_recibe` AS `direccion_recibe`,`a`.`responsable_envia` AS `responsable_envia`,`a`.`responsable_envia_telefono` AS `responsable_envia_telefono`,`a`.`responsable_recibe` AS `responsable_recibe`,`a`.`responsable_recibe_telefono` AS `responsable_recibe_telefono`,`b`.`tipo_pago` AS `tipo_pago`,`c`.`estado` AS `estado`,`a`.`porcentaje_pago_envia` AS `porcentaje_pago_envia`,`a`.`porcentaje_pago_recibe` AS `porcentaje_pago_recibe`,`d`.`descripcion` AS `servicio`,`a`.`peso` AS `peso`,`a`.`total_pago_envia` AS `total_pago_envia`,`a`.`total_pago_recibe` AS `total_pago_recibe`,`a`.`fecha_creacion` AS `fecha_creacion`,`e`.`nombre_comercial` AS `cliente_envia`,`f`.`nombre_comercial` AS `cliente_recibe`,`g`.`lugar` AS `lugar_origen`,`h`.`lugar` AS `lugar_destino`,`a`.`tipo_usuario_crea` AS `tipo_usuario_crea`,`a`.`id_usuario_crea` AS `id_usuario_crea`,`a`.`id_guia_estado` AS `id_guia_estado` from (((((((`guias` `a` left join `tipos_pago` `b` on((`a`.`id_tipo_pago` = `b`.`id_tipo_pago`))) left join `guias_estado` `c` on((`a`.`id_guia_estado` = `c`.`id_guia_estado`))) left join `servicio` `d` on((`a`.`id_servicio` = `d`.`id_servicio`))) left join `clientes` `e` on((`a`.`id_cliente_envia` = `e`.`id_cliente`))) left join `clientes` `f` on((`a`.`id_cliente_recibe` = `f`.`id_cliente`))) left join `lugares` `g` on((`a`.`id_lugar_origen` = `g`.`id_lugar`))) left join `lugares` `h` on((`a`.`id_lugar_destino` = `h`.`id_lugar`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_guias_para_entregar`
--

/*!50001 DROP VIEW IF EXISTS `v_guias_para_entregar`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_guias_para_entregar` AS select `a`.`id_guia` AS `id_guia`,`a`.`codigo_guia` AS `codigo_guia`,`a`.`direccion_envia` AS `direccion_envia`,`a`.`direccion_recibe` AS `direccion_recibe`,`a`.`responsable_envia` AS `responsable_envia`,`a`.`responsable_envia_telefono` AS `responsable_envia_telefono`,`a`.`responsable_recibe` AS `responsable_recibe`,`a`.`responsable_recibe_telefono` AS `responsable_recibe_telefono`,`b`.`tipo_pago` AS `tipo_pago`,`c`.`estado` AS `estado`,`a`.`porcentaje_pago_envia` AS `porcentaje_pago_envia`,`a`.`porcentaje_pago_recibe` AS `porcentaje_pago_recibe`,`d`.`descripcion` AS `servicio`,`a`.`peso` AS `peso`,`a`.`total_pago_envia` AS `total_pago_envia`,`a`.`total_pago_recibe` AS `total_pago_recibe`,`a`.`fecha_creacion` AS `fecha_creacion`,`e`.`nombre_comercial` AS `cliente_envia`,`f`.`nombre_comercial` AS `cliente_recibe`,`g`.`lugar` AS `lugar_origen`,`h`.`lugar` AS `lugar_destino`,`a`.`tipo_usuario_crea` AS `tipo_usuario_crea`,`a`.`id_usuario_crea` AS `id_usuario_crea`,`a`.`id_guia_estado` AS `id_guia_estado` from (((((((`guias` `a` left join `tipos_pago` `b` on((`a`.`id_tipo_pago` = `b`.`id_tipo_pago`))) left join `guias_estado` `c` on((`a`.`id_guia_estado` = `c`.`id_guia_estado`))) left join `servicio` `d` on((`a`.`id_servicio` = `d`.`id_servicio`))) left join `clientes` `e` on((`a`.`id_cliente_envia` = `e`.`id_cliente`))) left join `clientes` `f` on((`a`.`id_cliente_recibe` = `f`.`id_cliente`))) left join `lugares` `g` on((`a`.`id_lugar_origen` = `g`.`id_lugar`))) left join `lugares` `h` on((`a`.`id_lugar_destino` = `h`.`id_lugar`))) where (`a`.`id_guia_estado` = 3) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_manifiestos`
--

/*!50001 DROP VIEW IF EXISTS `v_manifiestos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_manifiestos` AS select `a`.`id_manifiesto` AS `id_manifiesto`,`b`.`nombres` AS `piloto`,`a`.`fecha_creacion` AS `fecha_creacion`,`c`.`lugar` AS `origen`,`d`.`lugar` AS `destino`,`a`.`finalizado` AS `finalizado` from (((`manifiestos` `a` left join `pilotos` `b` on((`a`.`id_piloto` = `b`.`id_piloto`))) left join `lugares` `c` on((`a`.`id_lugar_origen` = `c`.`id_lugar`))) left join `lugares` `d` on((`a`.`id_lugar_destino` = `d`.`id_lugar`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_manifiestos_detalle`
--

/*!50001 DROP VIEW IF EXISTS `v_manifiestos_detalle`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_manifiestos_detalle` AS select `a`.`id_detalle_manifiesto` AS `id_detalle_manifiesto`,`a`.`id_manifiesto` AS `id_manifiesto`,`a`.`id_guia` AS `id_guia`,`b`.`codigo_guia` AS `codigo_guia`,`b`.`lugar_origen` AS `lugar_origen`,`b`.`lugar_destino` AS `lugar_destino`,`b`.`fecha_creacion` AS `fecha_creacion`,`b`.`estado` AS `estado`,`b`.`id_guia_estado` AS `id_guia_estado` from (`manifiestos_detalle` `a` left join `v_guias` `b` on((`a`.`id_guia` = `b`.`id_guia`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_manifiestos_pendientes_cerrar`
--

/*!50001 DROP VIEW IF EXISTS `v_manifiestos_pendientes_cerrar`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_manifiestos_pendientes_cerrar` AS select `a`.`id_manifiesto` AS `id_manifiesto`,`b`.`nombres` AS `piloto`,`a`.`fecha_creacion` AS `fecha_creacion`,`c`.`lugar` AS `origen`,`d`.`lugar` AS `destino`,`a`.`finalizado` AS `finalizado` from (((`manifiestos` `a` left join `pilotos` `b` on((`a`.`id_piloto` = `b`.`id_piloto`))) left join `lugares` `c` on((`a`.`id_lugar_origen` = `c`.`id_lugar`))) left join `lugares` `d` on((`a`.`id_lugar_destino` = `d`.`id_lugar`))) where (not(`a`.`id_manifiesto` in (select `a`.`id_manifiesto` from (`manifiestos_detalle` `a` left join `guias` `b` on((`a`.`id_guia` = `b`.`id_guia`))) where (`b`.`id_guia_estado` in (1,2,3)) group by `a`.`id_manifiesto`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_manifiestos_traslados`
--

/*!50001 DROP VIEW IF EXISTS `v_manifiestos_traslados`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_manifiestos_traslados` AS select `a`.`id_manifiesto` AS `id_manifiesto`,`b`.`nombres` AS `piloto`,`a`.`fecha_creacion` AS `fecha_creacion`,`c`.`lugar` AS `origen`,`d`.`lugar` AS `destino`,`a`.`finalizado` AS `finalizado`,`a`.`id_piloto` AS `id_piloto` from (((`manifiestos` `a` left join `pilotos` `b` on((`a`.`id_piloto` = `b`.`id_piloto`))) left join `lugares` `c` on((`a`.`id_lugar_origen` = `c`.`id_lugar`))) left join `lugares` `d` on((`a`.`id_lugar_destino` = `d`.`id_lugar`))) where (`a`.`finalizado` = 0) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_pilotos`
--

/*!50001 DROP VIEW IF EXISTS `v_pilotos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_pilotos` AS select `a`.`nombres` AS `nombres`,`a`.`apellidos` AS `apellidos`,`a`.`identificacion` AS `identificacion`,`a`.`licencia_tipo` AS `licencia_tipo`,`a`.`licencia` AS `licencia`,`a`.`fecha_ingreso` AS `fecha_ingreso`,`a`.`pago_mensual` AS `pago_mensual`,`a`.`bonificacion_ley` AS `bonificacion_ley`,`a`.`bonificacion_incentivo` AS `bonificacion_incentivo`,`a`.`id_piloto_estado` AS `id_piloto_estado`,`a`.`telefono` AS `telefono`,`a`.`email` AS `email`,`a`.`direccion` AS `direccion`,`b`.`estado` AS `estado`,`a`.`id_piloto` AS `id_piloto`,((`a`.`pago_mensual` + `a`.`bonificacion_ley`) + `a`.`bonificacion_incentivo`) AS `total_pago` from (`pilotos` `a` left join `pilotos_estado` `b` on((`a`.`id_piloto_estado` = `b`.`id_piloto_estado`))) order by `a`.`id_piloto_estado` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_tracking`
--

/*!50001 DROP VIEW IF EXISTS `v_tracking`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_tracking` AS select `a`.`id_guia` AS `id_guia`,`a`.`descripcion` AS `descripcion`,`c`.`estado` AS `estado`,cast(`a`.`fecha` as date) AS `fecha`,date_format(cast(`a`.`fecha` as time),'%r') AS `hora`,`b`.`codigo_guia` AS `codigo_guia`,`a`.`id_tracking` AS `id_tracking` from ((`tracking` `a` left join `guias` `b` on((`a`.`id_guia` = `b`.`id_guia`))) left join `guias_estado` `c` on((`a`.`id_guia_estado` = `c`.`id_guia_estado`))) order by cast(`a`.`fecha` as date) desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-30 16:18:31
