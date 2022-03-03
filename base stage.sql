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

-- Listage de la structure de la table bazar. commande
DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `article` varchar(50) DEFAULT NULL,
  `taille` varchar(50) DEFAULT NULL,
  `couleur` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.commande : ~26 rows (environ)
/*!40000 ALTER TABLE `commande` DISABLE KEYS */;
INSERT INTO `commande` (`id`, `nom`, `prenom`, `article`, `taille`, `couleur`, `nombre`) VALUES
	(1, 'darras', 'thomas', 'Suisse', 'on', NULL, NULL),
	(2, 'darras', 'thomas', 'Suisse', 'on', NULL, NULL),
	(3, 'darras', 'thomas', 'Suisse', 'on', NULL, NULL),
	(4, 'darras', 'thomas', 'Suisse', 'on', 'on', NULL),
	(5, 'darras', 'thomas', 'Suisse', 'on', 'on', NULL),
	(6, 'darras', 'thomas', 'couscous', 'on', 'on', NULL),
	(7, 'darras', 'thomas', 'couscous', 'on', 'on', NULL),
	(8, 'darras', 'thomas', 'couscous', 'on', 'on', NULL),
	(9, 'darras', 'thomas', 'couscous', NULL, 'on', NULL),
	(10, 'darras', 'thomas', 'couscous', NULL, 'on', NULL),
	(11, 'darras', 'thomas', 'couscous', NULL, 'on', NULL),
	(12, 'darras', 'thomas', 'couscous', NULL, 'on', NULL),
	(13, 'darras', 'thomas', 'couscous', NULL, 'on', NULL),
	(14, 'darras', 'thomas', 'couscous', 'on', 'on', NULL),
	(15, 'darras', 'thomas', 'couscous', 'on', 'on', NULL),
	(16, 'darras', 'thomas', 'couscous', 'on', 'on', NULL),
	(17, 'darras', 'thomas', 'couscous', 'on', 'on', NULL),
	(18, 'darras', 'thomas', 'couscous', 'on', 'on', NULL),
	(19, 'darras', 'thomas', 'Hongrie', NULL, 'on', NULL),
	(20, 'darras', 'thomas', 'Hongrie', NULL, 'on', NULL),
	(21, 'darras', 'thomas', 'Hongrie', NULL, 'on', NULL),
	(22, 'darras', 'thomas', 'Hongrie', NULL, 'on', NULL),
	(23, 'darras', 'thomas', 'Hongrie', NULL, 'on', NULL),
	(24, 'darras', 'thomas', 'Hongrie', NULL, 'on', NULL),
	(25, 'darras', 'thomas', 'main de fatma', NULL, 'bleu', NULL),
	(26, 'darras', 'thomas', 'main de fatma', NULL, 'bleu', NULL),
	(27, 'darras', 'thomas', 'main de fatma', NULL, 'bleu', NULL),
	(28, 'darras', 'thomas', 'main de fatma', NULL, 'bleu', NULL),
	(29, 'ponchel', 'melissa', 'harissa', NULL, 'jaune', NULL);
/*!40000 ALTER TABLE `commande` ENABLE KEYS */;

-- Listage de la structure de la table bazar. commande2
DROP TABLE IF EXISTS `commande2`;
CREATE TABLE IF NOT EXISTS `commande2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `article` varchar(50) DEFAULT NULL,
  `taille` varchar(50) DEFAULT NULL,
  `couleur` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.commande2 : ~8 rows (environ)
/*!40000 ALTER TABLE `commande2` DISABLE KEYS */;
INSERT INTO `commande2` (`id`, `nom`, `prenom`, `article`, `taille`, `couleur`, `nombre`) VALUES
	(1, 'darras', 'thomas', 'couscous', NULL, 'on', NULL),
	(2, 'darras', 'thomas', 'couscous', NULL, 'on', NULL),
	(3, 'darras', 'thomas', 'couscous', NULL, 'on', NULL),
	(4, 'darras', 'thomas', 'France', NULL, 'on', NULL),
	(5, 'darras', 'thomas', 'couscous', NULL, 'on', NULL),
	(6, 'darras', 'thomas', 'couscous', NULL, 'on', NULL),
	(7, 'darras', 'thomas', 'couscous', NULL, 'on', NULL),
	(8, 'darras', 'thomas', 'couscous', NULL, 'on', NULL),
	(9, 'darras', 'thomas', 'turban', NULL, 'rouge', NULL),
	(10, 'darras', 'thomas', 'costume orientale', NULL, 'rouge', NULL);
/*!40000 ALTER TABLE `commande2` ENABLE KEYS */;

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
  `nom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.compte : 48 rows
/*!40000 ALTER TABLE `compte` DISABLE KEYS */;
INSERT INTO `compte` (`id`, `prenom`, `password`, `conftoken`, `tokenconfirmed`, `roletype`, `email`, `nom`) VALUES
	(14, 'lorenzo', '$2y$10$OCLilV.opoGfTo02ute.u.ZbF.syqeEAvrhKLDSvOVL0qOFH6UGLW', '0', '2021-12-06 16:15:02', 2, 'Test.28@gmail.com', NULL),
	(13, 'sebastien', '$2y$10$jNByq5z0SXgvBBEyW6/e5uoNAh0pvXvWxiyaG20QFOaoUjTCZf31.', '0', '2021-12-06 16:07:39', 2, 'Test.28@gmail.com', NULL),
	(15, 'wallah', '$2y$10$IQKvSz4oul9.VMFpR9kIj.J.otZLlGjOB0.AGgCXzF7v.h0WShMtW', '0', '2021-12-06 16:22:16', 2, 'Test.28@gmail.com', NULL),
	(12, 'tajines', '$2y$10$ud3yfdCRnblT7RKxO.EBzu7P8I3tlvDCHCsZrHXqjpfZicKMGBogS', '0', '2021-12-06 16:04:28', 2, 'Test.28@gmail.com', NULL),
	(11, 'darras', '$2y$10$xWYxkj.z1PpG.B1sVH6gb.mON8t6Z.VuX0wZRg7NsD0vk2JXyJnlq', '0', '2021-12-06 15:58:08', 2, 'Test.28@gmail.com', NULL),
	(10, 'couscous', '$2y$10$/9rCZJvDQBJZdwLJKFgVmOIu4QPiFm5LEWt6v/gB8HeyF.MJPOF56', '0', '2021-12-06 15:51:43', 2, 'Test.28@gmail.com', NULL),
	(9, 'couscou', '$2y$10$wf4XhT/Um6.063W8vVgs6u2B1DUD02P5jhYzWbGGWLkYIaWXZg31e', '0', '2021-12-06 15:18:19', 2, 'Test.28@gmail.com', NULL),
	(8, 'couscous', '$2y$10$S/2CRWzlQXk0YpacrI0XtebxdpKcGhzULJ5sEv1HRMBNABkSx1nbW', '0', '2021-12-06 14:49:35', 2, 'Test.28@gmail.com', NULL),
	(16, 'paella', '$2y$10$WX0/5Jj7tSpeUgow5lvIU.hsnjvDJL.eRX8t86ogCzi9DjUki50ju', '0', '2021-12-06 16:49:36', 2, 'Test.28@gmail.com', NULL),
	(17, 'titeuf', '$2y$10$XRtshIwUNUL6Ps.NxIjW3OUAaEJZRTdNjm2AQuIz1ExxRoNLTu0pW', '0', '2021-12-07 08:47:09', 2, 'Test.28@gmail.com', NULL),
	(18, 'wazaa', '$2y$10$Mng8SZP.XeSps00lbkCAMOqdde5E3w2VJxNCF5veTeEgSRCGjg9Bm', '0', '2021-12-07 09:04:46', 2, 'Test.28@gmail.com', NULL),
	(19, 'frederic', '$2y$10$EakMO.cgZFHI0LstaPt8peDG.6TMpDMv9eBwXLfq/YjPGATUtN9Di', '0', '2021-12-07 10:50:23', 2, 'Test.28@gmail.com', NULL),
	(20, 'loni', '$2y$10$VGT9ybFhGpShSFu9LZF2WecITVaL.bbVOD3SFScUz9Ry0U7d4JUh6', '0', '2021-12-07 12:11:58', 2, 'Test.28@gmail.com', NULL),
	(21, 'melissa', '$2y$10$loDaV1g9qeC6GBfx7jikwOL3YISCokNRP/xZnJhg5MwYbJu94ofF2', '0', '2021-12-07 17:48:18', 2, 'Test.28@gmail.com', NULL),
	(22, 'squezie', '$2y$10$0pZheN4e9GDAXSXLgJzTh.X3w/R4Qb8l1KRMDsuvv5bEu1bZEouku', '0', '2021-12-08 14:07:12', 2, 'Test.28@gmail.com', NULL),
	(23, 'Kevin', '$2y$10$MX0KIai8A.rfOnlkD/236OfKuRawh16gmPYX0NY7AOKLiXoIQCTUa', '0', '2021-12-08 16:30:25', 2, 'Test.28@gmail.com', NULL),
	(24, 'dylan', '$2y$10$jB9j.TIWytwMYrL1YNHZZ.G6/rghA1q6BRfBkMfOK0cxH3hhf7/RG', '0', '2021-12-09 15:15:22', 2, 'Test.28@gmail.com', NULL),
	(25, 'fred', '$2y$10$8C.9sbs.hrWBj0qLEZ8LteAWt3AhenKLRE1zEQAxEYq4SfdsqfqZq', '0', '2022-01-05 15:26:45', 2, 'Test.28@gmail.com', NULL),
	(26, 'Thomas', '$2y$10$8BYqm0u45/OTTlZ4rEoWXukiUyqlaSS6ChsSHuAx6ThRlQgN5Poqu', '0', '2022-02-10 17:46:34', 2, 'Test.28@gmail.com', NULL),
	(27, 'Thomas', '$2y$10$vFlqqCADKv3wJzIkuCWIi.q8hrxIlNq8KTuqLUsmpwEckPBHGRViC', '0', '2022-02-10 17:49:26', 2, 'Test.28@gmail.com', NULL),
	(28, 'melissa', '$2y$10$O/.GbJBUOwYGownMIUziTemvF8dJupSlKZercqE3UJJ30TfGvyhki', '0', '2022-02-11 09:57:00', 2, 'Test.28@gmail.com', NULL),
	(29, 'melissa', '$2y$10$TY5gAQgIgqMTeMnL3CIm9etzzfpNb2nM5R.Aep.KGWBcdt/VeCIfy', '0', '2022-02-11 09:57:35', 2, 'Test.28@gmail.com', NULL),
	(30, 'paulux', '$2y$10$mgSrf1Qogw01ujAOpF8rAO7jVqH2IcC2wSZDBFRcetP06HWKA0E3K', '0', '2022-02-11 10:46:44', 2, 'Test.28@gmail.com', NULL),
	(31, 'paulux', '$2y$10$fGCR0EdW55/ZararaTpGZueXDQx5jigNzcDQyHHrvvxWqlROiG4Uu', '0', '2022-02-11 10:47:23', 2, 'Test.28@gmail.com', NULL),
	(32, 'paulux', '$2y$10$ZHSjFTmNsUL/KXhmfwp5OOxkacTQ37Ap7gvjWZkdxfZEdX9LeYZBu', '0', '2022-02-11 10:47:30', 2, 'Test.28@gmail.com', NULL),
	(33, 'thomas', '$2y$10$4iR2TInD9SwyaXep37paiuERN8MoXID0m8kF/jVlPj8FU81LXb44m', '0', '2022-02-11 11:57:05', 2, 'Thomas22@gmail.com', NULL),
	(34, 'mickey', '$2y$10$gh.WS5gaSXNgTtIt0gqJROGeMQAi6Jgxb4DfxGSXiVl2b8RT5XMLK', '0', '2022-02-11 12:15:55', 2, 'Thomas22@gmail.com', NULL),
	(35, 'mickey', '$2y$10$O1wya45YQsLgzPrgp./NW.wQnPqCpNogJ7A2tyovsSRG9tfcbUfa6', '0', '2022-02-11 12:16:57', 2, 'Thomas22@gmail.com', NULL),
	(36, 'mickeyy', '$2y$10$tUaMUqF0dx4CKUK0d18C0OeAZ1jHipVUWJQ.L0ldy2YQ7Lf7xm1yC', '0', '2022-02-11 12:17:57', 2, 'Thomas22@gmail.com', NULL),
	(37, 'mickeyyy', '$2y$10$2E0Gi3LcB6.qSAq0F7NLfO6hOP5QivhtqTXDK8PGW0uNWOa50AQLm', '0', '2022-02-11 12:19:05', 2, 'Thomas22@gmail.com', NULL),
	(38, 'mickeyyyy', '$2y$10$1y18IsFkBbrEBqSIcZfd6OEwbUgCDxkmO4zyyIGajP9Y1JO5OSSgC', '0', '2022-02-11 12:19:50', 2, 'Thomas22@gmail.com', NULL),
	(39, 'mickeyyyyd', '$2y$10$5UW8GLre0SJlZAjsxk8fo.88s1VzxHN.xu.jxRaobsapRT73mp/m.', '0', '2022-02-11 12:20:28', 2, 'Thomas22@gmail.com', NULL),
	(40, 'mickeyyyydd', '$2y$10$WCcwkNCxaIMbCvx7fqi.luH0oUupBCfH78fblrwHBl9Yt5drA6Nka', '0', '2022-02-11 12:23:18', 2, 'Thomas22@gmail.com', NULL),
	(41, 'mickeyyyyddo', '$2y$10$rKwJZ/6KoTVjlVdd6BQj0.A4Y/h3y5UDoSzteUcj1i01A0Gizi7Ai', '0', '2022-02-11 12:25:07', 2, 'Thomas22@gmail.com', NULL),
	(42, 'mickeyyyyddoooo', '$2y$10$0XGHk3Z70vAe1sF53t8O.echo8DqR1vAYhZPCxxAqW61yMLYmEbY6', '0', '2022-02-11 12:26:21', 3, 'Thomas22@gmail.com', NULL),
	(43, 'mickeyyyyddoooo', '$2y$10$UakWNBYufa.Bi0syxiBFZu/2CYH8L4aT2lz1mpCUB5wMJ6TfGTYKW', '0', '2022-02-11 12:28:49', 2, 'Thomas22@gmail.com', NULL),
	(44, 'mickeyyyyddoooo', '$2y$10$o/38a7C/6furigUz3hl6weRts/aFYPW.fhS4dF3niZYUFhJdQyVO.', '0', '2022-02-11 12:29:53', NULL, 'Thomas22@gmail.com', NULL),
	(45, 'mickeyyyyddoooop', '$2y$10$jHrOBBaZDrUqdveiJE73zuNcgn6JF/yRrlJsa24YYCWtd76JkuYEW', '0', '2022-02-11 12:33:14', 2, 'Thomas22@gmail.com', NULL),
	(46, 'mickeyy', '$2y$10$kPXqTXJb8d.vJ3p0/Z9rmOUTESzWs63YtdHBuoyuuWhlU60uRyLVC', '0', '2022-02-11 13:19:33', 2, 'Thomas22@gmail.com', NULL),
	(47, 'Thomas', '$2y$10$Maoihwt0JmlvKN2tvLw/W.D0xltH3JkW5ONrpzrLllhqbm4P8Xj/.', '0', '2022-02-11 16:14:14', 2, 'Thomas22@gmail.com', NULL),
	(48, 'macouille', '$2y$10$uhArhO4jKFQ/wJFvo1NS5uTX3CvALQyX3P44KX2kzNfp4dU5WZY.K', '0', '2022-02-11 17:04:20', 2, 'Thomas22@gmail.com', NULL),
	(49, 'Thomas', '$2y$10$yaUE04F1PYmhNaXaPp9WPOuKl/qUi06Vihw887byrWER1d3heQZSO', '0', '2022-02-11 17:09:58', 2, 'Thomas22@gmail.com', NULL),
	(50, 'Thomas', '$2y$10$5sp3uRfqFJ3c4fqpS3hmT.RANy1qRFDxp/3uP.RZgqA.98iNdgq4G', '0', '2022-02-11 17:11:26', 2, 'Thomas22@gmail.com', NULL),
	(51, 'Thomas', '$2y$10$iDR1h.JPjO27lTW2y64XV.Zt55/we6rlP3pGnvyDeCto14eZ7iihy', '0', '2022-02-11 17:14:45', 2, 'Thomas22@gmail.com', NULL),
	(52, 'Titouf', '$2y$10$X5EbZPYzC5cCmpoyNaIog.8Y4rA03bzOMZUFHkTYTxWyjI3NqlGTW', '0', '2022-02-11 17:15:26', 2, 'Thomas22@gmail.com', NULL),
	(53, 'Thomas', '$2y$10$OXKsIuU9qjY3InNNjG.5U.L7RdF7JiRsRQ3ottEMdLB.37Kaw.AJq', '0', '2022-02-21 12:19:38', 2, 'Thomas22@gmail.com', NULL),
	(54, 'Thomas', '$2y$10$.9hFBQQwMNwIbUXDzW3G9uPGaHjqOv4RsvG9iQ1slD0.ICx5q9RPq', '0', '2022-02-21 13:20:35', 2, 'Thomas22@gmail.com', NULL),
	(55, 'Thomas', '$2y$10$l7B9C49MWcOe0vKlW/Xtde8uNHemBp0rH5Nn73f88mzDj9GHar2tm', '0', '2022-03-01 12:04:27', 2, 'Thomas22@gmail.com', NULL);
/*!40000 ALTER TABLE `compte` ENABLE KEYS */;

-- Listage de la structure de la table bazar. divers
DROP TABLE IF EXISTS `divers`;
CREATE TABLE IF NOT EXISTS `divers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articles` varchar(250) NOT NULL,
  `prix` float NOT NULL DEFAULT '0',
  `image` text,
  `lien` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.divers : 6 rows
/*!40000 ALTER TABLE `divers` DISABLE KEYS */;
INSERT INTO `divers` (`id`, `articles`, `prix`, `image`, `lien`) VALUES
	(1, 'Chicha', 65.3, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Chicha%201.jpg', 'http://localhost/heckle-jeckle/compte/chicha.php'),
	(2, 'Tapis', 56.2, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Tapis%201.jpg', 'http://localhost/heckle-jeckle/compte/tapis.php'),
	(3, 'Lampe', 920.5, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Lampe%201.jpg', 'http://localhost/heckle-jeckle/compte/lampe.php'),
	(4, 'Ensemble de thé', 12.96, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Ensemble%20Th%C3%A9%201.jpg', 'http://localhost/heckle-jeckle/compte/ensemble%20th%C3%A9.php'),
	(5, 'Couscoussier', 80.5, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Couscoussier%201.jpg', 'http://localhost/heckle-jeckle/compte/couscoussiers.php'),
	(6, 'Service de Table', 150.8, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Service%20de%20Table%201.jpg', 'http://localhost/heckle-jeckle/compte/service%20table.php');
/*!40000 ALTER TABLE `divers` ENABLE KEYS */;

-- Listage de la structure de la table bazar. divers2
DROP TABLE IF EXISTS `divers2`;
CREATE TABLE IF NOT EXISTS `divers2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articles` varchar(250) DEFAULT NULL,
  `prix` float DEFAULT '0',
  `image` text,
  `lien` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.divers2 : ~6 rows (environ)
/*!40000 ALTER TABLE `divers2` DISABLE KEYS */;
INSERT INTO `divers2` (`id`, `articles`, `prix`, `image`, `lien`) VALUES
	(1, 'Chicha', 65.3, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Chicha%201.jpg', 'http://localhost/heckle-jeckle/Article/Chicha.php'),
	(2, 'Tapis', 56.2, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Tapis%201.jpg', 'http://localhost/heckle-jeckle/Article/Tapis.php'),
	(3, 'Lampe', 920.5, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Lampe%201.jpg', 'http://localhost/heckle-jeckle/Article/Lampe.php'),
	(4, 'Ensemble de thé', 12.96, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Ensemble%20Th%C3%A9%201.jpg', 'http://localhost/heckle-jeckle/Article/Ensemble%20de%20Th%c3%a9.php'),
	(5, 'Couscoussier', 80.5, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Couscoussier%201.jpg', 'http://localhost/heckle-jeckle/Article/Couscoussier.php'),
	(6, 'Service de Table', 150.8, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Service%20de%20Table%201.jpg', 'http://localhost/heckle-jeckle/Article/Service%20de%20Table.php');
/*!40000 ALTER TABLE `divers2` ENABLE KEYS */;

-- Listage de la structure de la table bazar. formulaire
DROP TABLE IF EXISTS `formulaire`;
CREATE TABLE IF NOT EXISTS `formulaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `pays` varchar(100) DEFAULT NULL,
  `commentaire` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.formulaire : 18 rows
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
	(39, 'soupe', 'choux', 'soupechoux@gmail.com', 'France', 'bouloubloub'),
	(56, 'darras', 'thommmasasa', 'thomas22751@gmail.com', 'allemagne', 'fgfdgfdgdfg');
/*!40000 ALTER TABLE `formulaire` ENABLE KEYS */;

-- Listage de la structure de la table bazar. formulaire2
DROP TABLE IF EXISTS `formulaire2`;
CREATE TABLE IF NOT EXISTS `formulaire2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pays` varchar(20) DEFAULT NULL,
  `commentaire` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.formulaire2 : ~0 rows (environ)
/*!40000 ALTER TABLE `formulaire2` DISABLE KEYS */;
INSERT INTO `formulaire2` (`id`, `nom`, `prenom`, `email`, `pays`, `commentaire`) VALUES
	(1, 'darras', 'thomas', 'thomas22751@gmail.com', 'Suisse', 'fddfgfdg');
/*!40000 ALTER TABLE `formulaire2` ENABLE KEYS */;

-- Listage de la structure de la table bazar. nourriture
DROP TABLE IF EXISTS `nourriture`;
CREATE TABLE IF NOT EXISTS `nourriture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articles` varchar(150) DEFAULT NULL,
  `prix` float NOT NULL DEFAULT '0',
  `image` text,
  `lien` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.nourriture : 6 rows
/*!40000 ALTER TABLE `nourriture` DISABLE KEYS */;
INSERT INTO `nourriture` (`id`, `articles`, `prix`, `image`, `lien`) VALUES
	(1, 'couscous', 3.25, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Couscous%201.jpg', 'http://localhost/heckle-jeckle/compte/couscous.php'),
	(2, 'Masala', 2.81, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Masala%201.jpg', 'http://localhost/heckle-jeckle/compte/massala.php'),
	(3, 'Dattes', 1.5, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Dattes%201.jpg', 'http://localhost/heckle-jeckle/compte/dattes.php'),
	(4, 'Café', 1.8, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Caf%C3%A9%201.jpg', 'http://localhost/heckle-jeckle/compte/caf%C3%A9.php'),
	(5, 'Thé', 1.76, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Th%C3%A9%201.jpg', 'http://localhost/heckle-jeckle/compte/th%C3%A9.php'),
	(6, 'Harissa', 3.3, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Harissa%201.jpg', 'http://localhost/heckle-jeckle/compte/harissa.php');
/*!40000 ALTER TABLE `nourriture` ENABLE KEYS */;

-- Listage de la structure de la table bazar. nourriture2
DROP TABLE IF EXISTS `nourriture2`;
CREATE TABLE IF NOT EXISTS `nourriture2` (
  `id` int(11) NOT NULL,
  `articles` varchar(250) DEFAULT NULL,
  `prix` float DEFAULT '0',
  `image` text,
  `lien` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.nourriture2 : ~6 rows (environ)
/*!40000 ALTER TABLE `nourriture2` DISABLE KEYS */;
INSERT INTO `nourriture2` (`id`, `articles`, `prix`, `image`, `lien`) VALUES
	(1, 'Couscous', 3.25, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Couscous%201.jpg', 'http://localhost/heckle-jeckle/Article/Couscous.php'),
	(2, 'Masala', 2.81, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Masala%201.jpg', 'http://localhost/heckle-jeckle/Article/Massala.php'),
	(3, 'Dattes', 1.5, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Dattes%201.jpg', 'http://localhost/heckle-jeckle/Article/Dattes.php'),
	(4, 'Café', 1.8, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Caf%C3%A9%201.jpg', 'http://localhost/heckle-jeckle/Article/Caf%c3%a9.php'),
	(5, 'Thé', 1.76, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Th%C3%A9%201.jpg', 'http://localhost/heckle-jeckle/Article/Th%c3%a9.php'),
	(6, 'Harissa', 3.3, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Harissa%201.jpg', 'http://localhost/heckle-jeckle/Article/Harissa.php');
/*!40000 ALTER TABLE `nourriture2` ENABLE KEYS */;

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
/*!40000 ALTER TABLE `panier` DISABLE KEYS */;
/*!40000 ALTER TABLE `panier` ENABLE KEYS */;

-- Listage de la structure de la table bazar. users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `cle` int(11) NOT NULL,
  `confirme` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.users : 0 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Listage de la structure de la table bazar. vetement
DROP TABLE IF EXISTS `vetement`;
CREATE TABLE IF NOT EXISTS `vetement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articles` varchar(230) NOT NULL,
  `prix` float NOT NULL DEFAULT '0',
  `image` text,
  `lien` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.vetement : 6 rows
/*!40000 ALTER TABLE `vetement` DISABLE KEYS */;
INSERT INTO `vetement` (`id`, `articles`, `prix`, `image`, `lien`) VALUES
	(1, 'Turban', 21.9, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Turban%201.jpg', 'http://localhost/heckle-jeckle/compte/turban.php'),
	(2, 'Costumes danse orientale', 128.31, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Danseuse%201.jpg', 'http://localhost/heckle-jeckle/compte/costumes.php'),
	(3, 'Babouche', 15.26, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Babouche%201.jpg', 'http://localhost/heckle-jeckle/compte/babouche.php'),
	(4, 'Main de Fatma', 75.5, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Fatma%201.jpg', 'http://localhost/heckle-jeckle/compte/fatma.php'),
	(5, 'Kaftan', 65.8, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Kaftan%201.jpg', 'http://localhost/heckle-jeckle/compte/kaftan.php'),
	(6, 'Boucle d\'oreille', 11.8, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Boucle%201.jpg', 'http://localhost/heckle-jeckle/compte/oreille.php');
/*!40000 ALTER TABLE `vetement` ENABLE KEYS */;

-- Listage de la structure de la table bazar. vetements2
DROP TABLE IF EXISTS `vetements2`;
CREATE TABLE IF NOT EXISTS `vetements2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articles` varchar(250) NOT NULL,
  `prix` float NOT NULL DEFAULT '0',
  `image` text,
  `lien` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Listage des données de la table bazar.vetements2 : ~5 rows (environ)
/*!40000 ALTER TABLE `vetements2` DISABLE KEYS */;
INSERT INTO `vetements2` (`id`, `articles`, `prix`, `image`, `lien`) VALUES
	(1, 'Turban', 21.9, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Turban%201.jpg', 'http://localhost/heckle-jeckle/Article/Turban.php'),
	(2, 'Costumes danse orientale', 128.31, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Danseuse%201.jpg', 'http://localhost/heckle-jeckle/Article/Ensemble%20Danseuse.php'),
	(3, 'Babouche', 15.26, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Babouche%201.jpg', 'http://localhost/heckle-jeckle/Article/Babouche.php'),
	(4, 'Main de Fatma', 75.5, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Fatma%201.jpg', 'http://localhost/heckle-jeckle/Article/Main%20de%20Fatma.php'),
	(5, 'Kaftan', 65.8, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Kaftan%201.jpg', 'http://localhost/heckle-jeckle/Article/Kaftan.php'),
	(6, 'Boucle d\'oreille', 11.8, 'http://localhost/heckle-jeckle/IMAGES/ARTICLES/Boucle%201.jpg', 'http://localhost/heckle-jeckle/Article/Boucle%20d\'oreille.php');
/*!40000 ALTER TABLE `vetements2` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
