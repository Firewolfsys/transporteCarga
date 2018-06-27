CREATE DATABASE  IF NOT EXISTS `transportecarga` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `transportecarga`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: transportecarga
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='acciones de los controladores';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acciones`
--

LOCK TABLES `acciones` WRITE;
/*!40000 ALTER TABLE `acciones` DISABLE KEYS */;
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
INSERT INTO `ci_sessions` VALUES ('00547f36c3c532286eb7b778032fcded8ae19ea0','::1',1530025563,'__ci_last_regenerate|i:1530025563;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('01634f58076b92989029446185e9352c3f48fb14','::1',1529774991,'__ci_last_regenerate|i:1529774991;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('0561cfc700b0adfd6bffea50cc1aaa875c83d5cd','::1',1529779725,'__ci_last_regenerate|i:1529779560;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('07be0de4d873e1387469afd80c32183223572016','::1',1529799081,'__ci_last_regenerate|i:1529798797;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('07f833d3dac67003d1785b5c62e89575a1085eb9','::1',1529983246,'__ci_last_regenerate|i:1529983077;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('1250e9ed46cd5407e9ec700cdbe3025421040776','::1',1529987709,'__ci_last_regenerate|i:1529987706;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('17152daa9b009e3fbe5cd4ff664904499955b63c','::1',1529804253,'__ci_last_regenerate|i:1529804028;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('1b01157445a85ffb51ffe336f81e8f68545935de','::1',1529783825,'__ci_last_regenerate|i:1529783579;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('212f2a26a1c6105c2f9e8ccb84e683a274775fac','::1',1529798398,'__ci_last_regenerate|i:1529798146;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('25a786f370919021f1aa103f13bcf3f9852cbfe4','::1',1529986458,'__ci_last_regenerate|i:1529986228;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('25f44407deea03ec3061aae9f7f93524a3925533','::1',1529856553,'__ci_last_regenerate|i:1529856464;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2e727d5b403117f60a98965a05b65c3c49d04d5f','::1',1529936966,'__ci_last_regenerate|i:1529936668;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2eaf4d64a0ddd2d7bcbe5642a1903f6216a877a8','::1',1529854216,'__ci_last_regenerate|i:1529853918;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2fb557f344b4f42152bd2d228db3c1ba3390bd8c','::1',1529783513,'__ci_last_regenerate|i:1529783256;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('33dc6f1fe4b4fdefc7edd49d6eaa33a9e5000d3f','::1',1529808517,'__ci_last_regenerate|i:1529808439;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('37114e5820138cd344a6640fec814ee6c8c11c23','::1',1529776197,'__ci_last_regenerate|i:1529776197;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('390040745e428850b0ad30080840c602183ade56','::1',1529782586,'__ci_last_regenerate|i:1529782403;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('399e259b8b876993c0043f34f9b0fe09090eff58','::1',1529848586,'__ci_last_regenerate|i:1529848293;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3a09bc4264765e2bb9ee9db4a51cf1665f30762d','::1',1530025514,'__ci_last_regenerate|i:1530025261;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3c96a127618d988804442746925efe187c1bb3bf','::1',1529779127,'__ci_last_regenerate|i:1529778831;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3d0ff0c00d8577c462550ae00564072caa85a514','::1',1529799414,'__ci_last_regenerate|i:1529799129;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('415a475f10b226c03696148c8e24e6535ed60c56','::1',1529985106,'__ci_last_regenerate|i:1529985103;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('432fecfd7a7992211507769ce70fbc1e89fcdee2','::1',1529856113,'__ci_last_regenerate|i:1529855841;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('470b0522a693351846a97e838417f22f6293e048','::1',1529853861,'__ci_last_regenerate|i:1529853583;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('476710c1336395c40300f864c3c14a3b06233506','::1',1529798095,'__ci_last_regenerate|i:1529797824;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('499ea2fd00ad181b95489d105d1e16a9b02eca39','::1',1529936993,'__ci_last_regenerate|i:1529936993;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('4ef114b4cbdcccd59899f8fe5eaf33f5d375b089','::1',1530024629,'__ci_last_regenerate|i:1530024470;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('51eec2c5804000d934c32345bf1ba86b5cfb5576','::1',1530020187,'__ci_last_regenerate|i:1530019908;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('5a0ddeaaf86e96458d17f6007469d20562367791','::1',1529797550,'__ci_last_regenerate|i:1529797332;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('609af711fa0ad4baffee1270e4bb86f6b9891694','::1',1529979612,'__ci_last_regenerate|i:1529979518;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('6a99af977071acd4c83f1c8dc25786dd63e2bc91','::1',1530024100,'__ci_last_regenerate|i:1530023812;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('78b2d7eb9e603fd7ece042cc88ac887ef11c96cb','::1',1529796978,'__ci_last_regenerate|i:1529796678;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('7a3b2fb6956ff042ce6a42300962457669173964','::1',1529856441,'__ci_last_regenerate|i:1529856147;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8238a99250df21d0a703925522bc037f744f0505','::1',1529982857,'__ci_last_regenerate|i:1529982645;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('840ec6302e6cb85ad2f68586bdbcdf0d2b3fee34','::1',1529796452,'__ci_last_regenerate|i:1529796224;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('84c8fff50f79fb039aae0c09f80ee4d650490801','::1',1529983484,'__ci_last_regenerate|i:1529983484;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8688029692b3870057fec97ba778f489b59d1caa','::1',1529980197,'__ci_last_regenerate|i:1529979984;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('87648288219d3703d3221306131af32e840b3fc8','::1',1529987083,'__ci_last_regenerate|i:1529986906;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8f7a93a05c387cbd78538005eab1abd436840d94','::1',1529984301,'__ci_last_regenerate|i:1529984296;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('97214007b5d20eee358a3c6c27a7ad963caa1105','::1',1530022115,'__ci_last_regenerate|i:1530022115;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('9bcf47e338b477c53823a33fb4d3c27e2cc2e0a5','::1',1529982328,'__ci_last_regenerate|i:1529982274;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('9f9087d708b51b894547d4e6d6dd4209113359ac','::1',1529803810,'__ci_last_regenerate|i:1529803611;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('a431baf0ea8d9af8451a12904954646299cd8e0c','::1',1529984075,'__ci_last_regenerate|i:1529983797;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('a60f041f8c19500a0ab613ba9fd46c416599d805','::1',1530023157,'__ci_last_regenerate|i:1530022940;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('a9211b1be785008cc8f0bd97f766bc37eb299a97','::1',1529803402,'__ci_last_regenerate|i:1529803201;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ab13237d1541759020aec8671f70ca6a62745d11','::1',1529802491,'__ci_last_regenerate|i:1529802244;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('acd95a9d7f17b1d73e06f744a024832fdc437150','::1',1529980899,'__ci_last_regenerate|i:1529980836;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b15ff92454de4befe3c16f0604fcc1a30d6ef222','::1',1529781576,'__ci_last_regenerate|i:1529781394;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b1dd962b2d6cc6597fe01474ec9ddee48ea03993','::1',1529797208,'__ci_last_regenerate|i:1529797021;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b28bd89a6a2cf7bd0dcaa7d141abca1cf7b9b7cd','::1',1529779443,'__ci_last_regenerate|i:1529779144;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b3198ca8366b2eb58151d27cedd392ba6c0a19c9','::1',1529780455,'__ci_last_regenerate|i:1529780372;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b4a6257197e53fb0235284a176662a5bff78a1e9','::1',1529799686,'__ci_last_regenerate|i:1529799440;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b9bd5141effcf4fabc70e3b03c7c91c96c914aea','::1',1529800523,'__ci_last_regenerate|i:1529800471;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b9ce1811d5d7f65747964890d5e272bf1b77749b','::1',1530019797,'__ci_last_regenerate|i:1530019546;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b9d2968dc7458ed88a3158668c161a804782120c','::1',1529801964,'__ci_last_regenerate|i:1529801751;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('bbdca1a075d62ed398218562d48f1a52f4f4b648','::1',1529781357,'__ci_last_regenerate|i:1529781066;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('c23bdd1c1b15be54620d9549f836d5c7b1a1c65a','::1',1529796114,'__ci_last_regenerate|i:1529795816;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('c45a32ba33f3345d495e2ffa5a39432eaebee4f2','::1',1529774740,'__ci_last_regenerate|i:1529774646;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('c4e2d25376a5f2a2ce362fa4384a1a16a3db7f43','::1',1529852146,'__ci_last_regenerate|i:1529852045;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('c5d07b78b730514f5d8c4191b41f8c6217ab7955','::1',1529782979,'__ci_last_regenerate|i:1529782713;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('c60c2e71b31496e3397c192a9e85b65dac56b1bb','::1',1529855202,'__ci_last_regenerate|i:1529855132;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('cc6eff0c3f32afa12e54c25551efd52e152b09ec','::1',1529855077,'__ci_last_regenerate|i:1529854812;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('cf313697cfa8ad698d7a65fa97c583410bc12218','::1',1529848898,'__ci_last_regenerate|i:1529848772;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('d063306b2fa4a24e1e5650e8ad69939e072ba44b','::1',1530025153,'__ci_last_regenerate|i:1530024854;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('d06bc70c25912e3e0a7aa44db77ab5bca10115c0','::1',1529980427,'__ci_last_regenerate|i:1529980300;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('d37948d83b66e4b944fc44bb135ed99d45751232','::1',1529800092,'__ci_last_regenerate|i:1529799811;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('d5ead1a49371f0e3f5478728e12a77abade820c6','::1',1530023346,'__ci_last_regenerate|i:1530023241;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('d6629e4ef4cacbfdb373d671cad6938cedea071f','::1',1529783908,'__ci_last_regenerate|i:1529783899;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('da960a04dfdeaf0b8644339a91f4567a4f21b2f7','::1',1530020889,'__ci_last_regenerate|i:1530020624;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('dd336e77b3f3aa0829e324edfbad1118e9271fd1','::1',1530024423,'__ci_last_regenerate|i:1530024141;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('e4e5dde02604a66ba3bb038e66d2c7600b907fb9','::1',1529800443,'__ci_last_regenerate|i:1529800148;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('e7ce13b3c8d42c590d68e451a959775e0a87f570','::1',1529852751,'__ci_last_regenerate|i:1529852751;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('e8d33cc3482e9a8f733664196fdbc2a6b24f1109','::1',1529803136,'__ci_last_regenerate|i:1529802864;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('e9e87160fedd2ee4c10088e1d25dd3e8cca17f7f','::1',1529849646,'__ci_last_regenerate|i:1529849419;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('edd03e8898d6bc2a2cccec82deadbf233d54bf50','::1',1529984790,'__ci_last_regenerate|i:1529984715;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('f6aeffddd37fb6bf2b4530852700a6ef61adb981','::1',1529774607,'__ci_last_regenerate|i:1529774312;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('f74b365923ca45cd375ccdc5f31a6406abf87d52','::1',1529802690,'__ci_last_regenerate|i:1529802549;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('fe7815a23d85b12a08bc3ceb423f1fcf934f6fb8','::1',1529798743,'__ci_last_regenerate|i:1529798489;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
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
  `controlador` varchar(25) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL,
  PRIMARY KEY (`controladorID`),
  KEY `controlador_menus` (`MenuID`),
  CONSTRAINT `controlador_menus` FOREIGN KEY (`MenuID`) REFERENCES `menus` (`MenuID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='controladores del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controladores`
--

LOCK TABLES `controladores` WRITE;
/*!40000 ALTER TABLE `controladores` DISABLE KEYS */;
INSERT INTO `controladores` VALUES (1,'Usuarios Admin',1,'usuario_admin',0),(2,'Usuarios Web',1,'usuario_web',0),(3,'Clientes',2,'clientes',0),(4,'Lugares',3,'lugares',0),(5,'Rutas',3,'rutas',0),(6,'Guias',3,'guias',0);
/*!40000 ALTER TABLE `controladores` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='Menus del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Administracion','fa-users',1),(2,'Clientes','fa-male',4),(3,'Guias','fa-truck',3),(6,'Facturacion','fa-calculator',2);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='Roles del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'System Administrador'),(2,'Administrador');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'santiago','123456@gmail.com','$2y$10$Okly6Fu9gF1thCxMXYTZQuyjqnYGVisbIX0tjPQ44cf4BOz45uTUa','default.jpg','2018-06-16 01:01:39',NULL,0,0,0,1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-27 11:23:53
