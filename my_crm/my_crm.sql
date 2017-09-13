-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for my_crm
CREATE DATABASE IF NOT EXISTS `my_crm` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `my_crm`;

-- Dumping structure for table my_crm.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table my_crm.ci_sessions: ~0 rows (approximately)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

-- Dumping structure for table my_crm.customer_details
CREATE TABLE IF NOT EXISTS `customer_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `primary_phoneno` varchar(255) NOT NULL,
  `secondary_phoneno` varchar(255) NOT NULL,
  `tin_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `cst` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table my_crm.customer_details: ~2 rows (approximately)
/*!40000 ALTER TABLE `customer_details` DISABLE KEYS */;
INSERT INTO `customer_details` (`id`, `customer_name`, `email_id`, `location`, `pincode`, `primary_phoneno`, `secondary_phoneno`, `tin_no`, `address`, `contact_person`, `cst`, `status`, `date_created`, `last_updated`) VALUES
	(1, 'Boominathan Elango', 'test@test.om', 'Coimbatore', '623701', '07402121443', '07402121443', 'test', '7/206,Balam New Road,Manjalpattanam,\nEmaneswaram(POST),Paramakudi,', 'ADmin', 'testsetset', '1', '2017-08-28 08:13:31', '2017-08-28 08:13:31');
/*!40000 ALTER TABLE `customer_details` ENABLE KEYS */;

-- Dumping structure for table my_crm.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_login_type` enum('email','facebook') NOT NULL,
  `user_joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_social_id` int(11) NOT NULL,
  `user_profile_pic` text NOT NULL,
  `user_timezone` int(11) NOT NULL,
  `user_language` varchar(100) NOT NULL,
  `user_gender` enum('male','female') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table my_crm.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_password`, `user_login_type`, `user_joining_date`, `user_update_date`, `user_social_id`, `user_profile_pic`, `user_timezone`, `user_language`, `user_gender`) VALUES
	(1, 'test', '', '', 'test', 'email', '2017-08-25 13:59:08', '2017-08-25 13:59:08', 0, '', 0, '', 'male');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
