-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: hrms
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Temporary view structure for view `alldepartments`
--

DROP TABLE IF EXISTS `alldepartments`;
/*!50001 DROP VIEW IF EXISTS `alldepartments`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `alldepartments` AS SELECT 
 1 AS `D_name`,
 1 AS `S_name`,
 1 AS `SID`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `benefits`
--

DROP TABLE IF EXISTS `benefits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `benefits` (
  `EID` int(11) NOT NULL,
  `ret` tinyint(1) DEFAULT NULL COMMENT 'designates availability of 401k retirement plan ',
  `Vision` tinyint(1) DEFAULT NULL,
  `Dental` tinyint(1) DEFAULT NULL,
  `Temp_dis` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`EID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `benefits`
--

LOCK TABLES `benefits` WRITE;
/*!40000 ALTER TABLE `benefits` DISABLE KEYS */;
/*!40000 ALTER TABLE `benefits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credentials`
--

DROP TABLE IF EXISTS `credentials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `credentials` (
  `Languages` varchar(15) NOT NULL,
  `Year_exper` int(11) NOT NULL,
  `Educ_level` varchar(15) NOT NULL,
  `Certificattions` varchar(30) NOT NULL,
  `Reference` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credentials`
--

LOCK TABLES `credentials` WRITE;
/*!40000 ALTER TABLE `credentials` DISABLE KEYS */;
/*!40000 ALTER TABLE `credentials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `DID` int(11) NOT NULL,
  `D_name` varchar(15) NOT NULL,
  `D_mgrID` int(11) DEFAULT NULL,
  `SID` int(11) NOT NULL,
  PRIMARY KEY (`DID`,`SID`),
  UNIQUE KEY `DID_UNIQUE` (`DID`),
  KEY `SID_idx` (`SID`),
  KEY `mgrID_idx` (`D_mgrID`),
  CONSTRAINT `SID` FOREIGN KEY (`SID`) REFERENCES `store` (`SID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `mgr_ID` FOREIGN KEY (`D_mgrID`) REFERENCES `employee` (`EID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (1,'Deli',NULL,2740),(2,'Seafood',NULL,2562),(3,'Produce',NULL,2932),(5,'Pharmacy',NULL,3201);
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `EID` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(15) NOT NULL,
  `m_initial` varchar(1) DEFAULT NULL,
  `l_name` varchar(15) NOT NULL,
  `E_ssn` char(9) NOT NULL,
  `E_phone` char(10) NOT NULL,
  `E_city` varchar(15) NOT NULL,
  `E_street` varchar(40) NOT NULL,
  `E_state` varchar(5) NOT NULL,
  `E_email` varchar(40) NOT NULL,
  `Date_of_hire` date NOT NULL,
  `D_ID` int(11) DEFAULT NULL,
  `S_ID` int(11) DEFAULT NULL,
  `dbirth` date NOT NULL,
  `gender` char(1) NOT NULL,
  `dep_contact` char(15) NOT NULL,
  `disability` char(1) DEFAULT NULL,
  `ethnicity` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`EID`,`E_ssn`),
  UNIQUE KEY `EID_UNIQUE` (`EID`),
  KEY `D_ID_idx` (`D_ID`),
  KEY `S_ID_idx` (`S_ID`),
  CONSTRAINT `D_ID` FOREIGN KEY (`D_ID`) REFERENCES `department` (`DID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `S_ID` FOREIGN KEY (`S_ID`) REFERENCES `department` (`SID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (1,'Cloud','S','Strife','523669584','7708546969','Atlanta','45 Midgard Way','GA','cstrife2@publix.com','2014-05-02',1,2740,'1985-04-05','m','4042422333','N','Asian'),(2,'Mike','T','Ter','543431212','4042423322','Stone Mountain','123 Waward Lane','GA','mter@kroger.com','2011-04-01',2,2562,'1991-03-02','m','4042333236','N','African American'),(3,'Mark','A','Williams','332478422','6784342337','Seatle','323 Maubery Rd','WA','wert@ingle.com','2009-03-05',5,3201,'1970-04-01','m','4045672099','Y','White'),(5,'Lisa','k','Parker','883235033','4040199910','Mark','534 Can Rd','TX','Lparker@yahoo.com','2008-02-05',3,2932,'1956-02-06','f','6782350024','N','White');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `position`
--

DROP TABLE IF EXISTS `position`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `position` (
  `POSID` int(11) NOT NULL,
  `POS_name` varchar(15) NOT NULL,
  `POS_type` varchar(15) NOT NULL,
  `Job_Type` varchar(45) NOT NULL,
  `Hourly` int(11) DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL,
  `Manager` varchar(15) NOT NULL,
  `EID` int(11) DEFAULT NULL,
  PRIMARY KEY (`POSID`),
  KEY `hiredPosition_idx` (`EID`),
  CONSTRAINT `hiredPosition` FOREIGN KEY (`EID`) REFERENCES `employee` (`EID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `position`
--

LOCK TABLES `position` WRITE;
/*!40000 ALTER TABLE `position` DISABLE KEYS */;
/*!40000 ALTER TABLE `position` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `u_name` varchar(40) NOT NULL,
  `s_id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `u_pass` varchar(40) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `store`
--

DROP TABLE IF EXISTS `store`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `store` (
  `SID` int(11) NOT NULL,
  `S_name` varchar(15) NOT NULL,
  `S_phone` char(10) NOT NULL,
  `S_mgrID` int(11) DEFAULT NULL,
  `S_city` varchar(45) NOT NULL,
  `S_state` varchar(45) NOT NULL,
  `S_zip` varchar(45) NOT NULL,
  PRIMARY KEY (`SID`),
  KEY `mgrID_idx` (`S_mgrID`),
  CONSTRAINT `mgrID` FOREIGN KEY (`S_mgrID`) REFERENCES `employee` (`EID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `store`
--

LOCK TABLES `store` WRITE;
/*!40000 ALTER TABLE `store` DISABLE KEYS */;
INSERT INTO `store` VALUES (2562,'Kroger','2323243434',NULL,'Atlanta','GA','50054'),(2740,'Publix','4731533464',NULL,'Columbus','OH','90028'),(2932,'Walmart','3032323332',NULL,'Birmingham','AL','40232'),(3201,'Ingles','4042028432',NULL,'Seatle','WA','90223');
/*!40000 ALTER TABLE `store` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `training`
--

DROP TABLE IF EXISTS `training`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `training` (
  `L_train` int(11) NOT NULL,
  `T_start` date NOT NULL,
  `Trainer` varchar(15) NOT NULL,
  `POSID` int(11) NOT NULL,
  PRIMARY KEY (`POSID`),
  CONSTRAINT `POSID` FOREIGN KEY (`POSID`) REFERENCES `position` (`POSID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `training`
--

LOCK TABLES `training` WRITE;
/*!40000 ALTER TABLE `training` DISABLE KEYS */;
/*!40000 ALTER TABLE `training` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `alldepartments`
--

/*!50001 DROP VIEW IF EXISTS `alldepartments`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `alldepartments` AS select `a`.`D_name` AS `D_name`,`b`.`S_name` AS `S_name`,`b`.`SID` AS `SID` from (`department` `a` join `store` `b` on((`b`.`SID` = `a`.`SID`))) */;
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

-- Dump completed on 2017-04-20 17:30:13
