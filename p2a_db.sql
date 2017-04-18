/*
SQLyog Ultimate v10.42 
MySQL - 5.6.26 : Database - p2a_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `kdadmin` varchar(5) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kdadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`kdadmin`,`nama`,`username`,`password`) values ('ADM01','Administrator','admin','81e95835046de8e21179722d66abaa3bfb7856a3');

/*Table structure for table `register` */

DROP TABLE IF EXISTS `register`;

CREATE TABLE `register` (
  `idreg` int(10) NOT NULL AUTO_INCREMENT,
  `institution` varchar(100) DEFAULT NULL,
  `nameofcp` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `s_title` varchar(10) DEFAULT NULL,
  `s_fname` varchar(30) DEFAULT NULL,
  `s_lname` varchar(30) DEFAULT NULL,
  `s_gender` enum('Male','Female') DEFAULT NULL,
  `s_position` varchar(50) DEFAULT NULL,
  `s_email` varchar(50) DEFAULT NULL,
  `s_telp` varchar(15) DEFAULT NULL,
  `s_mobile` varchar(15) DEFAULT NULL,
  `s_foodrest` text,
  `s_package` varchar(50) DEFAULT NULL,
  `s_arrival` text,
  `s_departure` text,
  `c_title` varchar(10) DEFAULT NULL,
  `c_fname` varchar(30) DEFAULT NULL,
  `c_lname` varchar(30) DEFAULT NULL,
  `c_gender` enum('Male','Female') DEFAULT NULL,
  `c_position` varchar(50) DEFAULT NULL,
  `c_email` varchar(50) DEFAULT NULL,
  `c_telp` varchar(15) DEFAULT NULL,
  `c_mobile` varchar(15) DEFAULT NULL,
  `c_foodrest` text,
  `c_package` varchar(50) DEFAULT NULL,
  `c_arrival` text,
  `c_departure` text,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idreg`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `register` */

insert  into `register`(`idreg`,`institution`,`nameofcp`,`position`,`email`,`mobile`,`s_title`,`s_fname`,`s_lname`,`s_gender`,`s_position`,`s_email`,`s_telp`,`s_mobile`,`s_foodrest`,`s_package`,`s_arrival`,`s_departure`,`c_title`,`c_fname`,`c_lname`,`c_gender`,`c_position`,`c_email`,`c_telp`,`c_mobile`,`c_foodrest`,`c_package`,`c_arrival`,`c_departure`,`create_at`,`update_at`) values (2,'Universitas PGRI Semarangs','Parjono','Righttor','parjono@gmail.com','087833225300','Mr.','Maheswari','','Male','Mahasiswa','maheswari@gmail.com','','087833225300','Kerang','2','pokoke1','pokoke1','Mr.','Parjono','','Male','Dosen','dosen@gmail.com','','087833225300','bubur','1','pokoke2','pokoke2','2017-04-18 16:33:34','2017-04-18 16:33:34'),(3,'Univ Maret yes','dsa','dsa','fahmi.foel@gmail.com','432432','Mr.','dsa','','Male','dsad','fahmi.foel@gmail.com','','432432','dasd','2','dsa','dsa','Prof.','dsa','','Male','das','fahmi.foel@gmail.com','','432432','dsad','1','dsa','ds','2017-04-18 15:45:23','2017-04-18 15:45:23'),(6,'Universitas Semarang','Paijo','Leader','paijo@gmail.com','087833225300','Mr.','Ridwan','Kamil','Male','Student','ridwan@gmail.com','087833225300','087833225300','fastfood','1','Saturday, 16:00 ASIA','Saturday, 16:00 ASIA','Prof.','Suprana','Lala','Male','Coordinator','suprahonda@gmail.com','087833225300','087833225300','junkfood','1','Saturday, 16:00 ASIA','Saturday, 16:00 ASIA','2017-04-18 16:57:45','0000-00-00 00:00:00'),(7,'Universitas Semarang','Paijo','Leader','paijo@gmail.com','087833225300','Mr.','Ridwan','Kamil','Male','Student','ridwan@gmail.com','087833225300','087833225300','fastfood','1','Saturday, 16:00 ASIA','Saturday, 16:00 ASIA','Prof.','Suprana','Lala','Male','Coordinator','suprahonda@gmail.com','087833225300','087833225300','junkfood','1','Saturday, 16:00 ASIA','Saturday, 16:00 ASIA','2017-04-18 16:57:45','0000-00-00 00:00:00'),(8,'Universitas Semarang','Paijo','Leader','paijo@gmail.com','087833225300','Mr.','Ridwan','Kamil','Male','Student','ridwan@gmail.com','087833225300','087833225300','fastfood','1','Saturday, 16:00 ASIA','Saturday, 16:00 ASIA','Prof.','Suprana','Lala','Male','Coordinator','suprahonda@gmail.com','087833225300','087833225300','junkfood','1','Saturday, 16:00 ASIA','Saturday, 16:00 ASIA','2017-04-18 16:57:45','0000-00-00 00:00:00'),(9,'Univ Maret yes','dsa','dsa','fahmi.foel@gmail.com','432432','Mr.','dsa','','Male','dsad','fahmi.foel@gmail.com','','432432','dasd','2','dsa','dsa','Prof.','dsa','','Male','das','fahmi.foel@gmail.com','','432432','dsad','1','dsa','ds','2017-04-18 15:45:23','2017-04-18 15:45:23'),(10,'Universitas PGRI Semarangs','Parjono','Righttor','parjono@gmail.com','087833225300','Mr.','Maheswari','','Male','Mahasiswa','maheswari@gmail.com','','087833225300','Kerang','2','pokoke1','pokoke1','Mr.','Parjono','','Male','Dosen','dosen@gmail.com','','087833225300','bubur','1','pokoke2','pokoke2','2017-04-18 16:33:34','2017-04-18 16:33:34'),(11,'Universitas PGRI Semarangs','Parjono','Righttor','parjono@gmail.com','087833225300','Mr.','Maheswari','','Male','Mahasiswa','maheswari@gmail.com','','087833225300','Kerang','2','pokoke1','pokoke1','Mr.','Parjono','','Male','Dosen','dosen@gmail.com','','087833225300','bubur','1','pokoke2','pokoke2','2017-04-18 16:33:34','2017-04-18 16:33:34'),(12,'Universitas PGRI Semarangs','Parjono','Righttor','parjono@gmail.com','087833225300','Mr.','Maheswari','','Male','Mahasiswa','maheswari@gmail.com','','087833225300','Kerang','2','pokoke1','pokoke1','Mr.','Parjono','','Male','Dosen','dosen@gmail.com','','087833225300','bubur','1','pokoke2','pokoke2','2017-04-18 16:33:34','2017-04-18 16:33:34'),(13,'Univ Maret yes','dsa','dsa','fahmi.foel@gmail.com','432432','Mr.','dsa','','Male','dsad','fahmi.foel@gmail.com','','432432','dasd','2','dsa','dsa','Prof.','dsa','','Male','das','fahmi.foel@gmail.com','','432432','dsad','1','dsa','ds','2017-04-18 15:45:23','2017-04-18 15:45:23'),(14,'Universitas Semarang','Paijo','Leader','paijo@gmail.com','087833225300','Mr.','Ridwan','Kamil','Male','Student','ridwan@gmail.com','087833225300','087833225300','fastfood','1','Saturday, 16:00 ASIA','Saturday, 16:00 ASIA','Prof.','Suprana','Lala','Male','Coordinator','suprahonda@gmail.com','087833225300','087833225300','junkfood','1','Saturday, 16:00 ASIA','Saturday, 16:00 ASIA','2017-04-18 16:57:45','0000-00-00 00:00:00'),(15,'Universitas Semarang','Paijo','Leader','paijo@gmail.com','087833225300','Mr.','Ridwan','Kamil','Male','Student','ridwan@gmail.com','087833225300','087833225300','fastfood','1','Saturday, 16:00 ASIA','Saturday, 16:00 ASIA','Prof.','Suprana','Lala','Male','Coordinator','suprahonda@gmail.com','087833225300','087833225300','junkfood','1','Saturday, 16:00 ASIA','Saturday, 16:00 ASIA','2017-04-18 16:57:45','0000-00-00 00:00:00'),(16,'Universitas Semarang','Paijo','Leader','paijo@gmail.com','087833225300','Mr.','Ridwan','Kamil','Male','Student','ridwan@gmail.com','087833225300','087833225300','fastfood','1','Saturday, 16:00 ASIA','Saturday, 16:00 ASIA','Prof.','Suprana','Lala','Male','Coordinator','suprahonda@gmail.com','087833225300','087833225300','junkfood','1','Saturday, 16:00 ASIA','Saturday, 16:00 ASIA','2017-04-18 16:57:45','0000-00-00 00:00:00'),(17,'Universitas PGRI Semarangs','Parjono','Righttor','parjono@gmail.com','087833225300','Mr.','Maheswari','','Male','Mahasiswa','maheswari@gmail.com','','087833225300','Kerang','2','pokoke1','pokoke1','Mr.','Parjono','','Male','Dosen','dosen@gmail.com','','087833225300','bubur','1','pokoke2','pokoke2','2017-04-18 16:33:34','2017-04-18 16:33:34'),(18,'Universitas PGRI Semarangs','Parjono','Righttor','parjono@gmail.com','087833225300','Mr.','Maheswari','','Male','Mahasiswa','maheswari@gmail.com','','087833225300','Kerang','2','pokoke1','pokoke1','Mr.','Parjono','','Male','Dosen','dosen@gmail.com','','087833225300','bubur','1','pokoke2','pokoke2','2017-04-18 16:33:34','2017-04-18 16:33:34'),(19,'Universitas PGRI Semarangs','Parjono','Righttor','parjono@gmail.com','087833225300','Mr.','Maheswari','','Male','Mahasiswa','maheswari@gmail.com','','087833225300','Kerang','2','pokoke1','pokoke1','Mr.','Parjono','','Male','Dosen','dosen@gmail.com','','087833225300','bubur','1','pokoke2','pokoke2','2017-04-18 16:33:34','2017-04-18 16:33:34');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
