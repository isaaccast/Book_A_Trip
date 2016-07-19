-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: 127.0.0.1    Database: trips
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `des`
--

DROP TABLE IF EXISTS `des`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `des` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place` varchar(255) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `plan` text,
  `planned_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `des`
--

LOCK TABLES `des` WRITE;
/*!40000 ALTER TABLE `des` DISABLE KEYS */;
INSERT INTO `des` VALUES (5,'Savannah, GA','2016-04-29 00:00:00','2016-04-30 00:00:00','Tour historic downtown','Isaac Castaneda','2016-04-27 09:58:45','2016-04-27 09:58:45'),(6,'Bahamas','2016-05-13 00:00:00','2016-05-21 00:00:00','Lay out on the beach','Isaac Castaneda','2016-04-27 10:04:41','2016-04-27 10:04:41'),(7,'Italy','2016-04-30 00:00:00','2016-05-13 00:00:00','Eat italian food','Amy Castaneda','2016-04-27 10:06:32','2016-04-27 10:06:32'),(8,'Miami, FL','2016-05-13 00:00:00','2016-05-20 00:00:00','Check out the beaches ','Jose Zamora','2016-04-27 11:10:11','2016-04-27 11:10:11'),(9,'Madrid, Spain','2016-06-17 00:00:00','2016-08-05 00:00:00','Run with bulls, ole!','Marco Castaneda','2016-04-27 11:23:04','2016-04-27 11:23:04'),(10,'Rome','2016-04-30 00:00:00','2016-05-14 00:00:00','Check out the beaches ','Marco Castaneda','2016-04-27 12:20:58','2016-04-27 12:20:58');
/*!40000 ALTER TABLE `des` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trips`
--

DROP TABLE IF EXISTS `trips`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trips` (
  `user_id` int(11) NOT NULL,
  `des_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`des_id`),
  KEY `fk_users_has_des_des1_idx` (`des_id`),
  KEY `fk_users_has_des_users_idx` (`user_id`),
  CONSTRAINT `fk_users_has_des_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_des_des1` FOREIGN KEY (`des_id`) REFERENCES `des` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trips`
--

LOCK TABLES `trips` WRITE;
/*!40000 ALTER TABLE `trips` DISABLE KEYS */;
INSERT INTO `trips` VALUES (1,5),(2,5),(3,5),(4,5),(1,6),(4,6),(2,7),(3,8),(4,9),(4,10);
/*!40000 ALTER TABLE `trips` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Isaac Castaneda','isaaccast','5f4dcc3b5aa765d61d8327deb882cf99','2016-04-27 09:12:20','2016-04-27 09:12:20'),(2,'Amy Castaneda','amycast','5f4dcc3b5aa765d61d8327deb882cf99','2016-04-27 10:05:12','2016-04-27 10:05:12'),(3,'Jose Zamora','jzz','5f4dcc3b5aa765d61d8327deb882cf99','2016-04-27 11:08:38','2016-04-27 11:08:38'),(4,'Marco Castaneda','marcop','5f4dcc3b5aa765d61d8327deb882cf99','2016-04-27 11:22:22','2016-04-27 11:22:22');
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

-- Dump completed on 2016-04-27 13:00:50
