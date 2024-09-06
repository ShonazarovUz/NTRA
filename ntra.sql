-- MySQL dump 10.13  Distrib 8.0.39, for Linux (x86_64)
--
-- Host: localhost    Database: ntra
-- ------------------------------------------------------
-- Server version	8.0.39-0ubuntu0.22.04.1

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
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ads` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `user_id` int DEFAULT NULL,
  `status_id` int DEFAULT NULL,
  `branch_id` int DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `rooms` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ads_status` (`status_id`),
  KEY `ads_branch` (`branch_id`),
  KEY `ads_user` (`user_id`),
  CONSTRAINT `ads_branch` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`),
  CONSTRAINT `ads_status` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  CONSTRAINT `ads_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ads`
--

LOCK TABLES `ads` WRITE;
/*!40000 ALTER TABLE `ads` DISABLE KEYS */;
INSERT INTO `ads` VALUES (1,'HOME IN TOSHKENT','developer',1,1,1,'Samarqand',100000,3,'2024-08-09 06:16:56',NULL),(2,'TOSHKENT','HOW ARE YOU',1,1,1,'toshkent',500,6,'2024-08-14 15:53:05',NULL),(3,'ROM','RENT',1,1,1,'toshkent',13,2,'2024-08-19 09:42:19',NULL),(14,'1','sa',1,1,1,'as',1,1,'2024-08-21 13:09:42',NULL),(15,'Salom','asda',1,1,1,'asda',1,1,'2024-08-21 16:25:43',NULL),(16,'2 xonalik','Sharoitlar zor',1,1,1,'Tojikiston',100,2,'2024-08-22 09:17:47',NULL);
/*!40000 ALTER TABLE `ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ads_image`
--

DROP TABLE IF EXISTS `ads_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ads_image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ads_id` int DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ads_image`
--

LOCK TABLES `ads_image` WRITE;
/*!40000 ALTER TABLE `ads_image` DISABLE KEYS */;
INSERT INTO `ads_image` VALUES (1,14,'66c5e71a9e93a___Screenshot from 2024-08-20 19-07-15.png'),(2,15,'66c61510be529___Screenshot from 2024-08-18 22-19-56.png'),(3,16,'66c7023b01b70___Screenshot from 2024-08-21 20-49-11.png');
/*!40000 ALTER TABLE `ads_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `branch` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branch`
--

LOCK TABLES `branch` WRITE;
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
INSERT INTO `branch` VALUES (1,'nasriddin','Samarqand','2024-08-09 05:46:28'),(2,'w','asd','2024-08-21 14:28:01'),(3,'as','as','2024-08-21 14:30:58'),(4,'as','as','2024-08-21 14:31:24'),(5,'as','as','2024-08-21 14:31:59'),(6,'as','as','2024-08-21 14:32:03'),(7,'as','as','2024-08-21 14:32:40'),(8,'as','as','2024-08-21 14:32:58'),(9,'as','as','2024-08-21 14:33:00'),(10,'as','Hello hello','2024-08-21 14:33:17'),(11,'as','Hello hello','2024-08-21 14:33:47'),(12,'zx','zx','2024-08-21 14:35:00'),(13,'zx','zx','2024-08-21 14:35:43'),(14,'zx','zx','2024-08-21 14:35:54'),(15,'zx','zx','2024-08-21 14:37:27'),(16,'zx','zx','2024-08-21 14:37:29'),(17,'zx','zx','2024-08-21 14:37:35'),(18,'zx','zx','2024-08-21 14:38:35'),(19,'zx','zx','2024-08-21 14:38:49'),(20,'zx','Hello hello','2024-08-21 14:51:30'),(21,'zx','Hello hello','2024-08-21 14:53:48'),(22,'dasd','ads','2024-08-21 14:55:24');
/*!40000 ALTER TABLE `branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'developer','2024-08-09 06:43:49'),(3,'aktive',NULL),(4,'aktive',NULL),(5,'aktive',NULL),(6,'aktive',NULL),(7,'Aktive',NULL),(8,'Aktive',NULL),(9,'Aktive',NULL),(10,'Aktive',NULL),(11,'un aktive',NULL),(12,'un aktive',NULL),(13,'sdfs',NULL),(14,'sdfs',NULL),(15,'as',NULL),(16,'as',NULL);
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_pk` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'nasriddin','developer','male','123415566','2024-08-09 05:17:35','2024-08-09 06:37:59',NULL,NULL),(4,'ref','rege','male','5353','2024-08-23 14:02:26',NULL,'eve@gmail.com','efr4'),(5,'Nurullayev','ehcvhe','male','937381028','2024-08-23 14:03:30',NULL,'jalol@gmail.com','efherfejvb'),(6,'jalol','ve','male','5734856358363','2024-08-25 12:18:32',NULL,'jalol@gmail.com','jalol2004'),(7,'sad','asd','male','213','2024-08-25 12:48:49',NULL,'n@gmail.com','123');
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

-- Dump completed on 2024-09-04 17:28:01
