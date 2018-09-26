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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='acciones de los controladores';
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
INSERT INTO `ci_sessions` VALUES ('0v13mk9h931t77a0eh9v1932ksi112fj','::1',1537928993,'__ci_last_regenerate|i:1537928993;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('14gep44ckac9tav0iujurbdmqirdh546','::1',1534478862,'__ci_last_regenerate|i:1534478862;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('1eapbqntrq3r6v51g7i0purs38ersgfm','::1',1534285816,'__ci_last_regenerate|i:1534285793;user_id|i:2;username|s:6:\"julian\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('1l69p1p4cjlu6gqeuhefl6nnfsr5b1as','::1',1534139247,'__ci_last_regenerate|i:1534139247;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('1t4rjhe3d9dqjslgj5g3qf5nlbvcsjgh','::1',1534483338,'__ci_last_regenerate|i:1534483338;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('20t7s3dovo6jun31gnfp9fm5d8nka87g','::1',1537932177,'__ci_last_regenerate|i:1537932177;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('21pbnc8n31bqr5nsqm675mt1l124488m','::1',1534489666,'__ci_last_regenerate|i:1534489666;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('29mrkheb90pjg51hqe7jd5226j9oketk','::1',1537933224,'__ci_last_regenerate|i:1537933224;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2hebnjencp36qcbn1qd9sun5b86l9bm6','::1',1535758433,'__ci_last_regenerate|i:1535758433;'),('2km1upepb1uhve4acfd5b4ddv5tumsk3','::1',1534281732,'__ci_last_regenerate|i:1534281549;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2o5ti11t1gte2ea3cbptblj6fi4svqia','::1',1534191099,'__ci_last_regenerate|i:1534191099;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('2sfnii80mhlur6cjgq8f34oqru6qmflb','::1',1537935643,'__ci_last_regenerate|i:1537935380;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3cb46eopj9djua48vij1gfpd8i0s6l33','::1',1535754234,'__ci_last_regenerate|i:1535754077;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3e9bf0veq3th2c3tp873bcv5euvgm2dv','::1',1534280204,'__ci_last_regenerate|i:1534280200;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3ki7pcspko7ib5cd8ohjgph3bktj4ddv','::1',1537921052,'__ci_last_regenerate|i:1537920783;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3pq88ceurlfq8cbpfkj5t4fjl1ob59tc','::1',1534285661,'__ci_last_regenerate|i:1534285369;user_id|i:2;username|s:6:\"julian\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3ulfev37eftcdpb12p9u2nvnjqq6900q','::1',1534486923,'__ci_last_regenerate|i:1534486794;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3upmp8ffqc0p6vm51fm5s7p72hhqmlni','::1',1535754499,'__ci_last_regenerate|i:1535754385;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('3vuloj0as3j933hsmj36jk6jchblcoe7','::1',1534141526,'__ci_last_regenerate|i:1534141526;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('40h3ll7do7kscr69uanirnheglojuqvu','::1',1534192918,'__ci_last_regenerate|i:1534192918;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('41sibglna3jglrt11vo94q7ibvhibubc','::1',1534195010,'__ci_last_regenerate|i:1534195010;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('4h12fptu7jial3n5lmnocvjhl5q7tvj2','::1',1537935371,'__ci_last_regenerate|i:1537935152;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('4j0conj9el7mj12nvf6hoeqd0fk9296v','::1',1534184604,'__ci_last_regenerate|i:1534184604;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('4r345fnq3l2rfqf402d1mug3g62i9rj5','::1',1537930726,'__ci_last_regenerate|i:1537930726;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('4u5hl1bisehf6jg3415nstjb0m2v10t0','::1',1537929910,'__ci_last_regenerate|i:1537929910;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('4v6924gfk93hkgqn7i6fi1k240mnq3hb','::1',1534196532,'__ci_last_regenerate|i:1534196532;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('5akhfsumq08gs2rku7lbil3jrp3aefug','::1',1534482271,'__ci_last_regenerate|i:1534482271;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('5qft4bhraaj8frl57si503kfeof7fa3k','::1',1537933745,'__ci_last_regenerate|i:1537933745;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('5uc218r45ocl6uqmn6vugbn0srik7jr8','::1',1534487902,'__ci_last_regenerate|i:1534487902;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('6d316caomantk8b0r1iku36t5nh91ltc','::1',1537930278,'__ci_last_regenerate|i:1537930278;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('6g4btqa8f17a4jr6o10kl8n4mvakm979','::1',1534481960,'__ci_last_regenerate|i:1534481960;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('6p0mirgs33lp1825cmppuha2nochb582','::1',1534485083,'__ci_last_regenerate|i:1534485083;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('6sn8pe32er465pnfhtc1huc4hm4ljf0g','::1',1535755189,'__ci_last_regenerate|i:1535754905;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('7dreqinp8irnp02ichp9if10ddpego9u','::1',1534489287,'__ci_last_regenerate|i:1534489287;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('7hlc7546t97m7sbb9gl4atjdivfn61r7','::1',1537931400,'__ci_last_regenerate|i:1537931400;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('7qiveml3rt8pa1pc7drv3m0orha3i32f','::1',1534263433,'__ci_last_regenerate|i:1534263324;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('84alncj5sqmeanqs3eru49odfioiskpa','::1',1537913802,'__ci_last_regenerate|i:1537913587;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('86350gpaqnqo9kcgj4vohs8kqa6c65lv','::1',1534139666,'__ci_last_regenerate|i:1534139666;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8d17dhce7ka20j1sil0q48k5nhfdo76c','::1',1534483661,'__ci_last_regenerate|i:1534483661;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8h0n8jtro8js0kpllfl7iguplvbseesj','::1',1537913195,'__ci_last_regenerate|i:1537912905;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8hp4nd3i84jmu9ejpjk3iqbs6dbemfp4','::1',1534138175,'__ci_last_regenerate|i:1534138175;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('8r4b6gkekoasv7p1763fgof6bfb2moap','::1',1537918252,'__ci_last_regenerate|i:1537917952;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('9729afrqpcr6300m8j18fscl4a3p8fk3','::1',1534488837,'__ci_last_regenerate|i:1534488837;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('9dhj1lcu467h2ev91r6qjemfistnj7u2','::1',1537917269,'__ci_last_regenerate|i:1537917024;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('a3moenlcfsgpjbe5a0lvvnlt8vje3hi7','::1',1534196226,'__ci_last_regenerate|i:1534196226;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('a73cqpvr64egi0pb89d2k182m64aplsf','::1',1534487360,'__ci_last_regenerate|i:1534487360;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('a8bfuaa1t7njvou1bkbsjevigqpuku5d','::1',1534138876,'__ci_last_regenerate|i:1534138876;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ae88d9lbvcrivfkbmknj7tmoenqbkbvj','::1',1534140922,'__ci_last_regenerate|i:1534140922;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b3v57j1jrgfdfnkc10j89h0gfldso0pc','::1',1534485758,'__ci_last_regenerate|i:1534485758;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('b94hct12o194p53ta7tc07s0l9trjhji','::1',1537934782,'__ci_last_regenerate|i:1537934782;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('bjf97lah08e7esv7l1dcdopl0t2m1fq0','::1',1534197786,'__ci_last_regenerate|i:1534197767;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('blmtlkfc2l59podgm3ep7e4ppv0fdti4','::1',1534269912,'__ci_last_regenerate|i:1534269908;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('bp6vbntiogs1t20dd0589t9mtqpmjjr5','::1',1534289109,'__ci_last_regenerate|i:1534288933;user_id|i:2;username|s:6:\"julian\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('c46apr82efoa03uqemfspv101olb9tqa','::1',1534194119,'__ci_last_regenerate|i:1534194119;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('cd2bkhj8t9bapgdrd3bgcs648str5cjq','::1',1535756638,'__ci_last_regenerate|i:1535756417;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ciqduuuq3s3pvhq909uke3a9q622trmb','::1',1534489666,'__ci_last_regenerate|i:1534489666;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('cjf7v4nf5jm8iqgd0koidhaaaq7p3gqd','::1',1534479995,'__ci_last_regenerate|i:1534479995;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('cp4kvlr82ggn8s791bv5hg99gr96k0i4','::1',1534481307,'__ci_last_regenerate|i:1534481307;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('cq3vd2ap3akbhdh0hocn43o9j94gdogm','::1',1535756079,'__ci_last_regenerate|i:1535756044;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('dgvl16bk04klq554n825la5ms8brsdeh','::1',1534286471,'__ci_last_regenerate|i:1534286328;user_id|i:2;username|s:6:\"julian\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('dlfrs93jkvtrguaced9bqrpmkv226hjt','::1',1537935152,'__ci_last_regenerate|i:1537935152;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('dsa27r7e504akrud29su3rivugv0r371','::1',1537931075,'__ci_last_regenerate|i:1537931075;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('e85io2vf3bvr3vroge90pmbp5qno0cmm','::1',1534193742,'__ci_last_regenerate|i:1534193742;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('e8urpsupc0qou2mo2llceregm8kfagi0','::1',1537920592,'__ci_last_regenerate|i:1537920388;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('eccnrj8g1e1hi2cego7ojv1mvfmc1442','::1',1534196843,'__ci_last_regenerate|i:1534196843;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('egcm63q65nc2bcjdrlhr6lpmp0is3v1t','::1',1534268880,'__ci_last_regenerate|i:1534268685;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('erl79ooiap2hh0oj1a127fs6ffv26ab3','::1',1534481965,'__ci_last_regenerate|i:1534481960;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('f5udntb0ggf11688ohsfevialtsl53rd','::1',1534478091,'__ci_last_regenerate|i:1534478091;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('fckfltue7trprdpejugs4nckd2vurd0a','::1',1534271700,'__ci_last_regenerate|i:1534271423;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('fhb1u6ga4tp82koi33ho1s3jfndjev1k','::1',1534189129,'__ci_last_regenerate|i:1534189129;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('fk8cncsupj2o9sn1kfp2h0tkrpl2ttcu','::1',1537914483,'__ci_last_regenerate|i:1537914477;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('fte524vibpnk4k0ocnlg325d9id06map','::1',1534285043,'__ci_last_regenerate|i:1534284795;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('fvhkio5vd2dlp00qnff3dimd4j2fo1r5','::1',1535755495,'__ci_last_regenerate|i:1535755227;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('g5rud3nueqea0bt3s0q09pj9g29365b8','::1',1534479187,'__ci_last_regenerate|i:1534479187;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('gahtktqu8ag2e5iinbrulib8iaftnmoi','::1',1534193342,'__ci_last_regenerate|i:1534193342;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('gc8nm80flodh3k3vffituv9rsqguirn4','::1',1537912220,'__ci_last_regenerate|i:1537912184;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('gd1a81tg6tlk89hlf71kvu9o76s1qfai','::1',1534197452,'__ci_last_regenerate|i:1534197452;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('grn2h7vudbniujk5857olo05id4dvo5q','::1',1534141556,'__ci_last_regenerate|i:1534141553;'),('gtrdmqte0qpgeluq2as08psh6hire787','::1',1534190764,'__ci_last_regenerate|i:1534190764;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('h85qtt59p7lfrgl6dqpk18f4dmnc7vg1','::1',1535755943,'__ci_last_regenerate|i:1535755724;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('hgvpon11kitmu05s10tc3tlh2k2gjfvn','::1',1535758248,'__ci_last_regenerate|i:1535757989;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('hnsndap32iv85d553r606iphb8tnrjg6','::1',1537917470,'__ci_last_regenerate|i:1537917353;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ht5s14krjhipeis693btevua6s60aqod','::1',1534192009,'__ci_last_regenerate|i:1534192009;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ib4uq04m2npqkehsukqon7mni6m10h3d','::1',1537919186,'__ci_last_regenerate|i:1537919047;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('icdk4t09lpe085uo7i8jb3ihbmm5aae6','::1',1534482572,'__ci_last_regenerate|i:1534482572;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('j0bfj945u4anddcchvkemhl9od83uhi9','::1',1534484774,'__ci_last_regenerate|i:1534484774;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('j8lh559cni1u5b7v9fkcv8e8btb058j1','::1',1535736253,'__ci_last_regenerate|i:1535736252;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('jatv7b10p12rbgspde7fsgk0g17iu8kh','::1',1537918442,'__ci_last_regenerate|i:1537918257;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('jkihh3dl3b6c6j226e23mqedokvuvnv1','::1',1534484271,'__ci_last_regenerate|i:1534484271;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('jp72ea1nua0nsen7ojciugdhd7a0gvi0','::1',1534138497,'__ci_last_regenerate|i:1534138497;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('jr9e3hvhgp5l2ofu48otf1sgououck9t','::1',1534486794,'__ci_last_regenerate|i:1534486794;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('jvht9u4d2huajgvo6l80chgeod2q5qim','::1',1535735954,'__ci_last_regenerate|i:1535735942;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('kae2u7ncefv43sl4nb75eue8shucb9qq','::1',1534268650,'__ci_last_regenerate|i:1534268383;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('kb09e461m7mu283bg9qk59t177bq25jq','::1',1537919981,'__ci_last_regenerate|i:1537919686;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('kd4clurvam0gmjlsf1p7vh42flhs2if2','::1',1534172684,'__ci_last_regenerate|i:1534172684;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('l24o8rst0pjgpbbqoc8kkj8dsor5hqut','::1',1534140300,'__ci_last_regenerate|i:1534140300;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('l9d54g2kunsdoj6vahk7k8d9uoqpd43n','::1',1534195328,'__ci_last_regenerate|i:1534195328;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('ldbot7fvdp9dfidfu64uv779b41fg3uq','::1',1534197767,'__ci_last_regenerate|i:1534197767;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('m00d7bvr0ieif5u46r383blsl5bj4jnt','::1',1534267809,'__ci_last_regenerate|i:1534267573;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('m75qh9tol66am2sip70s0414m9et7ek3','::1',1535757954,'__ci_last_regenerate|i:1535757672;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('m9nu9ikpb4hku5ng9pc0crgjba18ovsk','::1',1535757358,'__ci_last_regenerate|i:1535757179;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('m9r92gjaa4cv281gpd4ekc2j262ea5mt','::1',1537932583,'__ci_last_regenerate|i:1537932583;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('mfcamgu4v0lqqsf9ujbr45bkvai3bqah','::1',1535735606,'__ci_last_regenerate|i:1535735487;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('mh1gdpankp80r3dther7rmrpmhigt2rl','::1',1534480455,'__ci_last_regenerate|i:1534480455;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('mlbict46is3gcatl9vn9ekoat008h9cd','::1',1537934346,'__ci_last_regenerate|i:1537934346;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('mncua79mvjsj4he2uj9lekmjin6lbbfr','::1',1537929567,'__ci_last_regenerate|i:1537929567;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('moc217q8dku1ousge8tjqtmbq3vlnruq','::1',1537932902,'__ci_last_regenerate|i:1537932902;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('mriipsnndoatobfqj4t4oupdfbdfhfh2','::1',1537921991,'__ci_last_regenerate|i:1537921956;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('nffjtsumoja903m3nd3ri5oc3acfvi88','::1',1535758388,'__ci_last_regenerate|i:1535758387;'),('nkfdk5qg00t2nqh4et2mt6glaes76nah','::1',1534266659,'__ci_last_regenerate|i:1534266481;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('o0btfq1kje0p0olf907tcdo4o687fsag','::1',1534284740,'__ci_last_regenerate|i:1534284486;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('one4gcmi6eferqj4j3jlqumrds9ijbs9','::1',1534486065,'__ci_last_regenerate|i:1534486065;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('onjp6td9ghqbdraoi6h4bhasnnqkupji','::1',1537918901,'__ci_last_regenerate|i:1537918603;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('oqb23jasvce7l0gblk3v6ai5mifmhcb4','::1',1534479683,'__ci_last_regenerate|i:1534479683;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('p5068lg07vv1mug5p1t5k6kka7j1csqb','::1',1537914217,'__ci_last_regenerate|i:1537914134;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('pkvgqjorcvvuc9m3rii7hp1qa1e2vo84','::1',1534488322,'__ci_last_regenerate|i:1534488322;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('qeul0s1gpefo0eu9bof2mp0t8lilnt7q','::1',1534477770,'__ci_last_regenerate|i:1534477770;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('qklcv22mf9s72hoemvtms8fppbnvbrt6','::1',1534477432,'__ci_last_regenerate|i:1534477432;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('qqvhruohipkq3v5esru6gpv9f1t99mva','::1',1534190379,'__ci_last_regenerate|i:1534190379;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('qt5c417cvg9k1v4f00lbmedc1686qq75','::1',1534481632,'__ci_last_regenerate|i:1534481632;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('qv4g18etdg8lhj7ejj8c18qc81db72nd','::1',1534289511,'__ci_last_regenerate|i:1534289510;'),('r42mttf80ej22f3g3ane1bif21g3lvtn','::1',1534483969,'__ci_last_regenerate|i:1534483969;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('r4s8tkfbr1b3co8gj5pq1rr4q02bkg9j','::1',1534185014,'__ci_last_regenerate|i:1534185014;'),('rpucalb4gp1ul9ti6mucn44oc25a0c5i','::1',1537913421,'__ci_last_regenerate|i:1537913208;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('rtpall4b65klq3tesl10kk8m7oa3v3mm','::1',1537914520,'__ci_last_regenerate|i:1537914497;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('s0a956ioi9r9b9q0da01qk9f798mpvol','::1',1535756787,'__ci_last_regenerate|i:1535756772;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('scjk87tnpks9h51cg7h0rq4ujv8k4e31','::1',1537931705,'__ci_last_regenerate|i:1537931705;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('shppl9t1f5red7ro4s44b6bdvrljlhbr','::1',1534486374,'__ci_last_regenerate|i:1534486374;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('sk17vkb5660usrr581q0hc2ueh2hs5ps','::1',1534195656,'__ci_last_regenerate|i:1534195656;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('spd57c9pbvu5sg5p3s4o4rhvam831gev','::1',1534140616,'__ci_last_regenerate|i:1534140616;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('sphqq6ff7i9le92d1d4cug0fp2dpfqli','::1',1534188510,'__ci_last_regenerate|i:1534188510;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('tib67k4829qgq57aedvj3pljb0t5sr00','::1',1534482973,'__ci_last_regenerate|i:1534482973;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('u1arjm1o1it8t9267nlcfmt63i37sv7v','::1',1537921687,'__ci_last_regenerate|i:1537921548;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('uh82miqr7p27o5eka4f04rd10nj9vovc','::1',1537920364,'__ci_last_regenerate|i:1537920073;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('v0428kd1ldaf2ejj1v2tm1j9sksbbkpo','::1',1535738452,'__ci_last_regenerate|i:1535738241;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('v4re7nv15m2nb1d4t1keiskqqqhdnauv','::1',1537921422,'__ci_last_regenerate|i:1537921125;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('vdtb34j3dgpiruhetqdgc29b89gnrd1o','::1',1534189820,'__ci_last_regenerate|i:1534189820;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;'),('vvh11puaqtat8dtv2lprhfunnj9ake3h','::1',1534139970,'__ci_last_regenerate|i:1534139970;user_id|i:1;username|s:8:\"santiago\";logged_in|b:1;is_confirmed|b:0;is_admin|b:0;');
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1 COMMENT='controladores del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controladores`
--

LOCK TABLES `controladores` WRITE;
/*!40000 ALTER TABLE `controladores` DISABLE KEYS */;
INSERT INTO `controladores` VALUES (1,'Usuarios Admin',1,'admin/usuario_admin',4),(3,'Clientes',2,'clientes/clientes',0),(4,'Origenes y Destinos',3,'transporte/lugares',0),(7,'Tipos de Documentos',6,'facturacion/tipo_doctos',1),(8,'Menus',1,'admin/menus',1),(9,'Roles',1,'admin/roles',3),(12,'Tipos Pago',6,'facturacion/tipos_pago',2),(21,'Creación de manifiestos',3,'transporte/manifiestos',3),(22,'Traslado de manifiestos',3,'transporte/manifiestos_traslado',4),(23,'Manifiestos por piloto',8,'transporte/manifiestos_reporte',1),(24,'Pilotos',9,'transporte/pilotos',2),(25,'Estado Piloto',9,'transporte/estados_piloto',1),(26,'Tipos de Servicios',10,'transporte/tipo_servicio',1),(27,'Unidades de Medida',10,'transporte/unidad_medida',2),(28,'Estado Guias',11,'transporte/guias_estado',1),(29,'Guias',11,'transporte/guias',2),(30,'Servicios',10,'transporte/servicios',3);
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
  PRIMARY KEY (`id_guia`),
  KEY `guias_guias_estado` (`id_guia_estado`),
  KEY `guias_servicio` (`id_servicio`),
  KEY `guias_tipos_pago` (`id_tipo_pago`),
  CONSTRAINT `guias_guias_estado` FOREIGN KEY (`id_guia_estado`) REFERENCES `guias_estado` (`id_guia_estado`),
  CONSTRAINT `guias_servicio` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`),
  CONSTRAINT `guias_tipos_pago` FOREIGN KEY (`id_tipo_pago`) REFERENCES `tipos_pago` (`id_tipo_pago`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='guias del ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guias`
--

LOCK TABLES `guias` WRITE;
/*!40000 ALTER TABLE `guias` DISABLE KEYS */;
INSERT INTO `guias` VALUES (10,'A2325','Palin,Escuintla','Zona 2, el Xapote','Santiago','56306910','Juan Adolfo','55887788',1,1,100.00,0.00,2,20.00,200.00,150.00,'2018-08-13',1,2,4,3,1,1),(11,'AS8985','Zona 15 ','Puerto Barrios','Oscar','88779955','Martin','99665544',2,3,0.00,100.00,2,85.00,0.00,25.00,'2018-08-13',2,1,3,2,1,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='manifiestos de carga';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manifiestos`
--

LOCK TABLES `manifiestos` WRITE;
/*!40000 ALTER TABLE `manifiestos` DISABLE KEYS */;
INSERT INTO `manifiestos` VALUES (1,1,'2018-08-13','\0',1,1),(2,3,'2018-08-13','\0',4,4);
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
INSERT INTO `manifiestos_detalle` VALUES (15,1,11);
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COMMENT='Menus del sistema';
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
INSERT INTO `servicio` VALUES (1,'Basico',25.00,1,5.00,11.00,'2018-08-12',1,''),(2,'Caja',25.00,1,25.00,25.00,'2018-08-01',1,'');
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
  PRIMARY KEY (`id_tracking`),
  KEY `tracking_guias` (`id_guia`),
  KEY `tracking_guias_estado` (`id_guia_estado`),
  CONSTRAINT `tracking_guias` FOREIGN KEY (`id_guia`) REFERENCES `guias` (`id_guia`),
  CONSTRAINT `tracking_guias_estado` FOREIGN KEY (`id_guia_estado`) REFERENCES `guias_estado` (`id_guia_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tracking`
--

LOCK TABLES `tracking` WRITE;
/*!40000 ALTER TABLE `tracking` DISABLE KEYS */;
INSERT INTO `tracking` VALUES (10,11,'En bodega','2018-08-17 09:01:35',2),(11,11,'En transito','2018-08-17 09:01:57',3);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'santiago','123456@gmail.com','$2y$10$7QoBQjf8YmDC1/iW9q3/p.zVkhkyB4ZyXMhRryO991UNPjT/RjOHu','default.jpg','2018-06-16 01:01:39',NULL,0,0,0,1),(2,'julian','jponciano@gmail.com','$2y$10$J4gTMa6eWrZenErstkCr3eOf2SMjqHjMG8tTDjCgQOef.ByJ31dti','admin.jpg','0000-00-00 00:00:00',NULL,0,0,0,1),(3,'prueba','prueba@prueba.com','$2y$10$XWln8mOGR0UPedXyj/wHeeISe74wXLsyA4XUM2/sss8P1MbsYlF2q','default.jpg','0000-00-00 00:00:00',NULL,0,0,0,2);
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
 1 AS `estado`*/;
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
/*!50001 VIEW `v_clientes` AS select `a`.`id_cliente` AS `id_cliente`,`a`.`nombre_comercial` AS `nombre_comercial`,`a`.`razon_social` AS `razon_social`,`a`.`nit` AS `nit`,`a`.`direccion` AS `direccion`,`a`.`telefono` AS `telefono`,`a`.`email` AS `email`,`a`.`fecha_ingreso` AS `fecha_ingreso`,`a`.`activo` AS `activo`,`a`.`aplica_pago_mensual` AS `aplica_pago_mensual`,(case when (`a`.`activo` = 1) then 'Activo' else 'Inactivo' end) AS `estado` from `clientes` `a` order by `a`.`activo` desc,`a`.`nombre_comercial` */;
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

-- Dump completed on 2018-09-25 22:23:01
