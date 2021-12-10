-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour bazar
DROP DATABASE IF EXISTS `bazar`;
CREATE DATABASE IF NOT EXISTS `bazar` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bazar`;

-- Listage de la structure de la table bazar. compte
DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `conftoken` varchar(255) NOT NULL,
  `tokenconfirmed` timestamp NULL DEFAULT NULL,
  `roletype` int(11) DEFAULT '2',
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.compte : 17 rows
DELETE FROM `compte`;
/*!40000 ALTER TABLE `compte` DISABLE KEYS */;
INSERT INTO `compte` (`id`, `prenom`, `password`, `conftoken`, `tokenconfirmed`, `roletype`, `email`) VALUES
	(14, 'lorenzo', '$2y$10$OCLilV.opoGfTo02ute.u.ZbF.syqeEAvrhKLDSvOVL0qOFH6UGLW', '0', '2021-12-06 16:15:02', 2, 'Test.28@gmail.com'),
	(13, 'sebastien', '$2y$10$jNByq5z0SXgvBBEyW6/e5uoNAh0pvXvWxiyaG20QFOaoUjTCZf31.', '0', '2021-12-06 16:07:39', 2, 'Test.28@gmail.com'),
	(15, 'wallah', '$2y$10$IQKvSz4oul9.VMFpR9kIj.J.otZLlGjOB0.AGgCXzF7v.h0WShMtW', '0', '2021-12-06 16:22:16', 2, 'Test.28@gmail.com'),
	(12, 'tajines', '$2y$10$ud3yfdCRnblT7RKxO.EBzu7P8I3tlvDCHCsZrHXqjpfZicKMGBogS', '0', '2021-12-06 16:04:28', 2, 'Test.28@gmail.com'),
	(11, 'darras', '$2y$10$xWYxkj.z1PpG.B1sVH6gb.mON8t6Z.VuX0wZRg7NsD0vk2JXyJnlq', '0', '2021-12-06 15:58:08', 2, 'Test.28@gmail.com'),
	(10, 'couscous', '$2y$10$/9rCZJvDQBJZdwLJKFgVmOIu4QPiFm5LEWt6v/gB8HeyF.MJPOF56', '0', '2021-12-06 15:51:43', 2, 'Test.28@gmail.com'),
	(9, 'couscou', '$2y$10$wf4XhT/Um6.063W8vVgs6u2B1DUD02P5jhYzWbGGWLkYIaWXZg31e', '0', '2021-12-06 15:18:19', 2, 'Test.28@gmail.com'),
	(8, 'couscous', '$2y$10$S/2CRWzlQXk0YpacrI0XtebxdpKcGhzULJ5sEv1HRMBNABkSx1nbW', '0', '2021-12-06 14:49:35', 2, 'Test.28@gmail.com'),
	(16, 'paella', '$2y$10$WX0/5Jj7tSpeUgow5lvIU.hsnjvDJL.eRX8t86ogCzi9DjUki50ju', '0', '2021-12-06 16:49:36', 2, 'Test.28@gmail.com'),
	(17, 'titeuf', '$2y$10$XRtshIwUNUL6Ps.NxIjW3OUAaEJZRTdNjm2AQuIz1ExxRoNLTu0pW', '0', '2021-12-07 08:47:09', 2, 'Test.28@gmail.com'),
	(18, 'wazaa', '$2y$10$Mng8SZP.XeSps00lbkCAMOqdde5E3w2VJxNCF5veTeEgSRCGjg9Bm', '0', '2021-12-07 09:04:46', 2, 'Test.28@gmail.com'),
	(19, 'frederic', '$2y$10$EakMO.cgZFHI0LstaPt8peDG.6TMpDMv9eBwXLfq/YjPGATUtN9Di', '0', '2021-12-07 10:50:23', 2, 'Test.28@gmail.com'),
	(20, 'loni', '$2y$10$VGT9ybFhGpShSFu9LZF2WecITVaL.bbVOD3SFScUz9Ry0U7d4JUh6', '0', '2021-12-07 12:11:58', 2, 'Test.28@gmail.com'),
	(21, 'melissa', '$2y$10$loDaV1g9qeC6GBfx7jikwOL3YISCokNRP/xZnJhg5MwYbJu94ofF2', '0', '2021-12-07 17:48:18', 2, 'Test.28@gmail.com'),
	(22, 'squezie', '$2y$10$0pZheN4e9GDAXSXLgJzTh.X3w/R4Qb8l1KRMDsuvv5bEu1bZEouku', '0', '2021-12-08 14:07:12', 2, 'Test.28@gmail.com'),
	(23, 'Kevin', '$2y$10$MX0KIai8A.rfOnlkD/236OfKuRawh16gmPYX0NY7AOKLiXoIQCTUa', '0', '2021-12-08 16:30:25', 2, 'Test.28@gmail.com'),
	(24, 'dylan', '$2y$10$jB9j.TIWytwMYrL1YNHZZ.G6/rghA1q6BRfBkMfOK0cxH3hhf7/RG', '0', '2021-12-09 15:15:22', 2, 'Test.28@gmail.com');
/*!40000 ALTER TABLE `compte` ENABLE KEYS */;

-- Listage de la structure de la table bazar. divers
DROP TABLE IF EXISTS `divers`;
CREATE TABLE IF NOT EXISTS `divers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articles` varchar(250) NOT NULL,
  `prix` float NOT NULL DEFAULT '0',
  `descript` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.divers : 0 rows
DELETE FROM `divers`;
/*!40000 ALTER TABLE `divers` DISABLE KEYS */;
/*!40000 ALTER TABLE `divers` ENABLE KEYS */;

-- Listage de la structure de la table bazar. formulaire
DROP TABLE IF EXISTS `formulaire`;
CREATE TABLE IF NOT EXISTS `formulaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pays` varchar(100) DEFAULT NULL,
  `commentaire` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.formulaire : 17 rows
DELETE FROM `formulaire`;
/*!40000 ALTER TABLE `formulaire` DISABLE KEYS */;
INSERT INTO `formulaire` (`id`, `nom`, `prenom`, `email`, `pays`, `commentaire`) VALUES
	(55, 'tobi', 'toto', 'thomas22751@gmail.com', 'Belgique', 'gfgfgfgfgfgfgfg'),
	(54, 'tobi', 'toto', 'thomas22751@gmail.com', 'Belgique', 'gfgfgfgfgfgfgfg'),
	(53, 'soupe', 'choux', 'soupechoux@gmail.com', 'France', 'bouloubloub'),
	(52, 'soupe', 'choux', 'soupechoux@gmail.com', 'France', 'bouloubloub'),
	(51, 'soupe', 'choux', 'soupechoux@gmail.com', 'France', 'bouloubloub'),
	(50, 'soupe', 'choux', 'soupechoux@gmail.com', 'France', 'bouloubloub'),
	(49, 'soupe', 'choux', 'soupechoux@gmail.com', 'France', 'bouloubloub'),
	(48, 'soupe', 'choux', 'soupechoux@gmail.com', 'France', 'bouloubloub'),
	(47, 'soupe', 'choux', 'soupechoux@gmail.com', 'France', 'bouloubloub'),
	(46, 'soupe', 'choux', 'soupechoux@gmail.com', 'France', 'bouloubloub'),
	(45, 'soupe', 'choux', 'soupechoux@gmail.com', 'France', 'bouloubloub'),
	(44, 'soupe', 'choux', 'soupechoux@gmail.com', 'France', 'bouloubloub'),
	(43, 'soupe', 'choux', 'soupechoux@gmail.com', 'France', 'bouloubloub'),
	(42, 'soupe', 'choux', 'soupechoux@gmail.com', 'France', 'bouloubloub'),
	(41, 'soupe', 'choux', 'soupechoux@gmail.com', 'France', 'bouloubloub'),
	(40, 'soupe', 'choux', 'soupechoux@gmail.com', 'France', 'bouloubloub'),
	(39, 'soupe', 'choux', 'soupechoux@gmail.com', 'France', 'bouloubloub');
/*!40000 ALTER TABLE `formulaire` ENABLE KEYS */;

-- Listage de la structure de la table bazar. nourriture
DROP TABLE IF EXISTS `nourriture`;
CREATE TABLE IF NOT EXISTS `nourriture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articles` varchar(150) NOT NULL,
  `prix` float NOT NULL DEFAULT '0',
  `descript` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.nourriture : 0 rows
DELETE FROM `nourriture`;
/*!40000 ALTER TABLE `nourriture` DISABLE KEYS */;
/*!40000 ALTER TABLE `nourriture` ENABLE KEYS */;

-- Listage de la structure de la table bazar. panier
DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articles` varchar(150) DEFAULT NULL,
  `prix` float NOT NULL DEFAULT '0',
  `image` blob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.panier : 0 rows
DELETE FROM `panier`;
/*!40000 ALTER TABLE `panier` DISABLE KEYS */;
/*!40000 ALTER TABLE `panier` ENABLE KEYS */;

-- Listage de la structure de la table bazar. test
DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Colonne 2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.test : ~0 rows (environ)
DELETE FROM `test`;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
/*!40000 ALTER TABLE `test` ENABLE KEYS */;

-- Listage de la structure de la table bazar. users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `cle` int(11) NOT NULL,
  `confirme` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.users : 12 rows
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `cle`, `confirme`) VALUES
	(1, 'thomas22751@gmail.com', 4087664, 0),
	(2, 'thomas22751@gmail.com', 3837057, 0),
	(3, 'thomas22751@gmail.com', 4165654, 0),
	(4, 'hajoya1705@hagendes.com', 8173875, 0),
	(5, 'hajoya1705@hagendes.com', 7990826, 0),
	(6, 'hajoya1705@hagendes.com', 8811327, 0),
	(7, 'thomas22751@gmail.com', 7282776, 0),
	(8, 'hajoya1705@hagendes.com', 1404649, 0),
	(9, 'hajoya1705@hagendes.com', 7277638, 0),
	(10, 'hajoya1705@hagendes.com', 5361977, 0),
	(11, 'thomas22751@gmail.com', 8969678, 0),
	(12, 'thomas22751@gmail.com', 1069999, 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Listage de la structure de la table bazar. vetement
DROP TABLE IF EXISTS `vetement`;
CREATE TABLE IF NOT EXISTS `vetement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articles` varchar(230) NOT NULL,
  `prix` float NOT NULL DEFAULT '0',
  `descript` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.vetement : 0 rows
DELETE FROM `vetement`;
/*!40000 ALTER TABLE `vetement` DISABLE KEYS */;
/*!40000 ALTER TABLE `vetement` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
