# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: chairs
# Generation Time: 2021-03-29 10:44:24 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table chaircollection
# ------------------------------------------------------------

DROP TABLE IF EXISTS `chaircollection`;

CREATE TABLE `chaircollection` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `chairname` varchar(60) NOT NULL DEFAULT '',
  `designer` varchar(60) NOT NULL DEFAULT '',
  `designyear` year(4) NOT NULL,
  `imagelink` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `chaircollection` WRITE;
/*!40000 ALTER TABLE `chaircollection` DISABLE KEYS */;

INSERT INTO `chaircollection` (`id`, `chairname`, `designer`, `designyear`, `imagelink`)
VALUES
	(1,'Tulip Chair','Eero Saarinen','1957','https://upload.wikimedia.org/wikipedia/en/e/e7/Tulip_med.jpg'),
	(2,'LCW Chair','Charles & Ray Eames','1948','https://upload.wikimedia.org/wikipedia/commons/6/60/LCW_%28Lounge_Chair_Wood%29_Chair_by_Charles_and_Ray_Eames%2C_Honolulu_Museum_of_Art_4410.1.JPG'),
	(3,'Navy Chair','Emeco','1944','https://upload.wikimedia.org/wikipedia/commons/e/e9/Emeco_1006_navy_chair.png'),
	(4,'Panton Chair','Verner Panton','1967','https://upload.wikimedia.org/wikipedia/commons/e/e2/Panton_Stuhl.jpg'),
	(5,'Cesca Chair','Marcel Breuer','1925','https://upload.wikimedia.org/wikipedia/commons/4/4a/Breuer_chair_2008.jpg'),
	(6,'Barcelona Chair','Ludwig Mies van der Rohe','1929','https://upload.wikimedia.org/wikipedia/commons/5/59/Ngv_design%2C_ludwig_mies_van_der_rohe_%26_co%2C_barcelona_chair.JPG');

/*!40000 ALTER TABLE `chaircollection` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
