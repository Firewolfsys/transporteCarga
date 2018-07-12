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
INSERT INTO `acciones` VALUES (1,'nuevo1',2),(2,'nuevo',8),(3,'guardar',8),(4,'eliminar',8);
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
INSERT INTO `ci_sessions` VALUES ('00547f36c3c532286eb7b778032fcded8ae19ea0','::1',1530025563,'__ci_last_regenerate|i:1530025563;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('01634f58076b92989029446185e9352c3f48fb14','::1',1529774991,'__ci_last_regenerate|i:1529774991;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('0299a810e9314c105374db82fb70d00319d64b28','::1',1531069987,'__ci_last_regenerate|i:1531069734;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('0561cfc700b0adfd6bffea50cc1aaa875c83d5cd','::1',1529779725,'__ci_last_regenerate|i:1529779560;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('05cdae9dfd5e2503af241d77ae7856adcf31efb8','::1',1530553780,'__ci_last_regenerate|i:1530553771;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('07be0de4d873e1387469afd80c32183223572016','::1',1529799081,'__ci_last_regenerate|i:1529798797;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('07c300bead807cc783e25511fd536110541bfda2','::1',1530555581,'__ci_last_regenerate|i:1530555563;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('07f833d3dac67003d1785b5c62e89575a1085eb9','::1',1529983246,'__ci_last_regenerate|i:1529983077;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('0b19f21dde84f03cd68c1cbf2727a635621cfaf8','::1',1530223453,'__ci_last_regenerate|i:1530223173;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('11c932d020d2c77d4045b11ce1397fcef10731e9','::1',1530139970,'__ci_last_regenerate|i:1530139680;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('1250e9ed46cd5407e9ec700cdbe3025421040776','::1',1529987709,'__ci_last_regenerate|i:1529987706;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('12a274c5bb80bfe2389bf3a32a57d5bd0e4e6202','::1',1530648387,'__ci_last_regenerate|i:1530648143;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('139b88ba8ac915306ef779f29c426d60bed491a4','::1',1530555121,'__ci_last_regenerate|i:1530554873;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('150ab3f88af911bf671765ea37089b8f425afd04','::1',1530123111,'__ci_last_regenerate|i:1530123093;'),('15cb3aa338692d5f5fde151e0e64810ff803790b','::1',1530221019,'__ci_last_regenerate|i:1530221019;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('17152daa9b009e3fbe5cd4ff664904499955b63c','::1',1529804253,'__ci_last_regenerate|i:1529804028;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('17882dac947cce87ee3cdf1df61a597530016fcf','::1',1531073461,'__ci_last_regenerate|i:1531073441;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('18000083cfb8f147022a71dd7150268c18f737f9','::1',1530224346,'__ci_last_regenerate|i:1530224198;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('18595536e407c465ca7ebef84176e4b9dcdf04bb','::1',1530220319,'__ci_last_regenerate|i:1530220306;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('19183fffef6a9fb37967269e3aac0aca602e68ed','::1',1531106511,'__ci_last_regenerate|i:1531106399;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('19872c8e323831c19672ca2c9f6a7312267df8c4','::1',1530131383,'__ci_last_regenerate|i:1530131085;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('19c4241c84ffb47698a028a8eec0b19cc51d4dd7','::1',1530570286,'__ci_last_regenerate|i:1530570286;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('19e8918c8d10ca67c4afa2f950eff242181d97da','::1',1531057213,'__ci_last_regenerate|i:1531057070;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('1b01157445a85ffb51ffe336f81e8f68545935de','::1',1529783825,'__ci_last_regenerate|i:1529783579;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('1c33a7abe9ea8cec0ba6f5e84287125c886745eb','::1',1530225777,'__ci_last_regenerate|i:1530225765;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('1f49aa1e608f481a4fe70e09b634cf5aec762c81','::1',1530566672,'__ci_last_regenerate|i:1530566374;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('208902c237ea92801a5541b21a1e1b7fb2b49c1e','::1',1530655799,'__ci_last_regenerate|i:1530655752;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;menu_id|i:0;controlador_id|i:0;'),('212f2a26a1c6105c2f9e8ccb84e683a274775fac','::1',1529798398,'__ci_last_regenerate|i:1529798146;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('23594546adb8b09c40cde05057deaf2b659c8604','::1',1530646814,'__ci_last_regenerate|i:1530646722;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2397e3d083a2a8cfc1e8792d66cb0a6c5f35318d','::1',1530567943,'__ci_last_regenerate|i:1530567729;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('24320ed7b2adc1548a9d1eb30acfdbd5672492e0','::1',1530587087,'__ci_last_regenerate|i:1530586831;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('24e04614ed157cefe2b931ea5edcb78f1b8256cc','::1',1530204278,'__ci_last_regenerate|i:1530204253;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('25a786f370919021f1aa103f13bcf3f9852cbfe4','::1',1529986458,'__ci_last_regenerate|i:1529986228;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('25bec81068c277eefb8a7f13a95946c2f8212804','::1',1531065024,'__ci_last_regenerate|i:1531064801;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('25f44407deea03ec3061aae9f7f93524a3925533','::1',1529856553,'__ci_last_regenerate|i:1529856464;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('280ebdd586cbfb4f00e22ec6d50e33758377be39','::1',1530571734,'__ci_last_regenerate|i:1530571732;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2990993c21765da28372e815ca701fcb5c76738f','::1',1530133039,'__ci_last_regenerate|i:1530133037;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('29efbe405e1875aafff8aaec200588b97533ce2b','::1',1530549593,'__ci_last_regenerate|i:1530549574;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2b1651ddc18cfab901c68381e3918547f0d6770e','::1',1530226705,'__ci_last_regenerate|i:1530226496;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2c4a850b35687bbff40a90fbc6d471110beb50b0','::1',1530570213,'__ci_last_regenerate|i:1530569939;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2d44365f92251d210061b151f9ab9739165f8dd6','::1',1530204657,'__ci_last_regenerate|i:1530204657;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2e727d5b403117f60a98965a05b65c3c49d04d5f','::1',1529936966,'__ci_last_regenerate|i:1529936668;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2eaf4d64a0ddd2d7bcbe5642a1903f6216a877a8','::1',1529854216,'__ci_last_regenerate|i:1529853918;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2f38143f30b90ad256f906c25182c6d2a290ae59','::1',1530128607,'__ci_last_regenerate|i:1530128607;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2fb557f344b4f42152bd2d228db3c1ba3390bd8c','::1',1529783513,'__ci_last_regenerate|i:1529783256;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('319320a24f15b4e06976d6c04ae485df1fc25dad','::1',1530555426,'__ci_last_regenerate|i:1530555215;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('33dc6f1fe4b4fdefc7edd49d6eaa33a9e5000d3f','::1',1529808517,'__ci_last_regenerate|i:1529808439;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3475bdbcbd378fe08d5e4a632ea61a9e0f5fb2c3','::1',1530466657,'__ci_last_regenerate|i:1530466421;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('360330ab1199e250343309d68ff12e80168a5c6c','::1',1530224075,'__ci_last_regenerate|i:1530223829;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('37114e5820138cd344a6640fec814ee6c8c11c23','::1',1529776197,'__ci_last_regenerate|i:1529776197;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3798f3bab1ed65a6116381db1f9a6bb2a36a4b63','::1',1531057614,'__ci_last_regenerate|i:1531057432;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('382e8b66585a6cf01d292a50089ee382d2a7b610','::1',1530567653,'__ci_last_regenerate|i:1530567408;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('390040745e428850b0ad30080840c602183ade56','::1',1529782586,'__ci_last_regenerate|i:1529782403;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('399e259b8b876993c0043f34f9b0fe09090eff58','::1',1529848586,'__ci_last_regenerate|i:1529848293;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3a09bc4264765e2bb9ee9db4a51cf1665f30762d','::1',1530025514,'__ci_last_regenerate|i:1530025261;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3c96a127618d988804442746925efe187c1bb3bf','::1',1529779127,'__ci_last_regenerate|i:1529778831;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3d0ff0c00d8577c462550ae00564072caa85a514','::1',1529799414,'__ci_last_regenerate|i:1529799129;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3db439f9564eec0249f25c6aa69cda27d4891c3d','::1',1530646369,'__ci_last_regenerate|i:1530646072;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3e141cca7c573ec1745bdfcaf1bfeb777279451d','::1',1530207128,'__ci_last_regenerate|i:1530206926;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('415a475f10b226c03696148c8e24e6535ed60c56','::1',1529985106,'__ci_last_regenerate|i:1529985103;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('41a1ffaf24e5f37af07ac0c10618cb6cef8a9ec4','::1',1530566951,'__ci_last_regenerate|i:1530566701;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('42eddab80f052c8ba216594cbb6a31355eaf0ae1','::1',1530569359,'__ci_last_regenerate|i:1530569178;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('432fecfd7a7992211507769ce70fbc1e89fcdee2','::1',1529856113,'__ci_last_regenerate|i:1529855841;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('45788d05a0c3b30e7019128ce1d2999e90e07f5b','::1',1530567097,'__ci_last_regenerate|i:1530567003;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('458f968575dc5d5b51c99cdd82d7c72c65bad5e2','::1',1530506696,'__ci_last_regenerate|i:1530506690;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('464bf1858762d41ad7c2564e95b4deceee4af781','::1',1530572360,'__ci_last_regenerate|i:1530572118;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('46c04f47d169be927aad7535bff7c8f8185a3ae5','::1',1531065217,'__ci_last_regenerate|i:1531065120;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('470b0522a693351846a97e838417f22f6293e048','::1',1529853861,'__ci_last_regenerate|i:1529853583;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('476710c1336395c40300f864c3c14a3b06233506','::1',1529798095,'__ci_last_regenerate|i:1529797824;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('4962ec17db36c11d6238cb6f731371d2f76c5741','::1',1530655402,'__ci_last_regenerate|i:1530655228;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;menu_id|i:0;controlador_id|i:0;'),('499ea2fd00ad181b95489d105d1e16a9b02eca39','::1',1529936993,'__ci_last_regenerate|i:1529936993;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('4b7f05f6334472728d2e6b608528fe7f792e0ce7','::1',1531107864,'__ci_last_regenerate|i:1531107855;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('4ef114b4cbdcccd59899f8fe5eaf33f5d375b089','::1',1530024629,'__ci_last_regenerate|i:1530024470;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('51eec2c5804000d934c32345bf1ba86b5cfb5576','::1',1530020187,'__ci_last_regenerate|i:1530019908;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('53f36be366478508cd60b4d83ab968457a5c2f3d','::1',1530654753,'__ci_last_regenerate|i:1530654467;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;menu_id|i:0;controlador_id|i:0;'),('5905171e57befe5e359e20949799f6172790bd7e','::1',1530646643,'__ci_last_regenerate|i:1530646373;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('5a0ddeaaf86e96458d17f6007469d20562367791','::1',1529797550,'__ci_last_regenerate|i:1529797332;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('5a59c0fbcdb67087d519539814b3607657b9b9ea','::1',1530131081,'__ci_last_regenerate|i:1530130783;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('609af711fa0ad4baffee1270e4bb86f6b9891694','::1',1529979612,'__ci_last_regenerate|i:1529979518;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('62483385663a9ab1416ef2bcf0c43bbf4f32e371','::1',1530505793,'__ci_last_regenerate|i:1530505610;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('66a86bf4d0a7a33f34fae4d86cf2658afd1137e3','::1',1530584834,'__ci_last_regenerate|i:1530584834;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('69d1c6098269e963a4328c3319121118c6108508','::1',1530653239,'__ci_last_regenerate|i:1530653100;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;menu_id|i:0;controlador_id|i:0;'),('6a54e7b05ead7092453c2e916324d2fd8f895d68','::1',1530227494,'__ci_last_regenerate|i:1530227400;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('6a99af977071acd4c83f1c8dc25786dd63e2bc91','::1',1530024100,'__ci_last_regenerate|i:1530023812;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('6e8cc0f6a386c1c425e9f2ba42d5893a64cb2ab7','::1',1530648798,'__ci_last_regenerate|i:1530648786;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;menu_id|i:0;controlador_id|i:0;'),('7001225d24dd3364f1441986fba5225c622d8825','::1',1531099378,'__ci_last_regenerate|i:1531099378;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('7417a78b478c280f999f7c145066dbd40db56cc1','::1',1530225215,'__ci_last_regenerate|i:1530224991;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('74a5ff98cc904e1d08eb3f213850648be2111402','::1',1531107178,'__ci_last_regenerate|i:1531106928;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('7763cd934d0adce2c9ce2db7cd3f77f342a0f149','::1',1530565075,'__ci_last_regenerate|i:1530564776;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('77a3924469aa30632932c444103537c26429b70d','::1',1530202697,'__ci_last_regenerate|i:1530202497;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('782b975ccb4bcc0235b6da8820b32a9957e3dd8e','::1',1530202917,'__ci_last_regenerate|i:1530202863;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('78b2d7eb9e603fd7ece042cc88ac887ef11c96cb','::1',1529796978,'__ci_last_regenerate|i:1529796678;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('7941fa1db196269d19e69cff2529abe1406ac236','::1',1530129250,'__ci_last_regenerate|i:1530129010;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('7a3b2fb6956ff042ce6a42300962457669173964','::1',1529856441,'__ci_last_regenerate|i:1529856147;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('7af5a4e1758ba3f95e2efb2ca66dd77d6b32894d','::1',1530132704,'__ci_last_regenerate|i:1530132535;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('7c17205c2bc8af62409e21b21140e4d79e2caf9b','::1',1530139631,'__ci_last_regenerate|i:1530139335;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('7e4b365f56af57d4154a16a112620fd199e3bea0','::1',1530650709,'__ci_last_regenerate|i:1530650547;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;menu_id|i:0;controlador_id|i:0;'),('8145590a4b0d2118ea68c632baef46729fecf608','::1',1530653554,'__ci_last_regenerate|i:1530653501;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;menu_id|i:0;controlador_id|i:0;'),('8238a99250df21d0a703925522bc037f744f0505','::1',1529982857,'__ci_last_regenerate|i:1529982645;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('840ec6302e6cb85ad2f68586bdbcdf0d2b3fee34','::1',1529796452,'__ci_last_regenerate|i:1529796224;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('84c8fff50f79fb039aae0c09f80ee4d650490801','::1',1529983484,'__ci_last_regenerate|i:1529983484;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('85e9b373b05291bb3394f78f5cf936fabcd4c128','::1',1530505102,'__ci_last_regenerate|i:1530505099;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8688029692b3870057fec97ba778f489b59d1caa','::1',1529980197,'__ci_last_regenerate|i:1529979984;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('87648288219d3703d3221306131af32e840b3fc8','::1',1529987083,'__ci_last_regenerate|i:1529986906;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8888ee8af9dff18593439771afb59a68f201d3f7','::1',1531057867,'__ci_last_regenerate|i:1531057803;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8a35dda8d1d3027d84ce39650b48dfdb5a50824a','::1',1530650380,'__ci_last_regenerate|i:1530650129;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;menu_id|i:0;controlador_id|i:0;'),('8af650645ac185389dbb8cb2b8531268a2184cce','::1',1530224894,'__ci_last_regenerate|i:1530224622;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8b29cd6793366f7939b9b6c4cb7f747e5397039e','::1',1531100902,'__ci_last_regenerate|i:1531100629;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8ed67d51515c5b2db146720ed361d770ffb9761b','::1',1531094608,'__ci_last_regenerate|i:1531094608;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8f7085a778b76918ece7c5834689d2d6a7ebc3d7','::1',1531187954,'__ci_last_regenerate|i:1531187953;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8f7a93a05c387cbd78538005eab1abd436840d94','::1',1529984301,'__ci_last_regenerate|i:1529984296;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('9563603b3de20bb19dcc513a42ac8f435699258a','::1',1531067669,'__ci_last_regenerate|i:1531067669;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('95d1cba6cf98705f2e11792554ebaef99782b346','::1',1530133546,'__ci_last_regenerate|i:1530133505;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('962afbfc7d251b09f0829ed824138c2c6f4e63d2','::1',1530132484,'__ci_last_regenerate|i:1530132206;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('97214007b5d20eee358a3c6c27a7ad963caa1105','::1',1530022115,'__ci_last_regenerate|i:1530022115;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('97ec30ac77c0a9e34f9d8a98d3af288e4b4919b6','::1',1530551161,'__ci_last_regenerate|i:1530551101;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('9847f33fda02d29a7f7bb2f75f57b8f87a5e9d19','::1',1530496898,'__ci_last_regenerate|i:1530496886;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('9926c6750019ef5775a5648c72d70740c491a031','::1',1530206391,'__ci_last_regenerate|i:1530206121;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('9a727edf9c6c66f5915bc2c148f68bc4b40116b7','::1',1530649193,'__ci_last_regenerate|i:1530649184;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;menu_id|i:0;controlador_id|i:0;'),('9a78f7ee53ca152b8fcc444a2accc48730da4e65','::1',1531070128,'__ci_last_regenerate|i:1531070109;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('9b54ee18757233973213d65057b8122bee008920','::1',1530138216,'__ci_last_regenerate|i:1530138216;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('9bcf47e338b477c53823a33fb4d3c27e2cc2e0a5','::1',1529982328,'__ci_last_regenerate|i:1529982274;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('9d6b567bc833cb94df28a94ff06a75e99c93913c','::1',1530130192,'__ci_last_regenerate|i:1530129995;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('9e92b4e0672fc0d664ae052d1d7ab84d30481cf0','::1',1530588196,'__ci_last_regenerate|i:1530587906;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('9f46175452398b5fbcff7e4265752fc235f13355','::1',1531099753,'__ci_last_regenerate|i:1531099744;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('9f9087d708b51b894547d4e6d6dd4209113359ac','::1',1529803810,'__ci_last_regenerate|i:1529803611;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('a00cf6ea7f8cb8cf8976d97aea67ac0740ec5152','::1',1530587776,'__ci_last_regenerate|i:1530587500;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('a431baf0ea8d9af8451a12904954646299cd8e0c','::1',1529984075,'__ci_last_regenerate|i:1529983797;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('a49aca12f9741024718d50bb04aab2c4adb1400e','::1',1530227226,'__ci_last_regenerate|i:1530227076;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('a54214d608151c5db2788eda5d03d5e05a6eb666','::1',1530569813,'__ci_last_regenerate|i:1530569549;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('a60f041f8c19500a0ab613ba9fd46c416599d805','::1',1530023157,'__ci_last_regenerate|i:1530022940;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('a65bc6db2382ae09aa296aec980f2a283766ee9f','::1',1531060732,'__ci_last_regenerate|i:1531060569;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('a77515b2d4eb76250b870ce80c3ccc4115f9eb1b','::1',1530654312,'__ci_last_regenerate|i:1530654154;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;menu_id|i:0;controlador_id|i:0;'),('a9211b1be785008cc8f0bd97f766bc37eb299a97','::1',1529803402,'__ci_last_regenerate|i:1529803201;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ab13237d1541759020aec8671f70ca6a62745d11','::1',1529802491,'__ci_last_regenerate|i:1529802244;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ac1128e0a5200fef7d0a70d4144e09c993409bcc','::1',1530652726,'__ci_last_regenerate|i:1530652426;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;menu_id|i:0;controlador_id|i:0;'),('acd95a9d7f17b1d73e06f744a024832fdc437150','::1',1529980899,'__ci_last_regenerate|i:1529980836;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ae0bbfce171a70f55cb52cde530a74da0269ba65','::1',1530225516,'__ci_last_regenerate|i:1530225450;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b15ff92454de4befe3c16f0604fcc1a30d6ef222','::1',1529781576,'__ci_last_regenerate|i:1529781394;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b1dd962b2d6cc6597fe01474ec9ddee48ea03993','::1',1529797208,'__ci_last_regenerate|i:1529797021;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b28bd89a6a2cf7bd0dcaa7d141abca1cf7b9b7cd','::1',1529779443,'__ci_last_regenerate|i:1529779144;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b3198ca8366b2eb58151d27cedd392ba6c0a19c9','::1',1529780455,'__ci_last_regenerate|i:1529780372;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b37acfbb2fbda83902315f63e8c988e676f9ea03','::1',1530135258,'__ci_last_regenerate|i:1530135189;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b4a6257197e53fb0235284a176662a5bff78a1e9','::1',1529799686,'__ci_last_regenerate|i:1529799440;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b6429858e3b977c69292c6b9738a423403961561','::1',1531068580,'__ci_last_regenerate|i:1531068580;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b82e38b2f9cd3c52ee246a25f2325963df4d51b2','::1',1530207731,'__ci_last_regenerate|i:1530207674;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b899bdb2349a065f50b95e08a60034d5cf74840d','::1',1530122597,'__ci_last_regenerate|i:1530122597;'),('b9bd5141effcf4fabc70e3b03c7c91c96c914aea','::1',1529800523,'__ci_last_regenerate|i:1529800471;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b9ce1811d5d7f65747964890d5e272bf1b77749b','::1',1530019797,'__ci_last_regenerate|i:1530019546;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b9d2968dc7458ed88a3158668c161a804782120c','::1',1529801964,'__ci_last_regenerate|i:1529801751;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('bbdca1a075d62ed398218562d48f1a52f4f4b648','::1',1529781357,'__ci_last_regenerate|i:1529781066;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('bc751c973839570eed3d394f6a45b03513da38c2','::1',1530651273,'__ci_last_regenerate|i:1530651271;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;menu_id|i:0;controlador_id|i:0;'),('bf6814352ddfdf9821ce7a73c0a69114bc1bc58d','::1',1530585846,'__ci_last_regenerate|i:1530585641;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('c06f10fbc808af9dcc50c907a8a910d58f71d5bb','::1',1531059008,'__ci_last_regenerate|i:1531058708;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('c2372ba8dc3582593c0f7ba27b9c27ac47509681','::1',1530571524,'__ci_last_regenerate|i:1530571405;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('c23bdd1c1b15be54620d9549f836d5c7b1a1c65a','::1',1529796114,'__ci_last_regenerate|i:1529795816;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('c2d5ad660dee99005fc65acfdafc0d05824ff2d3','::1',1531065430,'__ci_last_regenerate|i:1531065430;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('c363da498d58d7439eeb680c3afaee2c1a09974e','::1',1530139248,'__ci_last_regenerate|i:1530138996;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('c45a32ba33f3345d495e2ffa5a39432eaebee4f2','::1',1529774740,'__ci_last_regenerate|i:1529774646;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('c48f1c4c95cbd61aac0c3a5eea2a5755364ee440','::1',1530131918,'__ci_last_regenerate|i:1530131661;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('c4e2d25376a5f2a2ce362fa4384a1a16a3db7f43','::1',1529852146,'__ci_last_regenerate|i:1529852045;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('c5d07b78b730514f5d8c4191b41f8c6217ab7955','::1',1529782979,'__ci_last_regenerate|i:1529782713;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('c60c2e71b31496e3397c192a9e85b65dac56b1bb','::1',1529855202,'__ci_last_regenerate|i:1529855132;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('caaafd64c0601830f049841d22e047f01bb8719d','::1',1530222813,'__ci_last_regenerate|i:1530222691;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('cb56df43a9ce7db2d5bcb5c89e6298a15c6b1877','::1',1530140212,'__ci_last_regenerate|i:1530140004;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('cb5f85fc7e70bff6dfc04b283cb75018b19ce1ad','::1',1530497632,'__ci_last_regenerate|i:1530497334;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('cc6eff0c3f32afa12e54c25551efd52e152b09ec','::1',1529855077,'__ci_last_regenerate|i:1529854812;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('cce85c11ce57e7ea8c46bc0bd3ab66bd067bd4da','::1',1530141398,'__ci_last_regenerate|i:1530141377;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('cf313697cfa8ad698d7a65fa97c583410bc12218','::1',1529848898,'__ci_last_regenerate|i:1529848772;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('d063306b2fa4a24e1e5650e8ad69939e072ba44b','::1',1530025153,'__ci_last_regenerate|i:1530024854;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('d06bc70c25912e3e0a7aa44db77ab5bca10115c0','::1',1529980427,'__ci_last_regenerate|i:1529980300;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('d1fb6ce926ede8cea9f388945102cedcc50d2e6d','::1',1531059249,'__ci_last_regenerate|i:1531059013;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('d37948d83b66e4b944fc44bb135ed99d45751232','::1',1529800092,'__ci_last_regenerate|i:1529799811;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('d49a4a8f86cda3acdcb90ba72d8d61a3ad316ec4','::1',1530568430,'__ci_last_regenerate|i:1530568422;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('d5ead1a49371f0e3f5478728e12a77abade820c6','::1',1530023346,'__ci_last_regenerate|i:1530023241;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('d6629e4ef4cacbfdb373d671cad6938cedea071f','::1',1529783908,'__ci_last_regenerate|i:1529783899;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('d737ec7278163e44b8e8bb5e84bba2835adca8a1','::1',1531099243,'__ci_last_regenerate|i:1531099023;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('d98317585062a9b2d51a0ffc3029290e9f81cb22','::1',1531066539,'__ci_last_regenerate|i:1531066537;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('da960a04dfdeaf0b8644339a91f4567a4f21b2f7','::1',1530020889,'__ci_last_regenerate|i:1530020624;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('db96c5f96910a6c93e35da1162a50f363cbfed11','::1',1530498569,'__ci_last_regenerate|i:1530498502;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('dc85a6560db261c57094604cef7e5d15d4023d74','::1',1531060533,'__ci_last_regenerate|i:1531060268;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('dcb730043312d5beeda34456fb3ff0b8223043ed','::1',1530587452,'__ci_last_regenerate|i:1530587177;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('dd336e77b3f3aa0829e324edfbad1118e9271fd1','::1',1530024423,'__ci_last_regenerate|i:1530024141;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('dd463a34aca7e086fc1c48c5d1619f7217b34f3b','::1',1531065764,'__ci_last_regenerate|i:1531065764;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('dd99b11e8681eb33c1b4c3b55c4182eb10e06ff5','::1',1531069429,'__ci_last_regenerate|i:1531069129;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ddb2b8234f5b7026089cc1758a752d3f6a6857db','::1',1531069731,'__ci_last_regenerate|i:1531069432;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('defd1ab5357627ba4064ad886a16b4785a547404','::1',1530223786,'__ci_last_regenerate|i:1530223505;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('e08a03a329a70f992dbfa7380f239d826d095947','::1',1530654872,'__ci_last_regenerate|i:1530654793;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;menu_id|i:0;controlador_id|i:0;'),('e13c93314f7187effe64c70d1d3f2b4d971bd6e3','::1',1530127713,'__ci_last_regenerate|i:1530127467;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('e3d443e2581ae0a794605710b9e351ff66ee610d','::1',1530128596,'__ci_last_regenerate|i:1530128299;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('e4025fa7c69622738a2fe60e61f48643cb20f758','::1',1530140741,'__ci_last_regenerate|i:1530140518;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('e4e5dde02604a66ba3bb038e66d2c7600b907fb9','::1',1529800443,'__ci_last_regenerate|i:1529800148;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('e5065a2fb86d25672cf1ec667b2a469eb001d812','::1',1530128214,'__ci_last_regenerate|i:1530127956;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('e7ce13b3c8d42c590d68e451a959775e0a87f570','::1',1529852751,'__ci_last_regenerate|i:1529852751;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('e8d33cc3482e9a8f733664196fdbc2a6b24f1109','::1',1529803136,'__ci_last_regenerate|i:1529802864;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('e99c55262dcd8adaf8313a9f1bd17fda4f3ac639','::1',1530588348,'__ci_last_regenerate|i:1530588212;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('e9e87160fedd2ee4c10088e1d25dd3e8cca17f7f','::1',1529849646,'__ci_last_regenerate|i:1529849419;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ea9d2c42d34aee0e5af8ce977830de32857ac3cc','::1',1530141163,'__ci_last_regenerate|i:1530140899;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ecdbf2753d8578dc0a8f1bc66a72356a803d7485','::1',1530652239,'__ci_last_regenerate|i:1530652073;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;menu_id|i:0;controlador_id|i:0;'),('edd03e8898d6bc2a2cccec82deadbf233d54bf50','::1',1529984790,'__ci_last_regenerate|i:1529984715;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ee7efe401767811cc1becd7b216ecabc1f8d4723','::1',1530652869,'__ci_last_regenerate|i:1530652767;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;menu_id|i:0;controlador_id|i:0;'),('ef4b7eb6120373e170a29193c8796b4ba6f5b39c','::1',1531100597,'__ci_last_regenerate|i:1531100301;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ef67f95927ddaacceb5a4489c6d059d8054dfa6a','::1',1530497783,'__ci_last_regenerate|i:1530497663;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('f6aeffddd37fb6bf2b4530852700a6ef61adb981','::1',1529774607,'__ci_last_regenerate|i:1529774312;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('f6e29a2255214aec44bba74462659a4b9453d667','::1',1530205798,'__ci_last_regenerate|i:1530205680;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('f74b365923ca45cd375ccdc5f31a6406abf87d52','::1',1529802690,'__ci_last_regenerate|i:1529802549;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('f7cfcad287d5829a9c2eef5db03b392cdfc2b999','::1',1530651008,'__ci_last_regenerate|i:1530650954;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;menu_id|i:0;controlador_id|i:0;'),('f9a8ad60dee2d1f3b3d10664b4889cee83cfadf2','::1',1530226347,'__ci_last_regenerate|i:1530226133;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('fc469e817f77217484ec35d2dbd78626053a3605','::1',1531107389,'__ci_last_regenerate|i:1531107317;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('fc881c7628321697779b3ea0cc1634538244e708','::1',1530206615,'__ci_last_regenerate|i:1530206484;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('fd2567d1643ab5d6318be4269745e25e3980b681','::1',1530586680,'__ci_last_regenerate|i:1530586519;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('fe3d685b6b1bbaebe514a5c6fd33a1a5aeda6765','::1',1530130517,'__ci_last_regenerate|i:1530130357;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('fe6cc5acdf288f87e92baa963cea3f5407006881','::1',1530585553,'__ci_last_regenerate|i:1530585262;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('fe7815a23d85b12a08bc3ceb423f1fcf934f6fb8','::1',1529798743,'__ci_last_regenerate|i:1529798489;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;');
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
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabla de clientes de la empresa';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
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
  `controlador` varchar(25) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL,
  PRIMARY KEY (`controladorID`),
  KEY `controlador_menus` (`MenuID`),
  CONSTRAINT `controlador_menus` FOREIGN KEY (`MenuID`) REFERENCES `menus` (`MenuID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COMMENT='controladores del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controladores`
--

LOCK TABLES `controladores` WRITE;
/*!40000 ALTER TABLE `controladores` DISABLE KEYS */;
INSERT INTO `controladores` VALUES (1,'Usuarios Admin',1,'admin/usuario_admin',4),(2,'Usuarios Web',1,'usuarios_web',5),(3,'Clientes',2,'clientes',0),(4,'Lugares',3,'lugares',0),(5,'Rutas',3,'rutas',0),(6,'Guias',3,'guias',0),(7,'Tipos de Documentos',6,'facturacion/tipo_doctos',1),(8,'Menus',1,'admin/menus',1),(9,'Roles',1,'admin/roles',3);
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
  PRIMARY KEY (`correlativo_doctoid`),
  KEY `corellativo_tipodocto_idx` (`tipo_doctoid`),
  CONSTRAINT `corellativo_tipodocto` FOREIGN KEY (`tipo_doctoid`) REFERENCES `tipo_doctos` (`tipo_doctoid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `correlativo_doctos_tipo_doctos` FOREIGN KEY (`tipo_doctoid`) REFERENCES `tipo_doctos` (`tipo_doctoid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `correlativo_doctos`
--

LOCK TABLES `correlativo_doctos` WRITE;
/*!40000 ALTER TABLE `correlativo_doctos` DISABLE KEYS */;
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
  PRIMARY KEY (`id_guia`),
  KEY `guias_guias_estado` (`id_guia_estado`),
  KEY `guias_servicio` (`id_servicio`),
  KEY `guias_tipos_pago` (`id_tipo_pago`),
  CONSTRAINT `guias_guias_estado` FOREIGN KEY (`id_guia_estado`) REFERENCES `guias_estado` (`id_guia_estado`),
  CONSTRAINT `guias_servicio` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`),
  CONSTRAINT `guias_tipos_pago` FOREIGN KEY (`id_tipo_pago`) REFERENCES `tipos_pago` (`id_tipo_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='guias del ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guias`
--

LOCK TABLES `guias` WRITE;
/*!40000 ALTER TABLE `guias` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='estados de las guias';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guias_estado`
--

LOCK TABLES `guias_estado` WRITE;
/*!40000 ALTER TABLE `guias_estado` DISABLE KEYS */;
INSERT INTO `guias_estado` VALUES (1,'Creada'),(2,'En bodega'),(3,'En transito'),(4,'Entregada');
/*!40000 ALTER TABLE `guias_estado` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='paises origenes y destinos de los viajes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugares`
--

LOCK TABLES `lugares` WRITE;
/*!40000 ALTER TABLE `lugares` DISABLE KEYS */;
INSERT INTO `lugares` VALUES (1,'Peten'),(2,'Izabal'),(3,'Guatemala');
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='manifiestos de carga';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manifiestos`
--

LOCK TABLES `manifiestos` WRITE;
/*!40000 ALTER TABLE `manifiestos` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manifiestos_detalle`
--

LOCK TABLES `manifiestos_detalle` WRITE;
/*!40000 ALTER TABLE `manifiestos_detalle` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='Menus del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Administracion','fa-cogs',1),(2,'Clientes','fa-users',3),(3,'Guias','fa-truck',3),(6,'Facturacion','fa-calculator',2);
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla para los pilotos del establecimiento';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pilotos`
--

LOCK TABLES `pilotos` WRITE;
/*!40000 ALTER TABLE `pilotos` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabla para el almacenamiento de productos';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicio`
--

LOCK TABLES `servicio` WRITE;
/*!40000 ALTER TABLE `servicio` DISABLE KEYS */;
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
  PRIMARY KEY (`tipo_doctoid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_doctos`
--

LOCK TABLES `tipo_doctos` WRITE;
/*!40000 ALTER TABLE `tipo_doctos` DISABLE KEYS */;
INSERT INTO `tipo_doctos` VALUES (1,'Factura'),(2,'Nota de Credito');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='tipos de servicio(producto o servicio)';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_servicio`
--

LOCK TABLES `tipo_servicio` WRITE;
/*!40000 ALTER TABLE `tipo_servicio` DISABLE KEYS */;
INSERT INTO `tipo_servicio` VALUES (1,'Productos'),(2,'Servicios');
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
  `fecha` date NOT NULL,
  `id_guia_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_tracking`),
  KEY `tracking_guias` (`id_guia`),
  KEY `tracking_guias_estado` (`id_guia_estado`),
  CONSTRAINT `tracking_guias` FOREIGN KEY (`id_guia`) REFERENCES `guias` (`id_guia`),
  CONSTRAINT `tracking_guias_estado` FOREIGN KEY (`id_guia_estado`) REFERENCES `guias_estado` (`id_guia_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tracking`
--

LOCK TABLES `tracking` WRITE;
/*!40000 ALTER TABLE `tracking` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='tabla para las unidades de medida de los servicios';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidad_medida`
--

LOCK TABLES `unidad_medida` WRITE;
/*!40000 ALTER TABLE `unidad_medida` DISABLE KEYS */;
INSERT INTO `unidad_medida` VALUES (1,'Libras');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'santiago','123456@gmail.com','$2y$10$Okly6Fu9gF1thCxMXYTZQuyjqnYGVisbIX0tjPQ44cf4BOz45uTUa','default.jpg','2018-06-16 01:01:39',NULL,0,0,0,1),(2,'julian','jponciano@gmail.com','','admin.jpg','0000-00-00 00:00:00',NULL,0,0,0,1);
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

-- Dump completed on 2018-07-12 17:10:37
