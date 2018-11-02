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
INSERT INTO `ci_sessions` VALUES ('0cde57ft0v2s2m2e1gbq84pe1irkldet','::1',1540924038,'__ci_last_regenerate|i:1540924038;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('0ieg09maefctg04rb4nd4ho489b93ha6','::1',1540920794,'__ci_last_regenerate|i:1540920794;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('11ubmheens8d18jvihvd4t04jgr7931v','::1',1539564932,'__ci_last_regenerate|i:1539564932;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('1v67u459nbhsc8b6k3ecg5rdkdm6h5af','::1',1539573540,'__ci_last_regenerate|i:1539573248;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('21f1csaqukg8lbptoep5to7pvb0a8d22','::1',1539899720,'__ci_last_regenerate|i:1539899438;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('256uk3k61p9nbpci5d7vekie5g3ag4o1','::1',1540775169,'__ci_last_regenerate|i:1540775169;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2nr8d6i17ega11v07uhs4cbt70sfb27j','::1',1540852312,'__ci_last_regenerate|i:1540852187;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3kcq6vue520jb42hbh1p5rc0thumjps7','::1',1540929621,'__ci_last_regenerate|i:1540929621;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3lq7pjhfnsuq0ip2uo526vbspdapeu88','::1',1540852996,'__ci_last_regenerate|i:1540852980;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3mhjclgl0iprjmglrmjh3c819u5sbmnq','::1',1540930243,'__ci_last_regenerate|i:1540930243;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('47hu8g5pvb6pit8sekl8177idrrhu5q4','::1',1539821387,'__ci_last_regenerate|i:1539821335;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('4m51fht44cntrin0ueur07u6dkcr0osm','::1',1540776438,'__ci_last_regenerate|i:1540776438;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('51d87f8o042kqebtfupf1fr9cd8tnmfv','::1',1539908525,'__ci_last_regenerate|i:1539908256;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('51tf8j3a3trla0r1eugrqpmh12h04hjo','::1',1540778320,'__ci_last_regenerate|i:1540778320;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('5gufqb2rm2c1pvqo3hph3q542iqr9cnr','::1',1540856834,'__ci_last_regenerate|i:1540856551;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('5ofais1nfoi7qqf4v4t6obq2drlmup5o','::1',1540857952,'__ci_last_regenerate|i:1540857667;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('5s175jp2cu06e4h1j6b3of9235vits4i','::1',1540851216,'__ci_last_regenerate|i:1540851203;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('6kqjm68rvj1327fru2mdg50f0jckop5v','::1',1539909290,'__ci_last_regenerate|i:1539909210;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('6t7dad4ggsnrcn80a2m1bv1ivo46vugn','::1',1540919134,'__ci_last_regenerate|i:1540919134;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('6tn12out04a0f868enbld83j0jn1qebv','::1',1540777860,'__ci_last_regenerate|i:1540777860;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8625fteif2s0i07mt5lrpn4khd15ocjm','::1',1539908807,'__ci_last_regenerate|i:1539908794;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('86rt90mv0krqhjvuvvhn727f9asee5sp','::1',1540919471,'__ci_last_regenerate|i:1540919471;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('89tie3fakfcnkbp4nfnmahti3kono74c','::1',1540855112,'__ci_last_regenerate|i:1540855112;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8grvrc5knoc2hv0qm5vhv1818lot40hl','::1',1540852745,'__ci_last_regenerate|i:1540852534;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8u05bk1bl2mu827jlqc0gmuiukggu6d9','::1',1540780313,'__ci_last_regenerate|i:1540780313;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('93iaqeuebekpnvnahiapcrcos8q0pcoo','::1',1540928077,'__ci_last_regenerate|i:1540928077;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('95p44klqhvu25kv788kieqjk5607vepn','::1',1540930251,'__ci_last_regenerate|i:1540930243;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('9fliddv9k252ut8vnhqu1lrbmksk0nj9','::1',1539819633,'__ci_last_regenerate|i:1539809555;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('a8alrcbs05mjt0dulmgj3f3o14q592gg','::1',1539822163,'__ci_last_regenerate|i:1539821941;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('actktcqu8058m0s4cqiho65e10iseis6','::1',1540918052,'__ci_last_regenerate|i:1540918052;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('afssidg9rgp0d27cam7mgrq6jmnpshco','::1',1540854879,'__ci_last_regenerate|i:1540854596;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('arhggv27cfs6l3n64uqc4g28jq8ve7ei','::1',1539565607,'__ci_last_regenerate|i:1539565607;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b88cj4i6qqo3d1vo5l01knffdt22a8vo','::1',1540926620,'__ci_last_regenerate|i:1540926620;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ca9qapgqbes0ppbu2p4rrm14mqgd0rsj','::1',1540920480,'__ci_last_regenerate|i:1540920480;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('csbr6mg39s9lte8muv5k7futiln7h665','::1',1540781460,'__ci_last_regenerate|i:1540781460;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('dtmn1jco78kl416uodibsugcnftb6efl','::1',1539571971,'__ci_last_regenerate|i:1539571971;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('f7abpn3r5jfk6fi426h210gpg1ag8pfv','::1',1540858214,'__ci_last_regenerate|i:1540858067;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('fc1mshoqg8effdvdvnm9tvjn3teldo4u','::1',1540857387,'__ci_last_regenerate|i:1540857238;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('fcbotp0v3fqfirjiock39v7k6mn6cd7g','::1',1539908212,'__ci_last_regenerate|i:1539907943;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('g3jbl9ojj7kd2rnic0hof753bgovc5mt','::1',1539808719,'__ci_last_regenerate|i:1539808695;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('gjnhcbjocnorogr1fmhqm77rncke9fnh','::1',1539568708,'__ci_last_regenerate|i:1539568708;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('gnk96jgq1ea88hgncdv1t20cf6ahdvpo','::1',1540856207,'__ci_last_regenerate|i:1540855907;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ij2c1gvf94bp6962p1ku7q1gp06c0bsr','::1',1540773395,'__ci_last_regenerate|i:1540773395;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ijqtpc3p7jcot0uoqksvmjs1gfv6u705','::1',1539569026,'__ci_last_regenerate|i:1539569026;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('j0aktt74s6m5cj604tvhprdvnmco660m','::1',1540918374,'__ci_last_regenerate|i:1540918374;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('j74j74mqk3nopqh69ev1ngprp1s9giof','::1',1540779058,'__ci_last_regenerate|i:1540779058;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('jiniro9cm2nrc0v5n7q6qe8aihrea3ra','::1',1540928735,'__ci_last_regenerate|i:1540928735;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('jmc6rdsa20e2q4k5crnpm5bg79ejec06','::1',1540856451,'__ci_last_regenerate|i:1540856209;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('joki9sut36p02s7sj3tukl3uekv2n5c7','::1',1540927688,'__ci_last_regenerate|i:1540927688;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('k0thv76qjph07aq0abrrh3jmegs24b4l','::1',1540778705,'__ci_last_regenerate|i:1540778705;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('k2talg2fv3vnup77lqamf98e4t27cesn','::1',1539566389,'__ci_last_regenerate|i:1539566389;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('lsk0jk7cmjtiffsr91eapvudqi7mdn6j','::1',1539809365,'__ci_last_regenerate|i:1539809073;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('mk3j78mbjmr2aglmqr5ap1lbp81fdq7q','::1',1540775586,'__ci_last_regenerate|i:1540775586;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('n6705ie3p0vh285f0nuck17j6jkckl76','::1',1539573248,'__ci_last_regenerate|i:1539573248;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('nv1ja7bpgl54ad4950hi9kbouh334fse','::1',1539820849,'__ci_last_regenerate|i:1539820821;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('nv7n6c3n9jnva1el41ri636iq35pvklp','::1',1540927075,'__ci_last_regenerate|i:1540927075;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ot881h2nk2pffqvs7ff6jvpvmi9367i5','::1',1540925306,'__ci_last_regenerate|i:1540925306;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('p4jtq9h1lq36koep8cesonrqjp926uh9','::1',1540857160,'__ci_last_regenerate|i:1540856896;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('pkog108o6jqp0r1erf62k9ecj9pr86ti','::1',1540929302,'__ci_last_regenerate|i:1540929302;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('q43depnsh08futbs51s7q8q2kusde11a','::1',1540921387,'__ci_last_regenerate|i:1540921387;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('qp62650fhsdhltrm0rro4m567gtfqh7b','::1',1539910337,'__ci_last_regenerate|i:1539910094;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('qp7f14aa1dodafljvsq8hujugql9ivcp','::1',1539572751,'__ci_last_regenerate|i:1539572751;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('rnk346q607b704dsgrkb5n7vfpbihp60','::1',1539819678,'__ci_last_regenerate|i:1539819649;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('s571gu72opg7mn676ttice4o6fh1oc6v','::1',1539566883,'__ci_last_regenerate|i:1539566883;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('s6bq8ct8nos9p9dsva9a83fu2kjeorct','::1',1540779960,'__ci_last_regenerate|i:1540779960;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('s83qfge8erhb1sdu1j721f5dgf6568df','::1',1539820673,'__ci_last_regenerate|i:1539820458;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('smt6gn23t7gt1j6ld9m6grvl2jc0haq5','::1',1539910052,'__ci_last_regenerate|i:1539909767;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ss32e300j9996fqhf06tpsnsf2f1tob6','::1',1539907757,'__ci_last_regenerate|i:1539907601;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('t72rso1js74smm1u6a4rpujqoc7tm5rm','::1',1539821937,'__ci_last_regenerate|i:1539821638;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('uji54c6nc828uno3uqpbogsjpjo616bn','::1',1540919891,'__ci_last_regenerate|i:1540919891;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('uob0ebqsgnkf088i94j0vs0os4s3bcd0','::1',1540924038,'__ci_last_regenerate|i:1540924038;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('vaoodh9t9krggjfk1uq0tv6oktuv20u2','::1',1540779534,'__ci_last_regenerate|i:1540779534;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('vbro796u3669ero9fp6virea57tdfcpb','::1',1540775953,'__ci_last_regenerate|i:1540775953;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;');
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COMMENT='tabla de clientes de la empresa';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (4,'Santiago Martinez 2','Santiago Martinez 2','225588877-8','Guatemala, Guatemala','56306910','santiagodejesusmartinez@gmail.com','2018-10-03','',NULL),(5,'Santiago Martinez','Santiago Martinez','225588877-8','Guatemala, Guatemala','56306910','santiagodejesusmartinez@gmail.com','2018-10-03','',NULL),(12,'sdfs','sdf','sd','sdf','sdf','sdf','2018-10-17','',NULL),(13,'asdas','asd','asd','asd','asd','asd','2018-10-18','',NULL);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes_vendedores`
--

DROP TABLE IF EXISTS `clientes_vendedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes_vendedores` (
  `cliente_vendedor_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`cliente_vendedor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes_vendedores`
--

LOCK TABLES `clientes_vendedores` WRITE;
/*!40000 ALTER TABLE `clientes_vendedores` DISABLE KEYS */;
INSERT INTO `clientes_vendedores` VALUES (9,2,12),(10,4,12),(11,3,13),(12,1,13),(13,2,4),(14,3,4),(15,2,5),(16,3,5);
/*!40000 ALTER TABLE `clientes_vendedores` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1 COMMENT='controladores del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controladores`
--

LOCK TABLES `controladores` WRITE;
/*!40000 ALTER TABLE `controladores` DISABLE KEYS */;
INSERT INTO `controladores` VALUES (1,'Usuarios Admin',1,'admin/usuario_admin',4),(3,'Clientes',2,'clientes/clientes',0),(4,'Origenes y Destinos',3,'transporte/lugares',0),(7,'Tipos de Documentos',6,'facturacion/tipo_doctos',1),(8,'Menus',1,'admin/menus',1),(9,'Roles',1,'admin/roles',3),(12,'Tipos Pago',6,'facturacion/tipos_pago',2),(21,'Manifiestos',3,'transporte/manifiestos',3),(22,'Traslado de manifiestos',3,'transporte/manifiestos_traslado',4),(23,'Manifiestos por piloto',8,'transporte/manifiestos_reporte',1),(24,'Pilotos',9,'transporte/pilotos',2),(25,'Estado Piloto',9,'transporte/estados_piloto',1),(26,'Tipos de Servicios',10,'transporte/tipo_servicio',1),(27,'Unidades de Medida',10,'transporte/unidad_medida',2),(28,'Estado Guias',11,'transporte/guias_estado',1),(29,'Guias',11,'transporte/guias',2),(30,'Servicios',10,'transporte/servicios',3),(31,'Guias pendientes de entrega',11,'transporte/manifiestos_entrega_guias',3),(32,'Manifiestos pendientes cierre',3,'transporte/manifiestos_pendientes_cierre',4),(33,'Facturacion',6,'facturacion/facturacion',3),(34,'Pendientes  de Pago',6,'facturacion/facturacion/obtener_facturados',4);
/*!40000 ALTER TABLE `controladores` ENABLE KEYS */;
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
  `total_general` decimal(18,2) DEFAULT NULL,
  `documento_estado_id` int(11) DEFAULT NULL,
  `fecha_cancelada` datetime DEFAULT NULL,
  `fecha_pagada` datetime DEFAULT NULL,
  PRIMARY KEY (`id_documento`),
  KEY `documentos_clientes` (`id_cliente`),
  KEY `documentos_tipo_doctos` (`tipo_doctoid`),
  CONSTRAINT `documentos_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  CONSTRAINT `documentos_tipo_doctos` FOREIGN KEY (`tipo_doctoid`) REFERENCES `tipo_doctos` (`tipo_doctoid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COMMENT='todo tipo de documento ingresado';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documentos`
--

LOCK TABLES `documentos` WRITE;
/*!40000 ALTER TABLE `documentos` DISABLE KEYS */;
INSERT INTO `documentos` VALUES (3,1,0,5,'2018-10-29','2018-07-01','2018-10-14',1,90.00,2,NULL,'2018-10-30 18:29:45'),(4,1,1,5,'2018-10-29','2018-10-01','2018-10-30',1,0.00,2,NULL,'2018-10-30 18:29:46'),(7,1,4,13,'2018-10-30','2018-10-30','2018-10-30',1,NULL,1,NULL,NULL),(8,1,5,5,'2018-10-30','2017-12-01','2018-10-30',1,22652.00,1,NULL,NULL);
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
  `tipo_facturar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detalle_documento`),
  KEY `documentos_detalle_documentos` (`id_documento`),
  KEY `documentos_detalle_guias` (`id_guia`),
  CONSTRAINT `documentos_detalle_documentos` FOREIGN KEY (`id_documento`) REFERENCES `documentos` (`id_documento`),
  CONSTRAINT `documentos_detalle_guias` FOREIGN KEY (`id_guia`) REFERENCES `guias` (`id_guia`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='detalle de documentos';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documentos_detalle`
--

LOCK TABLES `documentos_detalle` WRITE;
/*!40000 ALTER TABLE `documentos_detalle` DISABLE KEYS */;
INSERT INTO `documentos_detalle` VALUES (1,3,10,90.00,2),(2,8,24,35.00,1),(3,8,23,15.00,1),(4,8,25,105.00,1),(5,8,11,3.00,2),(6,8,12,22494.00,1);
/*!40000 ALTER TABLE `documentos_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documentos_estado`
--

DROP TABLE IF EXISTS `documentos_estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documentos_estado` (
  `documento_estado_id` int(11) NOT NULL AUTO_INCREMENT,
  `documento_estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`documento_estado_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documentos_estado`
--

LOCK TABLES `documentos_estado` WRITE;
/*!40000 ALTER TABLE `documentos_estado` DISABLE KEYS */;
INSERT INTO `documentos_estado` VALUES (1,'Facturada'),(2,'Pagada'),(3,'Anulada');
/*!40000 ALTER TABLE `documentos_estado` ENABLE KEYS */;
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
  `factura_envia` decimal(18,2) DEFAULT '0.00',
  `factura_recibe` decimal(18,2) DEFAULT '0.00',
  PRIMARY KEY (`id_guia`),
  KEY `guias_guias_estado` (`id_guia_estado`),
  KEY `guias_servicio` (`id_servicio`),
  KEY `guias_tipos_pago` (`id_tipo_pago`),
  CONSTRAINT `guias_guias_estado` FOREIGN KEY (`id_guia_estado`) REFERENCES `guias_estado` (`id_guia_estado`),
  CONSTRAINT `guias_servicio` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`),
  CONSTRAINT `guias_tipos_pago` FOREIGN KEY (`id_tipo_pago`) REFERENCES `tipos_pago` (`id_tipo_pago`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 COMMENT='guias del ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guias`
--

LOCK TABLES `guias` WRITE;
/*!40000 ALTER TABLE `guias` DISABLE KEYS */;
INSERT INTO `guias` VALUES (10,'3000001','Palin,Escuintla','Zona 2, el Xapote','Santiago','56306910','Juan Adolfo','55887788',2,4,0.00,100.00,2,20.00,0.00,90.00,'2018-09-27',5,5,4,3,2,1,15.00,15.00,15.00,0,0.00,90.00),(11,'3000002','Zona 15 ','Puerto Barrios','Oscar','88779955','Martin','99665544',3,4,80.00,20.00,2,10.00,12.00,3.00,'2018-09-27',5,5,3,2,2,1,15.00,15.00,15.00,0,20.00,3.00),(12,'3000003','345','345','345','345','345','345',3,2,345.00,345.00,1,345.00,22494.00,22494.00,'2018-09-27',5,4,4,4,2,1,20.00,20.00,20.00,0,22494.00,0.00),(13,'3000004','Guatemala','Guatemala','Juan Lopez','56306910','Juan Adolfo','56306910',3,2,75.00,25.00,1,15.00,15.00,5.00,'2018-09-30',4,4,4,4,2,1,20.00,20.00,20.00,0,0.00,0.00),(14,'01002','Guatemala','Guatemala, Guatemala','Santiago','','Juan Adolfo','',1,2,100.00,0.00,1,1.00,20.00,0.00,'2018-10-04',4,4,4,4,2,1,20.00,20.00,20.00,0,0.00,0.00),(17,'2345434','Guatemala, Guatemala','Guatemala, Guatemala','345','345','345','345',3,2,0.00,0.00,1,200.00,3620.00,0.00,'2018-10-12',4,4,3,4,2,1,20.00,20.00,20.00,0,0.00,0.00),(18,'asd','Guatemala, Guatemala','ert','rtrt1|','|ftgyh','ert','errt',1,2,100.00,0.00,1,0.00,20.00,0.00,'2018-10-12',4,5,3,4,2,1,20.00,20.00,20.00,0,0.00,0.00),(19,'546465465','Guatemala, Guatemala','Guatemala, Guatemala','345345','3454345','34534','3454345',1,1,100.00,0.00,2,200.00,2790.00,0.00,'2018-10-15',4,4,3,4,2,1,15.00,15.00,15.00,0,0.00,0.00),(20,'','2','2','2','','2','2',1,5,100.00,0.00,2,2.00,15.00,0.00,'2018-10-17',5,5,4,4,2,1,15.00,15.00,15.00,0,0.00,0.00),(21,'','dfgf','dfgd','dgd','dfg','dfg','dfgd',1,5,100.00,0.00,2,3.00,15.00,0.00,'2018-10-17',5,5,4,4,2,1,15.00,15.00,15.00,0,0.00,0.00),(22,'','22','2','2','2','2','2',3,5,0.00,0.00,2,20.00,0.00,0.00,'2018-10-18',5,5,4,4,2,1,15.00,15.00,15.00,0,0.00,0.00),(23,'1231','46546','56465','45646','56465','54646','5645',1,1,100.00,0.00,2,0.00,15.00,0.00,'2018-10-18',5,5,4,4,2,1,15.00,15.00,15.00,0,15.00,0.00),(24,'1231','46546','56465','45646','56465','54646','5645',1,1,100.00,0.00,2,0.00,15.00,0.00,'2018-10-18',5,5,4,4,2,1,0.00,0.00,0.00,0,35.00,0.00),(25,'2132','21321','21312','23132','2132','21313','23132',1,1,100.00,0.00,2,21.00,105.00,0.00,'2018-10-18',5,5,4,4,2,1,15.00,15.00,15.00,0,105.00,0.00);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='estados de las guias';
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
  `codigo_guia_hija` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `id_servicio` int(11) DEFAULT NULL,
  `peso` decimal(18,2) DEFAULT NULL,
  `total_pago_recibe` decimal(18,2) DEFAULT NULL,
  `total_pago_envia` decimal(18,2) DEFAULT NULL,
  `peso_maximo` decimal(18,2) DEFAULT NULL,
  `precio` decimal(18,2) DEFAULT NULL,
  `precio_peso_adicional` decimal(18,2) DEFAULT NULL,
  `precio_especial` int(11) DEFAULT NULL,
  `porcentaje_pago_envia` decimal(18,2) DEFAULT NULL,
  `porcentaje_pago_recibe` decimal(18,2) DEFAULT NULL,
  PRIMARY KEY (`id_guia_hija`),
  UNIQUE KEY `id_guia_hija_UNIQUE` (`id_guia_hija`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guias_hijas`
--

LOCK TABLES `guias_hijas` WRITE;
/*!40000 ALTER TABLE `guias_hijas` DISABLE KEYS */;
INSERT INTO `guias_hijas` VALUES (6,14,'2018-10-08 06:29:54','123456',1,20.00,0.00,20.00,20.00,20.00,20.00,0,100.00,0.00),(7,24,'2018-10-18 02:00:35','2131',1,12.00,0.00,20.00,20.00,20.00,20.00,0,100.00,0.00);
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='manifiestos de carga';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manifiestos`
--

LOCK TABLES `manifiestos` WRITE;
/*!40000 ALTER TABLE `manifiestos` DISABLE KEYS */;
INSERT INTO `manifiestos` VALUES (3,3,'2018-09-30','',4,4),(4,1,'2018-09-30','\0',4,4),(5,1,'2018-10-12','\0',4,4),(6,1,'2018-10-12','\0',4,4),(7,1,'2018-10-12','\0',3,4);
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manifiestos_detalle`
--

LOCK TABLES `manifiestos_detalle` WRITE;
/*!40000 ALTER TABLE `manifiestos_detalle` DISABLE KEYS */;
INSERT INTO `manifiestos_detalle` VALUES (7,3,10),(8,3,11),(9,4,12),(10,4,13),(11,6,12),(12,6,13),(13,6,14),(14,7,17),(15,7,18);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Roles del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'System Administrador'),(2,'Administrador'),(4,'Operador'),(5,'Vendedor');
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabla de servicios por cliente';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicio_cliente`
--

LOCK TABLES `servicio_cliente` WRITE;
/*!40000 ALTER TABLE `servicio_cliente` DISABLE KEYS */;
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
  `serie` varchar(2) DEFAULT NULL,
  `correlativo_Inicial` int(11) DEFAULT NULL,
  `correlativo_final` int(11) DEFAULT NULL,
  `correlativo_toca` int(11) DEFAULT NULL,
  `correlativo_usa` bit(1) DEFAULT NULL,
  PRIMARY KEY (`tipo_doctoid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_doctos`
--

LOCK TABLES `tipo_doctos` WRITE;
/*!40000 ALTER TABLE `tipo_doctos` DISABLE KEYS */;
INSERT INTO `tipo_doctos` VALUES (1,'Factura','A',0,5000,6,'');
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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tracking`
--

LOCK TABLES `tracking` WRITE;
/*!40000 ALTER TABLE `tracking` DISABLE KEYS */;
INSERT INTO `tracking` VALUES (7,10,'En bodega','2018-09-30 22:12:37',2,NULL),(9,11,'En bodega','2018-09-30 22:36:28',2,NULL),(11,12,'En bodega','2018-09-30 22:55:46',2,NULL),(16,10,'En transito','2018-09-30 23:05:04',3,NULL),(17,12,'En transito','2018-09-30 23:51:34',3,NULL),(18,11,'En transito','2018-09-30 23:51:39',3,NULL),(19,10,'Entregada','2018-10-01 00:08:27',4,'Entregada a Juan Adolfo'),(20,11,'Entregada','2018-10-01 00:15:59',4,'Entrtegada a Martin'),(21,13,'En bodega','2018-10-02 03:11:04',2,NULL),(22,14,'Guia Creada','2018-10-04 07:38:45',1,NULL),(23,17,'Guia Creada','2018-10-12 06:45:52',1,NULL),(24,18,'Guia Creada','2018-10-12 06:47:19',1,NULL),(25,12,'En bodega','2018-10-12 07:10:29',2,NULL),(26,13,'En bodega','2018-10-12 07:10:29',2,NULL),(27,14,'En bodega','2018-10-12 07:10:29',2,NULL),(28,17,'En bodega','2018-10-12 07:11:46',2,NULL),(29,18,'En bodega','2018-10-12 07:11:47',2,NULL),(30,19,'Guia Creada','2018-10-15 03:28:25',1,NULL),(31,20,'Guia Creada','2018-10-17 22:45:35',1,NULL),(32,21,'Guia Creada','2018-10-17 22:54:59',1,NULL),(33,22,'Guia Creada','2018-10-18 01:40:49',1,NULL),(34,23,'Guia Creada','2018-10-18 01:57:53',1,NULL),(35,24,'Guia Creada','2018-10-18 02:00:24',1,NULL),(36,25,'Guia Creada','2018-10-18 02:17:44',1,NULL);
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
-- Temporary view structure for view `v_documentos`
--

DROP TABLE IF EXISTS `v_documentos`;
/*!50001 DROP VIEW IF EXISTS `v_documentos`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_documentos` AS SELECT 
 1 AS `id_documento`,
 1 AS `tipo_doctoid`,
 1 AS `correlativo`,
 1 AS `id_cliente`,
 1 AS `fecha_creacion`,
 1 AS `fecha_inicio`,
 1 AS `fecha_fin`,
 1 AS `user_login_id`,
 1 AS `total_general`,
 1 AS `tipo_docto`,
 1 AS `cliente`,
 1 AS `documento_estado_id`,
 1 AS `documento_estado`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `v_documentos_detalle`
--

DROP TABLE IF EXISTS `v_documentos_detalle`;
/*!50001 DROP VIEW IF EXISTS `v_documentos_detalle`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_documentos_detalle` AS SELECT 
 1 AS `id_detalle_documento`,
 1 AS `id_documento`,
 1 AS `id_guia`,
 1 AS `total`,
 1 AS `codigo_guia`*/;
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
 1 AS `id_guia_estado`,
 1 AS `dia`,
 1 AS `anio`,
 1 AS `mes`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `v_guias_facturadas`
--

DROP TABLE IF EXISTS `v_guias_facturadas`;
/*!50001 DROP VIEW IF EXISTS `v_guias_facturadas`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_guias_facturadas` AS SELECT 
 1 AS `id_guia`,
 1 AS `codigo_guia`,
 1 AS `direccion_envia`,
 1 AS `direccion_recibe`,
 1 AS `responsable_envia`,
 1 AS `responsable_envia_telefono`,
 1 AS `responsable_recibe`,
 1 AS `responsable_recibe_telefono`,
 1 AS `id_tipo_pago`,
 1 AS `id_guia_estado`,
 1 AS `porcentaje_pago_envia`,
 1 AS `porcentaje_pago_recibe`,
 1 AS `id_servicio`,
 1 AS `peso`,
 1 AS `total_pago_envia`,
 1 AS `total_pago_recibe`,
 1 AS `fecha_creacion`,
 1 AS `id_cliente_envia`,
 1 AS `id_cliente_recibe`,
 1 AS `id_lugar_origen`,
 1 AS `id_lugar_destino`,
 1 AS `tipo_usuario_crea`,
 1 AS `id_usuario_crea`,
 1 AS `peso_maximo`,
 1 AS `precio`,
 1 AS `precio_peso_adicional`,
 1 AS `precio_especial`,
 1 AS `factura_envia`,
 1 AS `factura_recibe`*/;
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
-- Temporary view structure for view `v_guias_pendientes_facturar`
--

DROP TABLE IF EXISTS `v_guias_pendientes_facturar`;
/*!50001 DROP VIEW IF EXISTS `v_guias_pendientes_facturar`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_guias_pendientes_facturar` AS SELECT 
 1 AS `id_guia`,
 1 AS `codigo_guia`,
 1 AS `tipo_pago`,
 1 AS `id_guia_estado`,
 1 AS `estado_guia`,
 1 AS `porcentaje_paga`,
 1 AS `total_pago`,
 1 AS `fecha_creacion`,
 1 AS `id_cliente`,
 1 AS `cliente`,
 1 AS `facturado`,
 1 AS `tipo_facturar`*/;
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
 1 AS `id_piloto`,
 1 AS `id_lugar_origen`,
 1 AS `id_lugar_destino`,
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
 1 AS `id_guia_estado`,
 1 AS `cliente_envia`,
 1 AS `cliente_recibe`,
 1 AS `tipo_pago`,
 1 AS `peso`,
 1 AS `servicio`,
 1 AS `total_pago_envia`,
 1 AS `total_pago_recibe`*/;
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
-- Temporary view structure for view `v_pago_guia_hija`
--

DROP TABLE IF EXISTS `v_pago_guia_hija`;
/*!50001 DROP VIEW IF EXISTS `v_pago_guia_hija`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_pago_guia_hija` AS SELECT 
 1 AS `id_guia`,
 1 AS `total_pago_envia`,
 1 AS `total_pago_recibe`*/;
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
/*!50001 VIEW `v_clientes` AS select `a`.`id_cliente` AS `id_cliente`,`a`.`nombre_comercial` AS `nombre_comercial`,`a`.`razon_social` AS `razon_social`,`a`.`nit` AS `nit`,`a`.`direccion` AS `direccion`,`a`.`telefono` AS `telefono`,`a`.`email` AS `email`,`a`.`fecha_ingreso` AS `fecha_ingreso`,`a`.`activo` AS `activo`,`a`.`aplica_pago_mensual` AS `aplica_pago_mensual`,(case when (`a`.`activo` = 1) then 'Activo' else 'Inactivo' end) AS `estado`,0.00 AS `peso_maximo`,0.00 AS `precio`,0.00 AS `precio_peso_adicional` from `clientes` `a` order by `a`.`activo` desc,`a`.`nombre_comercial` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_documentos`
--

/*!50001 DROP VIEW IF EXISTS `v_documentos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_documentos` AS select `a`.`id_documento` AS `id_documento`,`a`.`tipo_doctoid` AS `tipo_doctoid`,`a`.`correlativo` AS `correlativo`,`a`.`id_cliente` AS `id_cliente`,`a`.`fecha_creacion` AS `fecha_creacion`,`a`.`fecha_inicio` AS `fecha_inicio`,`a`.`fecha_fin` AS `fecha_fin`,`a`.`user_login_id` AS `user_login_id`,`a`.`total_general` AS `total_general`,`b`.`descripcion` AS `tipo_docto`,`c`.`nombre_comercial` AS `cliente`,`a`.`documento_estado_id` AS `documento_estado_id`,`d`.`documento_estado` AS `documento_estado` from (((`documentos` `a` left join `tipo_doctos` `b` on((`a`.`tipo_doctoid` = `b`.`tipo_doctoid`))) left join `clientes` `c` on((`a`.`id_cliente` = `c`.`id_cliente`))) left join `documentos_estado` `d` on((`a`.`documento_estado_id` = `d`.`documento_estado_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_documentos_detalle`
--

/*!50001 DROP VIEW IF EXISTS `v_documentos_detalle`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_documentos_detalle` AS select `a`.`id_detalle_documento` AS `id_detalle_documento`,`a`.`id_documento` AS `id_documento`,`a`.`id_guia` AS `id_guia`,`a`.`total` AS `total`,`b`.`codigo_guia` AS `codigo_guia` from (`documentos_detalle` `a` left join `guias` `b` on((`a`.`id_guia` = `b`.`id_guia`))) */;
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
/*!50001 VIEW `v_guias` AS select `a`.`id_guia` AS `id_guia`,`a`.`codigo_guia` AS `codigo_guia`,`a`.`direccion_envia` AS `direccion_envia`,`a`.`direccion_recibe` AS `direccion_recibe`,`a`.`responsable_envia` AS `responsable_envia`,`a`.`responsable_envia_telefono` AS `responsable_envia_telefono`,`a`.`responsable_recibe` AS `responsable_recibe`,`a`.`responsable_recibe_telefono` AS `responsable_recibe_telefono`,`b`.`tipo_pago` AS `tipo_pago`,if(((`a`.`factura_envia` >= `a`.`total_pago_envia`) and (`a`.`factura_recibe` >= `a`.`total_pago_recibe`) and ((`a`.`total_pago_envia` > 0) or (`a`.`total_pago_recibe` > 0))),'Facturada',`c`.`estado`) AS `estado`,`a`.`porcentaje_pago_envia` AS `porcentaje_pago_envia`,`a`.`porcentaje_pago_recibe` AS `porcentaje_pago_recibe`,`d`.`descripcion` AS `servicio`,`a`.`peso` AS `peso`,`a`.`total_pago_envia` AS `total_pago_envia`,`a`.`total_pago_recibe` AS `total_pago_recibe`,`a`.`fecha_creacion` AS `fecha_creacion`,`e`.`nombre_comercial` AS `cliente_envia`,`f`.`nombre_comercial` AS `cliente_recibe`,`g`.`lugar` AS `lugar_origen`,`h`.`lugar` AS `lugar_destino`,`a`.`tipo_usuario_crea` AS `tipo_usuario_crea`,`a`.`id_usuario_crea` AS `id_usuario_crea`,if(((`a`.`factura_envia` >= `a`.`total_pago_envia`) and (`a`.`factura_recibe` >= `a`.`total_pago_recibe`) and ((`a`.`total_pago_envia` > 0) or (`a`.`total_pago_recibe` > 0))),6,`a`.`id_guia_estado`) AS `id_guia_estado`,dayofmonth(`a`.`fecha_creacion`) AS `dia`,year(`a`.`fecha_creacion`) AS `anio`,month(`a`.`fecha_creacion`) AS `mes` from (((((((`guias` `a` left join `tipos_pago` `b` on((`a`.`id_tipo_pago` = `b`.`id_tipo_pago`))) left join `guias_estado` `c` on((`a`.`id_guia_estado` = `c`.`id_guia_estado`))) left join `servicio` `d` on((`a`.`id_servicio` = `d`.`id_servicio`))) left join `clientes` `e` on((`a`.`id_cliente_envia` = `e`.`id_cliente`))) left join `clientes` `f` on((`a`.`id_cliente_recibe` = `f`.`id_cliente`))) left join `lugares` `g` on((`a`.`id_lugar_origen` = `g`.`id_lugar`))) left join `lugares` `h` on((`a`.`id_lugar_destino` = `h`.`id_lugar`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_guias_facturadas`
--

/*!50001 DROP VIEW IF EXISTS `v_guias_facturadas`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_guias_facturadas` AS select `guias`.`id_guia` AS `id_guia`,`guias`.`codigo_guia` AS `codigo_guia`,`guias`.`direccion_envia` AS `direccion_envia`,`guias`.`direccion_recibe` AS `direccion_recibe`,`guias`.`responsable_envia` AS `responsable_envia`,`guias`.`responsable_envia_telefono` AS `responsable_envia_telefono`,`guias`.`responsable_recibe` AS `responsable_recibe`,`guias`.`responsable_recibe_telefono` AS `responsable_recibe_telefono`,`guias`.`id_tipo_pago` AS `id_tipo_pago`,`guias`.`id_guia_estado` AS `id_guia_estado`,`guias`.`porcentaje_pago_envia` AS `porcentaje_pago_envia`,`guias`.`porcentaje_pago_recibe` AS `porcentaje_pago_recibe`,`guias`.`id_servicio` AS `id_servicio`,`guias`.`peso` AS `peso`,`guias`.`total_pago_envia` AS `total_pago_envia`,`guias`.`total_pago_recibe` AS `total_pago_recibe`,`guias`.`fecha_creacion` AS `fecha_creacion`,`guias`.`id_cliente_envia` AS `id_cliente_envia`,`guias`.`id_cliente_recibe` AS `id_cliente_recibe`,`guias`.`id_lugar_origen` AS `id_lugar_origen`,`guias`.`id_lugar_destino` AS `id_lugar_destino`,`guias`.`tipo_usuario_crea` AS `tipo_usuario_crea`,`guias`.`id_usuario_crea` AS `id_usuario_crea`,`guias`.`peso_maximo` AS `peso_maximo`,`guias`.`precio` AS `precio`,`guias`.`precio_peso_adicional` AS `precio_peso_adicional`,`guias`.`precio_especial` AS `precio_especial`,`guias`.`factura_envia` AS `factura_envia`,`guias`.`factura_recibe` AS `factura_recibe` from `guias` where ((`guias`.`factura_envia` > 0) or (`guias`.`factura_recibe` > 0)) */;
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
-- Final view structure for view `v_guias_pendientes_facturar`
--

/*!50001 DROP VIEW IF EXISTS `v_guias_pendientes_facturar`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_guias_pendientes_facturar` AS select `a`.`id_guia` AS `id_guia`,`a`.`codigo_guia` AS `codigo_guia`,`b`.`tipo_pago` AS `tipo_pago`,`a`.`id_guia_estado` AS `id_guia_estado`,`c`.`estado` AS `estado_guia`,`a`.`porcentaje_pago_envia` AS `porcentaje_paga`,(`a`.`total_pago_envia` + ifnull(`e`.`total_pago_envia`,0)) AS `total_pago`,`a`.`fecha_creacion` AS `fecha_creacion`,`a`.`id_cliente_envia` AS `id_cliente`,`d`.`nombre_comercial` AS `cliente`,`a`.`factura_envia` AS `facturado`,1 AS `tipo_facturar` from ((((`guias` `a` left join `tipos_pago` `b` on((`a`.`id_tipo_pago` = `b`.`id_tipo_pago`))) left join `guias_estado` `c` on((`a`.`id_guia_estado` = `c`.`id_guia_estado`))) left join `clientes` `d` on((`a`.`id_cliente_envia` = `d`.`id_cliente`))) left join `v_pago_guia_hija` `e` on((`a`.`id_guia` = `e`.`id_guia`))) where ((`a`.`factura_envia` < (`a`.`total_pago_envia` + ifnull(`e`.`total_pago_envia`,0))) and (`a`.`id_guia_estado` <> 5)) union all select `a`.`id_guia` AS `id_guia`,`a`.`codigo_guia` AS `codigo_guia`,`b`.`tipo_pago` AS `tipo_pago`,`a`.`id_guia_estado` AS `id_guia_estado`,`c`.`estado` AS `estado_guia`,`a`.`porcentaje_pago_recibe` AS `porcentaje_paga`,(`a`.`total_pago_recibe` + ifnull(`e`.`total_pago_recibe`,0)) AS `total_pago`,`a`.`fecha_creacion` AS `fecha_creacion`,`a`.`id_cliente_recibe` AS `id_cliente`,`d`.`nombre_comercial` AS `cliente`,`a`.`factura_recibe` AS `facturado`,2 AS `tipo_facturar` from ((((`guias` `a` left join `tipos_pago` `b` on((`a`.`id_tipo_pago` = `b`.`id_tipo_pago`))) left join `guias_estado` `c` on((`a`.`id_guia_estado` = `c`.`id_guia_estado`))) left join `clientes` `d` on((`a`.`id_cliente_recibe` = `d`.`id_cliente`))) left join `v_pago_guia_hija` `e` on((`a`.`id_guia` = `e`.`id_guia`))) where ((`a`.`factura_recibe` < (`a`.`total_pago_recibe` + ifnull(`e`.`total_pago_recibe`,0))) and (`a`.`id_guia_estado` <> 5)) */;
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
/*!50001 VIEW `v_manifiestos` AS select `a`.`id_manifiesto` AS `id_manifiesto`,`a`.`id_piloto` AS `id_piloto`,`a`.`id_lugar_origen` AS `id_lugar_origen`,`a`.`id_lugar_destino` AS `id_lugar_destino`,`b`.`nombres` AS `piloto`,`a`.`fecha_creacion` AS `fecha_creacion`,`c`.`lugar` AS `origen`,`d`.`lugar` AS `destino`,`a`.`finalizado` AS `finalizado` from (((`manifiestos` `a` left join `pilotos` `b` on((`a`.`id_piloto` = `b`.`id_piloto`))) left join `lugares` `c` on((`a`.`id_lugar_origen` = `c`.`id_lugar`))) left join `lugares` `d` on((`a`.`id_lugar_destino` = `d`.`id_lugar`))) order by `a`.`finalizado`,`a`.`fecha_creacion` desc */;
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
/*!50001 VIEW `v_manifiestos_detalle` AS select `a`.`id_detalle_manifiesto` AS `id_detalle_manifiesto`,`a`.`id_manifiesto` AS `id_manifiesto`,`a`.`id_guia` AS `id_guia`,`b`.`codigo_guia` AS `codigo_guia`,`b`.`lugar_origen` AS `lugar_origen`,`b`.`lugar_destino` AS `lugar_destino`,`b`.`fecha_creacion` AS `fecha_creacion`,`b`.`estado` AS `estado`,`b`.`id_guia_estado` AS `id_guia_estado`,`b`.`cliente_envia` AS `cliente_envia`,`b`.`cliente_recibe` AS `cliente_recibe`,`b`.`tipo_pago` AS `tipo_pago`,`b`.`peso` AS `peso`,`b`.`servicio` AS `servicio`,`b`.`total_pago_envia` AS `total_pago_envia`,`b`.`total_pago_recibe` AS `total_pago_recibe` from (`manifiestos_detalle` `a` left join `v_guias` `b` on((`a`.`id_guia` = `b`.`id_guia`))) */;
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
/*!50001 VIEW `v_manifiestos_pendientes_cerrar` AS select `a`.`id_manifiesto` AS `id_manifiesto`,`b`.`nombres` AS `piloto`,`a`.`fecha_creacion` AS `fecha_creacion`,`c`.`lugar` AS `origen`,`d`.`lugar` AS `destino`,`a`.`finalizado` AS `finalizado` from (((`manifiestos` `a` left join `pilotos` `b` on((`a`.`id_piloto` = `b`.`id_piloto`))) left join `lugares` `c` on((`a`.`id_lugar_origen` = `c`.`id_lugar`))) left join `lugares` `d` on((`a`.`id_lugar_destino` = `d`.`id_lugar`))) where ((not(`a`.`id_manifiesto` in (select `a`.`id_manifiesto` from (`manifiestos_detalle` `a` left join `guias` `b` on((`a`.`id_guia` = `b`.`id_guia`))) where (`b`.`id_guia_estado` in (1,2,3)) group by `a`.`id_manifiesto`))) and (`a`.`finalizado` = 0)) */;
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
-- Final view structure for view `v_pago_guia_hija`
--

/*!50001 DROP VIEW IF EXISTS `v_pago_guia_hija`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_pago_guia_hija` AS select `guias_hijas`.`id_guia` AS `id_guia`,sum(`guias_hijas`.`total_pago_envia`) AS `total_pago_envia`,sum(`guias_hijas`.`total_pago_recibe`) AS `total_pago_recibe` from `guias_hijas` group by `guias_hijas`.`id_guia` */;
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

-- Dump completed on 2018-10-30 14:41:14
