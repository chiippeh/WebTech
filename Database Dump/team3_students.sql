-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: cs3-dev.ict.ru.ac.za    Database: team3
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `students` (
  `student_id` int NOT NULL AUTO_INCREMENT,
  `student_num` varchar(8) NOT NULL,
  `student_fname` varchar(45) NOT NULL,
  `student_lname` varchar(45) NOT NULL,
  `student_email` varchar(45) NOT NULL,
  `student_password` varchar(45) NOT NULL,
  `student_image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `user_id_UNIQUE` (`student_id`),
  UNIQUE KEY `student_num_UNIQUE` (`student_num`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (15,'g23a9558','Admin','Admin','admin@gmail.com','664819d8c5343676c9225b5ed00a5cdc6f3a1ff3','1697046532download.jpg'),(39,'g23u7665','Secret','User','fml@gmail.com','17fcc01e04f63dc2340398ad89ba09f0b585f966','1697099250spoon.jpg'),(40,'g23d7944','Jo','Davis','locksmith@yahoo.com','17fcc01e04f63dc2340398ad89ba09f0b585f966','1697100551spoon.jpg'),(41,'g23t7906','testy','test','testystest@gmail.com','6d782b3b3e8a684960ca76d990bc7cf2eab024bf','1697101872mankyrat.png'),(42,'g23p4153','Present','Presentation','presentation@gmail.com','c9c9ac41999a141aefe4bebd1c85bb5121eb2884','1697107112stonetown.png'),(43,'g23p3558','present','present','present@gmail.com','56e0df0c34c36799244a032bdc5feb7d9e7844e3','1697112751picowhite.png'),(44,'g23s7973','Joe','Soap','joesoap@gmail.com','cb75ccaf2cd133e73865cd262a8a663eb19f4570','1697120591justtname1.png'),(45,'g23g9913','Alex','Guess','alexguez@gmail.com','00701d5745226eabc8d65ab6e93cdefee4a154b9','1697126839AfricaMonth.png'),(46,'g23d4300','Mila','Davies','Help@gmail.com','17fcc01e04f63dc2340398ad89ba09f0b585f966','1697177271IMG_0048.jpeg'),(47,'g23s9611','John','Snow','got@gmail.com','17fcc01e04f63dc2340398ad89ba09f0b585f966','1697179829'),(48,'g23w9153','Please','Work','noimage@gmail.com','17fcc01e04f63dc2340398ad89ba09f0b585f966','1697185938'),(49,'g23t8911','Last','Try','pls@hotmail.com','17fcc01e04f63dc2340398ad89ba09f0b585f966','1697186319'),(50,'g23r2277','For','Real','lasttry@pls.com','17fcc01e04f63dc2340398ad89ba09f0b585f966',''),(51,'g23g9699','Im','Giving-up','afterthis@gmail.com','17fcc01e04f63dc2340398ad89ba09f0b585f966',''),(52,'g23c3009','final','countdown','ajsh@gmail.com','17fcc01e04f63dc2340398ad89ba09f0b585f966',NULL),(53,'g23j4673','Manu','Jourdan','manu@gmail.com','9eb7601d7b4f92c85359053429be94626e081e58','1697192960'),(54,'g23t6372','Test','Test','test@gmail.om','0c6ba03885f3aae765fbf20f07f514a44dbda30a','1697212020cat.jpg'),(55,'g23e7238','Wynne','EEEEEE','wynneeeee@gmail.com','d4491943139d724d7c7054704605291bb57ed48d','1697361700HandDrawnPopulationPyramid (1).png'),(56,'g23d3688','mila','davies','testes@onlyfans.com','17fcc01e04f63dc2340398ad89ba09f0b585f966',NULL),(57,'g23b3579','Lousie','Bermont','frenchie@paris.com','8efa740dcc62783b218af0e90afc0a8b22b09145',NULL);
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-18 14:42:37
