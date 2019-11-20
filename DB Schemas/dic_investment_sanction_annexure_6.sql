CREATE DATABASE  IF NOT EXISTS `dic_investment_sanction` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `dic_investment_sanction`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: dic_investment_sanction
-- ------------------------------------------------------
-- Server version	5.6.26-log

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
-- Table structure for table `annexure_6`
--

DROP TABLE IF EXISTS `annexure_6`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `annexure_6` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameOfEnterprise` varchar(30) DEFAULT NULL,
  `addressOfEnterprise` varchar(60) DEFAULT NULL,
  `letterNo` varchar(20) DEFAULT NULL,
  `dtd` varchar(20) DEFAULT NULL,
  `disbursedAmt` int(11) DEFAULT NULL,
  `termLoanSancDate` varchar(10) DEFAULT NULL,
  `termLoanSancAmt` int(11) DEFAULT NULL,
  `loanDisbDate` varchar(20) DEFAULT NULL,
  `loanDisbAmt` int(11) DEFAULT NULL,
  `landAppr` int(11) DEFAULT NULL,
  `landActu` int(11) DEFAULT NULL,
  `buildingAppr` int(11) DEFAULT NULL,
  `buildingActu` int(11) DEFAULT NULL,
  `plantAndMachAppr` int(11) DEFAULT NULL,
  `plantAndMachActu` int(11) DEFAULT NULL,
  `otherAssetsAppr` int(11) DEFAULT NULL,
  `otherAssetsActu` int(11) DEFAULT NULL,
  `totalAppr` int(11) DEFAULT NULL,
  `totalActu` int(11) DEFAULT NULL,
  `m_s` varchar(30) DEFAULT NULL,
  `entreLoc` varchar(30) DEFAULT NULL,
  `estCost` int(11) DEFAULT NULL,
  `declarationPlace` varchar(20) DEFAULT NULL,
  `declarationDate` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `annexure_6`
--

LOCK TABLES `annexure_6` WRITE;
/*!40000 ALTER TABLE `annexure_6` DISABLE KEYS */;
/*!40000 ALTER TABLE `annexure_6` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-20 11:26:43
