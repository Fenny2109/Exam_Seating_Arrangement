-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: trial
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

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
-- Table structure for table `admintable`
--

DROP TABLE IF EXISTS `admintable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admintable` (
  `adminid` int(10) NOT NULL,
  `adminname` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `non` int(11) NOT NULL,
  `adminemail` varchar(100) NOT NULL,
  `image` longblob NOT NULL,
  `imgname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admintable`
--

LOCK TABLES `admintable` WRITE;
/*!40000 ALTER TABLE `admintable` DISABLE KEYS */;
INSERT INTO `admintable` VALUES (1,'fenny','fenny','Fenny Gandhi',0,'fagandhi1998@gmail.com','',''),(3,'vaidehi','vaidehi','Vaidehi Patel',0,'vspatel1608@gmail.com','',''),(2,'anjali','anjali','anjali dodiya',0,'anjalidodiya0999@gmail.com','','');
/*!40000 ALTER TABLE `admintable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studenttable`
--

DROP TABLE IF EXISTS `studenttable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `studenttable` (
  `srno` int(10) DEFAULT NULL,
  `department` varchar(22) DEFAULT NULL,
  `year` varchar(30) DEFAULT NULL,
  `rollno` varchar(50) DEFAULT NULL,
  `batch` varchar(20) DEFAULT NULL,
  `stdname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studenttable`
--

LOCK TABLES `studenttable` WRITE;
/*!40000 ALTER TABLE `studenttable` DISABLE KEYS */;
INSERT INTO `studenttable` VALUES (1,'Computer','3rd ','201602100410001','1st','Panchal Dilenkumar Dipakbhai'),(2,'Computer','3rd ','201602100410003','1st','Lamba Kishankumar Jugalkishor'),(3,'Computer','3rd ','201602100410004','1st','Multani Anas Arifbhai'),(4,'Computer','3rd ','201602100410006','1st','Joshi Vatsal Rushiraj'),(5,'Computer','3rd ','201602100410008','1st','Krunalkumar Mahendrabhai Pawar'),(6,'Computer','3rd ','201602100410013','1st','Patel Saurav Hiteshbhai'),(7,'Computer','3rd ','201602100410016','1st','Prajapati Krunalbhai Pravinbhai'),(8,'Computer','3rd ','201602100410020','1st','Mistry Shivangi Pareshkumar'),(9,'Computer','3rd ','201602100410024','1st','Patil Gaurav Shankar'),(10,'Computer','3rd ','201602100410029','1st','Parmar Shreya Anupsinh'),(11,'Computer','3rd ','201602100410031','1st','Tai Saifali Mahmad Hanif'),(12,'Computer','3rd ','201602100410033','1st','Labana Mandeepkaur Pappusing'),(13,'Computer','3rd ','201602100410042','1st','Jariwala Parth Rajeshbhai'),(14,'Computer','3rd ','201602100410043','1st','Rathi Hrutwik Champalal'),(15,'Computer','3rd ','201602100410045','1st','Rajput Bhanumati Gopalsinh'),(16,'Computer','3rd ','201602100410051','1st','Deshmukh Hiralkumari R.'),(17,'Computer','3rd ','201602100410058','2nd','Shah Meet Ashokkumar'),(18,'Computer','3rd ','201602100410063','2nd','Patel Hemansukumar N.'),(19,'Computer','3rd ','201602100410071','2nd','Badkas Shubham Divakar'),(20,'Computer','3rd ','201602100410072','2nd','Patel Jay Jitendrakumar'),(21,'Computer','3rd ','201602100410077','2nd','Diwan Shraddhaben Manojbhai'),(22,'Computer','3rd ','201602100410078','2nd','Patel Amikumari Dashrathbhai'),(23,'Computer','3rd ','201602100410081','2nd','Vairagi Archana Pruthviraj'),(24,'Computer','3rd ','201602100410083','2nd','Parmar Aniruddhsinh Prafulsinh'),(25,'Computer','3rd ','201602100410090','2nd','Patel Virenkumar Pravinbhai'),(26,'Computer','3rd ','201602100410092','2nd','Desai Freya Tushar'),(27,'Computer','3rd ','201602100410112','2nd','Tandel Ashish Kantilal'),(28,'Computer','3rd ','201602100410114','2nd','Chaudhari Parth P.'),(29,'Computer','3rd ','201602100410115','2nd','Mistry Priya Bharatbhai'),(30,'Computer','3rd ','201602100410116','2nd','Shinde Dhanshree Ravindra'),(31,'Computer','3rd ','201602100410117','2nd','Chaudhari Shivali D.'),(32,'Computer','3rd ','201602100410118','2nd','Patel Divyaben V.'),(33,'Computer','3rd ','201602100410120','2nd','Rathod Sweta R.'),(34,'Computer','3rd ','201602100410121','3rd','Dodiya Anjali Ranjitsinh'),(35,'Computer','3rd ','201602100410122','3rd','More Jignesh Rajubhai'),(36,'Computer','3rd ','201602100410124','3rd','Mahetar Aslam Salim'),(37,'Computer','3rd ','201602100410125','3rd','Chaudhari Pankaj Sanirao'),(38,'Computer','3rd ','201602100410126','3rd','Solanki Ami Rajeshbhai'),(39,'Computer','3rd ','201602100410127','3rd','Prajapati Foram A'),(40,'Computer','3rd ','201602100410129','3rd','Rathod Payal K.'),(41,'Computer','3rd ','201602100410131','3rd','Patel Vaidehi S.'),(42,'Computer','3rd ','201602100410132','3rd','Mehta Rajan S.'),(43,'Computer','3rd ','201602100410133','3rd','Gandhi Fenny A.'),(44,'Computer','3rd ','201602100410134','3rd','Vazifdar Md Maaz A.'),(45,'Computer','3rd ','201602100410137','3rd','Pawar Rucha M'),(46,'Computer','3rd ','201602100410141','3rd','Bhumika Prabhubhai'),(47,'Computer','3rd ','201502100410021','3rd','Mulla Ahmed Sohel'),(48,'Computer','3rd ','201502100410086','3rd','Sisodiya Bhuvnesh'),(49,'Computer','3rd ','201502100410093','3rd','Nayka Ravindra'),(50,'Computer','3rd ','201502100410094','3rd','Koli Rahul'),(1,'Civil','3rd','201602100310001','1st','Virani Manthan Mukeshbhai'),(2,'Civil','3rd','201602100310013','1st','Raparka Mohitkumar Chandubhai'),(3,'Civil','3rd','201602100310014','1st','Patel Dhruvitkumar Rajubhai'),(4,'Civil','3rd','201602100310017','1st','Patel Dharmeshkumar Bharatbhai'),(5,'Civil','3rd','201602100310019','1st','Chaudhari Abhaykumar Kanubhai'),(6,'Civil','3rd','201602100310020','1st','Khan Asma Mahmad Abbash'),(7,'Civil','3rd','201602100310022','1st','Patel Jaimin Mahendrabhai'),(8,'Civil','3rd','201602100310027','1st','Chaudhari Vikitkumar Umedbhai'),(9,'Civil','3rd','201602100310028','1st','Ahir Vikesh Jagdish'),(10,'Civil','3rd','201602100310032','1st','Gondaliya Dipesh Mansukhbhai'),(11,'Civil','3rd','201602100310035','1st','Patel Zenithkumar Shaileshbhai'),(12,'Civil','3rd','201602100310037','1st','Malek Khatija Abdulrauf'),(13,'Civil','3rd','201602100310041','1st','Bhatkar Pallavi Balasaheb'),(14,'Civil','3rd','201602100310045','1st','Nayi Bhardwaj Bipinkumar'),(15,'Civil','3rd','201602100310048','1st','Kalsariya Rakeshbhai Labhubhai'),(16,'Civil','3rd','201602100310050','2nd','Kheni Sameer Sanjay'),(17,'Civil','3rd','201602100310051','2nd','Patel Chandanikumari Mukeshbhai'),(18,'Civil','3rd','201602100310067','2nd','Bhadani Jenilkumar Jagdishbhai'),(19,'Civil','3rd','201602100310079','2nd','Gamit Kinjal'),(20,'Civil','3rd','201602100310088','2nd','Parmar Kajal Himmatsinh'),(21,'Civil','3rd','201602100310094','2nd','Rajput Rahul'),(22,'Civil','3rd','201602100310096','2nd','Chaudhari Devanshi Harshadbhai'),(23,'Civil','3rd','201602100310097','2nd','Borad Umang Navneetbhai'),(24,'Civil','3rd','201602100310101','2nd','Gamit Krunal'),(25,'Civil','3rd','201602100310102','2nd','Rathod Sivangi'),(26,'Civil','3rd','201602100310105','2nd','Vasava Vishal'),(27,'Civil','3rd','201602100310108','2nd','Tukadiya Brijesh'),(28,'Civil','3rd','201602100310109','2nd','Bhandari Yash A.'),(29,'Civil','3rd','201602100310115','2nd','Nehalkumari Prafullbhai Patel'),(30,'Civil','3rd','201602100310116','2nd','Patel Ritesh'),(31,'Civil','3rd','201602100310119','2nd','Chandrakant Raut'),(32,'Civil','3rd','201502100310040','2nd','Bhandari Jay'),(33,'Civil','3rd','201502100310045','2nd','Patel Damini'),(34,'Civil','3rd','201502100310088','2nd','Ankit Vishwakarma'),(1,'Electrical','3rd','201602100110001','1st','Panchal Bhavikbhai A.'),(2,'Electrical','3rd','201602100110003','1st','Patel Nilay D.'),(3,'Electrical','3rd','201602100110004','1st','Patel Nandlal S.'),(4,'Electrical','3rd','201602100110005','1st','Mistry Palak R.'),(5,'Electrical','3rd','201602100110006','1st','Mistry Akshay G.'),(6,'Electrical','3rd','201602100110012','1st','Patel Meet N.'),(7,'Electrical','3rd','201602100110014','1st','Patel Hiralkumari S.'),(8,'Electrical','3rd','201602100110019','1st','Dudhat Harshit K.'),(9,'Electrical','3rd','201602100110022','1st','Patel Ajaykumar S.'),(10,'Electrical','3rd','201602100110023','1st','Patel Vineshkumar A.'),(11,'Electrical','3rd','201602100110024','1st','Gohil Manansinh R.'),(12,'Electrical','3rd','201602100110040','1st','Patel Dhruvini M.'),(13,'Electrical','3rd','201602100110042','1st','Patel Sumit M.'),(14,'Electrical','3rd','201602100110043','1st','Patel Ankurkumar D.'),(15,'Electrical','3rd','201602100110046','1st','Halpati Mayurkumar B.'),(16,'Electrical','3rd','201602100110050','1st',' Yadav Pradyum S.'),(17,'Electrical','3rd','201602100110051','1st','Patel Yash'),(18,'Electrical','3rd','201602100110054','1st','Ghutiya Sanjay S.'),(19,'Electrical','3rd','201602100110055','1st','Baburao Ganpat Sapta.'),(20,'Electrical','3rd','201502100110013','1st','Kokani Payal'),(1,'Mechanical ','3rd','201602100210004','1st','Patel Jenish Narendrabhai'),(2,'Mechanical ','3rd','201602100210005','1st','Patel Shiv Bharatbhai'),(3,'Mechanical ','3rd','201602100210008','1st','Kalavadiya Mihir Ashwinbhai'),(4,'Mechanical ','3rd','201602100210010','1st','Vaidya Keval Dhruvkumar'),(5,'Mechanical ','3rd','201602100210012','1st','Patel Bhavin Ashokbhai'),(6,'Mechanical ','3rd','201602100210014','1st','Mahyavanshi Aishwarya A.'),(7,'Mechanical ','3rd','201602100210023','1st','Patel Jay Nareshbhai'),(8,'Mechanical ','3rd','201602100210044','1st','Kansara Yash Kalpeshkumar'),(9,'Mechanical ','3rd','201602100210052','1st','Pansuriya Roshan Nileshbhai'),(10,'Mechanical ','3rd','201602100210073','1st','Patel Fenil Umeshbhai'),(11,'Mechanical ','3rd','201602100210075','1st','Hafeji Atik Salimbhai'),(12,'Mechanical ','3rd','201602100210076','1st','Saundankar Harsh Mukeshbhai'),(13,'Mechanical ','3rd','201602100210077','1st','Chaudhari Hiren Jitubhai'),(14,'Mechanical ','3rd','201602100210083','1st','Patel Vikas Dilipbhai'),(15,'Mechanical ','3rd','201602100210084','1st','Chaudhary Jainish Jitendrabhai'),(16,'Mechanical ','3rd','201602100210086','1st','Chauhan Piyushkumar S.'),(17,'Mechanical ','3rd','201602100210091','1st','Chintaman K?Rathod'),(18,'Mechanical ','3rd','201502100210052','1st','Gajera Dhurv'),(19,'Mechanical ','3rd','201502100210054','1st','Prajapati Devarsh'),(20,'Mechanical ','3rd','201502100210062','1st','Desai Shiv'),(21,'Mechanical ','3rd','201502100210071','1st','Garwal Sunil'),(1,'Chemical','3rd','201602100510001','1st','Barajiya Sanket V'),(2,'Chemical','3rd','201602100510002','1st','Padval Jenish B'),(3,'Chemical','3rd','201602100510003','1st','Devani Dhrumit K.'),(4,'Chemical','3rd','201602100510004','1st','Bhalani Seneel S'),(5,'Chemical','3rd','201602100510005','1st','Gondaliya Sahilkumar J'),(6,'Chemical','3rd','201602100510006','1st','Mandhai Yash V'),(7,'Chemical','3rd','201602100510007','1st','Vasoya Rutvik G'),(8,'Chemical','3rd','201602100510008','1st','Ghevariya Priyank H'),(9,'Chemical','3rd','201602100510009','1st','Dobariya Parth A'),(10,'Chemical','3rd','201602100510010','1st','Patel Ishankumar J'),(11,'Chemical','3rd','201602100510011','1st','Dhaduk Viraj C'),(12,'Chemical','3rd','201602100510014','1st','Solanki Dharmendra'),(13,'Chemical','3rd','201602100510015','1st','Savan Vijaybhai S'),(14,'Chemical','3rd','201602100510016','1st','Patel Ravikumar D'),(15,'Chemical','3rd','201602100510017','1st','Panchal Neel Ajaybhai'),(16,'Chemical','3rd','201602100510018','1st','Rabari Sagar S.'),(17,'Chemical','3rd','201602100510019','1st','Soud Pathan'),(18,'Chemical','3rd','201602100510020','1st','Rajan Virani P.'),(19,'Chemical','3rd','201602100510021','1st','Patel Harshad N'),(20,'Chemical','3rd','201602100510022','1st','Jodhani Nitesh D.'),(21,'Chemical','3rd','201602100510023','1st','Valvi Vyomesh T.'),(22,'Chemical','3rd','201602100510024','1st','Dhola Deep P'),(23,'Chemical','3rd','201502100510006','1st','Mahida Dhaval'),(24,'Chemical','3rd','201502100510020','1st','Dey Rajesh'),(25,'Chemical','3rd','201502100510021','1st','Fenil Paswala');
/*!40000 ALTER TABLE `studenttable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjecttable`
--

DROP TABLE IF EXISTS `subjecttable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjecttable` (
  `year` varchar(6) NOT NULL,
  `department` varchar(30) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `subcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjecttable`
--

LOCK TABLES `subjecttable` WRITE;
/*!40000 ALTER TABLE `subjecttable` DISABLE KEYS */;
INSERT INTO `subjecttable` VALUES ('3rd','computer','Operating System','020040601'),('3rd','computer','Mobile Application Development','020040602'),('3rd','computer','Wireless Communication','020040603'),('3rd','computer','Internet Application Programming','020040501'),('3rd','computer','Microprocessor and Interface','020040502'),('3rd','computer','Software Engineering','020040503'),('3rd','computer','Application Development Technology ','020040504'),('3rd','civil','Water Supply and Sanitary Engineering','020030501'),('3rd','civil','Estimating, Costing and Valuation','020030502'),('3rd','civil','Construction Works Management','020030503'),('3rd','civil','Concrete Technology','020030504'),('3rd','civil','Design of Steel Structure','020030505'),('3rd','civil','Transportation Engineering and Planning','020030507'),('3rd','civil','Advanced Construction Technology','020030601'),('3rd','civil','Design of RCC Structure','020030602'),('3rd','civil','Environmental Engineering	','020030603'),('3rd','civil','Quality Control and Monitoring','020030604'),('3rd','civil','Building Services','020030605'),('3rd','civil','Maintanance and rehabilation of structure','020030607'),('3rd','civil','Hydrology and Watershed Management','020030608'),('3rd','civil','Solid waste Management','020030609');
/*!40000 ALTER TABLE `subjecttable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trisub`
--

DROP TABLE IF EXISTS `trisub`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trisub` (
  `year` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `from_enrollnumber` varchar(50) NOT NULL,
  `classroom` varchar(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `examdate` date NOT NULL,
  `starttime` varchar(11) NOT NULL,
  `endtime` varchar(11) NOT NULL,
  `to_enrollnumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trisub`
--

LOCK TABLES `trisub` WRITE;
/*!40000 ALTER TABLE `trisub` DISABLE KEYS */;
INSERT INTO `trisub` VALUES ('3rd','Computer','201602100410001','101','Operating System','2019-04-08','12:00','01:00','201602100410010'),('3rd','Computer','201602100410001','101','Wireless Communication','2019-04-09','12:00','01:00','201602100410010'),('3rd','Computer','201602100410001','101','Internet Application Programming','2019-04-10','12:00','01:00','201602100410010'),('3rd','Computer','201602100410001','102','Microprocessor and Interface','2019-04-11','12:00','01:00','201602100410010'),('3rd','Civil','201602100410001','102','Estimating, Costing and Valuation','2019-04-12','12:00','01:00','201602100410010');
/*!40000 ALTER TABLE `trisub` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `viewcount`
--

DROP TABLE IF EXISTS `viewcount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `viewcount` (
  `pagename` varchar(100) NOT NULL,
  `views` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viewcount`
--

LOCK TABLES `viewcount` WRITE;
/*!40000 ALTER TABLE `viewcount` DISABLE KEYS */;
INSERT INTO `viewcount` VALUES ('branchwisedata',142),('individualdata',105),('lecturehalldata',168);
/*!40000 ALTER TABLE `viewcount` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-08 23:23:31
