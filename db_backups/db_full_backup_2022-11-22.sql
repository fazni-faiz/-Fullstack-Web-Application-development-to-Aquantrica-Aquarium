-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.30-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for db_aqua
CREATE DATABASE IF NOT EXISTS `db_aqua` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_aqua`;


-- Dumping structure for table db_aqua.logs
CREATE TABLE IF NOT EXISTS `logs` (
  `user_id` varchar(100) NOT NULL,
  `access_code` varchar(150) NOT NULL,
  `user_grp` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='master table for holding logging information for the users\r\n';

-- Dumping data for table db_aqua.logs: ~3 rows (approximately)
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` (`user_id`, `access_code`, `user_grp`) VALUES
	('admin@admin.com', 'admin', 'admin'),
	('nuzrath@aquantrica.com', 'nuzrath', 'admin'),
	('user@user.com', 'user', 'user');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;


-- Dumping structure for table db_aqua.product
CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `stock_bal` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='master table to hold information about the fish that are for sale.\r\n';

-- Dumping data for table db_aqua.product: ~6 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`pid`, `title`, `description`, `price`, `stock_bal`, `picture`) VALUES
	(1, 'Red Comet', 'Very Bright red cute  fish for a reasonable price', 250, 75, 'default.jpg'),
	(3, 'Red Commet', 'Very Bright red cute  fish', 500, 100, 'default.jpg'),
	(4, 'Red Commet', 'Very Bright red cute  fish', 500, 100, 'default.jpg'),
	(5, 'Gold Fish', 'Gold fish types available \r\ndifferent sizes and colors\r\nstarting price is mentioned bellow', 300, 200, 'default.jpg'),
	(6, 'Neon Tetra', 'Blue and Green colors available', 100, 1000, 'default.jpg'),
	(7, 'Koi Carf', 'Awesome colorful fish for your ponds and water garden', 10000, 4, 'default.jpg');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;


-- Dumping structure for table db_aqua.product_archive
CREATE TABLE IF NOT EXISTS `product_archive` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `stock_bal` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='master table to hold information about the fish that are for sale.\r\n';

-- Dumping data for table db_aqua.product_archive: ~0 rows (approximately)
/*!40000 ALTER TABLE `product_archive` DISABLE KEYS */;
INSERT INTO `product_archive` (`pid`, `title`, `description`, `price`, `stock_bal`, `picture`) VALUES
	(2, 'Red Commet', 'Very Bright red cute  fish', 500, 100, 'default.jpg');
/*!40000 ALTER TABLE `product_archive` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
