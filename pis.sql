CREATE DATABASE  IF NOT EXISTS `pis` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `pis`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: pis
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `adminid` int(11) NOT NULL,
  `adminlname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adminfname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adminmname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adminemail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adminpass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adminaddress` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admingender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `adminnumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (123456,'Badar','Jonadene','Alde','nadenebadar@yahoo.com','40bd001563085fc35165329ea1ff5c5ecbdbbeef','Cebu City','Female','09469147354');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `doctor_fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_mname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_contact` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `field` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctors`
--

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT INTO `doctors` VALUES (1,'Jonadene','Alde','Badar','Cebu City','09469147354',4,'2015-10-01 09:35:02','2015-10-01 09:35:02');
/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medspecialties`
--

DROP TABLE IF EXISTS `medspecialties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medspecialties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `med_specialty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `med_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medspecialties`
--

LOCK TABLES `medspecialties` WRITE;
/*!40000 ALTER TABLE `medspecialties` DISABLE KEYS */;
INSERT INTO `medspecialties` VALUES (1,'Allergy & Immunology','Allergic and immunologic diseases and their respiratory complications (such as pollen, chemical and food allergies, asthma and AIDS).'),(2,'Anesthesia','Anesthesia or relief of pain during surgery and childbirth, and control of paid due to various causes.'),(3,'Cardiology','Diseases of the heart and blood vessels.'),(4,'Dermatology','Diseases of the skin.'),(5,'Emergency Medicine','Diseases that are acute medical or surgical conditions or injuries that require urgent or immediate care (usually in a hospital emergency room).'),(6,'Endocrinology and Metabolism','Diseases of the internal glands of the body, including diabetes mellitus.'),(7,'Family Practice','All diseases and related total health care of an individual and the family.'),(8,'Gastroenterology','Diseases of the digestive tract, including the stomach, bowel, liver and pancreas.'),(9,'General Practice','All diseases and related total health care of an individual and the family.'),(10,'Geriatric Medicine','Diseases of the elderly.'),(11,'Obstetrics and Gynecology','Normal and abnormal pregnancy, diseases of the female reproductive system and fertility disorders.');
/*!40000 ALTER TABLE `medspecialties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2015_09_06_161042_CreateAdminsTable',1),('2015_09_27_132416_CreatePatientsTable',1),('2015_10_01_151209_CreateDoctorsTable',1),('2015_10_01_163321_CreateMedSpecialtiesTable',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patients` (
  `patientid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `plname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pfname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pmname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paddress` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pbirth` date NOT NULL,
  `pcontact` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`patientid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patients`
--

LOCK TABLES `patients` WRITE;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-02  1:47:00
