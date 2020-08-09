-- MySQL dump 10.13  Distrib 8.0.14, for macos10.14 (x86_64)
--
-- Host: localhost    Database: myc353_1
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `DELETE THIS TABLE category`
--

DROP TABLE IF EXISTS `DELETE THIS TABLE category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `DELETE THIS TABLE category` (
  `CAT_ID` int(11) NOT NULL,
  `CATEGORY_DES` varchar(20) NOT NULL,
  `CREATED_BY` varchar(20) NOT NULL,
  `END_DATE` date NOT NULL,
  `CREATED_DATE` date NOT NULL,
  `MODIFIED_DATE` date DEFAULT NULL,
  PRIMARY KEY (`CAT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DELETE THIS TABLE category`
--

LOCK TABLES `DELETE THIS TABLE category` WRITE;
/*!40000 ALTER TABLE `DELETE THIS TABLE category` DISABLE KEYS */;
INSERT INTO `DELETE THIS TABLE category` VALUES (2222,'A','TCS112','2020-07-25','2001-08-20',NULL);
/*!40000 ALTER TABLE `DELETE THIS TABLE category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accountdetails`
--

DROP TABLE IF EXISTS `accountdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `accountdetails` (
  `ACCOUNT_NUMBER` int(11) NOT NULL,
  `CVV_NUMBER` int(11) NOT NULL,
  `CARD_NAME` varchar(20) NOT NULL,
  `EXPIRY_DATE` date NOT NULL,
  `BANK_NAME` varchar(20) NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `MODIFIED_DATE` date NOT NULL,
  PRIMARY KEY (`ACCOUNT_NUMBER`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accountdetails`
--

LOCK TABLES `accountdetails` WRITE;
/*!40000 ALTER TABLE `accountdetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `accountdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appliedjobs`
--

DROP TABLE IF EXISTS `appliedjobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `appliedjobs` (
  `JOB_ID` int(11) NOT NULL,
  `USER_ID` varchar(20) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `APPLIED_DATE` date NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `UPDATE_DATE` date NOT NULL,
  PRIMARY KEY (`JOB_ID`,`USER_ID`),
  KEY `IDX_ajobs_users` (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appliedjobs`
--

LOCK TABLES `appliedjobs` WRITE;
/*!40000 ALTER TABLE `appliedjobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `appliedjobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `automatictransaction`
--

DROP TABLE IF EXISTS `automatictransaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `automatictransaction` (
  `TRANSACTION_NUMBER` varchar(20) NOT NULL,
  `USER_ID` varchar(20) NOT NULL,
  `METHOD_TYPE` varchar(20) NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `MODIFIED_DATE` date NOT NULL,
  PRIMARY KEY (`TRANSACTION_NUMBER`),
  KEY `FK_AUTO_TRANSACTION` (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `automatictransaction`
--

LOCK TABLES `automatictransaction` WRITE;
/*!40000 ALTER TABLE `automatictransaction` DISABLE KEYS */;
/*!40000 ALTER TABLE `automatictransaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(60) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Admin'),(2,'Gold Job Seeker'),(3,'Prime Job Seeker'),(4,'Basic Job Seeker'),(5,'Gold Recruiter'),(6,'Prime Recruiter');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `creditcarddetails`
--

DROP TABLE IF EXISTS `creditcarddetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `creditcarddetails` (
  `CARD_NUMBER` int(11) NOT NULL,
  `CVV_NUMBER` int(11) NOT NULL,
  `CARD_NAME` varchar(20) NOT NULL,
  `EXPIRY_DATE` date NOT NULL,
  `BANK_NAME` varchar(20) NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `MODIFIED_DATE` date NOT NULL,
  PRIMARY KEY (`CARD_NUMBER`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `creditcarddetails`
--

LOCK TABLES `creditcarddetails` WRITE;
/*!40000 ALTER TABLE `creditcarddetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `creditcarddetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employer`
--

DROP TABLE IF EXISTS `employer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `employer` (
  `EMPLOYER_ID` varchar(20) NOT NULL,
  `EMPLOYER_NAME` varchar(40) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `employer_category` int(11) DEFAULT NULL,
  `CONTACT_NUMBER` int(11) NOT NULL,
  `EMAIL_ID` varchar(20) NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `UPDATE_DATE` date DEFAULT NULL,
  PRIMARY KEY (`EMPLOYER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employer`
--

LOCK TABLES `employer` WRITE;
/*!40000 ALTER TABLE `employer` DISABLE KEYS */;
INSERT INTO `employer` VALUES ('AIRB101','AirB&B','topsecret',NULL,895623,'','2020-08-09',NULL),('APPLE001','Apple Inc.','topsecret',NULL,123456,'jobs@apple.com','2020-08-09','2020-08-10'),('FACEB101','Facebook','topsecret',NULL,85258,'mark@facebook.com','2020-08-09',NULL),('GOOGLE101','Google','topsecret',NULL,486258,'google@gmail.com','2020-08-09',NULL),('MIC101','Microsoft','topsecret',NULL,546879,'gates@microsoft.com','0000-00-00',NULL),('TCS112','TCS','######',NULL,2147483647,'ABC@TCS.COM','2010-01-01',NULL),('TWIT101','Twitter','topsecret',NULL,784512,'','2020-08-11',NULL);
/*!40000 ALTER TABLE `employer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `jobs` (
  `JOB_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(250) NOT NULL,
  `LOCATION` varchar(20) NOT NULL,
  `ORGANISATION_NAME` varchar(20) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `VACANCY` varchar(20) NOT NULL,
  `EXPERIENCE` varchar(20) NOT NULL,
  `POSTED_BY` varchar(20) NOT NULL,
  `POSTED_DATE` date NOT NULL,
  `EXPIRY_DATE` date NOT NULL,
  PRIMARY KEY (`JOB_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES (1,'Web designer','Montreal','Air B&B','Creates the layout, looks and features of a website','Next month','1 year','AIRB101','2020-08-01','2020-09-01'),(2,'Web designer','Montreal','Apple','Creates the layout, looks and features of a website','Next month','1 year','APPLE001','2020-08-01','2020-09-01'),(3,'Web designer','Montreal','Facebook','Creates the layout, looks and features of a website','Next month','1 year','FACEB101','2020-08-01','2020-09-01'),(4,'Web designer','Montreal','Google','Creates the layout, looks and features of a website','Next month','1 year','GOOGLE101','2020-08-01','2020-09-01'),(5,'Web designer','Montreal','Microsoft','Creates the layout, looks and features of a website','Next month','1 year','MIC101','2020-08-01','2020-09-01'),(6,'Web designer','Montreal','TCS','Creates the layout, looks and features of a website','Next month','1 year','TCS112','2020-08-01','2020-09-01'),(7,'Web designer','Montreal','Twitter','Creates the layout, looks and features of a website','Next month','1 year','TWIT101','2020-08-01','2020-09-01'),(8,'Software Architect','Montreal','Air B&B','Designs the architecture of the website','Next month','1 year','AIRB101','2020-08-01','2020-09-01'),(9,'Software Architect','Montreal','Apple','Designs the architecture of the website','Next month','1 year','APPLE001','2020-08-01','2020-09-01'),(10,'Software Architect','Montreal','Facebook','Designs the architecture of the website','Next month','1 year','FACEB101','2020-08-01','2020-09-01'),(11,'Software Architect','Montreal','Google','Designs the architecture of the website','Next month','1 year','GOOGLE101','2020-08-01','2020-09-01'),(12,'Software Architect','Montreal','Microsoft','Designs the architecture of the website','Next month','1 year','MIC101','2020-08-01','2020-09-01'),(13,'Software Architect','Montreal','TCS','Designs the architecture of the website','Next month','1 year','TCS112','2020-08-01','2020-09-01'),(14,'Software Architect','Montreal','Twitter','Creates the layout, looks and features of a website','Next month','1 year','TWIT101','2020-08-01','2020-09-01'),(15,'Big Honcho','Home','The Big One','','','','','2020-08-09','2020-09-09');
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offeredjobs`
--

DROP TABLE IF EXISTS `offeredjobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `offeredjobs` (
  `JOB_ID` int(11) NOT NULL,
  `USER_ID` varchar(20) NOT NULL,
  `EMPLOYER_ID` varchar(20) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `OFFERED_PACKAGE` int(11) NOT NULL,
  `JOINING_DATE` date NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `UPDATE_DATE` date NOT NULL,
  PRIMARY KEY (`JOB_ID`,`USER_ID`,`EMPLOYER_ID`),
  KEY `FK_jobs_idx` (`JOB_ID`),
  KEY `FK_employer_idx` (`EMPLOYER_ID`),
  KEY `FK_users_idx` (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offeredjobs`
--

LOCK TABLES `offeredjobs` WRITE;
/*!40000 ALTER TABLE `offeredjobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `offeredjobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `OrderNumber` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  PRIMARY KEY (`OrderID`),
  KEY `FK_orders_users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paymentmethod`
--

DROP TABLE IF EXISTS `paymentmethod`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `paymentmethod` (
  `USER_ID` varchar(20) NOT NULL,
  `PAYMENT_METHOD` varchar(20) NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `UPDATE_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paymentmethod`
--

LOCK TABLES `paymentmethod` WRITE;
/*!40000 ALTER TABLE `paymentmethod` DISABLE KEYS */;
/*!40000 ALTER TABLE `paymentmethod` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactiontable`
--

DROP TABLE IF EXISTS `transactiontable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `transactiontable` (
  `METHOD_TYPE` varchar(20) NOT NULL,
  `TRANSACTION_NUMBER` varchar(20) NOT NULL,
  `TRANSACTION_ID` int(11) NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `MODIFIED_DATE` date NOT NULL,
  KEY `FK_TRANSACTION` (`TRANSACTION_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactiontable`
--

LOCK TABLES `transactiontable` WRITE;
/*!40000 ALTER TABLE `transactiontable` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactiontable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userpayment`
--

DROP TABLE IF EXISTS `userpayment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `userpayment` (
  `USER_ID` varchar(20) NOT NULL,
  `WITHDRAW_TYPE` varchar(20) NOT NULL,
  `TRANSACTION_ID` int(11) NOT NULL,
  `AMOUNT` int(11) NOT NULL,
  `BALANCE` int(11) NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `MODIFIED_DATE` date NOT NULL,
  PRIMARY KEY (`TRANSACTION_ID`),
  KEY `FK_USERS` (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userpayment`
--

LOCK TABLES `userpayment` WRITE;
/*!40000 ALTER TABLE `userpayment` DISABLE KEYS */;
/*!40000 ALTER TABLE `userpayment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `user_id` varchar(20) NOT NULL,
  `user_category` int(11) NOT NULL,
  `user_name` varchar(80) NOT NULL,
  `user_password` varchar(80) NOT NULL,
  `EMAIL_ID` varchar(20) DEFAULT NULL,
  `CONTACT_NUMBER` int(11) DEFAULT NULL,
  `CREATE_DATE` date DEFAULT NULL,
  `MODIFIED_DATE` date DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `FK_user_status` (`user_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('admin',1,'Joe Admin','admin',NULL,NULL,NULL,NULL),('basic_seeker',4,'Liz Basic','basic',NULL,NULL,NULL,NULL),('gold_recruiter',5,'Gold Recruiter','gold',NULL,NULL,NULL,NULL),('gold_seeker',2,'Sophie Gold','gold',NULL,NULL,NULL,NULL),('prime_recruiter',6,'Prime Recruiter','prime',NULL,NULL,NULL,NULL),('prime_seeker',3,'George Prime','prime',NULL,NULL,NULL,NULL);
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

-- Dump completed on 2020-08-09 19:12:50
