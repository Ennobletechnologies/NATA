-- MySQL dump 10.13  Distrib 5.5.19, for Linux (x86_64)
--
-- Host: 68.178.143.95    Database: nata2016
-- ------------------------------------------------------
-- Server version	5.5.43-37.2-log

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
-- Table structure for table `committee_cat2`
--

DROP TABLE IF EXISTS `committee_cat2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `committee_cat2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `committee_cat2`
--

LOCK TABLES `committee_cat2` WRITE;
/*!40000 ALTER TABLE `committee_cat2` DISABLE KEYS */;
/*!40000 ALTER TABLE `committee_cat2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `committee_category`
--

DROP TABLE IF EXISTS `committee_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `committee_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `color` varchar(225) NOT NULL,
  `subcolor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `committee_category`
--

LOCK TABLES `committee_category` WRITE;
/*!40000 ALTER TABLE `committee_category` DISABLE KEYS */;
INSERT INTO `committee_category` VALUES (4,'Publicity & Public Relations','25','1');
INSERT INTO `committee_category` VALUES (6,'Web','38','6');
INSERT INTO `committee_category` VALUES (8,'Hospitality','37','5');
INSERT INTO `committee_category` VALUES (10,'NRI','37','12');
INSERT INTO `committee_category` VALUES (11,'Transportation','33','2');
INSERT INTO `committee_category` VALUES (14,'Security','33','2');
INSERT INTO `committee_category` VALUES (21,'Food','25','5');
INSERT INTO `committee_category` VALUES (24,'Reception','21','12');
INSERT INTO `committee_category` VALUES (25,'Finance','1','2');
INSERT INTO `committee_category` VALUES (26,'Programs and Events','1','5');
INSERT INTO `committee_category` VALUES (28,'Advisory Local','12','37');
INSERT INTO `committee_category` VALUES (40,'Overseas Coordination','1','5');
INSERT INTO `committee_category` VALUES (44,'Decoration','41','37');
INSERT INTO `committee_category` VALUES (46,'Arts and Crafts','41','37');
INSERT INTO `committee_category` VALUES (47,'Audit','12','37');
INSERT INTO `committee_category` VALUES (48,'Info-Hub','25','23');
INSERT INTO `committee_category` VALUES (49,'Stage/AV','38','10');
INSERT INTO `committee_category` VALUES (50,'Sports','21','16');
INSERT INTO `committee_category` VALUES (51,'Awards','20','27');
INSERT INTO `committee_category` VALUES (52,'Shortfilms','21','36');
INSERT INTO `committee_category` VALUES (56,'Political','37','12');
INSERT INTO `committee_category` VALUES (57,'Spiritual','33','12');
INSERT INTO `committee_category` VALUES (58,'Pannel Discussion and Seminar','25','20');
INSERT INTO `committee_category` VALUES (59,'Registration','38','12');
INSERT INTO `committee_category` VALUES (60,'Corporate Sponsorship','12','12');
INSERT INTO `committee_category` VALUES (61,'Matrimonial','1','12');
INSERT INTO `committee_category` VALUES (62,'Cultural','20','20');
INSERT INTO `committee_category` VALUES (63,'Youth Forum','21','20');
INSERT INTO `committee_category` VALUES (64,'Alumni','20','20');
INSERT INTO `committee_category` VALUES (65,'Banquet','41','12');
INSERT INTO `committee_category` VALUES (66,'Business Seminars','20','12');
INSERT INTO `committee_category` VALUES (67,'CME','41','20');
INSERT INTO `committee_category` VALUES (68,'Immigration & IT','1','12');
INSERT INTO `committee_category` VALUES (69,'Volunteers','21','12');
INSERT INTO `committee_category` VALUES (70,'Souvenir ','38','20');
INSERT INTO `committee_category` VALUES (71,'Budget','12','20');
INSERT INTO `committee_category` VALUES (72,'Language & Literary','37','12');
INSERT INTO `committee_category` VALUES (74,'Women  Forum','33','12');
INSERT INTO `committee_category` VALUES (75,'Media','25','41');
INSERT INTO `committee_category` VALUES (76,'National Convention Core Committee','41','41');
INSERT INTO `committee_category` VALUES (77,'Convention','20','22');
INSERT INTO `committee_category` VALUES (80,'Executive Committee','37','20');
/*!40000 ALTER TABLE `committee_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `committee_pages`
--

DROP TABLE IF EXISTS `committee_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `committee_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `committee_pages`
--

LOCK TABLES `committee_pages` WRITE;
/*!40000 ALTER TABLE `committee_pages` DISABLE KEYS */;
INSERT INTO `committee_pages` VALUES (1,'5','uploads/committees/815054557blank-face.jpeg','Vendor Exhibits','Sekhar Reddy Konala, Chair','Ph # (732) 208-3371, sekharkonala@gmail.com');
INSERT INTO `committee_pages` VALUES (2,'4','uploads/committees/374109095blank-face.jpeg','nata convention 2016','Dr. Ismail Penukonda ','Chair');
INSERT INTO `committee_pages` VALUES (3,'3','uploads/committees/498613496blank-face.jpeg','nata convention 2016','Subhanjali Velaga','Chair');
INSERT INTO `committee_pages` VALUES (4,'1','uploads/committees/2001815598blank-face.jpeg','nata convention 2016','Suresh Manduva','Chair');
INSERT INTO `committee_pages` VALUES (5,'2','uploads/committees/842282324blank-face.jpeg','nata convention 2016','Ramana Putlur','Chair');
INSERT INTO `committee_pages` VALUES (6,'4','uploads/committees/65704050blank-face.jpeg','nata convention 2016','Ramana Juvvadi	','Co-Chair');
INSERT INTO `committee_pages` VALUES (7,'4','uploads/committees/1720073853blank-face.jpeg','nata convention 2016','Basvi Reddy Ayuluri','Co-Chair');
INSERT INTO `committee_pages` VALUES (8,'1','uploads/committees/33801171blank-face.jpeg','nata convention 2016','Krishna Korada ','Co-Chair');
INSERT INTO `committee_pages` VALUES (9,'1','uploads/committees/679458548blank-face.jpeg','nata convention 2016','Subba Reddy Konduru','Co-Chair');
INSERT INTO `committee_pages` VALUES (10,'3','uploads/committees/786998832blank-face.jpeg','nata convention 2016','Sameera Illendula','Co-Chair');
INSERT INTO `committee_pages` VALUES (11,'3','uploads/committees/1940973067blank-face.jpeg','nata convention 2016','Shiri Vooturi','Co-Chair');
INSERT INTO `committee_pages` VALUES (12,'2','uploads/committees/1526458993blank-face.jpeg','nata convention 2016','Vijaya Nettam','Co-Chair');
INSERT INTO `committee_pages` VALUES (13,'5','uploads/committees/1467395205blank-face.jpeg','Vendor Exhibits','RK Panditi, Co-Chair','Ph # (972) 516-8325, dgpintl@yahoo.com');
INSERT INTO `committee_pages` VALUES (14,'2','uploads/committees/582884041blank-face.jpeg','Maya Sanekommu','Maya Sanekommu','Co-chair');
INSERT INTO `committee_pages` VALUES (15,'3','uploads/committees/671852633blank-face.jpeg','Bindu Byreddy','Bindu Byreddy','Member');
INSERT INTO `committee_pages` VALUES (16,'5','uploads/committees/1232364064blank-face.jpeg','Chinnasatyam Veernapu','Chinnasatyam Veernapu','Member');
INSERT INTO `committee_pages` VALUES (17,'5','uploads/committees/54990259blank-face.jpeg','Arpitha Obulreddy ','Arpitha Obulreddy ','Member');
INSERT INTO `committee_pages` VALUES (18,'5','uploads/committees/1200462391blank-face.jpeg','Bhaker Reddy ','Bhaker Reddy ','Member');
INSERT INTO `committee_pages` VALUES (19,'5','uploads/committees/912377082blank-face.jpeg','Venkata Subba Reddy Yeeragudi','Venkata Subba Reddy Yeeragudi','Member');
INSERT INTO `committee_pages` VALUES (20,'7','uploads/committees/1623971014GirishRamireddy.jpg',' Girish Ramireddy',' Girish Ramireddy','Chair');
INSERT INTO `committee_pages` VALUES (21,'7','uploads/committees/420937062Santha_Susarla.jpg','Santha Susarla','Santha Susarla','Member');
INSERT INTO `committee_pages` VALUES (22,'7','uploads/committees/591300783Neelima_Gaddamanugu.jpg','Neelima Gaddamanugu','Neelima Gaddamanugu','Member');
INSERT INTO `committee_pages` VALUES (23,'7','uploads/committees/1555178551blankface.jpeg','Rekha Karanam','Rekha Karanam','Member');
INSERT INTO `committee_pages` VALUES (24,'7','uploads/committees/800932119Sirisha_Thatakula.jpg','Sirisha Thatakula','Sirisha Thatakula','Member');
INSERT INTO `committee_pages` VALUES (25,'7','uploads/committees/396955909blankface.jpeg','Ram Cheruvu','Ram Cheruvu','Member');
INSERT INTO `committee_pages` VALUES (26,'7','uploads/committees/40520805Darga_Nagireddy.jpg','Darga Nagireddy','Darga Nagireddy','Member');
INSERT INTO `committee_pages` VALUES (27,'7','uploads/committees/1309331364Dwarak_Varanasi.jpg','Dwarak Varanasi','Dwarak Varanasi','Member');
INSERT INTO `committee_pages` VALUES (28,'7','uploads/committees/1497270342blankface.jpeg','Madhavi Sunkireddy','Madhavi Sunkireddy','Member');
INSERT INTO `committee_pages` VALUES (30,'7','uploads/committees/942977181blankface.jpeg','Dr. Dwarakanath Reddy','Dr. Dwarakanath Reddy','Member');
INSERT INTO `committee_pages` VALUES (31,'7','uploads/committees/738213954MohanMallam.jpg','Dr. Mohan Mallam (President)','Dr. Mohan Mallam (President)','Advisor');
INSERT INTO `committee_pages` VALUES (33,'7','uploads/committees/550696592RajeshwarReddyGangasani.jpg','Rajeshwar Gangasani (President Elect)','Rajeshwar Gangasani (President Elect)','Advisor');
INSERT INTO `committee_pages` VALUES (34,'7','uploads/committees/654428236Raghava_Reddy_Ghosala.jpg','Dr. Raghava Reddy G (EVP)','Dr. Raghava Reddy G (EVP)','Advisor');
INSERT INTO `committee_pages` VALUES (35,'7','uploads/committees/329106046HariVelkur.jpg','Hari Velkur (Treasurer)','Hari Velkur (Treasurer)','Advisor');
INSERT INTO `committee_pages` VALUES (36,'7','uploads/committees/1845696861Rami_Alla_Reddy.jpg','Rami Alla Reddy(ED)','Rami Alla Reddy(ED)','Advisor');
INSERT INTO `committee_pages` VALUES (37,'7','uploads/committees/1530614488blankface.jpeg','Ramana Reddy (Convener)','Ramana Reddy (Convener)','Advisor');
INSERT INTO `committee_pages` VALUES (38,'7','uploads/committees/1628416590blankface.jpeg','Ramasurya Reddy (Coordinator)','Ramasurya Reddy (Coordinator)','Advisor');
/*!40000 ALTER TABLE `committee_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `committees`
--

DROP TABLE IF EXISTS `committees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `committees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=556 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `committees`
--

LOCK TABLES `committees` WRITE;
/*!40000 ALTER TABLE `committees` DISABLE KEYS */;
INSERT INTO `committees` VALUES (21,'31','uploads/committees/14132cc1.jpg','','Ravi Kandimalla','Chair','');
INSERT INTO `committees` VALUES (22,'17','uploads/committees/2397cc1.jpg','','Dr. GV Rao','Chair','');
INSERT INTO `committees` VALUES (27,'41','uploads/committees/20004cc1.jpg','','Jagadeesh Reddy Cheemarla','Chair','');
INSERT INTO `committees` VALUES (28,'30','uploads/committees/28045cc1.jpg','','Manju Reddy','Chair','');
INSERT INTO `committees` VALUES (33,'7','uploads/committees/26335cc1.jpg','','Chevireddy Bhaskar Reddy','MLA - YSRCP','');
INSERT INTO `committees` VALUES (34,'7','uploads/committees/12980cc2.jpg','','M. Krishna Rao','MLA - TDP','');
INSERT INTO `committees` VALUES (35,'7','uploads/committees/7901cc3.jpg','','K. P. Vivekananda Goud','TDP - MLA - Telangana','');
INSERT INTO `committees` VALUES (37,'7','uploads/committees/28460cc5.jpg','','Teegala Krishna Reddy','MLA - TDP','');
INSERT INTO `committees` VALUES (38,'7','uploads/committees/28149cc6.jpg','','L Ramana','TDP Telangana Leader','');
INSERT INTO `committees` VALUES (39,'7','uploads/committees/10122cc7.jpg','','Gone Prakash Rao','EX RTC Chairman','');
INSERT INTO `committees` VALUES (40,'7','uploads/committees/15905cc8.jpg','','T Narsinga Reddy','Honorable Political Invitee','');
INSERT INTO `committees` VALUES (41,'7','uploads/committees/12870cc9.jpg','','Revanth Reddy','MLA - TDP Telangana','');
INSERT INTO `committees` VALUES (42,'7','uploads/committees/27655cc10.jpg','','Peddi Reddy','','');
INSERT INTO `committees` VALUES (43,'0','uploads/committees/20788cc11.jpg','','Jitta Surender Rddy','','');
INSERT INTO `committees` VALUES (44,'7','uploads/committees/12579cc4.jpg','','Kanumuri Bapiraju','Chairman TTD','');
INSERT INTO `committees` VALUES (52,'27','uploads/committees/19417cc1.jpg','','Gireesh Reddy Meka','Chair','');
INSERT INTO `committees` VALUES (53,'39','uploads/committees/5551cc1.jpg','','Viju Chiluveru','Chair','');
INSERT INTO `committees` VALUES (54,'43','uploads/committees/6558cc1.jpg','','Raghu Kotha','Chair','');
INSERT INTO `committees` VALUES (59,'37','uploads/committees/7005cc1.jpg','','Guru Paradarami','Chair','');
INSERT INTO `committees` VALUES (60,'37','uploads/committees/11474cc2.jpg','','Kishore Mallecheruvu','Member','');
INSERT INTO `committees` VALUES (68,'45','uploads/committees/8603cc1.jpg','','Srilekhya Sure','Chair','');
INSERT INTO `committees` VALUES (69,'45','uploads/committees/14648cc2.jpg','','Meghana Reddy','Co-Chair','');
INSERT INTO `committees` VALUES (70,'45','uploads/committees/7441cc3.jpg','','Ravali Goverdhana','Member','');
INSERT INTO `committees` VALUES (71,'45','uploads/committees/15990cc4.jpg','','Sai Boyella','Member','');
INSERT INTO `committees` VALUES (72,'45','uploads/committees/15479cc5.jpg','','Sree Boyella','Member','');
INSERT INTO `committees` VALUES (73,'45','uploads/committees/12516cc6.jpg','','Sheena Mondeddu','Member','');
INSERT INTO `committees` VALUES (74,'45','uploads/committees/31053cc7.jpg','','Saketh Reddy','Member','');
INSERT INTO `committees` VALUES (75,'45','uploads/committees/4812cc8.jpg','','Akhil Chandra','Member','');
INSERT INTO `committees` VALUES (77,'9','uploads/committees/1066cc1.jpg','','Madhu Kota','Chair','');
INSERT INTO `committees` VALUES (78,'18','uploads/committees/16923cc1.jpg','','Madhavi Indurti','Chair','');
INSERT INTO `committees` VALUES (79,'22','uploads/committees/4024cc1.jpg','','Vishy Dasari','Chair','');
INSERT INTO `committees` VALUES (80,'15','uploads/committees/29073cc1.jpg','','Dr. Bharath Reddy','Chair','');
INSERT INTO `committees` VALUES (81,'44','uploads/committees/134531079blank-face.jpeg','nata convention 2016','Sarita Reddy Konda','Chair','');
INSERT INTO `committees` VALUES (83,'5','uploads/committees/29809cc1.jpg','','Raghava Tadavarthi','Chair','');
INSERT INTO `committees` VALUES (84,'33','uploads/committees/4768cc1.jpg','','Nagesh Doddaka','Vice President, IdhaSoft, Inc.','');
INSERT INTO `committees` VALUES (85,'33','uploads/committees/24153cc2.jpg','','Purna Yarlakula','AP Judicial Service (Retired)','');
INSERT INTO `committees` VALUES (86,'33','uploads/committees/31262cc3.jpg','','Valentin Y. Karpenko','Attorney, Mannam & Associates, LLC','');
INSERT INTO `committees` VALUES (87,'33','uploads/committees/21247cc4.jpg','','Ravi Mannam','Attorney, Mannam & Associates, LLC','');
INSERT INTO `committees` VALUES (88,'32','uploads/committees/12886cc1.jpg','','Venkat Reddy Mondeddu','Chair','');
INSERT INTO `committees` VALUES (89,'32','uploads/committees/21207cc2.jpg','','Venu Udumula','Co-Chair','');
INSERT INTO `committees` VALUES (90,'32','uploads/committees/14540cc3.jpg','','Srini Rallabandi','Member','');
INSERT INTO `committees` VALUES (91,'0','uploads/committees/1813cc4.jpg','','Srinivas K','Member','');
INSERT INTO `committees` VALUES (92,'32','uploads/committees/6698cc5.jpg','','Usha Darisipudi','Member','');
INSERT INTO `committees` VALUES (93,'32','uploads/committees/8219cc6.jpg','','Kishore Mellachervu','Member','');
INSERT INTO `committees` VALUES (94,'40','uploads/committees/1576876716blank-face.jpeg','nata convention 2016','Bhima Penta','Chair','');
INSERT INTO `committees` VALUES (96,'16','uploads/committees/12070cc1.jpg','','Venu Pisike','chair','');
INSERT INTO `committees` VALUES (110,'20','uploads/committees/2983cc1.jpg','','Phani Dokka','Chair','');
INSERT INTO `committees` VALUES (111,'20','uploads/committees/2132cc2.jpg','','Ramesh Meka','Co-Chair','');
INSERT INTO `committees` VALUES (112,'0','uploads/committees/21501cc3.jpg','','Usha Darisipudi','Member','');
INSERT INTO `committees` VALUES (113,'0','uploads/committees/2290cc4.jpg','','Ramana Murthy','Member','');
INSERT INTO `committees` VALUES (114,'20','uploads/committees/15171cc5.jpg','','Raj Anandeshi','Member','');
INSERT INTO `committees` VALUES (115,'13','uploads/committees/7650cc1.jpg','','Swami Atmavidyananda Giri','Kriya Yoga','');
INSERT INTO `committees` VALUES (116,'13','uploads/committees/17779cc2.jpg','','Prof. Dr. C.V. Subrahmanyam','Professor  in Astrology','');
INSERT INTO `committees` VALUES (117,'13','uploads/committees/19504cc3.jpg','','Mrs. Akella Parvathi','Singer, Dhurdharsini(TV)','');
INSERT INTO `committees` VALUES (118,'13','uploads/committees/16553cc4.jpg','','Prof. Mangalagiri Pramila Devi','President, Padasahitya Parishat','');
INSERT INTO `committees` VALUES (119,'13','uploads/committees/13870cc5.jpg','','Amma Sri Karunamayi','Spiritual Leader','');
INSERT INTO `committees` VALUES (121,'29','uploads/committees/973cc1.jpg','','Dilip Tunki','Chair','');
INSERT INTO `committees` VALUES (122,'29','uploads/committees/17538cc2.jpg','','Raj Kasireddy','Co-Chair','');
INSERT INTO `committees` VALUES (123,'42','uploads/committees/30611cc7.jpg','','Malathi Nagabhairava','Chair','');
INSERT INTO `committees` VALUES (124,'42','uploads/committees/25552cc1.jpg','','Nina Davuluri','Miss America','');
INSERT INTO `committees` VALUES (125,'42','uploads/committees/4041cc2.jpg','','Subha Vedula','American Idol','');
INSERT INTO `committees` VALUES (126,'42','uploads/committees/9934cc3.jpg','','Jyothi Reddy','Entrepreneur','');
INSERT INTO `committees` VALUES (127,'42','uploads/committees/31215cc4.jpg','','Aruna Miller Katragadda','Maryland State Delegate','');
INSERT INTO `committees` VALUES (128,'42','uploads/committees/27900cc5.jpg','','Kavya Manyapu','Space Scientist','');
INSERT INTO `committees` VALUES (129,'42','uploads/committees/24453cc6.jpg','','Patolla Madhavi Devi','Income Tax Appellate Tribunal','');
INSERT INTO `committees` VALUES (130,'0','uploads/committees/17871cc1.jpg','','Sunil Gotoor','Chair','');
INSERT INTO `committees` VALUES (134,'11','uploads/committees/1081619728blank-face.jpeg','nata convention 2016','Uma Mahesh Parnapalli ','Chair','');
INSERT INTO `committees` VALUES (135,'11','uploads/committees/2050677628blank-face.jpeg','nata convention 2016','Krishna Mohan Reddy','Co-Chair','');
INSERT INTO `committees` VALUES (136,'6','uploads/committees/704093931blank-face.jpeg','nata convention 2016','Sesi Linganeni ','Chair','');
INSERT INTO `committees` VALUES (137,'6','uploads/committees/104859744blank-face.jpeg','nata convention 2016','Chenna Reddy','Co-Chair','');
INSERT INTO `committees` VALUES (138,'47','uploads/committees/1462227484blank-face.jpeg','nata convention 2016','Vishnu Battula','Chair','');
INSERT INTO `committees` VALUES (139,'48','uploads/committees/1691505167blank-face.jpeg','nata convention 2016','Ramesh Gadiraju','Chair','');
INSERT INTO `committees` VALUES (140,'49','uploads/committees/842213887blank-face.jpeg','nata convention 2016','Suresh Kaku','Chair','');
INSERT INTO `committees` VALUES (141,'49','uploads/committees/279519518blank-face.jpeg','nata convention 2016','Ram Chervu ','Co-Chair','');
INSERT INTO `committees` VALUES (142,'49','uploads/committees/1783749800blank-face.jpeg','nata convention 2016','Bala Ganapavarapu','Co-Chair','');
INSERT INTO `committees` VALUES (148,'25','uploads/committees/1053955850Prasuna_Reddy.jpg','nata convention 2016','Prasunna Reddy','Chair','');
INSERT INTO `committees` VALUES (149,'25','uploads/committees/5744474blank-face.jpeg','nata convention 2016','Chandrashekar Reddy Marepalli','Co-Chair','');
INSERT INTO `committees` VALUES (150,'25','uploads/committees/1570736223blank-face.jpeg','nata convention 2016','Sridhar Korsapati','Co-Chair','');
INSERT INTO `committees` VALUES (151,'25','uploads/committees/768158079Kiran_Gunnam.jpg','nata convention 2016','Kiran Gunnam','Co-Chair','');
INSERT INTO `committees` VALUES (152,'8','uploads/committees/934226805Mallikarjuna_Reddy.jpg','nata convention 2016','Mallikarjuna Murari','Chair','');
INSERT INTO `committees` VALUES (158,'28','uploads/committees/1595635936blank-face.jpeg','nata convention 2016','Dr. S. Raghava Reddy','Chair','');
INSERT INTO `committees` VALUES (159,'21','uploads/committees/1553590129blank-face.jpeg','nata convention 2016','Shyamala Rumala','Chair','');
INSERT INTO `committees` VALUES (160,'10','uploads/committees/748364375blank-face.jpeg','nata convention 2016','Jaya Palagala','Chair','');
INSERT INTO `committees` VALUES (161,'8','uploads/committees/361086953blank-face.jpeg','nata convention 2016','Apparao Guntu	','Co-Chair','');
INSERT INTO `committees` VALUES (164,'44','uploads/committees/204697288blank-face.jpeg','nata convention 2016','Sirisha Bavireddy','Co-Chair','');
INSERT INTO `committees` VALUES (166,'40','uploads/committees/1576996931blank-face.jpeg','nata convention 2016','Gopi Chilakuri	','Co-Chair','');
INSERT INTO `committees` VALUES (167,'40','uploads/committees/2028833731blank-face.jpeg','nata convention 2016','Venu Bhagyanagar	','Co-Chair','');
INSERT INTO `committees` VALUES (168,'4','uploads/committees/1545759540blank-face.jpeg','nata convention 2016','Sreekanth Kothapally ','Chair','');
INSERT INTO `committees` VALUES (169,'4','uploads/committees/595333989blank-face.jpeg','nata convention 2016','Srini Kotapati','Co-Chair','');
INSERT INTO `committees` VALUES (170,'4','uploads/committees/572077531blank-face.jpeg','nata convention 2016','Sreenivasulu Bayyareddy','Co-Chair','');
INSERT INTO `committees` VALUES (171,'24','uploads/committees/136642666blank-face.jpeg','nata convention 2016','Sreedevi Thenepalli	','Chair','');
INSERT INTO `committees` VALUES (173,'14','uploads/committees/1665259076blank-face.jpeg','nata convention 2016','Ravi Kona','Chair','');
INSERT INTO `committees` VALUES (174,'14','uploads/committees/827894851blank-face.jpeg','nata convention 2016','Mahesh Karri','Co-Chair','');
INSERT INTO `committees` VALUES (175,'26','uploads/committees/559047816blank-face.jpeg','nata convention 2016','Ravi Arimanda','Chair','');
INSERT INTO `committees` VALUES (176,'26','uploads/committees/1242552934Santha_Susarla.jpg','nata convention 2016','Santa Susurala	','Co-Chair','');
INSERT INTO `committees` VALUES (177,'1','uploads/committees/434505355blank-face.jpeg','nata convention 2016','Dr. Mohan Mallam ','President','');
INSERT INTO `committees` VALUES (178,'1','uploads/committees/1107885085blank-face.jpeg','nata convention 2016','Dr. Ramana Reddy Guduru ','Convener','');
INSERT INTO `committees` VALUES (179,'1','uploads/committees/1095923978blank-face.jpeg','nata convention 2016','Ramasurya Reddy ','Coordinator','');
INSERT INTO `committees` VALUES (184,'1','uploads/committees/1955066707blank-face.jpeg','nata convention 2016','Rajeshwar Reddy','President-elect','');
INSERT INTO `committees` VALUES (185,'1','uploads/committees/233617898blank-face.jpeg','nata convention 2016','Pradeep Samala ','National Convention Advisor','');
INSERT INTO `committees` VALUES (186,'1','uploads/committees/134870206blank-face.jpeg','nata convention 2016','Girish Ramireddy','Secretary','');
INSERT INTO `committees` VALUES (187,'1','uploads/committees/2130221464blank-face.jpeg','nata convention 2016','Hari Velkuru','Treasurer','');
INSERT INTO `committees` VALUES (188,'1','uploads/committees/1582054728blank-face.jpeg','nata convention 2016','Dr. Sanjeeva Reddy','Past-President','');
INSERT INTO `committees` VALUES (189,'1','uploads/committees/1132535317blank-face.jpeg','nata convention 2016','Venkatesh Mutyala ','Member','');
INSERT INTO `committees` VALUES (190,'1','uploads/committees/342412548blank-face.jpeg','nata convention 2016','Srini Vangimalla ','Member','');
INSERT INTO `committees` VALUES (191,'1','uploads/committees/1396371501blank-face.jpeg','nata convention 2016','Chinnababu Reddy','Member','');
INSERT INTO `committees` VALUES (198,'28','uploads/committees/845144452blank-face.jpeg','nata convention 2016','Vishnu Battula','Co-Chair','');
INSERT INTO `committees` VALUES (199,'47','uploads/committees/815139438blank-face.jpeg','nata convention 2016','Dr. S. Raghava Reddy','Co-Chair','');
INSERT INTO `committees` VALUES (200,'46','uploads/committees/387337711blank-face.jpeg','nata convention 2016','Jyothi Charyulu','Chair','');
INSERT INTO `committees` VALUES (201,'46','uploads/committees/426490670blank-face.jpeg','nata convention 2016','Punya S. Reddy','Co-Chair','');
INSERT INTO `committees` VALUES (203,'8','uploads/committees/1289771352blank-face.jpeg','nata convention 2016','Santosh Kore','Co-Chair','');
INSERT INTO `committees` VALUES (205,'48','uploads/committees/1899595128blank-face.jpeg','nata convention 2016','Viswa Srikanth Challa','Co-Chair','');
INSERT INTO `committees` VALUES (206,'48','uploads/committees/822461279blank-face.jpeg','nata convention 2016','Sunil Suraparaju','Co-Chair','');
INSERT INTO `committees` VALUES (207,'24','uploads/committees/233777480blank-face.jpeg','nata convention 2016','Vijaya Moturu','Co-Chair','');
INSERT INTO `committees` VALUES (208,'24','uploads/committees/1930473008blank-face.jpeg','nata convention 2016','Shanti Devarakonda','Co-Chair','');
INSERT INTO `committees` VALUES (209,'24','uploads/committees/1680429497Prasuna_Reddy.jpg','nata convention 2016','Prasunna Reddy','Co-Chair','');
INSERT INTO `committees` VALUES (210,'50','uploads/committees/954667374311724217blank-face.jpeg','Sports','NMS Reddy','Chair','');
INSERT INTO `committees` VALUES (211,'50','uploads/committees/1381768471311724217blank-face.jpeg','Sports','Balki Chamakura','Co-Chair','');
INSERT INTO `committees` VALUES (212,'2','uploads/committees/2026960283311724217blank-face.jpeg','Convention','Dr. Ramana Reddy Guduru','Convener','');
INSERT INTO `committees` VALUES (213,'2','uploads/committees/1857079864311724217blank-face.jpeg','Convention','Ramasurya Reddy','Coordinator','');
INSERT INTO `committees` VALUES (214,'2','uploads/committees/1323976026311724217blank-face.jpeg','Convention','Sridhar Reddy Korsapati','Co-Convener','');
INSERT INTO `committees` VALUES (215,'2','uploads/committees/1497306776311724217blank-face.jpeg','Convention','Suresh Manduva','Co-Coordinator','');
INSERT INTO `committees` VALUES (216,'2','uploads/committees/1381074703311724217blank-face.jpeg','Convention','Phalgun Veereddygari','Deputy Convener','');
INSERT INTO `committees` VALUES (217,'2','uploads/committees/2082906226311724217blank-face.jpeg','Convention','Geetha Dammana','Deputy Coordinator','');
INSERT INTO `committees` VALUES (218,'51','uploads/committees/1750112619blank-face.jpeg','Awards Chair','Prasad G. Reddy','Chair','');
INSERT INTO `committees` VALUES (219,'51','uploads/committees/1505258209blank-face.jpeg','Gurram Srinivasulu reddy','Gurram Srinivasulu reddy','Co-chair','');
INSERT INTO `committees` VALUES (220,'51','uploads/committees/1228786046Raghava_Reddy_Ghosala.jpg','Raghavar Reddy Ghosala','Raghavar Reddy Ghosala','Member','');
INSERT INTO `committees` VALUES (221,'51','uploads/committees/768335729RamiAllaReddy.jpg','Rami Reddy Alla','Rami Reddy Alla','Member','');
INSERT INTO `committees` VALUES (222,'51','uploads/committees/1804202907blank-face.jpeg','Viswantham Puligandla','Viswantham Puligandla','Member','');
INSERT INTO `committees` VALUES (223,'46','uploads/committees/34750553blank-face.jpeg','Sudha Avula ','Sudha Avula ','Co-chair','');
INSERT INTO `committees` VALUES (224,'46','uploads/committees/1942797368blank-face.jpeg','Madhavi Lokkireddy','Madhavi Lokkireddy','Member','');
INSERT INTO `committees` VALUES (225,'44','uploads/committees/953450595blank-face.jpeg','Sailaja Madi','Sailaja Madi','Co-chair','');
INSERT INTO `committees` VALUES (226,'44','uploads/committees/1558763935blank-face.jpeg','Avika Chokshi','Avika Chokshi','Co-chair','');
INSERT INTO `committees` VALUES (227,'44','uploads/committees/893428446blank-face.jpeg','Neeraja Padigela Â ','Neeraja Padigela Â ','Member','');
INSERT INTO `committees` VALUES (228,'44','uploads/committees/1321597697blank-face.jpeg','Padamaja Kotha','Padamaja Kotha','Member','');
INSERT INTO `committees` VALUES (229,'25','uploads/committees/329755572blank-face.jpeg','Vishnu Battula','Vishnu Battula','Co-chair','');
INSERT INTO `committees` VALUES (230,'8','uploads/committees/2089433128Surya_Gangireddy.jpg','Surya Gangireddy','Surya Gangireddy','Co-chair','');
INSERT INTO `committees` VALUES (231,'8','uploads/committees/212234460blank-face.jpeg','Shekar Bramhadevara','Shekar Bramhadevara','Member','');
INSERT INTO `committees` VALUES (234,'40','uploads/committees/818239948blank-face.jpeg','Srinivas Veeravalli','Srinivas Veeravalli','Co-chair','');
INSERT INTO `committees` VALUES (235,'4','uploads/committees/1899198621blank-face.jpeg','VIjay Manellore','Vijay Manellore','Co-chair','');
INSERT INTO `committees` VALUES (236,'26','uploads/committees/1554239453blank-face.jpeg','Anoop Devireddy','Anoop Devireddy','Co-chair','');
INSERT INTO `committees` VALUES (237,'26','uploads/committees/131692565blank-face.jpeg','','Subbu Damireddy','Co-Chair','');
INSERT INTO `committees` VALUES (238,'24','uploads/committees/632094180233777480blank-face.jpeg','Reception','Jyothi Nemani','member','');
INSERT INTO `committees` VALUES (239,'24','uploads/committees/412109515233777480blank-face.jpeg','Reception','Kalyani Kothamasu','member','');
INSERT INTO `committees` VALUES (240,'0','uploads/committees/821868483233777480blank-face.jpeg','Reception','Krithika Ganesamoorthi','member','');
INSERT INTO `committees` VALUES (241,'24','uploads/committees/581558659233777480blank-face.jpeg','Reception','Malathi Kethireddy','member','');
INSERT INTO `committees` VALUES (242,'24','uploads/committees/410564939233777480blank-face.jpeg','Reception','Uma Chilukuri','member','');
INSERT INTO `committees` VALUES (243,'52','uploads/committees/590035483233777480blank-face.jpeg','Shortfilms','Sreekanth Samudrala','chair','');
INSERT INTO `committees` VALUES (244,'14','uploads/committees/855076347blank-face.jpeg','Prabhand Thopudurthy','Prabhand Thopudurthy','co-Chair','');
INSERT INTO `committees` VALUES (245,'50','uploads/committees/1523089188blank-face.jpeg','Raj Gondhi','Raj Gondhi','Co-Chair','');
INSERT INTO `committees` VALUES (246,'50','uploads/committees/457258558blank-face.jpeg','Rajendra Thodigila','Rajendra Thodigila','Co-Chair','');
INSERT INTO `committees` VALUES (247,'50','uploads/committees/156866768Mallikarjuna_Reddy.jpg','Malli Kharjuna Reddy Avula ','Malli Kharjuna Reddy Avula ','Co-Chair','');
INSERT INTO `committees` VALUES (248,'11','uploads/committees/1271291736blank-face.jpeg','Venkat Annapareddy  ','Venkat Annapareddy  ','Co-Chair','');
INSERT INTO `committees` VALUES (252,'24','uploads/committees/1449176499blank-face.jpeg','Krithika Ganesamoorthi','Krithika Ganesamoorthi','Member','');
INSERT INTO `committees` VALUES (253,'21','uploads/committees/1423026846blank-face.jpeg','Madhu Mallu ','Madhu Mallu ','Co-Chair','');
INSERT INTO `committees` VALUES (254,'21','uploads/committees/1000947202blank-face.jpeg','Madhu Guduru','Madhu Guduru','Co-Chair','<h4 style=\"text-align:center; color:#560000\">Invitation for bids  from Food Vendors</h4>\r\n<p style=\"text-align:center\"><a href=\"http://www.nata2016.org/assets/pdf/NATAConventionFoodContract.pdf\" style=\"text-decoration:underline; color:#444;\" target=\"_blank\">Invitation for bids from Food Vendors</a></h3>\r\n');
INSERT INTO `committees` VALUES (255,'21','uploads/committees/1945148504blank-face.jpeg','Sachi Mutuluru','Sachi Mutuluru','Co-Chair','');
INSERT INTO `committees` VALUES (257,'11','uploads/committees/788895963blank-face.jpeg','Raja Maganti','Raja Maganti','Co-Chair','');
INSERT INTO `committees` VALUES (258,'50','uploads/committees/1465144210blank-face.jpeg','Rajesh Cherukupall','Rajesh Cherukupall','Member','');
INSERT INTO `committees` VALUES (259,'44','uploads/committees/361926479blank-face.jpeg','Indu mandadi','Indu Reddy','Advisor','');
INSERT INTO `committees` VALUES (260,'8','uploads/committees/534009671blank-face.jpeg','Arvind Reddy Muppidi','Arvind Reddy Muppidi','Advisor','');
INSERT INTO `committees` VALUES (261,'11','uploads/committees/1829585482blank-face.jpeg','Chandra Ponnamreddy','Chandra Ponnamreddy','Member','');
INSERT INTO `committees` VALUES (263,'56','uploads/committees/1189664796233777480blank-face.jpeg','political','Uma Maheshwar Reddy Kurri','Chair','');
INSERT INTO `committees` VALUES (264,'56','uploads/committees/362186423233777480blank-face.jpeg','','Ramesh Dhayam','Co-Chair','');
INSERT INTO `committees` VALUES (265,'56','uploads/committees/751056701233777480blank-face.jpeg','','Subba Rao Kodeddu','Member','');
INSERT INTO `committees` VALUES (266,'57','uploads/committees/1157587789Subrahmanyam_Reddy_Boya.JPG','','Subrahmanyam Boyareddigari','Chair','');
INSERT INTO `committees` VALUES (267,'57','uploads/committees/86452489233777480blank-face.jpeg','','Gopal Ponangi','Co-Chair','');
INSERT INTO `committees` VALUES (268,'57','uploads/committees/128842057233777480blank-face.jpeg','','RK Panditi','member','');
INSERT INTO `committees` VALUES (269,'57','uploads/committees/1799702498233777480blank-face.jpeg','','Sirish Poondla','member','');
INSERT INTO `committees` VALUES (270,'57','uploads/committees/754609604233777480blank-face.jpeg','','Madhumathi Vysyaraju','member','');
INSERT INTO `committees` VALUES (271,'57','uploads/committees/666290426233777480blank-face.jpeg','','Dr. Nallu Ramappa','member','');
INSERT INTO `committees` VALUES (272,'57','uploads/committees/549889400233777480blank-face.jpeg','','Sudhaker Patil','Member','');
INSERT INTO `committees` VALUES (273,'57','uploads/committees/2097107878233777480blank-face.jpeg','','Abhinav Dahagam','Member','');
INSERT INTO `committees` VALUES (274,'57','uploads/committees/619273029233777480blank-face.jpeg','','Kumar Annavarapu','Member','');
INSERT INTO `committees` VALUES (275,'57','uploads/committees/342917612233777480blank-face.jpeg','','Satyannarayana','Member','');
INSERT INTO `committees` VALUES (276,'57','uploads/committees/1772706532233777480blank-face.jpeg','','Dr. Nakta Raju','Advisor','');
INSERT INTO `committees` VALUES (277,'57','uploads/committees/294877248233777480blank-face.jpeg','','Rao Kalavala','Advisor','');
INSERT INTO `committees` VALUES (278,'58','uploads/committees/410083050233777480blank-face.jpeg','','Sreenivasa Reddy Obulareddy','Chair','');
INSERT INTO `committees` VALUES (279,'58','uploads/committees/549359406233777480blank-face.jpeg','','Murali Challa','Co-Chair','');
INSERT INTO `committees` VALUES (280,'58','uploads/committees/1526690153233777480blank-face.jpeg','','Siva Annupureddy','Co-Chair','');
INSERT INTO `committees` VALUES (281,'58','uploads/committees/1509229541233777480blank-face.jpeg','','Krishna Koduru','Co-Chair','');
INSERT INTO `committees` VALUES (282,'59','uploads/committees/973244056233777480blank-face.jpeg','','Venkata Vaddadi','Chair','');
INSERT INTO `committees` VALUES (283,'59','uploads/committees/872755070Narayana_Reddy_Kasireddy.JPG','','Narayana Reddy Kasireddy','Co-Chair','');
INSERT INTO `committees` VALUES (284,'59','uploads/committees/311695549233777480blank-face.jpeg','','Prasad Choppa','Member','');
INSERT INTO `committees` VALUES (285,'59','uploads/committees/1908007215233777480blank-face.jpeg','','Nagi Reddy Karri','Member','');
INSERT INTO `committees` VALUES (286,'60','uploads/committees/1176848218Srinivas_Ganagoni.jpg','','Srinivas Ganagoni','Chair','');
INSERT INTO `committees` VALUES (287,'60','uploads/committees/2057921818233777480blank-face.jpeg','','Satish Bommineni','Co-Chair','');
INSERT INTO `committees` VALUES (288,'60','uploads/committees/369330795Raghu_Gajjala.jpg','','Raghu Gajjala','Member','');
INSERT INTO `committees` VALUES (289,'62','uploads/committees/158371840Darga_Nagireddy.jpg','','Dr. Darga Nagireddy','Chair','');
INSERT INTO `committees` VALUES (303,'63','uploads/committees/197521577233777480blank-face.jpeg','','Subhada Prasad','Chair','');
INSERT INTO `committees` VALUES (304,'63','uploads/committees/1476304431233777480blank-face.jpeg','','Suhitha Kosuri','Co-Chair','');
INSERT INTO `committees` VALUES (305,'63','uploads/committees/177966666233777480blank-face.jpeg','','Vennela Gajjala','Co-Chair','');
INSERT INTO `committees` VALUES (306,'63','uploads/committees/936764284233777480blank-face.jpeg','','Ravi Chand Ramireddy','Co-Chair','');
INSERT INTO `committees` VALUES (307,'63','uploads/committees/535577963233777480blank-face.jpeg','','Sanath Puskoor','Co-Chair','');
INSERT INTO `committees` VALUES (308,'63','uploads/committees/485672616233777480blank-face.jpeg','','Anisha Komandla','Co-Chair','');
INSERT INTO `committees` VALUES (309,'64','uploads/committees/936355704233777480blank-face.jpeg','','Sudhakar Reddy Srirangapalli','Chair','');
INSERT INTO `committees` VALUES (310,'64','uploads/committees/2007491965233777480blank-face.jpeg','','Srinadha Reddy Palavala','Co-Chair','');
INSERT INTO `committees` VALUES (311,'64','uploads/committees/271038342233777480blank-face.jpeg','','GB Reddy','Co-Chair','');
INSERT INTO `committees` VALUES (312,'64','uploads/committees/385933337233777480blank-face.jpeg','','Chandra Budda','Member','');
INSERT INTO `committees` VALUES (313,'65','uploads/committees/203281834233777480blank-face.jpeg','','Rekha Reddy','Chair','');
INSERT INTO `committees` VALUES (314,'65','uploads/committees/970723726233777480blank-face.jpeg','','Baskar Ghandikota','Co-Chair','');
INSERT INTO `committees` VALUES (315,'66','uploads/committees/1410258348233777480blank-face.jpeg','','Anand Dasarai','Chair','');
INSERT INTO `committees` VALUES (316,'66','uploads/committees/313327303233777480blank-face.jpeg','','Raj Pabba','Co-Chair','');
INSERT INTO `committees` VALUES (317,'66','uploads/committees/1613771665233777480blank-face.jpeg','','Madhu Kolachina','Co-Chair','');
INSERT INTO `committees` VALUES (318,'66','uploads/committees/1855293540233777480blank-face.jpeg','','Poornachandra Rao','Member','');
INSERT INTO `committees` VALUES (319,'66','uploads/committees/520221523233777480blank-face.jpeg','','Bhaskar Rayavaram','Member','');
INSERT INTO `committees` VALUES (320,'66','uploads/committees/1821264908233777480blank-face.jpeg','','Hemanth Balla','Member','');
INSERT INTO `committees` VALUES (321,'67','uploads/committees/640547547233777480blank-face.jpeg','','Dr. Marayada Reddy','Chair','');
INSERT INTO `committees` VALUES (322,'67','uploads/committees/463690761233777480blank-face.jpeg','','Dr. Pavan Pamudurthy','Co-Chair','');
INSERT INTO `committees` VALUES (323,'67','uploads/committees/1041083395Suresh_Reddy.JPG','','Dr. Suresh Reddy','Co-Chair','');
INSERT INTO `committees` VALUES (325,'67','uploads/committees/1501668290233777480blank-face.jpeg','','Dr. Padmaja Battula','Member','');
INSERT INTO `committees` VALUES (326,'67','uploads/committees/1246522812233777480blank-face.jpeg','','Dr. Ravi Potiluri','Member','');
INSERT INTO `committees` VALUES (327,'67','uploads/committees/221022072233777480blank-face.jpeg','','Dr. Raju Nakta','Member','');
INSERT INTO `committees` VALUES (328,'67','uploads/committees/1306518685233777480blank-face.jpeg','','Dr. Madhavi Muppidi','Member','');
INSERT INTO `committees` VALUES (329,'67','uploads/committees/137696059233777480blank-face.jpeg','','Dr. Sreelatha','Member','');
INSERT INTO `committees` VALUES (330,'67','uploads/committees/509104706233777480blank-face.jpeg','','Dr. Dev Ghandev','Member','');
INSERT INTO `committees` VALUES (331,'67','uploads/committees/661548782233777480blank-face.jpeg','','Dr. Pathikonda Murali','Member','');
INSERT INTO `committees` VALUES (332,'67','uploads/committees/936579934RamiReddyBuchipudi.jpg','','Dr. Ramireddy Buchipudi','Member','');
INSERT INTO `committees` VALUES (333,'67','uploads/committees/1192060741233777480blank-face.jpeg','','Dr. Ravi Chandra Juluri','Member','');
INSERT INTO `committees` VALUES (334,'67','uploads/committees/152160787233777480blank-face.jpeg','','Dr. Pratap Reddy Thummala','Member','');
INSERT INTO `committees` VALUES (335,'67','uploads/committees/454513249233777480blank-face.jpeg','','Adi Gella','Member','');
INSERT INTO `committees` VALUES (338,'67','uploads/committees/1201303118StanleyReddy.jpg','','Stalney Reddy','Advisor','');
INSERT INTO `committees` VALUES (339,'68','uploads/committees/1453297128233777480blank-face.jpeg','','Ramana Reddy Kristapati','Chair','');
INSERT INTO `committees` VALUES (340,'68','uploads/committees/1332037331233777480blank-face.jpeg','','Pradeep Redy chowti','Co-Chair','');
INSERT INTO `committees` VALUES (341,'69','uploads/committees/1394629997233777480blank-face.jpeg','','Nagesh Babu Dindukurthi','Chair','');
INSERT INTO `committees` VALUES (342,'69','uploads/committees/167965454233777480blank-face.jpeg','','Raghu Dongur','Co-Chair','');
INSERT INTO `committees` VALUES (343,'69','uploads/committees/551319465233777480blank-face.jpeg','','Satish Bandaru','Co-Chair','');
INSERT INTO `committees` VALUES (344,'69','uploads/committees/1212222469233777480blank-face.jpeg','','Chandra K Bandar','Member','');
INSERT INTO `committees` VALUES (345,'70','uploads/committees/818381471Raghunadha Kotha.jpg','','Raghunath Reddy Kotha','Chair','');
INSERT INTO `committees` VALUES (346,'70','uploads/committees/1030085224233777480blank-face.jpeg','','Pravardhan Reddy Chimmula','Co-Chair','');
INSERT INTO `committees` VALUES (347,'70','uploads/committees/369820598233777480blank-face.jpeg','','Subbu Jonnalagadda','advisor','');
INSERT INTO `committees` VALUES (348,'71','uploads/committees/350782054233777480blank-face.jpeg','','Ramana Reddy Guduru','Chair','');
INSERT INTO `committees` VALUES (349,'71','uploads/committees/1900706527233777480blank-face.jpeg','','Ramasuryra Reddy','Member','');
INSERT INTO `committees` VALUES (350,'71','uploads/committees/641523113pradeepsamla.jpg','','Pradeep Samala','Member','');
INSERT INTO `committees` VALUES (352,'72','uploads/committees/1120038152233777480blank-face.jpeg','','Dr. Ismail Penukonda','Chair','');
INSERT INTO `committees` VALUES (353,'72','uploads/committees/1262304820233777480blank-face.jpeg','','Ramana Juvvadi','Co-Chair','');
INSERT INTO `committees` VALUES (354,'72','uploads/committees/1773433435233777480blank-face.jpeg','','Basvi Reddy Ayuluri','Co-Chair','');
INSERT INTO `committees` VALUES (355,'61','uploads/committees/1159111663233777480blank-face.jpeg','','Ramana Putlur','Chair','');
INSERT INTO `committees` VALUES (356,'61','uploads/committees/1108800835233777480blank-face.jpeg','','Vijaya Nettam','Co-Chair','');
INSERT INTO `committees` VALUES (357,'61','uploads/committees/1358291033233777480blank-face.jpeg','','Maya Sanekommu','Co-Chair','');
INSERT INTO `committees` VALUES (358,'74','uploads/committees/1934397149233777480blank-face.jpeg','','Subhanjali Velaga','Chair','');
INSERT INTO `committees` VALUES (359,'74','uploads/committees/1275002956233777480blank-face.jpeg','','Sameera Illendula','Co-Chair','');
INSERT INTO `committees` VALUES (360,'74','uploads/committees/1026841071233777480blank-face.jpeg','','Shiri Vooturi','Co-Chair','');
INSERT INTO `committees` VALUES (361,'74','uploads/committees/2060235005233777480blank-face.jpeg','','Bindu Byreddy','Member','');
INSERT INTO `committees` VALUES (362,'64','uploads/committees/363484884default.jpeg','','Rajendra Polu','Member','');
INSERT INTO `committees` VALUES (363,'65','uploads/committees/2003664870default.jpeg','','Sunil Devi Reddy','Member','');
INSERT INTO `committees` VALUES (364,'65','uploads/committees/2085873827default.jpeg','','Annapurna Samala','Member','');
INSERT INTO `committees` VALUES (365,'65','uploads/committees/2114429738default.jpeg','','Jagadish Darimadugu','Member','');
INSERT INTO `committees` VALUES (366,'65','uploads/committees/946156790default.jpeg','','Sai Mundla','Member','<h4 style=\"color: rgb(88, 0, 0); text-align: center;\">\r\n	Invitation for bids from Food Vendors for Banquet Dinner</h4>\r\n<p style=\"text-align: center;\">\r\n	<a href=\"http://www.nata2016.org/assets/pdf/NATAConventionFoodContract_Banquet.pdf\" style=\"text-decoration:underline; color:#444;\" target=\"_blank\">Invitation for bids from Food Vendors for Banquet Dinner</a></p>\r\n');
INSERT INTO `committees` VALUES (367,'68','uploads/committees/707224750default.jpeg','','China Satyam','Co-Chair','');
INSERT INTO `committees` VALUES (368,'68','uploads/committees/1959337479default.jpeg','','Dr. Bhaskar Reddy Sanikommu','Member','');
INSERT INTO `committees` VALUES (369,'68','uploads/committees/925757734default.jpeg','','Subba Rao Kondeddu','Member','');
INSERT INTO `committees` VALUES (370,'68','uploads/committees/1012152681default.jpeg','','Hari Reddy Singam','Member','');
INSERT INTO `committees` VALUES (371,'4','uploads/committees/1922214634default.jpeg','','Krishna Kolukuluri','Co-Chair','');
INSERT INTO `committees` VALUES (372,'75','uploads/committees/11522421381332037331233777480blank-face.jpeg','','Thirumal Reddy','Chair','');
INSERT INTO `committees` VALUES (373,'75','uploads/committees/14969298421332037331233777480blank-face.jpeg','','KC Chekuri','Co-Chair','');
INSERT INTO `committees` VALUES (374,'75','uploads/committees/19567564011332037331233777480blank-face.jpeg','','Krishna Puttaparthi','Co-Chair','');
INSERT INTO `committees` VALUES (375,'75','uploads/committees/16908461071332037331233777480blank-face.jpeg','','Venkat Mulukutla','Co-Chair','');
INSERT INTO `committees` VALUES (376,'75','uploads/committees/21223700391332037331233777480blank-face.jpeg','','Nasim','Member','');
INSERT INTO `committees` VALUES (377,'75','uploads/committees/20599776601332037331233777480blank-face.jpeg','','Sateesh Punnam','Member','');
INSERT INTO `committees` VALUES (378,'75','uploads/committees/6546142281332037331233777480blank-face.jpeg','','Manohar Nimmagadda','Member','');
INSERT INTO `committees` VALUES (379,'75','uploads/committees/14520610871332037331233777480blank-face.jpeg','','Kumar Aswapathi','Member','');
INSERT INTO `committees` VALUES (380,'77','uploads/committees/3594464341332037331233777480blank-face.jpeg','','Dr. Ramana Reddy Guduru','Convener','');
INSERT INTO `committees` VALUES (382,'77','uploads/committees/3425809881332037331233777480blank-face.jpeg','','Sridhar Reddy Korsapati','Co-Convener','');
INSERT INTO `committees` VALUES (384,'77','uploads/committees/3271550161332037331233777480blank-face.jpeg','','Phalgun Veereddygari','Deputy Convener','');
INSERT INTO `committees` VALUES (386,'76','uploads/committees/866657754MohanMallam.jpg','','Dr. Mohan Mallam','President','');
INSERT INTO `committees` VALUES (387,'76','uploads/committees/16219175431332037331233777480blank-face.jpeg','','Dr. Ramana Reddy Guduru','Convener','');
INSERT INTO `committees` VALUES (388,'76','uploads/committees/10441866991332037331233777480blank-face.jpeg','','Ramasurya Reddy','Coordinator','');
INSERT INTO `committees` VALUES (389,'76','uploads/committees/1646745176RajeshwarReddyGangasani.jpg','','Rajeshwar Reddy','President-elect','');
INSERT INTO `committees` VALUES (390,'76','uploads/committees/396221767pradeepsamla.jpg','','Pradeep Samala','National Convention Advisor','');
INSERT INTO `committees` VALUES (391,'76','uploads/committees/1281173867GirishRamireddy.jpg','','Girish Ramireddy','Secretary','');
INSERT INTO `committees` VALUES (392,'76','uploads/committees/597954239HariVelkur.jpg','','Hari Velkuru','Treasurer','');
INSERT INTO `committees` VALUES (393,'76','uploads/committees/1704351870SanjeevaReddy.jpg','','Dr. Sanjeeva Reddy','Past-President','');
INSERT INTO `committees` VALUES (394,'76','uploads/committees/479726591332037331233777480blank-face.jpeg','','Venkatesh Mutyala','Member','');
INSERT INTO `committees` VALUES (395,'76','uploads/committees/1629229627SriniReddyVangimalla.jpg','','Srini Vangimalla','Member','');
INSERT INTO `committees` VALUES (396,'76','uploads/committees/696042871Chinnababu_Reddy.jpg','','Chinnababu Reddy','Member','');
INSERT INTO `committees` VALUES (397,'62','uploads/committees/119447126575025717346321383315733422891094844031233777480blank-face.jpeg','','Kamalakar Poonuru','Co-Chair','');
INSERT INTO `committees` VALUES (398,'62','uploads/committees/141584891475025717346321383315733422891094844031233777480blank-face.jpeg','','Madhavi Sunkireddy','Co-Chair','');
INSERT INTO `committees` VALUES (399,'62','uploads/committees/94220051175025717346321383315733422891094844031233777480blank-face.jpeg','','Suresh Pathaneni','Co-Chair','');
INSERT INTO `committees` VALUES (400,'62','uploads/committees/22319893375025717346321383315733422891094844031233777480blank-face.jpeg','','Rajeswari Udayagiri','Co-Chair','');
INSERT INTO `committees` VALUES (401,'62','uploads/committees/164758469375025717346321383315733422891094844031233777480blank-face.jpeg','','Madhavi Pasupuleti','Co-Chair','');
INSERT INTO `committees` VALUES (402,'62','uploads/committees/1781885220Neelima_Gaddamanugu.jpg','','Neelima Gaddamanugu','Member','');
INSERT INTO `committees` VALUES (403,'62','uploads/committees/1731836891Santha_Susarla.jpg','','Santa Susarla','Member','');
INSERT INTO `committees` VALUES (404,'62','uploads/committees/1413545939Sirisha_Thatakula.jpg','','Sirisha Thatakula','Member','');
INSERT INTO `committees` VALUES (405,'62','uploads/committees/3414072275025717346321383315733422891094844031233777480blank-face.jpeg','','Nanda Korvi','Member','');
INSERT INTO `committees` VALUES (406,'62','uploads/committees/15473065075025717346321383315733422891094844031233777480blank-face.jpeg','','Sharada Singireddy','Member','');
INSERT INTO `committees` VALUES (407,'62','uploads/committees/54911794075025717346321383315733422891094844031233777480blank-face.jpeg','','Kalyani Tadimeti','Member','');
INSERT INTO `committees` VALUES (408,'62','uploads/committees/71658600875025717346321383315733422891094844031233777480blank-face.jpeg','','Srinivas Dee','Member','');
INSERT INTO `committees` VALUES (409,'62','uploads/committees/191725150075025717346321383315733422891094844031233777480blank-face.jpeg','','Chandrasekhar Jalasutram','Member','');
INSERT INTO `committees` VALUES (410,'62','uploads/committees/203630380975025717346321383315733422891094844031233777480blank-face.jpeg','','Chenna Korvi','Member','');
INSERT INTO `committees` VALUES (411,'62','uploads/committees/184338330575025717346321383315733422891094844031233777480blank-face.jpeg','','Kalpana Goli','Member','');
INSERT INTO `committees` VALUES (412,'62','uploads/committees/57609606775025717346321383315733422891094844031233777480blank-face.jpeg','','Rajendra Polu','Member','');
INSERT INTO `committees` VALUES (413,'62','uploads/committees/2029961111Baba_Sontyana.jpg','','Baba Sontyana','Member','');
INSERT INTO `committees` VALUES (414,'62','uploads/committees/157009217775025717346321383315733422891094844031233777480blank-face.jpeg','','Shaker Brahmmadevara','Member','');
INSERT INTO `committees` VALUES (415,'62','uploads/committees/158453186975025717346321383315733422891094844031233777480blank-face.jpeg','','Sudharai Kondapu','Member','');
INSERT INTO `committees` VALUES (416,'62','uploads/committees/29211375675025717346321383315733422891094844031233777480blank-face.jpeg','','Mallik Diwakarla','Member','');
INSERT INTO `committees` VALUES (417,'62','uploads/committees/78848741075025717346321383315733422891094844031233777480blank-face.jpeg','','Kushala','Member','');
INSERT INTO `committees` VALUES (418,'62','uploads/committees/129483132275025717346321383315733422891094844031233777480blank-face.jpeg','','Prasanthi Ballada','Member','');
INSERT INTO `committees` VALUES (419,'62','uploads/committees/45195577875025717346321383315733422891094844031233777480blank-face.jpeg','','Padmasree','Member','');
INSERT INTO `committees` VALUES (420,'62','uploads/committees/106212457675025717346321383315733422891094844031233777480blank-face.jpeg','','Supriya Tanguturi','Member','');
INSERT INTO `committees` VALUES (421,'62','uploads/committees/102982351975025717346321383315733422891094844031233777480blank-face.jpeg','','Sateesh Seeram','Member','');
INSERT INTO `committees` VALUES (422,'62','uploads/committees/57028112875025717346321383315733422891094844031233777480blank-face.jpeg','','Indu Pancharpula','Member','');
INSERT INTO `committees` VALUES (423,'62','uploads/committees/125554600675025717346321383315733422891094844031233777480blank-face.jpeg','','Sahasra Kudumula','Member','');
INSERT INTO `committees` VALUES (424,'62','uploads/committees/1108717353Dwarak_Varanasi.jpg','','Dwarak Varanasi','Member','');
INSERT INTO `committees` VALUES (425,'62','uploads/committees/13103230975025717346321383315733422891094844031233777480blank-face.jpeg','','Dwarakanatha Reddy','Member','');
INSERT INTO `committees` VALUES (426,'62','uploads/committees/68378988175025717346321383315733422891094844031233777480blank-face.jpeg','','Venkat Mulukutla','Member','');
INSERT INTO `committees` VALUES (427,'62','uploads/committees/8518415075025717346321383315733422891094844031233777480blank-face.jpeg','','Sandhya Gavva','Advisor','');
INSERT INTO `committees` VALUES (428,'62','uploads/committees/154688122475025717346321383315733422891094844031233777480blank-face.jpeg','','Geetha Dammana','Advisor','<div>\r\n	<strong style=\"font-size: 16px; color: red;\"><span style=\"text-decoration: underline;\"><a href=\"http://www.nataus.org/event/index/booktickets/21\" target=\"_blank\">NATA IDOL Entry Form</a></span></strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<strong style=\"font-size: 16px; color: rgb(165, 42, 42);\">National Team :&nbsp;</strong></div>\r\n');
INSERT INTO `committees` VALUES (429,'62','uploads/committees/1534689514SrinivasaReddyAlla.jpg','','Dr. Srinivas Reddy Alla','Advisor','');
INSERT INTO `committees` VALUES (431,'77','uploads/committees/3775425675562888631332037331233777480blank-face.jpeg','','Ramasurya Reddy','Coordinator','');
INSERT INTO `committees` VALUES (432,'77','uploads/committees/6697897475562888631332037331233777480blank-face.jpeg','','Suresh Manduva','Co-Coordinator','');
INSERT INTO `committees` VALUES (433,'77','uploads/committees/429257545562888631332037331233777480blank-face.jpeg','','Geetha Dammana','Deputy Coordinator','');
INSERT INTO `committees` VALUES (434,'64','uploads/committees/1816657675562888631332037331233777480blank-face.jpeg','','Mamata Donkena','Advisor','');
INSERT INTO `committees` VALUES (435,'46','uploads/committees/1843685536IT_Web_Mohan_Kaladi.jpg','','Mohan Kaladi','Advisor','');
INSERT INTO `committees` VALUES (436,'47','uploads/committees/1802579865pradeepsamla.jpg','','Pradeep Samala','Advisor','');
INSERT INTO `committees` VALUES (437,'47','uploads/committees/1689925555SrinivasGanagoni.jpg','','Srinivas Ganagoni','Advisor','');
INSERT INTO `committees` VALUES (438,'51','uploads/committees/855444200HariVelkur.jpg','','Hari Velkuru','Advisor','');
INSERT INTO `committees` VALUES (439,'65','uploads/committees/18543473535562888631332037331233777480blank-face.jpeg','','Tarakumar Reddy','Advisor','');
INSERT INTO `committees` VALUES (440,'65','uploads/committees/1366557432SriniReddyVangimalla.jpg','','Srini Vangimalla','Advisor','');
INSERT INTO `committees` VALUES (441,'65','uploads/committees/1763035246jayachandra.jpg','','Jayachandra Reddy','Advisor','');
INSERT INTO `committees` VALUES (442,'71','uploads/committees/1175837565VenkataramanaReddyMurari.jpg','','Venkataramana Reddy Murari','Advisor','');
INSERT INTO `committees` VALUES (443,'71','uploads/committees/199579627HariVelkur.jpg','','Hari Velkuru','Advisor','');
INSERT INTO `committees` VALUES (444,'66','uploads/committees/1301014055ShivaMeka.jpg','','Shiva Meka','Advisor','');
INSERT INTO `committees` VALUES (445,'66','uploads/committees/1811948937MallikBanda.jpg','','Mallik Banda','Advisor','');
INSERT INTO `committees` VALUES (446,'67','uploads/committees/1316697135RamiReddyBuchipudi.jpg','','Ramireddy Buchipudi','Advisor','');
INSERT INTO `committees` VALUES (447,'60','uploads/committees/1654245479AnnaReddy.jpg','','Anna Reddy','Advisor','');
INSERT INTO `committees` VALUES (448,'60','uploads/committees/358547240SrinivasGanagoni.jpg','','Srinivasa Ganagoni','Advisor','');
INSERT INTO `committees` VALUES (449,'80','uploads/committees/855351845mohanmallam.jpg','','Mohan Mallam M.D.','President','');
INSERT INTO `committees` VALUES (451,'80','uploads/committees/311296379RajeswarGangasaniReddy.jpg','','Rajeswar Gangasani Reddy','President-Elect','');
INSERT INTO `committees` VALUES (452,'80','uploads/committees/1995796852SanjeevaReddy.jpg','','Dr. Sanjeeva Reddy','Past-President','');
INSERT INTO `committees` VALUES (453,'80','uploads/committees/969983436Raghava_Reddy_Ghosala.jpg','','Raghava Reddy Ghosala','Exec. Vice-President','');
INSERT INTO `committees` VALUES (454,'80','uploads/committees/4132712Girish_Ramireddy.jpg','','Girish Ramireddy','Secretary','');
INSERT INTO `committees` VALUES (455,'80','uploads/committees/1992127589Hari_Velkur.jpg','','Hari Velkur','Treasurer','');
INSERT INTO `committees` VALUES (456,'80','uploads/committees/13141511331266679480Srinivas_Ganagoni.jpg','','Srinivas Ganagoni','Joint Secretary','');
INSERT INTO `committees` VALUES (457,'80','uploads/committees/718102724MallikBanda1.jpg','','Mallik Banda ','Joint Treasurer','');
INSERT INTO `committees` VALUES (458,'80','uploads/committees/1360886435Rami_Alla_Reddy.jpg','','Rami Alla Reddy','Executive Director','');
INSERT INTO `committees` VALUES (459,'80','uploads/committees/1063373326jayachandra.jpg','','Jayachandra Reddy','International Vice President','');
INSERT INTO `committees` VALUES (460,'80','uploads/committees/454274516pradeepsamla (1).jpg','','Pradeep Samla','National Convention Adviser','');
INSERT INTO `committees` VALUES (461,'21','uploads/committees/7137169111553590129blank-face.jpeg','','Rami Katasani','Member','');
INSERT INTO `committees` VALUES (462,'21','uploads/committees/16902128641553590129blank-face.jpeg','','Chandra Pottipati','Member','');
INSERT INTO `committees` VALUES (463,'21','uploads/committees/11457788381553590129blank-face.jpeg','','Sudhakar SirigiReddy','Member','');
INSERT INTO `committees` VALUES (464,'21','uploads/committees/6773351711553590129blank-face.jpeg','','Subbu DamiReddy','Member','');
INSERT INTO `committees` VALUES (465,'44','uploads/committees/2028892374GirishRamireddy.jpg','','Girish Ramireddy','Advisor','');
INSERT INTO `committees` VALUES (466,'10','uploads/committees/16166485211553590129blank-face.jpeg','','Prabhakar Metta','Co-Chair','');
INSERT INTO `committees` VALUES (467,'44','uploads/committees/16409140645562888631332037331233777480blank-face.jpeg','','Geetha Dammana','Advisor','');
INSERT INTO `committees` VALUES (468,'4','uploads/committees/21376603371553590129blank-face.jpeg','','Balaram Pochareddy','Member','');
INSERT INTO `committees` VALUES (469,'4','uploads/committees/19893872661553590129blank-face.jpeg','','Mohan Gokarakonda','Member','');
INSERT INTO `committees` VALUES (470,'4','uploads/committees/238802921553590129blank-face.jpeg','','Brahmendra Reddy Lakku','Member','');
INSERT INTO `committees` VALUES (471,'4','uploads/committees/414407841553590129blank-face.jpeg','','G B Reddy','Member','');
INSERT INTO `committees` VALUES (472,'21','uploads/committees/106547288VenkataramiReddySanivarapu.jpg','','Venkatrami Reddy','Advisor','');
INSERT INTO `committees` VALUES (473,'21','uploads/committees/1789403315SrikanthReddyPenumada.jpg','','Srikanth Reddy Penumada','Advisor','');
INSERT INTO `committees` VALUES (474,'8','uploads/committees/380794689blankface.jpeg','','Baburao Samala','advisor','');
INSERT INTO `committees` VALUES (475,'8','uploads/committees/1003524669blankface.jpeg','','Phalgun Veereddygari','Advisor','');
INSERT INTO `committees` VALUES (476,'68','uploads/committees/238070369SriniReddyVangimalla.jpg','','Srini Vangimalla','Advisor','');
INSERT INTO `committees` VALUES (477,'0','uploads/committees/1609575531','','Alla Srinivasa Reddy','Advisor','');
INSERT INTO `committees` VALUES (478,'72','uploads/committees/1768922205Phani_Bhushan_Tadepalli.JPG','','Phanibhushn Tadepalli','Advisor','');
INSERT INTO `committees` VALUES (479,'72','uploads/committees/857216659blankface.jpeg','','Ramana Juvvadi','Advisor','');
INSERT INTO `committees` VALUES (480,'72','uploads/committees/476661480SrinivasaReddyAlla.jpg','','Alla Srinivasa Reddy','Advisor','');
INSERT INTO `committees` VALUES (481,'48','uploads/committees/810984296Narayana_Reddy_Gandra.jpg','','Narayana Reddy Gandra','Advisor','');
INSERT INTO `committees` VALUES (482,'0','uploads/committees/880403137','','Chinnababu Reddy','Advisor','');
INSERT INTO `committees` VALUES (483,'48','uploads/committees/1861452808Chinnababu_Reddy.jpg','','Chinnababu Reddy','Advisor','');
INSERT INTO `committees` VALUES (484,'10','uploads/committees/1041438193ShivaMeka.jpg','','Shiva Meka','Advisor','');
INSERT INTO `committees` VALUES (485,'75','uploads/committees/1321362634Rami_Alla_Reddy.jpg','','Rami Reddy Alla','Advisor','');
INSERT INTO `committees` VALUES (486,'61','uploads/committees/1162466614RajeshwarReddyGangasani.jpg','','Rajeshwar Reddy Gangasani','Advisor','');
INSERT INTO `committees` VALUES (487,'40','uploads/committees/1139759505RajeshwarReddyGangasani.jpg','','Rajeshwar Reddy Gangasani','Advisor','');
INSERT INTO `committees` VALUES (488,'4','uploads/committees/863142691VishnuKotimreddy.jpg','','Vishnu Kotimreddy','Advisor','');
INSERT INTO `committees` VALUES (489,'4','uploads/committees/577430806Kiran_Gunnam.jpg','','Kiran Gunnam','Advisor','');
INSERT INTO `committees` VALUES (490,'26','uploads/committees/1706705561blankface.jpeg','','Chandra Pottipati','Member','');
INSERT INTO `committees` VALUES (491,'26','uploads/committees/475365317blankface.jpeg','','Venkatesh Tirumani','Member','');
INSERT INTO `committees` VALUES (492,'26','uploads/committees/1896234098blankface.jpeg','','Shyam Pati','Member','');
INSERT INTO `committees` VALUES (493,'26','uploads/committees/592655125blankface.jpeg','','Srini Veerabhadra','Member','');
INSERT INTO `committees` VALUES (494,'26','uploads/committees/946068354blankface.jpeg','','Bala Akula','Member','');
INSERT INTO `committees` VALUES (495,'26','uploads/committees/177442077blankface.jpeg','','Srilatha Kandi','Member','');
INSERT INTO `committees` VALUES (496,'26','uploads/committees/1841917983SreenivasuluReddySomavarapu.jpg','','Sreenivasulu Reddy Somavarapu','Advisor','');
INSERT INTO `committees` VALUES (497,'56','uploads/committees/386706862blankface.jpeg','','Ashwin Ayancha','Member','');
INSERT INTO `committees` VALUES (498,'56','uploads/committees/588290913blankface.jpeg','','Koti Reddy Battula','Member','');
INSERT INTO `committees` VALUES (499,'56','uploads/committees/838156190blankface.jpeg','','Ashwin Ayancha','Member','');
INSERT INTO `committees` VALUES (500,'56','uploads/committees/682805822blankface.jpeg','','Koti Reddy Battula','Member','');
INSERT INTO `committees` VALUES (501,'56','uploads/committees/501816238blankface.jpeg','','Narasimha Tanguturi','Member','');
INSERT INTO `committees` VALUES (502,'56','uploads/committees/1139520727blankface.jpeg','','Venkat Peddireddy','Member','');
INSERT INTO `committees` VALUES (503,'0','uploads/committees/269508846','','Swaroop Kunduru','Member','');
INSERT INTO `committees` VALUES (504,'56','uploads/committees/295469861blankface.jpeg','','Sriram Goteti','Member','');
INSERT INTO `committees` VALUES (505,'56','uploads/committees/1179628891blankface.jpeg','','Srinivas Kotluru','Advisor','');
INSERT INTO `committees` VALUES (506,'0','uploads/committees/1727968007','','Sreenivasulu Reddy Somavarapu','Advisor','');
INSERT INTO `committees` VALUES (507,'56','uploads/committees/2071313628SreenivasuluReddySomavarapu.jpg','','Sreenivasulu Reddy Somavarapu','Advisor','');
INSERT INTO `committees` VALUES (508,'58','uploads/committees/1381375040Raghava_Reddy_Ghosala.jpg','','Raghava Reddy','Advisor','');
INSERT INTO `committees` VALUES (509,'58','uploads/committees/1350197390blankface.jpeg','','Rami Reddy','Advisor','');
INSERT INTO `committees` VALUES (510,'59','uploads/committees/1487937957VishnuKotimreddy.jpg','Vishnu Kotimreddy','Vishnu Kotimreddy','Advisor','');
INSERT INTO `committees` VALUES (511,'59','uploads/committees/758751204pradeepsamla.jpg','Pradeep Samala','Pradeep Samala','Advisor','');
INSERT INTO `committees` VALUES (512,'59','uploads/committees/1327714265blankface.jpeg','Phalgun Veereddygari','Phalgun Veereddygari','Advisor','');
INSERT INTO `committees` VALUES (513,'24','uploads/committees/1468536658SreenivasuluReddySomavarapu.jpg','Sreenivasulu Reddy Somavarapu','Sreenivasulu Reddy Somavarapu','Advisor','');
INSERT INTO `committees` VALUES (514,'24','uploads/committees/440926796Ravi_Kandimalla.jpg','','Ravi Kandimalla','Advisor','');
INSERT INTO `committees` VALUES (515,'52','uploads/committees/409271203Prasuna_Reddy.jpg','Prasuna Dornadula','Prasuna Dornadula','Advisor','');
INSERT INTO `committees` VALUES (516,'0','uploads/committees/948230462','','Ravi Kandimalla','Advisor','');
INSERT INTO `committees` VALUES (517,'52','uploads/committees/1855082186Ravi_Kandimalla.jpg','','Ravi Kandimalla','Advisor','');
INSERT INTO `committees` VALUES (518,'14','uploads/committees/665608848blankface.jpeg','Sudhakar Reddy Kona','Sudhakar Reddy Kona','Member','');
INSERT INTO `committees` VALUES (519,'14','uploads/committees/2079991913blankface.jpeg','Sudhir Muthirvelu','Sudhir Muthirvelu','Member','');
INSERT INTO `committees` VALUES (520,'0','uploads/committees/1841313029','Sunil Devireddy','Sunil Devireddy','Member','');
INSERT INTO `committees` VALUES (521,'14','uploads/committees/450573638blankface.jpeg','Sunil Devireddy	                        ','Sunil Devireddy	                        ','Member','');
INSERT INTO `committees` VALUES (522,'14','uploads/committees/332280957VenkataramanaReddyMurari.jpg','Venkatramireddy murari','Venkatramireddy murari','Advisor','');
INSERT INTO `committees` VALUES (523,'14','uploads/committees/839473108SrikanthReddyPenumada.jpg','Srikanth Reddy Penumada','Srikanth Reddy Penumada','Advisor','');
INSERT INTO `committees` VALUES (524,'70','uploads/committees/1312683590Rami_Alla_Reddy.jpg','Rami Reddy Alla','Rami Reddy Alla','Advisor','');
INSERT INTO `committees` VALUES (525,'57','uploads/committees/1717176528blankface.jpeg','YV Rao','YV Rao','Advisor','');
INSERT INTO `committees` VALUES (526,'49','uploads/committees/2066750084VenkataramiReddySanivarapu.jpg','Venkatrami Reddy','Venkatrami Reddy','Advisor','');
INSERT INTO `committees` VALUES (527,'50','uploads/committees/1423029561blankface.jpeg','','Venkat Danda','Member','');
INSERT INTO `committees` VALUES (528,'50','uploads/committees/347769805SrikanthReddyPenumada.jpg','','Srikanth Reddy Penumada','Advisor','');
INSERT INTO `committees` VALUES (529,'0','uploads/committees/430375990','','Ramireddy buchipudi','Advisor','');
INSERT INTO `committees` VALUES (530,'50','uploads/committees/1797448421RamiReddyBuchipudi.jpg','Ramireddy buchipudi','Ramireddy buchipudi','Advisor','');
INSERT INTO `committees` VALUES (531,'11','uploads/committees/224956612blankface.jpeg','Lohit	','Lohit	','Member','');
INSERT INTO `committees` VALUES (532,'11','uploads/committees/1177159263blankface.jpeg','','Srinivas Kongara','Member','');
INSERT INTO `committees` VALUES (533,'11','uploads/committees/1491743797blankface.jpeg','Sujan Pepolla','Sujan Pepolla','Member','');
INSERT INTO `committees` VALUES (534,'11','uploads/committees/859574380blankface.jpeg','Lakshman Akasapu','Lakshman Akasapu','Member','');
INSERT INTO `committees` VALUES (535,'11','uploads/committees/1205156608blankface.jpeg','Rajasekhar B','Rajasekhar B','Member','');
INSERT INTO `committees` VALUES (536,'11','uploads/committees/628067818blankface.jpeg','','Srinivas Kotluru','Advisor','');
INSERT INTO `committees` VALUES (537,'11','uploads/committees/1940555543AnnaReddy.jpg','Anna Reddy','Anna Reddy','Advisor','');
INSERT INTO `committees` VALUES (538,'69','uploads/committees/197575791VenkataramanaReddyMurari.jpg','','Venkatrami Reddy','Advisor','');
INSERT INTO `committees` VALUES (539,'69','uploads/committees/1658694057blankface.jpeg','','Maruthi Reddy','Advisor','');
INSERT INTO `committees` VALUES (540,'6','uploads/committees/710841271Mohan_Kaladi.jpg','Mohan Kaladi','Mohan Kaladi','Advisor','');
INSERT INTO `committees` VALUES (541,'6','uploads/committees/932133298VishnuKotimreddy.jpg','Vishnu Kotimreddy','Vishnu Kotimreddy','Advisor','');
INSERT INTO `committees` VALUES (542,'74','uploads/committees/1233979866blankface.jpeg','Jaya Patel  ','Jaya Patel  ','Member','');
INSERT INTO `committees` VALUES (543,'74','uploads/committees/599468192blankface.jpeg','Kalyani Avula','Kalyani Avula','Member','');
INSERT INTO `committees` VALUES (544,'0','uploads/committees/643922992','Sailaja Kotha','Sailaja Kotha','Advisor','');
INSERT INTO `committees` VALUES (545,'74','uploads/committees/1780130502blankface.jpeg','Sailaja Kotha','Sailaja Kotha','Member','');
INSERT INTO `committees` VALUES (546,'74','uploads/committees/1846338021blankface.jpeg','Geeta Damanna','Geeta Damanna','Advisor','');
INSERT INTO `committees` VALUES (547,'0','uploads/committees/1536991786','Sushmitha Kosuri	','Sushmitha Kosuri	','Member','');
INSERT INTO `committees` VALUES (548,'63','uploads/committees/1247348625blankface.jpeg','Sushmitha Kosuri	','Sushmitha Kosuri	','Member','');
INSERT INTO `committees` VALUES (549,'63','uploads/committees/618880829blankface.jpeg','Ramya Ravi	','Ramya Ravi	','Member','');
INSERT INTO `committees` VALUES (550,'63','uploads/committees/986632724blankface.jpeg','Kishore Kovvali','Kishore Kovvali','Member','');
INSERT INTO `committees` VALUES (551,'63','uploads/committees/1901761996blankface.jpeg','Ravi Mukkavilli','Ravi Mukkavilli','Member','');
INSERT INTO `committees` VALUES (552,'63','uploads/committees/225318651blankface.jpeg','Vishnu Chowdavarapu  ','Vishnu Chowdavarapu  ','Member','');
INSERT INTO `committees` VALUES (553,'63','uploads/committees/4395523655562888631332037331233777480blank-face.jpeg','Lahari Neelapareddy','Lahari Neelapareddy','Member','');
INSERT INTO `committees` VALUES (554,'63','uploads/committees/1493969132Prasuna_Reddy.jpg','','Prasuna Dornadula','Advisor','');
INSERT INTO `committees` VALUES (555,'63','uploads/committees/18899989465562888631332037331233777480blank-face.jpeg','','Geetha Damanna','Advisor','');
/*!40000 ALTER TABLE `committees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `committees2`
--

DROP TABLE IF EXISTS `committees2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `committees2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `com_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `img1` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `committees2`
--

LOCK TABLES `committees2` WRITE;
/*!40000 ALTER TABLE `committees2` DISABLE KEYS */;
INSERT INTO `committees2` VALUES (34,'75','Media','<p>\r\n	<img alt=\"\" src=\"http://nata2016.org/admin/uploads/committees/964608062media-logo3.jpg\" style=\"width: 250px; height: 200px; padding:5px;\" /><img alt=\"\" src=\"http://nata2016.org/admin/uploads/committees/854617747media-logo1.jpg\" style=\"width: 250px; height: 200px; padding:5px;\" />&nbsp;&nbsp;<img alt=\"\" src=\"http://nata2016.org/admin/uploads/committees/1270256754media-logo4.jpg\" style=\"width: 250px; height: 200px; padding:5px;\" /><img alt=\"\" src=\"http://nata2016.org/admin/uploads/committees/1580461776media-logo2.jpg\" style=\"width: 250px; height: 200px; padding:5px;\" /><img alt=\"\" src=\"http://nata2016.org/admin/uploads/committees/836564904media-logo5.jpg\" style=\"width: 250px; height: 200px; padding:5px;\" /><img alt=\"\" src=\"http://nata2016.org/admin/uploads/committees/879186215media-logo6.jpg\" style=\"width: 250px; height: 200px; padding:5px;\" /><img alt=\"\" src=\"http://nata2016.org/admin/uploads/committees/483346479media-logo7.jpg\" style=\"width: 250px; height: 200px; padding:5px;\" /><img alt=\"\" src=\"http://nata2016.org/admin/uploads/committees/1982827275media-logo8.jpg\" style=\"width: 250px; height: 200px; padding:5px;\" /></p>\r\n<p>\r\n	&nbsp;</p>\r\n','uploads/committees/6963');
INSERT INTO `committees2` VALUES (35,'65','','<h4 style=\"color: rgb(88, 0, 0); text-align: center;\">\r\n	Invitation for bids from Food Vendors for Banquet Dinner</h4>\r\n<p style=\"text-align: center;\">\r\n	<a href=\"http://www.nata2016.org/assets/pdf/NATAConventionFoodContract_Banquet.pdf\" style=\"text-decoration:underline; color:#444;\" target=\"_blank\">Invitation for bids from Food Vendors for Banquet Dinner</a></p>\r\n','uploads/committees/27164');
INSERT INTO `committees2` VALUES (36,'62','','<div>\r\n	<strong style=\"font-size: 16px; color: red;\"><span style=\"text-decoration: underline;\"><a href=\"http://www.nataus.org/event/index/booktickets/21\" target=\"_blank\">NATA IDOL Entry Form</a></span></strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<strong style=\"font-size: 16px; color: rgb(165, 42, 42);\">National Team :&nbsp;</strong></div>\r\n','uploads/committees/26381');
INSERT INTO `committees2` VALUES (37,'21','','<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<h4 style=\"color:#C00\">\r\n					Invitation for bids from Food Vendors</h4>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<a href=\"http://www.nata2016.org/assets/pdf/NATAConventionFoodContract.pdf\" style=\"text-decoration:underline; color:#444;\" target=\"_blank\">Invitation for bids from Food Vendors</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<h4 style=\"color: #C00\">\r\n					Invitation for bids from Food Vendors for Banquet Dinner</h4>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<a href=\"http://www.nata2016.org/assets/pdf/NATAConventionFoodContract_Banquet.pdf\" style=\"color: rgb(68, 68, 68);\" target=\"_blank\">Invitation for bids from Food Vendors for Banquet Dinner</a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n','');
INSERT INTO `committees2` VALUES (38,'0','Food','<h4 style=\"text-align:center; color:#560000\">\r\n	Invitation for bids from Food Vendors</h4>\r\n<p style=\"text-align:center\">\r\n	<a href=\"http://www.nata2016.org/assets/pdf/NATAConventionFoodContract.pdf\" style=\"text-decoration:underline; color:#444;\" target=\"_blank\">Invitation for bids from Food Vendors</a></p>\r\n','');
/*!40000 ALTER TABLE `committees2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `convention`
--

DROP TABLE IF EXISTS `convention`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `convention` (
  `convention_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `amount` varchar(200) NOT NULL,
  PRIMARY KEY (`convention_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `convention`
--

LOCK TABLES `convention` WRITE;
/*!40000 ALTER TABLE `convention` DISABLE KEYS */;
/*!40000 ALTER TABLE `convention` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donar`
--

DROP TABLE IF EXISTS `donar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donar_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `donation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donar`
--

LOCK TABLES `donar` WRITE;
/*!40000 ALTER TABLE `donar` DISABLE KEYS */;
/*!40000 ALTER TABLE `donar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donar_category`
--

DROP TABLE IF EXISTS `donar_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donar_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donar_category`
--

LOCK TABLES `donar_category` WRITE;
/*!40000 ALTER TABLE `donar_category` DISABLE KEYS */;
INSERT INTO `donar_category` VALUES (1,'Coming Soon..');
/*!40000 ALTER TABLE `donar_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flyers`
--

DROP TABLE IF EXISTS `flyers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flyers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flyers`
--

LOCK TABLES `flyers` WRITE;
/*!40000 ALTER TABLE `flyers` DISABLE KEYS */;
INSERT INTO `flyers` VALUES (8,'uploads/sliders/1503372308nataflyer.jpg','nata convention Dallas 2016','','2016-01-12');
INSERT INTO `flyers` VALUES (11,'uploads/sliders/5157674601503826532NATA IDOL Flyer 1.jpg','http://nata2016.org/committee-details1.php?id=62','1','2016-02-02');
INSERT INTO `flyers` VALUES (12,'uploads/sliders/1360755937cultural.jpg','','','2016-02-04');
INSERT INTO `flyers` VALUES (13,'uploads/sliders/15142217301276126384Natakathalapoti2016.jpg','http://nata2016.org/assets/pdf/NataKathalapoti2016.pdf','2','2016-02-08');
INSERT INTO `flyers` VALUES (14,'uploads/sliders/1767557805HERIONES FLIER FINAL.jpg','https://www.facebook.com/968040676569583/photos/a.968176576555993.1073741828.968040676569583/1153198418053807/?type=3&theater','','2016-02-11');
/*!40000 ALTER TABLE `flyers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funds`
--

DROP TABLE IF EXISTS `funds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funds`
--

LOCK TABLES `funds` WRITE;
/*!40000 ALTER TABLE `funds` DISABLE KEYS */;
INSERT INTO `funds` VALUES (1,'Fund Raising','<p>\r\n	Coming Soon...</p>\r\n');
/*!40000 ALTER TABLE `funds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (3,'uploads/gallery/24795dining2.jpg','','Banquet Dianing');
INSERT INTO `gallery` VALUES (4,'uploads/gallery/16937g1.jpg','',' Convention Day - 2');
INSERT INTO `gallery` VALUES (5,'uploads/gallery/21952cc1.jpg','','Banquet - Social Hour');
INSERT INTO `gallery` VALUES (6,'uploads/gallery/25050cc2.jpg','','Banquet Dining');
INSERT INTO `gallery` VALUES (7,'uploads/gallery/17931cc3.jpg','','Convention Day 3');
INSERT INTO `gallery` VALUES (8,'uploads/gallery/23784cc4.jpg','','Convention Day 3 - Set 2');
INSERT INTO `gallery` VALUES (9,'uploads/gallery/28417cc5.jpg','','Convention Day 2 - Set 2');
INSERT INTO `gallery` VALUES (10,'uploads/gallery/16806cc6.jpg','',' Photoshoot with stars');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel_slider`
--

DROP TABLE IF EXISTS `hotel_slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotel_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel_slider`
--

LOCK TABLES `hotel_slider` WRITE;
/*!40000 ALTER TABLE `hotel_slider` DISABLE KEYS */;
INSERT INTO `hotel_slider` VALUES (11,'uploads/sliders/886712144pic9.jpg','NATA 3rd Convention','1');
INSERT INTO `hotel_slider` VALUES (12,'uploads/sliders/1373034417pic10.jpg','NATA 3rd Convention','2');
INSERT INTO `hotel_slider` VALUES (13,'uploads/sliders/942947550pic11.jpg','NATA 3rd Convention','3');
INSERT INTO `hotel_slider` VALUES (14,'uploads/sliders/1951424700pic12.jpg','NATA 3rd Convention','4');
INSERT INTO `hotel_slider` VALUES (15,'uploads/sliders/578811220pic13.jpg','NATA 3rd Convention','5');
INSERT INTO `hotel_slider` VALUES (16,'uploads/sliders/567714278pic14.jpg','NATA 3rd Convention','6');
/*!40000 ALTER TABLE `hotel_slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotels`
--

LOCK TABLES `hotels` WRITE;
/*!40000 ALTER TABLE `hotels` DISABLE KEYS */;
INSERT INTO `hotels` VALUES (1,'An Iconic Downtown Dallas Hotel','<p>\r\n	Rising above the Dallas skyline, the shimmering 50 story Reunion Tower at Hyatt Regency Dallas is a beacon of luxury in an iconic city. At the very heart of downtown, the hotel is a gateway to the best of Dallas, where new experiences blend seamlessly with spacious, modern lodging that effortlessly attends to your every need.</p>\r\n<ul>\r\n	<li>\r\n		<b>Spread out in&nbsp;</b><b>spacious guestrooms</b>,&nbsp;and take in expansive views of the atrium or Trinity River Greenbelt below</li>\r\n	<li>\r\n		<b>Ascend the 561 foot Reunion Tower</b>, a famed landmark featuring the &ldquo;GeO-Deck&rdquo; observation level and Cloud Nine Caf&eacute;</li>\r\n	<li>\r\n		<b>Stay in the heart of downtown Dallas</b>, adjacent to the historic district,&nbsp;West End, entertainment district and arenas</li>\r\n	<li>\r\n		<b>Relax, refresh and recharge</b>,&nbsp;with a dip in the hotel&rsquo;s refreshing&nbsp;outdoor pool &nbsp;or a workout in our 24-hour&nbsp; StayFit&trade; gym</li>\r\n	<li>\r\n		<b>Savor a variety of culinary delights</b>,<b>&nbsp;</b>including Five Sixty by Wolfgang Puck , our ultra-modern revolving restaurant above the city</li>\r\n</ul>\r\n<p><b>Reservation link for Hyatt Regency Dallas:</b> <a href=\"https://resweb.passkey.com/go/NATA2016\" target=\"_blank\">https://resweb.passkey.com/go/NATA2016</a></p>\r\n');
/*!40000 ALTER TABLE `hotels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innergallery`
--

DROP TABLE IF EXISTS `innergallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innergallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=183 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innergallery`
--

LOCK TABLES `innergallery` WRITE;
/*!40000 ALTER TABLE `innergallery` DISABLE KEYS */;
INSERT INTO `innergallery` VALUES (4,'2','uploads/inner-gallery/260904.jpg');
INSERT INTO `innergallery` VALUES (5,'2','uploads/inner-gallery/27955.jpg');
INSERT INTO `innergallery` VALUES (7,'1','uploads/inner-gallery/5363Anasuya_anchor_172_195.jpg');
INSERT INTO `innergallery` VALUES (8,'1','uploads/inner-gallery/9648Anasuya_anchor_172_195.jpg');
INSERT INTO `innergallery` VALUES (10,'1','uploads/inner-gallery/9674Anasuya_anchor_172_195.jpg');
INSERT INTO `innergallery` VALUES (37,'3','uploads/inner-gallery/29000cc1.jpg');
INSERT INTO `innergallery` VALUES (38,'3','uploads/inner-gallery/23521cc2.jpg');
INSERT INTO `innergallery` VALUES (39,'3','uploads/inner-gallery/17482cc3.jpg');
INSERT INTO `innergallery` VALUES (40,'3','uploads/inner-gallery/31998cc4.jpg');
INSERT INTO `innergallery` VALUES (41,'3','uploads/inner-gallery/19551cc5.jpg');
INSERT INTO `innergallery` VALUES (42,'3','uploads/inner-gallery/23814cc6.jpg');
INSERT INTO `innergallery` VALUES (43,'3','uploads/inner-gallery/8135cc7.jpg');
INSERT INTO `innergallery` VALUES (44,'3','uploads/inner-gallery/30544cc8.jpg');
INSERT INTO `innergallery` VALUES (45,'3','uploads/inner-gallery/23881cc9.jpg');
INSERT INTO `innergallery` VALUES (46,'3','uploads/inner-gallery/23028cc10.jpg');
INSERT INTO `innergallery` VALUES (47,'3','uploads/inner-gallery/28516cc11.jpg');
INSERT INTO `innergallery` VALUES (48,'3','uploads/inner-gallery/14311cc12.png');
INSERT INTO `innergallery` VALUES (49,'3','uploads/inner-gallery/9806cc13.jpg');
INSERT INTO `innergallery` VALUES (50,'3','uploads/inner-gallery/17263cc14.jpg');
INSERT INTO `innergallery` VALUES (51,'3','uploads/inner-gallery/9900cc15.jpg');
INSERT INTO `innergallery` VALUES (52,'3','uploads/inner-gallery/14460cc16.jpg');
INSERT INTO `innergallery` VALUES (53,'3','uploads/inner-gallery/24468cc17.jpg');
INSERT INTO `innergallery` VALUES (54,'6','uploads/inner-gallery/3957cc1.jpg');
INSERT INTO `innergallery` VALUES (55,'6','uploads/inner-gallery/27402cc2.jpg');
INSERT INTO `innergallery` VALUES (56,'6','uploads/inner-gallery/20347cc3.jpg');
INSERT INTO `innergallery` VALUES (57,'6','uploads/inner-gallery/1285cc4.jpg');
INSERT INTO `innergallery` VALUES (58,'6','uploads/inner-gallery/22874cc5.jpg');
INSERT INTO `innergallery` VALUES (59,'6','uploads/inner-gallery/21789cc6.jpg');
INSERT INTO `innergallery` VALUES (60,'6','uploads/inner-gallery/5581cc7.jpg');
INSERT INTO `innergallery` VALUES (61,'6','uploads/inner-gallery/28290cc8.jpg');
INSERT INTO `innergallery` VALUES (62,'6','uploads/inner-gallery/10123cc9.jpg');
INSERT INTO `innergallery` VALUES (63,'6','uploads/inner-gallery/24680cc10.jpg');
INSERT INTO `innergallery` VALUES (64,'6','uploads/inner-gallery/27777cc11.jpg');
INSERT INTO `innergallery` VALUES (65,'6','uploads/inner-gallery/31293cc12.png');
INSERT INTO `innergallery` VALUES (66,'6','uploads/inner-gallery/12582cc13.jpg');
INSERT INTO `innergallery` VALUES (67,'6','uploads/inner-gallery/12647cc14.jpg');
INSERT INTO `innergallery` VALUES (68,'6','uploads/inner-gallery/6932cc15.jpg');
INSERT INTO `innergallery` VALUES (69,'5','uploads/inner-gallery/8311cc1.jpg');
INSERT INTO `innergallery` VALUES (70,'5','uploads/inner-gallery/17636cc2.jpg');
INSERT INTO `innergallery` VALUES (71,'5','uploads/inner-gallery/32077cc3.jpg');
INSERT INTO `innergallery` VALUES (72,'5','uploads/inner-gallery/18830cc4.jpg');
INSERT INTO `innergallery` VALUES (73,'5','uploads/inner-gallery/17839cc5.jpg');
INSERT INTO `innergallery` VALUES (74,'5','uploads/inner-gallery/2cc6.jpg');
INSERT INTO `innergallery` VALUES (75,'5','uploads/inner-gallery/19731cc7.jpg');
INSERT INTO `innergallery` VALUES (76,'5','uploads/inner-gallery/19280cc8.jpg');
INSERT INTO `innergallery` VALUES (77,'5','uploads/inner-gallery/26916cc9.jpg');
INSERT INTO `innergallery` VALUES (78,'5','uploads/inner-gallery/27789cc10.jpg');
INSERT INTO `innergallery` VALUES (79,'5','uploads/inner-gallery/24130cc11.jpg');
INSERT INTO `innergallery` VALUES (80,'5','uploads/inner-gallery/15184cc12.png');
INSERT INTO `innergallery` VALUES (81,'5','uploads/inner-gallery/11708cc13.jpg');
INSERT INTO `innergallery` VALUES (82,'5','uploads/inner-gallery/22955cc14.jpg');
INSERT INTO `innergallery` VALUES (83,'5','uploads/inner-gallery/30728cc15.jpg');
INSERT INTO `innergallery` VALUES (84,'5','uploads/inner-gallery/28243cc16.jpg');
INSERT INTO `innergallery` VALUES (85,'5','uploads/inner-gallery/8521cc17.jpg');
INSERT INTO `innergallery` VALUES (86,'5','uploads/inner-gallery/20936cc18.jpg');
INSERT INTO `innergallery` VALUES (87,'5','uploads/inner-gallery/28997cc19.jpg');
INSERT INTO `innergallery` VALUES (88,'5','uploads/inner-gallery/20809cc20.jpg');
INSERT INTO `innergallery` VALUES (89,'9','uploads/inner-gallery/6734cc1.jpg');
INSERT INTO `innergallery` VALUES (90,'9','uploads/inner-gallery/10095cc2.jpg');
INSERT INTO `innergallery` VALUES (91,'9','uploads/inner-gallery/2638cc3.jpg');
INSERT INTO `innergallery` VALUES (92,'9','uploads/inner-gallery/22383cc4.jpg');
INSERT INTO `innergallery` VALUES (93,'9','uploads/inner-gallery/15484cc5.jpg');
INSERT INTO `innergallery` VALUES (94,'9','uploads/inner-gallery/14597cc6.jpg');
INSERT INTO `innergallery` VALUES (95,'9','uploads/inner-gallery/29584cc7.jpg');
INSERT INTO `innergallery` VALUES (96,'9','uploads/inner-gallery/17545cc8.jpg');
INSERT INTO `innergallery` VALUES (97,'9','uploads/inner-gallery/32090cc9.jpg');
INSERT INTO `innergallery` VALUES (98,'9','uploads/inner-gallery/7310cc10.jpg');
INSERT INTO `innergallery` VALUES (99,'9','uploads/inner-gallery/7343cc11.jpg');
INSERT INTO `innergallery` VALUES (100,'9','uploads/inner-gallery/29281cc13.jpg');
INSERT INTO `innergallery` VALUES (101,'4','uploads/inner-gallery/29062cc1.jpg');
INSERT INTO `innergallery` VALUES (102,'4','uploads/inner-gallery/23111cc2.jpg');
INSERT INTO `innergallery` VALUES (103,'4','uploads/inner-gallery/17012cc3.jpg');
INSERT INTO `innergallery` VALUES (104,'4','uploads/inner-gallery/21405cc4.jpg');
INSERT INTO `innergallery` VALUES (105,'4','uploads/inner-gallery/14524cc5.jpg');
INSERT INTO `innergallery` VALUES (106,'4','uploads/inner-gallery/15265cc6.jpg');
INSERT INTO `innergallery` VALUES (107,'4','uploads/inner-gallery/23836cc7.jpg');
INSERT INTO `innergallery` VALUES (108,'4','uploads/inner-gallery/23845cc8.jpg');
INSERT INTO `innergallery` VALUES (109,'4','uploads/inner-gallery/7930cc9.jpg');
INSERT INTO `innergallery` VALUES (110,'4','uploads/inner-gallery/3243cc10.jpg');
INSERT INTO `innergallery` VALUES (111,'4','uploads/inner-gallery/8646cc11.jpg');
INSERT INTO `innergallery` VALUES (112,'4','uploads/inner-gallery/25991cc12.png');
INSERT INTO `innergallery` VALUES (113,'4','uploads/inner-gallery/3252cc13.jpg');
INSERT INTO `innergallery` VALUES (114,'4','uploads/inner-gallery/28893cc14.jpg');
INSERT INTO `innergallery` VALUES (115,'4','uploads/inner-gallery/5202cc15.jpg');
INSERT INTO `innergallery` VALUES (116,'4','uploads/inner-gallery/21283cc16.jpg');
INSERT INTO `innergallery` VALUES (117,'10','uploads/inner-gallery/19580cc1.jpg');
INSERT INTO `innergallery` VALUES (118,'10','uploads/inner-gallery/2309cc2.jpg');
INSERT INTO `innergallery` VALUES (119,'10','uploads/inner-gallery/31627cc3.jpg');
INSERT INTO `innergallery` VALUES (120,'10','uploads/inner-gallery/8261cc4.jpg');
INSERT INTO `innergallery` VALUES (121,'10','uploads/inner-gallery/29594cc5.jpg');
INSERT INTO `innergallery` VALUES (122,'10','uploads/inner-gallery/3418cc6.jpg');
INSERT INTO `innergallery` VALUES (123,'10','uploads/inner-gallery/9320cc7.jpg');
INSERT INTO `innergallery` VALUES (124,'10','uploads/inner-gallery/24705cc8.jpg');
INSERT INTO `innergallery` VALUES (125,'10','uploads/inner-gallery/21707cc9.jpg');
INSERT INTO `innergallery` VALUES (126,'10','uploads/inner-gallery/9384cc10.jpg');
INSERT INTO `innergallery` VALUES (127,'10','uploads/inner-gallery/31681cc11.jpg');
INSERT INTO `innergallery` VALUES (128,'10','uploads/inner-gallery/12134cc11.jpg');
INSERT INTO `innergallery` VALUES (129,'10','uploads/inner-gallery/29351cc12.png');
INSERT INTO `innergallery` VALUES (130,'10','uploads/inner-gallery/19339cc13.jpg');
INSERT INTO `innergallery` VALUES (131,'10','uploads/inner-gallery/5414cc14.jpg');
INSERT INTO `innergallery` VALUES (132,'10','uploads/inner-gallery/17767cc15.jpg');
INSERT INTO `innergallery` VALUES (133,'10','uploads/inner-gallery/7956cc16.jpg');
INSERT INTO `innergallery` VALUES (134,'10','uploads/inner-gallery/13416cc17.jpg');
INSERT INTO `innergallery` VALUES (135,'10','uploads/inner-gallery/12417cc18.jpg');
INSERT INTO `innergallery` VALUES (136,'10','uploads/inner-gallery/16416cc19.jpg');
INSERT INTO `innergallery` VALUES (137,'10','uploads/inner-gallery/9510cc20.jpg');
INSERT INTO `innergallery` VALUES (138,'10','uploads/inner-gallery/5479cc21.JPG');
INSERT INTO `innergallery` VALUES (139,'7','uploads/inner-gallery/957cc1.jpg');
INSERT INTO `innergallery` VALUES (140,'7','uploads/inner-gallery/23986cc2.jpg');
INSERT INTO `innergallery` VALUES (141,'7','uploads/inner-gallery/20739cc3.jpg');
INSERT INTO `innergallery` VALUES (142,'7','uploads/inner-gallery/6272cc4.jpg');
INSERT INTO `innergallery` VALUES (143,'7','uploads/inner-gallery/7865cc5.jpg');
INSERT INTO `innergallery` VALUES (144,'7','uploads/inner-gallery/8958cc6.jpg');
INSERT INTO `innergallery` VALUES (145,'7','uploads/inner-gallery/31327cc7.jpg');
INSERT INTO `innergallery` VALUES (146,'7','uploads/inner-gallery/15532cc8.jpg');
INSERT INTO `innergallery` VALUES (147,'7','uploads/inner-gallery/28021cc9.jpg');
INSERT INTO `innergallery` VALUES (148,'7','uploads/inner-gallery/28938cc10.jpg');
INSERT INTO `innergallery` VALUES (149,'7','uploads/inner-gallery/23931cc11.jpg');
INSERT INTO `innergallery` VALUES (150,'7','uploads/inner-gallery/8210cc12.png');
INSERT INTO `innergallery` VALUES (151,'7','uploads/inner-gallery/30616cc13.jpg');
INSERT INTO `innergallery` VALUES (152,'7','uploads/inner-gallery/25428cc14.jpg');
INSERT INTO `innergallery` VALUES (153,'7','uploads/inner-gallery/4861cc15.jpg');
INSERT INTO `innergallery` VALUES (154,'7','uploads/inner-gallery/21475cc16.jpg');
INSERT INTO `innergallery` VALUES (155,'7','uploads/inner-gallery/4576cc17.jpg');
INSERT INTO `innergallery` VALUES (156,'7','uploads/inner-gallery/27633cc18.jpg');
INSERT INTO `innergallery` VALUES (157,'7','uploads/inner-gallery/23538cc19.jpg');
INSERT INTO `innergallery` VALUES (158,'7','uploads/inner-gallery/4675cc20.jpg');
INSERT INTO `innergallery` VALUES (159,'7','uploads/inner-gallery/15833cc21.JPG');
INSERT INTO `innergallery` VALUES (160,'7','uploads/inner-gallery/12052cc23.JPG');
INSERT INTO `innergallery` VALUES (161,'7','uploads/inner-gallery/12040cc24.JPG');
INSERT INTO `innergallery` VALUES (162,'7','uploads/inner-gallery/24768cc25.JPG');
INSERT INTO `innergallery` VALUES (163,'8','uploads/inner-gallery/9889cc1.jpg');
INSERT INTO `innergallery` VALUES (164,'8','uploads/inner-gallery/12486cc2.jpg');
INSERT INTO `innergallery` VALUES (165,'8','uploads/inner-gallery/18567cc3.jpg');
INSERT INTO `innergallery` VALUES (166,'8','uploads/inner-gallery/13236cc4.jpg');
INSERT INTO `innergallery` VALUES (167,'8','uploads/inner-gallery/5078cc5.jpg');
INSERT INTO `innergallery` VALUES (168,'8','uploads/inner-gallery/22103cc6.jpg');
INSERT INTO `innergallery` VALUES (169,'8','uploads/inner-gallery/3225cc7.jpg');
INSERT INTO `innergallery` VALUES (170,'8','uploads/inner-gallery/11102cc8.jpg');
INSERT INTO `innergallery` VALUES (171,'8','uploads/inner-gallery/9118cc9.jpg');
INSERT INTO `innergallery` VALUES (172,'8','uploads/inner-gallery/25081cc10.jpg');
INSERT INTO `innergallery` VALUES (173,'8','uploads/inner-gallery/17726cc11.jpg');
INSERT INTO `innergallery` VALUES (174,'8','uploads/inner-gallery/3999cc12.png');
INSERT INTO `innergallery` VALUES (175,'8','uploads/inner-gallery/18668cc13.jpg');
INSERT INTO `innergallery` VALUES (176,'8','uploads/inner-gallery/9397cc14.jpg');
INSERT INTO `innergallery` VALUES (177,'8','uploads/inner-gallery/32383cc15.jpg');
INSERT INTO `innergallery` VALUES (178,'8','uploads/inner-gallery/30538cc16.jpg');
INSERT INTO `innergallery` VALUES (179,'8','uploads/inner-gallery/3037cc17.jpg');
INSERT INTO `innergallery` VALUES (180,'8','uploads/inner-gallery/19263cc18.jpg');
INSERT INTO `innergallery` VALUES (181,'8','uploads/inner-gallery/30020cc19.jpg');
INSERT INTO `innergallery` VALUES (182,'8','uploads/inner-gallery/22061cc20.jpg');
/*!40000 ALTER TABLE `innergallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invitees`
--

DROP TABLE IF EXISTS `invitees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invitees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invitee_id` varchar(225) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invitees`
--

LOCK TABLES `invitees` WRITE;
/*!40000 ALTER TABLE `invitees` DISABLE KEYS */;
INSERT INTO `invitees` VALUES (1,'10','uploads/invitees/1080803061i1.png','Texas Governor','Greg Abbott','Texas Governor');
INSERT INTO `invitees` VALUES (2,'3','uploads/invitees/1223280019i2.png','','Prudvi Balireddy','Comedian');
INSERT INTO `invitees` VALUES (3,'3','uploads/invitees/428119106i3.png','','Sampoornesh Babu','Comedian');
INSERT INTO `invitees` VALUES (4,'3','uploads/invitees/105794607i4.png','','Sapthagiri','Comedian');
INSERT INTO `invitees` VALUES (5,'3','uploads/invitees/305287434i5.png','','Praveen','Comedian');
INSERT INTO `invitees` VALUES (6,'3','uploads/invitees/1759339383i6.png','','Bhaskar','Mimicry');
INSERT INTO `invitees` VALUES (7,'3','uploads/invitees/266508068i7.png','','Racha Ravi','Comedian');
INSERT INTO `invitees` VALUES (8,'3','uploads/invitees/1826654597i8.png','','RP','Comedian');
INSERT INTO `invitees` VALUES (9,'3','uploads/invitees/210785575i9.png','','Rocking Rakesh','Comedian');
INSERT INTO `invitees` VALUES (10,'3','uploads/invitees/1774449229i10.png','','Bithiri Sathi','Comedian');
INSERT INTO `invitees` VALUES (11,'3','uploads/invitees/1217271860i11.png','','Bithiri Savitri','Comedian');
INSERT INTO `invitees` VALUES (12,'4','uploads/invitees/780890573936355704233777480blank-face.jpeg','','Syed Maqdoom','Anchor');
INSERT INTO `invitees` VALUES (13,'4','uploads/invitees/65190860i12.png','','Shyamala','Anchor');
INSERT INTO `invitees` VALUES (14,'5','uploads/invitees/1268388542i13.png','','Kodandarami Reddy','Director');
INSERT INTO `invitees` VALUES (28,'8','uploads/invitees/1679474318797576203i27.png','','Shruthi Haasan','Actress');
INSERT INTO `invitees` VALUES (29,'8','uploads/invitees/16691047422083531236i28.png','','Thamannah','Actress');
INSERT INTO `invitees` VALUES (30,'8','uploads/invitees/1871353516692114613i29.png','','Regina','Actress');
INSERT INTO `invitees` VALUES (31,'8','uploads/invitees/2600194311456626491i30.png','','Lavanya Tripathi','Actress');
INSERT INTO `invitees` VALUES (32,'8','uploads/invitees/16403753371063154164i31.png','','Pranitha subash','Actress');
INSERT INTO `invitees` VALUES (33,'9','uploads/invitees/898022838i32.png','','Raana','Actor');
INSERT INTO `invitees` VALUES (34,'9','uploads/invitees/1834169058i33.png','','Prabhas','Actor');
INSERT INTO `invitees` VALUES (35,'9','uploads/invitees/742325113i35.png','','Nagarjuna','Actor');
INSERT INTO `invitees` VALUES (36,'9','uploads/invitees/1567812585i34.png','','Akhil','Actor');
/*!40000 ALTER TABLE `invitees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invitees_category`
--

DROP TABLE IF EXISTS `invitees_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invitees_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invitees_category`
--

LOCK TABLES `invitees_category` WRITE;
/*!40000 ALTER TABLE `invitees_category` DISABLE KEYS */;
INSERT INTO `invitees_category` VALUES (3,'Comedians');
INSERT INTO `invitees_category` VALUES (4,'Anchors');
INSERT INTO `invitees_category` VALUES (5,'Movie Directors');
INSERT INTO `invitees_category` VALUES (8,'Actress');
INSERT INTO `invitees_category` VALUES (9,'Actors');
INSERT INTO `invitees_category` VALUES (10,'Politicians');
/*!40000 ALTER TABLE `invitees_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `literary`
--

DROP TABLE IF EXISTS `literary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `literary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `color` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `literary`
--

LOCK TABLES `literary` WRITE;
/*!40000 ALTER TABLE `literary` DISABLE KEYS */;
/*!40000 ALTER TABLE `literary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(225) NOT NULL,
  `pwd` varchar(225) NOT NULL,
  `originalpass` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'admin','249c3a6052f6be64a9f67eced901178f','nata2016','manjuri.infogen@gmail.com');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logo`
--

DROP TABLE IF EXISTS `logo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logo`
--

LOCK TABLES `logo` WRITE;
/*!40000 ALTER TABLE `logo` DISABLE KEYS */;
INSERT INTO `logo` VALUES (1,'uploads/1529557217nata-logo.png','Nata 2016');
/*!40000 ALTER TABLE `logo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logo1`
--

DROP TABLE IF EXISTS `logo1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logo1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logo1`
--

LOCK TABLES `logo1` WRITE;
/*!40000 ALTER TABLE `logo1` DISABLE KEYS */;
INSERT INTO `logo1` VALUES (1,'uploads/32762nata-logo1.png','Nata2016');
/*!40000 ALTER TABLE `logo1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matri_slider`
--

DROP TABLE IF EXISTS `matri_slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matri_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matri_slider`
--

LOCK TABLES `matri_slider` WRITE;
/*!40000 ALTER TABLE `matri_slider` DISABLE KEYS */;
/*!40000 ALTER TABLE `matri_slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matrimonial`
--

DROP TABLE IF EXISTS `matrimonial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matrimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matrimonial`
--

LOCK TABLES `matrimonial` WRITE;
/*!40000 ALTER TABLE `matrimonial` DISABLE KEYS */;
INSERT INTO `matrimonial` VALUES (2,'NATA IDOL Rules & Regulations','<div style=\"padding:15px;\">\r\n	<div style=\"text-align: center;\">\r\n		<span style=\"font-size:24px;\"><span style=\"color:#800000;\"><strong style=\"font-size: 18px;\">NATA IDOL</strong></span></span></div>\r\n	<div>\r\n		<span style=\"float: left;\"><img src=\"admin/uploads/committees/174351465465037IMG-20160121-WA0000.jpg\" style=\"width: 350px; height: 500px; padding:5px;\" /></span> <span style=\"float: left;\"> </span></div>\r\n	<h3 style=\"text-align: center;\">\r\n		<strong style=\"color:#444;\">(à°¨à±‡à°Ÿà°¿ à°¨à°¾à°Ÿà°¾ à°—à°¾à°¯à°•à±à°²à±‡ à°°à±‡à°ªà°Ÿà°¿ à°¸à°¿à°¨à°¿ à°—à°¾à°¯à°•à±à°²à± &nbsp;- Today&#39;s NATA Idols are Tomorrow&#39;s cine singers)&nbsp;</strong></h3>\r\n	<div>\r\n		<strong>Competition is being Judged by Lyricist Sri Chandrabose &nbsp;&amp; Music Director Sri Raghu Kunche .</strong></div>\r\n	<div>\r\n		<span style=\"color:#800000;\"><strong><span style=\"font-size:14px;\">Participation Rules:</span></strong></span></div>\r\n	<div style=\"margin-left: 160px;\">\r\n		<strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Age Limit: </strong>&nbsp; &nbsp;12 to &nbsp;55</div>\r\n	<div>\r\n		<span style=\"color:#800000;\"><strong><span style=\"font-size:14px;\">First Round:&nbsp;</span></strong></span></div>\r\n	<div style=\"padding-left:10px;\">\r\n		To participate please fill up entry form on NATA website with $20 fee and a &quot;<strong>youtube</strong>&quot; video link of a song emailed to <a href=\"mailto:nataidol@nataus.org\">NATAIDOL@NATAUS.ORG.</a></div>\r\n	<ul class=\"FirstRound\">\r\n		<li>\r\n			Participants can choose any song in Telugu Language. Total length of the recording should not exceed 5 minutes.</li>\r\n		<li>\r\n			NATA Idol 2016 team requests participants to avoid indecent or obscene lyrics.</li>\r\n		<li>\r\n			Participant can record the song using any device but the recording should be clear and lyrics should be audible. Poor recording may disqualify the entry.</li>\r\n		<li>\r\n			Karaoke tracks should NOT be used for first round submissions. Only tambura or some form of drone for sruti can be used.</li>\r\n		<li>\r\n			Deadline for Registration and submission of song for 1st Round: Mar 15th, 2016.</li>\r\n		<li>\r\n			Participant can choose city of their choice while registration.</li>\r\n		<li>\r\n			All entries will be screened by our two esteemed judges Sri Chandrabose and Sri Raghu Kunche. A select number of participants in each city will advance to the 2nd round.</li>\r\n		<li>\r\n			Participant has to select the city of their choice when they send the entry form.</li>\r\n		<li>\r\n			If selected, Participants will be notified by April 10, 2016.</li>\r\n	</ul>\r\n	<div>\r\n		<span style=\"color:#800000;\"><strong style=\"font-size: 16px;\">Second Round : Stage Performances</strong></span></div>\r\n	<ul>\r\n		<li>\r\n			All expenses related to participation, travel, lodging and boarding are borne by the participants and organizers are NOT responsible for any expenses.</li>\r\n		<li>\r\n			Under any circumstances if the participant cannot attend the finals at the convention, he/she will be disqualified from the competition.</li>\r\n		<li>\r\n			Second round Winner/Runner will be announced within 48 hours on NATA website and will be informed through email.</li>\r\n	</ul>\r\n</div>\r\n<div style=\"display:block;\">\r\n	<strong>Schedule &amp; Cities that completions will be held:</strong>\r\n	<table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"table\" style=\"width:800px; font-weight:bold; margin:1% 20%\">\r\n		<thead>\r\n		</thead>\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n					April 29th</td>\r\n				<td>\r\n					Dallas</td>\r\n				<td>\r\n					nataidol_dallas@nataus.org</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					April 30th&nbsp;</td>\r\n				<td>\r\n					New Jersey</td>\r\n				<td>\r\n					nataidol_nj@nataus.org</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					May 1st</td>\r\n				<td>\r\n					New York</td>\r\n				<td>\r\n					nataidol_ny@nataus.org</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					May 7th</td>\r\n				<td>\r\n					Washington DC</td>\r\n				<td>\r\n					nataidol_dc@nataus.org</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					May 8th</td>\r\n				<td>\r\n					Philadelphia</td>\r\n				<td>\r\n					nataidol_pa@nataus.org</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					May 13th</td>\r\n				<td>\r\n					Memphis</td>\r\n				<td>\r\n					nataidol_memphis@nataus.org</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					May 14th&nbsp;</td>\r\n				<td>\r\n					Atlanta</td>\r\n				<td>\r\n					nataidol_atlanta@nataus.org</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					May 15th</td>\r\n				<td>\r\n					Charlotte</td>\r\n				<td>\r\n					nataidol_charolette@nataus.or</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					May 21st</td>\r\n				<td>\r\n					&nbsp;Houston</td>\r\n				<td>\r\n					nataidol_houston@nataus.org</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					May 22nd</td>\r\n				<td>\r\n					Austin</td>\r\n				<td>\r\n					nataidol_austin@nataus.org</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					May 28th</td>\r\n				<td colspan=\"2\">\r\n					Semi-Finals - Dallas Convention Center</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					May 29th<span class=\"Apple-tab-span\" style=\"font-weight: bold; text-align: center; white-space: pre;\"> </span></td>\r\n				<td colspan=\"2\">\r\n					<span class=\"Apple-tab-span\" style=\"text-align: center; white-space: pre;\">Finals</span>&nbsp;-&nbsp;Dallas Convention Center</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n</div>\r\n<div>\r\n	<span style=\"color:#a52a2a;\"><span style=\"font-size:16px;\"><strong>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>TERMS &amp; CONDITIONS:</strong></span></span></div>\r\n<div>\r\n	Please read the following Terms &amp; Conditions carefully. If you register, we assume you agree to them.</div>\r\n<ol>\r\n	<li>\r\n		All performers who qualified for semifinals are required to register for NATA 2016 convention.</li>\r\n	<li>\r\n		&quot;NATA Idol 2016 competition&quot; is being organized by NATA IDOL 2016 team.</li>\r\n	<li>\r\n		Competition participants must be between 12 and 55 as of December 31st 2015.</li>\r\n	<li>\r\n		While registering you have to provide a video clip of your entry and share it via internet. It should be a Telugu composition only and not exceeding 5 minutes.</li>\r\n	<li>\r\n		Registered participants will be informed of the organizer&#39;s decisions through email or web only.</li>\r\n	<li>\r\n		All rights are reserved by NATA Idol team. In case of any dispute, NATA Idol team&#39;s decision is final.</li>\r\n</ol>\r\n<div>\r\n	<h3 style=\"color:#30f\">\r\n		Any Questions Please send Email to <a href=\"mailto:nataidol@nataus.org\" style=\"text-decoration:underline\">NATAIDOL@NATAUS.ORG</a></h3>\r\n</div>\r\n<div>\r\n	<span style=\"font-size:16px;\"><strong style=\"color:red;\"><span style=\"color:red; text-decoration:underline\"><a href=\"http://www.nataus.org/event/index/booktickets/21\" target=\"_blank\">NATA IDOL Entry Form</a></span></strong></span></div>\r\n');
/*!40000 ALTER TABLE `matrimonial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `media_id` varchar(225) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (5,'2','uploads/sliders/890844302media-logo1.jpg','media logo','4');
INSERT INTO `media` VALUES (6,'1','uploads/sliders/654295596media-logo8.jpg','TV9 News','3');
INSERT INTO `media` VALUES (7,'1','uploads/sliders/2112610929media-logo2.jpg','media logo','7');
INSERT INTO `media` VALUES (8,'1','uploads/sliders/595233232media-logo3.jpg','media logo','2');
INSERT INTO `media` VALUES (9,'1','uploads/sliders/1740709879media-logo4.jpg','media logo','8');
INSERT INTO `media` VALUES (10,'2','uploads/sliders/515638076media-logo5.jpg','media logo','3');
INSERT INTO `media` VALUES (11,'1','uploads/sliders/2076539885media-logo7.jpg','6TV News','6');
INSERT INTO `media` VALUES (12,'1','uploads/sliders/1684251338media-logo6.jpg','TV5 News','1');
INSERT INTO `media` VALUES (13,'1','uploads/sliders/1201164040hmtv.png','hmtv','5');
INSERT INTO `media` VALUES (14,'2','uploads/sliders/565184236mana.png','mana','1');
INSERT INTO `media` VALUES (15,'2','uploads/sliders/1447598902yupp.png','yupp','2');
INSERT INTO `media` VALUES (16,'1','uploads/sliders/58389256shakshi.png','shakshi','4');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_category`
--

DROP TABLE IF EXISTS `media_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_category`
--

LOCK TABLES `media_category` WRITE;
/*!40000 ALTER TABLE `media_category` DISABLE KEYS */;
INSERT INTO `media_category` VALUES (1,'INDIA');
INSERT INTO `media_category` VALUES (2,'USA');
/*!40000 ALTER TABLE `media_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` varchar(225) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (9,'Dr.Mohan Mallam','<p>\r\n	NATA invites you to pre convention - NATA Convention Dallas 2016</p>\r\n','uploads/689868329presisdent.jpg','presisdent');
INSERT INTO `messages` VALUES (10,'Dr. Ramana Reddy Guduru ','Welcome to the NATA Convention where we will strive to keep you informed...','uploads/119183045ramana-reddy.jpg','convener');
INSERT INTO `messages` VALUES (11,'Ramasurya Reddy ','<p>\r\n	&nbsp; &nbsp;NATA invites you to pre convention - NATA Convention Dallas 2016</p>\r\n','uploads/1227959792rama-surya-reddy.jpg','Coordinator');
INSERT INTO `messages` VALUES (12,'Rajeshwar Reddy','<p>\r\n	Welcome to the NATA Convention where we will strive to keep you informed...</p>\r\n','uploads/457445295rajeswar-reddy.jpg','presisdent-elect');
INSERT INTO `messages` VALUES (13,'Pradeep Samala','<p>\r\n	Welcome to the NATA Convention where we will strive to keep you informed...</p>\r\n','uploads/538994437pradeepsamla.jpg','National Coordinator');
INSERT INTO `messages` VALUES (14,'Girish Ramireddy','<p>\r\n	NATA invites you to pre convention - NATA Convention Dallas 2016</p>\r\n','uploads/1573781821Girish_Ramireddy.jpg','NAta2016');
INSERT INTO `messages` VALUES (15,'Hari Velkur','<p>\r\n	NATA invites you to pre convention - NATA Convention Dallas 2016</p>\r\n','uploads/2034552491Hari_Velkur.jpg','NAta2016');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Venue');
INSERT INTO `pages` VALUES (2,'Matrimonial');
INSERT INTO `pages` VALUES (3,'Women\'s forum');
INSERT INTO `pages` VALUES (4,'Literary');
INSERT INTO `pages` VALUES (5,'Vendor Exhibits');
INSERT INTO `pages` VALUES (7,'NATA IDOL');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages_committee`
--

DROP TABLE IF EXISTS `pages_committee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages_committee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages_committee`
--

LOCK TABLES `pages_committee` WRITE;
/*!40000 ALTER TABLE `pages_committee` DISABLE KEYS */;
INSERT INTO `pages_committee` VALUES (7,'0','uploads/committees/980Guru-Nanak-Jayanti.jpg','NATA 3rd Convention','manjuri','MLA - YSRCP');
INSERT INTO `pages_committee` VALUES (8,'24','uploads/committees/843583803blank-face.jpeg','nata convention 2016','Raghunath Reddy Kotha	','Chair');
INSERT INTO `pages_committee` VALUES (9,'0','uploads/committees/856738250blank-face.jpeg','NATA 3rd Convention','','');
INSERT INTO `pages_committee` VALUES (12,'5','uploads/committees/1398565019blank-face.jpeg','nata convention 2016','Sreenivasa Reddy Obulareddy','Chair');
INSERT INTO `pages_committee` VALUES (13,'0','uploads/committees/5037','','','');
INSERT INTO `pages_committee` VALUES (14,'0','uploads/committees/28793Guru-Nanak-Jayanti.jpg','hytjuykjuh','manjuri','MLA - YSRCP');
INSERT INTO `pages_committee` VALUES (15,'2','uploads/committees/1608554154blank-face.jpeg','nata convention 2016','Uma Maheshwar Reddy Kurri	','Chair');
INSERT INTO `pages_committee` VALUES (16,'11','uploads/committees/2010696129blank-face.jpeg','nata convention 2016','Dr.Darga Nagireddy','Chair');
INSERT INTO `pages_committee` VALUES (17,'11','uploads/committees/868453681blank-face.jpeg','nata convention 2016','Rajeshwari Udayagiri	','Co-Chair');
INSERT INTO `pages_committee` VALUES (18,'0','uploads/committees/1518307759blank-face.jpeg','nata convention 2016','Suresh Pathaneni','Co-Chair');
INSERT INTO `pages_committee` VALUES (19,'11','uploads/committees/1547938606blank-face.jpeg','nata convention 2016','Madhavi Pasupuleti','Co-Chair');
INSERT INTO `pages_committee` VALUES (22,'9','uploads/committees/745877176blank-face.jpeg','nata convention 2016','Srinivas Ganagoni','Chair');
INSERT INTO `pages_committee` VALUES (23,'20','uploads/committees/621719784blank-face.jpeg','nata convention 2016','Ramana Reddy Kristapati','Chair');
INSERT INTO `pages_committee` VALUES (24,'19','uploads/committees/54464070blank-face.jpeg','nata convention 2016','Dr. Marayada Reddy','Chair');
INSERT INTO `pages_committee` VALUES (25,'19','uploads/committees/1547018797blank-face.jpeg','nata convention 2016','Dr. Pavan Pamudurthy','Co-Chair');
INSERT INTO `pages_committee` VALUES (26,'19','uploads/committees/942097740blank-face.jpeg','nata convention 2016','Dr. Suresh Reddy	','Co-Chair');
INSERT INTO `pages_committee` VALUES (27,'19','uploads/committees/314833583blank-face.jpeg','nata convention 2016','Kamalkar Ponnuru','Member');
INSERT INTO `pages_committee` VALUES (28,'30','uploads/committees/2000425362blank-face.jpeg','nata convention 2016','Thirumal Reddy	','Chair');
INSERT INTO `pages_committee` VALUES (29,'30','uploads/committees/242457523blank-face.jpeg','nata convention 2016','KC Chekuri','Co-Chair');
INSERT INTO `pages_committee` VALUES (30,'30','uploads/committees/998033821blank-face.jpeg','nata convention 2016','Krishna Puttaparthi','Co-Chair');
INSERT INTO `pages_committee` VALUES (31,'30','uploads/committees/1105017756blank-face.jpeg','nata convention 2016','Venkat Mulukutla','Co-Chair');
INSERT INTO `pages_committee` VALUES (32,'5','uploads/committees/1465916561blank-face.jpeg','nata convention 2016','Murali Challa','Co-Chair');
INSERT INTO `pages_committee` VALUES (33,'5','uploads/committees/615473645blank-face.jpeg','nata convention 2016','Siva Annupureddy','Co-Chair');
INSERT INTO `pages_committee` VALUES (34,'4','uploads/committees/1617465137blank-face.jpeg','nata convention 2016','Subrahmanyam Boyareddigari ','Chair');
INSERT INTO `pages_committee` VALUES (35,'4','uploads/committees/1427356666blank-face.jpeg','nata convention 2016','Gopal Ponangi','Co-Chair');
INSERT INTO `pages_committee` VALUES (37,'21','uploads/committees/1152441444blank-face.jpeg','nata convention 2016','Nagesh Babu Dindukurthi','Chair');
INSERT INTO `pages_committee` VALUES (38,'21','uploads/committees/1441437100blank-face.jpeg','nata convention 2016','Raghu Dongur	','Co-Chair');
INSERT INTO `pages_committee` VALUES (39,'21','uploads/committees/1990708927blank-face.jpeg','nata convention 2016','Satish Bandaru	','Co-Chair');
INSERT INTO `pages_committee` VALUES (40,'13','uploads/committees/1872005123blank-face.jpeg','nata convention 2016','Subhada Prasad	','Chair');
INSERT INTO `pages_committee` VALUES (41,'13','uploads/committees/1929054626blank-face.jpeg','nata convention 2016','Suhitha Kosuri	','Co-Chair');
INSERT INTO `pages_committee` VALUES (42,'13','uploads/committees/1892373754blank-face.jpeg','nata convention 2016','Vennela Gajjala','Co-Chair');
INSERT INTO `pages_committee` VALUES (43,'7','uploads/committees/995909318blank-face.jpeg','nata convention 2016','Venkata Vaddadi','Chair');
INSERT INTO `pages_committee` VALUES (44,'7','uploads/committees/1445976216blank-face.jpeg','nata convention 2016','Narayana Reddy Kasireddy	','Co-Chair');
INSERT INTO `pages_committee` VALUES (45,'16','uploads/committees/1688433739blank-face.jpeg','nata convention 2016','Sudhaker Reddy Sirirangapally','Chair');
INSERT INTO `pages_committee` VALUES (46,'16','uploads/committees/776578274blank-face.jpeg','nata convention 2016','Srinadha Reddy Palavala','Co-Chair');
INSERT INTO `pages_committee` VALUES (47,'18','uploads/committees/1953868788blank-face.jpeg','nata convention 2016','Anand Dasarai','Chair');
INSERT INTO `pages_committee` VALUES (48,'18','uploads/committees/2062542835blank-face.jpeg','nata convention 2016','Raj Pabba	','Co-Chair');
INSERT INTO `pages_committee` VALUES (49,'2','uploads/committees/1820773301blank-face.jpeg','nata convention 2016','Ramesh Dhayam','Co-Chair');
INSERT INTO `pages_committee` VALUES (50,'16','uploads/committees/370435111blank-face.jpeg','nata convention 2016','GB Reddy','Co-Chair');
INSERT INTO `pages_committee` VALUES (51,'17','uploads/committees/1708812292blank-face.jpeg','nata convention 2016','Rekha Reddy','Chair');
INSERT INTO `pages_committee` VALUES (54,'13','uploads/committees/666241730blank-face.jpeg','nata convention 2016','Ravi Chand Ramireddy','Co-Chair');
INSERT INTO `pages_committee` VALUES (55,'16','uploads/committees/1035515029blank-face.jpeg','Chandra Budda','Chandra Budda','Member');
INSERT INTO `pages_committee` VALUES (56,'25','uploads/committees/1688629653blank-face.jpeg','Ramana Reddy Guduru','Ramana Reddy Guduru','Member');
INSERT INTO `pages_committee` VALUES (57,'25','uploads/committees/1430408365blank-face.jpeg','Ramasuryra Reddy','Ramasuryra Reddy','Member');
INSERT INTO `pages_committee` VALUES (58,'25','uploads/committees/1823683883blank-face.jpeg','Pradeep Samala','Pradeep Samala','Member');
INSERT INTO `pages_committee` VALUES (59,'25','uploads/committees/590052247blank-face.jpeg','Hari Velukuru','Hari Velukuru','Member');
INSERT INTO `pages_committee` VALUES (60,'17','uploads/committees/1899060771blank-face.jpeg','Baskar Ghandikota ','Baskar Ghandikota ','Co-chair');
INSERT INTO `pages_committee` VALUES (61,'18','uploads/committees/171624091blank-face.jpeg','Madhu Kolachina','Madhu Kolachina','Co-chair');
INSERT INTO `pages_committee` VALUES (62,'18','uploads/committees/768439310blank-face.jpeg','Poornachandra Rao  ','Poornachandra Rao  ','Member');
INSERT INTO `pages_committee` VALUES (63,'18','uploads/committees/819485300blank-face.jpeg','Bhaskar Rayavaram ','Bhaskar Rayavaram ','Member');
INSERT INTO `pages_committee` VALUES (64,'18','uploads/committees/890048054blank-face.jpeg','Hemanth Balla','Hemanth Balla','Member');
INSERT INTO `pages_committee` VALUES (65,'19','uploads/committees/1964065712blank-face.jpeg','Dr. Padmaja Battula ','Dr. Padmaja Battula ','Member');
INSERT INTO `pages_committee` VALUES (66,'19','uploads/committees/1921994057blank-face.jpeg','Dr. Ravi Potiluri','Dr. Ravi Potiluri','Member');
INSERT INTO `pages_committee` VALUES (67,'19','uploads/committees/419882377blank-face.jpeg','Dr. Raju Nakta','Dr. Raju Nakta','Member');
INSERT INTO `pages_committee` VALUES (68,'19','uploads/committees/1569233657blank-face.jpeg','Dr. Madhavi Muppidi','Dr. Madhavi Muppidi','Member');
INSERT INTO `pages_committee` VALUES (69,'19','uploads/committees/944407255blank-face.jpeg','Dr. Sreelatha','Dr. Sreelatha','Member');
INSERT INTO `pages_committee` VALUES (70,'19','uploads/committees/58980570blank-face.jpeg','Dr. Dev Ghandev','Dr. Dev Ghandev','Member');
INSERT INTO `pages_committee` VALUES (71,'19','uploads/committees/1862497238blank-face.jpeg','Dr. Pathikonda Murali','Dr. Pathikonda Murali','Member');
INSERT INTO `pages_committee` VALUES (72,'19','uploads/committees/1858159888blank-face.jpeg','Dr. Ramireddy Buchipudi','Dr. Ramireddy Buchipudi','Member');
INSERT INTO `pages_committee` VALUES (73,'19','uploads/committees/1934021616blank-face.jpeg','Dr. Ravi Chandra Juluri','Dr. Ravi Chandra Juluri','Member');
INSERT INTO `pages_committee` VALUES (74,'19','uploads/committees/1113051829blank-face.jpeg','Dr. Pratap Reddy Thummala','Dr. Pratap Reddy Thummala','Member');
INSERT INTO `pages_committee` VALUES (75,'19','uploads/committees/2135068527blank-face.jpeg','Adi Gella','Adi Gella','Member');
INSERT INTO `pages_committee` VALUES (76,'9','uploads/committees/780668114blank-face.jpeg','Satish Bommineni','Satish Bommineni','Co-Chair');
INSERT INTO `pages_committee` VALUES (77,'9','uploads/committees/1563921838blank-face.jpeg','Raghu Gajjala ','Raghu Gajjala ','Member');
INSERT INTO `pages_committee` VALUES (82,'19','uploads/committees/115753601blank-face.jpeg','Madhavi Pasupuleti','Madhavi Pasupuleti','Member');
INSERT INTO `pages_committee` VALUES (83,'19','uploads/committees/529835572blank-face.jpeg','Venkat','Venkat','Member');
INSERT INTO `pages_committee` VALUES (84,'19','uploads/committees/510997381blank-face.jpeg','Stalney Reddy','Stalney Reddy','Advisor');
INSERT INTO `pages_committee` VALUES (85,'20','uploads/committees/1881551594blank-face.jpeg','Pradeep Redy chowti','Pradeep Redy chowti','Co-chair');
INSERT INTO `pages_committee` VALUES (86,'30','uploads/committees/956311986blank-face.jpeg','Nasim ','Nasim ','Member');
INSERT INTO `pages_committee` VALUES (87,'30','uploads/committees/393326518blank-face.jpeg','Sateesh Punnam','Sateesh Punnam','Member');
INSERT INTO `pages_committee` VALUES (88,'30','uploads/committees/2110697418blank-face.jpeg','Manohar Nimmagadda','Manohar Nimmagadda','Member');
INSERT INTO `pages_committee` VALUES (89,'30','uploads/committees/1400813309blank-face.jpeg','Kumar Aswapathi','Kumar Aswapathi','Member');
INSERT INTO `pages_committee` VALUES (90,'2','uploads/committees/1188803067blank-face.jpeg','Subba Rao Kodeddu','Subba Rao Kodeddu','Member');
INSERT INTO `pages_committee` VALUES (91,'5','uploads/committees/607205126blank-face.jpeg','Krishna Koduru','Krishna Koduru','Co-chair');
INSERT INTO `pages_committee` VALUES (92,'7','uploads/committees/726740538blank-face.jpeg','Prasad Choppa','Prasad Choppa','Member');
INSERT INTO `pages_committee` VALUES (93,'7','uploads/committees/928551802blank-face.jpeg','Nagi Reddy Karri','Nagi Reddy Karri','Member');
INSERT INTO `pages_committee` VALUES (94,'4','uploads/committees/745977245233777480blank-face.jpeg','Spirtitual','RK Panditi','member');
INSERT INTO `pages_committee` VALUES (95,'24','uploads/committees/1156927948blank-face.jpeg','Pravardhan Reddy Chimmula','Pravardhan Reddy Chimmula','Co-Chair');
INSERT INTO `pages_committee` VALUES (96,'4','uploads/committees/176972807233777480blank-face.jpeg','Spirtitual','Sirish Poondla','member');
INSERT INTO `pages_committee` VALUES (97,'4','uploads/committees/1684695721233777480blank-face.jpeg','Spirtitual','Madhumathi Vysyaraju','member');
INSERT INTO `pages_committee` VALUES (98,'4','uploads/committees/289024722233777480blank-face.jpeg','Spirtitual','Dr. Nallu Ramappa','member');
INSERT INTO `pages_committee` VALUES (99,'4','uploads/committees/532375930233777480blank-face.jpeg','Spirtitual','Sudhaker Patil','member');
INSERT INTO `pages_committee` VALUES (100,'4','uploads/committees/1698561329233777480blank-face.jpeg','Spirtitual','Abhinav Dahagam','member');
INSERT INTO `pages_committee` VALUES (101,'4','uploads/committees/943847585233777480blank-face.jpeg','Spirtitual','Kumar Annavarapu','member');
INSERT INTO `pages_committee` VALUES (102,'4','uploads/committees/1102871216233777480blank-face.jpeg','Spirtitual','Satyannarayana','member');
INSERT INTO `pages_committee` VALUES (103,'4','uploads/committees/74989972233777480blank-face.jpeg','Spirtitual','Dr. Nakta Raju','Advisor');
INSERT INTO `pages_committee` VALUES (104,'21','uploads/committees/1647395095blank-face.jpeg','Chandra K Bandar','Chandra K Bandar','Member');
INSERT INTO `pages_committee` VALUES (105,'13','uploads/committees/1949096671blank-face.jpeg','Medasri','Medasri','Member');
INSERT INTO `pages_committee` VALUES (106,'13','uploads/committees/70890133blank-face.jpeg','Rekha Karnam','Rekha Karnam','Member');
INSERT INTO `pages_committee` VALUES (108,'11','uploads/committees/1844626368blank-face.jpeg','Madhavi Pasupuleti','Madhavi Pasupuleti','Co-Chair');
INSERT INTO `pages_committee` VALUES (109,'11','uploads/committees/1728250846blank-face.jpeg','Kamalkar Ponnuru','Kamalkar Ponnuru','Co-Chair');
INSERT INTO `pages_committee` VALUES (113,'11','uploads/committees/836430229blank-face.jpeg','Kalyani Tadimeti','Kalyani Tadimeti','Member');
INSERT INTO `pages_committee` VALUES (114,'11','uploads/committees/514103920blank-face.jpeg','Jhansi Chamkura','Jhansi Chamkura','Member');
INSERT INTO `pages_committee` VALUES (115,'11','uploads/committees/639754150blank-face.jpeg','Ashwin','Ashwin','Member');
INSERT INTO `pages_committee` VALUES (116,'11','uploads/committees/2062233237blank-face.jpeg','Venkat','Venkat','Member');
INSERT INTO `pages_committee` VALUES (117,'11','uploads/committees/1477077012blank-face.jpeg','Prasanthi Ballada','Prasanthi Ballada','Member');
INSERT INTO `pages_committee` VALUES (118,'11','uploads/committees/1993672652blank-face.jpeg','Srinivas Reddy Alla','Srinivas Reddy Alla','Advisor');
INSERT INTO `pages_committee` VALUES (119,'11','uploads/committees/705303671blank-face.jpeg','Sandhya Gavva ','Sandhya Gavva ','Advisor');
INSERT INTO `pages_committee` VALUES (120,'11','uploads/committees/1423538570blank-face.jpeg','Geetha Dammana','Geetha Dammana','Advisor');
INSERT INTO `pages_committee` VALUES (121,'4','uploads/committees/2030763590blank-face.jpeg','Rao Kalavala','Rao Kalavala','Advisor');
INSERT INTO `pages_committee` VALUES (122,'24','uploads/committees/1854280465blank-face.jpeg','Subbu Jonnalagadda','Subbu Jonnalagadda','Advisor');
INSERT INTO `pages_committee` VALUES (123,'28','uploads/committees/6193765211595635936blank-face.jpeg','convention','Dr. Ramana Reddy Guduru','Convener');
INSERT INTO `pages_committee` VALUES (124,'28','uploads/committees/11662281601595635936blank-face.jpeg','convention','Ramasurya Reddy','Coordinator');
INSERT INTO `pages_committee` VALUES (125,'28','uploads/committees/15457074931595635936blank-face.jpeg','convention','Sridhar Reddy Korsapati','Co-Convener');
INSERT INTO `pages_committee` VALUES (126,'28','uploads/committees/15715191291595635936blank-face.jpeg','convention','Suresh Manduva','Co-Coordinator');
INSERT INTO `pages_committee` VALUES (127,'28','uploads/committees/13674099941595635936blank-face.jpeg','convention','Phalgun Veereddygari','Deputy Convener');
INSERT INTO `pages_committee` VALUES (128,'28','uploads/committees/5134985151595635936blank-face.jpeg','convention','Geetha Dammana','Deputy Coordinator');
INSERT INTO `pages_committee` VALUES (129,'29','uploads/committees/20881498561595635936blank-face.jpeg','National Convention Committee','Dr. Mohan Mallam','President');
INSERT INTO `pages_committee` VALUES (130,'29','uploads/committees/3945141341595635936blank-face.jpeg','National Convention Committee','Dr. Ramana Reddy Guduru','Convener');
INSERT INTO `pages_committee` VALUES (131,'29','uploads/committees/11476653901595635936blank-face.jpeg','National Convention Committee','Ramasurya Reddy','Coordinator');
INSERT INTO `pages_committee` VALUES (132,'29','uploads/committees/15489580171595635936blank-face.jpeg','National Convention Committee','Rajeshwar Reddy','President-elect');
INSERT INTO `pages_committee` VALUES (133,'29','uploads/committees/5413256751595635936blank-face.jpeg','National Convention Committee','Pradeep Samala','National Convention Advisor');
INSERT INTO `pages_committee` VALUES (134,'29','uploads/committees/16401171541595635936blank-face.jpeg','National Convention Committee','Girish Ramireddy','Secretary');
INSERT INTO `pages_committee` VALUES (135,'29','uploads/committees/20338058551595635936blank-face.jpeg','National Convention Committee','Hari Velkuru','Treasurer');
INSERT INTO `pages_committee` VALUES (136,'29','uploads/committees/4119415391595635936blank-face.jpeg','National Convention Committee','Dr. Sanjeeva Reddy','Past-President');
INSERT INTO `pages_committee` VALUES (137,'29','uploads/committees/17841968471595635936blank-face.jpeg','National Convention Committee','Venkatesh Mutyala','Member');
INSERT INTO `pages_committee` VALUES (138,'29','uploads/committees/51993751595635936blank-face.jpeg','National Convention Committee','Srini Vangimalla','Member');
INSERT INTO `pages_committee` VALUES (139,'29','uploads/committees/16525352091595635936blank-face.jpeg','National Convention Committee','Chinnababu Reddy','Member');
/*!40000 ALTER TABLE `pages_committee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `color` varchar(225) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programs`
--

LOCK TABLES `programs` WRITE;
/*!40000 ALTER TABLE `programs` DISABLE KEYS */;
INSERT INTO `programs` VALUES (13,'Coming Soon...','','6','uploads/sliders/910327564','');
/*!40000 ALTER TABLE `programs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider`
--

LOCK TABLES `slider` WRITE;
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` VALUES (18,'uploads/sliders/1056734900pic4.jpg','NATA 3rd Convention','15','2015-10-09');
INSERT INTO `slider` VALUES (19,'uploads/sliders/951124640pic6.jpg','NATA 3rd Convention','14','2015-10-09');
INSERT INTO `slider` VALUES (20,'uploads/sliders/448545650pic5.jpg','NATA 3rd Convention','17','2015-10-09');
INSERT INTO `slider` VALUES (22,'uploads/sliders/104015498pic8.jpg','NATA 3rd Convention','16','2015-10-09');
INSERT INTO `slider` VALUES (24,'uploads/sliders/19912610481.png','','13','2015-10-09');
INSERT INTO `slider` VALUES (25,'uploads/sliders/8027743382.gif','','12','2015-10-09');
INSERT INTO `slider` VALUES (26,'uploads/sliders/1101027171home-banner-1.jpg','Greg Abbott Texas Governor','01','2016-02-23');
INSERT INTO `slider` VALUES (27,'uploads/sliders/1976838933home-banner-2.jpg','Nagarjuna Actor','02','2016-02-23');
INSERT INTO `slider` VALUES (28,'uploads/sliders/2117960523home-banner3.jpg','Prabhas Actor','03','2016-02-23');
INSERT INTO `slider` VALUES (30,'uploads/sliders/887639700home-banner-5.jpg','Shruthi Haasan Actress','05','2016-02-23');
INSERT INTO `slider` VALUES (31,'uploads/sliders/949789457home-banner-6.jpg','Thamannah Actress','06','2016-02-23');
INSERT INTO `slider` VALUES (32,'uploads/sliders/1309932404home-banner-7.jpg','Pranitha subash Actress','07','2016-02-23');
INSERT INTO `slider` VALUES (33,'uploads/sliders/46795251home-banner-8.jpg','Regina Actress,  Lavanya Tripathi Actress','08','2016-02-23');
INSERT INTO `slider` VALUES (34,'uploads/sliders/2024495053home-banner-9.jpg','Kodandarami Reddy Director','09','2016-02-23');
INSERT INTO `slider` VALUES (35,'uploads/sliders/1174651766home-banner-10.jpg','Prudvi Balireddy Comedian  Sampoornesh Babu Comedian','10','2016-02-23');
INSERT INTO `slider` VALUES (36,'uploads/sliders/686866843home-banner-11.jpg','Sapthagiri Comedian  Praveen Comedian','11','2016-02-23');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slider2`
--

DROP TABLE IF EXISTS `slider2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slider2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider2`
--

LOCK TABLES `slider2` WRITE;
/*!40000 ALTER TABLE `slider2` DISABLE KEYS */;
INSERT INTO `slider2` VALUES (9,'uploads/sliders/104985.jpg','NATA samburalu','4');
INSERT INTO `slider2` VALUES (10,'uploads/sliders/169156.jpg','NATA board Meeting','5');
INSERT INTO `slider2` VALUES (11,'uploads/sliders/297667.jpg','Mohan Mallam','6');
INSERT INTO `slider2` VALUES (12,'uploads/sliders/5249141236734cc1.jpg','','');
/*!40000 ALTER TABLE `slider2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sponsors`
--

DROP TABLE IF EXISTS `sponsors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sponsors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sponsors`
--

LOCK TABLES `sponsors` WRITE;
/*!40000 ALTER TABLE `sponsors` DISABLE KEYS */;
INSERT INTO `sponsors` VALUES (18,'HAKS','','uploads/722848826HAKS_4C_cmyk.jpg','sponsors');
/*!40000 ALTER TABLE `sponsors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `business` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendors`
--

LOCK TABLES `vendors` WRITE;
/*!40000 ALTER TABLE `vendors` DISABLE KEYS */;
INSERT INTO `vendors` VALUES (1,'Kalavasthra','Apparel');
INSERT INTO `vendors` VALUES (2,'Gaudiya Vaishnava Association ','NPO');
INSERT INTO `vendors` VALUES (3,'G&C Global Consortium Pvt Ltd','Services');
INSERT INTO `vendors` VALUES (4,'Pranith Projects Pvt Ltd ','Realestate');
INSERT INTO `vendors` VALUES (5,'Safeway Infra','Realestate');
INSERT INTO `vendors` VALUES (6,'Gary Insurance','Services');
INSERT INTO `vendors` VALUES (7,'Shree Collections','Apparel');
/*!40000 ALTER TABLE `vendors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venue`
--

LOCK TABLES `venue` WRITE;
/*!40000 ALTER TABLE `venue` DISABLE KEYS */;
INSERT INTO `venue` VALUES (2,'The Convention Center','<p>\r\n	<span style=\\\"color: rgb(63, 63, 63); font-family: \\\'Open Sans\\\', \\\'Helvetica Neue\\\', Helvetica, Arial, sans-serif; font-size: 13px; line-height: 20.8px;\\\">The Kay Bailey Hutchison Convention Center Dallas, like everything&nbsp;else in the city, is BIG&ndash; and Big Things Happen Here&trade;. &nbsp;Big sporting events like the NFL Fan Experience, NCAA Bracket Town&nbsp;and Dallas Safari Club. Big international conferences like NAHB&nbsp;International Builders&rsquo; Show, Mary Kay&rsquo;s Annual Seminar, International&nbsp;Air Conditioning Heating Refrigeration, and Solar Power International. &nbsp;BIG trade shows, meetings, and conventions like MegaFest&trade;, PCMA,&nbsp;Mecum Auto Auction, and The Great American Trucking Show. If you don&rsquo;t need all 2,000,000 square feet, it&rsquo;s&nbsp;okay. Our space is flexible and so is our staff.</span></p>\r\n<p>\r\n	<span .=\\\"\\\\&quot;\\\\&quot;\\\" 000=\\\"\\\\&quot;\\\\&quot;\\\" air=\\\"\\\\&quot;\\\\&quot;\\\" all=\\\"\\\\&quot;\\\\&quot;\\\" american=\\\"\\\\&quot;\\\\&quot;\\\" and=\\\"\\\\&quot;\\\\&quot;\\\" annual=\\\"\\\\&quot;\\\\&quot;\\\" auto=\\\"\\\\&quot;\\\\&quot;\\\" bailey=\\\"\\\\&quot;\\\\&quot;\\\" big=\\\"\\\\&quot;\\\\&quot;\\\" bracket=\\\"\\\\&quot;\\\\&quot;\\\" center=\\\"\\\\&quot;\\\\&quot;\\\" club.=\\\"\\\\&quot;\\\\&quot;\\\" conditioning=\\\"\\\\&quot;\\\\&quot;\\\" conferences=\\\"\\\\&quot;\\\\&quot;\\\" convention=\\\"\\\\&quot;\\\\&quot;\\\" conventions=\\\"\\\\&quot;\\\\&quot;\\\" dallas=\\\"\\\\&quot;\\\\&quot;\\\" else=\\\"\\\\&quot;\\\\&quot;\\\" events=\\\"\\\\&quot;\\\\&quot;\\\" fan=\\\"\\\\&quot;\\\\&quot;\\\" flexible=\\\"\\\\&quot;\\\\&quot;\\\" font-family:=\\\"\\\\&quot;\\\\&quot;\\\" font-size:=\\\"\\\\&quot;\\\\&quot;\\\" great=\\\"\\\\&quot;\\\\&quot;\\\" happen=\\\"\\\\&quot;\\\\&quot;\\\" heating=\\\"\\\\&quot;\\\\&quot;\\\" helvetica=\\\"\\\\&quot;\\\\&quot;\\\" hutchison=\\\"\\\\&quot;\\\\&quot;\\\" if=\\\"\\\\&quot;\\\\&quot;\\\" in=\\\"\\\\&quot;\\\\&quot;\\\" international=\\\"\\\\&quot;\\\\&quot;\\\" international.=\\\"\\\\&quot;\\\\&quot;\\\" is=\\\"\\\\&quot;\\\\&quot;\\\" kay=\\\"\\\\&quot;\\\\&quot;\\\" like=\\\"\\\\&quot;\\\\&quot;\\\" line-height:=\\\"\\\\&quot;\\\\&quot;\\\" mary=\\\"\\\\&quot;\\\\&quot;\\\" mecum=\\\"\\\\&quot;\\\\&quot;\\\" ncaa=\\\"\\\\&quot;\\\\&quot;\\\" need=\\\"\\\\&quot;\\\\&quot;\\\" nfl=\\\"\\\\&quot;\\\\&quot;\\\" okay.=\\\"\\\\&quot;\\\\&quot;\\\" open=\\\"\\\\&quot;\\\\&quot;\\\" our=\\\"\\\\&quot;\\\\&quot;\\\" power=\\\"\\\\&quot;\\\\&quot;\\\" s=\\\"\\\\&quot;\\\\&quot;\\\" safari=\\\"\\\\&quot;\\\\&quot;\\\" show.=\\\"\\\\&quot;\\\\&quot;\\\" so=\\\"\\\\&quot;\\\\&quot;\\\" solar=\\\"\\\\&quot;\\\\&quot;\\\" space=\\\"\\\\&quot;\\\\&quot;\\\" span=\\\"\\\\&quot;\\\\&quot;\\\" sporting=\\\"\\\\&quot;\\\\&quot;\\\" square=\\\"\\\\&quot;\\\\&quot;\\\" style=\\\"\\\\&quot;\\\\\\\\&quot;color:\\\\&quot;\\\" t=\\\"\\\\&quot;\\\\&quot;\\\" the=\\\"\\\\&quot;\\\\&quot;\\\" things=\\\"\\\\&quot;\\\\&quot;\\\" trade=\\\"\\\\&quot;\\\\&quot;\\\" trucking=\\\"\\\\&quot;\\\\&quot;\\\" you=\\\"\\\\&quot;\\\\&quot;\\\">SPECIALITES &amp; HIGHLIGHTS</span></p>\r\n<ul 0px=\\\"\\\\&quot;\\\\&quot;\\\" color:=\\\"\\\\&quot;\\\\&quot;\\\" font-family:=\\\"\\\\&quot;\\\\&quot;\\\" font-size:=\\\"\\\\&quot;\\\\&quot;\\\" helvetica=\\\"\\\\&quot;\\\\&quot;\\\" li=\\\"\\\\&quot;\\\\&quot;\\\" line-height:=\\\"\\\\&quot;\\\\&quot;\\\" list-style-type:=\\\"\\\\&quot;\\\\&quot;\\\" margin-left:=\\\"\\\\&quot;\\\\&quot;\\\" margin:=\\\"\\\\&quot;\\\\&quot;\\\" open=\\\"\\\\&quot;\\\\&quot;\\\" padding-left:=\\\"\\\\&quot;\\\\&quot;\\\" padding-right:=\\\"\\\\&quot;\\\\&quot;\\\" style=\\\"\\\\&quot;\\\\\\\\&quot;box-sizing:\\\\&quot;\\\">\r\n	<li 000=\\\"\\\\&quot;\\\\&quot;\\\" exhibit=\\\"\\\\&quot;\\\\&quot;\\\" feet=\\\"\\\\&quot;\\\\&quot;\\\" li=\\\"\\\\&quot;\\\\&quot;\\\" list-style-type:=\\\"\\\\&quot;\\\\&quot;\\\" margin-left:=\\\"\\\\&quot;\\\\&quot;\\\" of=\\\"\\\\&quot;\\\\&quot;\\\" square=\\\"\\\\&quot;\\\\&quot;\\\" style=\\\"\\\\&quot;\\\\\\\\&quot;box-sizing:\\\\&quot;\\\">\r\n		2,000,000 Total Square Feet</li>\r\n	<li 000=\\\"\\\\&quot;\\\\&quot;\\\" exhibit=\\\"\\\\&quot;\\\\&quot;\\\" feet=\\\"\\\\&quot;\\\\&quot;\\\" li=\\\"\\\\&quot;\\\\&quot;\\\" list-style-type:=\\\"\\\\&quot;\\\\&quot;\\\" margin-left:=\\\"\\\\&quot;\\\\&quot;\\\" of=\\\"\\\\&quot;\\\\&quot;\\\" square=\\\"\\\\&quot;\\\\&quot;\\\" style=\\\"\\\\&quot;\\\\\\\\&quot;box-sizing:\\\\&quot;\\\">\r\n		65,124 Square Feet of Ballrooms&nbsp;(3 total, which can each be divided into 4)</li>\r\n	<li 88=\\\"\\\\&quot;\\\\&quot;\\\" li=\\\"\\\\&quot;\\\\&quot;\\\" list-style-type:=\\\"\\\\&quot;\\\\&quot;\\\" margin-left:=\\\"\\\\&quot;\\\\&quot;\\\" meeting=\\\"\\\\&quot;\\\\&quot;\\\" style=\\\"\\\\&quot;\\\\\\\\&quot;box-sizing:\\\\&quot;\\\">\r\n		21,290 Square Foot Arena with 9,816 seats</li>\r\n	<li 750=\\\"\\\\&quot;\\\\&quot;\\\" dressing=\\\"\\\\&quot;\\\\&quot;\\\" li=\\\"\\\\&quot;\\\\&quot;\\\" list-style-type:=\\\"\\\\&quot;\\\\&quot;\\\" margin-left:=\\\"\\\\&quot;\\\\&quot;\\\" seat=\\\"\\\\&quot;\\\\&quot;\\\" style=\\\"\\\\&quot;\\\\\\\\&quot;box-sizing:\\\\&quot;\\\" theater=\\\"\\\\&quot;\\\\&quot;\\\" with=\\\"\\\\&quot;\\\\&quot;\\\">\r\n		Heliport/Vertiport with Conference Room</li>\r\n	<li 15=\\\"\\\\&quot;\\\\&quot;\\\" 3=\\\"\\\\&quot;\\\\&quot;\\\" 56=\\\"\\\\&quot;\\\\&quot;\\\" a=\\\"\\\\&quot;\\\\&quot;\\\" and=\\\"\\\\&quot;\\\\&quot;\\\" dock=\\\"\\\\&quot;\\\\&quot;\\\" including=\\\"\\\\&quot;\\\\&quot;\\\" li=\\\"\\\\&quot;\\\\&quot;\\\" list-style-type:=\\\"\\\\&quot;\\\\&quot;\\\" loading=\\\"\\\\&quot;\\\\&quot;\\\" margin-left:=\\\"\\\\&quot;\\\\&quot;\\\" marshaling=\\\"\\\\&quot;\\\\&quot;\\\" spaces=\\\"\\\\&quot;\\\\&quot;\\\" style=\\\"\\\\&quot;\\\\\\\\&quot;box-sizing:\\\\&quot;\\\" total=\\\"\\\\&quot;\\\\&quot;\\\">\r\n		9 Pre-function lobbies (210,475 total square feet)</li>\r\n	<li 039=\\\"\\\\&quot;\\\\&quot;\\\" li=\\\"\\\\&quot;\\\\&quot;\\\" list-style-type:=\\\"\\\\&quot;\\\\&quot;\\\" margin-left:=\\\"\\\\&quot;\\\\&quot;\\\" parking=\\\"\\\\&quot;\\\\&quot;\\\" style=\\\"\\\\&quot;\\\\\\\\&quot;box-sizing:\\\\&quot;\\\" surface=\\\"\\\\&quot;\\\\&quot;\\\">\r\n		1,200 Garage parking spaces</li>\r\n	<li advertising=\\\"\\\\&quot;\\\\&quot;\\\" and=\\\"\\\\&quot;\\\\&quot;\\\" event=\\\"\\\\&quot;\\\\&quot;\\\" for=\\\"\\\\&quot;\\\\&quot;\\\" including=\\\"\\\\&quot;\\\\&quot;\\\" li=\\\"\\\\&quot;\\\\&quot;\\\" list-style-type:=\\\"\\\\&quot;\\\\&quot;\\\" management=\\\"\\\\&quot;\\\\&quot;\\\" margin-left:=\\\"\\\\&quot;\\\\&quot;\\\" marketing=\\\"\\\\&quot;\\\\&quot;\\\" prime=\\\"\\\\&quot;\\\\&quot;\\\" show=\\\"\\\\&quot;\\\\&quot;\\\" style=\\\"\\\\&quot;\\\\\\\\&quot;box-sizing:\\\\&quot;\\\">\r\n		Beautifully manicured grounds including the Dallas&nbsp;Police Memorial, Mary Kay Ash Grove, Pioneer Plaza,&nbsp;and Pioneer Cemetery with historic markers</li>\r\n	<li 000=\\\"\\\\&quot;\\\\&quot;\\\" 100=\\\"\\\\&quot;\\\\&quot;\\\" adjacent=\\\"\\\\&quot;\\\\&quot;\\\" at=\\\"\\\\&quot;\\\\&quot;\\\" dallas=\\\"\\\\&quot;\\\\&quot;\\\" hotel=\\\"\\\\&quot;\\\\&quot;\\\" li=\\\"\\\\&quot;\\\\&quot;\\\" list-style-type:=\\\"\\\\&quot;\\\\&quot;\\\" margin-left:=\\\"\\\\&quot;\\\\&quot;\\\" omni=\\\"\\\\&quot;\\\\&quot;\\\" rooms=\\\"\\\\&quot;\\\\&quot;\\\" style=\\\"\\\\&quot;\\\\\\\\&quot;box-sizing:\\\\&quot;\\\" the=\\\"\\\\&quot;\\\\&quot;\\\" walking=\\\"\\\\&quot;\\\\&quot;\\\" within=\\\"\\\\&quot;\\\\&quot;\\\">\r\n		4 new restaurants</li>\r\n	<li 30=\\\"\\\\&quot;\\\\&quot;\\\" fort=\\\"\\\\&quot;\\\\&quot;\\\" from=\\\"\\\\&quot;\\\\&quot;\\\" li=\\\"\\\\&quot;\\\\&quot;\\\" list-style-type:=\\\"\\\\&quot;\\\\&quot;\\\" margin-left:=\\\"\\\\&quot;\\\\&quot;\\\" minutes=\\\"\\\\&quot;\\\\&quot;\\\" style=\\\"\\\\&quot;\\\\\\\\&quot;box-sizing:\\\\&quot;\\\" worth=\\\"\\\\&quot;\\\\&quot;\\\">\r\n		7 miles from Dallas Love Field (DAL) airport</li>\r\n	<li access=\\\"\\\\&quot;\\\\&quot;\\\" convention=\\\"\\\\&quot;\\\\&quot;\\\" covered=\\\"\\\\&quot;\\\\&quot;\\\" dart=\\\"\\\\&quot;\\\\&quot;\\\" li=\\\"\\\\&quot;\\\\&quot;\\\" list-style-type:=\\\"\\\\&quot;\\\\&quot;\\\" margin-left:=\\\"\\\\&quot;\\\\&quot;\\\" onsite=\\\"\\\\&quot;\\\\&quot;\\\" rail=\\\"\\\\&quot;\\\\&quot;\\\" station=\\\"\\\\&quot;\\\\&quot;\\\" style=\\\"\\\\&quot;\\\\\\\\&quot;box-sizing:\\\\&quot;\\\" to=\\\"\\\\&quot;\\\\&quot;\\\" with=\\\"\\\\&quot;\\\\&quot;\\\">\r\n		Free shuttle bus (DART D-Link, Route 722) to Downtown, Arts&nbsp;District, Uptown, The Cedars, Bishop Arts District, Victory Park,&nbsp;and the West End</li>\r\n</ul>\r\n');
/*!40000 ALTER TABLE `venue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venue_slider`
--

DROP TABLE IF EXISTS `venue_slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venue_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venue_slider`
--

LOCK TABLES `venue_slider` WRITE;
/*!40000 ALTER TABLE `venue_slider` DISABLE KEYS */;
INSERT INTO `venue_slider` VALUES (13,'uploads/sliders/1529692976dallas1.jpg','NATA 3rd Convention','1');
INSERT INTO `venue_slider` VALUES (14,'uploads/sliders/2041637719dallas2.jpg','NATA 3rd Convention','2');
INSERT INTO `venue_slider` VALUES (15,'uploads/sliders/797814227dallas3.jpg','NATA 3rd Convention','3');
INSERT INTO `venue_slider` VALUES (16,'uploads/sliders/980789689natavenuemapimage.jpg','NATA 3rd Convention','4');
INSERT INTO `venue_slider` VALUES (17,'uploads/sliders/1574652163NATA-Venue-Image.jpg','NATA 3rd Convention','5');
/*!40000 ALTER TABLE `venue_slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'NATA organized Second Convention Volunteer Appreciation Dinner in Atlanta - USA','https://www.youtube.com/watch?v=p6TxD3PO3MA');
INSERT INTO `videos` VALUES (2,'TV9 - USA News - NATA celebrations in America part 1','https://www.youtube.com/watch?v=4X2LIyJFzSA');
INSERT INTO `videos` VALUES (3,'TV9 - USA News - NATA celebrations in America part 2','https://www.youtube.com/watch?v=YqkIycOkxyU');
INSERT INTO `videos` VALUES (4,'NATA 2nd Convention Dancing Event : TV5 News','https://www.youtube.com/watch?v=q-CJJJjxIX8');
INSERT INTO `videos` VALUES (5,'NATA President Sanjeeva Reddy With TV5 On NATA Highlights : TV5 News','https://www.youtube.com/watch?v=MNeOxN5Wtro');
INSERT INTO `videos` VALUES (6,'Singer Mallikarjun Sings \" Sri Tumbura Narada \" Song in NATA : TV5 News','https://www.youtube.com/watch?v=cC9-dc4-d3s');
INSERT INTO `videos` VALUES (7,'Nata 2014 Convention Invitation by Team Atlanta','https://www.youtube.com/watch?v=AxLV4kMPoKM');
INSERT INTO `videos` VALUES (8,'NATA 2014 Convention Invites Telugu community around the world.','https://www.youtube.com/watch?v=c8m8vQStOng');
INSERT INTO `videos` VALUES (9,'Prem Reddy - NATA Founder','https://www.youtube.com/watch?v=QcRGA3szF-4');
INSERT INTO `videos` VALUES (10,'Dr. Pailla Malla Reddy - NATA','https://www.youtube.com/watch?v=Dui7P2UMp5M');
INSERT INTO `videos` VALUES (11,'NATA 2014 Convention TV9 Part 1','https://www.youtube.com/watch?feature=player_embedded&v=4X2LIyJFzSA');
INSERT INTO `videos` VALUES (12,'NATA 2014 Convention TV9 Part 2','https://www.youtube.com/watch?feature=player_embedded&v=4X2LIyJFzSA');
INSERT INTO `videos` VALUES (13,'Team Atlanta Invitation - NATA 2014 Convention','https://www.youtube.com/watch?feature=player_embedded&v=AxLV4kMPoKM');
INSERT INTO `videos` VALUES (14,'Dr. Prem Reddy - NATA','https://www.youtube.com/watch?feature=player_embedded&v=QcRGA3szF-4');
INSERT INTO `videos` VALUES (15,'NATA Day - Bay Area CA Concert TV5','https://www.youtube.com/watch?feature=player_embedded&v=nD_y4KVsSpY');
INSERT INTO `videos` VALUES (16,'NATA Day - Bay Area CA Full Coverage Part1','https://www.youtube.com/watch?feature=player_embedded&v=CiAMNvQkd7k');
INSERT INTO `videos` VALUES (17,'NATA Day - Bay Area CA Full Coverage Part2','https://www.youtube.com/watch?feature=player_embedded&v=OFhSTOsZ4QE');
INSERT INTO `videos` VALUES (18,'NATA Day - Bay Area CA Full Coverage Part3','https://www.youtube.com/watch?feature=player_embedded&v=DJCLJRTJRfU');
INSERT INTO `videos` VALUES (19,'NATA Day - Bay Area CA Full Coverage Part4','https://www.youtube.com/watch?feature=player_embedded&v=wQni-3GN7xI');
INSERT INTO `videos` VALUES (20,'NATA Day - Bay Area CA Full Coverage Part5','https://www.youtube.com/watch?feature=player_embedded&v=rhspNWvegEs');
INSERT INTO `videos` VALUES (21,'NATA Day - Bay Area CA Full Coverage Part6','https://www.youtube.com/watch?feature=player_embedded&v=uEKyVb_Nd14');
INSERT INTO `videos` VALUES (22,'NATA Day - Bay Area CA Full Coverage Part7','https://www.youtube.com/watch?feature=player_embedded&v=IaWdAo1JOqo');
INSERT INTO `videos` VALUES (23,'NATA Day - Bay Area CA Full Coverage Part8','https://www.youtube.com/watch?feature=player_embedded&v=YDhIbgl72q0');
INSERT INTO `videos` VALUES (24,'NATA 2014 Convention Convener Bala Indurti Interview with TV5 - Part1','https://www.youtube.com/watch?feature=player_embedded&v=x9iLgyaRAY8');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-02 20:04:39
