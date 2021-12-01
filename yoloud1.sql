-- MySQL dump 10.13  Distrib 8.0.26, for Linux (x86_64)
--
-- Host: localhost    Database: yoloud
-- ------------------------------------------------------
-- Server version	8.0.26-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brandphoto` longtext COLLATE utf8mb4_unicode_ci,
  `companyname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offering` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonestatus` int NOT NULL DEFAULT '0',
  `emailstatus` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Test Brand','testbrand@gmail.com','/storage/brand/otPX0Y7SHQ.png','Test Brand','Owner','Gurgaon','Haryana','India','122001','7631192066','Product',0,0,'2021-09-04 16:56:27','2021-09-04 16:56:27');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campaign_infl_lists`
--

DROP TABLE IF EXISTS `campaign_infl_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `campaign_infl_lists` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cid` int unsigned DEFAULT NULL,
  `iid` int unsigned DEFAULT NULL,
  `bid` int unsigned DEFAULT NULL,
  `status` int unsigned NOT NULL DEFAULT '0',
  `contenttype` longtext COLLATE utf8mb4_unicode_ci,
  `otherdetails` longtext COLLATE utf8mb4_unicode_ci,
  `commercial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdeldate` date DEFAULT NULL,
  `precdate` date DEFAULT NULL,
  `reason` longtext COLLATE utf8mb4_unicode_ci,
  `posturl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` bigint NOT NULL DEFAULT '0',
  `likes` bigint NOT NULL DEFAULT '0',
  `comments` bigint NOT NULL DEFAULT '0',
  `save` bigint NOT NULL DEFAULT '0',
  `share` bigint NOT NULL DEFAULT '0',
  `reach` bigint NOT NULL DEFAULT '0',
  `impressions` bigint NOT NULL DEFAULT '0',
  `insphoto` longtext COLLATE utf8mb4_unicode_ci,
  `ctr` bigint NOT NULL DEFAULT '0',
  `cpm` double(10,2) NOT NULL DEFAULT '0.00',
  `engratew` double(10,2) NOT NULL DEFAULT '0.00',
  `engratewout` double(10,2) NOT NULL DEFAULT '0.00',
  `ratecreator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `yolpoints` double(4,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaign_infl_lists`
--

LOCK TABLES `campaign_infl_lists` WRITE;
/*!40000 ALTER TABLE `campaign_infl_lists` DISABLE KEYS */;
INSERT INTO `campaign_infl_lists` VALUES (1,1,10,1,13,'[\"Picture\",\"Reel\"]',NULL,'1000',NULL,NULL,'2021-09-05',NULL,'www.youtube.com',100,100,20,1000,1000,1000,1000,'IEGQrosROMwO234ePZYl.PNG',0,1000.00,0.00,0.00,'4',0.00,'2021-09-04 17:10:51','2021-09-04 17:30:07');
/*!40000 ALTER TABLE `campaign_infl_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campaigns`
--

DROP TABLE IF EXISTS `campaigns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `campaigns` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `iid` int NOT NULL,
  `campaigntitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaignobj` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaigndes` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `campstatus` int NOT NULL DEFAULT '1',
  `picked1` longtext COLLATE utf8mb4_unicode_ci,
  `scategory` longtext COLLATE utf8mb4_unicode_ci,
  `picked2` longtext COLLATE utf8mb4_unicode_ci,
  `stype` longtext COLLATE utf8mb4_unicode_ci,
  `picked3` longtext COLLATE utf8mb4_unicode_ci,
  `sage` longtext COLLATE utf8mb4_unicode_ci,
  `picked4` longtext COLLATE utf8mb4_unicode_ci,
  `smgender` longtext COLLATE utf8mb4_unicode_ci,
  `sfgender` longtext COLLATE utf8mb4_unicode_ci,
  `picked5` longtext COLLATE utf8mb4_unicode_ci,
  `slocation` longtext COLLATE utf8mb4_unicode_ci,
  `picked6` longtext COLLATE utf8mb4_unicode_ci,
  `saage` longtext COLLATE utf8mb4_unicode_ci,
  `picked7` longtext COLLATE utf8mb4_unicode_ci,
  `samgender` longtext COLLATE utf8mb4_unicode_ci,
  `safgender` longtext COLLATE utf8mb4_unicode_ci,
  `picked8` longtext COLLATE utf8mb4_unicode_ci,
  `salocation` longtext COLLATE utf8mb4_unicode_ci,
  `pproduct` longtext COLLATE utf8mb4_unicode_ci,
  `orderedby` longtext COLLATE utf8mb4_unicode_ci,
  `pprice` longtext COLLATE utf8mb4_unicode_ci,
  `crange` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cexpense` tinyint(1) NOT NULL DEFAULT '0',
  `otherinfo` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaigns`
--

LOCK TABLES `campaigns` WRITE;
/*!40000 ALTER TABLE `campaigns` DISABLE KEYS */;
INSERT INTO `campaigns` VALUES (1,1,'Test Campaign','Brand Awarness,Brand Mentions','Test Description','2021-09-04','2021-09-10',1,'true','Food,Travel',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'true','brand','true','734,4404',1,'Test','2021-09-04 17:04:59','2021-09-04 17:04:59');
/*!40000 ALTER TABLE `campaigns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `influencer_logs`
--

DROP TABLE IF EXISTS `influencer_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `influencer_logs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `iid` int unsigned NOT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `influencer_logs`
--

LOCK TABLES `influencer_logs` WRITE;
/*!40000 ALTER TABLE `influencer_logs` DISABLE KEYS */;
INSERT INTO `influencer_logs` VALUES (1,2,'Phone Number changed from  to 8072840144','2021-07-28 07:07:24','2021-07-28 07:07:24'),(2,2,'Date of Birth changed from  to 1999-07-08','2021-07-28 07:07:24','2021-07-28 07:07:24'),(3,2,'State changed from  to Tamil Nadu','2021-07-28 07:07:24','2021-07-28 07:07:24'),(4,2,'Pincode changed from  to 603002','2021-07-28 07:07:24','2021-07-28 07:07:24'),(5,3,'Date of Birth changed from  to 2000-02-14','2021-07-29 07:55:57','2021-07-29 07:55:57'),(6,5,'Email changed from manpreet.singh@yoloud.com to manpreet.singh1@yoloud.com','2021-09-04 13:22:26','2021-09-04 13:22:26'),(7,5,'Date of Birth changed from  to 1995-07-11','2021-09-04 13:22:26','2021-09-04 13:22:26'),(8,9,'Email changed from manpreet.singh@yoloud.com to manpreet.singh1@yoloud.com','2021-09-04 16:34:19','2021-09-04 16:34:19'),(9,9,'Date of Birth changed from  to 1995-07-11','2021-09-04 16:34:19','2021-09-04 16:34:19'),(10,9,'Email changed from manpreet.singh@yoloud.com to manpreet.singh12@yoloud.com','2021-09-04 16:37:29','2021-09-04 16:37:29'),(11,9,'Date of Birth changed from  to 1995-07-11','2021-09-04 16:37:29','2021-09-04 16:37:29'),(12,10,'Date of Birth changed from  to 1995-07-11','2021-09-04 16:53:27','2021-09-04 16:53:27');
/*!40000 ALTER TABLE `influencer_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `influencers`
--

DROP TABLE IF EXISTS `influencers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `influencers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `iid` int unsigned NOT NULL,
  `PID` longtext COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intrest` longtext COLLATE utf8mb4_unicode_ci,
  `primarycategory` longtext COLLATE utf8mb4_unicode_ci,
  `contentphoto` longtext COLLATE utf8mb4_unicode_ci,
  `inftype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` longtext COLLATE utf8mb4_unicode_ci,
  `occupation` longtext COLLATE utf8mb4_unicode_ci,
  `languages` longtext COLLATE utf8mb4_unicode_ci,
  `platform` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonestatus` int NOT NULL DEFAULT '0',
  `emailstatus` int NOT NULL DEFAULT '0',
  `categorystatus` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `influencers`
--

LOCK TABLES `influencers` WRITE;
/*!40000 ALTER TABLE `influencers` DISABLE KEYS */;
INSERT INTO `influencers` VALUES (1,2,NULL,'8072840144','1999-07-08','Male',NULL,'Tamil Nadu','India','603002','\"Food\"',NULL,NULL,NULL,'{\"type\":\"Bank Account Transfer\",\"value\":\"{\\\"accname\\\":\\\"\\\",\\\"accno\\\":\\\"\\\",\\\"ifsc\\\":\\\"\\\"}\"}','{\"type\":\"Student\",\"value\":\"{\\\"colgname\\\":\\\"Vinnytsia national pirgov University \\\",\\\"coursename\\\":\\\"4th year\\\",\\\"yrofjoin\\\":\\\"2018-02-01\\\",\\\"campuspro\\\":\\\"1\\\",\\\"status\\\":0}\"}','\"English,Tamil\"',NULL,0,0,0,'2021-07-28 07:03:24','2021-07-28 07:15:45'),(2,3,NULL,NULL,'2000-02-14',NULL,NULL,NULL,NULL,NULL,'\"Travel,Food\"',NULL,NULL,NULL,'{\"type\":\"Bank Account Transfer\",\"value\":\"{\\\"accname\\\":\\\"Kavya\\\",\\\"accno\\\":\\\"500101011805779\\\",\\\"ifsc\\\":\\\"CIUB0000300\\\"}\"}','{\"type\":\"Working Professional\",\"value\":\"{\\\"compname\\\":\\\"\\\",\\\"designation\\\":\\\"\\\"}\"}','\"English,Tamil\"',NULL,0,0,0,'2021-07-29 07:53:22','2021-07-29 07:55:57'),(3,4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'{\"type\":\"Bank Account Transfer\",\"status\":0,\"value\":\"{\\\"accname\\\":\\\"\\\",\\\"accno\\\":\\\"\\\",\\\"ifsc\\\":\\\"\\\"}\"}','{\"type\":\"Working Professional\",\"status\":0,\"value\":\"{\\\"compname\\\":\\\"\\\",\\\"designation\\\":\\\"\\\"}\"}',NULL,NULL,0,0,0,'2021-07-29 13:11:46','2021-07-29 13:11:46'),(4,5,NULL,NULL,'1995-07-11',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Nano','{\"type\":\"Bank Account Transfer\",\"status\":0,\"value\":\"{\\\"accname\\\":\\\"\\\",\\\"accno\\\":\\\"\\\",\\\"ifsc\\\":\\\"\\\"}\"}','{\"type\":\"Working Professional\",\"status\":0,\"value\":\"{\\\"compname\\\":\\\"\\\",\\\"designation\\\":\\\"\\\"}\"}',NULL,NULL,0,0,0,'2021-07-30 11:30:20','2021-09-04 13:22:26'),(5,6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'{\"type\":\"Bank Account Transfer\",\"status\":0,\"value\":\"{\\\"accname\\\":\\\"\\\",\\\"accno\\\":\\\"\\\",\\\"ifsc\\\":\\\"\\\"}\"}','{\"type\":\"Working Professional\",\"status\":0,\"value\":\"{\\\"compname\\\":\\\"\\\",\\\"designation\\\":\\\"\\\"}\"}',NULL,NULL,0,0,0,'2021-08-10 06:50:57','2021-08-10 06:50:57'),(6,7,NULL,'7631192046','1995-07-11','Male','Gurgaon','Haryana','India','122001',NULL,NULL,NULL,'Nano','{\"type\":\"Bank Account Transfer\",\"value\":\"{\\\"accname\\\":\\\"\\\",\\\"accno\\\":\\\"\\\",\\\"ifsc\\\":\\\"\\\"}\"}','{\"type\":\"Full Time Social Media Influencer\",\"value\":\"{\\\"colgname\\\":\\\"\\\",\\\"coursename\\\":\\\"\\\",\\\"yrofjoin\\\":\\\"\\\",\\\"campuspro\\\":null,\\\"status\\\":0}\"}',NULL,NULL,0,0,0,'2021-09-04 13:19:15','2021-09-04 13:19:15'),(7,9,NULL,NULL,'1995-07-11',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Nano','{\"type\":\"Bank Account Transfer\",\"status\":0,\"value\":\"{\\\"accname\\\":\\\"\\\",\\\"accno\\\":\\\"\\\",\\\"ifsc\\\":\\\"\\\"}\"}','{\"type\":\"Working Professional\",\"status\":0,\"value\":\"{\\\"compname\\\":\\\"\\\",\\\"designation\\\":\\\"\\\"}\"}',NULL,NULL,0,0,0,'2021-09-04 13:55:16','2021-09-04 16:37:29'),(8,10,NULL,NULL,'1995-07-11',NULL,NULL,NULL,NULL,NULL,'\"Food,Travel\"',NULL,NULL,NULL,'{\"type\":\"UPI\",\"value\":\"{\\\"fullname\\\":\\\"\\\",\\\"upiid\\\":\\\"\\\",\\\"status\\\":0}\"}','{\"type\":\"Working Professional\",\"value\":\"{\\\"compname\\\":\\\"\\\",\\\"designation\\\":\\\"\\\"}\"}',NULL,NULL,0,0,0,'2021-09-04 16:41:49','2021-09-04 16:53:27');
/*!40000 ALTER TABLE `influencers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instagram_socials`
--

DROP TABLE IF EXISTS `instagram_socials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `instagram_socials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `iid` int unsigned NOT NULL,
  `iusername` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `istatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `itype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifollowers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `iposts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `iavglike` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `iavgcmt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `iengagementrate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `iqs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ipfr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `iaudienceage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iaudienceloc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iaudiencegen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updateinsphoto` longtext COLLATE utf8mb4_unicode_ci,
  `iusernamesstatus` int NOT NULL DEFAULT '0',
  `ifollowersstatus` int NOT NULL DEFAULT '0',
  `ipostsstatus` int NOT NULL DEFAULT '0',
  `iavglikestatus` int NOT NULL DEFAULT '0',
  `iavgcmtstatus` int NOT NULL DEFAULT '0',
  `ipfrstatus` int NOT NULL DEFAULT '0',
  `iaudagestatus` int NOT NULL DEFAULT '0',
  `iaudlocstatus` int NOT NULL DEFAULT '0',
  `iaudgenestatus` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instagram_socials`
--

LOCK TABLES `instagram_socials` WRITE;
/*!40000 ALTER TABLE `instagram_socials` DISABLE KEYS */;
INSERT INTO `instagram_socials` VALUES (1,2,NULL,'0',NULL,'0','0','0','0','0',NULL,'0',NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,'2021-07-28 07:03:24','2021-07-28 07:03:24'),(2,3,NULL,'0',NULL,'0','0','0','0','0',NULL,'0',NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,'2021-07-29 07:53:22','2021-07-29 07:53:22'),(3,4,NULL,'0',NULL,'0','0','0','0','0',NULL,'0',NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,'2021-07-29 13:11:46','2021-07-29 13:11:46'),(4,5,NULL,'0',NULL,'0','0','0','0','0',NULL,'0',NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,'2021-07-30 11:30:20','2021-07-30 11:30:20'),(5,6,NULL,'0',NULL,'0','0','0','0','0',NULL,'0',NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,'2021-08-10 06:50:57','2021-08-10 06:50:57'),(6,7,NULL,'0',NULL,'0','0','0','0','0',NULL,'0',NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,'2021-09-04 13:19:15','2021-09-04 13:19:15'),(7,9,NULL,'0',NULL,'0','0','0','0','0',NULL,'0',NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,'2021-09-04 13:55:16','2021-09-04 13:55:16'),(8,10,'mannysingh','0',NULL,'0','0','0','0','0',NULL,'0','0 - 18,19 - 24,25 - 32','Gurgaon,Delhi','Male',NULL,0,0,0,0,0,0,0,0,0,'2021-09-04 16:41:49','2021-09-04 16:53:27');
/*!40000 ALTER TABLE `instagram_socials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `intrests`
--

DROP TABLE IF EXISTS `intrests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `intrests` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `intrests`
--

LOCK TABLES `intrests` WRITE;
/*!40000 ALTER TABLE `intrests` DISABLE KEYS */;
INSERT INTO `intrests` VALUES (1,'Food','2021-07-27 12:25:38','2021-07-27 12:25:38'),(2,'Travel','2021-07-27 12:25:44','2021-07-27 12:25:44'),(3,'Dancing','2021-07-27 12:25:53','2021-07-27 12:25:53');
/*!40000 ALTER TABLE `intrests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `languages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'English','2021-07-27 12:26:02','2021-07-27 12:26:02'),(2,'Spanish','2021-07-27 12:26:07','2021-07-27 12:26:07'),(3,'Tamil','2021-07-27 12:26:12','2021-07-27 12:26:12'),(4,'Hindi','2021-07-27 12:26:18','2021-07-27 12:26:18');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_03_24_192730_create_intrests_table',1),(5,'2021_03_25_042026_create_influencers_table',1),(6,'2021_04_02_090920_create_instagram_socials_table',1),(7,'2021_04_05_170618_create_new_influencers_table',1),(8,'2021_05_08_081503_create_campaigns_table',1),(9,'2021_05_11_122549_create_brands_table',1),(10,'2021_05_15_120728_create_campaign_infl_lists_table',1),(11,'2021_05_16_143131_create_notifications_table',1),(12,'2021_05_18_112512_create_jobs_table',1),(13,'2021_05_20_063418_create_languages_table',1),(14,'2021_06_12_122832_create_influencer_logs_table',1),(15,'2021_07_07_063721_create_y_f_t_socials_table',1),(16,'2021_07_09_052558_create_other_opps_table',1),(17,'2021_07_13_060202_create_social_logs_table',1),(18,'2021_07_19_140739_create_o_t_pverifies_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `new_influencers`
--

DROP TABLE IF EXISTS `new_influencers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `new_influencers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` longtext COLLATE utf8mb4_unicode_ci,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intrest` longtext COLLATE utf8mb4_unicode_ci,
  `instagram_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `languages` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `new_influencers`
--

LOCK TABLES `new_influencers` WRITE;
/*!40000 ALTER TABLE `new_influencers` DISABLE KEYS */;
/*!40000 ALTER TABLE `new_influencers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `o_t_pverifies`
--

DROP TABLE IF EXISTS `o_t_pverifies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `o_t_pverifies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `iid` int unsigned NOT NULL,
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `o_t_pverifies`
--

LOCK TABLES `o_t_pverifies` WRITE;
/*!40000 ALTER TABLE `o_t_pverifies` DISABLE KEYS */;
/*!40000 ALTER TABLE `o_t_pverifies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `other_opps`
--

DROP TABLE IF EXISTS `other_opps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `other_opps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `otitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `odes` longtext COLLATE utf8mb4_unicode_ci,
  `ocontactus` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `oppstatus` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `other_opps`
--

LOCK TABLES `other_opps` WRITE;
/*!40000 ALTER TABLE `other_opps` DISABLE KEYS */;
/*!40000 ALTER TABLE `other_opps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `social_logs`
--

DROP TABLE IF EXISTS `social_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `social_logs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `iid` int unsigned NOT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_logs`
--

LOCK TABLES `social_logs` WRITE;
/*!40000 ALTER TABLE `social_logs` DISABLE KEYS */;
INSERT INTO `social_logs` VALUES (1,10,'Instagram Username changed from  to mannysingh','2021-09-04 16:53:27','2021-09-04 16:53:27');
/*!40000 ALTER TABLE `social_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UID` longtext COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int NOT NULL DEFAULT '0',
  `profilestatus` int NOT NULL DEFAULT '0',
  `accountstatus` int NOT NULL DEFAULT '0',
  `verified` int NOT NULL DEFAULT '0',
  `notification_preference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'mail, database',
  `avatar` longtext COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin',NULL,'accounts@yoloud.com',0,NULL,'$2y$10$I7R7DxkrbWHahoh5.STEXOJTHKnXe1AVEP50oqrPgaaUagAkNGIdO',1,0,0,0,'mail, database',NULL,NULL,'2021-07-27 12:19:20','2021-07-27 12:19:20'),(2,'Aswin joel',NULL,'aswinjoel11@gmail.com',0,NULL,'$2y$10$sDjN1a1PoEhcJ4vZWMhByOgt3TSEB9gsXdf8.KDq2VxmjdOC.f6G2',0,0,0,0,'mail, database',NULL,NULL,'2021-07-28 07:03:24','2021-07-28 07:03:24'),(3,'Kavya',NULL,'kavya.lee.214@gmail.com',0,NULL,'$2y$10$C.AxYNT3boKIVayBEgIA.u76Tbnk.EzHm0LkEWjtFMX2vqueTmsP6',0,0,0,0,'mail, database',NULL,NULL,'2021-07-29 07:53:22','2021-07-29 07:53:22'),(4,'Vishaal',NULL,'12vishaal007@gmail.com',0,NULL,'$2y$10$Uz14UKsnV7tbsg7ADA7f1e5t2ZGsxXgkhYFX3Fbh4rP2so8VRTX2i',0,0,0,0,'mail, database',NULL,'qe0bCJvoKOPDSfYMPrYXek9YwlPhwnizbXTvIH7wsnFgBrxXctHFGCsVpDlP','2021-07-29 13:11:46','2021-07-29 13:11:46'),(5,'Manpreet Singh',NULL,'manpreet.singh1@yoloud.com',0,NULL,'$2y$10$HwYt3d3wH7qejCUPucsVYOhrYTMBCr0/x1Jd6GuoC2xT4FY9uujQ.',0,0,0,0,'mail, database',NULL,NULL,'2021-07-30 11:30:20','2021-09-04 13:22:26'),(6,'Rakesh',NULL,'rakeshapsara1118@gmail.com',0,NULL,'$2y$10$wXfE47YEbJRcpmcuvi23/uyrXeLjnaKt/Z/Bfs6vQNWOY4ByqqwjS',0,0,0,0,'mail, database',NULL,NULL,'2021-08-10 06:50:57','2021-08-10 06:50:57'),(7,'Test Influencer',NULL,'testinfluncer.com',0,NULL,'$2y$10$Y2JJ6OBKw.sGZ/SCHvmFheTy3wj9qrDM.eEoiwwHEz1shJ4a4qZmy',0,0,0,0,'mail, database',NULL,NULL,'2021-09-04 13:19:15','2021-09-04 13:19:15'),(9,'Manpreet Singh',NULL,'manpreet.singh12@yoloud.com',0,NULL,'$2y$10$HPkumTRMU7ntWAhKaw6Ow.FOZQ.hv7NP2jt0yAtbeirD1lVAEMaze',0,0,0,0,'mail, database',NULL,NULL,'2021-09-04 13:55:16','2021-09-04 16:37:29'),(10,'Manpreet Singh',NULL,'manpreet.singh@yoloud.com',0,NULL,'$2y$10$1pdhqfG2Bf4T2dIueEKJOO4.tJGxT5hpcZBNFxd7V4Nl6R67KtUTC',0,1,0,0,'mail, database',NULL,NULL,'2021-09-04 16:41:49','2021-09-04 16:44:02');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `y_f_t_socials`
--

DROP TABLE IF EXISTS `y_f_t_socials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `y_f_t_socials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `iid` int unsigned NOT NULL,
  `yurl` longtext COLLATE utf8mb4_unicode_ci,
  `furl` longtext COLLATE utf8mb4_unicode_ci,
  `tusername` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yurlstatus` int NOT NULL DEFAULT '0',
  `furlstatus` int NOT NULL DEFAULT '0',
  `tusernamestatus` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `y_f_t_socials`
--

LOCK TABLES `y_f_t_socials` WRITE;
/*!40000 ALTER TABLE `y_f_t_socials` DISABLE KEYS */;
INSERT INTO `y_f_t_socials` VALUES (1,2,NULL,NULL,NULL,0,0,0,'2021-07-28 07:03:24','2021-07-28 07:03:24'),(2,3,NULL,NULL,NULL,0,0,0,'2021-07-29 07:53:22','2021-07-29 07:53:22'),(3,4,NULL,NULL,NULL,0,0,0,'2021-07-29 13:11:46','2021-07-29 13:11:46'),(4,5,NULL,NULL,NULL,0,0,0,'2021-07-30 11:30:20','2021-07-30 11:30:20'),(5,6,NULL,NULL,NULL,0,0,0,'2021-08-10 06:50:57','2021-08-10 06:50:57'),(6,7,NULL,NULL,NULL,0,0,0,'2021-09-04 13:19:15','2021-09-04 13:19:15'),(7,9,NULL,NULL,NULL,0,0,0,'2021-09-04 13:55:16','2021-09-04 13:55:16'),(8,10,NULL,NULL,NULL,0,0,0,'2021-09-04 16:41:49','2021-09-04 16:41:49');
/*!40000 ALTER TABLE `y_f_t_socials` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-06  5:12:18
