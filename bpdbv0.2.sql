CREATE DATABASE  IF NOT EXISTS `betjepong` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `betjepong`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: betjepong
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `lid`
--

DROP TABLE IF EXISTS `lid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `v_naam` char(30) NOT NULL,
  `tussenvoegsel` char(10) DEFAULT NULL,
  `a_naam` char(30) NOT NULL,
  `adres` char(30) NOT NULL,
  `huisnummer` int(11) NOT NULL,
  `postcode` char(6) NOT NULL,
  `woonplaats` char(30) NOT NULL,
  `email` char(45) NOT NULL,
  `telefoon` char(10) NOT NULL,
  `punten_gescoord` int(11) DEFAULT '0',
  `wedstrijden_gespeeld` int(11) DEFAULT '0',
  `wedstrijden_gewonnen` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lid`
--

LOCK TABLES `lid` WRITE;
/*!40000 ALTER TABLE `lid` DISABLE KEYS */;
INSERT INTO `lid` VALUES (1,'Bob','van','A','boblaan',44,'4325ec','zoetermeer','bob@bobmail.nl','0610954539',0,0,0),(2,'Sang','de','mang','sanglaan',45,'2341hj','zoetermeer','sang@phang.com','0610834519',0,0,0),(3,'Shiv','','Pls','dfa',4,'2242ik','Den haag','fasdc','863435',0,0,0),(4,'Kim','','Ruiten','fdsa',3,'2422lk','Den helder','xcvdfa','37573',0,0,0),(5,'Daphne','','Schoppe','fdsfc',2,'5436hk','Den haag','vcxvee','45637',0,0,0),(6,'Jasper','','Klaver','dfacx',1,'2345xf','Rotterdam','vzxcveq','3545',0,0,0),(7,'Jeff','','Harten','afdsf',4,'fadsf','fadsfasdff','fdasfs','545',0,0,0);
/*!40000 ALTER TABLE `lid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tafel`
--

DROP TABLE IF EXISTS `tafel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tafel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` char(30) NOT NULL,
  `status` char(30) NOT NULL,
  `datum_toegevoegd` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tafel`
--

LOCK TABLES `tafel` WRITE;
/*!40000 ALTER TABLE `tafel` DISABLE KEYS */;
/*!40000 ALTER TABLE `tafel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lid1` int(11) NOT NULL,
  `lid2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lid1` (`lid1`),
  KEY `lid2` (`lid2`),
  CONSTRAINT `team_ibfk_1` FOREIGN KEY (`lid1`) REFERENCES `lid` (`id`),
  CONSTRAINT `team_ibfk_2` FOREIGN KEY (`lid2`) REFERENCES `lid` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `toernooi`
--

DROP TABLE IF EXISTS `toernooi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `toernooi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(30) NOT NULL,
  `datum` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `datum` (`datum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toernooi`
--

LOCK TABLES `toernooi` WRITE;
/*!40000 ALTER TABLE `toernooi` DISABLE KEYS */;
/*!40000 ALTER TABLE `toernooi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wedstrijd`
--

DROP TABLE IF EXISTS `wedstrijd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wedstrijd` (
  `toernooi_id` int(11) NOT NULL AUTO_INCREMENT,
  `tijd` time NOT NULL,
  `tafel_id` int(11) NOT NULL,
  `team1` int(11) NOT NULL,
  `team2` int(11) NOT NULL,
  `punten_team1` int(11) NOT NULL,
  `punten_team2` int(11) NOT NULL,
  PRIMARY KEY (`toernooi_id`,`tijd`,`tafel_id`),
  KEY `team1_idx` (`team1`,`team2`),
  KEY `team2` (`team2`),
  KEY `tafel_id` (`tafel_id`),
  CONSTRAINT `wedstrijd_ibfk_1` FOREIGN KEY (`team1`) REFERENCES `team` (`id`),
  CONSTRAINT `wedstrijd_ibfk_2` FOREIGN KEY (`team2`) REFERENCES `team` (`id`),
  CONSTRAINT `wedstrijd_ibfk_3` FOREIGN KEY (`tafel_id`) REFERENCES `tafel` (`id`),
  CONSTRAINT `wedstrijd_ibfk_4` FOREIGN KEY (`toernooi_id`) REFERENCES `toernooi` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wedstrijd`
--

LOCK TABLES `wedstrijd` WRITE;
/*!40000 ALTER TABLE `wedstrijd` DISABLE KEYS */;
/*!40000 ALTER TABLE `wedstrijd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `werknemer`
--

DROP TABLE IF EXISTS `werknemer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `werknemer` (
  `email` char(45) NOT NULL,
  `password` char(45) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `werknemer`
--

LOCK TABLES `werknemer` WRITE;
/*!40000 ALTER TABLE `werknemer` DISABLE KEYS */;
/*!40000 ALTER TABLE `werknemer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'betjepong'
--

--
-- Dumping routines for database 'betjepong'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-14 23:18:59
